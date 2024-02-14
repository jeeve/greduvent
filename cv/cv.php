<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Jean-Valéry JULIEN</title>
    <?php include("./includes/header.php"); ?>
    <link href="css/cv.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d3ea7d43a4.js" crossorigin="anonymous"></script>
    <style>
    .histo img {
        margin: 10px;
    }

    .loader-container {
        position: relative;
        height: 50px;
    }

    .loader {
        widht: 50px;
        height: 50px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
    </style>
</head>

<body>
    <header>
        <img src="images/bandeau.jpg">
    </header>
    <div class="page-container">
        <!-- top navbar -->
        <?php include("includes/navbar.php"); ?>
        <div class="container">
            <!-- main area -->
            <div class="col-xs-12 col-sm-12 col-md-12 fond">
                <a name="home"></a>
                <!--<h1 class="hidden-xs">Curriculum vitæ</h1>-->
                <div class="row">
                    <div class="col-xs-11 col-md-4 fond-table encadrement-table encadre">
                        <div>
                            <img class="photo" src="images/jvj.png" />
                            <div class="nom">Jean-Valéry</div>
                            <div class="nom">JULIEN</div>
                        </div>
                        <div class="section-perso">
                            <h3><strong>Développeur informatique</strong></h3>
                            <p>Date de naissance : 1972 (<?php
// Définissez votre date de naissance en tant que variable
$date_naissance = "1972-11-28";
$date_naissance = DateTime::createFromFormat('Y-m-d', $date_naissance);

// Obtenez la date actuelle
$date_actuelle = new DateTime();

// Calculez l'âge
$age = $date_actuelle->diff($date_naissance)->y;

// Afficher l'âge
echo $age;
?> ans)</p>
                            <p>Gentilly (94)</p>
                            <!--<p><a target="-blank" class="mail"
                                    href="https://docs.google.com/forms/d/e/1FAIpQLSeqrcDEWlgXWPVxr-wBuH7s0XvJSQLcMwyXES9m16BSrsYU-g/viewform?usp=pp_url">contact</a>
                            </p>-->
                            <p><a target="-blank"
                                    href="mailto:jeanvalery.julien@gmail.com"><i class="fa-solid fa-envelope"></i>jeanvalery.julien@gmail.com</a>
                            </p>
                            <p><i class="fa-solid fa-phone"></i>06 18 96 19 96
                            </p>
                            <br>
                            <p class="soft-skills">
                            Curiosité, créativité, qualités relationnelles, ouverture d'esprit, capacité d’adaptation 
                            </p>
                            <!--
                            <p>Passionné d'informatique et en particulier par le développement logiciel, j'aime
                                participer à la création d'outils numériques.
                            </p>
                            <p>
                                Ecouter le besoin des utilisateurs, répondre avec les technologies modernes,
                                leur
                                porter
                                assistance sont une autre source de motivation.
                            </p>-->
                            <!--
                            <p class="justifie">Développeur informatique depuis tout jeune, c'est pour moi avant tout un
                                moyen d'exprimer la créativité. Le
                                domaine est vaste et une multitude de technologies émergent et évoluent en permanence.
                                
                                Parmi celles-ci, le Web et en particulier la partie "front-end" concentre mon intérêt.
                                
                                Je m'investis actuellement plus particulièrement dans le framework <strong>Angular</strong>.
                                L'informatique est pour moi une aventure au long cours, source intarissable de
                                curiosité et de passion.</p>

                --> 
                        </div>
                    </div>
                    <div class="col-md-1 fond"></div>
                    <div class="col-xs-12 col-md-6 fond">
                        <h2>Compétences
                        </h2>
                        <div id="item-div-competences" class="section" data-section="competences">
                            <ul>
                                <li>
                                    <h3>Développement logiciel</h3>
                                </li>
                                <li>
                                    <h3>Programmation orientée objet et fonctionnelle</h3>
                                </li>
                                <li>
                                    <h3>Applications Windows, Web, HTML 5, Services Web</h3>
                                </li>
                                <li>
                                    <h3>Langages : Typescript, Java, Python, C#, Php, Delphi...</h3>
                                </li>
                                <li>
                                    <h3><strong>Angular</strong> (<a href="?go=realisationspersonnelles">exemple</a>), Spring,
                                        .NET, SharePoint, Wordpress</h3>
                                </li>
                                <li>
                                    <h3>Windev, Webdev</h3>
                                </li>
                                <!--
                                <li>
                                    <h3>Gestionnaire de sources GIT</h3>
                                </li>
                                -->
                                <br>
                                <li>
                                    <h3>Anglais lu et écrit</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 fond">
                        <a name="experience"></a>
                        <h2 class="experience" data-section="experience">Expérience
                            professionnelle
                        </h2>
                        <div id="item-div-experience" class="section" data-section="experience">
                            <ul>
                            <li>
                                    <h3><strong>CETIM</strong> - <strong>Ce</strong>ntre <strong>T</strong>echnique
                                        des
                                        <strong>I</strong>ndustries
                                         <strong>M</strong>écaniques - Sèvres (92)
                                    </h3>
                                    <h4 class="italique">Développeur informatique, d'avril 2023 à aujourd'hui</h4>

                                    <ul class="realisation">
                                        <li>


                                        <div class="cliquable" data-section="saisie-temps">
                                                <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                                <h4>
                                                Réalisation en cours d'un projet saisie de temps avec
                                                    <strong>Angular</strong>
                                                </h4>
                                            </div>
                                            <div id="item-div-saisie-temps" class="section" data-section="saisie-temps"
                                                style="display:none">
                                                <ul class="internet">
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/saisie-temps.png" />
                                                           
                                                        <div class="legende">
                                                            Prototype d'écran de saisie (Angular Material)
                                                        </div>
                                                      
                                                    </li>
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/code-saisie-temps.png" />
                                                       
                                                        <div class="legende">
                                                            Projet Angular 15
                                            
                                                        </div>
                                                      
                                                    </li>
                                                </ul>
                                            </div>                                        
                                         
                                        </li>  

                                        <li>

                                        <div class="cliquable" data-section="num-dossiers">
                                                <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                                <h4>
                                                    Création
                                                    d'applications avec
                                                    <strong>Spring / Hibernate / Thymeleaf</strong>
                                                </h4>
                                            </div>
                                            <div id="item-div-num-dossiers" class="section" data-section="num-dossiers"
                                                style="display:none">
                                                <ul class="internet">
                                                <!--
                                                <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/aqf.png" />
                                                       
                                                        <div class="legende">
                                                            Gestion des actions qualité fournisseur (AQF)
                                            
                                                        </div>
                                                      
                                                    </li>
                                                    -->
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/code-aqf.png" />
                                                       
                                                        <div class="legende">
                                                            Projet Java (Spring Boot)
                                            
                                                        </div>
                                                      
                                                    </li>
                                                    <!--
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/num-dossiers.png" />
                                                         
                                                        <div class="legende">
                                                            Générateur de numéros de dossiers et sous-dossiers
                                                        </div>
                                                     
                                                    </li>
                                                    -->
                                                </ul>
                                            </div>   
                                        </li>        

                                        <li>

                                        <div class="cliquable" data-section="ocr">
                                                <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                                <h4>Développement de notebooks <strong>Python</strong> dans le cadre de l'analyse de données industrielles (traitement fichiers csv, OCR...)</h4>
                                            </div>
                                            <div id="item-div-ocr" class="section" data-section="ocr"
                                                style="display:none">
                                                <ul class="internet">
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/ocr.png" />
                                                            <!--
                                                        <div class="legende">
                                                            Services Web Soap
                                                            <div class="sous-legende">Visual Studio
                                                            </div>
                                                        </div>
                                                        -->
                                                    </li>
                                                </ul>
                                            </div> 
                                            
                                        </li> 
                                    </ul>   
                            </li>                                
                                    <li>
                                    <h3><strong>CTIF</strong> - <strong>C</strong>entre <strong>T</strong>echnique
                                        des
                                        <strong>I</strong>ndustries
                                        de la <strong>F</strong>onderie - Sèvres (92)
                                    </h3>
                                    <h4 class="italique">Développeur informatique, de septembre 1997 à avril 2023</h4>
                                    <ul class="realisation">
                                        <li>
                                            <div class="cliquable" data-section="wordpress">
                                                <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                                <h4>
                                                    Création
                                                    de sites internet avec
                                                    <strong>WordPress</strong>
                                                </h4>
                                            </div>
                                            <div id="item-div-wordpress" class="section" data-section="wordpress"
                                                style="display:none">
                                                <ul class="internet">
                                                    <li>
                                                        <a href="https://metalblog.ctif.com" target="_blank">
                                                            <img class="img-responsive ombre-image"
                                                                src="images/metalblog.png" />
                                                        </a>
                                                        <div class="legende">
                                                            <a class="external" href="https://metalblog.ctif.com"
                                                                target="_blank">MetalBlog</a>
                                                            <div class="sous-legende">Wordpress multi-sites avec
                                                                Thème
                                                                personnalisé
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        
                                                            <img class="img-responsive ombre-image"
                                                                src="images/formation.png" />
                                                       
                                                        <div class="legende">
                                                          
                                                            <div class="sous-legende">Wordpress multi-sites avec
                                                                Content
                                                                Type personnalisés
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cliquable" data-section="service-web">
                                                <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                                <h4>
                                                    Développement de services Web en <strong>C#</strong> sous <strong>ASP.NET</strong>
                                                </h4>
                                            </div>
                                            <div id="item-div-service-web" class="section" data-section="service-web"
                                                style="display:none">
                                                <ul class="service-web">
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/servicesweb.png" />
                                                        <div class="legende">
                                                            Services Web Soap
                                                            <div class="sous-legende">Visual Studio
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cliquable" data-section="sharepoint">
                                                <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                                <h4>
                                                    Mise en
                                                    place d'un portail
                                                    intranet sous <strong>SharePoint</strong>
                                                </h4>
                                            </div>
                                            <div id="item-div-sharepoint" class="section" data-section="sharepoint"
                                                style="display:none">
                                                <ul class="intranet">
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/sharepoint.png" />
                                                        <div class="legende">Page Intranet des formulaires de
                                                            l'entreprise
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/powerautomate.png" />
                                                        <div class="legende">Exemple de flux PowerAutomate
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cliquable" data-section="windev">
                                                <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                                <h4>
                                                    Développement d'interfaces entre
                                                    progiciels avec <strong>Windev</strong>
                                                </h4>
                                            </div>
                                            <div id="item-div-windev" class="section" data-section="windev"
                                                style="display:none">
                                                <ul class="windev">
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/windev.png" />
                                                        <div class="legende">
                                                            Exemple d'interface entre un ERP et un
                                                            LIMS
                                                            <div class="sous-legende">Les données transitent via
                                                                services
                                                                web
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cliquable" data-section="webdev">
                                                <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                                <h4>
                                                    Développements
                                                    <strong>Webdev</strong>
                                                </h4>
                                            </div>
                                            <div id="item-div-webdev" class="section" data-section="webdev"
                                                style="display:none">
                                                <ul class="webdev">
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/webdev-dev.png" />
                                                        <div class="legende">
                                                            Exemple de formulaire de réservation de
                                                            véhicules
                                                            <div class="sous-legende">Ce formulaire utilise un
                                                                service
                                                                web
                                                                de réservation écrit en c#
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <img class="img-responsive ombre-image taille-double"
                                                            src="images/webdev-ana.png" />
                                                        <div class="legende">
                                                            Logiciel de gestion de la qualité
                                                            <div class="sous-legende">Base de données sur SQL Server
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cliquable" data-section="delphi">
                                                <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                                <h4>
                                                    Développement d'applications
                                                    métier
                                                    sous Windows avec <strong>Delphi</strong>
                                                </h4>
                                            </div>
                                            <div id="item-div-delphi" class="section" data-section="delphi"
                                                style="display:none">
                                                <ul class="windows">
                                                    <li>
                                                        <img class="img-responsive ombre-image"
                                                            src="images/elisa.gif" />
                                                        <div class="legende">Elisa
                                                            <div class="sous-legende">Calcul système d'attaques en
                                                                moulage sable
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <img class="img-responsive ombre-image"
                                                            src="images/optima.gif" />
                                                        <div class="legende">
                                                            Optima
                                                            <div class="sous-legende">Calcul de charge et correction de
                                                                bain
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <img class="img-responsive ombre-image"
                                                            src="images/poids.gif" />
                                                        <div class="legende">
                                                            Poids
                                                            <div class="sous-legende">Calcul poids de pièce
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <img class="img-responsive ombre-image"
                                                            src="images/qualital.png" />
                                                        <div class="legende">
                                                            Qualital
                                                            <div class="sous-legende">Indice de qualité des alliages
                                                                aluminium
                                                            </div>
                                                    </li>
                                                    <li>
                                                        <img class="img-responsive ombre-image"
                                                            src="images/materialis.png" />
                                                        <div class="legende">Materialis
                                                            <div class="sous-legende">Base de données matériaux
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <img class="img-responsive ombre-image"
                                                            src="images/adagio.gif" />
                                                        <div class="legende">Adagio
                                                            <div class="sous-legende">Aide à la conduite de sablerie
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <img class="img-responsive ombre-image"
                                                            src="images/salsa3d.png" />
                                                        <div class="legende">Salsa 3D
                                                            <div class="sous-legende">Conception système de remplissage
                                                                en sous pression</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <h4>Assistance aux utilisateurs</h4>
                                        </li>
                                        <li>
                                            <h4>Maintenance des postes de travail</h4>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h3><strong>Service militaire</strong> à l’Etablissement d’Impression de
                                        Château-Chinon
                                    </h3>
                                    <p>08/1996 - 05/1997</p>
                                    <ul class="realisation">
                                        <li>
                                            <h4>Développement d’un fichier informatique pour gérer
                                                l’approvisionnement
                                            </h4>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h3>Stage au <strong>Laboratoire d’Informatique</strong> du Havre</h3>
                                    <p>06/1995 - 08/1995</p>
                                    <ul class="realisation">
                                        <li>
                                            <h4>Conception d’algorithmes (langage C++) pour architectures parallèles
                                            </h4>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h3><strong>Manutentionnaire</strong> au sein de la société des Transports
                                        Urbains
                                        Blaisois</h3>
                                    <p>août 1994</p>
                                </li>
                                <li>
                                    <h3>Stage industriel au <strong>Laboratoire de Biophysique Médicale</strong> de
                                        Tours
                                    </h3>
                                    <p>04/1994 - 06/1994</p>
                                    <ul class="realisation">
                                        <li>
                                            <h4>Réalisation d’une interface utilisateur pour un instrument médical
                                                (langage
                                                Pascal avec objets Turbo Vision)</h4>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h3><strong>Agent de service</strong> à la colonie de vacances MGET de Lourdes
                                    </h3>
                                    <p>août 1993</p>
                                </li>
                                <li>
                                    <h3>Stage industriel dans la <strong>Société VERMON (ultrasons)</strong> de
                                        Tours
                                    </h3>
                                    <p>04/1993 - 06/1993</p>
                                    <ul class="realisation">
                                        <li>
                                            <h4>Réalisation d’une unité centrale à micro-contrôleur</h4>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 fond">
                        <a name="formation"></a>
                        <h2 data-section="formation">Formation
                        </h2>
                        <div id="item-div-formation" class="section" data-section="formation">
                            <ul>
                            <li>
                                    <div class="cliquable" data-section="formation-professionnelle">
                                        <h3>
                                            <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                            <strong>Formations durant mon parcours professionnel</strong>
                                        </h3>
                                    </div>
                                    <div id="item-div-formationsprofessionnelles" class="section"
                                        data-section="formation-professionnelle" style="display:none">
                                        <ul>
                                        <li>
                                            <h3>Développer une application <strong>Java</strong> full stack avec les Frameworks <strong>Spring</strong>, <strong>JPA/Hibernate</strong> et <strong>Angular</strong>
                                            </h3>
                                                <p>Ib Cegos - 18/09/2023 au 21/09/2023</p>
                                            </li>
                                            <li>
                                                <h3><strong>PowerPlatform</strong> -
                                                    PL-100-Microsoft-Power-Platform-App-Maker
                                                </h3>
                                                <p>Ekilog - 31/01/2022 au 1/02/2022</p>
                                            </li>
                                            <li>
                                                <h3><strong>Microsoft 365</strong> - Exploiter les outils collaboratifs
                                                    en
                                                    ligne
                                                </h3>
                                                <p>Cegos - 2/09/2021 au 3/09/2021</p>
                                            </li>
                                            <li>
                                                <h3><strong>Python</strong> pour la <strong>data
                                                        science</strong>
                                                </h3>
                                                <p>Stat4Decision - 8/03/2021 au 10/03/2021</p>
                                            </li>
                                            <li>
                                                <h3><strong>WordPress</strong> développeur</h3>
                                                <p>PLB - 7/11/2018 au 9/11/2018</p>
                                            </li>
                                            <li>
                                                <h3><strong>WordPress</strong> développeur</h3>
                                                <p>PLB - 25/06/2015 au 27/06/2015</p>
                                            </li>
                                            <li>
                                                <h3><strong>Webdev</strong> pour Développeurs Windev</h3>
                                                <p>PC Soft - 1/06/2015 au 2/06/2015 2015</p>
                                            </li>
                                            <li>
                                                <h3>Personnaliser un site <strong>SharePoint</strong> 2010 avec
                                                    SharePoint
                                                    Designer
                                                    2010
                                                </h3>
                                                <p>IB - 4/04/2013 au 5/04/2013</p>
                                            </li>
                                            <li>
                                                <h3><strong>SharePoint</strong> 2010, Maitriser SharePoint server 2010
                                                </h3>
                                                <p>PLB - 26/03/2012 au 30/03/2012</p>
                                            </li>
                                            <li>
                                                <h3><strong>Windev</strong> Perfectionnement</h3>
                                                <p>PC Soft - 17/02/2010 au 19/02/2010</p>
                                            </li>
                                            <li>
                                                <h3><strong>Windev</strong> Prise en main</h3>
                                                <p>PC Soft - 15/02/2010 au 16/02/2010</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="cliquable" data-section="formation-academique">
                                        <h3>
                                            <i class="fa-solid fa-angle-up fa-rotate-180"></i>
                                            <strong>Formations
                                                académiques</strong>
                                        </h3>
                                    </div>
                                    <div id="item-div-formationsacademiques" class="section"
                                        data-section="formation-academique">
                                        <ul>
                                            <!--
                                            <li>
                                                <h3><strong>IUP Génie Informatique</strong> 2ème année</h3>
                                                <p>IUP Informatique - La Rochelle (17)</p>
                                                <p>1995 - 1996</p>
                                            </li>
                                            -->
                                            <li>
                                                <h3>Obtention du <strong>DUT Informatique</strong> Année Spéciale au
                                                    Havre
                                                </h3>
                                                <p>IUT Informatique - Le Havre (76)</p>
                                                <p>1994 - 1995</p>
                                            </li>
                                            <li>
                                                <h3>Obtention du <strong>DUT Génie Electrique et Informatique
                                                        Industrielle</strong>
                                                </h3>
                                                <p>IUT Génie Electrique et Informatique Industrielle - Tours (37)</p>
                                                <p>1991 - 1994</p>
                                            </li>
                                            <li>
                                                <h3>Obtention du <strong>Bac E</strong> (Mathématiques et Techniques)
                                                </h3>
                                                <p>Lycée Augustin Thierry - Blois (41) - académie Orléans-Tours</p>
                                                <p>1991</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 fond">
                        <a name="divers"></a>
                        <h2 data-section="divers">à propos
                        </h2>
                        <div id="item-div-divers" class="section" data-section="divers">
                            <br>
                            <!-- <ul>
                           <li>
                               <h3>sérieux et organisé</h3>
                           </li>
                           <li>
                               <h3>autonome</h3>
                           </li>
                           <li>
                               <h3>faculté d'adaptation et polyvalence</h3>
                           </li>
                           <li>
                               <h3>expérience dans de nombreuses technologies</h3>
                           </li>
                           <li>
                               <h3>curieux, passionné, aime échanger</h3>
                           </li>
                           <li>
                               <h3>pas le plus efficace en fonctionnement sous stress</h3>
                           </li>
                           <li>
                               <h3>pas très à l'aise à l'oral en anglais</h3>
                           </li>
                           <li>
                               <h3>créatif</h3>
                           </li>
                           </ul>
                           -->
                            <p>Passionné depuis le plus jeune âge par la création informatique, j'ai acquis une
                                expérience solide dans différents langages et paradigmes de programmation.
                            </p>
                            <p>Je suis
                                sérieux dans mon travail, autonome si besoin, avec je pense, une bonne capacité
                                d'adaptation.
                                Curieux de nature, j'aime apprendre et partager l'attrait pour les nouvelles
                                technologies.
                            </p>
                 
                            

                            <div class="bouton-realisationspersonnelles cliquable"
                                data-section="realisation-personnelle">
                                <h3>
                                    <i class="fa-solid fa-angle-up fa-rotate-90"></i>
                                    <strong>Exemples de réalisations personnelles</strong>
                                </h3>
                            </div>
                            <div id="item-div-realisationspersonnelles" class="section"
                                data-section="realisation-personnelle" style="display:none">
                                <div class="row">
                                    <div class="col-md-1 fond"></div>
                                    <div class="col-xs-12 col-md-10 fond">

                                        <h3><strong>Visualiser les traces GPS</strong></h3>
                                        <p>
                                            Application Web développée en <strong>Typescript /
                                                Angular</strong>
                                            permettant d'analyser
                                            les données GPX issues d'un capteur GPS. <a class="external"
                                                href="/sensations/visu-gpx/index.php?url=https://gpxweb.000webhostapp.com/gpx/2022_03_19_vaires-sur-marne.gpx"
                                                target="_blank">Cliquez ici pour tester.</a>
                                        </p>
                                        <br>
                                        <a href="/sensations/visu-gpx/index.php?url=https://gpxweb.000webhostapp.com/gpx/2022_03_19_vaires-sur-marne.gpx"
                                            target="_blank"><img class="img-responsive ombre-image taille-double"
                                                src="images/visu-gpx.jpg" /></a>
                                        <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1 fond"></div>
                                    <div class="col-xs-12 col-md-10 fond">

                                        <h3><strong>Metablaster</strong></h3>
                                        <p>
                                            <a class="external"
                                                href="http://metablaster.alwaysdata.net/"
                                                target="_blank">Jeu multijoueurs en ligne</a> inspiré de Dynablaster et développé en <strong>React / Nodejs.</strong> (Réalisation en cours...)
                                        </p>
                                        <br>
                                        <a href="http://metablaster.alwaysdata.net/"
                                            target="_blank"><img class="img-responsive ombre-image taille-double centre" title="Jouer à Metablaster"
                                                src="../informatique/images/metablaster.png" style="display: block; width: 659px; margin: auto;"/></a>
                                        <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1 fond"></div>
                                    <div class="col-xs-12 col-md-9 fond">





                                        <h3><strong>Le jeu de José</strong></h3>
                                        <p>
                                            Une rivière, une barge ne pouvant contenir que 2 individus maximum.
                                            Sur la rive droite, 3 humains et 3 orques.
                                            Le but, que les 3 humains traversent sur la rive gauche sachant qu'ils ne
                                            doivent
                                            jamais être en infériorité numérique par rapport aux orques.
                                        </p>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1 fond"></div>
                                    <div class="col-xs-11 col-md-9 fond-table encadrement-table encadre">

                                        <!-- HTML generated using hilite.me -->
                                        <div>
                                            <pre style="margin: 0; line-height: 125%"><span style="color: #0000DD; font-weight: bold">7</span> coups
Traverse vers () <span style="color: #333333">--------&gt;</span> ([], [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>])
Traverse vers (<span style="background-color: #fff0f0">&#39;gauche&#39;</span>, [<span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>]) <span style="color: #333333">--------&gt;</span> ([<span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>], [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>])
Traverse vers (<span style="background-color: #fff0f0">&#39;droite&#39;</span>, [<span style="background-color: #fff0f0">&#39;humain&#39;</span>]) <span style="color: #333333">--------&gt;</span> ([<span style="background-color: #fff0f0">&#39;orque&#39;</span>], [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>])
Traverse vers (<span style="background-color: #fff0f0">&#39;gauche&#39;</span>, [<span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>]) <span style="color: #333333">--------&gt;</span> ([<span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>], [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>])
Traverse vers (<span style="background-color: #fff0f0">&#39;droite&#39;</span>, [<span style="background-color: #fff0f0">&#39;orque&#39;</span>]) <span style="color: #333333">--------&gt;</span> ([<span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>], [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>])
Traverse vers (<span style="background-color: #fff0f0">&#39;gauche&#39;</span>, [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>]) <span style="color: #333333">--------&gt;</span> ([<span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>], [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>])
Traverse vers (<span style="background-color: #fff0f0">&#39;droite&#39;</span>, [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>]) <span style="color: #333333">--------&gt;</span> ([<span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>], [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>])
Traverse vers (<span style="background-color: #fff0f0">&#39;gauche&#39;</span>, [<span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>]) <span style="color: #333333">--------&gt;</span> ([<span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>, <span style="background-color: #fff0f0">&#39;humain&#39;</span>], [<span style="background-color: #fff0f0">&#39;orque&#39;</span>, <span style="background-color: #fff0f0">&#39;orque&#39;</span>])
</pre>
                                        </div>


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1 fond"></div>
                                    <div class="col-xs-12 col-md-9 fond">

                                        <div class="bouton-programme cliquable" data-section="programme-jeujose">
                                            <i class="fa-solid fa-angle-up fa-rotate-90"></i>

                                            <p>Le programme écrit en <strong>Python</strong></p>
                                        </div>

                                    </div>
                                </div>

                                <div id="item-div-programme-jeujose" class="row section"
                                    data-section="programme-jeujose" style="display:none">



                                    <div class="col-md-1 fond"></div>
                                    <div class="col-xs-11 col-md-9 fond-table encadrement-table encadre">
                                        <!-- HTML generated using hilite.me -->
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


                                <div class="row">
                                    <div class="col-md-1 fond"></div>
                                    <div class="col-xs-12 col-md-10 fond">


                                        <h3><strong>Metapong</strong></h3>
                                        <p>
                                            Un <a target="_blank"
                                                href="/informatique/informatique.php#metapong">programme</a><strong>
                                                Javascript</strong> multijoueurs tournant sur un
                                            serveur <strong>Nodejs</strong>. L'espace de jeu s'agrandit au fur et à
                                            mesure que les utilisateurs se connectent.
                                        </p>
                                        <br>
                                        <p align="center">
                                            <a href="/informatique/informatique.php#metapong" target="blank">
                                                <img alt="Metapong" title="Metapong"
                                                    src="/informatique/images/metapong.gif"
                                                    class="img-responsive ombre-image" />
                                            </a>
                                        </p>


                                        <br>
                                        <h3><strong>Analyse de sessions en windfoil</strong></h3>
                                        <p>
                                            <a href="https://outilsflask.herokuapp.com/sessions/ia"
                                                target="blank">Implémentation</a> en <strong>Python</strong> sous
                                            <strong>Flask</strong> d'un perceptron multicouche avec
                                            <strong>Tensorflow</strong>. <a
                                                href="https://colab.research.google.com/drive/1uQXnXweKwFYDEXRFHhVaowr5-HcVUg4u?usp=sharing"
                                                target="_blank">Notebook Colab</a>
                                        </p>
                                        <br>
                                        <p align="center">
                                            <a href="https://outilsflask.herokuapp.com/sessions/ia" target="blank">
                                                <img alt="Analyse de sessions" title="Analyse de sessions"
                                                    src="images/perceptron.jpg" class="img-responsive ombre-image" />
                                            </a>
                                        </p>

                                    </div>
                                </div>

                                <br>
                            </div>

                            <p>A titre personnel j'utilise notamment les logiciels</p>
                            <ul>
                                <li>
                                    <h3><strong>Visual Studio Code</strong></h3>
                                </li>
                                <li>
                                    <h3>Racket, programmation fonctionnelle basée sur langage <strong>Scheme</strong>
                                    </h3>
                                </li>
                                <li>
                                    <h3><strong>Davinci Resolve</strong>, montage vidéo</h3>
                                </li>
                                <li>
                                    <h3><strong>Reason Studio</strong>, création musicale</h3>
                                </li>
                            </ul>

<!--
                            <h3 class="site-perso">Site personnel : <a class="external"
                                    href="https://greduvent.herokuapp.com/" target="_blank">au
                                    gré du
                                    vent 1.0</a>
                            </h3>
  -->
  <br>
  <p>Je suis passionné par les sciences, l'intelligence artificielle, pratique le windfoil, et aime profiter de la nature.
                                Le contact et l'échange avec les autres sont essentiels à mon équilibre.
                            </p>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.page-container-->
    <?php include("./includes/footer.php"); ?>
    <script>
    $(".cliquable").click(function() {
        const section = $(this).attr("data-section");
        $('.section[data-section="' + section + '"]').slideToggle(
            "fast",
            function() {}
        );

        const icone = $('.cliquable[data-section="' + section + '"] i'); // rotation de l'icone lors du clic
        if (icone.hasClass("fa-rotate-90")) {
            icone.removeClass("fa-rotate-90");
            icone.addClass("fa-rotate-180");
        } else {
            icone.removeClass("fa-rotate-180");
            icone.addClass("fa-rotate-90");
        }
    });

    $(document).ready(function() {
        const g = getParameterByName("go");
        if (g != null) {
            const icone = $('.bouton-' + g + ' i');
            if (icone.hasClass("fa-rotate-90")) {
                icone.removeClass("fa-rotate-90");
                icone.addClass("fa-rotate-180");
            } else {
                icone.removeClass("fa-rotate-180");
                icone.addClass("fa-rotate-90");
            }
            $('#item-div-' + g).show("fast", function() {
                jQuery("html, body").animate({
                        scrollTop: jQuery('#item-div-' + g).offset().top - 50,
                    },
                    "slow"
                );
            });
        }
    });

    function getParameterByName(name) {
        const url = window.location.href;
        const n = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + n + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
    </script>
</body>

</html>
