<?php include_once "header.php";?>
<?php include_once "conexao.php";?>

<?php 
$id = $_GET['cad_id'];
$nome = "";
$email = "";
$profissao = "";
$descricao = "";
$instagram = "";
$twitter = "";
$facebook = "";
$linkedin = "";
$youtube = "";
$senha = "";
$foto = "";
$imgfundo = "";

include_once "conexao.php";

$sqlBusca = "SELECT * FROM CADASTRO WHERE CAD_ID = $id";

$todosCadastros = mysqli_query($conexao, $sqlBusca);

while($alteraDados = mysqli_fetch_assoc($todosCadastros)){
    $nome = $alteraDados['cad_nome'];
    $email = $alteraDados['cad_email'];
    $profissao = $alteraDados['cad_profissao'];
    $descricao = $alteraDados['cad_descricao'];
    $instagram = $alteraDados['cad_instagram'];
    $twitter = $alteraDados['cad_twitter'];
    $facebook = $alteraDados['cad_facebook'];
    $linkedin = $alteraDados['cad_linkedin'];
    $youtube = $alteraDados['cad_youtube'];
    $senha = $alteraDados['cad_senha'];
    $foto = $alteraDados['cad_foto'];
    $imgfundo = $alteraDados['cad_imgfundo'];
    }

    echo "$id - $nome - $email - $profissao - $descricao";
?>

<body>
    <main class="conteiner">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <form action="perfil-alterar-confirmar.php" method="post">
                    <h1 class="title">Alterar Cadastro</h1>
                    <hr>
                    <input type="hidden" name="cad_id" value="<?php echo $id;?>">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label class="label">Nome</label>
                                <input placeholder="Nome" name="cad_nome" class="form-control" value="<?php echo $nome;?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">E-mail</label>
                                <input placeholder="E-mail" type="email" name="cad_email" class="form-control" value="<?php echo $email;?>" required>
                            </div>
                        </div>
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Profissão</label>
                                <input placeholder="Profissão" name="cad_profissao" class="form-control" value="<?php echo $profissao;?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label class="label">Descrição</label>
                                <textarea placeholder="Descrição" name="cad_descricao" class="form-control" rows="5" required><?php echo $descricao?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Instagram</label>
                                <input placeholder="Instagram" name="cad_instagram" class="form-control" value="<?php echo $instagram;?>" >
                            </div>
                        </div>
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Twitter</label>
                                <input placeholder="Twitter" name="cad_twitter" class="form-control" value="<?php echo $twitter;?>" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Facebook</label>
                                <input placeholder="Facebook" name="cad_facebook" class="form-control" value="<?php echo $facebook;?>" >
                            </div>
                        </div>
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Linkedin</label>
                                <input placeholder="Linkedin" name="cad_linkedin" class="form-control" value="<?php echo $linkedin;?>" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">YouTube</label>
                                <input placeholder="YouTube" name="cad_youtube" class="form-control" value="<?php echo $youtube;?>" >
                            </div>
                        </div>
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Senha</label>
                                <input placeholder="Senha" name="cad_senha" type="password" class="form-control" value="<?php echo $senha;?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Foto</label>
                                <input placeholder="Foto" name="cad_foto" class="form-control" value="<?php echo $foto;?>" >
                            </div>
                        </div>
                        <div class="col-6" class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label class="label">Imagem de Fundo</label>
                                <input placeholder="Imagem de Fundo" name="cad_imgfundo" class="form-control" value="<?php echo $imgfundo;?>" >
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4" class="form-group mb-3" class="botao">
                            <button type="submit" class="btn btn-dark ms-2"><i class="bi bi-person-x-fill"></i> Alterar</button>
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