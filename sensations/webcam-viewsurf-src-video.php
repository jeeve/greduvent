<?php	
// https://www.vinci-autoroutes.com/fr/autoroutes-temps-reel
	header("Access-Control-Allow-Origin: *");

//	$url = 'https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris';
		
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
/*
	
	$lines = file($url);
	$line = $lines[getLigne($lines, "<video")];	
	$k = strpos($line, 'source src="');
	$l = strpos($line, 'type="video/mp4"');
	$line2 = 'https://www.webcam-autoroute.eu/' . substr($line, $k + 13, $l-$k-15);
*/	

	$line2 = "images/mire-tv.mp4";
	
	if ($url == "https://www.webcam-autoroute.eu/fr/caméra/france-a13/131/haute-normandie/louviers/rouen-vers-paris") {
		$line2  = "http://gieat.viewsurf.com?id=2720&action=mediaRedirect";
	}
	
	if ($url == "https://www.webcam-autoroute.eu/fr/caméra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris") {
		$line2  = "http://gieat.viewsurf.com?id=2722&action=mediaRedirect";
	}	
	
	if ($url == "https://www.webcam-autoroute.eu/fr/caméra/france/144/ile-de-france/paris/porte-de-ch-tillon-vers-porte-de-vanves") {
		$line2  = "http://gieat.viewsurf.com?id=5610&action=mediaRedirect";
	}	
		
	if ($url == "https://www.webcam-autoroute.eu/fr/caméra/france-a4/344/ile-de-france/bailly-romainvilliers/paris-vers-reims") {
		$line2  = "http://gieat.viewsurf.com?id=5594&action=mediaRedirect";
	}	
			
	if ($url == "https://www.webcam-autoroute.eu/fr/caméra/france-a6/50/ile-de-france/fleury-en-bi-re/paris-vers-lyon") {
		$line2  = "http://gieat.viewsurf.com?id=2746&action=mediaRedirect";
	}	
		
if ($url == "https://www.viewsurf.com/univers/ville/vue/17714-france-champagne-ardenne-mesnil-saint-pere-lac-dorient-le-lac") {
	$lines = file($url);
	/*
	$line = $lines[getLigne($lines, "https://platforms5.joada.net/embeded/embeded.html")];	
	$k = strpos($line, "src");
	$line2 = substr($line, $k + 5, strlen($line) - $k - 8);
	*/
	$line = $lines[getLigne($lines, ".mp4")];	
	$k = strpos($line, "src");
	$l = strpos($line, ".mp4");
	$line2 = substr($line, $k + 6, strlen($line) - $k - 9);
	
	}	
		
	$arr = array('src' => $line2);
	
	echo json_encode($arr);
	
?>	