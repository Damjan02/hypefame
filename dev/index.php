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
                    <a class="nav-link" href="#">About</a>
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
    <header>
        <div class="overlay"></div>
        <section class="intro-video">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="img/Main_2.mp4" type="video/mp4">
            </video>
        </section>
        <div class="mask rgba-purple-light flex-center">
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <div class="flex-center flex-column">
                            <div class="mask flex-center">
                                <div class="container text-center white-text wow fadeInUp">
                                    <div style="background-image: url('img/svg/logo_background.svg')"
                                         class="logoBg animated fadeInDown slow"></div>
                                </div>
                            </div>
                        </div>
                        <form class="form-inline md-form form-sm active-cyan-2 mt-3 justify-content-center">
                            <input class="form-control form-control-sm mr-3 w-50" type="text" placeholder="Search"
                                   aria-label="Search" style="color: white;">
                        </form>
                    </div>
                </div>
            </div>
            <div class="justify-content-center text-center">
                <ul class="nav justify-content-center" style="position: absolute; bottom: 0;">
                    <li class="nav-item">
                        <a class="nav-link" href="#!"><h3 class="miniMenuIndex">Sneakers</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!"><h3 class="miniMenuIndex">Streetwear</h3></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section class="view intro-video">
        <video poster="img/Main_2.mp4" playsinline autoplay loop>
            <source src="img/Main_2.mp4" type="video/mp4">
        </video>
    </section>

</header>
<!-- Start your project here-->
<div style="height: 100vh">
</div>
<!-- Start your project here-->

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
