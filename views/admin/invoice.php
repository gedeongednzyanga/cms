<?php

require('views/includes/fpdf.php');
$pdf = new FPDF('P', 'mm', 'A5');

// nom du fichier final
$nom_file = "fact_.pdf";

$pdf->AddPage();

$pdf->Image('views/pages/assets/images/logo.jpg', 4, 8, 20, 15);

$pdf->Image('views/pages/assets/images/logo.jpg', 125, 8, 20, 15);

$pdf->SetFont("Arial", 'B', 12);
$pdf->Cell(0, 0, 'RD. CONGO - GOMA - NORD KIVU', 0, 0, 'C');
$pdf->Ln(7);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0, 'CONSTRUCTION METAL SERVICE', 0, 0, 'C');
$pdf->Ln(7);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0, "CMS SARL", 0, 0, 'C');
$pdf->Ln(7);
$pdf->SetFont('Arial', 'BI', 9);
$pdf->Cell(0, 0, "RCCM: CD/GOM/RCCM/16-B-O467, ID NAT: 5-490-N16077H ITPR N° 600/ITPR/02 ", 0, 0, 'C');
$pdf->Ln(7);
$pdf->SetFont('Arial', 'BI', 9);
$pdf->Cell(0, 0, "N° d’Impôt : A1705137D Tél: +243 997733617, +243 819240025", 0, 0, 'C');
$pdf->Ln(7);
$pdf->SetFont('Arial', 'BI', 9);
$pdf->Cell(0, 0, "E-mail: balufaustin@gmail.com", 0, 0, 'C');
$pdf->Ln(7);
$pdf->Cell(0, 0, "", "B", 0, 'C');

$pdf->Output("I", $nom_file);