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
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
        .controls {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1;
            background: rgba(255, 255, 255, 0.9);
            padding: 8px 12px;
            border-radius: 4px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.3);
            display: flex;
            align-items: center; /* Alignement vertical des éléments */
            gap: 10px;
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
        /* Style pour la barre de progression */
        .progress-slider {
            width: 200px; /* Ajustez selon vos besoins */
            cursor: pointer;
            opacity: 0.5;
        }
        .moving-marker {
            width: 12px;
            height: 12px;
            background-color: #e63946;
            border-radius: 50%;
            border: 2px solid white;
            box-shadow: 0 0 8px rgba(0,0,0,0.6);
        }
        @media (max-width: 600px) {
        .progress-slider {
            width: 100px; /* Largeur réduite pour smartphones */
        }
        .controls {
            gap: 5px; /* Réduire l'espacement entre les éléments */
            padding: 6px 8px; /* Réduire légèrement le padding */
        }
        .controls button {
            padding: 6px 10px; /* Boutons plus petits */
            font-size: 14px; /* Texte légèrement plus petit */
        }
    }
    </style>
</head>
<body>
    <div class="controls">
        <button id="runButton">Play</button>
        <button id="stopButton">Stop</button>
        <!-- Ajout de la barre de progression -->
        <input type="range" id="progressSlider" class="progress-slider" min="0" max="100" value="0" step="1">
    </div>
    <div id='map'></div>

<script>
let trackCenter = null;
let cameraBearing = 0;
const rotationSpeed = 0.1;
mapboxgl.accessToken = 'pk.eyJ1IjoiamVldmU5NCIsImEiOiJjbWE0aWdqcGowNmlwMmpzZHBpaGNqemh4In0.uA9Zk9RR2v6NYZbbve4wzw';
const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/satellite-streets-v12',
    center: [2, 46],
    zoom: 5,
    pitch: 45,
    bearing: 0
});
map.addControl(new mapboxgl.NavigationControl());

let trackData = [];
let animationFrameId = null;
let currentPointIndex = 0;
let movingMarker = null;
const animationSpeedFactor = 1;
let currentMapBearing = 0;
let maxTrackSpeed = 0;

const runButton = document.getElementById('runButton');
const stopButton = document.getElementById('stopButton');
// Référence à la barre de progression
const progressSlider = document.getElementById('progressSlider');

const markerElement = document.createElement('div');
markerElement.className = 'moving-marker';

function animateTrack() {
    let safeIndex = Math.min(currentPointIndex, trackData.length - 1);
    if (safeIndex >= trackData.length - 1) {
        console.log("Animation terminée.");
        updateProgressLine(trackData.length - 1);
        stopAnimation();
        return;
    }

    const startPointData = trackData[safeIndex];
    const startCoord = startPointData.coord;

    if (!movingMarker) {
        movingMarker = new mapboxgl.Marker(markerElement)
            .setLngLat(startCoord)
            .addTo(map);
    } else {
        movingMarker.setLngLat(startCoord);
    }

    updateProgressLine(safeIndex);

    // Mettre à jour la barre de progression
    progressSlider.value = Math.min((safeIndex / (trackData.length - 1)) * 100, 100);

    cameraBearing = (cameraBearing + rotationSpeed) % 360;
    map.easeTo({
        center: startCoord,
        zoom: window.innerWidth < 800 ? 13.5 : 15,
        pitch: 65,
        bearing: cameraBearing,
        duration: 500 / animationSpeedFactor,
        easing: (t) => t
    });

    currentPointIndex += animationSpeedFactor;
    animationFrameId = requestAnimationFrame(animateTrack);
}

