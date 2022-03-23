<?php

require('views/includes/fpdf.php');
$pdf = new FPDF('P', 'mm', 'A5');

// nom du fichier final
$nom_file = "fact_.pdf";

$pdf->Output("I", $nom_file);