function getInfoSessions(spot) {
  var sheetapi = "AIzaSyBPTPh6ApJE0F_bSkbwtD6jd2trhiZJy5o";
  $.ajax({
    url:
      "https://sheets.googleapis.com/v4/spreadsheets/1eCnnsOdcwRKJ_kpx1uS-XXJoJGFSvm3l3ez2K9PpPv4/values/Liste?key=" +
      sheetapi, //"https://spreadsheets.google.com/feeds/list/1eCnnsOdcwRKJ_kpx1uS-XXJoJGFSvm3l3ez2K9PpPv4/default/public/values?alt=json",
    type: "GET",
    crossDomain: true,
    dataType: "json",
  }).then(function (data) {
    var ligne, html, ancre, ligne0, dateheure0, annee0, annee;
    var stats = [];
    premiereAnnee = true;
    html =
      '<link rel="stylesheet" type="text/css" href="css/info-sessions.css" media="all"/>';
    var dateheure,
      laDateAnglais,
      laDate,
      leSpot,
      leMWS,
      laVideo,
      leCommentaire,
      replay,
      codeYoutube,
      vmax,
      v100m,
      distance,
      flotteur,
      voile,
      aileron,
      vent,
      pratique,
      res,
      trace,
      aile,
      reglage;
    annee0 = 0;
    for (i = data.values.length - 1; i >= 1; i--) {
      ligne = data.values[i];
      leSpot = ligne[1];

      if (
        leSpot != "" &&
        ((spot != "" &&
          spot.toLowerCase().indexOf(leSpot.toLowerCase()) > -1) ||
          spot == "")
      ) {
        dateheure = ligne[0];
        laDate = dateheure; //dateheure.substring(0, dateheure.search(' '));
        res = laDate.split("/");
        annee = res[2];

        if (annee != annee0) {
          html =
            html +
            '<h3 class="titre-annee" data-annee="' +
            annee +
            '">+ <span class="annee">' +
            annee +
            '</span><span data-annee="' +
            annee +
            '" class="nombre"></span><span data-annee="' +
            annee +
            '" class="stats-annee"></span></h3>';
          annee0 = annee;
          stats.push({ annee: annee, distance: 0, vmax: 0, v100m: 0 });
        }

        laDate = res[1] + "/" + res[0] + "/" + annee;
        var jour, mois;
        jour = res[1];
        if (jour.length == 1) {
          jour = "0" + jour;
        }
        mois = res[0];
        if (mois.length == 1) {
          mois = "0" + mois;
        }
        laDateAnglais = annee + mois + jour;

        /*
                    trace = ligne.gsx$tracemontre.$t;
                    if (trace == "") {
                        trace = ligne.gsx$tracek72.$t;
                    }
                    */

        trace = "";
        if (ligne[27] != "") {
          trace =
            "/sensations/visu-gpx/visu-gpx.php?url=" + ligne[27] + "&stats=1";
        }

        leMWS = ligne[22];
        laVideo = ligne[23];
        leCommentaire = ligne[28];
        replay = ligne[29];
        codeYoutube = laVideo.substring(
          laVideo.lastIndexOf("/") + 1,
          laVideo.length
        );
        pratique = ligne[2];
        vent = ligne[3];
        flotteur = ligne[12];
        voile = ligne[13];
        aileron = ligne[14];
        aile = ligne[15];
        reglage = ligne[16];
        if (reglage != "") {
          reglage = " R" + reglage;
        }

        distance = ligne[7];
        vmax = ligne[9];
        v100m = ligne[10];
        ventMini = ligne[4];
        ventMaxi = ligne[5];

        if (distance != "") {
          var distanceFloat = parseFloat(distance);
          stats[stats.length - 1].distance += distanceFloat;
        }

        var vmaxFloat = parseFloat(vmax);
        var v100mFloat = parseFloat(v100m);

        if (vmaxFloat > stats[stats.length - 1].vmax) {
          stats[stats.length - 1].vmax = vmaxFloat;
        }
        if (v100mFloat > stats[stats.length - 1].v100m) {
          stats[stats.length - 1].v100m = v100mFloat;
        }

        ancre = laDate.replace(new RegExp("/", "g"), "-");

        html =
          html +
          '<div id="' +
          ancre +
          '" class="row session" data-annee="' +
          annee +
          '" style="display: none;"><div class="col-sm-8 fond">';

        if (laVideo != "") {
          if (laVideo.substring(0, 13) == "https://youtu") {
            html =
              html +
              '<p align="center"><a href="' +
              laVideo +
              '" target="_blank"><div class="image"><img title="Vidéo" alt="Vidéo" class="img-responsive ombre-image video" src="http://img.youtube.com/vi/' +
              codeYoutube +
              '/0.jpg" style="display: block; text-align: center; margin: auto;"><img title="Vidéo" alt="Vidéo" class="icone-lecture" src="images/lecture-video-2.png"></div></a></p>';
          } else {
            html =
              html +
              '<p align="center"><a href="' +
              laVideo +
              '" target="_blank"><img src="' +
              laVideo +
              '" class="img-responsive ombre-image"></a></p>';
          }
        }

        html =
          html +
          '</div><div class="visible-xs"><br></div><div class="col-sm-4"><div class="fond-table encadrement-table"><table class="info-sessions">';
        html =
          html +
          '<tr><td><a href="' +
          leMWS +
          '" target="_blank">Session</a></td><td>' +
          pratique +
          " du " +
          laDate +
          "</td></tr>";

        if (spot == "" || spot.indexOf(",") > -1) {
          var spotURL;
          switch (leSpot) {
            case "Léry-Poses":
              spotURL = "/sensations/lery-poses.php";
              break;
            case "Vaires sur Marne":
              spotURL = "/sensations/vaires-sur-marne.php";
              break;
            case "Moisson":
              spotURL = "/sensations/moisson.php";
              break;
            case "Foret-Orient":
              spotURL = "/sensations/foret-orient.php";
              break;
            case "Jablines":
              spotURL = "/sensations/jablines.php";
              break;
            case "Mézières-Ecluzelles":
              spotURL = "/sensations/ecluzelles.php";
              break;
            case "La Justice":
              spotURL = "/mer/saint-jacut.php";
              break;
            case "Pissotte":
              spotURL = "/mer/saint-jacut.php";
              break;
            case "Les Haas":
              spotURL = "/mer/saint-jacut.php";
              break;
            case "Grande-Paroisse":
              spotURL = "/sensations/grande-paroisse.php";
              break;
            case "Saint-Quentin-en-Yvelines":
              spotURL = "/sensations/saint-quentin-yvelines.php";
              break;
            default:
              spotURL = "";
          }
          if (spotURL == "") {
            html = html + "</td><td>Spot</td><td>" + leSpot + "</td></tr>";
          } else {
            html =
              html +
              '</td><td>Spot</td><td><a href="' +
              spotURL +
              '">' +
              leSpot +
              "</a></td></tr>";
          }
        }

        var station;
        switch (leSpot) {
          case "Léry-Poses":
            station = "louviers";
            break;
          case "Vaires sur Marne":
            station = "torcy";
            break;
          case "Moisson":
            station = "mantes-la-jolie";
            break;
          case "Foret-Orient":
            station = "lusigny-sur-barse";
            break;
          case "Jablines":
            station = "torcy";
            break;
          case "Mézières-Ecluzelles":
            station = "dreux";
            break;
          case "Grande-Paroisse":
            station = "montereau-fault-yonne";
            break;
          default:
            station = "";
        }

        lienMeteo =
          "http://meteoflask.herokuapp.com/plot/" +
          station +
          "/" +
          laDateAnglais;

        if (ventMini != "" && ventMaxi != "") {
          if (station != "") {
            html =
              html +
              '</td><td><a href="' +
              lienMeteo +
              '" >Conditions</a></td><td>Vent de ' +
              vent +
              " " +
              ventMini +
              " à " +
              ventMaxi +
              " kts</td></tr>";
          } else {
            html =
              html +
              "</td><td>Conditions</td><td>Vent de " +
              vent +
              " " +
              ventMini +
              " à " +
              ventMaxi +
              " kts</td></tr>";
          }
        } else {
          if (station != "") {
            html =
              html +
              '</td><td><a href="' +
              lienMeteo +
              '" target="_blank">Conditions</a></td><td>Vent de ' +
              vent +
              "</td></tr>";
          } else {
            html =
              html +
              "</td><td>Conditions</td><td>Vent de " +
              vent +
              " " +
              ventMini +
              " à " +
              ventMaxi +
              " kts</td></tr>";
          }
        }
        if (aile != "") {
          //html = html + '<tr><td>Equipement</td><td>' + flotteur + '<br>' + voile + '<br>' + aileron + ' - aile ' + aile + reglage + '</td></tr>';
          html =
            html +
            "<tr><td>Equipement</td><td>" +
            flotteur +
            "<br>" +
            voile +
            "<br>" +
            aileron +
            " - aile " +
            aile +
            "</td></tr>";
        } else {
          html =
            html +
            "<tr><td>Equipement</td><td>" +
            flotteur +
            "<br>" +
            voile +
            "<br>" +
            aileron +
            "</td></tr>";
        }

        var lienGPX = ligne[27];

        if (distance != "") {
          if (trace == "") {
            if (lienGPX != "") {
              html =
                html +
                "<tr><td>Parcours</td><td>" +
                distance +
                ' km  <a href="' +
                lienGPX +
                '" target="_blank"><img src="/sensations/images/icone-gpx.png" title="Fichier GPX" alt"Fichier GPX" style="width: 20px;"></a>';
            } else {
              html =
                html + "<tr><td>Parcours</td><td>" + distance + " km";
            }
          } else {
            if (lienGPX != "") {
              html =
                html +
                '<tr><td><a href="' +
                trace +
                '" target="_blank">Parcours</a></td><td>' +
                distance +
                ' km  <a href="' +
                lienGPX +
                '" target="_blank"><img src="/sensations/images/icone-gpx.png" title="Fichier GPX" alt"Fichier GPX" style="width: 20px;"></a>';
            } else {
              html =
                html +
                '<tr><td><a href="' +
                trace +
                '" target="_blank">Parcours</a></td><td>' +
                distance +
                " km";
            }
          }
          if (replay != "") {
              html = html + ' - <a href="' + replay + '" target="_blank">Replay</a>';
          }
          html = html + "</td></tr>";
        }
        if (vmax != "") {
          html = html + "<tr><td>VMax</td><td>" + vmax + " kts</td></tr>";
        }
        if (v100m != "") {
          html = html + "<tr><td>V100m</td><td>" + v100m + " kts</td></tr>";
        }
        if (leCommentaire != "") {
          html = html + '<tr><td colspan="2">' + leCommentaire + "</td></tr>";
        }
        /*
                    if (laVideo != '') {
                        html = html + '<tr><td colspan="2"><a target="_blank" href="' + laVideo + '">Vidéo</a></td></tr>';
                    }    
*/
        html =
          html +
          '<tr><td colspan="2"><a href="' +
          location.pathname +
          "?session=" +
          ancre +
          '">#permalien</a></td></tr>';
        html = html + "</table></div></div>";

        html = html + "</div>";
      }
    }
    $("#sessions").html(html);

    goSession();

    $(document).ready(function () {
      $(".titre-annee").click(function () {
        var a = $(this).attr("data-annee");
        $('.session[data-annee="' + a + '"]').slideToggle(
          "slow",
          function () {}
        );
        if ($(this).html().indexOf("+") > -1) {
          $(this).html($(this).html().replace("+", "-"));
        } else {
          $(this).html($(this).html().replace("-", "+"));
        }
      });

      var annee, distanceAnnee;
      $(".nombre").each(function () {
        annee = $(this).attr("data-annee");
        $(this).html(
          " (" +
            $('.session[data-annee="' + annee + '"]').length +
            ')<span class="stats-annee"> - ' +
            stats.find((elt) => elt.annee == annee).distance.toFixed(3) +
            " km - Vmax : " +
            stats.find((elt) => elt.annee == annee).vmax.toFixed(2) +
            " kts - V100m : " +
            stats.find((elt) => elt.annee == annee).v100m.toFixed(2) +
            " kts</span>"
        );
      });
    });
  });
}

