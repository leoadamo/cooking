<?php

  include ("db-conector.php");
	session_start();

  if(isset($_REQUEST['login'])){ 
    if($_REQUEST['login'] == 'ok') {
      @$usuario = $_REQUEST['usuario'];
      @$senha = $_REQUEST['senha'];

      $sql = "SELECT * FROM clientes WHERE cliemail = '$usuario' AND clisenha = '$senha'";
      $query = $pdo->prepare($sql);
      $query->execute();
      $vetor = $query->fetchAll();

      if (count($vetor) > 0) {
        $_SESSION['usuario'] = $usuario;
        header ('location:../index.php');
      }
      else {
        echo("Usuário ou senha inválido(s)");
        header ('location:../login.php');
      }
    }
  }

  // if ($_REQUEST['logout'] == 'sim') {
  //     session_destroy();
  //     header('location:../index.php');
  // }
?>