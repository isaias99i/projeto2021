<?php
require "Model/Usuario.php";
require_once "IControlador.php";
class ControladorUsuarioExcluir implements IControlador{
   private $usuario;

   public function __construct(){
      $this->usuario = new Usuario();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->usuario->setCodigoUsuario($_POST['id']);
      
      $this->usuario->excluirUsuario();
 
      header('Location:LISTARUSUARIO', true,302);
   }
}
   
   
?>