<?php
$server = "localhost:3306";//especificar o nº da porta para não dar erro
$username = "root";
$password = "";
$database = "sports";

$conexao = mysqli_connect($server,$username,$password,$database);

if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL.";
    exit;
}

?>
