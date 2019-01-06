<html>
<head>
<link href="/css/style.css" rel="stylesheet">
</head>
<body>
	  <?php
		$station = '33782285-df4e-4432-a3b3-06ddf1b3680a';
		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		$credit = '1';
		if ($_GET['credit'] != '') {
				$credit = $_GET['credit'];
		}	
	
		?>
				  <table>
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
						<td><p class="temperature-eau"></p></td>
					</tr>
-->					
					<tr>
						<td colspan=2><p style="text-align: right; font-size: 10px;">Données temps réel <em><a class="nom-sation" href="https://www.weatherlink.com/map/<?php echo $station; ?>" target="_blank"></a></em><?php if ($credit != '0') { echo '<br><a href="http://jvjulien.free.fr" target="_blank">au gré du vent 1.0</a>'; } ?></p></td>
					</tr>						
				</table>
				
	  <script src="/js/jquery.min.js"></script>
	  <script type="text/javascript" src="js/meteo2.js"></script>	  
      <script> 
		station = "<?php echo $station; ?>"
		var myVar =	setInterval(getMeteo, 30000);		
        $(document).ready(function($) { 
			getMeteo();		 
		});
      </script>
				
</body>
</html>