<?php 
//$server = '127.0.0.1:3312';//alteração de porta tem que mudar para colocar a :porta
$server = '127.0.0.1';//alteração de porta tem que mudar para colocar a :porta
$db = 'dados';
$user = 'root';
$pass = '';

try{
    $conexao = mysqli_connect($server, $user, $pass, $db) or die("Falha na conexao".mysqli_connect_error());
}catch(Exception $e){
    echo "Erro na conexão: $e";
    exit();
}
?>