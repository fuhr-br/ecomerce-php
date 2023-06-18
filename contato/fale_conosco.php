<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include_once '../util/fonts.php'; ?>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="../CSS/button.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <title>Contato</title>
</head>
<header>
  <?php include_once '../header/generic_header.php'; ?>
</header>
<body>
  <div class="container">
    <h3>Envie Sua mensagem que entraremos em contato!</h3>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
      </div>
      <input type="submit"></input>
    </form>
  </div>
  <footer>
  <?php include_once '../footer/footer.php'; ?>
</footer>
</body>
</html>