<?php 
include "conexao.php";

$cad_id = $_GET['cad_id'];

$sqlExcluir = "DELETE FROM CADASTRO WHERE CAD_ID = $cad_id";

mysqli_query($conexao, $sqlExcluir);

mysqli_close($conexao);

header("location: perfil-visualizar.php?msg=mensagemCadExcluido");
?>