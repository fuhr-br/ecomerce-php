<?php
require_once '../database/conection.php';
require_once '../database/query/select/login.php';

$conn = initConectDataBase();

$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

$query = searchCredential($username, $password);
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  closeConnectionDataBase();
  session_start();

  // seta como usuário logado
  $_SESSION["loggedin"] = true;
  header("Location: ../index.php");
  exit();
} else {
  $output = "Nome de usuário ou senha inválidos!";
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

  <?php if (!empty($output)): ?>
    <div class="login-output">
      <?php echo $output; ?>
    </div>
  <?php endif; ?>
</div>

<style>
  .login-output {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    max-width: 400px;
    margin: auto;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
  }
</style>
