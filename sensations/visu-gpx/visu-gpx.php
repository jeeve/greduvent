<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Visualisation trace GPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="visu-gpx.css ">
</head>

<body>


    <div id="control">


        <div id="lire-gpx">Lire fichier GPX</div>
        <form id="upload" enctype="multipart/form-data" action="fileupload.php" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
            <input type="file" name="monfichier" accept=".gpx" />
            <input type="submit" />
        </form>


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
                        <td><label>Temps</label></td>
                        <td><input type="text" id="temps"></input></td>
                        <td>s</td>
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


        <div id="fenetre">
            <input type="checkbox" id="fenetre-auto">
            <label class="label-fenetre-auto">Fenêtre auto</label>
            <div class="fenetre-largeur">
                <input type="text" id="fenetre-largeur"></input> km
            </div>
        </div>
        <div id="magneto">
            <button id="lecture" type="button">Lecture</button>
            <label>x</label>
            <input type="text" id="rapidite"></input>
            <button id="stop" type="button">Stop</button>
        </div>

        <div id="stats">
            <input id="calcule" type="checkbox"></input>
            <label>Statistiques</label>
            <table>
                <tr>
                    <td><input id="affiche-vmax" type="checkbox"></input></td>
                    <td>VMax</td>
                    <td id="vmax"></td>
                    <td>kts</td>
                </tr>
                <tr>
                    <td><input id="affiche-v100m" type="checkbox"></input></td>
                    <td>V100m</td>
                    <td id="v100m"></td>
                    <td>kts</td>
                </tr>
                <tr>
                    <td><input id="affiche-v500m" type="checkbox"></input></td>
                    <td>V500m</td>
                    <td id="v500m"></td>
                    <td>kts</td>
                </tr>
                <tr>
                    <td><input id="affiche-v2s" type="checkbox"></input></td>
                    <td>V2s</td>
                    <td id="v2s"></td>
                    <td>kts</td>
                </tr>
                <tr>
                    <td><input id="affiche-v5s" type="checkbox"></input></td>
                    <td>V5s</td>
                    <td id="v5s"></td>
                    <td>kts</td>
                </tr>
                <tr>
                    <td><input id="affiche-v10s" type="checkbox"></input></td>
                    <td>V10s</td>
                    <td id="v10s"></td>
                    <td>kts</td>
                </tr>
            </table>
        </div>

    </div>

    <div id="carte">
        <div id="map"></div>
        <div id="time"></div>



        <div id="video" style="display: none;"></div>

    </div>

    <div id="chart"></div>




    <script src="/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="rotatedMarker.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="visu-gpx.js"></script>
</body>

</html>