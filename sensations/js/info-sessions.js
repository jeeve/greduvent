function getInfoSessions(spot) {
	$.ajax({
		url: "https://spreadsheets.google.com/feeds/list/1eCnnsOdcwRKJ_kpx1uS-XXJoJGFSvm3l3ez2K9PpPv4/default/public/values?alt=json",
		type: 'GET',
		crossDomain: true,
		dataType: 'json'
	}).then(function(data) {
			var ligne, html;
			var laDate, leSpot, leMWS, laVideo, leCommentaire, codeYoutube;
			html = '';
			for (i=data.feed.entry.length-1; i >= 0 ; i--) {
				
				ligne = data.feed.entry[i];
				laDate = ligne.gsx$date.$t;
				leSpot = ligne.gsx$spot.$t;

				if (leSpot == spot && laVideo != '') {											

					leMWS = ligne.gsx$mws.$t;
					laVideo = ligne.gsx$youtube.$t;
					leCommentaire = ligne.gsx$commentaire.$t;
					codeYoutube = laVideo.substring(laVideo.lastIndexOf('/')+1, laVideo.length);
					console.log(codeYoutube);

					html = html + '<br><a name="' + laDate + '"></a><div class="row">' +
					'<div class="col-xs-12 col-sm-2 fond"></div><div class="col-xs-12 col-sm-8 fond">' +
					'<p align="center"><div class="embed-responsive embed-responsive-4by3 ombre-image">' + 
					'<iframe width="560" height="315" src="https://www.youtube.com/embed/';
					
					html = html + codeYoutube + '?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>' +
					'</div></p>' +
					'<p class="legende">' +
					'<a href="' + leMWS + '" target="_blank">' +
					leCommentaire +
					'</a></p></div></div>';
					
					$('#sessions').html(html);
				}
			}
	});
}

