<?php
/**
 * Created by PhpStorm.
 * User: lenny
 * Date: 11/15/18
 * Time: 4:57 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Radialyse</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="/client/img/favicon.png" rel="icon">
    <link href="/client/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/client/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/client/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="/client/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="/client/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="/client/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/client/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/client/lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="/client/css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/client/css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="/client/css/responsive.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: eBusiness
      Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

<div id="preloader"></div>

<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                <h1>Radialyse</h1>
                                <!-- Uncomment below if you prefer to use an image logo -->
                                <!-- <img src="img/logo.png" alt="" title=""> -->
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="#home">Radialyse</a>
                                </li>
                                <li class=""><a href="{{url('/search')}}">Rechercher des Labo</a></li>
                                <li>
                                    <a class="page-scroll" href="#about">A propos de nous</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="#team">Fondateurs</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#contact">Contactez nous</a>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>
<!-- header end -->

<!-- Start Slider Area -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="/client/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
            <img src="/client/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
            <img src="/client/img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
        </div>

        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">Prenez rendez-vous sur Internet avec votre laboratoire...!!</h1>
                                </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">Radialyse! un assistant pour le patient rendant votre recherche de traitement aussi lisse que possible</h1>
                            </div>
                            <!-- layer 3 --> <div class="subs-feilds">
                                <div class="suscribe-input">
                                    <input type="email" class="email form-control width-80" id="sus_email" placeholder="Analyses,Radio,...">
                                    <button type="submit" id="sus_submit" class="add-btn width-20">Recherche...</button>
                                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                                </div>
                            </div>
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="login/signinlabo.html">Inscriez-vous comme un praticien?</a>
                                <a class="ready-btn page-scroll" href="login/signinpatient.html">Inscriez-vous comme  un patient?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">Prenez rendez-vous sur Internet avec votre laboratoire...!!</h1>
                                </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">Radialyse! un assistant pour le patient rendant votre recherche de traitement aussi lisse que possile</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="subs-feilds">
                                <div class="suscribe-input">
                                    <input type="email" class="email form-control width-80" id="sus_email"  placeholder="Analyses,Radio,...">
                                    <button type="submit" id="sus_submit" class="add-btn width-20">Recherche...</button>
                                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                                </div>
                            </div>
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="#services">Inscriez-vous comme  un praticien?</a>
                                <a class="ready-btn page-scroll" href="#about">Inscriez-vous comme  un patient?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- direction 3 -->
        <div id="slider-direction-3" class="slider-direction slider-two">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <!-- layer 1 -->
                        <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <h2 class="title1">Prenez rendez-vous sur Internet avec votre laboratoire...!!</h1>
                            </h2>
                        </div>
                        <!-- layer 2 -->
                        <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <h1 class="title2">Radialyse! un assistant pour le patient rendant votre recherche de traitement aussi lisse que possile</h1>
                        </div>
                        <!-- layer 3 -->
                        <div class="subs-feilds">
                            <div class="suscribe-input">
                                <input type="email" class="email form-control width-80" id="sus_email"  placeholder="Analyses,Radio,...">
                                <button type="submit" id="sus_submit" class="add-btn width-20">Recherche...</button>
                                <div id="msg_Submit" class="h3 text-center hidden"></div>
                            </div>
                        </div>
                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <a class="ready-btn right-btn page-scroll" href="#services">Inscriez-vous comme  un praticien?</a>
                            <a class="ready-btn page-scroll" href="#about">Inscriez-vous comme  un patient?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<br
<!-- Start Service area -->
<section id="services bg-secondary " style="font:Georgia, serif;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <br>   <h2>Comment ça marche</h2>
                </div>
            </div>
        </div>><br>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa  fa-stack-1x fa-inverse">1</i>
            </span> <br>
                <h4 class="service-heading">Postez votre besoin</h4>
                <p >Postez votre besoin en cliquant sur "POSTER MON BESOIN" et précisez votre radio ou analyses,souhaitées pour la prestation.</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
<i class="fa  fa-stack-1x fa-inverse">2</i>
            </span>
                <h4 class="service-heading">Comparez les Prix et les distances</h4>
                <p >Recevez en quelques minutes plusieurs offres variées des Laboratoires... choisissez le convenablae!</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
<i class="fa  fa-stack-1x fa-inverse">3</i>
            </span>
                <h4 class="service-heading">Commandez la prestation et prenez votre RDV</h4>
                <p>Rassurez-vous une bonne service selon vos besoins...</p>
            </div>
        </div>
    </div>
</section>
<!-- End Service area -->

<!-- our-skill-area start -->
<div class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
        <div class="container">
            <!-- section-heading end -->
            <div class="row">
                <div class="skill-text">
                    <!-- single-skill start -->
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                                <h3 class="progress-h4">Visites</h3>
                            </div>
                        </div>
                    </div>
                    <!-- single-skill end -->
                    <!-- single-skill start -->
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                                <h3 class="progress-h4">patients</h3>
                            </div>
                        </div>
                    </div>
                    <!-- single-skill end -->
                    <!-- single-skill start -->
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                                <h3 class="progress-h4">Loboratoires</h3>
                            </div>
                        </div>
                    </div>
                    <!-- single-skill end -->
                    <!-- single-skill start -->
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                                <h3 class="progress-h4">RDVs</h3>
                            </div>
                        </div>
                    </div>
                    <!-- single-skill end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our-skill-area end -->

<!-- End Slider Area -->

<!-- Start About area -->
<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>A propos de Radialyse</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <a href="#">
                            <img src="/client/img/about/1.jpg" alt="" style="height:350px;" >
                        </a>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <a href="#">
                            <h4 class="sec-head"></h4>
                        </a>
                        <p>
                            Radialys,est un produit d'une nouvelle startup e-santé "Made in Algeria" appellée <span style="color:blue;"> Caduseus </span>            </p>
                        <ul></p>
                            <li>
                                <i class="fa fa-check"></i> Gagnez de temps.
                            </li>
                            <li>
                                <i class="fa fa-check"></i> RDVs non honorés.
                            </li>

                            <li>
                                <i class="fa fa-check"></i> Votre Rdv selon vos Besoins.
                            </li>
                            <li>
                                <i class="fa fa-check"></i>  Radialyse protège vos données.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div>
<!-- End About area -->

<!-- Start Wellcome Area -->
<div class="wellcome-area">
    <div class="well-bg">
        <div class="test-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="wellcome-text">
                        <div class="well-text text-center">
                            <h2>Télécharger Radialyse</h2>
                            <p>
                                Radialyse est disponible sur Android.
                            </p>
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="#services">Télécharger Radialyse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Wellcome Area -->


<!-- Start Testimonials -->
<div class="testimonials-area">
    <div class="testi-inner area-padding">
        <div class="testi-overly" style="color:black;"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Start testimonials Start -->
                    <div class="testimonial-content text-center">

                        <!-- start testimonial carousel -->
                        <div class="testimonial-carousel">
                            <!-- Start team Area -->
                            <div id="team" class="our-team-area area-padding">
                                <div class="container">
                                    <div class="row"style="color:black;">
                                        <div class="col-md-12 col-sm-12 col-xs-12"style="color:black;">
                                            <div class="section-headline text-center"style="color:black;">
                                                <h2 style="color:white;">Rencontrez nos fondateurs!</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"><center>
                                            <div class="team-top" style="padding-left:200px;">
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="single-team-member">
                                                        <div class="team-img">
                                                            <a href="#">
                                                                <img src="/client/img/team/1.jpg" alt="">
                                                            </a>
                                                            <div class="team-social-icon text-center">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-instagram"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="team-content text-center"style="color:black;">
                                                            <h4 style="color:white;">Imen</br> Ghoul</h4>

                                                            <p style="color:white;"> Developpeur & Web Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End column -->
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="single-team-member">
                                                        <div class="team-img">
                                                            <a href="#">
                                                                <img src="/client/img/team/2.jpg" alt="">
                                                            </a>
                                                            <div class="team-social-icon text-center">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>

                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-instagram"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="team-content text-center">
                                                            <h4 style="color:white;">Debbache Zine Elabiddine</h4>
                                                            <p style="color:white;">Futur médecin</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End column -->
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <div class="single-team-member">
                                                        <div class="team-img">
                                                            <a href="#">
                                                                <img src="/client/img/team/3.jpg" alt="">
                                                            </a>
                                                            <div class="team-social-icon text-center">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-instagram"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="team-content text-center">
                                                            <h4 style="color:white;">Jomana Lemounes</h4>
                                                            <p style="color:white;">Web Designer</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div id="team" class="our-team-area area-padding">
                                        <div class="container">
                                            <div class="row"style="color:black;">
                                                <div class="col-md-12 col-sm-12 col-xs-12"style="color:black;">
                                                    <div class="section-headline text-center"style="color:black;">
                                                        <h2 style="color:white;">Rencontrez nos fondateurs!</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"><center>
                                                    <div class="team-top" style="padding-left:200px;">
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <div class="single-team-member">
                                                                <div class="team-img">
                                                                    <a href="#">
                                                                        <img src="/client/img/team/6.jpg" alt="">
                                                                    </a>
                                                                    <div class="team-social-icon text-center">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-facebook"></i>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-instagram"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="team-content text-center"style="color:black;">
                                                                    <h4 style="color:white;">Lenn </br>Kaylen</h4>
                                                                    <p style="color:white;">Web Developpeur</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End column -->
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <div class="single-team-member">
                                                                <div class="team-img">
                                                                    <a href="#">
                                                                        <img src="/client/img/team/5.jpg" alt="">
                                                                    </a>
                                                                    <div class="team-social-icon text-center">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-facebook"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>

                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-instagram"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="team-content text-center">
                                                                    <h4 style="color:white;">Lamiss Lemounes</h4>
                                                                    <p style="color:white;"> Web Developpeur</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End column -->
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <div class="single-team-member">
                                                                <div class="team-img">
                                                                    <a href="#">
                                                                        <img src="/client/img/team/4.jpg" alt="">
                                                                    </a>
                                                                    <div class="team-social-icon text-center">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-facebook"></i>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-instagram"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="team-content text-center">
                                                                    <h4 style="color:white;">Youcef Mégoura</h4>
                                                                    <p style="color:white;">Web Developpeur</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div id="team" class="our-team-area area-padding">
                                        <div class="container">
                                            <div class="row"style="color:black;">
                                                <div class="col-md-12 col-sm-12 col-xs-12"style="color:black;">
                                                    <div class="section-headline text-center"style="color:black;">
                                                        <h2 style="color:white;">Rencontrez nos fondateurs!</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"><center>
                                                    <div class="team-top" style="padding-left:200px;">
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <div class="single-team-member">
                                                                <div class="team-img">
                                                                    <a href="#">
                                                                        <img src="/client/img/team/7.jpg" alt="">
                                                                    </a>
                                                                    <div class="team-social-icon text-center">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-facebook"></i>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-instagram"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="team-content text-center"style="color:black;">
                                                                    <h4 style="color:white;">Zineddine<br> Torchi</h4>
                                                                    <p style="color:white;">Designer</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End column -->
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <div class="single-team-member">
                                                                <div class="team-img">
                                                                    <a href="#">
                                                                        <img src="/client/img/team/8.jpg" alt="">
                                                                    </a>
                                                                    <div class="team-social-icon text-center">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-facebook"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>

                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-instagram"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="team-content text-center">
                                                                    <h4 style="color:white;">Mohamed Aymen Boudouni</h4>
                                                                    <p style="color:white;">Developpeur</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End column -->
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <div class="single-team-member">
                                                                <div class="team-img">
                                                                    <a href="#">
                                                                        <img src="/client/img/team/9.jpg" alt="">
                                                                    </a>
                                                                    <div class="team-social-icon text-center">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-facebook"></i>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="fa fa-instagram"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="team-content text-center">
                                                                    <h4 style="color:white;">Amet Errahmane</h4>
                                                                    <p style="color:white;">Economiste</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                        </div>
                    </div>
                    <!-- End testimonials end -->
                </div>
                <!-- End Right Feature -->
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Start Suscrive Area -->
<div class="suscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                <div class="suscribe-text text-center">
                    <h3>Une question ? Besoin d'aide ? contactez-nous</h3>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Suscrive Area -->
<!-- Start contact Area -->
<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Contactez nous</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-mobile"></i>
                            <p>
                                Appelez-nous: +1 5589 55488 55<br>
                                <span>H24/H24 et 7J/7J</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                                Email: info@example.com<br>
                                <span>Web: www.example.com</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Location: A108 Adam Street<br>
                                <span>NY 535022, USA</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Google Map -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start Map -->
                    <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
                    <!-- End Map -->
                </div>
                <!-- End Google Map -->

                <!-- Start  contact -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form contact-form">

                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Footer bottom Area -->
<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-logo">
                                <h2>Radialyse</h2>
                            </div>

                            <p> application de prise des RDVs gratuit en Algérie</p>
                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/radialyse/"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/radialyse"">	<i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">  <i class="fa fa-envelope-o"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Information</h4>
                            <p>
                                Vous avez des questions ?
                                N'hésitez pas à nous contacter
                            </p>
                            <div class="footer-contacts">
                                <p><span>Tel:</span> +123 456 789</p>
                                <p><span>Email:</span> contact@example.com</p>
                                <p><span>Diponibilitée:</span> H24/H24 et 7J/7J</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Instagram</h4>
                            <div class="flicker-img">
                                <a href="#"><img src="/client/img/portfolio/1.jpg" alt=""></a>
                                <a href="#"><img src="/client/img/portfolio/2.jpg" alt=""></a>
                                <a href="#"><img src="/client/img/portfolio/3.jpg" alt=""></a>
                                <a href="#"><img src="/client/img/portfolio/4.jpg" alt=""></a>
                                <a href="#"><img src="/client/img/portfolio/5.jpg" alt=""></a>
                                <a href="#"><img src="/client/img/portfolio/6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright text-center">
                        <p>
                            &copy; Copyright  <strong>Caduseus</strong>.  Tous les droits sont réservés
                        </p>
                    </div>
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
                        -->
                        Conçu par <a href="#">Imen Ghoul</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="/client/lib/jquery/jquery.min.js"></script>
<script src="/client/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/client/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/client/lib/venobox/venobox.min.js"></script>
<script src="/client/lib/knob/jquery.knob.js"></script>
<script src="/client/lib/wow/wow.min.js"></script>
<script src="/client/lib/parallax/parallax.js"></script>
<script src="/client/lib/easing/easing.min.js"></script>
<script src="/client/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="/client/lib/appear/jquery.appear.js"></script>
<script src="/client/lib/isotope/isotope.pkgd.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAMXcMvgJSBm-b-KQKtZSNz--50XIB_4Q"></script>

<!-- Contact Form JavaScript File -->
<script src="/client/contactform/contactform.js"></script>

<script src="/client/js/main.js"></script>
</body>

</html>

