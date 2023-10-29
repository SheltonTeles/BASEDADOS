-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Out-2023 às 16:32
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `recrutamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `idade` tinyint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telemovel` varchar(255) NOT NULL,
  `pais_residencia` varchar(255) NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `CV` varbinary(255) NOT NULL,
  `linked_in` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id`, `nome`, `data_nascimento`, `titulo`, `idade`, `email`, `telemovel`, `pais_residencia`, `nacionalidade`, `CV`, `linked_in`) VALUES
(1, 'Mauro Mahassa', '2023-10-11', 'Estudante', 23, 'mauro.mahassa@isutc.ac.mz', '+258845008414', 'Mozambique', 'Maputo', '', 'www.google.com'),
(13, 'aMANDA', '0000-00-00', '', 0, '', '', '', '', '', ''),
(14, 'aMANDA', '0000-00-00', '', 0, '', '', '', '', '', ''),
(15, 'aMANDA mAHASSA R', '0000-00-00', '', 0, '', '', '', '', '', ''),
(16, 'aMANDA mAHASSA R', '0000-00-00', '', 0, '', '', '', '', '', ''),
(17, 'mANDA m', '0000-00-00', '', 0, '', '', '', '', '', ''),
(18, 'mANDA m', '0000-00-00', '', 0, '', '', '', '', '', ''),
(19, 'mANDA m', '0000-00-00', '', 0, '', '', '', '', '', ''),
(20, 'VAGAMENTO', '0000-00-00', '', 0, '', '', '', '', '', ''),
(21, 'Shelton', '2023-10-02', 'Estudante', 9, 'maurodosreis71@yahoo.com', '845008414', 'Mozambique', 'Maputo', '', 'www.google.com'),
(22, 'Ayltin', '0000-00-00', '', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato_vaga`
--

CREATE TABLE `candidato_vaga` (
  `candidato_vaga_id` int(11) NOT NULL,
  `id_candidato` int(11) NOT NULL,
  `id_vaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `candidato_vaga`
--

INSERT INTO `candidato_vaga` (`candidato_vaga_id`, `id_candidato`, `id_vaga`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 19, 1),
(5, 20, 1),
(6, 21, 1),
(7, 22, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificacao`
--

CREATE TABLE `certificacao` (
  `id` int(11) NOT NULL,
  `nome_certificacao` int(255) NOT NULL,
  `nivel` int(255) NOT NULL,
  `data_emissao` int(11) NOT NULL,
  `data_expira` int(11) NOT NULL,
  `id_candidato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrevista`
--

CREATE TABLE `entrevista` (
  `id` int(11) NOT NULL,
  `id_candidato_aceite` int(11) NOT NULL,
  `data_hora_entrevista` datetime NOT NULL,
  `notas` text NOT NULL,
  `id_perguntas_entrevista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao_academica`
--

CREATE TABLE `formacao_academica` (
  `id` int(11) NOT NULL,
  `id_candidato` int(11) NOT NULL,
  `nome_instituicao` varchar(255) NOT NULL,
  `nivel_academico` varchar(255) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_termino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_profissional`
--

CREATE TABLE `historico_profissional` (
  `id` int(11) NOT NULL,
  `id_candidato` int(11) NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `nome_empresa` int(255) NOT NULL,
  `localidade` varchar(255) NOT NULL,
  `area` int(255) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_termino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lingua_candidato`
--

CREATE TABLE `lingua_candidato` (
  `id` int(11) NOT NULL,
  `id_candidato` int(11) NOT NULL,
  `nome_lingua` varchar(255) NOT NULL,
  `prof_falar` varchar(255) NOT NULL,
  `prof_ler` varchar(255) NOT NULL,
  `prof_escrever` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(255) NOT NULL,
  `avaliacao` int(11) NOT NULL,
  `id_entrevista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pre_seleccao`
--

CREATE TABLE `pre_seleccao` (
  `id` int(11) NOT NULL,
  `id_candidato_vagas` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado`
--

CREATE TABLE `resultado` (
  `id` int(11) NOT NULL,
  `id_entrevista` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Esta tabela vai decidir se és admin ou CANDIDATO';

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `tipo`) VALUES
(1, 'mas@gmail.com', 1234, 1),
(2, 'tt@yahoo.com', 1234, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `id` int(11) NOT NULL,
  `nome_vaga` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `data_publicacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_termino` date NOT NULL,
  `sector` varchar(255) NOT NULL,
  `visualizacoes` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id`, `nome_vaga`, `descricao`, `data_publicacao`, `data_termino`, `sector`, `visualizacoes`, `id_admin`) VALUES
(1, 'Analista de Sistemas', '       Requisitos\r\nSer bom analista         ', '2023-10-29 11:28:28', '2023-11-05', 'Rede', 0, 1),
(2, 'Programador Web', 'DSDA', '2023-10-29 16:32:12', '2023-10-18', 'Desenolvimento', 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `candidato_vaga`
--
ALTER TABLE `candidato_vaga`
  ADD PRIMARY KEY (`candidato_vaga_id`);

--
-- Índices para tabela `entrevista`
--
ALTER TABLE `entrevista`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `formacao_academica`
--
ALTER TABLE `formacao_academica`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `historico_profissional`
--
ALTER TABLE `historico_profissional`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lingua_candidato`
--
ALTER TABLE `lingua_candidato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pre_seleccao`
--
ALTER TABLE `pre_seleccao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `candidato_vaga`
--
ALTER TABLE `candidato_vaga`
  MODIFY `candidato_vaga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `entrevista`
--
ALTER TABLE `entrevista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `formacao_academica`
--
ALTER TABLE `formacao_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historico_profissional`
--
ALTER TABLE `historico_profissional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `lingua_candidato`
--
ALTER TABLE `lingua_candidato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pre_seleccao`
--
ALTER TABLE `pre_seleccao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
