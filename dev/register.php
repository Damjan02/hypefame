<?php
/**
 * Created by PhpStorm.
 * User: jovanovic_damj-esig
 * Date: 17.09.2019
 * Time: 15:58
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: jovanovic_damj-esig
 * Date: 17.09.2019
 * Time: 10:40
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inscription</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
</head>
<body class="mdb-color lighten-5">
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark indigo">

    <a class="navbar-brand" href="#">
        <div class="logo animated fadeInDown" style="background-image: url('img/svg/logo_nav.svg');"></div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item active mr-3">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="#">Vendre</a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="#">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">A propos</a>
            </li>
        </ul>
    </div>

</nav>
<!--/.Navbar-->

<!--Section: Live preview-->
<section class="form-dark form-connexion">

    <!--Form without header-->
    <div class="card card-image" style="background-image: url('img/inscription.jpg');  background-size: cover;">
        <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

            <!--Header-->
            <div class="text-center">
                <h3 class="white-text mb-5 mt-4 font-weight-bold text-uppercase animated fadeInDown slow"><a class="white-text font-weight-bold"><strong>"Inscription"</strong></a></h3>
                <span class="border-bottom border-primary" style="border-bottom: 2px solid !important;"></span>
            </div>


            <!--Body-->
            <div class="md-form">
                <input type="text" id="Form-nom5" class="form-control white-text">
                <label for="Form-nom5" class="white-text">Nom</label>
            </div>

            <div class="md-form">
                <input type="text" id="Form-prenom5" class="form-control white-text">
                <label for="Form-prenom5" class="white-text">Prénom</label>
            </div>

            <div class="md-form">
                <input type="text" id="Form-prenom5" class="form-control white-text">
                <label for="Form-prenom5" class="white-text">Téléphone</label>
            </div>

            <div class="md-form pb-3">
                <input type="text" id="Form-prenom5" class="form-control white-text">
                <label for="Form-prenom5" class="white-text">Prénom</label>
            </div>

            <!--Grid row-->
            <div class="row d-flex align-items-center mb-4">

                <!--Grid column-->
                <div class="text-center mb-3 col-md-12">
                    <input type="submit" class="btn btn-block btn-rounded z-depth-1 indigo">
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

            <!--Grid column-->
            <div class="col-md-12">
                <p class="font-small white-text d-flex justify-content-end">Pas encore de compte ? <a href="./login.php" class=" ml-1 font-weight-bold"> S'inscrire</a></p>
            </div>
            <!--Grid column-->

        </div>
    </div>
    <!--/Form without header-->

</section>
<!--Section: Live preview-->


<!-- Footer -->
<footer class="page-footer font-small indigo">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> Hypefam.ch</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>


