<?php
require "Model/Escola.php";
require_once "IControlador.php";
class ControladorFormAluno implements IControlador{
    
    public function processaRequisicao(){
        require "View/CadAluno.php";
    }
}
    
    
?>