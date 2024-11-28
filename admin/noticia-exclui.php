<?php
require "../includes/funcoes-noticias.php";
require "../includes/funcoes-controle-de-acesso.php";

// Verificando se o usuario está logado
verificarAcesso();

// Capturando o id da notiia que será deletada
$idUmaNoticia = $_GET['id'];

// Capturando o id do usuario que está logado
$idUsuario = $_SESSION['id'];

// Capturando o tipo do usuario que está logado
$tipoUsuario = $_SESSION['tipo'];

// executando o delete da noticia no banco de dados
excluirNoticia($conexao, $idUmaNoticia, $idUsuario, $tipoUsuario);

// redirecionando para a pagina com a lista de noticias
header('location:noticias.php');
 
?>
 