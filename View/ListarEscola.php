<?php 
$tituloPagina="Gouba | Gerenciamento | Escolas";
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
        <th>Códigos</th>
        <th>Nome</th>
        <th>CNPJ</th>
        <th>Endereço</th>
        <th>E-mail</th>
        <th>Logo</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<count($listaEscola);$i++){ ?>
           <tr>
           <td><?php echo $listaEscola[$i]->getCodigoEscola(); ?></td>
           <td><?php echo $listaEscola[$i]->getNomeEscola(); ?></td>
           <td><?php echo $listaEscola[$i]->getCnpj(); ?></td>
           <td><?php echo $listaEscola[$i]->getEndereco(); ?></td>
           <td><?php echo $listaEscola[$i]->getEmail(); ?></td>
           <td><img width=55 height=55 src='<?php echo $listaEscola[$i]->getLogo(); ?>'></td>
           <td>
           <form method="post" action="ExcluirEscola" onSubmit="return confirma();">
             <input type="hidden" name="id" value="<?php echo $listaEscola[$i]->getCodigoEscola();?>">
             <input type="submit" class="btn btn-danger btn-sm" value= "Excluir">
           </form>
           </td>
           <td>
           <form method="post" action="FormAlterarEscola" >
             <input type="hidden" name="id" value="<?php echo $listaEscola[$i]->getCodigoEscola();?>">
             <input type="submit" class="btn btn-primary btn-sm" value= "Alterar">
           </form>
           </td>
           <td>
           <form method="post" action="FormEntrarEscola" >
             <input type="hidden" name="id" value="<?php echo $listaEscola[$i]->getCodigoEscola();?>">
             <input type="submit" class="btn btn-success btn-sm" value= "Entrar">
           </form>
           </td>
           </tr>   
      <?php } ?>
    </tbody>
  </table>
<?php require "Rodape.php";?>