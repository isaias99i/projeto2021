<?php
require "Model/Escola.php";
require_once "IControlador.php";
class ControladorEntrarEscola implements IControlador{
   private $escola;

   public function __construct(){
      $this->escola = new Escola();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->escola->setNomeEscola($_POST['id']);
      
      $this->escola->entrarEscola();
 
      require "View/EntrarEscola.php";
   }
}
   
   
?>