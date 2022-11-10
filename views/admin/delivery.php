<?php
$managerPage = new ManagerPage();
if (!isset($_SESSION['user']) || !isset($_SESSION['compte']))
    echo '<script>window.location="login";</script>';

if (count($managerPage->testUserAccessPage($_SESSION['iduser'], 'Commande', 'Page')) == 0)
    echo '<script>window.location="lockscreen";</script>'; {;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CMS - Livraison</title>
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
                    <li class="active">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-shopping-basket"></i>
                            <span class="nav-label">Commandes <i class="fa fa-angle-left arrow"></i></span> </a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="commande">Commande client</a>
                            </li>
                            <li>
                                <a class="active" href="delivery">Livraisons</a>
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
                <h1 class="page-title">Livraison</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Livraison Commande Client</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Enregistrer une livraison</div>
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
                            <div class="row form-horizontal">
                                <form id="form-livraison" method="post" novalidate="novalidate" class="col-md-8">
                                    <input type="hidden" name="action" value="add" />
                                    <input type="hidden" name="refentc" id="jdjd" value="0" />
                                    <input type="hidden" name="quantite_rest" id="quantite_rest" value="0" />
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Client</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" style="width:100%" name="refentc" id="refentc" required>
                                                <optgroup label="Nos clients">
                                                    <option value="0">Rechercher un client</option>
                                                    <?php foreach ($commandes as $commande) : ?>
                                                        <option value="<?= $commande->getNumcom() ?>">
                                                            <?= $commande->getCustomer() ?> </option>
                                                    <?php endforeach; ?>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Facture</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" disabled type="text" name="facture" id="facture" required placeholder="Facture client">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Cmnde Client</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" style="width:100%" name="ref_detcom" id="iddetcom" required>
                                                <optgroup label="Produits commandés">
                                                    <option value="434">Pas d'article</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Qté Cmdée</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" disabled type="number" name="quatinte_com" id="quatinte_com" required placeholder="Quantité commandée">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Qté Livrée</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="quantite_liv" id="quantite_liv" required placeholder="Quantité livrée">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Reste à livrer</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" disabled type="number" name="quantite_rest" id="quantite_rest1" required placeholder="Qté restante" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit"><i class="fa fa-check"></i>
                                                Ajouter au panier</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-form-label">Commandes à livrer<span class="text-xl-center pull-right">...</span></label>
                                        <select class="form-control" multiple="" id="livraison-list" style="height:190px;">
                                            <?php if (isset($_SESSION['livraison'])) {
                                                foreach ($_SESSION['livraison'] as $livraison) :
                                            ?>
                                                    <option value="0">
                                                        <?= $livraison['produit'] . '( ' . $livraison['quantite_liv'] . ' )' ?>
                                                    </option>
                                            <?php
                                                endforeach;
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 ">
                                            <button class="btn btn-success" id="btn-save-liv" type="submit">Enregistrer</button>
                                            <button class="btn btn-info" data-toggle="modal" data-target="#modal-livraison" style="float:right;" type="submit">Autres
                                                Informations</button>
                                        </div>
                                    </div>
                                    <div class="div-message" style="height:53px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Livraison Commandes</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a data-toggle="modal" data-target="#modal-category" class="dropdown-item">Catégorie</a>
                                <a class="dropdown-item">Mesure</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Livraison</th>
                                        <th>Expéditeur</th>
                                        <th>Destinataire</th>
                                        <th>Transporteur</th>
                                        <th>Quantité</th>
                                        <th>Camion</th>
                                        <th>Plaque</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Livraison</th>
                                        <th>Expéditeur</th>
                                        <th>Destinataire</th>
                                        <th>Transporteur</th>
                                        <th>Quantité</th>
                                        <th>Camion</th>
                                        <th>Plaque</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody id="tab-facture">
                                    <?php foreach ($livraisons as $livraison) : ?>
                                        <tr>
                                            <td><?= $livraison->getId_entl() ?></td>
                                            <td><?= $livraison->getNum_liv() ?></td>
                                            <td><?= $livraison->getExpediteur() ?></td>
                                            <td><?= $livraison->getDestinateur() ?></td>
                                            <td><?= $livraison->getTransporteur() ?></td>
                                            <td><?= $livraison->getQuantite_liv() . ' articles' ?></td>
                                            <td><?= $livraison->getNum_camion() ?></td>
                                            <td><?= $livraison->getPlaque() ?></td>
                                            <td><?= $livraison->getDate_liv() ?></td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-xs m-r-5">Bon de Livraison <i class="fa fa-eye font-14"></i></a>
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
                <div class="modal  fade" id="modal-livraison">
                    <div class="modal-dialog">
                        <div class="modal-content ibox">
                            <div class="modal-header ibox-head">
                                <div class="modal-title ibox-title">Autres Informations</div>
                            </div>
                            <div class="modal-body ibox-body">
                                <form id="form-save-livraison">
                                    <div class="form-group">
                                        <input type="hidden" name="action" id="action" value="save" />
                                        <input type="hidden" name="actionu" id="actionu" value="1" />
                                        <input type="hidden" name="id_entl" id="id_entl" value="0" />
                                        <div class="form-group">
                                            <input class="form-control" type="text" id="expediteur" name="expediteur" required placeholder="Expéditeur" value="CMS-Goma">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="destinataire" name="destinateur" required placeholder="Destinataire">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="transporteur" name="transporteur" required placeholder="Transporteur">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="num_camion" name="num_camion" required placeholder="Numéro camion">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="plaque" name="plaque" required placeholder="Plaque">
                                    </div>
                                    <!-- <div class="form-group">
                                        <button type="submit" id="add-quartier"
                                            class="btn btn-primary form-control">Enregistrer
                                        </button>
                                    </div> -->
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Valider <i class="fa fa-check"></i> </button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
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
    <script src="views/admin/assets/js/request/livraisonRequest.js" type="text/javascript"></script>
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
        // table = document.getElementById("tab-facture");
        // for (i = 0; i < table.rows.length; i++) {
        //     table.rows[i].onclick = function() {
        //         getFacture(this.cells[1].innerText);
        //         document.getElementById('refentc').value = this.cells[0].innerText;
        //         document.getElementById("numfact").innerHTML = this.cells[1].innerHTML;
        //         document.getElementById("client").value = this.cells[2].innerText;
        //         document.getElementById("commande").value = this.cells[3].innerText;
        //         document.getElementById("customerid").innerHTML = this.cells[2].innerHTML;
        //         document.getElementById("datecom").innerHTML = this.cells[5].innerHTML;
        //         document.getElementById("s-total").innerHTML = this.cells[4].innerHTML;
        //         document.getElementById("montant").value = this.cells[4].innerText;
        //     }
        // }

        // function getFacture(numfact) {
        //     $.ajax({
        //         url: "models/requests/RequestCommande.php",
        //         type: "POST",
        //         data: {
        //             action: 'facture',
        //             numcom: numfact,
        //         },
        //         timeout: 3000,
        //         success: function(data) {
        //             $('#invoice-cl').html(data);
        //         },
        //         error: function() {
        //             alert('Echec de la requete sur le serveur.')
        //         }
        //     })
        // }
    </script>

</body>

</html>