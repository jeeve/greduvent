<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Cuisine Spectrale</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <META NAME="Description" CONTENT="Groupe musical Cuisine Spectrale."/>
      <META NAME="Keywords" CONTENT="musique,electro"/>
      <META NAME="Author" CONTENT="Jean-Valéry"/>
      <link rel="shortcut icon" href="../images/favicon_16_16.ico" />
      <link rel="icon" href="../images/favicon_32_32.png" sizes="32x32" />
      <link rel="icon" href="../images/favicon_48_48.png" sizes="48x48" />
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/theme.css" />
	  <script src="js/jquery.min.js"></script>
	  <script src="js/jquery.audioControls.min.js"></script>
      <script src="js/audio.js"></script>
	  
	  <script type="text/javascript"> 
		$(function() {
			$('#BtnShuffle').click( function() {
				if ($(this).hasClass('active'))
				{ 	$(this).removeClass('active');
				}
				else {
					$(this).addClass('active');	}
			}); 

			$('#BtnRepeat').click( function() {
				if ($(this).hasClass('active'))
				{ 	$(this).removeClass('active');
				}
				else {
					$(this).addClass('active');	}
			}); 
		});
	</script>
	  
  </head>
   <body>

<div id="lecteur">
<div id="player">
                  <canvas id='canvas' height="150px"></canvas>

                        <div id="playerContainer">
                           <div id="controlContainer">
                              <div class="audioDetails">
                                 <span class="songPlay"></span>
                                 <span data-attr="timer" class="audioTime"></span>
                              </div>
                              <div class="progress">
                                 <div data-attr="seekableTrack" class="seekableTrack"></div>
                                 <div class="updateProgress"></div>
                              </div>
                           </div>
                           <div class="volumeControl">
                              <div class="volume volume1"></div>
                              <input class="bar" data-attr="rangeVolume" type="range" min="0" max="1" step="0.1" value="0.7" />
                           </div>
                        </div>
						
   <button type="button" id="BtnShuffle" class="btn btn-default btn-lg active" data-attr="shuffled" style="margin-left:12px">
		<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
   </button>
   <button type="button" class="btn btn-default btn-lg" data-attr="prevAudio">
		<span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span>
   </button>
   <button type="button"  id="BtnPlay" class="btn btn-default btn-lg" data-attr="playPauseAudio">
		<span class="glyphicon glyphicon-play" aria-hidden="true" ></span>
   </button>
  <button type="button" id="BtnPause" class="btn btn-default btn-lg" data-attr="playPauseAudio">
		<span class="glyphicon glyphicon-pause" aria-hidden="true" ></span>
   </button>
   <button type="button" class="btn btn-default btn-lg" data-attr="nextAudio">
		<span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span>
   </button>
   <button type="button" id="BtnRepeat" class="btn btn-default btn-lg" data-attr="repeatSong">
		<span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
   </button>
			</div>
                   <div class="containerPlayer">
                        <div>
                           <ul id="playListContainer"> 
							  <li data-src="songs/la-mare-aux-fees.mp3"><a href="#">La mare aux fées</a></li>
							  <li data-src="songs/machination.mp3"><a href="#">Machination</a></li>
							  <li data-src="songs/algorithme.mp3"><a href="#">Algorithme</a></li>							   						   
							  <li data-src="songs/un-sourire.mp3"><a href="#">Un sourire</a></li>							   
							  <li data-src="songs/adada-bar.mp3"><a href="#">Adada bar</a></li>							   						   						   
                              <li data-src="songs/horreur-boreale.mp3"><a href="#">Horreur boréale</a></li>							   						   						   
							  <li data-src="songs/les-rives-de-l-inconscient.mp3"><a href="#">Les rives de l'inconscient</a></li>							   						   
							  <li data-src="songs/emergence.mp3"><a href="#">Emergence</a></li>							   
							  <li data-src="songs/entropie.mp3"><a href="#">Entropie</a></li>							   
							  <li data-src="songs/max-et-lulu.mp3"><a href="#">Max et Lulu</a></li>							   
							  <li data-src="songs/epicentre.mp3"><a href="#">Epicentre</a></li>							   
							  <li data-src="songs/alteration.mp3"><a href="#">Altération</a></li>							   
							  <li data-src="songs/peripherique-fluide.mp3"><a href="#">Périphérique fluide</a></li>						   
							  <li data-src="songs/albert-code.mp3"><a href="#">Albert code</a></li>							   
							  <li data-src="songs/le-funambule.mp3"><a href="#">Le funambule</a></li>							   
							  <li data-src="songs/google-chante-d-ormesson.mp3"><a href="#">Google chante d'Ormesson</a></li>							   
							  <li data-src="songs/fusion.mp3"><a href="#">Fusion</a></li>							   
							  <li data-src="songs/confiture-apologie.mp3"><a href="#">Confiture apologie</a></li>							   							   
							  <li data-src="songs/deux-valises.mp3"><a href="#">Deux valises</a></li>	
                              <li data-src="songs/entrevue-spatiale.mp3"><a href="#">Entrevue spatiale</a></li>
                              <li data-src="songs/percutrip.mp3"><a href="#">Percutrip</a></li>
                              <li data-src="songs/vol-au-dessus-d-un-champ-de-salicornes.mp3"><a href="#">Vol au-dessus d'un champ de salicornes</a></li>
                              <li data-src="songs/secteur-303.mp3"><a href="#">Secteur 303</a></li>
                              <li data-src="songs/immersion.mp3"><a href="#">Immersion</a></li>
                              <li data-src="songs/un-soir-sur-le-rocher.mp3"><a href="#">Un Soir sur le Rocher</a></li>
                              <li data-src="songs/le-chant-des-songes.mp3"><a href="#">Le Chant des Songes</a></li>
                              <li data-src="songs/ballet-celeste.mp3"><a href="#">Ballet Celeste</a></li>
                              <li data-src="songs/aurore.mp3"><a href="#">Aurore</a></li>
                              <li data-src="songs/osez-jose.mp3"><a href="#">Osez Jose</a></li>
                              <li data-src="songs/rillette-apotheose.mp3"><a href="#">Rillette Apotheose</a></li>
                              <li data-src="songs/danse-des-sables.mp3"><a href="#">Danse des Sables</a></li>
                              <li data-src="songs/tourbillons.mp3"><a href="#">Tourbillons</a></li>
                              <li data-src="songs/tentation.mp3"><a href="#">Tentation</a></li>
                              <li data-src="songs/reverie.mp3"><a href="#">Rêverie</a></li>
							  <li data-src="songs/malakoff-dance.mp3"><a href="#">Malakoff Dance</a></li>
                              <li data-src="songs/les-yeux-de-gaston.mp3"><a href="#">Les Yeux de Gaston</a></li>
                              <li data-src="songs/hiver.mp3"><a href="#">Hiver</a></li>
                              <li data-src="songs/halebop.mp3"><a href="#">Halebop</a></li>
                              <li data-src="songs/balade-a-marre-basse.mp3"><a href="#">Balade a Maree Basse</a></li>
                              <li data-src="songs/avant-qu-il-ne-soit-trop-tard.mp3"><a href="#">Avant qu'il ne Soit Trop Tard</a></li>
                              <li data-src="songs/alors-michel.mp3"><a href="#">Alors Michel</a></li>
                              <li data-src="songs/haas-l-eau-wind.mp3"><a href="#">Haas l Eau Wind</a></li>
                              <li data-src="songs/errance.mp3"><a href="#">Errance</a></li>
                              <li data-src="songs/expedition-montparnasse.mp3"><a href="#">Expedition Montparnasse</a></li>
                              <li data-src="songs/dernier-signal.mp3"><a href="#">Dernier Signal</a></li>
                              <li data-src="songs/onde-nocturne.mp3"><a href="#">Onde Nocturne</a></li>
                              <li data-src="songs/aquanoide.mp3"><a href="#">Aquanoide</a></li>
                              <li data-src="songs/bush-attack.mp3"><a href="#">Bush Attack</a></li>
                              <li data-src="songs/evasion.mp3"><a href="#">Evasion</a></li>
                              <li data-src="songs/uranus-experience.mp3"><a href="#">Uranus Experience</a></li>
                              <li data-src="songs/dark-vadormir.mp3"><a href="#">Dark Vadormir</a></li>
                            </ul>
                        </div>

                     </div>
 

		
   

         <div style="position: absolute; left: 250px">	
            <a target="_blank" href="https://www.youtube.com/playlist?list=PLvp4urJ2GQfiRa0B5ZYjLukDXRb4fA4zr"><img title="Cuisine Spectrale" border="0" src="images/cuisinespectralemini.png" width="50" height="50"></a>
         </div>
 </div> 

   
    </body>
</html>