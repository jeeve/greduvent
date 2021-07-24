<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Visualisation trace GPX</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="visu-gpx.css ">
</head>

<body>
    <div class="page-container">
        <div class="container-fluid">
            <div id="haut">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 col-xl-1">
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
                                        <td><label>x</label></td>
                                        <td><input type="text" id="rapidite"></input></td>
                                        <td><button id="stop" type="button">Stop</button></td>
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
                                        <td class="fenetre-largeur"><input type="text" id="fenetre-largeur"></input>
                                        </td>
                                        <td class="fenetre-largeur">km</input></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 col-xl-11">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <div id="chart"></div>
        </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="rotatedMarker.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="visu-gpx.js"></script>
</body>

</html>