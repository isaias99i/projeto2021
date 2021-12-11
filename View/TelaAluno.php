<?php 
$tituloPagina="";
require "Cabecalho.php";


  //Verificar se a sessão não já está aberta.   
  session_start(); 


?>

<style>
.navbar {
  margin-bottom: 0;
  border-radius: 0;
}

/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
.row.content {height: 450px}

/* Set gray background color and 100% height */
.sidenav {
  padding-top: 20px;
  background-color: #f1f1f1;
  height: 100%;
}

/* Set black background color, white text and some padding */

.saldo h2 {
	color: #ff7a00;
	margin-bottom: 25px;
	margin-top: 5px;
}

/* On small screens, set height to 'auto' for sidenav and grid */
@media screen and (max-width: 767px) {
  .sidenav {
    height: auto;
    padding: 15px;
  }
  .row.content {height:auto;} 
}
.dropdown:hover>.dropdown-menu {
  display: block;
}
.center {
  text-align: center;
}

</style>

    <div class="saldo row container center">
      <div class="col s12 center saldo">
        <h3>Saldo em conta</h3>
        <h2>
          <?php 
          $_SESSION['saldo'];
        
          ?>
        </h2>
        <h2>
          <form method="post" action="FormCompraProduto" >
            <input type="hidden" name="id" value="Dep">
            <input type="submit" class="btn btn-success btn-sm" value= "Comprar Produtos">
          </form>  
        
        </h2>
      </div>
    </div>
  
<?php require "Rodape.php";?>