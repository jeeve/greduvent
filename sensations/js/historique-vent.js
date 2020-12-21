
function getHistoriqueVent() {
	
	var dateFrancaise = document.getElementById("datetimeform")[0].value;
	var decompositionDate = dateFrancaise.split('/');
	
	if (decompositionDate[1].length == 1) {
		decompositionDate[1] = "0" + decompositionDate[1];
	}
	if (decompositionDate[0].length == 1) {
		decompositionDate[0] = "0" + decompositionDate[0];
	}	
	
	var curdate = decompositionDate[2] +  decompositionDate[1] + decompositionDate[0];

//	console.log(curdate);
//	var curdate = "2017-04-19"; // document.getElementById("datetimeform")[0].value;

/*
    var time1 = document.getElementById("datetimeform")[1].value;
	var time2 = document.getElementById("datetimeform")[2].value;
	
	var heuresminutes1 = time1.split(':');
	var heure1 = heuresminutes1[0];
	var minute1 = heuresminutes1[1];	
	var heuresminutes2 = time2.split(':');
	var heure2 = heuresminutes2[0];
	var minute2 = heuresminutes2[1];
*/	
	$("#historique-vent").html('<img src="http://flacktest.herokuapp.com/plot/louviers/vent/' + curdate + '" class="img-responsive ombre-image">'); 

}
