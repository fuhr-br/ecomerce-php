<?php
function createTableUser()
{
 return "CREATE TABLE usuario (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(50) NOT NULL,
        senha VARCHAR(50) NOT NULL,
        nome VARCHAR(50) NOT NULL,
        cpf VARCHAR(16) NOT NULL,
        username VARCHAR(50) NOT NULL
        )";
}
?>