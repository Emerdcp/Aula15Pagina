<?php 

$pasta = "img/";
//Montar o novo nome do Arquivo!!!
$nomeDoArquivo = $_FILES["arquivo"]["name"];     //pwega o nome antigo
//echo "<pre>";//ajuda a melhorar a visualização
//print_r(($_FILES["arquivo"]));//Print_r usado para debugar

$extensao = explode(".",$nomeDoArquivo);     //Quebra o nome antigo em array para poder epgar a extensão...  explode usa um arrey para duas posição, para pegar a extensão, separação por .
$nomeNovo = round(microtime(true)) . "." . end($extensao); //pega um número MICROTIME, e arrendoda (ROUND) e conctena com o último valor do array aonde está a extensão
//Montar o novo nome do Arquivo!!!

//echo "<pre>";
//print_r(end($extensao));
//echo round(microtime(true));                  // Função microtime grava da e hora, para não repetir o nome do arquivo.
//exit();

move_uploaded_file($_FILES["arquivo"]["tmp_name"],$pasta . $nomeNovo);


?>
<!-- retorno da imagem
<img src="<?php echo $pasta . $nomeDoArquivo; ?>">
-->