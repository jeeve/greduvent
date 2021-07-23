<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="visu-gpx.css ">
</head>

<body>
    <div id="haut">
        <div id="control">
            <div id="reglages">
                <div class="slider-wrapper">
                    <input type="range" id="curseur" min="0" max="100" step="any">
                </div>
                <div class="seuil">
                    <table>
                        <tr>
                            <td><label>Seuil</label></td>
                            <td><input type="text" id="seuil"></input></td>
                            <td>kts</td>
                        </tr>
                        <tr>
                            <td><label>Distance</label></td>
                            <td>
                                <div id="distance-seuil"></div>
                            </td>
                            <td>km</td>
                        </tr>
                        <tr>
                            <td><label>Position</label></td>
                            <td><input type="text" id="position"></input></td>
                            <td>km</td>
                        </tr>
                        <tr>
                            <td><label>Vitesse</label></td>
                            <td>
                                <div id="vitesse"></div>
                            </td>
                            <td>kts</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="magneto">
                <table>
                    <tr>
                        <td><button id="lecture" type="button">Lecture</button></td>
                        <td><button id="stop" type="button">Stop</button></td>
                        <td><label>x</label></td>
                        <td><input type="text" id="rapidite"></input></td>
                    </tr>
                </table>
            </div>
            <div id="fenetre">
                <table>
                    <tr>
                        <td>
                            <input type="checkbox" id="fenetre-auto">
                            <label>Fenêtre auto</label>
                        </td>
                        <td class="fenetre-largeur"><input type="text" id="fenetre-largeur"></input></td>
                        <td class="fenetre-largeur">km</input></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="map"></div>
    </div>
    <div id="chart"></div>


    <script src="/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="trace.js"></script>
</body>

</html>