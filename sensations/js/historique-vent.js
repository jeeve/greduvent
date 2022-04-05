function initHistorique(spot) {
  var estHier = false;
  var maDate;
  var now = new Date();
  if (now.getHours() < 11) {
    maDate = new Date(new Date().setDate(new Date().getDate() - 1)); // hier
    estHier = true;
  } else {
    maDate = new Date(new Date().setDate(new Date().getDate() - 0)); // aujourd'hui
  }

  var annee = maDate.getFullYear();
  var mois = maDate.getMonth() + 1;
  var jour = maDate.getDate();
  var heure2 = maDate.getHours();
  var minute2 = maDate.getMinutes();

  annee = annee.toString();
  mois = mois.toString();
  jour = jour.toString();
  if (mois.length == 1) {
    mois = "0" + mois;
  }
  if (jour.length == 1) {
    jour = "0" + jour;
  }

  $("#ma-date-" + spot).datepicker({
    dateFormat: "dd/mm/yy",
    minDate: "13/04/2015",
    maxDate: new Date(),
    changeMonth: true,
    changeYear: true,
  });
  $("#ma-date-" + spot).datepicker("setDate", jour + "/" + mois + "/" + annee);

  if (heure2 > 18 || estHier) {
    heure2 = 18;
  }
  heure2 = heure2.toString();
  minute2 = minute2.toString();
  if (heure2.length == 1) {
    heure2 = "0" + heure2;
  }
  if (minute2.length == 1) {
    minute2 = "0" + minute2;
  }

  $("#mon-heure2").val(heure2 + ":00");

  // getHistoriqueVent();
}

function getHistoriqueVent(spot) {
  var dateFrancaise = $("#ma-date-" + spot).val();
  var decompositionDate = dateFrancaise.split("/");

  if (decompositionDate[1].length == 1) {
    decompositionDate[1] = "0" + decompositionDate[1];
  }
  if (decompositionDate[0].length == 1) {
    decompositionDate[0] = "0" + decompositionDate[0];
  }

  var curdate =
    decompositionDate[2] + decompositionDate[1] + decompositionDate[0];

  //	console.log(curdate);
  //	var curdate = "2017-04-19"; // document.getElementById("datetimeform")[0].value;

  /*
    var time1 = document.getElementById("datetimeform")[1].value;
	var time2 = document.getElementById("datetimeform")[2].value;
	
	var heuresminutes1 = time1.split(':');
	var heure1 = heuresminutes1[0];
	var minute1 = heuresminutes1[1];	
	var heuresminutes2 = time2.split(':');
	var heure2 = heuresminutes2[0];
	var minute2 = heuresminutes2[1];
*/

  switch (spot) {
    case "poses":
      $("#historique-vent-poses").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/louviers/vent/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/louviers/vent/' +
          curdate +
          '" class="img-responsive ombre-image histo-image"></a>'
      );
      $("#historique-rose-poses").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/rose/louviers/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/rose/louviers/' +
          curdate +
          '" class="img-responsive ombre-image histo-image"></a>'
      );
      //$("#historique-temp-poses").html('<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/louviers/temperature/' + curdate + '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/louviers/temperature/' + curdate + '" class="img-responsive ombre-image histo-image"></a>');
      break;
    case "moisson":
      $("#historique-vent-moisson").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/mantes-la-jolie/vent/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/mantes-la-jolie/vent/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      $("#historique-rose-moisson").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/rose/mantes-la-jolie/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/rose/mantes-la-jolie/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      //$("#historique-temp-moisson").html('<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/mantes-la-jolie/temperature/' + curdate + '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/mantes-la-jolie/temperature/' + curdate + '" class="img-responsive ombre-image histo-image"></a>');
      break;
    case "ecluzelles":
      $("#historique-vent-ecluzelles").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/dreux/vent/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/dreux/vent/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      $("#historique-rose-ecluzelles").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/dreux/vent/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/rose/dreux/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      //$("#historique-temp-ecluzelles").html('<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/dreux/temperature/' + curdate + '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/dreux/temperature/' + curdate + '" class="img-responsive ombre-image histo-image"></a>');
      break;
    case "jablines":
      $("#historique-vent-jablines").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/torcy/vent/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/torcy/vent/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      $("#historique-rose-jablines").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/rose/torcy/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/rose/torcy/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      //$("#historique-temp-jablines").html('<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/torcy/temperature/' + curdate + '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/torcy/temperature/' + curdate + '" class="img-responsive ombre-image histo-image"></a>');
      break;
    case "vaires":
      $("#historique-vent-vaires").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/torcy/vent/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/torcy/vent/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      $("#historique-rose-vaires").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/rose/torcy/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/rose/torcy/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      //$("#historique-temp-vaires").html('<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/torcy/temperature/' + curdate + '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/torcy/temperature/' + curdate + '" class="img-responsive ombre-image histo-image"></a>');
      break;
    case "grandeparoisse":
      $("#historique-vent-grandeparoisse").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/montereau-fault-yonne/vent/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/montereau-fault-yonne/vent/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      $("#historique-rose-grandeparoisse").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/rose/montereau-fault-yonne/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/rose/montereau-fault-yonne/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      //$("#historique-temp-grandeparoisse").html('<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/montereau-fault-yonne/temperature/' + curdate + '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/montereau-fault-yonne/temperature/' + curdate + '" class="img-responsive ombre-image histo-image"></a>');
      break;
    case "foretorient":
      $("#historique-vent-foretorient").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/lusigny-sur-barse/vent/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/lusigny-sur-barse/vent/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      $("#historique-rose-foretorient").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/rose/lusigny-sur-barse/' +
          curdate +
          '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/rose/lusigny-sur-barse/' +
          curdate +
          '" class="img-responsive ombre-image"></a>'
      );
      $("#historique-niveau-foretorient").html(
        '<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/niveau/"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/niveau/" class="img-responsive ombre-image"></a>'
      );
      //$("#historique-temp-foretorient").html('<div class="loader-container"><img src="images/loading.gif" class="loader"></div><a target="_blank" href="https://meteoflask.herokuapp.com/plot/lusigny-sur-barse/temperature/' + curdate + '"><img onload="imageChargee(this)" src="https://meteoflask.herokuapp.com/plot/lusigny-sur-barse/temperature/' + curdate + '" class="img-responsive ombre-image histo-image"></a>');
      break;
  }
}

/*
	jQuery(".histo-image").on('load', function() {
		jQuery(this).prev().css("display", "none");
		alert('ok');
	});
*/

function imageChargee(elt) {
  jQuery(elt).parent().prev().css("display", "none");
  goSession();
}