function updateProgressLine(currentIndex) {
    const progressSource = map.getSource('route-progress-source');
    const featureCollection = {
        type: 'FeatureCollection',
        features: []
    };

    let currentSegment = null;
    let currentSpeedSum = 0;
    let segmentPointCount = 0;
    const distanceThreshold = 5; // Seuil de distance (en mètres) pour fusionner les points

    for (let i = 0; i <= currentIndex; i++) {
        if (i + 1 < trackData.length) {
            const startPointData = trackData[i];
            const endPointData = trackData[i + 1];

            // Vérifier que les coordonnées sont valides
            if (!startPointData.coord || !endPointData.coord || 
                isNaN(startPointData.coord[0]) || isNaN(startPointData.coord[1]) ||
                isNaN(endPointData.coord[0]) || isNaN(endPointData.coord[1])) {
                console.warn(`Segment ${i} ignoré : coordonnées invalides`, startPointData.coord, endPointData.coord);
                continue;
            }

            const speed = startPointData.speed !== undefined ? startPointData.speed : 0;
            const lngLat1 = new mapboxgl.LngLat(startPointData.coord[0], startPointData.coord[1]);
            const lngLat2 = new mapboxgl.LngLat(endPointData.coord[0], endPointData.coord[1]);
            const distance = lngLat1.distanceTo(lngLat2); // Distance en mètres

            if (distance < distanceThreshold && speed <= 10) { // Fusionner si distance < seuil et basse vitesse
                if (!currentSegment) {
                    currentSegment = {
                        coordinates: [startPointData.coord],
                        speedSum: speed,
                        pointCount: 1
                    };
                }
                currentSegment.coordinates.push(endPointData.coord);
                currentSegment.speedSum += speed;
                currentSegment.pointCount += 1;
            } else {
                // Ajouter le segment fusionné s'il existe
                if (currentSegment) {
                    const avgSpeed = currentSegment.speedSum / currentSegment.pointCount;
                    featureCollection.features.push({
                        type: 'Feature',
                        properties: { speed: avgSpeed },
                        geometry: {
                            type: 'LineString',
                            coordinates: currentSegment.coordinates
                        }
                    });
                    currentSegment = null;
                }
                // Ajouter le segment courant (non fusionné)
                featureCollection.features.push({
                    type: 'Feature',
                    properties: { speed: speed },
                    geometry: {
                        type: 'LineString',
                        coordinates: [startPointData.coord, endPointData.coord]
                    }
                });
            }
        }
    }

    // Ajouter le dernier segment fusionné s'il existe
    if (currentSegment) {
        const avgSpeed = currentSegment.speedSum / currentSegment.pointCount;
        featureCollection.features.push({
            type: 'Feature',
            properties: { speed: avgSpeed },
            geometry: {
                type: 'LineString',
                coordinates: currentSegment.coordinates
            }
        });
    }

    if (progressSource) {
        progressSource.setData(featureCollection);
    } else {
        console.warn("La source 'route-progress-source' n'est pas disponible.");
    }
}

function stopAnimation() {
    if (animationFrameId) {
        cancelAnimationFrame(animationFrameId);
        animationFrameId = null;
    }
    runButton.disabled = false;
    stopButton.disabled = true;
    runButton.textContent = "Play";
    console.log("Animation arrêtée.");
}

// Nouvelle fonction pour gérer le déplacement manuel du curseur
function handleSliderChange() {
    if (trackData.length < 2) return;

    // Arrêter l'animation si l'utilisateur déplace le curseur
    stopAnimation();

    // Calculer l'index correspondant à la valeur du slider (0 à 100)
    const sliderValue = parseFloat(progressSlider.value); // 0 à 100
    const newIndex = Math.round((sliderValue / 100) * (trackData.length - 1));
    currentPointIndex = Math.min(newIndex, trackData.length - 1);

    // Mettre à jour la position du marqueur
    const currentCoord = trackData[currentPointIndex].coord;
    if (!movingMarker) {
        movingMarker = new mapboxgl.Marker(markerElement)
            .setLngLat(currentCoord)
            .addTo(map);
    } else {
        movingMarker.setLngLat(currentCoord);
    }

    // Mettre à jour la ligne de progression
    updateProgressLine(currentPointIndex);

    // Centrer la caméra sur le point
    map.easeTo({
        center: currentCoord,
        zoom: window.innerWidth < 800 ? 13.5 : 15,
        pitch: 65,
        bearing: cameraBearing,
        duration: 500,
        easing: (t) => t
    });
}

