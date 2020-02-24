-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2019 às 20:09
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `help_fotografos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome_usuario` varchar(15) NOT NULL,
  `nome_completo` varchar(30) NOT NULL,
  `telefone` int(15) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(1000) NOT NULL,
  `biografia` varchar(100) NOT NULL,
  `fotos_perfil` longblob NOT NULL,
  `fotos` longblob NOT NULL,
  `face` varchar(1000) NOT NULL,
  `insta` varchar(1000) NOT NULL,
  `linkedin` varchar(1000) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `cod_perfil` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`nome_usuario`, `nome_completo`, `telefone`, `cidade`, `email`, `senha`, `biografia`, `fotos_perfil`, `fotos`, `face`, `insta`, `linkedin`, `cod_usuario`, `cod_perfil`) VALUES
('yasmin', 'yasmin', 55555, '', 'yasmin@gmail', '5', '', 0x30, '', '', '', '', 1, 1),
('Joazinho', 'joao', 44444444, '', 'y@gmail', '55', '', 0x30, '', '', '', '', 2, 0),
('ggy', 'bhbh', 0, '', 'yasmindevegili@gmail.com', '31d67988c525197faeca2346129a833688020f67', '', 0x30, '', '', '', '', 3, 0),
('bbub', 'buyhbyhu', 66, '', 'yasmindevegili@gmail.com', '2abd9867cad9eeee50033bf1d4310baa0c3c2aed', 'vuuhi', 0x30, 0x345f312e706e67, '', '', '', 4, 0),
('svdsf', 'vfgv', 66666, '', 'cassiasrfm@gmail.com', '6dd4cf05a61cf3dcab94c9835eee241c38a11775', 'dcdsc', 0x30, 0x345f312e706e67, '', '', '', 5, 1),
('Yasmin', 'Yasmin Devegili', 997602171, '', 'yasmindevegili@gmail.com', '1721bfe343d5fe607a9dd37715355722e20fc95f', 'eu me chamo yas', 0x30, 0x63616d6572615f7665726d656c68612e706e67, '', '', '', 6, 1),
('grggt', 'frgr', 0, '', 'user1@user.com', 'a9c71ad9a291209f8b77d851c4b46f92f734389e', '', 0x30, '', '', '', '', 7, 0),
('ewcew', 'fcew', 66, '', 'maria@gmail.com', '9a729f752eb5264c602b36d2e452686bc9f7f52a', 'fewfaws', 0x30, 0x355f636f7175696e615f646f6e61785f7472756e63756c75735f32333033325f385f3630302e6a7067, '', '', '', 8, 1),
('Yasmin', 'Yasmin Devegili', 997602171, '', 'yasmindevegili@gmail.com', 'cc417a7cf9c713fb6a099984c5b5100410de2641', 'bcdsbcbsdcn', 0x30, 0x355f636f7175696e615f646f6e61785f7472756e63756c75735f32333033325f385f3630302e6a7067, '', '', '', 9, 1),
('dcdcdcd', 'dcd', 997602171, '', 'yasmindevegili@gmail.com', '531c154c293dfa54ca8eb77046c68c1aad5eb1f8', 'bcdsbcbsdcn', 0x63616d6572615f66756e646f2e706e67, 0x63616d6572615f70726574612e706e67, '', '', '', 10, 1),
('JÃºlia', 'JÃºlia Souza', 997602171, 'Joinville, SC', 'maria@gmail.com', '5139fcb743565a93ba49568086a3376794cbc101', 'Sou fotÃ³grafa', 0x416e6e69652e6a7067, 0x6c69676874686f7573652e6a7067, '', '', '', 11, 1),
('Carlos', 'Carlos Eduardo', 997602171, 'Joinville, SC', 'carlinhos@gmail.com', '5139fcb743565a93ba49568086a3376794cbc101', 'Sou fotografo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla', 0x416e6e69652e6a7067, 0x617369612e6a7067, 'https://www.google.com/search?q=linkedin&amp;oq=loinkdn&amp;aqs=chrome.1.69i57j0l7.4966j0j7&amp;sourceid=chrome&amp;ie=UTF-8', 'https://www.google.com/search?q=linkedin&amp;oq=loinkdn&amp;aqs=chrome.1.69i57j0l7.4966j0j7&amp;sourceid=chrome&amp;ie=UTF-8', 'https://www.google.com/search?q=linkedin&amp;oq=loinkdn&amp;aqs=chrome.1.69i57j0l7.4966j0j7&amp;sourceid=chrome&amp;ie=UTF-8', 12, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
