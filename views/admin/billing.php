<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CMS - Facturation</title>
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
                    <li class="active">
                        <a class="active" href="billing"><i class="sidebar-item-icon fa fa-building-o"></i>
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
                <h1 class="page-title">Facturation</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Commande client</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Commandes Client</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="example-table"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Facture</th>
                                        <th>Total Commande</th>
                                        <th>Date Commande</th>
                                        <th>Client</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Facture</th>
                                        <th>Total Commande</th>
                                        <th>Date Commande</th>
                                        <th>Client</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($commandes as $commande) : ?>
                                    <tr>
                                        <td><?= $commande->getNumcom() ?></td>
                                        <td><?= $commande->getTotcom() ?></td>
                                        <td><?= $commande->getDatecom() ?></td>
                                        <td><?= $commande->getCustomer() ?></td>
                                        <td>
                                            <a class="btn btn-success btn-xs m-r-5" data-original-title="Voir plus"
                                                data-toggle="modal" data-target="#modal-facture">Facture client <i
                                                    class="fa fa-eye font-14"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Commandes Client</div>
                    </div>
                </div>

                <!-- MODALS -->
                <!-- Modal Mesure -->
                <div class="modal  fade" id="modal-facture">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content ibox invoice">
                            <div class="invoice-header">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="invoice-logo">
                                            <img src="views/pages/assets/images/cms.png" height="65px" />
                                        </div>
                                        <div>
                                            <div class="m-b-5 font-bold">Facture de :</div>
                                            <div>Github, Inc.</div>
                                            <ul class="list-unstyled m-t-10">
                                                <li class="m-b-5">
                                                    <span class="font-strong">A:</span> San Francisco, CA 94103 Market
                                                    Street
                                                </li>
                                                <li class="m-b-5">
                                                    <span class="font-strong">W:</span> adminca@exmail.com
                                                </li>
                                                <li>
                                                    <span class="font-strong">P:</span> (123) 456-2112
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="clf" style="margin-bottom:30px;">
                                            <dl class="row pull-right" style="width:250px;">
                                                <dt class="col-sm-6">Facturée le</dt>
                                                <dd class="col-sm-6">10 April 2017</dd>
                                                <dt class="col-sm-6">Emise le</dt>
                                                <dd class="col-sm-6">30 April 2017</dd>
                                                <dt class="col-sm-6">Facture N°</dt>
                                                <dd class="col-sm-6">1450012</dd>
                                            </dl>
                                        </div>
                                        <div>
                                            <div class="m-b-5 font-bold">Facturée à :</div>
                                            <div>Emma Johnson</div>
                                            <ul class="list-unstyled m-t-10">
                                                <li class="m-b-5">San Francisco, 548 Market St.</li>
                                                <li class="m-b-5">emma.johnson@exmail.com</li>
                                                <li>(123) 279-4058</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped no-margin table-invoice">
                                <thead>
                                    <tr>
                                        <th>Désignation</th>
                                        <th>Quantité</th>
                                        <th>Prix Unitaire</th>
                                        <th class="text-right">Prix Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div><strong>Flat Design</strong></div><small>
                                        </td>
                                        <td>2</td>
                                        <td>$220.00</td>
                                        <td>$440.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><strong>Bootstrap theme</strong></div>
                                        </td>
                                        <td>1</td>
                                        <td>$500.00</td>
                                        <td>$500.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><strong>Invoice Design</strong></div>
                                        </td>
                                        <td>3</td>
                                        <td>$300.00</td>
                                        <td>$900.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table no-border">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th width="15%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-right">
                                        <td>Sous-Total:</td>
                                        <td>$1840</td>
                                    </tr>
                                    <tr class="text-right">
                                        <td>TAX 5%:</td>
                                        <td>$92</td>
                                    </tr>
                                    <tr class="text-right">
                                        <td class="font-bold font-18">TOTAL:</td>
                                        <td class="font-bold font-18">$1748</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                                <button class="btn btn-info" type="button" onclick="javascript:window.print();"><i
                                        class="fa fa-print"></i> Print</button>
                            </div>
                        </div>

                        <style>
                        .invoice {
                            padding: 20px
                        }

                        .invoice-header {
                            margin-bottom: 20px
                        }

                        .invoice-logo {
                            margin-bottom: 30px;
                        }

                        .table-invoice tr td:last-child {
                            text-align: right;
                        }
                        </style>

                        <!-- <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        </div> -->
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- End Modal alert -->
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
    <script src="views/admin/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="views/admin/assets/js/app.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/request/commandeRequest.js" type="text/javascript"></script>
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

</body>

</html>