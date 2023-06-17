<?php
session_start();
if (isset($_POST['action'])) {
  if ($_POST['action'] == 'home') {

    header("Location: ../index.php");
    exit();

  } else {

    session_unset();

    session_destroy();

    header("Location: login.php");
    exit();
  }
}
?>