<?php
require "Model/Produto.php";
require_once "IControlador.php";
class ControladorProdutoCompra implements IControlador{
   private $produto;

   public function __construct(){
      $this->produto = new Produto();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->produto->setCodigoProduto($_POST['id']);
      
      $this->produto->comprarProduto();
 
      header('Location:LISTARPRODUTO', true,302);
   }
}
   
   
?>