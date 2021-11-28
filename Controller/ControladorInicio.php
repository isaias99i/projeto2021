<?php
require "Model/Escola.php";
require_once "IControlador.php";

class ControladorInicio implements IControlador{
   private $escola;

   public function __construct(){
      $this->escola = new Escola();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
        $this->escola->setNomeEscola($_POST['nomeEscola']);
        $this->escola->setCnpj($_POST['cnpj']);
        $this->escola->setTelefone($_POST['telefone']);
        $this->escola->setEmail($_POST['email']);
        $this->escola->setEndereco($_POST['endereco']);
        $this->escola->setLogo($_FILES['logo']);
        //$this->escola->setCodigoResponsavel($_POST['codigoResponsavel']);
      
      $this->escola->incluirEscola();
 
      header('Location:Inicio', true,302);
   }
}
   
   
?>