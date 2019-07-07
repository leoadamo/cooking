<?php
  include('db-conector.php');

  $nome = $_REQUEST['descricao'];
  $marca = $_REQUEST['marca'];
  $categoria = $_REQUEST['categoria'];
  $preco = $_REQUEST['preco'];
  $imagem = $_REQUEST['imagem'];
  $alt = $_REQUEST['texto-alt'];

  try {
    $sql = "INSERT INTO produtos (pronome, promarca, procateg, propreco, proimg, proimgdesc) VALUES ('$nome', '$marca', '$categoria', '$preco', '$imagem', '$alt')";
    
    $query = $pdo->prepare($sql);
    $query->execute();
    
  } catch (PDOException $ex) {
    echo($ex->getMessage());
  }
?>