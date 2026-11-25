<?php
	
	function getTitreDescription($page)
	{
		$read = file_get_contents($page);
		$titre = '';
		$description = '';
		$numPage = '';

		preg_match('/<title[^>]*>\s*(.*?)\s*<\/title>/is', $read, $titreMatch);
		preg_match('/<meta\s+[^>]*name\s*=\s*["\']description["\'][^>]*content\s*=\s*(["\'])(.*?)\1/is', $read, $descriptionMatch);
		preg_match('/class\s*=\s*["\'][^"\']*numero-page[^"\']*["\'][^>]*>\s*page\s+(\d+)/is', $read, $pageMatch);

		if (isset($titreMatch[1])) {
			$titre = html_entity_decode($titreMatch[1], ENT_QUOTES, 'UTF-8');
		}
		if (isset($descriptionMatch[2])) {
			$description = html_entity_decode($descriptionMatch[2], ENT_QUOTES, 'UTF-8');
		}
		if (isset($pageMatch[1])) {
			$numPage = $pageMatch[1];
		}

		return array($titre, $description, $numPage);
	}

	function getSommaireItem($page)
	{
		$titreDescription = getTitreDescription($page);
		$titre = $titreDescription[0];
		$description = $titreDescription[1];
		$numPage = $titreDescription[2]; 	

		$ligne1 = '<li class="sommaire-item"><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#item-' . $numPage . '">' . htmlspecialchars($titre, ENT_QUOTES, 'UTF-8') . '</button>';
		$ligne2 = '<div id="item-' . $numPage . '" class="collapse">';
		$ligne3 = htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . ' <a href="' . htmlspecialchars($page, ENT_QUOTES, 'UTF-8') . '">Page&nbsp;' . $numPage . '</a></div></li>';
		
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
		echo getSommaireItem('../foret/randonnees.php');
		echo getSommaireItem('../foret/diapo.php');
	echo '</ul>';
	echo getSommaireItem('../impressions/impressions.php'); 
	echo getSommaireItem('../sensations/sensations.php'); 
	echo '<ul>';
		echo getSommaireItem('../sensations/glisse.php');
		echo getSommaireItem('../sensations/spots-ile-de-france.php');		
		echo getSommaireItem('../sensations/lery-poses.php');
		echo getSommaireItem('../sensations/moisson.php');
		echo getSommaireItem('../sensations/ecluzelles.php');
		echo getSommaireItem('../sensations/saint-quentin-yvelines.php');
		echo getSommaireItem('../sensations/jablines.php');		
		echo getSommaireItem('../sensations/vaires-sur-marne.php');
		echo getSommaireItem('../sensations/viry-chatillon.php');
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
	echo getSommaireItem('../a-propos/a-propos.php'); 
	echo getSommaireItem('../commentaires/commentaires.php'); 
	
?>
