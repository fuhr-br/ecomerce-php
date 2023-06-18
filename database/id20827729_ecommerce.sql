-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 18-Jun-2023 às 02:28
-- Versão do servidor: 10.5.20-MariaDB
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id20827729_ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(6) UNSIGNED NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `id_usuario` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(6) UNSIGNED NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `valor`, `categoria`, `descricao`, `imagem`) VALUES
(1, 19.99, 'Eletronico', 'Mini game', 'https://ae01.alicdn.com/kf/H28cefd8eff5d44a6a1cb6265a8e813551/Retroflag-GPi-CASE-for-Raspberry-Pi-Zero-and-Zero-W-with-Safe-Shutdown.jpg_220x220xz.jpg_.webp'),
(2, 29.99, 'Roupa', 'Camisa Polo', 'https://ae01.alicdn.com/kf/S7ea50de46e334fca9d6554723c3d84ceH/Hot-Selling-Breathable-Polo-Shirt-Men-s-Embroidered-Summer-New-Business-Leisure-High-Quality-Lapel-Short.jpg_220x220xz.jpg_.webp'),
(3, 39.99, 'Roupa', 'Casaco Apeluciado Preto', 'https://ae01.alicdn.com/kf/Sc74838670d624da7b147a85131595c03X/Outono-e-inverno-cashmere-cardigan-dos-homens-chenille-camisola-exterior-camisola-camisola-camisola-casaco-blus-o.jpg_Q90.jpg_.webp'),
(4, 19.99, 'Eletronico', 'Mini game', 'https://ae01.alicdn.com/kf/H28cefd8eff5d44a6a1cb6265a8e813551/Retroflag-GPi-CASE-for-Raspberry-Pi-Zero-and-Zero-W-with-Safe-Shutdown.jpg_220x220xz.jpg_.webp'),
(5, 29.99, 'Roupa', 'Camisa Polo', 'https://ae01.alicdn.com/kf/S7ea50de46e334fca9d6554723c3d84ceH/Hot-Selling-Breathable-Polo-Shirt-Men-s-Embroidered-Summer-New-Business-Leisure-High-Quality-Lapel-Short.jpg_220x220xz.jpg_.webp'),
(6, 39.99, 'Roupa', 'Casaco Apeluciado Preto', 'https://ae01.alicdn.com/kf/Sc74838670d624da7b147a85131595c03X/Outono-e-inverno-cashmere-cardigan-dos-homens-chenille-camisola-exterior-camisola-camisola-camisola-casaco-blus-o.jpg_Q90.jpg_.webp'),
(7, 29.99, 'Roupa', 'Jaqueta', 'https://ae04.alicdn.com/kf/S64988fcecaae4cabadb2997fb7620f97L.jpg_200x200Q90.jpg_.webp'),
(8, 39.99, 'Roupa', 'Calça capry', 'https://ae01.alicdn.com/kf/Sc24fa185f63445d287efdba83c754496Z/Cal-as-masculinas-novas-cal-as-soltas-masculina-casual-moda-cor-cal-as-listra-plus-size.jpg_Q90.jpg_.webp'),
(9, 60.00, 'Roupa', 'Calça feminina', 'https://ae01.alicdn.com/kf/A5fb6237c0b3b484bbd44fed8d5c39b6a9/Black-Pant-Suplex-Style-Legguing-High-Waist-Claw-Knee-Open-Style-Riding-Trend.jpg_220x220xz.jpg_.webp'),
(10, 50.00, 'Roupa', 'Calça casual', 'https://ae01.alicdn.com/kf/S15faddb47164476083cc4afcb5a84471J/Homem-Casual-Cal-as-Moda-Masculina-Roupas-Slim-Fit-Qualidade-Cintura-M-dia-Cal-as-Listradas.jpg_Q90.jpg_.webp'),
(11, 19.99, 'Eletronico', 'Drone com filmadora', 'https://ae01.alicdn.com/kf/Sb8411fb51f88486ca770cf7c1cbad2deC/4DRC-V4-RC-Drone-4K-1080P-HD-Wide-Angle-Camera-WiFi-Fpv-Dual-Camera-Foldable-Quadcopter.jpg_220x220xz.jpg_.webp'),
(12, 60.00, 'Eletronico', 'Camera', 'https://ae01.alicdn.com/kf/Hb554bb321b4d4315af62d816b3e92850v/For-GoPro-Accessories-GoPro-Hero-7-6-5-Protective-Frame-Case-Camcorder-Housing-Case-For-GoPro.png_220x220xz.png_.webp');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `nome`, `cpf`, `username`) VALUES
(1, 'email@email.com', 'admin', 'Admin', 'xxxxxxxxxx', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
