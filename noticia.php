<?php
require "includes/cabecalho.php"; 
require "includes/funcoes-noticias.php";

// Capturando o id da notícia via url
$idNoticia = $_GET['id'];

// Carregando os dados da noticia usando o ID
$dadosDaNoticia = lerNoticiaCompleta($conexao, $idNoticia);

var_dump($dadosDaNoticia);

?>


<div class="row my-1 mx-md-n1">

    <article class="col-12">
        <h2> Título da notícia... </h2>
        <p class="font-weight-light">
            <time>Data da notícia...</time> - <span>Autor da notícia</span>
        </p>
        <img src="imagens/abstrato.jpg" alt="" class="float-start pe-2 img-fluid">
        <p>Texto da notícia...</p>
    </article>
    

</div>        

<?php 
require "includes/rodape.php";
?>

