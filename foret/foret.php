<!DOCTYPE html>
<html lang="fr">

<head>
    <title>peuple végétal</title>
    <META NAME="Description"
        CONTENT="Au coeur de la forêt en textes et photographies de Sologne. Image de synthèse d'un banc sous un arbre." />
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
                    <h1>peuple végétal</h1>


                    <br><br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <img alt="Vineuil - 18 mai 2024" title="Vineuil - 18 mai 2024"
                                src="images/fleur-vineuil.jpg" class="img-responsive ombre-image" />
                        </div>
                    </div>

                    <br><br><br>
                    <div class="container-fluid">
                        <div class="row vertical-align">
                            <div class="col-xs-12 col-sm-6 fond">

                                <p>Il est un pays gorgé de soleil<br>
Qui laisse au temps le temps de se poser<br> 
Sans compter la présence d'un gigantesque personnage<br>
De ses bras invisibles il balaye la cime des cyprès <br>
Fait chanter les feuilles, danser la poussière <br>
Derrière le Lubéron qui veille sur la vallée <br>
Il paraîtrait qu'il y a la mer <br>
D'un bleu insolent <br>
Mais je ne peux y croire, assis sur ce banc <br>
Le soleil descend se reposer <br>
Encore une journée où il s'est offert sans compter <br>
La nuit s’approche à pas silencieux <br>
Sa douce fraîcheur enveloppant la colline <br>
Les senteurs s'éveillent <br>
Au loin chants joyeux de grenouilles amoureuses</p>
                                
                                <p style="text-align: right;"><font size="2"><em>
