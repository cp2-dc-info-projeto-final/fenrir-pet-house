-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Out-2022 às 22:55
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fenrirpet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cachorro`
--

CREATE TABLE `cachorro` (
  `cod_cliente` int(11) NOT NULL,
  `cod_cachorro` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `raça` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `data_nasc` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome`, `senha`, `email`, `data_nasc`) VALUES
(1, 'Ra Ra', 'senha', 'ra@gmail.com', '2005-03-29'),
(2, 'Ra Ra2', 'senha2', 'ra2@gmail.com', '2005-03-29'),
(3, 'e e', 'senha3', 'e@gmail.com', '1222-12-12'),
(4, 'teste teste', 'teste', 'teste@gmail.com', '1111-11-11'),
(5, 'raa raa', 'aaaaa', 'aa@aaa.com', '2122-01-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `func`
--

CREATE TABLE `func` (
  `cod_func` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `func`
--

INSERT INTO `func` (`cod_func`, `nome`, `email`, `data_nasc`, `senha`, `cpf`, `IsAdmin`) VALUES
(1, 'teste 2', 'teste2@aaaaaaaaa', '2222-02-22', 'teste2', '12345678910', 0),
(5, 'aaaaaa aaaaa', 'aaaa@aaa.com', '1222-12-12', 'aaaaaaaaa', '12345678910', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `serviço`
--

CREATE TABLE `serviço` (
  `idServico` int(11) NOT NULL,
  `Nome` varchar(220) NOT NULL,
  `Descricao` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cachorro`
--
ALTER TABLE `cachorro`
  ADD PRIMARY KEY (`cod_cachorro`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Indexes for table `func`
--
ALTER TABLE `func`
  ADD PRIMARY KEY (`cod_func`);

--
-- Indexes for table `serviço`
--
ALTER TABLE `serviço`
  ADD PRIMARY KEY (`idServico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cachorro`
--
ALTER TABLE `cachorro`
  MODIFY `cod_cachorro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `func`
--
ALTER TABLE `func`
  MODIFY `cod_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `serviço`
--
ALTER TABLE `serviço`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DROP USER IF EXISTS 'fenrir'@'localhost';
CREATE USER 'fenrir'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON fenrirpet.* TO 'fenrir'@'localhost';