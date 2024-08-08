<?php
include('conexaoBanco.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$resultado = mysqli_query($conexao, "SELECT * FROM usuario");

while($linha = mysqli_fetch_assoc($resultado)){	
if($linha['email'] == $email && $linha['senha'] == $senha){
  session_start();
  $_SESSION['id'] = $linha['id'];
  $_SESSION['email'] = $linha['email'];
  $_SESSION['nome'] = $linha['nome'];
  $_SESSION['senha'] = $linha['senha'];
  $_SESSION['cidade'] = $linha['cidade'];            
  $_SESSION['cep'] = $linha['cep'];        
  $_SESSION['rua'] = $linha['rua'];        
  $_SESSION['numero_casa'] = $linha['numero_casa'];        
  $_SESSION['logado'] = TRUE;
  $_SESSION['carrinho'] = array();
  header('Location: index.php');      
  
}
}

echo ("<script>
        window.alert('Dados incorretos')
        window.location.href='entrar.php';
    </script>");

?>
