<?php	
		header("Access-Control-Allow-Origin: *");

		function getLigne($tableau, $terme) {
			for ($i = 0; $i < count($tableau); $i++) {
				if (strpos($tableau[$i], $terme)) {
					return $i;
				}
			}
			return false;
		}
		
		$station = 'I27LERY4';

		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		$lines = file('https://www.wunderground.com/personal-weather-station/dashboard?ID=' . $station);

		$line = $lines[getLigne($lines, "Wind from") + 1];
		$p = strpos($line, '>');
		$line = substr($line, $p+1, strpos($line, '<') + 1);
		$orientationVent = trim($line);

		$line = $lines[getLigne($lines, "windCompassSpeed") + 2];
		$line = substr($line, 0, strlen($line)-1);
		$vitesseVent = trim($line);

		$line = $lines[getLigne($lines, 'data-variable="temperature"') + 1];
		$p = strpos($line, '>');
		$line = substr($line, $p+1, strpos($line, '<') + 2);
		$tempAir = trim($line);	
		
		$arr = array('station' => $station, 'vitesseVent' => $vitesseVent, 'orientationVent' => $orientationVent, 'temperatureExterieure' => $tempAir);

		echo json_encode($arr);
?>
	
