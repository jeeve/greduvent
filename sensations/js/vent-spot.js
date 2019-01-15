var orientationVent;

function getOrientationVentSpot() {
	if (orientationVent == '') {
						$('.notePoses').html('');
						$('.noteVairesSurMarne').html('');
						$('.noteJablines').html('');
						$('.noteMoisson').html('');
						$('.noteGrandeParoisse').html('');						
		
	}
	else {
		$.ajax({
			url: "https://spreadsheets.google.com/feeds/list/1O3WDo7864s7npqM7r7zd2XXVWeVqhuqjgmzfObh40gY/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne, vent, spPoses, spVairessurmarne, spJablines, spMoisson, spGrandeparoisse;
				for (i=data.feed.entry.length-1; i >= 0 ; i--) {
					ligne = data.feed.entry[i];
					vent = ligne.title.$t;
					if (vent == orientationVent) {
						spPoses = ligne.gsx$poses.$t;
						spVairessurmarne = ligne.gsx$vairessurmarne.$t;
						spJablines = ligne.gsx$jablines.$t;
						spMoisson = ligne.gsx$moisson.$t;
						spGrandeparoisse = ligne.gsx$grandeparoisse.$t;
						
						if (spPoses != '') {
							spPoses = spPoses + ' / 10';
						}
						if (spVairessurmarne != '') {
							spVairessurmarne = spVairessurmarne + ' / 10';
						}
						if (spJablines != '') {
							spJablines = spJablines + ' / 10';
						}
						if (spMoisson != '') {
							spMoisson = spMoisson + ' / 10';
						}
						if (spGrandeparoisse != '') {
							spGrandeparoisse = spGrandeparoisse + ' / 10';
						}
						
						$('.notePoses').html(spPoses);
						$('.noteVairesSurMarne').html(spVairessurmarne);
						$('.noteJablines').html(spJablines);
						$('.noteMoisson').html(spMoisson);
						$('.noteGrandeParoisse').html(spGrandeparoisse);						
					}
				}
			});

	}
}
