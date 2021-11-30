<?php
require "Model/Produto.php";
require_once "IControlador.php";
class ControladorFormProduto implements IControlador{
    
    public function processaRequisicao(){
        require "View/CadProduto.php";
    }
}
    
    
?>