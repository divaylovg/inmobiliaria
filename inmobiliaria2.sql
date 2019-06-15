-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2019 a las 10:58:25
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(255) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(255) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `usuario`, `nombre`, `telefono`, `correo`, `contra`, `apellido`) VALUES
(2, 'dani', 'Daniel', 666666666, 'divaylovg@ieslavereda.es', '$2y$15$fN5FUbbj1vJch5uGYornXOxkvl04fCoXYZKJvqb/Pq4BE0osmL16q', 'Gerchev');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(255) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(255) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `usuario`, `nombre`, `telefono`, `correo`, `contra`, `apellido`) VALUES
(1, 'empleado1', 'asdf', 666666666, 'empleado1@asdf.com', '$2y$15$xNLFDUs6QQmI6Y6AD4lkNuTW8CtPLG45To2BHjxe4RUjGGEjc9fOK', 'asdf'),
(2, 'empleado2', 'qqqq', 666666666, 'emp@go.com', '$2y$15$EvqZz1321rJelh28GAuXIO0oI8v5FQHKyj7wC6tPqvKzjAuDcv53e', 'dani'),
(3, 'empleado3', 'asdfasdf', 666666, 'empleado3@gmail.com', '$2y$15$Ni1HLvtN1D5nkDhIVFvFJ.CdPH8Zb5NtRi8tEAff9Vhe0k2s2oiM2', 'asdf'),
(4, 'empleado4', 'qqqq', 652222222, 'empleado4@ies.com', '$2y$15$flff2n5nVGfmFRHYF5rFB.YnchObUYtutmfM8DakbexWaLUrekQ7G', 'asdf'),
(5, 'empleadoq', 'empleadoq', 888888888, 'empleadoq@iees.com', '$2y$15$f1ubD6ZNWWPy9e5Qc4dr5.lXvymLcVROa4FvDXkENhJZXnzQOd3q6', 'empleadoq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_inmueble` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `foto`, `id_inmueble`) VALUES
(1, 'imagenes/4.jpg', 52),
(2, 'imagenes/3.jpg', 52),
(3, 'imagenes/4.jpg', 53),
(4, 'imagenes/3.jpg', 53),
(5, 'imagenes/5.jpg', 54),
(6, 'imagenes/tucasa.jpg', 54),
(7, 'imagenes/4.jpg', 55),
(8, 'imagenes/3.jpg', 55),
(9, 'imagenes/2.jpg', 56),
(10, 'imagenes/4.jpg', 56),
(11, 'imagenes/5.jpg', 57),
(12, 'imagenes/4.jpg', 57),
(13, 'imagenes/3.jpg', 57),
(14, 'imagenes/4.jpg', 57),
(15, 'imagenes/1.jpg', 57),
(16, 'imagenes/4.jpg', 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmueble`
--

CREATE TABLE `inmueble` (
  `id` int(4) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `alquiler` int(255) DEFAULT NULL,
  `venta` int(255) DEFAULT NULL,
  `habitaciones` int(10) NOT NULL,
  `metros` int(255) NOT NULL,
  `provincia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(10) NOT NULL,
  `numero` int(5) NOT NULL,
  `puerta` int(5) NOT NULL,
  `piso` int(5) NOT NULL,
  `idPropietario` int(255) NOT NULL,
  `telefonoPropietario` int(10) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ascensor` varchar(22) COLLATE utf8_spanish_ci NOT NULL,
  `foto1` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `foto2` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto3` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto4` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto5` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alquilado` int(1) DEFAULT '0',
  `vendido` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inmueble`
--

INSERT INTO `inmueble` (`id`, `tipo`, `alquiler`, `venta`, `habitaciones`, `metros`, `provincia`, `ciudad`, `calle`, `cp`, `numero`, `puerta`, `piso`, `idPropietario`, `telefonoPropietario`, `descripcion`, `ascensor`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `alquilado`, `vendido`) VALUES
(4, 'piso', 450, 0, 4, 120, 'valencia', 'Valencia', 'asdf', 46020, 45, 45, 1, 1, 666666, 'Alquilo piso en valencia', 'si', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 1, 0),
(5, 'chalet', 555, 555555, 1, 120, 'alava', 'Valencia', 'asdf', 3333, 44, 12, 1, 1, 666666, 'lorem', 'nu', 'imagenes/3.jpg', 'imagenes/1557074996_f2_5.jpg', NULL, NULL, NULL, 0, 1),
(8, 'piso', 800, 0, 4, 140, 'valencia', 'Valencia', 'asdf', 28400, 33, 1, 1, 1, 666666, 'Alquilo piso en valencia de 4 habitaciones precio negociable.', 'si', 'imagenes/1557075547_f1_5.jpg', NULL, 'imagenes/1557075547_f3_3.jpg', NULL, 'imagenes/1557075547_f5_1.jpg', 0, 0),
(9, 'chalet', 555, 0, 1, 33, 'alava', 'Valencia', 'asdf', 46019, 33, 3, 1, 1, 666666, 'bonito', 'nu', 'imagenes/1557650428_f1_1.jpg', NULL, 'imagenes/1557650428_f3_3.jpg', 'imagenes/1557650428_f4_4.jpg', NULL, 0, 0),
(10, 'chalet', 333, 333, 1, 33, 'girona', 'Valencia', 'asdf', 3333, 33, 3, 1, 1, 3444444, 'asdf', 'nu', 'imagenes/1557650991_f1_1.jpg', 'imagenes/1557650991_f2_1.jpg', 'imagenes/1557650991_f3_1.jpg', 'imagenes/1557650991_f4_1.jpg', 'imagenes/1557650991_f5_1.jpg', 0, 0),
(13, 'chalet', 333, 333, 1, 33, 'alava', 'aasdf', 'asdf', 3333, 33, 3, 1, 1, 3444444, 'asdf', 'nu', 'imagenes/1.jpg', 'imagenes/1.jpg', 'imagenes/1.jpg', 'imagenes/1.jpg', 'imagenes/1.jpg', 0, 0),
(15, 'chalet', 555, 777777, 4, 133, 'madrid', 'Madrid', 'san juan', 46019, 3, 3, 1, 1, 66666666, 'Bonito piso a las afueras ', 'nu', 'imagenes/4.jpg', 'imagenes/5.jpg', 'imagenes/6.jpg', 'imagenes/3.jpg', 'imagenes/1.jpg', 0, 0),
(16, 'chalet', 222, 50000, 3, 100, 'barcelona', 'Barcelona', 'san juan', 46019, 66, 3, 1, 1, 66666666, 'Bonito chalet a las afueras de Barcelona', 'nu', 'imagenes/3.jpg', 'imagenes/4.jpg', 'imagenes/5.jpg', 'imagenes/1.jpg', 'imagenes/2.jpg', 0, 0),
(17, 'chalet', 555, 777777, 1, 120, 'alava', 'Toledo', 'asdf', 3333, 33, 3, 1, 1, 666666, 'asdf', 'nu', 'imagenes/5.jpg', 'imagenes/2.jpg', 'imagenes/3.jpg', 'imagenes/2.jpg', 'imagenes/4.jpg', 0, 0),
(18, 'chalet', 333, 333, 1, 33, 'alava', 'Toledo', 'To', 3333, 44, 12, 1, 1, 3444444, 'asdf', 'nu', 'imagenes/5.jpg', 'imagenes/4.jpg', 'imagenes/3.jpg', 'imagenes/2.jpg', 'imagenes/1.jpg', 0, 0),
(19, 'chalet', 555, 666666, 1, 120, 'alava', 'Toledo', 'san juan', 28400, 3, 3, 1, 1, 666666, 'El mejor piso de la zona', 'null', 'imagenes/2.jpg', 'imagenes/1.jpg', 'imagenes/3.jpg', 'imagenes/4.jpg', 'imagenes/5.jpg', 0, 0),
(20, 'chalet', 555, 99999, 1, 133, 'valencia', 'Manises', 'san juan', 46019, 3, 12, 1, 20, 67666677, 'El mejor piso de la finca.', 'null', 'imagenes/2.jpg', 'imagenes/1.jpg', 'imagenes/3.jpg', 'imagenes/4.jpg', 'imagenes/5.jpg', 0, 0),
(21, 'casa', 333, 333, 1, 1111, 'alava', 'Valencia', 'san juan', 3333, 3, 3, 1, 1, 3444444, 'asdf', 'null', 'imagenes/3.jpg', NULL, NULL, NULL, NULL, 0, 0),
(22, 'asdf', 333, 333, 1, 33, 'alava', 'Barcelona', 'san juan', 46019, 33, 3, 1, 1, 3444444, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(23, 'duplex', 0, 3333333, 1, 3, 'alava', 'Valencia', 'asdf', 3333, 3, 3, 1, 1, 66666666, 'asdf', 'si', 'imagenes/3.jpg', NULL, NULL, NULL, NULL, 0, 0),
(24, 'asdf', 333, 777777, 1, 33, 'alava', 'Toledo', 'san juan', 3333, 33, 3, 1, 1, 666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(25, 'asdf', 333, 777777, 1, 33, 'alava', 'Toledo', 'san juan', 3333, 33, 3, 1, 1, 666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(26, 'asdf', 33, 333, 1, 33, 'alava', 'aasdf', 'asdf', 46019, 33, 3, 1, 1, 3444444, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(27, 'asdf', 444, 333, 1, 33, 'alava', 'Valencia', 'asdf', 3333, 33, 3, 1, 1, 666666, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 1, 0),
(28, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(29, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(30, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(31, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/2.jpg', NULL, NULL, NULL, NULL, 0, 0),
(32, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/3.jpg', NULL, NULL, NULL, NULL, 0, 0),
(34, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(35, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(36, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(37, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(38, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'sdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(39, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'dfasd', 'null', 'imagenes/3.jpg', NULL, NULL, NULL, NULL, 0, 0),
(40, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(41, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/2.jpg', NULL, NULL, NULL, NULL, 0, 0),
(42, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(43, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(44, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(45, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/1.jpg', NULL, NULL, NULL, NULL, 0, 0),
(46, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(47, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(48, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(49, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(50, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'fasdf', 'null', 'imagenes/4.jpg', NULL, NULL, NULL, NULL, 0, 0),
(51, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'dfd', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(52, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asd', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(53, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(54, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'sdf', 'null', 'imagenes/1.jpg', NULL, NULL, NULL, NULL, 0, 0),
(55, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/5.jpg', NULL, NULL, NULL, NULL, 0, 0),
(56, 'refugio', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/3.jpg', NULL, NULL, NULL, NULL, 0, 0),
(57, 'asdf', 333, 55555555, 1, 100, 'alava', 'Valencia', 'Calle Bosco', 44444, 333, 333, 1, 1, 66666666, 'asdf', 'null', 'imagenes/3.jpg', NULL, NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ms_tipo_inmueble`
--

CREATE TABLE `ms_tipo_inmueble` (
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ms_tipo_inmueble`
--

INSERT INTO `ms_tipo_inmueble` (`tipo`) VALUES
('asdf'),
('casa'),
('duplex'),
('finca'),
('garaje'),
('parcela'),
('piso'),
('refugio'),
('trastero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id` int(255) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(255) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`id`, `usuario`, `nombre`, `telefono`, `correo`, `contra`, `apellido`) VALUES
(1, 'Tzar', 'dani', 666666666, 'paco@go.com', '$2y$15$rQgmpkX4V7l/rTn804so4.B7CVf5qx61TxFFCsbUADPPxNaVoz.Ai', 'dani'),
(4, 'paco', 'dani', 666666666, 'da@asdfasd.com', '$2y$15$7oboRmqpWX9.1Sgh./CIs.KoCzkFtfF7UcsTfbqbbpt9byKTKF7Au', 'dani'),
(5, 'pepe', 'qqqq', 666666666, 'pepe@gmail.com', '$2y$15$wkhiV6MqJ7OrAAuNRT4/TuOKWCy2gvdzURo0KzrEMzvK03pUIsT6e', 'dani'),
(7, 'pedro', 'asdf', 666666666, 'pedro@gmail.com', '$2y$15$.9D2FttPKHoE7/J29EVVrOcvmRa5kDvjPo6Nmj7bzd2yayzjpai9O', 'asdf'),
(8, 'zzz', 'qqqq', 666666666, 'zzz@gmai.com', '$2y$15$o0CI.BpzcD59LMqDQEdfO.4LeyipXp2x8faMZ59Ym.GzxgmQiKh96', 'asdf'),
(9, 'aaaaaaa', 'aaaaaaa', 2147483647, 'aaaaa@hotmail.com', '$2y$15$/C6bFsv2CF7q2nshu1hOPO1ie73vkxb9EJQZWFL78HurpgDUcKqYa', 'aaaaaaa'),
(11, 'asdf', 'asdf', 666666666, 'asdf@go.com', '$2y$15$HktCHj38F4JDYmbBzdezSeLvATRyczwuKtzRK9JmQHfgeJtPdMD2u', 'asdf'),
(12, 'zzzz', 'asdf', 666666666, 'zzzz@hotmail.com', '$2y$15$S1o2n8YvNOR74dNoJ.vGcebuIcz0RbtdmEd0G5qLSQ1X9pzns3dM.', 'asdf'),
(13, 'cccc', 'qqqq', 666666666, 'cccc@hotmai.com', '$2y$15$H.pxFm5JxssDkb6B9iq3ueeklHqzOLr/oE6Aj9ebAArWOizGSiezO', 'dani'),
(14, 'tttttt', 'qqqq', 666666666, 'tttttttttt@hotmail.com', '$2y$15$Ag9DxFC.E1PrxLOsBOXmoe4yFvFTB7zmVW4YqbIU10Lydc4CYBnWW', 'dani'),
(15, 'usr', 'asdf', 66666, 'usr@hotmail.com', '$2y$15$ikXNC/d/fixCUKdEvO2aYeZsAGLsmHHtNSFuzA8ojtSko7dk9b5pm', 'asdf'),
(17, 'usr2', 'qqqq', 666666666, 'usr@go.com', '$2y$15$vMHo0g21SMTirdX7s//4heD88yXKxrZjcd8T4cOth0HYSqp957uwC', 'asdf'),
(18, 'zzzzzzasdf', 'qqqq', 666666666, 'asdfaxxxxx@asdf.com', '$2y$15$3QRSr0UVxh51jc6zNlu7aOicqdi5f4SSXE8uwpepI90OisQ5m/qOC', 'dani'),
(19, 'juancho', 'juan', 666666666, 'juancho@hotmail.com', '$2y$15$W3eInf8420EV1HRn1lZ8kOHGOdz5pWF.FUILOIA0bMDh88Voi6USu', 'asdf'),
(20, 'Danielk', 'Danielk', 666666666, 'Danielk@gosasdfa.com', '$2y$15$1LIXMSAq9AYUrQkq4tDye.V/2hqoQptOPkWIOC4C3HVibtmQZV5ta', 'ddd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_inmueble` (`id_inmueble`);

--
-- Indices de la tabla `inmueble`
--
ALTER TABLE `inmueble`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_inmueble_propietario` (`idPropietario`);

--
-- Indices de la tabla `ms_tipo_inmueble`
--
ALTER TABLE `ms_tipo_inmueble`
  ADD PRIMARY KEY (`tipo`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `inmueble`
--
ALTER TABLE `inmueble`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`id_inmueble`) REFERENCES `inmueble` (`id`);

--
-- Filtros para la tabla `inmueble`
--
ALTER TABLE `inmueble`
  ADD CONSTRAINT `fk_inmueble_propietario` FOREIGN KEY (`idPropietario`) REFERENCES `propietario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
