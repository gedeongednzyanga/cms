<?php

$managerPage = new ManagerPage();
if (!isset($_SESSION['user']) || !isset($_SESSION['compte'])) {
    echo '<script>window.location="login";</script>';
}
if (count($managerPage->testUserAccessPage($_SESSION['iduser'], 'Utilisateur', 'Page')) == 0)
    echo '<script>window.location="lockscreen";</script>'; {;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Metal Service">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CMS - User</title>
    <!-- INCONS -->
    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png" />
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
                            <span></span>
                            <?= $_SESSION['compte'] ?><i class="fa fa-angle-down m-l-5"></i>
                        </a>
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
                        <div class="font-strong">
                            <?= $_SESSION['user'] ?>
                        </div>
                        <small>
                            <?= $_SESSION['compte'] ?>
                        </small>
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
                    <li class="heading">MESSAGES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Messages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="mailbox">Boîte de reception</a>
                            </li>
                            <li>
                                <a href="mail_compose">Composer un mail</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="publish"><i class="sidebar-item-icon fa fa-info"></i>
                            <span class="nav-label">Informations</span></a>
                    </li> -->
                    <li class="heading">CONFIGURATIONS</li>
                    <li class="active">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-cog"></i>
                            <span class="nav-label">Paramètres</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a class="active" href="register">Utilisateurs</a>
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
                <h1 class="page-title">Utilisateurs</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Ajouter un utilisateur</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">

                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Créer un compte utilisateur</div>
                        <div class="ibox-tools">
                            <!-- <a class="ibox-collapse"><i class="fa fa-minus"></i></a> -->
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a data-toggle="modal" data-target="#modal-configuration" class="dropdown-item">Configurations</a>
                                <a data-toggle="modal" data-target="#modal-profil" class="dropdown-item">Profil</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div class="container">
                            <form id="form-register" class="row form-horizontal" method="post" novalidate="novalidate">
                                <div class="col-md-6">
                                    <input type="hidden" name="action" value="create" />
                                    <input type="hidden" name="actionu" value="1" />
                                    <input type="hidden" name="iduser" value="0" />
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="nomuser" name="nomuser" required placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Prénom</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="prenomuser" id="prenomuser" required placeholder="Prénom">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="username" id="username" required placeholder="Nom d'utilisateur">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" name="passuser" id="passuser" required placeholder="Mot de passe">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Compte</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" name="compteuser" id="compteuser" required>
                                                <optgroup label="Type de Compte">
                                                    <option value="">Type compte</option>
                                                    <option value="Administrateur">Administrateur</option>
                                                    <option value="Utilisateur">Utilisateur</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit"><i class="fa fa-check"></i>
                                                Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-8 m-b-20">
                                                <p style="margin-bottom:5px;"><label class="col-form-label">Pages
                                                        accessibles</label></p>
                                                <div class="row">
                                                    <div class="check-list col-md-6">
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="1">
                                                            <span class="input-span"></span>Dashboard</label>
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="2">
                                                            <span class="input-span"></span>Article</label>
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="3">
                                                            <span class="input-span"></span>Production</label>
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="4">
                                                            <span class="input-span"></span>Approvisionnement</label>
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="5">
                                                            <span class="input-span"></span>Commande</label>
                                                    </div>

                                                    <div class="check-list col-md-6">
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="6">
                                                            <span class="input-span"></span>Facturation</label>
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="7">
                                                            <span class="input-span"></span>Messages</label>
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="8">
                                                            <span class="input-span"></span>Utilisateur</label>
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="9">
                                                            <span class="input-span"></span>Configurations</label>
                                                        <label class="ui-radio">
                                                            <input type="radio" name="refpage" id="refpage" value="10">
                                                            <span class="input-span"></span>Information/Blog</label>
                                                        <button type="button" id="btnaddpage" class="btn btn-sm btn-success btn-block" style="margin-top:15px;">Donner accès</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-4 m-b-20">
                                                <p style="margin-bottom:5px;">
                                                    <label class="col-form-label">Autorisations</label></br>
                                                </p>
                                                <div class="check-list">
                                                    <label class="ui-checkbox ui-checkbox-success">
                                                        <input type="checkbox" name="refauto" value="1">
                                                        <span class="input-span"></span>Ajouter</label>
                                                    <label class="ui-checkbox ui-checkbox-info">
                                                        <input type="checkbox" name="refauto" value="2">
                                                        <span class="input-span"></span>Modifier</label>
                                                    <label class="ui-checkbox ui-checkbox-danger">
                                                        <input type="checkbox" name="refauto" value="3">
                                                        <span class="input-span"></span>Supprimer</label>
                                                    <label class="ui-checkbox ui-checkbox-warning">
                                                        <input type="checkbox" name="refauto" value="4">
                                                        <span class="input-span"></span>Imprimer</label>
                                                    <label class="ui-checkbox ui-checkbox-primary">
                                                        <input type="checkbox" id="select-all">
                                                        <span class="input-span"></span>All autorisations</label>
                                                    <ul class="nav navbar-toolbar" style="margin-top:12px;">
                                                        <li class="dropdown dropdown-user">
                                                            <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                                                                <?= isset($_SESSION['pages']) ? 'Pages acc... ' . count($_SESSION['pages']) : 'Pages acc... (0)' ?><i class="fa fa-angle-down m-l-5"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right" id="pageacc">
                                                                <a class="dropdown-item" href="javascript:;">Pages accessibles</a>
                                                                <li class="dropdown-divider"></li>
                                                                <?php if (isset($_SESSION['pages'])) {
                                                                    foreach ($_SESSION['pages'] as $key) : ?>
                                                                        <a class="dropdown-item" href="javascript:;"><?= $key['designationpage'] ?></a>
                                                                    <?php endforeach;
                                                                } else { ?>
                                                                    <a class="dropdown-item" href="javascript:;"><?= 'Aucune page.'; ?></a>
                                                                <?php
                                                                } ?>
                                                                <li class="dropdown-divider"></li>
                                                                <a class="dropdown-item" href="login"><i class="fa fa-remove"></i> Supprimer</a>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div-message" style="height:53px;">

                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Utilisateurs enregistrés</div>
                </div>
                <div class="ibox-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="50px"></th>
                                    <th>N°</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Nom d'utilisateur</th>
                                    <th>Type de compte</th>
                                    <th>Pages Accessibles</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="tab-user">
                                <?php
                                foreach ($users as $user) : ?>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <?= $user->getIduser() ?>
                                        </td>
                                        <td>
                                            <?= $user->getNomuser() ?>
                                        </td>
                                        <td>
                                            <?= $user->getPrenomuser() ?>
                                        </td>
                                        <td>
                                            <?= $user->getUsername() ?>
                                        </td>
                                        <td>
                                            <?= $user->getCompteuser() ?>
                                        </td>
                                        <td>
                                            <?php foreach ($managerPage->getAccessPage($user->getIduser()) as $pageacc) : ?>
                                                <?= $pageacc->getDesignationpage() . ', ' ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="modal" title="Edit" data-target="#modal-user"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                <?php
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- MODALS -->

            <!-- Modal update User -->
            <div class="modal fade" id="modal-user">
                <div class="modal-dialog">
                    <div class="modal-content ibox">
                        <div class="modal-header ibox-head">
                            <div class="modal-title ibox-title"><b>Modifier Compte</b></div>
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
                            <form id="register-form" class="form-horizontal" action="javascript:;" method="post">
                                <h2 class="user-title" style="padding-bottom: 10px; font-size: 16px;">Modification du compte</h2>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="first_name" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="last_name" placeholder="Prénom">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Nom d'utilisateur" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Mot de passe">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2_demo_1" style="width:100%;" name="compteuser" id="compteuser" required>
                                        <optgroup label="Type de Compte">
                                            <option value="">Type compte</option>
                                            <option value="Administrateur">Administrateur</option>
                                            <option value="Utilisateur">Utilisateur</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group text-left">
                                    <label class="ui-checkbox ui-checkbox-info">
                                        <input type="checkbox" name="agree" checked>
                                        <span class="input-span"></span>Pages accessibles</label>
                                        <span class="pull-right">0</span>

                                </div>
                                <div class="form-group">
                                    <select class="form-control" multiple="" id="list-categorie" style="height:150px">
                                        <?php foreach ($categories as $category) : ?>
                                            <option value="<?= $category->getIdcat() ?>">
                                                <?= $category->getDesignationcat() ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info" type="submit">Enregistrer les modifications</button>
                                </div>
                            </form>

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
    <script src="views/admin/assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/scripts/form-plugins.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript">
    </script>
    <script src="views/admin/assets/vendors/jquery.maskedinput/dist/jquery.maskedinput.min.js" type="text/javascript">
    </script>

    <!-- CORE SCRIPTS-->
    <script src="views/admin/assets/js/app.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/request/login.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/request/pageRequest.js" type="text/javascript"></script>
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
                getOneDetail(this.cells[1].innerText);
                document.getElementById("idprod").value = this.cells[1].innerText;
                document.getElementById("designationprod2").value = this.cells[2].innerText;
                document.getElementById("prixprod2").value = this.cells[7].innerText;
                document.getElementById("stalert2").value = this.cells[8].innerText;;
                document.getElementById("stock2").value = this.cells[4].innerText;
                document.getElementById("quantitest").value = this.cells[9].innerText;
            }
        }

        function getOneDetail(idprod) {
            $.ajax({
                url: "models/requests/RequestCommande.php",
                type: "POST",
                data: {
                    action: 'historique',
                    idprod: idprod
                },
                success: function(data) {
                    $('#historiquecommande').html(data);
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    </script>
</body>

</html>