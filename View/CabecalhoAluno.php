<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $tituloPagina ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
        
        <a><img width=50 height=40 src="Icons/gouba_sem_fundo.png"></a>
      </div>

      <ul class="nav nav-tabs">
        <li><a href="LOGIN">Home</a></li>                
        <li><a href="TelaAluno">Tela Aluno</a></li>                
        <li><a href="#">Sair</a></li>                
        
      </ul>
    </div>
  </nav>
</body>

<div class="container">
<h2><?php echo $tituloPagina ?></h2>