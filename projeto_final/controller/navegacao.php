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
    } else if (isset($_POST['btnCadNRealizado'])) {
        include_once "../view/primeiroacesso.php";
    } else if (isset($_POST["btnAtualizar"])) {
        require_once '../controller/UsuarioController.php';
        $uController = new UsuarioController();
        if ($uController->atualizar($_POST["txtID"], $_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"], date("Y-m-d", strtotime($_POST['txtDataNascimento'])))) {
            include_once '../view/atualizacaoRealizada.php';
        } else {
            include_once '../view/operacaoNaoRealizada.php';
        }
    } else if (isset($_POST["btnLogin"])) {
        require_once '../controller/UsuarioController.php';
        $uController = new UsuarioController();
        if ($uController->login($_POST['txtLogin'], $_POST['txtSenha'])) {
            include_once '../view/principal.php';
        } else {
            include_once '../view/cadastroNaoRealizado.php';
        }
    } else if (isset($_POST["btnAddFormacao"])) {
        require_once '../Controller/FormacaoAcadController.php';
        include_once '../Model/Usuario.php';
        $fController = new FormacaoAcadController();
        if ($fController->inserir(date('Y-m-d', strtotime($_POST['txtInicioFA'])), date('Y-m-d', strtotime($_POST["txtFimFA"])), $_POST["txtDescFA"], unserialize($_SESSION['usuario'])->getID()) != false) {
            include_once '../View/informacaoInserida.php';
        } else {
            include_once '../View/operacaoNaoRealizada.php';
        }
    } else if (isset($_POST["btnExcluirFA"])) {
        require_once '../Controller/FormacaoAcadController.php';
        include_once '../Model/Usuario.php';
        $fController = new FormacaoAcadController();
        if ($fController->remover($_POST['id']) == true) {
            include_once '../View/informacaoExcluida.php';
        } else {
            include_once '../View/operacaoNaoRealizda.php';
        }
    } else  if (isset($_POST["btnPrincipal"]) || isset($_POST["btnAtualizacaoCadastro"]) || isset($_POST["btnCadRealizado"]) || isset($_POST["btnInfInserir"]) || isset($_POST["btnInfExcluir"])) {
        include_once '../view/principal.php';
    } else if (isset($_POST["btnAddEP"])) {
        require_once '../Controller/ExperienciaProfissionalController.php';
        include_once '../Model/Usuario.php';
        $epController = new ExperienciaProfissionalController();
        if ($epController->inserir(date('Y-m-d', strtotime($_POST['txtInicioEP'])), date('Y-m-d', strtotime($_POST["txtFimEP"])), $_POST["txtEmpEP"], $_POST["txtDescEP"], unserialize($_SESSION['usuario'])->getID()) != false) {
            include_once '../View/informacaoInserida.php';
        } else {
            include_once '../View/operacaoNRealizada.php';
        }
    } else if (isset($_POST["btnExcluirEP"])) {
        require_once '../Controller/ExperienciaProfissionalController.php';
        include_once '../Model/Usuario.php';
        $epController = new ExperienciaProfissionalController();
        if ($epController->remover($_POST['idEP']) == true) {
            include_once '../View/informacaoExcluida.php';
        } else {
            include_once '../View/operacaoNRealizada.php';
        }
     } else if (isset($_POST["btnAddOF"])) {
        require_once '../controller/OutrasFormacoesController.php';
        include_once '../Model/Usuario.php';
        $epController = new outraformacaoController();
        if ($epController->inserir(date('Y-m-d', strtotime($_POST['txtInicioOF'])), date('Y-m-d', strtotime($_POST["txtFimOF"])),$_POST["txtDescOF"], unserialize($_SESSION['usuario'])->getID()) != false) {
            include_once '../View/informacaoInserida.php';
        } else {
            include_once '../View/operacaoNRealizada.php';
        }
    } else if (isset($_POST["btnExcluirOF"])) {
        require_once '../Controller/ExperienciaProfissionalController.php';
        include_once '../Model/Usuario.php';
        $epController = new ExperienciaProfissionalController();
        if ($epController->remover($_POST['idOF']) == true) {
            include_once '../View/informacaoExcluida.php';
        } else {
            include_once '../View/operacaoNRealizada.php';
        }
    }else {
        include_once "view/login.php";
    }
}


if (!isset($_SESSION)) {
    session_start();
}
