<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Léry-Poses</title>
    <META NAME="Description"
        CONTENT="Le lac de Léry Poses avec webcam, archives, météo en temps réel et prévisions, lien vers l'association WLPA et site de covoiturage." />
    <?php include("../includes/header.php"); ?>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/spots.css" media="all" />
    <style>
    #webcam {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    #meteo-tems-reel {
        position: absolute;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
    }

    #meteo-tems-reel p,
    #webcam p {
        color: silver;
    }

    .histo img {
        margin: 10px;
    }

    .loader-container {
        position: relative;
        height: 50px;
    }

    .loader {
        widht: 50px;
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

                    <h1>Léry-Poses</h1>

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 fond">
                            <br>
                              <!--
                            <div class="visible-xs">
                                <p>A13 près de Louviers, <a
                                        href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/131/haute-normandie/louviers/rouen-vers-paris'
                                        target="_blank">péage de Heudebouville</a>, vue orientée vers Paris</p>
                            </div>
                            -->

                            <div class="embed-responsive embed-responsive-16by9 ombre-image">
                                <div>
                                    <img class="img-responsive" src="https://meteocamip.ddns.net/mjpg/video.mjpg?resolution=1280x720&amp;compression=30&amp;rotation=0&amp;textposition=top&amp;textbackgroundcolor=black&amp;textcolor=white&amp;text=0&amp;clock=0&amp;date=0&amp;overlayimage=0&amp;fps=0&amp;keyframe_interval=32&amp;videobitrate=0&amp;maxframesize=0">
                                    <!--<div id="webcam" class="hidden-xs">
                                        <p>A13 près de Louviers, <a
                                                href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/131/haute-normandie/louviers/rouen-vers-paris'
                                                target="_blank">péage de Heudebouville</a>, vue orientée vers Paris</p>
                                    </div>
                                    -->
                                    <div id="meteo-tems-reel" class="hidden-xs">
                                        <table>
                                            <tr>
                                                <td>
                                                    <p>Vitesse vent </p>
                                                </td>
                                                <td>
                                                    <p id="vitesse-vent" class="vitesse-vent"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Orientation </p>
                                                </td>
                                                <td>
                                                    <p id="orientation-vent" class="orientation-vent"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Air </p>
                                                </td>
                                                <td>
                                                    <p id="temperature-air" class="temperature-air"></p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan=2>
                                                    <p style="font-size: 10px;">Données temps réel <em><a
                                                                id="nom-sation" class="nom-sation"
                                                                href="https://openweathermap.org/city/2997336"
                                                                target="_blank">Louviers</a></em></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="visible-xs"><br></div>
                        </div>


                        <div class="visible-xs">
                            <div class="col-xs-1"></div>

                            <div class="col-xs-10 col-sm-3 fond-table encadrement-table">
                                <table>
                                    <tr>
                                        <td>
                                            <p>Vitesse vent </p>
                                        </td>
                                        <td>
                                            <p id="vitesse-vent" class="vitesse-vent"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Orientation </p>
                                        </td>
                                        <td>
                                            <p id="orientation-vent" class="orientation-vent"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Air </p>
                                        </td>
                                        <td>
                                            <p id="temperature-air" class="temperature-air"></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan=2>
                                            <p style="font-size: 10px;">Données temps réel <em><a id="nom-sation"
                                                        class="nom-sation"
                                                        href="https://openweathermap.org/city/2997336"
                                                        target="_blank">Louviers</a></em></p>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                    </div>



                    <!--			   
			    <div class="row">
				<div class="col-xs-4">
                  <h1>Lac de Léry-Poses</h1>
				</div>
				<div class="col-xs-8">	
				  <p style="text-align:right;">
				  <a href="#commentaires">Un commentaire sur cette page, une suggestion, un problème... <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				  </p>
				 </div>
				</div> 
-->

                    <br><br>
                    <div class="row">
                        <!-- <div class="col-xs-12 col-sm-2"></div> -->
                        <div class="col-xs-12 col-sm-6 fond">
                            <div class="embed-responsive embed-responsive-4by3 ombre-image"
                                style="background-image: none; background-color: black;">
                                <iframe id="map-poses"
                                    src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d421188.1259875271!2d1.5370175529156327!3d49.028173071130745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+Poses!3m2!1d49.302783!2d1.209404!5e0!3m2!1sfr!2sfr!4v1544558819114"
                                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <p class="legende">Situation géographique</p>

                            <p class="legende">Le spot sur <a
                                    href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=231"
                                    target="_blank">My wind session</a></p>
                        </div>

                        <div class="col-xs-12 col-sm-6 fond">
                            <a href="images/spots-lery-poses.jpg" target="_blank">
                                <img src="images/spots-lery-poses.jpg" class="img-responsive ombre-image"
                                    alt="Les mises à l'eau en fonction du vent"
                                    title="Les mises à l'eau en fonction du vent">
                            </a>
                            <p class="legende">Les mises à l'eau</p>
                        </div>

                    </div>

                    <br><br>

                    <h2>Prévisions méteo</h2>


                    <div class="row">

                        <div class="hidden-xs col-sm-8" style="margin-left: 5px;">
                            <div class="fond-table encadrement-table" style="width: 540px;">
                                <div style="width:520px;overflow:auto;"><iframe align="top"
                                        src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=33126&amp;units_wind=kts&amp;units_temp=C&amp;type=daily&amp;width=5830&amp;height=310&amp;color=f1eeee&amp;name=Poses&amp;app=windalert"
                                        width="5830" height="310" frameborder="0" scrolling="no"
                                        allowtransparency="no"></iframe></div>
                                <script type="text/javascript"
                                    src="https://www.windfinder.com/widget/forecast/js/lake_des_deux_amants?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0">
                                </script><noscript><a rel='nofollow'
                                        href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind
                                        forecast for Lac des deux Amants</a> provided by <a rel='nofollow'
                                        href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
                                <!--						<iframe src="http://www.windguru.cz/int/distr_iframe.php?u=196518&s=4864&c=4a30721b47&lng=fr" width="520" height="238" frameborder="0" style="overflow-x: auto; overflow-y: auto; margin-left: 5px;"></iframe>
-->
                                <script id="wg_fwdg_4864_3_1544556530603">
                                (function(window, document) {
                                    var loader = function() {
                                        var arg = ["s=4864", "m=3", "uid=wg_fwdg_4864_3_1544556530603",
                                            "wj=knots", "tj=c", "odh=7", "doh=21", "fhours=240",
                                            "vt=forecasts",
                                            "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"
                                        ];
                                        var script = document.createElement("script");
                                        var tag = document.getElementsByTagName("script")[0];
                                        script.src = "https://www.windguru.cz/js/widget.php?" + (arg.join("&"));
                                        tag.parentNode.insertBefore(script, tag);
                                    };
                                    window.addEventListener ? window.addEventListener("load", loader, false) :
                                        window.attachEvent("onload", loader);
                                })(window, document);
                                </script>
                            </div>
                        </div>

                        <div class="hidden-xs col-sm-2" style="margin-left: 65px;">
                            <div class="fond-table encadrement-table" style="width: 150px;">
                                <p>
                                    <a href="https://fr.windfinder.com/weatherforecast/lake_des_deux_amants"
                                        target="_blank">Superforecast</a><br><br>
                                    <a href="https://www.ventusky.com/?p=49.39;0.90;8&l=wind-10m"
                                        target="_blank">Ventusky</a><br><br>
                                    <a href="http://www.xcweather.co.uk/forecast/L%C3%A9ry_poses"
                                        target="_blank">XCWeather</a><br><br>
                                    <a href="http://www.meteofrance.com/previsions-meteo-france/val-de-reuil/27100"
                                        target="_blank">Météo France</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 hidden-xs fond">
                            <br><br>
                        </div>

                    </div>

                    <div class="row">
                        <div class="visible-xs col-xs-12 fond">
                            <div class="fond-table encadrement-table">

                                <script id="wg_fwdg_4864_3_1546007481425">
                                (function(window, document) {
                                    var loader = function() {
                                        var arg = ["s=4864", "m=3", "uid=wg_fwdg_4864_3_1546007481425",
                                            "wj=knots", "tj=c", "odh=7", "doh=21", "fhours=240",
                                            "vt=forecasts",
                                            "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"
                                        ];
                                        var script = document.createElement("script");
                                        var tag = document.getElementsByTagName("script")[0];
                                        script.src = "https://www.windguru.cz/js/widget.php?" + (arg.join("&"));
                                        tag.parentNode.insertBefore(script, tag);
                                    };
                                    window.addEventListener ? window.addEventListener("load", loader, false) :
                                        window.attachEvent("onload", loader);
                                })(window, document);
                                </script>

                                <a href="https://fr.windfinder.com/weatherforecast/lake_des_deux_amants"
                                    target="_blank"><img src="images/logo-windfinder.png" alt="superforecast"
                                        title="superforecast"></a>
                                <a href="http://www.windalert.com/map#49.299,2.002,9,1,!33126,2" target="_blank"><img
                                        src="images/logo-windalert.jpg"></a>
                                <a href="https://www.windguru.cz/4864" target="_blank"><img
                                        src="images/logo-windguru.gif"></a>
                                <a href="https://www.ventusky.com/?p=49.39;0.90;8&l=wind-10m" target="_blank"><img
                                        src="images/logo-ventusky.png"></a>
                                <a href="http://www.xcweather.co.uk/forecast/L%C3%A9ry_poses" target="_blank"><img
                                        src="images/logo-xcweather.png"></a>
                                <a href="http://www.meteofrance.com/previsions-meteo-france/val-de-reuil/27100"
                                    target="_blank"><img src="images/logo-meteofrance.png"></a>
                            </div>
                        </div>
                        <div class="col-xs-12 visible-xs fond">
                            <br><br>
                        </div>
                    </div>







                    <h2>Informations</h2>
                    <div class="infoPoses"></div>
                    <br>

                    <h2>Historique</h2>
                    <form id="datetimeform">

                        <div>
                            <p><label for="ma-date" style="margin-right: 10px;">Date <span
                                        style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;"
                                    id="ma-date-poses" type="text" name="date" value="25/02/2017"></input></p>
                        </div>
                        <!-- 
 					    <div><p><label for="mon-heure1">entre <span style="color:grey">(HH:MM)</span></label><input id="mon-heure1" type="text" name="heure1" value="10:00"></input></p></div>
                        <div><p><label for="mon-heure2">et <span style="color:grey">(HH:MM)</span></label><input id="mon-heure2" type="text" name="heure2" value="17:00"></input></p></div>
                        <div><p><label for="mon-delta">toutes les</label><input id="mon-delta" type="text" name="delta" value="60"></input> minutes
						
                        <button type="button" onclick="getHistorique()">Afficher</button>
						-->


                    </form>
                    <br>

                    <div class="row histo">
                        <div class="col-xs-1 fond"></div>
                        <div class="col-xs-10 fond" id="historique-vent-poses"></div>
                    </div>
                    <div class="row histo">
                        <div class="col-xs-2 fond"></div>
                        <div class="col-xs-8 fond" id="historique-rose-poses"></div>
                    </div>
                    <div class="row histo">
                        <div class="col-xs-1 fond"></div>
                        <div class="col-xs-10 fond" id="historique-temp-poses"></div>
                    </div>
                    <br><br>




                    <h2>Liste des sessions</h2>

                    <div id="sessions"></div>



                    <br>

                    <div id="swipe">
                        <div class="row">
                            <div class="col-xs-7">
                                <p><a href="sensations.php">sensations</a> - <a href="windsurf-kitesurf.php">windsurf /
                                        kitesurf</a> - <a id="page-precedente" href="spots-ile-de-france.php">les spots
                                        d'Ile-de-France</a></p>
                            </div>
                            <div class="col-xs-5">
                                <p align="right"><a id="page-suivante" href="powerkite.php">powerkite</a> - <a
                                        href="../emotions/emotions.php">émotions</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="numero-page">page 14a</p>

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

    <script src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/meteo.js"></script>
    <script>
    function getWebCam() {
        jQuery.ajax({
            url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/131/haute-normandie/louviers/rouen-vers-paris',
            type: 'GET',
            crossDomain: true,
            dataType: 'json'
        }).then(function(data) {
            console.log(data.src);
            jQuery('#videojs-viewsurf_html5_api').attr('src', 'data.src');
        });
    }

    var myCam = setInterval(getWebCam, 30000); // 30 s

    station = "louviers";
    var myVar = setInterval(getMeteo, 30000);

    function maPosition(position) {
        var lat1 = position.coords.latitude;
        var lon1 = position.coords.longitude;
        var itineraireSrc =
            'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d' +
            lat1 + '!2d' + lon1 + '!4m5!';
        jQuery('#map-poses').attr('src', itineraireSrc +
            'ls0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+CD+110%2C+27740+Poses!3m2!1d49.302783!2d1.209404!5e0!3m2!1sfr!2sfr!4v1546773316328'
        );
    }

    jQuery(document).ready(function($) {


        getInfoSpot();
        getInfoSessions('Léry-Poses');
        //getWebCam();
        getMeteo();

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(maPosition);
        }

        initHistorique('poses');
        getHistoriqueVent('poses');

        $("#ma-date-poses").change(function() {
            getHistoriqueVent('poses');
        });



    });
    </script>
    <script type="text/javascript" src="js/info-spot.js"></script>
    <script type="text/javascript" src="js/info-sessions.js"></script>
    <script type="text/javascript" src="js/historique-vent.js"></script>
</body>

</html>