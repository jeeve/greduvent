<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Au gré du vent 1.0</title>
    <META NAME="Description"
        CONTENT="Au travers de textes et de photos perso, ces pages sont une invitation au rêve. Sensible aux visages de la nature, je propose une petite balade en sa compagnie." />
    <?php include("includes/header.php"); ?>
    <link href="/css/index.css" rel="stylesheet">
    <meta name="google-site-verification" content="wXz31h-vFaLhtAqsI7-aoCSpSGU4qK-39YYjcfQKKew" />
</head>

<body id="swipe" style="color: black;">
    <div class="page-container">
        <!-- top navbar -->
        <?php include("includes/navbar.php"); ?>

        <div class="container">
            <div class="row row-offcanvas row-offcanvas-left">
                <!-- sidebar -->
                <?php include("includes/sidebar.php"); ?>

                <!-- main area -->
                <div class="col-xs-12 col-sm-12 col-md-9 fond">
                    <br><br><br>
                    <div class="row">
                        <div id="main-col" class="col-xs-12 col-sm-12 col-md-12 fond">
                            <div class="wrapper">
                                <a href="sommaire/sommaire.php">
                                    <div id="lake-div" class="encadrement-table fond-table">
                                        <img class="img-responsive center-block" src="images/home.jpg"
                                            alt="Les Ebihens, Saint-Jacut de la Mer">
                                        <img class="img-responsive center-block" src="images/home-lake.jpg"
                                            style="display: none;">
                                    </div>
                                    <div class="overlay">
                                        <p style="text-align: right;"><span class="opacite">au gré du vent </span><span
                                                class="opacite2">1.0</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 fond">
                            <p align="right"><br>
                                <a id="page-suivante" href="sommaire/sommaire.php">en route...</a>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
    </div>
    <!--/.page-container-->
    <?php include("includes/footer.php"); ?>
    <script src="/js/lake.js"></script>
</body>

</html>