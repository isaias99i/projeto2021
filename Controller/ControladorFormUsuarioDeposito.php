<?php

require_once "IControlador.php";
require_once "Model/Usuario.php";

class ControladorFormUsuarioDeposito implements IControlador{
    private $usuario;
    public function __construct(){
        $this->usuario = new Usuario();
    }
    public function processaRequisicao(){

        $this->usuario->setCodigoUsuario($_POST['id']);
        $codigoUsuario = $this->usuario->getCodigoUsuario();

        //$this->usuario->setCodigoUsuario($_POST['codigoUsuario']);

        //$this->usuario->setCodigoUsuario($_POST[]);
        // $this->usuario->setNomeCompleto($_POST[]);
        // $this->usuario->setSaldo($_POST[]);
        
        require "View/DepositoUsuario.php";
    }
}


?>