function getTimelapse() {

//	window.open("https://makevideo.herokuapp.com/?date=2017-04-16&heure-debut=20:00&heure-fin=21:00", "_blank");

	var dateFrancaise = document.getElementById("datetimeform")[0].value;
	var decompositionDate = dateFrancaise.split('/');
	
	if (decompositionDate[1].length == 1) {
		decompositionDate[1] = "0" + decompositionDate[1];
	}
	if (decompositionDate[0].length == 1) {
		decompositionDate[0] = "0" + decompositionDate[0];
	}	
	
	var curdate = decompositionDate[2] + '-' + decompositionDate[1] + '-' + decompositionDate[0];

    var time1 = document.getElementById("datetimeform")[1].value;
	var time2 = document.getElementById("datetimeform")[2].value;
	
	var heuresminutes1 = time1.split(':');
	var heure1 = heuresminutes1[0];
	var minute1 = heuresminutes1[1];	
	var heuresminutes2 = time2.split(':');
	var heure2 = heuresminutes2[0];
	var minute2 = heuresminutes2[1];

	if (heure1.length == 1) {
		 heure1 = "0" + heure1;
	 }
	 if (minute1.length == 1) {
		 minute1 = "0" + minute1;
	 }
	 
	if (heure2.length == 1) {
		 heure2 = "0" + heure2;
	 }
	 if (minute2.length == 1) {
		 minute2 = "0" + minute2;
	 }
	 
	 
	window.open("https://makevideo.herokuapp.com/?date=" + curdate + "&heure-debut=" + heure1 + ":" + minute1 + "&heure-fin=" + heure2 + ":" + minute2);

}