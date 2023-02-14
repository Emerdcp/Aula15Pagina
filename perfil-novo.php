<?php include 'header.php'?>
<?php include 'conexao.php'?>

<body>
    <main class="conteiner">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <form>
                    <h1 class="title">Cadastro</h1>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label class="label">Nome</label>
                                <input placeholder="Nome" name="nome" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">E-mail</label>
                                <input placeholder="E-mail" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Profissão</label>
                                <input placeholder="Profissão" name="profissao" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label class="label">Descrição</label>
                                <textarea placeholder="Descrição" name="descricao" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Instagram</label>
                                <input placeholder="Instagram" name="instagram" class="form-control">
                            </div>
                        </div>
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Twitter</label>
                                <input placeholder="Twitter" name="twitter" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Facebook</label>
                                <input placeholder="Facebook" name="facebook" class="form-control">
                            </div>
                        </div>
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Linkedin</label>
                                <input placeholder="Linkedin" name="linkedin" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">YouTube</label>
                                <input placeholder="YouTube" name="youtube" class="form-control">
                            </div>
                        </div>
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Senha</label>
                                <input placeholder="Senha" name="Senha" type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4" class="form-group mb-3" class="botao">
                            <button type="submit" class="btn btn-dark ms-2">Cadastrar</button>
                            <button type="reset" class="btn btn-dark ms-2">Cancelar</button> 
                        </div>                       
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
<?php include_once "footer.php";?>