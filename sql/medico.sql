-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Dez-2018 às 03:00
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

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
-- Estrutura da tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `IDMEDICO` int(11) NOT NULL AUTO_INCREMENT,
  `CPF` varchar(50) NOT NULL,
  `CRM` varchar(20) DEFAULT NULL,
  `ESPECIAL` varchar(100) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `FIXO` varchar(50) NOT NULL,
  `CELULAR` varchar(50) NOT NULL,
  `DATANASC` varchar(50) NOT NULL,
  `SEXO` varchar(50) NOT NULL,
  `CEP` varchar(50) NOT NULL,
  `LOGRADOURO` varchar(200) NOT NULL,
  `NUMERO` varchar(50) NOT NULL,
  `COMPLEMENTO` varchar(50) NOT NULL,
  `BAIRRO` varchar(50) NOT NULL,
  `CIDADE` varchar(50) NOT NULL,
  `ESTADO` varchar(50) NOT NULL,
  PRIMARY KEY (`IDMEDICO`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`IDMEDICO`, `CPF`, `CRM`, `ESPECIAL`, `NOME`, `EMAIL`, `FIXO`, `CELULAR`, `DATANASC`, `SEXO`, `CEP`, `LOGRADOURO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`) VALUES
(4, '321.313.213-21', '0980980RJ', 'Cardiologista', 'Julio Cesar Silva', 'julio@gmail.com', '(34)1324-141', '(34)13413-4134', '1978-10-20', 'Masculino', '21.221-230', 'Rua SÃ­ria', '123', '312321', 'Penha Circular', 'Rio de Janeiro', 'RJ'),
(8, '877.987.290-84', '08090988', 'Clinico Geral', 'Gabriel Jesus', 'gabriel@gmail.com', '(09)8371-4294', '(38)74019-4731', '1983-02-01', 'Masculino', '21.520-460', 'Rua Sargento AntÃ´nio Ernesto', '202', 'Casa 3', 'Pavuna', 'Rio de Janeiro', 'RJ'),
(9, '734.698.746-92', '863476238', 'Oftalmologista', 'Andre Marques', 'andre@gmail.com', '(98)3749-7394', '(89)72498-7529', '1967-03-02', 'Masculino', '22.760-401', 'Avenida GeremÃ¡rio Dantas', '400', 'Casa 1', 'Freguesia (JacarepaguÃ¡)', 'Rio de Janeiro', 'RJ'),
(10, '321.423.413-41', '0980980SP', 'Clinico Geral', 'Lauro Barros', 'lauro@gmail.com', '(92)7048-2137', '(30)94871-0983', '1952-12-04', 'Masculino', '22.760-400', 'Avenida GeremÃ¡rio Dantas', '434', '4334', 'Freguesia (JacarepaguÃ¡)', 'Rio de Janeiro', 'RJ'),
(12, '837.409.187-34', '988.456', 'Oncologista', 'Adriano Amaral', 'amaral@gmail.com', '(98)7410-9382', '(41)08937-4019', '1975-03-07', 'Masculino', '25.565-003', 'Rua VitÃ³ria', '18', 'SL5', 'Parque Barreto', 'SÃ£o JoÃ£o de Meriti', 'RJ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
