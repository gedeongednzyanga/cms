<?php
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$document = new Dompdf();

$html = '<h1>Hello Gédéon</h1>';

$document->loadHtml($html, 'UTF-8');
$document->setPaper('A4', 'portrait');
$document->render();
$document->stream('test_fac', array("Attachment" => 0));