<?php 
session_start();
if(!isset($_SESSION['cad_usuario'])){
    header("location: login.php");
}
?>