-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 22-Jun-2018 às 23:48
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `discoplay`
--
CREATE DATABASE IF NOT EXISTS `discoplay` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `discoplay`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bandas`
--

CREATE TABLE IF NOT EXISTS `bandas` (
  `id_banda` int(11) NOT NULL AUTO_INCREMENT,
  `nome_banda` varchar(50) NOT NULL,
  `instrumentos_banda` varchar(200) NOT NULL,
  PRIMARY KEY (`id_banda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `bandas`
--

INSERT INTO `bandas` (`id_banda`, `nome_banda`, `instrumentos_banda`) VALUES
(1, 'Little Mix', 'Violao'),
(2, 'Maroon 5', 'Guitarra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cantores`
--

CREATE TABLE IF NOT EXISTS `cantores` (
  `id_cantor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cantor` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `ocupacao` varchar(100) NOT NULL,
  `instrumento` varchar(100) NOT NULL,
  `ext_vocal` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cantor`),
  KEY `id_cantor` (`id_cantor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `cantores`
--

INSERT INTO `cantores` (`id_cantor`, `nome_cantor`, `idade`, `ocupacao`, `instrumento`, `ext_vocal`) VALUES
(2, 'Shawn Mendes', 20, 'Cantor-compositor', 'Violao e vocal', 'baritenor'),
(3, 'Dua Lipa', 22, 'cantor-compositor', 'apenas vocal', 'soprano'),
(4, 'Adele', 22, 'cantora', 'apenas vocal', 'contralto'),
(5, 'Adele', 22, 'cantora', 'apenas vocal', 'contralto'),
(7, 'Dua Lipa', 25, 'Cantora-compositora', 'vocal', 'soprano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `nome_genero` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id_genero`),
  KEY `id_genero` (`id_genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `nome_genero`, `descricao`) VALUES
(1, 'POP', 'Gênero da atualidade'),
(4, 'ROCK', 'O genero que marca gerações'),
(5, 'Sertanejo', 'genero musical caracteristico brasilero'),
(6, 'Samba', 'samba'),
(7, 'Samba', 'samba'),
(8, 'KPOP', 'Musica coreana');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE IF NOT EXISTS `musicas` (
  `id_musica` int(11) NOT NULL AUTO_INCREMENT,
  `nome_musica` varchar(100) NOT NULL,
  `ano_lanc` int(4) NOT NULL,
  `duracao` int(11) NOT NULL,
  `album` varchar(100) NOT NULL,
  `cantor` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  PRIMARY KEY (`id_musica`),
  KEY `id_musica` (`id_musica`,`cantor`,`genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `musicas`
--

INSERT INTO `musicas` (`id_musica`, `nome_musica`, `ano_lanc`, `duracao`, `album`, `cantor`, `genero`) VALUES
(1, 'Shout out to my ex', 2016, 408, 'Glory Days', '1', '1'),
(2, 'Only You', 2018, 356, 'Only You', '1', '1'),
(3, 'Girls like you', 2018, 408, 'xxx', '', '1'),
(4, 'Theres nothing holding me back', 2015, 405, 'shawn', '2', '1'),
(5, 'teste', 2002, 202, '202', '', '1'),
(6, 'teste', 2002, 202, '202', '', '1'),
(7, 'One kiss', 2017, 4, 'Dua Lipa', '', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `permissao` enum('admin','cliente','','') NOT NULL DEFAULT 'cliente',
  PRIMARY KEY (`id_usuario`),
  KEY `id_cliente` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `sexo`, `data_nasc`, `permissao`) VALUES
(2, 'Akyza', 'akyza@email.com', 'akyza', 'F', '1999-06-15', 'cliente'),
(7, 'admin', 'admin@admin.com', '123admin', NULL, NULL, 'admin'),
(8, 'Hillary', 'hillary@email.com', 'hillary123', 'F', '1999-09-17', 'cliente'),
(9, 'Giovanna', 'giovanna@email.com', '123', 'F', '2018-06-01', 'cliente');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
