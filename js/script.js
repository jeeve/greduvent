String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};	

$(document).ready(function() {
	/*
	$('a').filter(function() {
		return this.hostname && this.hostname != location.hostname &&
						this.hostname.indexOf('https://greduvent') == -1 && 
                        $(this).children('img').length == 0 && 
						$(this).children('span').length == 0 &&  
						this.hostname.indexOf('outilsflask') == -1 &&
                        $(this).text().indexOf('@') == -1 
	}).addClass('external').attr("target","_blank");
	*/
});

var sheetapi = "AIzaSyBPTPh6ApJE0F_bSkbwtD6jd2trhiZJy5o";