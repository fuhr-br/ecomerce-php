<?php
function createTableCart()
{
  return "CREATE TABLE carrinho (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT(6) UNSIGNED NOT NULL,
        CONSTRAINT fk_cart_usuario
        FOREIGN KEY (id_usuario) REFERENCES usuario(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
    )";
}
?>