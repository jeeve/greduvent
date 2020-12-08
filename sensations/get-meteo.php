<?php		
		

	
		// BD
		$mysqli = new mysqli("localhost", "id12603904_jeeve", ">(sXJFq=T<0a<MrE", "id12603904_meteo");
		
	if (isset($_GET['date'])) {
		$d = $_GET['date'];
		if (strlen($d) == 8) {
			$d1 = substr($d, 0, 4) . '-' . substr($d, 4, 2) . '-' .  substr($d, 6, 2) . ' 00:00:00';
			$d2 = substr($d, 0, 4) . '-' . substr($d, 4, 2) . '-' .  substr($d, 6, 2) . ' 23:59:00';
			$select = "SELECT DATE_FORMAT(date_heure, '%Y-%m-%d %H:%i') as date_heure, station, vitesse, orientation, temperature FROM meteo WHERE date_heure >= '" . $d1 . "' AND date_heure < '" . $d2 . "'";
		}
		if (strlen($d) == 16) {
			$d1 = substr($d, 0, 4) . '-' . substr($d, 4, 2) . '-' .  substr($d, 6, 2) . ' 00:00:00';
			$d2 = substr($d, 8, 4) . '-' . substr($d, 12, 2) . '-' .  substr($d, 14, 2) . ' 23:59:00';
			$select = "SELECT DATE_FORMAT(date_heure, '%Y-%m-%d %H:%i') as date_heure, station, vitesse, orientation, temperature FROM meteo WHERE date_heure >= '" . $d1 . "' AND date_heure < '" . $d2 . "'";
		}
	}
	else {
		$d1 = new DateTime();
		$d2 = new DateTime();
		$d1->sub(new DateInterval('P7D')); // 1 semaine par defaut
		$s1 = $d1->format('Y-m-d H:i:s');
		$s2 = $d2->format('Y-m-d H:i:s');
		$select = "SELECT DATE_FORMAT(date_heure, '%Y-%m-%d %H:%i') as date_heure, station, vitesse, orientation, temperature FROM meteo where date_heure >= '" . $s1 . "' AND date_heure < '" . $s2 . "'";
	}
		
		$result = $mysqli->query($select);
			
		
		$return = [];
		foreach ($result as $row) {
       $return[] = [ 
		'date_heure' => $row['date_heure'],
           'station' => $row['station'],
           'vitesse' => $row['vitesse'],
           'orientation' => $row['orientation'],
           'temperature' => $row['temperature']
       ];
}

		$mysqli->close();	
/*
header('Content-type: application/json');
echo json_encode($return);
*/		



function generateCsv($data, $delimiter = ',', $enclosure = '"') {
       $contents = '';
	   $handle = fopen('php://temp', 'r+');
       foreach ($data as $line) {
               fputcsv($handle, $line, $delimiter, $enclosure);
       }
       rewind($handle);
       while (!feof($handle)) {
               $contents .= fread($handle, 8192);
       }
       fclose($handle);
       return $contents;
}


header('Content-type: application/csv');
echo generateCsv($return);
		

		
?>		