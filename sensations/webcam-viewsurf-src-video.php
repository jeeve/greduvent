<?php	

	header("Access-Control-Allow-Origin: *");

	$url = 'https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris';
		
	if ($_GET['url'] != '') {
				$url = $_GET['url'];
	}	

	function getLigne($tableau, $terme) {
		for ($i = 0; $i < count($tableau); $i++) {
			if (strpos(strtoupper($tableau[$i]), strtoupper($terme))) {
				return $i;
			}
		}
		return false;
	}

	
	$lines = file($url);
	$line = $lines[getLigne($lines, "<video")];	
	$k = strpos($line, 'source src="');
	$l = strpos($line, 'type="video/mp4"');
	$line2 = 'https://www.webcam-autoroute.eu/' . substr($line, $k + 13, $l-$k-15);
	
	$arr = array('src' => $line2);
	
	echo json_encode($arr);
	
?>	