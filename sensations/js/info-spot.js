function getInfoSpot() {
	$.ajax({
		url: "https://sheets.googleapis.com/v4/spreadsheets/1O3WDo7864s7npqM7r7zd2XXVWeVqhuqjgmzfObh40gY/values/Spots?key=" + sheetapi, // "https://spreadsheets.google.com/feeds/list/1O3WDo7864s7npqM7r7zd2XXVWeVqhuqjgmzfObh40gY/default/public/values?alt=json",
		type: 'GET',
		crossDomain: true,
		dataType: 'json'
	}).then(function(data) {
			var ligne, iPoses, iVairessurmarne, iJablines, iMoisson, iGrandeparoisse, iSaintQuentin, iEcluzelles, iForetOrient;
			var col1;
			for (i=data.values.length-1; i >= 1 ; i--) {
				ligne = data.values[i];
				col1 = ligne[0];
				if (col1 == 'Info') {
					iPoses = ligne[1];
					iVairessurmarne = ligne[2];
					iJablines = ligne[3];
					iMoisson = ligne[4];
					iGrandeparoisse = ligne[5];
					iSaintQuentin = ligne[6];
					iEcluzelles = ligne[7];
					iForetOrient = ligne[8];
												
					$('.infoPoses').html(iPoses);
					$('.infoVairesSurMarne').html(iVairessurmarne);
					$('.infoJablines').html(iJablines);
					$('.infoMoisson').html(iMoisson);
					$('.infoGrandeParoisse').html(iGrandeparoisse);
					$('.infoSaintQuentin').html(iSaintQuentin);
					$('.infoEcluzelles').html(iEcluzelles);
					$('.infoForetOrient').html(iForetOrient);

				}
			}
	});
}

