<head>
  <link rel="stylesheet" href="styles.css">
<title>Formulário de cadastro</title>
</head>
<body>
	
	<form name="formulario" action="../cadastro_pessoa.php" method="POST">
  <h1>Cadastro de Pessoa</h1>
	  <label for="nome">Nome:</label>
		<input type="text" name="nome" required><br>

		<label for="cpf">CPF:</label>
		<input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required><br>

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
	</form>
</body>
</html>