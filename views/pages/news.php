<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>CMS - News</title>

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
                                        <li class="nav-item">
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
                                        <li class="nav-item active">
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
                                <h1 class="banner-title">News</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="<?= URL ?>">Accueil</a></li>
                                        <li class="breadcrumb-item"><a href="about">CMS-SARL</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">NEWS</li>
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

                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <?php $managerCommentaire = new ManagerCommentaire();
                        foreach ($news as $new) : ?>
                        <div class="post">
                            <div class="post-media post-image">
                                <img loading="lazy" src="views/pages/assets/images/news/<?= $new->getInfoimage() ?>"
                                    class="img-fluid" alt="post-image">
                            </div>
                            <div class="post-body">
                                <div class="entry-header">
                                    <div class="post-meta">
                                        <span class="post-author">
                                            <i class="far fa-user"></i><a href="home"> CMS</a>
                                        </span>
                                        <span class="post-cat">
                                            <i class="far fa-folder-open"></i><a href="new-<?= $new->getIdn() ?>">
                                                <?= $new->getInfotype() ?></a>
                                        </span>
                                        <span class="post-meta-date"><i class="far fa-calendar"></i>
                                            <?= $new->getDateinfo() ?></span>
                                        <span class="post-comment"><i class="far fa-comment"></i>
                                            <?= '0' . count($managerCommentaire->getCommentaireForNew($new->getIdn())) ?><a
                                                href="new-<?= $new->getIdn() ?>"
                                                class="comments-link">Commentaires</a></span>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="new-<?= $new->getIdn() ?>"><?= $new->getTitleinfo() ?></a>
                                    </h2>
                                </div>
                                <!-- header end -->

                                <div class="entry-content">
                                    <p><?= $new->getInformation() ?></p>
                                </div>

                                <div class="post-footer">
                                    <a href="new-<?= $new->getIdn() ?>" class="btn btn-primary">Continuer la Lecture</a>
                                </div>

                            </div>
                            <!-- post-body end -->
                        </div>
                        <?php endforeach; ?>
                        <!-- 1st post end -->

                        <nav class="paging" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-angle-double-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Content Col end -->

                    <div class="col-lg-4">

                        <div class="sidebar sidebar-right">
                            <div class="widget recent-posts">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul class="list-unstyled">
                                    <?php foreach ($rnews as $rnew) : ?>
                                    <li class="d-flex align-items-center">
                                        <div class="posts-thumb">
                                            <a href="new-<?= $rnew->getIdn() ?>"><img loading="lazy" alt="img"
                                                    src="views/pages/assets/images/news/<?= $rnew->getInfoimage() ?>"></a>
                                        </div>
                                        <div class="post-info">
                                            <h4 class="entry-title">
                                                <a href="new-<?= $rnew->getIdn() ?>"><?= $rnew->getTitleinfo() ?></a>
                                            </h4>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                    <!-- 1st post end-->
                                </ul>

                            </div>
                            <!-- Recent post end -->

                            <div class="widget">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="arrow nav nav-tabs">
                                    <li><a href="#">Article</a></li>
                                    <li><a href="#">Communauté</a></li>
                                    <li><a href="#">Construction</a></li>
                                    <li><a href="#">Offre d'emplois</a></li>
                                    <li><a href="#">Général</a></li>
                                </ul>
                            </div>
                            <!-- Categories end -->

                            <div class="widget">
                                <h3 class="widget-title">Archives </h3>
                                <ul class="arrow nav nav-tabs">
                                    <li><a href="#">Feburay 2016</a></li>
                                    <li><a href="#">January 2016</a></li>
                                    <li><a href="#">December 2015</a></li>
                                    <li><a href="#">November 2015</a></li>
                                    <li><a href="#">October 2015</a></li>
                                </ul>
                            </div>
                            <!-- Archives end -->

                            <div class="widget widget-tags">
                                <h3 class="widget-title">Tags </h3>

                                <ul class="list-unstyled">
                                    <li><a href="#">Construction</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Building</a></li>
                                    <li><a href="#">Finance</a></li>
                                    <li><a href="#">Safety</a></li>
                                    <li><a href="#">Contracting</a></li>
                                    <li><a href="#">Planning</a></li>
                                </ul>
                            </div>
                            <!-- Tags end -->


                        </div>
                        <!-- Sidebar end -->
                    </div>
                    <!-- Sidebar Col end -->

                </div>
                <!-- Main row end -->

            </div>
            <!-- Container end -->
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