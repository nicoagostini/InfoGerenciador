-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Out-2016 às 15:28
-- Versão do servidor: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aluno_info`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE IF NOT EXISTS `caixa` (
  `idmovimento` int(254) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idmovimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`idmovimento`, `tipo`, `valor`, `data`, `descricao`) VALUES
(2, 'Saída', '100', '2016-08-09', 'Memoria HyperX 8GB DDR3 1600 Kingston, Mazer, quantidade:2 ao custo de 50 por unidade.'),
(3, 'Saída', '1000', '2016-08-09', 'Fonte 450W C3Tech, Pauta, quantidade:5 ao custo de 200 por unidade.'),
(10, 'Saída', '250', '2016-08-09', 'DVD/CD Gravador de DVD LG, Braile, quantidade: 5 ao custo de 50 por unidade.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cf`
--

CREATE TABLE IF NOT EXISTS `cf` (
  `idcf` int(254) NOT NULL AUTO_INCREMENT,
  `nome` varchar(254) NOT NULL,
  `CPF` int(254) NOT NULL,
  `telefone` varchar(254) NOT NULL,
  `telefone2` int(254) NOT NULL,
  `endereço` varchar(254) NOT NULL,
  `cidade` varchar(254) NOT NULL,
  `uf` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  PRIMARY KEY (`idcf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Extraindo dados da tabela `cf`
--

INSERT INTO `cf` (`idcf`, `nome`, `CPF`, `telefone`, `telefone2`, `endereço`, `cidade`, `uf`, `email`) VALUES
(1, 'Marcos Doval T', 2035265410, '549956452', 0, 'David Canabarro 354', 'Garibaldi', 'RS', 'david@marcos.com.br'),
(2, 'Nico', 2038263027, '5499253265', 54, 'Davi do guetto', 'Gariba', 'RS&#39;', 'niasd@dasc.om'),
(3, 'Nico', 2038263027, '5499253265', 54, 'Davi do guetto', 'Gariba', 'RS&#39;', 'niasd@dasc.om'),
(4, 'Nico', 2038263027, '5499253265', 54, 'Davi do guetto', 'Gariba', 'RS&#39;', 'niasd@dasc.om'),
(5, 'Nico', 2038263027, '5499253265', 54, 'Davi do guetto', 'Gariba', 'RS&#39;', 'niasd@dasc.om'),
(6, 'Nico', 2038263027, '5499253265', 54, 'Davi do guetto', 'Gariba', 'RS&#39;', 'niasd@dasc.om'),
(7, 'Nico', 2038263027, '5499253265', 54, 'Davi do guetto', 'Gariba', 'RS&#39;', 'niasd@dasc.om'),
(8, 'teste', 788, '544', 0, 'asdad', 'das', 'dsa', 'asd@das.com'),
(9, 'teste', 788, '544', 0, 'asdad', 'das', 'dsa', 'asd@das.com'),
(10, 'teste', 788, '544', 0, 'asdad', 'das', 'dsa', 'asd@das.com'),
(11, 'teste', 788, '544', 0, 'asdad', 'das', 'dsa', 'asd@das.com'),
(12, 'teste', 788, '544', 0, 'asdad', 'das', 'dsa', 'asd@das.com'),
(13, 'asdas', 4464, '64684', 0, 'dad', 'dasd', 'das', 'asd@das.com'),
(14, 'asdas', 4464, '64684', 0, 'dad', 'dasd', 'das', 'asd@das.com'),
(15, 'asdas', 4464, '64684', 0, 'dad', 'dasd', 'das', 'asd@das.com'),
(16, 'asdas', 4464, '64684', 0, 'dad', 'dasd', 'das', 'asd@das.com'),
(17, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(18, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(19, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(20, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(21, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(22, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(23, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(24, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(25, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(26, 'asdas', 464, '684684', 0, 'das', 'dad', 'das', 'das@das.co'),
(27, 'asd', 6464, '64654', 654564, 'dasd', 'dasd', 'sad', 'dasd@as.co'),
(28, 'ads', 0, '5131', 351351, '351', 'aasd', 'dsa', 'das@das.co'),
(29, 'ads', 0, '5131', 351351, '351', 'aasd', 'dsa', 'das@das.co'),
(30, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(31, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(32, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(33, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(34, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(35, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(36, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(37, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(38, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(39, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(40, 'asd', 0, '321351', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(41, 'asd', 0, 'sdasda', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(42, 'asd', 0, 'sdasda', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(43, 'asd', 0, 'sdasda', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(44, 'asd', 0, 'sdasda', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(45, 'asd', 0, 'sdasda', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(46, 'asd', 0, 'sdasda', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(47, 'asd', 0, 'sdasda', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(48, 'asd', 0, 'sdasda', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk'),
(49, 'asd', 0, 'sdasda', 351351, 'dasdad', 'adsas', 'dsad', 'dsa@das.comk');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cj`
--

CREATE TABLE IF NOT EXISTS `cj` (
  `idcj` int(254) NOT NULL AUTO_INCREMENT,
  `nome` varchar(254) NOT NULL,
  `CNPJ` varchar(254) NOT NULL,
  `ie` varchar(254) NOT NULL,
  `telefone` varchar(254) NOT NULL,
  `telefone2` varchar(254) NOT NULL,
  `endereco` varchar(254) NOT NULL,
  `cidade` varchar(254) NOT NULL,
  `uf` varchar(254) NOT NULL,
  `responsavel` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  PRIMARY KEY (`idcj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cj`
--

INSERT INTO `cj` (`idcj`, `nome`, `CNPJ`, `ie`, `telefone`, `telefone2`, `endereco`, `cidade`, `uf`, `responsavel`, `email`) VALUES
(1, 'Madem SA', '121684/000141/2', '5643434333', '5499264132', '5434612154', 'Estrada do ar, 477', 'Gravataí', 'RS', 'Joelson Rimari', 'madem@madem.com'),
(2, 'Teste', '654364', '3543543', '3543', '535435', 'asda', 'dasd', 'dasd', 'sdsada', 'dasd@as.co');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE IF NOT EXISTS `fornecedores` (
  `idfornecedor` int(254) NOT NULL AUTO_INCREMENT,
  `nome` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idfornecedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`idfornecedor`, `nome`, `telefone`, `email`) VALUES
(1, 'Mazer', '5554689532', 'mazer@mazer.com'),
(2, 'Pauta', '5546513246', 'pauta@pauta.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE IF NOT EXISTS `itens` (
  `idvenda` int(254) NOT NULL,
  `idproduto` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`idvenda`, `idproduto`) VALUES
(29, 4),
(29, 7),
(30, 4),
(30, 7),
(31, 7),
(31, 8),
(31, 1),
(32, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenso`
--

CREATE TABLE IF NOT EXISTS `itenso` (
  `idorcamento` int(254) NOT NULL,
  `iditem` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itenso`
--

INSERT INTO `itenso` (`idorcamento`, `iditem`) VALUES
(4, 4),
(4, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc`
--

CREATE TABLE IF NOT EXISTS `lc` (
  `idregistro` int(254) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`idregistro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE IF NOT EXISTS `orcamento` (
  `idorcamento` int(254) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(254) NOT NULL,
  `valor` int(254) NOT NULL,
  `data` date NOT NULL,
  `classe` varchar(254) NOT NULL,
  PRIMARY KEY (`idorcamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`idorcamento`, `cliente`, `valor`, `data`, `classe`) VALUES
(4, '1', 455, '2016-10-18', 'cj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `idproduto` int(254) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(254) NOT NULL,
  `descricao` varchar(254) NOT NULL,
  `marca` varchar(254) NOT NULL,
  `fornecedor` varchar(254) NOT NULL,
  `quantidade` varchar(254) NOT NULL,
  `custo` varchar(254) NOT NULL,
  `precofinal` varchar(254) NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `categoria`, `descricao`, `marca`, `fornecedor`, `quantidade`, `custo`, `precofinal`) VALUES
(4, 'Memoria', 'HyperX 4GB DDR3 1600', 'Kingston', 'Mazer', '3', '120', '160'),
(8, 'Fonte', '450W', 'C3Tech', 'Pauta', '4', '200', '220'),
(15, 'DVD/CD', 'Gravador de DVD', 'LG', 'Braile', '5', '50', '75');

-- --------------------------------------------------------

--
-- Estrutura da tabela `saldo`
--

CREATE TABLE IF NOT EXISTS `saldo` (
  `caixa` int(254) NOT NULL,
  `receber` int(254) NOT NULL,
  `devendo` int(254) NOT NULL,
  PRIMARY KEY (`caixa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `saldo`
--

INSERT INTO `saldo` (`caixa`, `receber`, `devendo`) VALUES
(3750, 350, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tdl`
--

CREATE TABLE IF NOT EXISTS `tdl` (
  `idregistro` int(254) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(254) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`idregistro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(254) NOT NULL AUTO_INCREMENT,
  `nome` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `senha` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Nico', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE IF NOT EXISTS `venda` (
  `idvenda` int(254) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(254) NOT NULL,
  `valor` varchar(254) NOT NULL,
  `pagamento` varchar(254) NOT NULL,
  `data` varchar(254) NOT NULL,
  `classe` varchar(254) NOT NULL,
  PRIMARY KEY (`idvenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`idvenda`, `cliente`, `valor`, `pagamento`, `data`, `classe`) VALUES
(29, '1', '230', 'À vista', '2016-10-18', 'cj'),
(30, '27', '230', 'A prazo', '2016-10-18', 'cf'),
(31, '1', '365', 'À vista', '2016-10-18', 'cj'),
(32, '1', '160', 'À vista', '2016-10-18', 'cj');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