async function loadAndDisplayGPX(gpxFilePath) {
    try {
        const response = await fetch(gpxFilePath);
        if (!response.ok) throw new Error(`HTTP error: ${response.status}`);
        const gpxText = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(gpxText, "text/xml");

        let points = Array.from(xmlDoc.getElementsByTagName('trkpt'));
        if (points.length === 0) {
            points = Array.from(xmlDoc.getElementsByTagName('rtept'));
        }

        if (points.length < 2) {
            if (points.length === 1) {
                const lon = parseFloat(points[0].getAttribute('lon'));
                const lat = parseFloat(points[0].getAttribute('lat'));
                trackData = [{ coord: [lon, lat], time: null }];
                map.setCenter([lon, lat]);
                map.setZoom(15);
                alert("La trace a un seul point. Impossible de simuler l'animation de vitesse.");
                runButton.disabled = true;
                stopButton.disabled = true;
                progressSlider.disabled = true; // Désactiver le slider
                return;
            } else {
                throw new Error("No <trkpt> or <rtept> points found, or not enough points (need at least 2).");
            }
        }

        trackData = [];
        maxTrackSpeed = 0;

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
            trackData.push({ coord: coord, time: time });

            if (i > 0 && trackData[i-1].time && time) {
                const prevPointData = trackData[i - 1];
                const currentPointData = trackData[i];
                const lngLat1 = new mapboxgl.LngLat(prevPointData.coord[0], prevPointData.coord[1]);
                const lngLat2 = new mapboxgl.LngLat(currentPointData.coord[0], currentPointData.coord[1]);
                const distance_meters = lngLat1.distanceTo(lngLat2);
                const time_diff_seconds = (currentPointData.time.getTime() - prevPointData.time.getTime()) / 1000;
                let speed_kmh = 0;
                if (time_diff_seconds > 0) {
                    const speed_mps = distance_meters / time_diff_seconds;
                    speed_kmh = speed_mps * 3.6;
                }
                trackData[i-1].speed = speed_kmh;
                if (speed_kmh > maxTrackSpeed) {
                    maxTrackSpeed = speed_kmh;
                }
            } else if (i > 0) {
                trackData[i-1].speed = 0;
            }
        }

        if (trackData.length > 0) {
            delete trackData[trackData.length - 1].speed;
        }

        console.log(`Trace chargée avec ${trackData.length} points.`);
        console.log(`Vitesse maximale calculée : ${maxTrackSpeed.toFixed(2)} km/h.`);

        if (map.getSource('route-progress-source')) {
            map.getSource('route-progress-source').setData({ type: 'FeatureCollection', features: [] });
        } else {
            map.addSource('route-progress-source', {
                type: 'geojson',
                data: { type: 'FeatureCollection', features: [] }
            });
        }

        if (map.getLayer('route-progress-line')) {
            map.removeLayer('route-progress-line');
        }
        map.addLayer({
            id: 'route-progress-line',
            type: 'line',
            source: 'route-progress-source',
            layout: { 'line-join': 'round', 'line-cap': 'round' },
            paint: {
                'line-color': [
                    'interpolate',
                    ['linear'],
                    ['get', 'speed'],
                    0, '#00FF00',
                    12 * 1.852, '#FFA500',
                    25 * 1.852, '#FF0000'
                ],
                'line-width': 4,
                'line-opacity': 0.9
            }
        });

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
            if (map.getLayer('route-progress-line')) {
                map.addLayer({
                    id: 'route-full-line-background',
                    type: 'line',
                    source: 'route-full-source',
                    layout: { 'line-join': 'round', 'line-cap': 'round' },
                    paint: {
                        'line-color': '#ffffff',
                        'line-width': 2,
                        'line-opacity': 0.2,
                        'line-dasharray': [2, 2]
                    }
                }, 'route-progress-line');
            } else {
                map.addLayer({
                    id: 'route-full-line-background',
                    type: 'line',
                    source: 'route-full-source',
                    layout: { 'line-join': 'round', 'line-cap': 'round' },
                    paint: {
                        'line-color': '#ffffff',
                        'line-width': 2,
                        'line-opacity': 0.2,
                        'line-dasharray': [2, 2]
                    }
                });
            }
        }

        if (trackData.length > 0) {
            const bounds = trackData.reduce((bounds, point) => bounds.extend(point.coord), new mapboxgl.LngLatBounds(trackData[0].coord, trackData[0].coord));
            map.fitBounds(bounds, { padding: {top: 80, bottom: 40, left: 40, right: 40} });
        }

        if (trackData.length > 1) {
            runButton.disabled = false;
            stopButton.disabled = true;
            progressSlider.disabled = false; // Activer le slider
            runButton.textContent = "Play";
            currentPointIndex = 0;
            cameraBearing = 0;
            updateProgressLine(0);
            if (movingMarker) movingMarker.remove();
            movingMarker = null;
            runButton.disabled = true;
            stopButton.disabled = false;
            runButton.textContent = "Playing...";
            progressSlider.value = 0; // Réinitialiser le slider
            animateTrack();
        } else {
            alert("La trace n'a pas assez de points (>1) ou manque de données de temps pour calculer la vitesse et lancer la simulation.");
            runButton.disabled = true;
            stopButton.disabled = true;
            progressSlider.disabled = true;
        }

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
        runButton.disabled = true;
        stopButton.disabled = true;
        progressSlider.disabled = true;
    }
}

runButton.addEventListener('click', () => {
    if (!animationFrameId && trackData.length > 1) {
        if (currentPointIndex >= trackData.length - 1) {
            currentPointIndex = 0;
            cameraBearing = 0;
            updateProgressLine(0);
            progressSlider.value = 0; // Réinitialiser le slider
            if (movingMarker) movingMarker.remove();
            movingMarker = null;
        }
        runButton.disabled = true;
        stopButton.disabled = false;
        runButton.textContent = "Playing...";
        animateTrack();
    } else if (trackData.length <= 1) {
        alert("La trace n'a pas été chargée correctement ou est trop courte.");
    }
});

stopButton.addEventListener('click', () => {
    stopAnimation();
});

// Ajout de l'écouteur pour la barre de progression
progressSlider.addEventListener('input', handleSliderChange);

window.addEventListener('keydown', (event) => {
    if (event.key === ' ') {
        event.preventDefault();
        if (animationFrameId !== null) {
            stopAnimation();
        } else {
            runButton.disabled = true;
            stopButton.disabled = false;
            runButton.textContent = "Playing...";
            animateTrack();
        }
    }
});

function getGpxUrlFromParams() {
    const params = new URLSearchParams(window.location.search);
    const gpxUrl = params.get('gpx');
    if (!gpxUrl) {
        console.warn("No GPX URL provided in query parameters. Using default or placeholder.");
        return 'votre_trace.gpx';
    }
    return gpxUrl;
}

map.on('load', () => {
    runButton.disabled = true;
    stopButton.disabled = true;
    progressSlider.disabled = true; // Désactiver le slider initialement
    loadAndDisplayGPX(getGpxUrlFromParams());
});

map.on('error', (e) => console.error("Mapbox error:", e.error));
</script>
</body>
</html>