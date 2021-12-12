<?php
require_once "IControlador.php";
require_once "Model/Usuario.php";

class ControladorProcessaLogin implements IControlador{
    private $usuario;
    public function __construct(){
        $this->usuario = new Usuario();        
    }
    public function processaRequisicao(){
        $login = $this->usuario->setLogin($_POST['login']);
        $senha = $this->usuario->setSenha($_POST['senha']);

        //var_dump($_REQUEST);
        $this->usuario->logarUsuario();
        header('Location:TelaAluno', true,302);
        
    }
}


?>