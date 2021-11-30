<?php 
$tituloPagina = "Cadastro de Produto";
require 'Cabecalho.php';
?>


  <main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">
        <br>
        <br>

        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="card">
            <form class="form-horizontal" name="cadProduto" method = "post" action="incluirProduto" enctype="multipart/form-data">
                <fieldset>
                  <div class="panel panel-primary">
                    <div class="panel-heading" id="headCadastro">Cadastro de Produto</div>

                    <div class="panel-body">
                      <div class="form-group">


                      </div>

                      <!-- Text input-->

                      <div class="form-group">

                        <div class="col-md-8">

                          <input type="radio" name="tipoProduto" value="B"> Bebida
                        </div>
                      </div>
                      

                      <div class="form-group">
                        <label class="col-md-2 control-label" for="nomeProduto">Nome do Produto:</label>
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                            <input id="nomeProduto" name="nomeProduto" placeholder="Digite o nome do produto"
                              class="form-control input-md" required="" type="text">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label" for="fornecedor">Fornecedor </label>
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                            <input id="fornecedor" name="fornecedor" placeholder="Digite o nome do fornecedor"
                              class="form-control input-md" required="" type="text">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label" for="foto">Foto </label>
                        <div class="col-md-8">
                          <div class="input-group">
                          <input type="file" class="form-control" id="foto" placeholder="Digite o endereço" name="foto">
                          </div>
                        </div>
                      </div>                        

                      <div class="form-group">
                        <label class="col-md-2 control-label" for="preco">Preço </label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                            <input id="preco" name="preco" min="0,01" placeholder="R$ 0,00" class="form-control input-md"
                              required="" type="text" pattern="[0-9]+$">
                          </div>
                        </div>
                      </div>

                      <br>
                      <br>

                      <div class="form-group center">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-10">
                          <button class="btn btn-success" type="submit">Cadastrar</button>
                          <button class="btn btn-primary" type="submit">Editar</button>
                          <button class="btn btn-danger" type="Reset">Excluir</button>
                        </div>
                      </div>


                    </div>
                  </div>


                </fieldset>
              </form>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="card">
            <form class="form-horizontal" name="cadProduto" method = "post" action="INCLUIPRODUTO" enctype="multipart/form-data">
                <fieldset>
                  <div class="panel panel-primary">
                    <div class="panel-heading" id="headCadastro">Cadastro de Produto</div>

                    <div class="panel-body">
                      <div class="form-group">


                      </div>

                      <!-- Text input-->

                      <div class="form-group">
                        <div class="col-md-8">

                          <input type="radio" name="tipoProduto" value="C"> Comida
                        </div>
                      </div>                      

                      <div class="form-group">
                        <label class="col-md-2 control-label" for="nomeProduto">Nome do Produto:</label>
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                            <input id="nomeProduto" name="nomeProduto" placeholder="Digite o nome do produto"
                              class="form-control input-md" required="" type="text">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Ingredientes </label>
                        <div class="col-md-8">
                          <div class="input-group">

                            <textarea style="resize: none" rows="3" cols="35" maxlength="500" id="ingredientes" name="ingredientes"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label" for="foto">Foto </label>
                        <div class="col-md-8">
                          <div class="input-group">
                          <input type="file" class="form-control" id="foto" placeholder="Digite o endereço" name="foto">
                          </div>
                        </div>
                      </div>  

                      <div class="form-group">
                        <label class="col-md-2 control-label" for="preco">Preço </label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                            <input id="preco" name="preco" min="0,01" placeholder="R$ 0,00" class="form-control input-md"
                              required="" type="text" pattern="[0-9]+$">
                          </div>
                        </div>
                      </div>

                      <div class="form-group center">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-10">
                          <button class="btn btn-success" type="submit">Cadastrar</button>
                          <button class="btn btn-primary" type="submit">Editar</button>
                          <button class="btn btn-danger" type="Reset">Excluir</button>
                        </div>
                      </div>

                    </div>
                  </div>

                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>

</body>
<?php require "Rodape.php";?>