<?php 
session_start();
?>
<a href="logout.php"> <?php echo @$_SESSION["usuario"]; ?> [Sair]</a>
<h1>Painel</h1>