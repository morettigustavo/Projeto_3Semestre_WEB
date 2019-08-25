-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Ago-2019 às 20:11
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_planetgames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8_swedish_ci NOT NULL,
  `quantidade_estoque` int(11) NOT NULL,
  `cod_barras` int(11) NOT NULL,
  `valor_compra` float NOT NULL,
  `tipo` int(2) NOT NULL DEFAULT '0',
  `categoria` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_produto`),
  UNIQUE KEY `cod_barras` (`cod_barras`),
  KEY `quantidade_estoque` (`quantidade_estoque`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=81 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `quantidade_estoque`, `cod_barras`, `valor_compra`, `tipo`, `categoria`) VALUES
(1, 'TECLADO GAMER EMPIRE RETROILUMINADO 3803', 12, 212313212, 61.51, 1, 1),
(2, 'TECLADO MECANICO C3TECH KGM-500 RGB PRETO, KGM-500BK', 12, 123331231, 199.9, 1, 1),
(3, 'TECLADO MECANICO ASUS ROG CLAYMORE RGB SWITCH CHERRY MX RED,', 12, 12333, 1629.94, 1, 1),
(4, 'TECLADO MECANICO ASUS ROG CLAYMORE CORE RGB SWITCH CHERRY MX', 12, 123123, 1209.93, 1, 1),
(5, 'TECLADO MECANICO MOTOSPEED CK104 PRETO SWITCH AZUL RGB, FMST', 12, 112333123, 249, 1, 1),
(6, 'TECLADO MECANICO HAVIT KB432L RGB SWITCH AZUL, HV-KB432L-AZU', 13, 231231233, 209.26, 1, 1),
(7, 'TECLADO MECANICO FORTREK GPRO K7 PLUS RGB SWITCH BLUE, 67703', 12, 2147483647, 190.8, 1, 1),
(8, 'TECLADO MECANICO CORSAIR K70 MK.2 RAPIDFIRE RGB SWITCH MX CH', 13, 453455534, 899.03, 1, 1),
(9, 'MOUSE RAZER DEATHADDER ELITE CHROMA 5G 16.000DPI, RZ01-02010', 1, 546654654, 443.07, 1, 0),
(10, 'MOUSE GAMER LOGITECH G203 PRODIGY LED RGB 8000DPI USB PRETO,', 1, 54654654, 142.89, 1, 0),
(11, 'MOUSE GAMER LOGITECH G403 PRODIGY RGB USB PRETO, 910-004823', 1, 6354645, 183.89, 1, 0),
(12, 'MOUSE GAMER LOGITECH G502 HERO RGB 16.000DPI, 910-005550', 1, 6554654, 289.9, 1, 0),
(13, 'MOUSE GAMER CORSAIR HARPOON RGB WIRELESS 10000DPI, CH-931101', 1, 456465, 279.9, 1, 0),
(14, 'MOUSE RAZER LANCEHEAD QUARTZ 16000 DPI 5G, RZ01-02130400-R3M', 1, 13121321, 569.91, 1, 0),
(15, 'MOUSE GAMER LOGITECH G PRO HERO RGB 16000DPI USB, 910-005536', 1, 235434, 239.9, 1, 0),
(16, 'MOUSE GAMER STEELSERIES RIVAL 710, 62334', 1, 546546, 539.92, 1, 0),
(17, 'FONE DE OUVIDO GAMER ADATA XPG EMIX I30 5.2 INTRA AURICULAR,', 1, 5464897, 499.01, 1, 2),
(18, 'FONE DE OUVIDO AKG K240 MKII SEMI-OPEN PROFISSIONAL', 1, 9396396, 390.02, 1, 2),
(19, 'FONE DE OUVIDO LOGITECH G433 7.1 SURROUND AZUL, 981-000684', 1, 9693, 439.01, 1, 2),
(20, 'FONE HEADSET RAZER KRAKEN FORGED EDITION, RZ13-01080100-R3U1', 1, 818522, 910.01, 1, 2),
(21, 'FONE HEADSET RAZER KRAKEN MOBILE SPECIAL EDITION NEON SERIES', 1, 216254, 529, 1, 2),
(22, 'FONE HEADSET RAZER MAN O WAR WIRELESS, RZ04-01490100-R3U1', 1, 95775, 1199.93, 1, 2),
(23, 'FONE THERMALTAKE TT ESPORTS SHOCK ONE 5.1, HTSHO001EC - BOX', 1, 652984, 480, 1, 2),
(24, 'FONE DE OUVIDO PULSE BY MULTILASER OVER EAR STEREO BLUETOOTH', 1, 685612, 149.9, 1, 2),
(25, 'PROCESSADOR INTEL CORE I9-9900K OCTA-CORE 3.6GHZ (5GHZ TURBO', 1, 9875, 2478.97, 2, 0),
(26, 'PROCESSADOR INTEL CORE I5-9600K HEXA-CORE 3.7GHZ (4.6GHZ TUR', 1, 5416, 1348.99, 2, 0),
(27, 'PROCESSADOR INTEL CORE I3-8300 QUAD-CORE 3.7GHZ 8MB CACHE LG', 1, 55464010, 850.99, 2, 0),
(28, 'PROCESSADOR AMD RYZEN 3 2200G QUAD-CORE 3.5GHZ (3.7GHZ TURBO', 1, 2198499, 508.99, 2, 0),
(29, 'PROCESSADOR AMD ATHLON 200GE DUAL-CORE 3.2GHZ 4MB CACHE AM4,', 1, 387632111, 289, 2, 0),
(30, 'PROCESSADOR AMD FX-6300 HEXA-CORE 3.5GHZ (3.8GHZ TURBO) 14 M', 1, 591941, 305.76, 2, 0),
(31, 'PROCESSADOR INTEL CORE I7-9700K OCTA-CORE 3.6GHZ (4.9GHZ TUR', 1, 2142, 2088.98, 2, 0),
(32, 'PROCESSADOR AMD RYZEN 7 1700X OCTA-CORE 3.4GHZ (3.8GHZ TURBO', 1, 5354, 999.98, 2, 0),
(33, 'MEMORIA CORSAIR VENGEANCE LPX VERMELHO 4GB (1X4) 2400MHZ DDR', 1, 28728768, 168.07, 2, 1),
(34, 'MEMÃ“RIA KINGSTON HYPERX FURY 4GB (1X4), DDR3 1866MHZ WHITE, ', 1, 651549874, 204.44, 2, 1),
(35, 'MEMORIA KINGSTON HYPERX FURY 4GB (1X4) DDR3 1866MHZ AZUL, HX', 1, 5387387, 214.66, 2, 1),
(36, 'MEMORIA ADATA XPG V5 4GB (1X4) DDR3 1600MHZ, AXDX1600W4G11-S', 1, 876876, 169.32, 2, 1),
(37, 'MEMORIA ADATA XPG GAMMIX D10 4GB (1X4) DDR4 2666MHZ VERMELHA', 1, 3214256, 214.78, 2, 1),
(39, 'MEMORIA KINGSTON HYPERX FURY 4GB (1X4) DDR3 1600MHZ PRETA, H', 1, 45315235, 214.78, 2, 1),
(40, 'MEMORIA G.SKILL TRIDENT Z RGB 16GB (2X8) DDR4 4133MHZ PRETA,', 1, 6587687, 1930.7, 2, 1),
(41, 'MEMORIA CRUCIAL BALLISTIX SPORT 8GB (1X8) DDR4 2666MHZ BRANC', 1, 987916, 306.71, 2, 1),
(42, 'PLACA DE VÃDEO GIGABYTE GEFORCE RTX 2080 TI GAMING OC 11G, G', 1, 19650303, 6520.8, 2, 2),
(44, 'PLACA DE VIDEO ZOTAC GEFORCE GTX 1660 6GB GDDR5 192-BIT, ZT-', 1, 41251251, 1419.9, 2, 2),
(45, 'PLACA DE VIDEO MSI GEFORCE RTX 2070 8GB GDDR6 VENTUS 256-BIT', 1, 3125465, 2953.99, 2, 2),
(46, 'PLACA DE VIDEO GIGABYTE GEFORCE GTX 1650 4GB GDDR5 WINDFORCE', 1, 412545756, 1078.9, 2, 2),
(47, 'PLACA DE VIDEO ASUS GEFORCE RTX 2080 8GB GDDR6 DUAL 256-BIT,', 1, 321544768, 5101.99, 2, 2),
(48, 'PLACA DE VIDEO ZOTAC GEFORCE RTX 2080 TI 11GB GDDR6 ARCTICST', 1, 45152152, 8862.39, 2, 2),
(49, 'PLACA DE VIDEO MSI RADEON RX 580 ARMOR MK2 8G OC, 912-V341-2', 1, 11012001, 1533.96, 2, 2),
(56, 'PLACA DE VIDEO GIGABYTE RADEON RX 580 4GB GDDR5 WINDFORCE 25', 1, 35432222, 1044.31, 2, 2),
(57, 'Battlefield 1', 1, 231111234, 209.9, 0, 0),
(58, 'Battlefield V', 1, 13123211, 105.99, 0, 0),
(59, 'Final Fantasy XV', 1, 954957984, 120.9, 0, 0),
(60, 'God Of War', 1, 131245, 110.99, 0, 0),
(61, 'Metro Exodus', 1, 61654444, 190.99, 0, 0),
(62, 'Resident Evil 2 ', 1, 123123123, 200.99, 0, 0),
(63, 'Sekiro Shadows Die Twice', 1, 321412, 250, 0, 0),
(64, 'Marvel Spider Man', 1, 31241245, 160.9, 0, 0),
(65, 'Call of Duty: Black Ops 4', 1, 54657871, 89.9, 0, 1),
(66, 'Devil May Cry V', 1, 51498787, 170, 0, 1),
(67, 'Fifa 19', 1, 2341241, 180.9, 0, 1),
(68, 'Forza Horizon 4', 1, 231241124, 150, 0, 1),
(69, 'Need For Speed', 1, 94947888, 135.5, 0, 1),
(70, 'PES 2019', 1, 12312423, 120, 0, 1),
(71, 'Red Dead Redemption 2', 1, 12312541, 250, 0, 1),
(72, 'Rise Of The - Tomb Raider', 1, 3123124, 49.9, 0, 1),
(73, 'COOLER PARA PROCESSADOR COOLER MASTER MASTERAIR MA410M RGB T', 1, 102102234, 452.84, 2, 3),
(74, 'WATER COOLER COOLER MASTER MASTERLIQUID ML240RS RGB, MLX-S24', 1, 1232924, 880.43, 2, 3),
(75, 'WATER COOLER NZXT KRAKEN X52 AM4, RL-KRX52-02', 1, 12909321, 869.9, 2, 3),
(76, 'WATER COOLER GAMERSTORM BY DEEPCOOL MAELSTROM 240RGB, DP-GS-', 1, 1101213942, 479.9, 2, 3),
(77, 'WATER COOLER CORSAIR HYDRO SERIES H100I PRO RGB 240MM, CW-90', 1, 1123012, 862.53, 2, 3),
(78, 'COOLER COOLER MASTER MASTERAIR MA620P TUF GAMING EDITION, MA', 1, 120021554, 292.8, 2, 3),
(79, 'COOLER PARA PROCESSADOR COOLER MASTER HYPER H410R 92MM LED V', 1, 121232155, 130, 2, 3),
(80, 'WATER COOLER COOLER MASTER MASTERLIQUID LITE 240, MLW-D24M-A', 1, 1, 410.98, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `senha` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `cartao` int(16) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `nivel` int(1) NOT NULL DEFAULT '1',
  `cep` int(8) DEFAULT NULL,
  `rua` varchar(120) COLLATE utf8_swedish_ci DEFAULT NULL,
  `numero` int(5) DEFAULT NULL,
  `bairro` varchar(60) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cidade` varchar(120) COLLATE utf8_swedish_ci DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `cpf`, `cartao`, `data_nascimento`, `nivel`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `ativo`) VALUES
