-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2022 às 15:51
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

CREATE Database `fenrirpet`;
 
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
  `cod_cachorro` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `raca` varchar(220) NOT NULL,
  `email_dono` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(220) NOT NULL,
  `data_nasc` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `func`
--

CREATE TABLE `func` (
  `cod_func` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- --------------------------------------------------------

--
-- Estrutura da tabela `serviço`
--

CREATE TABLE `servico` (
  `idServico` int(11) NOT NULL,
  `agenda_tstamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `plano` varchar(225) NOT NULL,
  `cachorro` varchar(225) NOT NULL,
  `cliente` varchar(225) NOT NULL,
  `agenda_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Extraindo dados da tabela `serviço`
--

INSERT INTO `servico` (`idServico`, `agenda_tstamp`, `plano`, `cachorro`, `cliente`, `agenda_status`) VALUES
(6,'2022-12-23 12:00:00', '.', '.', '.', 0),
(5,'2022-12-22 12:00:00', '.', '.', '.', 0),
(4,'2022-12-21 12:00:00', '.', '.', '.', 0),
(3,'2022-12-20 12:00:00', '.', '.', '.', 0),
(2,'2022-12-19 12:00:00', '.', '.', '.', 0),
(1,'2022-12-18 12:00:00', '.', '.', '.', 0),
(7,'2022-12-24 12:00:00', '.', '.', '.', 0);



CREATE TABLE `pacotes` (
  `idpacote` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `tempo` varchar(255) NOT NULL,
  `areas` varchar(255) NOT NULL,
  `banho` varchar(255) DEFAULT NULL,
  `tosa` varchar(255) DEFAULT NULL,
  `festa` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `pacotes` ADD PRIMARY KEY(`idpacote`);
ALTER TABLE `pacotes` CHANGE `idpacote` `idpacote` INT(255) NOT NULL AUTO_INCREMENT;

--
-- Extraindo dados da tabela `pacotes`
--

INSERT INTO `pacotes` (`idpacote`, `nome`, `valor`, `tempo`, `areas`, `banho`, `tosa`, `festa`) VALUES
(1, 'Pacote Tchutchuquito', '- Pacote Tchutchuquito (R$90)', '- Um dia e uma noite.', '- Acesso as áreas da praia e o parquinho', '- 1 banho por semana.', NULL, NULL),
(2, 'Pacote Tchutchuco', '- Pacote tchutchuco (R$130)', '- Dois dias e duas noites.', '- Acesso as áreas da praia, parquinho e a Arena de Sabão.', '- 1 banho por semana.', '- 1 tosa a cada dois meses', NULL),
(3, 'Pacote Tchutchucão', '- Pacote tchutchucão (R$190)', '- Três dias e três noites.', '- Acesso a todas as áreas da hospedagem.', '- 1 banho por semana', '- 1 tosa todo mês.', '- Festinha no AUniversário do dog.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cachorro`
--

--
-- Indexes for table `cliente`
--

--
-- Indexes for table `func`
--

--
-- Indexes for table `serviço`
--
ALTER TABLE `servico`
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
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `func`
--
ALTER TABLE `func`
  MODIFY `cod_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `serviço`
--
ALTER TABLE `servico`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DROP USER IF EXISTS 'fenrir'@'localhost';
CREATE USER 'fenrir'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON fenrirpet.* TO 'fenrir'@'localhost';
