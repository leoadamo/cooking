<?php

  include ("db-conector.php");
  session_start();

  $html = '<div id=login-modal class="modal-container">
            <div class="modal-content">
              <button class="modal-close">&times;</button>
              <p><span>Dados incorretos</span> por favor, verifique se o seu login ou senha estão corretos.</p>
            </div>
          </div>';     

  $script = '<script type="text/javascript" src="js/login.js"></script>';    

  if(isset($_REQUEST['login'])) { 
    if($_REQUEST['login'] == 'ok') {
      @$usuario = $_REQUEST['usuario'];
      @$senha = $_REQUEST['senha'];

      $sql = "SELECT * FROM clientes WHERE cliemail = '$usuario' AND clisenha = '$senha'";
      $query = $pdo->prepare($sql);
      $query->execute();
      $vetor = $query->fetchAll();

      if (count($vetor) > 0) {
        $_SESSION['usuario'] = $usuario;
        header ('location:../cooking/index.php');
      }
    }
  }
?>