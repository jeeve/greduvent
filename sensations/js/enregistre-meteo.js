function enregistreMeteo(station) {
		$.ajax({
			url: "https://api.openweathermap.org/data/2.5/weather?q=" + station + ",fr&appid=a132b29f173b49547663b30b40006e6f",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			var temperature = Math.round(parseFloat(data.main.temp)-273.15); // conversion °K en °C			
			var vitesse = data.wind.speed; 
			var orientation = data.wind.deg;
			var nomStation = data.name;
			
			if (vitesse != '') {
				vitesse = parseFloat(vitesse) * 1.944; // conversion m/s en Noeuds
			}
			else {
				vitesse = "";
			}
			
			$.ajax({
				url: "https://script.google.com/macros/s/AKfycbwNiYJL49ynuyGNkqW0K-P3yCBm74lH3V2INQYDl_9Giqe557A/exec?station=%27" + station + "%27&temperature=%27" + temperature + "%27&vitesse=%27"+ vitesse + "%27&orientation=%27" + orientation + "%27",
				type: 'GET',
				crossDomain: true,
				dataType: 'html'
			});
})

}

