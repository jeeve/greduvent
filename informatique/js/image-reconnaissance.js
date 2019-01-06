String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};

$(document).ready(function(){
	$("#image-btn").click(function() { 
		var lien = document.getElementById("image-url").value;
		
		$("#image-img").empty();
		$("#image-img").append("<img src='" + lien + "' class='img-responsive ombre-image'>")
		$('#image-classification').empty();
		
		$.ajax({
			dataType: 'json',
			url: "https://gateway-a.watsonplatform.net/visual-recognition/api/v3/classify?api_key=c213125394c109578da9edf3f6b5972651345ef5&url=" + lien + "&version=2016-05-19"
		}).then(function(data) {
			var html ='<p><em>'; 
		jQuery.each(data.images[0].classifiers[0].classes, function(entryIndex, entry)
				{ 
					html += 'Catégorie : ' + traduireEnFr(entry.class) + '<br>';
					html += 'Fiabilité : ' + entry.score + '<br>';
					if (entry.type_hierarchy) {
						html += 'Hiérarchie : ' + traduireEnFr(entry.type_hierarchy.substring(1, entry.type_hierarchy.length).replaceAll('/', ', ')) + '<br>';
					}
				}); 
		html += '</em></p>'; 				
		$('#image-classification').append(html);
		})
		
		$.ajax({
			dataType: 'json',
			url: "https://gateway-a.watsonplatform.net/visual-recognition/api/v3/detect_faces?api_key=c213125394c109578da9edf3f6b5972651345ef5&url=" + lien + "&version=2016-05-20"
		}).then(function(data) {
			var html ='<p><em>'; 
		jQuery.each(data.images[0].faces, function(entryIndex, entry)
				{ 
					if (entry.identity) {
						html += entry.identity.name + ' ';
					}
					else
					{
						html += 'Personne ';
					}
					html += traduireEnFr(entry.gender.gender).toLowerCase() + ' entre ' + entry.age.min + ' et ' + entry.age.max + ' ans<br>';					
				}); 
		html += '</em></p>'; 		
		$('#image-classification').append(html);
		})
		
	});
});