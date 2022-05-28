<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ca5c96c2d2.js" crossorigin="anonymous" defer></script>
    <title>Home</title>
    <style>
        .w3-sidebar {
            width: 120px;
        }

        * {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>

<body class="w3-light-grey">
    <?php
        include_once "../model/usuario.php";
        if(!isset($_SESSION)){
            session_start();
        }
    ?>
    <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
        <a href="#main" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey h3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-home w3-xlarge"></i>
            <p>Home</p>
        </a>
        <a href="#dPessoais" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey h3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-address-book-o w3-xlarge"></i>
            <p>Dados Pessoais</p>
        </a>
        <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey h3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xlarge"></i>
            <p>Formação Acadêmica</p>
        </a>
        <a href="#experienciaprofissional" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey h3-hover-text-cyan w3-text-light-grey">
            <i class="fas fa-user-tie w3-xlarge"></i>
            <p>Experiencia Profissional</p>
        </a>
        <a href="#outraformacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey h3-hover-text-cyan w3-text-light-grey">
            <i class="fas fa-book-open w3-xlarge"></i>
            <p>Outras Formações</p>
        </a>
    </nav>

    <div class="w3-padding-large" id="main">

    </div>

    <header class="w3-container w3-padding-32 w3-center">
        <h1>
            <img src="../img/nodata.png" alt="Logo" class="w3-image" width="20%"><br>
        </h1>
        <a class="w3-text-cyan" href="https://undraw.co/search">Designed by undrawn</a>
        <h1 class="w3-text-cyan">SISTEMAS DE CURRICULOS</h1>
    </header>

    <div class="w3-padding-64 w3-content w3-text-grey" id="dPessoais" style="width:30%;min-width:450px;">
        <h2 class="w3-text-cyan">Dados Pessoais</h2>

        <form action="../controller/navegacao.php" method="post" class="w3-container  w3-light-grey w3-text-blue w3-padding">
        <input type="hidden" name="txtID" value="<?php echo unserialize($_SESSION['usuario'])->getID();?>">    
        <div class="w3-row w3-section">
                <div class="w3-col" style="width: 11%;"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest">
                    <input type="text" name="txtNome" id="" class="w3-input w3-border w3-round-large" placeholder="Nome Completo" value="<?php echo unserialize($_SESSION['usuario'])->getNome()?>">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width: 11%;"><i class="w3-xxlarge far fa-calendar-alt"></i></div>
                <div class="w3-rest">
                    <input type="date" name="txtDataNascimento" id="" class="w3-input w3-border w3-round-large" placeholder="dd/mm/aaaa" value="<?php echo unserialize($_SESSION['usuario'])->getDataNascimento();?>">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width: 11%;"><i class="w3-xxlarge fa fa-drivers-license"></i></div>
                <div class="w3-rest">
                    <input type="text" name="txtCPF" id="" class="w3-input w3-border w3-round-large" placeholder="Login CPF (ex.: 99999999999)"  value="<?php echo unserialize($_SESSION['usuario'])->getCPF()?>">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width: 11%;"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                <div class="w3-rest">
                    <input type="email" name="txtEmail" id="" class="w3-input w3-border w3-round-large" placeholder="Email : example@email.com" value="<?php echo unserialize($_SESSION['usuario'])->getEmail()?>">
                </div>
            </div>
            <div class="w3-row w3-section">
                <button name="btnAtualizar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width:90% ;">Atualizar</button>
            </div>
        </form>
    </div>

    <div class="w3-padding-64 w3-content w3-text-grey" id="formacao" style="width:70%">
        <h2 class="w3-text-cyan">Formação Acadêmica</h2>

        <form action="../controller/navegacao.php" method="post" class="w3-row w3-padding w3-light-grey w3-text-blue w3-margin">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%">
                    Data Inicial
                </div>
                <div class="w3-rest">
                    Data Final
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-row w3-section w3-col" style="width: 45%;">
                        <div class="w3-col" style="width:15%">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="date" class="w3-input w3-border w3-round-large" name="txtInicioFA">
                        </div>
                    </div>
                    <div class="w3-row w3-section w3-rest">
                        <div class="w3-col w3-margin-left" style="width:15%">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="date" class="w3-input w3-border w3-round-large" name="txtFimFA">
                        </div>
                    </div>
                </div>
                <div class="w3-section w3-row">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" class="w3-input w3-border w3-round-large" name="txtDescFA" placeholder="Descrição: Ex.:Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                    </div>
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-center">
                    <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width:20%;">
                        <i class="w3-xxlarge fa - fa-user-plus"></i>
                    </button>
                </div>
            </div>
        </form>

        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Inicio</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                </thead>

                <?php
                include_once '../Controller/FormacaoAcadController.php';
                $fCon = new FormacaoAcadController(); 
                $results = $fCon->gerarLista(unserialize($_SESSION['usuario'])->getID());
                if($results != null)
                while($row = $results->fetch_object()) {
                    echo '<tr>';
                    echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                     echo '<td style="width: 10%;">'.$row->fim.'</td>';
                     echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                     echo '<td style="width: 5%;"><form action="../Controller/Navegacao.php" method="post"><input type="hidden" name="id" value="'.$row->idformacaoAcademica.'"><button name="btnExcluirFA" class="w3-button w3-block w3-blue w3-cell w3-round-large"> <i class="fa fa-user-times"></i> </button></td></form>'; 
                     echo '</tr>';
                    }
                ?>
            </table>
        </div>
    </div>

    <div class="w3-padding-64 w3-content w3-text-grey" id="experienciaprofissional" style="width:70%">
        <h2 class="w3-text-cyan">Experiencia Profissional</h2>

        <form action="" method="post" class="w3-row w3-padding w3-light-grey w3-text-blue w3-margin">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%">
                    Data Inicial
                </div>
                <div class="w3-rest">
                    Data Final
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-row w3-section w3-col" style="width: 45%;">
                        <div class="w3-col" style="width:15%">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="date" class="w3-input w3-border w3-round-large" name="txtInicioEP">
                        </div>
                    </div>
                    <div class="w3-row w3-section w3-rest">
                        <div class="w3-col w3-margin-left" style="width:15%">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="date" class="w3-input w3-border w3-round-large" name="txtFimEP">
                        </div>
                    </div>
                </div>
                <div class="w3-section w3-row">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" class="w3-input w3-border w3-round-large" name="txtEmpEP" placeholder="Descrição: Ex.:Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                    </div>
                </div>
                <div class="w3-section w3-row">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" class="w3-input w3-border w3-round-large" name="txtDescEP" placeholder="Descrição: Ex.:Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                    </div>
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-center">
                    <button name="btnAddEP" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width:20%;">
                        <i class="w3-xxlarge fa - fa-user-plus"></i>
                    </button>
                </div>
            </div>
        </form>

        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Inicio</th>
                        <th>Fim</th>
                        <th>Empresa</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                </thead>

                <?php
                include_once "../controller/ExperienciaProfissionalController.php";

              $ePro = new ExperienciaProfissionalController();
               $results = $ePro->gerarLista(unserialize($_SESSION['usuario'])->getID());
                if($results != null) while($row = $results->fetch_object()) { echo '<tr>'; 
                    echo '<td style="width: 10%;">'.$row->inicio.'</td>'; 
                    echo '<td style="width: 10%;">'.$row->fim.'</td>'; 
                    echo '<td style="width: 10%;">'.$row->empresa.'</td>'; 
                    echo '<td style="width: 65%;">'.$row->descricao.'</td>'; 
                    echo '<td style="width: 5%;"> <form action="../Controller/Navegacao.php" method="post"><input type="hidden" name="idEP" value="'.$row->idexperienciaprofissional.'"> <button name="btnExcluirEP" class="w3-button w3-block w3-blue w3-cell w3-round-large"> <i class="fa fa-user-times"></i> </button></td> </form>'; 
                    echo '</tr>'; }
                ?>
            </table>
        </div>
    </div>

    <div class="w3-padding-64 w3-content w3-text-grey" id="outraformacao" style="width:70%">
        <h2 class="w3-text-cyan">Outras Formações</h2>

        <form action="../Controller/Navegacao.php" method="post" class="w3-row w3-padding w3-light-grey w3-text-blue w3-margin">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%">
                    Data Inicial
                </div>
                <div class="w3-rest">
                    Data Final
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-row w3-section w3-col" style="width: 45%;">
                        <div class="w3-col" style="width:15%">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="date" class="w3-input w3-border w3-round-large" name="txtInicioOF">
                        </div>
                    </div>
                    <div class="w3-row w3-section w3-rest">
                        <div class="w3-col w3-margin-left" style="width:15%">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="date" class="w3-input w3-border w3-round-large" name="txtFimOF">
                        </div>
                    </div>
                </div>
                <div class="w3-section w3-row">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" class="w3-input w3-border w3-round-large" name="txtDescOF" placeholder="Descrição: Ex.:Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                    </div>
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-center">
                    <button name="btnAddOF" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width:20%;">
                        <i class="w3-xxlarge fa - fa-user-plus"></i>
                    </button>
                </div>
            </div>
        </form>

        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Inicio</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                </thead>

                <?php
               include_once '../Controller/OutrasFormacoesController.php';
               $fCon = new outraformacaoController(); 
               $results = $fCon->gerarLista(unserialize($_SESSION['usuario'])->getID());
               if($results != null)
               while($row = $results->fetch_object()) {
                   echo '<tr>';
                   echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                    echo '<td style="width: 10%;">'.$row->fim.'</td>';
                    echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                    echo '<td style="width: 5%;"><form action="../Controller/Navegacao.php" method="post"><input type="hidden" name="id" value="'.$row->idoutraformacao.'"><button name="btnExcluirOF" class="w3-button w3-block w3-blue w3-cell w3-round-large"> <i class="fa fa-user-times"></i> </button></td></form>'; 
                    echo '</tr>';
                   }
                ?>
            </table>
        </div>
    </div>

</body>

</html>