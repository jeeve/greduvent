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
		$line2 = 'https://www.webcam-autoroute.eu/videos/3254-france-haute-normandie-heudebouville-a13-pres-de-louviers-peage-de-heudebouville-vue-orientee-vers-le-havre-ou-caen.mp4';
	}
	
	$arr = array('src' => $line2);
	
	echo json_encode($arr);
	
?>	