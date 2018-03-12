<?php 
include "header.php";
 ?>
<div class="container">
<div class="row">
 <?php 
 $pesquisar = $_POST['pesquisar'];
 $sql = ("SELECT * FROM produto WHERE  (nome LIKE '%".$pesquisar."%') OR (categoria LIKE '%".$pesquisar."%') OR (preco LIKE '%".$pesquisar."%') ");

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {  
  while($row = $result -> fetch_assoc())
  {
    

?>
 <div class="col-md-4" style="width: 20rem;">
    <img class="card-img-top " src="<?php echo $row['foto']; ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['nome']; ?></h5>
      <h5 class="card-title"><?php echo $row['descricao']; ?></h5>
       <h5 class="card-title"><?php echo $row['preco']; ?></h5>

      <p class="card-text"></p>
       <a href="carrinho.php?acao=add&id=<?php echo $row['id']?>" class="btn btn-warning">Add Carrinho</a>
    </div>
  </div>
  <?php   
 }
}
 ?>
   </div>
 </div>