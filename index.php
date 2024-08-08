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
        
        <title>Sports</title>
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

          .row, .col { border: 1px solid black }

          #midias {
            height: 60px;
          }
          
          .b {height: 70px; background-color: black}

          .itens { 
            height: 50px; 
            background-color: grey; 
            padding: 5px;
          }          

          @media (max-width: 400px) { 
            .desaparecer {display: none} 
            .bloco {display: block; margin-top: 3px}
            .a {height: 200px; width: 100%; margin: 2px}
            .c {height: 380px}
          }
        </style>

      </head>
      <body>
      
      <!-- ************************************************************************************************* -->      
      <!-- Cabeçalho! Confere se existe sessão -->
	
	<div class="container-fluid b a">
          <a href="index.php"><img id="logoCentauro" src="imagens/logoSports.jpg" alt="logo Centauro"></a>
          
          <div style="text-align:right">
            
            <?php 
              error_reporting(0);
              ini_set(“display_errors”, 0 );
              session_start();
       	      if(!$_SESSION['id']) {  
                echo '<span><a  class="entre" href="entrar.php">Entre</a> ou <a  class="entre" href="cadastrar.php">Cadastre-se</a></span>';
              }else{
                echo '<span class="entre">';
                echo "Seja bem vindo " .$_SESSION['nome'];
                echo '<br>';
                echo '<a href="encerrarSessao.php">Sair</a>';
                echo " - ";
                echo '<a href="excluirUsuario.php">Excluir conta</a>';
                echo " - ";                
                echo '<a href="carrinho-de-compras.php">Carrinho</a>';                
                echo '</span>';
              }        
            ?> 
            
          </div>
        </div>
                   
      <!-- ************************************************************************************************* -->                         
                   
       
        <div id="frete" class="container-fluid desaparecer" style="height: 50px; background-color: white; font-size: 20px">
          <img id="car" src="data:image/png;base64,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" alt="">
          <span style="margin-left: 400px">
            <span class="badge badge-secondary" style="height: 30px; width: 120px; background-color: red"><strong>FRETE GRÁTIS</strong></span> 
            PARA <strong>TODO O BRASIL</strong> SEM VALOR MÍNIMO DE COMPRA
          </span>
        </div>  
      
      <div id="carouselExampleIndicators" class="carousel slide desaparecer" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
        <div class="carousel-inner">
          <div class="conteiner-fluid carousel-item active" style="height: 150px; background-color: black; text-align: center">
            <span style="color: white; font-size: 20px; display: block"><strong>MARCAS</strong></span>
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/01-nike.png" alt="">
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/02-adidas.png" alt="">
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/03-mizuno.png" alt="">
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/15-umbro.png" alt="">
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/06-puma.png" alt="">
          </div>           
          <div class="conteiner-fluid carousel-item" style="height: 150px; background-color: black; text-align: center">
            <span style="color: white; font-size: 20px; display: block"><strong>MARCAS</strong></span>
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/05-oxer.png" alt="">
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/10-underarmour.png" alt="">
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/07-oakley.png" alt="">
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/12-lacoste.png" alt="">
            <img src="https://imgcentauro-a.akamaihd.net/home-nova/marcas/v2/bf/13-reebok.png" alt="">
          </div>  
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        
      <div class="container-fluid" style="margin-top: 20px">
        <div class="row" style="text-align: center; background-color: black; color: white; font-size: 20px; padding-left: 450px">    
          <div class="col-6"> 
            <strong>OFERTAS DO DIA</strong>
          </div>    
        </div>
        <div class="row">
          <div class="col">            
              <a href="pagina-luva-boxe.php"><img src="imagens/index/luva-boxe.jpg">
              Luvas de Boxe Everlast</a><br>
              <s>R$280,00</s>R$200,00<br>
          </div>
          <div class="col">
              <a href="pagina-capacete.php"><img src="imagens/index/capacete.jpg">
              Capacete para Bike Spin Unicórnio - Feminino</a><br>
              <s>R$120,00</s>R$80,00<br> 
          </div>
          <div class="col">
              <a href="pagina-bone.php"><img src="imagens/index/bone.jpg">
              Boné Vans Aba Reta</a><br>
              <s>R$100,00</s>R$60,00<br>
          </div>
          <div class="col">
              <a href="pagina-oculos.php"><img src="imagens/index/oculos.jpg">
              Óculos de Sol Unissex Hang Loose</a><br>
              <s>R$210,00</s>R$150,00<br>
          </div>
          <div class="col">
              <a href="pagina-relogio.php"><img src="imagens/index/relogio.jpg">
              Relógio digital X Games</a><br>
              <s>R$480,00</s>R$350,00<br>
          </div>          
        </div>
       
        <div class="row">
          <div class="col">            
              <a href="pagina-mochila.php"><img src="imagens/index/mochila.jpg">
              Mochila Infantil Mizuno Energy</a><br>
              <s>R$80,00</s>R$50,00<br>
          </div>
          <div class="col">
              <a href="pagina-halter.php"><img src="imagens/index/halter.jpg">
              Halter 5kg</a><br>
              <s>R$100,00</s>R$60,00<br>
          </div>
          <div class="col">
              <a href="pagina-trampolim.php"><img src="imagens/index/trampolim.jpg">
              Trampolim Polimet Semi Pro</a><br>
              <s>R$750,00</s>R$600,00<br>
          </div>
          <div class="col">
              <a href="pagina-patins.php"><img src="imagens/index/patins.jpg">
              Patins Oxer Darkness Gold</a><br>
              <s>R$580,00</s>R$450,00<br>
          </div>
          <div class="col">
              <a href="pagina-prancha.php"><img src="imagens/index/prancha.jpg">
              Prancha de Bodyboard Mormaii Fun</a><br>
              <s>R$180,00</s>R$110,00<br>
          </div>          
          
          <div class="container-fluid" style="margin-top: 20px">
        <div class="row" style="text-align: center; background-color: black; color: white; font-size: 20px; padding-left: 450px">    
          <div class="col-6"> 
            <strong>Homens</strong>
          </div>    
        </div>
        <div class="row">
          <div class="col">            
              <a href="pagina-tenis-nike-homem.php"><img src="imagens/homens-calcados/tenis-nike.jpg">
              Tênis Nike Revolution</a><br>
	      R$100,00<br>
          </div>
          <div class="col">
              <a href="pagina-tenis-fila.php"><img src="imagens/homens-calcados/tenis-fila.jpg">
              Tênis Fila KR5</a><br>
              R$110,00<br> 
          </div>
          <div class="col">
              <a href="pagina-camisa-polo-brasil.php"><img src="imagens/homens-roupas/camisa-polo-brasil.jpg">
              Camisa Polo Liga Retrô Brasil</a><br>
              R$150,00<br>
          </div>
          <div class="col">
              <a href="pagina-camisa-polo-psg.php"><img src="imagens/homens-roupas/camisa-polo-psg.jpg">
              Camisa Polo PSG Sportswear</a><br>
              R$180,00<br>
          </div>
          
          <div class="container-fluid" style="margin-top: 20px">
        <div class="row" style="text-align: center; background-color: black; color: white; font-size: 20px; padding-left: 450px">    
          <div class="col-6"> 
            <strong>Mulheres</strong>
          </div>    
        </div>
        <div class="row">
          <div class="col">            
              <a href="pagina-sandalia.php"><img src="imagens/mulheres-calcados/sandalia.jpg">
              Sandália Crocs Crocband</a><br>
	      R$200,00<br>
          </div>
          <div class="col">
              <a href="pagina-tenis-adidas.php"><img src="imagens/mulheres-calcados/tenis-adidas.jpg">
              Tênis adidas Lite Racer 3.0</a><br>
              R$340,00<br> 
          </div>
          <div class="col">
              <a href="pagina-camiseta-puma-feminina.php"><img src="imagens/mulheres-roupas/camiseta-puma-feminina.jpg">
              Camiseta Puma Manga Curta Essentials Logo</a><br>
              R$90,00<br>
          </div>
          <div class="col">
              <a href="pagina-maio-puma.php"><img src="imagens/mulheres-roupas/maio-puma-feminino.jpg">
              Maiô Puma</a><br>
              R$100,00<br>
          </div>
          
        </div>

 
        </div>
      </div>
       
      <div class="container-fluid desaparecer" style="background-color: black; height: 100px; margin-top: 10px; position: relative">
      </div>       

      </body>
    </html>
           
