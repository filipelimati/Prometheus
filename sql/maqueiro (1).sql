-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Dez-2018 às 01:01
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

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
-- Estrutura da tabela `maqueiro`
--

DROP TABLE IF EXISTS `maqueiro`;
CREATE TABLE IF NOT EXISTS `maqueiro` (
  `IDMAQUEIRO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CPF` varchar(50) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  `FIXO` varchar(35) NOT NULL,
  `CELULAR` varchar(35) NOT NULL,
  `DATANASC` date DEFAULT NULL,
  `SEXO` varchar(20) CHARACTER SET utf8 NOT NULL,
  `CEP` varchar(30) NOT NULL,
  `LOGRADOURO` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NUMERO` int(30) NOT NULL,
  `COMPLEMENTO` varchar(100) CHARACTER SET utf8 NOT NULL,
  `BAIRRO` varchar(50) CHARACTER SET utf8 NOT NULL,
  `CIDADE` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ESTADO` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DATACADASTRO` datetime DEFAULT NULL,
  PRIMARY KEY (`IDMAQUEIRO`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `maqueiro`
--

INSERT INTO `maqueiro` (`IDMAQUEIRO`, `NOME`, `CPF`, `EMAIL`, `FIXO`, `CELULAR`, `DATANASC`, `SEXO`, `CEP`, `LOGRADOURO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`, `DATACADASTRO`) VALUES
(1, 'Jeff all', '12345678900', 'aa@gmail.com', '2134343434', '21934343434', '1989-02-11', 'Masculino', '244561231', 'lograa', 123, 'compl', 'bairr', 'cidss', 'RJ', '2018-12-03 00:00:00'),
(3, 'Dog aaaa', '13243535465', 'gg@gmail.com', '2134343434', '21898987678', '1988-02-12', 'Feminino', '54645678', 'hjgkg jasd', 233, 'nhhuj', 'sadsa', 'biomm', 'RJ', '2018-12-04 00:00:00'),
(5, 'joar', '123455', 'ee@gmail.com', '2123232323', '21998989898', NULL, 'masculino', '23.234-234', 'ruaaa ave', 123, 'complemente', 'nilo', 'cidad', 'rj', '2018-11-11 15:25:00'),
(12, 'Jeff all', '12345678900', 'aa@gmail.com', '2134343434', '21934343434', '1988-02-12', 'Feminino', '244561231', 'lossssss', 123, 'compl', 'bairr', 'cidss', 'RJ', '2018-12-03 00:00:00'),
(13, 'Jefferson Masculino Alencar', '123.456.789-00', 'jefferson@gmail.com', '(16)2123-1231', '(12)31231-2312', '1998-03-12', 'Masculino', '26.545-150', 'Rua CÃ¢ndida', 123, '', 'Paiol de PÃ³lvora', 'NilÃ³polis', 'RJ', '2018-12-09 15:55:48'),
(14, 'asdasdasd Femininoasd', '123.123.213-21', 'fdmdffdk@gmail.com', '(12)3123-1231', '(12)31232-1312', '1998-03-12', 'Selecione', '26.545-150', 'Rua CÃ¢ndida', 123, 'asda', 'Paiol de PÃ³lvora', 'NilÃ³polis', 'RJ', '2018-12-09 18:57:45'),
(15, 'Jefferson promeheus', '123.456.789-00', 'jeff@prometheus.com', '(21)3232-3232', '(21)23232-3232', '1997-02-21', 'Feminino', '26.545-150', 'Rua CÃ¢ndida', 23, 'completado', 'Paiol de PÃ³lvora', 'NilÃ³polis', 'RJ', '2018-12-10 00:24:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
