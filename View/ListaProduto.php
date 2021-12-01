<?php 
$tituloPagina="Gouba | Gerenciamento | Produtos";
require "Cabecalho.php";
?>

<script>
function confirma(){
  return confirm("Confirma a exclusão?");
}
</script>

  <button type="button" href="NovaEscola" class="btn btn-primary">Nova Escola</button>
  <button type="button" href="NovoUsuario" class="btn btn-info">Novo Usuário</button>
  <button type="button" href="NovoProduto" class="btn btn-success">Novo Produto</button>
  <button type="button" href="ListaEscola" class="btn btn-default">Listar Escolas</button>
  <button type="button" href="ListarUsuario" class="btn btn-danger">Listar Usuários</button>
  <button type="button" href="Listarproduto" class="btn btn-warning">Listar Produtos</button>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Tipo</th>
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
           <td><?php echo $listaProduto[$i]->getTipoProduto(); ?></td>
           <td><?php echo $listaProduto[$i]->getIngredientes(); ?></td>
           <td><?php echo $listaProduto[$i]->getFornecedor(); ?></td>
           <td><?php echo $listaProduto[$i]->getFoto(); ?></td>
           <td><?php echo $listaProduto[$i]->getPreco(); ?></td>
           <td><img width=55 height=55 src='<?php echo $listaProduto[$i]->getFoto(); ?>'></td>
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
           <td>
           <form method="post" action="FormEntrarProduto" >
             <input type="hidden" name="id" value="<?php echo $listaProduto[$i]->getCodigoProduto();?>">
             <input type="submit" class="btn btn-success btn-sm" value= "Entrar">
           </form>
           </td>
           </tr>   
      <?php } ?>
    </tbody>
  </table>
<?php require "Rodape.php";?>