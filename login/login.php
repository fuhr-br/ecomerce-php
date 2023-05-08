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
  </form>