<?php

  include('db-conector.php');

  $sql = "SELECT * FROM produtos";

  $query = $pdo->prepare($sql);
  $query->execute();
  $vetor = $query->fecthAll();

  foreach ($vetor as $produto) {
    $html = '<li class="grid">
              <img src="img/'.$produto['proimg'].'" alt="'.$produto['proimgdesc'].'">
              <h3>'.$produto['pronome'].'</h3>
              <p>'.$produto['propreco'].'</p>
              <div class="text-field">
                <span>Qtde.</span><input class="quantity-input" type="number" rows="1" value="1">
              </div>
              <a href="#" class="btn-buy"><span></span></a>
            </li>';
  }

?>