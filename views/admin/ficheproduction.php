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
                <div class="col-sm-6 fw-600"><strong>FICHE DE PRODUCTION</strong></div>
                <div class="col-sm-6 text-sm-end"> <strong>Date : </strong> <?= $_SESSION['date1'] ?></div>

            </div>
            <hr>

            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table  table-bordered mb-0">
                            <thead class="card-header">
                                <tr>
                                    <td class="col-3"><strong>Service</strong></td>
                                    <td class="col-4"><strong>Description</strong></td>
                                    <td class="col-2 text-center"><strong>Rate</strong></td>
                                    <td class="col-1 text-center"><strong>QTY</strong></td>
                                    <td class="col-2 text-end"><strong>Amount</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-3">Design</td>
                                    <td class="col-4 text-1">Creating a website design</td>
                                    <td class="col-2 text-center">$50.00</td>
                                    <td class="col-1 text-center">10</td>
                                    <td class="col-2 text-end">$500.00</td>
                                </tr>
                                <tr>
                                    <td>Development</td>
                                    <td class="text-1">Website Development</td>
                                    <td class="text-center">$120.00</td>
                                    <td class="text-center">10</td>
                                    <td class="text-end">$1200.00</td>
                                </tr>
                                <tr>
                                    <td>SEO</td>
                                    <td class="text-1">Optimize the site for search engines</td>
                                    <td class="text-center">$450.00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-end">$450.00</td>
                                </tr>
                            </tbody>
                            <tfoot class="card-footer">
                                <tr>
                                    <td colspan="4" class="text-end"><strong>Sub Total:</strong></td>
                                    <td class="text-end">$2150.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end"><strong>Tax:</strong></td>
                                    <td class="text-end">$215.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end border-bottom-0"><strong>Total:</strong></td>
                                    <td class="text-end border-bottom-0">$2365.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer class="text-center mt-4">
            <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical
                signature.</p>
            <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()"
                    class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a
                    href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i>
                    Download</a> </div>
        </footer>
    </div>
</body>

</html>


<?php
// session_start();
// require('views/includes/fpdf.php');

// class FicheProduction extends FPDF
// {
//     function Footer()
//     {
//         $this->SetY(-15);
//         $this->SetFont('Arial', 'I', 7);
//         $this->Cell(0, 0, 'Adresse : Commune de Goma, Quartier Lac Vert, Avenue Kabande, le long de la route Goma-Sake', 0, 1, 'C');
//         $this->Cell(0, 5, 'Contact : +243 997733617, 819240025, 977247278; G-mail : balufaustin@gmail.com', 0, 1, 'C');
//     }
// }

// //Objets
// $managerProduction = new ManagerProduction();
// $data = [];

// $pdf = new FicheProduction('P', 'mm', 'A4');
// $pdf->AddPage();

// //Entete
// $pdf->SetFont("Arial", 'B', 15);
// $pdf->Cell(0, 10, 'RD. CONGO - GOMA - NORD KIVU', 0, 1, 'C');
// $pdf->SetFont('Arial', 'B', 18);
// $pdf->SetTextColor(55, 79, 101);
// $pdf->Cell(0, 8, 'CONSTRUCTION METAL SERVICE', 0, 1, 'C');
// $pdf->Image('views/admin/assets/img/logos/cms_logo.jpg', 170, 20, 30, 20, 'jpg');
// $pdf->Image('views/admin/assets/img/logos/cms_logo.jpg', 10, 20, 30, 20, 'jpg');
// $pdf->SetTextColor(152, 72, 6);
// $pdf->Cell(0, 6, 'CMS - SARL', 0, 1, 'C');
// $pdf->SetFont("Arial", 'B', 9);
// $pdf->SetTextColor(12, 17, 22);
// $pdf->Cell(0, 4, 'RCCM: CD/GOM/RCCM/16-B-O467, ID NAT: 5-490-N16077H ITPR N 600/ITPR/02', 0, 1, 'C');
// $pdf->Cell(0, 4, 'N d Impot : A1705137D', 0, 1, 'C');
// $pdf->Cell(0, 4, 'Tel : +243 997733617, +243 819240025', 0, 1, 'C');
// $pdf->Cell(0, 4, 'E-mail : balufaustin@gmail.com', 0, 1, 'C');
// $pdf->Ln(3);
// $pdf->Cell(0, 0, "", 1, 1, 'C');
// $pdf->Ln(6);
// $pdf->SetFont("Arial", 'B', 16);
// $pdf->Cell(0, 4, 'FICHE DE PRODUCTIONS', 0, 1, 'C');

// //Entete Tableau
// $pdf->Ln(6);
// $pdf->SetFont('Arial', 'B', 11);
// $pdf->Cell(20, 7, '', 1, 0, 'C', 1);
// $pdf->Cell(24, 7, 'Quantite', 1, 0, 'C', 0);
// $pdf->Cell(50, 7, 'Designation', 1, 0, 'C', 0);
// $pdf->Cell(21, 7, 'Entree', 1, 0, 'C', 0);
// $pdf->Cell(21, 7, 'Perte', 1, 0, 'C', 0);
// $pdf->Cell(24, 7, 'Carburant', 1, 0, 'C', 0);
// $pdf->Cell(30, 7, 'Observation', 1, 1, 'C', 0);

