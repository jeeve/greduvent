function calculeDistance(lat1, lon1, lat2, lon2) {
  var R = 6371; // km
  var dLat = toRad(lat2 - lat1);
  var dLon = toRad(lon2 - lon1);
  var lat1 = toRad(lat1);
  var lat2 = toRad(lat2);

  var a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.sin(dLon / 2) * Math.sin(dLon / 2) * Math.cos(lat1) * Math.cos(lat2);
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  var d = R * c;
  return d;
}

function toRad(Value) {
  return (Value * Math.PI) / 180;
}

function toDeg(radians) {
  var pi = Math.PI;
  return radians * (180 / pi);
}

function angleFromCoordinate(lat1, lon1, lat2, lon2) {
  brng = Math.atan2(lat2 - lat1, lon2 - lon1);
  brng = brng * (180 / Math.PI);
  brng = (brng + 360) % 360;
  brng = 360 - brng;
  return brng;
}

var times = [];
var xy = [];
var v = [];
var a = [];
var polylignes = [];
var trace;
var vmax, ivamx, dmax;
var chartxy = [];
var markerVitesse, markerVmax;
var borneA, borneB;
var lectureTimer = null;
var lecturei;

function litGPX(url, ready) {
  borneA = 0;
  borneB = 0;
  $.ajax({
    type: "GET",
    url: url,
    dataType: "xml",
    success: function (xml) {
      var i;
      var t1, t2, dd, dt, angle;

      $(xml)
        .find("trkpt")
        .each(function () {
          if ($(this).find("time").length == 1) {
            time = $(this).find("time").text();
            lat = parseFloat($(this).attr("lat"));
            lon = parseFloat($(this).attr("lon"));

            times.push(time);
            var coord = [];
            coord[0] = lat;
            coord[1] = lon;
            xy.push(coord);
          }
          borneB = xy.length;
        });

      var distance = 0;
      vmax = 0;
      ivmax = 0;
      chartxy = [];
      chartxy.push(["Distance", "Vitesse"]);
      for (i = 0; i < times.length; i++) {
        if (i == 0) {
          v.push(0.0);
          a.push(0.0);
        } else {
          dd = calculeDistance(xy[i][0], xy[i][1], xy[i - 1][0], xy[i - 1][1]);
          angle = angleFromCoordinate(
            xy[i - 1][0],
            xy[i - 1][1],
            xy[i][0],
            xy[i][1]
          );
          t1 = new Date(times[i - 1]);
          t2 = new Date(times[i]);
          dt = (t2.getTime() - t1.getTime()) / 1000;
          var vitesse;
          if (dt != 0) {
            vitesse = ((dd * 1000) / dt) * 1.94384;
          } else {
            vitesse = 0;
          }
          if (vitesse > vmax) {
            vmax = vitesse;
            ivmax = i;
          }
          v.push(vitesse);
          a.push(angle);
          chartxy.push([distance, vitesse]);
          distance = distance + dd;
        }
      }
      dmax = distance - dd;

      initParametres();
      var polyline = L.polyline(xy, { color: "black" });
      map.fitBounds(polyline.getBounds());

      ready();

      google.load("visualization", "1.0", { packages: ["corechart"] });
      google.setOnLoadCallback(drawChart);
    },
  });
}

function initParametres() {
  $("#seuil").val("12.00");
  $("#curseur").val(($("#seuil").val() / vmax) * 100);
  $("#distance-seuil").text(calculeDistanceSeuil($("#seuil").val()).toFixed(3));
  $("#position").val("0.000");
  $("#vitesse").text("0.00");
  $("#rapidite").val("1");
  $("#fenetre-auto").prop("checked", true);
  $("#fenetre-largeur").val("5.000");
}

litGPX(getParameterByName("url"), dessineTrace);

