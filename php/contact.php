<?php
  include('db-conector.php');

  $nome = utf8_decode($_REQUEST['nome']);
  $sobrenome = utf8_decode($_REQUEST['sobrenome']);
  $email = utf8_decode($_REQUEST['email']);
  $mensagem = utf8_decode($_REQUEST['mensagem']);

  try {
    $sql = "INSERT INTO contato (nome, sobrenome, email, mensagem) VALUES ('$nome', '$sobrenome', '$email', '$mensagem')";

    $query = $pdo->prepare($sql);
    $query->execute();

  } catch (PDOException $ex) {
    echo "Falhou: ".$ex->getMessage(); 
  }
?>