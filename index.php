<!DOCTYPE html>
<html lang="pt-br">

<?php 
  include ("php/db-conector.php");
  session_start();
?> 

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no" />
  <title>Cooking - An online catalog for vegans</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="favicon.ico" />
</head>

<body onload='carregaProdutos();'>
  <header class="bg">
    <div class="menu-logo">
      <a href="index.php">
        <img src="img/logo.png" alt="Tomato Logo">
        <h1><img src="img/tomato.png" alt=""></h1>
      </a>
    </div>

    <div class="container">
      <label for="menu-mobile">&#9776;</label>
      <input type="checkbox" id="menu-mobile">

      <nav class="nav-bar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#about-us">Sobre Nós</a></li>
          <li><a href="#prod">Produtos</a></li>
          <li><a href="#contact">Contato</a></li>
          <li><a id=login href="login.php">Login</a></li>
        </ul>
      </nav>

      <div class="intro">
        <h1>Encontre diversos produtos orgânicos para você cuidar do seu bem estar</h1>
        <a href="#prod" class="btn">Confira</a>
      </div>
    </div>
  </header>

  <section id="about-us" class="about">
    <div class="container clearfix">
      <div class="title">
        <h1>Quem Somos</h1>
      </div>

      <div class="ilustration">
        <img src="img/img-1.jpg" alt="Vegan Food">
      </div>

      <div class="content">
        <h2 class="secondary-title">Nosso negócio</h2>
        <p class="text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus molestias, voluptatem doloremque
          quibusdam
          non aperiam eaque, debitis in excepturi tempora odio nisi incidunt dolorum odit. Ab placeat itaque quidem
          illum!</p>
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ratione officiis earum ea molestias
          laboriosam
          asperiores. Ratione omnis maiores impedit iusto dolorem. Nam tempora quia corrupti est maiores voluptates
          esse.</p>

        <a href="#prod" class="btn btn-yellow">Produtos</a>
      </div>

    </div>
  </section>

  <section id="prod" class="products">
    <div class="container clearfix">
      <h1 class="title red">Produtos</h1>

      <div class="presentation">
        <h2 class="tertiary-title">Conheça o tipo de produtos que oferecemos para você</h2>
        <p>Nossa preocupação é oferecer a você uma alimentação saudável.</p>
      </div>

      <!-- Lista de Produtos -->
      <ul id="prodLista">
     
      </ul>
    </div>

    <div class="new-prod">
      <button id="insert" class="btn add">&#43;</button><span>Novo Produto</span>
    </div>  
  </section>

  <section id="contact" class="contact-us">
    <div class="container clearfix">
      <h2 class="title">Contato</h2>

      <div class="contact-icon">
        <img src="img/icon/support.png" alt="Support Icon">
        <p>Preencha o formulário de contato que retornamos para você o mais breve possível.</p>
      </div>

      <div class="form-content">
        <form id="contact-form" method="POST">
          <label for="nome">Nome:</label><input type="text" name="nome" id="nome" required>
          <label for="sobrenome">Sobrenome:</label><input type="text" name="sobrenome" id="sobrenome" required>
          <label for="email">E-mail:</label><input type="text" name="email" id="email" required>
          <label for="mensagem">Mensagem:</label> <textarea name="mensagem" id="mensagem" cols="30" rows="10" required></textarea>
          <button type="submit" class="btn">Enviar</button>
        </form>
      </div>

    </div>
  </section>

  <footer>
    <div class="container clearfix">
      <div class="operation">
        <h4>Horário de Funcionamento</h4>
        <ul>
          <li>
            <p><span>Seg. à Sex.</span> 08:00 às 22:00</p>
          </li>
          <li>
            <p><span>Sáb.</span> 08:00 às 21:00</p>
          </li>
          <li>
            <p><span>Dom.</span> 08:00 às 18:00</p>
          </li>
        </ul>
      </div>

      <div class="minimap">
        <h4>Navegação</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#about-us">Sobre</a></li>
          <li><a href="#prod">Produtos</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
      </div>

      <div class="social">
        <h4>Redes Sociais</h4>
        <ul>
          <li><a href="https://www.facebook.com"><img src="img/icon/facebook.png" alt="Facebook Icon"></a></li>
          <li><a href="https://www.instagram.com"><img src="img/icon/instagram.png" alt="Instagram Icon"></a></li>
          <li><a href="https://www.linkedin.com"><img src="img/icon/linkedin.png" alt="Linkedin Icon"></a></li>
        </ul>
      </div>
    </div>
  </footer>

  <div class="copy">
    <div class="container">
      <p>Desenvolvido por Leonardo Adamoli - Todos os direitos Reservados.</p>
    </div>
  </div>

  <!-- Modal Contato -->
  <div id=contato-modal class="modal-container">
    <div class="modal-content">
      <button class="modal-close">&times;</button>
      <p><span>Obrigado</span> por entrar em contato, retornaremos em seguida.</p>
    </div>
  </div>
  <!-- Fim Modal Contato -->

  <!-- Modal Produto -->
  <div id=produto-modal class="modal-container">
    <div class="modal-content">
      <button class="modal-close">&times;</button>
      <h2>Insira os dados do produto:</h2>
      <form id="prodform" class="register" method="POST">
        <label for="description">Descrição: <input type="text" id="descricao" name="descricao" required></label>
        <label for="marca">Marca: <input type="text" id="marca" name="marca" required></label>
        <label for="category">Categoria: <input type="text" id="categoria" name="categoria" required></label> 
        <label for="price">Preço: <input type="text" id="preco" name="preco" required></label>
        <label for="imagem">Imagem: <input type="text" id="imagem" name="imagem" required></label>
        <label for="texto-alt">Texto Alternativo: <input type="text" id="texto-alt" name="texto-alt" required></label>
        <button id="register-btn" class="btn" type="submit">Salvar</button>
      </form>
    </div>
  </div>
  <!-- Fim Modal Produto -->

  <!-- JavaScript here -->
  <script type="text/javascript" src="js/serialize.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>