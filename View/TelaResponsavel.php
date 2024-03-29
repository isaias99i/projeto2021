<?php 
$tituloPagina="";
require "Cabecalho.php";
session_start();

?>
<h2> Bem vindo 
  <?php 
    echo $_SESSION['nomeCompleto'];         
  ?>
</h2>

<script>
function confirma(){
  return confirm("Confirma a exclusão?");
}
</script>

  <a href="NovoAluno" class="btn btn-info">Novo Aluno(a)</a>    
  <table class="table table-striped">
    <thead>
    <tr>
        <th>Códigos</th>
        <th>Nome</th>
        <th>CPF</th>      
        <th>E-mail</th>
        <th>Saldo</th>
        <th>Login</th>
        <th>Foto</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<count($listaUsuario);$i++){ ?>
           <tr>
           <td><?php echo $listaUsuario[$i]->getCodigoUsuario(); ?></td>
           <td><?php echo $listaUsuario[$i]->getNomeCompleto(); ?></td>
           <td><?php echo $listaUsuario[$i]->getCpf(); ?></td>           
           <td><?php echo $listaUsuario[$i]->getEmail(); ?></td>
           <td>R$ <?php echo number_format($listaUsuario[$i]->getSaldo(),2,',','.');?></td>
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
           <form method="post" action="FormDepositoUsuario" >
             <input type="hidden" name="id" value="<?php echo $listaUsuario[$i]->getCodigoUsuario();?>">
             <input type="submit" class="btn btn-success btn-sm" value= "Depositar">
           </form>
           </td>           
           </tr>   
      <?php } ?>
    </tbody>
  </table>
<?php require "Rodape.php";?>