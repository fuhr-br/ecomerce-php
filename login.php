<?php
session_start();

if (@$_SESSION["loggedin"]) {
  header("Location: logout.php");
  exit();
}
?>

<div class="container">

  <form action="logInto.php" method="post">
    <label for="username">Usuário:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
  </form>

  <style>
    .container {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    form {
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      max-width: 400px;
      margin: auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      padding: 10px;
      border: none;
      border-radius: 5px;
      margin-bottom: 20px;
      width: 100%;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>