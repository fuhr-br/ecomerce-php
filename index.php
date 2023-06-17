<!DOCTYPE html>
<html lang="pt-br">

<?php
require_once 'database/query/select/produto.php';
//O intuito aqui foi apenas inicializar o Banco de dados para ele criar as tabelas
require_once 'database/conection.php';
initConectDataBase();
?>

<head>
  <?php include_once './util/fonts.php'; ?>
  <link rel="stylesheet" href="CSS/styles.css">
  <title>Magazine</title>
</head>

<body>
  <header class="header">
    <?php include_once './header/header.php'; ?>
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
  <?php include_once './footer/footer.php'; ?>
  </footer>
</body>

</html>

<script>
  class Item {
    constructor(preco, descricao) {
      this.preco = preco;
      this.descricao = descricao;
    }
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

      buttonElement.click(function () {
        var descricao = h1Element.text();
        var preco = h2Element.text();
        addCart(preco, descricao);
      });

      ulElement.append(liElement);
    });
  }
  function addCart(preco, descricao) {
    const item = new Item(preco, descricao);
    const itens = carregarItensDoLocalStorage();
    itens.push(item);

    localStorage.setItem("carrinho", JSON.stringify(itens));
    alert("Item adicionado ao carrinho!");
  }

  function carregarItensDoLocalStorage() {
    const itensString = localStorage.getItem("carrinho");
    if (itensString) {
      const itensJson = JSON.parse(itensString);
      const itens = itensJson.map((item) => new Item(item.preco, item.descricao));
      return itens;
    } else {
      return [];
    }
  }

  searchProducts();
</script>