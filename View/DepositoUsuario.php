<?php 
$tituloPagina = "Deposito";
require 'Cabecalho.php';
?>

  <form name="DepositoUsuario" method = "post" action="DepositoUsuario">
  <div class="form-group">
      <label for="codigoUsuario">Código da Usuario: <?php echo $codigoUsuario ?></label>      
    </div>
  <div class="form-group">
      <label for="codigoUsuario">Código da Usuario: <?php echo $nomeCompleto ?></label>      
    </div>
  <div class="form-group">
      <label for="codigoUsuario">Código da Usuario: <?php echo $saldo ?></label>      
    </div>
    <div class="form-group">
      <label for="nomeCompleto">Nome: <?php echo $nomeCompleto ?></label>      
    </div>  
    <div class="form-group">
      <label for="saldo">Saldo atual: <?php echo $saldo ?></label>      
    </div>  
    <div class="form-group">
        <label for="valorDeposito">Digite aqui o valor de depósito:</label>
        <input type="number" class="form-control" id="valorDeposito" placeholder="Informe o telefonoe" name="valorDeposito" id="valorDeposito" name="valorDeposito" value = "<?php echo $valorDeposito ?>">
      </div>
    <button type="submit" class="btn btn-default" >Enviar</button>
  </form>
<?php require "Rodape.php";?>