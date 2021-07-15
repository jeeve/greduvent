<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <style>
    #map {
        width: 100%;
        height: 800px;
    }

    #control {
        height: 150px;
    }

    #seuil {
        width: 40px;
    }

    .slider-wrapper {
        display: inline-block;
        width: 20px;
        padding: 5px;
    }

    .slider-wrapper input {
        width: 140px;
        height: 20px;
        margin: 0;
        transform-origin: 70px 70px;
        transform: rotate(-90deg);
    }

    .seuil {
        display: inline-block;
        width: 130px;
    }

    #reglages {
        float: left;
        height: 100%;
    }

    #courbe {
        height: 150px;
        width: calc(100% - 180px);
        bottom: 12px;
        position: absolute;
        right: 8px;
    }

    #chart {
        width: 100%;
        height: 100%;
    }

    .ligne {
        cursor: row-resize;
    }
    </style>

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