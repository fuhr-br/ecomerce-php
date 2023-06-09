<?php

require_once 'query/create_user.php';
require_once 'query/create_endereco.php';
require_once 'query/create_carrinho.php';
require_once 'query/create_produto.php';
require_once 'query/create_carrinho_produto.php';
require_once 'query/insert/usuario.php';
require_once 'query/insert/produto.php';
require_once 'mock/produto_mock.php';
require_once 'execute_query.php';


function createDataBase($conn, $dbname)
{
  if (!mysqli_select_db($conn, $dbname)) {
    $sql = "CREATE DATABASE $dbname";
    if (!$conn->query($sql)) {
      echo "Erro ao criar banco de dados: " . $conn->error;
    }
  }
  mysqli_select_db($conn, $dbname);
  createTables($conn);
  return $conn;
}

function createTables($conn)
{

  $user = createTableUser();
  excecute($conn, $user);
  $endereco = createTableEndereco();
  excecute($conn, $endereco);
  $produto = createProduct();
  excecute($conn, $produto);
  $carrinho = createTableCart();
  excecute($conn, $carrinho);
  $carrinhoProduto = createTableCartProduct();
  excecute($conn, $carrinhoProduto);

  $query = "DELETE FROM produto;";
  excecute($conn, $query);
  $query = "DELETE FROM usuario;";
  excecute($conn, $query);

  $userDefault = insertUser('email@email.com', 'admin', 'Admin', 'xxxxxxxxxx', 'admin');
  excecute($conn, $userDefault);

  $produtosMock = getProdutosMock();
  foreach ($produtosMock as $produto) {
    $produtoDefault = insertProduto(
      $produto['valor'],
      $produto['categoria'],
      $produto['descricao'],
      $produto['imagem']
    );
    excecute($conn, $produtoDefault);
  }
}
?>