<!DOCTYPE html>
<html lang="pt-br">

<?php 
  include("php/conecta.php");
  session_start();
?> 

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no" />
  <title>Cooking - An online catalog for vegans</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="favicon.ico" />
</head>

<body>
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
        <h1>Encontre diversos produtos orgânicos para você cuidar do seu bem estar.</h1>
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

      <div class="grid">
        <img src="img/cacau-nutty.png" alt="Cacau Nutty">
        <h3>Cacau Nutty - 210g Bioporã</h3>
        <p>R$ 22,90</p>
        <div class="text-field">
          <span>Qtde.</span><input class="quantity-input" type="number" rows="1" value="1">
        </div>
        <a href="#" class="btn-buy"><span></span></a>
      </div>

      <div class="grid">
        <img src="img/snack-alga.png" alt="Snack Alga">
        <h3>Snack Alga - 5g Sea's Gift</h3>
        <p>R$ 4,90</p>
        <div class="text-field">
          <span>Qtde.</span><input class="quantity-input" type="number" rows="1" value="1">
        </div>
        <a href="#" class="btn-buy"><span></span></a>
      </div>

      <div class="grid">
        <img src="img/feijao-organico.png" alt="Espaguete de Feijão Orgânico">
        <h3>Espaguete de Feijão Orgânico - 200g Fit Food</h3>
        <p>R$ 19,90</p>
        <div class="text-field">
          <span>Qtde.</span><input class="quantity-input" type="number" rows="1" value="1">
        </div>
        <a href="#" class="btn-buy"><span></span></a>
      </div>

      <div class="grid">
        <img src="img/hamburguer-soja.png" alt="Hamburguer de Soja">
        <h3>Hamburguer de Soja Sabor Carne Branca 110g - Sora</h3>
        <p>R$ 22,90</p>
        <div class="text-field">
          <span>Qtde.</span><input class="quantity-input" type="number" rows="1" value="1">
        </div>
        <a href="#" class="btn-buy"><span></span></a>
      </div>

      <div class="grid">
        <img src="img/queijo-vegano.png" alt="Queijo Vegano Minas Padrão">
        <h3>Queijo Vegano de Castanha de Cajú 250g - Vida Veg</h3>
        <p>R$ 14,90</p>
        <div class="text-field">
          <span>Qtde.</span><input class="quantity-input" type="number" rows="1" value="1">
        </div>
        <a href="#" class="btn-buy"><span></span></a>
      </div>

      <div class="grid">
        <img src="img/refrigerante-natural.png" alt="Refrigerante Natural">
        <h3>Refrigerante Natural - 269ml Gloops</h3>
        <p>R$ 4,90</p>
        <div class="text-field">
          <span>Qtde.</span><input class="quantity-input" type="number" value="1">
        </div>
        <a href="#" class="btn-buy"><span></span></a>
      </div>
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
        <form action="">
          <label for="nome">Nome:</label><input type="text" name="nome" id="nome" required>
          <label for="sobrenome">Sobrenome:</label><input type="text" name="sobrenome" id="sobrenome" required>
          <label for="email">E-mail:</label><input type="text" name="email" id="email" required>
          <label for="mensagem">Mensagem:</label> <textarea name="mensagem" id="mensagem" cols="30" rows="10"
            required></textarea>
          <button class="btn">Enviar</button>
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
          <li><a href="index.html">Home</a></li>
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

  <!-- JavaScript here -->
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>