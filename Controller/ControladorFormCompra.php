<?php

require_once "IControlador.php";
require_once "Model/Produto.php";

class ControladorFormCompra implements IControlador{
    private $produto;
    public function __construct(){
        $this->produto = new Produto();
    }
    public function processaRequisicao(){

        $this->produto->setCodigoProduto($_POST['id']);
        $codigoProduto = $this->produto->getCodigoProduto();

        //$this->produto->setCodigoUsuario($_POST['codigoUsuario']);

        //$this->produto->setCodigoUsuario($_POST[]);
        // $this->produto->setNomeCompleto($_POST[]);
        // $this->produto->setSaldo($_POST[]);
        
        require "View/CompraProduto.php";
    }
}


?>