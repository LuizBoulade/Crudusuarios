-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Mar-2022 às 21:55
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dados_usuarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `email_usuario` varchar(200) NOT NULL,
  `senha_usuario` varchar(40) NOT NULL,
  `cpf_usuario` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nivel_usuario` int(1) NOT NULL,
  `cep_usuario` int(11) NOT NULL,
  `rua_usuario` varchar(250) NOT NULL,
  `bairro_usuario` varchar(250) NOT NULL,
  `cidade_usuario` varchar(250) NOT NULL,
  `estado_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `cpf_usuario`, `status`, `nivel_usuario`, `cep_usuario`, `rua_usuario`, `bairro_usuario`, `cidade_usuario`, `estado_usuario`) VALUES
(26, 'Luiz Boulade', 'luiz@luiz.com', 'd41299ad60d93e51ccd50a655482a9177c2e2679', '01234567891', 'Ativo', 1, 83409470, 'Rua José Maria da Silva Paranhos', 'Guarani', 'Colombo', 'PR');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
