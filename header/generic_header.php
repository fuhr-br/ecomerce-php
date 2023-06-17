<head>

<body>
  <header class="header">

    <div class="container header-container">

      <a href="" class="logo">
        <h1>Magazine</h1>
      </a>
      <ul class="navigation-menu">
        <?php
        $items = array(
          array("class" => "shoppingBag", "icon" => "shopping_bag", "link" => "/ecomerce-php/carrinho/carrinho.php", "tooltip" => "Carrinho de Compras"),
          array("class" => "account", "icon" => "account_circle", "link" => "/ecomerce-php/login/login.php", "tooltip" => "Entrar")
        );

        foreach ($items as $item) {
          echo "<li>";
          echo sprintf("<a href='%s' title='%s' target='_self'>", $item["link"] ? $item["link"] : '#', $item["tooltip"]);
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
</body>
<style>
  li {
    list-style-type: none;
  }

  a {
    text-decoration: none;
  }


  .header {
    height: 60px;
  }

  .logo {
    color: #1985a1;
    font-family: "Dancing Script", cursive;
  }

  .header-container {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    height: 100%;
  }

  .navigation-menu {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
  }

  .navigation-menu li {
    height: 100%;
    display: flex;
    align-items: center;
  }

  .navigation-menu li a {
    height: 100%;
    display: flex;
    align-items: center;
    padding: 20px;
    color: #666;
    transition: color 0.3s, background-color 0.3s, transform 0.3s;
  }

  .navigation-menu li a:hover {
    color: #333;
    background-color: #ddd;
  }

  .navigation-menu li a:active {
    transform: translateY(3px);
  }


  h3 {
    font-style: italic;
  }
</style>