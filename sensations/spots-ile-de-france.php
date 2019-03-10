<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Les spots d'Ile-de-France</title>
      <META NAME="Description" CONTENT="Où naviguer en Ile-de-France. Les spots de la région parisienne pour la planche à voile et le windsurf. Prévisions, météo temps réel et webcams."/>
	  <?php include("../includes/header.php"); ?>	
	  <link rel="stylesheet" type="text/css" href="css/spots-ile-de-france.css" media="all"/>
		  	  
 <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Course",
      "name": "Windsurf Ile-de-France",
      "description": "Spots de windsurf (planche à voile)."
     }
 </script>	  
<script type="application/ld+json">
 {
   "@context": "http://schema.org",
   "@type": "Place",
   "name": "Jablines",
	"address": {
		"@type": "PostalAddress",
			"addressLocality": "Jablines",
			"addressCountry": "France"
		}
 }
 </script>	
<script type="application/ld+json">
 {
   "@context": "http://schema.org",
   "@type": "Place",
   "name": "Moisson-Lavacourt",
	"address": {
		"@type": "PostalAddress",
			"addressLocality": "Moisson",
			"addressCountry": "France"
		}
 }
 </script> 
<script type="application/ld+json">
 {
   "@context": "http://schema.org",
   "@type": "Place",
   "name": "Vaires sur Marne",
	"address": {
		"@type": "PostalAddress",
			"addressLocality": "Vaires sur Marne",
			"addressCountry": "France"
		}
 }
 </script>
 <script type="application/ld+json">
 {
   "@context": "http://schema.org",
   "@type": "Place",
   "name": "Léry-Poses",
	"address": {
		"@type": "PostalAddress",
			"addressLocality": "Val de Reuil",
			"addressCountry": "France"
		}
 }
 </script>
 
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
				<div class="col-xs-7">
                  <h1>Les spots d'Ile-de-France</h1>
				</div>
				<div class="col-xs-5">	
				  <p style="text-align:right;">
				  <a href="#commentaires">Un commentaire sur cette page, une suggestion, un problème... <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				  </p>
				 </div>
				</div> 

<br><br>				
 <div class="row">
	<div class="col-sm-8">
		<div class="embed-responsive embed-responsive-4by3 ombre-image">
			<iframe src="https://www.google.com/maps/d/embed?mid=10cRXGDzFD6BHC2YczFYe2xv6EbqLJB-t" width="640" height="480"></iframe>	
		</div>	
  </div>
    					<div class="visible-xs fond">
						<br><br>
					</div>
					
					<div class="col-sm-4">
						<div class="fond-table encadrement-table liste-spots">
						    <a href="https://docs.google.com/spreadsheets/d/1O3WDo7864s7npqM7r7zd2XXVWeVqhuqjgmzfObh40gY/edit?usp=sharing" target="_blank"><h2 id="titre-spots" >Spots</h2></a>
    <div id="menu-vent">
	<SELECT>
	<option value="" selected>Vent</option>
    <option value="N">N</option>
    <option value="NNE">NNE</option>
    <option value="NE">NE</option>
    <option value="ENE">ENE</option>
    <option value="E">E</option>	
	<option value="ESE">ESE</option>
	<option value="SE">SE</option>
	<option value="SSE">SSE</option>
	<option value="S">S</option>
    <option value="SSO">SSO</option>
    <option value="SO">SO</option>
    <option value="OSO">OSO</option>
    <option value="O">O</option>
    <option value="ONO">ONO</option>	
	<option value="NO">NO</option>
	<option value="NNO">NNO</option>
    </SELECT>
	</div>

							<table>
							<tr><td><p><a href="#poses">Léry-Poses</a></p></td><td><p class="notePoses"></p></td></tr>
							<tr><td><p><a href="#moisson">Moisson Lavacourt</a></p></td><td><p class="noteMoisson"></p></td></tr>
							<tr><td><p><a href="#saint-quentin">Saint-Quentin en Y.</a></p></td><td><p class="noteSaintQuentin"></p></td></tr>							
							<tr><td><p><a href="#jablines">Jablines</a></p></td><td><p class="noteJablines"></p></td></tr>
							<tr><td><p><a href="#vaires">Vaires sur Marne</a></p></td><td><p class="noteVairesSurMarne"></p></td></tr>
							<tr><td><p><a href="#grande-paroisse">La Grande-Paroisse</a></p></td><td><p class="noteGrandeParoisse"></p></td></tr>
							</table>
						<div class="hidden-xs">	
						<br>
						</div>
						<div id="comparer">
							<button onclick="clickComparer()">Comparer</button>
						</div>								
							
						</div>		

						
					</div>													
  
