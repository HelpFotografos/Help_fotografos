<!DOCTYPE html>

<html>
<head>
    <title>Help! Fotógrafos</title>
    <meta charset="utf-8">
    <link rel="icon" type="imagem/png" href="logos/camera_preta.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="w3.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<style>
.collapse{
    box-sizing: border-box;
    width: 90%;
  }
  </style>

        <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <href="#myPage"><class="logo">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="w3.html"><img src="logos/camera_vermelha.png" width="30"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">ENTRAR</a></li>
          <div class="w3-dropdown-hover">
        <li><a><div class="drop_menu">CADASTRO</div></a></li>    
          <div class="w3-dropdown-content w3-bar-block w3-border">
             <a href="cadastroCliente.html" class="w3-bar-item w3-button ">Cadastro Cliente</a>
             <a href="cadastroFotografo.html" class="w3-bar-item w3-button">Cadastro Fotógrafo</a>
      </ul>
    </div>
  </div>
</nav>

    	<div class="loginbox">
    	<h1>Login aqui</h1>

<?php
require_once('config.php');

try {
  if (isset($_POST['submit'])) {
    $query = 'SELECT nome_usuario, nome_completo, email, cod_usuario, cod_perfil FROM cadastro WHERE nome_usuario=:usuario AND senha=:senha';

    $submitData = $connection -> prepare($query);

    $nome_usuario = isset($_POST['nome_usuario']) ? trim(strip_tags(htmlspecialchars($_POST['nome_usuario']))) : '';
    $senha = isset($_POST['senha']) ? trim(strip_tags(htmlspecialchars($_POST['senha']))) : '';

    $submitData -> bindParam(':usuario', $nome_usuario);
    $submitData -> bindParam(':senha', $senha);

    // executa a query
    $submitData -> execute();

    // conta a quantidade de linhas que foi atingida
    $userAmount = $submitData -> rowCount();
    
    // usa o fetch para pegar todos os usuários com dados correspondentes
    $user = $submitData -> fetch(PDO::FETCH_ASSOC);

    if ($userAmount > 0) {
      session_start();

      $_SESSION['isLogged'] = true;
      $_SESSION['nome_usuario'] = $user['nome_usuario'];
      $_SESSION['nome_completo'] = $user['nome_completo'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['cod_usuario'] = $user['cod_usuario'];
      $_SESSION['cod_perfil'] = $user['cod_perfil'];

      header('Location: pag_perfis.php');
    } else {
      print "<p>Usuário não cadastrado</p>";
    }
  }
} catch (PDOException $error) {
  print 'Conexão falhou! ' . $error -> getMessage();
}
?>

    	<form action="login.php" method="post">
    		<p>Nome de Usuário</p>
    		<input type="text" name="nome_usuario" placeholder="Digite seu nome de usuário" required="">
    		<p>Senha</p>
    		<input type="password" name="senha" placeholder="Digite sua senha" required="">
    		<input type="submit" name="submit" value="Login">
    		<a href="#">Perdeu sua senha?</a><br>
    		<a href="cadastrocliente.html">Não tem uma conta?</a>
    	</div>
    	</div>
    </body>
</html>


    
    
