<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto";

// cria conexão

$conn = new mysqli($servername,$username,$password,$dbname);

//Checa a conexão

if($conn ->connect_error){
		die("connection failed: ".$conn->connect_error);


}


?>