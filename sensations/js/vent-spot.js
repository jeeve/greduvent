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
			url: "https://sheets.googleapis.com/v4/spreadsheets/1O3WDo7864s7npqM7r7zd2XXVWeVqhuqjgmzfObh40gY/values/Spots?key=" + sheetapi, // "https://spreadsheets.google.com/feeds/list/1O3WDo7864s7npqM7r7zd2XXVWeVqhuqjgmzfObh40gY/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne, vent, spPoses, spVairessurmarne, spJablines, spMoisson, spGrandeparoisse, spSaintQuentin, spEcluzelles, spForetOrient;
				var nPoses, nVairessurmarne, nJablines, nMoisson, nGrandeparoisse, nSaintQuentin, nEcluzelles, nForetOrient;
				for (i=data.values.length-2; i >= 1 ; i--) {
					ligne = data.values[i];
					vent = ligne[0];
					if (vent == orientationVent) {
						nPoses = ligne[1];
						nVairessurmarne = ligne[2];
						nJablines = ligne[3];
						nMoisson = ligne[4];
						nGrandeparoisse = ligne[5];
						nSaintQuentin = ligne[6];
						nEcluzelles = ligne[7];
						nForetOrient = ligne[8];
						
						spPoses = '';
						spVairessurmarne = '';
						spJablines = '';
						spMoisson = '';
						spGrandeparoisse = '';
						spSaintQuentin = '';
						spEcluzelles = '';
						spForetOrient = '';
						
						if (nPoses != '' && nPoses != undefined) {
							spPoses = '<span class="note">' + nPoses + '</span> / 10';
						}
						if (nVairessurmarne != '' && nVairessurmarne != undefined) {
							spVairessurmarne = '<span class="note">' + nVairessurmarne + '</span> / 10';
						}
						if (nJablines != '' && nJablines != undefined) {
							spJablines = '<span class="note">' + nJablines + '</span> / 10';
						}
						if (nMoisson != ''&& nMoisson != undefined) {
							spMoisson = '<span class="note">' + nMoisson + '</span> / 10';
						}
						if (nGrandeparoisse != '' && nGrandeparoisse != undefined) {
							spGrandeparoisse = '<span class="note">' + nGrandeparoisse + '</span> / 10';
						}
						if (nSaintQuentin != '' && nSaintQuentin != undefined) {
							spSaintQuentin = '<span class="note">' + nSaintQuentin + '</span> / 10';
						}
						if (nEcluzelles != '' && nEcluzelles != undefined) {
							spEcluzelles = '<span class="note">' + nEcluzelles + '</span> / 10';
						}
						if (nForetOrient != '' && nForetOrient != undefined) {
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
