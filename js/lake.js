// d'après http://alligatr.co.uk/lake.js/

(function($) {
    jQuery.fn.lake = function(options) {
        var settings = $.extend({
            'speed':    1,
            'scale':    1,
            'waves':    10,
            'image':    true
        }, options);

        var waves = settings['waves'];
        var speed = settings['speed']/4;
        var scale = settings['scale']/2;
        var img;
		
	/*	if ($('#lake-img').length) // 1er passage
		{
			img = $('#lake-img').get(0);
			$('#lake-img').attr('style', 'display: none;');
			$('#lake-img').attr('id', '');
		}
		else
		{ */
			this.empty();
		
			img = document.createElement("img");
			img.src = 'images/home-lake.jpg';
	
			this.append(img);
			this.children(0).attr('style', 'display: none;');
			this.children(0).attr('class', 'img-responsive center-block');		
			this.children(0).attr('alt', 'Les Ebihens, Saint-Jacut de la Mer');	
		// }
		
		var ca = document.createElement('canvas');
			
		img.parentNode.insertBefore(ca, img);
		jQuery('canvas').attr('style', 'margin-bottom: -5px;');
				
		var c = ca.getContext('2d');
		
        var w, h, dw, dh;

        var offset = 0;
        var frame = 0;
        var max_frames = 0;
        var frames = [];
        var wdiv = $('#lake-div').attr('width') - 14;
		var hdiv = wdiv * 0.485;
		
            c.save();

            c.canvas.width  = wdiv;
            c.canvas.height = hdiv*1.7;

            c.drawImage(img, 0, 0, wdiv, hdiv);

            c.scale(1, -1);
            c.drawImage(img, 0, -hdiv*2, wdiv, hdiv);

            c.restore();

            w = c.canvas.width;
            h = c.canvas.height;
            dw = w;
            dh = h/2;

            var id = c.getImageData(0, h/2, w, h).data;
            var end = false;

            // precalc frames
            // image displacement
            c.save();
            while (!end) {
                // var odd = c.createImageData(dw, dh);
                var odd = c.getImageData(0, h/2, w, h);
                var od = odd.data;
                // var pixel = (w*4) * 5;
                var pixel = 0;
                for (var y = 0; y < dh; y++) {
                    for (var x = 0; x < dw; x++) {
                        // var displacement = (scale * dd[pixel]) | 0;
                        var displacement = (scale * 10 * (Math.sin((dh/(y/waves)) + (-offset)))) | 0;
                        var j = ((displacement + y) * w + x + displacement)*4;

                        // horizon flickering fix
                        if (j < 0) {
                            pixel += 4;
                            continue;
                        }

                        // edge wrapping fix
                        var m = j % (w*4);
                        var n = scale * 10 * (y/waves);
                        if (m < n || m > (w*4)-n) {
                            var sign = y < w/2 ? 1 : -1;
                            od[pixel]   = od[pixel + 4 * sign];
                            od[++pixel] = od[pixel + 4 * sign];
                            od[++pixel] = od[pixel + 4 * sign];
                            od[++pixel] = od[pixel + 4 * sign];
                            ++pixel;
                            continue;
                        }

                        if (id[j+3] != 0) {
                            od[pixel]   = id[j];
                            od[++pixel] = id[++j];
                            od[++pixel] = id[++j];
                            od[++pixel] = id[++j];
                            ++pixel;
                        } else {
                            od[pixel]   = od[pixel - w*4];
                            od[++pixel] = od[pixel - w*4];
                            od[++pixel] = od[pixel - w*4];
                            od[++pixel] = od[pixel - w*4];
                            ++pixel;
                            // pixel += 4;
                        }
                    }
                }

                if (offset > speed * (6/speed)) {
                    offset = 0;
                    max_frames = frame - 1;
                    // frames.pop();
                    frame = 0;
                    end = true;
                } else {
                    offset += speed;
                    frame++;
                }
                frames.push(odd);
            }
            c.restore();
            if (!settings.image) {
                c.height = c.height/2;
            }

        setInterval(function() {
                if (!settings.image) {
                    c.putImageData(frames[frame], 0, 0);
                } else {
                    c.putImageData(frames[frame], 0, h/2);
                }
                // c.putImageData(frames[frame], 0, h/2);
                if (frame < max_frames) {
                    frame++;
                } else {
                    frame = 0;
                }
        }, 33);
        return this;
    }
})(jQuery);

$(window).load(function() {	
	runLake();
	$(window).resize(runLake);
});

function runLake(event)
{
  $('#lake-div').attr('width', $('#main-col').width());	
  $('#lake-div').lake({
    'speed': 1,
    'scale': 0.5,
    'waves': 10
  });	
}
