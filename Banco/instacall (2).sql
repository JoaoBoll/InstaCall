-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Dez-2020 às 00:20
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `instacall`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `emailAdm` varchar(100) DEFAULT NULL,
  `senhaAdm` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`emailAdm`, `senhaAdm`) VALUES
('adm', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idAluno` int(9) NOT NULL,
  `nomeAluno` varchar(50) NOT NULL,
  `cpfAluno` varchar(14) NOT NULL,
  `nascAluno` varchar(10) NOT NULL,
  `telAluno` varchar(20) DEFAULT NULL,
  `celAluno` varchar(20) DEFAULT NULL,
  `cepAluno` varchar(9) NOT NULL,
  `ufAluno` varchar(2) NOT NULL,
  `cidadeAluno` varchar(50) NOT NULL,
  `bairroAluno` varchar(50) NOT NULL,
  `logradouroAluno` varchar(50) NOT NULL,
  `numAluno` int(5) NOT NULL,
  `idTurma` int(9) NOT NULL,
  `loginAluno` varchar(100) NOT NULL,
  `senhaAluno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idAluno`, `nomeAluno`, `cpfAluno`, `nascAluno`, `telAluno`, `celAluno`, `cepAluno`, `ufAluno`, `cidadeAluno`, `bairroAluno`, `logradouroAluno`, `numAluno`, `idTurma`, `loginAluno`, `senhaAluno`) VALUES
(1, 'João Vitor Boll', '094.553.256-65', '02/02/2002', '', '', '89233-420', 'SC', 'Joinville', 'Profipo', 'Rua Cidade de Petrolândia', 9, 1, 'joao@aluno.com', '12345'),
(2, 'Khadilu Andrade', '648.689.694-68', '25/08/1997', '', '', '29164-452', 'ES', 'Serra', 'Praia de Carapebus', 'Avenida Interventor Bley', 8946, 1, 'khadilu@aluno.com', '12345'),
(3, 'Jonatan', '864.648.648-98', '07/11/2000', '', '', '89233-420', 'SC', 'Joinville', 'Profipo', 'Rua Cidade de Petrolândia', 48, 1, 'jonatan@aluno.com', '12345'),
(4, 'Miyuki Kamiyma', '684.964.848-98', '02/04/1995', '', '', '44032-196', 'BA', 'Feira de Santana', 'Campo Limpo', 'Rua Santo Antônio do Meriti II', 12345, 1, 'miyuki@aluno.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `idAtividade` int(9) NOT NULL,
  `idTurma` int(9) NOT NULL,
  `idProf` int(11) DEFAULT NULL,
  `nomeAtividade` varchar(100) NOT NULL,
  `descricaoAtividade` varchar(1000) NOT NULL,
  `dataLimite` varchar(10) NOT NULL,
  `teste` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`idAtividade`, `idTurma`, `idProf`, `nomeAtividade`, `descricaoAtividade`, `dataLimite`, `teste`) VALUES
(1, 1, 2, 'Programa I', 'Desenvolva um programa que receba 5 valores, e após, busque qual o menor, o maior, a média, e a soma.', '11/12/2020', 1),
(2, 1, 2, 'Teste de atividade', 'Isso é um teste', '09/12/2020', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamada`
--

CREATE TABLE `chamada` (
  `Id` int(9) NOT NULL,
  `idTurma` int(9) NOT NULL,
  `idAluno` int(9) NOT NULL,
  `diaChamada` varchar(10) NOT NULL,
  `presenca` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chamada`
--

INSERT INTO `chamada` (`Id`, `idTurma`, `idAluno`, `diaChamada`, `presenca`) VALUES
(1, 1, 1, '10/12/2020', 1),
(2, 1, 4, '10/12/2020', 0),
(3, 1, 2, '10/12/2020', 0),
(4, 1, 3, '10/12/2020', 0),
(5, 1, 1, '11/12/2020', 1),
(6, 1, 2, '11/12/2020', 0),
(7, 1, 3, '11/12/2020', 0),
(8, 1, 4, '11/12/2020', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(9) NOT NULL,
  `idInst` int(9) NOT NULL,
  `nomeCurso` varchar(50) NOT NULL,
  `nivelCurso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idCurso`, `idInst`, `nomeCurso`, `nivelCurso`) VALUES
(1, 1, 'Sistemas de Informação', 'Bacharelado'),
(2, 2, 'Medicina Veterinária', 'Bacharelado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `idInst` int(9) NOT NULL,
  `cnpjInst` varchar(20) NOT NULL,
  `nomeInst` varchar(50) NOT NULL,
  `cepInst` varchar(9) NOT NULL,
  `ufInst` varchar(2) NOT NULL,
  `cidadeInst` varchar(50) NOT NULL,
  `bairroInst` varchar(50) NOT NULL,
  `logradouroInst` varchar(50) NOT NULL,
  `numInst` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`idInst`, `cnpjInst`, `nomeInst`, `cepInst`, `ufInst`, `cidadeInst`, `bairroInst`, `logradouroInst`, `numInst`) VALUES
(1, '84.684.182/0001', 'UniSociesc', '89203-400', 'SC', 'Joinville', 'Anita Garibaldi', 'Rua Gothard Kaesemodel', 833),
(2, '52.556.412/0001', 'Braz Cubas', '08773-380', 'SP', 'Mogi das Cruzes', 'Vila Mogilar', 'Avenida Francisco Rodrigues Filho', 1233),
(3, '46.545.645/6464', 'SOCIESC', '89233-420', 'SC', 'Joinville', 'Profipo', 'Rua Cidade de Petrolândia', 16516);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `Id` int(9) NOT NULL,
  `idTurma` int(11) DEFAULT NULL,
  `idAtividade` int(11) DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL,
  `nota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`Id`, `idTurma`, `idAtividade`, `idAluno`, `nota`) VALUES
(1, 1, 1, 1, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `idProf` int(9) NOT NULL,
  `nomeProf` varchar(50) NOT NULL,
  `cpfProf` varchar(14) NOT NULL,
  `nascProf` varchar(10) NOT NULL,
  `telProf` varchar(30) DEFAULT NULL,
  `celProf` varchar(30) DEFAULT NULL,
  `cepProf` varchar(9) NOT NULL,
  `ufProf` varchar(2) NOT NULL,
  `cidadeProf` varchar(50) NOT NULL,
  `bairroProf` varchar(50) NOT NULL,
  `logradouroProf` varchar(50) NOT NULL,
  `numProf` int(5) NOT NULL,
  `formacaoProf` varchar(50) NOT NULL,
  `nivelProf` varchar(20) NOT NULL,
  `instituicaoProf` varchar(50) NOT NULL,
  `idTurma` int(9) NOT NULL,
  `loginProf` varchar(100) NOT NULL,
  `senhaProf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`idProf`, `nomeProf`, `cpfProf`, `nascProf`, `telProf`, `celProf`, `cepProf`, `ufProf`, `cidadeProf`, `bairroProf`, `logradouroProf`, `numProf`, `formacaoProf`, `nivelProf`, `instituicaoProf`, `idTurma`, `loginProf`, `senhaProf`) VALUES
(1, 'Rogério Nascimento', '896.488.648-99', '05/07/1970', NULL, NULL, '77828-300', 'TO', 'Araguaína', 'Morada do Sol', 'Avenida Buenos Aires', 52, 'Medicina Veterinária', 'Doutorado', 'Universidade de Mogi das Cruzes', 2, 'rogerio@prof.com', '12345'),
(2, 'Julio Benjamin Santos', '449.694.444-80', '04/01/1969', NULL, NULL, '84263-280', 'PR', 'Telêmaco Borba', 'Vila São José', 'Rua Antônio Rubens Prestes', 87, 'Sistemas de Informação', 'Doutorado', 'UniVille', 1, 'julio@prof.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `testechamada`
--

CREATE TABLE `testechamada` (
  `Id` int(9) NOT NULL,
  `idTurma` int(11) DEFAULT NULL,
  `dia` varchar(10) NOT NULL,
  `teste` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `testechamada`
--

INSERT INTO `testechamada` (`Id`, `idTurma`, `dia`, `teste`) VALUES
(1, 1, '10/12/2020', 1),
(2, 1, '11/12/2020', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `idTurma` int(5) NOT NULL,
  `idCurso` int(9) NOT NULL,
  `turno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`idTurma`, `idCurso`, `turno`) VALUES
(1, 1, 'Noturno'),
(2, 2, 'Matutino'),
(3, 1, 'Vespertino');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idAluno`),
  ADD KEY `idTurma` (`idTurma`);

--
-- Índices para tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`idAtividade`),
  ADD KEY `idTurma` (`idTurma`),
  ADD KEY `idProf` (`idProf`);

--
-- Índices para tabela `chamada`
--
ALTER TABLE `chamada`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `idTurma` (`idTurma`),
  ADD KEY `idAluno` (`idAluno`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`),
  ADD KEY `idInst` (`idInst`);

