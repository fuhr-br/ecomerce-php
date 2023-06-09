<?php
require_once __DIR__ . '/../../conection.php';

  $param = $_REQUEST['param'];

  $query = "SELECT * FROM produto WHERE descricao LIKE '%$param%' limit 50;";
  $conn = initConectDataBase();
  $result = mysqli_query($conn, $query);
  
  $products = [];
  while ($linha = mysqli_fetch_assoc($result)) {
    $products[] = $linha;
  }
  $productsJSON = json_encode($products);
  echo $productsJSON;
?>