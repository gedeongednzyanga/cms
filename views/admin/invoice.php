<?php
require('views/includes/fpdf.php');

class Invoice extends FPDF
{
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 7);
        $this->Cell(0, 2, 'Adresse : Commune de Goma, Quartier Lac Vert, Avenue Kabande, le long de la route Goma-Sake', 0, 1, 'C');
        $this->Cell(0, 5, 'Contact : +243 997733617, 819240025, 977247278; G-mail : balufaustin@gmail.com', 0, 1, 'C');
    }
}

//Creation des objets

$managerCommande = new ManagerCommande();
$enteteFacture = $managerCommande->getOneEntCommande($_GET['number']);
$bodyFacture = $managerCommande->getOneCommande($_GET['number']);
$netPaye = 0;

$pdf = new Invoice('P', 'mm', 'A5');
$pdf->AddPage();

//Entete de la facture
$pdf->SetFont('Arial', 'B', 40);
$pdf->SetTextColor(52, 152, 219);
$pdf->Text(10, 20, 'Facture');
$pdf->Image('views/admin/assets/img/logos/logo_facture.png', 120, 4, 20, 20, 'png');
$pdf->Ln(15);
$pdf->Cell(0, 0, "", "B", 0, 'C');

$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(55, 79, 101);
$pdf->Write(2, "CONSTRUCTION METAL SERVICE                                      Facture ID : " . $_GET['number'] . "");

foreach ($enteteFacture as $enteF) :

    $pdf->Ln(4);
    $pdf->SetFont('Arial', 'I', 9);
    $pdf->SetTextColor(18, 26, 34);
    $pdf->Write(2, "                 C.M.S-SARL                                                           Facturee le : " . $enteF->getDatecom() . "");

    $pdf->Ln(4);
    $pdf->SetFont('Arial', 'I', 8);
    $pdf->SetTextColor(18, 26, 34);
    $pdf->Write(4, "RCCM : CD/GOM/RCCM/16-B-O467                                                 Emise le        : " . date('d-m-Y') . " \nID NAT : 5-490-N16077H\nITPR : 600/ITPR/02 \nN Impot : A1705137D");

    $pdf->Ln(6);
    $pdf->Cell(0, 0, "", "B", 0, 'C');

    $pdf->Ln(6);
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetTextColor(18, 26, 34);
    $pdf->Write(2, "Mr/Md/Ese : " . $enteF->getCustomer() . "");
    $pdf->Ln(2);
endforeach;
$pdf->Write(3, "- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  doit");

//Body de la facture

//Entete Tableau
$pdf->Ln(7);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(20, 7, 'Qte', 1, 0, 'C', 0);
$pdf->Cell(50, 7, 'Designation', 1, 0, 'C', 0);
$pdf->Cell(25, 7, 'PU', 1, 0, 'C', 0);
$pdf->Cell(34, 7, 'PT', 1, 1, 'C', 0);

//Body Tableau
foreach ($bodyFacture as $detailF) :
    $netPaye += $detailF->getPrixprod() * $detailF->getQuantitecom();
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(20, 7, $detailF->getQuantitecom() . '' . $detailF->getDesignationu(), 1, 0, 'C', 0);
    $pdf->Cell(50, 7, $detailF->getDesignationprod(), 1, 0, 'L', 0);
    $pdf->Cell(25, 7, $detailF->getPrixprod() . '$', 1, 0, 'C', 0);
    $pdf->Cell(34, 7, $detailF->getPrixprod() * $detailF->getQuantitecom() . '$', 1, 1, 'C', 0);
endforeach;

// $pdf->Cell(20, 7, '20', 1, 0, 'C', 0);
// $pdf->Cell(50, 7, 'Bloc', 1, 0, 'C', 0);
// $pdf->Cell(25, 7, '1.8$', 1, 0, 'C', 0);
// $pdf->Cell(34, 7, '36$', 1, 1, 'C', 0);

// $pdf->Cell(20, 7, '20', 1, 0, 'C', 0);
// $pdf->Cell(50, 7, 'Bloc', 1, 0, 'C', 0);
// $pdf->Cell(25, 7, '1.8$', 1, 0, 'C', 0);
// $pdf->Cell(34, 7, '36$', 1, 1, 'C', 0);

// $pdf->Cell(20, 7, '20', 1, 0, 'C', 0);
// $pdf->Cell(50, 7, 'Bloc', 1, 0, 'C', 0);
// $pdf->Cell(25, 7, '1.8$', 1, 0, 'C', 0);
// $pdf->Cell(34, 7, '36$', 1, 1, 'C', 0);

// $pdf->Cell(20, 7, '20', 1, 0, 'C', 0);
// $pdf->Cell(50, 7, 'Bloc', 1, 0, 'C', 0);
// $pdf->Cell(25, 7, '1.8$', 1, 0, 'C', 0);
// $pdf->Cell(34, 7, '36$', 1, 1, 'C', 0);

// $pdf->Cell(20, 7, '20', 1, 0, 'C', 0);
// $pdf->Cell(50, 7, 'Bloc', 1, 0, 'C', 0);
// $pdf->Cell(25, 7, '1.8$', 1, 0, 'C', 0);
// $pdf->Cell(34, 7, '36$', 1, 1, 'C', 0);

// $pdf->SetFont('Arial', '', 10);
// $pdf->Cell(20, 7, '20', 1, 0, 'C', 0);
// $pdf->Cell(50, 7, 'Bloc', 1, 0, 'C', 0);
// $pdf->Cell(25, 7, '1.8$', 1, 0, 'C', 0);
// $pdf->Cell(34, 7, '36$', 1, 1, 'C', 0);

// $pdf->Cell(20, 7, '20', 1, 0, 'C', 0);
// $pdf->Cell(50, 7, 'Bloc', 1, 0, 'C', 0);
// $pdf->Cell(25, 7, '1.8$', 1, 0, 'C', 0);
// $pdf->Cell(34, 7, '36$', 1, 1, 'C', 0);

// $pdf->Cell(20, 7, '20', 1, 0, 'C', 0);
// $pdf->Cell(50, 7, 'Bloc', 1, 0, 'C', 0);
// $pdf->Cell(25, 7, '1.8$', 1, 0, 'C', 0);
// $pdf->Cell(34, 7, '36$', 1, 1, 'C', 0);

//Zone totaux
$tva = ($netPaye * 16) / 100;
$pdf->SetFont('Arial', 'BI', 10);
$pdf->Cell(95, 7, 'Sous-Total', 1, 0, 'C', 0);
$pdf->Cell(34, 7, round($netPaye, 2) . '$', 1, 1, 'R', 0);

$pdf->Cell(95, 7, 'TVA (16%)', 1, 0, 'C', 0);
$pdf->Cell(34, 7, round($tva, 2) . '$', 1, 1, 'R', 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(95, 7, 'TOTAL GENERALE', 1, 0, 'C', 0);
$pdf->Cell(34, 7,  round(($netPaye + $tva), 2) . '$', 1, 1, 'R', 0);

//End Body Facture

//Footer de la Facture
$pdf->Ln(5);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Write(0, 'N.B : Les marchandises ne sont ni reprises ni ehangees.');

$pdf->Ln(7);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(0, 'Sceau de l entreprise');

$pdf->Ln(4);
$pdf->SetFont('Arial', 'I', 9);
// $pdf->Write(5, '                                                                                                         Nos coordonnes');
$pdf->Output();