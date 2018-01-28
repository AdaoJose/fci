-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jan-2018 às 12:15
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fci`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `idConta` int(11) NOT NULL,
  `nomeConta` varchar(100) DEFAULT NULL,
  `valorConta` tinyint(1) DEFAULT NULL,
  `idSetorConta` int(11) DEFAULT NULL,
  `tipoConta` varchar(100) DEFAULT NULL,
  `uploadConta` varchar(100) DEFAULT NULL,
  `uploadNotaFiscal` varchar(150) NOT NULL,
  `statusConta` varchar(100) DEFAULT NULL,
  `dataVencConta` date DEFAULT NULL,
  `avisoAntecipadoConta` date DEFAULT NULL,
  `dataValidacao` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `nomeSetor` varchar(50) DEFAULT NULL,
  `idSetor` int(11) NOT NULL,
  `dataCAdastroSet` date DEFAULT NULL,
  `dataEscluSetor` date DEFAULT NULL,
  `descricaoSetor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`nomeSetor`, `idSetor`, `dataCAdastroSet`, `dataEscluSetor`, `descricaoSetor`) VALUES
('Tecnologia', 1, '2018-01-11', NULL, 'Setor de tecnologia consorcio Canopus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) DEFAULT NULL,
  `cpfUsuario` varchar(12) DEFAULT NULL,
  `dataCadastroUs` varchar(100) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariosetor`
--

CREATE TABLE `usuariosetor` (
  `IdUsuario` int(11) DEFAULT NULL,
  `idSetor` int(11) DEFAULT NULL,
  `acesso` varchar(100) DEFAULT NULL,
  `tipoUsuario` int(11) DEFAULT NULL,
  `dataInicio` date NOT NULL,
  `dataTermino` date NOT NULL,
  `superiorImediato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`idConta`),
  ADD KEY `idSetorConta` (`idSetorConta`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`idSetor`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- Indexes for table `usuariosetor`
--
ALTER TABLE `usuariosetor`
  ADD KEY `idSetor` (`idSetor`),
  ADD KEY `superiorImediato` (`superiorImediato`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `conta_ibfk_1` FOREIGN KEY (`idSetorConta`) REFERENCES `setor` (`idSetor`);

--
-- Limitadores para a tabela `usuariosetor`
--
ALTER TABLE `usuariosetor`
  ADD CONSTRAINT `usuariosetor_ibfk_1` FOREIGN KEY (`idSetor`) REFERENCES `setor` (`idSetor`),
  ADD CONSTRAINT `usuariosetor_ibfk_2` FOREIGN KEY (`superiorImediato`) REFERENCES `usuario` (`IdUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
