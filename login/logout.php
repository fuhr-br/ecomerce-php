<head>
<link rel="stylesheet" href="styles.css">
<?php include_once '../util/fonts.php'; ?>
<title>Login</title>
</head>
<header>
  <?php include_once '../header/generic_header.php'; ?>
</header>
<div class="logout">
  <form action="logOff.php" method="POST">
    <h4>Você deseja voltar para a página inicial ou deslogar?</h4>
    <button class="botao" type="submit" name="action" value="home">Voltar à página inicial</button>
    <button class="botao" type="submit" name="action" value="logout">Deslogar</button>
  </form>
</div>
<footer>
  <?php include_once '../footer/footer.php'; ?>
</footer>
