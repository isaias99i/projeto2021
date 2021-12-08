<?php 
$tituloPagina = "Cadastro de Aluno";
require 'Cabecalho.php';
?>

<link rel="stylesheet" href="/projeto2021/View/CSS/base.css">

    <form name="cadUsuario" method = "post" action="incluirUsuario" enctype="multipart/form-data">
      <div class="signup-form">
        <div class="form-group">
            <input type="radio" name="tipoUsuario" value="A" checked>Aluno        
        </div>
        <div class="form-group">
          <label for="nomeCompleto">Nome Completo:</label>
          <input type="text" class="form-control" id="nomeCompleto" placeholder="Digite o nome completo" name="nomeCompleto">
        </div>
        <div class="form-group">
          <label for="matricula">Matrícula:</label>
          <input type="text" class="form-control" id="matricula" placeholder="Digite a matrícula" name="matricula">
        </div>
        <div class="form-group">
            <input type="radio" name="turno" value="M" checked>Matutino        
            <input type="radio" name="turno" value="V">Vespertino        
            <input type="radio" name="turno" value="N">Noturno        
        </div>             
        <div class="form-group">
          <label for="turno">Turno:</label>
          <input type="text" class="form-control" id="turno" placeholder="Digite o turno" name="turno">
        </div>      
        <div class="form-group">
          <label for="login">Login:</label>
          <input type="text" class="form-control" id="login" placeholder="Digite o login" name="login">
        </div>      
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha">
        </div>         
          <button type="submit" class="btn btn-primary">Enviar</button>    
      </div>
    </form>  
<?php require "Rodape.php";?>