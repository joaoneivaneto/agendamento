-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Abr-2021 às 16:44
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atendimento_pandemia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atende`
--

CREATE TABLE `atende` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_estabecimento1` int(11) NOT NULL,
  `id_lista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atende`
--

INSERT INTO `atende` (`id`, `id_cliente`, `id_estabecimento1`, `id_lista`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 1, 2, 3),
(4, 1, 2, 4),
(5, 1, 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `Id` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` varchar(14) NOT NULL,
  `Rua` varchar(50) NOT NULL,
  `Nun_Casa` int(5) NOT NULL,
  `Bairro` varchar(20) NOT NULL,
  `Complemento` varchar(10) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Estado` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `Data` date NOT NULL,
  `Senha` varchar(10) NOT NULL,
  `tipo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`Id`, `Email`, `Telefone`, `Rua`, `Nun_Casa`, `Bairro`, `Complemento`, `Cidade`, `Estado`, `cep`, `Data`, `Senha`, `tipo`) VALUES
(1, 'joaoneivanetos@gmail.com', '(33) 99810-392', 'av do cruzeiro', 1, 'Sem', 'Casa', 'Chapada', 'MG', '39648-000', '2021-04-20', '12345678', 'PF'),
(2, 'joaoneiva@gmail.com', '(33) 99810-392', 'rua do cruzeiro', 1, 'Sem', 'Casa', 'Chapada Do Norte', 'MG', '39648000', '2021-04-15', '12345678', 'PJ'),
(3, 'tos@gmail.com', '(33) 99810-392', 'rua do ate', 1, 'Sem', 'Casa', 'Chapada', 'MG', '39648-000', '2021-04-19', '12345678', 'PJ'),
(4, 's@gmail.com', '(33) 99810-392', 'Rua Domingos Roque Moreira', 5, 'Sem', 'Casa', 'Chapada Do Norte', 'MG', '39648000', '2021-04-21', '12345678', 'PF'),
(5, 'j@gmail.com', '(33) 99810-392', 'Rua Domingos Roque Moreira', 21510212, 'Sem', 'Casa', 'Chapada Do Norte', 'MG', '39648000', '2021-04-22', '12345678', 'PJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(10) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `Sexo` varchar(9) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Id_cadastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Id`, `CPF`, `Sexo`, `Nome`, `Id_cadastro`) VALUES
(1, '148.959.456-69', 'Masculino', 'João Neiva Neto', 1),
(2, '148.959.456-69', 'Masculino', 'João Neiva Neto', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

CREATE TABLE `estabelecimento` (
  `Id` int(11) NOT NULL,
  `CNPJ` varchar(18) NOT NULL,
  `Razao` varchar(50) NOT NULL,
  `id_cadastro1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estabelecimento`
--

INSERT INTO `estabelecimento` (`Id`, `CNPJ`, `Razao`, `id_cadastro1`) VALUES
(1, '33.041.260/0652-90', 'IFNMG', 2),
(2, '33.041.260/0652-90', 'se', 3),
(3, '33.041.260/0652-90', 'seee', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista`
--

CREATE TABLE `lista` (
  `id` int(11) NOT NULL,
  `Aprov_Marc` varchar(15) NOT NULL DEFAULT 'Em Andamento',
  `Data` date NOT NULL,
  `Hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lista`
--

INSERT INTO `lista` (`id`, `Aprov_Marc`, `Data`, `Hora`) VALUES
(1, 'Em Andamento', '2021-04-20', '10:00:00'),
(2, 'Negado', '2021-04-22', '10:30:00'),
(3, 'Negado', '2021-04-20', '09:00:00'),
(4, 'Aprovado', '2021-04-20', '09:21:00'),
(5, 'Em Andamento', '2021-04-21', '10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atende`
--
ALTER TABLE `atende`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_cliente` (`id_cliente`),
  ADD KEY `Id_estabelecimento_Fk` (`id_estabecimento1`),
  ADD KEY `id_lista_fk` (`id_lista`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_cadastro_fk` (`Id_cadastro`);

--
-- Indexes for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_estabeceli_FK` (`id_cadastro1`);

--
-- Indexes for table `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atende`
--
ALTER TABLE `atende`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atende`
--
ALTER TABLE `atende`
  ADD CONSTRAINT `Id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Id_estabelecimento_Fk` FOREIGN KEY (`id_estabecimento1`) REFERENCES `estabelecimento` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_lista_fk` FOREIGN KEY (`id_lista`) REFERENCES `atende` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `Id_cadastro_fk` FOREIGN KEY (`Id_cadastro`) REFERENCES `cadastro` (`Id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD CONSTRAINT `id_estabeceli_FK` FOREIGN KEY (`id_cadastro1`) REFERENCES `cadastro` (`Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
