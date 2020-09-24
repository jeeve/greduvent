var orientationVent;

function getOrientationVentSpot() {
	if (orientationVent == '') {
						$('.notePoses').html('');
						$('.noteVairesSurMarne').html('');
						$('.noteJablines').html('');
						$('.noteMoisson').html('');
						$('.noteGrandeParoisse').html('');		
						$('.noteSaintQuentin').html('');
						$('.noteEcluzelles').html('');
						$('.noteForetOrient').html('');							
	}
	else {
		$.ajax({
			url: "https://spreadsheets.google.com/feeds/list/1O3WDo7864s7npqM7r7zd2XXVWeVqhuqjgmzfObh40gY/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne, vent, spPoses, spVairessurmarne, spJablines, spMoisson, spGrandeparoisse, spSaintQuentin, spEcluzelles, spForetOrient;
				var nPoses, nVairessurmarne, nJablines, nMoisson, nGrandeparoisse, nSaintQuentin, nEcluzelles, nForetOrient;
				for (i=data.feed.entry.length-1; i >= 0 ; i--) {
					ligne = data.feed.entry[i];
					vent = ligne.title.$t;
					if (vent == orientationVent) {
						nPoses = ligne.gsx$poses.$t;
						nVairessurmarne = ligne.gsx$vairessurmarne.$t;
						nJablines = ligne.gsx$jablines.$t;
						nMoisson = ligne.gsx$moisson.$t;
						nGrandeparoisse = ligne.gsx$grandeparoisse.$t;
						nSaintQuentin = ligne.gsx$saintquentinenyvelines.$t;
						nEcluzelles = ligne.gsx$ecluzelles.$t;
						nForetOrient = ligne.gsx$foretorient.$t;
						
						spPoses = '';
						spVairessurmarne = '';
						spJablines = '';
						spMoisson = '';
						spGrandeparoisse = '';
						spSaintQuentin = '';
						spEcluzelles = '';
						spForetOrient = '';
						
						if (nPoses != '') {
							spPoses = '<span class="note">' + nPoses + '</span> / 10';
						}
						if (nVairessurmarne != '') {
							spVairessurmarne = '<span class="note">' + nVairessurmarne + '</span> / 10';
						}
						if (nJablines != '') {
							spJablines = '<span class="note">' + nJablines + '</span> / 10';
						}
						if (nMoisson != '') {
							spMoisson = '<span class="note">' + nMoisson + '</span> / 10';
						}
						if (nGrandeparoisse != '') {
							spGrandeparoisse = '<span class="note">' + nGrandeparoisse + '</span> / 10';
						}
						if (nSaintQuentin != '') {
							spSaintQuentin = '<span class="note">' + nSaintQuentin + '</span> / 10';
						}
						if (nEcluzelles != '') {
							spEcluzelles = '<span class="note">' + nEcluzelles + '</span> / 10';
						}
						if (nForetOrient != '') {
							spForetOrient = '<span class="note">' + nForetOrient + '</span> / 10';
						}						
						
						$('.notePoses').html(spPoses);
						$('.noteVairesSurMarne').html(spVairessurmarne);
						$('.noteJablines').html(spJablines);
						$('.noteMoisson').html(spMoisson);
						$('.noteGrandeParoisse').html(spGrandeparoisse);
						$('.noteSaintQuentin').html(spSaintQuentin);
						$('.noteEcluzelles').html(spEcluzelles);
						$('.noteForetOrient').html(spForetOrient);

						$('.note').each(function(index, el) { 
							var elem = $(el);
							var x = parseInt(elem.text());
							if (x > 7) {
								elem.removeClass();
								elem.addClass('note-bonne');
							}
							else {
								if (x < 3) {
									elem.removeClass();
									elem.addClass('note-mauvaise');									
								}
								else {
									elem.removeClass();
									elem.addClass('note-moyenne');									
								}
							}
						});
					}
				}
			});

	}
}
