<?php
require_once "IControlador.php";
require_once "Model/Usuario.php";

class ControladorFormUsuarioAlterar implements IControlador{
    private $usuario;
    public function __construct(){
        $this->usuario = new Usuario();
    }
    public function processaRequisicao(){
        $this->usuario->setCodigoUsuario($_POST['id']);                      
        $codigoUsuario = $this->usuario->getCodigoUsuario();
        $nomeCompleto = $this->usuario->getNomeCompleto($_POST['nomeCompleto']);
        $turma = $this->usuario->getTurma($_POST['turma']);
        $turno = $this->usuario->getTurno($_POST['turno']);
        $cpf = $this->usuario->getCpf($_POST['cpf']);
        $telefone = $this->usuario->getTelefone($_POST['telefone']);
        $email = $this->usuario->getEmail($_POST['email']);
        $foto = $this->usuario->getFoto($_FILES['foto']);
        
        require "View/AlteraUsuario.php";
    }
}


?>