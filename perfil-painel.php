<?php 
include_once "sessao-login.php";
include_once "header.php";
?>

<div class="menu container-fluid">
    <?php include_once "menu.php";?>
</div>

<main class="container">
 <body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-12">
                    <div class="justify-content-center">
                        <h1 class="title">Painel</h1>

                        <a href="relatorio.php" class="btn btn-primary"> Relatótio</a>
                        <a href="relatorio-old.php" class="btn btn-primary"> Relatótio-old</a>

                        <hr>
                        <?php include_once "mensagemInvalido.php";?>
                        <?php include_once "mensagemCadastrado.php";?>
                        <?php include_once "mensagemCadExcluido.php";?>
                        <?php include_once "mensagemCadAlterado.php";?>
                    </div>
                    <div class="card">
                        <div class="card-body p-5">
                            <ul class="list-group mb-0">
                                
                                <?php
                                include "conexao.php";
                                                                    
                                $sqlBusca = "SELECT * FROM cadastro";
                                
                                $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
                                while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
                                ?>

                                    <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">
                                        <div class="col-1"> 
                                            <?php echo $umaTarefa['cad_id']; ?>
                                        </div>
                                        <div class="col-3"> 
                                            <?php echo $umaTarefa['cad_nome']; ?>
                                        </div>
                                        <div class="col-2"> 
                                            <?php echo $umaTarefa['cad_profissao']; ?>
                                        </div>
                                        <div class="col-3">
                                            <?php echo $umaTarefa['cad_email']; ?>
                                        </div>
                                        <div class="col-3">
                                            <span>
                                                <a class='btn btn-light' href="perfil-visualizar.php?cad_id=<?php echo $umaTarefa['cad_id']?>"><i class="bi bi-aspect-ratio"></i></a>
                                                <a class='btn btn-light' href="perfil-alterar.php?cad_id=<?php echo $umaTarefa['cad_id']?>"><i class="bi bi-pencil-fill"></i></a>
                                                <a class='btn btn-light' href="perfil-excluir.php?cad_id=<?php echo $umaTarefa['cad_id']?>"><i class="bi bi-trash"></i></a>
                                            </span>
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
    </section>
</body>
</main>

<?php include_once "footer.php";?>