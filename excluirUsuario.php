<?php
include('conexaoBanco.php');

session_start();

$id = $_SESSION['id'];
$sql = "DELETE FROM usuario WHERE id='$id'"; 
mysqli_query($conexao,$sql);

session_destroy();
header('Location: index.php');

?>
