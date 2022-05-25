<?php

if (isset($_POST["btnPrimeiroAcesso"])) {
    include_once "../view/primeiroacesso.php";
} else {

    if (isset($_POST['btnCadastrar'])) {
        require_once "../controller/usuarioController.php";
        $uController = new UsuarioController;
        if ($uController->inserir($_POST['txtNome'], $_POST['txtCPF'], $_POST['txtEmail'], $_POST['txtSenha'])) {
            include_once "../view/cadastroRealizado.php";
        } else {
            include_once "../view/cadastroNaoRealizado.php";
        }
    } else if (isset($_POST['btnCadRealizado'])) {
        include_once "../view/principal.php";
    } else if (isset($_POST['btnCadNRealizado'])) {
        include_once "../view/primeiroacesso.php";
    } else if (isset($_POST["btnAtualizar"])) {
        require_once '../controller/UsuarioController.php';
        $uController = new UsuarioController();
        if ($uController->atualizar($_POST["txtID"], $_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"], date("Y-m-d",strtotime($_POST['txtDataNascimento'])))) {
            include_once '../view/atualizacaoRealizada.php';
        } else {
            include_once '../view/operacaoNaoRealizada.php';
        }
    } else  if (isset($_POST["btnAtualizacaoCadastro"]) || isset($_POST["btnOperacaoNRealizada"])) {
        include_once '../view/principal.php';
    } else 
    if (isset($_POST["btnLogin"])) 
    {
        require_once '../controller/UsuarioController.php';
        $uController = new UsuarioController();
        if ($uController->login($_POST['txtLogin'], $_POST['txtSenha'])) {
            include_once '../view/principal.php';
        } else {
            include_once '../view/cadastroNaoRealizado.php';
        }
    } 
    else 
    {
        include_once "view/login.php";
    }
}


if (!isset($_SESSION)) {
    session_start();
}
