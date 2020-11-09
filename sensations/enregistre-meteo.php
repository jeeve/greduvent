
<!-- https://console.cron-job.org/jobs 
	 https://statmeteo.000webhostapp.com/enregistre-meteo.php?station=louviers
	-->

	  <?php
	//  header("Access-Control-Allow-Origin: *");
	
	date_default_timezone_set('Europe/Paris');
	$h = localtime(); 
	$current_time = $h[2] . ':' . $h[1] . ':' . $h[0];
	
	$difference = strtotime( $current_time ) - strtotime( "09:00:00" );
	
	if ($difference < 0) {
		return;
	}
	
	$difference = strtotime( $current_time ) - strtotime( "19:00:00" );
	if ($difference >= 0) {
		return;
	}	
	
	 ob_start();
//	  set_time_limit(0); 
//	  ini_set('default_socket_timeout', 900); // 900 Seconds = 15 Minutes
	  
		$station = 'louviers';
		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		
function enregistre_meteo_station($station) {
		
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

}

	enregistre_meteo_station('louviers');
	sleep(1);
	enregistre_meteo_station('dreux');
	sleep(1);
	enregistre_meteo_station('lusigny-sur-barse');
	sleep(1);
	enregistre_meteo_station('mantes-la-jolie');
	sleep(1);
	enregistre_meteo_station('montereau-fault-yonne');
	sleep(1);
	enregistre_meteo_station('torcy');
	
		
		
		?>
		



