-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2022 às 23:36
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `watchme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `room`
--

INSERT INTO `room` (`id`, `video`) VALUES
(1, 'video muito legal'),
(2, 'Video muito chato\r\n'),
(3, ''),
(4, ''),
(5, 'nova sala'),
(6, 'nova sala'),
(7, 'nova sala'),
(8, 'Aguardando Vídeo...'),
(9, 'Aguardando Vídeo...'),
(10, 'Aguardando Vídeo...'),
(11, 'Aguardando Vídeo...'),
(12, 'Aguardando Vídeo...'),
(13, 'Aguardando Vídeo...'),
(14, 'XlNfLR8o_XM'),
(15, 'lfR7Qj04-UA'),
(16, 'EmeATUzpJWE'),
(17, '639Pe0PpVLQ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
