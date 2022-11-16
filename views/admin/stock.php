<?php
$managerPage = new ManagerPage();
if (!isset($_SESSION['user']) || !isset($_SESSION['compte']))
    echo '<script>window.location="login";</script>';

if (isset($_SESSION['idprod_fiche']))
    unset($_SESSION['idprod_fiche']);

if (count($managerPage->testUserAccessPage($_SESSION['iduser'], 'Article', 'Page')) == 0)
    echo '<script>window.location="lockscreen";</script>'; {;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CMS - Stock</title>
    <!-- INCONS -->
    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png" />

    <!-- GLOBAL MAINLY STYLES-->
    <link href="views/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="views/admin/assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="views/admin/assets/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="views/admin/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->

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
                    <li class="dropdown dropdown-inbox">
                        <!-- data-toggle="dropdown" -->
                        <a class="nav-link dropdown-toggle" data-toggle=""><i class="fa fa-envelope-o"></i>
                            <span class="badge badge-primary envelope-badge">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>9 New</strong> Messages</span>
                                    <a class="pull-right" href="mailbox.html">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u1.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"> </div>Jeanne Gonzalez<small class="text-muted float-right">Just now</small>
                                                <div class="font-13">Your proposal interested me.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u2.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Becky Brooks<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u3.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Frank Cruz<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u4.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Rose Pearson<small class="text-muted float-right">3 hrs</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification">
                        <!-- data-toggle="dropdown" -->
                        <a class="nav-link dropdown-toggle" data-toggle=""><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>5 New</strong> Notifications</span>
                                    <a class="pull-right" href="javascript:;">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
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
                    <li class="active">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-product-hunt"></i>
                            <span class="nav-label">Articles</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="product">Ajouter un article </a>
                            </li>
                            <li>
                                <a class="active" href="stock">En Stock </a>
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
                    <li class="heading">MESSAGES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Messages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="mailbox">Boîte de reception</a>
                            </li>
                            <li>
                                <a href="mailcompose">Composer un mail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">CONFIGURATIONS</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-cog"></i>
                            <span class="nav-label">Paramètres</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="register">Utilisateurs</a>
                            </li>
                            <li>
                                <a href="javascript:;">Configurations</a>
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
                <h1 class="page-title">Produits en Stock</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Produits enregistrés</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Produits en Stock</div>
                        <div class="ibox-tools">
                            <div class="ibox-tools">
                                <a class="text-primary" data-toggle="modal" data-target="#modal-category">Catégories</a>
                                <a class="text-warning" data-toggle="modal" data-target="#modal-mesure">Unités de Mesures</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Désignation</th>
                                        <th>Catégorie</th>
                                        <th>En Stock</th>
                                        <th>Stock alert</th>
                                        <th>Prix vetnte</th>
                                        <th>Valeur Stock</th>
                                        <th>Alerte Stock</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Désignation</th>
                                        <th>Catégorie</th>
                                        <th>En Stock</th>
                                        <th>Stock alert</th>
                                        <th>Prix vetnte</th>
                                        <th>Valeur Stock</th>
                                        <th>Alerte Stock</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody id="tab-product">
                                    <?php
                                    foreach ($product as $prod) : ?>
                                        <tr>
                                            <td><?= $prod->getIdprod() ?></td>
                                            <td><?= $prod->getDesignationprod() ?></td>
                                            <td><?= $prod->getDesignationcat() ?></td>
                                            <td><?= $prod->getQuantitest() . '' . $prod->getDesignationu() ?></td>
                                            <td><?= $prod->getStalert() . $prod->getDesignationu() ?></td>
                                            <td><?= $prod->getPrixprod() . '$' ?></td>
                                            <td><?= ($prod->getQuantitest() * $prod->getPrixprod()) . '$' ?></td>
                                            <td class="alert text-center <?= $prod->getQuantitest() < $prod->getStalert() ? 'alert-danger' : 'alert-success' ?>">
                                                <span><?= $prod->getQuantitest() < $prod->getStalert() ? 'Stock Insuffisant' : 'Stock Suffisant' ?></span>
                                            </td>
                                            <td>
                                                <button class="btn btn-default btn-xs m-r-5" data-toggle="modal" title="Modifier" data-target="#modal-update"><i class="fa fa-pencil font-14"></i></button>
                                                <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Supprimer"><i class="fa fa-trash font-14 sweet-8"></i></button>
                                                <!-- <button class="btn btn-default btn-sm m-r-5" data-toggle="modal" data-target="#modal-update"><i class="fa fa-pencil font-14" data-original-title="Modifier" data-toggle="tooltip"> Modifier ce
                                                        produit</i></button> -->
                                                <!-- <button class="btn btn-default btn-xs"><i class="fa fa-trash font-14"
                                                    ></i></button> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ibox-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <button style="margin-right:35px;" class="btn btn-warning btn-sm pull-right" data-toggle="modal" data-target="#modal-choose" id="fiche-stock"> Fiche de
                                    Stock Produit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODALS -->
                <!-- Modal Category -->
                <div class="modal fade" id="modal-category">
                    <div class="modal-dialog">
                        <div class="modal-content ibox">
                            <div class="modal-header ibox-head">
                                <div class="modal-title ibox-title">Ajouter Catégorie</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">Supprimer</a>
                                        <a class="dropdown-item close-btn" data-dismiss="modal" aria-label="Close">Fermer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body ibox-body">
                                <form id="form-category">
                                    <div class="form-group">
                                        <input type="hidden" name="action" value="category" />
                                        <input type="hidden" name="actionu" value="1" />
                                        <input type="hidden" name="id" value="0" />
                                        <input class="form-control" type="text" id="designationc" name="designation" required placeholder="Désignation">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="add-quartier" class="btn btn-primary form-control">Enregistrer
                                        </button>
                                    </div>
                                </form>
                                <div class="form-group">
                                    <label>Catégorie produit</label>
                                    <select class="form-control" multiple="" id="list-categorie" style="height:150px">
                                        <?php foreach ($categories as $category) : ?>
                                            <option value="<?= $category->getIdcat() ?>">
                                                <?= $category->getDesignationcat() ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                <span id="message-category"></span>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- End Modal Category -->

                <!-- Modal Mesure -->
                <div class="modal fade" id="modal-mesure">
                    <div class="modal-dialog">
                        <div class="modal-content ibox">
                            <div class="modal-header ibox-head">
                                <div class="modal-title ibox-title">Ajouter Mesure</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">Supprimer</a>
                                        <a class="dropdown-item close-btn" data-dismiss="modal" aria-label="Close">Fermer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body ibox-body">
                                <form id="form-unite">
                                    <div class="form-group">
                                        <input type="hidden" name="action" value="unite" />
                                        <input type="hidden" name="actionu" value="1" />
                                        <input type="hidden" name="id" value="0" />
                                        <input class="form-control" type="text" id="designationu" name="designation" required placeholder="Désignation">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="add-quartier" class="btn btn-primary form-control">Enregistrer
                                        </button>
                                    </div>
                                </form>
                                <div class="form-group">
                                    <label>Unité de Mesure</label>
                                    <select class="form-control" multiple="" id="list-quartier" style="height:150px">
                                        <?php foreach ($unites as $unite) : ?>
                                            <option value="<?= $unite->getIdu() ?>"><?= $unite->getDesignationu() ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                <span id="message-mesure"></span>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- End Modal Mesure -->

                <!-- Modal Update -->
                <div class="modal fade" id="modal-update">
                    <div class="modal-dialog">
                        <div class="modal-content ibox">
                            <div class="modal-header ibox-head">
                                <div class="modal-title ibox-title"><i class="sidebar-item-icon fa fa-product-hunt"></i> Modifier Produit</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item sweet-8" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Lipis']);" data-original-title="Supprimer cet article" data-toggle="tooltip">Supprimer</a>
                                        <a class="dropdown-item close-btn" data-dismiss="modal" aria-label="Close">Fermer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body ibox-body">
                                <form id="form-product2" class="form-horizontal" method="post" novalidate="novalidate">
                                    <h2 class="user-title" style="padding-bottom: 10px; font-size: 16px;">Modification du produit</h2>
                                    <div>
                                        <input type="hidden" name="action" value="product" />
                                        <input type="hidden" name="actionu" value="2" />
                                        <input type="hidden" id="idprod" name="idprod" value="0" />
                                        <input type="hidden" id="quantitest2" name="quantitest" value="0" />
                                        <div class="form-group">
                                            <label class="col-form-label">Désignation</label>
                                            <div class="">
                                                <input class="form-control" type="text" id="designationprod2" name="designationprod" required placeholder="Désignation">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="prixprod">PA/PV</label>
                                                    <input class="form-control" type="number" name="prixprod" id="prixprod2" required placeholder="Prix">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="stalert">Stock alert</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="number" name="stalert" id="stalert2" required placeholder="Stock alert">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="refcat">Catégorie</label>
                                            <select class="form-control select2_demo_1" style="width:100%" name="refcat" id="refcat2" required>
                                                <option value="">Choisir une catégorie</option>
                                                <optgroup label="Catégories">
                                                    <?php foreach ($categories as $category) : ?>
                                                        <option value="<?= $category->getIdcat() ?>">
                                                            <?= $category->getDesignationcat() ?></option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="refunit">Unité de mesure</label>
                                            <select class="form-control select2_demo_1" style="width:100%" name="refunit" id="refunit2" required>
                                                <option value="">Choisir une unité de mesure</option>
                                                <optgroup label="Unité de mesure">
                                                    <?php foreach ($unites as $unite) : ?>
                                                        <option value="<?= $unite->getIdu() ?>">
                                                            <?= $unite->getDesignationu() ?></option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="stock">En Stock</label>
                                            <input class="form-control" disabled type="text" id="stock2" name="stock" required placeholder="Stock" value="0">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-info" type="submit">Enregistrer les modifications</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                <span id="message2"></span>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- End Modal Update -->

                <!-- Modal Category -->
                <div class="modal fade" id="modal-choose">
                    <div class="modal-dialog">
                        <div class="modal-content ibox">
                            <div class="modal-header ibox-head">
                                <div class="modal-title ibox-title">Choisir un article/Produit</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item close-btn" data-dismiss="modal" aria-label="Close">Fermer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body ibox-body">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select class="form-control select2_demo_1" style="width:100%" name="refprod" id="refprodo" required>
                                            <option value="">Choisir un article/Produit</option>
                                            <optgroup label="Nos articles">
                                                <?php foreach ($product as $prod) : ?>
                                                    <option value="<?= $prod->getIdprod() ?>">
                                                        <?= $prod->getDesignationprod() ?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="fichestocko" class="btn btn-primary form-control">Fiche
                                        de Stock
                                    </button>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                <div id="message3"></div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- End Modal Category -->
                <!-- END MODALS -->
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

    <script src="views/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="views/admin/assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/scripts/form-plugins.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="views/admin/assets/js/app.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/request/productRequest.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 15,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
    <script>
        table = document.getElementById("tab-product");
        for (i = 0; i < table.rows.length; i++) {
            table.rows[i].onclick = function() {
                getOneProduct(this.cells[0].innerText);
                document.getElementById("idprod").value = this.cells[0].innerText;
                document.getElementById("designationprod2").value = this.cells[1].innerText;
                document.getElementById("stock2").value = this.cells[3].innerText;
            }
        }

        function getOneProduct(idprod) {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: {
                    action: 'oneprod',
                    idprod: idprod
                },
                timeout: 5000,
                success: function(data) {
                    var response = $.parseJSON(data);
                    $("#prixprod2").val(response.prix);
                    $("#stalert2").val(response.alertSt);
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    </script>
    <script>
        document.querySelector('.sweet-8').onclick = function() {
            swal({
                title: "Suppression d'un article.",
                text: "Voulez-vous supprimer ce produit ?",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Oui, supprimer',
                cancelButtonText: "Non, annuler",
                closeOnCancel: true

            }, function() {
                setTimeout(function() {
                    $.ajax({
                        url: "models/requests/RequestCbase.php",
                        type: "POST",
                        data: {
                            action: 'product',
                            actionu: '3',
                            idprod: $('#idprod').val(),
                        },
                        success: function() {
                            $('#form-product2')[0].reset();
                            swal("Produit supprimé avec succès !",
                                "Suppression d'un produit.", "success");
                        },
                        error: function() {
                            // swal("Echec de la requête sur le serveur.",
                            //     "Suppression d'un produit.", "success");
                            alert("Echec de la requête sur le serveur.");
                        }
                    });
                }, 2000);
            });
        };
    </script>

</body>

</html>