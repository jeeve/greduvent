var station;

function getMeteo() {
		$.ajax({
			url: "https://samples.openweathermap.org/data/2.5/weather?q=" + station + ",fr&appid=b6907d289e10d714a6e88b30761fae22",
			type: 'GET',
			/*crossDomain: true,*/
			dataType: 'json'
		}).then(function(data) {
			var temperatureExterieure = Math.round((parseFloat(data.main.temp)-32)/1.8) + ' °C'; // conversion °F en °C
			var vitesseVent = data.wind.speed;
			var orientationVent = data.wind.deg;
			var nomStation = station;
			
			if (vitesseVent != '') {
				var vitesse = parseFloat(vitesseVent) * 0.539957; // conversion km/h en Noeuds
				$('.vitesse-vent').html(Math.round(vitesse) + ' kts');
			}
			else {
				$('.vitesse-vent').html('');
			}
			
			$('.nom-sation').html(nomStation);
			$('.orientation-vent').html(orientationVent);
			$('.temperature-air').html(temperatureExterieure);
			});
}