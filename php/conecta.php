<?php

$user = "root";
$senha = "";

try{
    $aux = 'mysql:host=localhost;dbname=cadastro;';
    $link = new PDO($aux, $user, $senha,
                array(
                    PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => false
                )
            );
    //echo("Conexão realizada com sucesso!<br>");
    }
catch(PDOException $ex){
    echo("Deu erro! <br>". $ex->getMessage());
}

?>