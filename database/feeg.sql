-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2014 às 04:50
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feeg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
  `username` varchar(15) NOT NULL,
  `title` varchar(200) NOT NULL,
  `tlID` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tlID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `timeline`
--

INSERT INTO `timeline` (`username`, `title`, `tlID`) VALUES
('Digues', 'Hello Worl!', 1),
('Chimello44', 'Its a me ', 2),
('PauloJeam96', 'zoboomafoo', 3),
('Digues', 'Ola!', 4),
('Chimello44', 'PHP', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dataNascimento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`ID`, `nome`, `email`, `usuario`, `senha`, `dataNascimento`, `sexo`, `imagem`) VALUES
(2, 'Hugo Chimello', 'hugovhimello@hotmail.com', 'Chimello44', '25f9e794323b453885f5181f1b624d0b', '1994-12-20', 'Masculino', 'person.png'),
(3, 'Paulo Jeam', 'PauloJeam96@gmail.com', 'PauloJeam96', '25f9e794323b453885f5181f1b624d0b', '2014-11-05', 'Masculino', 'person.png'),
(5, 'Teste', 'teste@teste.com', 'teste', '25f9e794323b453885f5181f1b624d0b', '1994-12-20', 'Feminino', 'person.png'),
(6, 'Rodrigo Friederich', 'rodrigorfv@hotmail.com', 'Digues', '25f9e794323b453885f5181f1b624d0b', '2014-11-01', 'Masculino', 'person.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
