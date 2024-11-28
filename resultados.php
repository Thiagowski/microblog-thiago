<?php
require "includes/cabecalho.php";
require "includes/funcoes-noticias.php";

// Capturando via url o termo digitado no campo de busca
$termoDigitado = $_GET['busca'];


$dadosDaBusca = buscar($conexao, $termoDigitado);

?>

<div class="row bg-white rounded shadow my-1 py-4">
    
<h2 class="col-12 fw-light">
        Você procurou por <span class="badge bg-dark"><?=$termoDigitado?></span> e
        obteve <span class="badge bg-info">X</span> resultados
    </h2>

    <div class="col-12 my-1">
        <?php foreach ($dadosDaBusca as $noticia) { ?>
        <article class="card">
            <div class="card-body">
                <h3 class="fs-4 card-title fw-light"><?=$noticia['titulo'] ?></h3>
                <p class="card-text">
                    <time><?=formataData($noticia['data']) ?> </time> -
                    Resumo da notícia.
                </p>

                <a href="noticia.php" class="btn btn-primary btn-sm"> </a>
            </div>
        </article>
    <?php } ?>

    </div>

</div>

<?php
require "includes/rodape.php";
?>