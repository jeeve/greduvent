<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Suivi animé de trace GPX (Satellite)</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.js'></script>
    <style>
        body { margin: 0; padding: 0; font-family: sans-serif; }
        #map { position: absolute; top: 60px; bottom: 0; width: 100%; } /* Un peu plus d'espace pour les boutons */
        .controls {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1;
            background: rgba(255, 255, 255, 0.9); /* Fond légèrement transparent */
            padding: 8px 12px;
            border-radius: 4px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.3);
            display: flex; /* Pour aligner les boutons */
            gap: 10px; /* Espace entre les boutons */
        }
        .controls button {
             padding: 8px 15px;
             cursor: pointer;
             border: 1px solid #ccc;
             border-radius: 3px;
         }
         .controls button:disabled {
             cursor: not-allowed;
             opacity: 0.5;
         }
         /* Style pour le marqueur animé */
        .moving-marker {
            width: 16px; 
            height: 16px;
            background-color: #e63946;
            border-radius: 50%;
            border: 2px solid white;
            box-shadow: 0 0 8px rgba(0,0,0,0.6);
        }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; } /* Pour s'assurer que la carte prend tout l'espace */
    </style>
</head>
<body>

    <div class="controls">
        <button id="runButton">Run Simulation</button>
        <button id="stopButton">Stop</button>
    </div>
    <div id='map'></div>

<script>

mapboxgl.accessToken = 'sk.eyJ1IjoiamVldmUiLCJhIjoiY21hM3g1NDZyMDEzaTJrc2JrbTBpZ3I4aCJ9.blvIQykLjltkeneJB30wsw'; 

const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/satellite-streets-v12', // Vue Satellite
    center: [2, 46],
    zoom: 5,
    pitch: 45,
    bearing: 0
});

map.addControl(new mapboxgl.NavigationControl());

// --- Variables globales ---
let trackCoordinates = [];          // Coordonnées complètes
let animationFrameId = null;
let currentPointIndex = 0;
let movingMarker = null;
const animationSpeedFactor = 1;     // Vitesse (points sautés)
let currentMapBearing = 0;

// --- Éléments DOM ---
const runButton = document.getElementById('runButton');
const stopButton = document.getElementById('stopButton');

// --- Marqueur personnalisé ---
const markerElement = document.createElement('div');
markerElement.className = 'moving-marker';

// --- Fonctions utilitaires (calculateBearing, shortestAngleDiff, lerp - inchangées) ---
function calculateBearing(startCoord, endCoord) { /* ... (code précédent) ... */
    const lon1 = startCoord[0] * Math.PI / 180, lat1 = startCoord[1] * Math.PI / 180;
    const lon2 = endCoord[0] * Math.PI / 180, lat2 = endCoord[1] * Math.PI / 180;
    const y = Math.sin(lon2 - lon1) * Math.cos(lat2);
    const x = Math.cos(lat1) * Math.sin(lat2) - Math.sin(lat1) * Math.cos(lat2) * Math.cos(lon2 - lon1);
    let brng = Math.atan2(y, x) * 180 / Math.PI;
    return (brng + 360) % 360;
}
function shortestAngleDiff(a1, a2) { /* ... (code précédent) ... */
    let diff = a2 - a1;
    while (diff <= -180) diff += 360;
    while (diff > 180) diff -= 360;
    return diff;
}
function lerp(start, end, amount) { /* ... (code précédent) ... */
    return start + amount * (end - start);
}
// --- Fin Fonctions utilitaires ---


