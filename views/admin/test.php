<?php
if (!isset($_SESSION['user']) || !isset($_SESSION['compte']))
    echo '<script>window.location="login";</script>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facture - <?= $_GET['number'] ?></title>
    <!-- INCONS -->
    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png" />
    <!-- Styles -->
    <link href="views/admin/assets/repports/css/bootstrap.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="views/admin/assets/repports/css/stylesheet.css" />
</head>

<body>
    <!-- Container -->
    <div class="container-fluid invoice-container">
        <div id="facture">
            <!-- Header -->
            <header>
                <div class="row align-items-center">
                    <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0">
                        <img id="logo" src="views/admin/assets/repports/images/logo.png" title="CMS-Sarl" alt="CMS-Sarl" />
                    </div>
                    <div class="col-sm-5 text-center text-sm-end">
                        <h2 class="text-7 mb-0"><b>FACTURE</b></h2>
                    </div>
                </div>
                <hr>
            </header>

            <!-- Main Content -->

            <main>
                <?php
                $_managerCommande = new ManagerCommande();
                foreach ($_managerCommande->getOneEntCommande($_GET['number']) as $commande) :
                ?>
                    <div class="row">
                        <div class="col-sm-6"><strong>Date :</strong> <?= $commande->getDatecom() ?></div>
                        <div class="col-sm-6 text-sm-end"> <strong>Facture N° :</strong> <?= $_GET['number'] ?></div>
                        <span id="fileName" style="display: none;"><?= 'Facture_' . $_GET['number'] ?></span>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6 text-sm-end order-sm-1"> <strong>Facturée à :</strong>
                            <address>
                                <?= 'Mr, Mme : ' . $commande->getCustomer() ?><br />
                                Facture payée cash<br />
                                Quantité commandée : <b><?= $commande->getTotcom() ?></b><br />
                            </address>
                        </div>
                        <div class="col-sm-6 order-sm-0">
                            <h5> <strong>
                                    CMS-SARL
                                </strong></h5>
                            <address>
                                RCCM : CD/GOM/RCCM/16-B-O467<br />
                                ID NAT : 5-490-N16077H ITPR N° 600/ITPR/02<br />
                                N° d’Impôt : A1705137D<br />
                            </address>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0 ">
                                <thead class="card-header">
                                    <tr>
                                        <td class="col-3"><strong>Quantité</strong></td>
                                        <td class="col-4"><strong>Désignation</strong></td>
                                        <td class="col-2 text-center"><strong>Prix Unitaire</strong></td>
                                        <td class="col-2 text-end"><strong>Prix Total</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sTotal = 0;
                                    $tva = 0;
                                    foreach ($_managerCommande->getOneCommande($_GET['number']) as $dtcom) :
                                        $sTotal += round($dtcom->getQuantitecom() *  $dtcom->getPrixprod(), 2);
                                    ?>
                                        <tr>
                                            <td class="col-3">
                                                <?= $dtcom->getQuantitecom() . '' . $dtcom->getDesignationu() ?>
                                            </td>
                                            <td class="col-4 text-1"><?= $dtcom->getDesignationprod() ?></td>
                                            <td class="col-2 text-center"><?= $dtcom->getPrixprod() ?>$</td>
                                            <td class="col-2 text-end">
                                                <?= round($dtcom->getQuantitecom() *  $dtcom->getPrixprod(), 2)  ?>
                                                $</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot class="card-footer">
                                    <tr>
                                        <td colspan="3" class="text-end"><strong>Sous-Total :</strong></td>
                                        <td class="text-end"><?= $sTotal ?>$</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end"><strong>TVA (16%) :</strong></td>
                                        <td class="text-end"><?= round(($sTotal * 16) / 100, 2) ?>$</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end border-bottom-0"><strong>Total à Payer
                                                :</strong>
                                        </td>
                                        <td class="text-end border-bottom-0">
                                            <?= $sTotal + round(($sTotal * 16) / 100, 2) ?>$</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Footer Facture-->
            <footer class="text-center mt-4">
                <p class="text-1"><strong>NOTE :</strong> Les marchandises vendues ne sont ni remboursées ni échangées.
                </p>
            </footer>
        </div>
        <!-- Footer -->
        <footer class="text-center mt-4">
            <div class="btn-group btn-group-sm d-print-none"> <a href="" id="print-btn" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Imprimer</a> <a href="javascript:;" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i>
                    Télécharger</a> </div>
        </footer>
    </div>

    <script src="views/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/scripts/html2pdf.bundle.min.js" type="text/javascript"></script>
    <script>
        btn = document.getElementById("print-btn");
        nomFichier = document.getElementById("fileName").innerText;

        btn.addEventListener("click", (e) => {
            e.preventDefault();
            element = document.getElementById('facture');
            html2pdf(element, {
                margin: 20,
                filename: nomFichier + '.pdf',
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            });
        }, false);
    </script>
</body>

</html>