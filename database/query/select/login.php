<?php
function searchCredential($username, $senha)
{
  return "SELECT * FROM usuario WHERE username = '$username' AND senha = '$senha'";
}
?>