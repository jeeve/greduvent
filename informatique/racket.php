<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>racket</title>
      <META NAME="Description" CONTENT="Racket est une implémentation très complète du langage Scheme. Vous trouverez ici quelques exemples de code."/>
	  <?php include("../includes/header.php"); ?>	
   </head>
   <body>
      <div class="page-container">
         <!-- top navbar -->
    	 <?php include("../includes/navbar.php"); ?>	  
         <div class="container">
            <div class="row row-offcanvas row-offcanvas-left">
               <!-- sidebar -->
			   <?php include("../includes/sidebar.php"); ?>		
               <!-- main area -->
               <div class="col-xs-12 col-sm-12 col-md-9 fond">
                  <h1>racket</h1>
<br>		

<p align="right"><a target="_blank" href="http://racket-lang.org/">http://racket/lang.org/
<img border="0" src="images/plt-logo-red-diffuse.png" alt="Site officiel du langage Racket" title="Site officiel du langage Racket"></a></p>

<p>&nbsp;</p>         
<p>Vous trouverez ici des petits scripts maison écrit en Racket. Ce langage merveilleux se laisse sculpter au gré de vos désirs numériques les plus fous. </p>
<p>Pour exécuter ces programmes, installez le langage
<a target="_blank" href="http://racket-lang.org/download">Racket</a>,<br>
Démarrer DrRacket, collez le programme dans la zone supérieure de DrRacket,<br>
Et cliquez sur le bouton <i>Exécuter</i>.</p>
<ul class="sommaire">
<li><a href="#distance-ville">Distance entre 2 villes</a></li>
<li><a href="#hauteur-eau">Hauteurs des cours d&#39;eau</a></li>
<li><a href="#followers">Nombre de followers Twitter</a></li>
<li><a href="#vent">Vitesse des vents</a></li>
<li><a href="#barometre">Baromètre</a></li>
</ul>
<br>	
	
  <table border="0" width="679">
	<tr>
		<td>
		<a name="distance-ville"></a><h2 align="center">Distance entre 2 villes 
		(km)</h2></td>
	</tr>
	<tr>
		<td>
		<div align="center">
			<table border="0" width="86%" bgcolor="#F6F6F6" cellpadding="5">
				<tr>
					<td>
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; ">
						<tr>
							<td style="text-align: left; vertical-align: top; ">
							<div class="code" style="margin: 0px; padding: 0px; ">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
									<tr>
										<td style="text-align: left; vertical-align: top;">
										<div class="code" style="margin: 0px; padding: 0px;">
														<pre style="margin: 0.5em 0px; padding: 0px; line-height: 1.1em; font-family: monospace; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(246, 246, 246);"><span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic;"><span style="font-size: 9pt">; To run this program, install Racket http://racket-lang.org/download </span></span><span style="font-size: 9pt">
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic;">; Start DrRacket, paste the program into the top area in DrRacket, </span>
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic;">; and click the Run button.</span>

<span class="o">#</span><span class="nv">lang</span> <span class="nv">racket</span>

<span class="p">(</span><span class="nf">require</span> <span class="nv">net/url</span> <span class="nv">xml</span> <span class="nv">xml/path</span><span class="p">)</span>

