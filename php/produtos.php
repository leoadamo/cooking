<?php

  include('php/db-conector.php');
  
  try {
    $sql = "SELECT * FROM produtos";

    $query = $pdo->prepare($sql);
    $query->execute();
    $vetor = $query->fetchAll();
  } catch (PDOException $ex) {
    echo($ex->getMessage());
  }
 
  function listaProdutos($vetor) {
    foreach ($vetor as $produto) {
      $html = '<li class="grid">
                <img src="img/'.$produto['proimg'].'" alt="'.$produto['proimgdesc'].'">
                <h3>'.$produto['pronome'].' - '.$produto['promarca'].'</h3>
                <p>R$ '.$produto['propreco'].'</p>
                <div class="text-field">
                  <span>Qtde.</span><input class="quantity-input" type="number" rows="1" value="1">
                </div>
                <a href="#" class="btn-buy"><span></span></a>
              </li>';
      echo utf8_encode($html);       
    }
  }
?>