
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
        #control {
            height: 100px;
        }
   </style>

   </head>

    <body> 
        <div id="map"></div>
        <div id="control">
          <label for="name">Seuil (kts)</label>
          <input type="text" id="seuil" value="20"></input>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
        <script src="trace.js"></script>
 
    </body>
</html>   