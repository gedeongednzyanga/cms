<?php
session_start();
require('views/includes/fpdf.php');

class FicheProduction extends FPDF
{
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 7);
        $this->Cell(0, 0, 'Adresse : Commune de Goma, Quartier Lac Vert, Avenue Kabande, le long de la route Goma-Sake', 0, 1, 'C');
        $this->Cell(0, 5, 'Contact : +243 997733617, 819240025, 977247278; G-mail : balufaustin@gmail.com', 0, 1, 'C');
    }
}

//Objets
$managerProduction = new ManagerProduction();
$data = [];

$pdf = new FicheProduction('P', 'mm', 'A4');
$pdf->AddPage();

//Entete
$pdf->SetFont("Arial", 'B', 15);
$pdf->Cell(0, 10, 'RD. CONGO - GOMA - NORD KIVU', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 18);
$pdf->SetTextColor(55, 79, 101);
$pdf->Cell(0, 8, 'CONSTRUCTION METAL SERVICE', 0, 1, 'C');
$pdf->Image('views/admin/assets/img/logos/cms_logo.jpg', 170, 20, 30, 20, 'jpg');
$pdf->Image('views/admin/assets/img/logos/cms_logo.jpg', 10, 20, 30, 20, 'jpg');
$pdf->SetTextColor(152, 72, 6);
$pdf->Cell(0, 6, 'CMS - SARL', 0, 1, 'C');
$pdf->SetFont("Arial", 'B', 9);
$pdf->SetTextColor(12, 17, 22);
$pdf->Cell(0, 4, 'RCCM: CD/GOM/RCCM/16-B-O467, ID NAT: 5-490-N16077H ITPR N 600/ITPR/02', 0, 1, 'C');
$pdf->Cell(0, 4, 'N d Impot : A1705137D', 0, 1, 'C');
$pdf->Cell(0, 4, 'Tel : +243 997733617, +243 819240025', 0, 1, 'C');
$pdf->Cell(0, 4, 'E-mail : balufaustin@gmail.com', 0, 1, 'C');
$pdf->Ln(3);
$pdf->Cell(0, 0, "", 1, 1, 'C');
$pdf->Ln(6);
$pdf->SetFont("Arial", 'B', 16);
$pdf->Cell(0, 4, 'FICHE DE PRODUCTIONS', 0, 1, 'C');

//Entete Tableau
$pdf->Ln(6);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(20, 7, '', 1, 0, 'C', 1);
$pdf->Cell(24, 7, 'Quantite', 1, 0, 'C', 0);
$pdf->Cell(50, 7, 'Designation', 1, 0, 'C', 0);
$pdf->Cell(21, 7, 'Entree', 1, 0, 'C', 0);
$pdf->Cell(21, 7, 'Perte', 1, 0, 'C', 0);
$pdf->Cell(24, 7, 'Carburant', 1, 0, 'C', 0);
$pdf->Cell(30, 7, 'Observation', 1, 1, 'C', 0);

//Body tableau

