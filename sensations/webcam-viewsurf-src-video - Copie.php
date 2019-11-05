<?php	

	header("Access-Control-Allow-Origin: *");

	$url = '3246-france-ile-de-france-buchelay-a13-pres-de-mantes-la-ville-peage-de-buchelay-vue-orientee-vers-paris';
    $station = 'BUCHELAY';
	
	if (empty($_GET["station"])) {
		$station = '';
	}
	else {
		if ($_GET['station'] != '') {
				$station = $_GET['station'];
		}
	}	
	
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

	$lines = file('https://www.viewsurf.com/univers/trafic/vue/' . $url);

	if ($station != '') {
		$line = $lines[getLigne($lines, "src: 'https://filmssite.viewsurf.com/sapn/" . strtoupper($station) . "_S1_MKV/")];
		$line2 = substr($line, 14, strlen($line) - 17);
	}
	else {
		$line = $lines[getLigne($lines, "src: 'https://filmssite.viewsurf.com/aprr35/")];
		$line2 = substr($line, 14, strlen($line) - 17);
	}
	
	if ($station == 'HEUDEBOUVILLE') {
		$lines = file('https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/131/haute-normandie/louviers/rouen-vers-paris');
		$line = $lines[getLigne($lines, "<video")];	
		$k = strpos($line, 'source src="');
		$l = strpos($line, 'type="video/mp4"');
		$line2 = 'https://www.webcam-autoroute.eu/' . substr($line, $k + 13, $l-$k-15);
	}
	
	$arr = array('src' => $line2);
	
	echo json_encode($arr);
	
?>	