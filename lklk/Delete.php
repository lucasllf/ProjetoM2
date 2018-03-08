<?php
include 'conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM produto WHERE id=$id";

if ($conn->query($sql) === TRUE) {                                                            
echo '<script>alert("Produto excluido com sucesso!");</script>';	
	echo "<script>window.location = 'dele.php';</script>";
}
else{
	echo "Erro:". $conn->error;
}
 $conn->close();
?>
