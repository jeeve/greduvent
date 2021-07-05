

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
   <script src="https://apis.google.com/js/api.js" type="text/javascript"></script>
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


/******************** GLOBAL VARIABLES ********************/
// Client ID and API key from the Developer Console
      var CLIENT_ID = '';
      var API_KEY = '';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/drive/v3/rest"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = 'https://www.googleapis.com/auth/drive.metadata.readonly';

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
 
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }

      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
      }

      /**
       * Print files.
       */
      function listFiles() {
    }



/******************** END AUTHENTICATION ********************/
       
        
                 var request = gapi.client.drive.files.get({
                    'fileId': '11v3h7mQl6CFfUXMnFqhEYYGmRkUALubv'
                 });
                request.execute(function(resp) { 
                    console.log(resp.webContentLink); 
                });



    /*        
            var xhr = new XMLHttpRequest();
            downloadUrl = "https://www.googleapis.com/drive/v2/files/" + '11v3h7mQl6CFfUXMnFqhEYYGmRkUALubv'; 
            xhr.onload = reqListener;
            xhr.open('GET', downloadUrl);
            xhr.send();



            function reqListener () {
                 console.log(this.responseText);
            
            }
*/
            /*
            var url = 'https://drive.google.com/u/0/uc?id=1TPeWECgdgdtau9RWGLcrnwIHMhyTwzND&export=download';
            new L.GPX(url, {async: true}).on('loaded', function(e) {
            map.fitBounds(e.target.getBounds());
            }).addTo(map);
*/
        </script>
    <script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
</script>
    </body>
</html>   