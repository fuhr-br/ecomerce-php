<?php
function seachCredential($udername, $senha)
{
  return "SELECT * FROM usuario WHERE username = '$udername' AND senha = '$senha'";
}
?>