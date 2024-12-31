<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>au gré du vent 1.0</title>
      <META NAME="Description" CONTENT="Au travers de textes et de photos perso, ces pages sont une invitation au rêve. Sensible aux visages de la nature, je propose une petite balade en sa compagnie."/>
	  <?php include("includes/header.php"); ?>	
	  <link href="/css/fond.css" rel="stylesheet">
	  <link href="/css/index.css" rel="stylesheet">	
	<style type="text/css">
 .wrapper .overlay p {
	font-size: 120%;
	padding-left: 15px;
	margin-right: 20px;
	}
	
  .titre {
	 font-size: 140%; 
  }	
	
/* en mode xs */
@media screen and (max-width: 767px) { 
  .titre {
	 font-size: 100%; 
  }
 .wrapper .overlay p {
	font-size: 70%;
	padding: 0;
	margin: 5px;
	}
}
</style>

   </head>
   <body id="swipe" >
      <div class="page-container">
      <!-- top navbar -->
      <?php include("includes/navbar.php"); ?>
	  
      <div class="container">
         <div class="row row-offcanvas row-offcanvas-left">
            <!-- sidebar -->
            <?php include("includes/sidebar.php"); ?>

            <!-- main area -->
            <div class="col-xs-12 col-sm-12 col-md-9 fond">
               <br><br><br> 
               <div class="row">
                  <div id="main-col" class="col-xs-12 col-sm-12 col-md-10 fond">	
					 <div class="wrapper">
						<a href="sommaire/sommaire.php">
						<div class="encadrement-table fond-table">
						<img class="img-responsive center-block" src="images/2017.jpg"> 
						</div>
						<div class="overlay">	
							<p style="text-align: center; color: ##ffffff;">
							<span class="titre">
							<span class="opacite">Meilleurs voeux pour la nouvelle année</span>
							<br>
								
							<p class="opacite" style="margin-top:0; text-align: right; color: ##ffffff;">
							au gré du vent 1.0</p>
							
							<p style="text-align: justify; color: white;" class="opacite2">
							« Je vous souhaite des rêves à n'en plus finir et l'envie furieuse d'en réaliser quelques uns. Je vous souhaite d'aimer ce qu'il faut aimer et d'oublier ce qu'il faut oublier. Je vous souhaite des passions, je vous souhaite des silences, je vous souhaite des chants d'oiseaux au réveil et des rires d'enfants. Je vous souhaite de respecter les différences des autres, parce que le mérite et la valeur de chacun sont souvent à découvrir. Je vous souhaite de résister à l'enlisement, à l'indifférence et aux vertus négatives de notre époque. Je vous souhaite enfin de ne jamais renoncer à la recherche, à l'aventure, à la vie, à l'amour, car la vie est une magnifique aventure et nul de raisonnable ne doit y renoncer sans livrer une rude bataille. Je vous souhaite surtout d'être vous, fier de l'être et heureux, car le bonheur est notre destin véritable. » 
							
							</p>
							<p style="margin-top:0px; text-align: right; color: white;" class="opacite2">
							les voeux de Jacques BREL, 1er janvier 1968 (Europe 1)</p>	

						</div>
						</a>
					</div>
               </div>
			   </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-10 fond">
                     <p align="right"><br>
                        <a id="page-suivante" href="sommaire/sommaire.php">en route...</a>
                     </p>
                  </div>
               </div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </div></div>
      <!--/.page-container-->
      <?php include("includes/footer.php"); ?>
   </body>
</html>