function calculeDistanceSeuil(seuil) {
  var distance = 0;
  var delta;
  for (i = 1; i < chartxy.length; i++) {
    // attention indice 0 est entete
    if (i > 1) {
      if (chartxy[i][1] >= seuil) {
        delta = chartxy[i][0] - chartxy[i - 1][0];
        distance += delta;
      }
    }
  }
  return distance;
}

function dessineTrace() {
  polylignes = [];

  var seuil = $("#seuil").val();

  var xy2 = [];
  var opacite0, opacite;
  opacite0 = 1.0;
  var cat0, cat;
  cat0 = 0;
  for (i = 0; i < xy.length; i++) {
    xy2.push(xy[i]);
    if (v[i] > seuil) {
      cat = 1;
    } else {
      cat = 0;
    }
    if (indiceEndehorsBornes(i)) {
      opacite = 0.1;
    } else {
      opacite = 1.0;
    }
    if (opacite0 != opacite || xy2.length >= 100) {
      if (cat == 0) {
        polylignes.push(L.polyline(xy2, { color: "blue", opacity: opacite0 }));
      } else {
        polylignes.push(L.polyline(xy2, { color: "red", opacity: opacite0 }));
      }
      xy2 = [];
      xy2.push(xy[i]);
      opacite0 = opacite;
    } else {
      if (cat0 != cat || xy2.length >= 100) {
        if (cat0 == 0) {
          polylignes.push(L.polyline(xy2, { color: "blue", opacity: opacite }));
        } else {
          polylignes.push(L.polyline(xy2, { color: "red", opacity: opacite }));
        }
        xy2 = [];
        xy2.push(xy[i]);
        cat0 = cat;
      }
    }
  }

  if (trace != null) {
    trace.remove();
  }
  trace = L.layerGroup(polylignes).addTo(map);

  var myIcon = L.icon({
    iconUrl: "fleche.png",
    iconSize: [26, 26],
    iconAnchor: [13, 13],
    tooltipAnchor: [26, 26],
    className: "vitesse"
  });

  if (markerVitesse != null) {
    markerVitesse.remove();
  }
  markerVitesse = L.marker(xy[0], { icon: myIcon, rotationAngle: 0.0 }).bindTooltip("0", { permanent: true }).addTo(map);
  markerVitesse.openTooltip();

  if (markerVmax != null) {
    markerVmax.remove();
  }
  markerVmax = L.marker(xy[ivmax]).bindTooltip(vmax.toFixed(2)).addTo(map);

  UpdatePosition();
}

function indiceEndehorsBornes(i) {
  if (i < borneA || i > borneB) {
    return true;
  }
  return false;
}

function updateBornes() {
  if (
    parseInt($(".ligne-gauche").attr("x")) <=
    parseInt($(".ligne-droite").attr("x"))
  ) {
    $(".borne-a").attr(
      "width",
      parseInt($(".ligne-gauche").attr("x")) + LARGEUR_LIGNE / 2 - 30
    );
    $(".borne-b").attr(
      "x",
      parseInt($(".ligne-droite").attr("x")) + LARGEUR_LIGNE / 2
    );
    $(".borne-b").attr(
      "width",
      chart.getChartLayoutInterface().getXLocation(dmax) -
        parseInt($(".ligne-droite").attr("x")) +
        LARGEUR_LIGNE / 2
    );
  } else {
    $(".borne-a").attr(
      "width",
      parseInt($(".ligne-droite").attr("x")) + LARGEUR_LIGNE / 2 - 30
    );
    $(".borne-b").attr(
      "x",
      parseInt($(".ligne-gauche").attr("x")) + LARGEUR_LIGNE / 2
    );
    $(".borne-ab").attr(
      "width",
      chart.getChartLayoutInterface().getXLocation(dmax) -
        parseInt($(".ligne-gauche").attr("x")) +
        LARGEUR_LIGNE / 2
    );
  }

  var i = getIndiceDistance(
    chartGetx(
      chart,
      $(".ligne-gauche").last().offset().left + LARGEUR_LIGNE / 2
    )
  );
  var j = getIndiceDistance(
    chartGetx(
      chart,
      $(".ligne-droite").last().offset().left + LARGEUR_LIGNE / 2
    )
  );
  if (i < j) {
    borneA = i;
    borneB = j;
  } else {
    borneA = j;
    borneB = i;
  }
  map.removeLayer(trace);
  dessineTrace();
}

