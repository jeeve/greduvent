// Balles qui rebondissent dans le cadre de droite et s'en échappent
// par un trou en haut à gauche pour se promener sur toute la page.
(function () {
	var cadre = document.getElementById('cadre-balles');
	if (!cadre) return;
	var header = document.querySelector('.navbar-fixed-top');
	var menu = document.getElementById('sidebar');

	var canvas = document.createElement('canvas');
	canvas.style.position = 'absolute';
	canvas.style.left = '0';
	canvas.style.top = '0';
	canvas.style.pointerEvents = 'none';
	canvas.style.zIndex = '1000';
	document.body.appendChild(canvas);
	var ctx = canvas.getContext('2d');

	var nombre = 25;
	var trou = 40;          // largeur du trou dans le bord haut, côté gauche
	var vitesseMax = 3.5;   // reste inférieure au plus petit rayon : pas de traversée de mur
	var balles = [];
	var murs = [];
	var largeur = 0, hauteur = 0;

	function rectangleCadre() {
		var r = cadre.getBoundingClientRect();
		var x = r.left + window.pageXOffset, y = r.top + window.pageYOffset;
		return { g: x, h: y, d: x + r.width, b: y + r.height, l: r.width };
	}

	// taille du document sans compter le canvas lui-même
	function dimensionner() {
		canvas.style.width = canvas.style.height = '0';
		largeur = document.documentElement.clientWidth;
		hauteur = Math.max(document.documentElement.scrollHeight, document.body.scrollHeight);
		canvas.width = largeur;
		canvas.height = hauteur;
		canvas.style.width = largeur + 'px';
		canvas.style.height = hauteur + 'px';
	}

	function initialiser() {
		dimensionner();
		var c = rectangleCadre();
		balles = [];
		if (c.l === 0) return; // cadre masqué (mobile)
		for (var i = 0; i < nombre; i++) {
			var r = 4 + Math.random() * 10;
			var angle = Math.random() * 2 * Math.PI;
			var vitesse = 1 + Math.random() * 2.5;
			balles.push({
				x: c.g + r + Math.random() * (c.d - c.g - 2 * r),
				y: c.h + r + Math.random() * (c.b - c.h - 2 * r),
				vx: Math.cos(angle) * vitesse,
				vy: Math.sin(angle) * vitesse,
				r: r,
				m: r * r
			});
		}
	}

	// rebond sur un segment, d'un côté comme de l'autre
	function rebondMur(b, m) {
		var sx = m.x2 - m.x1, sy = m.y2 - m.y1;
		var t = ((b.x - m.x1) * sx + (b.y - m.y1) * sy) / (sx * sx + sy * sy);
		t = Math.max(0, Math.min(1, t));
		var px = m.x1 + t * sx, py = m.y1 + t * sy;
		var dx = b.x - px, dy = b.y - py;
		var d = Math.sqrt(dx * dx + dy * dy);
		if (d === 0 || d >= b.r) return;
		var nx = dx / d, ny = dy / d;
		b.x = px + nx * b.r;
		b.y = py + ny * b.r;
		var vn = b.vx * nx + b.vy * ny;
		if (vn < 0) {
			b.vx -= 2 * vn * nx;
			b.vy -= 2 * vn * ny;
		}
	}

	// choc élastique entre deux balles qui se chevauchent
	function collision(a, b) {
		var dx = b.x - a.x, dy = b.y - a.y;
		var d = Math.sqrt(dx * dx + dy * dy);
		if (d === 0 || d >= a.r + b.r) return;
		var nx = dx / d, ny = dy / d;
		// on écarte les balles pour qu'elles ne restent pas collées
		var recouvrement = (a.r + b.r - d) / 2;
		a.x -= nx * recouvrement; a.y -= ny * recouvrement;
		b.x += nx * recouvrement; b.y += ny * recouvrement;
		var vn = (a.vx - b.vx) * nx + (a.vy - b.vy) * ny;
		if (vn <= 0) return;
		var p = 2 * vn / (a.m + b.m);
		a.vx -= p * b.m * nx; a.vy -= p * b.m * ny;
		b.vx += p * a.m * nx; b.vy += p * a.m * ny;
	}

	function limiterVitesse(b) {
		var v = Math.sqrt(b.vx * b.vx + b.vy * b.vy);
		if (v > vitesseMax) {
			b.vx *= vitesseMax / v;
			b.vy *= vitesseMax / v;
		}
	}

	function dessiner() {
		requestAnimationFrame(dessiner);
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		var c = rectangleCadre();
		if (c.l === 0 || balles.length === 0) return;

		murs = [
			{ x1: c.g + trou, y1: c.h, x2: c.d, y2: c.h }, // haut, interrompu à gauche
			{ x1: c.d, y1: c.h, x2: c.d, y2: c.b },        // droite
			{ x1: c.g, y1: c.b, x2: c.d, y2: c.b },        // bas
			{ x1: c.g, y1: c.h, x2: c.g, y2: c.b }         // gauche
		];

		// le header sert de plafond en haut de la page, sans dépendre du défilement
		var plafond = header ? header.offsetHeight : 0;
		// le menu de gauche sert de mur (sauf s'il est replié hors de l'écran)
		var gauche = menu ? Math.max(0, menu.getBoundingClientRect().right + window.pageXOffset) : 0;

		var i, j, b;
		for (i = 0; i < balles.length; i++) {
			b = balles[i];
			b.x += b.vx;
			b.y += b.vy;
			// bords de la page
			if (b.x < gauche + b.r) { b.x = gauche + b.r; b.vx = Math.abs(b.vx); }
			if (b.x > largeur - b.r) { b.x = largeur - b.r; b.vx = -Math.abs(b.vx); }
			if (b.y < plafond + b.r) { b.y = plafond + b.r; b.vy = Math.abs(b.vy); }
			if (b.y > hauteur - b.r) { b.y = hauteur - b.r; b.vy = -Math.abs(b.vy); }
			for (j = 0; j < murs.length; j++) {
				rebondMur(b, murs[j]);
			}
		}
		for (i = 0; i < balles.length; i++) {
			for (j = i + 1; j < balles.length; j++) {
				collision(balles[i], balles[j]);
			}
		}

		// cadre à peine visible, avec son trou
		ctx.strokeStyle = 'rgba(0, 0, 0, 0.1)';
		ctx.lineWidth = 1;
		ctx.beginPath();
		for (j = 0; j < murs.length; j++) {
			ctx.moveTo(Math.round(murs[j].x1) + 0.5, Math.round(murs[j].y1) + 0.5);
			ctx.lineTo(Math.round(murs[j].x2) + 0.5, Math.round(murs[j].y2) + 0.5);
		}
		ctx.stroke();

		ctx.strokeStyle = '#b4b4b4';
		ctx.lineWidth = 1.5;
		for (i = 0; i < balles.length; i++) {
			b = balles[i];
			limiterVitesse(b);
			ctx.beginPath();
			ctx.arc(b.x, b.y, b.r, 0, 2 * Math.PI);
			ctx.stroke();
		}
	}

	window.addEventListener('load', initialiser);
	window.addEventListener('resize', initialiser);
	initialiser();
	requestAnimationFrame(dessiner);
})();
