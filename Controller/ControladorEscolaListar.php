<?php
require "Model/Escola.php";
require_once "IControlador.php";
class ControladorEscolaListar implements IControlador{
    private $escola;

    public function __construct(){
        $this->escola = new Escola();
    }
    
    public function processaRequisicao(){
        $listaEscola = $this->escola->listarTodos();
        require "View/ListarEscola.php";
    }
}
    
    
?>