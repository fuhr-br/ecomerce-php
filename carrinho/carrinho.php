<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <?php include_once '../util/fonts.php'; ?>
  <title>Carrinho de compras</title>
</head>
<header>
  <?php include_once '../header/generic_header.php'; ?>
</header>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="./styles.css">
<link rel="stylesheet" href="../CSS/button.css">

<body onload="popularCarrinho(carregarItensDoLocalStorage())">
  <div id="container">
    <h1 id="title-cart">Carrinho de compras</h1>
    <h3>
      <table id="cart">
        <thead>
          <tr>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Excluir</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </h3>
    <div id="buttons">
      <button class="botao" onclick="window.location.href='../index.php'">Voltar para página Inicial</button>
      <span></span>
      <button class="botao" onclick="finalizarCompra()">Finalizar Compra</button>
    </div>

  </div>

  <footer>
    <?php include_once '../footer/footer.php'; ?>
  </footer>
  <script>
    class Item {
      constructor(preco, descricao) {
        this.preco = preco;
        this.descricao = descricao;
      }
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

    function popularCarrinho(items) {
      const tabela = $("#cart");
      const tbody = tabela.find("tbody");
      tbody.empty();

      let precoTotal = 0;

      items.forEach((item) => {
        const tr = $("<tr></tr>");

        const td_descisao = $("<td></td>").text(item.descricao);
        tr.append(td_descisao);

        const td_preco = $("<td></td>").text(item.preco);
        tr.append(td_preco);

        precoTotal += parseFloat(item.preco);
        localStorage.setItem("totalCart", precoTotal);

        const td_excluir = $("<td></td>");
        const btn_excluir = $("<button>X</button>");

        btn_excluir.on("click", function () {
          excluirItemDoLocalStorage(item.descricao);
          tr.remove();
        });

        td_excluir.append(btn_excluir);
        tr.append(td_excluir);

        tbody.append(tr);
      });

      const trTotal = $("<tr></tr>");
      const tdTotalLabel = $("<td></td>").text("Preço Total:");
      const tdTotalValue = $("<td></td>").text(precoTotal.toFixed(2));

      trTotal.append(tdTotalLabel);
      trTotal.append(tdTotalValue);

      tbody.append(trTotal);
    }

    function excluirItemDoLocalStorage(descricao) {
      const items = carregarItensDoLocalStorage();
      const index = items.findIndex(item => item.descricao === descricao);
      items.splice(index, 1);
      updateCart(items);
      popularCarrinho(items);
    }

      function updateCart(itens) {
        localStorage.setItem("carrinho", JSON.stringify(itens));
      }

      function finalizarCompra(){
       let total = localStorage.getItem("totalCart");
        localStorage.clear();
        if(total){
          console.log("cheio"+total);
          window.location.href = "../util/sucesso.php";
        }
      }
    
  </script>