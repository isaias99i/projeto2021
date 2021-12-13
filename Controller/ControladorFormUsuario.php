<?php
require "Model/Usuario.php";
require_once "IControlador.php";
class ControladorFormUsuario implements IControlador{
    
    public function processaRequisicao(){
        require "View/CadUsuario.php";
    }
}
    
    
?>