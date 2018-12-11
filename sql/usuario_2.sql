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
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `IDUSUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(30) NOT NULL,
  `SENHA` varchar(32) NOT NULL,
  `IDENFERMEIRO` int(11) DEFAULT NULL,
  `IDMAQUEIRO` int(11) DEFAULT NULL,
  `IDMEDICO` int(11) DEFAULT NULL,
  `IDADM` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDUSUARIO`),
  KEY `IDMEDICO` (`IDMEDICO`),
  KEY `IDENFERMEIRO` (`IDENFERMEIRO`),
  KEY `IDMAQUEIRO` (`IDMAQUEIRO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`IDUSUARIO`, `USUARIO`, `SENHA`, `IDENFERMEIRO`, `IDMAQUEIRO`, `IDMEDICO`, `IDADM`) VALUES
(1, 'Wanderson', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL),
(5, '', 'aa1bf4646de67fd9086cf6c79007026c', 51, NULL, NULL, NULL),
(6, '', 'aa1bf4646de67fd9086cf6c79007026c', 52, NULL, NULL, NULL),
(7, 'teste', 'aa1bf4646de67fd9086cf6c79007026c', 53, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`IDMEDICO`) REFERENCES `medico` (`IDMEDICO`),
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`IDENFERMEIRO`) REFERENCES `enfermeiro` (`IDENFERMEIRO`),
  ADD CONSTRAINT `usuario_ibfk_5` FOREIGN KEY (`IDMAQUEIRO`) REFERENCES `maqueiro` (`IDMAQUEIRO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
