
<!DOCTYPE html>
<html lang="fr">
   <head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
   <script src="/js/jquery.min.js"></script>
   <style>
		#map {
			width: auto;
			height: 800px;
		}
   </style>

   </head>

    <body> 
        <div id="map"></div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
        <script src="gpx.js"></script>
       
        <script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>

       
        <script>

            reportWindowSize();
            
            var map = L.map('map'); //.setView([51.5, -0.09], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                 attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

  

            var url = getParameterByName('url'); // https://statmeteo.000webhostapp.com/sensations/gpx/2021_05_24_moisson.gpx';
            new L.GPX(url, {async: true}).on('loaded', function(e) {
            map.fitBounds(e.target.getBounds());
            }).addTo(map);


            var time, lat, lon;

            $.ajax({
                type: "GET",
                url: url,
                dataType: "xml",
                success: function(xml) {                      
                    $(xml).find('trkpt').each(function() {
                        if ($(this).find('time').length == 1) {
                            time = $(this).find('time').text();
                            lat = $(this).attr('lat');
                            lon = $(this).attr('lon');
                            //console.log(time + " " + lat + " " + lon);
                        }
                    });
                }
            });




    function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }            

    function reportWindowSize() {
        document.getElementById("map").style.height = window.innerHeight-20 + 'px';
    }

    document.getElementsByTagName("body")[0].onresize = reportWindowSize;
        </script>

    </body>
</html>   