<?php

require __DIR__ ."/vendor/autoload.php";

use Dompdf\Dompdf;

$dompdf=new Dompdf;

$dompdf->loadhtml("Heebo");

$dom->render();

$dompdf->stream();

?>