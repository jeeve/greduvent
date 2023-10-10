<!DOCTYPE html>
<html lang="fr">

<head>
    <title>01101</title>
    <META NAME="Description" CONTENT="Le monde passionnant de l'informatique et de ses langages." />
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
                    <h1>01101</h1>

                    <br>
                    <ul class="sommaire">
                        <!--						<li><a href="#meteo-temps-reel">Service Web de météo temps réel</a></li> -->
                        <li><a href="#metapong">Metapong</a></li>
                        <li><a href="#floutage-visages">Floutage de visages</a></li>
                        <li><a href="#jeudejose">Le jeu de José</a></li>
                        <li><a href="#scrollscreens">Scroll Screens</a></li>
                        <li><a href="#angular">Angular</a></li>
                        <li><a href="#lecteur-audio">Lecteur audio HTML5</a></li>
                        <li><a href="#ia">Intelligence artificielle</a></li>
                        <li><a href="#scheme">Le langage Scheme</a></li>
                    </ul>
                    <!--                     
<a name="meteo-temps-reel"></a><h2>Service Web de météo temps réel</h2>
<p>Un script écrit en PHP permettant de retourner sous format JSON les données météo de la station fournit en paramètre. Le service Web s'appuie sur les données du site <a href="http://www.weatherlink.com" targer="_blank">www.weatherlink.com</a>. Le service est déployé à l'adresse <a href="https://meteo-station.herokuapp.com" target="_blank">https://meteo-station.herokuapp.com</a> et utilisé pour afficher les informations temps réelles sur le <a href="/sensations/lac-lery-poses.php">lac de Léry-Poses</a>. 
</p>
<p>Le code source est disponible sur <a href="https://github.com/jeeve/meteo" target="_blank">Github</a></p>
<p align="right"><em><font size="2">vendredi 10 mars 2017</font></em></p>

<hr>
-->

<a name="metablaster"></a>
                    <h2>Metablaster</h2>
                    <p>Jeu en ligne multijoueurs basé sur le célèbre Dynablaster. React coté navigateur avec Nodejs coté serveur.<br>
                    </p>
                    <br>
                    <div class="row">

                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                                <a href="http://metablaster.alwaysdata.net/" target="blank">
                                    <img alt="Metablaster" title="Jouer à Metablaster" src="images/metablaster.png"
                                        class="img-responsive ombre-image" />
                                </a>
                            </p>
                            <p class="legende"><a href="https://github.com/jeeve/metablaster" target="_blank">Code source</a>
                            </p>
                            </a>
                        </div>
                    </div>

                    <p align="right"><em>
                            <font size="2">jeudi 9 juin 2022</font>
                        </em></p>

                    <hr>

<a name="metapong"></a>
                    <h2>Metapong</h2>
                    <p>Un petit jeu Pong multijoueurs tournant sur un serveur Nodejs. L'espace de jeu s'agrandit au fur et à mesure que les utilisateurs se connectent.<br>
                    </p>
                    <br>
                    <div class="row">

                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                                <a href="images/metapong.gif" target="blank">
                                    <img alt="Metapong" title="Metapong" src="images/metapong.gif"
                                        class="img-responsive ombre-image" />
                                </a>
                            </p>
                            <p class="legende"><a href="https://github.com/jeeve/metapong" target="_blank">Télécharger Metapong</a>
                            </p>
                            </a>
                        </div>
                    </div>

                    <p align="right"><em>
                            <font size="2">jeudi 9 juin 2022</font>
                        </em></p>

                    <hr>


                    <a name="floutage-visages"></a>
                    <h2>Floutage de visages</h2>
                    <p>Petit script Python pour flouter les visages sur une photo.</p>
                    <p>Le programme utilise la librairie mtcnn pour la détection.</p>
                    <p>Entrez l'URL d'une image dans le champ dédié.</p>
                    <p>Le <a href="https://colab.research.google.com/drive/1fzjH4gr6vXVJ1UgQkeV_2mgUs6dFjFQO?usp=sharing"
                            target="_blank">notebook Jupyter</a>.<br>
                    </p>
                    <br>
                    <p align="right"><em>
                            <font size="2">lundi 9 novembre 2020</font>
                        </em></p>

                   <hr>


                    <a name="jeudejose"></a>
                    <h2>Le jeu de José</h2>
                    <p>Une rivière, une barge ne pouvant contenir que 2 individus maximum.</p>
                    <p>Sur la rive droite, 3 humains et 3 orques.</p>
                    <p>Le but, que les 3 humains traversent sur la rive gauche sachant qu'ils ne doivent jamais être en
                        infériorité numérique par rapport aux orques.</p>
                    <p>Le <a href="https://colab.research.google.com/drive/1KrXzsHiDZ6HedbwkeOuFGYqRRNZ1MzIH?usp=sharing"
                            target="_blank">programme</a> écrit en Python :<br>
                    <br>   
                    <div class="row row-cadre">
                     
                        <div class="col-sd-12 fond-table encadrement-table">
                            <div class="font-code">
                            <div>
                                            <pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">random</span>
