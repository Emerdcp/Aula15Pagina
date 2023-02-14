<?php include_once "header.php";?>

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
<hr>
                            <ul class="list-group mb-0">
                            <?php 
                            include "conexao.php";
                            $sqlVisualizacao = "SELECT * FROM cadastro";
                            $todasVisualizacao = mysqli_query($conexao, $sqlVisualizacao);
                            while($Visualizacao = mysqli_fetch_assoc($todasVisualizacao)){
                                ?>
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="label">ID: </label>
                                            <?php echo $Visualizacao['cad_id']; ?>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="label">Nome: </label>
                                            <?php echo $Visualizacao['cad_nome']; ?>
                                        </div>
                                     </div>  
                                    
                                     
                                
                                
                                </li>
                                <?php
                                } 
                                mysqli_close($conexao);
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </select>        
</body>


<div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label class="label">Nome</label>
                                <input placeholder="Nome" name="cad_nome" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">E-mail</label>
                                <input placeholder="E-mail" type="email" name="cad_email" class="form-control" required>
                            </div>
                        </div>