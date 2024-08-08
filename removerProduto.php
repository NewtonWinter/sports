<?php
session_start();

$posicao = $_GET['posicao'];

unset($_SESSION['carrinho'][$posicao]);

echo ("<script>
        window.alert('Item removido!')
        window.location.href='carrinho-de-compras.php';
    </script>");


?>
