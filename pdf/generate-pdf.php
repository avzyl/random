<?php

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$title = $_POST["title"];
$message = $_POST["message"];

$html ="<h1>$title</h1>";
$html .= "$message";
// $html .= "Hello World!";
// $html = file_get_contents('test.hmtl');
$dompdf->loadHtml($html);

// $dompdf->set_option('enable_remote', TRUE);
// $dompdf->loadHtmlFile('http://127.0.0.1/10-actsC/test.html');

$dompdf->setPaper('A4', 'Portrait');

$dompdf->render();

$dompdf->stream("sample-document.pdf", ["Attachment" => 0]);
 ?>
