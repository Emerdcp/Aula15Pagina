<?php 
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

include_once "conexao.php";

$cad_senha = md5($cad_senha);//Para validar uma senha cripitografada

$sqlGravar = "INSERT INTO CADASTRO(CAD_NOME, CAD_EMAIL, CAD_PROFISSAO, CAD_DESCRICAO, CAD_INSTAGRAM, CAD_TWITTER, 
CAD_FACEBOOK, CAD_LINKEDIN, CAD_YOUTUBE, CAD_SENHA, CAD_FOTO, CAD_IMGFUNDO) VALUE('$cad_nome', '$cad_email', '$cad_profissao', 
'$cad_descricao', '$cad_instagram', '$cad_twitter', '$cad_facebook', '$cad_linkedin', '$cad_youtube', '$cad_senha', '$cad_foto', '$cad_imgfundo')";

echo $sqlGravar;

mysqli_query($conexao, $sqlGravar);

mysqli_close($conexao);

//Código apra colocar imagem_________
$pastaImg = "imagens/";

$nomeArquivo = $_FILES["cad_foto"]["name"];

$extensao = explode(".",$nomeArquivo);
$nomeNovo = round(microtime(true)) . "." . end($extensao);

move_uploaded_file($_FILES["cad_foto"]["tmp_name"],$pastaImg . $nomeNovo);

//Fim________________________________



header("location: perfil-painel.php?msg=mensagemCadastrado");


?>