<?php
if(!isset($_SESSION)){
    session_start();
}
class UsuarioController{
    public function inserir($nome,$cpf,$email,$senha){
        require_once "../model/usuario.php";

        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setCPF($cpf);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        //return $usario->getNome();

        $r= $usuario->inserirDB();
        $_SESSION['usuario'] = serialize($usuario);
        return $r;
    }
    public function atualizar($id, $nome, $cpf, $email, $dataNascimento) { 
        require_once '../Model/Usuario.php'; 
        $usuario = new Usuario(); 
        $usuario->setId($id); 
        $usuario->setNome($nome); 
        $usuario->setCPF($cpf); 
        $usuario->setEmail($email); 
        $usuario->setDataNascimento($dataNascimento);
        $r = $usuario->atualizarDB(); 
        $_SESSION['usuario'] = serialize($usuario); 
        return $r;
    }

    public function login($cpf, $senha) {
        require_once '../Model/Usuario.php'; 
        $usuario = new Usuario(); 
        $usuario->carregarUsuario($cpf); 
        if($usuario->getSenha() == $senha) { 
            $_SESSION['usuario'] = serialize($usuario); 
            return true; 
        }
         else { return false; } 
        }
}
?>