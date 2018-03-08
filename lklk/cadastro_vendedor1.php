<?php

include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];



$sql = "INSERT INTO login_vendedor (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
if($conn->query($sql) === TRUE){
	echo '<script>alert("Vendedor cadastrado com sucesso!");</script>';	
	echo "<script>window.location = 'login_vendedor.php';</script>";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>