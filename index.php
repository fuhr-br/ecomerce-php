<!DOCTYPE html>
<html lang="pt-br">

<?php
require_once 'database/query/select/produto.php';
//O intuito aqui foi apenas inicializar o Banco de dados para ele criar as tabelas
require_once 'database/conection.php';
initConectDataBase();
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="CSS/styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Magazine</title>
</head>

<body>
  <header class="header">
    <div class="container header-container">

      <a href="" class="logo">
        <h1>Magazine</h1>
      </a>
      <div class="searchBar">
        <input type="search" name="" id="input_search" placeholder="Procurar" alt="procurar no site">
        <button id="btn_search" onclick="searchProducts()">
          <span class="material-icons-outlined">
            search
          </span>
        </button>
      </div>

      <ul class="navigation-menu">

        <?php
        $items = array(
          array("class" => "shoppingBag", "icon" => "shopping_bag", "link" => "carrinhoDeCompras.php", "tooltip" => "Carrinho de Compras"),
          array("class" => "account", "icon" => "account_circle", "link" => "./login/login.php", "tooltip" => "Entrar")
        );

        foreach ($items as $item) {
          echo "<li>";
          echo sprintf("<a href='%s' title='%s' target='_blank'>", $item["link"] ? $item["link"] : '#', $item["tooltip"]);
          echo "<span class='material-icons-outlined {$item["class"]}'>";
          echo "{$item["icon"]}";
          echo "</span>";
          echo "</a>";
          echo "</li>";
        }
        ?>

      </ul>
    </div>
  </header>
  <section class="banner">
    <a href="">
      <div class="container banner-container">
        <img src="https://http2.mlstatic.com/D_NQ_NP817326-MLA42786047230_072020-B.webp" alt="">
        <div>
          <h1>OFERTAS</h1>
          <h3>EM TODO O SITE</h3>
        </div>
      </div>
    </a>
  </section>
  <section>
    <div class="container">
      <ul class="product-list">
        <?php
        $categorias = array("Eletronico", "Roupas");

        foreach ($categorias as $categoria) {
          echo '<li class="category-item">' . $categoria . '</li>';
        }
        ?>
      </ul>
    </div>
  
    <div class="container">
      <!-- DIV onde ficam os produtos -->
    </div>
  </section>
  <footer>
    <span alt="Nome do desenvolvedor do Site"> Anderson Fuhr Souza 2023</span>
    <a href="https://github.com/fuhr-br/ecomerce-php" alt="Link com código fonte do site no GitHub" target="__blank">
      <i class="fa fa-github" alt="Icone do mascote do site do GitHub.com" style="font-size:48px;color:black">
      </i>
    </a>
  </footer>
</body>

</html>

<script>
  function searchProducts() {
    var param = document.getElementById("input_search").value;

    $.ajax({
      url: 'database/query/select/search_products.php',
      data: { param: param },
      dataType: 'json',
      success: function (products) {
        popularProductList(products);
      },
      error: function (xhr, status, error) {
        console.log('Ocorreu um erro na solicitação AJAX:', xhr.responseText);
      }
    });
  }
  function popularProductList(products) {

    var el = $('.teste_id');
    el.empty();

    var ulElement = $('.product-list');
    ulElement.empty();

    $.each(products, function (index, item) {
      var liElement = $('<li>');

      var imgElement = $('<img>').attr('src', item.imagem).attr('alt', 'minigame');
      liElement.append(imgElement);

      var h1Element = $('<h1>').text(item.descricao);
      liElement.append(h1Element);

      var h2Element = $('<h2>').text(item.valor);
      liElement.append(h2Element);

      var divElement = $('<div>');
      liElement.append(divElement);

      var buttonElement = $('<button>').attr('alt', 'Botão de Comprar').text('Comprar');
      divElement.append(buttonElement);

      ulElement.append(liElement);
    });
  }
  searchProducts();
</script>