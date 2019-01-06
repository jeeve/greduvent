<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>au gré du vent 1.0</title>
      <META NAME="Description" CONTENT="Au travers de textes et de photos perso, ces pages sont une invitation au rêve. Sensible aux visages de la nature, je propose une petite balade en sa compagnie."/>
	  <?php include("includes/header.php"); ?>	
	  <link href="/css/fond-etoile.css" rel="stylesheet">
	  <link href="/css/index.css" rel="stylesheet">	
	<style type="text/css">
 .wrapper .overlay p {
	font-size: 130%;
	padding-left: 15px;
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
	font-size: 85%;
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
							<p style="text-align: center; color: #0FF;">
							<span class="titre">
							<span class="opacite">Meilleurs voeux !</span>
							<br>
							<span class="opacite2">et heureux anniversaire à ma p'tite sirène !</span>	
							</span>		
							<p class="opacite2" style="margin-top:0; text-align: right; color: #0FF;">
							au gré du vent 1.0</p>
							
							<p style="text-align: center; color: white;" class="opacite">
							
							<span style="font-style: normal;">PETITE ANNONCE 2017</span><br>
							<br>
							Cherche un électricien pour rétablir le courant entre les gens...<br>
							
							Un opticien pour changer leur regard...<br>
							
							Un artiste pour dessiner un sourire sur tous les visages...<br>
							
							Un maçon pour bâtir la paix...<br>
							
							Un jardinier pour cultiver la pensée...<br>
							
							Et un professeur de maths pour nous réapprendre... à compter Ies uns sur les autres !!!
							</p>
							<p style="margin-top:0; text-align: right; color: white;" class="opacite texte2">
							publié par Aiyana Aquena</p>	

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