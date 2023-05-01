<?php
function insertUser($email, $senha, $nome, $cpf, $username)
{
  return "INSERT INTO usuario (id, email, senha, nome, cpf, username) VALUES (NULL, '$email', '$senha', '$nome', '$cpf', '$username')";
}
?>
