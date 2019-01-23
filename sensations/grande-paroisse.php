<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>La Grande-Paroisse</title>
      <META NAME="Description" CONTENT="Le lac de La Grande Paroisse."/>
	  <?php include("../includes/header.php"); ?>	
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
				<div class="col-sm-8">
				  <h1>La Grande-Paroisse</h1>
				</div>
				<br>
				  <div class="col-xs-1"></div>
				  <div class="col-xs-10 col-sm-3 fond-table encadrement-table">
				  <table id="meteo">
					<tr>
						<td><p>Vitesse vent </p></td>
						<td><p class="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td>
						<td><p class="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td>
						<td><p class="temperature-air"></p></td>
					</tr>
					<!--
					<tr>
						<td><p>Eau </p></td>
						<td><p id="temperature-eau"></p></td>
					</tr>
-->					
					<tr>
						<td colspan=2><p style="text-align: right; font-size: 10px;"><em>Données temps réel <a class="nom-sation" href="https://www.weatherlink.com/map/c788dd48-d3d9-4cdc-845f-0bf404360799" target="_blank"></a></em></p></td>
					</tr>						
				</table>
				</div>
				</div>
						
				  <br><br>
                  <div class="row">
                    <!-- <div class="col-xs-12 col-sm-2"></div> -->
                     <div class="col-xs-12 col-sm-6 fond">
                        <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7928.581507550365!2d2.894412360008576!3d48.37266914912942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ef5d9c58ece64f%3A0xef2f7065145151ff!2sEXO+77+La+Grande+Paroisse!5e1!3m2!1sfr!2sfr!4v1538747020066" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
						<p class="legende">Situation géographique</p>
						
						
					</div>
						
						<div class="col-xs-12 col-sm-6 fond">
							<a href="http://eauplate.com/Paroisse.html" target="_blank">
							<img style="margin-left: auto; margin-right: auto;" src="images/grande-paroisse.gif" class="img-responsive ombre-image" alt="Les mises à l'eau" title="Les mises à l'eau">
							</a>
							
							<p class="legende"><a href="http://eauplate.com/Paroisse.html" target="_blank">Le spot sur eauplate.com</a></p>
							<br>
							<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=928" target="_blank">My wind session</a></p>
							<br>
							<p class="legende">Le forum des <a href="http://tontons-windsurfers.forumprod.com/" target="_blank">Tontons Windsurfers</a></p>
						</div>
                    
                  </div>

                  <br><br>			  
				  
                  <h2>Prévisions méteo</h2>
				  
		 			  				
				  <div class="row">				  		

					<div class="hidden-xs col-sm-8" style="margin-left: 5px;">
						<div class="fond-table encadrement-table" style="width: 540px;">
						<div style="width:520px;overflow:auto;"><iframe align="top" src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=33106&amp;units_wind=kts&amp;units_temp=C&amp;type=daily&amp;width=5830&amp;height=310&amp;color=f1eeee&amp;name=La Grande-Paroisse&amp;app=windalert" width="5830" height="310" frameborder="0" scrolling="no" allowtransparency="no"></iframe></div>
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/la_grande_paroisse?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/la_grande_paroisse?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for undefined</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
						<script id="wg_fwdg_90210_3_1538749208510">
(function (window, document) {
  var loader = function () {
    var arg = ["s=90210","m=3","uid=wg_fwdg_90210_3_1538749208510","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
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
							<a href="https://www.windfinder.com/weatherforecast/la_grande_paroisse?utm_campaign=homepageweather" target="_blank">Superforecast</a><br><br>
							<a href="https://www.ventusky.com/?p=48.334;2.921;9&l=wind-10m" target="_blank">Ventusky</a><br><br>
							<a href="https://www.xcweather.co.uk/forecast/grande-paroisse" target="_blank">XCWeather</a><br><br>
							<a href="http://www.meteofrance.com/previsions-meteo-france/la-grande-paroisse/77130" target="_blank">Météo France</a>
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
						<a href="http://www.windalert.com/spot/33106" target="_blank"><img src="images/logo-windalert.jpg"></a>								
						<a href="https://www.windfinder.com/weatherforecast/la_grande_paroisse?utm_campaign=homepageweather" target="_blank"><img src="images/logo-windfinder.png" alt="superforecast" title="superforecast"></a>	
						<a href="https://www.windguru.cz/90210" target="_blank"><img src="images/logo-windguru.gif"></a>
						<a href="https://www.ventusky.com/?p=48.334;2.921;9&l=wind-10m" target="_blank"><img src="images/logo-ventusky.png"></a>
						<a href="https://www.xcweather.co.uk/forecast/grande-paroisse" target="_blank"><img src="images/logo-xcweather.png"></a>
						<a href="http://www.meteofrance.com/previsions-meteo-france/la-grande-paroisse/77130" target="_blank"><img src="images/logo-meteofrance.png"></a>
						</div>		
					</div>	
				</div>	
				
<br>
				  <h2>Sessions en vidéo</h2>
				  		
				  <br><a name="grande-paroisse-6-10-2018"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-16by9 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/YyNFm05u1Qs?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=214744" target="_blank">
				  La Grande-Paroisse, samedi 6 octobre 2018</a>
				  </p>
				  </div></div>

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
						<p class="numero-page">page 14d</p>
						
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
	    station = "ISAINTMA1672";
		var myVar =	setInterval(getMeteo, 30000);	
         $(document).ready(function($) {	 
			getMeteo();
		 });
	  </script>		
   </body>
</html>

