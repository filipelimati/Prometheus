-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Dez-2018 às 23:19
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
-- Estrutura da tabela `alerta`
--

DROP TABLE IF EXISTS `alerta`;
CREATE TABLE IF NOT EXISTS `alerta` (
  `IDTECNICO` int(11) NOT NULL,
  `IDPACIENTE` int(11) NOT NULL,
  KEY `IDPACIENTE` (`IDPACIENTE`),
  KEY `IDTECNICO` (`IDTECNICO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `FIXO` varchar(11) DEFAULT NULL,
  `DATANASC` date DEFAULT NULL,
  `SEXO` varchar(20) DEFAULT NULL,
  `CEP` varchar(20) DEFAULT NULL,
  `NUMERO` varchar(20) DEFAULT NULL,
  `COMPLEMENTO` varchar(40) DEFAULT NULL,
  `BAIRRO` varchar(40) DEFAULT NULL,
  `CIDADE` varchar(40) DEFAULT NULL,
  `ESTADO` varchar(40) DEFAULT NULL,
  `LOGRADOURO` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDENFERMEIRO`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfermeiro`
--

INSERT INTO `enfermeiro` (`IDENFERMEIRO`, `TURNO`, `NOME`, `coren`, `EMAIL`, `FIXO`, `DATANASC`, `SEXO`, `CEP`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`, `LOGRADOURO`) VALUES
(2, NULL, 'Wanderson Masculino Neres', '123', 'wand.jn@gmail.com', '2124456384', '2018-12-01', 'Feminino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt403'),
(3, NULL, 'teste', '123', 'teste@gmail.com', '2124456384', '2018-12-01', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(4, NULL, 'Wanderson Feminino Neres', '1020', 'wand.jn@gmail.com', '2124456384', '2018-12-01', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt403'),
(5, NULL, 'Wanderson Selecione Neres', '123', 'wand.jn@gmail.com', '2124456384', '2018-12-01', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(6, NULL, 'Wanderson Selecione Neres', '1000', 'wand.jn@gmail.com', '2124456384', '2018-12-01', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(7, NULL, 'Wanderson Selecione Neres', '123', 'wand.jn@gmail.com', '2124456384', '2018-12-04', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(8, NULL, 'Wanderson Selecione Neres', '123', 'wand.jn@gmail.com', '2124456384', '2018-12-04', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(9, NULL, 'teste Masculino', '123', 'teste@gmail.com', '2124456384', '2018-12-12', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(10, NULL, 'Wanderson Selecione Neres', '123', 'wand.jn@gmail.com', '2124456384', '2018-12-18', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(11, NULL, 'Wanderson Selecione Neres', '123', 'wand.jn@gmail.com', '2124456384', '2018-12-18', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(12, NULL, 'Wanderson Selecione Neres', '1020', 'teste@gmail.com', '2124456384', '2018-12-17', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(13, NULL, 'Wanderson Selecione Neres', '123', 'teste@gmail.com', '2124456384', '2018-12-10', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(14, NULL, 'Wanderson Selecione Neres', '1020', 'teste@gmail.com', '2124456384', '2018-11-27', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(15, NULL, 'Wanderson Selecione Neres', '123', 'teste@gmail.com', '2124456384', '2018-12-19', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(16, NULL, 'teste Masculino Masculino', '123', 'teste@gmail.com', '2124456384', '2018-12-10', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(17, NULL, 'Wanderson Masculino Neres', '555', 'wand.jn@gmail.com', '2124456384', '2018-12-17', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt403'),
(18, NULL, 'Wanderson Selecione Neres', '666', 'wand.jn@gmail.com', '2124456384', '2018-12-11', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(19, NULL, 'teste Masculino Masculino', '667', 'teste@gmail.com', '2124456384', '2018-12-13', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(20, NULL, 'teste Masculino Masculino', '555', 'teste@gmail.com', '2124456384', '2018-12-18', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403'),
(21, NULL, 'Wanderson Feminino Neres', '1000', 'wand.jn@gmail.com', '2124456384', '2018-12-13', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt403'),
(22, NULL, 'Wanderson Masculino Neres', '1020', 'wand.jn@gmail.com', '2124456384', '2018-12-25', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt403'),
(23, NULL, 'teste Masculino Masculino', '1000', 'teste@gmail.com', '2124456384', '2018-12-18', 'Masculino', '22750009', '890', 'teste', 'teste', 'Rio de Janeiro', 'RJ', 'Rua Tirol, 890, apt 403');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfermeiromedicamento`
--

DROP TABLE IF EXISTS `enfermeiromedicamento`;
CREATE TABLE IF NOT EXISTS `enfermeiromedicamento` (
  `IDENFERMEIRO` int(11) NOT NULL,
  `IDMEDICAMENTO` int(11) NOT NULL,
  KEY `IDMEDICAMENTO` (`IDMEDICAMENTO`),
  KEY `IDENFERMEIRO` (`IDENFERMEIRO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfermeiroprontuario`
--

DROP TABLE IF EXISTS `enfermeiroprontuario`;
CREATE TABLE IF NOT EXISTS `enfermeiroprontuario` (
  `IDENFERMEIRO` int(11) NOT NULL,
  `IDPRONTUARIO` int(11) NOT NULL,
  KEY `IDPRONTUARIO` (`IDPRONTUARIO`),
  KEY `IDENFERMEIRO` (`IDENFERMEIRO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerencia`
--

DROP TABLE IF EXISTS `gerencia`;
CREATE TABLE IF NOT EXISTS `gerencia` (
  `IDMEDICO` int(11) NOT NULL,
  KEY `IDMEDICO` (`IDMEDICO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `maqueiro`
--

DROP TABLE IF EXISTS `maqueiro`;
CREATE TABLE IF NOT EXISTS `maqueiro` (
  `IDMAQUEIRO` int(11) NOT NULL,
  `NOME` char(1) NOT NULL,
  `TURNO` char(1) NOT NULL,
  PRIMARY KEY (`IDMAQUEIRO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamento`
--

DROP TABLE IF EXISTS `medicamento`;
CREATE TABLE IF NOT EXISTS `medicamento` (
  `IDMEDICAMENTO` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IDMEDICAMENTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `IDMEDICO` int(11) NOT NULL,
  `CRM` int(11) DEFAULT NULL,
  `TURNO` char(1) DEFAULT NULL,
  `NOME` varchar(50) NOT NULL,
  `IDMAQUEIRO` int(11) NOT NULL,
  PRIMARY KEY (`IDMEDICO`),
  KEY `IDMAQUEIRO` (`IDMAQUEIRO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicoprontuario`
--

DROP TABLE IF EXISTS `medicoprontuario`;
CREATE TABLE IF NOT EXISTS `medicoprontuario` (
  `IDMEDICO` int(11) NOT NULL,
  `IDPRONTUARIO` int(11) DEFAULT NULL,
  KEY `IDMEDICO` (`IDMEDICO`),
  KEY `IDPRONTUARIO` (`IDPRONTUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `ENDERECO` int(255) NOT NULL,
  PRIMARY KEY (`IDPACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

DROP TABLE IF EXISTS `prontuario`;
CREATE TABLE IF NOT EXISTS `prontuario` (
  `IDPRONTUARIO` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IDPRONTUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

DROP TABLE IF EXISTS `tecnico`;
CREATE TABLE IF NOT EXISTS `tecnico` (
  `IDTECNICO` int(11) NOT NULL AUTO_INCREMENT,
  `COREN` int(11) NOT NULL,
  `NOME` varchar(200) NOT NULL,
  `TURNO` char(1) NOT NULL,
  PRIMARY KEY (`IDTECNICO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnicomedicamento`
--

DROP TABLE IF EXISTS `tecnicomedicamento`;
CREATE TABLE IF NOT EXISTS `tecnicomedicamento` (
  `IDTECNICO` int(11) NOT NULL,
  `IDMEDICAMENTO` int(11) NOT NULL,
  KEY `IDMEDICAMENTO` (`IDMEDICAMENTO`),
  KEY `IDTECNICO` (`IDTECNICO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnicoprontuario`
--

DROP TABLE IF EXISTS `tecnicoprontuario`;
CREATE TABLE IF NOT EXISTS `tecnicoprontuario` (
  `IDTECNICO` int(11) NOT NULL,
  `IDPRONTUARIO` int(11) NOT NULL,
  KEY `IDPRONTUARIO` (`IDPRONTUARIO`),
  KEY `IDTECNICO` (`IDTECNICO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  KEY `IDMAQUEIRO` (`IDMAQUEIRO`),
  KEY `IDMEDICO` (`IDMEDICO`),
  KEY `IDENFERMEIRO` (`IDENFERMEIRO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`IDUSUARIO`, `USUARIO`, `SENHA`, `IDENFERMEIRO`, `IDMAQUEIRO`, `IDMEDICO`, `IDADM`) VALUES
(1, 'Wanderson', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alerta`
--
ALTER TABLE `alerta`
  ADD CONSTRAINT `alerta_ibfk_1` FOREIGN KEY (`IDPACIENTE`) REFERENCES `paciente` (`IDPACIENTE`),
  ADD CONSTRAINT `alerta_ibfk_2` FOREIGN KEY (`IDTECNICO`) REFERENCES `tecnico` (`IDTECNICO`);

--
-- Limitadores para a tabela `enfermeiromedicamento`
--
ALTER TABLE `enfermeiromedicamento`
  ADD CONSTRAINT `enfermeiromedicamento_ibfk_2` FOREIGN KEY (`IDMEDICAMENTO`) REFERENCES `medicamento` (`IDMEDICAMENTO`),
  ADD CONSTRAINT `enfermeiromedicamento_ibfk_3` FOREIGN KEY (`IDENFERMEIRO`) REFERENCES `enfermeiro` (`IDENFERMEIRO`);

--
-- Limitadores para a tabela `enfermeiroprontuario`
--
ALTER TABLE `enfermeiroprontuario`
  ADD CONSTRAINT `enfermeiroprontuario_ibfk_2` FOREIGN KEY (`IDPRONTUARIO`) REFERENCES `prontuario` (`IDPRONTUARIO`),
  ADD CONSTRAINT `enfermeiroprontuario_ibfk_3` FOREIGN KEY (`IDENFERMEIRO`) REFERENCES `enfermeiro` (`IDENFERMEIRO`);

--
-- Limitadores para a tabela `gerencia`
--
ALTER TABLE `gerencia`
  ADD CONSTRAINT `gerencia_ibfk_1` FOREIGN KEY (`IDMEDICO`) REFERENCES `medico` (`IDMEDICO`);

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`IDMAQUEIRO`) REFERENCES `maqueiro` (`IDMAQUEIRO`);

--
-- Limitadores para a tabela `medicoprontuario`
--
ALTER TABLE `medicoprontuario`
  ADD CONSTRAINT `medicoprontuario_ibfk_1` FOREIGN KEY (`IDMEDICO`) REFERENCES `medico` (`IDMEDICO`),
  ADD CONSTRAINT `medicoprontuario_ibfk_2` FOREIGN KEY (`IDPRONTUARIO`) REFERENCES `prontuario` (`IDPRONTUARIO`);

--
-- Limitadores para a tabela `tecnicomedicamento`
--
ALTER TABLE `tecnicomedicamento`
  ADD CONSTRAINT `tecnicomedicamento_ibfk_1` FOREIGN KEY (`IDMEDICAMENTO`) REFERENCES `medicamento` (`IDMEDICAMENTO`),
  ADD CONSTRAINT `tecnicomedicamento_ibfk_2` FOREIGN KEY (`IDTECNICO`) REFERENCES `tecnico` (`IDTECNICO`);

--
-- Limitadores para a tabela `tecnicoprontuario`
--
ALTER TABLE `tecnicoprontuario`
  ADD CONSTRAINT `tecnicoprontuario_ibfk_1` FOREIGN KEY (`IDPRONTUARIO`) REFERENCES `prontuario` (`IDPRONTUARIO`),
  ADD CONSTRAINT `tecnicoprontuario_ibfk_2` FOREIGN KEY (`IDTECNICO`) REFERENCES `tecnico` (`IDTECNICO`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`IDMAQUEIRO`) REFERENCES `maqueiro` (`IDMAQUEIRO`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`IDMEDICO`) REFERENCES `medico` (`IDMEDICO`),
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`IDENFERMEIRO`) REFERENCES `enfermeiro` (`IDENFERMEIRO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
