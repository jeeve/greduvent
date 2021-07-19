function calcCrow(lat1, lon1, lat2, lon2) {
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

// Converts numeric degrees to radians
function toRad(Value) {
  return (Value * Math.PI) / 180;
}

var times = [];
var xy = [];
var v = [];
var polylignes = [];
var trace;
var vmax, dmax;
var chartxy = [];
var marker;

function litGPX(url, ready) {
  $.ajax({
    type: "GET",
    url: url,
    dataType: "xml",
    success: function (xml) {
      var i;
      var t1, t2, dd, dt;

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
        });

      var distance = 0;
      chartxy = [];
      chartxy.push(["Distance", "Vitesse"]);
      for (i = 0; i < times.length; i++) {
        if (i == 0) {
          v.push(0.0);
        } else {
          dd = calcCrow(xy[i][0], xy[i][1], xy[i - 1][0], xy[i - 1][1]) * 1000;
          t1 = new Date(times[i - 1]);
          t2 = new Date(times[i]);
          dt = (t2.getTime() - t1.getTime()) / 1000;
          var vitesse;
          if (dt != 0) {
            vitesse = (dd / dt) * 1.94384;
          } else {
            vitesse = 0;
          }
          v.push(vitesse);
          chartxy.push([distance, vitesse]);
          distance = distance + dd;
        }
      }
      vmax = v.reduce((a, b) => {
        return Math.max(a, b);
      });
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
  $("#seuil").val((vmax / 2).toFixed(2));
  $("#position").val("0.00");
  $('#vitesse').text('0.00');
}

litGPX(getParameterByName("url"), dessineTrace);

function dessineTrace() {
  polylignes = [];
  if (marker != null) {
    marker.remove();
  }

  var seuil = $("#seuil").val();

  var xy2 = [];
  var cat0, cat;
  cat0 = 0;
  for (i = 0; i < v.length; i++) {
    xy2.push(xy[i]);
    if (v[i] > seuil) {
      cat = 1;
    } else {
      cat = 0;
    }
    if (cat0 != cat || xy2.length >= 100) {
      if (cat0 == 0) {
        polylignes.push(L.polyline(xy2, { color: "blue" }));
      } else {
        polylignes.push(L.polyline(xy2, { color: "red" }));
      }
      xy2 = [];
      xy2.push(xy[i]);
      cat0 = cat;
    }
  }
  trace = L.layerGroup(polylignes).addTo(map);
  marker = L.marker(xy[0]).addTo(map);
  marker.bindTooltip("0", {permanent: true}).openTooltip();
  UpdatePosition();
}

var map = L.map("map");
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  layers: [trace],
}).addTo(map);

reportWindowSize();

$("#seuil").change(function () {
  $("#curseur").val(($("#seuil").val() / vmax) * 100);
  CreeLigneSeuil(chart, $("#seuil").val());
  map.removeLayer(trace);
  dessineTrace();
});

$("#curseur").change(function () {
  $("#seuil").val((($("#curseur").val() * vmax) / 100).toFixed(2));
  CreeLigneSeuil(chart, $("#seuil").val());
  map.removeLayer(trace);
  dessineTrace();
});

$("#position").change(function () {
  CreeLignePosition(chart, $("#position").val() * 1000);
});

function reportWindowSize() {
  document.getElementById("map").style.height =
    window.innerHeight - 150 - 20 + "px";
}
document.getElementsByTagName("body")[0].onresize = reportWindowSize;

function getVitesse(x) {
  var j = 0;
  var delta = 10000000000.0;
  var d = x / 1000;
  for (i = 0; i < chartxy.length; i++) {
    if (Math.abs(chartxy[i][0] - d) < delta) {
      j = i;
      delta = Math.abs(chartxy[i][0] - d);
    }
  }
  return chartxy[j][1];
}

function UpdatePosition() {
  var i = Math.floor(($("#position").val() * 1000 * xy.length) / dmax);
  marker.setLatLng(xy[i]);
  $("#map .leaflet-tooltip").html($("#vitesse").text());
}

// ------------------------------------------------------------------------ chart

var selectedElementSeuil = null;
var selectedElementPosition = null;
var currentX = 0;
var currentY = 0;
const LARGEUR_LIGNE = 10;

function drawChart() {
  var data = google.visualization.arrayToDataTable(chartxy);

  var options = {
    vAxis: { viewWindowMode: "explicit", viewWindow: { min: 0, max: vmax } },
    pointSize: 1,
    legend: { position: "none" },
    chartArea: { left: "30", right: "0" },
    enableInteractivity: false,
    dataOpacity: 0.0,
  };

  chart = new google.visualization.LineChart(document.getElementById("chart"));
  chart.draw(data, options);

  CreeLigneSeuil(chart, $("#seuil").val());
  CreeLignePosition(chart, $("#position").val() * 1000);
  UpdatePosition();
  /*
  google.visualization.events.addListener(chart, "onmouseover", function (e) {
    marker.setLatLng(xy[e.row]);
  });
  */
}

$(window).resize(function () {
  drawChart();
});

function CreeLigneSeuil(chart, y) {
  $(".ligne-seuil").remove();
  createLineSeuilSVG(chart, y);
  selectedElementSeuil = null;
  currentY = 0;
  registerEvtLigneSeuilSVG();
}