--
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`idInst`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `idTurma` (`idTurma`),
  ADD KEY `idAtividade` (`idAtividade`),
  ADD KEY `idAluno` (`idAluno`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idProf`),
  ADD KEY `idTurma` (`idTurma`);

--
-- Índices para tabela `testechamada`
--
ALTER TABLE `testechamada`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `idTurma` (`idTurma`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idTurma`),
  ADD KEY `idCurso` (`idCurso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idAluno` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `idAtividade` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `chamada`
--
ALTER TABLE `chamada`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `idInst` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `idProf` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `testechamada`
--
ALTER TABLE `testechamada`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `idTurma` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`idTurma`) REFERENCES `turma` (`idTurma`);

--
-- Limitadores para a tabela `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `atividade_ibfk_1` FOREIGN KEY (`idTurma`) REFERENCES `turma` (`idTurma`),
  ADD CONSTRAINT `atividade_ibfk_2` FOREIGN KEY (`idProf`) REFERENCES `professor` (`idProf`);

--
-- Limitadores para a tabela `chamada`
--
ALTER TABLE `chamada`
  ADD CONSTRAINT `chamada_ibfk_1` FOREIGN KEY (`idTurma`) REFERENCES `turma` (`idTurma`),
  ADD CONSTRAINT `chamada_ibfk_2` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`idAluno`);

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`idInst`) REFERENCES `instituicao` (`idInst`);

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`idTurma`) REFERENCES `turma` (`idTurma`),
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`idAtividade`) REFERENCES `atividade` (`idAtividade`),
  ADD CONSTRAINT `notas_ibfk_3` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`idAluno`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`idTurma`) REFERENCES `turma` (`idTurma`);

--
-- Limitadores para a tabela `testechamada`
--
ALTER TABLE `testechamada`
  ADD CONSTRAINT `testechamada_ibfk_1` FOREIGN KEY (`idTurma`) REFERENCES `turma` (`idTurma`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
