<?php 
$tituloPagina = "Cadastro de Escola";
require 'Cabecalho.php';
?>

    <form name="cadEscola" method = "post" action="incluirEscola" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nomeEscola">Nome da escola:</label>
        <input type="text" class="form-control" id="nomeEscola" placeholder="Digite o nome da escola" name="nomeEscola">
      </div>
      <div class="form-group">
        <label for="cnpj">CNPJ:</label>
        <input type="text" class="form-control" id="cnpj" placeholder="Digite o CNPJ" name="cnpj">
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX"
              required="" type="text" maxlength="13" pattern="[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
              OnKeyPress="formatar('## #####-####', this)">
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" class="form-control" id="email" placeholder="Digite o e-mail" name="email">
      </div>
      <div class="form-group">
        <label for="logo">Logo:</label>
        <input type="file" class="form-control" id="logo" placeholder="Digite o endereço" name="logo">
      </div>      
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="endereco" class="form-control" id="endereco" placeholder="Digite o endereço" name="endereco">
      </div>            
        <button type="submit" class="btn btn-primary">Enviar</button>     
    </form>  
<?php require "Rodape.php";?>