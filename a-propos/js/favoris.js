function getFavoris() {
		$.ajax({
			url: "https://spreadsheets.google.com/feeds/list/166nDewURI08ookiFuut1lrI_47TXvngWEj7_-YKFstw/od6/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne;
				var nom, type, auteur;
				var ligneHtml, htmlRomans, htmlFilms, htmlLogiciels;
				var nodeRomans = document.getElementById("tableFavorisRomans");
				var nodeFilms = document.getElementById("tableFavorisFilms");
				var nodeLogiciels = document.getElementById("tableFavorisLogiciels");
				htmlRomans = "<table>";
				htmlFilms = "<table>";
				htmlLogiciels = "<table>";
				for (i=0; i < data.feed.entry.length; i++) {
					ligneHtml = "<tr>";
					ligne = data.feed.entry[i];
					nom = ligne.title.$t;
					auteur = ligne.gsx$auteur.$t;
					type = ligne.gsx$type.$t;
					if (nom.substring(0, 4) == 'http') {
						ligneHtml = ligneHtml + '<td><a href="' + nom + '" target="_blank">' + nom + '</td>';
					}
					else {
						ligneHtml = ligneHtml + "<td>" + nom + "</td>";
					}
					ligneHtml = ligneHtml + "<td>" + auteur + "</td>";			
					ligneHtml = ligneHtml + "</tr>";
					if (type == "Roman") {
						htmlRomans = htmlRomans + ligneHtml;
					} else
						if (type == "Film") {
							htmlFilms = htmlFilms + ligneHtml;
						} else
							if (type == "Logiciel") {
								htmlLogiciels = htmlLogiciels + ligneHtml;
							}	
				}
				htmlRomans = htmlRomans + "</table>";
				htmlFilms = htmlFilms + "</table>";
				htmlLogiciels = htmlLogiciels + "</table>";
				nodeRomans.innerHTML = htmlRomans;
				nodeFilms.innerHTML = htmlFilms;
				nodeLogiciels.innerHTML = htmlLogiciels;
			});
}

$(document).ready(function() {
	getFavoris();
});
