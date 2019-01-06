<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Jablines</title>
      <META NAME="Description" CONTENT="Le lac de Jablines."/>
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
				  <h1>Jablines</h1>
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
						<td colspan=2><p style="text-align: right; font-size: 10px;"><em>Données temps réel <a class="nom-sation" href="https://www.weatherlink.com/map/12d9760b-0b8e-4564-9537-13551756fd15" target="_blank">St Thibault Pol</a></em></p></td>
					</tr>						
				</table>
				</div>
				</div>
						
				  <br><br>
                  <div class="row">
                    <!-- <div class="col-xs-12 col-sm-2"></div> -->
                     <div class="col-xs-12 col-sm-6 fond">
                        <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26383.71131348098!2d2.7431159007940233!3d48.915702174750116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1543606578279" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
						<p class="legende">Situation géographique</p>
						
						
					</div>
						
						<div class="col-xs-12 col-sm-6 fond">
														
							<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=36" target="_blank">My wind session</a></p>
							<br>
							<p class="legende">Le forum des <a href="http://tontons-windsurfers.forumprod.com/" target="_blank">Tontons Windsurfers</a></p>
						</div>
                    
                  </div>

                  <br><br>			  
				  
                  <h2>Prévisions méteo</h2>
				  
		 			  				
				  <div class="row">				  		

					<div class="hidden-xs col-sm-8" style="margin-left: 5px;">
						<div class="fond-table encadrement-table" style="width: 540px;">
						<div style="width:520px;overflow:auto;"><iframe align="top" src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=33100&amp;units_wind=kts&amp;units_temp=C&amp;type=daily&amp;width=5830&amp;height=310&amp;color=f1eeee&amp;name=Jablines&amp;app=windalert" width="5830" height="310" frameborder="0" scrolling="no" allowtransparency="no"></iframe></div>
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lac-de-vaires-sur-Marne?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lac-de-vaires-sur-Marne?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for undefined</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
						<script id="wg_fwdg_90210_3_1538749208510">
(function (window, document) {
  var loader = function () {
    var arg = ["s=60274","m=3","uid=wg_fwdg_90210_3_1538749208510","wj=knots","tj=c","odh=0","doh=24","fhours=240","vt=forecasts",
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
							<a href="https://www.ventusky.com/?p=48.896;2.764;10&l=wind-10m" target="_blank">Ventusky</a><br><br>
							<a href="https://www.windfinder.com/#13/48.9113/2.7474/sfc" target="_blank">Superforecast</a><br><br>
							<a href="https://www.xcweather.co.uk/forecast/jablines" target="_blank">XCWeather</a><br><br>
							<a href="http://www.meteofrance.com/previsions-meteo-france/jablines/77450" target="_blank">Météo France</a>
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
						<a href="http://wx.iwindsurf.com/spot/33100" target="_blank"><img src="images/logo-windalert.jpg"></a>								
						<a href="https://www.windfinder.com/forecast/lac-de-vaires-sur-Marne" target="_blank"><img src="images/logo-windfinder.png" alt="superforecast" title="superforecast"></a>	
						<a href="https://www.windguru.cz/60274" target="_blank"><img src="images/logo-windguru.gif"></a>
						<a href="https://www.ventusky.com/?p=48.896;2.764;10&l=wind-10m" target="_blank"><img src="images/logo-ventusky.png"></a>
						<a href="https://www.xcweather.co.uk/forecast/jablines" target="_blank"><img src="images/logo-xcweather.png"></a>
						<a href="http://www.meteofrance.com/previsions-meteo-france/jablines/77450" target="_blank"><img src="images/logo-meteofrance.png"></a>
						</div>		
					</div>	
				</div>	
				


<br>
<br>
 				  <div id="swipe">
					<div class="row">
						<div class="col-xs-5">
							<p><a href="sensations.php">sensations</a> - <a href="windsurf-kitesurf.php">windsurf / kitesurf</a> - <a id="page-precedente" href="lac-lery-poses.php">lac de Léry-Poses</a></p>
						</div>
						<div class="col-xs-7">
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
	  <script type="text/javascript" src="js/meteo2.js"></script>	  
      <script> 
	    station = "12d9760b-0b8e-4564-9537-13551756fd15";
		var myVar =	setInterval(getMeteo, 30000);	
         $(document).ready(function($) {	 
			getMeteo();
		 });
	  </script>		
   </body>
</html>

