<?php
require("views/includes/tcpdf_min/tcpdf.php");
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->addPage();
$pdf->Write(10, 'Gédéon');
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="file.pdf"');
$pdf->Output($downlaodname, 'D');
$pdf->output();