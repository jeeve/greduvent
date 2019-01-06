function traduireEnFr(texte)
{
	var traduction = "";
	
		$.ajax({
			async: false,
			url: "https://watson-api-explorer.mybluemix.net/language-translator/api/v2/translate?source=en&target=fr&text=" + texte
		}).then(function(data) {
			traduction = data;
		});

	return traduction;	
}
 	
$(document).ready(function(){
	$("#btn").click(function() {
		var texte = document.getElementById("texte").value;
		$.ajax({
			url: "https://watson-api-explorer.mybluemix.net/language-translator/api/v2/translate?source=en&target=fr&text=" + texte
		}).then(function(data) {
		$('#traduction').text(data);
	})});
});