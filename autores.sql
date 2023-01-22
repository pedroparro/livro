-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jan-2023 às 20:37
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autores`
--

CREATE TABLE `autores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `datas` date NOT NULL,
  `preco` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autores`
--

INSERT INTO `autores` (`id`, `nome`, `autor`, `categoria`, `datas`, `preco`) VALUES
(1, 'HOMEM ARANHA', 'PAUL', 'acao', '2023-01-22', '25.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
