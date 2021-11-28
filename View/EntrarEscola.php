<?php 
$tituloPagina="Login";
require "Cabecalho.php";
?>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <h3>Sobre nós:</h3>
        <div class="form-group">
      <!--<label for="nomeEscola"><?php echo $nomeEscola ?></label>Está dando erro ao buscar essa variável... Neste caso, vou duplicar a linha e inserir uma das escolas cadastradas-->
      <h4 for="nomeEscola">Carlos Alberto Cerqueira</h4>
    </div>
        <p>O Colégio Estadual Carlos Alberto Cerqueira é uma instituição de ensino da República Federativa do Brasil, 
          criada mediante transformação do Centro Federal de Educação Tecnológica da Bahia, através da Lei Federal 11.892. Sua reitoria 
          está instalada em Salvador, no bairro do Canela.</p>

      </div>
      <div class="col-sm-8 text-left">
        <h2>Seja bem vindo</h2>        
        <hr>
        <div class="form-group">
          <label for="login">Login:</label>
          <input type="login" class="form-control" id="login" placeholder="Digite seu login" name="login">
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senha">
        </div>
        <button type="reset" class="btn btn-danger">Cancelar</button>
        <a><button type="submit" class="btn btn-primary">Entrar</button></a>
        <a><button type="submit" class="btn btn-warning">Esqueci minha senha</button></a>
      </div>
    </div>
  </div>
  </div>
  <br>
  <br>

<?php require "Rodape.php";?>
