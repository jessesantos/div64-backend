-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 02/05/2015 às 03:47
-- Versão do servidor: 5.5.43-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `div64`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`id`, `slug`, `titulo`) VALUES
(1, 'eletronicos', 'Eletrônicos'),
(2, 'livros', 'Livros');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `thumbnail` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `categoria` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria_id`, `slug`, `nome`, `preco`, `thumbnail`) VALUES
(1, 1, 'ultrabook-samsung-530U3C-AD2', 'Ultrabook Samsung 530U3C-AD2', 2348.5, 'http://img.submarino.com.br/produtos/01/00/sku/9252/8/9252870_1GG.jpg'),
(2, 1, 'gaming-mouse-trust-gtx-152-pc-preto', 'Gaming Mouse Trust GXT 152 - PC - Preto', 108.92, 'http://isuba.s8.com.br/produtos/01/00/item/119607/6/119607627_1GG.jpg'),
(3, 1, 'camera-digital-kids-2-em-1', 'Câmera Digital Kids 2 Em 1', 39.9, 'http://img.submarino.com.br/produtos/01/00/sku/9256/3/9256320_1GG.jpg'),
(4, 2, 'pro-php-mvc', 'Pro PHP MVC', 371.52, 'http://img.submarino.com.br/produtos/01/00/sku/8828/4/8828457_1GG.jpg'),
(5, 2, 'persistence-in-php-with-the-doctrine-orm', 'Persistence In PHP With The Doctrine ORM', 202.49, 'http://img.submarino.com.br/produtos/01/00/sku/8748/1/8748164_1GG.jpg');

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
