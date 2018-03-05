<?php 
include "conexao.php";
session_start();

  ?>
  <html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="imagens/icone1.png" />

    <title>Lojas Lisboa</title>
    <style type="text/css">
        html{
          margin: 10px auto;
        }
      header{
        margin: 10px auto 100px;
        text-align: center;
        background-color: #000;
        margin-bottom: 10px;
        padding: 5px;
        color: #ffd300;
      }
      footer{
        margin: 10px auto;
        text-align: center;
        border-top: 1px solid;
        border-bottom: 1px solid;
        font-weight: bold;
        background-color: #fff;
        color: #000;
      }
      nav div h3{
        font-style: italic;
         font-weight: bold;
      }
      nav div a{
        color: #ffd300;
      }
      .login{
        margin-left: 50px
      }
      footer{
        background-color: #000;
        color: #ffd300;        
      }
      h5 {
        color: #ffd300;
      }
    </style>
  </head>
  <body>
    <header class="container">
      
    
   
<nav class="navbar navbar-dark bg-black">
      <div style="float:left;width:225px;"><a href="paginainicial.php"><img style="margin:0;padding:0;float:left;" src="imagens/icone1.png" width="50" height="50" class="" alt=""></a>
            
               <h3 style="float:right;">Lojas Lisboa</h3></div>
                
                    <nav class="navbar navbar-dark justify-center-between">

               
                                             
              

      <div class="container" style="margin-left: 170px; margin-top: 0px">    
          <div style="margin-right: 190px; margin-top: 0px;">
            <form class="form-inline my-0 my-6" align="" action="busca.php" method="POST">
                          <input class="form-control mr-sm-2" name="pesquisar" type="search" placeholder="Digite sua pesquisa" aria-label="Search">
                          <button class="btn btn-warning my-2 my-sm-2" type="submit">Pesquisar</button>         

            </form>  
          </div>



         <a class="navbar-brand" href="">
         <?php         
         $nome=isset($_SESSION['nome']) ? $_SESSION['nome'] : "";
         if($nome!="")
         {
          echo "Olá, ".$nome."!"; 
         }
         else
         {
         ?>

          <div class="row">
            <div class="login" style="margin: 10px 10px">
              <h5>Faça</h5>
              
            <a href="loginusuario.php" class="h5">Login </a>
            
              <h5>ou</h5>
            <a href="cadastro.php" class="h5">Cadastre-se </a>                       
            </div>           
          </div>

         <?php
         }
          ?>
              <div style="float:left;width:20px;"><a href="carrinho.php"><img style="margin:0;padding:0;float:left;" src="imagens/icone3.png" width="50" height="50" class="" alt=""></a>
   </nav>    
         </nav>

    </header>

  <hr>
    <div class="container">
      <div align="center" style="">
        
  <div class="btn-group" role="group" aria-label="Basic example">
  <a href="games.php" type="button" class="btn btn-warning">Games</a>
  <a href="eletronico.php" type="button" class="btn btn-warning">Eletrônicos</a>
  <a href="informatica.php" type="button" class="btn btn-warning">Informatica</a>
  <a href="celular.php" type="button" class="btn btn-warning">Celulares</a>
  <a href="livro.php" type="button" class="btn btn-warning">Livros</a> 
  <a href="roupa.php" type="button" class="btn btn-warning">Roupas</a>

      
                        </div>
</div>
    <hr/>
      </div>
</html>
  

