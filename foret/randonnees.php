<!DOCTYPE html>
<html lang="fr">

<head>
    <title>pas à pas</title>
    <META NAME="Description"
        CONTENT="Randonnées en forêt de Fontainebleau, tracés GPX et photographies." />
    <?php include("../includes/header.php"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="visu-gpx/visu-gpx.css ">
</head>

<body>
    <div class="page-container">
        <!-- top navbar -->
        <?php include("../includes/navbar.php"); ?>
        <div class="container">
            <div class="row row-offcanvas row-offcanvas-left">
                <!-- sidebar -->
                <?php include("../includes/sidebar.php"); ?>
                <!-- main area -->
                <div class="col-xs-12 col-sm-12 col-md-9 fond">
                    <h1>pas à pas</h1>

                    <br>
                    <a name="rando-11-11-2021"></a>
                    <h2>Randonnée <a href="https://www.visorando.com/randonnee-la-butte-de-sucremont/"
                            target="_blank">La Butte de Sucremont</a> - 11 novembre 2021 - <a
                            href="https://photos.app.goo.gl/a5MtCTKawCS2iD737" target="_blank">photos</a>

                    </h2>
                    <div class="row">
                        <div class="col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond">



                            <br>
                            <a href="https://photos.app.goo.gl/a5MtCTKawCS2iD737" target="_blank">
                                <img src="images/rando-11-11-2021-4.jpg" class="img-responsive ombre-image " />
                            </a>
                            <br>
                        </div>
                    </div>

                    <br>

                    <div class="row vertical-align">
                        <div class="col-xs-12 col-sm-6 fond">
                            <a href="https://photos.app.goo.gl/a5MtCTKawCS2iD737" target="_blank">
                                <img src="images/rando-11-11-2021-2.jpg"
                                    class="center-block img-responsive ombre-image">
                            </a>
                            <br>
                        </div>

                        <div class="col-sm-1"></div>
                        <div class="col-xs-12 col-sm-6 fond">
                            <a href="https://photos.app.goo.gl/a5MtCTKawCS2iD737" target="_blank">
                                <img src="images/rando-11-11-2021-3.jpg"
                                    class="center-block img-responsive ombre-image">
                            </a>
                            <br>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-xs-12 col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond">
                            <div id="visu-gpx-2" class="ombre-image">
                                <div class="control">

                                    <div class="lire-gpx">Lire fichier GPX</div>
                                    <form class="upload" enctype="multipart/form-data" action="fileupload.php"
                                        method="post">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                                        <input type="file" name="monfichier" accept=".gpx" />
                                        <input type="submit" />
                                    </form>


                                    <div class="reglages">
                                        <div class="slider-wrapper">
                                            <input type="range" id="curseur" min="0" max="100" step="any">
                                        </div>
                                        <div class="reglage-seuil">
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
                                        <div class="div-fenetre-largeur">
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

                                    <div class="photos-rando">
                                        <a href="https://photos.app.goo.gl/a5MtCTKawCS2iD737" target="_blank">
                                            <img src="images/rando-11-11-2021-1.jpg" />
                                            <img src="images/rando-11-11-2021-2.jpg" />
                                            <img src="images/rando-11-11-2021-3.jpg" />
                                            <img src="images/rando-11-11-2021-5.jpg" data-lat="48.40151734377023"
                                                data-lon="2.5459161917368434" />
                                            <img src="images/rando-11-11-2021-6.jpg" />
                                            <img src="images/rando-11-11-2021-7.jpg" />
                                            <img src="images/rando-11-11-2021-8.jpg" />
                                            <img src="images/rando-11-11-2021-11.jpg">
                                        </a>
                                    </div>
                                </div>

                                <div class="chart"></div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <br><br>
                    <a name="rando-23-10-2021"></a>
                    <h2>Randonnée <a href="https://www.visorando.com/randonnee-le-sentier-des-belvederes/"
                            target="_blank">Le Sentier des Belvédères</a> - 23 octobre 2021 - <a
                            href="https://photos.app.goo.gl/yP4TVzXuq8avWLuV9" target="_blank">photos</a>

                    </h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond">


                            <br>
                            <a href="https://photos.app.goo.gl/yP4TVzXuq8avWLuV9" target="_blank">
                                <img src="images/rando-23-10-2021-1.jpg" class="img-responsive ombre-image " />
                                <br>
                                <img src="images/rando-23-10-2021-5.jpg" class="img-responsive ombre-image " />
                                <br>
                                <img src="images/rando-23-10-2021-6.jpg" class="img-responsive ombre-image " />
                                <br>
                                <img src="images/rando-23-10-2021-7.jpg" class="img-responsive ombre-image " />
                            </a>

                            <br>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-12 col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond">
                            <div id="visu-gpx-1" class="ombre-image">
                                <div class="control">

                                    <div class="lire-gpx">Lire fichier GPX</div>
                                    <form class="upload" enctype="multipart/form-data" action="fileupload.php"
                                        method="post">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                                        <input type="file" name="monfichier" accept=".gpx" />
                                        <input type="submit" />
                                    </form>


                                    <div class="reglages">
                                        <div class="slider-wrapper">
                                            <input type="range" id="curseur" min="0" max="100" step="any">
                                        </div>
                                        <div class="reglage-seuil">
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

                                    <div class="photos-rando">
                                        <a href="https://photos.app.goo.gl/yP4TVzXuq8avWLuV9" target="_blank">
                                            <img src="images/rando-23-10-2021-1.jpg" />
                                            <img src="images/rando-23-10-2021-2.jpg" />
                                            <img src="images/rando-23-10-2021-3.jpg" />
                                            <img src="images/rando-23-10-2021-4.jpg" />
                                            <img src="images/rando-23-10-2021-5.jpg" data-lat="48.3944444"
                                                data-lon="2.547222222222222" />
                                            <img src="images/rando-23-10-2021-6.jpg" />
                                            <img src="images/rando-23-10-2021-7.jpg" />
                                            <img src="images/rando-23-10-2021-8.jpg" />
                                            <img src="images/rando-23-10-2021-9.jpg" />
                                            <img src="images/rando-23-10-2021-10.jpg" />
                                            <img src="images/rando-23-10-2021-11.jpg" data-lat="48.3916667"
                                                data-lon="2.5452777777777778" />
                                            <img src="images/rando-23-10-2021-12.jpg" data-lat="48.3916667"
                                                data-lon="2.5480555555555555" />
                                            <img src="images/rando-23-10-2021-13.jpg" />
                                        </a>
                                    </div>

                                </div>

                                <div class="chart"></div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div id="swipe">
                        <div class="row">
                            <div class="col-xs-4">
                                <p><a id="page-precedente" href="foret.php">peuple végétal</a></p>
                            </div>
                            <div class="col-xs-8">
                                <p align="right"><a id="page-suivante" href="diapo.php">rencontres végétales</a>
                                    - <a href="../impressions/impressions.php">impressions</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="numero-page">page 9a</p>

                        </div>
                    </div>



                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="visu-gpx/rotatedMarker.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="visu-gpx/visu-gpx.js"></script>
    <script src="visu-gpx/exif.js"></script>
    <script>
    window.onload = GPX;

    function GPX() {
        var visuGpxOptions = {
            typeMarker: "distance",
            mode: "rando"
        }
        visuGPX("visu-gpx-1", "2021_10_23_rando-3-pignons.gpx", visuGpxOptions);
        visuGPX("visu-gpx-2", "2021_11_11_rando-fontainebleau-mimi.gpx", visuGpxOptions);
    }
    </script>
    <!--/.page-container-->
    <?php include("../includes/footer.php"); ?>
</body>

</html>
