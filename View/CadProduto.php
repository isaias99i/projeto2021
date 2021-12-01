<?php 
$tituloPagina = "Cadastro de Produto";
require 'Cabecalho.php';
?>
<link rel="stylesheet" href="/projeto2021/View/CSS/base.css">

<form name="cadProduto" method = "post" action="incluirProduto" enctype="multipart/form-data">
    <div class="signup-form">  
      <div class="form-group">
        <input type="radio" name="tipoProduto" value="B" checked>Bebida 
        <input type="radio" name="tipoProduto" value="C">Comida             
      </div>
      <div class="form-group">
        <label for="nomeProduto">Nome Produto:</label>
        <input type="text" class="form-control" id="nomeProduto" placeholder="Digite o nome da escola" name="nomeProduto">
      </div>
      <div class="form-group">
        <label for="ingredientes">Ingredientes:</label>
        <textarea type="text" class="form-control" id="ingredientes" placeholder="Digite o nome da escola" name="ingredientes"></textarea>
      </div>
      <div class="form-group">
        <label for="fornecedor">Fornecedor:</label>
        <input type="text" class="form-control" id="fornecedor" placeholderFornecedor o e-mail" name="fornecedor">
      <div class="form-group">
        <label for="preco">Preco:</label>
        <input type="text" class="form-control" id="preco" placeholder="Digite o preco" name="login">
      </div>            
      <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" class="form-control" id="foto" placeholder="Digite o endereço" name="foto">
      </div> 
      
        <button type="submit" class="btn btn-primary">Enviar</button>    
</div>        
    </form>  
<?php require "Rodape.php";?>