// --- Fonction d'animation ---
function animateTrack() {
    // S'assurer que l'index ne dépasse pas (important pour le dessin de ligne)
    let safeIndex = Math.min(currentPointIndex, trackCoordinates.length - 1);

    if (safeIndex >= trackCoordinates.length - 1) {
        console.log("Animation terminée.");
        // Dessiner le dernier segment explicitement
         updateProgressLine(trackCoordinates); // Afficher la trace complète à la fin
        stopAnimation();
        return;
    }

    // Point de départ et d'arrivée pour ce segment
    const startPoint = trackCoordinates[safeIndex];
    const endPoint = trackCoordinates[safeIndex + 1];

    // --- Lissage de l'orientation (même logique qu'avant) ---
    let targetBearing = calculateBearing(startPoint, endPoint);
     if ( (Math.abs(startPoint[0] - endPoint[0]) < 0.00005 && Math.abs(startPoint[1] - endPoint[1]) < 0.00005) && safeIndex < trackCoordinates.length - 5 ) {
         let furtherPoint = trackCoordinates[safeIndex + 5];
         targetBearing = calculateBearing(startPoint, furtherPoint);
    }
    const angleDifference = shortestAngleDiff(currentMapBearing, targetBearing);
    const smoothedBearing = currentMapBearing + angleDifference * 0.1; // Lissage plus doux
    currentMapBearing = smoothedBearing;

    // Mettre à jour la position du marqueur
    if (!movingMarker) {
        movingMarker = new mapboxgl.Marker(markerElement).setLngLat(startPoint).addTo(map);
    } else {
        movingMarker.setLngLat(startPoint);
    }

    // --- Mettre à jour la ligne de progression ---
    // Prend tous les points depuis le début jusqu'à l'index actuel (+1 pour inclure le point courant)
    const progressCoordinates = trackCoordinates.slice(0, safeIndex + 1);
    updateProgressLine(progressCoordinates);


    // Animer la caméra (easeTo)
    map.easeTo({
        center: startPoint,
        zoom: 14,
        pitch: 65,
        bearing: currentMapBearing,
        duration: 500, // Ajustez si besoin
        easing: t => t
    });

    // Passer au point suivant
    currentPointIndex += animationSpeedFactor; // Note: on utilise currentPointIndex ici pour la vitesse

    // Demander la prochaine frame
    animationFrameId = requestAnimationFrame(animateTrack);
}

// --- Nouvelle fonction pour mettre à jour les données de la ligne de progression ---
function updateProgressLine(coordinates) {
     const progressSource = map.getSource('route-progress-source');
     if (progressSource && coordinates && coordinates.length > 0) {
         const geojson = {
             type: 'Feature',
             properties: {},
             geometry: {
                 type: 'LineString',
                 coordinates: coordinates // Coordonnées jusqu'au point actuel
             }
         };
         progressSource.setData(geojson);
     } else if (progressSource && (!coordinates || coordinates.length === 0)) {
         // Si pas de coordonnées, vider la source
          progressSource.setData({ type: 'Feature', properties: {}, geometry: { type: 'LineString', coordinates: [] } });
     }
}


// --- Fonction pour arrêter l'animation (mise à jour pour réinitialiser) ---
function stopAnimation() {
    if (animationFrameId) {
        cancelAnimationFrame(animationFrameId);
        animationFrameId = null;
    }
    runButton.disabled = false;
    stopButton.disabled = true;
    runButton.textContent = "Run Simulation";
    console.log("Animation arrêtée.");

    // Optionnel : Réinitialiser la vue à la trace complète à l'arrêt
    // if (trackCoordinates.length > 0) {
    //      const bounds = trackCoordinates.reduce((bounds, coord) => bounds.extend(coord), new mapboxgl.LngLatBounds(trackCoordinates[0], trackCoordinates[0]));
    //      map.fitBounds(bounds, { padding: {top: 80, bottom: 40, left: 40, right: 40}, duration: 1000 });
    // }

     // Laisser la ligne dessinée telle quelle à l'arrêt.
     // Si vous voulez la supprimer à l'arrêt, décommentez :
     // updateProgressLine([]);
     // if (movingMarker) { movingMarker.remove(); movingMarker = null; }
}

