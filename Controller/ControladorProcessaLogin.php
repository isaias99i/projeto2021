<?php
require_once "IControlador.php";
require_once "Model/Usuario.php";

class ControladorProcessaLogin implements IControlador{
    private $usuario;
    public function __construct(){
        $this->usuario = new Usuario();
    }
    public function processaRequisicao(){
        
    }
}


?>