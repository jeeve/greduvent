<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Vaires-sur-Marne</title>
      <META NAME="Description" CONTENT="La base de Vaires sur Marne avec webcam, archives, météo en temps réel et prévisions, lien vers l'association WLPA et site de covoiturage."/>
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
				  
                  <p class="legende">En direct du lac de Léry-Poses et <a href="http://windsurf-lery-poses.soforums.com" target="_blank">ses passionnés</a> - <a href="http://wlpa.e-monsite.com/" target="_blank">association WLPA <img src="images/logo-wlpa.png"></a> - <a href="http://www.kiffmembers.org/" target="_blank">le covoiturage <img  height="60" src="images/logo-kiffmembers.gif"></a>
                  </p>
                  
				  
				  <br><br>
                  <div class="row">
                    <!-- <div class="col-xs-12 col-sm-2"></div> -->
                     <div class="col-xs-12 col-sm-6 fond">
                        <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-poses" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d421188.1259875271!2d1.5370175529156327!3d49.028173071130745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+Poses!3m2!1d49.302783!2d1.209404!5e1!3m2!1sfr!2sfr!4v1544558819114" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				
						</div>
						<p class="legende">Situation géographique</p>
						
						<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=231" target="_blank">My wind session</a></p>
					</div>
						
						<div class="col-xs-12 col-sm-6 fond">
							<a href="images/spots-lery-poses.jpg" target="_blank">
							<img src="images/spots-lery-poses.jpg" class="img-responsive ombre-image" alt="Les mises à l'eau en fonction du vent" title="Les mises à l'eau en fonction du vent">
							</a>
							<p class="legende">Les mises à l'eau</p>
						</div>
                    
                  </div>

                  <br><br>			  
				  
                  <h2>Prévisions méteo</h2>
				  
		  
				  <div class="row">				  		

					<div class="hidden-xs col-sm-8" style="margin-left: 5px;">
						<div class="fond-table encadrement-table" style="width: 540px;">
						<div style="width:520px;overflow:auto;"><iframe align="top" src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=33126&amp;units_wind=kts&amp;units_temp=C&amp;type=daily&amp;width=5830&amp;height=310&amp;color=f1eeee&amp;name=Poses&amp;app=windalert" width="5830" height="310" frameborder="0" scrolling="no" allowtransparency="no"></iframe></div>
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lake_des_deux_amants?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac des deux Amants</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
<!--						<iframe src="http://www.windguru.cz/int/distr_iframe.php?u=196518&s=4864&c=4a30721b47&lng=fr" width="520" height="238" frameborder="0" style="overflow-x: auto; overflow-y: auto; margin-left: 5px;"></iframe>
-->
<script id="wg_fwdg_4864_3_1544556530603">
(function (window, document) {
  var loader = function () {
    var arg = ["s=4864","m=3","uid=wg_fwdg_4864_3_1544556530603","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
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
							<a href="https://fr.windfinder.com/weatherforecast/lake_des_deux_amants" target="_blank">Superforecast</a><br><br>							
							<a href="https://www.ventusky.com/?p=49.39;0.90;8&l=wind-10m" target="_blank">Ventusky</a><br><br>
							<a href="http://www.xcweather.co.uk/forecast/L%C3%A9ry_poses" target="_blank">XCWeather</a><br><br>
							<a href="http://www.meteofrance.com/previsions-meteo-france/val-de-reuil/27100" target="_blank">Météo France</a>
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
(function (window, document) {
  var loader = function () {
    var arg = ["s=4864","m=3","uid=wg_fwdg_4864_3_1546007481425","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
						
						<a href="https://fr.windfinder.com/weatherforecast/lake_des_deux_amants" target="_blank"><img src="images/logo-windfinder.png" alt="superforecast" title="superforecast"></a>	
						<a href="http://www.windalert.com/map#49.299,2.002,9,1,!33126,2" target="_blank"><img src="images/logo-windalert.jpg"></a>								
						<a href="https://www.windguru.cz/4864" target="_blank"><img src="images/logo-windguru.gif"></a>
						<a href="https://www.ventusky.com/?p=49.39;0.90;8&l=wind-10m" target="_blank"><img src="images/logo-ventusky.png"></a>
						<a href="http://www.xcweather.co.uk/forecast/L%C3%A9ry_poses" target="_blank"><img src="images/logo-xcweather.png"></a>
						<a href="http://www.meteofrance.com/previsions-meteo-france/val-de-reuil/27100" target="_blank"><img src="images/logo-meteofrance.png"></a>
						</div>		
					</div>	
										<div class="col-xs-12 visible-xs fond">
						<br><br>
					</div>
				</div>	


					
				  <br>
				  <h2>Sessions en vidéo</h2>

<!--			  
				  <a name="commentaires"></a>
				  <h2>Commentaires</h2>
				  <p>
				  <a href="https://goo.gl/forms/ZlDIbV7DJhXjArND3" target="_blank">Poster un commentaire <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
				  </p>
				  
				   <br>
				 <div class="hidden-xs"> 
					<table id="tableCommentaires" class="table-commentaires"></table>
					<br>
				  </div>
-->	
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
			jQuery('#map-vaires').attr('src', itineraireSrc + 'ls0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+CD+110%2C+27740+Poses!3m2!1d49.302783!2d1.209404!5e1!3m2!1sfr!2sfr!4v1546773316328');
	}

        
		jQuery(document).ready(function($) {
		getWebCam();	 
		getMeteo();
		/*
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(maPosition);
		}

		*/
		 });
      </script>
   </body>
</html>

