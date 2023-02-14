<?php 
$msg = $_GET['msg'] ?? "";

if($msg == "mensagemInvalido"){
    echo "<div class='alert alert-info'>Usuário ou Senha Inválido!</div>";
}
?>