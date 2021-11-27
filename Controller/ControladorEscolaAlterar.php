<?php
require_once "IControlador.php";
require_once "Model/Escola.php";

class ControladorEscolaAlterar implements IControlador{
    private $escola;
    public function __construct(){
        $this->escola = new Escola();
    }
    public function processaRequisicao(){
        $this->escola->setCodigoEscola($_POST['codigoEscola']);
        $this->escola->setNomeEscola($_POST['nomeEscola']);
        $this->escola->setCnpj($_POST['cnpj']);
        $this->escola->setTelefone($_POST['telefone']);
        $this->escola->setEmail($_POST['email']);
        $this->escola->setLogo($_FILES['logo']);
        $this->escola->setEndereco($_POST['endereco']);
        //$this->escola->setCodigoResponsavel($_POST['codigoResponsavel']);

        $this->escola->alterarEscola();

        header('Location:Principal', true,302);
    }
}


?>