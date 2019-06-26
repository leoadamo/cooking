<!DOCTYPE html>
<html lang="pt-br">

<?php
  include ("php/conecta.php");
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no" />
  <title>Cooking - An online catalog for vegans</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/login.css" />
  <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="bg">
  <header>
    <div class="menu-logo">
      <a href="index.php">
        <img src="img/logo.png" alt="Tomato Logo">
        <h1><img src="img/tomato.png" alt=""></h1>
      </a>
    </div>
  </header>

  <div class="form-content">
    <h1 class="title">Login</h1>
    <form action="php/cad.php" method="post">
      <label for="nome">Nome:</label><input type="text" name="nome" id="nome">
      <label for="usuario">Usuário:</label><input type="text" name="usuario" id="usuario">
      <label for="senha">Senha:</label><input type="password" name="senha" id="senha">
      <button class="btn">Enviar</button>
    </form>
  </div>

  <div class="copy">
    <div class="container">
      <p>Desenvolvido por Leonardo Adamoli - Todos os direitos Reservados.</p>
    </div>
  </div>

</body>

</html>