<span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold;">define </span><span class="p">(</span><span class="nf">geo</span> <span class="nv">ville</span><span class="p">)</span>
  <span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold;">let* </span><span class="p">(</span><span class="err">[</span><span class="nv">my-url</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">string-append </span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold;">&quot;http://maps.googleapis.com/maps/api/geocode/xml?address=&quot;</span>
                                <span class="nv">ville</span>
                                <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold;">&quot;&amp;region=be&amp;sensor=false&quot;</span><span class="p">)</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">x</span> <span class="p">(</span><span class="nf">port-&gt;string</span><span class="p">(</span><span class="nf">get-pure-port</span> <span class="p">(</span><span class="nf">string-&gt;url</span> <span class="nv">my-url</span><span class="p">)))</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">xml</span> <span class="p">(</span><span class="nf">string-&gt;xexpr</span> <span class="nv">x</span><span class="p">)</span><span class="err">]</span><span class="p">)</span>
    <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">list </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">string-&gt;number </span><span class="p">(</span><span class="nf">se-path*</span> <span class="o">&#39;</span><span class="p">(</span><span class="nv">lat</span><span class="p">)</span> <span class="nv">xml</span><span class="p">))</span> 
          <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">string-&gt;number </span><span class="p">(</span><span class="nf">se-path*</span> <span class="o">&#39;</span><span class="p">(</span><span class="nv">lng</span><span class="p">)</span> <span class="nv">xml</span><span class="p">)))))</span>

<span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold;">define </span><span class="p">(</span><span class="nf">distance</span> <span class="nv">pos1</span> <span class="nv">pos2</span><span class="p">)</span>
  <span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold;">let* </span><span class="p">(</span><span class="err">[</span><span class="nv">a</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">/ </span><span class="nv">pi</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0);">180</span><span class="p">)</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">lat1</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="p">(</span><span class="nf">first</span> <span class="nv">pos1</span><span class="p">)</span> <span class="nv">a</span><span class="p">)</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">lat2</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="p">(</span><span class="nf">first</span> <span class="nv">pos2</span><span class="p">)</span> <span class="nv">a</span><span class="p">)</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">lon1</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="p">(</span><span class="nf">second</span> <span class="nv">pos1</span><span class="p">)</span> <span class="nv">a</span><span class="p">)</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">lon2</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="p">(</span><span class="nf">second</span> <span class="nv">pos2</span><span class="p">)</span> <span class="nv">a</span><span class="p">)</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">t1</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">sin </span><span class="nv">lat1</span><span class="p">)</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">sin </span><span class="nv">lat2</span><span class="p">))</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">t2</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">cos </span><span class="nv">lat1</span><span class="p">)</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">cos </span><span class="nv">lat2</span><span class="p">))</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">t3</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">cos </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">- </span><span class="nv">lon1</span> <span class="nv">lon2</span><span class="p">))</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">t4</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="nv">t2</span> <span class="nv">t3</span><span class="p">)</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">t5</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">+ </span><span class="nv">t1</span> <span class="nv">t4</span><span class="p">)</span><span class="err">]</span>
         <span class="err">[</span><span class="nv">rad_dist</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">+ </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">atan </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">- </span><span class="nv">t5</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">/ </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">sqrt </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">+ </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">- </span><span class="nv">t5</span><span class="p">)</span> <span class="nv">t5</span><span class="p">)</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0);">1</span><span class="p">)))))</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="mi" style="line-height: 13px; color: rgb(0, 0, 0);">2</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">atan </span><span class="mi" style="line-height: 13px; color: rgb(0, 0, 0);">1</span><span class="p">)))</span><span class="err">]</span><span class="p">)</span>
    <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170);">* </span><span class="nv">rad_dist</span> <span class="mf" style="line-height: 13px; color: rgb(0, 0, 0);">3437.74677</span> <span class="mf" style="line-height: 13px; color: rgb(0, 0, 0);">1.1508</span><span class="p">)</span> <span class="mf" style="line-height: 13px; color: rgb(0, 0, 0);">1.6093470878864446</span><span class="p">)))</span>

<span class="p">(</span><span class="nf">distance</span> <span class="p">(</span><span class="nf">geo</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold;">&quot;paris&quot;</span><span class="p">)</span> <span class="p">(</span><span class="nf">geo</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold;">&quot;marseille&quot;</span></span><span class="p"><span style="font-size: 9pt">))</span></span></pre>
													</div>
													</td>
												</tr>
											</table>
						
							
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
	<tr><
		<td>
		&nbsp;</td>
	</tr>
	<tr>
		<td>
		<a name="hauteur-eau"></a><h2 align="center">Variation des hauteurs de 
		cours d&#39;eau en France (Vigicrues)</h2></td>
	</tr>
	<tr>
		<td>
		<div align="center">
			<table border="0" width="86%" bgcolor="#F6F6F6" cellpadding="5">
				<tr>
					<td>
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; ">
						<tr>
							<td style="text-align: left; vertical-align: top; ">
							<div class="code" style="margin: 0px; padding: 0px; ">
								<pre style="line-height: 1.1em; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; margin: 0.5em 0px; padding: 0px; background-color: rgb(246, 246, 246)"><font face="Courier New" style="font-size: 9pt"><span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; To run this program, install Racket http://racket-lang.org/download </span>
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; Start DrRacket, paste the program into the top area in DrRacket, </span>
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; and click the Run button.
</span>
<span class="o">#</span><span class="nv">lang</span> <span class="nv">racket

</span></font><span class="p"><span style="font-size: 9pt">(</span></span><span style="font-size: 9pt"><span class="nf">require</span> <span class="p">(</span><span class="nf">planet</span> <span class="nv">jeeve/live</span><span class="p">))</span>

