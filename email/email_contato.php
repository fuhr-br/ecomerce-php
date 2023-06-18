<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = $_POST["nome"];
  $from = $_POST["email"];
  $mensagem = "Cliente:  $nome \n";
  $mensagem .= "Email:    $from \n";
  $mensagem .= "Mensagem: " . $_POST["mensagem"];

  $destino = "andersonfuhr.afs@gmail.com";
  $assunto = "Contato de cliente";

  if (mail($destino, $assunto, $mensagem, $from)) {
    header("Location: ../util/sucesso_mensagem_enviada.php");
    exit();
  } else {
    header("Location: ../util/erro.php");
    exit();
  }
}
?>
