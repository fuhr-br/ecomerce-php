<?php
function createProduct()
{
  return "CREATE TABLE produto (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    valor DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    imagem VARCHAR(255) NOT NULL
  )";
}
?>