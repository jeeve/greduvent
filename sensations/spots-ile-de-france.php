<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Les spots d'Ile-de-France</title>
      <META NAME="Description" CONTENT="Où naviguer en Ile-de-France. Les spots de la région parisienne pour la planche à voile, le windsurf et le windfoil. Prévisions, météo temps réel et webcams."/>
	  <?php include("../includes/header.php"); ?>	
	  <link rel="stylesheet" href="css/jquery-ui.min.css">
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
   "name": "Saint-Quentin en Yvelines",
	"address": {
		"@type": "PostalAddress",
			"addressLocality": "Saint-Quentin en yvelines",
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
 <script type="application/ld+json">
 {
   "@context": "http://schema.org",
   "@type": "Place",
   "name": "Mézières-Écluzelles",
	"address": {
		"@type": "PostalAddress",
			"addressLocality": "Mézières-en-Drouais",
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
				<br>
				  <p style="text-align:right;">
				  <a href="#outils">outils</a> - <a href="#commentaires">commentaires</a>
				  </p>
				 </div>
				</div> 

<br><br>				
 <div class="row">
	<div class="col-sm-8">
	
<p><input type="button" data-target="#item-meteo" value="Météo" class="btn-enfonce" /> - <input type="button" value="Géographie" data-target="#item-geographie" class="btn-releve" /> </p>	

<div id="item-meteo" class="collapse in">
	
		<div class="embed-responsive embed-responsive-4by3 ombre-image">
<div id="page">
<iframe width="650" height="450" src="https://embed.windy.com/embed2.html?lat=48.669&lon=2.340&zoom=7&level=surface&overlay=wind&menu=&message=true&marker=&calendar=&pressure=&type=map&location=coordinates&detail=&detailLat=49.013&detailLon=2.005&metricWind=kt&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe> 		
</div>		
		</div>

</div>
<!--
<div id="item-geographie" class="collapse">

		<div class="embed-responsive embed-responsive-4by3 ombre-image">
		<iframe src="https://www.google.com/maps/d/embed?mid=10cRXGDzFD6BHC2YczFYe2xv6EbqLJB-t" width="640" height="480"></iframe>	
		</div>

</div>		
-->
		
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

							<table style="width: 100%;">
							<tr><td><p><a href="#poses">Léry-Poses</a></p></td><td><p class="notePoses"></p></td></tr>
							<tr><td><p><a href="#moisson">Moisson Lavacourt</a></p></td><td><p class="noteMoisson"></p></td></tr>
							<tr><td><p><a href="#ecluzelles">Mézières-Écluzelles</a></p></td><td><p class="noteEcluzelles"></p></td></tr>
						<!--	<tr><td><p><a href="#saint-quentin">Saint-Quentin en Y.</a></p></td><td><p class="noteSaintQuentin"></p></td></tr>					-->
							<tr><td><p><a href="#jablines">Jablines</a></p></td><td><p class="noteJablines"></p></td></tr>
							<tr><td><p><a href="#vaires">Vaires sur Marne</a></p></td><td><p class="noteVairesSurMarne"></p></td></tr>
							<tr><td><p><a href="#grande-paroisse">La Grande-Paroisse</a></p></td><td><p class="noteGrandeParoisse"></p></td></tr>
						<!--	<tr><td colspan="2"><p>Plus loin...</p></td></tr> -->
							<tr><td><p><a href="#foret-orient">Forêt d'Orient</a> (<span class="niveau-foret-orient"></span> %)</p></td><td><p class="noteForetOrient"></p></td></tr>
							</table>

						
						<div id="boutons-deplier-replier">
						<p>
	<button onclick="clickDeplier()">Tout déplier</button> <button onclick="clickReplier()">Tout replier</button>
	</p>
</div>
						<!--
						<div id="comparer">
							<button onclick="clickComparer()">Comparer</button>
						</div>								
						-->	
						</div>		

						
					</div>													
  
</div> 		



			   <br>	
				<a name="poses"></a>
			    <h2><input id="div-poses" type="button" value=" - " data-toggle="collapse" data-target="#item-div-poses" />  <a href="lery-poses.php">Léry-Poses</a></h2>
<div id="item-div-poses" class="collapse in">		
		
							
						
				
               <div class="row">
					<div class="col-sm-8">
					
		<p><input type="button" value="Orientations" data-target="#item-vue-poses" class="btn-releve" /> - <input type="button" value="Webcam" data-target="#item-webcam-poses" class="btn-releve" /> - <span class="hidden-xs"><input type="button" data-target="#item-infos-poses" value="Informations" class="btn-releve" /></span>
<span class="visible-xs-inline"><input type="button" data-target="#item-infos-poses" value="Infos" class="btn-releve"/></span> - 
<span class="hidden-xs"><input type="button" data-target="#item-histo-poses" value="Historique" class="btn-releve" /></span>
<span class="visible-xs-inline"><input type="button" data-target="#item-histo-poses" value="Histo" class="btn-releve"/></span>
</p>		
			

			
		
			
			<div id="item-vue-poses" class="collapse">
							<a href="images/spots-lery-poses.jpg" target="_blank">
							<img src="images/spots-lery-poses-2.jpg" width=400 class="img-responsive ombre-image" alt="Les mises à l'eau en fonction du vent" title="Les mises à l'eau en fonction du vent">
							</a>
					<br>		
			</div>	

<div id="item-webcam-poses" class="collapse">			
  <div class="embed-responsive embed-responsive-4by3 ombre-image webcam">
    
	<video id="video-poses" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p>A13 près de Louviers, <a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/131/haute-normandie/louviers/rouen-vers-paris' target="_blank">péage de Heudebouville</a>, vue orientée vers Paris</p>  
	</div>
	  
  </div> 
  <br>
</div> 	

<div id="item-infos-poses" class="collapse">
	<div class="infoPoses"></div>
  <br>
</div> 	

<div id="item-histo-poses" class="collapse histo">
    <form class="datetimeform">
		<div><p><label for="ma-date" style="margin-right: 10px;">Date <span style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;" id="ma-date-poses" type="text" name="date" value="25/02/2017"></input></p></div>
	</form>
    <br>
	<div class="row">
		<div class="col-xs-12 fond" id="historique-vent-poses"></div>
		<div class="col-xs-12 fond" id="historique-rose-poses"></div>
	</div>
	<br>			  
</div> 	

					
					
						<div class="fond-table encadrement-table">


<div class="item-meteo-poses collapse">



						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lake_des_deux_amants?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac des deux Amants</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>



</div>




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

					
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=louviers&credit=0"></iframe>	
					</div>
					<br>
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://fr.windfinder.com/weatherforecast/lake_des_deux_amants" target="_blank">Superforecast</a><br><br>							
							<a href="http://www.meteofrance.com/previsions-meteo-france/val-de-reuil/27100" target="_blank">Météo France</a><br><br>
							<a href="https://www.windguru.cz/4864" target="_blank">Windguru</a>
							</p>
			</div>

				 </div>		
			</div>
			<br>
</div>		
				
<a name="moisson"></a>			   
			    <h2><input id="div-moisson" type="button" value=" - " data-toggle="collapse" data-target="#item-div-moisson" /> <a href="moisson.php">Moisson Lavacourt</a></h2>
<div id="item-div-moisson" class="collapse in">					
			   <div class="row">
					<div class="col-sm-8">
					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-moisson" value="Satellite" class="btn-releve" /> - <input type="button" data-toggle="collapse" data-target="#item-webcam-moisson" value="Webcam" class="btn-releve" /> - <span class="hidden-xs"><input type="button" data-target="#item-infos-moisson" value="Informations" class="btn-releve" /></span><span class="visible-xs-inline"><input type="button" data-target="#item-infos-moisson" value="Infos" class="btn-releve"/></span>
 - 
<span class="hidden-xs"><input type="button" data-target="#item-histo-moisson" value="Historique" class="btn-releve" /></span>
<span class="visible-xs-inline"><input type="button" data-target="#item-histo-moisson" value="Histo" class="btn-releve"/></span>
</p>				                								
               
			   
			<div id="item-vue-moisson" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15691.154105754329!2d1.674180497185694!3d49.05563923112997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546124769919" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			</div>	
			<br>
			</div>
			
<div id="item-webcam-moisson" class="collapse">			
  <div class="embed-responsive embed-responsive-4by3 ombre-image webcam">
    
	<video id="video-moisson" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p>A13 près de Mantes la Ville, <a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris' target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>  
	</div>
	  
  </div> 
  <br>
</div> 	

<div id="item-infos-moisson" class="collapse">
<div class="infoMoisson"></div>
   <br>
</div> 	

<div id="item-histo-moisson" class="collapse histo">
    <form class="datetimeform">
		<div><p><label for="ma-date" style="margin-right: 10px;">Date <span style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;" id="ma-date-moisson" type="text" name="date" value="25/02/2017"></input></p></div>
	</form>
    <br>
	<div class="row">
		<div class="col-xs-12 fond" id="historique-vent-moisson"></div>
		<div class="col-xs-12 fond" id="historique-rose-moisson"></div>
	</div>
	<br>			  
</div> 	
					
					
						<div class="fond-table encadrement-table">
						
<div class="item-meteo-moisson collapse">
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/moisson_lavacourt?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/moisson_lavacourt?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Moisson Lavacourt</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
</div>						
					
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
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=mantes-la-jolie&credit=0"></iframe>	
					</div>
					<br>
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://fr.windfinder.com/weatherforecast/moisson_lavacourt" target="_blank">Superforecast</a><br><br>							
							<a href="http://www.meteofrance.com/previsions-meteo-france/moisson/78840" target="_blank">Météo France</a><br><br>
							<a href="https://www.windguru.cz/581" target="_blank">Windguru</a>
							</p>
			</div>
				 </div>		
			</div>

			

			   <br>
</div>			   
				




<a name="ecluzelles"></a>			   
			    <h2><input id="div-moisson" type="button" value=" - " data-toggle="collapse" data-target="#item-div-ecluzelles" /> <a href="ecluzelles.php">Mézières-Écluzelles</a></h2>
<div id="item-div-ecluzelles" class="collapse in">					
			   <div class="row">
					<div class="col-sm-8">
					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-ecluzelles" value="Satellite" class="btn-releve" /> - <input type="button" data-toggle="collapse" data-target="#item-webcam-ecluzelles" value="Webcam" class="btn-releve" /> - <span class="hidden-xs"><input type="button" data-target="#item-infos-ecluzelles" value="Informations" class="btn-releve" /></span><span class="visible-xs-inline"><input type="button" data-target="#item-infos-ecluzelles" value="Infos" class="btn-releve"/></span>
				 - 
<span class="hidden-xs"><input type="button" data-target="#item-histo-ecluzelles" value="Historique" class="btn-releve" /></span>
<span class="visible-xs-inline"><input type="button" data-target="#item-histo-ecluzelles" value="Histo" class="btn-releve"/></span></p>				                								
               	   
			   
			<div id="item-vue-ecluzelles" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11077.639428984821!2d1.4224061084166975!3d48.7148328689713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1589917230536!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>	
			<br>
			</div>
			
<div id="item-webcam-ecluzelles" class="collapse">			
  <div class="embed-responsive embed-responsive-4by3 ombre-image webcam">
    
	<video id="video-ecluzelles" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p>A13 près de Mantes la Ville, <a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris' target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>  
	</div>
	  
  </div> 
  <br>
</div> 	

<div id="item-infos-ecluzelles" class="collapse">
<div class="infoEcluzelles"></div>
   <br>
</div> 	

<div id="item-histo-ecluzelles" class="collapse histo">
    <form class="datetimeform">
		<div><p><label for="ma-date" style="margin-right: 10px;">Date <span style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;" id="ma-date-ecluzelles" type="text" name="date" value="25/02/2017"></input></p></div>
	</form>
    <br>
	<div class="row">
		<div class="col-xs-12 fond" id="historique-vent-ecluzelles"></div>
		<div class="col-xs-12 fond" id="historique-rose-ecluzelles"></div>
	</div>
	<br>			  
</div> 	
					
					
						<div class="fond-table encadrement-table">
						
<div class="item-meteo-ecluzelles collapse">
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/ecluzelles?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/ecluzelles?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Ecluzelles</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
</div>						
					
<script id="wg_fwdg_919254_3_1589916450009">
(function (window, document) {
  var loader = function () {
    var arg = ["s=919254","m=3","uid=wg_fwdg_919254_3_1589916450009", "wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
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
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=dreux&credit=0"></iframe>	
					</div>
					<br>
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://fr.windfinder.com/weatherforecast/ecluzelles" target="_blank">Superforecast</a><br><br>							
							<a href="http://www.meteofrance.com/previsions-meteo-france/ecluzelles/28500" target="_blank">Météo France</a><br><br>
							<a href="https://www.windguru.cz/919254" target="_blank">Windguru</a>
							</p>
			</div>
				 </div>		
			</div>

			   <br>
</div>	







<!--


<a name="saint-quentin"></a>			   
			    <h2><input id="div-saint-quentin" type="button" value=" - " data-toggle="collapse" data-target="#item-div-saint-quentin" />  <a href="saint-quentin-yvelines.php">Saint-Quentin en Yvelines</a></h2>
<div id="item-div-saint-quentin" class="collapse in">					
	
					   
			   <div class="row">
					<div class="col-sm-8">
					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-saintquentin" value="Satellite" class="btn-releve" /> - <input type="button" data-toggle="collapse" data-target="#item-webcam-saintquentin" value="Webcam" class="btn-releve" /> - <span class="hidden-xs"><input type="button" data-target="#item-infos-saintquentin" value="Informations" class="btn-releve" /></span><span class="visible-xs-inline"><input type="button" data-target="#item-infos-saintquentin" value="Infos" class="btn-releve"/></span></p>				                								
                
			   
			   
			<div id="item-vue-saintquentin" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11122.852984860809!2d2.0167699586466092!3d48.787014702848644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1552238675540" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			<br>
			</div><br>
			</div>
			
<div id="item-webcam-saintquentin" class="collapse">			
  <div class="embed-responsive embed-responsive-16by9 ombre-image webcam">
    
	<video id="video-saint-quentin" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
	<p><a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france/144/ile-de-france/paris/porte-de-ch-tillon-vers-porte-de-vanves' target="_blank">Paris, porte de Vanves</a> orientée vers Porte de Brancion</p>  
	</div>
	  
  </div> 
  <br>
</div> 

<div id="item-infos-saintquentin" class="collapse">
<div class="infoSaintQuentin"></div>

  <br>
</div> 	
								
					
			
						<div class="fond-table encadrement-table">
<div class="item-meteo-saintquentin collapse">								
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/montigny_le_bretonneux?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/moisson_lavacourt?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Montigny-le-Bretonneux</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
</div>					
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
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=montigny-le-bretonneux&credit=0"></iframe>	
					</div>
					<br>
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://www.windfinder.com/weatherforecast/montigny_le_bretonneux" target="_blank">Superforecast</a><br><br>							
							<a href="http://www.meteofrance.com/previsions-meteo-france/montigny-le-bretonneux/78180" target="_blank">Météo France</a><br><br>
							<a href="https://www.windguru.cz/161" target="_blank">Windguru</a>
							</p>
			</div>

				 </div>		
			</div>

			

			   <br>
</div>	

				
-->			
				
				
				
				
				<a name="jablines"></a>
			    <h2><input id="div-jablines" type="button" value=" - " data-toggle="collapse" data-target="#item-div-jablines" />  <a href="jablines.php">Jablines</a></h2>
<div id="item-div-jablines" class="collapse in">					
			   
			   <div class="row">
					<div class="col-sm-8">
					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-jablines" value="Satellite" class="btn-releve" />  - <input type="button" data-toggle="collapse" data-target="#item-webcam-jablines" value="Webcam" class="btn-releve" /> - <span class="hidden-xs"><input type="button" data-target="#item-infos-jablines" value="Informations" class="btn-releve" /></span><span class="visible-xs-inline"><input type="button" data-target="#item-infos-jablines" value="Infos" class="btn-releve"/></span>
				 - 
<span class="hidden-xs"><input type="button" data-target="#item-histo-jablines" value="Historique" class="btn-releve" /></span>
<span class="visible-xs-inline"><input type="button" data-target="#item-histo-jablines" value="Histo" class="btn-releve"/></span></p>            								
               
	   
			   
			   
			   
			<div id="item-vue-jablines" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13272.819129650208!2d2.7189477352299387!3d48.91141958867993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546124228312" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>					<br>		
			</div>	
			<br>
			</div>
			   
<div id="item-webcam-jablines" class="collapse">			
  <div class="embed-responsive embed-responsive-4by3 ombre-image webcam">
    
	<video class="video-eurodisney" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p>Euro Disney, <a href='https://www.panoramagique.com/' target="_blank">le grand ballon</a></p>  
	</div>
	  
  </div> 
  <br>  
</div> 		

<div id="item-infos-jablines" class="collapse">
<div class="infoJablines"></div>
<br>
</div> 	

<div id="item-histo-jablines" class="collapse histo">
    <form class="datetimeform">
		<div><p><label for="ma-date" style="margin-right: 10px;">Date <span style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;" id="ma-date-jablines" type="text" name="date" value="25/02/2017"></input></p></div>
	</form>
    <br>
	<div class="row">
		<div class="col-xs-12 fond" id="historique-vent-jablines"></div>
		<div class="col-xs-12 fond" id="historique-rose-jablines"></div>
	</div>
	<br>			  
</div> 	

					
						<div class="fond-table encadrement-table">
<div class="item-meteo-jablines collapse">								
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lac-de-vaires-sur-Marne?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac des deux Amants</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
</div>					

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
					</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=torcy&credit=0"></iframe>	
					</div>
					<br>
					<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://www.windfinder.com/weatherforecast/lac-de-vaires-sur-Marne" target="_blank">Superforecast</a><br><br>							
							<a href="https://meteofrance.com/previsions-meteo-france/jablines/77450" target="_blank">Météo France</a><br><br>
							<a href="https://www.windguru.cz/60274" target="_blank">Windguru</a>
							</p>
			</div>

				 </div>		
			</div>

			
			   <br>	
</div>	
		   
			   <a name="vaires"></a>
			    <h2><input id="div-vaires" type="button" value=" - " data-toggle="collapse" data-target="#item-div-vaires" />  <a href="vaires-sur-marne.php">Vaires sur Marne</a></h2>
<div id="item-div-vaires" class="collapse in">	
			   
			   
			   <div class="row">
					<div class="col-sm-8">
					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-vaires" value="Satellite" class="btn-releve" /> - <input type="button" data-toggle="collapse" data-target="#item-webcam-vaires" value="Webcam" class="btn-releve" /> - <span class="hidden-xs"><input type="button" data-target="#item-infos-vaires" value="Informations" class="btn-releve" /></span><span class="visible-xs-inline"><input type="button" data-target="#item-infos-vaires" value="Infos" class="btn-releve"/></span>
				 - 
<span class="hidden-xs"><input type="button" data-target="#item-histo-vaires" value="Historique" class="btn-releve" /></span>
<span class="visible-xs-inline"><input type="button" data-target="#item-histo-vaires" value="Histo" class="btn-releve"/></span></p>             								
 
					
						   

			<div id="item-vue-vaires" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11109.004540217287!2d2.619497111646004!3d48.864038185964624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546124922241" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		
			</div>
				<br>
			   </div>
			   
<div id="item-webcam-vaires" class="collapse">			
  <div class="embed-responsive embed-responsive-4by3 ombre-image webcam">
    
	<video class="video-eurodisney" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
<p>Euro Disney, <a href='https://www.panoramagique.com/' target="_blank">le grand ballon</a></p>  	</div>
	  
  </div> 
  <br>
</div> 		

<div id="item-infos-vaires" class="collapse">
<div class="infoVairesSurMarne"></div>
  <br>
</div> 
					
<div id="item-histo-vaires" class="collapse histo">
    <form class="datetimeform">
		<div><p><label for="ma-date" style="margin-right: 10px;">Date <span style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;" id="ma-date-vaires" type="text" name="date" value="25/02/2017"></input></p></div>
	</form>
    <br>
	<div class="row">
		<div class="col-xs-12 fond" id="historique-vent-vaires"></div>
		<div class="col-xs-12 fond" id="historique-rose-vaires"></div>
	</div>
	<br>			  
</div> 	

					
						<div class="fond-table encadrement-table">
<div class="item-meteo-vaires collapse">								
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lac-de-vaires-sur-Marne?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac des deux Amants</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
</div>					

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
				</div>
						
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=torcy&credit=0"></iframe>	
					</div>
					<br>
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://www.windfinder.com/weatherforecast/lac-de-vaires-sur-Marne" target="_blank">Superforecast</a><br><br>							
							<a href="https://meteofrance.com/previsions-meteo-france/jablines/77450" target="_blank">Météo France</a><br><br>
							<a href="https://www.windguru.cz/60276" target="_blank">Windguru</a>
							</p>
			</div>
	</div>
</div>			


			   <br>	  
</div>	
	

	
			   <a name="grande-paroisse"></a>
			    <h2><input id="div-grande-paroisse" type="button" value=" - " data-toggle="collapse" data-target="#item-div-grande-paroisse" />  <a href="grande-paroisse.php">La Grande-Paroisse</a></h2>
<div id="item-div-grande-paroisse" class="collapse in">					
				
				

				<div class="row">
					<div class="col-sm-8">
					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-grandeparoisse" value="Satellite" class="btn-releve" /> - <input type="button" data-toggle="collapse" data-target="#item-webcam-grandeparoisse" value="Webcam" class="btn-releve" /> - <span class="hidden-xs"><input type="button" data-target="#item-infos-grandeparoisse" value="Informations" class="btn-releve" /></span><span class="visible-xs-inline"><input type="button" data-target="#item-infos-grandeparoisse" value="Infos" class="btn-releve"/></span>
				 - 
<span class="hidden-xs"><input type="button" data-target="#item-histo-grandeparoisse" value="Historique" class="btn-releve" /></span>
<span class="visible-xs-inline"><input type="button" data-target="#item-histo-grandeparoisse" value="Histo" class="btn-releve"/></span></p>		                								

		   



			<div id="item-vue-grandeparoisse" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11273.578551281074!2d2.8976667986773608!3d48.373243326464745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1546125059041" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
			</div>
			<br>
			</div>
			 
<div id="item-webcam-grandeparoisse" class="collapse">			
  <div class="embed-responsive embed-responsive-16by9 ombre-image webcam">
    
	<video id="video-grande-paroisse" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p><a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a6/50/ile-de-france/fleury-en-bi-re/paris-vers-lyon' target="_blank">Melun</a> / A6 près de Melun et Fontainebleau, vue orientée vers Lyon</p>  
	</div>
	  
  </div> 
  <br>
</div> 	

<div id="item-infos-grandeparoisse" class="collapse">
<div class="infoGrandeParoisse"></div> 
 <br>
</div> 			
					
<div id="item-histo-grandeparoisse" class="collapse histo">
    <form class="datetimeform">
		<div><p><label for="ma-date" style="margin-right: 10px;">Date <span style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;" id="ma-date-grandeparoisse" type="text" name="date" value="25/02/2017"></input></p></div>
	</form>
    <br>
	<div class="row">
		<div class="col-xs-12 fond" id="historique-vent-grandeparoisse"></div>
		<div class="col-xs-12 fond" id="historique-rose-grandeparoisse"></div>
	</div>
	<br>			  
</div> 	

					
					
						<div class="fond-table encadrement-table">
<div class="item-meteo-grandeparoisse collapse">								
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/la_grande_paroisse?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/la_grande_paroisse?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for undefined</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
</div>					

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
						
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=montereau-fault-yonne&credit=0"></iframe>	
					</div>
					<br>
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://www.windfinder.com/weatherforecast/la_grande_paroisse?utm_campaign=homepageweather" target="_blank">Superforecast</a><br><br>
							<a href="http://www.meteofrance.com/previsions-meteo-france/la-grande-paroisse/77130" target="_blank">Météo France</a><br><br>
							<a href="https://www.windguru.cz/90210" target="_blank">Windguru</a>
							</p>
			</div>	
			</div>
			</div>	
<br>				
</div>








			   <a name="foret-orient"></a>
			    <h2><input id="div-foret-orient" type="button" value=" - " data-toggle="collapse" data-target="#item-div-foret-orient" />  <a href="foret-orient.php">La Forêt d'Orient</a></h2>
<div id="item-div-foret-orient" class="collapse in">					
				
				

				<div class="row">
					<div class="col-sm-8">
					
				<p><input type="button" data-toggle="collapse" data-target="#item-vue-foretorient" value="Satellite" class="btn-releve" /><!-- - <input type="button" data-toggle="collapse" data-target="#item-webcam-foretorient" value="Webcam" class="btn-releve" />--> - <span class="hidden-xs"><input type="button" data-target="#item-infos-foretorient" value="Informations" class="btn-releve" /></span><span class="visible-xs-inline"><input type="button" data-target="#item-infos-foretorient" value="Infos" class="btn-releve"/></span>
				 - 
<span class="hidden-xs"><input type="button" data-target="#item-histo-foretorient" value="Historique" class="btn-releve" /></span>
<span class="visible-xs-inline"><input type="button" data-target="#item-histo-foretorient" value="Histo" class="btn-releve"/></span></p>		                								

		   



			<div id="item-vue-foretorient" class="collapse">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d45080.63704030345!2d4.33706154791041!3d48.27179599100967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sforet%20orient!5e1!3m2!1sfr!2sfr!4v1600861587932!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>			</div>
			<br>
			</div>
			
<div id="item-webcam-foretorient" class="collapse">			
  <div class="embed-responsive embed-responsive-16by9 ombre-image webcam">
    
	<video id="video-foret-orient" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""></video>
	<div class="webcam-texte">
		<p><a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a6/50/ile-de-france/fleury-en-bi-re/paris-vers-lyon' target="_blank">Melun</a> / A6 près de Melun et Fontainebleau, vue orientée vers Lyon</p>  
	</div>
	  
  </div> 
  <br>
</div>	

<div id="item-infos-foretorient" class="collapse">
<div class="infoForetOrient"></div> 
 <br>
</div> 

<div id="item-histo-foretorient" class="collapse histo">
    <form class="datetimeform">
		<div><p><label for="ma-date" style="margin-right: 10px;">Date <span style="color:grey">(JJ/MM/AAAA) </span></label><input style="width: 130px;" id="ma-date-foretorient" type="text" name="date" value="25/02/2017"></input></p></div>
	</form>
    <br>
	<div class="row">
		<div class="col-xs-12 fond" id="historique-vent-foretorient"></div>
		<div class="col-xs-12 fond" id="historique-rose-foretorient"></div>
		<div class="col-xs-12 fond" id="historique-niveau-foretorient"></div>
	</div>
	<br>			  
</div> 	



<p style="margin-bottom: 15px;"><a href="https://www.seinegrandslacs.fr/quatre-lacs-reservoirs/lac-reservoir-seine" target="_blank">Niveau d'eau</a> : <span class="niveau-foret-orient"></span> % - <a id="lien-webcam-viewsurf-foret-orient" href="https://pv.viewsurf.com/1084/Lac-d-Orient" target="_blank">Webcam</a></p>					
					
					
					
						<div class="fond-table encadrement-table">
<div class="item-meteo-foretorient collapse">								
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/la_grande_paroisse?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/la_grande_paroisse?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for undefined</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
</div>					

<script id="wg_fwdg_92534_3_1600861761128">
(function (window, document) {
  var loader = function () {
    var arg = ["s=92534","m=3","uid=wg_fwdg_92534_3_1600861761128","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
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
						
				</div>			
				  <div class="visible-xs"><br></div>						
				   <div class="col-sm-4">
				   <div class="embed-responsive fond-table encadrement-table" style="height:150px;">
  					<iframe src="meteo-temps-reel.php?station=lusigny-sur-barse&credit=0"></iframe>	
					</div>
					<br>
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://www.windfinder.com/weatherforecast/lac-de-la-foret-d-orient" target="_blank">Superforecast</a><br><br>
							<a href="https://meteofrance.com/previsions-meteo-france/mesnil-saint-pere/10140" target="_blank">Météo France</a><br><br>
							<a href="https://www.windguru.cz/92534" target="_blank">Windguru</a>
							</p>
			</div>	
			</div>
			</div>	
  <br>			
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


<div class="row">
<div class="col-xs-12 fond">
				  <a name="outils"></a>
				  <h2>Outils</h2>
				
								<ul>
								<li><p><a href="https://outilsflask.herokuapp.com/gps/" >Convertisseur fichiers FIT et SML en GPX</a></p></li>
								<li><p><a href="https://joewein.net/bike/gpxmerge/" target="_blank">Fusion de GPX</a></p></li>
								<li><p><a href="https://www.mygpsfiles.com/app/" target="_blank">Lecteur de traces GPX</a></p></li>								
								</ul>
								

</div>
</div>


<br>


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
							<p><a href="sensations.php">sensations</a> - <a id="page-precedente" href="glisse.php">glisse</a></p>
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
	  <script type="text/javascript" src="js/info-spot.js"></script>
	  <script type="text/javascript" src="js/commentaires.js"></script>	
	  <script type="text/javascript" src="js/spots-ile-de-france.js"></script>
	  <script src="js/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/historique-vent.js"></script>	  
	
   </body>
</html>

