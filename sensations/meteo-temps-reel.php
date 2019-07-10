<html>
<head>
<link href="/css/style.css" rel="stylesheet">
</head>
<body>
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
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a class="id-station" target="_blank"><?php echo $station; ?></a></em><?php if ($credit != '0') { echo '<br><a href="https://greduvent.herokuapp.com" target="_blank">au gré du vent 1.0</a>'; } ?></p></td>
					</tr>						
				</table>
				
	  <script src="/js/jquery.min.js"></script>
	  <script type="text/javascript" src="js/meteo3.js"></script>	  
      <script> 
		station = "<?php echo $station; ?>"
		setIDStation();
		var myVar =	setInterval(getMeteo, 30000);		
        $(document).ready(function($) { 
			getMeteo();		 
		});
      </script>
				
</body>
</html>