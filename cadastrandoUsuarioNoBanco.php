<?php
include('conexaoBanco.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numerocasa = $_POST['numerocasa'];

$result = mysqli_query($conexao, "SELECT COUNT(*) FROM usuario WHERE email = '{$email}'");
$row = $result->fetch_row();
if($row[0] > 0){
  echo ("<script>
        window.alert('Email já cadastrado!')
        window.location.href='cadastrar.php';
    </script>");
}else{
  mysqli_query($conexao, "INSERT INTO usuario (nome,cep,cidade,email,senha,numero_casa,rua) VALUES ('".$nome."', '".$cep."', '".$cidade."', '".		$email."', '".$senha."', '".$numerocasa."', '".$rua."')");
  echo ("<script>
        window.alert('Usuário cadastrado com sucesso!')
        window.location.href='entrar.php';
    </script>"); 
}

?>
