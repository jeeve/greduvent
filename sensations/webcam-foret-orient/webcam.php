<?php
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>CD10 - Lac d'Orient</title>
  
        <meta name="language" content="fr" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
       
        <meta name="description" content="Webcam du lac d'Orient" />

        <!-- viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <!-- end viewport config -->
        
        <!-- ms specific -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- don't move this below any link elements -->
        <meta http-equiv="cleartype" content="on">
        <meta name="msapplication-tap-highlight" content="no">
        <!-- end ms specific -->

        <!-- ios specific TODO: add icons and splash page -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!-- enables full-screen on launch from home screen -->
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- end ios specific -->

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <meta name="theme-color" content="#2476ab">

        <meta property="fb:app_id" content="603985683577798" />

        <meta property="og:site_name" content="Viewsurf"  />
        <meta property="og:url" content="https://pv.viewsurf.com/1084/Lac-d-Orient"  />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="CD10 - Lac d'Orient - Le lac d’Orient - Mesnil-Saint-Père" />
        <meta property="og:description" content="Webcam du lac d'Orient" />
        <meta property="og:image" content="https://filmspv.viewsurf.com/cd1001/2/2/media_1610632384.jpg" />
        <meta property="og:image:secure_url" content="https://filmspv.viewsurf.com/cd1001/2/2/media_1610632384.jpg" />
        <meta property="og:image:type" content="image/jpg" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="CD10 - Lac d'Orient - Le lac d’Orient - Mesnil-Saint-Père" />
        <meta name="twitter:description" content="Webcam du lac d'Orient" />
        <meta name="twitter:image " content="https://filmspv.viewsurf.com/cd1001/2/2/media_1610632384.jpg" />
        <link rel="image_src" href="https://filmspv.viewsurf.com/cd1001/2/2/media_1610632384.jpg" />
        <link rel="canonical" href="https://pv.viewsurf.com/1084/Lac-d-Orient" />

        <link rel="apple-touch-icon" sizes="120x120" href="/cp/v4/1.0.0/favicons/apple-touch-icon.png?v=NmbvEzkPBJ">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/cp/v4/1.0.0/favicons/apple-touch-icon-precomposed.png?v=NmbvEzkPBJ">
        <link rel="icon" type="image/png" sizes="32x32" href="/cp/v4/1.0.0/favicons/favicon-32x32.png?v=NmbvEzkPBJ">
        <link rel="icon" type="image/png" sizes="16x16" href="/cp/v4/1.0.0/favicons/favicon-16x16.png?v=NmbvEzkPBJ">
        <link rel="manifest" href="/1084/manifest.json?v=1.0.0">
        <link rel="mask-icon" href="/cp/v4/1.0.0/favicons/safari-pinned-tab.svg?v=NmbvEzkPBJ" color="#2476ab">
        <link rel="shortcut icon" href="/cp/v4/1.0.0/favicons/favicon.ico?v=NmbvEzkPBJ">
        <meta name="msapplication-TileColor" content="#2476ab">
        <meta name="msapplication-config" content="/1084/browserconfig.xml?v=1.0.0">

  <style>
    body { margin:0; padding:0; overflow:hidden; background: black; }
  </style>
</head>
<body>
  <div id="vs-player"></div>
  <script>
    let playerOptions = {
      "themeColor": "#2476ab",
            "logo": "/cp/v4/configs/1084.png",
            "maintenance": {
        "active": false,
        "title": {
          "fr": "Oups !",
          "en": "Oops !"
        },
        "message": {
          "fr": "Actuellement en cours de maintenance !",
          "en": "Currently under maintenance !"
        }
      },
      "analytics": {
        "trackingId": 'UA-27503538-3',
                "reference": '1084'
      },
      "mediaUrl": "https://pv.viewsurf.com/1084/Lac-d-Orient",
      "collection": [{
        "id": "4932",
        "title": {
            "fr": "Le lac d’Orient - Mesnil-Saint-Père",
            "en": "Le lac d’Orient - Mesnil-Saint-Père"
        },
        "type": "video",
        "histo": true,
        "default": true,
        "timezone": "Europe/Paris",
        "media": {
          "source": "44aae7ba-de8d-4bc5-3834-3130-6d61-63-8a89-c190e416f046d",
          "thumbnail": "//filmspv.viewsurf.com/cd1001/2/2/media_1610632384_tn.jpg",
          "poster": "//filmspv.viewsurf.com/cd1001/2/2/media_1610632384.jpg",          "date": "2021-01-14T14:53:04+01:00", 
        }
      },  
    ]
  };
      
  // Instantiate player when dom ready
  document.addEventListener("DOMContentLoaded", function() {
    window.playerui = null;

    const init = function() {
      if(playerui instanceof PlayerUI) {
        playerui.unmount();
      }

      playerui = new PlayerUI('#vs-player', playerOptions);
      playerui.mount();
    }
    init();
  });
  </script>
    
  <link rel="stylesheet" type="text/css" href="http://pv.viewsurf.com/cp/v4/1.0.0/video-js.min.css" >
  <link rel="stylesheet" type="text/css" href="http://pv.viewsurf.com/cp/v4/1.0.0/player-ui.css" >
  <link rel="stylesheet" type="text/css" href="http://pv.viewsurf.com/cp/v4/1.0.0/videojs-letterpillarbg.css">
  <link rel="stylesheet" type="text/css" href="http://pv.viewsurf.com/cp/v4/1.0.0/panohdviewer.css" >

  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/video.js"></script>
  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/polyfill.min.js"></script>
  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/videojs-flash.min.js"></script>
  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/videojs-flashls-source-handler.min.js"></script>

  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/player-ui.js"></script>

  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/dash.mediaplayer.min.js"></script>
  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/videojs-dash.min.js"></script>

  <script src="https://viewsurf.quanteec.com/embeded/quanteec-dashjs.min.js"></script>

  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/videojs-letterpillarbg.min.js"></script>
  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/videojs-quanteec.min.js"></script>
  <script src="http://pv.viewsurf.com/cp/v4/1.0.0/panohdviewer.js"></script>
</body>
</html>
