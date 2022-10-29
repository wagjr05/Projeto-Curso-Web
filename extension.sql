-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Out-2022 às 04:15
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `extension`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(220) COLLATE utf8_swedish_ci NOT NULL,
  `username` varchar(220) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(180) COLLATE utf8_swedish_ci NOT NULL,
  `name` varchar(220) COLLATE utf8_swedish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `name`, `created`, `modified`) VALUES
(1, 'yuriaguiar.nascimentof@gmail.com', 'yuri.aguiar', '$2y$10$5BQqbRNAePHx05JjR5oPwOZOf9Ej7npd1HrC.m/C1C2/cUxcRgPHO', 'Yuri Aguiar', '2022-10-29 01:24:36', '2022-10-29 01:24:36'),
(2, 'lucasmm56@gmail.com', 'lucas.mm', '$2y$10$RmI7Cs6fzwDGCSNEco6Txu6QFX6hlOThEObkqCgCxODz7p1xv/KPa', 'Lucas Martins', '2022-10-29 01:26:05', '2022-10-29 01:26:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
