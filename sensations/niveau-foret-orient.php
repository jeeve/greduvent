<?php	

	header("Access-Control-Allow-Origin: *");

	$url = 'https://www.seinegrandslacs.fr/quatre-lacs-reservoirs/lac-reservoir-seine';
		
	function getLigne($tableau, $terme) {
		for ($i = 0; $i < count($tableau); $i++) {
			if (strpos(strtoupper($tableau[$i]), strtoupper($terme))) {
				return $i;
			}
		}
		return false;
	}
	
	$lines = file($url);
	$line = $lines[getLigne($lines, "Taux de remplissage (en %)") - 5];	
	$k = strpos($line, 'data-max-value="100"');
	$l = strpos($line, 'output');
	$line2 = substr($line, $k + 21, $l-$k-3);
	
	$arr = array('value' => $line2);
	
	echo json_encode($arr);
	
?>	