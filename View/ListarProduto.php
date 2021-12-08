<?php 
$tituloPagina="Gouba | Gerenciamento | Produtos";
require "Cabecalho.php";
?>

<script>
function confirma(){
  return confirm("Confirma a exclusão?");
}
</script>

  <a href="NovaEscola" class="btn btn-primary">Nova Escola</a>
  <a href="NovoUsuario" class="btn btn-info">Novo Usuário</a>
  <a href="NovoProduto" class="btn btn-success">Novo Produto</a>
  <a href="ListaEscola" class="btn btn-dark">Listar Escolas</a>
  <a href="ListarUsuario" class="btn btn-danger">Listar Usuários</a>
  <a href="ListaProduto" class="btn btn-warning">Listar Produtos</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>        
        <th>Ingredientes</th>
        <th>Fornecedores</th>
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
           <td><?php echo $listaProduto[$i]->getFornecedor(); ?></td>           
           <td><img width=55 height=55 src='<?php echo $listaProduto[$i]->getFoto(); ?>'></td>
           <td>R$ <?php echo $listaProduto[$i]->getPreco(); ?></td>
           <td>
           <form method="post" action="ExcluirProduto" onSubmit="return confirma();">
             <input type="hidden" name="id" value="<?php echo $listaProduto[$i]->getCodigoProduto();?>">
             <input type="submit" class="btn btn-danger btn-sm" value= "Excluir">
           </form>
           </td>
           <td>
           <form method="post" action="FormAlterarProduto" >
             <input type="hidden" name="id" value="<?php echo $listaProduto[$i]->getCodigoProduto();?>">
             <input type="submit" class="btn btn-primary btn-sm" value= "Alterar">
           </form>
           </td>           
           </tr>   
      <?php } ?>
    </tbody>
  </table>
<?php require "Rodape.php";?>