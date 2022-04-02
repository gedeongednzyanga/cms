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
                        <a href="dashboard"><i class="sidebar-item-icon fa fa-th-large"></i>
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
                                <a href="mailbox">Boîte de reception</a>
                            </li>
                            <li>
                                <a href="mailcompose">Composer un mail</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="publish"><i class="sidebar-item-icon fa fa-info"></i>
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
                    <li class="breadcrumb-item">Facturation Commande Client</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Enregistrer un payement</div>
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
                            <form id="form-payement" class="row form-horizontal" method="post" novalidate="novalidate">
                                <div class="col-md-8">
                                    <input type="hidden" name="action" value="payement" />
                                    <input type="hidden" name="actionu" value="1" />
                                    <input type="hidden" name="refentc" id="refentc" value="0" />
                                    <input type="hidden" name="restepaye" id="restepaye" value="0" />
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Recherche cli...</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" style="width:100%"
                                                name="refentcom" id="refentcom" required>
                                                <optgroup label="Rechercher un client">
                                                    <option value="0">Rechercher un client</option>
                                                    <?php
                                                    $managerCommande = new ManagerCommande();
                                                    foreach ($managerCommande->getClientWithCredit() as $credit) : ?>
                                                    <option value="<?= $credit->getNumcom() ?>">
                                                        <?= $credit->getCustomer() ?> </option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Client</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="client" name="client" required
                                                placeholder="Nom du client">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Qté cmdée</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="commande" id="commande"
                                                required placeholder="Qté commandée">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Total à payer</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="montant" id="montant"
                                                required placeholder="Montant total">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Montant payé</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="montantpaye"
                                                id="montantpaye" required placeholder="Montant payé">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Reste à payer</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" disabled type="number" name="reste" id="reste"
                                                required placeholder="Montant à payer" value="0">
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
                                        <label class="col-sm-12 col-form-label">Détail commande client <span
                                                class="text-xl-center pull-right">...</span></label>
                                        <select class="form-control" multiple="" id="detail-facture"
                                            style="height:235px">
                                            <option value="0">Séléctionner un client</option>
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
                        <div class="ibox-title">Factures Client</div>
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
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="example-table"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Facture</th>
                                        <th>Nom Client</th>
                                        <th>Commande</th>
                                        <th>Total à payer</th>
                                        <th>Montant payé</th>
                                        <th>Reste à payer</th>
                                        <th>Date Comnde</th>
                                        <th>Observation</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Facture</th>
                                        <th>Nom Client</th>
                                        <th>Commande</th>
                                        <th>Total à payer</th>
                                        <th>Montant payé</th>
                                        <th>Reste à payer</th>
                                        <th>Date Comnde</th>
                                        <th>Observation</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody id="tab-facture">
                                    <?php
                                    $managerCommande = new ManagerCommande();
                                    $managerPayement = new ManagerPayement();
                                    foreach ($commandes as $commande) : ?>
                                    <tr>
                                        <td><?= $commande->getIdentc() ?></td>
                                        <td><?= $commande->getNumcom() ?></td>
                                        <td><?= $commande->getCustomer() ?></td>
                                        <td class="text-center"><?= $commande->getTotcom() . ' article(s)' ?></td>
                                        <td><?= $managerCommande->calculSommetotcommande($commande->getIdentc()) . '$'  ?>
                                        </td>
                                        <td><?= $managerPayement->getMontantPayer($commande->getIdentc()) . '$' ?>
                                        </td>
                                        <td><?= $managerCommande->calculSommetotcommande($commande->getIdentc()) - $managerPayement->getMontantPayer($commande->getIdentc()) . '$'  ?>
                                        </td>
                                        <td class="text-center"><?= $commande->getDatecom() ?></td>
                                        <td
                                            class="alert text-center <?= $commande->getStatcom() == 0 ? 'alert-danger' : 'alert-success' ?>">
                                            <?= $commande->getStatcom() == 0 ? 'Non payéé' : 'Payé' ?></td>
                                        <td>
                                            <a href="invoice-<?= $commande->getNumcom() ?>"
                                                class="btn btn-success btn-xs m-r-5">Facture client <i
                                                    class="fa fa-eye font-14"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- 
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Commandes Client</div>
                    </div>
                </div> -->

                <!-- MODALS -->
                <!-- Modal Mesure -->
                <div class="modal  fade" id="modal-facture">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content ibox invoice">
                            <div class="invoice-header">
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <div class="invoice-logo">
                                            <!-- <img src="views/pages/assets/images/cms.png" height="65px" /> -->
                                            <h1 style="font-size:70px; font-weight:bold; color: #3498DB;">Facture </h1>
                                        </div>
                                        <div>
                                            <div class="font-strong" style="font-size:25px; font-weight:bold;">
                                                Construction Metal Service</div>
                                            <ul class="list-unstyled m-t-10">
                                                <li class="m-b-5">
                                                    <span class="font-strong">Adresse :</span> Commune de Goma, Quartier
                                                    Lac Vert, Avenue Kabande, le long de la route Goma-Sake
                                                </li>
                                                <li class="m-b-5">
                                                    <span class="font-strong">E-mail :</span> balufaustin@gmail.com
                                                </li>
                                                <li>
                                                    <span class="font-strong">Phone :</span> (+243) 819 240 025
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="clf">
                                            <dl class="row pull-right" style="width:250px;">
                                                <dt class="col-sm-6">Facturée le</dt>
                                                <dd class="col-sm-6" id="datecom">10 April 2017</dd>
                                                <dt class="col-sm-6">Emise le</dt>
                                                <dd class="col-sm-6"><?= date('d-m-Y') ?></dd>
                                                <dt class="col-sm-6">Facture N°</dt>
                                                <dd class="col-sm-6" id="numfact">1450012</dd>
                                            </dl>
                                        </div>
                                        <hr>
                                        <div>
                                            <div class="m-b-5 font-bold" style="font-size:20px; font-weight:bold;">
                                                Facturée à </div>
                                            <div id="customerid" style="font-size:30px;">Emma Johnson</div>
                                            <ul class="list-unstyled m-t-10">
                                                <li class="m-b-5">Les marchandises vendues ne sont ni reprises ni
                                                    échangées.
                                                </li>
                                                <li class="m-b-5">Merci d’avoir choisi la Maison C.M.S</li>
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
                                <tbody id="invoice-cl">
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
                                        <td id="s-total">$1840</td>
                                    </tr>
                                    <tr class="text-right">
                                        <td>TAX 5%:</td>
                                        <td id="tva">$92</td>
                                    </tr>
                                    <tr class="text-right">
                                        <td class="font-bold font-18">TOTAL A PAYER :</td>
                                        <td class="font-bold font-18" id="total-p">$1748</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                                <!-- <button class="btn btn-success" type="button" onclick="javascript:window.print();"><i
                                        class="fa fa-print"></i> Export to Excel</button>
                                <button class="btn btn-warning" type="button" onclick="javascript:window.print();"><i
                                        class="fa fa-print"></i> Export to PDF</button> -->
                                <a class="btn btn-info" href="invoice"><i class="fa fa-print"></i> Imprimer</a>
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
    <script src="views/admin/assets/js/request/payementRequest.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
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
    table = document.getElementById("tab-facture");
    for (i = 0; i < table.rows.length; i++) {
        table.rows[i].onclick = function() {
            getFacture(this.cells[1].innerText);
            document.getElementById('refentc').value = this.cells[0].innerText;
            document.getElementById("numfact").innerHTML = this.cells[1].innerHTML;
            document.getElementById("client").value = this.cells[2].innerText;
            document.getElementById("commande").value = this.cells[3].innerText;
            document.getElementById("customerid").innerHTML = this.cells[2].innerHTML;
            document.getElementById("datecom").innerHTML = this.cells[5].innerHTML;
            document.getElementById("s-total").innerHTML = this.cells[4].innerHTML + '$';
            document.getElementById("montant").value = this.cells[6].innerText;
            document.getElementById("tva").innerHTML = (this.cells[4].innerText * 0.05);
            document.getElementById("total-p").innerHTML = this.cells[4].innerText;
        }
    }

    function getFacture(numfact) {
        $.ajax({
            url: "models/requests/RequestCommande.php",
            type: "POST",
            data: {
                action: 'facture',
                numcom: numfact,
            },
            timeout: 3000,
            success: function(data) {
                $('#detail-facture').html(data);
            },
            error: function() {
                alert('Echec de la requete sur le serveur.')
            }
        })
    }
    </script>

</body>

</html>