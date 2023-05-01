<!DOCTYPE html>
<html lang="pt-br">

<?php
//O intuito aqui foi apenas inilizar o Banco de dados para ele criar as tabelas
require_once 'database/conection.php';
initConectDataBase();
closeConnectionDataBase();
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <input type="search" name="" id="" placeholder="Procurar" alt="procurar no site">
        <button><span class="material-icons-outlined">
            search
          </span></button>
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
          <h1>OFERTA</h1>
          <h2>10% OFF</h2>
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
      <?php
      $product = array(
        "discount" => "50% Off",
        "image" => "https://ae01.alicdn.com/kf/H28cefd8eff5d44a6a1cb6265a8e813551/Retroflag-GPi-CASE-for-Raspberry-Pi-Zero-and-Zero-W-with-Safe-Shutdown.jpg_220x220xz.jpg_.webp",
        "name" => "Minigame",
        "original_price" => "100,00",
        "discounted_price" => "50,00",
        "button_text" => "COMPRAR"
      );
      ?>
      <ul class="product-list">
        <li>
          <p alt="desconto do item">
            <?php echo $product["discount"]; ?>
          </p>
          <img src="<?php echo $product["image"]; ?>" alt="minigame">
          <h1>
            <?php echo $product["name"]; ?>
          </h1>
          de <h3>
            <?php echo $product["original_price"]; ?>
          </h3>
          por<h2>
            <?php echo $product["discounted_price"]; ?>
          </h2>
          <div>
            <button alt="Botão de Comprar da Minigame">
              <?php echo $product["button_text"]; ?>
            </button>
            <span class="material-icons-outlined">
              favorite
            </span>
          </div>
        </li>
      </ul>
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