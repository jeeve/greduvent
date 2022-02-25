<!DOCTYPE html>
<html lang="fr">

<head>
    <title>CV</title>
    <META NAME="Description"
        CONTENT="Quelques mots sur l'auteur, ses motivations, lectures, playlist musicale et citation préférée." />
    <?php include("../includes/header.php"); ?>
    <link href="css/cv.css" rel="stylesheet">
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
                    <h1>Curriculum vitæ</h1>

                    <br>
                    <div class="row">
                        <div class="col-xs-1 col-md-7 fond"></div>
                        <div class="col-xs-10 col-md-5 fond-table encadrement-table">
                            <div>
                                <img class="photo" src="images/jvj.jpg" />
                                <div class="nom">Jean-Valéry</div>
                                <div class="nom">JULIEN</div>
                            </div>
                            <div class="section">
                                <h3>Développeur informatique</h3>
                                <p>Date de naissance : 28/11/1972</p>
                                <p>Gentilly (94) 94250</p>
                                
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
                    </div>

                    <h2 class="experience">Expérience professionnelle</h2>
                    <ul>
                        <li>
                            <h3>Technicien informatique</h3>
                            <p>CTIF - Sèvres (92)</p>
                            <p>De Septembre 1997 à aujourd'hui</p>
                            <ul class="developpement">
                                <li>
                                    Développement d'applications métier sous Windows avec Delphi
                                </li>
                                <li>
                                    Mise en place d'un intranet sous SharePoint
                                </li>
                                <li>
                                    Mise en place d'un intranet sous SharePoint
                                </li>
                                <li>
                                    Création de sites internet avec WordPress
                                </li>
                                <li>
                                    Développement d'interfaces entre progiciels avec Windev
                                </li>
                                <li>
                                    Développements Webdev
                                </li>
                                <li>
                                    Assistance aux utilisateurs
                                </li>
                                <li>
                                    Maintenance des postes de travail
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <h2>Formation</h2>
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




                    <br>
                    <div id="swipe">
                        <div class="row">
                            <div class="col-xs-5">
                                <p><a id="page-precedente" href="../foret/foret.php">peuple végétal</a></p>
                            </div>
                            <div class="col-xs-7">
                                <p align="right"><a id="page-suivante"
                                        href="../sensations/sensations.php">sensations</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="numero-page">page 11</p>
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
</body>