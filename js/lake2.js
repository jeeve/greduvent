// Reflet animé de la photo d'accueil sur une surface d'eau (WebGL).
// Inspiré à l'origine de http://alligatr.co.uk/lake.js/

(function($) {
    var VERTEX = [
        'attribute vec2 a_pos;',
        'varying vec2 v_uv;',
        'void main() {',
        '    v_uv = vec2(a_pos.x * 0.5 + 0.5, 0.5 - a_pos.y * 0.5);',
        '    gl_Position = vec4(a_pos, 0.0, 1.0);',
        '}'
    ].join('\n');

    var FRAGMENT = [
        'precision highp float;',
        'uniform sampler2D u_img;',
        'uniform float u_time;',
        'uniform float u_split;',   // fraction de la hauteur occupée par la photo
        'uniform float u_aspect;',  // largeur / hauteur de la zone d'eau
        'uniform float u_horizon;', // position de l'horizon dans la photo (0..1)
        'uniform float u_px;',      // hauteur du plan d'eau en pixels
        'uniform float u_scale;',
        'varying vec2 v_uv;',

        'float hash(float n) { return fract(sin(n * 91.345) * 47453.5453); }',
        'vec3 img(vec2 uv) {',
        '    vec3 c = texture2D(u_img, clamp(uv, vec2(0.001), vec2(0.999))).rgb;',
        // au-delà du haut de la photo : ciel prolongé, qui s'assombrit vers le zénith
        '    return c * (1.0 + min(uv.y, 0.0) * 0.8);',
        '}',

        'void main() {',
        // plan d'eau continu : de l'horizon de la photo jusqu'au bas du reflet
        '    float hy = u_split * u_horizon;',
        '    if (v_uv.y < hy) {',
        '        gl_FragColor = texture2D(u_img, vec2(v_uv.x, v_uv.y / u_split));',
        '        return;',
        '    }',
        '    float D = (v_uv.y - hy) / (1.0 - hy);',               // 0 = horizon, 1 = bas
        '    float z = 1.0 / (D + 0.05);',                         // distance sur le plan d'eau
        '    vec2 p = vec2((v_uv.x - 0.5) * u_aspect * z, z);',

        // clapotis : vaguelettes courtes venant de toutes les directions qui se
        // croisent et forment des ondes stationnaires (cos(kx)·cos(ωt)), ω ∝ √k
        '    vec2 slope = vec2(0.0);',
        '    for (int i = 0; i < 14; i++) {',
        '        float fi = float(i);',
        '        float k = 10.0 * pow(1.22, fi);',
        '        float a = hash(fi) * 6.283;',
        '        vec2 dir = vec2(sin(a), cos(a));',
        '        float w = sqrt(k) * 3.0 * (0.8 + 0.4 * hash(fi + 3.0));',
        '        float x = k * dot(dir, p) + hash(fi + 7.0) * 6.283;',
        '        float ph = hash(fi + 11.0) * 6.283;',
        // stationnaire + une petite part qui voyage, pour éviter un battement trop régulier
        '        float s = sin(x) * cos(w * u_time + ph) * 0.8 + sin(x - w * u_time) * 0.35;',
        // anti-crénelage : on éteint les ondes plus fines qu'un pixel
        '        float aa = 1.0 - smoothstep(0.9, 2.4, k * z * z / u_px);',
        '        slope += dir * s * 0.10 * aa;',
        '    }',
        // rafales : zones plus ou moins ridées qui dérivent lentement
        '    float gust = 0.65 + 0.35 * sin(p.x * 0.9 + p.y * 0.35 - u_time * 0.25) * sin(p.y * 0.6 + u_time * 0.15);',
        '    slope *= gust;',
        // au loin les rides sont plus fines qu'un pixel : on les remplace par
        // un frémissement de fines bandes horizontales en coordonnées écran
        '    float far = 1.0 - smoothstep(0.0, 0.45, D);',
        '    float py = v_uv.y * u_px / (1.0 - hy);',
        '    float band = sin(py * 0.55 + sin(v_uv.x * 23.0 + u_time * 1.1) * 2.5) * cos(u_time * 3.1 + v_uv.x * 14.0)',
        '               * (0.6 + 0.4 * sin(py * 0.21 - v_uv.x * 31.0 + u_time * 2.3));',
        '    slope += vec2(band * 0.3, band * 0.6) * far * gust;',
        // crêtes qui renvoient le ciel : petites touches de lumière
        '    float sky = smoothstep(0.3, 0.5, -slope.y + slope.x * 0.3);',

        // partie photo : l'eau peu profonde ondule et scintille, la silhouette reste nette
        '    if (v_uv.y < u_split) {',
        '        vec2 iuv = vec2(v_uv.x, v_uv.y / u_split);',
        '        float body = (1.0 - smoothstep(0.635, 0.655, iuv.x)) + smoothstep(0.755, 0.775, iuv.x)',
        '                   + smoothstep(0.715, 0.74, iuv.y);',
        '        float m = clamp(body, 0.0, 1.0) * smoothstep(0.0, 0.04, D);',
        '        vec2 o = vec2(slope.x * 0.004, slope.y * 0.012) * (0.8 + D) * u_scale * m;',
        '        vec3 c = texture2D(u_img, clamp(iuv + o, vec2(0.001), vec2(0.999))).rgb;',
        '        float wet = smoothstep(0.35, 0.65, dot(c, vec3(0.299, 0.587, 0.114)));',
        '        c += vec3(0.9, 0.92, 0.95) * sky * wet * 0.28 * m;',
        '        gl_FragColor = vec4(c, 1.0);',
        '        return;',
        '    }',

        '    float d = (v_uv.y - u_split) / (1.0 - u_split);',   // 0 = ligne d'eau, 1 = bas
        // le reflet est surtout étiré verticalement, peu décalé horizontalement
        '    float mirrorY = 1.0 - d * (1.0 - u_split) / u_split;',
        '    float fg = smoothstep(0.35, 1.0, d);',                  // premier plan
        '    float near = 0.45 + 0.55 * sqrt(d) + 0.5 * fg;',
        // petites vagues du premier plan : quelques trains venant du large vers nous.
        // Aucune lumière ajoutée : chaque face reflète un morceau de ciel plus haut
        // ou plus bas, ce qui brise le reflet en bandes souples
        '    float wz = 0.0;',
        '    for (int i = 0; i < 3; i++) {',
        '        float fi = float(i);',
        '        float k = 38.0 * pow(1.38, fi);',
        '        float a = (fi - 1.0) * 0.28 + 0.05;',
        '        vec2 dir = vec2(sin(a), cos(a));',
        '        float ph = k * dot(dir, p) + sqrt(k) * 2.4 * u_time + fi * 2.1;',
        '        float s = 0.5 + 0.5 * sin(ph);',
        '        float env = 0.35 + 0.65 * smoothstep(0.2, 0.8, 0.5 + 0.5 * sin(dot(vec2(dir.y, -dir.x), p) * k * 0.09 + u_time * 0.4 + fi * 1.7));',
        '        float aa = 1.0 - smoothstep(0.9, 2.4, k * z * z / u_px);',
        '        wz += s * cos(ph) * env * aa;',                       // pente le long de z, crête plus raide
        '    }',
        '    wz *= fg;',
        '    vec2 off = vec2(slope.x * 0.018 + wz * 0.004, slope.y * 0.045 + wz * 0.07) * u_scale * near;',
        '    float blur = (0.002 + 0.006 * d) * u_scale;',
        '    vec3 refl = vec3(0.0);',
        '    for (int j = 0; j < 5; j++) {',
        '        refl += img(vec2(v_uv.x + off.x, mirrorY + off.y + (float(j) - 2.0) * blur));',
        '    }',
        '    refl /= 5.0;',

        // Fresnel : miroir quasi parfait en rasant, eau plus sombre et bleutée en dessous
        '    float fresnel = mix(0.97, 0.78, d);',
        '    vec3 col = mix(vec3(0.16, 0.20, 0.24), refl, fresnel);',
        '    col += vec3(0.9, 0.92, 0.95) * sky * 0.16 * near;',
        // au premier plan le reflet est un ciel presque uniforme : les vaguelettes
        // se voient à leur ombrage (faces tournées vers nous = ciel plus haut, plus sombre)
        '    col *= 1.0 + clamp(slope.y, -1.0, 1.0) * 0.08 * fg;',
        '    gl_FragColor = vec4(col, 1.0);',
        '}'
    ].join('\n');

    function compile(gl, type, src) {
        var s = gl.createShader(type);
        gl.shaderSource(s, src);
        gl.compileShader(s);
        if (!gl.getShaderParameter(s, gl.COMPILE_STATUS)) {
            throw new Error(gl.getShaderInfoLog(s));
        }
        return s;
    }

    function initGL(canvas, img) {
        var gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');
        if (!gl) return null;

        var prog = gl.createProgram();
        gl.attachShader(prog, compile(gl, gl.VERTEX_SHADER, VERTEX));
        gl.attachShader(prog, compile(gl, gl.FRAGMENT_SHADER, FRAGMENT));
        gl.linkProgram(prog);
        if (!gl.getProgramParameter(prog, gl.LINK_STATUS)) {
            throw new Error(gl.getProgramInfoLog(prog));
        }
        gl.useProgram(prog);

        var buf = gl.createBuffer();
        gl.bindBuffer(gl.ARRAY_BUFFER, buf);
        gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1, -1, 1, -1, -1, 1, 1, 1]), gl.STATIC_DRAW);
        var loc = gl.getAttribLocation(prog, 'a_pos');
        gl.enableVertexAttribArray(loc);
        gl.vertexAttribPointer(loc, 2, gl.FLOAT, false, 0, 0);

        // image non puissance de 2 : pas de mipmap, bords bloqués
        var tex = gl.createTexture();
        gl.bindTexture(gl.TEXTURE_2D, tex);
        gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_S, gl.CLAMP_TO_EDGE);
        gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_T, gl.CLAMP_TO_EDGE);
        gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MIN_FILTER, gl.LINEAR);
        gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MAG_FILTER, gl.LINEAR);
        gl.texImage2D(gl.TEXTURE_2D, 0, gl.RGB, gl.RGB, gl.UNSIGNED_BYTE, img);

        return {
            gl: gl,
            u: {
                time:   gl.getUniformLocation(prog, 'u_time'),
                split:  gl.getUniformLocation(prog, 'u_split'),
                aspect: gl.getUniformLocation(prog, 'u_aspect'),
                horizon: gl.getUniformLocation(prog, 'u_horizon'),
                px:     gl.getUniformLocation(prog, 'u_px'),
                scale:  gl.getUniformLocation(prog, 'u_scale')
            }
        };
    }

    // repli sans WebGL : reflet statique assombri
    function drawStatic(canvas, img, hImg) {
        var c = canvas.getContext('2d');
        c.drawImage(img, 0, 0, canvas.width, hImg);
        c.save();
        c.scale(1, -1);
        c.drawImage(img, 0, -hImg * 2, canvas.width, hImg);
        c.restore();
        c.fillStyle = 'rgba(40, 50, 58, 0.35)';
        c.fillRect(0, hImg, canvas.width, canvas.height - hImg);
    }

    $.fn.lake = function(options) {
        var settings = $.extend({
            'speed':  1,
            'scale':  1,
            'ratio':  1.7,   // hauteur totale / hauteur de la photo
            'horizon': 0.6,  // position de l'horizon dans la photo
            'image':  'images/home-lake.jpg'
        }, options);

        var $el = this;
        var state = $el.data('lake');
        if (state) {
            cancelAnimationFrame(state.raf);
        } else {
            state = {};
            $el.data('lake', state);
        }

        var width = Math.max(1, $el.attr('width') - 14);

        function start() {
            var img = state.img;
            var hImg = Math.round(width * img.naturalHeight / img.naturalWidth);
            var dpr = Math.min(window.devicePixelRatio || 1, 2);
            var canvas = state.canvas;

            canvas.style.width = width + 'px';
            canvas.style.height = Math.round(hImg * settings.ratio) + 'px';
            canvas.width = Math.round(width * dpr);
            canvas.height = Math.round(hImg * settings.ratio * dpr);

            if (state.gl === undefined) {
                try {
                    state.gl = initGL(canvas, img);
                } catch (e) {
                    state.gl = null;
                }
            }
            if (!state.gl) {
                drawStatic(canvas, img, hImg * dpr);
                return;
            }

            var gl = state.gl.gl, u = state.gl.u;
            gl.viewport(0, 0, canvas.width, canvas.height);
            gl.uniform1f(u.split, 1 / settings.ratio);
            var water = 1 - settings.horizon / settings.ratio;  // part du canvas occupée par l'eau
            gl.uniform1f(u.horizon, settings.horizon);
            gl.uniform1f(u.aspect, img.naturalWidth / img.naturalHeight / (settings.ratio * water));
            gl.uniform1f(u.px, canvas.height * water);
            gl.uniform1f(u.scale, settings.scale);

            var still = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            var t0 = performance.now();
            (function frame(now) {
                gl.uniform1f(u.time, (now - t0) / 1000 * settings.speed);
                gl.drawArrays(gl.TRIANGLE_STRIP, 0, 4);
                if (!still) state.raf = requestAnimationFrame(frame);
            })(t0);
        }

        if (!state.canvas) {
            $el.empty();
            state.canvas = document.createElement('canvas');
            state.canvas.setAttribute('role', 'img');
            state.canvas.setAttribute('aria-label', 'Les Ebihens, Saint-Jacut de la Mer');
            state.canvas.style.display = 'block';
            state.canvas.style.margin = '0 auto';
            $el.append(state.canvas);

            state.img = new Image();
            state.img.onload = start;
            state.img.src = settings.image;
        } else if (state.img.complete) {
            start();
        }
        return this;
    };
})(jQuery);

$(window).load(function() {
    runLake();
    $(window).resize(runLake);
});

function runLake(event)
{
  $('#lake-div').attr('width', $('#main-col').width());
  $('#lake-div').lake({
    'speed': 0.8,   // journée calme : clapotis paisible
    'scale': 0.5    // vaguelettes discrètes
  });
}
