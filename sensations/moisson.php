<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Moisson Lavacourt</title>
      <META NAME="Description" CONTENT="Le lac de Moisson Mousseaux avec webcam, archives, météo en temps réel et prévisions, lien vers l'association WLPA et site de covoiturage."/>
	  <?php include("../includes/header.php"); ?>	
	  <link href="css/lac-lery-poses.css" rel="stylesheet">
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
		#meteo-tems-reel p, #webcam p {
			color: silver;
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
			   
			   <h1>Moisson Lavacourt</h1>

               <div class="row">
			   
  <div class="col-xs-12 col-sm-12 fond">
    <br>
	<div class="visible-xs">
	<p>A13 près de Mantes la Ville, <a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris' target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>  
	</div>
	
  <div class="embed-responsive embed-responsive-16by9 ombre-image">
    <div>
	<video id="videojs-viewsurf_html5_api" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay="">
    </video>
	<div id="webcam" class="hidden-xs">
	<p>A13 près de Mantes la Ville, <a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris' target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>  
	</div>
					  <div id="meteo-tems-reel" class="hidden-xs">
				  <table>
					<tr>
						<td><p>Vitesse vent </p></td><td><p id="vitesse-vent" class="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td><td><p id="orientation-vent" class="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td><td><p id="temperature-air" class="temperature-air"></p></td>
					</tr>
					
					<tr>
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://openweathermap.org/city/2997336" target="_blank">Mantes-la-jolie</a></em></p></td>
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
						<td><p>Vitesse vent </p></td><td><p id="vitesse-vent" class="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td><td><p id="orientation-vent" class="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td><td><p id="temperature-air" class="temperature-air"></p></td>
					</tr>
					
					<tr>
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://openweathermap.org/city/2996148" target="_blank">Mantes-la-jolie</a></em></p></td>
					</tr>						
				</table>
				</div>
											
				</div>	

</div>				
	
		 
               
				  
               
                  
				  
				  <br><br>
                  <div class="row">
                    <!-- <div class="col-xs-12 col-sm-2"></div> -->
                     <div class="col-xs-12 col-sm-6 fond">
                        <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-moisson" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d211164.66341434096!2d1.8751571688649815!3d48.89321926889306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e6c12b153c22bf%3A0x2d227d4087bc4da9!2sMoisson!3m2!1d49.072928999999995!2d1.6691859999999998!5e0!3m2!1sfr!2sfr!4v1544557383138" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>						
						</div>
						<p class="legende">Itinéraire</p>
						
						
					</div>
						
						<div class="col-xs-12 col-sm-6 fond">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15691.154105754329!2d1.674180497185694!3d49.05563923112997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546124769919" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			
			</div>
							<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=271" target="_blank">My wind session</a></p>
						</div>
                    
                  </div>


                  <br><br>			  
				  
                  <h2>Prévisions méteo</h2>
				  
		  
				  <div class="row">				  		

					<div class="hidden-xs col-sm-8" style="margin-left: 5px;">
						<div class="fond-table encadrement-table" style="width: 540px;">
						<div style="width:520px;overflow:auto;"><iframe align="top" src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=33116&amp;units_wind=kts&amp;units_temp=C&amp;type=daily&amp;width=5830&amp;height=310&amp;color=f1eeee&amp;name=Lavacourt&amp;app=windalert" width="5830" height="310" frameborder="0" scrolling="no" allowtransparency="no"></iframe></div>
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/moisson_lavacourt?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/moisson_lavacourt?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Moisson Lavacourt</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>

