<?php
include('conexaoBanco.php');
error_reporting(0);
ini_set(“display_errors”, 0 );
session_start();

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');  
require_once('src/Exception.php');  
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;  
use PHPMailer\PHPMailer\Exception;

#*****************************************************************************************************************************
#Corpo da mensagem

if(empty($_SESSION['carrinho'])){
  echo ("<script>
        window.alert('O carrinho está vazio! Adicione itens para criar um pedido!')
        window.location.href='carrinho-de-compras.php';
    </script>");
}else{    
  
  $dados_usuario = "DADOS DO USUÁRIO <br> Nome: {$_SESSION['nome']} <br> Email: {$_SESSION['email']} <br> Cidade: {$_SESSION['cidade']} <br> Rua: {$_SESSION['rua']} <br> Número da casa: {$_SESSION['numero_casa']} <br> CEP: {$_SESSION['cep']} <br>";
  
  $valor_total = 0;
  $dados_todos_produtos;
  
  foreach($_SESSION['carrinho'] as $indice => $item) { # $item corresponde ao id do produto, recebido pelo método get
                
    $resultado = mysqli_query($conexao, "SELECT * FROM produto WHERE id = '{$item}'");
    
    while($linha = mysqli_fetch_assoc($resultado)){	
      $nome_produto = $linha['nome'];
      $caminho_imagem_produto = $linha['caminho_imagem'];
      $valor_produto = $linha['valor'];
    }  
    
    $valor_total = $valor_total + $valor_produto;
    
    $dados_produto = "Produto: {$nome_produto} - Valor: R$ {$valor_produto} <br>";   

    $dados_todos_produtos .= $dados_produto;
  }
  
  $valor_total = number_format($valor_total, 2, '.', '');

  $relatorio_final = $dados_usuario ."<br> DADOS DO PEDIDO <br>" .$dados_todos_produtos ."<br> VALOR TOTAL: R$ " .$valor_total;
 
  #******************************************************************************************************
  #Envio do Email
  
  $email = new PHPMailer(true);
  
  $email->isSMTP();
  $email->Host = 'smtp.gmail.com';
  $email->SMTPAuth = true;
  $email->Username = 'sports123brazil@gmail.com';
  $email->Password = 'SPO12braz**';
  $email->Port = 587;
  
  $email->setFrom('sports123brazil@gmail.com');
  $email->addAddress($_SESSION['email']);
  
  $email->isHTML(true);
  $email->Subject = "Relatorio - Pedido Loja Sports";
  $email->Body = $relatorio_final;
  $email->AltBody = $relatorio_final;     
 
  if($email->send()){      
    echo ("<script>
        window.alert('O relatório do pedido foi enviado para o seu email!')
        window.location.href='carrinho-de-compras.php';
    </script>");
  }else{
    echo ("<script>
        window.alert('Falha ao enviar email!')
        window.location.href='carrinho-de-compras.php';
    </script>");
  }
}


?>
