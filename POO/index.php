<?php
    include 'paciente.php';

    $paciente = new Paciente;
    $paciente->setNome("Pacient 1");
    $paciente->setRg("99.999.999.99");
    $paciente->setCpf("000.000.000-0");
    $paciente->setEndereco("Random Street nºX");
    $paciente->setProfissao("Student");

    echo "Nome: ".$paciente->getNome();
    echo "<hr>";
    echo "Rg: ".$paciente->getRg();
    echo "<hr>";
    echo "Cpf: ".$paciente->getCpf();
    echo "<hr>";
    echo "Endereco: ".$paciente->getEndereco();
    echo "<hr>";
    echo "Profissao: ".$paciente->getProfissao();
    echo "<hr>";
?>