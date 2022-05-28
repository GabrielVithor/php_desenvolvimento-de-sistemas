<?php

class ExperienciaProfissional{

    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $empresa;
    private $descricao;

        //ID
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
    
         //IDUSURIO
         public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
        public function getIdUsurio(){
            return $this->idusuario;
        }
    
         //INICIO
         public function setInicio($inicio){
            $this->inicio = $inicio;
        }
        public function getInicio(){
            return $this->inicio;
        }
    
         //FIM
         public function setFim($fim){
            $this->fim = $fim;
        }
        public function getFim(){
            return $this->fim;
        }
    
        //DESCRICAO
        public function setEmpresa($empresa){
            $this->empresa = $empresa;
        }
        public function getEmpresa(){
            return $this->empresa;
        }

        //DESCRICAO
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function getDescricao(){
            return $this->descricao;
        }


        
    public function inserirDB(){
        require_once 'conexaoDB.php';

        $con = new ConexaoDb();
        $conn = $con->conectar();
        if($conn->connect_error){
            die('Connection failed: '.$conn->connect_error);
        }

        $sql = "INSERT INTO experienciaprofissional (idusuario,inicio,fim,empresa,descricao) VALUES ('$this->idusuario','$this->inicio','$this->fim','$this->empresa','$this->descricao')";

        if($conn->query($sql) === true){
            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return true;
        }else{
            $conn->close();
            return false;
        }
    }

    public function excluirDB($id){
        require_once 'conexaoDB.php';

        $con = new ConexaoDb();
        $conn = $con->conectar();
        if($conn->connect_error){
            die('Connection failed: '.$conn->connect_error);
        }

        $sql = "DELETE FROM experienciaprofissional WHERE idexperienciaprofissional = '$id'";

        if($conn->query($sql) === true){
            $conn->close();
            return true;
        }else{
            $conn->close();
            return false;
        }
    }

    public function listaExperiencias($idusuario){
        require_once 'conexaoDB.php';

        $con = new ConexaoDb();
        $conn = $con->conectar();
        if($conn->connect_error){
            die("Connectio failed: ".$conn->connect_error);
        }

        $sql = "SELECT * FROM experienciaprofissional WHERE idusuario=$idusuario";
        $re=$conn->query($sql);
        $conn->close();
        return $re;
    }

}


?>