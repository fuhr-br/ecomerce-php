<?php
function createTableEndereco()
{
 return "CREATE TABLE endereco (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        cidade VARCHAR(50) NOT NULL,
        estado VARCHAR(2) NOT NULL,
        rua VARCHAR(50) NOT NULL,
        cep VARCHAR(8) NOT NULL,
        id_usuario INT(6) UNSIGNED NOT NULL,
        CONSTRAINT fk_usuario
        FOREIGN KEY (id_usuario) REFERENCES usuario(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
        )";
}
?>