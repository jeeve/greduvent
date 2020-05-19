function getInfoSpot() {
	$.ajax({
		url: "https://spreadsheets.google.com/feeds/list/1O3WDo7864s7npqM7r7zd2XXVWeVqhuqjgmzfObh40gY/default/public/values?alt=json",
		type: 'GET',
		crossDomain: true,
		dataType: 'json'
	}).then(function(data) {
			var ligne, iPoses, iVairessurmarne, iJablines, iMoisson, iGrandeparoisse, iSaintQuentin, iEcluzelles;
			var col1;
			for (i=data.feed.entry.length-1; i >= 0 ; i--) {
				ligne = data.feed.entry[i];
				col1 = ligne.title.$t;
				if (col1 == 'Info') {
					iPoses = ligne.gsx$poses.$t;
					iVairessurmarne = ligne.gsx$vairessurmarne.$t;
					iJablines = ligne.gsx$jablines.$t;
					iMoisson = ligne.gsx$moisson.$t;
					iGrandeparoisse = ligne.gsx$grandeparoisse.$t;
					iSaintQuentin = ligne.gsx$saintquentinenyvelines.$t;
					iEcluzelles = ligne.gsx$ecluzelles.$t;
												
					$('.infoPoses').html(iPoses);
					$('.infoVairesSurMarne').html(iVairessurmarne);
					$('.infoJablines').html(iJablines);
					$('.infoMoisson').html(iMoisson);
					$('.infoGrandeParoisse').html(iGrandeparoisse);
					$('.infoSaintQuentin').html(iSaintQuentin);
					$('.infoEcluzelles').html(iEcluzelles);

				}
			}
	});
}

