<?php 
$tituloPagina = "Alteração de Usuario";
require 'Cabecalho.php';
?>

<link rel="stylesheet" href="/projeto2021/View/CSS/base.css">
  <form name="AltUsuario" method = "post" action="AlterarUsuario">
    <div class="form-group">
      <label for="codigoUsuario">Código do Usuario: <?php echo $codigoUsuario ?></label>
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
        <label for="foto">foto:</label>
        <input type="file" class="form-control" id="foto" placeholder="Informe a CNPJ" name="foto" id="foto" value = "<?php echo $foto ?>">
      </div>    
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
<?php require "Rodape.php";?>