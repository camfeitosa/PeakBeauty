-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 24-Nov-2022 às 23:05
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `pb`
--
CREATE DATABASE IF NOT EXISTS `pb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_cliente`
--

CREATE TABLE IF NOT EXISTS `cad_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(50) DEFAULT NULL,
  `tel_cliente` varchar(40) DEFAULT NULL,
  `email_cliente` varchar(60) DEFAULT NULL,
  `senha_cliente` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `email_cliente` (`email_cliente`),
  UNIQUE KEY `email_cliente_2` (`email_cliente`),
  UNIQUE KEY `email_cliente_3` (`email_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `cad_cliente`
--

INSERT INTO `cad_cliente` (`id_cliente`, `nome_cliente`, `tel_cliente`, `email_cliente`, `senha_cliente`) VALUES
(2, 'Kelvin', '(11) 97279-0635', 'kelvin123@gmail.com', '123'),
(3, 'Camila', '(11) 97279-0635', 'camilafeitosamiranda@gmail.com', '123'),
(5, 'Lucas', '(11) 65258-5455', 'lucasgamerrrrr@yahoo.com', 'lucasbunito'),
(7, 'mariana', '(11) 65258-5455', 'mariana@gmail.com', 'mariana'),
(8, 'gaby', '(11) 98894-5603', 'gaby@gmail.com', '456'),
(9, 'gaby', '(11) 98894-5603', 'gaby1@gmail.com', 'gaby002'),
(10, 'Raiser', '(11) 95158-6896', 'raiseroi@outlook.com', '181155gd'),
(11, 'Gabriel Lopes', '(11) 99807-7190', 'gabbs_Lopes@outlook.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_profissional`
--

CREATE TABLE IF NOT EXISTS `cad_profissional` (
  `id_pro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pro` varchar(50) DEFAULT NULL,
  `tel_pro` varchar(40) DEFAULT NULL,
  `email_pro` varchar(60) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `id_esp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pro`),
  KEY `id_cargo` (`id_cargo`),
  KEY `id_esp` (`id_esp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `cad_profissional`
--

INSERT INTO `cad_profissional` (`id_pro`, `nome_pro`, `tel_pro`, `email_pro`, `id_cargo`, `id_esp`) VALUES
(1, 'Renato Muriel Ferreira', '11 972890631', 'renato.ferr@gmail.com', 1, NULL),
(2, 'Marta Vicente Nogueira', '11 971940623', 'marta.cabelos@gmail.com', 1, NULL),
(3, 'Thomas Castro Barros', '11 999740615', 'thomascastrosb@gmail.com', 1, NULL),
(4, 'Melissa Araujo Costa', '11 971887109', 'mel.araujo@gmail.com', 1, NULL),
(5, 'Bruno Cunha Dias', '11 971882235', 'brunocunhahair@gmail.com', 1, NULL),
(6, 'Luiza Pereira da Silva', '11 999256912', 'luizapereira.luzes@gmail.com', 1, NULL),
(7, 'Eva Miranda de Oliveira ', '11 972890631', 'evaoliveira@gmail.com', 2, NULL),
(8, 'Isaiah Pereira Martins', '11 9992390671', 'isaiahmartins@gmail.com', 2, NULL),
(9, 'Sophia Morais Azevedo', '11 9631507908', 'soso.azevedo@gmail.com', 2, NULL),
(10, 'Julieta Fernada Barbosa', '11 9001113153', 'julibarbosa@gmail.com', 2, NULL),
(11, 'Mônica Murilo Gonçalves', '11 9997007775', 'monica.goncalves@gmail.com', 2, NULL),
(12, 'Carlos Felipe Alvez', '11 9009555123', 'carlos.alvarez@gmail.com', 2, NULL),
(13, 'Maiara Cristina Santos', '11 9519003159', 'maiara.santos@gmail.com', 2, NULL),
(14, 'Grace Freitas', '11 999234957', 'graceefreitas@gmail.com', 3, NULL),
(15, 'Michael Tronco', '11 988233121', 'michaeltronco@gmail.com', 3, NULL),
(16, 'Paola Barros', '11 987234909', 'paola.barros@gmail.com', 3, NULL),
(17, 'Kelvin Soares', '11 977564966', 'kelvinssoares@gmail.com', 3, NULL),
(18, 'Gina Martins Barbosa', '11 9246135910', 'martins.gina@gmail.com', 4, NULL),
(19, 'Charles Cunha Machado', '11 9602852456', 'charlesmachado@gmail.com', 4, NULL),
(20, 'Marisa Amaro Siqueira', '11 9165147963', 'marisaamaro@gmail.com', 4, NULL),
(21, 'Nathan Shelby dos Santos', '11 9437119005', 'nathanshelby@gmail.com', 4, NULL),
(22, 'Mônica Bezerra de Lima', '11 9119073773', 'monicabezerra@gmail.com', 4, NULL),
(23, 'Ingrid Moura Silva', '11 9005551154', 'ingridsilva@gmail.com', 4, NULL),
(24, 'Renato Muriel Ferreira', '11 972890631', 'renato.ferr@gmail.com', 5, NULL),
(25, 'Eva Miranda de Oliveira ', '11 972890631', 'evaoliveira@gmail.com', 5, NULL),
(26, 'Gina Martins Barbosa', '11 9246135910', 'martins.gina@gmail.com', 5, NULL),
(27, 'Mônica Bezerra de Lima', '11 9119073773', 'monicabezerra@gmail.com', 5, NULL),
(28, 'Carlos Felipe Alvez', '11 9009555123', 'carlos.alvarez@gmail.com', 5, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nome`) VALUES
(1, 'Cabelos'),
(2, 'Unhas'),
(3, 'Sobrancelhas'),
(4, 'Cilios'),
(5, 'Maquiagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `mensagem` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome`, `email`, `mensagem`) VALUES
(1, 'Camila', 'camilafeitosamiranda@gmail.com', 'Teste teste teste teste teste'),
(2, ' cxv', 'camila@gmail.com', 'teste'),
(3, 'Camila Feitosa de Miranda Coutinho', 'camilafeitosamiranda@gmail.com', 'LEgal'),
(4, 'Camila Feitosa de Miranda Coutinho', 'camilafeitosamiranda@gmail.com', 'LEgal'),
(5, 'Camila', 'camilafeitosamiranda@gmail.com', 'Legal'),
(6, 'camis', 'camilafeitosa@gmail.com', '123'),
(7, 'Camila', 'camilafeitosamiranda@gmail.com', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAA'),
(8, ' cxv', 'camila@gmail.com', 'parabÃ©ns');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE IF NOT EXISTS `especialidade` (
  `id_esp` int(11) NOT NULL AUTO_INCREMENT,
  `nome_esp` varchar(60) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_esp`),
  KEY `id_cargo` (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`id_esp`, `nome_esp`, `preco`, `id_cargo`) VALUES
(1, 'Corte', '40.00', 1),
(2, 'Coloração', '30.00', 1),
(3, 'Botox', '80.00', 1),
(4, 'Progressiva', '100.00', 1),
(5, 'Hidratação', '25.00', 1),
(6, 'Luzes', '60.00', 1),
(7, 'Cauterização', '200.00', 1),
(8, 'Penteados', '70.00', 1),
(9, 'Manicure', '20.00', 2),
(10, 'Pedicure', '20.00', 2),
(11, 'Unhas de gel', '70.00', 2),
(12, 'Unhas de fibra', '90.00', 2),
(13, 'Manutenção', '70.00', 2),
(14, 'Remoção ', '20.00', 2),
(15, 'Reposição', '15.00', 2),
(16, 'Design com pinça', '30.00', 3),
(17, 'Henna', '40.00', 3),
(18, 'Micropigmentação', '450.00', 3),
(19, 'Manutenção', '20.00', 3),
(20, 'Fio a fio', '70.00', 4),
(21, 'Volume brasileiro', '80.00', 4),
(22, 'Cílios híbrido', '90.00', 4),
(23, 'Efeito delineado', '80.00', 4),
(24, 'Volume Russo', '100.00', 4),
(25, 'Manutenção', '40.00', 4),
(26, 'Maquiagem simples', '60.00', 5),
(27, 'Maquiagem para casamento ', '200.00', 5),
(28, 'Maquiagem para formatura', '80.00', 5),
(29, 'Maquiagem express', '50.00', 5),
(30, 'Maquiagem teste', '50.00', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_agendamento` int(11) NOT NULL AUTO_INCREMENT,
  `dia` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_pro` int(11) DEFAULT NULL,
  `id_esp` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_agendamento`),
  KEY `id_pro` (`id_pro`),
  KEY `id_esp` (`id_esp`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id_agendamento`, `dia`, `hora`, `id_pro`, `id_esp`, `id_cliente`) VALUES
(2, '2022-12-15', '20:00:00', 25, 27, 3),
(4, '2022-12-12', '15:00:00', 15, 17, 3),
(12, '2022-11-27', '10:00:00', 19, 22, 2);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cad_profissional`
--
ALTER TABLE `cad_profissional`
  ADD CONSTRAINT `cad_profissional_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`),
  ADD CONSTRAINT `cad_profissional_ibfk_2` FOREIGN KEY (`id_esp`) REFERENCES `especialidade` (`id_esp`);

--
-- Limitadores para a tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD CONSTRAINT `especialidade_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`);

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `cad_profissional` (`id_pro`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`id_esp`) REFERENCES `especialidade` (`id_esp`),
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `cad_cliente` (`id_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
