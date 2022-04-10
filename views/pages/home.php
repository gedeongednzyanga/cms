<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8" />
    <title>CMS - Accueil</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Construction Html5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png" />

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="views/pages/assets/plugins/bootstrap/bootstrap.min.css" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="views/pages/assets/plugins/fontawesome/css/all.min.css" />
    <!-- Animation -->
    <link rel="stylesheet" href="views/pages/assets/plugins/animate-css/animate.css" />
    <!-- slick Carousel -->
    <link rel="stylesheet" href="views/pages/assets/plugins/slick/slick.css" />
    <link rel="stylesheet" href="views/pages/assets/plugins/slick/slick-theme.css" />
    <!-- Colorbox -->
    <link rel="stylesheet" href="views/pages/assets/plugins/colorbox/colorbox.css" />
    <!-- Template styles-->
    <link rel="stylesheet" href="views/pages/assets/css/style.css" />
</head>

<body>
    <div class="body-inner">
        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">GOMA, NORD-KIVU, RDC</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                        <ul class="list-unstyled">
                            <li>
                                <a title="Facebook" href="https://facebbok.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                                </a>
                                <a title="Twitter" href="https://twitter.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-twitter"></i></span>
                                </a>
                                <a title="Instagram" href="https://instagram.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-instagram"></i></span>
                                </a>
                                <a title="Linkdin" href="https://github.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-github"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->
        <!-- Header start -->
        <header id="header" class="header-one">
            <div class="bg-white">
                <div class="container">
                    <div class="logo-area">
                        <div class="row align-items-center">
                            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                                <a class="d-block" href="<?= URL ?>">
                                    <img loading="lazy" src="views/pages/assets/images/logo_cm.png" alt="Constra" />
                                </a>
                            </div>
                            <!-- logo end -->

                            <div class="col-lg-9 header-right">
                                <ul class="top-info-box">
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Appelez-nous</p>
                                                <p class="info-box-subtitle">
                                                    <a href="tel:(+243) 819-240-025">(+243) 819-240-025</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Email</p>
                                                <p class="info-box-subtitle">
                                                    <a href="mailto:balufaustin@gmail.com">balufaustin@gmail.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="last">
                                        <div class="info-box last">
                                            <div class="info-box-content">
                                                <p class="info-box-title">ID. Nat.</p>
                                                <p class="info-box-subtitle">19-F42006N70946B</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-get-a-quote">
                                        <a class="btn btn-primary" href="contact">Contactez-nous</a>
                                    </li>
                                </ul>
                                <!-- Ul end -->
                            </div>
                            <!-- header right end -->
                        </div>
                        <!-- logo area end -->
                    </div>
                    <!-- Row end -->
                </div>
                <!-- Container end -->
            </div>

            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="<?= URL ?>">Accueil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services" class="nav-link">Nos Services</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">CMS -
                                                SARL <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="about">A propos</a></li>
                                                <li><a href="faq">Faq</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="gallerie" class="nav-link">Gallérie</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="news" class="nav-link">News
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end -->

                    <div class="nav-search">
                        <span id="search"><i class="fa fa-search"></i></span>
                    </div>
                    <!-- Search end -->

                    <div class="search-block" style="display: none">
                        <label for="search-field" class="w-100 mb-0">
                            <input type="text" class="form-control" id="search-field"
                                placeholder="Tapez votre texte..." />
                        </label>
                        <span class="search-close">&times;</span>
                    </div>
                    <!-- Site search end -->
                </div>
                <!--/ Container end -->
            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->

        <div class="banner-carousel banner-carousel-1 mb-0">
            <div class="banner-carousel-item"
                style="background-image: url(views/pages/assets/images/slider-main/bag001.jpg)">
                <div class="slider-content">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-12 text-center">
                                <h2 class="slide-title" data-animation-in="slideInLeft">
                                    <script>
                                    document.write(new Date().getFullYear() - 2016);
                                    </script> <span> Ans d 'expérience dans la</span>
                                </h2>
                                <h3 class="slide-sub-title" data-animation-in="slideInRight">
                                    Construction Industrielle
                                </h3>
                                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                                    <a href="services" class="slider btn btn-primary">Nos Services</a>
                                    <a href="contact" class="slider btn btn-primary border">Contactez-nous</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-carousel-item"
                style="background-image: url(views/pages/assets/images/slider-main/bag002.jpg)">
                <div class="slider-content text-left">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-12">
                                <h2 class="slide-title-box" data-animation-in="slideInDown">
                                    Service de classe en RDC
                                </h2>
                                <h3 class="slide-title" data-animation-in="fadeIn">
                                    Quand le service compte
                                </h3>
                                <h3 class="slide-sub-title" data-animation-in="slideInLeft">
                                    Votre choix est simple
                                </h3>
                                <p data-animation-in="slideInRight">
                                    <a href="services" class="slider btn btn-primary border">Nos Services</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-carousel-item"
                style="background-image: url(views/pages/assets/images/slider-main/bag003.jpg)">
                <div class="slider-content text-right">
                    <div class="container h-100">
                        <div class="row align-items-center sh-100">
                            <div class="col-md-12">
                                <h2 class="slide-title" data-animation-in="slideInDown">
                                    Rencontrez nos ingénieurs
                                </h2>
                                <h3 class="slide-sub-title" data-animation-in="fadeIn">
                                    Nous croyons à la durabilité
                                </h3>
                                <p class="slider-description lead" data-animation-in="slideInRight">
                                    We will deal with your failure that determines how you achieve success.
                                </p>
                                <div data-animation-in="slideInLeft">
                                    <a href="javascript:;" class="slider btn btn-primary"
                                        aria-label="contact-with-us">Obtenir un devis gratuit</a>
                                    <a href="javascript:;" class="slider btn btn-primary border"
                                        aria-label="learn-more-about-us">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="call-to-action-box no-padding">
            <div class="container">
                <div class="action-style-box">
                    <div class="row align-items-center">
                        <div class="col-md-8 text-center text-md-left">
                            <div class="call-to-action-text">
                                <h3 class="action-title">
                                    Nous comprenons vos besoins en matières de construction
                                </h3>
                            </div>
                        </div>
                        <!-- Col end -->
                        <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                            <div class="call-to-action-btn">
                                <a class="btn btn-dark" href="#">Demandez un devis</a>
                            </div>
                        </div>
                        <!-- col end -->
                    </div>
                    <!-- row end -->
                </div>
                <!-- Action style box -->
            </div>
            <!-- Container end -->
        </section>
        <!-- Action end -->

        <section id="ts-features" class="ts-features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ts-intro">
                            <h2 class="into-title">A propos de CMS</h2>
                            <h3 class="into-sub-title">Nous réalisons des projets phares</h3>
                            <p>
                                Les bâtiments CMS répondent parfaitement aux besoins de la communauté. Nous vous aidons
                                à obtenir la meilleure solution pour vos projets de construction. Tout en vous
                                garatissant la durabilité, nous vous rassurons la sauvegarde de votre investissement.
                            </p>
                        </div>
                        <!-- Intro box end -->

                        <div class="gap-20"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon"><i class="fas fa-trophy"></i></span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title">
                                            Nous avons la réputation d'excellence
                                        </h3>
                                    </div>
                                </div>
                                <!-- Service 1 end -->
                            </div>
                            <!-- col end -->

                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon">
                                        <i class="fas fa-sliders-h"></i>
                                    </span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title">Nous construisons des partenariats</h3>
                                    </div>
                                </div>
                                <!-- Service 2 end -->
                            </div>
                            <!-- col end -->
                        </div>
                        <!-- Content row 1 end -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title">Guidé par l'engagement</h3>
                                    </div>
                                </div>
                                <!-- Service 1 end -->
                            </div>
                            <!-- col end -->

                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon">
                                        <i class="fas fa-users"></i>
                                    </span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title">Une équipe de professionnels</h3>
                                    </div>
                                </div>
                                <!-- Service 2 end -->
                            </div>
                            <!-- col end -->
                        </div>
                        <!-- Content row 1 end -->
                    </div>
                    <!-- Col end -->

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <h3 class="into-sub-title">Nos Valeurs</h3>
                        <p>
                            Nos valeurs et nos collaborateurs comptent énormément
                            pour nous. C’est sur eux que nous nous basons pour mettre en place une relation durable avec
                            les clients. Cela fait de nous un partenaire digne de confiance.
                        </p>

                        <div class="accordion accordion-group" id="our-values-accordion">
                            <div class="card">
                                <div class="card-header p-0 bg-transparent" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Responsabilité
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#our-values-accordion">
                                    <div class="card-body">
                                        Nous assumons la pleine responsabilité de nos décisions, nos actions et leurs
                                        résultats.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0 bg-transparent" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Intégrité
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#our-values-accordion">
                                    <div class="card-body">
                                        Nous sommes honnêtes, dignes de confiance et valorisons l’éthique. Chez nous le
                                        client est rassuré:
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header p-0 bg-transparent" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Respect
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#our-values-accordion">
                                    <div class="card-body">
                                        Nous reconnaissons que les avis, les sentiments et les antécédents de nos
                                        clients sont plus importants que les nôtres.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/ Accordion end -->
                    </div>
                    <!-- Col end -->
                </div>
                <!-- Row end -->
            </div>
            <!-- Container end -->
        </section>


        <section id="facts" class="facts-area dark-bg">
            <div class="container">
                <div class="facts-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 ts-facts">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact1.png"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="189">0</span></h2>
                                <h3 class="ts-facts-title">Réalisations</h3>
                            </div>
                        </div>
                        <!-- Col end -->

                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact2.png"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="50">0</span></h2>
                                <h3 class="ts-facts-title">Membres du Personnel</h3>
                            </div>
                        </div>
                        <!-- Col end -->

                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact3.png"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                                <h3 class="ts-facts-title">Heures de travail</h3>
                            </div>
                        </div>
                        <!-- Col end -->

                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact4.png"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="120">0</span></h2>
                                <h3 class="ts-facts-title">CLIENTS HEUREUX</h3>
                            </div>
                        </div>
                        <!-- Col end -->

                    </div>
                    <!-- Facts end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section>
        <!-- Facts end -->

        <section id="ts-service-area" class="ts-service-area pb-0">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="section-title">Nous sommes spécialistes en</h2>
                        <h3 class="section-sub-title">Ce que nous faisons</h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact5.png"
                                    alt="service-icon" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title">
                                    <a href="services">Construction des Bâtiments</a>
                                </h3>
                                <p>
                                    CMS intervient dans la construction des bâtiments.
                                </p>
                            </div>
                        </div>
                        <!-- Service 1 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact6.png"
                                    alt="service-icon" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title">
                                    <a href="services">Fabrication des blocs</a>
                                </h3>
                                <p>
                                    Vous trouverez des blocs de qualité de toute mesure chez CMS.
                                </p>
                            </div>
                        </div>
                        <!-- Service 2 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact9.png"
                                    alt="service-icon" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title">
                                    <a href="services">Fabrication de pavé</a>
                                </h3>
                                <p>
                                    Besoin de pavés ? CMS vous propose une gamme de pavés de toute marque.
                                </p>
                            </div>
                        </div>
                        <!-- Service 3 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact11.png"
                                    alt="service-icon" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title">
                                    <a href="services">Design Intérieur</a>
                                </h3>
                                <p>
                                    L'intérieure de votre maison dépend de la qualité de peinture.
                                </p>
                            </div>
                        </div>
                        <!-- Service 8 end -->
                    </div>
                    <!-- Col end -->

                    <div class="col-lg-4 text-center">
                        <img loading="lazy" class="img-fluid"
                            src="views/pages/assets/images/services/service-center00.jpg" alt="service-avater-image" />
                    </div>
                    <!-- Col end -->

                    <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact8.png"
                                    alt="service-icon" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title">
                                    <a href="services">Production de peinture</a>
                                </h3>
                                <p>
                                    Peinture lavable, peinture à huile etc... CMS vous offre la bonne qualité.
                                </p>
                            </div>
                        </div>
                        <!-- Service 4 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact10.png"
                                    alt="service-icon" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title">
                                    <a href="services">Expertise en BTP</a>
                                </h3>
                                <p>
                                    La durabilité chez nous constitue notre priorité.
                                </p>
                            </div>
                        </div>
                        <!-- Service 5 end -->


                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact13.png"
                                    alt="service-icon" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="services">Rénovation des bâtiments</a></h3>
                                <p>
                                    Révolutionnez votre construction avec l'équipe professionelle CMS.
                                </p>
                            </div>
                        </div>
                        <!-- Service 6 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="views/pages/assets/images/icon-image/fact12.png"
                                    alt="service-icon" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title">
                                    <a href="services">Design extérieur</a>
                                </h3>
                                <p>
                                    Nous améliorons l'aspect extérieur de vos maisons et bâtiments.
                                </p>
                            </div>
                        </div>
                        <!-- Service 7 end -->
                    </div>
                    <!-- Col end -->
                </div>
                <!-- Content row end -->
            </div>
            <!--/ Container end -->
        </section>
        <!-- Service end -->
        <section class="content solid-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="column-title">TÉMOIGNAGES</h3>

                        <div id="testimonial-slide" class="testimonial-slide">
                            <div class="item">
                                <div class="quote-item">
                                    <span class="quote-text">
                                        CMS est une entreprise congolaise oeuvrant dans la construction des bâtiments,
                                        maisons et routes. Son siège social est dans la ville de Goma, Com. de Goma, Q.
                                        Lac Vert, Av. Kabande, le long de la route Goma-Sake.
                                    </span>

                                    <div class="quote-item-footer">
                                        <img loading="lazy" class="testimonial-thumb"
                                            src="views/pages/assets/images/clients/happy_client1.jpg"
                                            alt="testimonial" />
                                        <div class="quote-item-info">
                                            <h3 class="quote-author">Gédéon Barbuto</h3>
                                            <span class="quote-subtext">Chairman, OKT</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote item end -->
                            </div>
                            <!--/ Item 1 end -->

                            <div class="item">
                                <div class="quote-item">
                                    <span class="quote-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor inci done idunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitoa tion ullamco laboris nisi aliquip consequat.
                                    </span>

                                    <div class="quote-item-footer">
                                        <img loading="lazy" class="testimonial-thumb"
                                            src="views/pages/assets/images/clients/happy_client.jpg"
                                            alt="testimonial" />
                                        <div class="quote-item-info">
                                            <h3 class="quote-author">Alexis Bwesha</h3>
                                            <span class="quote-subtext">CFO, GrowVenture</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote item end -->
                            </div>
                            <!--/ Item 2 end -->

                            <div class="item">
                                <div class="quote-item">
                                    <span class="quote-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor inci done idunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitoa tion ullamco laboris nisi ut commodo consequat.
                                    </span>

                                    <div class="quote-item-footer">
                                        <img loading="lazy" class="testimonial-thumb"
                                            src="views/pages/assets/images/clients/happy_client2.jpg"
                                            alt="testimonial" />
                                        <div class="quote-item-info">
                                            <h3 class="quote-author">Barbuto Coder</h3>
                                            <span class="quote-subtext">Director, AKT</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote item end -->
                            </div>
                            <!--/ Item 3 end -->
                        </div>
                        <!--/ Testimonial carousel end-->
                    </div>
                    <!-- Col end -->

                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <h3 class="column-title">NOS PARTENAIRES</h3>

                        <div class="row all-clients">
                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="views/pages/assets/images/clients/client.png" alt="clients-logo" /></a>
                                </figure>
                            </div>
                            <!-- Client 1 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="views/pages/assets/images/clients/client01.png"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div>
                            <!-- Client 2 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="views/pages/assets/images/clients/client03.png"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div>
                            <!-- Client 3 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="views/pages/assets/images/clients/client04.png"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div>
                            <!-- Client 4 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="views/pages/assets/images/clients/client05.png"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div>
                            <!-- Client 5 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="views/pages/assets/images/clients/client07.png"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div>
                            <!-- Client 6 end -->
                        </div>
                        <!-- Clients row end -->
                    </div>
                    <!-- Col end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section>
        <!-- Content end -->

        <section id="news" class="news">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="section-title">Informations</h2>
                        <h3 class="section-sub-title">Dernières informations</h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <?php foreach ($recentNews as $new) : ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="latest-post">
                            <div class="latest-post-media">
                                <a href="new-<?= $new->getIdn() ?>" class="latest-post-img">
                                    <img loading="lazy" class="img-fluid"
                                        src="views/pages/assets/images/news/<?= $new->getInfoimage() ?>" alt="img" />
                                </a>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="new-<?= $new->getIdn() ?>"
                                        class="d-inline-block"><?= $new->getTitleinfo() ?></a>
                                </h4>
                                <div class="latest-post-meta">
                                    <span class="post-item-date">
                                        <i class="fa fa-clock-o"></i> <?= $new->getDateinfo() ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Latest post end -->
                    </div>
                    <?php endforeach; ?>
                    <!-- 1st post col end -->
                </div>
                <!--/ Content row end -->

                <div class="general-btn text-center mt-4">
                    <a class="btn btn-primary" href="news">Plus d'informations</a>
                </div>
            </div>
            <!--/ Container end -->
        </section>
        <!--/ News end -->

        <section class="subscribe no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="subscribe-call-to-acton">
                            <h3>Pouvons-nous vous aidez ?</h3>
                            <h4>(+243) 819-240-025</h4>
                        </div>
                    </div>
                    <!-- Col end -->

                    <div class="col-md-8">
                        <div class="ts-newsletter row align-items-center">
                            <div class="col-md-5 newsletter-introtext">
                                <h4 class="text-white mb-0">Inscription Newsletter</h4>
                                <p class="text-white">Recevez nos dernières nouvelles </p>
                            </div>

                            <div class="col-md-5 newsletter-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                                        <input type="email" name="email" id="newsletter-email"
                                            class="form-control form-control-lg" placeholder="Entrer votre email"
                                            autocomplete="off" />

                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2 newsletter-form">
                                <button class="btn btn-warning btn-sm" type="button">Souscrire</button>
                            </div>
                        </div>
                        <!-- Newsletter end -->
                    </div>
                    <!-- Col end -->
                </div>
                <!-- Content row end -->
            </div>
            <!--/ Container end -->
        </section>
        <!--/ subscribe end -->

        <footer id="footer" class="footer bg-overlay">
            <div class="footer-main">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 footer-widget footer-about">
                            <h3 class="widget-title">A propos</h3>
                            <img loading="lazy" width="200px" class="footer-logo"
                                src="views/pages/assets/images/logo_cm_footer.png" alt="Constra" />
                            <p>
                                CMS est une entreprise congolaise oeuvrant dans la construction des bâtiments, maisons
                                et routes. Son siège social est dans la ville de Goma, Com. de Goma, Q. Lac Vert, Av.
                                Kabande, le long de la route Goma-Sake.
                            </p>
                            <div class="footer-social">
                                <ul>
                                    <li>
                                        <a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/themefisher" aria-label="Twitter"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/themefisher" aria-label="Github"><i
                                                class="fab fa-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer social end -->
                        </div>
                        <!-- Col end -->

                        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                            <h3 class="widget-title">Heure de travail</h3>
                            <div class="working-hours">
                                Nous travaillons 7 jours sur 7, tous les jours hormis les jours fériés et les dimanches.
                                Contactez-nous si vous avez une urgence, avec notre Hotline et notre formulaire de
                                contact.
                                <br /><br /> Lundi - Vendredi :
                                <span class="text-right">08:00 - 16:00 </span> <br /> Samedi : <span
                                    class="text-right">10:00 - 16:00</span> <br /> Dimanches et Jours Fériés :
                                <span class="text-right">00:00 - 00:00</span>
                            </div>
                        </div>
                        <!-- Col end -->

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                            <h3 class="widget-title">Services</h3>
                            <ul class="list-arrow">
                                <li><a href="javascript:;">Construction industrielle</a></li>
                                <li><a href="javascript:;">Construction des bâtiments</a></li>
                                <li><a href="javascript:;">Travaux hydroliques et publics</a></li>
                                <li>
                                    <a href="javascript:;">Production des peintures et blocs</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Pave de toutes sortes</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Expertise en BTP</a>
                                </li>

                            </ul>
                        </div>
                        <!-- Col end -->
                    </div>
                    <!-- Row end -->
                </div>
                <!-- Container end -->
            </div>
            <!-- Footer main end -->

            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright-info text-center text-md-left">
                                <span>Copyright &copy;
                                    <script>
                                    document.write(new Date().getFullYear());
                                    </script> CMS sarl

                                </span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="footer-menu text-center text-md-right">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:;">A propos</a></li>
                                    <li><a href="javascript:;">Notre équipe</a></li>
                                    <li><a href="javascript:;">Faq</a></li>
                                    <li><a href="javascript:;">News</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

                    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                        <button class="btn btn-primary" title="Back to Top">
                            <i class="fa fa-angle-double-up"></i>
                        </button>
                    </div>
                </div>
                <!-- Container end -->
            </div>
            <!-- Copyright end -->
        </footer>
        <!-- Footer end -->

        <!-- Javascript Files
  ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="views/pages/assets/plugins/jQuery/jquery.min.js"></script>
        <!-- Bootstrap jQuery -->
        <script src="views/pages/assets/plugins/bootstrap/bootstrap.min.js" defer></script>
        <!-- Slick Carousel -->
        <script src="views/pages/assets/plugins/slick/slick.min.js"></script>
        <script src="views/pages/assets/plugins/slick/slick-animation.min.js"></script>
        <!-- Color box -->
        <script src="views/pages/assets/plugins/colorbox/jquery.colorbox.js"></script>
        <!-- shuffle -->
        <script src="views/pages/assets/plugins/shuffle/shuffle.min.js" defer></script>

        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer>
        </script>
        <!-- Google Map Plugin-->
        <script src="views/pages/assets/plugins/google-map/map.js" defer></script>

        <!-- Template custom -->
        <script src="views/pages/assets/js/script.js"></script>
    </div>
    <!-- Body inner end -->
</body>

</html>