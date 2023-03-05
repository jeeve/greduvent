<?php
$nomOrigine = $_FILES['file']['name'];
//echo "Nom origine : " . $nomOrigine;
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("gpx", "GPX", "Gpx");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom
    // incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(__FILE__)."//upload//";
    $nomDestination = uniqid().".".$extensionFichier;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], 
                                     $repertoireDestination.$nomDestination)) {
      /*  echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
                " a été déplacé vers ".$repertoireDestination.$nomDestination;*/
               echo "index.php?url=upload/".$nomDestination; 
               //exit(header("Location: "."visu-gpx.php?url=upload/".$nomDestination));
     

    } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
}
?>
