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
    <title>CMS - Fiche de Production</title>
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
        <div id="fiche">
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
                            ID NAT : 5-490-N16077H ITPR N° 600/ITPR/02,
                            N° d’Impôt : A1705137D<br />
                            Tél. : +243 997733617, +243 819240025,
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
                    <div class="col-sm-6 fw-600"><strong>FICHE DE PRODUCTION</strong></div>
                    <div class="col-sm-6 text-sm-end"> <strong>Date : </strong>
                        <?= date('d/m/Y', strtotime($_SESSION['date1'])) ?></div>

                </div>
                <hr>

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table  table-bordered mb-0">
                                <thead class="card-header">
                                    <tr>
                                        <td class="col-3"><strong>Quantité</strong></td>
                                        <td class="col-4"><strong>Designation</strong></td>
                                        <td class="col-2 text-center"><strong>Entrée</strong></td>
                                        <td class="col-1 text-center"><strong>Perte</strong></td>
                                        <td class="col-2 text-end"><strong>Carburant</strong></td>
                                        <td class="col-1 text-center"><strong>Observation</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $managerProduction = new ManagerProduction();
                                    foreach ($managerProduction->_getOneProductionDate($_SESSION['date1']) as $data) :
                                    ?>
                                    <tr>
                                        <td class="col-3">
                                            <?= $data->getQuantiteprod() . '' . $data->getDesignationu() ?>
                                        </td>
                                        <td class="col-4 text-1"><?= $data->getDesignationprod() ?></td>
                                        <td class="col-2 text-center">
                                            <?= ($data->getQuantiteprod() - $data->getQuantiteperd()) . $data->getDesignationu() ?>
                                        </td>
                                        <td class="col-1 text-center">
                                            <?= $data->getQuantiteperd() . $data->getDesignationu() ?></td>
                                        <td class="col-2 text-center"><?= $data->getCarburant() . 'L' ?></td>
                                        <td class="col-2 text-center"></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Footer Fiche-->
            <footer class="text-center mt-4">
                <p class="text-1"><strong>NOTE :</strong> Fiche de production.</p>
            </footer>
        </div>
        <!-- Footer -->
        <footer class="text-center mt-4">
            <div class="btn-group btn-group-sm d-print-none"> <a href="" id="print-btn"
                    class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Imprimer</a> <a
                    href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i>
                    Télécharger</a> </div>
        </footer>
    </div>

    <script src="views/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/scripts/html2pdf.bundle.min.js" type="text/javascript"></script>
    <script>
    btn = document.getElementById("print-btn");
    //nomFichier = document.getElementById("fileName").innerText;

    btn.addEventListener("click", (e) => {
        e.preventDefault();
        element = document.getElementById('fiche');
        html2pdf(element, {
            margin: 20,
            filename: 'Fiche_production.pdf',
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