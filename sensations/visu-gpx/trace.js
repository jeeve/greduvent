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
var vmax;
var chartxy = [];
var marker;
var chart, rect, down;

function litGPX(url, times, xy, v, ready) {
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

      var d = 0;
      chartxy = [];
      chartxy.push(["Temps", "Vitesse"]);
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
          chartxy.push([d, vitesse]);
          d = d + dd;
        }
      }
      vmax = v.reduce((a, b) => {
        return Math.max(a, b);
      });
      $("#seuil").val((vmax / 2).toFixed(2));
      var polyline = L.polyline(xy, { color: "black" });
      map.fitBounds(polyline.getBounds());

      ready();

      google.load("visualization", "1.0", { packages: ["corechart"] });
      google.setOnLoadCallback(drawChart);
    },
  });
}

litGPX(getParameterByName("url"), times, xy, v, dessine);

function dessine() {
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
  dessine();
});

$("#curseur").change(function () {
  $("#seuil").val((($("#curseur").val() * vmax) / 100).toFixed(2));
  CreeLigneSeuil(chart, $("#seuil").val());
  map.removeLayer(trace);
  dessine();
});

function reportWindowSize() {
  document.getElementById("map").style.height =
    window.innerHeight - 150 - 20 + "px";
}
document.getElementsByTagName("body")[0].onresize = reportWindowSize;

// ------------------------------------------------------------------------ chart

var selectedElement = null;
var currentY = 0;

function drawChart() {
  var data = google.visualization.arrayToDataTable(chartxy);

  var options = {
    vAxis: { viewWindowMode: "explicit", viewWindow: { min: 0, max: vmax } },
    pointSize: 1,
    legend: { position: "none" },
  };

  chart = new google.visualization.LineChart(document.getElementById("chart"));
  chart.draw(data, options);

  CreeLigneSeuil(chart, $("#seuil").val());

  google.visualization.events.addListener(chart, "onmouseover", function (e) {
    marker.setLatLng(xy[e.row]);
  });
}

$(window).resize(function () {
  drawChart();
});

function CreeLigneSeuil(chart, y) {
  var layout = chart.getChartLayoutInterface();
  var chartArea = layout.getChartAreaBoundingBox();
  var yLoc = layout.getYLocation(y);
  $(".ligne").remove();
  createLine(
    chart,
    chartArea.left,
    yLoc,
    chartArea.width + chartArea.left,
    yLoc,
    "#FF0000",
    2
  );

  selectedElement = null;
  currentY = 0;
  registercb();
}

function createLine(chart, x1, y1, x2, y2, color, w) {
  var svg = chart.getContainer().getElementsByTagName("svg")[0];

  var svg2 = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svg2.setAttribute("class", "ligne");
  svg2.setAttribute("x", x1);
  svg2.setAttribute("y", y1);
  svg2.setAttribute("width", x2 - x1);
  svg2.setAttribute("height", 10);
  svg.appendChild(svg2);

  var rect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
  rect.setAttribute("x", 0);
  rect.setAttribute("y", 0);
  rect.setAttribute("width", "100%");
  rect.setAttribute("height", "100%");
  rect.setAttribute("stroke", color);
  rect.setAttribute("stroke-width", 1);
  rect.setAttribute("fill-opacity", 0);
  rect.setAttribute("stroke-opacity", 0);
  svg2.appendChild(rect);

  var line = document.createElementNS("http://www.w3.org/2000/svg", "line");
  line.setAttribute("x1", 0);
  line.setAttribute("y1", 5);
  line.setAttribute("x2", x2 - x1);
  line.setAttribute("y2", 5);
  line.setAttribute("stroke", color);
  line.setAttribute("stroke-width", w);
  svg2.appendChild(line);
}

var registercb = function () {
  $(".ligne")
    .mousedown(function (e) {
      currentY = e.clientY;
      selectedElement = e.target;
    })
    .mousemove(function (e) {
      if (selectedElement) {
        var y = ligneGety(e, e.clientY);
        if (y >= 0 && y <= vmax) {
          var dy =
            parseInt($(this)[0].getAttribute("y")) + e.clientY - currentY;
          $(this)[0].setAttribute("y", dy);
          currentY = e.clientY;
  
          $("#seuil").val(y.toFixed(2));
          $("#curseur").val(($("#seuil").val() / vmax) * 100);
          map.removeLayer(trace);
          dessine();
        }
      }
    })
    .mouseup(function (e) {
      selectedElement = null;
    });
};

function ligneGety(e, Y) {
  var layout = chart.getChartLayoutInterface();
  var H = layout.getChartAreaBoundingBox().height;
  var Y = $("#chart").last().offset().top + H - e.clientY + 30;
  return (y = (Y * vmax) / H);
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
