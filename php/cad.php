<?php

include ("conecta.php");

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "INSERT INTO clientes (clinome, cliemail, clisenha)
            VALUES ('$nome', '$usuario', '$senha')";

try {
    $consulta = $link->prepare($sql);
    $consulta->execute();
    header ('location:../login.php');
}
catch(PDOException $ex){
    echo($ex->getMessage());
}

?>