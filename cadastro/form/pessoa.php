<head>
  <?php include_once '../../util/fonts.php'; ?>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="../../CSS/button.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <title>Formulário de cadastro</title>
</head>
<header>
  <?php include_once '../../header/generic_header.php'; ?>
</header>

<body>

  <form name="formulario" action="../cadastro_pessoa.php" method="POST">
    <h1>Cadastro de Pessoa</h1>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="cpf">CPF:</label>
    <input type="text" placeholder="xxx.xxx.xx-xx" name="cpf" id="cpfInput" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
      title="Digite um CPF válido (xxx.xxx.xx-xx)" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="username">Login:</label>
    <input type="text" name="username" required><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" required><br>

    <h2>Endereço</h2>

    <label for="estado">Estado:</label>
    <input type="text" name="estado" required><br>

    <label for="cidade">Cidade:</label>
    <input type="text" name="cidade" required><br>

    <label for="bairro">Bairro:</label>
    <input type="text" name="bairro" required><br>

    <label for="rua">Rua:</label>
    <input type="text" name="rua" required><br>

    <label for="numero">Número:</label>
    <input type="text" pattern="[0-9]*" name="numero" required><br>

    <label for="complemento">Complemento:</label>
    <input type="text" name="complemento"><br>

    <label for="cep">CEP:</label>
    <input type="text" name="cep" required><br>

    <input id="submit" type="submit" value="Cadastrar">
    <button class="botao" onclick="window.location.href='../../index.php'">Voltar para página Inicial</button>
  </form>
</body>
<footer>
  <?php include_once '../../footer/footer.php'; ?>
</footer>

</html>
<script>
  $(document).ready(function () {
    $('#cpfInput').mask('000.000.000-00');
  });

</script>