<!DOCTYPE html>
<html lang="fr">
   <head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
   <style>
		#map {
			width: 600px;
			height: 400px;
		}
   </style>
   </head>

    <body> 
        <div id="map"></div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-gpx/1.5.1/gpx.min.js"></script>
        <script>

            var map = L.map('map').setView([51.5, -0.09], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                 attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);


            var url = 'https://statmeteo.000webhostapp.com/tmp/tmp.gpx';

            new L.GPX(url, {async: true}).on('loaded', function(e) {
            map.fitBounds(e.target.getBounds());
            }).addTo(map);

        </script>
    </body>
</html>   