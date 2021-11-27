<?php

require_once "IControlador.php";
require_once "Model/Escola.php";

class ControladorFormEscolaAlterar implements IControlador{
    private $escola;
    public function __construct(){
        $this->escola = new Escola();
    }
    public function processaRequisicao(){
        $this->escola->setCodigoEscola($_POST['id']);
        //$this->escola->pesquisaEscola();
        $codigoEscola = $this->escola->getCodigoEscola();
        $nomeEscola = $this->escola->getNomeEscola();
        $cnpj = $this->escola->getCnpj();
        $telefone = $this->escola->getTelefone();
        $email = $this->escola->getEmail();
        $logo = $this->escola->getLogo();
        $endereco = $this->escola->getEndereco();
        //$codigoResponsavel = $this->escola->getCodigoResponsavel();
        require "View/AlteraEscola.php";
    }
}


?>