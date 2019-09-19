<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Maquette</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="./index.php">
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
                    <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#">Vendre</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="./login.php">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">A propos</a>
                </li>
            </ul>
        </div>
    </nav>
    <header id="main">
        <section class="intro-video">
            <video muted playsinline="playsinline" autoplay="autoplay"  loop="loop">
                <source src="img/Main_2.mp4" type="video/mp4">
            </video>
        </section>
        <div class="mask rgba-purple-light flex-center">
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <div class="flex-center flex-column mb-4">
                            <div class="mask flex-center">
                                <div class="container text-center white-text wow fadeInUp">
                                    <div style="background-image: url('img/svg/logo_background.svg')"
                                         class="logoBg animated fadeInDown slow"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Search form -->
                        <form class="form-inline form-sm active-cyan-2 mt-3 justify-content-center">
                            <input class="form-control form-control-sm mr-3 w-50 text-center" type="text"
                                   placeholder="Recherche ..."
                                   aria-label="Recherche ..." style="color: #3f51b5;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
</header>


<div class="container-fluid text-center alignSubMenu" style="height: 2000px;">
    <section>
        <article>
            <ul class="inline list-inline">
                <li class="list-inline-item"><h3 class="bigFont" style="text-decoration: underline;"><a href="#"><input type="button" value="Sneakers" class="btn btn-outline-secondary" style="font-size: 17pt;"></a></h3></li>
                <li class="list-inline-item"><h3 class="bigFont"><a href="#"><input type="button" value="Streetwear" class="btn btn-outline-secondary" style="font-size: 17pt;"></a></h3></li>
            </ul>
        </article>
    </section>
</div>

<!-- Footer -->
<footer class="page-footer font-small purple darken-3 fixed-bottom">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Grid row-->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 py-5">
                <div class="mb-5 flex-center">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Pinterest-->
                    <a class="pin-ic">
                        <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
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
