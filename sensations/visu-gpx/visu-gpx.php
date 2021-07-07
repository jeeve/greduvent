
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

        #seuil {
        width: 40px;
        }
        .slider-wrapper {
        display: inline-block;
        width: 20px;
        height: 90px;
        padding: 10px;
        }

        .slider-wrapper input {
        width: 90px;
        height: 20px;
        margin: 0;
        transform-origin: 45px 45px;
        transform: rotate(-90deg);
        }
   </style>

   </head>

    <body> 
    <div id="map"></div>
        <div id="control">
          <div class="slider-wrapper">    
            <input type="range" id="curseur" min="0" max="100" step="any">
          </div>          
          <label for="name">Seuil (kts)</label>
          <input type="text" id="seuil"></input>  
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
        <script src="trace.js"></script>
 
    </body>
</html>   