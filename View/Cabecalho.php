<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="scripts/Principal.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--<?phpheader(<<content-type:../Icons/gouba_sem_fundo.png>>) ?>-->
        <a><img width=50 height=40 src="Icons/gouba_sem_fundo.png"></a>
      </div>

      <ul class="nav nav-tabs">
        <li><a href="Principal.html">Home</a></li>        
        <li><a href="CadEscola.php">Cadastrar Escola</a></li>        
        
      </ul>
    </div>
  </nav>

<div class="container">
  <h2><?php echo $tituloPagina ?></h2>