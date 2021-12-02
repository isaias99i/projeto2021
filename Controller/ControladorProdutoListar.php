<?php
require "Model/Produto.php";
require_once "IControlador.php";
class ControladorProdutoListar implements IControlador{
    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }
    
    public function processaRequisicao(){
        $listaProduto = $this->produto->listarTodos();
        require "View/ListarProduto.php";
    }
}
    
    
?>