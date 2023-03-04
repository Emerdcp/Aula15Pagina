<?php 
include_once "conexao.php";

$cad_id = $_POST['cad_id'];
$cad_nome = $_POST['cad_nome'];
$cad_email = $_POST['cad_email'];
$cad_profissao = $_POST['cad_profissao'];
$cad_descricao = $_POST['cad_descricao'];
$cad_instagram = $_POST['cad_instagram'];
$cad_twitter = $_POST['cad_twitter'];
$cad_facebook = $_POST['cad_facebook'];
$cad_linkedin = $_POST['cad_linkedin'];
$cad_youtube = $_POST['cad_youtube'];
$cad_senha = $_POST['cad_senha'];
$cad_foto = $_POST['cad_foto'];
$cad_imgfundo = $_POST['cad_imgfundo'];

$sqlAlterar = "UPDATE CADASTRO SET CAD_NOME = '$cad_nome', CAD_EMAIL = '$cad_email', CAD_PROFISSAO = '$cad_profissao', 
CAD_DESCRICAO = '$cad_descricao', CAD_INSTAGRAM = '$cad_instagram', CAD_TWITTER = '$cad_twitter', 
CAD_FACEBOOK = '$cad_facebook', CAD_LINKEDIN = '$cad_linkedin', CAD_YOUTUBE = '$cad_youtube', 
CAD_SENHA = '$cad_senha', CAD_FOTO = '$cad_foto', CAD_IMGFUNDO = '$cad_imgfundo' WHERE CAD_ID = '$cad_id'";
//echo $sqlAlterar;
//exit();

mysqli_query($conexao, $sqlAlterar);

mysqli_close($conexao);

header("location: perfil-visualizar.php?msg=mmensagemCadAlterado");
?>