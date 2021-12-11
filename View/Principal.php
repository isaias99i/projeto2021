<?php 
$tituloPagina="Inicio";
require "Cabecalho.php";

// if (isset($_POST['login'], $_POST['senha'])){
//     if($_POST['login']=='isaias' && $_POST['senha']=='teste'){
//         header('Location: View/TelaResponsavel.php');
//     }
// }

?>

<link rel="stylesheet" href="/projeto2021/View/CSS/base.css">
    <div class="login-form">
    <form name="processaLogin" action="PROCESSALOGIN"  method="post">
        <h2 class="text-center">Login</h2>
        <p class="sub-h2">Soluções em cantina</p>      
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Usuário" name="login" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" name="senha" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="validar">Entrar</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Lembre-me</label>
            <a href="#" class="float-right"> Esqueceu a senha?</a>
        </div>  
        <br>      
        <p class="text-center"><a href="#">Criar uma conta</a></p>
    </form>
</div>

<?php require "Rodape.php";?>
