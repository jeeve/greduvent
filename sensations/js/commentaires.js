function getCommentaires() {
		$.ajax({
			url: "https://sheets.googleapis.com/v4/spreadsheets/1osyy0y3vFQc8v6doGTuzaLyGmhV4Sgs7MaPTASUbJNc/values/Formresponses1?key=" + sheetapi, // "https://spreadsheets.google.com/feeds/list/1osyy0y3vFQc8v6doGTuzaLyGmhV4Sgs7MaPTASUbJNc/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne;
				var dateheure, nom, commentaire, laDate, res, reponse;
				var ligneHtml, html;
				var node = document.getElementById("tableCommentaires");
				html = "<table>";
				for (i=data.values.length-1; i >= 1 ; i--) {
					ligneHtml = "<tr>";
					ligne = data.values[i];
					dateheure = ligne[0];
					laDate = dateheure.substring(0, dateheure.search(' '));
					res = laDate.split("/");
					laDate = res[0] + '/' + res[1] + '/' + res[2];
					nom = ligne[1];
					commentaire = ligne[2];
					reponse = ligne[3];
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
