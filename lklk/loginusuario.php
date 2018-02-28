<?php 
include "header.php";


?>      
      

  <br />

    <div class="container">
    <section>
      <div align="center">
    <h1>Bem-vindo a Lojas Lisboa! <p></p><p>Efetue seu login:</p> </h1><hr />
    </div>
    <form method="POST" action="login.php">
    <div class="form-group">
      
      <label for="email">Email : </label>
      <input type="text" name="email" class="form-control form-control-lg" />

      <label for="senha">Senha : </label>
      <input type="password" name="senha" class="form-control form-control-lg" />

    <br />
        <button type="submit" class="btn btn-warning btn-lg">Enviar</button>
    </div>
    </form>
    <P class="text-center text-danger"> 
       
    </section>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>

