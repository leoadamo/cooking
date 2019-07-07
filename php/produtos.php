<?php

  include('db-conector.php');
  
  $sql = "SELECT * FROM produtos";

  try {
    $query = $pdo->prepare($sql);
    $query->execute();
    $dados = array();
    while ($registro = $query->fetch(PDO::FETCH_ASSOC)) {
      array_push($dados, $registro);
    }
    echo(json_encode($dados));

  } catch (PDOException $ex) {
    echo($ex->getMessage());
  }
?>