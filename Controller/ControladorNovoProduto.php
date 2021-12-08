<?php
require "Model/Produto.php";
require_once "IControlador.php";

class ControladorNovoProduto implements IControlador{
   private $produto;

   public function __construct(){
      $this->produto = new Produto();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
        $this->produto->setNomeProduto($_POST['nomeProduto']);
        $this->produto->settipoProduto($_POST['tipoProduto']);
        $this->produto->setIngredientes($_POST['ingredientes']);
        $this->produto->setFornecedor($_POST['fornecedor']);
        $this->produto->setFoto($_FILES['foto']);
        $this->produto->setPreco($_POST['preco']);
        //$this->produto->setCodigoFornecedor($_POST['codigoFornecedor']);
        //$this->produto->setCodigoEscola($_POST['codigoEscola']);
        //$this->produto->setCodigoResponsavel($_POST['codigoResponsavel']);
      
      $this->produto->incluirProduto();
 
      header('Location:LISTAPRODUTO', true,302);
   }
}
   
   
?>