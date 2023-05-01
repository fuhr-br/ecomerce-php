<?php
function createTableCartProduct()
{
return  "CREATE TABLE carrinho_produto (
          carrinho_id INT(6) UNSIGNED NOT NULL,
          produto_id INT(6) UNSIGNED NOT NULL,
          quantidade INT(6) NOT NULL,
          PRIMARY KEY (carrinho_id, produto_id),
          CONSTRAINT fk_carrinho
          FOREIGN KEY (carrinho_id) REFERENCES carrinho(id)
          ON DELETE CASCADE
          ON UPDATE CASCADE,
          CONSTRAINT fk_produto
          FOREIGN KEY (produto_id) REFERENCES produto(id)
          ON DELETE CASCADE
          ON UPDATE CASCADE
        )";
}
?>