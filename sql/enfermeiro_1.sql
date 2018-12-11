-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Dez-2018 às 23:45
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prometheus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfermeiro`
--

DROP TABLE IF EXISTS `enfermeiro`;
CREATE TABLE IF NOT EXISTS `enfermeiro` (
  `IDENFERMEIRO` int(11) NOT NULL AUTO_INCREMENT,
  `TURNO` char(1) DEFAULT NULL,
  `NOME` varchar(50) NOT NULL,
  `coren` varchar(10) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `FIXO` varchar(20) DEFAULT NULL,
  `DATANASC` date DEFAULT NULL,
  `SEXO` varchar(20) DEFAULT NULL,
  `CEP` varchar(20) DEFAULT NULL,
  `NUMERO` varchar(20) DEFAULT NULL,
  `COMPLEMENTO` varchar(40) DEFAULT NULL,
  `BAIRRO` varchar(40) DEFAULT NULL,
  `CIDADE` varchar(40) DEFAULT NULL,
  `ESTADO` varchar(40) DEFAULT NULL,
  `LOGRADOURO` varchar(50) DEFAULT NULL,
  `DATACADASTRO` datetime DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDENFERMEIRO`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfermeiro`
--

INSERT INTO `enfermeiro` (`IDENFERMEIRO`, `TURNO`, `NOME`, `coren`, `EMAIL`, `FIXO`, `DATANASC`, `SEXO`, `CEP`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`, `LOGRADOURO`, `DATACADASTRO`, `celular`) VALUES
(51, NULL, 'teste', '157 157 ', 'teste@teste.com', '(11)1111-1111', '2018-12-10', 'Masculino', '22.763-530', '10', 'teste', 'Cidade de Deus', 'Rio de Janeiro', 'RJ', 'Rua Daniel', '2018-12-10 21:13:27', '(11)11111-1111'),
(52, NULL, 'teste', '157 157 ', 'teste@teste.com', '(11)1111-1111', '2018-12-10', 'Masculino', '22.763-530', '10', 'teste', 'Cidade de Deus', 'Rio de Janeiro', 'RJ', 'Rua Daniel', '2018-12-10 21:14:52', '(11)11111-1111'),
(53, NULL, 'teste', '157 157 ', 'teste@teste.com', '(11)1111-1111', '2018-12-10', 'Masculino', '22.763-530', '10', 'teste', 'Cidade de Deus', 'Rio de Janeiro', 'RJ', 'Rua Daniel', '2018-12-10 21:15:07', '(11)11111-1111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
