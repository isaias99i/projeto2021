<?php
require_once "IControlador.php";
require_once "Model/Usuario.php";

class ControladorUsuarioAlterar implements IControlador{
    private $usuario;
    public function __construct(){
        $this->usuario = new Usuario();
    }
    public function processaRequisicao(){
        $this->usuario->setCodigoUsuario($_POST['codigoUsuario']);
        $this->usuario->setNomeCompleto($_POST['nomeCompleto']);
        $this->usuario->setTurma($_POST['turma']);
        $this->usuario->setTurno($_POST['turno']);
        $this->usuario->setCpf($_POST['cpf']);
        $this->usuario->setTelefone($_POST['telefone']);
        $this->usuario->setEmail($_POST['email']);
        $this->usuario->setFoto($_FILES['foto']);
        $this->usuario->setDeposito($_POST['deposito']);
        //$this->usuario->setCodigoResponsavel($_POST['codigoResponsavel']);

        $this->usuario->alterarUsuario();

        header('Location:LISTARUSUARIO', true,302);
    }
}


?>