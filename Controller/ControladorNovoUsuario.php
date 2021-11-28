<?php
require "Model/Usuario.php";
require_once "IControlador.php";

class ControladorNovoUsuario implements IControlador{
   private $usuario;

   public function __construct(){
      $this->usuario = new Usuario();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
        $this->usuario->setNomeCompleto($_POST['nomeCompleto']);
        $this->usuario->setCpf($_POST['cpf']);
        $this->usuario->setTelefone($_POST['telefone']);
        $this->usuario->setEmail($_POST['email']);
        $this->usuario->setLogin($_POST['login']);
        $this->usuario->setSenha($_POST['senha']);
        $this->usuario->setFoto($_FILES['foto']);
        $this->usuario->setTipoUsuario($_POST['tipoUsuario']);
        //$this->usuario->setCodigoResponsavel($_POST['codigoResponsavel']);
      
      $this->usuario->incluirUsuario();
 
      header('Location:Principal', true,302);
   }
}
   
   
?>