<!DOCTYPE html>
<html lang="fr">

<head>
    <title>glisse</title>
    <META NAME="Description" CONTENT="La passion du windsurf et du kite. Equipement, sessions, vidéos." />
    <?php include("../includes/header.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/spots.css" media="all" />
    <style>
    .chart {
        width: 100%;
        min-height: 400px;
    }

    .loader-container {
        position: relative;
        display: flex;
        flex-direction: column;
        /* direction d'affichage verticale */
        justify-content: center;
        /* alignement vertical */
    }

    .loader {
        height: 50px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
    </style>
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
                    <div class="row">
                        <div class="col-xs-8">
                            <h1>glisse</h1>
                        </div>
                        <div class="col-xs-4">
                            <br>
                            <p style="text-align:right;">
                                <a href="#liste-sessions">liste des sessions</a>
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                                <img src="images/planche.gif" class="img-responsive" />
                            </p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                            <div class="embed-responsive embed-responsive-4by3 ombre-image">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/videoseries?list=PLvp4urJ2GQfikNiIAzQDfpdsvO31awN69"
                                    frameborder="0" allowfullscreen class="embed-responsive-item"></iframe>
                            </div>
                            </p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row vertical-align">
                        <div class="col-xs-12 col-sm-6 fond">
                            <h2><a target="_blank"
                                    href="http://windsurf-sessions.eg2.fr/mws_new/rider_matos.php?id_rider=3185">Equipement</a>
                            </h2>
                            <h2>Windsurf</h2>
                            <ul>
                                <li>
                                    <p>
                                        flotteur&nbsp;Starboard Isonic 111 litres modèle 2009<br>
                                        dimensions : 234 x 68,5 cm
                                    </p>
                                </li>
                                <li>
                                    <p>voile Gunsails Torro modèle 2023<br>
                                        surface : 4,7 m²
                                    </p>
                                </li>
                                <li>
                                    <p>voile Gunsails Torro modèle 2019<br>
                                        surface : 5,3 m²
                                    </p>
                                </li>
                                <li>
                                    <p>voile Neilpryde V8 modèle 2017<br>
                                        surface : 7,7 m²
                                    </p>
                                </li>
                            </ul>
                            <p style="margin-bottom: 20px; margin-left: 45px;">
                                Vmax : <strong><span id="vmax-windsurf"></span></strong> kts<br>
                                V100m : <strong><span id="v100-windsurf"></span></strong> kts
                            </p>
                            <p align="center">ça dépote !</p>
                            <h2>Kitesurf</h2>
                            <p>Après quelques années de pratique, je me suis recentré sur la planche.</p>
                            <p><br></p>
                            <h2>Windfoil</h2>
                            <ul>
                                <li>
                                    <p>flotteur&nbsp;Future Fly Camel 145 modèle 2022<br>
                                        dimensions : 208 x 81 cm
                                    </p>
                                </li>
                                <li>
                                    <p>voile Loftsails Skyscape modèle 2021<br>
                                        surface : 6,4 m²
                                    </p>
                                </li>
                                <li>
                                    <p>foil Taaroa Noé Freerace modèle 2020<br>
                                        ailes 600, 800 et 1050
                                    </p>
                                </li>
                            </ul>
                            <p style="margin-bottom: 20px; margin-left: 45px;">
                                Distance parcourue : <strong><span id="distance-foil"></span> km</strong> <br>
                                Vmax : <strong><span id="vmax-foil"></span></strong> kts<br>
                                V100m : <strong><span id="v100-foil"></span></strong> kts
                            </p>
                            <p align="center">ça vole !</p>
                            <p><br></p>
                        </div>
                        <div class="col-xs-12 col-sm-6 fond">
                            <p align="center">
                                <a href="../mer/safaga.php">
                                    <img src="images/wind-casimir.jpg" alt="Casimir ride à Safaga"
                                        title="Casimir ride à Safaga" class="img-responsive ombre-image" />
                            </p>
                            <p class="legende">Safaga</p></a>
                            <p align="center"><br><br>
                                <a target="_blank"
                                    href="http://windsurf-sessions.eg2.fr/mws_new/infos_rider.php?id_rider=3185"><img
                                        class="img-responsive ombre-image"
                                        src="http://windsurf-sessions.eg2.fr/signatures/signature_3185.jpg" border="0"
                                        title="My Wind Sessions - Mon journal de navigation en ligne"></a>Powered by <a
                                    href="http://windsurf-sessions.eg2.fr/mws_new">MWS</a>
                                <br><br>
                            </p>
                        </div>
                    </div>
                    <p align="center">
                        <img src="images/planche-casimir-animation.gif">
                    </p>
                    <div class="container-fluid; float:left">
                        <div class="row">
                            <div class="col-xs-12 col-sm-1 fond"></div>
                            <div class="col-xs-12 col-sm-10 fond">
                                <div class="embed-responsive embed-responsive-4by3 ombre-image">
                                    <p align="center">
                                        <iframe
                                            src="https://www.google.com/maps/d/u/0/embed?mid=1tYJab9GlTo3NNKg2sGabgFLygHw"
                                            width="640" height="480"></iframe>
                                    </p>
                                </div>
                                <p class="legende">
                                    <a target="_blank"
                                        href="http://maps.google.fr/maps/ms?hl=fr&amp;ie=UTF8&amp;t=k&amp;msa=0&amp;msid=200553150720547264858.000479f72ea8ec718d36b&amp;ll=48.385442,-0.65918&amp;spn=5.107788,9.360352&amp;z=6&amp;source=embed&quot; style=&quot;color:#0000FF;text-align:left">
                                        Quelques spots testés et approuvés</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p align="center">
                    </p>
                    <p align="center">&nbsp;</p>
                    <div align="center">
                        <table border="0" width="270">
                            <tbody>
                                <tr>
                                    <td width="258">
                                        <p align="center">
                                            <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                        <h2 align="center"><a target="_blank"
                                                href="http://windsurf-sessions.eg2.fr/mws_new/rider_sessions.php?id_rider=3185">Récits
                                                de sessions</a></h2>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-xs-12 col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond">
                            <div id="chart_div_1" class="chart fond ombre-image"></div>
                            <p class="legende"><a
                                    href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRFUBsKIblwzZ74TocRl5cItHXxjL8MjRFyD_mj0D8Zewd4PTQ9BoUFTj1bB6RdLaXckWbZ50rBZsjM/pubhtml"
                                    target="_blank">Vitesses windsurf</a></p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond">
                            <div id="chart_div_2" class="chart fond ombre-image"></div>
                            <p class="legende"><a
                                    href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRFUBsKIblwzZ74TocRl5cItHXxjL8MjRFyD_mj0D8Zewd4PTQ9BoUFTj1bB6RdLaXckWbZ50rBZsjM/pubhtml"
                                    target="_blank">Vitesses windfoil</a></p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div align="center">
                        <table border="0" width="270">
                            <tbody>
                                <tr>
                                    <td width="258">
                                        <p align="center">
                                            <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
                                        <h2 align="center"><a
                                                href="https://outilsflask.herokuapp.com/sessions/ia">Analyse de
                                                sessions</a></h2>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <br>
                    <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 center-block fond-table encadrement-table">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active"> <img src="images/diapos/tintin-foil.jpg"
                                            alt="Jablines - 17 février 2021 - photo Tintin"
                                            title="Jablines - 17 février 2021 - photo Tintin"></div>
                                    <div class="item"> <img src="images/diapos/tintin-drone.jpg"
                                            alt="Moisson Lavacourt - 12 juillet 2020"
                                            title="Moisson Lavacourt - 12 juillet 2020"></div>
                                    <div class="item"> <img src="images/diapos/haut.jpg"
                                            alt="Vaires sur Marne - 14 mars 2021"
                                            title="Vaires sur Marne - 14 mars 2021">
                                    </div>
                                    <div class="item"> <img src="images/diapos/david-foil.jpg"
                                            alt="Moisson Lavacourt - 4 juillet 2020 - photo Kumi H."
                                            title="Moisson Lavacourt - 4 juillet 2020 - photo Kumi H."></div>
                                    <div class="item"> <img src="images/diapos/tintin-drone2.jpg"
                                            alt="Moisson Lavacourt - 25 juillet 2020"
                                            title="Moisson Lavacourt - 25 juillet 2020"></div>
                                    <div class="item"> <img src="images/diapos/mimi-foil.jpg"
                                            alt="Moisson Lavacourt - 12 juillet 2020 - photo Mireille M."
                                            title="Moisson Lavacourt - 12 juillet 2020 - photo Mireille M."></div>
                                    <div class="item"> <img src="images/diapos/david-haas-foil.jpg"
                                            alt="Les Haas - 3 août 2020 - photo Kumi H."
                                            title="Les Haas - 3 août 2020 - photo Kumi H."></div>
                                    <div class="item"> <img src="images/diapos/v8-foil.jpg"
                                            alt="Jablines - 20 février 2021 - photo Olive91"
                                            title="Jablines - 20 février 2021 - photo Olive91"></div>
                                    <div class="item"> <img src="images/diapos/windsurf-full-speed.jpg"
                                            alt="Le Crotoy - 16 mai 2011 - prise de vue Mireille M."
                                            title="Le Crotoy - 16 mai 2011 - prise de vue Mireille M."></div>
                                    <div class="item"> <img src="images/diapos/le-crotoy-kitesurf.jpg"
                                            alt="Kitesurf au Crotoy - 1er mai 2009 - prise de vue Mireille M."
                                            title="Kitesurf au Crotoy - 1er mai 2009 - prise de vue Mireille M."></div>
                                    <div class="item"> <img src="images/diapos/run-beaussais.jpg"
                                            alt="Ride en baie de Beaussais - 7 août 2011 - photo Mireille M."
                                            title="Ride en baie de Beaussais - 7 août 2011 - photo Mireille M."></div>
                                    <div class="item"> <img src="images/diapos/ride-embarque-lancieux.jpg"
                                            alt="Ride en baie de Beaussais - 17 août 2021"
                                            title="Ride en baie de Beaussais - 17 août 2021"></div>
                                    <div class="item"> <img src="images/diapos/onboard-loft.jpg"
                                            alt="Moisson - 26 mars 2022" title="Moisson - 26 mars 2022"></div>
                                    <div class="item"> <img src="images/diapos/jvj-par-tom77.jpg"
                                            alt="Forêt d'Orient - 16 avril 2022" title="Forêt d'Orient - 16 avril 2022">
                                    </div>
                                    <div class="item"> <img src="images/diapos/plage-jablines.jpg"
                                            alt="Jablines - 30 avril 2022" title="Jablines - 30 avril 2022">
                                    </div>
                                    <div class="item"> <img src="images/diapos/jvjgp-par-oliv91.jpg"
                                            alt="Grande-Paroisse - 5 juin 2022 - photo Olive91" title="Grande-Paroisse - 5 juin 2022 - photo Olive91">
                                    </div>
                                    <div class="item"> <img src="images/diapos/jablines-28-12-22-phil95.jpg"
                                            alt="Jablines - 28 décembre 2022 - photo Phil95" title="Jablines - 28 décembre 2022 - photo Phil95">
                                    </div>
                                    <div class="item"> <img src="images/diapos/suivi-planche-poses.jpg"
                                            alt="Poses - 29 décembre 2022" title="Poses - 29 décembre 2022">
                                    </div>
                                    <div class="item"> <img src="images/diapos/poses-v8.jpg"
                                            alt="Poses - 24 septembre 2023 - photo Phil95" title="Poses - 24 septembre 2023 - photo Phil95">
                                    </div>
                                    <div class="item"> <img src="images/diapos/poses-24-03-2024.jpg"
                                            alt="Poses - 24 mars 2024 - photo Phil95" title="Poses - 24 mars 2024 - photo Phil95">
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button"
                                    data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button"
                                    data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!--
                     <p align="center">
                     <a href="https://windsurf-sessions.eg2.fr/mws_new/infos_session.php?target=id_rider&id_rider=3185&id_session=260968" target="_blank">
                     <img alt="Jablines - 20 février 2021 - prise de vue Olive91" title="Jablines - 20 février 2021 - prise de vue Olive91" src="images/v8-foil.jpg" class="img-responsive ombre-image" />
                     </a>
                     </p>
                     <p class="legende"><a href="https://windsurf-sessions.eg2.fr/mws_new/infos_session.php?target=id_rider&id_rider=3185&id_session=260968" target="_blank">En vol à Jablines</a></p>
                     
                     <a name="ca-zef-au-crotoy"></a>
                     <p align="center">
                     <a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=166956" target="_blank">
                     <img alt="Le Crotoy - 16 mai 2011 - prise de vue Mireille M." title="Le Crotoy - 16 mai 2011 - prise de vue Mireille M." src="images/windsurf-full-speed.jpg" class="img-responsive ombre-image" />
                     </a>
                     </p>
                     <p class="legende"><a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=166956" target="_blank">Ca zef au Crotoy</a></p>
                     
                     <br><br>
                     <p align="center">
                     <img alt="Kitesurf au Crotoy - 1er mai 2009 - prise de vue Mireille M." title="Kitesurf au Crotoy - 1er mai 2009 - prise de vue Mireille M." src="images/le-crotoy-kitesurf.jpg" class="img-responsive ombre-image" />			  
                     </p>
                     
                     <br><br>
                     <p align="center">
                     <img alt="Ride en baie de Beaussais - 7 août 2011 - photo Mireille M." title="Ride en baie de Beaussais - 7 août 2011 - photo Mireille M." src="images/run-beaussais.jpg" class="img-responsive ombre-image" />			  
                     </p>
                     -->
                    <br>
                    <br><a name="lery-poses-10-05-18"></a>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                            <div class="embed-responsive embed-responsive-4by3 ombre-image">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/aP1cxMEdWIM?rel=0&amp;showinfo=0" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            </p>
                            <p class="legende">
                                <a href="lery-poses.php">Léry-Poses</a>, jeudi 10 mai 2018<br>
                                Le jour où j'ai filmé Phil95.
                            </p>
                        </div>
                    </div>
                    <br><a name="kitesurf-crotoy-1-5-2009"></a>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                            <div class="embed-responsive embed-responsive-4by3 ombre-image">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/zJr2d2GKdbw?rel=0&showinfo=0" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            </p>
                            <p class="legende">
                                <a href="http://windsurf-sessions.eg2.fr/mws_new/infos_session.php?target=id_rider&id_rider=3185&id_session=166966"
                                    target="_blank">
                                    Session kitesurf au Crotoy, le 1er mai 2009</a><br>
                                Un peu de vent mais pour ce qui est du soleil...
                            </p>
                        </div>
                    </div>
                    <br><a name="windsurf-aout-2017"></a>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                            <div class="embed-responsive embed-responsive-4by3 ombre-image">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/XNFeOSk6Mck?rel=0&showinfo=0" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            </p>
                            <p class="legende">
                                Planche à voile à <a href="../mer/saint-jacut.php">Saint-Jacut de la Mer</a>, août 2017
                            </p>
                        </div>
                    </div>
                    <br><br>
                    <a name="liste-sessions"></a>
                    <h2>Liste des sessions</h2>
                    <div id="sessions"></div>
                    <br>
                    <br>
                    <div id="swipe">
                        <div class="row">
                            <div class="col-xs-3">
                                <p><a id="page-precedente" href="sensations.php">sensations</a></p>
                            </div>
                            <div class="col-xs-9">
                                <p align="right"> <a id="page-suivante" href="spots-ile-de-france.php">les spots
                                        d'Ile-de-France</a> - <a href="powerkite.php">powerkite</a> - <a
                                        href="../emotions/emotions.php">émotions</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="numero-page">page 13</p>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
    </div>
    <!--/.page-container-->
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/swipe-diapo.php"); ?>
    <script type="text/javascript" src="js/info-sessions.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script>
    var vitesses1 = [];
    var vitesses2 = [];

    $(document).ready(function($) {
        $.ajax({
            url: "https://sheets.googleapis.com/v4/spreadsheets/1eCnnsOdcwRKJ_kpx1uS-XXJoJGFSvm3l3ez2K9PpPv4/values/Liste?key=" +
                sheetapi,
            type: 'GET',
            crossDomain: true,
            dataType: 'json'
        }).then(function(data) {
            vitesses1 = [];
            vitesses2 = [];
            var ligne, d, v100, vmax, i, pratique, distanceFoil, distanceFoilTotale;
            var vmaxfoilmax, vmaxfoildate, v100mfoilmax, v100mfoildate, vmaxwindsurfmax,
                v100mwindsurfmax, vmaxfoildate, v100mfoildate;
            vmaxwindsurfmax = 0.0;
            v100mwindsurfmax = 0.0;
            vmaxfoilmax = 0.0;
            v100mfoilmax = 0.0;
            var v = [];
            distanceFoilTotale = 0.0;
            vitesses1[0] = ['Date', 'V 100m', 'V Max'];
            vitesses2[0] = ['Date', 'V 100m', 'V Max'];
            var j1 = 1;
            var j2 = 1;
            for (i = 1; i < data.values.length; i++) {
                ligne = data.values[i];
                d = ligne[0];
                pratique = ligne[2];
                vmax = parseFloat(ligne[9]);
                v100 = parseFloat(ligne[10]);
                distanceFoil = ligne[7];
                if (distanceFoil == "") {
                    distanceFoil = 0.0;
                }
                distanceFoil = parseFloat(distanceFoil);
                if (pratique == "Windfoil") {
                    distanceFoilTotale = distanceFoilTotale + distanceFoil;
                    if (vmax > vmaxfoilmax) {
                        vmaxfoilmax = vmax;
                        vmaxfoildate = d;
                    }
                    if (v100 > v100mfoilmax) {
                        v100mfoilmax = v100;
                        v100mfoildate = d;
                    }
                }
                if (pratique == "Windsurf") {
                    if (vmax > vmaxwindsurfmax) {
                        vmaxwindsurfmax = vmax;
                        vmaxwindsurfdate = d;
                    }
                    if (v100 > v100mwindsurfmax) {
                        v100mwindsurfmax = v100;
                        v100mwindsurfdate = d;
                    }
                }
                if (vmax != '') {
                    v = [];
                    v[0] = new Date(d);
                    v[1] = parseFloat(v100);
                    v[2] = parseFloat(vmax);
                    if (pratique == 'Windsurf') {
                        vitesses1[j1] = v;
                        j1 = j1 + 1;
                    } else {
                        vitesses2[j2] = v;
                        j2 = j2 + 1;
                    }
                }
            }
            jQuery("#distance-foil").html(Math.round(distanceFoilTotale).toString());
            var res;

            res = vmaxwindsurfdate.split("/");
            jQuery("#vmax-windsurf").html('<a href="' + '?session=' + res[1] + '-' + res[0] + '-' + res[
                2] + '">' + (Math.round(vmaxwindsurfmax * 100) / 100).toString() + '</a>');
            res = v100mwindsurfdate.split("/");
            jQuery("#v100-windsurf").html('<a href="' + '?session=' + res[1] + '-' + res[0] + '-' + res[
                2] + '">' + (Math.round(v100mwindsurfmax * 100) / 100).toString() + '</a>');

            res = vmaxfoildate.split("/");
            jQuery("#vmax-foil").html('<a href="' + '?session=' + res[1] + '-' + res[0] + '-' + res[2] +
                '">' + (Math.round(vmaxfoilmax * 100) / 100).toString() + '</a>');
            res = v100mfoildate.split("/");
            jQuery("#v100-foil").html('<a href="' + '?session=' + res[1] + '-' + res[0] + '-' + res[2] +
                '">' + (Math.round(v100mfoilmax * 100) / 100).toString() + '</a>');
            drawChart1();
            drawChart2();
        });

    });

    google.load('visualization', '1.0', {
        'packages': ['corechart']
    });
    google.setOnLoadCallback(drawChart1);
    google.setOnLoadCallback(drawChart2);

    function drawChart1() {
        var data = google.visualization.arrayToDataTable(vitesses1);

        var options = {
            hAxis: {
                titleTextStyle: {
                    color: '#333'
                }
            },
            vAxis: {
                title: 'Noeuds',
                minValue: 0
            },
            pointSize: 10
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div_1'));
        chart.draw(data, options);
    }

    function drawChart2() {
        var data = google.visualization.arrayToDataTable(vitesses2);

        var options = {
            hAxis: {
                titleTextStyle: {
                    color: '#333'
                }
            },
            vAxis: {
                title: 'Noeuds',
                minValue: 0
            },
            pointSize: 10
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div_2'));
        chart.draw(data, options);
    }

    $(window).resize(function() {
        drawChart1();
        drawChart2();
    });

    $(document).ready(function($) {

        getInfoSessions('');

    });

    // Reminder: you need to put https://www.google.com/jsapi in the head of your document or as an external resource on codepen //	
    </script>
</body>

</html>