var map = L.map("map");
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  layers: [trace],
}).addTo(map);

map.on("click", function (e) {
  var i = calculeIndiceLePlusPresDe(e.latlng.lat, e.latlng.lng);
  if (i != -1) {
    $("#position").val(chartxy[i + 1][0].toFixed(3));
    $("#vitesse").text(chartxy[i + 1][1].toFixed(2));
    CreeLignePosition(chart, chartxy[i][0]);
    UpdatePosition();
    if ($("#fenetre-auto").is(":checked")) {
      calculeBornes();
    }
  }
});

function calculeIndiceLePlusPresDe(lat, lng) {
  var dmin = 1000000.0;
  var d;
  var j = 0;
  for (i = 0; i < xy.length; i++) {
    d = calculeDistance(lat, lng, xy[i][0], xy[i][1]);
    if (d < dmin) {
      j = i;
      dmin = d;
    }
  }
  if (dmin < 0.1) {
    // ne prend que si moins de 100m
    return j;
  } else {
    return -1;
  }
}

reportWindowSize();

$("#map").keypress(function (e) {
  if (e.which == 32) {
    if (lectureTimer == null) {
      $("#lecture").click();
    } else {
      $("#stop").click();     
    }
  }
});

$("#seuil").change(function () {
  $("#curseur").val(($("#seuil").val() / vmax) * 100);
  CreeLigneSeuil(chart, $("#seuil").val());
  $("#distance-seuil").text(calculeDistanceSeuil($("#seuil").val()).toFixed(3));
  map.removeLayer(trace);
  dessineTrace();
});

$("#curseur").change(function () {
  $("#seuil").val((($("#curseur").val() * vmax) / 100).toFixed(2));
  CreeLigneSeuil(chart, $("#seuil").val());
  $("#distance-seuil").text(calculeDistanceSeuil($("#seuil").val()).toFixed(3));
  map.removeLayer(trace);
  dessineTrace();
});

$("#position").change(function () {
  CreeLignePosition(chart, $("#position").val());
  $("#vitesse").text(getVitesse($("#position").val()).toFixed(2));
  UpdatePosition();
});

$("#fenetre-largeur").change(function () {
  calculeBornes();
});

function reportWindowSize() {
  if ($("#map").offset().top < 20) {
    $("#map").height(window.innerHeight - $("#chart").height() - 20); // 2 colonnes
  } else {
    $("#map").height(window.innerHeight - $("#chart").height() - 20 - $("#control").height()); // 1 colonne
  }
}
document.getElementsByTagName("body")[0].onresize = reportWindowSize;

function getVitesse(x) {
  return chartxy[getIndiceDistance(x)][1];
}

function getIndiceDistance(x) {
  var j = 1;
  var delta = 10000000.0;
  for (i = 1; i < chartxy.length; i++) {
    if (Math.abs(chartxy[i][0] - x) < delta) {
      j = i;
      delta = Math.abs(chartxy[i][0] - x);
    }
  }
  return j;
}

function UpdatePosition() {
  var i = getIndiceDistance($("#position").val());
  markerVitesse.setLatLng(xy[i]);
  markerVitesse.setRotationAngle(a[i]);
  markerVitesse.setTooltipContent($("#vitesse").text());
  $("#carte #time").text(times[i]);
}

$("#lecture").click(function () {
  if (lectureTimer == null) {
    lecturei = getIndiceDistance(parseFloat($("#position").val()));
    lectureTimer = setInterval(avance, 100);
  }
});

$("#stop").click(function () {
  clearInterval(lectureTimer);
  lectureTimer = null;
});

