<?php
include_once 'create_db.php';

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecommerce';
@$conn = new mysqli($servername, $username, $password, $dbname);

function initConectDataBase()
{
  global $conn;
  global $servername;
  global $username;
  global $password;
  global $dbname;

  if ($conn->connect_error) {
    $conn = new mysqli($servername, $username, $password);
    createDataBase($conn, $dbname);
    if ($conn->connect_error) {
      die("Falha na conexão com o banco: " . $conn->connect_error);
    }
  }
  return $conn;
}

function closeConnectionDataBase()
{
  global $conn;
  mysqli_close($conn);
}

?>