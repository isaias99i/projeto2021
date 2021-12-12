<?php 
$tituloPagina = "Cadastro de Aluno";
require 'Cabecalho.php';
?>

<link rel="stylesheet" href="/projeto2021/View/CSS/base.css">
  <form name="NovoAluno" method = "post" action="NovoAluno">
    <div class="form-group">
      <label for="codigoUsuario">Código do Usuario: <?php echo $codigoUsuario ?></label>
    </div>
    <div class="form-group">
      <label for="matricula">Matricula: <?php echo $matricula ?></label>
      <input type="number" class="form-control" id="matricula" placeholder="Informe a matricula" name="matricula" id="matricula" value = "matricula">
    </div>
    <div class="form-group">
    <label for="valorDeposito">Digite aqui o valor de depósito:</label>
        <input type="number" class="form-control" id="valorDeposito" placeholder="Informe o valor de deposito" name="valorDeposito"  value = "<?php echo $valorDeposito ?>">
        <input type="hidden" class="form-control" id="codigoUsuario"  name="codigoUsuario"   value = "<?php echo $codigoUsuario ?>">
    </div>
    <div class="form-group">
      <label for="nomeCompleto">Nome da Usuario:</label>
      <input type="text" class="form-control" id="nomeCompleto" placeholder="Informe o nome do Usuario" name="nomeCompleto" id="nomeCompleto">
    </div>
    <div class="form-group">
      <label for="cpf">cpf:</label>
      <input type="number" class="form-control" id="cpf" placeholder="Informe a cpf" name="cpf" id="cpf">
    </div>    
    <div class="form-group">
        <label for="turma">turma:</label>
        <input type="number" class="form-control" id="turma" placeholder="Informe a turma" name="telefone" id="telefone">
      </div>
    <div class="form-group">
        <label for="turno">turno:</label>
        <input type="number" class="form-control" id="turno" placeholder="Informe o turno" name="telefone" id="telefone">
      </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="number" class="form-control" id="telefone" placeholder="Informe o telefonoe" name="telefone" id="telefone">
      </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" class="form-control" id="email" placeholder="Informe o e-mail" name="email" id="email">
      </div>
    <div class="form-group">
        <label for="foto">foto:</label>
        <input type="file" class="form-control" id="foto" placeholder="Insira a foto" name="foto" id="foto">
      </div>    
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>     
        <div class="form-group">
          <label for="login">Login:</label>
          <input type="text" class="form-control" id="login" placeholder="Digite o login" name="login">
        </div>      
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha">
        </div>         
          <button type="submit" class="btn btn-primary">Enviar</button>    
      </div>
    </form>  
<?php require "Rodape.php";?>