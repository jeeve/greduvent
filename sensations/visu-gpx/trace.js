function calcCrow(lat1, lon1, lat2, lon2) 
    {
      var R = 6371; // km
      var dLat = toRad(lat2-lat1);
      var dLon = toRad(lon2-lon1);
      var lat1 = toRad(lat1);
      var lat2 = toRad(lat2);

      var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
      var d = R * c;
      return d;
    }

    // Converts numeric degrees to radians
    function toRad(Value) 
    {
        return Value * Math.PI / 180;
    }

var times = [];
var xy = [];
var v = [];
var polylignes = [];
var trace;

function litGPX(url, times, xy, v, ready) {
  $.ajax({
    type: "GET",
    url: url,
    dataType: "xml",
    success: function(xml) { 
            var i;
            var t1, t2, dd, dt;
      
            $(xml).find('trkpt').each(function() {
              if ($(this).find('time').length == 1) {
                time = $(this).find('time').text();
                lat = parseFloat($(this).attr('lat'));
                lon = parseFloat($(this).attr('lon'));
                
                times.push(time);
                var coord = [];
                coord[0] = lat;
                coord[1] = lon;
                xy.push(coord);
              }             
          });
        for (i = 0; i < times.length; i++) {
            if (i == 0) {
              v.push(0.0);
            }
            else {
              dd = calcCrow(xy[i][0], xy[i][1], xy[i-1][0], xy[i-1][1])*1000;
              t1 = new Date(times[i-1]);
              t2 = new Date(times[i]);
              dt = (t2.getTime()-t1.getTime())/1000;
              v.push((dd / dt) * 1.94384);
            }
        }
        ready();
     }
  }
 )}

litGPX(getParameterByName('url'), times, xy, v, dessine);

function dessine() {
  polylignes= [];
  var vmax = v.reduce(function(a,b) {
        return Math.max(a, b);
      });
      console.log(vmax);
      var seuil = $("#seuil").val();

      var xy2 = [];
      var cat;
      var cat0 = 0;
      for (i = 0; i < v.length; i++) {
        xy2.push(xy[i]);
        if (v[i] > seuil) {
          cat = 1;
        }
        else {
          cat = 0;
        }
        if (cat0 != cat) {
          if (cat0 == 0) {
            polylignes.push(L.polyline(xy2, {color: 'blue'}));
          }
          else {
            polylignes.push(L.polyline(xy2, {color: 'red'}));
          }
          xy2= [];
          xy2.push(xy[i]);
          cat0 = cat;
        }
      }      
      trace = L.layerGroup(polylignes).addTo(map);
      var polyline = L.polyline(xy, {color: 'red'});
      map.fitBounds(polyline.getBounds());
}      

var map = L.map('map');
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  layers: [trace]
  }).addTo(map);

  reportWindowSize();

$("#seuil").change(function() {
  map.removeLayer(trace);
  dessine();
});



     function reportWindowSize() {
        document.getElementById("map").style.height = window.innerHeight-100-20 + 'px';
    }

    document.getElementsByTagName("body")[0].onresize = reportWindowSize;

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }  