-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Nov-2020 às 06:08
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fseletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `msg` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `msg`, `data`) VALUES
(13, 'Gilvan', 'Geral', '2020-11-04 23:07:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `Id_pedidos` int(11) NOT NULL AUTO_INCREMENT,
  `idprod` int(10) NOT NULL,
  `Cliente` varchar(100) NOT NULL,
  `Endereco` varchar(150) NOT NULL,
  `Telefone` int(11) NOT NULL,
  `Nome_produto` varchar(80) NOT NULL,
  `Valor_unit` decimal(8,2) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `Valor_final` decimal(8,2) NOT NULL,
  PRIMARY KEY (`Id_pedidos`),
  KEY `idprod` (`idprod`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`Id_pedidos`, `idprod`, `Cliente`, `Endereco`, `Telefone`, `Nome_produto`, `Valor_unit`, `Quantidade`, `Valor_final`) VALUES
(50, 2, 'Gilvan Oliveira', 'Rua Vitoria, 12 - Itaim Paulista, Osasco - SP', 1190909090, 'Geladeira', '5019.00', 2, '10038.00'),
(51, 8, 'Gilvan Oliveira', 'Rua Vitoria, 12 - Itaim Paulista, Osasco - SP', 1190909090, 'Microondas', '464.53', 3, '1393.59'),
(47, 13, 'Ana Caroline Araujo', 'Rua Eduardo Inocente, 100', 119889899, 'Lava-Roupas', '2179.90', 1, '2179.90'),
(46, 8, 'Daniel Barbosa', 'Rua Brilho do Sol, 100', 2134299899, 'Microondas', '464.53', 2, '929.06'),
(45, 7, 'Paulo Guimarães', 'Rua Esmeralda, 100', 1199299899, 'Microondas', '409.88', 3, '1229.64'),
(44, 6, 'Kelly Mendonça', 'Rua Salto, 100', 1989299899, 'Fogão', '519.70', 4, '2078.80'),
(43, 5, 'Deise Amaro', 'Rua Manuel Pimenta, 320', 1149299899, 'Fogão', '1129.00', 1, '1129.00'),
(42, 3, 'Manoel Valente', 'Rua Morro alto, 280', 1159299899, 'Geladeira', '1910.90', 3, '5732.70'),
(41, 2, 'Carlos Cunha', 'Rua Tocantins, 18', 1378299899, 'Geladeira', '5019.00', 2, '10038.00'),
(38, 4, 'Jessica Carvalho', 'Rua Nova, 10', 1237799899, 'Geladeira', '2069.00', 1, '2069.00'),
(39, 4, 'Marta Cavalcante', 'Rua Magalhães, 10', 1239299899, 'Geladeira', '2069.00', 2, '4138.00'),
(40, 5, 'Maria Rosa', 'Rua Enseada Norte, 187', 1198979999, 'Fogão', '1129.00', 1, '1129.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome_produto`, `descricao`, `imagem`, `preco`, `precofinal`) VALUES
(2, 'Geladeira', 'Geladeira Frost free Brastemp Side inverse 540 litros', './imagens/produtos/geladeira-3.jpeg', '6389.00', '5019.00'),
(3, 'Geladeira', 'Geladeira Frost free Brastemp Branca 375 litros', './imagens/produtos/geladeira.jpeg', '2100.00', '1910.90'),
(4, 'Geladeira', 'Geladeira Frost free Consul Prata 340 Litros', './imagens/produtos/geladeira-2.jpeg', '2100.00', '2069.00'),
(5, 'Fogao', 'Fog&atilde;o 4 Bocas Consul Inox com Mesa de Vidro', './imagens/produtos/fogao-1.jpeg', '1200.00', '1129.00'),
(6, 'Fogao', 'Fog&atilde;o de Piso 4 Bocas Atlas Monaco com Acedimento Autom&aacute;tico', './imagens/produtos/fogao-2.jpeg', '600.00', '519.70'),
(7, 'Microondas', 'Micro-ondas Consul 32 Litros Inox 220V', './imagens/produtos/micro-waves.jpeg', '590.00', '409.88'),
(8, 'Microondas', 'Microondas 25L Brastemp 220V', './imagens/produtos/microondas.jpeg', '508.70', '464.53'),
(9, 'Microondas', 'Forno Micro-ondas Eletrolux 20L Branco', './imagens/produtos/microondas2.jpeg', '459.90', '436.05'),
(10, 'Lava-loucas', 'Lava-Lou&ccedil;as Eletrolux Inox com 10 Servi&ccedil;os', './imagens/produtos/lava-louca.jpeg', '3590.00', '2799.90'),
(11, 'Lava-loucas', 'Lava Lou&ccedil;as Compacta 8 servi&ccedil;os Branca 127V', './imagens/produtos/fogao-3.jpeg', '1970.60', '1730.61'),
(12, 'Lava-roupas', 'Lavadoura de Roupas Brastemp 11Kg Branca', './imagens/produtos/maquina-lavar.jpeg', '1600.00', '1214.10'),
(13, 'Lava-roupas', 'Lavadoura de Roupas Philco Branca 12KG', './imagens/produtos/maquinq-lavae-2.jpeg', '2399.90', '2179.90');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
