<?php 
include "header.php";
 ?>


 <?php 
 $pesquisar = $_POST['pesquisar'];
 $sql = ("SELECT * FROM produto WHERE  (nome LIKE '%".$pesquisar."%') OR (categoria LIKE '%".$pesquisar."%') OR (preco LIKE '%".$pesquisar."%') ");

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {  
  while($row = $result -> fetch_assoc())
  {
    

?>
 <div  style="width: 20rem;">
      <div class="row"> 
    <img class="card-img-top col-md4" src="<?php echo $row['foto']; ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['nome']; ?></h5>
       <h5 class="card-title"><?php echo $row['preco']; ?></h5>
      <p class="card-text"></p>
      <a href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Mais Informaçoes</a>
      </div>
    </div>
  </div>
  <?php   
 }
}
 ?>