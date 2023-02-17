<?php 
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

include_once "conexao.php";

$sqlGravar = "INSERT INTO CADASTRO(CAD_NOME, CAD_EMAIL, CAD_PROFISSAO, CAD_DESCRICAO, CAD_INSTAGRAM, CAD_TWITTER, 
CAD_FACEBOOK, CAD_LINKEDIN, CAD_YOUTUBE, CAD_SENHA, CAD_FOTO, CAD_IMGFUNDO) VALUE('$nome', '$email', '$profissao', 
'$descricao', '$instagram', '$twitter', '$facebook', '$linkedin', '$youtube', '$senha', '$foto', '$imgfundo')";

echo $sqlGravar;

mysqli_query($conexao, $sqlGravar);

mysqli_close($conexao);

header("location: perfil-painel.php?msg=mensagemCadastrado");

?>