-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Mar-2018 às 23:05
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_usuario`
--

CREATE TABLE `cadastro_usuario` (
  `id` int(3) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastro_usuario`
--

INSERT INTO `cadastro_usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'lucas', 'lucas@gmail.com', 123),
(2, 'juca', 'juca@gmail.com', 123),
(3, 'mariana', 'mariana@gmail.com', 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(3) NOT NULL,
  `games` varchar(255) COLLATE utf8_bin NOT NULL,
  `eletronico` varchar(255) COLLATE utf8_bin NOT NULL,
  `informatica` varchar(255) COLLATE utf8_bin NOT NULL,
  `celular` varchar(255) COLLATE utf8_bin NOT NULL,
  `livro` varchar(255) COLLATE utf8_bin NOT NULL,
  `roupa` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(3) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `preco` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `categoria`, `preco`, `foto`) VALUES
(1, 'Iphone X', 'celular', '7.999,00', 'iphonex.jpg'),
(2, 'Moto G5 Plus', 'celular', '1.200,00', 'motog5.jpg'),
(3, 'Samsung Galaxy S8', 'celular', '3.959,10', 's8.jpg'),
(4, 'Tv Samsung Smart 50\'', 'eletronico', '3.589,00', 'samsung.jpg'),
(6, 'Impressora HP LaserJet', 'informatica', '599,90', 'impressora.jpg'),
(7, 'Tv LG 50\'', 'eletronico', '3.299,00', 'lg.jpg'),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, 'Xbox One ', 'game', '2.219,00', 'xboxone.jpg'),
(14, '', '', '', ''),
(15, 'Playstation 4', 'game', '1.999,99', 'ps4.jpg'),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, 'Tv Philco 50\'', 'eletronico', '2.989,99', 'philco.jpg'),
(20, 'Nintendo Wii Ds', 'game', '1.199,00', 'wii.jpg'),
(21, 'Computador Positivo, quad core, 4gb RAM, HD 1Tb', 'informatica', '1.759,99', 'pc.jpg'),
(22, 'Roteador Wifi', 'informatica', '59,99', 'roteador.jpg'),
(23, 'Livro 50 tons de cinza', 'livro', '34,90', 'livro1.jpg'),
(24, 'Livro 50 tons mais escuros', 'livro', '49,90', 'livro2.jpg'),
(25, 'Livro 50 tons de liberdade', 'livro', '64,90', 'livro3.jpg'),
(26, 'Camisa Nike', 'roupa', '29,90', 'nike1.jpg'),
(27, 'Camisa Nike', 'roupa', '69,90', 'nike2.jpg'),
(28, 'Camisa Nike manga longa', 'roupa', '169,90', 'nike3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
