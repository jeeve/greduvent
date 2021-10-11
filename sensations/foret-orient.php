<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>La Forêt d'Orient</title>
      <META NAME="Description" CONTENT="Tout sur le lac de la Forêt d'Orient."/>
	  <?php include("../includes/header.php"); ?>	  
	  <link rel="stylesheet" href="css/jquery-ui.min.css">	  
	  <link rel="stylesheet" type="text/css" href="css/spots.css" media="all"/>
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
			   
			    <h1>La Forêt d'Orient</h1> 
               <div class="row">
			   
				 <div class="col-xs-12 col-sm-8 fond">
				 <br>
			   <p style="margin-bottom: 15px;"><a href="https://www.seinegrandslacs.fr/quatre-lacs-reservoirs/lac-reservoir-seine" target="_blank">Niveau d'eau</a> : <span class="niveau-foret-orient"></span> % - <a id="lien-webcam-viewsurf-foret-orient" href="https://pv.viewsurf.com/1084/Lac-d-Orient" target="_blank">Webcam</a></p>
			   <br>
				</div>
				 <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=lusigny-sur-barse&credit=0"></iframe>	
					</div>

			</div>
			</div>
			
			
			

<!--	
  <div class="col-xs-12 col-sm-12 fond">
    <br>
	<div class="visible-xs">
		<p><a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a6/50/ile-de-france/fleury-en-bi-re/paris-vers-lyon' target="_blank">Melun</a> / A6 près de Melun et Fontainebleau, vue orientée vers Lyon</p>  
	</div>
	
  <div class="embed-responsive embed-responsive-16by9 ombre-image">
    <div>
	<video id="videojs-viewsurf_html5_api" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay="">
    </video>
	<div id="webcam" class="hidden-xs">
		<p><a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a6/50/ile-de-france/fleury-en-bi-re/paris-vers-lyon' target="_blank">Melun</a> / A6 près de Melun et Fontainebleau, vue orientée vers Lyon</p>  
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
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://openweathermap.org/city/2992671" target="_blank">Montereau-Fault-Yonne</a></em></p></td>
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
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://openweathermap.org/city/2992671" target="_blank">Montereau-Fault-Yonne</a></em></p></td>
					</tr>						
				</table>
				</div>
											
				</div>	

</div>				

-->	
 <br><br>

			
                  <div class="row">
                    <!-- <div class="col-xs-12 col-sm-2"></div> -->
                     <div class="col-xs-12 col-sm-6 fond">
                        <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-foret-orient" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d677442.6736367818!2d2.7594879803385917!3d48.451532229913944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47ec2375d1e1f51d%3A0x40a5fb99a3f4060!2s10140%20Mesnil-Saint-P%C3%A8re!3m2!1d48.248976899999995!2d4.333515!5e0!3m2!1sfr!2sfr!4v1614520308696!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				
						</div>
						<p class="legende">Itinéraire</p>
						
						
					</div>
						
						<div class="col-xs-12 col-sm-6 fond">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d37879.67679584464!2d4.314305791208331!3d48.27260803932337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1614520706100!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>			</div>
							<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=276" target="_blank">My wind session</a></p>
						</div>
                    
                  </div>			
				
                  <br><br>			  
				  
                  <h2>Prévisions méteo</h2>
				  
		 			  				
				  <div class="row">				  		

					<div class="hidden-xs col-sm-8" style="margin-left: 5px;">
						<div class="fond-table encadrement-table" style="width: 540px;">
						<div style="width:520px;overflow:auto;">
						<!--<iframe align="top" src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=33106&amp;units_wind=kts&amp;units_temp=C&amp;type=daily&amp;width=5830&amp;height=310&amp;color=f1eeee&amp;name=La Grande-Paroisse&amp;app=windalert" width="5830" height="310" frameborder="0" scrolling="no" allowtransparency="no"></iframe>-->
						<iframe align="top" src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=33113&units_wind=kph&units_temp=C&type=daily&width=5830&height=310&color=f1eeee&amp;name=Lac d Orient&app=windalert" width="5830" height="310" frameborder="0" scrolling="no" allowtransparency="no"></iframe>
						</div>
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lac-de-la-foret-d-orient?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lac-de-la-foret-d-orient?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac de la Forêt d'Orient<a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
						<script id="wg_fwdg_92534_100_1614521312463">
