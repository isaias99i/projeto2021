<?php
require "Model/Produto.php";
require_once "IControlador.php";
class ControladorRealizarCompra implements IControlador{
   private $produto;

   public function __construct(){
      $this->produto = new Produto();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->produto->setCodigoProduto($_POST['id']);
      
      $this->produto->comprarProduto();
 
      header('Location:PRODUTOCOMPRA', true,302);
   }
}
   
   
?>