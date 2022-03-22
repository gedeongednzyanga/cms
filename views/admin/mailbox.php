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
                        <a class="btn btn-info btn-block" href="mail_compose.html"><i class="fa fa-edit"></i>
                            Compose</a><br>
                        <h6 class="m-t-10 m-b-10">FOLDERS</h6>
                        <ul class="list-group list-group-divider inbox-list">
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-inbox"></i> Inbox (6)
                                    <span class="badge badge-warning badge-square pull-right">17</span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-envelope-o"></i> Sent</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-star-o"></i> Important
                                    <span class="badge badge-success badge-square pull-right">2</span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-file-text-o"></i> Drafts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:;"><i class="fa fa-trash-o"></i> Trash</a>
                            </li>
                        </ul>
                        <h6 class="m-t-10 m-b-10">LABELS</h6>
                        <ul class="list-group list-group-divider inbox-list">
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
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="ibox" id="mailbox-container">
                            <div class="mailbox-header">
                                <div class="d-flex justify-content-between">
                                    <h5 class="d-none d-lg-block inbox-title"><i class="fa fa-envelope-o m-r-5"></i>
                                        Inbox (15)</h5>
                                    <form class="mail-search" action="javascript:;">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Search email">
                                            <div class="input-group-btn">
                                                <button class="btn btn-info">Search</button>
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
                                    <tbody class="rowlinkx" data-link="row">
                                        <tr data-id="1">
                                            <td class="check-cell rowlink-skip">
                                                <label class="ui-checkbox ui-checkbox-info check-single">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Emma Johnson</a>
                                            </td>
                                            <td class="mail-message">Fusce suscipit semper erat, vel solo.</td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"><i class="fa fa-circle text-success"></i>
                                            </td>
                                            <td class="text-right">5.22 AM</td>
                                        </tr>
                                        <tr class="unread" data-id="2">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Olivia Smith</a>
                                            </td>
                                            <td class="mail-message">Mauris in sem at quam elementum sagittis vel.</td>
                                            <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                            <td class="mail-label hidden-xs"><i class="fa fa-circle text-warning"></i>
                                            </td>
                                            <td class="text-right">4.10 AM</td>
                                        </tr>
                                        <tr class="unread" data-id="3">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Noah Williams</a>
                                            </td>
                                            <td class="mail-message">Neque porro quisquam est qui dolorem ipsum quia
                                            </td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">1.20 AM</td>
                                        </tr>
                                        <tr data-id="4">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Sophia Jones</a>
                                            </td>
                                            <td class="mail-message">Lorem ipsum dolor sit.</td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">Jan 10</td>
                                        </tr>
                                        <tr data-id="5">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Jacob Brown</a>
                                            </td>
                                            <td class="mail-message">Nam vitae magna sollicitudin, fringilla neque sit.
                                            </td>
                                            <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">Dec 18</td>
                                        </tr>
                                        <tr data-id="6">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">James Davis</a>
                                            </td>
                                            <td class="mail-message">Donec eget diam quis lectus auctor.</td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">Dec 12</td>
                                        </tr>
                                        <tr class="unread" data-id="2">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Olivia Smith</a>
                                            </td>
                                            <td class="mail-message">Mauris in sem at quam elementum sagittis vel.</td>
                                            <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                            <td class="mail-label hidden-xs"><i class="fa fa-circle text-warning"></i>
                                            </td>
                                            <td class="text-right">4.10 AM</td>
                                        </tr>
                                        <tr data-id="7">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Ava Wilson</a>
                                            </td>
                                            <td class="mail-message">Duis hendrerit tellus tellus, ut lobortis quam.
                                            </td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"><i class="fa fa-circle text-success"></i>
                                            </td>
                                            <td class="text-right">Sep 7</td>
                                        </tr>
                                        <tr class="unread" data-id="8">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Ethan Taylor</a>
                                            </td>
                                            <td class="mail-message">Neque porro quisquam est qui dolorem ipsum quia
                                                dolor</td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">Sep 1</td>
                                        </tr>
                                        <tr data-id="9">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Emily Thomas</a>
                                            </td>
                                            <td class="mail-message">Proin dictum sem felis, eu.</td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">July 8</td>
                                        </tr>
                                        <tr data-id="10">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Noah Moore</a>
                                            </td>
                                            <td class="mail-message">Phasellus massa velit, sodales non sollicitudin
                                                nec.</td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">July 6</td>
                                        </tr>
                                        <tr data-id="11">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Mia Anderson</a>
                                            </td>
                                            <td class="mail-message">Pellentesque rutrum auctor magna vel facilisis.
                                                Aliquam.</td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"><i class="fa fa-circle text-danger"></i>
                                            </td>
                                            <td class="text-right">June 15</td>
                                        </tr>
                                        <tr data-id="12">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Amelia Harris</a>
                                            </td>
                                            <td class="mail-message">In ac imperdiet nulla. Proin interdum enim.</td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">June 8</td>
                                        </tr>
                                        <tr data-id="13">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Sofia Jackson</a>
                                            </td>
                                            <td class="mail-message">Morbi et lacus malesuada, cursus est non yet.</td>
                                            <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">April 27</td>
                                        </tr>
                                        <tr class="unread" data-id="14">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Daniel Garcia</a>
                                            </td>
                                            <td class="mail-message">Suspendisse potenti. Donec in vestibulum tortor.
                                                Duis.</td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">April 25</td>
                                        </tr>
                                        <tr data-id="15">
                                            <td class="check-cell">
                                                <label class="ui-checkbox ui-checkbox-info">
                                                    <input class="mail-check" type="checkbox">
                                                    <span class="input-span"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="mailview">Lucas Martin</a>
                                            </td>
                                            <td class="mail-message">Curabitur id ultrices erat. Praesent rhoncus augue.
                                            </td>
                                            <td class="hidden-xs"></td>
                                            <td class="mail-label hidden-xs"></td>
                                            <td class="text-right">April 25</td>
                                        </tr>
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
</body>

</html>