<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Replay</title>
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
             width: 12px;
             height: 12px;
             background-color: #e63946; /* Couleur du marqueur */
             border-radius: 50%;
             border: 2px solid white;
             box-shadow: 0 0 8px rgba(0,0,0,0.6);
         }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; } /* Pour s'assurer que la carte prend tout l'espace */
    </style>
</head>
<body>

    <div class="controls">
        <button id="runButton">Play</button>
        <button id="stopButton">Stop</button>
    </div>
    <div id='map'></div>

<script>

let trackCenter = null; // Centre de la trace
let cameraBearing = 0; // Angle de rotation de la caméra
const rotationSpeed = 0.1; // Vitesse de rotation en degrés par frame

mapboxgl.accessToken = 'pk.eyJ1IjoiamVldmU5NCIsImEiOiJjbWE0aWdqcGowNmlwMmpzZHBpaGNqemh4In0.uA9Zk9RR2v6NYZbbve4wzw';

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
// Nouvelle structure pour stocker les coordonnées, le temps et la vitesse calculée *vers le point suivant*
let trackData = [];
let animationFrameId = null;
let currentPointIndex = 0;
let movingMarker = null;
const animationSpeedFactor = 1; // Vitesse (points sautés) - Ajustez pour une animation plus rapide ou plus lente
let currentMapBearing = 0; // Inutilisé dans l'animation actuelle avec rotation libre
let maxTrackSpeed = 0; // Pour stocker la vitesse maximale calculée (en km/h)

// --- Éléments DOM ---
const runButton = document.getElementById('runButton');
const stopButton = document.getElementById('stopButton');

// --- Marqueur personnalisé ---
const markerElement = document.createElement('div');
markerElement.className = 'moving-marker';

// --- Pas besoin de calculateDistance ici, on utilisera distanceTo() directement ---


// --- Fonction d'animation ---
function animateTrack() {
    // safeIndex pointe vers le point de *départ* du segment en cours de traitement/affichage
    let safeIndex = Math.min(currentPointIndex, trackData.length - 1);

    // Si l'index atteint la fin de la trace, arrêter l'animation
    if (safeIndex >= trackData.length - 1) {
        console.log("Animation terminée.");
        // Assurez-vous que le dernier segment est dessiné
        updateProgressLine(trackData.length - 1); // Dessine jusqu'à l'avant-dernier point (segment final)
        stopAnimation();
        return;
    }

    // Point de départ du segment actuel
    const startPointData = trackData[safeIndex];
    const startCoord = startPointData.coord;

    // Mettre à jour la position du marqueur
    if (!movingMarker) {
        movingMarker = new mapboxgl.Marker(markerElement)
             .setLngLat(startCoord)
             .addTo(map);
    } else {
        movingMarker.setLngLat(startCoord);
    }

    // --- Mettre à jour la ligne de progression ---
    // updateProgressLine va créer des segments du début jusqu'à l'index actuel - 1
    updateProgressLine(safeIndex);

    // Rotation continue de la caméra
    cameraBearing = (cameraBearing + rotationSpeed) % 360;

    // Animer la caméra (easeTo) pour suivre le marqueur et maintenir la rotation
    map.easeTo({
        center: startCoord, // Suivre le marqueur
        zoom: window.innerWidth < 800 ? 13.5 : 15, // Zoom dynamique selon la taille de l'écran
        pitch: 65, // Angle de la caméra
        bearing: cameraBearing, // Rotation continue
        duration: 500 / animationSpeedFactor, // Ajuster la durée pour que la vitesse d'animation soit plus cohérente
        easing: (t) => t // Fonction d'interpolation (linéaire ici)
    });

    // Passer au point suivant(s) selon animationSpeedFactor
    currentPointIndex += animationSpeedFactor;

    // Demander la prochaine frame d'animation
    animationFrameId = requestAnimationFrame(animateTrack);
}

