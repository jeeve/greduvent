<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="visu-gpx.css ">
</head>

<body>
    <div id="map"></div>
    <div id="control">
        <div id="reglages">
            <div class="slider-wrapper">
                <input type="range" id="curseur" min="0" max="100" step="any">
            </div>
            <div class="seuil">
                <label for="name">Seuil (kts)</label>
                <input type="text" id="seuil"></input>
            </div>
            <div class="position">
                <label for="name">Position</label>
                <input type="text" id="position"></input>
            </div>
            <div class="position">
                <label for="name">Vitesse</label>
                <div id="vitesse"></div>
            </div>
        </div>
        <div id="courbe">
            <div id="chart"></div>
        </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="trace.js"></script>
</body>

</html>