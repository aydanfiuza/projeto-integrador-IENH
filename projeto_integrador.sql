-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Abr-2023 às 21:10
-- Versão do servidor: 5.7.40
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_integrador`
--
CREATE DATABASE IF NOT EXISTS `projeto_integrador` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projeto_integrador`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacao`
--

DROP TABLE IF EXISTS `movimentacao`;
CREATE TABLE IF NOT EXISTS `movimentacao` (
  `idMovimento` int(11) NOT NULL,
  `estoque_idProduto` int(11) NOT NULL,
  `tipoMovimento` varchar(8) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `dataMovimento` date DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idMovimento`),
  KEY `fk_Compra_Estoque_idx` (`estoque_idProduto`),
  KEY `fk_idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `idProduto` int(11) NOT NULL,
  `marca` varchar(80) DEFAULT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  `unidade` varchar(10) NOT NULL,
  `quantidade` int(10) NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `nome`, `email`, `senha`, `cnpj`) VALUES
(1, 'lucassantos', 'Lucas Santos', 'lucassantos@gmail.com', 'ce7386311cbea2e4e83fc20efe235018', 'XX.XX.XXX/0001-XX'),
(2, 'mateuskirch', 'Mateus Kirch', 'mateusk@gmail.com', '4de2b58e561b1ddcafec5672478597ca', 'XX.XX.XXX/0002-XX');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `movimentacao`
  ADD CONSTRAINT `fk_Compra_Estoque` FOREIGN KEY (`estoque_idProduto`) REFERENCES `estoque` (`idProduto`),
  ADD CONSTRAINT `fk_idUser` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`id`);

--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Insere Valores em PRODUTO --

INSERT INTO `projeto_integrador`.`estoque` (`idProduto`, `marca`, `descricao`, `unidade`, `quantidade`) VALUES 
('1', 'Razer', 'Mouse DeathAdder V2 Verde', 'un', '5'),
('2', 'Dell', 'Notebook Dell Inspiron Preto', 'un', '2'),
('3', 'Samsung', 'Celular Galaxy 30 Branco', 'un', '18'),
('4', 'Razer', 'Headset Kaira PRO Verde', 'un', '5'),
('5', 'Razer', 'Headset Kraken Verde', 'un', '6'),
('6', 'Apple', 'Celular Phone 14 Preto', 'un', '5');