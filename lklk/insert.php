
<?php

include "conexao.php";

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$foto = $_POST['foto'];


$sql = "INSERT INTO produto (nome, preco, categoria, foto) VALUES ('$nome', '$preco', '$categoria', '$foto')";

if($conn->query($sql) === TRUE){
	echo '<script>alert("produto cadastrado com sucesso!");</script>';	
	echo "<script>window.location = 'paginainicial.php';</script>";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>