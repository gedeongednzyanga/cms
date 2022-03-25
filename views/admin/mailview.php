<?php
session_start();
if (!isset($_SESSION['user']))
    header("Location:login");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CMS - Mail View</title>

    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="views/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="views/admin/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="views/admin/assets/css/pages/mailbox.css" rel="stylesheet" />
</head>

<body class="fixed-navbar fixed-layout">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="home">
                    <span class="brand">
                        <span class="brand-tip"> CMS</span>
                    </span>
                    <span class="brand-mini">CMS</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Rechercher...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="views/admin/assets/img/admin-avatar.png" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="login"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="views/admin/assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong"><?= $_SESSION['user']  ?></div>
                        <small><?= $_SESSION['compte']  ?></small>
                    </div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a href="home"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">MENUS</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-product-hunt"></i>
                            <span class="nav-label">Productions</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="product">Ajouter un produit </a>
                            </li>
                            <li>
                                <a href="production">Production </a>
                            </li>
                            <li>
                                <a href="stock">En Stock </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="purchases"><i class="sidebar-item-icon fa fa-shopping-bag"></i>
                            <span class="nav-label">Approvisionnement</span></a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-shopping-basket"></i>
                            <span class="nav-label">Commandes <i class="fa fa-angle-left arrow"></i></span> </a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="commande">Commande client</a>
                            </li>
                            <li>
                                <a href="delivery">Livraisons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="billing"><i class="sidebar-item-icon fa fa-building-o"></i>
                            <span class="nav-label">Facturation</span>
                        </a>
                    </li>
                    <li class="heading">MESSAGES & INFOS</li>
                    <li class="active">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Messages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a class="active" href="mailbox">Boîte de reception</a>
                            </li>
                            <li>
                                <a href="mailcompose">Composer un mail</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="operations"><i class="sidebar-item-icon fa fa-info"></i>
                            <span class="nav-label">Informations</span></a>
                    </li>
                    <li class="heading">CONFIGURATIONS</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-cog"></i>
                            <span class="nav-label">Paramètres</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="mailbox">Utilisateurs</a>
                            </li>
                            <li>
                                <a href="mailcompose">Composer un mail</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Mail View</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Mail View</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <a class="btn btn-info btn-block" href="mailcompose"><i class="fa fa-edit"></i>
                            Envoyer un mail</a><br>
                        <h6 class="m-t-10 m-b-10">Tous les libellés</h6>
                        <ul class="list-group list-group-divider inbox-list">
                            <li class="list-group-item">
                                <a href="mailbox"><i class="fa fa-envelope-open-o"></i> Tous les messages
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-envelope-o"></i> Reçus (6)
                                    <span class="badge badge-warning badge-square pull-right">17</span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-send-o"></i> Envoyés</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-star-o"></i> Important
                                    <span class="badge badge-success badge-square pull-right">2</span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-file-text-o"></i> Brouillons</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-trash-o"></i> Corbeille</a>
                            </li>
                        </ul>
                        <!-- <h6 class="m-t-10 m-b-10">LABELS</h6> -->
                        <!-- <ul class="list-group list-group-divider inbox-list">
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-circle-o font-13 text-success"></i> Support</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-circle-o font-13 text-warning"></i> Business</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-circle-o font-13 text-info"></i> Work</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-circle-o font-13 text-danger"></i> System</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-circle-o font-13 text-muted"></i> Social</a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <?php
                        $managerMessage = new ManagerMessage();
                        foreach ($managerMessage->getOneMessage($_GET['number']) as $message) :
                            $message->getStatutmsg() == 0 ? $managerMessage->changeMsgStatus(1, $_GET['number']) : $managerMessage->changeMsgStatus(0, $_GET['number']);
                        ?>
                        <div class="ibox" id="mailbox-container">
                            <div class="mailbox-header d-flex justify-content-between"
                                style="border-bottom: 1px solid #e8e8e8;">
                                <div>
                                    <h5 class="inbox-title"><?= $message->getSujet() ?></h5>
                                    <div class="m-t-5 font-13">
                                        <span class="font-strong"><?= $message->getSender() ?></span>
                                        <a class="text-muted m-l-5" href="javascript:;"><?= $message->getEmails() ?></a>
                                    </div>
                                    <div class="p-r-10 font-13"><?= $message->getDatemsg() ?></div>
                                </div>
                                <div class="inbox-toolbar m-l-20">
                                    <button class="btn btn-default btn-sm" data-action="reply" data-toggle="tooltip"
                                        data-original-title="Reply"><i class="fa fa-reply"></i></button>
                                    <button class="btn btn-default btn-sm" data-toggle="tooltip"
                                        data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-default btn-sm" data-toggle="tooltip"
                                        data-original-title="Mark as important"><i class="fa fa-star-o"></i></button>
                                    <button class="btn btn-default btn-sm" data-toggle="tooltip"
                                        data-original-title="Reply"><i class="fa fa-print"></i></button>
                                </div>
                            </div>
                            <div class="mailbox-body">
                                <p><?= $message->getMessage() ?></p>
                            </div>
                            <!-- <div class="mailbox-body">
                                <div class="d-flex justify-content-between m-b-10">
                                    <span class="font-strong"><i class="fa fa-paperclip"></i> 3 attachments</span>
                                    <button class="btn btn-default btn-sm" data-action="reply" data-toggle="tooltip"
                                        data-original-title="Download all"><i class="fa fa-download"></i></button>
                                </div>
                                <div class="mail-attachments d-flex">
                                    <div class="card">
                                        <div>
                                            <img class="card-img-top file-image"
                                                src="views/admin/assets/img/file.png" />
                                        </div>
                                        <div class="card-body">
                                            <span>storm.jpg</span>
                                            <a class="btn btn-default btn-xs float-right" href="javascript:;"><i
                                                    class="fa fa-download"></i></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div>
                                            <img class="card-img-top file-image"
                                                src="views/admin/assets/img/file.png" />
                                        </div>
                                        <div class="card-body">
                                            <span>horse.jpg</span>
                                            <a class="btn btn-default btn-xs float-right" href="javascript:;"><i
                                                    class="fa fa-download"></i></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="text-center">
                                            <img class="card-img-top file-image" src="views/admin/assets/img/file.png"
                                                height="160px" />
                                        </div>
                                        <div class="card-body">
                                            <span>document.txt</span>
                                            <a class="btn btn-default btn-xs float-right" href="javascript:;"><i
                                                    class="fa fa-download"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">
                    <script>
                    document.write(new Date().getFullYear());
                    </script> © <b>CMS</b> - All rights reserved.
                </div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="views/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <!-- CORE SCRIPTS-->
    <script src="views/admin/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
</body>

</html>