// utilisé pour compenser le décalage des signets à cause de la navbar fixe
// https://github.com/twbs/bootstrap/issues/1768
 var shiftWindow = function() { scrollBy(0, -50) };
 window.addEventListener("hashchange", shiftWindow);
 function load() { if (window.location.hash) shiftWindow(); }