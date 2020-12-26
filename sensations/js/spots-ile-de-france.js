	function maPosition(position) {		
			var lat1 = position.coords.latitude;
			var lon1 = position.coords.longitude;	
			var itineraireSrc = 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d' + lat1 + '!2d' + lon1 + '!4m5!';	
			jQuery('#map-poses').attr('src', itineraireSrc + 'ls0x47e1289bac44658f%3A0xe940a5c757b0bf2a!2sL%C3%A9ry-Poses+en+Normandie%2C+CD+110%2C+27740+Poses!3m2!1d49.302783!2d1.209404!5e0!3m2!1sfr!2sfr!4v1546773316328');
			jQuery('#map-jablines').attr('src', itineraireSrc + '1s0x47e61c3ceabfc0ff%3A0x40b82c3688c57b0!2sJablines!3m2!1d48.917429!2d2.761107!5e0!3m2!1sfr!2sfr!4v1544557168668');			
			jQuery('#map-moisson').attr('src', itineraireSrc + '1s0x47e6c12b153c22bf%3A0x2d227d4087bc4da9!2sMoisson!3m2!1d49.072928999999995!2d1.6691859999999998!5e0!3m2!1sfr!2sfr!4v1544557383138');			
			jQuery('#map-vaires').attr('src', itineraireSrc + '1s0x47e61074aa8587ab%3A0x40b82c3688c48d0!2sVaires-sur-Marne!3m2!1d48.873608999999995!2d2.6395429999999998!5e0!3m2!1sfr!2sfr!4v1544557341867');			
			jQuery('#map-grande-paroisse').attr('src', itineraireSrc + '1s0x47ef5da0654377a5%3A0xcc0ec2789c79926a!2sLa+Grande-Paroisse!3m2!1d48.386235!2d2.900735!5e0!3m2!1sfr!2sfr!4v1546091365802');			
			jQuery('#map-saint-quentin').attr('src', itineraireSrc + '1s0x47e681460086fb29%3A0x48eb9dbd818f35f3!2sSaint-Quentin+en+Yvelines%2C+Montigny-le-Bretonneux!3m2!1d48.7700557!2d2.0249544!5e0!3m2!1sfr!2sfr!4v1552237922454');			
			jQuery('#map-ecluzelles').attr('src', itineraireSrc + '!3m2!1d48.856614!2d2.3522219!4m3!3m2!1d48.7158425!2d1.4339123!5e0!3m2!1sfr!2sfr!4v1589917508322!5m2!1sfr!2sfr');			
			}		


	function clickDeplier() {
		jQuery('div[id^="item-div"]').collapse("show");	
		jQuery("input[data-target^='#item-div']").attr('value', ' - ');
	}
	
	
	function clickReplier() {
		jQuery('div[id^="item-div"]').collapse("hide");	
		jQuery("input[data-target^='#item-div']").attr('value', ' + ');	
	}
	
	    function getWebCams() {
			getWebCamPoses();
			getWebCamMoisson();
			getWebCamSaintQuentin();
			getWebCamEuroDisney();
			getWebCamGrandeParoisse();
			getWebCamEcluzelles();
		}
		
		function getWebCamPoses() {
			jQuery.ajax({
				url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/131/haute-normandie/louviers/rouen-vers-paris',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
				jQuery('#video-poses').attr('src', data.src);
		});
		}
		
		function getWebCamMoisson() {
			jQuery.ajax({
				url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
				jQuery('#video-moisson').attr('src', data.src);
		});
		}
		
		function getWebCamSaintQuentin() {
			jQuery.ajax({
				url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france/144/ile-de-france/paris/porte-de-ch-tillon-vers-porte-de-vanves',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
				jQuery('#video-saint-quentin').attr('src', data.src);
		});
		}		
		
		function getWebCamGrandeParoisse() {
			jQuery.ajax({
				url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a6/50/ile-de-france/fleury-en-bi-re/paris-vers-lyon',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
				jQuery('#video-grande-paroisse').attr('src', data.src);
		});
		}
		
		function getWebCamEcluzelles() {
			jQuery.ajax({
				url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
				jQuery('#video-ecluzelles').attr('src', data.src);
		});
		}
		
				
		function getWebCamEuroDisney() {
			jQuery.ajax({
				url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a4/344/ile-de-france/bailly-romainvilliers/paris-vers-reims',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
				jQuery('.video-eurodisney').attr('src', data.src);
		});
		}
		
		var myCam = setInterval(getWebCams, 30000);	// 30 s
	  
		jQuery(document).ready(function($) {

			getInfoSpot();

			jQuery("input[data-target^='#item-div']").click(function() {
				if (jQuery(this).attr('value') == ' + ') {
					jQuery(this).attr('value', ' - ');
				}
				else {
					jQuery(this).attr('value', ' + ');
				}	
			});
			
			jQuery("input[data-target^='.item-meteo']").click(function() {
				var words = jQuery(this).attr("data-target").split('-');
				var spot = words[2];
				if (jQuery(this).hasClass('btn-releve')) {
					jQuery(this).removeClass('btn-releve');	
					jQuery(this).addClass('btn-enfonce');
					jQuery("input[data-target^='#item-vue']").removeClass('btn-enfonce');
					jQuery("input[data-target^='#item-webcam']").removeClass('btn-enfonce');
					jQuery("input[data-target^='#item-infos']").removeClass('btn-enfonce');				
					jQuery("input[data-target^='#item-histo']").removeClass('btn-enfonce');	
					jQuery("input[data-target^='#item-vue']").addClass('btn-releve');
					jQuery("input[data-target^='#item-webcam']").addClass('btn-releve');
					jQuery("input[data-target^='#item-infos']").addClass('btn-releve');
					jQuery("input[data-target^='#item-histo']").addClass('btn-releve');
					jQuery("#item-vue-" + spot).collapse("hide");
					jQuery("#item-webcam-" + spot).collapse("hide");
					jQuery("#item-infos-" + spot).collapse("hide");
					jQuery("#item-histo-" + spot).collapse("hide");					
					jQuery(".item-meteo-" + spot).collapse("show");
				}
				else {
					jQuery(this).removeClass('btn-enfonce');	
					jQuery(this).addClass('btn-releve');
					jQuery(".item-meteo-" + spot).collapse("hide");	
				}
			});		
			jQuery("input[data-target^='#item-vue']").click(function() {
				var words = jQuery(this).attr("data-target").split('-');
				var spot = words[2];
				if (jQuery(this).hasClass('btn-releve')) {
					jQuery(this).removeClass('btn-releve');	
					jQuery(this).addClass('btn-enfonce');
					jQuery("input[data-target^='.item-meteo']").removeClass('btn-enfonce');
					jQuery("input[data-target^='#item-webcam']").removeClass('btn-enfonce');
					jQuery("input[data-target^='#item-infos']").removeClass('btn-enfonce');				
					jQuery("input[data-target^='#item-histo']").removeClass('btn-enfonce');
					jQuery("input[data-target^='.item-meteo']").addClass('btn-releve');
					jQuery("input[data-target^='#item-webcam']").addClass('btn-releve');
					jQuery("input[data-target^='#item-infos']").addClass('btn-releve');
					jQuery("input[data-target^='#item-histo']").addClass('btn-releve');
					jQuery(".item-meteo-" + spot).collapse("hide");
					jQuery("#item-webcam-" + spot).collapse("hide");
					jQuery("#item-infos-" + spot).collapse("hide");						
					jQuery("#item-vue-" + spot).collapse("show");
					jQuery("#item-histo-" + spot).collapse("hide");
				}
				else {
					jQuery(this).removeClass('btn-enfonce');	
					jQuery(this).addClass('btn-releve');	
					jQuery("#item-vue-" + spot).collapse("hide");	
				}
			});
			jQuery("input[data-target^='#item-webcam']").click(function() {
				var words = jQuery(this).attr("data-target").split('-');
				var spot = words[2];
				if (jQuery(this).hasClass('btn-releve')) {
					jQuery(this).removeClass('btn-releve');	
					jQuery(this).addClass('btn-enfonce');
					jQuery("input[data-target^='.item-meteo']").removeClass('btn-enfonce');
					jQuery("input[data-target^='#item-vue']").removeClass('btn-enfonce');
					jQuery("input[data-target^='#item-infos']").removeClass('btn-enfonce');				
					jQuery("input[data-target^='#item-histo']").removeClass('btn-enfonce');	
					jQuery("input[data-target^='.item-meteo']").addClass('btn-releve');
					jQuery("input[data-target^='#item-vue']").addClass('btn-releve');
					jQuery("input[data-target^='#item-infos']").addClass('btn-releve');
					jQuery("input[data-target^='#item-histo']").addClass('btn-releve');
					jQuery("#item-vue-" + spot).collapse("hide");
					jQuery(".item-meteo-" + spot).collapse("hide");
					jQuery("#item-infos-" + spot).collapse("hide");						
					jQuery("#item-webcam-" + spot).collapse("show");
					jQuery("#item-histo-" + spot).collapse("hide");
					
					getWebCams();	
				}
				else {
					jQuery(this).removeClass('btn-enfonce');	
					jQuery(this).addClass('btn-releve');
					jQuery("#item-webcam-" + spot).collapse("hide");		
				}
			});
			jQuery("input[data-target^='#item-infos']").click(function() {
				var words = jQuery(this).attr("data-target").split('-');
				var spot = words[2];
				if (jQuery(this).hasClass('btn-releve')) {
					jQuery(this).removeClass('btn-releve');	
					jQuery(this).addClass('btn-enfonce');
					jQuery("input[data-target^='.item-meteo']").removeClass('btn-enfonce');	
					jQuery("input[data-target^='#item-webcam']").removeClass('btn-enfonce');	
					jQuery("input[data-target^='#item-vue']").removeClass('btn-enfonce');	
					jQuery("input[data-target^='#item-histo']").removeClass('btn-enfonce');		
					jQuery("input[data-target^='.item-meteo']").addClass('btn-releve');
					jQuery("input[data-target^='#item-webcam']").addClass('btn-releve');
					jQuery("input[data-target^='#item-vue']").addClass('btn-releve');
					jQuery("input[data-target^='#item-histo']").addClass('btn-releve');
					jQuery("#item-vue-" + spot).collapse("hide");
					jQuery("#item-webcam-" + spot).collapse("hide");
					jQuery(".item-meteo-" + spot).collapse("hide");						
					jQuery("#item-infos-" + spot).collapse("show");
					jQuery("#item-histo-" + spot).collapse("hide");
				}
				else {
					jQuery(this).removeClass('btn-enfonce');	
					jQuery(this).addClass('btn-releve');
					jQuery("#item-infos-" + spot).collapse("hide");		
				}
			});
			jQuery("input[data-target^='#item-histo']").click(function() {
				var words = jQuery(this).attr("data-target").split('-');
				var spot = words[2];
				if (jQuery(this).hasClass('btn-releve')) {
					jQuery(this).removeClass('btn-releve');	
					jQuery(this).addClass('btn-enfonce');
					jQuery("input[data-target^='.item-meteo']").removeClass('btn-enfonce');	
					jQuery("input[data-target^='#item-webcam']").removeClass('btn-enfonce');
					jQuery("input[data-target^='#item-infos']").removeClass('btn-enfonce');						
					jQuery("input[data-target^='#item-vue']").removeClass('btn-enfonce');					
					jQuery("input[data-target^='.item-meteo']").addClass('btn-releve');
					jQuery("input[data-target^='#item-webcam']").addClass('btn-releve');
					jQuery("input[data-target^='#item-vue']").addClass('btn-releve');
					jQuery("input[data-target^='#item-infos']").addClass('btn-releve');
					jQuery("#item-vue-" + spot).collapse("hide");
					jQuery("#item-webcam-" + spot).collapse("hide");
					jQuery(".item-meteo-" + spot).collapse("hide");						
					jQuery("#item-infos-" + spot).collapse("hide");
					initHistorique(spot);
					getHistoriqueVent(spot);
					jQuery("#item-histo-" + spot).collapse("show");
				}
				else {
					jQuery(this).removeClass('btn-enfonce');	
					jQuery(this).addClass('btn-releve');
					jQuery("#item-histo-" + spot).collapse("hide");		
				}
			});
			
			$( "#ma-date-poses" ).change(function() {
			 getHistoriqueVent('poses');
			});
			$( "#ma-date-moisson" ).change(function() {
			 getHistoriqueVent('moisson');
			});
			$( "#ma-date-ecluzelles" ).change(function() {
			 getHistoriqueVent('ecluzelles');
			});
			$( "#ma-date-jablines" ).change(function() {
			 getHistoriqueVent('jablines');
			});
			$( "#ma-date-vaires" ).change(function() {
			 getHistoriqueVent('vaires');
			});
			$( "#ma-date-grandeparoisse" ).change(function() {
			 getHistoriqueVent('grandeparoisse');
			});
			$( "#ma-date-foretorient" ).change(function() {
			 getHistoriqueVent('foretorient');
			});			
			
			
			
			
			jQuery("input[data-target='#item-meteo']").click(function() {
				if (jQuery("input[data-target='#item-meteo']").hasClass('btn-releve')) {
					jQuery("input[data-target='#item-meteo']").removeClass('btn-releve');	
					jQuery("input[data-target='#item-meteo']").addClass('btn-enfonce');	
					jQuery("input[data-target='#item-geographie']").addClass('btn-releve');	
					jQuery("input[data-target='#item-geographie']").removeClass('btn-enfonce');
			jQuery("#page").html('<iframe width="650" height="450" src="https://embed.windy.com/embed2.html?lat=48.669&lon=2.340&zoom=7&level=surface&overlay=wind&menu=&message=true&marker=&calendar=&pressure=&type=map&location=coordinates&detail=&detailLat=49.013&detailLon=2.005&metricWind=kt&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>');				
				}
			});
			jQuery("input[data-target='#item-geographie']").click(function() {
				if (jQuery("input[data-target='#item-geographie']").hasClass('btn-releve')) {
					jQuery("input[data-target='#item-geographie']").removeClass('btn-releve');	
					jQuery("input[data-target='#item-geographie']").addClass('btn-enfonce');
					jQuery("input[data-target='#item-meteo']").addClass('btn-releve');	
					jQuery("input[data-target='#item-meteo']").removeClass('btn-enfonce');	
				jQuery("#page").html('<iframe src="https://www.google.com/maps/d/embed?mid=10cRXGDzFD6BHC2YczFYe2xv6EbqLJB-t" width="640" height="480"></iframe>');
				}
			});			
			
	         jQuery('#menu-vent').change(function(){
					orientationVent = $(this).find('option:selected').attr('value');
					getOrientationVentSpot();
				});
			/*		
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(maPosition);
			}
*/
			$.ajax({
				url: "niveau-foret-orient.php",
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				jQuery(".niveau-foret-orient").replaceWith(data.value);
			})
				
				
				
		
		
				
			//getWebCams();	 
		});
