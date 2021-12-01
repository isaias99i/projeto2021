<?php 
$tituloPagina = "Alteração de Produto";
require 'Cabecalho.php';
?>

  <form name="AltProduto" method = "post" action="AlteraProduto">
    <div class="form-group">
      <label for="codigoProduto">Código da Produto:</label>
      <input type="text" class="form-control" id="codigoProduto" placeholder="Informe o código da escola" name="codigoProduto" id="codigoProduto" value = "<?php echo $codigoProduto ?>">
    </div>
    <div class="form-group">
      <label for="nomeProduto">Nome da Produto:</label>
      <input type="text" class="form-control" id="nomeProduto" placeholder="Informe o nome da escola" name="nomeProduto" id="nomeProduto" value = "<?php echo $nomeProduto ?>">
    </div>
    <div class="form-group">
        <label for="tipoProduto">Tipo Produto:</label>
        <input type="radio" name="tipoProduto" value="B" checked>Bebida 
        <input type="radio" name="tipoProduto" value="C">Comida         
      </div>
      
    <div class="form-group">
        <label for="ingredientes">Ingredientes:</label>
        <input type="text" class="form-control" id="ingredientes" placeholder="Informe o telefonoe" name="ingredientes" id="ingredientes" value = "<?php echo $ingredientes ?>">
      </div>
    <div class="form-group">
        <label for="fornecedor">Fornecedor:</label>
        <input type="text" class="form-control" id="fornecedor" placeholder="Informe a CNPJ" name="fornecedor" id="fornecedor" value = "<?php echo $fornecedor ?>">
      </div>
    <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" class="form-control" id="foto" placeholder="Informe a CNPJ" name="foto" id="foto" value = "<?php echo $foto ?>">
      </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="preco" class="form-control" id="preco" placeholder="Informe o ao de publicacao" name="preco" id="preco" value = "<?php echo $preco ?>">
      </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
<?php require "Rodape.php";?>