
<?php
require_once '../database/conection.php';
require_once '../database/query/insert/endereco.php';
require_once '../database/query/insert/usuario.php';

initConectDataBase();

$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
$nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$cpf = filter_var($_POST['cpf'], FILTER_SANITIZE_STRING);

$estado = filter_var($_POST['estado'], FILTER_SANITIZE_STRING);
$cidade = filter_var($_POST['cidade'], FILTER_SANITIZE_STRING);
$bairro = filter_var($_POST['bairro'], FILTER_SANITIZE_STRING);
$rua = filter_var($_POST['rua'], FILTER_SANITIZE_STRING);
$numero = $_POST['numero'];
$complemento = filter_var($_POST['complemento'], FILTER_SANITIZE_STRING);
$cep = filter_var($_POST['cep'], FILTER_SANITIZE_STRING);

$queryUser = insertUser($email, $senha, $nome, $cpf, $username);

if (mysqli_query($conn, $queryUser)) {
  $userId = mysqli_insert_id($conn);
  $queryAddress =  insertEndereco($estado, $cidade, $bairro, $rua, $numero, $complemento, $cep, $userId);

  if (!mysqli_query($conn, $queryAddress)) {
    $queryDeleteUser = "DELETE FROM users WHERE id = $userId";
    if (mysqli_query($conn, $queryDeleteUser)) {
        header('Location: ../util/erro.php');
    }
  }
  header('Location: ../util/sucesso.php');
} else {
  header('Location: ../util/erro.php');
}
closeConnectionDataBase();
?>