<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>et vous ?</title>
      <META NAME="Description" CONTENT="Le livre d'or. N'hésitez pas à y déposer un petit message..."/>
	  <?php include("../includes/header.php"); ?>	
	  <link href="css/commentaires.css" rel="stylesheet">
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
               <h1>et vous ?</h1>
				 <!-- 
				  <iframe src="https://spreadsheets.google.com/embeddedform?formkey=dGRnSHRTdGEzZXJyTWc3RWFrOWJKSnc6MQ" scrolling="auto" width="500" height="680" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
				-->	
				<br>
				<p>
				  <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScUMpl5aHuNL5oAYS7NuLTtU7IFQ2Jr4G_q_GnL9lEEzshdkA/viewform?usp=sf_link">Si vous souhaitez laisser un message, n'hésitez pas ! <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				  </p>
				  <p><br></p>
				  
				<!-- 
				<iframe width='700' height='600' scrolling="auto"  frameborder='0' src="https://docs.google.com/spreadsheets/d/1SmZbYjacC8YWSgTnOWOAqsN8DzZOunedhifsXO4iO_s/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>	
				-->
				
				<table id="tableCommentaires" class="table-commentaires"></table>
				
<br><br>
<div id="swipe"><div class="row">
<div class="col-xs-4"><p><a id="page-precedente" href="../a-propos/a-propos.php">à propos...</a></p></div>
<div class="col-xs-8">
<p align="right">n'hésitez pas à vous abonner via le <a rel="alternate" type="application/rss+xml" href="../news.xml" target="_blank">flux RSS 
<img alt="Flux RSS" title="Flux RSS" src="../images/logo_rss.png"/></a><br>
merci de votre visite, à bientôt...
</p>
</div>
</div><div class="row"><p class="numero-page">page 27</p>	

</div></div>



				 
               </div>
               <!-- /.col-xs-12 main -->
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </div>
      <!--/.page-container-->
	  <?php include("../includes/footer.php"); ?>
	  <script type="text/javascript" src="js/commentaires.js"></script>	  
</body>
</html>