if (isset($_SESSION['date2']) && $_SESSION['date1']) {

    $data = $managerProduction->_getProductionBetweenTwoDate($_SESSION['date1'], $_SESSION['date2'], 'Production');

    $totprod = 0;
    $totEntre = 0;
    $totPerte = 0;
    $totCarbu = 0;

    foreach ($data as $production) :
        $pdf->SetFont('Arial', 'BI', 10);
        $pdf->Cell(190, 7, 'Date : ' . $production->getDateprod(), 1, 1, 'L', 0);
        $data2 = $managerProduction->_getOneProductionDate($production->getDateprod());
        $pdf->SetFont('Arial', '', 11);
        foreach ($data2 as $production2) :

            $totprod += $production2->getQuantiteprod();
            $totEntre += ($production2->getQuantiteprod() - $production2->getQuantiteperd());
            $totPerte +=  $production2->getQuantiteperd();
            $totCarbu += $production2->getCarburant();

            $pdf->Cell(20, 7, '', 1, 0, 'C', 1);
            $pdf->Cell(24, 7, $production2->getQuantiteprod() . $production2->getDesignationu(), 1, 0, 'C', 0);
            $pdf->Cell(50, 7, $production2->getDesignationprod(), 1, 0, 'L', 0);
            $pdf->Cell(21, 7, ($production2->getQuantiteprod() - $production2->getQuantiteperd()) . $production2->getDesignationu(), 1, 0, 'C', 0);
            $pdf->Cell(21, 7, $production2->getQuantiteperd() . $production2->getDesignationu(), 1, 0, 'C', 0);
            $pdf->Cell(24, 7, $production2->getCarburant() . 'L', 1, 0, 'C', 0);
            $pdf->Cell(30, 7, '', 1, 1, 'C', 0);
        endforeach;

        $pdf->SetFont('Arial', 'BI', 9);
        $pdf->Cell(20, 6, 'TOTAUX', 1, 0, 'C', 0);
        $pdf->Cell(24, 6, $totprod, 1, 0, 'C', 0);
        $pdf->Cell(50, 6, '', 1, 0, 'L', 1);
        $pdf->Cell(21, 6, $totEntre, 1, 0, 'C', 0);
        $pdf->Cell(21, 6, $totPerte, 1, 0, 'C', 0);
        $pdf->Cell(24, 6, $totCarbu . 'L', 1, 0, 'C', 0);
        $pdf->Cell(30, 6, '', 1, 1, 'C', 1);

        $totprod = 0;
        $totEntre = 0;
        $totPerte = 0;
        $totCarbu = 0;

    endforeach;
} else if (isset($_SESSION['date1'])) {
    $totprod = 0;
    $totEntre = 0;
    $totPerte = 0;
    $totCarbu = 0;

    $data = $managerProduction->_getOneProductionDate($_SESSION['date1']);
    $pdf->SetFont('Arial', 'BI', 10);
    $pdf->Cell(190, 7, 'Date : ' . $_SESSION['date1'], 1, 1, 'L', 0);

    $data = $managerProduction->_getOneProductionDate($_SESSION['date1']);
    $pdf->SetFont('Arial', '', 11);
    foreach ($data as $production) :

        $totprod += $production->getQuantiteprod();
        $totEntre += ($production->getQuantiteprod() - $production->getQuantiteperd());
        $totPerte +=  $production->getQuantiteperd();
        $totCarbu += $production->getCarburant();

        $pdf->Cell(20, 7, '', 1, 0, 'C', 1);
        $pdf->Cell(24, 7, $production->getQuantiteprod() . $production->getDesignationu(), 1, 0, 'C', 0);
        $pdf->Cell(50, 7, $production->getDesignationprod(), 1, 0, 'L', 0);
        $pdf->Cell(21, 7, ($production->getQuantiteprod() - $production->getQuantiteperd()) . $production->getDesignationu(), 1, 0, 'C', 0);
        $pdf->Cell(21, 7, $production->getQuantiteperd() . $production->getDesignationu(), 1, 0, 'C', 0);
        $pdf->Cell(24, 7, $production->getCarburant() . 'L', 1, 0, 'C', 0);
        $pdf->Cell(30, 7, '', 1, 1, 'C', 0);
    endforeach;
    $pdf->SetFont('Arial', 'BI', 10);
    $pdf->Cell(20, 7, 'TOTAUX', 1, 0, 'C', 0);
    $pdf->Cell(24, 7, $totprod, 1, 0, 'C', 0);
    $pdf->Cell(50, 7, '', 1, 0, 'L', 1);
    $pdf->Cell(21, 7, $totEntre, 1, 0, 'C', 0);
    $pdf->Cell(21, 7, $totPerte, 1, 0, 'C', 0);
    $pdf->Cell(24, 7, $totCarbu . 'L', 1, 0, 'C', 0);
    $pdf->Cell(30, 7, '', 1, 1, 'C', 1);
}

$_nom_file = time() . '_fiche_production';
$pdf->Output("I", $_nom_file, 1);