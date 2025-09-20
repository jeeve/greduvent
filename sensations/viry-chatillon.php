<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Viry-Châtillon</title>
    <META NAME="Description"
        CONTENT="Le lac de Viry-cChâtillon avec webcam, archives, météo en temps réel et prévisions." />
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

    .loader-container {
        position: relative;
        height: 50px;
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

                    <h1>Viry-Châtillon</h1>

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 fond">
                            <br>
                            <!--
                            <div class="visible-xs">
                                <p>A13 près de Mantes la Ville, <a
                                        href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris'
                                        target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>
                            </div>

                            <div class="embed-responsive embed-responsive-16by9 ombre-image">
                                <div>
                                    <video id="videojs-viewsurf_html5_api" class="vjs-tech" tabindex="-1" preload="auto"
                                        loop="" muted="muted" playsinline="playsinline" autoplay="">
                                    </video>
                                    <div id="webcam" class="hidden-xs">
                                        <p>A13 près de Mantes la Ville, <a
                                                href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris'
                                                target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>
                                    </div>
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
                                                                target="_blank">Mantes-la-jolie</a></em></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="visible-xs"><br></div>
                            -->
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
                                                        href="https://openweathermap.org/city/2996148"
                                                        target="_blank">Viry-Châtillon</a></em></p>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                    </div>







                    <br><br>
                    <div class="row">
                        <!-- <div class="col-xs-12 col-sm-2"></div> -->
                        <div class="col-xs-12 col-sm-6 fond">
                            <div class="embed-responsive embed-responsive-4by3 ombre-image"
                                style="background-image: none; background-color: black;">
    <iframe id="map-virychatillon"
        src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d187219.0664658097!2d2.155799017631988!3d48.77583726522512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e5db2381273575%3A0x67a03b54a2a1a2e8!2sViry-Ch%C3%A2tillon!3m2!1d48.665768!2d2.383741!5e0!3m2!1sfr!2sfr!4v1701359300000!5m2!1sfr!2sfr"
        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <p class="legende">Itinéraire</p>


                        </div>

                        <div class="col-xs-12 col-sm-6 fond">
                            <div class="embed-responsive embed-responsive-4by3 ombre-image">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17424.380326749604!2d2.389222787583002!3d48.66381945917766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sus!4v1758110699674!5m2!1sfr!2sus"
                                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <p class="legende">Le spot sur <a
                                    href="https://mywindsessions.com/mws_new/detail_spot.php?id_spot=3395"
                                    target="_blank">My wind session</a></p>
                        </div>

                    </div>


                    <br><br>

                    <h2>Prévisions méteo</h2>


                    <div class="row">

                        <div class="hidden-xs col-sm-8" style="margin-left: 5px;">
                            <div class="fond-table encadrement-table" style="width: 540px;">
                                <div style="width:520px;overflow:auto;"><iframe align="top"
                                        src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=50975&amp;units_wind=kts&amp;units_temp=C&amp;type=daily&amp;width=5830&amp;height=310&amp;color=f1eeee&amp;name=Paris-Orly&amp;app=windalert"
                                        width="5830" height="310" frameborder="0" scrolling="no"
                                        allowtransparency="no"></iframe></div>
                                                                       <script type="text/javascript"
                                            src="https://www.windfinder.com/widget/forecast/js/viry_chatillon_paris?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0">
                                        </script><noscript><a rel='nofollow'
                                                href='https://www.windfinder.com/forecast/viry_chatillon_paris?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind
                                                forecast for Viry-Châtillon</a> provided by <a rel='nofollow'
                                                href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>

                                    <script id="wg_fwdg_85146_100_1758111253699">
                                    (function(window, document) {
                                        var loader = function() {
                                            var arg = ["s=85146", "m=3", "uid=wg_fwdg_85146_100_1758111253699",
                                                "wj=knots", "tj=c", "odh=7", "doh=21", "fhours=240",
                                                "vt=forecasts",
                                                "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"
                                            ];
                                            var script = document.createElement("script");
                                            var tag = document.getElementsByTagName("script")[0];
                                            script.src = "https://www.windguru.cz/js/widget.php?" + (arg.join(
                                                "&"));
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
                                    <a href="https://fr.windfinder.com/weatherforecast/viry_chatillon_paris"
                                        target="_blank">Superforecast</a><br><br>
                                    <a href="https://www.ventusky.com/?p=48.634;2.397;12&l=wind-10m"
                                        target="_blank">Ventusky</a><br><br>
                                    <a href="https://www.xcweather.co.uk/forecast/viry_chatillon"
                                        target="_blank">XCWeather</a><br><br>
                                    <a href="https://meteofrance.com/previsions-meteo-france/viry-chatillon/91170"
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

                                <script id="wg_fwdg_581_3_1562857685282">
                                (function(window, document) {
                                    var loader = function() {
                                        var arg = ["s=581", "m=3", "uid=wg_fwdg_581_3_1562857685282",
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

                                <a href="https://fr.windfinder.com/weatherforecast/viry_chatillon_paris"
                                    target="_blank"><img src="images/logo-windfinder.png" alt="superforecast"
                                        title="superforecast"></a>
                                <a href="https://windalert.com/map#48.67,2.385,14,1" target="_blank"><img
                                        src="images/logo-windalert.jpg"></a>
                                <a href="https://www.windguru.cz/85146" target="_blank"><img
                                        src="images/logo-windguru.gif"></a>
                                <a href="https://www.ventusky.com/?p=48.634;2.397;12&l=wind-10m" target="_blank"><img
                                        src="images/logo-ventusky.png"></a>
                                <a href="https://www.xcweather.co.uk/forecast/viry_chatillon" target="_blank"><img
                                        src="images/logo-xcweather.png"></a>
                                <a href="http://www.meteofrance.com/previsions-meteo-france/viry-chatillon/91170"
                                    target="_blank"><img src="images/logo-meteofrance.png"></a>
                            </div>
                        </div>
                        <div class="col-xs-12 visible-xs fond">
                            <br><br>
                        </div>
                    </div>

                    <h2>Informations</h2>
                    <div class="infoViryChatillon"></div>
                    <br>

                    <h2>Historique</h2>
                    <form id="datetimeform">

                        <div>
                            <p><label for="ma-date" style="margin-right: 10px;">Date </label><input style="width: 130px;"
                                    id="ma-date-virychatillon" type="text" name="date" value="25/02/2017"></input></p>
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
                        <div class="col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond" id="historique-vent-virychatillon"></div>
                    </div>
                    <div class="row histo">
                        <div class="col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond" id="historique-rose-virychatillon"></div>
                    </div>
					<div class="row histo">
                        <div class="col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-10 fond" id="historique-temp-virychatillon"></div>
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
                            <p class="numero-page">page 14g</p>

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
            url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris',
            type: 'GET',
            crossDomain: true,
            dataType: 'json'
        }).then(function(data) {
            console.log(data.src);
            jQuery('#videojs-viewsurf_html5_api').attr('src', data.src);

        });
    }

    var myCam = setInterval(getWebCam, 30000); // 30 s

    station = "viry-chatillon";
    var myVar = setInterval(getMeteo, 30000);

    function maPosition(position) {
        var lat1 = position.coords.latitude;
        var lon1 = position.coords.longitude;
        var viryChatillonLat = 48.665768;
        var viryChatillonLon = 2.383741;
        var viryChatillonId = '0x47e5db2381273575:0x67a03b54a2a1a2e8'; // ID de lieu corrigé pour Viry-Châtillon
        var itineraireSrc =
            'https://www.google.com/maps/embed?pb=' +
            '!1m28!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709' +
            '!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0' +
            '!4m5!1s!2sMa+position!3m2!1d' + lat1 + '!2d' + lon1 + // Utilisation de "Ma position" comme libellé
            '!4m5!1s' + viryChatillonId + '!2sViry-Ch%C3%A2tillon!3m2!1d' + viryChatillonLat + '!2d' + viryChatillonLon +
            '!5e0!3m2!1sfr!2sfr!4v1701359300000!5m2!1sfr!2sfr';
        jQuery('#map-virychatillon').attr('src', itineraireSrc);
    }

    jQuery(document).ready(function($) {
        getInfoSpot();
        getInfoSessions('Viry-Chatillon');
        getWebCam();
        getMeteo();

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(maPosition);
        }

        initHistorique('virychatillon');
        getHistoriqueVent('virychatillon');

        $("#ma-date-virychatillon").change(function() {
            getHistoriqueVent('virychatillon');
        });


    });
    </script>
    <script type="text/javascript" src="js/info-spot.js"></script>
    <script type="text/javascript" src="js/info-sessions.js"></script>
    <script type="text/javascript" src="js/historique-vent.js"></script>
</body>

</html>