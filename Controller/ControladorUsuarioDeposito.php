<?php
require_once "IControlador.php";
require_once "Model/Usuario.php";

class ControladorUsuarioDeposito implements IControlador{
    private $usuario;
    public function __construct(){
        $this->usuario = new Usuario();
    }
    public function processaRequisicao(){
        
        // // $this->usuario->getCodigoUsuario();        
        // // $this->usuario->getNomeCompleto();        
         $this->usuario->setDeposito($_POST['valorDeposito']);         
        // //$this->usuario->getSaldo($_POST['saldo']);        
        //$saldo = $this->usuario->getSaldo();
        //$valorDeposito = $saldo + $_POST['valorDeposito'];
        

        $this->usuario->depositoUsuario();

        // //header('Location:LISTARUSUARIO', true,302);
    }
}


?>