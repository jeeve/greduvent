<?php
	
	function getTitreDescription($page)
	{
		$fp = fopen($page, "r");
		$read = htmlspecialchars((fread($fp, filesize($page))));
		fclose($fp);
		$p1 = strpos($read, 'title');
		$p2 = strpos($read, '/title');
		$p3 = strpos($read, 'CONTENT=');
		$p4 = strpos($read, 'include');
		$p5 = strpos($read, 'numero-page') + 26;
		$p6 = strpos($read, 'p', $p5);

		return substr($read, $p1 + 9, $p2 - $p1 - 13) . '|' . substr($read, $p3 + 14, $p4 - $p3 - 38) . '|' . substr($read, $p5, $p6 - $p5 - 5);
	}

	function getSommaireItem($page)
	{
		$titreDescription = explode('|', getTitreDescription($page));
		$titre = $titreDescription[0];
		$description = str_replace('&', '', $titreDescription[1]);
		$numPage = $titreDescription[2]; 	

		$ligne1 = '<li class="sommaire-item"><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#item-' . $numPage . '">' . $titre . '</button>';  
		$ligne2 = '<div id="item-' . $numPage . '" class="collapse">';
		$ligne3 = $description . ' <a href="' . $page . '">Page&nbsp;' . $numPage . '</a></div></li>';
		
		return $ligne1 . $ligne2 . $ligne3;
	}

	echo getSommaireItem('../astronomie/astronomie.php'); 
	echo getSommaireItem('../mer/mer.php'); 
	echo '<ul>';
		echo getSommaireItem('../mer/rivages.php');
		echo getSommaireItem('../mer/diapo.php');
		echo getSommaireItem('../mer/saint-jacut.php');
		echo getSommaireItem('../mer/safaga.php');
	echo '</ul>';	
	echo getSommaireItem('../loire/loire.php'); 
	echo '<ul>';
		echo getSommaireItem('../loire/diapo.php'); 
	echo '</ul>';
	echo getSommaireItem('../foret/foret.php'); 
	echo '<ul>';
		echo getSommaireItem('../foret/diapo.php'); 
	echo '</ul>';
	echo getSommaireItem('../impressions/impressions.php'); 
	echo getSommaireItem('../sensations/sensations.php'); 
	echo '<ul>';
		echo getSommaireItem('../sensations/windsurf-kitesurf.php');
		echo getSommaireItem('../sensations/spots-ile-de-france.php');		
		echo getSommaireItem('../sensations/lery-poses.php');
		echo getSommaireItem('../sensations/moisson.php');
		echo getSommaireItem('../sensations/ecluzelles.php');
		echo getSommaireItem('../sensations/saint-quentin-yvelines.php');
		echo getSommaireItem('../sensations/jablines.php');		
		echo getSommaireItem('../sensations/vaires-sur-marne.php');
		echo getSommaireItem('../sensations/grande-paroisse.php');
		echo getSommaireItem('../sensations/foret-orient.php');
		echo getSommaireItem('../sensations/powerkite.php');
	echo '</ul>';	
	echo getSommaireItem('../emotions/emotions.php'); 
	echo getSommaireItem('../en-chemin/en-chemin.php'); 
	echo '<ul>';
		echo getSommaireItem('../en-chemin/ncis.php'); 
	echo '</ul>';	
	echo getSommaireItem('../reflexions/reflexions.php'); 
	echo getSommaireItem('../informatique/informatique.php'); 
	echo '<ul>';
		echo getSommaireItem('../informatique/hop.php');
		echo getSommaireItem('../informatique/wescheme.php');
		echo getSommaireItem('../informatique/racket.php');
	echo '</ul>';	
	echo getSommaireItem('../science/science.php'); 
	echo getSommaireItem('../outils/outils.php'); 
	echo getSommaireItem('../a-propos/a-propos.php'); 
	echo getSommaireItem('../commentaires/commentaires.php'); 
	
?>
