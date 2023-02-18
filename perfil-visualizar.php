<?php 
session_start();
?>
<a href="logout.php"> <?php echo $_SESSION["usuario"]; ?> [Sair]</a>

<?php include_once "header.php";?>
<?php include_once "conexao.php";?>

<body>
    <section class="vh-100 fundo">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="justify-content-center">
                    <h1 class="title">Visualização Dados Cadas</h1>
                    <hr>
                    <?php include_once "mensagemInvalido.php";?>
                    <?php include_once "mensagemCadastrado.php";?>
                    <?php include_once "mensagemCadExcluido.php";?>
                    
                    <div class="card">
                        <div class="card-body p-5">

                            <ul class="list-group mb-0">
                            <?php 
                            include "conexao.php";
                            $sqlVisualizacao = "SELECT * FROM cadastro";
                            $todasVisualizacao = mysqli_query($conexao, $sqlVisualizacao);
                            while($Visualizacao = mysqli_fetch_assoc($todasVisualizacao)){
                                ?>
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">
                                    <div class="col-1"> 
                                        <?php echo $Visualizacao['cad_id']; ?>
                                    </div>
                                    <div class="col-5"> 
                                        <?php echo $Visualizacao['cad_nome']; ?>
                                    </div>
                                    <div class="col-4">
                                        <?php echo $Visualizacao['cad_email']; ?>
                                    </div>
                                </li>
                                <?php
                                } 
                                mysqli_close($conexao);
                                ?>
                            </ul>
