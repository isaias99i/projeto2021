<?php 
$tituloPagina = "Cadastro de Usuario";
require 'Cabecalho.php';
?>

    <form name="cadUsuario" method = "post" action="incluirUsuario" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nomeCompleto">Nome Completo:</label>
        <input type="text" class="form-control" id="nomeCompleto" placeholder="Digite o nome da escola" name="nomeCompleto">
      </div>
      <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" id="cpf" placeholder="Digite o nome da escola" name="cpf">
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" class="form-control" id="email" placeholder="Digite o e-mail" name="email">
      </div>      
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX"
              required="" type="text" maxlength="13" pattern="[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
              OnKeyPress="formatar('## #####-####', this)">
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
        <input type="file" class="form-control" id="foto" placeholder="Digite o endereço" name="foto">
      </div> 
      <div class="form-group">
      <input type="radio" name="tipoUsuario" value="F" checked>Funcionário 
      <input type="radio" name="tipoUsuario" value="R">Responsável 
      <input type="radio" name="tipoUsuario" value="A">Aluno        
      </div>
        <button type="submit" class="btn btn-primary">Enviar</button>    
    </form>  
<?php require "Rodape.php";?>