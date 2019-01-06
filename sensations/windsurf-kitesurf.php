<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>windsurf / kitesurf</title>
      <META NAME="Description" CONTENT="La passion du windsurf et du kite. Equipement, sessions, vidéos."/>
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
                  <h1>windsurf / kitesurf</h1>
					<br>
									  
					<div class="row">
					<div class="col-xs-12 col-sm-2 fond"></div>
					<div class="col-xs-12 col-sm-8 fond">					
				    <p align="center">
					<img src="images/planche.gif" class="img-responsive" />
					</p>
					</div>
					</div>
				
					<br><br>
					<div class="row">
					<div class="col-xs-12 col-sm-2 fond"></div>
					<div class="col-xs-12 col-sm-8 fond">					
				    <p align="center">				
					<div class="embed-responsive embed-responsive-4by3 ombre-image">
<!--
					<iframe marginwidth="0" marginheight="0" scrolling="no" src="http://www.dailymotion.com/videozap/playlist/x4hxv_jeeve_glisse?position=right&amp;rows=4&amp;auto=1" frameborder="0" height="285" width="520" class="embed-responsive-item"></iframe> 
					
					<iframe src="http://player.vimeo.com/hubnut/album/82498?color=44bbff&amp;background=000000&amp;slideshow=1&amp;video_title=0&amp;video_byline=0" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen class="embed-responsive-item"></iframe>
-->
<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLvp4urJ2GQfikNiIAzQDfpdsvO31awN69" frameborder="0" allowfullscreen class="embed-responsive-item"></iframe>

					</div>
					</div>
					</div>
					
				  <br><br>
                  <div class="row vertical-align">
                    
                     <div class="col-xs-12 col-sm-6 fond">
					 <h2><a target="_blank" href="http://windsurf-sessions.eg2.fr/rider_matos.php?id_rider=3185">Equipement</a></h2>
					 <p>
					<h2>Windsurf</h2>
					<ul>
						<li><p>flotteur&nbsp; Exocet Scross 116 litres modèle 2014<br>
						dimensions : 2 m 42 x 68 cm</p>
						</li>
						<li><p>voile Neilpryde V6 modèle 2006<br>
						surface : 6,5 m²</p></li>          
						<li><p>voile Neilpryde V8 modèle 2017<br>
						surface : 7,7 m²</p></li>          
						</ul></p>
		<p align="center">ça dépote !</p>
					<h2>Kitesurf</h2>
					<p>Après quelques années de pratique, j'ai déposé les armes pour me recentrer sur la planche.
					</p>
                        <p><br></p>
                     </div>
                     <div class="col-xs-12 col-sm-6 fond">
                        <p align="center">
                           <a href="../mer/safaga.php">
						   <img src="images/wind-casimir.jpg" alt="Casimir ride à Safaga" title="Casimir ride à Safaga" class="img-responsive ombre-image" />
                             <p class="legende">Safaga</p></a>
                        </p>
                     </div>
                  </div>

				  <p align="center">
				  <img src="images/planche-casimir-animation.gif" ></p>
</p>
  
					<div class="container-fluid; float:left">
					<div class="row">
					<div class="col-xs-12 col-sm-1 fond"></div>
					<div class="col-xs-12 col-sm-10 fond">
					<div class="embed-responsive embed-responsive-4by3 ombre-image">  
					<p align="center">
<iframe scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.fr/maps/ms?hl=fr&amp;ie=UTF8&amp;t=k&amp;msa=0&amp;msid=200553150720547264858.000479f72ea8ec718d36b&amp;ll=48.385442,-0.65918&amp;spn=5.107788,9.360352&amp;z=6&amp;output=embed" frameborder="0" height="350" width="425" class="embed-responsive-item"></iframe>
					</p>
					</div>
								
					<p class="legende">
					<a target="_blank" href="http://maps.google.fr/maps/ms?hl=fr&amp;ie=UTF8&amp;t=k&amp;msa=0&amp;msid=200553150720547264858.000479f72ea8ec718d36b&amp;ll=48.385442,-0.65918&amp;spn=5.107788,9.360352&amp;z=6&amp;source=embed&quot; style=&quot;color:#0000FF;text-align:left">
					Quelques spots testés et approuvés</a></p>
					 

					</div>
					</div>
					</div>
  <br>
				  <div class="row">
				  <div class="col-xs-12 col-sm-1 fond"></div>
				  <div class="col-xs-12 col-sm-10 fond">

				<a name="webcam-poses"></a>
				  <p align="center">
				  <!--
				  <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
				  <iframe id="WLPVantagePro" src="http://meteocamtroislacs.dtdns.net/axis-cgi/mjpg/video.cgi?resolution=800x600&amp;compression=30&amp;camera=1" scrolling="no" width="800" height="600" frameborder="0" style="margin-left: -5px; margin-top: -5px;"></iframe>
				  </div>
				  -->
