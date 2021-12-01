<?php
require_once "IControlador.php";
require_once "Model/Produto.php";

class ControladorProdutoAlterar implements IControlador{
    private $produto;
    public function __construct(){
        $this->produto = new Produto();
    }
    public function processaRequisicao(){
        
        $this->produto->setCodigoProduto($_POST['codigoProduto']);
        $this->produto->setNomeProduto($_POST['nomeProduto']);
        $this->produto->setTipoProduto($_POST['tipoProduto']);
        $this->produto->setIngredientes($_POST['ingredientes']);
        $this->produto->setFornecedor($_POST['fornecedor']);
        $this->produto->setFoto($_FILES['foto']);
        $this->produto->setPreco($_POST['preco']);
        //$this->produto->setCodigoFornecedor($_POST['codigoFornecedor']);
        //$this->produto->setCodigoEscola($_POST['codigoEscola']);
        //$this->produto->setCodigoResponsavel($_POST['codigoResponsavel']);

        $this->produto->alterarProduto();

        header('Location:LISTARPRODUTO', true,302);
    }
}


?>