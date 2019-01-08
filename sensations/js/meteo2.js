var station;

function getMeteo() {
		$.ajax({
			url: "https://meteo-station.herokuapp.com/temps-reel-2.php?station=" + station,
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			var temperatureExterieure = ((parseFloat(data.temperature) -32) * 5/9).toFixed(0) + ' °C'; 
			var vitesseVent = data.windSpeed;
			var orientationVent = data.windDirection + ' °';
			var temperatureInterieure = '';
			var nomStation = data.sStation;
			var directions = ["N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSO","SO","OSO","O","ONO","NO","NNO","N"];
			var direction = directions[Math.round((parseFloat(data.windDirection) % 360)/ 22.5,0) + 0];
			
			if (vitesseVent != '') {
				var vitesse = parseFloat(vitesseVent) * 0.868976; // conversion Mph en Noeuds
				$('.vitesse-vent').html(vitesse.toFixed(1) + ' n');
				$('#vitesse-vent-s').html(vitesse.toFixed(1) + ' n');
			}
			else
			{
				$('.vitesse-vent').html('');
				$('#vitesse-vent-s').html('');
			}
			
			$('.nom-sation').html(nomStation);
			$('.orientation-vent').html(orientationVent + ' ' + direction);
			$('#orientation-vent-s').html(orientationVent + ' ' + direction);
			$('.temperature-air').html(temperatureExterieure);
			$('.temperature-air-s').html(temperatureExterieure);
			$('.temperature-eau').html(temperatureInterieure);			
			$('#temperature-eau-s').html(temperatureInterieure);
			});
}