-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 19-Dez-2013 às 03:42
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `teste`
--
CREATE DATABASE IF NOT EXISTS `teste` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`codigo`, `login`, `senha`) VALUES
(1, 'augusto', 'augusto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE IF NOT EXISTS `consultas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `identidadepaciente` varchar(10) NOT NULL,
  `nomepaciente` varchar(70) NOT NULL,
  `crm` int(20) NOT NULL,
  `nomemedico` varchar(70) NOT NULL,
  `medicamento` varchar(50) NOT NULL,
  `descricaomedicamento` varchar(200) NOT NULL,
  `descricaoconsulta` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`codigo`, `identidadepaciente`, `nomepaciente`, `crm`, `nomemedico`, `medicamento`, `descricaomedicamento`, `descricaoconsulta`) VALUES
(1, '4444444444', 'Augusto', 2, 'Renato', 'Nimensulida  500mg', '1 comprimido de 4 em 4 horas', 'inflamação nas amidalas'),
(2, '4444444444', 'Augusto', 1, 'Roberto', 'Calmador', '1 comprimido de 4 em 4 horas', 'dores pelo corpo'),
(15, '1111111111', 'Natiel Cazarotto Chiavegatti', 2, 'Renato', 'Imbuprofeno 500mg', '1 comprimido de 8 em 8 horas', ' Inflamação nas amídalas'),
(16, '6666666666', 'Alex', 2, 'Renato', 'Imbuprofeno 500mg', '1 comprimido de 8 em 8 horas', ' Inflamação na garganta'),
(21, '4444444444', 'Augusto', 3, 'Marcelo', 'calmador', '1 comprimido de 4 em 4 horas', ' descrição da consulta'),
(22, '2222222222', 'Mari', 1, 'Roberto', 'calmador', '1 comprimido de 4 em 4 horas', ' descrição da consulta'),
(23, '6666666666', 'Alex', 3, 'Marcelo', 'calmador', '1 comprimido de 4 em 4 horas', ' descrição da consulta'),
(24, '2000000000', 'Marcia', 2, 'Renato', 'calmador', '1 comprimido de 4 em 4 horas', ' descrição da consulta'),
(25, '2000000000', 'Marcia', 1, 'Roberto', 'calmador', '1 comprimido de 4 em 4 horas', ' descrição da consulta'),
(28, '2000000000', 'Marcia', 1, 'Roberto', 'Nimensulida 500mg', '1 comprimido de 4 em 4 horas', ' descrição da consulta'),
(29, '2222222222', 'Mari', 3, 'Marcelo', 'Imbuprofeno 500mg', '1 comprimido de 8 em 8 horas', ' descrição da consulta'),
(30, '2222222222', 'Mari', 3, 'Marcelo', 'calmador', '1 comprimido de 4 em 4 horas', ' descriÃ§Ã£o da consulta'),
(31, '2222222222', 'Mari', 3, 'Marcelo', 'calmador', '1 comprimido de 4 em 4 horas', ' descriÃ§Ã£o da consulta'),
(32, '2222222222', 'Mari', 3, 'Marcelo', 'calmador', '1 comprimido de 4 em 4 horas', ' descriÃ§Ã£o da consulta'),
(33, '8900000000', 'Alessandra', 1, 'Roberto', 'Imbuprofeno 500mg', '1 comprimido de 8 em 8 horas', ' descriÃ§Ã£o da consulta'),
(34, '1234567890', 'Rogerio', 4, 'Luis', 'Diclofenaco SÃ³dico 50mg', '1 comprimido de 4 em 4 horas', ' descriÃ§Ã£o da consulta'),
(35, '3422222222', 'Dione', 2, 'Renato', 'Diclofenaco SÃ³dico 50mg', '1 comprimido de 4 em 4 horas', ' descriÃ§Ã£o da consulta'),
(36, '3422222222', 'Dione', 1, 'Roberto', 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas', ' descriÃ§Ã£o da consulta'),
(37, '3422222222', 'Dione', 1, 'Roberto', 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas', ' descriÃ§Ã£o da consulta'),
(38, '3422222222', 'Dione', 1, 'Roberto', 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas', ' descriÃ§Ã£o da consulta'),
(39, '3422222222', 'Dione', 1, 'Roberto', 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas', ' descriÃ§Ã£o da consulta'),
(40, '3422222222', 'Dione', 1, 'Roberto', 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas', ' descriÃ§Ã£o da consulta'),
(41, '3422222222', 'Dione', 1, 'Roberto', 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas', ' descriÃ§Ã£o da consulta'),
(42, '3422222222', 'Dione', 1, 'Roberto', 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas', ' descriÃ§Ã£o da consulta'),
(43, '3422222222', 'Dione', 1, 'Roberto', 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas', ' descriÃ§Ã£o da consulta'),
(44, '1111111111', 'Natiel Cazarotto Chiavegatti', 3, 'Marcelo', 'Pantoprazol 20mg', '1 comprimido ao dia', ' descriÃ§Ã£o da consulta'),
(45, '2122222222', 'Vinicius', 1, 'Roberto', 'Paracetamol 750mg', '1 comprimido de 2 em 2 horas', ' descriÃ§Ã£o da consulta'),
(46, '2122222222', 'Vinicius', 2, 'Renato', 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas', ' descriÃ§Ã£o da consulta'),
(47, '2122222222', 'Vinicius', 1, 'Roberto', 'Pantoprazol 20mg', '1 comprimido ao dia', ' descriÃ§Ã£o da consulta'),
(48, '3422222222', 'Dione', 3, 'Marcelo', 'Pantoprazol 20mg', '1 comprimido ao dia', ' descriÃ§Ã£o da consulta'),
(49, '3422222222', 'Dione', 1, 'Roberto', 'Diclofenaco SÃ³dico 50mg', '1 comprimido de 4 em 4 horas', ' descriÃ§Ã£o da consulta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE IF NOT EXISTS `medicamentos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `medicamento` varchar(50) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`codigo`, `medicamento`, `descricao`) VALUES
(7, 'Imbuprofeno 500mg', '1 comprimido de 10 em 10 horas'),
(9, 'Paracetamol 750mg', '1 comprimido de 2 em 2 horas'),
(10, 'Diclofenaco SÃ³dico 50mg', '1 comprimido de 4 em 4 horas'),
(11, 'Pantoprazol 20mg', '1 comprimido ao dia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE IF NOT EXISTS `medico` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `identidade` varchar(10) NOT NULL,
  `nomemedico` varchar(70) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`codigo`, `identidade`, `nomemedico`, `crm`, `sexo`, `telefone`) VALUES
(4, '9999999999', 'Renato', '2', 'Masculino', '(55) 91929394'),
(5, '8888888888', 'Roberto', '1', 'Masculino', '(54)96979899'),
(6, '7777777777', 'Marcelo', '3', 'Masculino', '(51)98979695');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `identidade` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `data` varchar(20) NOT NULL,
  `fone` varchar(14) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`codigo`, `nome`, `identidade`, `sexo`, `data`, `fone`) VALUES
(23, 'Augusto', '4444444444', 'Masculino', '2010-03-07', '(54)33333333'),
(24, 'Natiel Cazarotto Chiavegatti', '1111111111', 'Masculino', '10-06-2012', '(54)88888888'),
(26, 'Alex', '6666666666', 'Masculino', '2012-04-25', '(55)22222222'),
(27, 'Marcia', '2000000000', 'Feminino', '2011-10-22', '(55)93939393'),
(28, 'Mari', '2222222222', 'Feminino', '2013-03-19', '(55)92929292'),
(35, 'Eder', '4444444444', 'Masculino', '11/30/2013', '(66) 66666666'),
(36, 'Rogerio', '1234567890', 'Masculino', '11/10/2013', '(00) 000000000'),
(40, 'Alessandra', '8900000000', 'Feminino', '10/14/2013', '(55) 217777777'),
(41, 'guilherme', '0101010101', 'Masculino', '06/17/2013', '(54) 87898987'),
(42, 'Fulano', '1234569870', 'Masculino', '06/17/2013', '(00) 000000000'),
(45, 'Dione', '3422222222', 'Feminino', '08/04/2013', '(55) 19911991'),
(47, 'Vinicius', '2122222222', 'Masculino', '07/08/2013', '(54) 939393939'),
(48, 'Marina', '3213333333', 'Feminino', '08/18/2013', '(54) 65676575');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `login`, `senha`) VALUES
(1, 'natiel', 'natiel'),
(7, 'augusto', 'augusto');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
