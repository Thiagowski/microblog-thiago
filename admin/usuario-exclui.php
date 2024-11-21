<?php
require "../includes/funcoes-controle-de-acesso.php";
verificarAcesso();

require "../includes/funcoes-usuarios.php";

// Capturando o id passado via URL
$id = $_GET['id'];

// Excluindo o usuário
excluirUsuario($conexao, $id);

// Redirecionando para a página com a listagem de usuários
header("location: usuarios.php");
?>