</div> 		
<!--
			   <h1>Les spots d'Ile-de-France</h1>
-->		
			   <br>	
				<a name="poses"></a>
			    <h2><input id="div-poses" type="button" value=" - " data-toggle="collapse" data-target="#item-div-poses" />  <a href="lac-lery-poses.php">Léry-Poses</a></h2>
<div id="item-div-poses" class="collapse in">		
		<p><input type="button" value="Orientations" data-toggle="collapse" data-target="#item-vue-poses" class="btn-releve" /> - <input type="button" value="Webcam" data-toggle="collapse" data-target="#item-webcam-poses" class="btn-releve" /> - <a href="https://fr.windfinder.com/weatherforecast/lake_des_deux_amants" target="_blank">Superforecast</a></p>		
			<div id="item-vue-poses" class="collapse">
							<a href="images/spots-lery-poses.jpg" target="_blank">
							<img src="images/spots-lery-poses-2.jpg" width=400 class="img-responsive ombre-image" alt="Les mises à l'eau en fonction du vent" title="Les mises à l'eau en fonction du vent">
							</a>
					<br>		
			</div>	

<div id="item-webcam-poses" class="collapse">			
  <div class="embed-responsive embed-responsive-16by9 ombre-image webcam">
    
	<video id="video-poses" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p>A13 près de Louviers, <a href='https://www.viewsurf.com/univers/trafic/vue/3254-france-haute-normandie-heudebouville-a13-pres-de-louviers-peage-de-heudebouville-vue-orientee-vers-le-havre-ou-caen' target="_blank">péage de Heudebouville</a>, vue orientée vers Le Havre ou Caen</p>  
	</div>
	  
  </div> 
  <br>
</div> 			
							
						
				
               <div class="row">
					<div class="col-sm-8">
						<div class="fond-table encadrement-table">
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

<!--
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lake_des_deux_amants?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac des deux Amants</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
-->						
					</div>	
                  <p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=231" target="_blank">My wind session</a> - en direct du lac et <a href="http://windsurf-lery-poses.soforums.com" target="_blank">ses passionnés</a> - <a href="http://wlpa.e-monsite.com/" target="_blank">association WLPA <img src="images/logo-wlpa.png"></a> - <a href="http://www.kiffmembers.org/" target="_blank">le covoiturage <img  height="60" src="images/logo-kiffmembers.gif"></a>
                  </p>
					
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=I27LERY4&credit=0"></iframe>	
					</div>
					<br>
					    <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-poses" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d421188.1259875271!2d1.5370175529156327!3d49.028173071130745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+Poses!3m2!1d49.302783!2d1.209404!5e1!3m2!1sfr!2sfr!4v1544558819114" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				
							</div>

				 </div>		
			</div>
			<br>
</div>		
				
<a name="moisson"></a>			   
			    <h2><input id="div-moisson" type="button" value=" - " data-toggle="collapse" data-target="#item-div-moisson" />  Moisson Lavacourt</h2>
<div id="item-div-moisson" class="collapse in">					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-moisson" value="Satellite" class="btn-releve" /> - <input type="button" data-toggle="collapse" data-target="#item-webcam-moisson" value="Webcam" class="btn-releve" /> - <a href="https://fr.windfinder.com/weatherforecast/moisson_lavacourt" target="_blank">Superforecast</a></p>			                								
               
			<div id="item-vue-moisson" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15691.154105754329!2d1.674180497185694!3d49.05563923112997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546124769919" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			</div>	
			<br>
			</div>
			
