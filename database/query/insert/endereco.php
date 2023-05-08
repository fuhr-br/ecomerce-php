<?php
function insertEndereco($estado, $cidade, $bairro, $rua, $numero, $complemento, $cep, $id_usuario)
{
  return "INSERT INTO endereco (id, estado, cidade, bairro, rua, numero, complemento, cep, id_usuario) VALUES (NULL, '$estado', '$cidade', '$bairro', '$rua', $numero, '$complemento', '$cep', $id_usuario)";
}
?>