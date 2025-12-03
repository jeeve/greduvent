	  <script src="/js/jquery.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script src="/js/bootply.js"></script>
	  <script src="/js/script.js"></script>
	  <script src="/js/navbar.js"></script>	  
	  <script src="/js/jquery.mobile.touch.min.js"></script>
	  <script>
		$(document).ready(function() { if (jQuery.support.touch) {
			$("#swipe").on("swiperight",function(){ 
				location.href=$('#page-precedente')[0].getAttribute('href');
			}); 
			$("#swipe").on("swipeleft",function(){
				location.href=$('#page-suivante')[0].getAttribute('href');
			}); 
		}			
		});
	  </script>	

      <!-- Audio Player Integration -->
      <link rel="stylesheet" href="/css/side-player.css">
      <?php include(__DIR__ . "/audio-player.php"); ?>
      <script src="/js/side-player.js"></script>