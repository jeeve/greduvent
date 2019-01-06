function getCommentaires() {
		$.ajax({
			url: "https://spreadsheets.google.com/feeds/list/1osyy0y3vFQc8v6doGTuzaLyGmhV4Sgs7MaPTASUbJNc/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne;
				var dateheure, nom, commentaire, laDate, res, reponse;
				var ligneHtml, html;
				var node = document.getElementById("tableCommentaires");
				html = "<table>";
				for (i=data.feed.entry.length-1; i >= 0 ; i--) {
					ligneHtml = "<tr>";
					ligne = data.feed.entry[i];
					dateheure = ligne.title.$t;
					laDate = dateheure.substring(0, dateheure.search(' '));
					res = laDate.split("/");
					laDate = res[0] + '/' + res[1] + '/' + res[2];
					nom = ligne.gsx$nompseudo.$t;
					commentaire = ligne.gsx$commentaire.$t;
					reponse = ligne.gsx$réponse.$t;
					ligneHtml = ligneHtml + "<td><p>" + laDate + "</p></td>";
					ligneHtml = ligneHtml + "<td><p>" + nom + "</p></td>";
					ligneHtml = ligneHtml + "<td><p>" + commentaire + "</p></td>";	
					//ligneHtml = ligneHtml + "<td>" + reponse + "</td>";						
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
