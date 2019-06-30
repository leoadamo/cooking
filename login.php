<!DOCTYPE html>
<html lang="pt-br">

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
    <form action="php/sign-in.php" method="post">
      <label for="usuario">Usuário:</label><input type="text" name="usuario" id="usuario">
      <label for="senha">Senha:</label><input type="password" name="senha" id="senha">
      <button class="btn" name="login" value="ok">Enviar</button>
      <p class="clique">Ainda não tem cadastro no Cooking? <a href="cadastro.php">Clique aqui!</a></p>
    </form>
  </div>

  <div class="copy">
    <div class="container">
      <p>Desenvolvido por Leonardo Adamoli - Todos os direitos Reservados.</p>
    </div>
  </div>

</body>

</html>
