<?php

require_once "IControlador.php";
require_once "Model/Produto.php";

class ControladorFormProdutoAlterar implements IControlador{
    private $produto;
    public function __construct(){
        $this->produto = new Produto();
    }
    public function processaRequisicao(){
        $this->produto->setCodigoProduto($_POST['id']);
        //$this->produto->pesquisaProduto();
        $codigoProduto = $this->produto->getCodigoProduto();
        $nomeProduto = $this->produto->getNomeProduto();
        $tipoProduto = $this->produto->getTipoProduto();
        $ingredientes = $this->produto->getIngredientes();
        $fornecedor = $this->produto->getFornecedor();
        $foto = $this->produto->getFoto();
        $preco = $this->produto->getPreco();
        $codigoFornecedor = $this->produto->getCodigoFornecedor();
        $codigoEscola = $this->produto->setCodigoEscola();
        //$codigoResponsavel = $this->produto->getCodigoResponsavel();
        require "View/AlteraProduto.php";
    }
}


?>