<?php 
$tituloPagina = "Deposito";
require 'Cabecalho.php';
?>

  <form name="DepositoUsuario" method = "post" action="DepositoUsuario">
  <div class="form-group">
      <label for="codigoUsuario">Código da Usuario: <?php echo $codigoUsuario ?></label>      
    </div>
  <!-- <div class="form-group">
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
    </div>   -->
    <div class="form-group">
        <label for="valorDeposito">Digite aqui o valor de depósito:</label>
        <input type="number" class="form-control" id="valorDeposito" placeholder="Informe o valor de deposito" name="valorDeposito"  value = "<?php echo $valorDeposito ?>">
        <input type="hidden" class="form-control" id="codigoUsuario"  name="codigoUsuario"   value = "<?php echo $codigoUsuario ?>">
      </div>
    <button type="submit" class="btn btn-default" >Enviar</button>
  </form>
<?php require "Rodape.php";?>