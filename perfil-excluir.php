<?php 
include "conexao.php";

$id = $_GET['cad_id'];

$sqlExcluir = "DELETE FROM CADASTRO WHERE CAD_ID = $id";

mysqli_query($conexao, $sqlExcluir);

mysqli_close($conexao);

header("location: perfil-painel.php?msg=mensagemCadExcluido");
?>