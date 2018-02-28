<?php

include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];



$sql = "INSERT INTO cadastro_usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
if($conn->query($sql) === TRUE){
	echo '<script>alert("Usuário cadastrado com sucesso!");</script>';	
	echo "<script>window.location = 'paginainiciallogin.php';</script>";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>