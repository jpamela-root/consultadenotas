-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Maio-2020 às 21:50
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: 'bdconsulta'
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `CPF` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `DATANASCIMENTO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`CPF`, `Name`, `DATANASCIMENTO`) VALUES
(2125412300, 'fulano da silva', '1985-01-25'),
(2147483647, 'beltrano da silva', '1972-02-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `ID_notas` int(11) NOT NULL,
  `valor_notaav1` float NOT NULL,
  `valor_notaav2` float NOT NULL,
  `valor_notafinal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`ID_notas`, `valor_notaav1`, `valor_notaav2`, `valor_notafinal`) VALUES
(2125412300, 10, 8, 9),
(2147483647, 7, 9, 8);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`ID_notas`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `ID_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_alunos_cpf` FOREIGN KEY (`ID_notas`) REFERENCES `aluno` (`CPF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
