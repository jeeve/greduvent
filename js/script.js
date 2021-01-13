String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};	

$(document).ready(function() {
	
	$('a').filter(function() {
		return this.hostname && this.hostname != location.hostname &&
						this.hostname.indexOf('https://greduvent') == -1 && 
					//	document.location.href.indexOf('sommaire') == - 1 &&
                        $(this).children('img').length == 0 && 
						$(this).children('span').length == 0 &&  
						$(this).text().indexOf('herokuapp') == -1 &&
                        $(this).text().indexOf('@') == -1 // && $(this).text().indexOf('contrib') == -1;
	}).addClass('external').attr("target","_blank");;
/*
	var images = $('img').filter(function() {
		var attr = $(this).attr('title');
		return (typeof attr !== typeof undefined && attr !== false);
		});
	
	images.each(function () {
		var imageHtml = $(this).clone();
		$(this).replaceWith('<figure>' + imageHtml.html() + '</figure>');
	});
*/
});