<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Visualisation trace GPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="visu-gpx.css ">
</head>

<body>

    <div id="visu-gpx">

        <div class="control">


            <div class="lire-gpx">Lire fichier GPX</div>
            <form class="upload" enctype="multipart/form-data" action="fileupload.php" method="post">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                <input type="file" name="monfichier" accept=".gpx" />
                <input type="submit" />
            </form>


            <div class="reglages">
                <div class="slider-wrapper">
                    <input type="range" class="curseur" min="0" max="100" step="any">
                </div>
                <div class="div-seuil">
                    <table>
                        <tr>
                            <td><label>Seuil ></label></td>
                            <td><input type="text" class="seuil"></input></td>
                            <td>kts</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="distance-seuil"></div>
                            </td>
                            <td>km</td>
                        </tr>
                        <tr>
                            <td><label>Distance</label></td>
                            <td><input type="text" class="position"></input></td>
                            <td>km</td>
                        </tr>
                        <tr class="ligne-temps" style="display: none;">
                            <td><label>Temps</label></td>
                            <td><input type="text" class="temps"></input></td>
                            <td>s</td>
                        </tr>
                        <tr>
                            <td><label>Vitesse</label></td>
                            <td>
                                <div class="vitesse"></div>
                            </td>
                            <td>kts</td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="fenetre">
                <input type="checkbox" class="fenetre-auto">
                <label class="label-fenetre-auto">Fenêtre auto</label>
                <div class="fenetre-largeur">
                    <input type="text" class="fenetre-largeur"></input> km
                </div>
            </div>
            <div class="magneto">
                <button class="lecture" type="button">Lecture</button>
                <label>x</label>
                <input type="text" class="rapidite"></input>
                <button class="stop" type="button">Stop</button>
            </div>

            <div class="stats">
                <input class="calcule" type="checkbox"></input>
                <label>Statistiques</label>
                <table>
                    <tr>
                        <td><input class="affiche-vmax" type="checkbox"></input></td>
                        <td>VMax</td>
                        <td class="vmax"></td>
                        <td>kts</td>
                    </tr>
                    <tr>
                        <td><input class="affiche-v100m" type="checkbox"></input></td>
                        <td>V100m</td>
                        <td class="v100m"></td>
                        <td>kts</td>
                    </tr>
                    <tr>
                        <td><input class="affiche-v500m" type="checkbox"></input></td>
                        <td>V500m</td>
                        <td class="v500m"></td>
                        <td>kts</td>
                    </tr>
                    <tr>
                        <td><input class="affiche-v2s" type="checkbox"></input></td>
                        <td>V2s</td>
                        <td class="v2s"></td>
                        <td>kts</td>
                    </tr>
                    <tr>
                        <td><input class="affiche-v5s" type="checkbox"></input></td>
                        <td>V5s</td>
                        <td class="v5s"></td>
                        <td>kts</td>
                    </tr>
                    <tr>
                        <td><input class="affiche-v10s" type="checkbox"></input></td>
                        <td>V10s</td>
                        <td class="v10s"></td>
                        <td>kts</td>
                    </tr>
                </table>
            </div>

        </div>

        <div class="carte">
            <div class="map"></div>
            <div class="time"></div>
        </div>

        <div class="chart"></div>

    </div>


    <script src="/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="rotatedMarker.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="visu-gpx.js"></script>
    <script src="exif.js"></script>
    <script>
    window.onload = GPX;

    function GPX() {
        var visuGpxOptions = {
            typeMarker: "vitesse",
            mode: "nautique"
        }

        visuGPX("visu-gpx", getParameterByName("url"), visuGpxOptions);
    }

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return "";
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    </script>
    <script src="visu-gpx.js"></script>
</body>

</html>