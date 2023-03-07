<?php 
include_once "sessao-login.php";
include_once "header.php";
?>

<div class="menu container-fluid">
    <?php include_once "menu.php";?>
</div>

<?php include_once "conexao.php";?>

<!-- rever estes dados se esta correto a consulta--------INICIO------->

<?php 
$cad_id = $_GET['cad_id'];//[id] vai trazer a informação da URL
$cad_nome = "";
$cad_email = "";
$cad_profissao = "";
$cad_descricao = "";
$cad_instagram = "";
$cad_twitter = "";
$cad_facebook = "";
$cad_linkedin = "";
$cad_youtube = "";
$cad_senha = "";
$cad_foto = "";
$cad_imgfundo = "";

include_once "conexao.php";

$sqlBusca = "SELECT * FROM CADASTRO WHERE CAD_ID = $cad_id";

$visualizarTodos = mysqli_query($conexao, $sqlBusca);

while($vizualizarDados = mysqli_fetch_assoc($visualizarTodos)){
    $cad_nome = $vizualizarDados['cad_nome'];
    $cad_email = $vizualizarDados['cad_email'];
    $cad_profissao = $vizualizarDados['cad_profissao'];
    $cad_descricao = $vizualizarDados['cad_descricao'];
    $cad_instagram = $vizualizarDados['cad_instagram'];
    $cad_twitter = $vizualizarDados['cad_twitter'];
    $cad_cad_facebook = $vizualizarDados['cad_facebook'];
    $cad_linkedin = $vizualizarDados['cad_linkedin'];
    $cad_youtube = $vizualizarDados['cad_youtube'];
    $cad_senha = $vizualizarDados['cad_senha'];
    $cad_foto = $vizualizarDados['cad_foto'];
    $cad_imgfundo = $vizualizarDados['cad_imgfundo'];
    }
?>

<!-- rever estes dados se esta correto a consulta ------FIM --------> 

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="justify-content-center">
                    <h1 class="title">Visualização Dados</h1>
                    <hr>
                    <?php include_once "mensagemInvalido.php";?>
                    <?php include_once "mensagemCadastrado.php";?>
                    <?php include_once "mensagemCadExcluido.php";?>
                    
                    <div class="card">
                        <div class="card-body p-5">
                            <ul class="list-group mb-0">
                            
                            <!-- rever estes dados se esta correto a consulta--INICIO------>
                            <input type="hidden" name="cad_id" value="<?php echo $cad_id;?>">
                            <!-- rever estes dados se esta correto a consulta--FIM--------->
                            
                            <!-- Funcionou<?php 
                            include "conexao.php";
                            $sqlVisualizacao = "SELECT * FROM cadastro";
                            $todasVisualizacao = mysqli_query($conexao, $sqlVisualizacao);
                            while($Visualizacao = mysqli_fetch_assoc($todasVisualizacao)){
                                ?>-->


                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-group mb-3">
                                            <label class="label">Nome</label>
                                            <input class="form-control" value="<?php echo $cad_id;?>">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group mb-3">
                                            <label class="label">Nome</label>
                                            <input class="form-control" value="<?php echo $cad_nome; ?>">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group mb-3">
                                            <label class="label">Foto</label>
                                            <img src="<?php echo $cad_foto; ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6" class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label class="label">E-mail</label>
                                            <input class="form-control" value="<?php echo $cad_email; ?>">
                                        </div>
                                    </div>
                                    <div class="col-6" class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label class="label">Profissão</label>
                                            <input class="form-control" value="<?php echo $cad_profissao; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="label">Descrição</label>
                                            <textarea class="form-control" value="<?php echo $cad_descricao; ?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4" class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label class="label">Instagram</label>
                                            <input class="form-control" value="<?php echo $cad_instagram; ?>">
                                        </div>
                                    </div>
                                    <div class="col-4" class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label class="label">Twitter</label>
                                            <input class="form-control" value="<?php echo $cad_twitter; ?>">
                                        </div>
                                    </div>
                                    <div class="col-4" class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label class="label">Facebook</label>
                                            <input class="form-control" value="<?php echo $cad_facebook; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6" class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label class="label">Linkedin</label>
                                            <input class="form-control" value="<?php echo $cad_linkedin; ?>">
                                        </div>
                                    </div>
                                    <div class="col-6" class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label class="label">YouTube</label>
                                            <input class="form-control" value="<?php echo $cad_youtube; ?>">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <img src="<?php echo $cad_imgfundo; ?>" class="form-control">
                                    </div>
                                </div>
                                <hr>

                                <?php
                                
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