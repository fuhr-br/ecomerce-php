<?php
session_start();

if (@$_SESSION["loggedin"]) {
  header("Location: logout.php");
  exit();
}
?>
<head>
<link rel="stylesheet" href="styles.css">
<title>Login</title>
</head>
<div class="container">

  <form action="logInto.php" method="post">
    <label for="username">Usuário:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
    <button class="botao" onclick="window.location.href='../index.php'">Voltar para página Inicial</button>
    <button class="botao" name="action" value="logout" onclick="window.location.href='../cadastro/form/pessoa.php'">Criar Cadastro</button>
  </form>
  
</div>