$("#fenetre-auto").click(function () {
  if ($("#fenetre-auto").is(":checked")) {
    $(".fenetre-largeur").css("visibility", "visible");
  } else {
    $(".fenetre-largeur").css("visibility", "hidden");
  }
});

$(".label-fenetre-auto").click(function () { // on peut cliquer sur le label
  $("#fenetre-auto").click();
});

function avance() {
  if (lecturei < chartxy.length) {
    lecturei += parseInt($("#rapidite").val());
    $("#position").val(chartxy[lecturei][0].toFixed(3));
    CreeLignePosition(chart, $("#position").val());
    $("#vitesse").text(getVitesse($("#position").val()).toFixed(2));
    UpdatePosition();
    if ($("#fenetre-auto").is(":checked")) {
      calculeBornes();
    }
  } else {
    clearInterval(lectureTimer);
    lectureTimer = null;
  }
}

// ------------------------------------------------------------------------ chart

var curseurSeuil = { currentX: 0, selectedElement: null };
var curseurPosition = { currentX: 0, selectedElement: null };
var curseurA = { currentX: 0, selectedElement: null };
var curseurB = { currentX: 0, selectedElement: null };
const LARGEUR_LIGNE = 10;

function drawChart() {
  var data = google.visualization.arrayToDataTable(chartxy);

  var options = {
    vAxis: { viewWindowMode: "explicit", viewWindow: { min: 0, max: vmax } },
    pointSize: 0,
    legend: { position: "none" },
    chartArea: { left: "30", right: "0", top: "10", bottom: "20" },
    enableInteractivity: false,
    dataOpacity: 0.0,
  };

  chart = new google.visualization.LineChart(document.getElementById("chart"));
  chart.draw(data, options);
  registerEvtChart();
  createLineBornesSVG(chart, dmax * 0.1, dmax - dmax * 0.1);
  CreeLigneSeuil(chart, $("#seuil").val());
  CreeLignePosition(chart, $("#position").val() * 1000);
  CreeLigneGauche(chart, dmax * 0.1);
  CreeLigneDroite(chart, dmax - dmax * 0.1);
  UpdatePosition();
  updateBornes();
  calculeBornes();
}

$(window).resize(function () {
  drawChart();
});

function CreeLigneSeuil(chart, y) {
  $(".ligne-seuil").remove();
  createLineHorizontaleSVG(chart, y);
  curseurSeuil.selectedElement = null;
  curseurSeuil.currentX = 0;
  registerEvtLigneSeuilSVG();
}

function CreeLignePosition(chart, x) {
  $(".ligne-position").remove();
  createLineVerticaleSVG(chart, x, "ligne-position", true);
  curseurPosition.selectedElement = null;
  curseurPosition.currentX = 0;
  registerEvtLignePositionSVG();
}

function CreeLigneGauche(chart, x) {
  $(".ligne-gauche").remove();
  createLineVerticaleSVG(chart, x, "ligne-gauche", false);
  curseurA.selectedElement = null;
  curseurA.currentX = 0;
  registerEvtLigneVerticaleSVG("ligne-gauche", curseurA);
}

function CreeLigneDroite(chart, x) {
  $(".ligne-droite").remove();
  createLineVerticaleSVG(chart, x, "ligne-droite", false);
  curseurB.selectedElement = null;
  curseurB.currentX = 0;
  registerEvtLigneVerticaleSVG("ligne-droite", curseurB);
}

