
            function getPictures() {
                var img_src;
				var curdate = document.getElementById("datetimeform")[0].value;
                var time1 = document.getElementById("datetimeform")[1].value;
				var time2 = document.getElementById("datetimeform")[2].value;
				var delta = parseInt(document.getElementById("datetimeform")[3].value);
						
				var heuresminutes1 = time1.split(':');
				var heure1 = heuresminutes1[0];
				var minute1 = heuresminutes1[1];	
				var heuresminutes2 = time2.split(':');
				var heure2 = heuresminutes2[0];
				var minute2 = heuresminutes2[1];

				var h1 = parseInt(heure1);
				var m1 = parseInt(minute1);
				var h2 = parseInt(heure2);
				var m2 = parseInt(minute2);
				
				var a = h1*60 + m1;
				var b = h2*60 + m2;
				
				var t = a;
				var curtime, h, m;
				var node = document.getElementById("pictureform");
				node.innerHTML = "";
				var html = "";
				while (t <= b) {				
				    h = parseInt(t / 60);//Math.trunc(t / 60);
					m = (t % 60);
					if (m.toString().length == 1) {
						curtime = h.toString() + ':' + '0' + m.toString(); 
					}
					else
					{
						curtime = h.toString() + ':' + m.toString(); 
					}
					
					img_src = "http://imagebankleryposes.appspot.com/dispimg?date=";
					img_src = img_src + curdate.replaceAll("/", "-");
					img_src = img_src + "&time=" + curtime;
					
				var imageOK = true;				
				$.ajax({
					async: false,
					url: img_src,
					dataType : 'html',
					success: function (data) { // attention pas testé !
						if (data.innerHeight() == 0) {
							imageOK = false;
						}
                 	},				},
					error : function(resultat, statut, erreur){	
						if (erreur == 500) {
							imageOK = false;
						} 
				});
				
				if (imageOK) {
					html = html + '<figure><a href=" ' + img_src + '" target="blank"><img class="img-responsive ombre-image" src="' + img_src + '"></a><div class="back"></div><figcaption><p>' + curtime + '</p></figcaption></figure>';
				}	
					
					t = t + delta;	
				}
				node.innerHTML = html;
            }
					
			
			