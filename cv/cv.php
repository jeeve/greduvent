<!DOCTYPE html>
<html lang="fr">

<head>
    <title>CV</title>
    <META NAME="Description"
        CONTENT="Quelques mots sur l'auteur, ses motivations, lectures, playlist musicale et citation préférée." />
    <?php include("./includes/header.php"); ?>
    <link href="css/cv.css" rel="stylesheet">
</head>

<body>
    <div class="page-container">
        <!-- top navbar -->
        <?php include("includes/navbar.php"); ?>

        <div class="container">

            <!-- main area -->

            <div class="col-xs-12 col-sm-12 col-md-12 fond">
                <h1>Curriculum vitæ</h1>

                <div class="row">
                    <div class="col-xs-11 col-md-4 fond-table encadrement-table encadre">
                        <div>
                            <img class="photo" src="images/jvj.png" />
                            <div class="nom">Jean-Valéry</div>
                            <div class="nom">JULIEN</div>
                        </div>
                        <div class="section">
                            <h3><strong>Développeur informatique</strong></h3>
                            <p>Date de naissance : 1972 (49 ans)</p>
                            <p>Gentilly (94)</p>

                            <br>
                            <p>Passionné d'informatique et en particulier par le développement logiciel, j'aime
                                participer à la création d'outils numériques.
                            </p>
                            <p>
                                Ecouter le besoin des utilisateurs, répondre avec les technologies modernes,
                                leur
                                porter
                                assistance sont une autre source de motivation.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-1 fond"></div>
                    <div class="col-xs-12 col-md-6 fond">
                        <h2>Compétences</h2>
                        <ul>
                            <li>
                                <h3>Développement logiciel</h3>
                            </li>
                            <li>
                                <h3>Programmation orientée objet</h3>
                            </li>
                            <li>
                                <h3>Applications Web, HTML 5, Services Web</h3>
                            </li>
                            <li>
                                <h3>ASP.NET, SharePoint, Wordpress</h3>
                            </li>
                            <li>
                                <h3>Windev, Webdev</h3>
                            </li>
                            <li>
                                <h3>Langages : c#, Javascript, Python, Php, Delphi, Sql</h3>
                            </li>
                            <br>
                            <li>
                                <h3>Anglais lu et écrit</h3>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-12 fond">
                        <a name="experience"></a>
                        <h2 class="experience">Expérience professionnelle</h2>
                        <ul>
                            <li>
                                <h3><strong>CTIF</strong> - <strong>C</strong>entre <strong>T</strong>echnique des <strong>I</strong>ndustries
                                    de la <strong>F</strong>onderie - Sèvres (92)</h3>
                                <p>Technicien informatique</p>
                                <p>De Septembre 1997 à aujourd'hui</p>
                                <ul class="realisation">
                                    <li>
                                        <h4><input id="div-delphi" type="button" value=" + " data-toggle="collapse"
                                                data-target="#item-div-delphi" /> Développement d'applications métier
                                            sous Windows avec <strong>Delphi</strong></h4>
                                        <div id="item-div-delphi" class="collapse">
                                            <ul class="windows">
                                                <li>
                                                    <img class="img-responsive ombre-image" src="images/elisa.gif" />
                                                    <div class="legende">Calcul système d'attaques en moulage
                                                        sable
                                                        <div class="sous-legende">Utilisation de DirectX pour la vue 3D
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img class="img-responsive ombre-image" src="images/optima.gif" />
                                                    <div class="legende">Calcul de charge et correction de bain
                                                        <div class="sous-legende">Implémentation de l'algorithme du
                                                            Simplex
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img class="img-responsive ombre-image" src="images/poids.gif" />
                                                    <div class="legende">Calcul poids de pièce
                                                        <div class="sous-legende">Association d'éléments géométriques
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img class="img-responsive ombre-image" src="images/qualital.png" />
                                                    <div class="legende">Qualital
                                                        <div class="sous-legende">Indice de qualité des alliages
                                                            aluminium</div>
                                                </li>
                                                <li>
                                                    <img class="img-responsive ombre-image"
                                                        src="images/materialis.png" />
                                                    <div class="legende">Materialis
                                                        <div class="sous-legende">Base de données matériaux</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img class="img-responsive ombre-image" src="images/adagio.gif" />
                                                    <div class="legende">Adagio
                                                        <div class="sous-legende">Aide à la conduite de sablerie</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img class="img-responsive ombre-image" src="images/salsa3d.png" />
                                                    <div class="legende">Salsa 3D
                                                        <div class="sous-legende">Conception d'un plugin métier au sein
                                                            de l'environnement 3DShop</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <h4><input id="div-sharepoint" type="button" value=" + " data-toggle="collapse"
                                                data-target="#item-div-sharepoint" /> Mise en place d'un portail
                                            intranet sous <strong>SharePoint</strong></h4>
                                        <div id="item-div-sharepoint" class="collapse">
                                            <ul class="intranet">
                                                <li>
                                                    <img class="img-responsive ombre-image"
                                                        src="images/sharepoint.png" />
                                                    <div class="legende">Page Intranet des formulaires de l'entreprise
                                                    </div>
                                                </li>
                                                <li>
                                                    <img class="img-responsive ombre-image"
                                                        src="images/powerautomate.png" />
                                                    <div class="legende">Exemple de flux PowerAutomate
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <h4><input id="div-wordpress" type="button" value=" + " data-toggle="collapse"
                                                data-target="#item-div-wordpress" /> Création de sites internet avec
                                            <strong>WordPress</strong>
                                        </h4>
                                        <div id="item-div-wordpress" class="collapse">
                                            <ul class="internet">
                                                <li>
                                                    <a href="https://metalblog.ctif.com" target="_blank">
                                                        <img class="img-responsive ombre-image"
                                                            src="images/metalblog.png" />
                                                    </a>
                                                    <div class="legende"><a href="https://metalblog.ctif.com"
                                                            target="_blank">MetalBlog</a>
                                                        <div class="sous-legende">Wordpress multi-sites avec Thème
                                                            personnalisé
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                    <a href="https://formation.ctif.com" target="_blank">
                                                        <img class="img-responsive ombre-image"
                                                            src="images/formation.png" />
                                                    </a>
                                                    <div class="legende"><a href="https://formation.ctif.com"
                                                            target="_blank"> Site Formation</a>
                                                        <div class="sous-legende">Wordpress multi-sites avec Content
                                                            Type personnalisés
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <h4><input id="div-windev" type="button" value=" + " data-toggle="collapse"
                                                data-target="#item-div-windev" /> Développement d'interfaces entre
                                            progiciels avec <strong>Windev</strong></h4>
                                        <div id="item-div-windev" class="collapse">
                                            <ul class="windev">
                                                <li>
                                                    <img class="img-responsive ombre-image" src="images/windev.png" />
                                                    <div class="legende">Exemple d'interface entre un ERP et un LIMS
                                                        <div class="sous-legende">Les données transitent via services
                                                            web
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>
                                    </li>
                                    <li>
                                        <h4><input id="div-webdev" type="button" value=" + " data-toggle="collapse"
                                                data-target="#item-div-webdev" /> Développements <strong>Webdev</strong>
                                        </h4>
                                        <div id="item-div-webdev" class="collapse">
                                            <ul class="webdev">
                                                <li>
                                                    <img class="img-responsive ombre-image"
                                                        src="images/webdev-dev.png" />
                                                    <div class="legende">Exemple de formulaire de réservation de
                                                        véhicules
                                                        <div class="sous-legende">Ce formulaire utilise un service web
                                                            de réservation écrit en c#
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img class="img-responsive ombre-image"
                                                        src="images/webdev-ana.png" />
                                                    <div class="legende">Logiciel de gestion de la qualité
                                                        <div class="sous-legende">Base de données sur SQL Server
                                                        </div>
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
                                <h3><strong>Service militaire</strong> à l’Etablissement d’Impression de Château-Chinon
                                </h3>
                                <p>08/96 - 05/97</p>
                                <ul class="realisation">
                                    <li>
                                        <h4>Développement d’un fichier informatique pour gérer l’approvisionnement</h4>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Stage au <strong>Laboratoire d’Informatique</strong> du Havre</h3>
                                <p>06/95 - 08/95</p>
                                <ul class="realisation">
                                    <li>
                                        <h4>Conception d’algorithmes (langage C++) pour architectures parallèles</h4>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3><strong>Manutentionnaire</strong> au sein de la société des Transports Urbains
                                    Blaisois</h3>
                                <p>août 1994</p>
                            </li>
                            <li>
                                <h3>Stage industriel au <strong>Laboratoire de Biophysique Médicale</strong> de Tours
                                </h3>
                                <p>04/94 - 06/94</p>
                                <ul class="realisation">
                                    <li>
                                        <h4>Réalisation d’une interface utilisateur pour un instrument médical (langage
                                            Pascal avec objets Turbo Vision)</h4>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3><strong>Agent de service</strong> à la colonie de vacances MGET de Lourdes</h3>
                                <p>août 1993</p>
                            </li>
                            <li>
                                <h3>Stage industriel dans la <strong>Société VERMON (ultrasons)</strong> de Tours</h3>
                                <p>04/93 - 06/93</p>
                                <ul class="realisation">
                                    <li>
                                        <h4>Réalisation d’une unité centrale à micro-contrôleur</h4>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

                <a name="formation"></a>
                <h2>Formation</h2>
                <ul>
                    <li>
                        <h3><strong>IUP Génie Informatique</strong> 2ème année</h3>
                        <p>IUP Informatique - La Rochelle (17)</p>
                        <p>1995 - 1996</p>
                    </li>
                    <li>
                        <h3>Obtention du <strong>DUT Informatique</strong> Année Spéciale au Havre</h3>
                        <p>IUT Informatique - Le Havre (76)</p>
                        <p>1994 - 1995</p>
                    </li>
                    <li>
                        <h3>Obtention du <strong>DUT Génie Electrique et Informatique Industrielle</strong></h3>
                        <p>IUT Génie Electrique et Informatique Industrielle - Tours (37)</p>
                        <p>1991 - 1994</p>
                    </li>
                    <li>
                        <h3><strong>Bac E</strong> (Mathématiques et Techniques)</h3>
                        <p>Lycée Augustin Thierry - Blois (41) - académie Orléans-Tours</p>
                        <p>1991</p>
                    </li>
                </ul>

                <h2>Divers</h2>
                <ul>
                    <li>
                        <h3>Bac +2 (BTS, DUT, DEUG), Informatique</h3>
                        <p>IUT Informatique - Le Havre (76)</p>
                        <p>De Septembre 1994 à Septembre 1995</p>
                    </li>
                    <li>
                        <h3>Bac +2 (BTS, DUT, DEUG), Electronique et Informatique Industrielle</h3>
                        <p>IUT Génie Electrique et Informatique Industrielle - Tours (37)</p>
                        <p>De Septembre 1992 à Septembre 1994</p>
                    </li>
                </ul>





            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.page-container-->
    <?php include("./includes/footer.php"); ?>
    <script>
    jQuery("input[data-target^='#item-div']").click(function() {
        if (jQuery(this).attr('value') == ' + ') {
            jQuery(this).attr('value', ' - ');
        } else {
            jQuery(this).attr('value', ' + ');
        }
    });
    </script>
</body>