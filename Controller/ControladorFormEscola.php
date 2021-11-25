<?php
require "Model/Escola.php";
require_once "IControlador.php";
class ControladorFormEscola implements IControlador{
    
    public function processaRequisicao(){
        require "View/CadEscola.php";
    }
}
    
    
?>