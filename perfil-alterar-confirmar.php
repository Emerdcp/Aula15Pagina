<?php 
include_once "conexao.php";

$id = $_POST['cad_id'];
$nome = $_POST['cad_nome'];
$email = $_POST['cad_email'];
$profissao = $_POST['cad_profissao'];
$descricao = $_POST['cad_descricao'];
$instagram = $_POST['cad_instagram'];
$twitter = $_POST['cad_twitter'];
$facebook = $_POST['cad_facebook'];
$linkedin = $_POST['cad_linkedin'];
$youtube = $_POST['cad_youtube'];
$senha = $_POST['cad_senha'];
$foto = $_POST['cad_foto'];
$imgfundo = $_POST['cad_imgfundo'];

$sqlAlterar = "UPDATE CADASTRO SET CAD_NOME = '$nome', CAD_EMAIL = '$email', CAD_PROFISSAO = '$profissao', 
CAD_DESCRICAO = '$descricao', CAD_INSTAGRAM = '$instagram', CAD_TWITTER = '$twitter', 
CAD_FACEBOOK = '$facebook', CAD_LINKEDIN = '$linkedin', CAD_YOUTUBE = '$youtube', 
CAD_SENHA = '$senha', CAD_FOTO = '$foto', CAD_IMGFUNDO = '$imgfundo' WHERE CAD_ID = '$id'";
echo $sqlAlterar;
exit();

mysqli_query($conexao, $sqlAlterar);

mysqli_close($conexao);

header("location: perfil-novo.php?msg=mmensagemCadAlterado");
?>