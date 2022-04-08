<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>CMS - Projets</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="views/pages/assets/plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="views/pages/assets/plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="views/pages/assets/plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="views/pages/assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="views/pages/assets/plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="views/pages/assets/plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="views/pages/assets/css/style.css">

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
                                    <img loading="lazy" src="views/pages/assets/images/logo_cm.png" alt="CMS" />
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
                                        <li class="nav-item ">
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
                                        <li class="nav-item active">
                                            <a href="gallerie" class="nav-link ">Gallérie</a>
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
                                placeholder="Type what you want and enter" />
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
        <div id="banner-area" class="banner-area"
            style="background-image:url(views/pages/assets/images/banner/bnner1.jpg)">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-heading">
                                <h1 class="banner-title">Gallerie</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="<?= URL ?>">Accueil</a></li>
                                        <li class="breadcrumb-item"><a href="#">CMS-SARL</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Gallérie</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- Col end -->
                    </div>
                    <!-- Row end -->
                </div>
                <!-- Container end -->
            </div>
            <!-- Banner text end -->
        </div>
        <!-- Banner area end -->

        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shuffle-btn-group">
                            <label class="active" for="all">
                                <input type="radio" name="shuffle-filter" id="all" value="all"
                                    checked="checked">Afficher Tout
                            </label>
                            <label for="commercial">
                                <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Personnel
                                CMS
                            </label>
                            <label for="government">
                                <input type="radio" name="shuffle-filter" id="government" value="government">Bureau CMS
                            </label>
                            <label for="education">
                                <input type="radio" name="shuffle-filter" id="education" value="education">Réalisation
                            </label>

                            <label for="infrastructure">
                                <input type="radio" name="shuffle-filter" id="infrastructure"
                                    value="infrastructure">Infrastructure
                            </label>
                            <label for="residential">
                                <input type="radio" name="shuffle-filter" id="residential" value="residential">Chantiers
                            </label>
                            <label for="healthcare">
                                <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Maquette
                            </label>
                        </div>
                        <!-- project filter end -->


                        <div class="row shuffle-wrapper">
                            <div class="col-1 shuffle-sizer"></div>

                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project7.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project7.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Capital Teltway Building</a>
                                            </h3>
                                            <p class="project-cat">Commercial, Interiors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shuffle item 1 end -->


                            <!-- shuffle item 2 end -->

                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project4.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project4.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">TNT East Facility</a>
                                            </h3>
                                            <p class="project-cat">Government</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shuffle item 3 end -->

                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project5.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project5.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Narriot Headquarters</a>
                                            </h3>
                                            <p class="project-cat">Infrastructure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shuffle item 4 end -->

                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project6.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project6.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Kalas Metrorail</a>
                                            </h3>
                                            <p class="project-cat">Infrastructure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shuffle item 5 end -->

                            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project7.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project7.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Ancraft Avenue House</a>
                                            </h3>
                                            <p class="project-cat">Residential</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shuffle item 6 end -->

                            <!-- REALISATION -->
                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project2.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project2.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Kalas Metrorail</a>
                                            </h3>
                                            <p class="project-cat">Infrastructure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END REALISATION -->

                            <!-- MAQUETTE -->
                            <!-- <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project7.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project7.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Ghum Touch Hospital</a>
                                            </h3>
                                            <p class="project-cat">Healthcare</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project8.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project8.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Ghum Touch Hospital</a>
                                            </h3>
                                            <p class="project-cat">Healthcare</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project9.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project9.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Ghum Touch Hospital</a>
                                            </h3>
                                            <p class="project-cat">Healthcare</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project10.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project10.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Ghum Touch Hospital</a>
                                            </h3>
                                            <p class="project-cat">Healthcare</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project11.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project11.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Ghum Touch Hospital</a>
                                            </h3>
                                            <p class="project-cat">Healthcare</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="views/pages/assets/images/projects/project12.jpg">
                                        <img class="img-fluid" src="views/pages/assets/images/projects/project12.jpg"
                                            alt="project-image">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Ghum Touch Hospital</a>
                                            </h3>
                                            <p class="project-cat">Healthcare</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- END MAQUETTE -->
                        </div>
                        <!-- shuffle end -->
                    </div>

                    <div class="col-12">
                        <div class="general-btn text-center">
                            <a class="btn btn-primary" href="#">Gallerie Photos</a>
                        </div>
                    </div>

                </div>
                <!-- Content row end -->

            </div>
            <!-- Conatiner end -->
        </section>
        <!-- Main container end -->

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
                                <li><a href="service-single.html">Construction industrielle</a></li>
                                <li><a href="service-single.html">Construction des bâtiments</a></li>
                                <li><a href="service-single.html">Travaux hydroliques et publics</a></li>
                                <li>
                                    <a href="service-single.html">Production des peintures et blocs</a>
                                </li>
                                <li>
                                    <a href="service-single.html">Pave de toutes sortes</a>
                                </li>
                                <li>
                                    <a href="service-single.html">Expertise en BTP</a>
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
                                    <li><a href="about">A propos</a></li>
                                    <li><a href="team">Notre équipe</a></li>
                                    <li><a href="faq">Faq</a></li>
                                    <li><a href="news">News</a></li>
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