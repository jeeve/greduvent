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

			}		
/*
	function clickComparer() {
		if (jQuery('.notePoses').text() == '' && jQuery('.noteVairesSurMarne').text() == '' && jQuery('.noteJablines').text() == '' && jQuery('.noteMoisson').text() == '' && jQuery('.noteGrandeParoisse').text() == '' && jQuery('.noteSaintQuentin').text() == '') {
			jQuery('div[id^="item-div"]').collapse("show");
		} 
		else {
		if (jQuery('.notePoses').text() != '') {
			jQuery('#item-div-poses').collapse("show");
		}
		else {
			jQuery('#item-div-poses').collapse("hide");	
		}
		if (jQuery('.noteVairesSurMarne').text() != '') {
			jQuery('#item-div-vaires').collapse("show");
		}
		else {
			jQuery('#item-div-vaires').collapse("hide");	
		}
		if (jQuery('.noteJablines').text() != '') {
			jQuery('#item-div-jablines').collapse("show");
		}
		else {
			jQuery('#item-div-jablines').collapse("hide");	
		}
		if (jQuery('.noteMoisson').text() != '') {
			jQuery('#item-div-moisson').collapse("show");
		}
		else {
			jQuery('#item-div-moisson').collapse("hide");	
		}
		if (jQuery('.noteGrandeParoisse').text() != '') {
			jQuery('#item-div-grande-paroisse').collapse("show");
		}
		else {
			jQuery('#item-div-grande-paroisse').collapse("hide");	
		}
		if (jQuery('.noteSaintQuentin').text() != '') {
			jQuery('#item-div-saint-quentin').collapse("show");
		}
		else {
			jQuery('#item-div-saint-quentin').collapse("hide");	
		}
		
		}		
	}
*/	

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
					jQuery("input[data-target^='#item-vue']").addClass('btn-releve');
					jQuery("input[data-target^='#item-webcam']").addClass('btn-releve');
					jQuery("input[data-target^='#item-infos']").addClass('btn-releve');
					jQuery("#item-vue-" + spot).collapse("hide");
					jQuery("#item-webcam-" + spot).collapse("hide");
					jQuery("#item-infos-" + spot).collapse("hide");	
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
					jQuery("input[data-target^='.item-meteo']").addClass('btn-releve');
					jQuery("input[data-target^='#item-webcam']").addClass('btn-releve');
					jQuery("input[data-target^='#item-infos']").addClass('btn-releve');
					jQuery(".item-meteo-" + spot).collapse("hide");
					jQuery("#item-webcam-" + spot).collapse("hide");
					jQuery("#item-infos-" + spot).collapse("hide");						
					jQuery("#item-vue-" + spot).collapse("show");
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
					jQuery("input[data-target^='.item-meteo']").addClass('btn-releve');
					jQuery("input[data-target^='#item-vue']").addClass('btn-releve');
					jQuery("input[data-target^='#item-infos']").addClass('btn-releve');
					jQuery("#item-vue-" + spot).collapse("hide");
					jQuery(".item-meteo-" + spot).collapse("hide");
					jQuery("#item-infos-" + spot).collapse("hide");						
					jQuery("#item-webcam-" + spot).collapse("show");
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
					jQuery("input[data-target^='.item-meteo']").addClass('btn-releve');
					jQuery("input[data-target^='#item-webcam']").addClass('btn-releve');
					jQuery("input[data-target^='#item-vue']").addClass('btn-releve');
					jQuery("#item-vue-" + spot).collapse("hide");
					jQuery("#item-webcam-" + spot).collapse("hide");
					jQuery(".item-meteo-" + spot).collapse("hide");						
					jQuery("#item-infos-" + spot).collapse("show");
				}
				else {
					jQuery(this).removeClass('btn-enfonce');	
					jQuery(this).addClass('btn-releve');
					jQuery("#item-infos-" + spot).collapse("hide");		
				}
			});
			
			
			
			
			
/*			
			jQuery("input[data-target^='#item-vue'], input[data-target^='#item-webcam'], input[data-target^='#item-infos'], input[data-target^='.item-meteo']").click(function() {
				if (jQuery(this).hasClass('btn-releve')) {
					jQuery(this).removeClass('btn-releve');	
					jQuery(this).addClass('btn-enfonce');					
				}
				else {
					jQuery(this).removeClass('btn-enfonce');	
					jQuery(this).addClass('btn-releve');										
				}
			});
*/			
	         jQuery('#menu-vent').change(function(){
					orientationVent = $(this).find('option:selected').attr('value');
					getOrientationVentSpot();
				});
					
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(maPosition);
			}

			getWebCams();	 
		});
