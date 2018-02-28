<?php 
include "header.php";
?>
<div class="container">
<div class="row">
<?php 


 $sql = "SELECT * FROM produto WHERE categoria LIKE 'celular'";

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {  
  while($row = $result -> fetch_assoc())
  {
    

?>
<div align="row">
  <div class="container" style="width: auto; margin: 70px;">
    <img class="card-img-top col-md4" src="<?php echo $row['foto']; ?>" alt="Card image cap">
    <div class="card-body">
      <div align="center">
      <h5 class="card-title"><?php echo $row['nome']; ?></h5>
       <h5 class="card-title"><?php echo $row['preco']; ?></h5>
      <p class="card-text"></p>
      <a href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Mais Informaçoes</a>
      </div>
    </div>
  </div>
  </div>
<?php   
 }
}
 ?>