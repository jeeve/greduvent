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
		
		$lines = file('https://www.wunderground.com/personal-weather-station/dashboard?ID=' . $station);

		$line = $lines[getLigne($lines, 'WIND FROM</div><div _ngcontent-sc7="" class="weather__text"')];
		$orientationVent = trim(getValeur($line, 'WIND FROM</div><div _ngcontent-sc7="" class="weather__text"'));

		$line = $lines[getLigne($lines, 'src="https://s.w-x.co/wu/assets/static/images/pws/Wind-Dial.svg"><div _ngcontent-sc7="" class="text-wrapper"><span _ngcontent-sc7="" class="big" style="font-size:100%;"')];
		$vitesseVent = trim(getValeur($line, 'src="https://s.w-x.co/wu/assets/static/images/pws/Wind-Dial.svg"><div _ngcontent-sc7="" class="text-wrapper"><span _ngcontent-sc7="" class="big" style="font-size:100%;"'));


		$line = $lines[getLigne($lines, 'class="current-temp" style="color:#')];
		$temp = getValeur($line, 'class="current-temp" style="color:#', 32);
		$tempAir = trim(substr($temp, 0, strlen($temp) - 1));
		
		$arr = array('station' => $station, 'vitesseVent' => $vitesseVent, 'orientationVent' => $orientationVent, 'temperatureExterieure' => $tempAir);

		echo json_encode($arr);
?>
	