function CreeLignePosition(chart, x) {
  $(".ligne-position").remove();
  createLinePositionSVG(chart, x);
  selectedElementPosition = null;
  currentX = 0;
  registerEvtLignePositionSVG();
}

function createLineSeuilSVG(chart, y) {
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

function createLinePositionSVG(chart, x) {
  var layout = chart.getChartLayoutInterface();
  var chartArea = layout.getChartAreaBoundingBox();
  var svg = chart.getContainer().getElementsByTagName("svg")[0];
  var xLoc = layout.getXLocation(x);
  var y1 = chartArea.top;
  var y2 = chartArea.height + chartArea.top;

  var svg2 = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svg2.setAttribute("class", "ligne ligne-position");
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
  line.setAttribute("stroke-dasharray", "5, 5");
  svg2.appendChild(line);
}

var registerEvtLigneSeuilSVG = function () {
  $(".ligne-seuil")
    .mousedown(function (e) {
      currentY = e.clientY;
      selectedElementSeuil = $(this)[0];
    })
    .mousemove(function (e) {
      if (selectedElementSeuil) {
        var y = chartGety(chart, e.clientY);
        if (y >= 0 && y <= vmax) {
          var dy =
            parseInt($(this)[0].getAttribute("y")) + e.clientY - currentY;
          $(this)[0].setAttribute("y", dy);
          currentY = e.clientY;

          $("#seuil").val(y.toFixed(2));
          $("#curseur").val(($("#seuil").val() / vmax) * 100);
          map.removeLayer(trace);
          dessineTrace();
        }
      }
    })
    .mouseup(function (e) {
      selectedElementSeuil = null;
    })
    .click(function (e) {
      e.stopPropagation();
    });

  $("#chart")
    .mousemove(function (e) {
      if (elementEstLigneSeuil(selectedElementSeuil)) {
        var y = chartGety(chart, e.clientY);
        if (y >= 0 && y <= vmax) {
          var dy =
            parseInt(selectedElementSeuil.getAttribute("y")) +
            e.clientY -
            currentY;
          selectedElementSeuil.setAttribute("y", dy);
          currentY = e.clientY;

          $("#seuil").val(y.toFixed(2));
          $("#curseur").val(($("#seuil").val() / vmax) * 100);
          map.removeLayer(trace);
          dessineTrace();
        }
      }
    })
    .mouseleave(function (e) {
      selectedElementSeuil = null;
    });
};

var registerEvtLignePositionSVG = function () {
  $(".ligne-position")
    .mousedown(function (e) {
      currentX = e.clientX;
      selectedElementPosition = $(this)[0];
    })
    .mousemove(function (e) {
      if (selectedElementPosition) {
        var x = chartGetx(chart, e.clientX);
        if (x >= 0 && x <= dmax) {
          var dx =
            parseInt($(this)[0].getAttribute("x")) + e.clientX - currentX;
          $(this)[0].setAttribute("x", dx);
          currentX = e.clientX;

          $("#position").val((x / 1000).toFixed(2));
          $("#vitesse").text(getVitesse(x * 1000).toFixed(2));
          UpdatePosition();
        }
      }
    })
    .mouseup(function (e) {
      selectedElementPosition = null;
    });

  $("#chart")
    .mousemove(function (e) {
      if (elementEstLignePosition(selectedElementPosition)) {
        var x = chartGetx(chart, e.clientX);
        if (x >= 0 && x <= dmax) {
          var dx =
            parseInt(selectedElementPosition.getAttribute("x")) +
            e.clientX -
            currentX;
          selectedElementPosition.setAttribute("x", dx);
          currentX = e.clientX;

          $("#position").val((x / 1000).toFixed(2));
          $("#vitesse").text(getVitesse(x * 1000).toFixed(2));
          UpdatePosition();
        }
      }
    })
    .mouseleave(function (e) {
      selectedElementPosition = null;
    })
    .click(function (e) {
      var x = chartGetx(chart, e.clientX);
      if (x >= 0 && x <= dmax) {
        var dx = e.clientX - 176;
        $(".ligne-position")[0].setAttribute("x", dx);
        $("#position").val((x / 1000).toFixed(2));
        $("#vitesse").text(getVitesse(x * 1000).toFixed(2));
        UpdatePosition();
      }
    });
};

function chartGety(chart, Y) {
  var layout = chart.getChartLayoutInterface();
  var H = layout.getChartAreaBoundingBox().height;
  var Y2 = $("#chart").last().offset().top + H - Y + 30;
  return (Y2 * vmax) / H;
}

function chartGetx(chart, X) {
  var layout = chart.getChartLayoutInterface();
  var L = layout.getChartAreaBoundingBox().width;
  var X2 = X - $("#chart").last().offset().left - 30;
  return (X2 * dmax) / L;
}

function elementEstLigneSeuil(e) {
  if (e != null) {
    if (e.getAttribute("class").indexOf("ligne-seuil") > -1) {
      return true;
    }
  }
  return false;
}

function elementEstLignePosition(e) {
  if (e != null) {
    if (e.getAttribute("class").indexOf("ligne-position") > -1) {
      return true;
    }
  }
  return false;
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