(function (window, document) {
  var loader = function () {
    var arg = ["s=92534","m=3","uid=wg_fwdg_92534_100_1614521312463","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
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
							<a href="https://www.windfinder.com/weatherforecast/lac-de-la-foret-d-orient" target="_blank">Superforecast</a><br><br>
							<a href="https://www.ventusky.com/fr/48.249;4.334" target="_blank">Ventusky</a><br><br>
							<a href="https://www.xcweather.co.uk/forecast/mesnil_saint_pere" target="_blank">XCWeather</a><br><br>
							<a href="https://meteofrance.com/previsions-meteo-france/mesnil-saint-pere/10140" target="_blank">Météo France</a>
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
<script id="wg_fwdg_60276_3_1548236615805">
(function (window, document) {
  var loader = function () {
    var arg = ["s=60276","m=3","uid=wg_fwdg_60276_3_1548236615805","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
						<a href="http://www.windalert.com/spot/33106" target="_blank"><img src="images/logo-windalert.jpg"></a>								
						<a href="https://www.windfinder.com/weatherforecast/la_grande_paroisse?utm_campaign=homepageweather" target="_blank"><img src="images/logo-windfinder.png" alt="superforecast" title="superforecast"></a>	

						<a href="https://www.ventusky.com/?p=48.334;2.921;9&l=wind-10m" target="_blank"><img src="images/logo-ventusky.png"></a>
						<a href="https://www.xcweather.co.uk/forecast/grande-paroisse" target="_blank"><img src="images/logo-xcweather.png"></a>
						<a href="http://www.meteofrance.com/previsions-meteo-france/la-grande-paroisse/77130" target="_blank"><img src="images/logo-meteofrance.png"></a>
						</div>		
					</div>
										<div class="col-xs-12 visible-xs fond">
						<br><br>					
				</div>	</div>
				
				<h2>Informations</h2>		
  <div class="infoForetOrient"></div>			

				
				  <br>
				  
                  <h2>Historique</h2>
                  <form id="datetimeform">
                     
                        <div><p><label for="ma-date" style="margin-right: 10px;">Date <span style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;" id="ma-date-foretorient" type="text" name="date" value="25/02/2017"></input></p></div>
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
					<div class="col-xs-10 fond" id="historique-vent-foretorient"></div>
					</div>
				  <div class="row histo">
				   <div class="col-xs-2 fond"></div>
					<div class="col-xs-8 fond" id="historique-rose-foretorient"></div>
				  </div>					  
				  <div class="row histo">
				   <div class="col-xs-2 fond"></div>
					<div class="col-xs-8 fond" id="historique-niveau-foretorient"></div>
				  </div>
					<br><br>		  
				  
				  
				  <h2>Liste des sessions</h2>

<div id="sessions"></div>

<br>
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
						<p class="numero-page">page 14h</p>
						
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
/*
	    function getWebCam() {
			jQuery.ajax({
				url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a6/50/ile-de-france/fleury-en-bi-re/paris-vers-lyon',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
			jQuery('#videojs-viewsurf_html5_api').attr('src', data.src);	
			});
		}
*/		
	function maPosition(position) {		
			var lat1 = position.coords.latitude;
			var lon1 = position.coords.longitude;	
			console.log("posistion ok");
			var itineraireSrc = 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d' + lat1 + '!2d' + lon1 + '!4m5!';	
			jQuery('#map-foret-orient').attr('src', itineraireSrc + '1s0x47ec2375d1e1f51d%3A0x40a5fb99a3f4060!2s10140%20Mesnil-Saint-P%C3%A8re!3m2!1d48.248976899999995!2d4.333515!5e0!3m2!1sfr!2sfr!4v1614520308696');
	}
		
		
//		var myCam = setInterval(getWebCam, 30000);	// 30 s
	  
	    station = "lusigny-sur-barse";
		var myVar =	setInterval(getMeteo, 30000);	
         
		jQuery(document).ready(function($) {	
			console.log("ready");
			getInfoSpot();
			getInfoSessions('Foret-Orient');
			//getWebCam();		 
			getMeteo();
			if (navigator.geolocation) {
				console.log("navigator");
				navigator.geolocation.getCurrentPosition(maPosition);
			}
			
				initHistorique('foretorient');
	getHistoriqueVent('foretorient');
	
				jQuery( "#ma-date-foretorient" ).change(function() {
			 getHistoriqueVent('foretorient');
			});
			

		 });
		 
		 			jQuery.ajax({
				url: "niveau-foret-orient.php",
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				jQuery(".niveau-foret-orient").replaceWith(data.value);
			})
	  </script>	
  
<script type="text/javascript" src="js/info-spot.js"></script>
<script type="text/javascript" src="js/info-sessions.js"></script>
	  <script type="text/javascript" src="js/historique-vent.js"></script> 
	  
   </body>
</html>

