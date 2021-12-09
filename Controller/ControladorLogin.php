<?php
require "Model/Usuario.php";
require_once "IControlador.php";
class ControladorLogin implements IControlador{
    private $usuario;

    public function __construct(){
        $this->usuario = new Usuario();
    }
    
    public function processaRequisicao(){
        $listaUsuario = $this->usuario->logarUsuario();
        require "View/Principal.php";
    }
}
    
    
?>