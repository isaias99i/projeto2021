<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="scripts/TelaAluno.css">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=0lu0csaoiAQSB0uUuwOsjBPsOWL3tPRWkUoKtvHLVEPQYwsfmyO2G2sbAE4N9EWBvglT59ukbQFrW3cpXv-f-MvJyyUD5ku2af2CisIyS3wMeWLvYXW5BNpr1tH-nhIl2tXJZKQcgkyz1oFK_e1_rA" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Borda de Cima*/
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Rodapé / Footer */
    footer {
      background-color: #77DD77;
      color: white;
      padding: 15px;
      bottom: 0;
    }
  </style>
</head>

<body >
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img src="/Icons/gouba_sem_fundo.png" alt="some text" width=60 height=50>
      </div>
      <ul class="nav nav-tabs">
        <li><a href="Principal.html">Home</a></li>
        <li class="active"><a href="/Protótipo/TelaAluno.html">Aluno </a></li>
        <li><a href="/Protótipo/TelaCompra.html">Compra </a></li>
      </ul>
     
    </div>
  </nav>

    <form class="form-horizontal">
        <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading" id="headCadastro">Tela Aluno</div>
                <div class="form-group">
                    <div class="panel-body">
                        <div class="form-group">
                        </div>
                        <div class="container">
                            <form action="/action_page.php">
              
                                <div class="saldo row container center">
                                    <div class="col s12 center saldo">
                                      <h3>Saldo em conta</h3>
                                      <h2>R$ 15,37</h2>
                                    </div>
                                  
                                
                                <h3>Tabela de Produtos</h3><br>
                                <div class="container-fluid bg-3 text-center">
                                    <div class="row">
                                        <div class="col-sm-3" align="center">
                                            <img src="/Icons/coxinha.jfif" class="img-responsive" style="height:100px "
                                                width="150px" alt="Image">
                                            <input type="radio" name="coxinha" value="M"> 
                                            <p style="text-align: center;">Coxinha R$:5,00</p style="text-align: center;">
                                        </div>
                                        <div class="col-sm-3" align="center">

                                            <img src="/Icons/salada.jfif" class="img-responsive" style="height:100px "
                                                width="150px" alt="Image">
                                            <input type="radio" name="salada" value="M"> 
                                            <p style="text-align: center;">Salada R$:20,00</p style="text-align: center;">


                                        </div>
                                        <div class="col-sm-3" align="center">

                                            <img src="/Icons/lanche.jfif" class="img-responsive" style="height:100px "
                                                width="150px" alt="Image">
                                            <input type="radio" name="Hamburguer" value="M">
                                            <p style="text-align: center;">Hamburguer R$:10,00</p style="text-align: center;">

                                        </div>
                                        <div class="col-sm-3" align="center">

                                            <img src="/Icons/cuscuz.jfif" class="img-responsive" style="height:100px "
                                                width="150px" alt="Image">
                                            <input type="radio" name="cuscuz" value="M"> 
                                            <p style="text-align: center;">Cuscuz R$:15,00</p style="text-align: center;">

                                        </div>
                                    </div>
                                </div><br>

                                <div class="container-fluid bg-3 text-center">
                                    <div class="row">
                                        <div class="col-sm-3" align="center">

                                            <img src="/Icons/cafe.jfif" class="img-responsive" style="height:100px "
                                                width="150px" alt="Image">
                                            <input type="radio" name="cafe" value="M">
                                            <p style="text-align: center;">Café R$:1,00</p style="text-align: center;">
                                        </div>
                                        <div class="col-sm-3" align="center">

                                            <img src="/Icons/refrir.jfif" class="img-responsive" style="height:100px "
                                                width="150px" alt="Image">
                                            <input type="radio" name="refrir" value="M">
                                            <p style="text-align: center;">Refrigerante R$:5,00</p style="text-align: center;">
                                        </div>
                                        <div class="col-sm-3" align="center">

                                            <img src="/Icons/acai.jfif" class="img-responsive" style="height:100px "
                                                width="150px" alt="Image">
                                            <input type="radio" name="acai" value="M">
                                            <p style="text-align: center;">Açaí R$:15,00</p style="text-align: center;">
                                        </div>
                                        <div class="col-sm-3" align="center">

                                            <img src="/Icons/arroz.jfif" class="img-responsive" style="height:100px "
                                                width="150px" alt="Image">
                                            <input type="radio" name="arroz" value="M">
                                            <p style="text-align: center;">Arroz & Feijão R$:17,00</p style="text-align: center;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="Cadastrar"></label>
                                  <div class="col-md-12">
                                    <button id="Cadastrar" name="Cadastrar" class="btnAcesso"
                                    type="Submit"><a href="TelaCompra.html">Adcionar ao carrinho</a></button>
                                  </div>
                              </div>
                                

                                <footer class="container-fluid text-center">
                                    <h4>Gouba </h4>
                                    <h5>Autores: Isaias, Filipe, Ronald</h5>
                                    
                                </footer>
                                <script src="./scripts/CadResponsavel.js"></script>
</body>

</html>