<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "inventario";
$port = "3306";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn){
    echo "Conexao falhou";
} 

