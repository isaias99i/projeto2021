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
      <label for="matricula">Matricula: <?php echo $matricula ?></label>
    </div>
    <div class="form-group">
      <label for="saldo">saldo: <?php echo $saldo ?></label>
    </div>
    <div class="form-group">
      <label for="nomeCompleto">Nome da Usuario:</label>
      <input type="text" class="form-control" id="nomeCompleto" placeholder="Informe o nome da Usuario" name="nomeCompleto" id="nomeCompleto" value = "<?php echo $nomeCompleto ?>">
    </div>
    <div class="form-group">
      <label for="cpf">cpf: <?php echo $cpf ?></label>
    </div>    
    <div class="form-group">
        <label for="turma">turma:</label>
        <input type="number" class="form-control" id="turma" placeholder="Informe o telefonoe" name="telefone" id="telefone" value = "<?php echo $telefone ?>">
      </div>
    <div class="form-group">
        <label for="turno">turno:</label>
        <input type="number" class="form-control" id="turno" placeholder="Informe o telefonoe" name="telefone" id="telefone" value = "<?php echo $telefone ?>">
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
        <label for="foto">foto:</label>
        <input type="file" class="form-control" id="foto" placeholder="Informe a CNPJ" name="foto" id="foto" value = "<?php echo $foto ?>">
      </div>    
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
<?php require "Rodape.php";?>