<?php
require "Model/Produto.php";
require_once "IControlador.php";
class ControladorComprarProduto implements IControlador{
   private $produto;

   public function __construct(){
       $this->produto = new Produto();
   }
   
   public function processaRequisicao(){
       $listaProduto = $this->produto->listarTodos();
       require "View/ComprarProduto.php";
   }
}
   
   
?>