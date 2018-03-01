<?php 
session_start();
include('conexao.php');
	
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT nome FROM cadastro_usuario WHERE email='$email' AND senha='$senha'"; //

$result = $conn -> query($sql);

if ($result -> num_rows > 0)
{
	while($row = $result -> fetch_assoc())
	{
		$_SESSION['nome'] = $row['nome']; //aqui iremos pegar o nome e escrever após o login ser aceito
		header("location:paginainicial.php");
	}
}
else
{
	echo '<script>alert("Usuario ou senha invalido!");</script>';	
	echo "<script>window.location = 'loginusuario.php';</script>";
}
?>