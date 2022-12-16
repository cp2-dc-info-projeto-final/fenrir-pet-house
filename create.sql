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
  `cod_cachorro` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `raca` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `cachorro` (`cod_cachorro`, `nome`, `idade`, `raca`, `email`) VALUES
('1', 'Fenrir', '5000 anos', 'Lobo Gigante', 'fenrirpethouse@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(220) NOT NULL,
  `data_nasc` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome`, `senha`, `email`, `data_nasc`) VALUES
('1','Thiago Silva','testeteste','thiagosilvade06@gmail.com','03/09/2005');
-- --------------------------------------------------------

--
-- Estrutura da tabela `func`
--

CREATE TABLE `func` (
  `cod_func` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `func`
--

INSERT INTO `func` (`cod_func`, `nome`, `email`, `data_nasc`, `senha`, `cpf`, `IsAdmin`) VALUES
('1', 'Fenrir', 'fenrirpethouse@gmail.com', '01/01/2000', 'audmin', '00000000000', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `serviço`
--

CREATE TABLE `servico` (
  `idServico` int(11) NOT NULL,
  `hora_disp` int(11) NOT NULL,
  `agenda_tstamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descricao` varchar(50) NOT NULL,
  `agenda_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `serviço`
--

INSERT INTO `servico` (`idServico`, `hora_disp`, `agenda_tstamp`, `descricao`, `agenda_status`) VALUES
(6, 1, '2022-12-23 12:00:00', '.', 0),
(5, 1, '2022-12-22 12:00:00', '.', 0),
(4, 1, '2022-12-21 12:00:00', '.', 0),
(3, 1, '2022-12-20 12:00:00', '.', 0),
(2, 1, '2022-12-19 12:00:00', '.', 0),
(1, 1, '2022-12-18 12:00:00', '.', 0),
(7, 1, '2022-12-24 12:00:00', '.', 0),
(8, 1, '2022-12-18 20:00:00', '.', 0),
(9, 1, '2022-12-19 20:00:00', '.', 0),
(10, 1, '2022-12-20 20:00:00', '.', 0),
(11, 1, '2022-12-21 20:00:00', '.', 0),
(12, 1, '2022-12-22 20:00:00', '.', 0),
(13, 1, '2022-12-23 20:00:00', '.', 0),
(14, 1, '2022-12-24 20:00:00', '.', 0);

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
