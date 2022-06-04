<?php
if (!isset($_SESSION['user']) || !isset($_SESSION['compte']))
    echo '<script>window.location="login";</script>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CMS - Mailbox</title>

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
                    <span class="brand">CMS
                        <!-- <span class="brand-tip"> CMS</span> -->
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
                            <span></span><?= $_SESSION['compte'] ?><i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-user"></i>Mon Profil</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-cog"></i>Paramètres</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="login"><i class="fa fa-power-off"></i>Déconnexion</a>
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
                        <a href="dashboard"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">MENUS</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-product-hunt"></i>
                            <span class="nav-label">Articles</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="product">Ajouter un article </a>
                            </li>
                            <li>
                                <a href="stock">En Stock </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="production"><i class="sidebar-item-icon fa fa-shopping-bag"></i>
                            <span class="nav-label">Production</span></a>
                    </li>
                    <li>
                        <a href="purchases"><i class="sidebar-item-icon fa fa-shopping-cart"></i>
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
                    <li>
                        <a href="carburant"><i class="sidebar-item-icon fa fa-building"></i>
                            <span class="nav-label">Carburant</span>
                        </a>
                    </li>
                    <li class="heading">MESSAGES</li>
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
                    <!-- <li>
                        <a href="publish"><i class="sidebar-item-icon fa fa-info"></i>
                            <span class="nav-label">Informations</span></a>
                    </li> -->
                    <li class="heading">CONFIGURATIONS</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-cog"></i>
                            <span class="nav-label">Paramètres</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="mailbox.html">Utilisateurs</a>
                            </li>
                            <li>
                                <a href="mail_compose.html">Composer un mail</a>
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
                <h1 class="page-title">Mailbox</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Mailbox</li>
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
                                <?php $managerMessage = new ManagerMessage(); ?>
                                <a href="mailbox"><i class="fa fa-envelope-open-o"></i> Tous les messages
                                    <span
                                        class="badge badge-default badge-square pull-right"><?= count($messages) ?></span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;" id="btr"><i class="fa fa-envelope-o"></i> Boîte de reception
                                    <span
                                        class="badge badge-warning badge-square pull-right"><?= count($managerMessage->getMessageByTypeMsg('receive')) ?></span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a id="msge" href="javascript:;"><i class="fa fa-send-o"></i> Messages Envoyés <span
                                        class="badge badge-primary badge-square pull-right"><?= count($managerMessage->getMessageByTypeMsg('sent')) ?></span></a>
                            </li>
                            <li class="list-group-item">
                                <a id="msgi" href="javascript:;"><i class="fa fa-star-o"></i> Important
                                    <span
                                        class="badge badge-success badge-square pull-right"><?= count($managerMessage->getMessageByTypeMsg('important')) ?></span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a id="msgd" href="javascript:;"><i class="fa fa-trash-o"></i> Corbeille <span
                                        class="badge badge-danger badge-square pull-right"><?= count($managerMessage->getMessageByTypeMsg('delete')) ?></span></a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="ibox" id="mailbox-container">
                            <div class="mailbox-header">
                                <div class="d-flex justify-content-between">
                                    <h5 id="title-msg" class="d-none d-lg-block inbox-title"><i
                                            class="fa fa-envelope-open-o m-r-5"></i>
                                        Tous les messages (<?= count($messages) ?>)</h5>
                                    <form class="mail-search" action="javascript:;">
                                        <div class="input-group">
                                            <input class="form-control" type="text" id="text-search"
                                                placeholder="Rechercher un mail...">
                                            <div class="input-group-btn">
                                                <button class="btn btn-info">Rechercher</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-between inbox-toolbar p-t-20">
                                    <div class="d-flex">
                                        <label class="ui-checkbox ui-checkbox-info check-single p-t-5 m-r-20">
                                            <input type="checkbox" data-select="all">
                                            <span class="input-span"></span>
                                        </label>
                                        <div id="inbox-actions">
                                            <button class="btn btn-default btn-sm" data-toggle="tooltip"
                                                data-original-title="Mark as read"><i class="fa fa-eye"></i></button>
                                            <button class="btn btn-default btn-sm" data-toggle="tooltip"
                                                data-original-title="Mark as important"><i
                                                    class="fa fa-star-o"></i></button>
                                            <button class="btn btn-default btn-sm" data-toggle="tooltip"
                                                data-original-title="Reply"><i class="fa fa-reply"></i></button>
                                            <button class="btn btn-default btn-sm" data-toggle="tooltip"
                                                data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                        <span class="counter-selected m-l-5" hidden="">Selected
                                            <span class="font-strong text-warning counter-count">3</span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="p-r-10 font-13">1-50 of 420</span>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                                            <button class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mailbox clf">
                                <table class="table table-hover table-inbox" id="table-inbox">
                                    <tbody class="rowlinkx" data-link="row" id="table-message">
                                        <?php foreach ($messages as $message) : ?>
                                        <tr class="<?= $message->getStatutmsg() == 0 ? "unread" : "" ?>" data-id="2">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a
                                                    href="mailview-<?= $message->getIdmsg() ?>"><?= $message->getSender() ?></a>
                                            </td>
                                            <td class="mail-message"><?= $message->getSujet() ?></td>
                                            <td class="mail-label hidden-xs"><i
                                                    class="fa <?= $message->getStatutmsg() == 0 ? "fa-circle text-warning" : "" ?> "></i>
                                            </td>
                                            <td class="text-right"><?= cal_time_ago($message->getDatemsg())  ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <ul class="pagination justify-content-end m-t-0 m-r-10">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:;" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:;">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:;">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:;">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:;">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:;" aria-label="Next"><i
                                                class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
    <script src="views/admin/assets/js/scripts/mailbox.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/request/contactAdmin.js" type="text/javascript"></script>

</body>

</html>