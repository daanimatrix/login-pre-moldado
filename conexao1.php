<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$bancodedado = "mafiscred1";


$conectar = mysql_connect($localhost,$user,$passw,$bancodedado);

$sql =  mysql_query($conectar, "SELECT * from usuarios");

echo mysqli_num_rows($sql);
?>