// //Body tableau

// if (isset($_SESSION['date2']) && $_SESSION['date1']) {

//     $data = $managerProduction->_getProductionBetweenTwoDate($_SESSION['date1'], $_SESSION['date2'], 'Production');

//     $totprod = 0;
//     $totEntre = 0;
//     $totPerte = 0;
//     $totCarbu = 0;

//     foreach ($data as $production) :
//         $pdf->SetFont('Arial', 'BI', 10);
//         $pdf->Cell(190, 7, 'Date : ' . $production->getDateprod(), 1, 1, 'L', 0);
//         $data2 = $managerProduction->_getOneProductionDate($production->getDateprod());
//         $pdf->SetFont('Arial', '', 11);
//         foreach ($data2 as $production2) :

//             $totprod += $production2->getQuantiteprod();
//             $totEntre += ($production2->getQuantiteprod() - $production2->getQuantiteperd());
//             $totPerte +=  $production2->getQuantiteperd();
//             $totCarbu += $production2->getCarburant();

//             $pdf->Cell(20, 7, '', 1, 0, 'C', 1);
//             $pdf->Cell(24, 7, $production2->getQuantiteprod() . $production2->getDesignationu(), 1, 0, 'C', 0);
//             $pdf->Cell(50, 7, $production2->getDesignationprod(), 1, 0, 'L', 0);
//             $pdf->Cell(21, 7, ($production2->getQuantiteprod() - $production2->getQuantiteperd()) . $production2->getDesignationu(), 1, 0, 'C', 0);
//             $pdf->Cell(21, 7, $production2->getQuantiteperd() . $production2->getDesignationu(), 1, 0, 'C', 0);
//             $pdf->Cell(24, 7, $production2->getCarburant() . 'L', 1, 0, 'C', 0);
//             $pdf->Cell(30, 7, '', 1, 1, 'C', 0);
//         endforeach;

//         $pdf->SetFont('Arial', 'BI', 9);
//         $pdf->Cell(20, 6, 'TOTAUX', 1, 0, 'C', 0);
//         $pdf->Cell(24, 6, $totprod, 1, 0, 'C', 0);
//         $pdf->Cell(50, 6, '', 1, 0, 'L', 1);
//         $pdf->Cell(21, 6, $totEntre, 1, 0, 'C', 0);
//         $pdf->Cell(21, 6, $totPerte, 1, 0, 'C', 0);
//         $pdf->Cell(24, 6, $totCarbu . 'L', 1, 0, 'C', 0);
//         $pdf->Cell(30, 6, '', 1, 1, 'C', 1);

//         $totprod = 0;
//         $totEntre = 0;
//         $totPerte = 0;
//         $totCarbu = 0;

//     endforeach;
// } else if (isset($_SESSION['date1'])) {
//     $totprod = 0;
//     $totEntre = 0;
//     $totPerte = 0;
//     $totCarbu = 0;

//     $data = $managerProduction->_getOneProductionDate($_SESSION['date1']);
//     $pdf->SetFont('Arial', 'BI', 10);
//     $pdf->Cell(190, 7, 'Date : ' . $_SESSION['date1'], 1, 1, 'L', 0);

//     $data = $managerProduction->_getOneProductionDate($_SESSION['date1']);
//     $pdf->SetFont('Arial', '', 11);
//     foreach ($data as $production) :

//         $totprod += $production->getQuantiteprod();
//         $totEntre += ($production->getQuantiteprod() - $production->getQuantiteperd());
//         $totPerte +=  $production->getQuantiteperd();
//         $totCarbu += $production->getCarburant();

//         $pdf->Cell(20, 7, '', 1, 0, 'C', 1);
//         $pdf->Cell(24, 7, $production->getQuantiteprod() . $production->getDesignationu(), 1, 0, 'C', 0);
//         $pdf->Cell(50, 7, $production->getDesignationprod(), 1, 0, 'L', 0);
//         $pdf->Cell(21, 7, ($production->getQuantiteprod() - $production->getQuantiteperd()) . $production->getDesignationu(), 1, 0, 'C', 0);
//         $pdf->Cell(21, 7, $production->getQuantiteperd() . $production->getDesignationu(), 1, 0, 'C', 0);
//         $pdf->Cell(24, 7, $production->getCarburant() . 'L', 1, 0, 'C', 0);
//         $pdf->Cell(30, 7, '', 1, 1, 'C', 0);
//     endforeach;
//     $pdf->SetFont('Arial', 'BI', 10);
//     $pdf->Cell(20, 7, 'TOTAUX', 1, 0, 'C', 0);
//     $pdf->Cell(24, 7, $totprod, 1, 0, 'C', 0);
//     $pdf->Cell(50, 7, '', 1, 0, 'L', 1);
//     $pdf->Cell(21, 7, $totEntre, 1, 0, 'C', 0);
//     $pdf->Cell(21, 7, $totPerte, 1, 0, 'C', 0);
//     $pdf->Cell(24, 7, $totCarbu . 'L', 1, 0, 'C', 0);
//     $pdf->Cell(30, 7, '', 1, 1, 'C', 1);
// }

// $_nom_file = time() . '_fiche_production';
// $pdf->Output("I", $_nom_file, 1);