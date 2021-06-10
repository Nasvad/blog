<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

var_dump($nome,$email,$senha)


//Dados de conexão LOCAL
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     ="blog";

//Dados de conexão INFINITYFREE
//$servername = "sql207.epizy.com";
//$username = "epiz_28557363";
//$password = "dUh8GAR5PUt";
//$dbname = "epiz_28557363_blog";
//-------
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (name, email, password)
  VALUES ('$nome', '$email', '$senha')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Usuário cadastrado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>