// --- Fonction pour charger et préparer la trace (modifiée) ---
async function loadAndDisplayGPX(gpxFilePath) {
    try {
        // --- Chargement et parsing GPX (inchangé) ---
        const response = await fetch(gpxFilePath);
        if (!response.ok) throw new Error(`HTTP error: ${response.status}`);
        const gpxText = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(gpxText, "text/xml");
        let points;
        let getCoordinates;
        const trackpoints = xmlDoc.getElementsByTagName('trkpt');
        const routepoints = xmlDoc.getElementsByTagName('rtept');
         if (trackpoints.length > 0) { points = Array.from(trackpoints); getCoordinates = p => [parseFloat(p.getAttribute('lon')), parseFloat(p.getAttribute('lat'))]; }
         else if (routepoints.length > 0) { points = Array.from(routepoints); getCoordinates = p => [parseFloat(p.getAttribute('lon')), parseFloat(p.getAttribute('lat'))]; }
         else { throw new Error("No <trkpt> or <rtept> points found."); }
        trackCoordinates = points.map(getCoordinates);
        if (trackCoordinates.length < 2) throw new Error("Not enough coordinates.");
        // --- Fin Chargement et parsing ---

        // 1. Ajouter la source pour la ligne de progression (initialement vide)
        map.addSource('route-progress-source', {
            type: 'geojson',
            data: { type: 'Feature', properties: {}, geometry: { type: 'LineString', coordinates: [] } }
        });

        // 2. Ajouter la couche pour la ligne de progression (celle qui sera visible et dessinée)
        map.addLayer({
            id: 'route-progress-line',
            type: 'line',
            source: 'route-progress-source', // Liée à la source de progression
            layout: { 'line-join': 'round', 'line-cap': 'round' },
            paint: {
                'line-color': '#e63946', // Couleur vive pour la trace dessinée
                'line-width': 4,         // Épaisseur
                'line-opacity': 0.9
            }
        });

        // 3. (Optionnel) Ajouter une couche de fond pour la trace complète (très discrète)
         map.addSource('route-full-source', {
            type: 'geojson',
            data: { type: 'Feature', properties: {}, geometry: { type: 'LineString', coordinates: trackCoordinates } }
        });
         map.addLayer({
            id: 'route-full-line-background',
            type: 'line',
            source: 'route-full-source',
            layout: { 'line-join': 'round', 'line-cap': 'round' },
            paint: {
                'line-color': '#ffffff', // Blanc ou gris clair
                'line-width': 2,
                'line-opacity': 0.2,   // Très faible opacité
                'line-dasharray': [2, 2] // En pointillé pour la différencier
            }
        }, 'route-progress-line'); // Ajouter cette couche *avant* la ligne de progression


        // Ajuster la vue initiale à la trace complète
        const bounds = trackCoordinates.reduce((bounds, coord) => bounds.extend(coord), new mapboxgl.LngLatBounds(trackCoordinates[0], trackCoordinates[0]));
        map.fitBounds(bounds, { padding: {top: 80, bottom: 40, left: 40, right: 40} });

        // Activer les boutons
        runButton.disabled = false;
        stopButton.disabled = true;

        // Ajouter relief et ciel (inchangé)
        map.addSource('mapbox-dem', { /* ... */ type: 'raster-dem', url: 'mapbox://mapbox.mapbox-terrain-dem-v1', tileSize: 512, maxzoom: 14 });
        map.setTerrain({ 'source': 'mapbox-dem', 'exaggeration': 1.5 });
        map.addLayer({ id: 'sky', type: 'sky', paint: { /* ... */ 'sky-type': 'atmosphere','sky-atmosphere-sun': [0.0, 0.0],'sky-atmosphere-sun-intensity': 15 }});

        // Lancer la simulation automatiquement
        if (trackCoordinates.length > 1) {
            currentPointIndex = 0;
            currentMapBearing = map.getBearing();
            runButton.disabled = true;
            stopButton.disabled = false;
            runButton.textContent = "Running...";
            updateProgressLine([trackCoordinates[0]]);
            if (movingMarker) movingMarker.remove();
            movingMarker = null;
            animateTrack();
        } else {
            alert("La trace n'a pas assez de points pour lancer la simulation.");
        }

    } catch (error) {
        console.error("Error loading/displaying GPX:", error);
        alert("Failed to load GPX track. Check console.");
        runButton.disabled = true; stopButton.disabled = true;
    }
}

// --- Gestionnaires d'événements pour les boutons (modifiés pour réinitialiser la ligne) ---
runButton.addEventListener('click', () => {
    if (!animationFrameId && trackCoordinates.length > 1) {
        currentPointIndex = 0;
        currentMapBearing = map.getBearing();
        runButton.disabled = true;
        stopButton.disabled = false;
        runButton.textContent = "Running...";

        // Réinitialiser la ligne de progression au début
        updateProgressLine([trackCoordinates[0]]); // Commence avec juste le premier point

        if (movingMarker) movingMarker.remove();
        movingMarker = null; // Sera recréé dans animateTrack
        animateTrack();
    } else if (trackCoordinates.length <= 1) {
         alert("La trace n'a pas été chargée ou est trop courte.");
    }
});

stopButton.addEventListener('click', () => {
    stopAnimation();
});

// --- Récupérer l'URL du GPX à partir des paramètres ---
function getGpxUrlFromParams() {
    const params = new URLSearchParams(window.location.search);
    const gpxUrl = params.get('gpx');
    if (!gpxUrl) {
        console.warn("No GPX URL provided in query parameters. Using default.");
        return ''; // URL par défaut
    }
    return gpxUrl;
}

// --- Chargement initial ---
map.on('load', () => {
    runButton.disabled = true; // Désactiver le bouton initialement
    stopButton.disabled = true;
    loadAndDisplayGPX(getGpxUrlFromParams());
});

map.on('error', (e) => console.error("Mapbox error:", e.error));
</script>

</body>
</html>