<span style="color: #008800; font-weight: bold">from</span> <span style="color: #0e84b5; font-weight: bold">copy</span> <span style="color: #008800; font-weight: bold">import</span> copy
 
<span style="color: #DD4422">"""Modèle"""</span>
 
<span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">JeuDeJose</span>:
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">__init__</span>(<span style="color: #007020">self</span>):
    <span style="color: #007020">self</span><span style="color: #333333">.</span>coups <span style="color: #333333">=</span> []
    <span style="color: #007020">self</span><span style="color: #333333">.</span>rive_gauche <span style="color: #333333">=</span> []
    <span style="color: #007020">self</span><span style="color: #333333">.</span>rive_droite <span style="color: #333333">=</span> [<span style="background-color: #fff0f0">'humain'</span>, <span style="background-color: #fff0f0">'humain'</span>, <span style="background-color: #fff0f0">'humain'</span>, <span style="background-color: #fff0f0">'orque'</span>, <span style="background-color: #fff0f0">'orque'</span>, <span style="background-color: #fff0f0">'orque'</span>]
    <span style="color: #007020">self</span><span style="color: #333333">.</span>barge <span style="color: #333333">=</span> <span style="background-color: #fff0f0">'droite'</span>
    <span style="color: #007020">self</span><span style="color: #333333">.</span>_nombre_tentatives_max <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">100</span>
    <span style="color: #007020">self</span><span style="color: #333333">.</span>_nombre_tentatives <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">__str__</span>(<span style="color: #007020">self</span>):
    chaine <span style="color: #333333">=</span> <span style="color: #007020">str</span>(<span style="color: #007020">len</span>(<span style="color: #007020">self</span><span style="color: #333333">.</span>coups) <span style="color: #333333">-</span> <span style="color: #0000DD; font-weight: bold">1</span>) <span style="color: #333333">+</span> <span style="background-color: #fff0f0">" coups</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">"</span>
    <span style="color: #008800; font-weight: bold">for</span> coup <span style="color: #000000; font-weight: bold">in</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>coups:
      chaine <span style="color: #333333">+=</span> <span style="background-color: #fff0f0">"Traverse vers "</span> <span style="color: #333333">+</span> <span style="color: #007020">str</span>(coup[<span style="color: #0000DD; font-weight: bold">0</span>]) <span style="color: #333333">+</span> <span style="background-color: #fff0f0">" --------&gt; "</span> <span style="color: #333333">+</span> <span style="color: #007020">str</span>(coup[<span style="color: #0000DD; font-weight: bold">1</span>]) <span style="color: #333333">+</span> <span style="background-color: #fff0f0">"</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">"</span>
    <span style="color: #008800; font-weight: bold">return</span> chaine
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">_nombre</span>(<span style="color: #007020">self</span>, categorie, rive):
    <span style="color: #008800; font-weight: bold">return</span> rive<span style="color: #333333">.</span>count(categorie)  
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">equipage_disponible</span>(<span style="color: #007020">self</span>, equipage, rive):
    copie_rive <span style="color: #333333">=</span> copy(rive)
    <span style="color: #008800; font-weight: bold">for</span> membre <span style="color: #000000; font-weight: bold">in</span> equipage:
      <span style="color: #008800; font-weight: bold">try</span>:
        copie_rive<span style="color: #333333">.</span>remove(membre)
      <span style="color: #008800; font-weight: bold">except</span>:
        <span style="color: #008800; font-weight: bold">return</span> <span style="color: #007020">False</span>
    <span style="color: #008800; font-weight: bold">return</span> <span style="color: #007020">True</span>      
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">_test_viabilite</span>(<span style="color: #007020">self</span>, rive):
    <span style="color: #008800; font-weight: bold">if</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>_nombre(<span style="background-color: #fff0f0">'humain'</span>, rive) <span style="color: #333333">&gt;</span> <span style="color: #0000DD; font-weight: bold">0</span>:
      <span style="color: #008800; font-weight: bold">return</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>_nombre(<span style="background-color: #fff0f0">'orque'</span>, rive) <span style="color: #333333">&lt;=</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>_nombre(<span style="background-color: #fff0f0">'humain'</span>, rive)
    <span style="color: #008800; font-weight: bold">else</span>:
      <span style="color: #008800; font-weight: bold">return</span> <span style="color: #007020">True</span>  
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">_a_gagne</span>(<span style="color: #007020">self</span>):
    <span style="color: #008800; font-weight: bold">return</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>_nombre(<span style="background-color: #fff0f0">'humain'</span>, <span style="color: #007020">self</span><span style="color: #333333">.</span>rive_gauche) <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">3</span>
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">_transfert_vers</span>(<span style="color: #007020">self</span>, rive1, rive2, equipage):
    <span style="color: #008800; font-weight: bold">for</span> membre <span style="color: #000000; font-weight: bold">in</span> equipage:
      <span style="color: #008800; font-weight: bold">try</span>:
        rive1<span style="color: #333333">.</span>remove(membre)
        rive2<span style="color: #333333">.</span>append(membre)
      <span style="color: #008800; font-weight: bold">except</span>:
        <span style="color: #008800; font-weight: bold">pass</span>
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">traverse_vers</span>(<span style="color: #007020">self</span>, rive1, rive2, equipage):
    copie_rive1 <span style="color: #333333">=</span> copy(rive1)
    copie_rive2 <span style="color: #333333">=</span> copy(rive2)
    <span style="color: #007020">self</span><span style="color: #333333">.</span>_transfert_vers(copie_rive1, copie_rive2, equipage)
    <span style="color: #008800; font-weight: bold">if</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>_test_viabilite(copie_rive1) <span style="color: #000000; font-weight: bold">and</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>_test_viabilite(copie_rive2):
      <span style="color: #007020">self</span><span style="color: #333333">.</span>_transfert_vers(rive1, rive2, equipage)  
      <span style="color: #008800; font-weight: bold">if</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>barge <span style="color: #333333">==</span> <span style="background-color: #fff0f0">'gauche'</span>:
        <span style="color: #007020">self</span><span style="color: #333333">.</span>barge <span style="color: #333333">=</span> <span style="background-color: #fff0f0">'droite'</span>
      <span style="color: #008800; font-weight: bold">else</span>:
        <span style="color: #007020">self</span><span style="color: #333333">.</span>barge <span style="color: #333333">=</span> <span style="background-color: #fff0f0">'gauche'</span>
      <span style="color: #007020">self</span><span style="color: #333333">.</span>coups<span style="color: #333333">.</span>append(((<span style="color: #007020">self</span><span style="color: #333333">.</span>barge, equipage), (copy(<span style="color: #007020">self</span><span style="color: #333333">.</span>rive_gauche), copy(<span style="color: #007020">self</span><span style="color: #333333">.</span>rive_droite))))
      <span style="color: #007020">self</span><span style="color: #333333">.</span>_nombre_tentatives <span style="color: #333333">+=</span> <span style="color: #0000DD; font-weight: bold">1</span>  
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">strategie</span>(<span style="color: #007020">self</span>):
    <span style="color: #008800; font-weight: bold">if</span> random<span style="color: #333333">.</span>choice([<span style="color: #0000DD; font-weight: bold">1</span>, <span style="color: #0000DD; font-weight: bold">2</span>]) <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">1</span>:
      equipage <span style="color: #333333">=</span> [random<span style="color: #333333">.</span>choice([<span style="background-color: #fff0f0">'humain'</span>, <span style="background-color: #fff0f0">'orque'</span>])]
    <span style="color: #008800; font-weight: bold">else</span>:
      equipage <span style="color: #333333">=</span> [random<span style="color: #333333">.</span>choice([<span style="background-color: #fff0f0">'humain'</span>, <span style="background-color: #fff0f0">'orque'</span>]), random<span style="color: #333333">.</span>choice([<span style="background-color: #fff0f0">'humain'</span>, <span style="background-color: #fff0f0">'orque'</span>])]
    <span style="color: #008800; font-weight: bold">if</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>barge <span style="color: #333333">==</span> <span style="background-color: #fff0f0">'droite'</span>:
      <span style="color: #008800; font-weight: bold">if</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>equipage_disponible(equipage, <span style="color: #007020">self</span><span style="color: #333333">.</span>rive_droite):
        <span style="color: #007020">self</span><span style="color: #333333">.</span>traverse_vers(<span style="color: #007020">self</span><span style="color: #333333">.</span>rive_droite, <span style="color: #007020">self</span><span style="color: #333333">.</span>rive_gauche, equipage)
    <span style="color: #008800; font-weight: bold">else</span>:
      <span style="color: #008800; font-weight: bold">if</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>equipage_disponible(equipage, <span style="color: #007020">self</span><span style="color: #333333">.</span>rive_gauche):
        <span style="color: #007020">self</span><span style="color: #333333">.</span>traverse_vers(<span style="color: #007020">self</span><span style="color: #333333">.</span>rive_gauche, <span style="color: #007020">self</span><span style="color: #333333">.</span>rive_droite, equipage)
 
  <span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">run</span>(<span style="color: #007020">self</span>):
    <span style="color: #007020">self</span><span style="color: #333333">.</span>coups <span style="color: #333333">=</span> [((), ([], [<span style="background-color: #fff0f0">'humain'</span>, <span style="background-color: #fff0f0">'humain'</span>, <span style="background-color: #fff0f0">'humain'</span>, <span style="background-color: #fff0f0">'orque'</span>, <span style="background-color: #fff0f0">'orque'</span>, <span style="background-color: #fff0f0">'orque'</span>]))]
    <span style="color: #008800; font-weight: bold">while</span> <span style="color: #000000; font-weight: bold">not</span>(<span style="color: #007020">self</span><span style="color: #333333">.</span>_a_gagne()) <span style="color: #000000; font-weight: bold">and</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>_nombre_tentatives <span style="color: #333333">&lt;</span> <span style="color: #007020">self</span><span style="color: #333333">.</span>_nombre_tentatives_max:
      <span style="color: #007020">self</span><span style="color: #333333">.</span>strategie()
 
