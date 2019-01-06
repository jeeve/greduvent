$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active'); 
	$('html,body').animate({scrollTop: 0}, 'slow');
  });
/*  
  showHideBoutonMenu();
  $(window).scroll(showHideBoutonMenu);
  $(window).resize(showHideBoutonMenu);  
 */ 
  $('#bouton-bas-page').click(function() {
 /*   $('.row-offcanvas').toggleClass('active'); */
	$('html, body').animate({scrollTop: $('body').height()}, 'slow');
	});
  
  showHideBoutonMenu();
  $(window).scroll(showHideBoutonMenu);
  $(window).resize(showHideBoutonMenu);   
});	

function showHideBoutonMenu(event) {
   var st = $(this).scrollTop();
   if ((st <= 0) && ($('body').width() > 980)) {
       $('#bouton-menu').addClass('hidden');
   } else {
       $('#bouton-menu').removeClass('hidden');
   }	

 if (($(window).scrollTop() >= $(document).height() - $(window).height()) && ($('body').width() > 980)) {
       $('#bouton-bas-page').addClass('hidden');
   } else {
       $('#bouton-bas-page').removeClass('hidden');
   }
}
