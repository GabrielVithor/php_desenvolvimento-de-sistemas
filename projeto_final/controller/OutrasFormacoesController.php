<?php
if (!isset($_SESSION)) {
    session_start();
}

class outraformacaoController
{
    public function inserir($inicio, $fim, $descricao, $idusuario)
    {
        require_once '../Model/outraformacao.php';
        $formacao = new outraformacao();
        $formacao->setInicio($inicio);
        $formacao->setFim($fim);
        $formacao->setDescricao($descricao);
        $formacao->setIdUsuario($idusuario);
        $r = $formacao->inserirDB();
        return $r;
    }

    public function remover($id) { 
        require_once '../Model/outraformacao.php'; 
        $formacao = new outraformacao(); 
        $r = $formacao->excluirDb($id); 
        return $r; 
    }

    public function gerarLista($idusuario){
        require_once '../Model/outraformacao.php';
        $formacao = new outraformacao(); 
         return $results = $formacao->listaFormacoes($idusuario);
        }
    
}
