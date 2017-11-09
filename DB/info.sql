-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 08:29 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `caixa`
--

CREATE TABLE `caixa` (
  `idmovimento` int(254) NOT NULL,
  `tipo` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cf`
--

CREATE TABLE `cf` (
  `idcf` int(254) NOT NULL,
  `nome` varchar(254) NOT NULL,
  `CPF` int(254) NOT NULL,
  `telefone` varchar(254) NOT NULL,
  `telefone2` int(254) NOT NULL,
  `endereço` varchar(254) NOT NULL,
  `cidade` varchar(254) NOT NULL,
  `uf` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cj`
--

CREATE TABLE `cj` (
  `idcj` int(254) NOT NULL,
  `nome` varchar(254) NOT NULL,
  `CNPJ` varchar(254) NOT NULL,
  `ie` varchar(254) NOT NULL,
  `telefone` varchar(254) NOT NULL,
  `telefone2` varchar(254) NOT NULL,
  `endereco` varchar(254) NOT NULL,
  `cidade` varchar(254) NOT NULL,
  `uf` varchar(254) NOT NULL,
  `responsavel` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fornecedores`
--

CREATE TABLE `fornecedores` (
  `idfornecedor` int(254) NOT NULL,
  `nome` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itens`
--

CREATE TABLE `itens` (
  `idvenda` int(254) NOT NULL,
  `idproduto` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itenso`
--

CREATE TABLE `itenso` (
  `idorcamento` int(254) NOT NULL,
  `iditem` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lc`
--

CREATE TABLE `lc` (
  `idregistro` int(254) NOT NULL,
  `descricao` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orcamento`
--

CREATE TABLE `orcamento` (
  `idorcamento` int(254) NOT NULL,
  `cliente` varchar(254) NOT NULL,
  `valor` int(254) NOT NULL,
  `data` date NOT NULL,
  `classe` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(254) NOT NULL,
  `categoria` varchar(254) NOT NULL,
  `descricao` varchar(254) NOT NULL,
  `marca` varchar(254) NOT NULL,
  `fornecedor` varchar(254) NOT NULL,
  `quantidade` varchar(254) NOT NULL,
  `custo` varchar(254) NOT NULL,
  `precofinal` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `caixa` int(254) NOT NULL,
  `receber` int(254) NOT NULL,
  `devendo` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`caixa`, `receber`, `devendo`) VALUES
(3000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tdl`
--

CREATE TABLE `tdl` (
  `idregistro` int(254) NOT NULL,
  `descricao` varchar(254) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(254) NOT NULL,
  `nome` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `senha` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Nico', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `venda`
--

CREATE TABLE `venda` (
  `idvenda` int(254) NOT NULL,
  `cliente` varchar(254) NOT NULL,
  `valor` varchar(254) NOT NULL,
  `pagamento` varchar(254) NOT NULL,
  `data` varchar(254) NOT NULL,
  `classe` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`idmovimento`);

--
-- Indexes for table `cf`
--
ALTER TABLE `cf`
  ADD PRIMARY KEY (`idcf`);

--
-- Indexes for table `cj`
--
ALTER TABLE `cj`
  ADD PRIMARY KEY (`idcj`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`idfornecedor`);

--
-- Indexes for table `lc`
--
ALTER TABLE `lc`
  ADD PRIMARY KEY (`idregistro`);

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`idorcamento`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`caixa`);

--
-- Indexes for table `tdl`
--
ALTER TABLE `tdl`
  ADD PRIMARY KEY (`idregistro`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`idvenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caixa`
--
ALTER TABLE `caixa`
  MODIFY `idmovimento` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cf`
--
ALTER TABLE `cf`
  MODIFY `idcf` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `cj`
--
ALTER TABLE `cj`
  MODIFY `idcj` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `idfornecedor` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lc`
--
ALTER TABLE `lc`
  MODIFY `idregistro` int(254) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `idorcamento` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tdl`
--
ALTER TABLE `tdl`
  MODIFY `idregistro` int(254) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `idvenda` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
