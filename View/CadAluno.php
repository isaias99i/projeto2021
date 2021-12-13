<?php 
$tituloPagina = "Cadastro de Aluno";
require 'Cabecalho.php';
session_start();
?>

<link rel="stylesheet" href="/projeto2021/View/CSS/CadAluno.css">

  <form name="NovoAluno" method = "post" action="IncluirAluno">
    <div class="form-group center">
      <label for="codigoUsuario" id="codigoUsuario">Código do Usuario: <?php echo $_SESSION['codigoUsuario']; ?></label>
      <input type="number" class="form-control" id="codigoResponsavel" name="codigoResponsavel" placeholder="Informe o seu código de Usuario">
      <br>
      <input type="radio" name="tipoUsuario" value="A" checked readonly>Aluno  
    </div>
    <div class="form-group">
      <label for="nomeCompleto">Nome Completo:</label>
      <input type="text" class="form-control" id="nomeCompleto" placeholder="Informe o nome do Usuario" name="nomeCompleto" id="nomeCompleto">
    </div>
    <div class="form-group">
      <label for="matricula">Matricula:</label>
      <input type="number" class="form-control" id="matricula" placeholder="Informe a matricula" name="matricula" id="matricula">
    </div>
    <div class="form-group">
      <label for="turno">Turno:</label>
    <br>
    <input type="radio" name="turno" id="turno" value="M" checked>Matutino
    <input type="radio" name="turno" id="turno" value="V">Vespertino
    <input type="radio" name="turno" id="turno" value="N">Noturno
  </div>  
    <div class="form-group">
      <label for="cpf">Cpf:</label>
      <input type="number" class="form-control" id="cpf" placeholder="Informe a cpf" name="cpf" id="cpf">
    </div>    
  <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="number" class="form-control" id="telefone" placeholder="Informe o telefonoe" name="telefone" id="telefone">
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="text" class="form-control" id="email" placeholder="Informe o e-mail" name="email" id="email">
    </div>
    <div class="form-group">
      <label for="login">Login:</label>
      <input type="text" class="form-control" id="login" placeholder="Digite o login" name="login">
    </div>      
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha">
    </div>         
      <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" class="form-control" id="foto" placeholder="Insira a foto" name="foto" id="foto">
      </div>          
      <button type="submit" class="btn btn-primary">Enviar</button>    
    </div>
    </form>  
    <?php require "Rodape.php";?>