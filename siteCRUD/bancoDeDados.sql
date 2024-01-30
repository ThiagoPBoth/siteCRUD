-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2023 às 19:05
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `palimento`
--
CREATE DATABASE IF NOT EXISTS `palimento` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `palimento`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `alimento`
--

CREATE TABLE `alimento` (
  `idA` int(4) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `idD` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alimento`
--

INSERT INTO `alimento` (`idA`, `descricao`, `cep`, `idD`) VALUES
(1, 'ssasa', '22222-222', 1),
(2, 'bbbbb', '88888-888', 2),
(3, 'nnnnnnnnnnn', '44444-444', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `distribuidora`
--

CREATE TABLE `distribuidora` (
  `idD` int(4) NOT NULL,
  `loginD` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `distribuidora`
--

INSERT INTO `distribuidora` (`idD`, `loginD`, `senha`) VALUES
(1, 'dist', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'teste', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alimento`
--
ALTER TABLE `alimento`
  ADD PRIMARY KEY (`idA`),
  ADD KEY `idD` (`idD`);

--
-- Índices de tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  ADD PRIMARY KEY (`idD`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alimento`
--
ALTER TABLE `alimento`
  MODIFY `idA` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  MODIFY `idD` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alimento`
--
ALTER TABLE `alimento`
  ADD CONSTRAINT `alimento_ibfk_1` FOREIGN KEY (`idD`) REFERENCES `distribuidora` (`idD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