<span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold; ">define </span><span class="p">(</span><span class="nf">hauteur</span> <span class="nv">idstation</span><span class="p">)</span> 
  <span class="p">(</span><span class="nf">live-web-number</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">string-append </span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;http://www.vigicrues.gouv.fr/niveau3.php?idstation=&quot;</span> 
                                  <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">number-&gt;string </span><span class="nv">idstation</span><span class="p">)</span> 
                                  <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;&amp;idspc=21&amp;typegraphe=h&amp;AffProfondeur=24&amp;AffRef=auto&amp;AffPrevi=non&amp;nbrstations=3&amp;ong=2&quot;</span><span class="p">)</span> 
                   <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;&lt;tr&gt;&lt;th&gt;Date&lt;/th&gt;&lt;th&gt;&quot;</span>  
                   <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;[0-9]+\\.[0-9]+&quot;</span><span class="p">))</span>

<span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold; ">define </span><span class="p">(</span><span class="nf">hauteur-station</span> <span class="nv">station</span><span class="p">)</span>
  <span class="p">(</span><span class="nf">hauteur</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">string-&gt;number </span><span class="p">(</span><span class="nf">first</span> <span class="p">(</span><span class="nf">string-split</span> <span class="nv">station</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;-&quot;</span><span class="p">)))))</span>

<span class="p">(</span><span class="nf">parameterize</span> <span class="p">(</span><span class="err">[</span><span class="nv">delta-x</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">* </span><span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">24</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">3600</span><span class="p">)</span><span class="err">]</span> <span class="err">[</span><span class="nv">delta-y</span> <span class="mf" style="line-height: 13px; color: rgb(0, 0, 0); ">0.10</span><span class="err">]</span> 
               <span class="err">[</span><span class="nv">y-max</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">2</span><span class="err">]</span> <span class="err">[</span><span class="nv">p:line-width</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">2</span><span class="err">]</span>
               <span class="err">[</span><span class="nv">p:plot-width</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">800</span><span class="err">]</span> <span class="err">[</span><span class="nv">p:plot-height</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">500</span><span class="err">]</span><span class="p">)</span>
  <span class="p">(</span><span class="nf">live-graph</span> <span class="o">&#39;</span><span class="p">(</span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;38-Ners&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;31-Bessèges&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;1038-Lourdes&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;75-Gignac&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;319-Millau&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;709-Valleraugue&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;323-Florac&quot;</span><span class="p">)</span>
              <span class="nv">hauteur-station</span>
              <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">* </span><span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">5</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">60</span><span class="p">)</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; 5 min</span>
              <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;Hauteurs (m)&quot;</span></span><span class="p"><span style="font-size: 9pt">))</span></span></pre>
							</div>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td>
		&nbsp;</td>
	</tr>
	<tr>
		<td>
		<a name="followers"></a><h2 align="center">Suivre graphiquement 
		l&#39;évolution du nombre d&#39;abonnés à des comptes Twitter</h2></td>
	</tr>
	<tr>
		<td>
		<div align="center">
			<table border="0" width="86%" bgcolor="#F6F6F6" cellpadding="5">
				<tr>
					<td>
					<pre style="margin-top: 0.5em; margin-right: 0px; margin-bottom: 0.5em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; line-height: 1.1em; font-family: monospace; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(246, 246, 246); "><span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; "><span style="font-size: 9pt">; To run this program, install Racket http://racket-lang.org/download </span></span><span style="font-size: 9pt">
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; Start DrRacket, paste the program into the top area in DrRacket, </span>
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; and click the Run button. </span>

<span class="o">#</span><span class="nv">lang</span> <span class="nv">racket</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; Evolution du nombre d&#39;abonnés à des comptes Twitter</span>

<span class="p">(</span><span class="nf">require</span> <span class="p">(</span><span class="nf">planet</span> <span class="nv">jeeve/live</span><span class="p">)</span> <span class="nv">net/url</span> <span class="p">(</span><span class="nf">planet</span> <span class="nv">dherman/json</span><span class="p">))</span>

<span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold; ">define </span><span class="p">(</span><span class="nf">get-sjson</span> <span class="nv">url</span><span class="p">)</span>
  <span class="p">(</span><span class="nf">read-json</span> <span class="p">(</span><span class="nf">get-pure-port</span> <span class="p">(</span><span class="nf">string-&gt;url</span> <span class="nv">url</span><span class="p">))))</span>

<span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold; ">define </span><span class="p">(</span><span class="nf">twitter-followers-count</span> <span class="nv">name</span><span class="p">)</span>
  <span class="p">(</span><span class="nf">with-handlers</span> <span class="p">(</span><span class="err">[</span><span class="nv">exn:fail?</span> <span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold; ">lambda </span><span class="p">(</span><span class="nf">exn</span><span class="p">)</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">0</span><span class="p">)</span><span class="err">]</span><span class="p">)</span>
    <span class="p">(</span><span class="nf">hash-ref</span> <span class="p">(</span><span class="nf">get-sjson</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">string-append </span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;https://api.twitter.com/1/users/show.json?screen_name=&quot;</span>
                                        <span class="nv">name</span><span class="p">))</span>
              <span class="ss" style="line-height: 13px; color: rgb(0, 0, 170); font-weight: bold; ">&#39;followers_count</span><span class="p">)))</span>

<span class="p">(</span><span class="nf">parameterize</span> <span class="p">(</span><span class="err">[</span><span class="nv">delta-x</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">* </span><span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">12</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">3600</span><span class="p">)</span><span class="err">]</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; 12 heures</span>
               <span class="err">[</span><span class="nv">delta-y</span> <span class="mf" style="line-height: 13px; color: rgb(0, 0, 0); ">0.01</span><span class="err">]</span><span class="p">)</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; 1 %</span>
  <span class="p">(</span><span class="nf">live-dashboard-one-ft</span> <span class="o">&#39;</span><span class="p">((</span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;fhollande&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;SARKOZY_2012&quot;</span><span class="p">)</span> <span class="p">(</span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;bayrou&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;MLP_officiel&quot;</span><span class="p">))</span> 
                         <span class="nv">twitter-followers-count</span> 
                         <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">* </span><span class="mi"><span style="line-height: 13px; ">5</span></span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">60</span><span class="p">)</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; 1 mesure toutes les 5 minutes</span>
                         <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;Abonnés Twitter&quot;</span></span><span class="p"><span style="font-size: 9pt">))</span></span></pre>
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td>
		&nbsp;</td>
	</tr>
	<tr>
		<td><a name="vent"></a>
		<h2 align="center">Suivre l&#39;évolution de la vitesse des vents en France 
		sur des graphiques</h2></td>
	</tr>
	<tr>
		<td>
		<div align="center">
			<table border="0" width="86%" bgcolor="#F6F6F6" cellpadding="5">
				<tr>
					<td>
					<pre style="margin-top: 0.5em; margin-right: 0px; margin-bottom: 0.5em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; line-height: 1.1em; font-family: monospace; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(246, 246, 246); "><span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; "><span style="font-size: 9pt">; To run this program, install Racket http://racket-lang.org/download </span></span><span style="font-size: 9pt">
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; Start DrRacket, paste the program into the top area in DrRacket, </span>
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; and click the Run button. </span>

<span class="o">#</span><span class="nv">lang</span> <span class="nv">racket</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; Graphique temps réel vitesse de vent winds-up</span>

<span class="p">(</span><span class="nf">require</span> <span class="p">(</span><span class="nf">planet</span> <span class="nv">jeeve/live</span><span class="p">))</span>

<span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold; ">define </span><span class="p">(</span><span class="nf">vent</span> <span class="nv">id-station</span><span class="p">)</span>
  <span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold; ">lambda </span><span class="p">()</span>
    <span class="p">(</span><span class="nf">live-web-number</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">string-append </span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;http://www.winds-up.com/index.php?p=spots&amp;id=&quot;</span>
                                    <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">number-&gt;string </span><span class="nv">id-station</span><span class="p">))</span>
                     <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;Aujourd&quot;</span>  
                     <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;[0-9]+&quot;</span>
                     <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">-1</span>
                     <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">3</span><span class="p">)))</span>

<span class="p">(</span><span class="nf">parameterize</span> <span class="p">(</span><span class="err">[</span><span class="nv">delta-x</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">* </span><span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">12</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">3600</span><span class="p">)</span><span class="err">]</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; 12 heures</span>
               <span class="err">[</span><span class="nv">delta-y</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">1</span><span class="err">]</span><span class="p">)</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; 100 %   </span>
  <span class="p">(</span><span class="nf">live-dashboard</span> <span class="o">&#39;</span><span class="p">((</span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;Cap de la Chèvre&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;Le Crotoy&quot;</span><span class="p">)</span> 
                    <span class="p">(</span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;Quiberon&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;Moisson&quot;</span><span class="p">))</span>
                  <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">list </span><span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">list </span><span class="p">(</span><span class="nf">vent</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">12</span><span class="p">)</span> <span class="p">(</span><span class="nf">vent</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">1</span><span class="mi">3</span><span class="p">))</span> 
                        <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">list </span><span class="p">(</span><span class="nf">vent</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">41</span><span class="p">)</span> <span class="p">(</span><span class="nf">vent</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">35</span><span class="p">)))</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; numéros des stations winds-up</span>
                  <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">* </span><span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">5</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">60</span><span class="p">)</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; point toutes les 5 min</span>
                  <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;Vent moyen (noeuds)&quot;</span></span><span class="p"><span style="font-size: 9pt">))</span></span></pre>
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
		<a name="barometre"></a><h2 align="center">Baromètre graphique</h2></td>
	</tr>
	<tr>
		<td>
		<div align="center">
			<table border="0" width="80%" bgcolor="#F6F6F6" cellpadding="5">
				<tr>
					<td>
					<pre style="margin-top: 0.5em; margin-right: 0px; margin-bottom: 0.5em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; line-height: 1.1em; font-family: monospace; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(246, 246, 246); "><span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; "><span style="font-size: 9pt">; To run this program, install Racket http://racket-lang.org/download </span></span><span style="font-size: 9pt">
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; Start DrRacket, paste the program into the top area in DrRacket, </span>
<span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; and click the Run button. </span>

<span class="o">#</span><span class="nv">lang</span> <span class="nv">racket</span> <span class="c1" style="line-height: 13px; color: rgb(102, 153, 51); font-style: italic; ">; Graphique temps réel pression atmosphérique</span>
</span>
<span class="p">(</span><span class="nf">require</span> <span class="p">(</span><span class="nf">planet</span> <span class="nv">jeeve/live:1:11</span><span class="p">))</span>

<span class="p">(</span><span class="k" style="line-height: 13px; color: rgb(0, 51, 204); font-weight: bold; ">define </span><span class="p">(</span><span class="nf">pression</span> <span class="nv">station</span><span class="p">)</span>
  <span class="p">(</span><span class="nf">live-web-number</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">string-append </span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;http://www.station-meteo.com/historique-fr&quot;</span>
                                  <span class="nv">station</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;/&quot;</span><span class="p">)</span>
                   <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;&lt;td&gt;Pression atmosphérique&quot;</span>  
                   <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;[0-9]+\\.[0-9]+&quot;</span>
                   <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">-1</span>
                   <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">7</span><span class="p">))</span>

<span class="p">(</span><span class="nf">parameterize</span> <span class="p">(</span><span class="err">[</span><span class="nv">delta-x</span> <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">* </span><span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">24</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">3600</span><span class="p">)</span><span class="err">]</span> <span class="err">[</span><span class="nv">delta-y</span> <span class="mf" style="line-height: 13px; color: rgb(0, 0, 0); ">0.01</span><span class="err">]</span> 
               <span class="err">[</span><span class="nv">p:line-width</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">2</span><span class="err">]</span>
               <span class="err">[</span><span class="nv">y-min</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">990</span><span class="err">]</span> <span class="err">[</span><span class="nv">y-max</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">1010</span><span class="err">]</span>
               <span class="err">[</span><span class="nv">p:plot-width</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">800</span><span class="err">]</span> <span class="err">[</span><span class="nv">p:plot-height</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">500</span><span class="err">]</span><span class="p">)</span>
  <span class="p">(</span><span class="nf">live-graph</span> <span class="o">&#39;</span><span class="p">(</span><span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;75020-paris&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;76660-grandcourt&quot;</span> <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;29680-plabennec&quot;</span><span class="p">)</span> 
              <span class="nv">pression</span>
              <span class="p">(</span><span class="nb" style="line-height: 13px; color: rgb(0, 170, 170); ">* </span><span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">5</span> <span class="mi" style="line-height: 13px; color: rgb(0, 0, 0); ">60</span><span class="p">)</span> 
              <span class="s" style="line-height: 13px; color: rgb(204, 153, 51); font-weight: bold; ">&quot;Pression atmosphérique hPa&quot;</span><span class="p">))</span></pre>
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td>
		&nbsp;</td>
	</tr>
	</table>
  </div>	

<p><br></p>
							   				  
												<div id="swipe"><div class="row">
<div class="col-xs-9"><p><a href="informatique.php">01101</a> - <a href="hop.php">hop</a> - <a id="page-precedente" href="wescheme.php">wescheme</p></div>
<div class="col-xs-3">
			<p align="right"><a id="page-suivante" href="../science/science.php">e^(i.pi)+1=0</a></p>
			</div>
			</div><div class="row"><p class="numero-page">page 23</p>	
 
</div></div>
			


            </div></div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </div>
      <!--/.page-container-->
	  <?php include("../includes/footer.php"); ?>	  
   </body>
</html>