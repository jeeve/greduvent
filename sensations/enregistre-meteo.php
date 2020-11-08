
<!-- https://console.cron-job.org/jobs 
	 https://statmeteo.000webhostapp.com/enregistre-meteo.php?station=louviers
	-->

	  <?php
	//  header("Access-Control-Allow-Origin: *");
	 ob_start();
//	  set_time_limit(0); 
//	  ini_set('default_socket_timeout', 900); // 900 Seconds = 15 Minutes
	  
		$station = 'louviers';
		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		$ctx = stream_context_create(array('http'=>
			array(
				'timeout' => 1200,  //1200 Seconds is 20 Minutes
			)
		));
		
		$contents = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=' . $station . ',fr&appid=a132b29f173b49547663b30b40006e6f', false, $ctx);
		
		$obj = json_decode($contents);
		

		
	$temperature = $obj->main->temp;
	$vitesse = $obj->wind->speed;
	$direction = $obj->wind->deg;
		
		if ($temperature != "") {
			$temperature = $temperature - 273.15;
		}
			
		
		if ($vitesse != "") {
			$vitesse = $vitesse * 1.944;
		}
		
		file_get_contents("https://script.google.com/macros/s/AKfycbwNiYJL49ynuyGNkqW0K-P3yCBm74lH3V2INQYDl_9Giqe557A/exec?station=%27" . $station . "%27&temperature=%27" . $temperature . "%27&vitesse=%27" . $vitesse . "%27&orientation=%27" . $direction . "%27", false, $ctx);
		
		?>
		



