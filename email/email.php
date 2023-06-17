<?php
session_start();
$total = $_GET["total"];
$itemsJson = $_GET["items"];
$items = json_decode($itemsJson, true);

$destino = $_SESSION["email"];
$assunto = "Compra realizada";

$mensagem = "Obrigado por realizar sua compra conosco, seus itens serão enviados assim que possível!\n\n";
$mensagem .= "Itens:\n";
foreach ($items as $item) {
  $preco = $item["preco"];
  $descricao = $item["descricao"];
  $mensagem .= " - $descricao: $preco" . "\n";
}
$mensagem .= "\nValor Total da Compra: " . $total;
$from = "From: andersonfuhr.afs@gmail.com";

if (mail($destino, $assunto, $mensagem, $from)) {
  header("Location: ../util/sucesso.php");
  exit();
} else {
  header("Location: ../util/erro.php");
  exit();
}

?>