<?php
function createTableEndereco()
{
 return "CREATE TABLE endereco (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        estado VARCHAR(50) NOT NULL,
        cidade VARCHAR(50) NOT NULL,
        bairro VARCHAR(50) NOT NULL,
        rua VARCHAR(100) NOT NULL,
        numero INT(10) NOT NULL,
        complemento VARCHAR(50),
        cep VARCHAR(9) NOT NULL,
        id_usuario INT(6) UNSIGNED NOT NULL,
        CONSTRAINT fk_usuario
        FOREIGN KEY (id_usuario) REFERENCES usuario(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
        )";
}
?>