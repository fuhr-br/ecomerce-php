<div class="logout">
  <form action="logOff.php" method="POST">
    <p>Você deseja voltar para a página inicial ou deslogar?</p>
    <button type="submit" name="action" value="home">Voltar à página inicial</button>
    <button type="submit" name="action" value="logout">Deslogar</button>
  </form>
</div>
<style>
.logout {
  border: 2px solid #ccc;
  padding: 20px;
  border-radius: 10px;
  background-color: #f1f1f1;
  margin-top: 20px;
}

.logout form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.logout p {
  font-size: 18px;
  margin-bottom: 20px;
}

.logout button {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
  font-size: 16px;
}

.logout button:hover {
  background-color: #45a049;
}
</style>