<?php 
include "header.php";
include "car.php";
 ?>
<div class="container">
<div class="row">
<?php 


 $sql = "SELECT * FROM produto WHERE categoria LIKE 'game'";

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {  
  while($row = $result -> fetch_assoc())
  {
    

?>
<div class="row">
  <div class="container" style="width: auto; margin: 80px;">
    <img class="card-img-top col-md5" src="<?php echo $row['foto']; ?>" alt="Card image cap">
    <div class="card-body">
      <div align="center">
      <h5 class="card-title"><?php echo $row['nome']; ?></h5>
       <h5 class="card-title"><?php echo $row['preco']; ?></h5>
      <p class="card-text"></p>
       <a href="carrinho.php?acao=add&id=<?php echo $row['id']?>" class="btn btn-warning">Add Carrinho</a>
      </div>
    </div>
  </div>
  </div>
<?php   
 }
}
 ?>

 