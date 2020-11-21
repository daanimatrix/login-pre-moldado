<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "";
$bancodedado = "mafiscred1";

global $pdo;

try{
        // orientada a objetos com pdo
        $pdo = new PDO("mysql:dbname=".$bancodedado."; host=".$localhost,$user,$passw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$sql = $pdo->query("SELECT * FROM usuarios");
        // $sql->execute();  

}catch(PDOException $erro){

    echo "ERRO: ".$erro->getMessage();
    exit;

}







?>