// --- Nouvelle fonction pour mettre à jour les données de la ligne de progression ---
// Prend l'index du point *actuel* du marqueur
function updateProgressLine(currentIndex) {
    const progressSource = map.getSource('route-progress-source');

    // Créer une FeatureCollection pour contenir les segments de ligne
    const featureCollection = {
        type: 'FeatureCollection',
        features: []
    };

    // Créer un segment LineString pour chaque paire de points parcourue
    // Boucle jusqu'à l'index *avant* le point actuel (car on dessine les segments *entre* les points)
    for (let i = 0; i < currentIndex; i++) {
        // Assurez-vous qu'il y a un point suivant pour former un segment
        if (i + 1 < trackData.length) {
            const startPointData = trackData[i];
            const endPointData = trackData[i + 1];

            // Assurez-vous que la vitesse a été calculée pour ce segment (ajoutée dans loadAndDisplayGPX)
            if (startPointData.speed !== undefined) {
                 const segmentFeature = {
                     type: 'Feature',
                     properties: {
                         // Ajouter la vitesse comme propriété du segment
                         speed: startPointData.speed
                     },
                     geometry: {
                         type: 'LineString',
                         // Le segment va du point i au point i+1
                         coordinates: [startPointData.coord, endPointData.coord]
                     }
                 };
                 featureCollection.features.push(segmentFeature);
            }
        }
    }


    if (progressSource) {
        // Mettre à jour la source avec la nouvelle collection de segments
        progressSource.setData(featureCollection);
    } else {
        console.warn("La source 'route-progress-source' n'est pas disponible.");
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
    runButton.textContent = "Play";
    console.log("Animation arrêtée.");

    // Laisser la ligne dessinée telle quelle à l'arrêt.
    // Si vous voulez la supprimer à l'arrêt, décommentez :
    // updateProgressLine(0); // Vide la ligne
    // if (movingMarker) { movingMarker.remove(); movingMarker = null; }
}

// --- Fonction pour charger, parser et préparer la trace ---
async function loadAndDisplayGPX(gpxFilePath) {
    try {
        const response = await fetch(gpxFilePath);
        if (!response.ok) throw new Error(`HTTP error: ${response.status}`);
        const gpxText = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(gpxText, "text/xml");

        // Récupérer les points de trace (<trkpt>) ou de route (<rtept>)
        let points = Array.from(xmlDoc.getElementsByTagName('trkpt'));
        if (points.length === 0) {
            points = Array.from(xmlDoc.getElementsByTagName('rtept'));
        }

        if (points.length < 2) {
             // Même avec un seul point, on peut afficher la carte, mais pas simuler
             if (points.length === 1) {
                  const lon = parseFloat(points[0].getAttribute('lon'));
                  const lat = parseFloat(points[0].getAttribute('lat'));
                  trackData = [{ coord: [lon, lat], time: null }]; // Stocker au moins le point pour la carte
                  map.setCenter([lon, lat]);
                  map.setZoom(15);
                   alert("La trace a un seul point. Impossible de simuler l'animation de vitesse.");
                    runButton.disabled = true; stopButton.disabled = true;
                   return; // Sortir de la fonction
             } else {
                throw new Error("No <trkpt> or <rtept> points found, or not enough points (need at least 2).");
             }
        }

        trackData = [];
        maxTrackSpeed = 0; // Réinitialiser la vitesse max

        // Parcourir les points pour extraire coord et temps, et calculer la vitesse
        for (let i = 0; i < points.length; i++) {
            const point = points[i];
            const lat = parseFloat(point.getAttribute('lat'));
            const lon = parseFloat(point.getAttribute('lon'));
            const coord = [lon, lat];

            let time = null;
            const timeElement = point.getElementsByTagName('time')[0];
            if (timeElement && timeElement.textContent) {
                 try {
                    time = new Date(timeElement.textContent);
                 } catch (e) {
                    console.warn("Could not parse time for point", i, ":", timeElement.textContent);
                 }
            }

            // Ajouter le point actuel aux données de la trace
            trackData.push({ coord: coord, time: time });

            // Si ce n'est pas le premier point ET que le point précédent avait un temps valide, calculer la vitesse du segment précédent
            if (i > 0 && trackData[i-1].time && time) {
                const prevPointData = trackData[i - 1];
                const currentPointData = trackData[i];

                // Créez les objets LngLat pour les deux points
                const lngLat1 = new mapboxgl.LngLat(prevPointData.coord[0], prevPointData.coord[1]);
                const lngLat2 = new mapboxgl.LngLat(currentPointData.coord[0], currentPointData.coord[1]);

                // Calculez la distance en utilisant la méthode d'instance distanceTo()
                const distance_meters = lngLat1.distanceTo(lngLat2); // <-- Correction ici !

                const time_diff_seconds = (currentPointData.time.getTime() - prevPointData.time.getTime()) / 1000;

                let speed_kmh = 0;
                // Ne calculer la vitesse que si la différence de temps est positive
                if (time_diff_seconds > 0) {
                     const speed_mps = distance_meters / time_diff_seconds;
                     speed_kmh = speed_mps * 3.6; // Convertir m/s en km/h
                } else {
                     // Si temps_diff <= 0, cela signifie points identiques ou erreur de temps. Vitesse = 0.
                }


                 // Stocker la vitesse CALCULÉE pour le segment qui COMMENCE au point i-1
                 // et va jusqu'au point i. Donc, on l'attache à trackData[i-1].
                 trackData[i-1].speed = speed_kmh;

                 // Mettre à jour la vitesse maximale
                 if (speed_kmh > maxTrackSpeed) {
                     maxTrackSpeed = speed_kmh;
                 }
            } else if (i > 0) {
                 // Si le point précédent ou actuel n'a pas de temps, on ne peut pas calculer la vitesse pour ce segment.
                 // On peut optionnellement définir la vitesse à 0 ou undefined pour ce segment.
                 trackData[i-1].speed = 0; // Vitesse par défaut 0 si temps manquant
            }
        }

        // Assurez-vous que le dernier point n'a pas de propriété 'speed' sortante car il n'est le début d'aucun segment
        if (trackData.length > 0) {
            delete trackData[trackData.length - 1].speed;
        }


        console.log(`Trace chargée avec ${trackData.length} points.`);
        console.log(`Vitesse maximale calculée : ${maxTrackSpeed.toFixed(2)} km/h.`);

        // --- Ajout/Mise à jour des sources et couches Mapbox ---

        // 1. Source pour la ligne de progression (initialement vide FeatureCollection)
        // La source sera mise à jour dans animateTrack avec des segments colorés
        if (map.getSource('route-progress-source')) {
             map.getSource('route-progress-source').setData({ type: 'FeatureCollection', features: [] });
        } else {
             map.addSource('route-progress-source', {
                 type: 'geojson',
                 data: { type: 'FeatureCollection', features: [] } // Initialement vide
             });
        }


        // 2. Couche pour la ligne de progression (celle qui sera visible et dessinée)
        if (map.getLayer('route-progress-line')) {
            map.removeLayer('route-progress-line');
        }
         // Ajoutez la couche D'ABORD
        map.addLayer({
            id: 'route-progress-line',
            type: 'line',
            source: 'route-progress-source', // Liée à la source de progression
            layout: { 'line-join': 'round', 'line-cap': 'round' },
            paint: {
                'line-color': [
                    'interpolate',
                    ['linear'],
                    ['get', 'speed'], // Vitesse en km/h

                    // Stops de couleur : [vitesse_kmh, couleur]
                    0, '#00FF00',                  // Vert à 0 km/h
                   // 10 * 1.852, '#0000FF',    // Bleu à 10 nœuds (~18.52 km/h)
                    12 * 1.852, '#FFA500',    // Orange à 12 nœuds (~27.78 km/h)
                    /*maxTrackSpeed*/ 25 * 1.852, '#FF0000'       // Reste rouge jusqu'à la vitesse maximale calculée
                ],
        'line-width': 4,
        'line-opacity': 0.9
    }
        });

        // 3. (Optionnel) Couche de fond pour la trace complète (très discrète)
         const fullTrackGeoJSON = {
             type: 'Feature',
             properties: {},
             geometry: {
                 type: 'LineString',
                 coordinates: trackData.map(p => p.coord)
             }
         };
         if (map.getSource('route-full-source')) {
             map.getSource('route-full-source').setData(fullTrackGeoJSON);
         } else {
              map.addSource('route-full-source', {
                  type: 'geojson',
                  data: fullTrackGeoJSON
              });
         }
         if (!map.getLayer('route-full-line-background')) {
              // Assurez-vous que la couche 'route-progress-line' existe avant d'ajouter celle-ci en dessous
              if (map.getLayer('route-progress-line')) {
                   map.addLayer({
                       id: 'route-full-line-background',
                       type: 'line',
                       source: 'route-full-source',
                       layout: { 'line-join': 'round', 'line-cap': 'round' },
                       paint: {
                           'line-color': '#ffffff', // Blanc ou gris clair
                           'line-width': 2,
                           'line-opacity': 0.2, // Très faible opacité
                           'line-dasharray': [2, 2] // En pointillé pour la différencier
                       }
                   }, 'route-progress-line'); // Ajouter cette couche *avant* la ligne de progression
              } else {
                   // Si route-progress-line n'a pas pu être ajoutée, ajoutez celle-ci sans beforeId
                    map.addLayer({
                       id: 'route-full-line-background',
                       type: 'line',
                       source: 'route-full-source',
                       layout: { 'line-join': 'round', 'line-cap': 'round' },
                       paint: {
                           'line-color': '#ffffff', // Blanc ou gris clair
                           'line-width': 2,
                           'line-opacity': 0.2, // Très faible opacité
                           'line-dasharray': [2, 2] // En pointillé pour la différencier
                       }
                   });
              }
         }


        // Ajuster la vue initiale à la trace complète
        if (trackData.length > 0) {
            const bounds = trackData.reduce((bounds, point) => bounds.extend(point.coord), new mapboxgl.LngLatBounds(trackData[0].coord, trackData[0].coord));
            map.fitBounds(bounds, { padding: {top: 80, bottom: 40, left: 40, right: 40} });
        }


        // Activer les boutons et lancer l'animation si possible
        if (trackData.length > 1) {
            runButton.disabled = false;
            stopButton.disabled = true; // Stop est désactivé tant que ça ne joue pas
            runButton.textContent = "Play";

            currentPointIndex = 0; // Commencer au premier point
            cameraBearing = 0; // Réinitialiser la rotation de la caméra si vous voulez
            // Initialiser la ligne de progression avec le premier point (vide ou juste le point de départ)
            updateProgressLine(0); // Dessine une ligne vide initialement
            if (movingMarker) movingMarker.remove(); // Supprimer l'ancien marqueur si présent
            movingMarker = null;
            runButton.disabled = true;
            stopButton.disabled = false;
            runButton.textContent = "Playing...";
            animateTrack(); // Lancer l'animation automatiquement

        } else {
             alert("La trace n'a pas assez de points (>1) ou manque de données de temps pour calculer la vitesse et lancer la simulation.");
             runButton.disabled = true;
             stopButton.disabled = true;
        }


        // Calculer le centre de la trace (inchangé)
        if (trackData.length > 0) {
            const sum = trackData.reduce(
                (acc, point) => [acc[0] + point.coord[0], acc[1] + point.coord[1]],
                [0, 0]
            );
            trackCenter = [
                sum[0] / trackData.length,
                sum[1] / trackData.length
            ];
        }

    } catch (error) {
        console.error("Error loading/displaying GPX:", error);
        alert("Failed to load GPX track or process data. Check console.");
        runButton.disabled = true; stopButton.disabled = true;
    }
}

// --- Gestionnaires d'événements pour les boutons ---
runButton.addEventListener('click', () => {
    // Ne relancer que si l'animation est arrêtée
    if (!animationFrameId && trackData.length > 1) {
        // Réinitialiser la progression si l'animation était terminée
        if (currentPointIndex >= trackData.length - 1) {
            currentPointIndex = 0; // Repartir du début
            cameraBearing = 0; // Réinitialiser la rotation
            updateProgressLine(0); // Vider la ligne dessinée
            if (movingMarker) movingMarker.remove(); // Supprimer le marqueur
            movingMarker = null;
        }
        runButton.disabled = true;
        stopButton.disabled = false;
        runButton.textContent = "Playing...";
        animateTrack(); // Redémarrer l'animation
    } else if (trackData.length <= 1) {
        alert("La trace n'a pas été chargée correctement ou est trop courte.");
    }
});

stopButton.addEventListener('click', () => {
    stopAnimation();
});

// --- Gérer l'appui sur la touche Espace ---
window.addEventListener('keydown', (event) => {
    // Vérifier si la touche enfoncée est l'espace
    if (event.key === ' ') {
        // Empêcher le comportement par défaut (par exemple, le défilement)
        event.preventDefault();

        // Si l'animation est en cours, l'arrêter
        if (animationFrameId !== null) {
            stopAnimation();
        } else {
            // Si l'animation est arrêtée, la démarrer
            runButton.disabled = true;
            stopButton.disabled = false;
            runButton.textContent = "Playing...";
            animateTrack();
        }
    }
});

// --- Récupérer l'URL du GPX à partir des paramètres ---
function getGpxUrlFromParams() {
    const params = new URLSearchParams(window.location.search);
    const gpxUrl = params.get('gpx');
    if (!gpxUrl) {
        console.warn("No GPX URL provided in query parameters. Using default or placeholder.");
         // >>> REMPLACEZ L'URL CI-DESSOUS PAR L'URL DE VOTRE FICHIER GPX DE TEST <<<
        return 'votre_trace.gpx'; // <-- Mettez l'URL de votre fichier GPX ici
    }
    return gpxUrl;
}

// --- Chargement initial ---
map.on('load', () => {
    runButton.disabled = true; // Désactiver les boutons initialement
    stopButton.disabled = true;
    // Charger le fichier GPX spécifié par l'URL (ou celui par défaut)
    loadAndDisplayGPX(getGpxUrlFromParams());
});

map.on('error', (e) => console.error("Mapbox error:", e.error));
</script>

</body>
</html>