<script id="wg_fwdg_581_3_1562857640985">
(function (window, document) {
  var loader = function () {
    var arg = ["s=581","m=3","uid=wg_fwdg_581_3_1562857640985","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
						</div>		
					</div>

					<div class="hidden-xs col-sm-2" style="margin-left: 65px;">
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://fr.windfinder.com/weatherforecast/moisson_lavacourt" target="_blank">Superforecast</a><br><br>							
							<a href="https://www.ventusky.com/?p=49.39;0.90;8&l=wind-10m" target="_blank">Ventusky</a><br><br>
							<a href="https://www.xcweather.co.uk/forecast/moisson" target="_blank">XCWeather</a><br><br>
							<a href="http://www.meteofrance.com/previsions-meteo-france/moisson/78840" target="_blank">Météo France</a>
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
(function (window, document) {
  var loader = function () {
    var arg = ["s=581","m=3","uid=wg_fwdg_581_3_1562857685282","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
						
						<a href="https://fr.windfinder.com/weatherforecast/moisson_lavacourt" target="_blank"><img src="images/logo-windfinder.png" alt="superforecast" title="superforecast"></a>	
						<a href="https://www.windalert.com/map#49.062,2.72,9,1,!33116,2" target="_blank"><img src="images/logo-windalert.jpg"></a>								
						<a href="https://www.windguru.cz/581" target="_blank"><img src="images/logo-windguru.gif"></a>
						<a href="https://www.ventusky.com/?p=49.39;0.90;8&l=wind-10m" target="_blank"><img src="images/logo-ventusky.png"></a>
						<a href="https://www.xcweather.co.uk/forecast/moisson" target="_blank"><img src="images/logo-xcweather.png"></a>
						<a href="http://www.meteofrance.com/previsions-meteo-france/moisson/78840" target="_blank"><img src="images/logo-meteofrance.png"></a>
						</div>		
					</div>	
										<div class="col-xs-12 visible-xs fond">
						<br><br>
					</div>
				</div>	

				<h2>Informations</h2>		
  <div class="infoMoisson"></div>
  <br>
									
				
				  <h2>Sessions en vidéo</h2>

				  <br><a name="moisson-18-10-19"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-16by9 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/gROEhbWPofU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=237562" target="_blank">Session windsurf de rêve. Vent pile dans l'axe</a>
				  </p>
				  </div></div>

				  <br><a name="moisson-3-7-19"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/cB_HMl2brIg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=229478" target="_blank">C'est l'été à Moisson ! Cruising en windfoil</a>
				  </p>
				  </div></div>

				  <br><a name="moisson-15-6-19"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/d9JahLfRmcU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=228533" target="_blank">Windfoil en Ile-de-France</a>
				  </p>
				  </div></div>

				  <br><a name="moisson-14-5-19"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/EkRBTnpZH0Y?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=226398" target="_blank">Windsurf en Ile-de-France</a>
				  </p>
				  </div></div>

				  <br><a name="moisson-13-5-19"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/SNNjvHcOOAE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=226297" target="_blank">Windfoil en 5.3 - lundi 13 mai 2019</a>
				  </p>
				  </div></div>

				  <br><a name="moisson-13-4-19"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/UbPr6JycIuk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=223941" target="_blank">Baptême Foil. Magique !! Samedi 13 avril 2019</a>
				  </p>
				  </div></div>				  

				  <br>		  
			 
				  <div id="swipe">
					<div class="row">
						<div class="col-xs-7">
							<p><a href="sensations.php">sensations</a> - <a href="windsurf-kitesurf.php">windsurf / kitesurf</a> - <a id="page-precedente" href="spots-ile-de-france.php">les spots d'Ile-de-France</a></p>
						</div>
						<div class="col-xs-5">
							<p align="right"><a id="page-suivante" href="powerkite.php">powerkite</a> - <a href="../emotions/emotions.php">émotions</a></p>
						</div>
					</div>
					<div class="row">
						<p class="numero-page">page 14b</p>
						
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
		
		var myCam = setInterval(getWebCam, 30000);	// 30 s
	  
		station = "mantes-la-jolie";
		var myVar =	setInterval(getMeteo, 30000);		

	function maPosition(position) {		
			var lat1 = position.coords.latitude;
			var lon1 = position.coords.longitude;	
			var itineraireSrc = 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d' + lat1 + '!2d' + lon1 + '!4m5!';	
			jQuery('#map-moisson').attr('src', itineraireSrc + '1s0x47e6c12b153c22bf%3A0x2d227d4087bc4da9!2sMoisson!3m2!1d49.072928999999995!2d1.6691859999999998!5e0!3m2!1sfr!2sfr!4v1544557383138');			
	}

        
		jQuery(document).ready(function($) {
		getInfoSpot();
		getWebCam();	 
		getMeteo();
		
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(maPosition);
		}
		});

      </script>
	    <script type="text/javascript" src="js/info-spot.js"></script>
   </body>
</html>

