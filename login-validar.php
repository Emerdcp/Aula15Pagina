<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include_once "conexao.php";

$sql = "SELECT * FROM cadastro WHERE cad_email = '$usuario' AND cad_senha = '$senha'";

$dados = mysqli_query($conexao, $sql);

if($dados->num_rows > 0){
    session_start();
    $_SESSION["usuario"] = $usuario;//para fazer que o usuário mostre o login
    header("location:perfil-painel.php");
}else{
    header("location:login.php?msg=mensagemInvalido");
}
?>