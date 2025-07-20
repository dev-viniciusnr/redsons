-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Set-2017 às 03:51
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redsons`
--
CREATE DATABASE IF NOT EXISTS `redsons` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `redsons`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `email`, `senha`) VALUES
(1, 'Rafinha', 'redsons@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `almas`
--

DROP TABLE IF EXISTS `almas`;
CREATE TABLE `almas` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `almas`
--

INSERT INTO `almas` (`id`, `usuario`, `email`, `senha`) VALUES
(1, 'vinicius', 'nico.nonato@gmail.com', '1234'),
(5, 'Gustavo', 'teste1@gmail.com', '1234'),
(6, 'vinícius', 'asdsa@gmail.com', '1234'),
(7, 'gustavo', '123@gmail.com', '1234'),
(8, 'Vinícius ', 'vinicius@gmail.com', '1234'),
(11, '', 'fg', ''),
(12, 'cleiton', 'cleiton_emailqnaoexiste@gmail.com', '1234'),
(13, 'zxfd', 'sdf@gmail.com', '1234'),
(14, 'gds', 'gsfsd', 'sgd'),
(15, 'ads', 'adsasd', 'dasdas'),
(16, 'adfs', 'fads', 'afds'),
(17, 'sf', 'sgd', 'gsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `almas`
--
ALTER TABLE `almas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `almas`
--
ALTER TABLE `almas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
