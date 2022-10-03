function visuGPX(id, url, visuGpxOptions) {
  const SEUIL_ACCELERATION = 1.0;
  const SEUIL_DECELERATION = -3.5;
  var txy = [];
  var d = [];
  var t = [];
  var v = [];
  var a = [];
  var h = [];
  var polylignes = [];
  var trace;
  var ivmax, vmax, dmax, tmax;
  var chartxy = [];
  var chartty = [];
  var markerVitesse;
  var borneA, borneB;
  var lectureTimer = null;
  const LARGEUR_LIGNE = 10;
  const modeX = 'temps';

  var map = L.map(document.querySelector("#" + id + " " + ".map"), {
    zoomControl: false,
  });
  L.control
    .zoom({
      position: "topright",
    })
    .addTo(map);

  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    layers: [trace],
  }).addTo(map);

  reportWindowSize();

  litGPX(url, dessineTrace);

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

function xmax() {
  if (modeX == 'distance') {
    return dmax;
  } else {
    return tmax;
  }
} 

  function litGPX(url, ready) {
    borneA = 0;
    borneB = 0;
    $.ajax({
      type: "GET",
      url: url,
      dataType: "xml",
      success: function (xml) {
        var i;
        var t1, t2, dd, dt, angle, v0, v1, texte;
        $(xml)
          .find("trkpt")
          .each(function () {
            if ($(this).find("time").length == 1) {
              texte = $(this).find("time").text();
              lat = parseFloat($(this).attr("lat"));
              lon = parseFloat($(this).attr("lon"));

              var coord = [];
              coord[0] = texte;
              coord[1] = lat;
              coord[2] = lon;
              txy.push(coord);

              if (visuGpxOptions.mode == "rando") {
                if ($(this).find("ele").length == 1) {
                  texte = $(this).find("ele").text();
                  h.push(parseFloat(texte));
                } else {
                  h.push(-1.0);
                }
              }
            }
          });

        // tri
        txy.sort(function (a, b) {
          var t1 = new Date(a[0]).getTime();
          var t2 = new Date(b[0]).getTime();
          return t1 - t2;
        });

        //filtre valeurs aberrante selon acceleration
        var k = 0;
        while (filtreJVJ() && k < 100) {
          k = k + 1;
        }
        //txy = filtre(txy);

        var distance = 0;
        var temps = 0;
        vmax = 0;
        ivmax = 0;
        var t0 = new Date(txy[0][0]).getTime();
        chartxy = [];
        chartty = [];

        if (visuGpxOptions.mode == "rando") {
          chartxy.push(["Distance", "Altitude"]);
          chartty.push(["Distance", "Altitude"]);
        } else {
          chartxy.push(["Distance", "Vitesse"]);
          chartty.push(["Distance", "Vitesse"]);
        }

        for (i = 0; i < txy.length; i++) {
          if (i == 0) {
            v.push(0.0);
            a.push(0.0);
            d.push(0.0);
            t.push(0.0);
          } else {
            dd = calculeDistance(
              txy[i][1],
              txy[i][2],
              txy[i - 1][1],
              txy[i - 1][2]
            );
            angle = angleFromCoordinate(
              txy[i - 1][1],
              txy[i - 1][2],
              txy[i][1],
              txy[i][2]
            );
            var vitesse = calculeVitesse(i, txy);
            if (vitesse > vmax) {
              vmax = vitesse;
              ivmax = i;
            }
            v.push(vitesse);
            a.push(angle);
            d.push(dd);
            var ti = new Date(txy[i][0]).getTime();

            temps = (ti - t0) / 1000;
            t.push(temps);

            if (visuGpxOptions.mode == "rando") {
              chartxy.push([distance, h[i]]);
              chartty.push([temps, h[i]]);
            } else {
              chartxy.push([distance, vitesse]);
              chartty.push([temps, vitesse]);
            }

            distance = distance + dd;
          }
        }
        dmax = distance - dd;
        tmax = temps;

        initParametres();
        var xy = [];
        for (i = 0; i < txy.length; i++) {
          var coord = [];
          coord.push(txy[i][1], txy[i][2]);
          xy.push(coord);
        }
        var polyline = L.polyline(xy, { color: "black" });
        map.fitBounds(polyline.getBounds());

        if (visuGpxOptions.mode == "rando") {
          var images = document.querySelectorAll(
            "#" + id + " " + ".photos-rando img"
          );
          images.forEach(function (image) {
            if (
              image.hasAttribute("data-lat") &&
              image.hasAttribute("data-lon")
            ) {
              var lat = image.getAttribute("data-lat");
              var lon = image.getAttribute("data-lon");
              L.marker([lat, lon], { bubblingMouseEvents: true }).addTo(map);
            } else {
              EXIF.getData(image, function () {
                var tlat = EXIF.getTag(this, "GPSLatitude");
                var tlon = EXIF.getTag(this, "GPSLongitude");
                var lat = tlat[0] + tlat[1] / 60 + tlat[2] / 3600;
                var lon = tlon[0] + tlon[1] / 60 + tlon[2] / 3600;
                image.setAttribute("data-lat", lat);
                image.setAttribute("data-lon", lon);
                L.marker([lat, lon], { bubblingMouseEvents: true }).addTo(map);
              });
            }
          });

          $("#" + id + " " + ".photos-rando img").each(function () {
            if ($(this).height() > $(this).width()) {
              $(this).addClass("photo-rando-vertical");
            }
          });
        }

        ready();

        google.load("visualization", "1.0", { packages: ["corechart"] });
        google.setOnLoadCallback(drawChart);
      },
    });
  }

  function filtreJVJ() {
    var k = 1;
    var erreur = false;
    while (k < txy.length) {
      v0 = calculeVitesse(k - 1, txy);
      v1 = calculeVitesse(k, txy);
      t0 = new Date(txy[k - 1][0]);
      t1 = new Date(txy[k][0]);
      dt = (t1.getTime() - t0.getTime()) / 1000;
      var acceleration = (v1 - v0) / dt;
      if (
        acceleration > SEUIL_ACCELERATION ||
        acceleration < SEUIL_DECELERATION
      ) {
        txy.splice(k, 1);
        erreur = true;
      }
      k = k + 1;
    }
    return erreur;
  }

  const median = (arr) => {
    const mid = Math.floor(arr.length / 2),
      nums = [...arr].sort((a, b) => a - b);
    return arr.length % 2 !== 0 ? nums[mid] : (nums[mid - 1] + nums[mid]) / 2;
  };

  /*
  Hampel Filter implemented in JavaScript by Adam O'Grady
  AN: Very basic (ie: improve before using in production) function I needed for some work stuff, used for detecting and removing outliers in a moving window via Median Absolute Deviation (MAD)
  PARAMS:
    data - Array of numbers to be examined
    half_window: Integer representing half the moving window size to use
    threshold: Integer for the maximum multiple of the Median Absolute Deviation before it's considered an outlier and replaced with the median
  RETURNS:
    object:
      data: updated, smoothed array
      ind: original indicies of removed outliers
*/
  function hampelFilter(data, half_window, threshold) {
    if (typeof threshold === "undefined") {
      threshold = 3;
    }
    var n = data.length;
    var data_copy = data;
    var ind = [];
    var L = 1.4826;
    for (var i = half_window + 1; i < n - half_window; i++) {
      var med = median(data.slice(i - half_window, i + half_window));
      var MAD =
        L *
        median(
          data.slice(i - half_window, i + half_window).map(function (e) {
            return Math.abs(e - med);
          })
        );
      if (Math.abs(data[i] - med) / MAD > threshold) {
        data_copy[i] = med;
        ind = ind.concat(i);
      }
    }
    console.log(ind.length);
    return {
      data: data_copy,
      outliers: ind,
    };
  }

  function filterOutliers(someArray) {
    if (someArray.length < 4) return someArray;

    let values, q1, q3, iqr, maxValue, minValue;

    values = someArray.slice().sort((a, b) => a - b); //copy array fast and sort

    if ((values.length / 4) % 1 === 0) {
      //find quartiles
      q1 =
        (1 / 2) * (values[values.length / 4] + values[values.length / 4 + 1]);
      q3 =
        (1 / 2) *
        (values[values.length * (3 / 4)] + values[values.length * (3 / 4) + 1]);
    } else {
      q1 = values[Math.floor(values.length / 4 + 1)];
      q3 = values[Math.ceil(values.length * (3 / 4) + 1)];
    }

    iqr = q3 - q1;
    maxValue = q3 + iqr * 1.5;
    minValue = q1 - iqr * 1.5;

    var indices = [];
    for (i = 0; i < values.length; i++) {
      if (values[i] < minValue || values[i] > maxValue) {
        indices.push(i);
      }
    }
    return {
      data: values.filter((x) => x >= minValue && x <= maxValue),
      outliers: indices,
    };
  }

  function filtre(txy) {
    var y = [];
    for (i = 0; i < txy.length; i++) {
      y.push(calculeVitesse(i, txy));
    }
    //var f = hampelFilter(y, 3, 3);
    var f = filterOutliers(y);
    if (f.outliers.length > 0) {
      return txy.filter((elt, index) => f.outliers.includes(index));
    } else {
      return txy;
    }
  }

  function calculeVitesse(i, txy) {
    if (i == 0) {
      return 0;
    }
    var dd = calculeDistance(
      txy[i][1],
      txy[i][2],
      txy[i - 1][1],
      txy[i - 1][2]
    );
    var t1 = new Date(txy[i - 1][0]);
    var t2 = new Date(txy[i][0]);
    var dt = (t2.getTime() - t1.getTime()) / 1000;
    var vitesse;
    if (dt != 0) {
      vitesse = ((dd * 1000) / dt) * 1.94384;
    } else {
      vitesse = 0;
    }
    return vitesse;
  }

  function initParametres() {
    if (visuGpxOptions.mode == "rando") {
      $("#" + id + " " + ".seuil").val(vmax);
      $("#" + id + " " + ".fenetre-auto").prop("checked", false);
      $("#" + id + " " + ".fenetre-largeur").css("visibility", "hidden");
      $("#" + id + " " + ".rapidite").val("50");
    } else {
      $("#" + id + " " + ".seuil").val("12.00");
      $("#" + id + " " + ".fenetre-auto").prop("checked", true);
      $("#" + id + " " + ".rapidite").val("10");
    }
    $("#" + id + " " + ".curseur").val(($("#seuil").val() / vmax) * 100);
    $("#" + id + " " + ".distance-seuil").text(
      calculeDistanceSeuil($("#" + id + " " + ".seuil").val()).toFixed(3)
    );
    $("#" + id + " " + ".position").val("0.000");
    $("#" + id + " " + ".temps").val("0");
    $("#" + id + " " + ".vitesse").text("0.00");
    if (modeX == 'distance') {
      $("#" + id + " " + ".fenetre-largeur").val("2.000");
    } else {
      $("#" + id + " " + ".fenetre-largeur").val("600");
    }
  }

  map.on("click", function (e) {
    var i = calculeIndiceLePlusPresDe(e.latlng.lat, e.latlng.lng);
    if (i != -1) {
      var x = chartxy[i + 1][0];
      $("#" + id + " " + ".position").val(x.toFixed(3));
      $("#" + id + " " + ".temps").val(t[i]);
      $("#" + id + " " + ".vitesse").text(chartxy[i + 1][1].toFixed(2));
      CreeLignePosition(chart);
      UpdatePosition(i);
      if ($("#" + id + " " + ".fenetre-auto").is(":checked")) {
        calculeBornes();
      }
    }
  });

  function calculeIndiceLePlusPresDe(lat, lng) {
    var dmin = 1000000.0;
    var d;
    var j = 0;
    for (i = 0; i < txy.length; i++) {
      d = calculeDistance(lat, lng, txy[i][1], txy[i][2]);
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

  function couleurCategorie(cat) {
    if (cat == 0) {
      return "blue";
    } else {
      return "red";
    }
  }

  function dessineTrace() {
    polylignes = [];

    var seuil = $("#" + id + " " + ".seuil").val();

    var txy2 = [];
    var opacite0, opacite;
    opacite0 = 1.0;
    var cat0, cat;
    cat0 = 0;
    for (i = 0; i < txy.length; i++) {
      var coord = [];
      coord.push(txy[i][1], txy[i][2]);
      txy2.push(coord);
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
      if (opacite0 != opacite || txy2.length >= 100) {
        polylignes.push(
          L.polyline(txy2, { color: couleurCategorie(cat0), opacity: opacite0 })
        );
        txy2 = [];
        var coord = [];
        coord.push(txy[i][1], txy[i][2]);
        txy2.push(coord);
        opacite0 = opacite;
      } else {
        if (cat0 != cat || txy2.length >= 100) {
          polylignes.push(
            L.polyline(txy2, {
              color: couleurCategorie(cat0),
              opacity: opacite,
            })
          );
          txy2 = [];
          var coord = [];
          coord.push(txy[i][1], txy[i][2]);
          txy2.push(coord);
          cat0 = cat;
        }
      }
      if (i == txy.length - 1) {
        polylignes.push(
          L.polyline(txy2, { color: couleurCategorie(cat0), opacity: opacite0 })
        );
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
      className: "marker",
    });

    if (markerVitesse != null) {
      markerVitesse.remove();
    }
    var xy0 = [];
    xy0.push(txy[0][1], txy[0][2]);
    markerVitesse = L.marker(xy0, { icon: myIcon, rotationAngle: 0.0 })
      .bindTooltip("0", { permanent: true })
      .addTo(map);
    markerVitesse.openTooltip();

    UpdatePosition(-1);

    dessineStats();
  }

  $("#" + id + " " + ".lire-gpx").click(function () {
    $(".upload").toggle();
  });

  if ($("#" + id + " " + ".stats .calcule").prop("checked")) {
    dessineStats();
  }

  function indiceEndehorsBornes(i) {
    if (i < borneA || i > borneB) {
      return true;
    }
    return false;
  }

  function updateBornes() {
    if (
      parseInt($("#" + id + " " + ".ligne-gauche").attr("x")) <=
      parseInt($(".ligne-droite").attr("x"))
    ) {
      $("#" + id + " " + ".borne-a").attr(
        "width",
        parseInt($("#" + id + " " + ".ligne-gauche").attr("x")) +
          LARGEUR_LIGNE / 2 -
          30
      );
      $("#" + id + " " + ".borne-b").attr(
        "x",
        parseInt($("#" + id + " " + ".ligne-droite").attr("x")) +
          LARGEUR_LIGNE / 2
      );
      $("#" + id + " " + ".borne-b").attr(
        "width",
        chart.getChartLayoutInterface().getXLocation(xmax()) -
          parseInt($("#" + id + " " + ".ligne-droite").attr("x")) +
          LARGEUR_LIGNE / 2
      );
    } else {
      $("#" + id + " " + ".borne-a").attr(
        "width",
        parseInt($("#" + id + " " + ".ligne-droite").attr("x")) +
          LARGEUR_LIGNE / 2 -
          30
      );
      $("#" + id + " " + ".borne-b").attr(
        "x",
        parseInt($("#" + id + " " + ".ligne-gauche").attr("x")) +
          LARGEUR_LIGNE / 2
      );
      $("#" + id + " " + ".borne-b").attr(
        "width",
        chart.getChartLayoutInterface().getXLocation(xmax()) -
          parseInt($("#" + id + " " + ".ligne-gauche").attr("x")) +
          LARGEUR_LIGNE / 2
      );
    }

    if (modeX == 'distance') {
      var i = getIndiceDistance(
        chartGetx(
          chart,
          $("#" + id + " " + ".ligne-gauche")
            .last()
            .offset().left +
            LARGEUR_LIGNE / 2
        )
      );
    } else {
      var i = getIndiceTemps(
        chartGetx(
          chart,
          $("#" + id + " " + ".ligne-gauche")
            .last()
            .offset().left +
            LARGEUR_LIGNE / 2
        )
      );
    }
    if (modeX == 'distance') {
      var i = getIndiceDistance(
        chartGetx(
          chart,
          $("#" + id + " " + ".ligne-gauche")
            .last()
            .offset().left +
            LARGEUR_LIGNE / 2
        )
      ); 
    } else {
      var i = getIndiceTemps(
        chartGetx(
          chart,
          $("#" + id + " " + ".ligne-gauche")
            .last()
            .offset().left +
            LARGEUR_LIGNE / 2
        )
      );      
    }
    if (modeX == 'distance') {
      var j = getIndiceDistance(
        chartGetx(
          chart,
          $("#" + id + " " + ".ligne-droite")
            .last()
            .offset().left +
            LARGEUR_LIGNE / 2
        )
      );
    } else {
      var j = getIndiceTemps(
        chartGetx(
          chart,
          $("#" + id + " " + ".ligne-droite")
            .last()
            .offset().left +
            LARGEUR_LIGNE / 2
        )
      );      
    }
    if (i < j) {
      borneA = i;
      borneB = j;
    } else {
      borneA = j;
      borneB = i;
    }
    dessineTrace();
  }

  $("#" + id + " " + ".map").keypress(function (e) {
    if (e.which == 32) {
      if (lectureTimer == null) {
        $("#" + id + " " + ".lecture").click();
      } else {
        $("#" + id + " " + ".stop").click();
      }
    }
  });

  $("#" + id + " " + ".rapidite").change(function () {
    if (lectureTimer != null) {
      $("#" + id + " " + ".stop").click();
      $("#" + id + " " + ".lecture").click();
    }
  });

  $("#" + id + " " + ".seuil").change(function () {
    $("#" + id + " " + ".curseur").val(($("#seuil").val() / vmax) * 100);
    CreeLigneSeuil(chart, $("#" + id + " " + ".seuil").val());
    $("#" + id + " " + ".distance-seuil").text(
      calculeDistanceSeuil($("#" + id + " " + ".seuil").val()).toFixed(3)
    );
    dessineTrace();
  });

  $("#" + id + " " + ".curseur").change(function () {
    $("#" + id + " " + ".seuil").val(
      (($("#" + id + " " + ".curseur").val() * vmax) / 100).toFixed(2)
    );
    CreeLigneSeuil(chart, $("#" + id + " " + ".seuil").val());
    $("#" + id + " " + ".distance-seuil").text(
      calculeDistanceSeuil($("#" + id + " " + ".seuil").val()).toFixed(3)
    );
    dessineTrace();
  });

  $("#" + id + " " + ".position").change(function () {
    CreeLignePosition(chart);
    var x = $("#" + id + " " + ".position").val();
    var i = getIndiceDistance(x);
    $("#" + id + " " + ".temps").val(t[i]);
    $("#" + id + " " + ".vitesse").text(getVitesse(x).toFixed(2));
    UpdatePosition(i);
    if ($("#" + id + " " + ".fenetre-auto").is(":checked")) {
      calculeBornes();
    }
  });

  $("#" + id + " " + ".temps").change(function () {
    var i = getIndiceTemps(parseInt($("#" + id + " " + ".temps").val()));
    var x = chartxy[i + 1][0];
    $("#" + id + " " + ".position").val(x.toFixed(3));
    CreeLignePosition(chart);
    $("#" + id + " " + ".vitesse").text(
      getVitesse($("#" + id + " " + ".position").val()).toFixed(2)
    );
    UpdatePosition(i);
    if ($("#" + id + " " + ".fenetre-auto").is(":checked")) {
      calculeBornes();
    }
  });

  $("#" + id + " " + ".fenetre-largeur").change(function () {
    calculeBornes();
  });

  function reportWindowSize() {
    if (visuGpxOptions.pleinEcran == true) {
      $("#" + id + " " + ".map").height(
        window.innerHeight - $("#" + id + " " + ".chart").height() - 20
      );
    }
  }

  document.getElementsByTagName("body")[0].onresize = reportWindowSize;

  function getVitesse(x) {
    return chartxy[getIndiceDistance(x) + 1][1];
  }

  function getIndiceDistance(x) {
    var j = 1;
    var delta = +Infinity;
    var dt;
    for (i = 1; i < chartxy.length; i++) {
      dt = Math.abs(chartxy[i][0] - x);
      if (dt < delta) {
        j = i;
        delta = dt;
      }
    }
    return j - 1;
  }

  function getIndiceTemps(x) {
    var j = 1;
    var delta = +Infinity;
    var dt;
    for (i = 1; i < chartty.length; i++) {
      dt = Math.abs(chartty[i][0] - x);
      if (dt < delta) {
        j = i;
        delta = dt;
      }
    }
    return j - 1;
  }

  function UpdatePosition(n) {
    var i = n;
    if (n == -1) {
      i = getIndiceDistance($("#" + id + " " + ".position").val());
    }
    var xyi = [];
    xyi.push(txy[i][1], txy[i][2]);
    markerVitesse.setLatLng(xyi);
    markerVitesse.setRotationAngle(a[i]);

    if (visuGpxOptions.typeMarker == "distance") {
      markerVitesse.setTooltipContent(
        parseFloat($("#" + id + " " + ".position").val()).toFixed(3)
      );
    } else {
      markerVitesse.setTooltipContent($("#" + id + " " + ".vitesse").text());
    }

    $("#" + id + " " + ".carte .time").text(txy[i][0]);

    if (typeof visuGpxOptions.mode !== "rando") {
      affichePhotoPosition(txy[i][1], txy[i][2]);
    }
  }

  $("#" + id + " " + ".lecture").click(function () {
    if (lectureTimer == null) {
      lectureTimer = setInterval(
        avance,
        1000 / parseInt($("#" + id + " " + ".rapidite").val())
      );
    }
  });

  $("#" + id + " " + ".stop").click(function () {
    clearInterval(lectureTimer);
    lectureTimer = null;
  });

  $("#" + id + " " + ".fenetre-auto").click(function () {
    if ($("#" + id + " " + ".fenetre-auto").is(":checked")) {
      $("#" + id + " " + ".fenetre-largeur").css("visibility", "visible");
      calculeBornes();
    } else {
      $("#" + id + " " + ".fenetre-largeur").css("visibility", "hidden");
    }
  });

  $("#" + id + " " + ".label-fenetre-auto").click(function () {
    // on peut cliquer sur le label
    $("#" + id + " " + ".fenetre-auto").click();
  });

  function avance() {
    var t0 = parseInt($("#" + id + " " + ".temps").val());
    if (t0 < t[t.length - 1]) {
      t0 = t0 + 1;
      $("#" + id + " " + ".temps").val(t0);
      var lecturei = getIndiceTemps(t0);
      $("#" + id + " " + ".position").val(chartxy[lecturei + 1][0].toFixed(3));
      CreeLignePosition(chart);
      $("#" + id + " " + ".vitesse").text(
        getVitesse($("#" + id + " " + ".position").val()).toFixed(2)
      );
      UpdatePosition(lecturei);
      if ($("#" + id + " " + ".fenetre-auto").is(":checked")) {
        calculeBornes();
      }
    } else {
      clearInterval(lectureTimer);
      lectureTimer = null;
    }
  }

  // ------------------------------------------------------------------------
  // ------------------------------------------------------------------------ stats
  // ------------------------------------------------------------------------

  var markerVmax, tracev100m, tracev500m, tracev2s, tracev5s, tracev10s;

  $("#" + id + " " + ".stats label").click(function () {
    // on peut cliquer sur le label
    $("#" + id + " " + ".calcule").click();
  });

  $("#" + id + " " + ".calcule").click(function () {
    if ($("#" + id + " " + ".vmax").text() == "") {
      // on calcule qu'une fois
      $("#" + id + " " + ".vmax").text(vmax.toFixed(2));

      var v = calculeVSur(0.1);
      $("#" + id + " " + ".v100m").text(v.v.toFixed(2));
      $("#" + id + " " + ".v100m").attr("data-a", v.a);
      $("#" + id + " " + ".v100m").attr("data-b", v.b);

      v = calculeVSur(0.5);
      $("#" + id + " " + ".v500m").text(v.v.toFixed(2));
      $("#" + id + " " + ".v500m").attr("data-a", v.a);
      $("#" + id + " " + ".v500m").attr("data-b", v.b);

      v = calculeVPendant(2);
      $("#" + id + " " + ".v2s").text(v.v.toFixed(2));
      $("#" + id + " " + ".v2s").attr("data-a", v.a);
      $("#" + id + " " + ".v2s").attr("data-b", v.b);

      v = calculeVPendant(5);
      $("#" + id + " " + ".v5s").text(v.v.toFixed(2));
      $("#" + id + " " + ".v5s").attr("data-a", v.a);
      $("#" + id + " " + ".v5s").attr("data-b", v.b);

      v = calculeVPendant(10);
      $("#" + id + " " + ".v10s").text(v.v.toFixed(2));
      $("#" + id + " " + ".v10s").attr("data-a", v.a);
      $("#" + id + " " + ".v10s").attr("data-b", v.b);
    }

    if ($("#" + id + " " + ".calcule").prop("checked")) {
      $("#" + id + " " + ".stats table td input").prop("checked", true);
    } else {
      $("#" + id + " " + ".stats table td input").prop("checked", false);
    }
    dessineStats();

    $("#" + id + " " + ".stats table").toggle();
  });

  $("#" + id + " " + ".stats table td input").click(function () {
    dessineStats();
  });

  function calculeVSur(distanceReference) {
    var vmax = { v: 0, a: 0, b: 0 };
    var vitesse;
    for (i = 0; i < v.length; i++) {
      vitesse = calculeVIndiceSur(i, distanceReference);
      if (vitesse.a > -1) {
        if (vitesse.v > vmax.v) {
          vmax.v = vitesse.v;
          vmax.a = vitesse.a;
          vmax.b = vitesse.b;
        }
      }
    }
    return vmax;
  }

  function calculeVPendant(dureeeReference) {
    var vmax = { v: 0, a: 0, b: 0 };
    var vitesse;
    for (i = 0; i < v.length; i++) {
      vitesse = calculeVIndicePendant(i, dureeeReference);
      if (vitesse.a > -1) {
        if (vitesse.v > vmax.v) {
          vmax.v = vitesse.v;
          vmax.a = vitesse.a;
          vmax.b = vitesse.b;
        }
      }
    }
    return vmax;
  }

  function calculeVIndiceSur(n, distanceReference) {
    var t1 = new Date(txy[n][0]);
    var t2, dt, vitesse;
    var distance = 0;
    for (i = n; i < v.length; i++) {
      if (distance >= distanceReference) {
        t2 = new Date(txy[i][0]);
        dt = (t2.getTime() - t1.getTime()) / 1000;
        if (dt != 0) {
          vitesse = ((distance * 1000) / dt) * 1.94384;
        } else {
          vitesse = 0;
        }
        return { v: vitesse, a: n, b: i };
      }
      if (i + 1 < v.length) {
        distance = distance + d[i + 1];
      }
    }
    return { v: 0, a: -1, b: -1 };
  }

  function calculeVIndicePendant(n, dureeReference) {
    var t1 = new Date(txy[n][0]);
    var t2, dt, vitesse;
    var distance = 0;
    for (i = n; i < v.length; i++) {
      t2 = new Date(txy[i][0]);
      dt = (t2.getTime() - t1.getTime()) / 1000;
      if (dt >= dureeReference) {
        if (dt != 0) {
          vitesse = ((distance * 1000) / dt) * 1.94384;
        } else {
          vitesse = 0;
        }
        return { v: vitesse, a: n, b: i };
      }
      if (i + 1 < v.length) {
        distance = distance + d[i + 1];
      }
    }
    return { v: 0, a: -1, b: -1 };
  }

  function dessineStats() {
    if (markerVmax != null) {
      markerVmax.remove();
    }
    if ($("#" + id + " " + ".affiche-vmax").prop("checked")) {
      var xyi = [];
      xyi.push(txy[ivmax][1], txy[ivmax][2]);
      markerVmax = L.marker(xyi)
        .bindTooltip("VMax : " + vmax.toFixed(2) + " kts")
        .addTo(map);
    }

    if (tracev100m != null) {
      tracev100m.remove();
    }
    if ($("#" + id + " " + ".affiche-v100m").prop("checked")) {
      tracev100m = afficheTraceVitesse(
        "v100m",
        "V100m : " + $("#" + id + " " + ".v100m").text() + " kts"
      );
    }

    if (tracev500m != null) {
      tracev500m.remove();
    }
    if ($("#" + id + " " + ".affiche-v500m").prop("checked")) {
      tracev500m = afficheTraceVitesse(
        "v500m",
        "V500m : " + $("#" + id + " " + ".v500m").text() + " kts"
      );
    }

    if (tracev2s != null) {
      tracev2s.remove();
    }
    if ($("#" + id + " " + ".affiche-v2s").prop("checked")) {
      tracev2s = afficheTraceVitesse(
        "v2s",
        "V2s : " + $("#" + id + " " + ".v2s").text() + " kts"
      );
    }

    if (tracev5s != null) {
      tracev5s.remove();
    }
    if ($("#" + id + " " + ".affiche-v5s").prop("checked")) {
      tracev5s = afficheTraceVitesse(
        "v5s",
        "V5s : " + $("#" + id + " " + ".v5s").text() + " kts"
      );
    }

    if (tracev10s != null) {
      tracev10s.remove();
    }
    if ($("#" + id + " " + ".affiche-v10s").prop("checked")) {
      tracev10s = afficheTraceVitesse(
        "v10s",
        "V10s : " + $("#" + id + " " + ".v10s").text() + " kts"
      );
    }

    $("#" + id + " " + ".chart .vmax").remove();
    if ($("#" + id + " " + ".affiche-vmax").prop("checked")) {
      if (chart != null) {
        createIndicateurPosition(chart, chartxy[ivmax + 1][0], "vmax");
      }
    }

    $("#" + id + " " + ".chart .v100m").remove();
    if ($("#" + id + " " + ".affiche-v100m").prop("checked")) {
      if (chart != null) {
        createIndicateurPlage(
          chart,
          chartxy[parseInt($("#" + id + " " + ".v100m").attr("data-a")) + 1][0],
          chartxy[parseInt($("#" + id + " " + ".v100m").attr("data-b")) + 1][0],
          "v100m",
          "green"
        );
      }
    }

    $("#" + id + " " + ".chart .v500m").remove();
    if ($("#" + id + " " + ".affiche-v500m").prop("checked")) {
      if (chart != null) {
        createIndicateurPlage(
          chart,
          chartxy[parseInt($("#" + id + " " + ".v500m").attr("data-a")) + 1][0],
          chartxy[parseInt($("#" + id + " " + ".v500m").attr("data-b")) + 1][0],
          "v500m",
          "green"
        );
      }
    }

    $("#" + id + " " + ".chart .v2s").remove();
    if ($("#" + id + " " + ".affiche-v2s").prop("checked")) {
      if (chart != null) {
        createIndicateurPlage(
          chart,
          chartxy[parseInt($("#" + id + " " + ".v2s").attr("data-a")) + 1][0],
          chartxy[parseInt($("#" + id + " " + ".v2s").attr("data-b")) + 1][0],
          "v2s",
          "green"
        );
      }
    }

    $("#" + id + " " + ".chart .v5s").remove();
    if ($("#" + id + " " + ".affiche-v5s").prop("checked")) {
      if (chart != null) {
        createIndicateurPlage(
          chart,
          chartxy[parseInt($("#" + id + " " + ".v5s").attr("data-a")) + 1][0],
          chartxy[parseInt($("#" + id + " " + ".v5s").attr("data-b")) + 1][0],
          "v5s",
          "green"
        );
      }
    }

    $("#" + id + " " + ".chart .v10s").remove();
    if ($("#" + id + " " + ".affiche-v10s").prop("checked")) {
      if (chart != null) {
        createIndicateurPlage(
          chart,
          chartxy[parseInt($("#" + id + " " + ".v10s").attr("data-a")) + 1][0],
          chartxy[parseInt($("#" + id + " " + ".v10s").attr("data-b")) + 1][0],
          "v10s",
          "green"
        );
      }
    }
  }

  function afficheTraceVitesse(stat, texte) {
    var xy2 = [];
    var a = parseInt($("#" + id + " ." + stat).attr("data-a"));
    var b = parseInt($("#" + id + " ." + stat).attr("data-b"));
    for (i = a; i <= b; i++) {
      var coord = [];
      coord.push(txy[i][1], txy[i][2]);
      xy2.push(coord);
    }
    return L.polyline(xy2, {
      color: "green",
      opacity: 1.0,
      weight: "3",
      dashArray: "5, 5",
      dashOffset: "0",
    })
      .bindTooltip(texte)
      .addTo(map);
  }

  // ------------------------------------------------------------------------
  // ------------------------------------------------------------------------ chart
  // ------------------------------------------------------------------------

  var chart;
  var curseurSeuil = { currentX: 0, selectedElement: null };
  var curseurPosition = { currentX: 0, selectedElement: null };
  var curseurA = { currentX: 0, selectedElement: null };
  var curseurB = { currentX: 0, selectedElement: null };

  $("#" + id + " " + ".chart").keypress(function (e) {
    if (e.which == 32) {
      if (lectureTimer == null) {
        $("#" + id + " " + ".lecture").click();
      } else {
        $("#" + id + " " + ".stop").click();
      }
    }
  });

  function drawChart() {
    if (chartxy.length == 0) {
      return;
    }
    
    if (modeX == 'distance') {
      var data = google.visualization.arrayToDataTable(chartxy);
    } else {
      var data = google.visualization.arrayToDataTable(chartty);
    }

    var vAxisOptions;
    var enableInteractivityOptions = false;
    if (visuGpxOptions.mode == "rando") {
      vAxisOptions = {
        viewWindowMode: "explicit",
        viewWindow: { min: Math.min(...h), max: Math.max(...h) },
      };
      enableInteractivityOptions = true;
    } else {
      vAxisOptions = {
        viewWindowMode: "explicit",
        viewWindow: { min: 0, max: vmax },
      };
    }

    var options = {
      vAxis: vAxisOptions,
      pointSize: 0,
      legend: { position: "none" },
      chartArea: { left: "30", right: "0", top: "10", bottom: "20" },
      enableInteractivity: enableInteractivityOptions,
      dataOpacity: 0.0,
    };

    chart = new google.visualization.LineChart(
      document.querySelector("#" + id + " " + ".chart")
    );
    chart.draw(data, options);
    registerEvtChart();
    createLineBornesSVG(chart, xmax() * 0.1, xmax() - xmax() * 0.1);
    CreeLigneSeuil(chart, $("#" + id + " " + ".seuil").val());
    CreeLignePosition(chart);
    CreeLigneGauche(chart, xmax() * 0.1);
    CreeLigneDroite(chart, xmax() - xmax() * 0.1);
    if (visuGpxOptions.mode == "rando") {
      var L = chart.getChartLayoutInterface().getChartAreaBoundingBox().width;
      $("#" + id + " " + ".ligne-gauche").attr("x", 30 - LARGEUR_LIGNE / 2);
      $("#" + id + " " + ".ligne-droite").attr("x", 30 + L - LARGEUR_LIGNE / 2);
    }
    UpdatePosition(-1);
    updateBornes();
    if ($("#" + id + " " + ".fenetre-auto").is(":checked")) {
      calculeBornes();
    }
    if (getParameterByName("stats") == "1") {
      $("#" + id + " " + ".calcule").click();
    }
    if (getParameterByName("play")) {
      play();
    }
  }

  function play() {
    $("#" + id + " " + ".temps").val(getParameterByName("play"));
    $("#" + id + " " + ".lecture").click();
  }

  function closestSortedValueIndex(array, value) {
    var result = 0;
    var lastDelta = +Infinity;
    array.some(function (item, index) {
      var delta = Math.abs(value - item);
      if (delta >= lastDelta) {
        return true;
      }
      result = index;
      lastDelta = delta;
    });
    return result;
  }
/*
  function getIndiceTemps(temps) {
    return closestSortedValueIndex(t, temps);
  var ecart = +Infinity;
  var e;
  var indice = 0;
  for (i = 0; i < t.length; i++) {
    e = Math.abs(t[i] - temps);
    if (e < ecart) {
      ecart = e;
      indice = i;
    }
  }
  return indice;
  }

  */
  $(window).resize(function () {
    drawChart();
  });

  function CreeLigneSeuil(chart, y) {
    $("#" + id + " " + ".ligne-seuil").remove();
    createLineHorizontaleSVG(chart, y);
    curseurSeuil.selectedElement = null;
    curseurSeuil.currentX = 0;
    registerEvtLigneSeuilSVG();
  }

  function CreeLignePosition(chart) {
    $("#" + id + " " + ".ligne-position").remove();
    if (modeX == 'distance') {
      var x = $("#" + id + " " + ".position").val();
    } else {
      var x = $("#" + id + " " + ".temps").val();
    }
    createLineVerticaleSVG(chart, x, "ligne-position", true); 
    curseurPosition.selectedElement = null;
    curseurPosition.currentX = 0;
    registerEvtLignePositionSVG();
  }

  function CreeLigneGauche(chart, x) {
    $("#" + id + " " + ".ligne-gauche").remove();
    createLineVerticaleSVG(chart, x, "ligne-gauche", false);
    curseurA.selectedElement = null;
    curseurA.currentX = 0;
    registerEvtLigneVerticaleSVG("ligne-gauche", curseurA);
  }

  function CreeLigneDroite(chart, x) {
    $("#" + id + " " + ".ligne-droite").remove();
    createLineVerticaleSVG(chart, x, "ligne-droite", false);
    curseurB.selectedElement = null;
    curseurB.currentX = 0;
    registerEvtLigneVerticaleSVG("ligne-droite", curseurB);
  }

  function createLineHorizontaleSVG(chart, y) {
    var layout = chart.getChartLayoutInterface();
    var chartArea = layout.getChartAreaBoundingBox();
    var svg = chart.getContainer().getElementsByTagName("svg")[0];
    var yLoc = layout.getYLocation(y) - 5;
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

  function createIndicateurPosition(chart, x, classeName) {
    var layout = chart.getChartLayoutInterface();
    var chartArea = layout.getChartAreaBoundingBox();
    var svg = chart.getContainer().getElementsByTagName("svg")[0];
    var xLoc = layout.getXLocation(x);
    var y1 = chartArea.top - 5;
    var y2 = chartArea.height + chartArea.top;

    var svg2 = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg2.setAttribute("class", "indicateur " + classeName);
    svg2.setAttribute("x", xLoc - 5);
    svg2.setAttribute("y", y1);
    svg2.setAttribute("width", 10);
    svg2.setAttribute("height", 5);
    svg.appendChild(svg2);

    var line = document.createElementNS(
      "http://www.w3.org/2000/svg",
      "polygon"
    );
    line.setAttribute("points", "0,0 10,0 5,5");
    svg2.setAttribute("fill", "green");
    svg2.setAttribute("stroke", "green");

    svg2.appendChild(line);
  }

  function createIndicateurPlage(chart, x1, x2, classeName, couleur) {
    var layout = chart.getChartLayoutInterface();
    var chartArea = layout.getChartAreaBoundingBox();
    var svg = chart.getContainer().getElementsByTagName("svg")[0];
    var X1 = layout.getXLocation(x1);
    var X2 = layout.getXLocation(x2);
    var y1 = chartArea.top - 5;
    var y2 = chartArea.height + chartArea.top;

    var svg2 = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg2.setAttribute("class", "indicateur " + classeName);
    svg2.setAttribute("x", X1);
    svg2.setAttribute("y", y1);
    svg2.setAttribute("width", X2 - X1);
    svg2.setAttribute("height", 5);
    svg.appendChild(svg2);

    var line1 = document.createElementNS("http://www.w3.org/2000/svg", "line");
    line1.setAttribute("x1", 0);
    line1.setAttribute("y1", 0);
    line1.setAttribute("x2", 0);
    line1.setAttribute("y2", 5);
    line1.setAttribute("stroke", couleur);
    line1.setAttribute("stroke-width", 3);
    svg2.appendChild(line1);

    var line2 = document.createElementNS("http://www.w3.org/2000/svg", "line");
    line2.setAttribute("x1", X2 - X1);
    line2.setAttribute("y1", 0);
    line2.setAttribute("x2", X2 - X1);
    line2.setAttribute("y2", 10);
    line2.setAttribute("stroke", couleur);
    line2.setAttribute("stroke-width", 3);
    svg2.appendChild(line2);

    var line3 = document.createElementNS("http://www.w3.org/2000/svg", "line");
    line3.setAttribute("x1", 0);
    line3.setAttribute("y1", 0);
    line3.setAttribute("x2", X2 - X1);
    line3.setAttribute("y2", 0);
    line3.setAttribute("stroke", couleur);
    line3.setAttribute("stroke-width", 3);
    svg2.appendChild(line3);
  }

  function createLineVerticaleSVG(chart, x, classeName, pointille) {
    var layout = chart.getChartLayoutInterface();
    var chartArea = layout.getChartAreaBoundingBox();
    var svg = chart.getContainer().getElementsByTagName("svg")[0];
    var xLoc = layout.getXLocation(x) - LARGEUR_LIGNE / 2;
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
    $("#" + id + " " + ".borne").remove();
    var layout = chart.getChartLayoutInterface();
    var chartArea = layout.getChartAreaBoundingBox();
    var svg = chart.getContainer().getElementsByTagName("svg")[0];
    var H = $("#" + id + " " + ".chart").innerHeight();

    var xLocA = layout.getXLocation(a);

    var rectA = document.createElementNS("http://www.w3.org/2000/svg", "rect");
    rectA.setAttribute("class", "ligne borne-a");
    rectA.setAttribute("x", 30);
    rectA.setAttribute("y", 10);
    rectA.setAttribute("width", xLocA - 30);
    rectA.setAttribute("height", H - 30);
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
    rectB.setAttribute("width", layout.getXLocation(xmax()) - xLocB);
    rectB.setAttribute("height", H - 30);
    rectB.setAttribute("stroke", "#C0C0C0");
    rectB.setAttribute("stroke-width", 1);
    rectB.setAttribute("fill-opacity", 0.1);
    rectB.setAttribute("stroke-opacity", 0.1);
    svg.appendChild(rectB);
  }

  var registerEvtChart = function () {
    $("#" + id + " " + ".chart")
      .mousemove(function (e) {
        var elt = null;
        var parametres;

        if (
          elementEstClasse(curseurPosition.selectedElement, "ligne-position")
        ) {
          var x = chartGetx(chart, e.clientX);
          if (x >= 0 && x <= xmax()) {
            var dx =
              parseInt(curseurPosition.selectedElement.getAttribute("x")) +
              e.clientX -
              curseurPosition.currentX;
            curseurPosition.selectedElement.setAttribute("x", dx);
            curseurPosition.currentX = e.clientX;
            if (modeX == 'distance') {
              var i = getIndiceDistance(x);
            } else {
              var i = getIndiceTemps(x);
            }
            $("#" + id + " " + ".position").val(x.toFixed(3));
            $("#" + id + " " + ".temps").val(t[i]);
            $("#" + id + " " + ".vitesse").text(getVitesse(x).toFixed(2));
            UpdatePosition(i);
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

              $("#" + id + " " + ".seuil").val(y.toFixed(2));
              $("#" + id + " " + ".distance-seuil").text(
                calculeDistanceSeuil(
                  $("#" + id + " " + ".seuil").val()
                ).toFixed(3)
              );
              $("#" + id + " " + ".curseur").val(
                ($("#" + id + " " + ".seuil").val() / vmax) * 100
              );
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
            if (x >= 0 && x <= xmax()) {
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
        if (x >= 0 && x <= xmax()) {
          var dx =
            e.clientX -
            LARGEUR_LIGNE / 2 -
            $("#" + id + " " + ".chart")
              .last()
              .offset().left;
          $("#" + id + " " + ".ligne-position")[0].setAttribute("x", dx);
          $("#" + id + " " + ".position").val(x.toFixed(3));
          if (modeX == 'distance') {
            var i = getIndiceDistance(x);
          } else {
            var i = getIndiceTemps(x);
          }
          $("#" + id + " " + ".temps").val(t[i]);
          $("#" + id + " " + ".vitesse").text(getVitesse(x).toFixed(2));
          UpdatePosition(i);
          if ($("#" + id + " " + ".fenetre-auto").is(":checked")) {
            calculeBornes();
          }
        }
      });
  };

  var registerEvtLigneSeuilSVG = function () {
    $("#" + id + " " + ".ligne-seuil")
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

            $("#" + id + " " + ".seuil").val(y.toFixed(2));
            $("#" + id + " " + ".distance-seuil").text(
              calculeDistanceSeuil($("#" + id + " " + ".seuil").val()).toFixed(
                3
              )
            );
            $("#" + id + " " + ".curseur").val(
              ($("#" + id + " " + ".seuil").val() / vmax) * 100
            );
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
    $("#" + id + " " + ".ligne-position")
      .mousedown(function (e) {
        curseurPosition.currentX = e.clientX;
        curseurPosition.selectedElement = $(this)[0];
      })
      .mousemove(function (e) {
        if (curseurPosition.selectedElement) {
          var x = chartGetx(chart, e.clientX);
          if (x >= 0 && x <= xmax()) {
            var dx =
              parseInt($(this)[0].getAttribute("x")) +
              e.clientX -
              curseurPosition.currentX;
            $(this)[0].setAttribute("x", dx);
            curseurPosition.currentX = e.clientX;

            $("#" + id + " " + ".position").val(x.toFixed(3));
            var i = getIndiceDistance(x);
            $("#" + id + " " + ".temps").val(t[i]);
            $("#" + id + " " + ".vitesse").text(getVitesse(x).toFixed(2));
            UpdatePosition(i);
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
          if (x >= 0 && x <= xmax()) {
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
              $("#" + id + " " + ".fenetre-auto").prop("checked", "");
              $("#" + id + " " + ".fenetre-largeur").css(
                "visibility",
                "hidden"
              );
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
    var Y2 =
      $("#" + id + " " + ".chart")
        .last()
        .offset().top -
      $(window)["scrollTop"]() +
      H -
      Y +
      10;
    return (Y2 * vmax) / H;
  }

  function chartGetx(chart, X) {
    var layout = chart.getChartLayoutInterface();
    var L = layout.getChartAreaBoundingBox().width;
    var X2 =
      X -
      $("#" + id + " " + ".chart")
        .last()
        .offset().left -
      30;      
    return (X2 * xmax()) / L;
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
    var x = parseFloat($("#" + id + " " + ".position").val());
    var l = parseFloat($("#" + id + " " + ".fenetre-largeur").val());
    var L = chart.getChartLayoutInterface().getChartAreaBoundingBox().width;
    var a = x - l / 2;
    var b = x + l / 2;
    if (a < 0) {
      a = 0;
    }    
    if (b > xmax()) {
      b = xmax();
    }
    $("#" + id + " " + ".ligne-gauche").attr(
      "x",
      30 + (L * a) / xmax() - LARGEUR_LIGNE / 2
    );
    $("#" + id + " " + ".ligne-droite").attr(
      "x",
      30 + (L * b) / xmax() - LARGEUR_LIGNE / 2
    );
    updateBornes();
  }

  function affichePhotoPosition(x, y) {
    $(
      "#" + id + " " + ".photos-rando img, #" + id + " " + ".photo-rando-vertical"
    ).each(function () {
      var lat = $(this).attr("data-lat");
      var lon = $(this).attr("data-lon");

      if (calculeDistance(x, y, lat, lon) < 0.05) {
        $(this).css("display", "block");
      } else {
        $(this).css("display", "none");
      }
    });
  }
}
