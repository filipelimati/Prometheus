-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Dez-2018 às 01:00
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
-- Estrutura da tabela `tecnico`
--

DROP TABLE IF EXISTS `tecnico`;
CREATE TABLE IF NOT EXISTS `tecnico` (
  `IDTECNICO` int(11) NOT NULL AUTO_INCREMENT,
  `COREN` varchar(30) NOT NULL,
  `NOME` varchar(200) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CPF` varchar(50) CHARACTER SET utf8 NOT NULL,
  `FIXO` varchar(30) NOT NULL,
  `CELULAR` varchar(20) NOT NULL,
  `DATANASC` date DEFAULT NULL,
  `SEXO` varchar(20) CHARACTER SET utf8 NOT NULL,
  `CEP` varchar(50) CHARACTER SET utf8 NOT NULL,
  `logradouro` varchar(300) CHARACTER SET utf8 NOT NULL,
  `NUMERO` int(30) NOT NULL,
  `COMPLEMENTO` varchar(300) CHARACTER SET utf8 NOT NULL,
  `BAIRRO` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CIDADE` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ESTADO` varchar(30) CHARACTER SET utf8 NOT NULL,
  `DATACADASTRO` datetime DEFAULT NULL,
  PRIMARY KEY (`IDTECNICO`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`IDTECNICO`, `COREN`, `NOME`, `EMAIL`, `CPF`, `FIXO`, `CELULAR`, `DATANASC`, `SEXO`, `CEP`, `logradouro`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`, `DATACADASTRO`) VALUES
(11, '111RJ', 'jefferson Alencar', 'jefferson@gmail.com', '17467777767', '2123232323', '2147483333', NULL, 'Masculino', '26454555', 'Logradouto aa', 1234, 'complemento', 'bairro', 'cidade', 'RJ', NULL),
(48, '122.232', 'Jailson Jaja', 'jj@prometheus.com', '123.456.789-00', '(21)2323-2323', '(21)92323-2323', '1988-02-12', 'Masculino', '26.545-150', 'Rua CÃ¢ndida', 23, 'aaaa', 'Paiol de PÃ³lvora', 'NilÃ³polis', 'RJ', '2018-12-09 17:54:27'),
(49, '123.455', 'Agostinho Alencar de Souza', 'agostinhoalencar@outlook.com', '123.456.789-00', '(21)3760-5621', '(21)99999-9999', '1950-03-10', 'Masculino', '26.545-150', 'Rua CÃ¢ndida', 1259, 'Lote 151 Casa E', 'Paiol de PÃ³lvora', 'NilÃ³polis', 'RJ', '2018-12-09 18:54:31'),
(50, '123.123', 'Jeffer Alencar', 'as@gmail.com', '123.213.123-12', '(21)3123-1232', '(12)31231-2312', '1998-03-21', 'Masculino', '26.545-150', 'Rua CÃ¢ndida', 123, 'aaaaa', 'Paiol de PÃ³lvora', 'NilÃ³polis', 'RJ', '2018-12-09 19:53:49'),
(51, '123.456', 'Jefferson Alencar', 'jefferson@prometheus.com', '123.456.789-00', '(21)4002-8922', '(21)94002-8922', '1997-09-21', 'Masculino', '26.545-150', 'Rua CÃ¢ndida', 1222, 'Lote 2100', 'Paiol de PÃ³lvora', 'NilÃ³polis', 'RJ', '2018-12-09 22:32:22'),
(52, '666.666', 'Zezin do zaass', 'ze@prometheus.com', '121.212.121-21', '(21)6666-6666', '(21)99777-7777', '1996-06-06', 'Masculino', '22.222-222', 'Carlos logradouro', 233, 'Lote casa Apt', 'Rosa Cruz', 'Salpita', 'PB', '2018-12-09 22:55:41'),
(53, '676.776', 'Carlos CONTRATANTE Net', 'carlin@prometheus.com', '123.778.998-88', '(21)2111-2121', '(21)12323-3232', '1978-03-23', 'Masculino', '34.343-434', 'Lojadouro', 3443, 'Completado', 'Gardenia Azul', 'Asas', 'RJ', '2018-12-09 23:00:37'),
(54, '121.212', 'Jefferson Masculino Alencar', 'ccard@cu.com', '121.212.121-22', '1231231231', '(12)12121-2121', '8771-12-12', 'Masculino', '26.545-150', 'Rua CÃ¢ndida', 12, 'ASa', 'Paiol de PÃ³lvora', 'NilÃ³polis', 'RJ', '2018-12-09 23:16:21'),
(55, '676.776', 'Carlos CONTRATANTE Net', '', '123.778.998-88', '(21)2111-2121', '(21)12323-3232', '1978-03-23', 'Masculino', '34.343-434', 'Lojadouro', 3443, 'Completado', 'Gardenia Azul', 'Asas', 'RJ', '2018-12-09 23:22:19'),
(56, '666.666', 'Calors aarau', '', '121.212.121-21', '(21)6666-6666', '(21)99777-7777', '1996-06-06', 'Masculino', '22.222-222', 'Carlos logradouro', 233, 'Lote casa Apt', 'Rosa Cruz', 'Salpita', 'PB', '2018-12-09 23:29:23'),
(57, '666.666', 'Calors salpita', 'aaa@gmail.com', '121.212.121-21', '(21)6666-6666', '(21)99777-7777', '1996-06-06', 'Masculino', '22.222-222', 'Carlos logradouro', 233, 'Lote casa Apt', 'Rosa Cruz', 'Salpita', 'PB', '2018-12-09 23:29:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