function createLineHorizontaleSVG(chart, y) {
  var layout = chart.getChartLayoutInterface();
  var chartArea = layout.getChartAreaBoundingBox();
  var svg = chart.getContainer().getElementsByTagName("svg")[0];
  var yLoc = layout.getYLocation(y);
  var x1 = chartArea.left;
  var x2 = chartArea.width + chartArea.left;

  var svg2 = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svg2.setAttribute("class", "ligne ligne-seuil");
  svg2.setAttribute("x", x1);
  svg2.setAttribute("y", yLoc);
  svg2.setAttribute("width", x2 - x1);
  svg2.setAttribute("height", LARGEUR_LIGNE);
  svg.appendChild(svg2);

  var rect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
  rect.setAttribute("x", 0);
  rect.setAttribute("y", 0);
  rect.setAttribute("width", "100%");
  rect.setAttribute("height", "100%");
  rect.setAttribute("stroke", "#FF0000");
  rect.setAttribute("stroke-width", 1);
  rect.setAttribute("fill-opacity", 0);
  rect.setAttribute("stroke-opacity", 0);
  svg2.appendChild(rect);

  var line = document.createElementNS("http://www.w3.org/2000/svg", "line");
  line.setAttribute("x1", 0);
  line.setAttribute("y1", LARGEUR_LIGNE / 2);
  line.setAttribute("x2", x2 - x1);
  line.setAttribute("y2", LARGEUR_LIGNE / 2);
  line.setAttribute("stroke", "#FF0000");
  line.setAttribute("stroke-width", 2);
  svg2.appendChild(line);
}

function createLineVerticaleSVG(chart, x, classeName, pointille) {
  var layout = chart.getChartLayoutInterface();
  var chartArea = layout.getChartAreaBoundingBox();
  var svg = chart.getContainer().getElementsByTagName("svg")[0];
  var xLoc = layout.getXLocation(x);
  var y1 = chartArea.top;
  var y2 = chartArea.height + chartArea.top;

  var svg2 = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svg2.setAttribute("class", "ligne " + classeName);
  svg2.setAttribute("x", xLoc);
  svg2.setAttribute("y", y1);
  svg2.setAttribute("width", LARGEUR_LIGNE);
  svg2.setAttribute("height", y2 - y1);
  svg.appendChild(svg2);

  var rect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
  rect.setAttribute("x", 0);
  rect.setAttribute("y", 0);
  rect.setAttribute("width", "100%");
  rect.setAttribute("height", "100%");
  rect.setAttribute("stroke", "#FF0000");
  rect.setAttribute("stroke-width", 1);
  rect.setAttribute("fill-opacity", 0);
  rect.setAttribute("stroke-opacity", 0);
  svg2.appendChild(rect);

  var line = document.createElementNS("http://www.w3.org/2000/svg", "line");
  line.setAttribute("x1", LARGEUR_LIGNE / 2);
  line.setAttribute("y1", 0);
  line.setAttribute("x2", LARGEUR_LIGNE / 2);
  line.setAttribute("y2", y2 - y1);
  line.setAttribute("stroke", "#000000");
  line.setAttribute("stroke-width", 3);
  if (pointille) {
    line.setAttribute("stroke-dasharray", "5, 5");
  }
  svg2.appendChild(line);
}

function createLineBornesSVG(chart, a, b) {
  $(".borne").remove();
  var layout = chart.getChartLayoutInterface();
  var chartArea = layout.getChartAreaBoundingBox();
  var svg = chart.getContainer().getElementsByTagName("svg")[0];

  var xLocA = layout.getXLocation(a);

  var rectA = document.createElementNS("http://www.w3.org/2000/svg", "rect");
  rectA.setAttribute("class", "ligne borne-a");
  rectA.setAttribute("x", 30);
  rectA.setAttribute("y", 10);
  rectA.setAttribute("width", xLocA - 30);
  rectA.setAttribute("height", 120);
  rectA.setAttribute("stroke", "#C0C0C0");
  rectA.setAttribute("stroke-width", 1);
  rectA.setAttribute("fill-opacity", 0.1);
  rectA.setAttribute("stroke-opacity", 0.1);
  svg.appendChild(rectA);

  var xLocB = layout.getXLocation(b);

  var rectB = document.createElementNS("http://www.w3.org/2000/svg", "rect");
  rectB.setAttribute("class", "ligne borne-b");
  rectB.setAttribute("x", xLocB);
  rectB.setAttribute("y", 10);
  rectB.setAttribute("width", layout.getXLocation(dmax) - xLocB);
  rectB.setAttribute("height", 120);
  rectB.setAttribute("stroke", "#C0C0C0");
  rectB.setAttribute("stroke-width", 1);
  rectB.setAttribute("fill-opacity", 0.1);
  rectB.setAttribute("stroke-opacity", 0.1);
  svg.appendChild(rectB);
}

