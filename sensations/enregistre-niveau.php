
<!-- https://console.cron-job.org/jobs 
	 https://statmeteo.000webhostapp.com/enregistre-meteo.php?station=louviers
	-->

	  <?php
	//  header("Access-Control-Allow-Origin: *");
	
	
	
	 ob_start();
//	  set_time_limit(0); 
//	  ini_set('default_socket_timeout', 900); // 900 Seconds = 15 Minutes
	  

		
function enregistre_niveau_station($station) {
		
		$ctx = stream_context_create(array('http'=>
			array(
				'timeout' => 1200,  //1200 Seconds is 20 Minutes
			)
		));
		
		$contents = file_get_contents('https://greduvent.herokuapp.com/sensations/niveau-foret-orient.php', false, $ctx);
		
		$obj = json_decode($contents);
		

		
	$niveau = $obj->value;	
		
		// BD
		$mysqli = new mysqli("localhost", "id12603904_jeeve", ">(sXJFq=T<0a<MrE", "id12603904_meteo");
		$Ajouter = "INSERT INTO niveau (station, hauteur) VALUES ('foret-orient', '" . floatval($niveau) . "')";
		$mysqli->query($Ajouter);
		$mysqli->close();				
		
		// ecriture dans GoogleSheet https://docs.google.com/spreadsheets/d/1pUXSOCwr7QYkFT5veDxLiZLBl-GHCR0ECJHZ5p6e7MQ/edit?usp=sharing
		// file_get_contents("https://script.google.com/macros/s/AKfycbwNiYJL49ynuyGNkqW0K-P3yCBm74lH3V2INQYDl_9Giqe557A/exec?station=%27" . $station . "%27&temperature=%27" . $temperature . "%27&vitesse=%27" . $vitesse . "%27&orientation=%27" . $direction . "%27", false, $ctx);
				
}

	enregistre_niveau_station('foret-orient');
			
		?>
		



