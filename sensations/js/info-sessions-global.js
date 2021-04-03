function getInfoSessions() {
	$.ajax({
		url: "https://spreadsheets.google.com/feeds/list/1eCnnsOdcwRKJ_kpx1uS-XXJoJGFSvm3l3ez2K9PpPv4/default/public/values?alt=json",
		type: 'GET',
		crossDomain: true,
		dataType: 'json'
	}).then(function(data) {
			var ligne, html, ancre, ligne0, dateheure0, res0, annee;
            premiereAnnee = true;
			html = '';
			var dateheure, laDate, leSpot, leMWS, laVideo, leCommentaire, codeYoutube, vmax, v100m, distance, flotteur, voile, aileron, vent, pratique, res, trace, aile, reglage;
			for (i=data.feed.entry.length-1; i >= 0 ; i--) {
				
				ligne = data.feed.entry[i];
				leSpot = ligne.gsx$spot.$t;

                if (leSpot != "") {											
		
                    dateheure = ligne.gsx$date.$t;
                    laDate = dateheure; //dateheure.substring(0, dateheure.search(' '));
                    res = laDate.split("/");
                    annee = res[2];

                    if (i < data.feed.entry.length-1) {
                        ligne0 = data.feed.entry[i+1];
                        dateheure0 = ligne0.gsx$date.$t;
                        res0 = dateheure0.split("/");
                        if (res[2] != res0[2]) {
                            html = html + '<h3 class="titre-annee" data-annee="' + annee + '">+ <span class="annee">' + annee + '</span></h3>';   
                        }
                    }

                    laDate = res[1] + '/' + res[0] + '/' + annee;

                    trace = ligne.gsx$tracemontre.$t;
                    if (trace == "") {
                        trace = ligne.gsx$tracek72.$t;
                    }
                    leMWS = ligne.gsx$mws.$t;
                    laVideo = ligne.gsx$youtube.$t;
                    leCommentaire = ligne.gsx$commentaire.$t;
                    codeYoutube = laVideo.substring(laVideo.lastIndexOf('/') + 1, laVideo.length);
                    pratique = ligne.gsx$pratique.$t;
                    vent = ligne.gsx$vent.$t;
                    flotteur = ligne.gsx$flotteur.$t;
                    voile = ligne.gsx$voile.$t;
                    aileron = ligne.gsx$aileron.$t;
                    aile = ligne.gsx$aile.$t;
                    reglage = ligne.gsx$réglage.$t;
                    if (reglage != '') {
                        reglage = ' R' + reglage;
                    }

                    distance = ligne.gsx$distancekm.$t;
                    vmax = ligne.gsx$vmaxk72noeuds.$t;
                    v100m = ligne.gsx$v100mk72.$t;
                    ventMini = ligne.gsx$mini.$t;
                    ventMaxi = ligne.gsx$maxi.$t;

                    ancre = laDate.replace(new RegExp('/', 'g'), '-');

                    html = html + '<div id="' + ancre + '" class="row session" data-annee="' + annee + '" style="display: none;"><div class="col-sm-8 fond">'; 

                    if (laVideo != '') {
                        html = html + '<p align="center"><a href="' + laVideo + '" target="_blank"><img class="img-responsive ombre-image" src="http://img.youtube.com/vi/' + codeYoutube + '/0.jpg"></a></p>';
                    }

                    html = html + '</div><div class="visible-xs"><br></div><div class="col-sm-4"><div class="fond-table encadrement-table"><table class="info-sessions">';
                    html = html + '<tr><td><a href="' + leMWS + '" target="_blank">Session</a></td><td>' + pratique + ' du ' + laDate + '</td></tr>';
                    
                    var spotURL;
                    switch (leSpot) {
                        case 'Léry-Poses' :
                            spotURL = '/sensations/lery-poses.php';
                            break;
                        case 'Vaires sur Marne' : 
                            spotURL = '/sensations/vaires-sur-marne.php';
                            break;
                        case 'Moisson' :
                            spotURL = '/sensations/moisson.php';
                            break;
                         case 'Foret-Orient' :
                            spotURL = '/sensations/foret-orient.php';
                            break;
                        case 'Jablines' :
                            spotURL = '/sensations/jablines.php';
                            break;
                        case 'Mézières-Ecluzelles' :
                            spotURL = '/sensations/ecluzelles.php';
                            break;
                        case 'La Justice' :
                            spotURL = '/mer/saint-jacut.php';
                            break;
                        case 'Pissotte' :
                            spotURL = '/mer/saint-jacut.php';
                            break;
                        case 'Les Haas' :
                            spotURL = '/mer/saint-jacut.php';
                            break;
                        case 'Grande-Paroisse' :
                            spotURL = '/sensations/grande-paroisse.php';
                            break;
                        default :
                            spotURL = '';
                     }
                    if (spotURL == '') {
                        html = html + '</td><td>Spot</td><td>' + leSpot + '</td></tr>';
                    }
                    else {
                        html = html + '</td><td>Spot</td><td><a href="' + spotURL + '">' + leSpot + '</a></td></tr>';
                    }
                    if (ventMini != '' && ventMaxi != '') {
                        html = html + '</td><td>Conditions</td><td>Vent de ' + vent + ' ' + ventMini + ' à ' + ventMaxi + ' kts</td></tr>';
                    }
                    else {
                        html = html + '</td><td>Conditions</td><td>Vent de ' + vent + '</td></tr>';
                    }
                    if (aile != '') {
                        //html = html + '<tr><td>Equipement</td><td>' + flotteur + '<br>' + voile + '<br>' + aileron + ' - aile ' + aile + reglage + '</td></tr>';
                        html = html + '<tr><td>Equipement</td><td>' + flotteur + '<br>' + voile + '<br>' + aileron + ' - aile ' + aile + '</td></tr>';
                    }
                    else {
                        html = html + '<tr><td>Equipement</td><td>' + flotteur + '<br>' + voile + '<br>' + aileron + '</td></tr>';
                    } if (distance != '') {
                        if (trace == '') {
                            html = html + '<tr><td>Parcours</td><td>' + distance + ' km</td></tr>';
                        }
                        else {
                            html = html + '<tr><td><a href="' + trace + '" target="_blank">Parcours</a></td><td>' + distance + ' km</td></tr>';
                        }
                    }
                    if (vmax != '') {
                        html = html + '<tr><td>VMax</td><td>' + vmax + ' kts</td></tr>';
                    }
                    html = html + '<tr><td>V100m</td><td>' + v100m + ' kts</td></tr>';
                    if (leCommentaire != '') {
                        html = html + '<tr><td colspan="2">' + leCommentaire + '</td></tr>';
                    }
/*
                    if (laVideo != '') {
                        html = html + '<tr><td colspan="2"><a target="_blank" href="' + laVideo + '">Vidéo</a></td></tr>';
                    }    
*/
                    html = html + '<tr><td colspan="2"><a href="' + location.pathname + '?session=' + ancre + '">#permalien</a></td></tr>';
                    html = html + '</table></div></div>';

                    html = html + '</div>';

                }
			
			}
            $('#sessions').html(html);
            
            goSession();
 
        $(document).ready(function() {
            $('.titre-annee').click(function() {
                var a = $(this).attr("data-annee");
                $('.session[data-annee="' + a + '"]').slideToggle( "slow", function() {});
                if ($(this).html().indexOf('+') > -1) {
                    $(this).html($(this).html().replace('+', '-'));  
                }
                else {
                    $(this).html($(this).html().replace('-', '+'));
                }
            });
       });	

	});
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

function goSession() {
	var d = getParameterByName('session');
	if (d != null) {
        var words = d.split('-');
        var a = words[2];
        $('.session[data-annee="' + a + '"]').show();
        if ($('.titre-annee[data-annee="' + a + '"]').html().indexOf('+') > -1) {
            $('.titre-annee[data-annee="' + a + '"]').html($('.titre-annee[data-annee="' + a + '"]').html().replace('+', '-'));  
        }
        else {
            $('.titre-annee[data-annee="' + a + '"]').html($('.titre-annee[data-annee="' + a + '"]').html().replace('-', '+'));
        }

	    jQuery("html, body").animate({
			scrollTop : jQuery('#' + d).offset().top - 50
		}, "slow");
	}
}


	

