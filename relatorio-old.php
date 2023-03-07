<?php 
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$conteudo = "";

$conteudo .= "<table border='2' style='background:blue'>";
$conteudo .= "<tr>";
$conteudo .= "<td>Nome</td>";
$conteudo .= "<td>E-mail</td>";
$conteudo .= "<td>Cidade/td>";
$conteudo .= "</tr>";
$conteudo .= "<tr>";
$conteudo .= "<td>Emerson</td>";
$conteudo .= "<td>emerson@gmail.com</td>";
$conteudo .= "<td>Americana/td>";
$conteudo .= "</tr>";
$conteudo .= "<tr>";
$conteudo .= "<td>Kadu Fernandes</td>";
$conteudo .= "<td>kadu@gmail.com.br</td>";
$conteudo .= "<td>SBO/td>";
$conteudo .= "</tr>";

$dompdf->loadHtml($conteudo);

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
?>