$(document).ready(function () {

  // Créer l'overlay pour la sidebar mobile
  $('body').append('<div class="sidebar-overlay"></div>');

  $("#bouton-menu").click(function () {
      $("#sidebar").toggleClass("sidebar-show");
      $(".container > div > div:last-child").toggleClass("sidebar-show");
      $(".sidebar-overlay").toggleClass("active");
  });

  // Fermer la sidebar en cliquant sur l'overlay
  $(".sidebar-overlay").click(function () {
      $("#sidebar").removeClass("sidebar-show");
      $(".container > div > div:last-child").removeClass("sidebar-show");
      $(".sidebar-overlay").removeClass("active");
  });

  $("#bouton-bas-page").click(function () {
    $("html, body").animate({ scrollTop: $("body").height() }, "slow");
  });

  $("#bouton-haut-page").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
  });

  if (jQuery.support.touch) {	
	
    $("#sidebar").swipeleft(function() {
      $("#sidebar").removeClass("sidebar-show");
      $(".container > div > div:last-child").removeClass("sidebar-show");
      $(".sidebar-overlay").removeClass("active");
    });

    $("#sidebar + div").swiperight(function() {
      $("#sidebar").addClass("sidebar-show");
      $(".container > div > div:last-child").addClass("sidebar-show");
      $(".sidebar-overlay").addClass("active");
    });

  }

  showHideBoutonMenu();
  $(window).scroll(showHideBoutonMenu);
  $(window).resize(showHideBoutonMenu);

});

function showHideBoutonMenu(event) {
  if (
    $(window).scrollTop() >= $(document).height() - $(window).height() &&
    $("body").width() > 980
  ) {
    $("#bouton-bas-page").addClass("hidden");
  } else {
    $("#bouton-bas-page").removeClass("hidden");
  }

  if (
    $(window).scrollTop() < 50 &&
    $("body").width() > 980
  ) {
    $("#bouton-haut-page").addClass("hidden");
  } else {
    $("#bouton-haut-page").removeClass("hidden");
  }
}