var registerEvtChart = function () {
  $("#chart")
    .mousemove(function (e) {
      var elt = null;
      var parametres;

      if (elementEstClasse(curseurPosition.selectedElement, "ligne-position")) {
        var x = chartGetx(chart, e.clientX);
        if (x >= 0 && x <= dmax) {
          var dx =
            parseInt(curseurPosition.selectedElement.getAttribute("x")) +
            e.clientX -
            curseurPosition.currentX;
          curseurPosition.selectedElement.setAttribute("x", dx);
          curseurPosition.currentX = e.clientX;

          $("#position").val(x.toFixed(3));
          $("#vitesse").text(getVitesse(x).toFixed(2));
          UpdatePosition();
        }
      } else {
        if (elementEstClasse(curseurSeuil.selectedElement, "ligne-seuil")) {
          var y = chartGety(chart, e.clientY);
          if (y >= 0 && y <= vmax) {
            var dy =
              parseInt(curseurSeuil.selectedElement.getAttribute("y")) +
              e.clientY -
              curseurSeuil.currentX;
            curseurSeuil.selectedElement.setAttribute("y", dy);
            curseurSeuil.currentX = e.clientY;

            $("#seuil").val(y.toFixed(2));
            $("#distance-seuil").text(
              calculeDistanceSeuil($("#seuil").val()).toFixed(3)
            );
            $("#curseur").val(($("#seuil").val() / vmax) * 100);
            map.removeLayer(trace);
            dessineTrace();
          }
        }
        if (elementEstClasse(curseurA.selectedElement, "ligne-gauche")) {
          {
            parametres = curseurA;
          }
        }
        if (elementEstClasse(curseurB.selectedElement, "ligne-droite")) {
          parametres = curseurB;
        }
        if (parametres != undefined) {
          var x = chartGetx(chart, e.clientX);
          if (x >= 0 && x <= dmax) {
            var dx =
              parseInt(parametres.selectedElement.getAttribute("x")) +
              e.clientX -
              parametres.currentX;
            parametres.selectedElement.setAttribute("x", dx);
            parametres.currentX = e.clientX;

            if (
              elementEstClasse(parametres.selectedElement, "ligne-gauche") ||
              elementEstClasse(parametres.selectedElement, "ligne-droite")
            ) {
              updateBornes();
            }
          }
        }
      }
    })
    .mouseleave(function (e) {
      curseurSeuil.selectedElement = null;
      curseurPosition.selectedElement = null;
      curseurA.selectedElement = null;
      curseurB.selectedElement = null;
    })
    .click(function (e) {
      var x = chartGetx(chart, e.clientX);
      if (x >= 0 && x <= dmax) {
        var dx = e.clientX - 20;
        $(".ligne-position")[0].setAttribute("x", dx);
        $("#position").val(x.toFixed(3));
        $("#vitesse").text(getVitesse(x).toFixed(2));
        UpdatePosition();
        if ($("#fenetre-auto").is(":checked")) {
          calculeBornes();
        }
      }
    });
};

