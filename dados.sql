-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3312
-- Tempo de geração: 14-Fev-2023 às 20:19
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `cad_id` int(11) NOT NULL,
  `cad_nome` varchar(150) NOT NULL,
  `cad_email` varchar(100) NOT NULL,
  `cad_descricao` text NOT NULL,
  `cad_instagram` varchar(150) NOT NULL,
  `cad_twitter` varchar(150) NOT NULL,
  `cad_facebook` varchar(150) NOT NULL,
  `cad_linkedin` varchar(150) NOT NULL,
  `cad_youtube` varchar(150) NOT NULL,
  `cad_senha` varchar(20) NOT NULL,
  `cad_foto` varchar(150) NOT NULL,
  `cad_imgfundo` varchar(150) NOT NULL,
  `cad_profissao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`cad_id`, `cad_nome`, `cad_email`, `cad_descricao`, `cad_instagram`, `cad_twitter`, `cad_facebook`, `cad_linkedin`, `cad_youtube`, `cad_senha`, `cad_foto`, `cad_imgfundo`, `cad_profissao`) VALUES
(1, 'Emerson de Carvalho', 'emersoncarvalho@hotmail.com.br', 'texto teste', 'https://www.instagram.com/', 'https://twitter.com/', 'https://pt-br.facebook.com/', 'https://br.linkedin.com/', 'https://www.youtube.com/', '1406junho', 'https://img.freepik.com/fotos-gratis/lindo-retrato-de-cachorro_23-2149218450.jpg', 'https://blog.emania.com.br/wp-content/uploads/2015/10/fotos-de-natureza.jpg', NULL),
(3, 'Kadu Fernandes', 'kadu@hotmail.com', 'Estudante', 'Não tem', 'Não tem', 'Não tem', 'Não tem', 'Não tem', 'Não tem', 'Não tem', 'Não tem', 'Estudante');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`cad_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `cad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