function getParameterByName(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return "";
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function goSession() {
  var d = getParameterByName("session");
  if (d != null) {
    var words = d.split("-");
    var a = words[2];
    $('.session[data-annee="' + a + '"]').show("fast", function () {
      jQuery("html, body").animate( // on se deplace sur la date demandee en parametre
        {
          scrollTop: jQuery("#" + d).offset().top - 50,
        },
        "slow"
      );
    });
    if (
      $('.titre-annee[data-annee="' + a + '"]')
        .html()
        .indexOf("+") > -1
    ) {
      $('.titre-annee[data-annee="' + a + '"]').html(
        $('.titre-annee[data-annee="' + a + '"]')
          .html()
          .replace("+", "-")
      );
    } else {
      $('.titre-annee[data-annee="' + a + '"]').html(
        $('.titre-annee[data-annee="' + a + '"]')
          .html()
          .replace("-", "+")
      );
    }
  } else {
    var premiereAnnee;
    premiereAnnee = $("#sessions .titre-annee").first().attr("data-annee");
    if (premiereAnnee != null) {
      $('.titre-annee[data-annee="' + premiereAnnee + '"]').html(
        $('.titre-annee[data-annee="' + premiereAnnee + '"]')
          .html()
          .replace("+", "-")
      );
      $('.session[data-annee="' + premiereAnnee + '"]').show();
    }
  }
}
