<?php
require "Model/Usuario.php";
require_once "IControlador.php";
class ControladorTelaAluno implements IControlador{
    private $usuario;

    public function __construct(){
        $this->usuario = new Usuario();
    }
    
    public function processaRequisicao(){
        $listaUsuario = $this->usuario->listarTodos();
        require "View/TelaAluno.php";
    }
}
    
    
?>