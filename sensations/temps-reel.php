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
		
		function getValeur($line, $key, $offset = 0) {
			$a = strpos($line, $key);
			$linefin = substr($line, $a + strlen($key) + 1 + $offset); // <......>..........
			$b = strpos($linefin, '>');
			$valeur = substr($linefin, 0, $b - 1); // <...>
			return $valeur;
		}
		
		$station = 'I27LERY4';

		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}	
		
		if ($station == 'poses') {
			
		}
		else {
			$lines = file('https://www.wunderground.com/personal-weather-station/dashboard?ID=' . $station);

			$line = $lines[getLigne($lines, 'Wind Direction</th><td _ngcontent-sc35=""><strong _ngcontent-sc35=""> -- </strong></td><td _ngcontent-sc35=""><strong _ngcontent-sc35=""> -- </strong></td><td _ngcontent-sc35=""><strong _ngcontent-sc35=""')];
			$orientationVent = trim(getValeur($line, 'Wind Direction</th><td _ngcontent-sc35=""><strong _ngcontent-sc35=""> -- </strong></td><td _ngcontent-sc35=""><strong _ngcontent-sc35=""> -- </strong></td><td _ngcontent-sc35=""><strong _ngcontent-sc35=""'));

			$line = $lines[getLigne($lines, 'span _ngcontent-sc27="" class="wu-value wu-value-to" style=""')];
			$vitesseVent = trim(getValeur($line, 'span _ngcontent-sc27="" class="test-false wu-unit ng-star-inserted"><!----><!----><!----><span _ngcontent-sc27="" class="wu-value wu-value-to" style=""'));

			$line = $lines[getLigne($lines, 'class="current-temp" style="color:#')];
			$temp = getValeur($line, 'class="current-temp" style="color:#', 32);
			$tempAir = trim(substr($temp, 0, strlen($temp) - 1));
		}
		
		$arr = array('station' => $station, 'vitesseVent' => $vitesseVent, 'orientationVent' => $orientationVent, 'temperatureExterieure' => $tempAir);

		echo json_encode($arr);
?>
	
