<?php
require_once "IControlador.php";
require_once "Model/Usuario.php";
//require "Model/Conexao.php";
//session_start();

class ControladorProcessaLogin implements IControlador{
    private $usuario;
    public function __construct(){
        $this->usuario = new Usuario();        
    }
    public function processaRequisicao(){
        $login = $this->usuario->setLogin($_POST['login']);
        $senha = $this->usuario->setSenha($_POST['senha']);
        //$tipoUsuario = $this->usuario->setTipoUsuario($_POST['tipoUsuario']);

        //var_dump($_REQUEST);
        $this->usuario->logarUsuario();
        // $mysqli = Conexao::getConexao();
        // $result = $mysqli->query("SELECT tipoUsuario from bd_projeto2021.usuario where login='login'");
        // //$mysqli->execute();  
        // $result = $result->fetch_assoc();

        //session_start();
        
        $teste = $_SESSION['tipoUsuario'];
        switch ($teste) {
            case "A":
                header('Location:TelaAluno', true,302);
                break;
            case "R":
                header('Location:TelaResponsavel', true,302);
                break;            
            default:
            echo "sla";
            break;
        }
                
                //header('Location:TelaAluno', true,302);
        
    }
}


?>