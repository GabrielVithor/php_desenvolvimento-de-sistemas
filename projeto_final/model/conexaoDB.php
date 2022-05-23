<?php
//CONEXAO BANCO DE DADOS
class ConexaoDb
{
    private $serverName = "localhost";
    private $userName = "php";
    private $password = "";
    private $dbName = "projeto_final";

    public function conectar()
    {
        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
        return $conn;
    }
}

?>