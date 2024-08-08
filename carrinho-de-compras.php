    <!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-            MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
        
        <title>Carrinho de compras</title>
        <meta charset="utf-8">

        <style>
          #logoCentauro {
            height: 30px;
            margin-top: 17px;                 
            float: left;
            margin-right: 100px;
          }

          .entre {
            color: white; 
            font-size: 20px;
          }

          .dropdown-item:hover {background-color: blue}
        </style>

      </head>
      

        <style>
          #logoCentauro {
            height: 30px;
            margin-top: 17px;                 
            float: left;
            margin-right: 100px;
          }

          .entre {
            color: white; 
            font-size: 20px;
          }

          .dropdown-item:hover {background-color: blue}

          #car {
            height: 40px;
            margin: 5px;
          } 

          #frete:hover #car{
            transform: translate(1300px,0px);
            transition-duration: 2.5s;
          }

          #midias {
            height: 60px;
          }

          #bolaFutsal {
            height: 480px;
          }

          .zoom {
    	    overflow: hidden;
          }

          .zoom img {
            max-width: 100%;
	    -moz-transition: all 0.3s;
	    -webkit-transition: all 0.3s;
	    transition: all 0.3s;
          }

          .zoom:hover #bolaFutsal {
	    -moz-transform: scale(2.0);
	    -webkit-transform: scale(2.0);
	    transform: scale(2.0);
          }
          
          .b {height: 70px; background-color: black}


          @import url('https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap');
        </style>

      </head>
      <body>

      <!-- ************************************************************************************************* -->      
      <!-- Cabeçalho! Confere se existe sessão -->
	
	<div class="container-fluid b a">
          <a href="index.php"><img id="logoCentauro" src="imagens/logoSports.jpg" alt="logo Centauro"></a>
          
          <div style="text-align:right">
            
            <?php 
              include('conexaoBanco.php');
              error_reporting(0);
              ini_set(“display_errors”, 0 );
              session_start();
       	      if(!$_SESSION['id']) {  
                echo '<span><a  class="entre" href="entrar.php">Entre</a> ou <a  class="entre" href="cadastrar.php">Cadastre-se</a></span>';
              }else{
                echo '<span class="entre">';
                echo "Seja bem vindo " .$_SESSION['nome'];
                echo '<br>';
                echo '<a href="encerrarSessao.php">Sair </a>';
                echo " - ";
                echo '<a href="excluirUsuario.php">  Excluir conta</a>';
                echo '</span>';
              }        
            ?> 
            
          </div>
        </div>
                   
      <!-- ************************************************************************************************* -->              
       
        <div id="frete" class="container-fluid" style="height: 50px; background-color: white; font-size: 20px">
          <img id="car" src="data:image/png;base64,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" alt="">
          <span style="margin-left: 400px">
            <span class="badge badge-secondary" style="height: 30px; width: 120px; background-color: red"><strong>FRETE GRÁTIS</strong></span> 
            PARA <strong>TODO O BRASIL</strong> SEM VALOR MÍNIMO DE COMPRA
          </span>
        </div>  
      
        <div style="background-color: black"><h1>Carrinho de compras</h1></div>
      
        <div>
        
          <?php
            if($_GET['id']){ 		
              array_push($_SESSION['carrinho'], $_GET['id']);
              echo ("<script>
                window.location.href='carrinho-de-compras.php';
                </script>");
            }
            
            $valor_total = 0;
            
            if(empty($_SESSION['carrinho'])){
              echo "<span>O carrinho está vazio</span>";
            }else{
              foreach($_SESSION['carrinho'] as $indice => $item) { # $item corresponde ao id do produto, recebido pelo método get
                
                $resultado = mysqli_query($conexao, "SELECT * FROM produto WHERE id = '{$item}'");
                while($linha = mysqli_fetch_assoc($resultado)){	
                  $nome_produto = $linha['nome'];
                  $caminho_imagem_produto = $linha['caminho_imagem'];
                  $valor_produto = $linha['valor'];
                }  
                
                $valor_total = $valor_total + $valor_produto;
                
                echo '<nav class="navbar bg-body-tertiary bg-dark">';
                  echo '<div class="container-fluid">';
                    echo '<a class="navbar-brand">';
                      echo "<img src='$caminho_imagem_produto' width='60' height='40' class='d-inline-block align-text-top'>";
                      echo '<span style="color: white" class="navbar-text">';
                        echo $nome_produto;
                      echo "</span>";
                    echo "</a>";
                  echo "<div>";
                    echo '<span style="color: white" class="navbar-text">';
                      echo "R$ " .$valor_produto;
                    echo "</span>";
                    echo "<a href='removerProduto.php?posicao=$indice'> Remover</a>";
                  echo "</div>";
                echo "</div>";
              echo "</nav>";
              echo "<br>";       
             }
           }   
          ?>
        
        </div>
        
        <div>
          <?php
            $valor_total = number_format($valor_total, 2, '.', '');
            echo "<span style='font-size: 50'>Valor Total: R$ $valor_total</span>";
          ?>
        </div>
        
        <div>
          <?php
            echo "<a href='index.php'><button>Continuar comprando </button></a> <a href='criarPedido.php'><button> Finalizar pedido</button></a>"
          ?>
        </div>
        
      </body>
    </html>
           
