<?php 
$tituloPagina = "Alteração de Escola";
require 'Cabecalho.php';
?>

<link rel="stylesheet" href="/projeto2021/View/CSS/base.css">
  <form name="AltEscola" method = "post" action="AlterarEscola">
    <div class="form-group">
      <label for="codigoEscola">Código da Escola:</label>
      <input type="text" class="form-control" id="codigoEscola" placeholder="Informe o código da escola" name="codigoEscola" id="codigoEscola" value = "<?php echo $codigoEscola ?>">
    </div>
    <div class="form-group">
      <label for="nomeEscola">Nome da Escola:</label>
      <input type="text" class="form-control" id="nomeEscola" placeholder="Informe o nome da escola" name="nomeEscola" id="nomeEscola" value = "<?php echo $nomeEscola ?>">
    </div>
    <div class="form-group">
        <label for="cnpj">CNPJ:</label>
        <input type="text" class="form-control" id="cnpj" placeholder="Informe a CNPJ" name="cnpj" id="cnpj" value = "<?php echo $cnpj ?>">
      </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="number" class="form-control" id="telefone" placeholder="Informe o telefonoe" name="telefone" id="telefone" value = "<?php echo $telefone ?>">
      </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" class="form-control" id="email" placeholder="Informe a CNPJ" name="email" id="email" value = "<?php echo $email ?>">
      </div>
    <div class="form-group">
        <label for="logo">Logo:</label>
        <input type="file" class="form-control" id="logo" placeholder="Informe a CNPJ" name="logo" id="logo" value = "<?php echo $logo ?>">
      </div>
    <div class="form-group">
        <label for="endereco">Endereco:</label>
        <input type="endereco" class="form-control" id="endereco" placeholder="Informe o ao de publicacao" name="endereco" id="endereco" value = "<?php echo $endereco ?>">
      </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
<?php require "Rodape.php";?>