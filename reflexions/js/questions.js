/*
function getParameterByName(name) {
	name = name.replace(/[[]/, [).replace(/[]]/, ]);
	var regexS = [?&] + name + =([^&#]*);
	var regex = new RegExp(regexS);
	var results = regex.exec(window.location.search);
	if(results == null)
		return ;
	else
		return decodeURIComponent(results[1].replace(/+/g, ));
}
*/

$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	if (results == null) {
		return "null";
	}
	return results[1] || 0;
}

 function urlencode(text) {
        return encodeURIComponent(text);
 }

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

function getQuestion() {
		$.ajax({
			url: "https://sheets.googleapis.com/v4/spreadsheets/1M2Fe51WZl598zw2sx3iQC0UrHlIczLKJ6Yi15yPoTrs/values/Formresponses1?key=" + sheetapi, // "https://spreadsheets.google.com/feeds/list/1M2Fe51WZl598zw2sx3iQC0UrHlIczLKJ6Yi15yPoTrs/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne;
				var nom, question;
				var node = document.getElementById("ligne-question");
				var i;
				var paramQuestion = decodeURIComponent($.urlParam('question'));
				if (paramQuestion == "null") {
					i = getRandomInt(data.values.length-1) + 1;
				}
				else {
					i = -1;
					for (j=1; j < data.values.length; j++) {
						if (data.values[j][2] == paramQuestion) {
							i = j;	
							break;
						}
					}
				}
				if (i == -1) {
					i = getRandomInt(data.values.length-1) + 1;
				}
				ligne = data.values[i];
				nom = ligne[1];
				if (nom == "") {
					nom = "anonyme";
				}
				question = ligne[2];
				var paramPermalien = '';
				if (paramQuestion == "null") {
					paramPermalien = '?question=' + encodeURIComponent(question);
				}
				node.innerHTML = '<p><u>La question du jour de ' + nom + '</u> : <b>' + question + '</b><br><a href="https://docs.google.com/forms/d/e/1FAIpQLSfcCrNawvdiorWRtXlkL16VHePNTI47YPe8UmTwGDMVWOoQcQ/viewform?usp=pp_url&entry.1388707615=' + question + '&entry.664735575&entry.115939093" target="_blank"><br>Votre réponse <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>, <a href="https://docs.google.com/forms/d/e/1FAIpQLSdm50yNnhBLyAku2Z2QuQ6UY7OU2QA6JWtAk9lRhMI3NmUV0A/viewform?usp=sf_link" target="_blank">Posez une question <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>, <a href="' + window.location + paramPermalien + '">#Permalien</a></p>';
				getReponses(question);
				getAutresReponses(question, data);
			});
}

function getReponses(question) {
		$.ajax({
			url: "https://sheets.googleapis.com/v4/spreadsheets/1g7ZtQOYmo2FoewC9x8fgwhD-ll6hZPP7yrSp4UPxkqc/values/Formresponses1?key=" + sheetapi, //"https://spreadsheets.google.com/feeds/list/1g7ZtQOYmo2FoewC9x8fgwhD-ll6hZPP7yrSp4UPxkqc/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne;
				var dateheure, nom, votreQuestion, reponse;
				var ligneHtml, html;
				var node = document.getElementById("lignes-reponses");
				html = "<p><ul>";
				for (i = 1; i < data.values.length; i++) {
					ligne = data.values[i];
					dateheure = ligne[0];
					nom = ligne[2];
					if (nom == "") {
						nom = "anonyme";
					}
					votreQuestion = ligne[1];
					if (votreQuestion == question) {
						reponse = ligne[3];
						ligneHtml = "<li><u>" + nom + " répond</u> : " + reponse + "</li>";
						html = html + ligneHtml;
					}
				}
				html = html + "</ul></p>";
				node.innerHTML = html;
				$('#autres-questions-toggle').toggle(); // affiche lien autre questions
			});
}

function getAutresReponses(question, data) {
		var ligne;
		var votreQuestion;
		var ligneHtml, html;
		var permalien;
		var node = document.getElementById("autres-questions");
		var paramQuestion = decodeURIComponent($.urlParam('question'));
		html = '<p><ul>';
		for (i = 1; i < data.values.length; i++) {
			ligne = data.values[i];
			votreQuestion = ligne[2];
			if (votreQuestion != question) {
				if (paramQuestion == "null") {
					permalien = window.location.href + '?question=' + encodeURIComponent(votreQuestion);
				}
				else {
					permalien = window.location.href.substr(0, window.location.href.indexOf('?')) + '?question=' + encodeURIComponent(votreQuestion);
				}
				ligneHtml = '<li><a href="' + permalien + '">' + votreQuestion + '</a></li>';
				// if (i < entry.length-2) {
				//	ligneHtml += ', ';
				//}
				html = html + ligneHtml;
			}
		}
		html = html + "</ul></p>";
		node.innerHTML = html;
}

$(document).ready(function() {
	getQuestion();
	$('#autres-questions-toggle').click(function() {
		$('#autres-questions').toggle();
	});
});


