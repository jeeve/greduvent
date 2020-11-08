<html>
<head>
</head>
<body>
<!-- https://console.cron-job.org/jobs -->
	  <?php
	  
		$station = 'I27LERY4';
		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		$credit = '1';
		if ($_GET['credit'] != '') {
				$credit = $_GET['credit'];
		}	
	
		?>
				
	  <script src="/js/jquery.min.js"></script>
	  <script type="text/javascript" src="js/enregistre-meteo.js"></script>	  
      <script> 
		station = "<?php echo $station; ?>"
		enregistreMeteo(station);		 
      </script>
				
</body>
</html>