var station;

function getMeteo() {
		$.ajax({
			url: "temps-reel.php?station=" + station,
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			var temperatureExterieure = data.temperatureExterieure + ' °C'; 
			var vitesseVent = data.vitesseVent;
			var orientationVent = data.orientationVent;
			var nomStation = data.station;
			
			if (vitesseVent != '') {
				var vitesse = parseFloat(vitesseVent) * 0.539957; // conversion km/h en Noeuds
				$('.vitesse-vent').html(vitesse.toFixed(1) + ' kts');
				$('#vitesse-vent-s').html(vitesse.toFixed(1) + ' kts');
			}
			else
			{
				$('.vitesse-vent').html('');
				$('#vitesse-vent-s').html('');
			}
			
			$('.nom-sation').html(nomStation);
			$('.orientation-vent').html(orientationVent);
			$('#orientation-vent-s').html(orientationVent);
			$('.temperature-air').html(temperatureExterieure);
			$('.temperature-air-s').html(temperatureExterieure);
			});
}