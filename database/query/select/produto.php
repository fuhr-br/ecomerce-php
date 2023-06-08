<?php
require_once './database/conection.php';

function getProducts()
{
  $query = "SELECT * FROM produto LIMIT 10;";
  $conn = initConectDataBase();
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    closeConnectionDataBase();
    return $result;
  } else {
    closeConnectionDataBase();
    header('Location: ../util/erro.php');
  }
}

?>
