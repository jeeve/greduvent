var station;

function getMeteo() {
		$.ajax({
			url: "https://api.openweathermap.org/data/2.5/weather?q=" + station + ",fr&appid=a132b29f173b49547663b30b40006e6f",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			// var temperatureExterieure = Math.round((parseFloat(data.main.temp)-32)/1.8) + ' °C'; // conversion °F en °C
			var temperatureExterieure = Math.round(parseFloat(data.main.temp)-273.15) + ' °C'; // conversion °K en °C			
			var vitesseVent = data.wind.speed; 
			var orientationVent = data.wind.deg;
			var nomStation = data.name;
			
			if (vitesseVent != '') {
				var vitesse = parseFloat(vitesseVent) * 1.944; // conversion m/s en Noeuds
				$('.vitesse-vent').html(Math.round(vitesse) + ' kts');
			}
			else {
				$('.vitesse-vent').html('');
			}
			
			var direction = "";
			if (orientationVent != '') {
				var directions = ["N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSO","SO","OSO","O","ONO","NO","NNO","N"];
				direction = directions[Math.round((parseFloat(data.windDirection) % 360)/ 22.5,0) + 0];
			}
			
			$('.nom-sation').html(nomStation);
			$('.orientation-vent').html(direction);
			$('.temperature-air').html(temperatureExterieure);
			});
}