<span style="color: #DD4422">"""Calcul"""</span>
 
random<span style="color: #333333">.</span>seed(<span style="color: #0000DD; font-weight: bold">1</span>)
nombre_tentatives_max <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1000</span>
meilleur_jeu <span style="color: #333333">=</span> JeuDeJose()
meilleur_jeu<span style="color: #333333">.</span>run()
nombre_tentatives <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>
<span style="color: #008800; font-weight: bold">while</span> nombre_tentatives <span style="color: #333333">&lt;</span> nombre_tentatives_max:
  j <span style="color: #333333">=</span> JeuDeJose()
  j<span style="color: #333333">.</span>run()
  <span style="color: #008800; font-weight: bold">if</span> <span style="color: #007020">len</span>(j<span style="color: #333333">.</span>coups) <span style="color: #333333">&lt;</span> <span style="color: #007020">len</span>(meilleur_jeu<span style="color: #333333">.</span>coups):
    meilleur_jeu <span style="color: #333333">=</span> j
  nombre_tentatives <span style="color: #333333">+=</span> <span style="color: #0000DD; font-weight: bold">1</span>
<span style="color: #008800; font-weight: bold">print</span>(meilleur_jeu)
</pre>
                                        </div>
                        </div>
                    </div>

                    <br>
                    <p align="right"><em>
                            <font size="2">lundi 26 octobre 2020</font>
                        </em></p>

                    <hr>


                    <a name="scrollscreens"></a>
                    <h2>Scroll Screens</h2>
                    <p>Un <a href="https://github.com/jeeve/scrollscreens" target="_blank">petit programme Windows</a> maison écrit
                        en
                        Windev 19 pour faire défiler une image sur autant d'écrans que l'on veut. Pour cela il
                        suffit de
                        copier le programme dans un dossier partagé et lancer l'exécutable depuis les différents
                        postes
                        dans l'ordre où l'on souhaite voir défiler l'image. Enjoy !<br>
                    </p>
                    <br>
                    <div class="row">

                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                                <a href="images/easyscreens.gif" target="blank">
                                    <img alt="Scroll Screens" title="Scroll Screens" src="images/easyscreens.gif"
                                        class="img-responsive ombre-image" />
                                </a>
                            </p>
                            <p class="legende"><a href="appli/scrollscreens.zip" target="_blank">scrollscreens.zip</a>
                            </p>
                            </a>
                        </div>
                    </div>

                    <p align="right"><em>
                            <font size="2">vendredi 3 janvier 2020</font>
                        </em></p>

                    <hr>

                    <a name="angular"></a>
                    <h2>Angular</h2>
                    <p><a href="https://angularjs.org/" target="_blank">AngularJs</a> est un framework javascript
                        pour
                        développer des applications Web, en l'ocurrence des SPA (Single Page Application). Les sites
                        Web
                        conçut avec Angular ne contiennent qu'une seule page.<br>
                        D'ordinaire, un site renvoie au travers du serveur différentes pages HTML en fonction des
                        demandes du client, le navigateur. Avec Angular, la démarche est différente, la page fournit
                        par
                        le serveur contient déjà la logique du site. Le rôle du serveur se limite alors à fournir
                        les
                        données à l'application chargée dans le navigateur.<br>
                        Cette technologie est devenue possible depuis l'optimisation des moteurs d'exécution
                        javascript
                        dans les navigateurs. Dans une application Angular, c'est donc principalement le client qui
                        travaille.<br>
                        Pour cela, Angular offre un modèle de développement orienté MVC (modèle-vue-contrôleur),
                        c'est à
                        dire que les données, leur affichage et leur traitement sont codées de manière séparés.<br>
                        Avec ces techniques, on peut se rapprocher des applications traditionnelles dites riches, à
                        la
                        différence qu'elle s'exécute dans un navigateur Web et donc à priori partout.<br>
                    </p>
                    <p>
                        Voici un exemple maison qui m'a permis de me faire la main avec cette techno. Cette
                        application
                        présente des radiographies numériques effectuées sur des pièces de fonderie. Les photos de
                        pièces ont été remplacées par des photos quelconques par souci de confidentialité, et pour
                        les
                        mêmes raisons, les radios ont été floutées :<br>
                    </p>
                    <br>
                    <div class="row">

                        <div class="col-xs-12 col-sm-3 fond"></div>
                        <div class="col-xs-12 col-sm-6 fond">
                            <p align="center">
                               
                                    <img alt="Défauthèque" title="Défauthèque" src="images/defautheque.jpg"
                                        class="img-responsive ombre-image" />
                             
                            </p>
                            <p class="legende">Défauthèque</p>
                        </div>
                    </div>

                    <br>
                    <p>
                        Le code source est disponible sur <a href="https://github.com/jeeve/defautheque"
                            target="_blank">Github</a>
                    </p>
                    <p>
                        Pour cet exemple, afin d'établir la liaison entre l'application cliente AngularJs et la base
                        de
                        données MySql sur le serveur, j'ai utilisé l'api <a
                            href="https://github.com/mevdschee/php-crud-api" target="_blank">php-crud-api</a>.
                        Simple et
                        efficace, je remercie les auteurs.
                        Celle-ci permet de créer un service Web de type REST afin de communiquer avec la base de
                        données. Ainsi la requête GET <a
                            href="http://defautheque.000webhostapp.com/rest/api.php/alliage"
                            target="_blank">api.php/alliage</a> renvoie sous forme de tableau javascript les lignes
                        de
                        la table "alliage" de la base de données.
                    </p>
                    <p align="right"><em>
                            <font size="2">dimanche 12 février 2017</font>
                        </em></p>

                    <hr>

                    <a name="lecteur-audio"></a>
                    <h2>Lecteur audio HTML5</h2>
                    <p>Voici un petit lecteur audio multipistes avec visualisation du spectre. Il fonctionne en
                        HTML5 et
                        comprend les fonctions lecture aléatoire, pause, morceau précédent, suivant, boucle,
                        volume...
                        Bref idéal pour ce site.</p>
                    <br>

                    <div class="row">
                        <div class="col-xs-12 col-sm-3 fond"></div>
                        <div class="col-xs-12 col-sm-6 fond">
                            <p align="center">
                                <a href="http://codepen.io/jeeve/pen/ONeNXz" target="_blank">
                                    <img src="images/lecteur-audio.png" alt="CodePen" title="CodePen"
                                        class="img-responsive ombre-image" />
                                </a>
                            </p>
                            <p class="legende"><a href="http://codepen.io/jeeve/pen/ONeNXz" target="_blank">CodePen</a>
                            </p>

                        </div>
                    </div>

                    <br><br>
                    <p>Je me suis inspiré des travaux de <a
                            href="http://www.9lessons.info/2015/05/custom-audio-player-with-jquery-audio.html"
                            target="_blank">Arun Kumar Sekar</a> pour la partie lecteur, et de <a
                            href="https://github.com/wayou/audio-visualizer-with-controls" target="_blank">Wayou
                            Liu</a>
                        pour l'afficheur spectral.
                        Le lecteur complet est téléchargeable ici : <a href="source/player-audio-visualizer.zip"
                            target="_blank">player-audio-visualizer.zip</a>.</p>

                    <p align="right"><em>
                            <font size="2">dimanche 1er mai 2016</font>
                        </em></p>

                    <hr>


                    <a name="ia"></a>
                    
                    <a name="chatgpt"></a>
                    <h2>ChatGPT</h2>
                    <p>Intelligence artificielle conversationnelle d'OpenAI</p>
                            <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-1 fond"></div>
                        <div class="col-xs-12 col-sm-9 fond">
                            <p align="center">
                            <img src="images/chatgpt.jpg" class="img-responsive ombre-image">
                            </p>
                            <p class="legende">
                                Exemple de conversation avec <a href="https://openai.com/blog/chatgpt/" target="_blank">ChatGPT</a>
                            </p>
                        </div>
                    </div>   
                    <p align="right"><em>
                            <font size="2">vendredi 2 décembre 2022</font>
                        </em></p>
                    <br> 
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                            <div class="embed-responsive embed-responsive-16by9 ombre-image">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6_N_n72so04?rel=0&amp;showinfo=0" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            </p>
                            <p class="legende">
                                Thibault Neveu nous explique les concepts et type d'apprentissage en jeu dans cette intelligence artificielle
                            </p>
                        </div>
                    </div>
                    
                    <a name="tensorflow"></a>
                    <h2>TensorFlow, le deep learning à portée de main</h2>
                    <p>Une vidéo très instructive pour appréhender l'apprentissage automatique à travers l'outil
                        dédié
                        <a target="_blank" href="https://www.tensorflow.org/">TensorFlow</a>. Le code source est
                        ouvert,
                        interfaçable en langage Python. A vos claviers !
                    </p>
                    <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 fond"></div>
                        <div class="col-xs-12 col-sm-8 fond">
                            <p align="center">
                            <div class="embed-responsive embed-responsive-16by9 ombre-image">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/BtAVBeLuigI?rel=0&amp;showinfo=0" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            </p>
                            <p class="legende">
                                Tensorflow et l'apprentissage profond, sans les équations différentielles (Martin
                                Görner)
                            </p>
                        </div>
                    </div>

                    <p align="right"><em>
                            <font size="2">vendredi 29 juin 2018</font>
                        </em></p>
                    <br>

                    <h2>DeepMind récidive</h2>
                    <p>Le 5 décembre 2017, l'équipe de <a target="_blank"
                            href="https://fr.wikipedia.org/wiki/DeepMind">DeepMind</a> publie un <a target="_blank"
                            href="alphazero.pdf">article</a> dans laquelle elle explique avoir créé une intelligence
                        artificielle capable de battre le meilleur programme de jeu d'échecs actuel.
                        Son nom, AlphaZero. La particularité, les règles du jeux définies, la machine a appris à
                        jouer
                        toute seule contre elle-même en s'améliorant au fil des parties.</p>
                    <p align="right"><em>
                            <font size="2">décembre 2017</font>
                        </em></p>
                    <br>

                    <h2>Intelligence artificielle, une nouvelle étape ?</h2><a target="_blank"
                        href="https://fr.wikipedia.org/wiki/Go_(jeu)"><img class="ombre-image image-dans-texte"
                            alt="Le jeu de Go" title="Le jeu de Go" src="images/go.jpg" height="129" align="right"
                            border="0" width="130"></a></p>
                    <p>En octobre 2015, AlphaGo conçut par la société DeepMind fait le "<a target="_blank"
                            href="https://youtu.be/P6eBraOUBLw">buzz</a>" en devenant le premier logiciel d'IA
                        à gagner au jeu de Go contre un joueur professionnel. Pourtant ce jeu nécessite
                        d'autres facultés que la "simple" exploration des combinaisons de solutions.<br>
                        <br>
                        Pour ce faire, le programme utilise la
                        <a target="_blank" href="https://fr.wikipedia.org/wiki/Méthode_de_Monte-Carlo">
                            méthode de Monte-Carlo</a> (méthode probabiliste, utilisée notamment pour les
                        recherches sur la fabrication de la bombe atomique) et
                        <a target="_blank" href="https://youtu.be/RgUcQceqC_Y">deux réseaux
                            de neurones profonds</a>. Ces derniers sont une avancée technologique majeure car ils
                        permettent la modélisation de données abstraites et la faculté d'auto apprentissage.<br>
                        <br>
                        Le domaine de l'IA est de ce fait en plein essor. La reconnaissance vocale,
                        faciale, les prédictions financières sont autant de domaines qui motivent la
                        recherche sur ces nouvelles technologies. L'évolution est telle que le célèbre
                        physicien
                        <a target="_blank" href="https://fr.wikipedia.org/wiki/Stephen_Hawking">Stephen Hawking</a>
                        s'inquiète : « <em>L'intelligence artificielle pourrait
                            mettre fin à l'humanité</em>&nbsp;».<br>
                        <br>
                        Pour ma part, en tant que passionné d'informatique, de nouveaux territoires à
                        explorer... Le robot Atlas de Boston Dynamics préfigure peut-être cette
                        révolution :
                    </p><br>
                    <p>

                    <div class="row">
                        <div class="col-xs-12 col-sm-3"></div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="embed-responsive embed-responsive-16by9 ombre-image">
                                <iframe src="https://player.vimeo.com/video/156691002?alt="
                                    title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=" mozallowfullscreen="
                                    allowfullscreen=" frameborder=" 0" height="168" width="300"
                                    class="embed-responsive-item"></iframe>
                            </div>
                        </div>
                    </div>

                    </p>
                    <p align="right"><em>
                            <font size="2">samedi 27 février 2016</font>
                        </em></p>

                    <hr>

                    <a name="scheme"></a>
                    <h2>Découverte au <em>Monde en Tique</em></h2>
                    <p>C'est en arpentant cette rue improbable de la capitale que je découvrais le
                        <em>Monde en Tique</em>, petite librairie informatique où j'allais sans le savoir
                        rencontrer la passion. Je ne suis pas particulièrement croyant, mais est-ce
                        l'atmosphère quasi spirituelle du lieu, ce que je découvris ici allait
                        m'élever dans la quête d'absolu. Feuilletant un livre de programmation je lu ceci :<br>
                    </p>
                    <br>
                    <div class="row row-cadre">
                        <div class="col-sd-12 col-sm-2"></div>
                        <div class="col-sd-12 col-sm-8 fond-table encadrement-table">
                            <p class="font-code">(require srfi/41)<br>
                                <br>
                                (define (flot-nb-entiers-a-partir-de n)<br>
                                &nbsp;&nbsp;&nbsp;(stream-cons n (flot-nb-entiers-a-partir-de (+ n 1))))<br>
                                <br>
                                (define (non-divisible-par? k)<br>
                                &nbsp;&nbsp;&nbsp;(lambda (n) (not (zero? (remainder n k)))))<br>
                                <br>
                                (define (crible flot)<br>
                                &nbsp;&nbsp;&nbsp;(stream-cons (stream-car flot)<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(crible (stream-filter
                                (non-divisible-par? (stream-car flot))<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(stream-cdr flot)))))<br>
                                <br>
                                (define flot-nb-premiers (crible (flot-nb-entiers-a-partir-de 2)))<br>
                                <br>
                                (stream-&gt;list 5000 flot-nb-premiers)
                            </p>
                        </div>
                    </div>
                    <p><br>
                        Après enquête, il s'avère que cette
                        langue mystérieuse s'appelle <a href="http://fr.wikipedia.org/wiki/Scheme"
                            target="_blank">Scheme</a>,
                        un dialecte de Lisp. Ce passage où fleurissent parenthèses et autres
                        curiosités syntaxiques pourrait s'écrire en français :<br>
                    </p>
