<?php
require "Model/Usuario.php";
require_once "IControlador.php";

$loginUser= new Usuario();
if(isset($_REQUEST["validar"])){
    $r=$loginUser->logarUsuario($_REQUEST["login"]);
    if($r==1){
        session_start();
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $_SESSION['login']=$login;
        $_SESSION['senha']=$senha;
        header('Location:TELARESPONSAVEL');
    }
    else
        echo"<script>alert('Usuario ou senha incorreta')</script>";
}
require 'View/Principal.php';

?>