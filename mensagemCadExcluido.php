<?php 
$msg = $_GET['msg'] ?? "";

if($msg == "mensagemCadExcluido"){
    echo "<div class='alert alert-info'>Cadastrado de Usuário Excluído com Sucesso!</div>";
}
?>