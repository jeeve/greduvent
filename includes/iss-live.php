<?php
// Renvoie l'identifiant YouTube du direct en cours sur la chaîne NASA
// (vues de la station spatiale internationale la plupart du temps).
// La NASA relance régulièrement ce direct sous un nouvel identifiant :
// on le récupère donc dynamiquement, avec un cache d'une heure et un identifiant de secours.
function iss_live_video_id() {
	$secours = 'ROboUHfPUrU';
	$cache = sys_get_temp_dir() . '/greduvent-iss-live.txt';

	if (is_file($cache) && time() - filemtime($cache) < 3600) {
		$id = trim(@file_get_contents($cache));
		if (preg_match('/^[\w-]{11}$/', $id)) {
			return $id;
		}
	}

	$ctx = stream_context_create(array('http'=>
		array(
			'timeout' => 5,
			'header' => "Accept-Language: fr\r\nCookie: SOCS=CAI; CONSENT=YES+\r\n",
		)
	));

	$contents = @file_get_contents('https://www.youtube.com/@NASA/live', false, $ctx);

	if ($contents !== false && preg_match('#<link rel="canonical" href="https://www\.youtube\.com/watch\?v=([\w-]{11})"#', $contents, $m)) {
		@file_put_contents($cache, $m[1]);
		return $m[1];
	}

	// échec : on réessaiera dans une heure, en conservant le dernier identifiant connu
	if (is_file($cache)) {
		@touch($cache);
		$id = trim(@file_get_contents($cache));
		if (preg_match('/^[\w-]{11}$/', $id)) {
			return $id;
		}
	}
	return $secours;
}
?>
