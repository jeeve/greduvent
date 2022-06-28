<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Webcams</title>
    <META NAME="Description"
        CONTENT="Le plan d'eau de Mézières-Ecluzelles avec webcam, archives, météo en temps réel et prévisions." />
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

                    <h1>Webcams</h1>

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 fond">

                            <div class="embed-responsive embed-responsive-16by9 ombre-image">
                                <iframe
                                    src="https://pv.viewsurf.com/2138/Sainte-Adresse?i=NzY4Njp1bmRlZmluZWQ&fbclid=IwAR0i5qcxwFQ2P_4fjr-0fyYthquJeYDYf7e9EQRsvcrLA73xLb6RQBervlk">
                                </iframe>

                            </div>
                            <div class="embed-responsive embed-responsive-16by9 ombre-image">

                                <iframe src="https://pv.viewsurf.com/1084/Lac-d-Orient?i=NDkzMjp1bmRlZmluZWQ">
                                </iframe>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>