<?php

/*Sessões (Sessions) no PHP
Funcionalidade usada para o controle de acesso à determinadas páginas e/ou recursos do site.

Exemplos: área adminstrativa, painel de controle, área de cliente/aluno etc.

Nestas áreas o acesso se dá através de alguma forma de autenticação. Exemplos: login/senha, biometria, facial, 2-fatores etc. */




/* Verificando se NÃO EXISTE uma sessão em andamento */
if (!isset($_SESSION)) {
    // Se não tiver, então iniciamos uma sessão
    session_start();
}

// Proteger o acesso às páginas da área admnistrativa
function verificarAcesso()
{

    // Se NÃO EXISTIR uma variavel de sessão chamada "id", então significa que o usuario não está logado
    if (!isset($_SESSION['id'])) {

        // portanto, destruimos qualquer resquicio de sessão
        session_destroy();

        //fazemos o usuario ir para a pagina de login.php

        header("location:../login.php?acesso_negado");
        die();
    }
}

// Função que será usada pelo formulario login.php
function login($id, $nome, $tipo)
{
    // criando variaveis de sessão
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['tipo'] = $tipo;
}

// Função que será usada quando clicar no link Sair
function logout()
{
    session_destroy();
    header("location:../login.php?saiu");
    die();
}
// verificar o nivel/privilegio de acesso do usuario
function verificarNivel(){
    // Se o tipo de usuario logado for DIFERENTE de admin
    if ($_SESSION['tipo'] !== 'admin') {
        // Então, redirecione para a pagina nao-autorizado.php
        header("location:nao-autorizado.php");
        die();
    }
}
