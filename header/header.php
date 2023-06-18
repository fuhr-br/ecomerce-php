<head>

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
          array("class" => "email", "icon" => "email", "link" => "./contato/fale_conosco.php", "tooltip" => "Entrar"),
          array("class" => "shopping-cart", "icon" => "shopping_cart", "link" => "./carrinho/carrinho.php", "tooltip" => "Carrinho de Compras"),
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
  </script>
</body>