Goult, samedi 11 mai 2024</em></font>
                                </p>

                            </div>

                            <div class="col-xs-12 col-sm-6 fond">
                                    <img alt="Goult - 11 mai 2024"
                                        title="Goult - 11 mai 2024" src="images/abeille-goult.jpg"
                                        class="img-responsive ombre-image center-block" />
                            </div>

                        </div>
                    </div>
                    <br><br>


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


                    <br><br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <img alt="Sologne - 12 novembre 2004" title="Sologne - 12 novembre 2004"
                                src="images/arbres-ciel.jpg" class="img-responsive ombre-image" />
                        </div>
                    </div>

                    <br><br><br>
                    <div class="container-fluid">
                        <div class="row vertical-align">
                            <div class="col-xs-12 col-sm-6 fond">
                                <h2>Peuple
                                    végétal</h2>
                                <p>Chemin
                                    aventureux traversant la cité<br>
                                    Ville minérale, peuple végétal<br>
                                    Domaine des êtres sages<br>
                                    Partout des géants aux bras immenses<br>
                                    Mains tendues vers le ciel<br>
                                    Foule silencieuse<br>
                                    Juste des chuchotements<br>
                                    Quelques craquements<br>
                                    Rêves de danse, de folies<br>
                                    Promesse du vent</p>

                            </div>

                            <div class="col-xs-12 col-sm-6 fond">
                                <a href="http://blenderartists.org/forum/attachment.php?attachmentid=128881&d=1296826834"
                                    target="_blank">
                                    <img alt="Dream of flying par Artur Zygulski"
                                        title="Dream of flying par Artur Zygulski" src="images/dream-of-flying.jpg"
                                        class="img-responsive encadrement-table fond-table center-block" />
                                </a>
                            </div>

                        </div>
                    </div>
                    <br><br>

                    <a href="diapo.php">
                        <p align="center">
                            <img alt="Sologne - 30 décembre 2003" title="Sologne - 30 décembre 2003"
                                src="images/arbre-nuage.jpg" class="img-responsive ombre-image" />
                        </p>

                        <p class="legende">rencontres végétales</p>
                    </a>
                    <br><br>
                    <div class="row row-cadre vertical-align">
                        <div class="col-xs-12 col-sm-3 fond"></div>
                        <div class="col-xs-12 col-sm-6 fond">
                            <a name="fontainebleau"></a>
                            <h2>Fontainebleau</h2>

                            <p>Fuir ces
                                humains qui grouillent dans les villes<br>
                                S'enfuir vers ce qui reste de nature<br>
                                Un coin de forêt qui survit aux cicatrices routières<br>
                                D'où se déverse le flot de bolides gémissants<br>
                                Jusque dans les sentiers, les gens fuient en grappes, fuient l'instant<br>
                                Courir, parler, crier, courir, surtout ne pas tomber dans le vide de son
                                inexistence<br>
                                La forêt semble souffler en attendant son heure<br>
                                L'infection humaine aurait-elle raison de son âme&nbsp;?</p>
                        </div>


                    </div>

                    <br><br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond">
                            <img alt="Gorges d'Apremont - 20 mai 2020" title="Gorges d'Apremont - 20 mai 2020"
                                src="images/apremont.jpg" class="img-responsive ombre-image" />
                        </div>
                    </div>


                    <br><br>
                    <div class="row">
                        <div class="col-xs-1 col-sm-3 fond"></div>
                        <div class="col-xs-10 col-sm-6 fond-table encadrement-table">
                            <img src="images/bout-des-crocs.jpg" class="img-responsive center-block">
                        </div>
                    </div>


                    <br><br>
                    <p align="center">
                        <img alt="Sologne - 30 décembre 2003" title="Sologne - 30 décembre 2003" src="images/givre.jpg"
                            class="img-responsive ombre-image" />
                    </p>

                    <br><br>
                    <div class="row vertical-align">
                        <div class="col-xs-12 col-sm-5 fond">
                            <a name="colline"></a>
                            <h2>Sur la colline</h2>

                            <p>Un vieil arbre accroché à la colline<br>
                                Solitaire<br>
                                Au milieu de l'hiver<br>
                                Regarde passer le temps<br>
                                Il déploie les bras vers le ciel<br>
                                Comme pour implorer les nuages<br>
                                De l'emporter dans les airs<br>
                                En route pour un ultime voyage<br>
                                Mais pas de place dans le train<br>
                                Pour un arbre qui tremble dans le vent<br>
                                Nu au milieu de l'hiver
                            </p>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-xs-12 col-sm-7 fond">
                            <img src="images/arbre-ours.jpg" alt="Quelque part en Sologne"
                                title="Quelque part en Sologne" class="center-block img-responsive ombre-image">
                        </div>
                    </div>

                    <br><br>
                    <p align="center">et si le temps s'arrêtait ?<br>
                        un après-midi d'été<br>
                        savourer la douceur du jour<br>
                        brise et chants alentours<br>
                        <br>
                        aux cotés de l'arbre complice<br>
                        s'enivrer de senteurs et délices<br>
                        livré corps à l'horizontal<br>
                        aux milles caresses végétales
                    </p>


                    <br><br>
                    <a name="le-banc"></a>

                    <div class="row">
                        <div class="col-xs-12 col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond">
                            <img alt="Le banc" title="Le banc" src="images/le-banc.jpg"
                                class="img-responsive ombre-image" />


                            <p align="right">
                                <font size="2"><em>Image modélisée avec
                                        <a target="_blank" href="http://www.blender.org">Blender</a>
                                        - rendue avec Indigo<br>
                                        <a target="_blank" href="le-banc.zip">
                                            Modèle .blend</a> (28 Mo)</em></font>
                            </p>

                        </div>
                    </div>

                    <br>
                    <div id="swipe">
                        <div class="row">
                            <div class="col-xs-4">
                                <p><a id="page-precedente" href="../loire/loire.php">au fil de l'eau</a></p>
                            </div>
                            <div class="col-xs-8">
                                <p align="right"><a id="page-suivante" href="diapo.php">rencontres végétales</a>
                                    - <a href="../impressions/impressions.php">impressions</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="numero-page">page 9</p>

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
