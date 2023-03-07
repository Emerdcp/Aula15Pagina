<?php 
include_once "sessao-login.php";
include_once "header.php";
?>

<div class="menu container-fluid">
    <?php include_once "menu.php";?>
</div>

<main class="container">
<body>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <form action="perfil-novo-inserir.php" method="post" enctype="multipart/form-data">
                    <h1 class="title">Cadastro</h1>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group mb-3">
                                <label class="label">Nome</label>
                                <input placeholder="Nome" name="cad_nome" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Senha</label>
                                <input placeholder="Senha" name="cad_senha" type="password" class="form-control" required>
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
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Profissão</label>
                                <input placeholder="Profissão" name="cad_profissao" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label class="label">Descrição</label>
                                <textarea placeholder="Descrição" name="cad_descricao" class="form-control" rows="2" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Instagram</label>
                                <input placeholder="Instagram" name="cad_instagram" class="form-control">
                            </div>
                        </div>
                        <div class="col-4" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Twitter</label>
                                <input placeholder="Twitter" name="cad_twitter" class="form-control">
                            </div>
                        </div>
                        <div class="col-4" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Facebook</label>
                                <input placeholder="Facebook" name="cad_facebook" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Linkedin</label>
                                <input placeholder="Linkedin" name="cad_linkedin" class="form-control">
                            </div>
                        </div>
                        <div class="col-4" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">YouTube</label>
                                <input placeholder="YouTube" name="cad_youtube" class="form-control">
                            </div>
                        </div>
                        <div class="col-4" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Selecione sua Foto</label>
                                <input type="file" name="cad_foto" class="form-control">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-1">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cad_imgfundo" id="fundo1"
                                value="imagens/fundo1.jpg">
                                <label class="form-chesl-label" for="fundo1">
                                    Imagem de Fundo 01
                                    <img src="imagens/fundo1.jpg" class="img-fluid">
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cad_imgfundo" id="fundo2"
                                value="imagens/fundo1.jpg">
                                <label class="form-chesl-label" for="fundo2">
                                    Imagem de Fundo 02
                                    <img src="imagens/fundo2.jpg" class="img-fluid">
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cad_imgfundo" id="fundo3"
                                value="imagens/fundo3.jpg">
                                <label class="form-chesl-label" for="fundo3">
                                    Imagem de Fundo 03
                                    <img src="imagens/fundo3.jpg" class="img-fluid">
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12" class="form-group mb-3" class="botao">
                            <button type="submit" class="btn btn-dark ms-2"><i class="bi bi-person-x-fill"></i> Cadastrar</button>
                            <button type="reset" class="btn btn-dark ms-2"><i class="bi bi-person-x-fill"></i> Cancelar</button> 
                        </div>                       
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
<?php include_once "footer.php";?>