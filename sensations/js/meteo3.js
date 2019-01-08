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
				$('.vitesse-vent').html(Math.round(vitesse) + ' kts');
			}
			else
			{
				$('.vitesse-vent').html('');
			}
			
			$('.nom-sation').html(nomStation);
			$('.orientation-vent').html(orientationVent);
			$('.temperature-air').html(temperatureExterieure);
			});
}