var registerEvtLigneSeuilSVG = function () {
  $(".ligne-seuil")
    .mousedown(function (e) {
      curseurSeuil.currentX = e.clientY;
      curseurSeuil.selectedElement = $(this)[0];
    })
    .mousemove(function (e) {
      if (curseurSeuil.selectedElement) {
        var y = chartGety(chart, e.clientY);
        if (y >= 0 && y <= vmax) {
          var dy =
            parseInt($(this)[0].getAttribute("y")) +
            e.clientY -
            curseurSeuil.currentX;
          $(this)[0].setAttribute("y", dy);
          curseurSeuil.currentX = e.clientY;

          $("#seuil").val(y.toFixed(2));
          $("#distance-seuil").text(
            calculeDistanceSeuil($("#seuil").val()).toFixed(3)
          );
          $("#curseur").val(($("#seuil").val() / vmax) * 100);
          map.removeLayer(trace);
          dessineTrace();
        }
      }
    })
    .mouseup(function (e) {
      curseurSeuil.selectedElement = null;
    })
    .click(function (e) {
      e.stopPropagation();
    });
};

var registerEvtLignePositionSVG = function () {
  $(".ligne-position")
    .mousedown(function (e) {
      curseurPosition.currentX = e.clientX;
      curseurPosition.selectedElement = $(this)[0];
    })
    .mousemove(function (e) {
      if (curseurPosition.selectedElement) {
        var x = chartGetx(chart, e.clientX);
        if (x >= 0 && x <= dmax) {
          var dx =
            parseInt($(this)[0].getAttribute("x")) +
            e.clientX -
            curseurPosition.currentX;
          $(this)[0].setAttribute("x", dx);
          curseurPosition.currentX = e.clientX;

          $("#position").val(x.toFixed(3));
          $("#vitesse").text(getVitesse(x).toFixed(2));
          UpdatePosition();
        }
      }
    })
    .mouseup(function (e) {
      curseurPosition.selectedElement = null;
    });
};

var registerEvtLigneVerticaleSVG = function (className, parametres) {
  $("." + className)
    .mousedown(function (e) {
      parametres.currentX = e.clientX;
      parametres.selectedElement = $(this)[0];
    })
    .mousemove(function (e) {
      if (parametres.selectedElement) {
        var x = chartGetx(chart, e.clientX);
        if (x >= 0 && x <= dmax) {
          var dx =
            parseInt($(this)[0].getAttribute("x")) +
            e.clientX -
            parametres.currentX;
          $(this)[0].setAttribute("x", dx);
          parametres.currentX = e.clientX;

          if (
            elementEstClasse(parametres.selectedElement, "ligne-gauche") ||
            elementEstClasse(parametres.selectedElement, "ligne-droite")
          ) {
            updateBornes();
          }
        }
      }
    })
    .mouseup(function (e) {
      parametres.selectedElement = null;
    })
    .click(function (e) {
      e.stopPropagation();
    });
};

function chartGety(chart, Y) {
  var layout = chart.getChartLayoutInterface();
  var H = layout.getChartAreaBoundingBox().height;
  var Y2 = $("#chart").last().offset().top + H - Y + 10;
  return (Y2 * vmax) / H;
}

function chartGetx(chart, X) {
  var layout = chart.getChartLayoutInterface();
  var L = layout.getChartAreaBoundingBox().width;
  var X2 = X - $("#chart").last().offset().left - 30;
  return (X2 * dmax) / L;
}

function elementEstClasse(e, className) {
  if (e != null) {
    if (e.getAttribute("class").indexOf(className) > -1) {
      return true;
    }
  }
  return false;
}

function calculeBornes() {
  var x = parseFloat($("#position").val());
  var l = parseFloat($("#fenetre-largeur").val());
  var L = chart.getChartLayoutInterface().getChartAreaBoundingBox().width;
  var a = x - l / 2;
  var b = x + l / 2;
  if (a < 0) {
    a = 0;
  }
  if (b > dmax) {
    b = dmax;
  }
  $(".ligne-gauche").attr("x", 30 + (L * a) / dmax - LARGEUR_LIGNE / 2);
  $(".ligne-droite").attr("x", 30 + (L * b) / dmax - LARGEUR_LIGNE / 2);
  updateBornes();
}
// ----------------------------------------

function getParameterByName(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return "";
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}