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
	  
	  <script>
(function(w,d,s,i,n){w[n]=w[n]||{q:[],init:function(o){w[n].initOpts=o;},ready:function(c){w[n].q.push(c);}};
setTimeout(function(j,k){if(!d.getElementById(i)){k=d.getElementsByTagName(s)[0];j=d.createElement(s);j.id=i;
j.src="https://cdn.by.wonderpush.com/sdk/1.1/wonderpush-loader.min.js";k.parentNode.insertBefore(j,k);}},0);
}(window,document,"script","wonderpush-jssdk-loader","WonderPush"));

WonderPush.init({
    webKey: "a0dce73e4a3ef56aa87844f2cca10ffbd6b3f0461c74fb54035f6abd82fc33b3",
    optInOptions: {
        // Vous pouvez modifier ou traduire les chaînes suivantes :
        externalBoxMessage: "Nous aimerions vous envoyer des notifications",
        externalBoxExampleTitle: "Notification exemple",
        externalBoxExampleMessage: "Ceci est un exemple de notification",
        externalBoxDisclaimer: "Vous pouvez vous désinscrire à n'importe quel moment.",
        externalBoxProcessingMessage: "Inscription en cours...",
        externalBoxSuccessMessage: "Merci de vous être inscrit !",
        externalBoxFailureMessage: "Désolé, un problème est survenu.",
        externalBoxTooLongHint: "Mauvaise connexion ou navigation privée ?",
        externalBoxCloseHint: "Fermer",
        modalBoxMessage: "Recevez désormais nos news en temps réel.<br/>Vous pouvez vous désinscrire à n'importe quel moment.",
        modalBoxButton: "J'ai compris !"
    }
});
</script>
	  
	  