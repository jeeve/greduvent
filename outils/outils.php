<!DOCTYPE html>
<html lang="fr">

<head>
    <title>la boite à outils</title>
    <META NAME="Description" CONTENT="La boite à outils" />
    <?php include("../includes/header.php"); ?>
    <style>
    li p {
        margin-bottom: 20px;
        margin-top: 20px;
    }
    </style>
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
                    <h1>la boite à outils</h1>

                    <br><br>

                    <h2>GPS</h2>
                    <ul>
                        <li>
                            <p><a href="http://gpxweb.000webhostapp.com/" target="_blank">Visualisateur de traces</a>
                            </p>
                        </li>
                        <li>
                            <p><a href="https://outilsflask.herokuapp.com/gps/">Convertisseur fichiers FIT et SML en
                                    GPX</a></p>
                        </li>
                    </ul>

                    <h2>Divers</h2>
                    <ul>
                    <li>
                            <p><a href="/informatique/informatique.php#metapong">Metapong</a></p>
                        </li>
                        <li>
                            <p><a href="/informatique/informatique.php#scrollscreens">Scroll Screens</a></p>
                        </li>
                    </ul>



                    <br><br>
                    <div id="swipe">
                        <div class="row">
                            <div class="col-xs-4">
                                <p><a id="page-precedente" href="../science/science.php">e^(i.pi)+1=0</a></p>
                            </div>
                            <div class="col-xs-8">
                                <p align="right"><a id="page-suivante" href="../a-propos/a-propos.php">à propos</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="numero-page">page 25</p>
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

</html>