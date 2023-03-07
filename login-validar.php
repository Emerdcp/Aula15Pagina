<?php
$usuario = $_POST['cad_usuario'];
$senha = $_POST['cad_senha'];

include_once "conexao.php";

$senha = md5($senha);//Para validar uma senha cripitografada

$sql = "SELECT * FROM cadastro WHERE cad_email = '$usuario' AND cad_senha = '$senha'";

$dados = mysqli_query($conexao, $sql);


// criado um validação para poder saber se o usuário esta logado ou não. depois criar um página e colocar no include.
if($dados->num_rows > 0){
    session_start();
    $_SESSION["cad_usuario"] = $usuario;//para fazer que o usuário mostre o login
    header("location:perfil-painel.php");
}else{
    header("location:login.php?msg=mensagemInvalido");
}
?>