<br>
                    <div class="row row-cadre">
                        <div class="col-sd-12 col-sm-2"></div>
                        <div class="col-sd-12 col-sm-8 fond-table encadrement-table">
                            <p class="font-code">
                                en
                                utilisant la librairie des listes infinies (flots)<br><br>
                                definir
                                flot-nb-entiers-a-partir-de n comme l'association de n avec
                                flot-nb-entiers-a-partir-de
                                n+1<br><br>
                                definir le predicat non-divisible-par?<br><br>
                                definir la fonction crible qui
                                construit un flot constitue de chacun de ces entiers restant apres
                                avoir supprime les multiples des entiers inferieurs<br><br>
                                on obtient le flot des nombres premiers
                                en partant de n &gt;= 2<br><br>
                                on affiche les 5000 premiers nombres premiers
                            </p>
                        </div>
                    </div>
                    <p><br>
                        C'est en fait une traduction du crible d'<a href="http://fr.wikipedia.org/wiki/Eratosthene"
                            target="_blank">Eratosthène</a>
                        pour énumérer les nombres premiers.
                        Vous vous demandez peut-être ce qui a pu retenir mon attention. Si vous vous
                        penchez sur la ligne :</p>
                    <p align="center">"définir flot-nb-entiers-a-partir-de
                        n comme l'association de n avec
                        flot-nb-entiers-a-partir-de n+1"&nbsp;</p>
                    <p>Vous entreverrez peut-être une fenêtre
                        sur l'infini.&nbsp;</p>
                    <p>Quand je suis sorti, la lumière d'une
                        fin d'hiver se faufilait dans la rue <a
                            href="http://maps.google.fr/?ie=UTF8&amp;ll=48.850774,2.349991&amp;spn=0.003353,0.006909&amp;t=h&amp;z=17"
                            target="_blank"> Maître
                            Albert</a>, pourtant étroite. J'ai voulu
                        crier ma découverte, la proférer aux âmes errantes de la capitale. Les mots se sont
                        tus à peine
                        germés, les passants de ce samedi ne semblant pas particulièrement réceptifs.
                        Il y a des joies solitaires, celle-ci m'éclaire, une question me vient : et
                        si notre créateur parlait Scheme ? Aurait-t-il préparé ce qu'il allait
                        advenir à l'univers dans des petits carnets
                        griffonnés de parenthèses et de fonctions récursives ?</p>
                    <p>Depuis ce jour, ma bibliothèque se
                        peuple de traités sur la programmation fonctionnelle, la récursivité, la logique
                        propositionnelle.&nbsp; Cette langue est d'une pureté, d'une élégance et d'une puissance
                        qui dépasse de loin ce que ma culture impérative me laissait imaginer. Où va-t-elle
                        maintenant
                        m'emmener
                        ?</p>
                    <p>Je remercie les créateurs <a href="http://fr.wikipedia.org/wiki/Gerald_Jay_Sussman" alt=" title="
                            Gerald Jay Sussman" target="_blank">Gerald
                            Jay Sussman</a> et <a href="http://fr.wikipedia.org/wiki/Guy_Lewis_Steele,_Jr."
                            alt=" title=" Guy Lewis Steele, Jr." target="_blank">Guy
                            L. Steele</a> pour m'inviter à prendre le large à bord de leur bateau étrange.
                        Le pavillon est hissé, le symbole <a href="http://fr.wikipedia.org/wiki/Lambda-calcul"
                            target="_blank">lambda</a> flotte dans le vent.&nbsp;Que
                        vogue notre imagination en quête de paysages symboliques exotiques.&nbsp;L'horizon
                        reste à inventer.<span class="hidden-xs"> Dans mon carnet de voyage, à la première page,
                            j'ai
                            recopié ce poème de Shriram Krishnamurthi :</span></p>
                            <br>

                    <div class="hidden-xs row">
                        <div class="col-sd-12 col-sm-1 col-lg-2"></div>
                        <div class="col-sd-12 col-sm-10 col-lg-8">
                            <p class="font-code">
                            <pre bgcolor="#F6F6F6" style="font-size:85%"><em>                           ((I m a g i n e)
                         (shriram@cs.rice.edu)
                   (((Imagine there's no FORTRAN)
                       (It's easy if you try)
               (No SML below us) (Above us only Y)
              (Imagine all              the people)
             (Living for                their Chez))
          ((Imagine there's          no memory leaks)
                                 (It isn't hard to do)
                                  (Nothing to malloc(3)
                                        or free(3) for)
                                   (And no (void *) too)
                                 (Imagine all the people)
                                  (Living in parentheses))
                               ((You may say I'm a Schemer)
                                 (But I'm not the only one)
                             (I hope someday you'll join us)
                                   (And the world will be as
                            (lambda (f) (lambda (x) (f x)))))
                              ((Imagine those   continuations)
                             (I wonder              if you can)
                       (No need for              C or pointers)
                   (A brotherhood                        of Dan)
                    (Imagine all                      the people)
                    (GCing all                          the world))
               ((You may say                          I'm a Schemer)
              (But I'm not                              the only one)
         (I hope someday                                you'll join us)
        (And the world                                        will be as
    (lambda (f)                                     (lambda (x) (f x)))))))

'shriram</em></pre>
                            </p>
                        </div>
                    </div>


                    <p><br>
                        <a name="hop"></a><strong>Île en vue</strong>
                    </p>
                    <p>Après plusieurs mois de navigation au large, porté par un souffle nouveau,
                        grisé par l'ivresse de la découverte, j'aperçu une île. Situé dans l'océan
                        Informatique, l'archipel des Achetehemelles est immense. On ne cesse de recenser
                        de nouveaux sites, autant d'îlots de données à explorer. Je m'apprêtais donc
                        à accoster, émerveillé par les couleurs du lagon, l'atmosphère
                        paradisiaque de ce petit bout de terre et intrigué par ce panneau érigé sur
                        la plage <a href="http://hop.inria.fr/" target="_blank"><img src="images/hop.png" alt="HOP"
                                title="HOP" height="48" border="0" width="48"></a>. Cette île s'appelle
                        <a target="_blank" href="http://hop.inria.fr/#home-notepad=np:2">Hop</a>. Elle est peuplée
                        d'une poignée de chercheurs s'intéressant à la programmation diffuse. Et oui,
                        on est bien loin du continent désormais. Lorsque j'amarrai le bateau, je fus
                        surpris par la taille du port en proportion de la faible superficie de l'île.
                        J'appris plus tard le rôle majeur que constituait les communications au sein
                        des systèmes diffus. Aussi, les voyageurs qui transitent dans cette région
                        parlent tous un dialecte du Scheme, appelé Hop comme cette île. Les premiers
                        mots que j'appris pour dire bonjour :&nbsp;
                    </p>
                    <br>
                    <div class="row row-cadre">
                        <div class="col-sd-12 col-sm-2"></div>
                        <div class="col-sd-12 col-sm-8 fond-table encadrement-table">
                            <p class="font-code">
                                (define-service (hello/world)<br>
                                &nbsp; (&lt;HTML&gt;<br>
                                &nbsp;&nbsp;&nbsp; (&lt;BODY&gt;<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "Hello World!")))<br>
                                <br>
                                (define (say-hello)<br>
                                &nbsp; (&lt;HTML&gt;<br>
                                &nbsp;&nbsp;&nbsp; (&lt;BODY&gt;<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (&lt;A&gt; :href "/hop/hello/world" "click
                                me"))))<br>
                                <br>
                                (define-service (hello)<br>
                                &nbsp; (say-hello))<br>
                                <br>
                                (say-hello)
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>Voici les explications dispensées par une des plus éminentes personnalités insulaire
                        :</p>
                        <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3"></div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="embed-responsive embed-responsive-4by3 ombre-image">
                                <iframe src="https://player.vimeo.com/video/10468909?alt="
                                    title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=" mozallowfullscreen="
                                    allowfullscreen=" frameborder=" 0" height="240" width="320"
                                    class="embed-responsive-item"></iframe>
                            </div>
                        </div>
                    </div>
                    <br>

                    <p align="left"><strong>Expériences</strong></p>
                    <p align="left">Intrigué par les possibilités de ce nouveau langage et
                        surtout son approche originale de la programmation web, je fus bien sur tenté
                        par quelques <a href="hop.php">expérimentations</a>...</p><br>
                    <p align="left">
                        <a name="wescheme"></a><strong>Dans les nuages</strong>
                    </p>
                    <p align="left">En levant les yeux vers le ciel, je
                        découvrais bientôt une autre implémentation de Scheme pour le web.
                        WeScheme s'exécute
                        quelque part dans les nuages (les spécialistes parlent de cloud computing).
                        Impossible de résister à un
                        <a href="wescheme.php">premier vol</a>.
                    </p>
                    <p align="left">
                        <span class="hidden-xs"><a name="racket"></a>De retour
                            sur terre, je vous invite dans l<a href="racket.php">'espace lambda
                                <img src="images/plt-logo-red-diffuse.png" height="48" border="0" width="48"></a>&nbsp;
                            où
                            je m'amuse à concocter des programmes en langage Racket, dialecte de
                            Scheme, implémentation pour le moins géniale.<br></span>
                        &nbsp;
                    </p>

                    <div id="swipe">
                        <div class="row">
                            <div class="col-xs-2">
                                <p><a id="page-precedente" href="../reflexions/reflexions.php">?!?</a></p>
                            </div>
                            <div class="col-xs-10">
                                <p align="right"><a id="page-suivante" href="hop.php">hop</a> - <a
                                        href="wescheme.php">wescheme</a> - <span class="hidden-xs"><a
                                            href="racket.php">racket</a> - </span><a
                                        href="../science/science.php">e^(i.pi)+1=0</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="numero-page">page 20</p>

                        </div>
                    </div>


                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
    </div>
    <!--/.page-container-->
    <?php include("../includes/footer.php"); ?>
    <script type="text/javascript" src="js/traduction.js"></script>
    <script type="text/javascript" src="js/image-reconnaissance.js"></script>
</body>

</html>
