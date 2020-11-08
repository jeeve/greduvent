
<!-- https://console.cron-job.org/jobs -->
	  <?php
	  
	  ob_start();
	  
		$station = 'I27LERY4';
		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		$credit = '1';
		if ($_GET['credit'] != '') {
				$credit = $_GET['credit'];
		}	
	
	
		
		
		?>
		
<html>
<body>


				
	  <script src="/js/jquery.min.js"></script>
	  <script type="text/javascript" src="js/enregistre-meteo.js"></script>	  
      <script> 
		station = "<?php echo $station; ?>"
		enregistreMeteo(station);		 
      </script>
</body>				
</html>
<?php

ob_end_flush();

?>