(1, 'iago', 'iago@iago.com', '202cb962ac59075b964b07152d234b70', 2147483647, NULL, '2001-01-11', 9, 2147483647, 'aa', 1074, 'bb', 'cc', 1),
(2, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 484555455, NULL, '2322-03-12', 9, 13173383, 'Avenida Maria Ravagnani Basso', 318, 'Portal Bordon', 'SumarÃ©', 1),
(3, 'joao', 'joao@hotmail.com', 'e53a0a2978c28872a4505bdb51db06dc', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1),
(4, 'carlos', 'carlos@carlos.com', '202cb962ac59075b964b07152d234b70', 2147483647, NULL, '2008-01-11', 1, 9879415, 'Joao pessoa', 1875, 'Planalto do sol 2', 'Americana', 1),
(5, 'moretti', 'moretti@moretti.com', '202cb962ac59075b964b07152d234b70', 2147483647, NULL, '2000-08-27', 1, 987165, 'Carlos augusto', 4148, 'Cidade Nova', 'Santa Barbara', 1),
(6, 'joel', 'joel@joel.com', '202cb962ac59075b964b07152d234b70', 2147483647, NULL, '1400-01-01', 1, 8441987, 'Rua Curitiba', 1, 'Senegal', 'Zumbi', 1),
(7, 'Gustavo Lucas dos Santos', 'gustavolucas66@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, NULL, '2002-01-14', 1, 13456595, 'ferdinando mollon', 383, 'mollon IV', 'SBO', 1),
(8, 'nilvinha', 'nilvinha@nilvao.com', '202cb962ac59075b964b07152d234b70', 2147483647, NULL, '1100-01-01', 1, 102215, 'Rua Nao sei', 1, 'Grecia', 'Espanha', 1),
(9, 'barreto noia', 'barreto@boibravo.com', '202cb962ac59075b964b07152d234b70', 620195491, NULL, '1980-02-04', 1, 98487989, 'Rua dos ricos', 20215, 'SÃ³ mora rico', 'Manaus', 1),
(10, 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1),
(11, 'jai', 'agdfgdf', 'a151296c076e83387520ddab205d9fa1', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1),
(12, 'Matheus', 'matheus@gmail.com', 'a2e825aeafd7f6a5710170bfe7eeb848', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `tipo_pagamento` char(1) NOT NULL DEFAULT 'd',
  `num_parcelas` int(2) NOT NULL DEFAULT '1',
  `qnt` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_produto` (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `id_usuario`, `id_produto`, `data`, `hora`, `tipo_pagamento`, `num_parcelas`, `qnt`) VALUES
(1, 1, 80, '2019-05-22', '20:28:50', 'c', 10, 1),
(2, 4, 80, '2019-06-03', '19:48:02', 'd', 7, 1),
(3, 4, 13, '2019-06-03', '19:48:31', 'd', 1, 1),
(4, 4, 19, '2019-06-03', '19:49:00', 'c', 7, 1),
(5, 5, 63, '2019-06-03', '19:50:28', 'd', 4, 1),
(6, 5, 71, '2019-06-03', '19:50:35', 'd', 1, 1),
(7, 6, 48, '2019-06-03', '19:54:16', 'd', 3, 1),
(8, 6, 47, '2019-06-03', '19:54:25', 'd', 1, 1),
(9, 6, 73, '2019-06-03', '19:54:35', 'd', 1, 1),
(10, 8, 77, '2019-06-03', '19:56:18', 'd', 1, 1),
(11, 7, 46, '2019-06-03', '19:56:25', 'c', 1, 1),
(12, 8, 71, '2019-06-03', '19:56:30', 'd', 4, 1),
(13, 8, 3, '2019-06-03', '19:56:48', 'd', 1, 1),
(14, 7, 31, '2019-06-03', '19:57:00', 'd', 10, 1),
(15, 7, 40, '2019-06-03', '19:58:12', 'c', 5, 1),
(16, 7, 79, '2019-06-03', '19:59:08', 'd', 10, 1),
(17, 7, 58, '2019-06-03', '19:59:36', 'd', 4, 1),
(18, 9, 67, '2019-06-03', '20:00:12', 'd', 1, 1),
(19, 7, 3, '2019-06-03', '20:00:47', 'd', 6, 1),
(20, 7, 14, '2019-06-03', '20:02:06', 'd', 1, 1),
(21, 7, 22, '2019-06-03', '20:02:40', 'd', 7, 1),
(22, 7, 74, '2019-06-03', '20:03:35', 'd', 8, 1),
(23, 7, 73, '2019-06-03', '20:04:11', 'd', 10, 1),
(24, 7, 40, '2019-06-03', '20:05:35', 'd', 7, 1),
(25, 2, 79, '2019-06-08', '19:02:56', 'd', 1, 1),
(26, 2, 78, '2019-06-08', '19:03:50', 'd', 1, 1),
(27, 2, 78, '2019-06-08', '19:04:09', 'd', 1, 1),
(28, 2, 78, '2019-06-08', '19:04:20', 'd', 1, 1),
(29, 2, 79, '2019-06-08', '19:05:32', 'd', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
