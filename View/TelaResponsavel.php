<!-- <?php 
$tituloPagina="";
require "Cabecalho.php";
session_start();

?> -->
  <form class="form-horizontal">
    <fieldset>
      <div class="panel panel-primary">
        <div class="panel-heading" id="headCadastro">Tela Responsável</div>
        <div class="form-group">
          <div class="panel-body">
            <div class="form-group">
            </div>
            <div class="container">
              <form action="/action_page.php">
                <div class="form-group">
                  <label class="col-md-2 control-label" for="Nome">Nome </label>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                      <input id="codigo" name="codigo" placeholder="Fulano" class="form-control input-md"                         type="text" maxlength="5" pattern="[0-9]+$" min="1">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label" for="Nome">Saldo:</label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                      <input id="codigo" name="codigo" placeholder="Saldo" class="form-control input-md" 
                        type="text" maxlength="5" >
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label" for="Nome">Extrato </label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                      <input id="codigo" name="codigo" placeholder="Digite a matricula" class="form-control input-md"
                         type="text" maxlength="5" >
                      <button id="Cadastrar" name="busca" class="btn btn-success" type="Submit"><a href="/Protótipo/Extrato.html">Buscar</a></button>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-2 control-label" for="Nome">Deposito</label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                      <input id="codigo" name="codigo" placeholder="Informe o valor do deposito"
                        class="form-control input-md"  type="text" maxlength="5" >
                      <button id="Cadastrar" name="busca" class="btn btn-success" type="Submit">Buscar</button>

                    </div>
                  </div>
                </div>


                <h3>Tabela de Produtos</h3><br>
                <div class="container-fluid bg-3 text-center">
                  <div class="row">
                    <div class="col-sm-3">
                      <div align="center">
                        <img src="/Icons/coxinha.jfif" class="img-responsive" style="height:100px " width="150px"
                          alt="Image">
                        <input type="radio" name="comida" value="M">
                        <p style="text-align: center;">Coxinha R$:5,00</p style="text-align: center;">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div align="center">
                        <img src="/Icons/salada.jfif" class="img-responsive" style="height:100px " width="150px"
                          alt="Image">
                        <input type="radio" name="comida" value="M">
                        <p style="text-align: center;">Salada R$:5,00</p style="text-align: center;">
                      </div>

                    </div>
                    <div class="col-sm-3">
                      <div align="center">
                        <img src="/Icons/lanche.jfif" class="img-responsive" style="height:100px " width="150px"
                          alt="Image">
                        <input type="radio" name="comida" value="M">
                        <p style="text-align: center;">Hamburguer R$:10,00</p style="text-align: center;">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div align="center">
                        <img src="/Icons/cuscuz.jfif" class="img-responsive" style="height:100px " width="150px"
                          alt="Image">
                        <input type="radio" name="comida" value="M">
                        <p style="text-align: center;">Cuscuz R$:15,00</p style="text-align: center;">

                      </div>
                    </div>
                  </div><br>

                  <div class="container-fluid bg-3 text-center">
                    <div class="row">
                      <div class="col-sm-3" align="center">

                        <img src="/Icons/cafe.jfif" class="img-responsive" style="height:100px " width="150px"
                          alt="Image">
                        <input type="radio" name="comida" value="M">
                        <p style="text-align: center;">Café R$:1,00</p style="text-align: center;">
                      </div>
                      <div class="col-sm-3" align="center">

                        <img src="/Icons/refrir.jfif" class="img-responsive" style="height:100px " width="150px"
                          alt="Image">
                        <input type="radio" name="comida" value="M">
                        <p style="text-align: center;">Refrigerante R$:5,00</p style="text-align: center;">
                      </div>
                      <div class="col-sm-3" align="center">

                        <img src="/Icons/acai.jfif" class="img-responsive" style="height:100px " width="150px"
                          alt="Image">
                        <input type="radio" name="comida" value="M">
                        <p style="text-align: center;">Açaí R$:15,00</p style="text-align: center;">
                      </div>
                      <div class="col-sm-3" align="center">

                        <img src="/Icons/arroz.jfif" class="img-responsive" style="height:100px " width="150px"
                          alt="Image">
                        <input type="radio" name="comida" value="M">
                        <p style="text-align: center;">Arroz & Feijão R$:17,00</p style="text-align: center;">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="Cadastrar"></label>
                    <div class="col-md-12">
                      <button id="Cadastrar" name="Cadastrar" class="btn btn-primary" type="Submit">Bloquear</button>
                      <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Desbloquear</button>
                    </div>
                  </div>