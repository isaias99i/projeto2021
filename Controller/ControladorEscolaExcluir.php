<?php
require "Model/Escola.php";
require_once "IControlador.php";
class ControladorEscolaExcluir implements IControlador{
   private $escola;

   public function __construct(){
      $this->escola = new Escola();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->escola->setCodigoEscola($_POST['codigoEscola']);
      
      $this->escola->excluirEscola();
 
      header('Location:Principal', true,302);
   }
}
   
   
?>