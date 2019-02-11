<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Vaires-sur-Marne</title>
      <META NAME="Description" CONTENT="La base de Vaires sur Marne avec webcam, archives, météo en temps réel et prévisions, lien vers les forums."/>
	  <?php include("../includes/header.php"); ?>	
	  <link rel="stylesheet" href="css/jquery-ui.min.css">
	  <link href="css/lac-lery-poses.css" rel="stylesheet">
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
			   
			   <h1>Vaires-sur-Marne</h1>

               <div class="row">
			   
  <div class="col-xs-12 col-sm-12 fond">
    <br>
	<div class="visible-xs">
		<p>Euro Disney, <a href='https://www.panoramagique.com/' target="_blank">le grand ballon</a></p>  
	</div>
	
	<div class="webcam">
		<img id="webcam-vaires" class="img-responsive ombre-image" src="https://www.panoramagique.com/wp-content/uploads/webcam/webcampanoraMagique.jpg">
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
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://www.wunderground.com/personal-weather-station/dashboard?ID=ILEDEFRA44" target="_blank">ILEDEFRA44</a></em></p></td>
					</tr>						
				</table>
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
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://www.wunderground.com/personal-weather-station/dashboard?ID=ILEDEFRA44" target="_blank">ILEDEFRA44</a></em></p></td>
					</tr>						
				</table>
				</div>											
				</div>	
</div>					
	
 
		 
                  <br>
				  
                  <p class="legende">Le forum <a href="http://tontons-windsurfers.forumprod.com/" target="_blank">Windsurf 77</a></p>
                  
				  
				  <br><br>
                  <div class="row">
                    <!-- <div class="col-xs-12 col-sm-2"></div> -->
                     <div class="col-xs-12 col-sm-6 fond">
                        <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-vaires" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d105647.94469813356!2d2.439899995693516!3d48.862143539942224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e61074aa8587ab%3A0x40b82c3688c48d0!2sVaires-sur-Marne!3m2!1d48.873608999999995!2d2.6395429999999998!5e1!3m2!1sfr!2sfr!4v1544557341867" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<p class="legende">Itinéraire</p>
						
						
					</div>
						
						<div class="col-xs-12 col-sm-6 fond">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11109.004540217287!2d2.619497111646004!3d48.864038185964624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546124922241" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		
			</div>
							<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=231" target="_blank">My wind session</a></p>
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


					
				  <br>
				  <h2>Sessions en vidéo</h2>

				  <br><a name="vaires-13-01-19"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/nKog-ZBmtOs?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=219593" target="_blank">Vaires le retour...</a><br>
Vent parfaitement orienté ! Du bonheur...
Quelques bon spin-out surtout en plein largue à 47 km/h !
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
						<p class="numero-page">page 14c</p>
						
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
	  	
	  <script type="text/javascript" src="js/meteo3.js"></script>	  
      <script> 
		function getWebCam() {
			d = new Date();
			jQuery('#webcam-vaires').attr('src', 'https://www.panoramagique.com/wp-content/uploads/webcam/webcampanoraMagique.jpg?'+d.getTime());			
		}
	    	
		var myCam = setInterval(getWebCam, 30000);	// 30 s
	  
		station = "ILEDEFRA44";
		var myVar =	setInterval(getMeteo, 30000);		

	function maPosition(position) {		
			var lat1 = position.coords.latitude;
			var lon1 = position.coords.longitude;	
			var itineraireSrc = 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d' + lat1 + '!2d' + lon1 + '!4m5!';	
			jQuery('#map-vaires').attr('src', itineraireSrc + '1s0x47e61074aa8587ab%3A0x40b82c3688c48d0!2sVaires-sur-Marne!3m2!1d48.873608999999995!2d2.6395429999999998!5e1!3m2!1sfr!2sfr!4v1544557341867');			
	}

        
		jQuery(document).ready(function($) {
		getWebCam();	 
		getMeteo();
		
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(maPosition);
		}

		
		 });
      </script>
   </body>
</html>
