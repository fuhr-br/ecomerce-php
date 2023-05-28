<?php
include_once 'create_db.php';

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecommerce';
$conn = new mysqli($servername, $username, $password, $dbname);

function initConectDataBase()
{
  global $conn;
  global $servername;
  global $username;
  global $password;
  global $dbname;

  if ($conn->connect_error) {
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
      header('Location: ./util/erro.php');
    }else {
      createDataBase($conn, $dbname);
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