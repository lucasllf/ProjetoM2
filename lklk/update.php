<?php
include 'conexao.php';

$id = $_POST['id'];
$preco = $_POST['preco'];

$sql = "UPDATE produto SET preco='$preco' WHERE id=$id";

if ($conn->query($sql) === TRUE) {        

echo '<script>alert("Preço atualizado com sucesso!");</script>';	
	echo "<script>window.location ='funcionario.php';</script>";
}
else{
	echo "Erro:". $conn->error;
}
 $conn->close();
?>