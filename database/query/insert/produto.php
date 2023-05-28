<?php
function insertProduto($valor, $categoria, $descricao, $imagem)
{
  return "INSERT INTO produto (id, valor, categoria, descricao, imagem) VALUES (NULL, '$valor', '$categoria', '$descricao', '$imagem')";
}
?>