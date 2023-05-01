<?php
session_start();
if (isset($_POST['action'])) {
  if ($_POST['action'] == 'home') {
    // Redireciona o usuário para a página inicial
    header("Location: ../index.php");
    exit();

  } else {
    // Remove todas as variáveis de sessão
    session_unset();
    // Destroi a sessão atual
    session_destroy();

    header("Location: login.php");
    exit();
  }
}
?>