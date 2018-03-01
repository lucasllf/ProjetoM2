
 <?php include "header.php" ?>
    <section>
      <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/a1.jpg" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/a2.png" alt="Second slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/a3.jpg" alt="Third slide">
    </div>

     <div class="carousel-item">
      <img class="d-block w-100" src="imagens/a4.jpg" alt="Third slide">
    </div>

     <div class="carousel-item">
      <img class="d-block w-100" src="imagens/a5.png" alt="Third slide">
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
        
      <h1 align="center">A sua loja!</h1>
    <!-- Aqui inicia o card -->



  <?php 
  include "conexao.php";
?>
<div class="container">
<div class="row">
  
<?php 

  $sql = "SELECT * FROM produto order by id desc limit 3";

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {  
  while($row = $result -> fetch_assoc())
  {
    

?>


  <div align="center" style="width: auto; margin: 50px;">
    <img class="card-img-top col-md4" src="<?php echo $row['foto']; ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['nome']; ?></h5>
       <h5 class="card-title"><?php echo "R$: ".$row['preco']; ?></h5>
      <p class="card-text"></p>
      <a href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Mais Informaçoes</a>
    </div>
  </div>



<?php 
       }
  }     

 ?>

  </div>
</div>







    


      </div>    
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <p></p>

     <footer>
      <p>Create by: Lucas L Freitas</p>
    </footer>

  </body>
