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
    <title>CMS - Fiche de Stock</title>
    <!-- INCONS -->
    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png" />
    <!-- Styles -->
    <link href="views/admin/assets/repports/css/bootstrap.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="views/admin/assets/repports/css/stylesheet.css" />
</head>

<body>
    <!-- Container -->
    <div class="container-fluid fiche-container" id="fiche">
        <!-- Header -->
        <header>
            <div class="row">
                <div class="col-sm-2 text-center text-sm-start mb-3 mb-sm-0">
                    <img id="logo-cms" src="views/admin/assets/repports/images/cms.png" title="CMS-SARL"
                        alt="CMS-SARL" />
                </div>
                <div class="col-sm-8 text-center mb-2 mb-sm-0">
                    <h5 class="company"><b>RD. CONGO - GOMA - NORD KIVU</b></h5>
                    <h4 class="fw-600 company">CONSTRUCTION METAL SERVICE</h4>
                    <h4 class="fw-900 company"><b style="color: #984806;">CMS–SARL</b></h4>
                    <address>
                        RCCM : CD/GOM/RCCM/16-B-O467 <br>
                        ID NAT : 5-490-N16077H ITPR N° 600/ITPR/02<br />
                        N° d’Impôt : A1705137D<br />
                        Tél. : +243 997733617, +243 819240025<br />
                        E-mail : <a href="#">balufaustin@gmail.com</a>
                    </address>
                </div>
                <div class="col-sm-2 text-center text-sm-end">
                    <img id="logo-cms" src="views/admin/assets/repports/images/cms.png" title="CMS-SARL"
                        alt="CMS-SARL" />
                </div>
            </div>
        </header>
        <hr id="ligne0">

        <!-- Main Content -->
        <main>
            <div class="row">
                <div class="col-sm-6 fw-600"><strong>FICHE DE STOCK PRODUIT</strong></div>
                <div class="col-sm-6 text-sm-end">
                    <?php
                    $_prixProd = 0;
                    $_unitM = '';
                    $_managerProduct = new ManagerProduct();
                    foreach ($_managerProduct->getOneProduct($_SESSION['idprod_fiche']) as $data) :
                        $_prixProd = $data->getPrixprod();
                        $_unitM = $data->getDesignationu();
                    ?>
                    <strong>
                        PRODUIT : <?= $data->getDesignationprod() ?>
                    </strong>
                    <?php endforeach; ?>
                </div>

            </div>
            <hr>

            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table  table-bordered mb-0">
                            <thead class="card-header">
                                <tr>
                                    <td colspan="3" rowspan="2" class="col-1">
                                        <strong style="margin-bottom: 10px;">DATES</strong>
                                    </td>
                                    <td colspan="3" rowspan="2" class="col-2"><strong>LIBELLES</strong></td>
                                    <td colspan="3" class="col-3 text-center"><strong>ENTREES</strong></td>
                                    <td colspan="3" class="col-3 text-center"><strong>SORTIES</strong></td>
                                    <td colspan="3" class="col-3 text-end"><strong>STOCK</strong></td>
                                </tr>
                                <tr>
                                    <td class="col-2 text-center"><strong>Quantité</strong></td>
                                    <td class="col-1 text-center"><strong>P.U</strong></td>
                                    <td class="col-2 text-end"><strong>Montant</strong></td>
                                    <td class="col-2 text-center"><strong>Quantité</strong></td>
                                    <td class="col-1 text-center"><strong>P.U</strong></td>
                                    <td class="col-2 text-end"><strong>Montant</strong></td>
                                    <td class="col-2 text-center"><strong>Quantité</strong></td>
                                    <td class="col-1 text-center"><strong>P.U</strong></td>
                                    <td class="col-2 text-end"><strong>Montant</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_managerProduct->getHistoriqueProd($_SESSION['idprod_fiche']) as $histop) : ?>
                                <tr>
                                    <td colspan="3"><?= date('d-m-Y', strtotime($histop->getDate_op())) ?></td>
                                    <td colspan="3"><?= $histop->getLibelle() ?></td>

                                    <td><?= $histop->getQuantite_entr() . $_unitM ?></td>
                                    <td><?= $histop->getPrix_entr() . '$'  ?></td>
                                    <td><?= ($histop->getPrix_entr() * $histop->getQuantite_entr()) . '$' ?></td>

                                    <td><?= $histop->getQuantite_sort() . $_unitM ?></td>
                                    <td><?= $histop->getPrix_sort() . $_unitM ?></td>
                                    <td><?= ($_prixProd * $histop->getQuantite_sort()) . '$' ?></td>

                                    <td><?= $histop->getStockp() . $_unitM  ?></td>
                                    <td><?= $_prixProd . '$' ?></td>
                                    <td><?= ($histop->getStockp() * $_prixProd) . '$' ?></td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer class="text-center mt-4">
            <p class="text-1"><strong>NOTE :</strong> Fiche de Stock.</p>
            <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()"
                    class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a
                    href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i>
                    Download</a> </div>
        </footer>
    </div>

    <script src="views/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/scripts/html2pdf.bundle.min.js" type="text/javascript"></script>
    <script>
    // $(function() {
    element = document.getElementById('fiche');
    html2pdf(element, {
        margin: 0,
        filename: 'fiche_stock.pdf',
        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'landscape'
        }
    });
    // $("#print-btn").on("click", () => {

    // });
    // });
    </script>
</body>

</html>