// gère l'activation du menu

//$(document).ready(function() { 
	$('.nav > li').filter(function() {
		if ($(this).children('a').length != 0)
				{
					url = document.location.href; 
					dir = url.substring(0, url.lastIndexOf('/')); // .../loire
					dir = dir.substring(dir.lastIndexOf('/') + 1); // loire
					href = $(this).children('a')[0].getAttribute('href');
					return href.indexOf(dir) > 0; 
				}
				else
				{
					return false;
				}				
	}).addClass('active');
	$('.active ul > li').filter(function() {
		if ($(this).children('a').length != 0)
				{
					url = document.location.href; 
					dir = url.substring(url.lastIndexOf('/')+1, url.length); // .../loire
					if (dir.indexOf('#') >= 0) {
						dir = dir.substring(0, dir.lastIndexOf('#')-1);						
					}
					href = $(this).children('a')[0].getAttribute('href');
					return href.indexOf(dir) > 0; 
				}
				else
				{
					return false;
				}				
	}).addClass('active2');	
	$('.active ul').css('display', 'block');
//});
