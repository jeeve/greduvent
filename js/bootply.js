$(document).ready(function () {

  $("#bouton-menu").click(function () {
      $("#sidebar").toggleClass("sidebar-show");
      $(".container > div > div:last-child").toggleClass("sidebar-show");
  });

  $("#bouton-bas-page").click(function () {
    $("html, body").animate({ scrollTop: $("body").height() }, "slow");
  });

  $("#bouton-haut-page").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
  });

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
