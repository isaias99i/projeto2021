<?php 
$tituloPagina="Gouba | Compra Produtos";
require "Cabecalho.php";
?>

<script>
function confirma(){
  return confirm("Confirma a compra?");
}
</script>

  <a href="ListaProduto" class="btn btn-warning">Listar Produtos</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>        
        <th>Ingredientes</th>
        <th>Foto</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
       <?php for($i=0;$i<count($listaProduto);$i++){ ?>
           <tr>
           <td><?php echo $listaProduto[$i]->getCodigoProduto(); ?></td>
           <td><?php echo $listaProduto[$i]->getNomeProduto(); ?></td>
           <td><?php echo $listaProduto[$i]->getIngredientes(); ?></td>           
           <td><img width=55 height=55 src='<?php echo $listaProduto[$i]->getFoto(); ?>'></td>
           <td>R$ <?php echo $listaProduto[$i]->getPreco(); ?></td>
           <td>
           <form method="post" action="ComprarProduto" onSubmit="return confirma();">
             <input type="hidden" name="id" value="<?php echo $listaProduto[$i]->getCodigoProduto();?>">
             <input type="submit" class="btn btn-danger btn-sm" value= "Comprar">
           </form>
           </td>           
           </tr>   
      <?php } ?>
    </tbody>
  </table>
<?php require "Rodape.php";?>