<?php
if (!(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE)) {				  
?>				  
					<a href="lac-lery-poses.php">
                     <img id="webcam-image" src="http://meteocamtroislacs.dtdns.net/mjpg/video.mjpg" width="1024px" height="576px" class="img-responsive ombre-image">                  
					</a> 
<?php				  
} else {
?>
				  <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
				  <iframe id="WLPVantagePro" src="http://meteocamtroislacs.dtdns.net/axis-cgi/mjpg/video.cgi?resolution=800x600&amp;compression=30&amp;camera=1" scrolling="no" width="800" height="600" frameborder="0" style="margin-left: -5px; margin-top: -5px;"></iframe>
				  </div>
<?php
}
?>	
				</p>
				  <p class="legende">En direct du <a href="lac-lery-poses.php">lac de Léry-Poses</a>
				  </p>
				</div>
				</div>	


<p align="center">

</p><p align="center">&nbsp;
</p><div align="center">
  <table border="0" width="270">
    <tbody><tr>
      <td width="258">
		<p align="center">
		<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
		
		<h2 align="center"><a target="_blank" href="http://windsurf-sessions.eg2.fr/rider_sessions.php?id_rider=3185">Récits de sessions</a></h2>   
      </p>
	  </td></tr></tbody></table></div>

				
				  <a name="ca-zef-au-crotoy"></a>
				  <p align="center">
				  <a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=166956" target="_blank">
				  <img alt="Le Crotoy - 16 mai 2011 - prise de vue Mireille M." title="Le Crotoy - 16 mai 2011 - prise de vue Mireille M." src="images/windsurf-full-speed.jpg" class="img-responsive ombre-image" />
				  </a>
				  </p>
				  <p class="legende"><a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=166956" target="_blank">Ca zef au Crotoy</a></p>
				  
				  <br><br>
				  <p align="center">
				  <img alt="Kitesurf au Crotoy - 1er mai 2009 - prise de vue Mireille M." title="Kitesurf au Crotoy - 1er mai 2009 - prise de vue Mireille M." src="images/le-crotoy-kitesurf.jpg" class="img-responsive ombre-image" />			  
				  </p>

				  <br><br>
				  <p align="center">
				  <img alt="Ride en baie de Beaussais - 7 août 2011 - photo Mireille M." title="Ride en baie de Beaussais - 7 août 2011 - photo Mireille M." src="images/run-beaussais.jpg" class="img-responsive ombre-image" />			  
				  </p>

				  <br>

				  <br><a name="lery-poses-10-05-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/aP1cxMEdWIM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
				  <a href="lac-lery-poses.php">Léry-Poses</a>, jeudi 10 mai 2018<br>
				  Le jour où j'ai filmé Phil95.
				  </p>
				  </div></div>	
				  			
				  <br><a name="kitesurf-crotoy-1-5-2009"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				 <iframe width="560" height="315" src="https://www.youtube.com/embed/zJr2d2GKdbw?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?target=id_rider&id_rider=3185&id_session=166966" target="_blank">
				  Session kitesurf au Crotoy, le 1er mai 2009</a><br>
				  Un peu de vent mais pour ce qui est du soleil...
				  </p>
				  </div></div>
				  
				  <br><a name="windsurf-aout-2017"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				 <iframe width="560" height="315" src="https://www.youtube.com/embed/XNFeOSk6Mck?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
				  Planche à voile à <a href="../mer/saint-jacut.php">Saint-Jacut de la Mer</a>, août 2017
				  </p>
				  </div></div>				 
			  
														  
				  				  
			<br>
			<div id="swipe"><div class="row">
<div class="col-xs-3"><p><a id="page-precedente" href="sensations.php">sensations</a></p></div>
<div class="col-xs-9">
			<p align="right"> <a id="page-suivante" href="spots-ile-de-france.php">les spots d'Ile-de-France</a> - <a href="powerkite.php">powerkite</a> - <a href="../emotions/emotions.php">émotions</a></p>
			</div>
			</div><div class="row"><p class="numero-page">page 13</p>	

</div></div>
			

            </div>
            <!--/.row-->
         </div>
         <!--/.container--></div>
      </div>
      <!--/.page-container-->
	  <?php include("../includes/footer.php"); ?>		  
      <script> 
         $(document).ready(function($) {
			 
		 if ($('#webcam-image').innerHeight() == 0 || ($('#webcam-image').innerHeight() == $('#webcam-image').innerWidth())) { // la webcam ne marche pas
			 $('#webcam-image').parent().html('<img id="webcam-image" src="images/mire.png" width="1024px" height="576px" class="img-responsive ombre-image">');
		 }
		 
		 });
	  </script>	
   </body>
</html>