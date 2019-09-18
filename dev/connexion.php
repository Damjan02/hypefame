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
    <title>Connexion</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="./css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="./css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="#">
            <div class="logo animated fadeInDown" style="background-image: url('./img/svg/logo_nav.svg');"></div>
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
                    <a class="nav-link" href="#">A propos</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inscription</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!--Section: Live preview-->
<section class="form-dark form-connexion">

    <!--Form without header-->
    <div class="card card-image" style="background-image: url('./img/connexion.jpg');  background-size: cover;">
        <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 text-center">
            <div class="col-lg-12 col-sm-12">
                <div class="col-lg-6 col-sm-12" style="margin: auto;">
                    <div class="text-center typewriter" style="margin: auto;">
                        <h3 class="white-text mb-5 mt-4 font-weight-bold text-uppercase"><a class="white-text font-weight-bold "><strong>"Connexion"</strong></a></h3>
                        <span class="border-bottom border-primary" style="border-bottom: 2px solid !important;"></span>
                    </div>
                </div>
                <!--Body-->
                <div class="md-form">
                    <input type="text" id="Form-email5" class="form-control white-text">
                    <label for="Form-email5" class="white-text">E-mail</label>
                </div>

                <div class="md-form pb-3">
                    <input type="password" id="Form-pass5" class="form-control white-text">
                    <label for="Form-pass5" class="white-text">Mot de passe</label>
                    <div class="form-check my-4">
                        <label class="form-check-label white-text" for="defaultCheck17"><a href="#" class="font-weight-bold"> Mot de passe oublié ?</a></label>
                    </div>
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
                    <p class="font-small white-text d-flex justify-content-end">Pas encore de compte ? <a href="#" class=" ml-1 font-weight-bold"> S'inscrire</a></p>
                </div>
                <!--Grid column--></div>
            <!--Header-->


        </div>
    </div>
    <!--/Form without header-->

</section>
<!--Section: Live preview-->


<!-- Footer -->
<footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> Hypefam.ch</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="./js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="./js/mdb.min.js"></script>
</body>

</html>

