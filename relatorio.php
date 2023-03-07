<?php 
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();




include_once "conexao.php";

$conteudo = "";

$conteudo .= "<table border='2' style='width:100%'>";
$conteudo .= "<tr>";
$conteudo .= "<th>Código</th>";
$conteudo .= "<th>Nome</th>";
$conteudo .= "<th>E-mail</th>";
$conteudo .= "<th>Profissão</th>";
$conteudo .= "<th>Facebook</th>";
$conteudo .= "<th>Instagram</th>";
$conteudo .= "</tr>";

$sqlImprimir = "SELECT * FROM CADASTRO";
$todosImprimir = mysqli_query($conexao, $sqlImprimir);
while($imprimirCadastro = mysqli_fetch_assoc($todosImprimir)){

$conteudo .= "<tr>";
$conteudo .= "<td>{$imprimirCadastro['cad_id']}</td>";
$conteudo .= "<td>{$imprimirCadastro['cad_nome']}</td>";
$conteudo .= "<td>{$imprimirCadastro['cad_email']}</td>";
$conteudo .= "<td>{$imprimirCadastro['cad_profissao']}</td>";
$conteudo .= "<td>{$imprimirCadastro['cad_facebook']}</td>";
$conteudo .= "<td>{$imprimirCadastro['cad_instagram']}</td>";
$conteudo .= "</tr>";


}    
$conteudo .="</table>";

//echo $conteudo;
//exit();

$dompdf->loadHtml($conteudo);

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();

//$output = $dompdf->output(); Serve para salvar como PDF
//file_put_contents('Relatório.pdf', $output);

$dompdf->stream("Relatório.pdf");

?>