<div id="item-webcam-moisson" class="collapse">			
  <div class="embed-responsive embed-responsive-16by9 ombre-image webcam">
    
	<video id="video-moisson" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p>A13 près de Mantes la Ville, <a href='https://www.viewsurf.com/univers/trafic/vue/3246-france-ile-de-france-buchelay-a13-pres-de-mantes-la-ville-peage-de-buchelay-vue-orientee-vers-paris' target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>  
	</div>
	  
  </div> 
  <br>
</div> 			
			
			   
			   
			   <div class="row">
					<div class="col-sm-8">
						<div class="fond-table encadrement-table">
					
<script id="wg_fwdg_581_3_1544556198330">
(function (window, document) {
  var loader = function () {
    var arg = ["s=581","m=3","uid=wg_fwdg_581_3_1544556198330","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>				

<!--
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/moisson_lavacourt?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/moisson_lavacourt?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Moisson Lavacourt</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
-->
					</div>		
					<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=271" target="_blank">My wind session</a></p>
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=IMONTREU227&credit=0"></iframe>	
					</div>
					<br>
					    <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-moisson" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d211164.66341434096!2d1.8751571688649815!3d48.89321926889306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e6c12b153c22bf%3A0x2d227d4087bc4da9!2sMoisson!3m2!1d49.072928999999995!2d1.6691859999999998!5e1!3m2!1sfr!2sfr!4v1544557383138" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>						</div>

				 </div>		
			</div>

			

			   <br>
</div>			   
				


<a name="saint-quentin"></a>			   
			    <h2><input id="div-saint-quentin" type="button" value=" - " data-toggle="collapse" data-target="#item-div-saint-quentin" />  Saint-Quentin en Yvelines</h2>
<div id="item-div-saint-quentin" class="collapse in">					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-saint-quentin" value="Satellite" class="btn-releve" /> <!--- <input type="button" data-toggle="collapse" data-target="#item-webcam-saint-quentin" value="Webcam" class="btn-releve" />--> - <a href="https://fr.windfinder.com/forecast/montigny_le_bretonneux" target="_blank">Superforecast</a></p>			                								
               
			<div id="item-vue-saint-quentin" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11122.852984860809!2d2.0167699586466092!3d48.787014702848644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1552238675540" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			<br>
			</div><br>
			</div>
			
<div id="item-webcam-saint-quentin" class="collapse">			
  <div class="embed-responsive embed-responsive-16by9 ombre-image webcam">
    
	<video id="video-saint-quentin" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p>A13 près de Mantes la Ville, <a href='https://www.viewsurf.com/univers/trafic/vue/3246-france-ile-de-france-buchelay-a13-pres-de-mantes-la-ville-peage-de-buchelay-vue-orientee-vers-paris' target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>  
	</div>
	  
  </div> 
  <br>
</div> 			
					   
			   <div class="row">
					<div class="col-sm-8">
						<div class="fond-table encadrement-table">
					
<script id="wg_fwdg_161_3_1552237641461">
(function (window, document) {
  var loader = function () {
    var arg = ["s=161","m=3","uid=wg_fwdg_161_3_1552237641461","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
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
					<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=21" target="_blank">My wind session</a></p>
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=IMONTIGN117&credit=0"></iframe>	
					</div>
					<br>
					    <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-saint-quentin" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d105705.06057385674!2d2.117237644898744!3d48.835080237233456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e681460086fb29%3A0x48eb9dbd818f35f3!2sSaint-Quentin+en+Yvelines%2C+Montigny-le-Bretonneux!3m2!1d48.7700557!2d2.0249544!5e1!3m2!1sfr!2sfr!4v1552237922454" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>						</div>

				 </div>		
			</div>

			

			   <br>
</div>	

				
				
				
				
				
				
				<a name="jablines"></a>
			    <h2><input id="div-jablines" type="button" value=" - " data-toggle="collapse" data-target="#item-div-jablines" />  <a href="jablines.php">Jablines</a></h2>
<div id="item-div-jablines" class="collapse in">					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-jablines" value="Satellite" class="btn-releve" />  - <input type="button" data-toggle="collapse" data-target="#item-webcam-jablines" value="Webcam" class="btn-releve" /> - <a href="https://fr.windfinder.com/weatherforecast/lac-de-vaires-sur-Marne" target="_blank">Superforecast</a></p>			                								
               
			<div id="item-vue-jablines" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13272.819129650208!2d2.7189477352299387!3d48.91141958867993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546124228312" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>					<br>		
			</div>	
			<br>
			</div>
			   
<div id="item-webcam-jablines" class="collapse">			
    <div class="webcam">
		<img id="webcam-jablines" class="img-responsive ombre-image" src="https://www.panoramagique.com/wp-content/uploads/webcam/webcampanoraMagique.jpg">
		<div class="webcam-texte">
			<p>Euro Disney, <a href='https://www.panoramagique.com/' target="_blank">le grand ballon</a></p>  
		</div>
	</div>
	  
  <br>  
</div> 		
			   
			   <div class="row">
					<div class="col-sm-8">
						<div class="fond-table encadrement-table">

						<script id="wg_fwdg_90210_3_1538749208510">
(function (window, document) {
  var loader = function () {
    var arg = ["s=60274","m=3","uid=wg_fwdg_90210_3_1538749208510","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>						

<!--
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lac-de-vaires-sur-Marne?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lac-de-vaires-sur-Marne?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for undefined</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
-->						

						</div>
						<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=36" target="_blank">My wind session</a> - Le forum <a href="http://tontons-windsurfers.forumprod.com/" target="_blank">Windsurf 77</a></p>						
					</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=I77DAMPM4&credit=0"></iframe>	
					</div>
					<br>
					    <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-jablines" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d422235.08052076533!2d2.2754300925254305!3d48.904374951691736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e61c3ceabfc0ff%3A0x40b82c3688c57b0!2sJablines!3m2!1d48.917429!2d2.761107!5e1!3m2!1sfr!2sfr!4v1544557168668" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                        </div>

				 </div>		
			</div>

			
			   <br>	
</div>	
		   
			   <a name="vaires"></a>
			    <h2><input id="div-vaires" type="button" value=" - " data-toggle="collapse" data-target="#item-div-vaires" />  <a href="vaires-sur-marne.php">Vaires sur Marne</a></h2>
<div id="item-div-vaires" class="collapse in">	
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-vaires" value="Satellite" class="btn-releve" /> - <input type="button" data-toggle="collapse" data-target="#item-webcam-vaires" value="Webcam" class="btn-releve" /> - <a href="https://fr.windfinder.com/weatherforecast/lac-de-vaires-sur-Marne" target="_blank">Superforecast</a></p>			                								
               
			<div id="item-vue-vaires" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11109.004540217287!2d2.619497111646004!3d48.864038185964624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546124922241" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		
			</div>
				<br>
			   </div>
			   
<div id="item-webcam-vaires" class="collapse">			
  <div>
    <div class="webcam">
	<img id="webcam-vaires" class="img-responsive ombre-image" src="https://www.panoramagique.com/wp-content/uploads/webcam/webcampanoraMagique.jpg">
	<div class="webcam-texte">
		<p>Euro Disney, <a href='https://www.panoramagique.com/' target="_blank">le grand ballon</a></p>  
	</div>
	</div>  
  </div> 
  <br>
</div> 		
			   
			   
			   <div class="row">
					<div class="col-sm-8">
						<div class="fond-table encadrement-table">

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

<!--
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lac-de-vaires-sur-Marne?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lac-de-vaires-sur-Marne?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for undefined</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
-->
					</div>	
						<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=254" target="_blank">My wind session</a> - Le forum <a href="http://tontons-windsurfers.forumprod.com/" target="_blank">Windsurf 77</a></p>
				
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=ILEDEFRA44&credit=0"></iframe>	
					</div>
					<br>
					    <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-vaires" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d105647.94469813356!2d2.439899995693516!3d48.862143539942224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47e61074aa8587ab%3A0x40b82c3688c48d0!2sVaires-sur-Marne!3m2!1d48.873608999999995!2d2.6395429999999998!5e1!3m2!1sfr!2sfr!4v1544557341867" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				 </div>		
			</div>		
</div>

			   <br>	  
</div>			   
			   <a name="grande-paroisse"></a>
			    <h2><input id="div-grande-paroisse" type="button" value=" - " data-toggle="collapse" data-target="#item-div-grande-paroisse" />  <a href="grande-paroisse.php">La Grande-Paroisse</a></h2>
<div id="item-div-grande-paroisse" class="collapse in">					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-grande-paroisse" value="Satellite" class="btn-releve" /> - <input type="button" data-toggle="collapse" data-target="#item-webcam-grande-paroisse" value="Webcam" class="btn-releve" /> - <a href="https://www.windfinder.com/weatherforecast/la_grande_paroisse" target="_blank">Superforecast</a></p>			                								

			<div id="item-vue-grande-paroisse" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11273.578551281074!2d2.8976667986773608!3d48.373243326464745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546125059041" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
			</div>
			<br>
			</div>
			
<div id="item-webcam-grande-paroisse" class="collapse">			
  <div class="embed-responsive embed-responsive-16by9 ombre-image webcam">
    
	<video id="video-grande-paroisse" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p><a href='https://www.viewsurf.com/univers/trafic/vue/7354-france-ile-de-france-melun-a6-pres-de-melun-et-fontainebleau-vue-orientee-vers-lyon' target="_blank">Melun</a> / A6 près de Melun et Fontainebleau, vue orientée vers Lyon</p>  
	</div>
	  
  </div> 
  <br>
</div> 				
				
				

				<div class="row">
					<div class="col-sm-8">
						<div class="fond-table encadrement-table">

<script id="wg_fwdg_90210_3_1546091535290">
(function (window, document) {
  var loader = function () {
    var arg = ["s=90210","m=3","uid=wg_fwdg_90210_3_1546091535290","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>


<!--
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lac-de-vaires-sur-Marne?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lac-de-vaires-sur-Marne?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for undefined</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
-->
					</div>	
						<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=928" target="_blank">My wind session</a> - Le forum <a href="http://tontons-windsurfers.forumprod.com/" target="_blank">Windsurf 77</a></p>
						
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=ISAINTMA1672&credit=0"></iframe>	
					</div>
					<br>
					    <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-grande-paroisse" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d357010.49566299294!2d2.410506468175938!3d48.62537999052597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!4m5!1s0x47ef5da0654377a5%3A0xcc0ec2789c79926a!2sLa+Grande-Paroisse!3m2!1d48.386235!2d2.900735!5e1!3m2!1sfr!2sfr!4v1546091365802" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				
 </div>		
			</div>		
</div>

<!--					
				  <br>
				  <h2>Sessions en vidéo</h2>
<div class="row">
<div class="col-xs-12 col-sm-2 fond"></div>
<div class="col-xs-12 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLvp4urJ2GQfgRYjTU1YSO3oiQSjhBe7w0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>				  </div>
				  </p>
</div>
</div>
-->
<br>
</div>

<div class="row">
<div class="col-xs-12 fond">
				  <a name="commentaires"></a>
				  <h2>Commentaires</h2>
				  <p>
				  <a href="https://goo.gl/forms/ZlDIbV7DJhXjArND3" target="_blank">Poster un commentaire <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
				  </p>
				  
				   <br>
				 <div> 
					<table id="tableCommentaires" class="table-commentaires"></table>
					<br>
				  </div>
</div>
</div>
			

<br>


 				  <div id="swipe">
					<div class="row">
						<div class="col-xs-5">
							<p><a href="sensations.php">sensations</a> - <a id="page-precedente" href="windsurf-kitesurf.php">windsurf / kitesurf</a></p>
						</div>
						<div class="col-xs-7">
							<p align="right"><a id="page-suivante" href="powerkite.php">powerkite</a> - <a href="../emotions/emotions.php">émotions</a></p>
						</div>
					</div>
					<div class="row">
						<p class="numero-page">page 14</p>
						
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
	  <script type="text/javascript" src="js/vent-spot.js"></script>		
	  <script type="text/javascript" src="js/commentaires.js"></script>	
	  <script type="text/javascript" src="js/spots-ile-de-france.js"></script>
	
   </body>
</html>

