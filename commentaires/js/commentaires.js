function getCommentaires() {
		$.ajax({
			url: "https://sheets.googleapis.com/v4/spreadsheets/1SmZbYjacC8YWSgTnOWOAqsN8DzZOunedhifsXO4iO_s/values/Commentaires?key=" + sheetapi, // "https://spreadsheets.google.com/feeds/list/1SmZbYjacC8YWSgTnOWOAqsN8DzZOunedhifsXO4iO_s/od6/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne;
				var dateheure, nom, commentaire, laDate, res;
				var ligneHtml, html;
				var node = document.getElementById("tableCommentaires");
				html = "<table>";
				for (i=data.values.length-1; i >= 1 ; i--) {
					ligneHtml = "<tr>";
					ligne = data.values[i];
					dateheure = ligne[0];
					laDate = dateheure.substring(0, dateheure.search(' '));
					res = laDate.split("/");
					laDate = res[1] + '/' + res[0] + '/' + res[2];
					nom = ligne[2];
					commentaire = ligne[3];
					ligneHtml = ligneHtml + "<td>" + laDate + "</td>";
					ligneHtml = ligneHtml + "<td>" + nom + "</td>";
					ligneHtml = ligneHtml + "<td>" + commentaire + "</td>";					
					ligneHtml = ligneHtml + "</tr>";
					html = html + ligneHtml;
				}
				html = html + "</table>";
				node.innerHTML = html;
			});
}

$(document).ready(function() {
	getCommentaires();
});
