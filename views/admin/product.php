<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CMS - Product</title>
    <!-- INCONS -->
    <link href="views/admin/assets/img/logos/yarazak.jpg" rel="icon">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="views/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <ink href="views/admin/assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="views/admin/assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="views/admin/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
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
                                <input class="form-control" placeholder="Search here...">
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
                        <div class="font-strong"><?=/* $_SESSION['telephone'] */ 'Gedeon Nzyanga' ?></div>
                        <small>Administrator</small>
                    </div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a href="home"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">MENUS</li>
                    <li class="active">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-product-hunt"></i>
                            <span class="nav-label">Productions</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a class="active" href="product">Ajouter un produit </a>
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
                                <a href="typography.html">Livraisons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="factures"><i class="sidebar-item-icon fa fa-building-o"></i>
                            <span class="nav-label">Facturation</span>
                        </a>
                    </li>
                    <li class="heading">MESSAGES & INFOS</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Messages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="mailbox.html">Boîte de reception</a>
                            </li>
                            <li>
                                <a href="mail_compose.html">Composer un mail</a>
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
                <h1 class="page-title">Nos produits</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Ajouter un produit</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Enregistrer un produit</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a data-toggle="modal" data-target="#modal-category" class="dropdown-item">Catégorie</a>
                                <a data-toggle="modal" data-target="#modal-mesure" class="dropdown-item">Mesure</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div class="container">
                            <form id="form-product" class="row form-horizontal" method="post" novalidate="novalidate">
                                <div class="col-md-8">
                                    <input type="hidden" name="action" value="product" />
                                    <input type="hidden" name="actionu" value="1" />
                                    <input type="hidden" name="id" value="0" />
                                    <input type="hidden" name="quantitest" value="0" />
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Désignation</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="designationprod"
                                                name="designationprod" required placeholder="Désignation">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">PA/PV</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="prixprod" id="prixprod"
                                                required placeholder="Prix">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Stock alert</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="stalert" id="stalert"
                                                required placeholder="Stock alert">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Catégorie</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" name="refcat" required>
                                                <optgroup label="Catégories">
                                                    <?php foreach ($categories as $category) : ?>
                                                    <option value="<?= $category->getIdcat() ?>">
                                                        <?= $category->getDesignationcat() ?></option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Uni. de mesure</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" name="refunit" required>
                                                <optgroup label="Unité de mesure">
                                                    <?php foreach ($unites as $unite) : ?>
                                                    <option value="<?= $unite->getIdu() ?>">
                                                        <?= $unite->getDesignationu() ?></option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">En Stock</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" disabled type="text" required
                                                placeholder="Stock" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-sm-12 col-form-label">Historique Sortie en stock de <span
                                                class="text-xl-center pull-right">...</span></label>
                                        <select class="form-control" multiple="" id="lst-agent" style="height:235px">
                                            <?php foreach ($_SESSION['production'] as $key) : ?>
                                            <option value="<?= $key['refprod'] ?>">
                                                <?= $key['designationprod'] . ' (' . $key['quantiteprod1'] . ') ' ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="div-message" style="height:53px;">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Produits récemment enregistrés</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="50px"></th>
                                        <th>N°</th>
                                        <th>Désignation</th>
                                        <th>Catégorie</th>
                                        <th>En Stock</th>
                                        <th>Stock alert</th>
                                        <th>Prix vetnte</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tab-product">
                                    <?php foreach ($product8 as $product) : ?>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td><?= $product->getIdprod() ?></td>
                                        <td><?= $product->getDesignationprod() ?></td>
                                        <td><?= $product->getDesignationcat() ?></td>
                                        <td><?= $product->getQuantitest() . '' . $product->getDesignationu() ?></td>
                                        <td><?= $product->getStalert() . $product->getDesignationu() ?></td>
                                        <td><?= $product->getPrixprod() . '$' ?></td>
                                        <td style="display:none;"><?= $product->getPrixprod() ?></td>
                                        <td style="display:none;"><?= $product->getStalert() ?></td>
                                        <td style="display:none;"><?= $product->getQuantitest() ?></td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="modal"
                                                title="Edit" data-target="#modal-update"><i
                                                    class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip"
                                                data-original-title="Delete"><i
                                                    class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">Supprimer</a>
                                        <a class="dropdown-item close-btn" data-dismiss="modal"
                                            aria-label="Close">Fermer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body ibox-body">
                                <form id="form-category">
                                    <div class="form-group">
                                        <input type="hidden" name="action" value="category" />
                                        <input type="hidden" name="actionu" value="1" />
                                        <input type="hidden" name="id" value="0" />
                                        <input class="form-control" type="text" id="designationc" name="designation"
                                            required placeholder="Désignation">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="add-quartier"
                                            class="btn btn-primary form-control">Enregistrer
                                        </button>
                                    </div>
                                </form>
                                <div class="form-group">
                                    <label>Catégorie produit</label>
                                    <select class="form-control" multiple="" id="list-quartier" style="height:150px">
                                        <?php foreach ($categories as $category) : ?>
                                        <option value="<?= $category->getIdcat() ?>">
                                            <?= $category->getDesignationcat() ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- End Modal Category -->

                <!-- Modal Update -->
                <div class="modal fade" id="modal-update">
                    <div class="modal-dialog">
                        <div class="modal-content ibox">
                            <div class="modal-header ibox-head">
                                <div class="modal-title ibox-title">Modifier Produit</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">Supprimer</a>
                                        <a class="dropdown-item close-btn" data-dismiss="modal"
                                            aria-label="Close">Fermer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body ibox-body">
                                <form id="form-product2" class="row form-horizontal" method="post"
                                    novalidate="novalidate">
                                    <div class="col-md-12">
                                        <input type="hidden" name="action" value="product" />
                                        <input type="hidden" name="actionu" value="2" />
                                        <input type="hidden" id="idprod" name="idprod" value="0" />
                                        <input type="hidden" id="quantitest2" name="quantitest" value="0" />
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Désignation</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="designationprod2"
                                                    name="designationprod" required placeholder="Désignation">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">PA/PV</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" name="prixprod" id="prixprod2"
                                                    required placeholder="Prix">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Stock alert</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" name="stalert" id="stalert2"
                                                    required placeholder="Stock alert">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Catégorie</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select2_demo_1" style="width:100%"
                                                    name="refcat" required>
                                                    <optgroup label="Catégories">
                                                        <?php foreach ($categories as $category) : ?>
                                                        <option value="<?= $category->getIdcat() ?>">
                                                            <?= $category->getDesignationcat() ?></option>
                                                        <?php endforeach; ?>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Uni. mesure</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select2_demo_1" style="width:100%"
                                                    name="refunit" required>
                                                    <optgroup label="Unité de mesure">
                                                        <?php foreach ($unites as $unite) : ?>
                                                        <option value="<?= $unite->getIdu() ?>">
                                                            <?= $unite->getDesignationu() ?></option>
                                                        <?php endforeach; ?>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">En Stock</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" disabled type="text" id="stock2"
                                                    name="stock" required placeholder="Stock" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-info btn-block"
                                                    type="submit">Enregistrer</button>
                                            </div>
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

                <!-- Modal Mesure -->
                <div class="modal fade" id="modal-mesure">
                    <div class="modal-dialog">
                        <div class="modal-content ibox">
                            <div class="modal-header ibox-head">
                                <div class="modal-title ibox-title">Ajouter Mesure</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">Supprimer</a>
                                        <a class="dropdown-item close-btn" data-dismiss="modal"
                                            aria-label="Close">Fermer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body ibox-body">
                                <form id="form-unite">
                                    <div class="form-group">
                                        <input type="hidden" name="action" value="unite" />
                                        <input type="hidden" name="actionu" value="1" />
                                        <input type="hidden" name="id" value="0" />
                                        <input class="form-control" type="text" id="designationu" name="designation"
                                            required placeholder="Désignation">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="add-quartier"
                                            class="btn btn-primary form-control">Enregistrer
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

    <!-- CORE PLUGINS-->
    <script src="views/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="views/admin/assets/js/requests/agent.js"></script>
    <script src="views/admin/assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/scripts/form-plugins.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript">
    </script>
    <script src="views/admin/assets/vendors/jquery.maskedinput/dist/jquery.maskedinput.min.js" type="text/javascript">
    </script>
    <script src="views/admin/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="views/admin/assets/js/app.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/request/productRequest.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->

    <script type="text/javascript">
    $("#form-sample-1").validate({
        rules: {
            name: {
                minlength: 2,
                required: !0
            },
            email: {
                required: !0,
                email: !0
            },
            url: {
                required: !0,
                url: !0
            },
            number: {
                required: !0,
                number: !0
            },
            min: {
                required: !0,
                minlength: 3
            },
            max: {
                required: !0,
                maxlength: 4
            },
            password: {
                required: !0
            },
            password_confirmation: {
                required: !0,
                equalTo: "#password"
            }
        },
        errorClass: "help-block error",
        highlight: function(e) {
            $(e).closest(".form-group.row").addClass("has-error")
        },
        unhighlight: function(e) {
            $(e).closest(".form-group.row").removeClass("has-error")
        },
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $('#ex-phone2').mask('+243 999 999 999');
    })
    </script>
    <script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
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
            document.getElementById("idprod").value = this.cells[1].innerText;
            document.getElementById("designationprod2").value = this.cells[2].innerText;
            document.getElementById("prixprod2").value = this.cells[7].innerText;
            document.getElementById("stalert2").value = this.cells[8].innerText;;
            document.getElementById("stock2").value = this.cells[4].innerText;
            document.getElementById("quantitest").value = this.cells[9].innerText;
        }
    }
    </script>

</body>

</html>