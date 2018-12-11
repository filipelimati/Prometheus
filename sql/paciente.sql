-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Dez-2018 às 23:46
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
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `IDPACIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `CPF` varchar(20) NOT NULL,
  `DATANASC` date NOT NULL,
  `NOME` varchar(200) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `FIXO` varchar(20) DEFAULT NULL,
  `CELULAR` varchar(20) DEFAULT NULL,
  `SEXO` varchar(20) DEFAULT NULL,
  `CEP` varchar(20) DEFAULT NULL,
  `LOGRADOURO` varchar(40) DEFAULT NULL,
  `NUMERO` varchar(10) DEFAULT NULL,
  `COMPLEMENTO` varchar(50) DEFAULT NULL,
  `BAIRRO` varchar(50) DEFAULT NULL,
  `CIDADE` varchar(50) DEFAULT NULL,
  `ESTADO` varchar(2) DEFAULT NULL,
  `OBS` varchar(999) DEFAULT NULL,
  `DATACADASTRO` datetime DEFAULT NULL,
  PRIMARY KEY (`IDPACIENTE`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`IDPACIENTE`, `CPF`, `DATANASC`, `NOME`, `EMAIL`, `FIXO`, `CELULAR`, `SEXO`, `CEP`, `LOGRADOURO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`, `OBS`, `DATACADASTRO`) VALUES
(3, '169.638.012-01', '2018-12-09', 'Wanderson Neres', 'wandin@teste.com', '(22)2222-2222', '(22)22222-2222', 'Masculino', '22.763-530', 'Rua Daniel', '82', 'teste', 'Cidade de Deus', 'Rio de Janeiro', 'RJ', 'teste', '2018-12-09 14:04:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
