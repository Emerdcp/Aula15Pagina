<?php 
$msg = $_GET['msg'] ?? "";

if($msg == "mensagemCadastrado"){
    echo "<div class='alert alert-info'>Usuário Cadastrado com Sucesso!</div>";
}
?>