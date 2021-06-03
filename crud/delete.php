<?php
//Dados de conexão LOCAL
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     ="blog";

//Dados de conexão HEROKU


//-------
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM users WHERE id=7";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Informação deletada com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>