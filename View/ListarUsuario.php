<?php 
$tituloPagina="Gouba | Gerenciamento | Usuários";
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
  <a href="Listarproduto" class="btn btn-warning">Listar Produtos</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Códigos</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Login</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<count($listaUsuario);$i++){ ?>
           <tr>
           <td><?php echo $listaUsuario[$i]->getCodigoUsuario(); ?></td>
           <td><?php echo $listaUsuario[$i]->getNomeCompleto(); ?></td>
           <td><?php echo $listaUsuario[$i]->getCpf(); ?></td>
           <td><?php echo $listaUsuario[$i]->getEmail(); ?></td>
           <td><?php echo $listaUsuario[$i]->getLogin(); ?></td>
           <td><img width=55 height=55 src='<?php echo $listaUsuario[$i]->getFoto(); ?>'></td>
           <td>
           <form method="post" action="ExcluirUsuario" onSubmit="return confirma();">
             <input type="hidden" name="id" value="<?php echo $listaUsuario[$i]->getCodigoUsuario();?>">
             <input type="submit" class="btn btn-danger btn-sm" value= "Excluir">
           </form>
           </td>
           <td>
           <form method="post" action="FormAlterarUsuario" >
             <input type="hidden" name="id" value="<?php echo $listaUsuario[$i]->getCodigoUsuario();?>">
             <input type="submit" class="btn btn-primary btn-sm" value= "Alterar">
           </form>
           </td>
           <td>
           <form method="post" action="FormEntrarUsuario" >
             <input type="hidden" name="id" value="<?php echo $listaUsuario[$i]->getCodigoUsuario();?>">
             <input type="submit" class="btn btn-success btn-sm" value= "Entrar">
           </form>
           </td>
           </tr>   
      <?php } ?>
    </tbody>
  </table>
<?php require "Rodape.php";?>