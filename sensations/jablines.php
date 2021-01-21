<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Jablines</title>
      <META NAME="Description" CONTENT="La base de loisir de Jablines avec webcam, archives, météo en temps réel et prévisions, lien vers les forums."/>
	  <?php include("../includes/header.php"); ?>	
	  <link rel="stylesheet" href="css/jquery-ui.min.css">
	  <link rel="stylesheet" type="text/css" href="css/spots.css" media="all"/>
	  <style>
		.webcam {
			position: relative;
		}
		.webcam img {
			position: relative;
			z-index: 1;
		}
		.webcam .webcam-texte {
			position: absolute;
			right: 0;
			bottom: 0;
			background: rgba(0, 0, 0, 0.5);
			z-index: 10;
		}	  
		.webcam-texte p {
			color: silver;
		}		
		.webcam .webcam-titre {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			background: rgba(0, 0, 0, 0.5);
			z-index: 10;
		}	  
		.webcam-titre p {
			color: silver;
			text-align: center;
		}
		.histo img {
			margin: 10px;
		}
.loader{
		widht: 50px;
		height: 50px;
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
			   
			   <h1>Jablines</h1>

               <div class="row">
			   
  <div class="col-xs-12 col-sm-12 fond">
    <br>
	<div class="visible-xs">
		<p>Euro Disney, <a href='https://www.panoramagique.com/' target="_blank">le grand ballon</a></p>  
	</div>
	
	<div class="webcam">
	<div class="ombre-image">
	    <div>
	<video id="videojs-viewsurf_html5_api" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="hidden-xs webcam-titre">
		<p>Euro Disney, <a href='https://www.panoramagique.com/' target="_blank">le grand ballon</a></p>  
	</div>
				<div class="hidden-xs webcam-texte">
				  <table>
					<tr>
						<td><p>Vitesse vent </p></td><td><p class="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td><td><p class="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td><td><p class="temperature-air"></p></td>
					</tr>
					
					<tr>
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://openweathermap.org/city/2972444" target="_blank">Torcy</a></em></p></td>
					</tr>						
				</table>
				</div>
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
						<td><p>Vitesse vent </p></td><td><p class="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td><td><p class="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td><td><p class="temperature-air"></p></td>
					</tr>
					
					<tr>
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://openweathermap.org/city/2972444" target="_blank">Torcy</a></em></p></td>
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
<iframe id="map-jablines" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d422235.08052076533!2d2.2754300925254305!3d48.904374951691736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e61c3ceabfc0ff%3A0x40b82c3688c57b0!2sJablines!3m2!1d48.917429!2d2.761107!5e0!3m2!1sfr!2sfr!4v1544557168668" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		
						</div>
						<p class="legende">Itinéraire</p>
						
						
					</div>
						
						<div class="col-xs-12 col-sm-6 fond">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13272.819129650208!2d2.7189477352299387!3d48.91141958867993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546124228312" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
							<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=36" target="_blank">My wind session</a></p>
						</div>
                    
                  </div>

                  <br><br>			  
				  
                  <h2>Prévisions méteo</h2>
				  
		  
				  <div class="row">				  		

					<div class="hidden-xs col-sm-8" style="margin-left: 5px;">
						<div class="fond-table encadrement-table" style="width: 540px;">
						<div style="width:520px;overflow:auto;"><iframe align="top" src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=33136&amp;units_wind=kts&amp;units_temp=C&amp;type=daily&amp;width=5830&amp;height=310&amp;color=f1eeee&amp;name=Vaires-sur-Marn&amp;app=windalert" width="5830" height="310" frameborder="0" scrolling="no" allowtransparency="no"></iframe></div>
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lac-de-vaires-sur-Marne?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac des deux Amants</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
<!--						<iframe src="http://www.windguru.cz/int/distr_iframe.php?u=196518&s=4864&c=4a30721b47&lng=fr" width="520" height="238" frameborder="0" style="overflow-x: auto; overflow-y: auto; margin-left: 5px;"></iframe>
-->
<script id="wg_fwdg_60276_3_1544556036427">
(function (window, document) {
  var loader = function () {
    var arg = ["s=60276","m=3","uid=wg_fwdg_60276_3_1544556036427","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
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
							<a href="https://www.windfinder.com/weatherforecast/lac-de-vaires-sur-Marne" target="_blank">Superforecast</a><br><br>							
							<a href="https://www.ventusky.com/?p=48.78;2.64;8&l=wind-10m" target="_blank">Ventusky</a><br><br>
							<a href="https://www.xcweather.co.uk/forecast/vaires_sur_marne" target="_blank">XCWeather</a><br><br>
							<a href="http://www.meteofrance.com/previsions-meteo-france/vaires-sur-marne/77360" target="_blank">Météo France</a>
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

						
						<a href="https://www.windfinder.com/weatherforecast/lac-de-vaires-sur-Marne" target="_blank"><img src="images/logo-windfinder.png" alt="superforecast" title="superforecast"></a>	
						<a href="https://www.windalert.com/map#48.862,2.63,14,1,!33136" target="_blank"><img src="images/logo-windalert.jpg"></a>								
						<a href="https://www.ventusky.com/?p=48.78;2.64;8&l=wind-10m" target="_blank"><img src="images/logo-ventusky.png"></a>
						<a href="https://www.xcweather.co.uk/forecast/vaires_sur_marne" target="_blank"><img src="images/logo-xcweather.png"></a>
						<a href="http://www.meteofrance.com/previsions-meteo-france/vaires-sur-marne/77360" target="_blank"><img src="images/logo-meteofrance.png"></a>
						</div>		
					</div>	
										<div class="col-xs-12 visible-xs fond">
						<br><br>
					</div>
				</div>	

				<h2>Informations</h2>		
  <div class="infoJablines"></div>
  <br>
  
                 <h2>Historique</h2>
                  <form id="datetimeform">
                     
                        <div><p><label for="ma-date" style="margin-right: 10px;">Date <span style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;" id="ma-date-jablines" type="text" name="date" value="25/02/2017"></input></p></div>
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
					<div class="col-xs-10 fond" id="historique-vent-jablines"></div>
					</div>
				  <div class="row histo">
				   <div class="col-xs-2 fond"></div>
					<div class="col-xs-8 fond" id="historique-rose-jablines"></div>
				  </div>					  
					<br><br>
  
  
  
				  <h2>Sessions en vidéo</h2>
				  
<div id="sessions"></div>				  
				  
			  

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
						<p class="numero-page">page 14e</p>
						
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
			/*
			jQuery.ajax({
				url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a4/344/ile-de-france/bailly-romainvilliers/paris-vers-reims',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
			jQuery('#videojs-viewsurf_html5_api').attr('src', data.src);	
			});
			*/
			jQuery('#videojs-viewsurf_html5_api').replaceWith('<img src="https://www.panoramagique.com/wp-content/uploads/webcam/webcampanoraMagique.jpg" class="img-responsive"/>');
		}
	    	
		var myCam = setInterval(getWebCam, 30000);	// 30 s
	  
		station = "Torcy";
		var myVar =	setInterval(getMeteo, 30000);		

	function maPosition(position) {		
			var lat1 = position.coords.latitude;
			var lon1 = position.coords.longitude;	
			var itineraireSrc = 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d' + lat1 + '!2d' + lon1 + '!4m5!';	
			jQuery('#map-jablines').attr('src', itineraireSrc + '1s0x47e61c3ceabfc0ff%3A0x40b82c3688c57b0!2sJablines!3m2!1d48.917429!2d2.761107!5e0!3m2!1sfr!2sfr!4v1544557168668');			
	}

        
		jQuery(document).ready(function($) {
			getInfoSpot();
			getInfoSessions('Jablines');
		getWebCam();	 
		getMeteo();
		
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(maPosition);
		}
		
	initHistorique('jablines');
	getHistoriqueVent('jablines');
	
				$( "#ma-date-jablines" ).change(function() {
			 getHistoriqueVent('jablines');
			});
		

		
		 });
      </script>
	  <script type="text/javascript" src="js/info-spot.js"></script>
	<script type="text/javascript" src="js/info-sessions.js"></script>	 
	  <script type="text/javascript" src="js/historique-vent.js"></script> 	
   </body>
</html>

