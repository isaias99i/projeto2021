<?php 
$tituloPagina="";
require "CabecalhoAluno.php";

  session_start();


?>

<link rel="stylesheet" href="/projeto2021/View/CSS/TelaAluno.css">

    <div class="saldo row container center">
      <div class="col s12 center saldo">
        <h3>Saldo em conta</h3>
        <h2>
          Nome:
          <?php 
         echo $_SESSION['nomeCompleto'];         
          ?>
          <br>
          Saldo: R$
          <?php 
         echo number_format($_SESSION['saldo'],2,',','.');         
          ?>
        </h2>
        <h2>
          <form method="post" action="ComprarProduto" name="ComprarProduto" >
            <input type="hidden" name="id" value="Dep">
            <input type="submit" class="btn btn-success btn-sm" value= "Comprar Produtos">
          </form>  
        
        </h2>
      </div>
    </div>
  
<?php require "Rodape.php";?>