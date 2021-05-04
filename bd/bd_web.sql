-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2021 a las 23:26:59
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(10) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `tipo`) VALUES
(1, 'Auriculares'),
(2, 'Mouses'),
(3, 'Teclados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `modelo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`, `modelo`) VALUES
(1, 'Logitech', 1),
(2, 'Logitech', 2),
(3, 'Logitech', 3),
(4, 'Noga', 4),
(5, 'Noga', 5),
(6, 'Noga', 6),
(7, 'Msi', 7),
(8, 'Msi', 8),
(9, 'Msi', 9),
(10, 'Logitech', 10),
(11, 'Logitech', 11),
(12, 'Logitech', 12),
(13, 'Noga', 13),
(14, 'Noga', 14),
(15, 'Noga', 15),
(16, 'Msi', 16),
(17, 'Msi', 17),
(18, 'Msi', 18),
(19, 'Logitech', 19),
(20, 'Logitech', 20),
(21, 'Logitech', 21),
(22, 'Noga', 22),
(23, 'Noga', 23),
(24, 'Noga', 24),
(25, 'Msi', 25),
(26, 'Msi', 26),
(27, 'Msi', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `nombre`) VALUES
(1, 'H390'),
(2, 'G332'),
(3, 'A50'),
(4, 'Stormer Warfare'),
(5, 'Stormer Hydra'),
(6, 'Stormer Brash'),
(7, 'DS501'),
(8, 'DS502'),
(9, 'Immerse GH70'),
(10, 'M280'),
(11, 'M171'),
(12, 'M190'),
(13, 'Gamer Retroiluminado'),
(14, 'Gamer 12000 DPI'),
(15, 'Gamer Stormer Series'),
(16, 'Clutch GM41'),
(17, 'Interceptor DS300'),
(18, 'Interceptor DS200'),
(19, 'K400 Plus'),
(20, 'K230'),
(21, 'MX Keys'),
(22, 'Hybrid'),
(23, 'NKB-560'),
(24, 'Gamer Stormer Series'),
(25, 'Vigor GK70'),
(26, 'Vigor GK20'),
(27, 'Interceptor DS4100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(10) NOT NULL,
  `marca` int(10) NOT NULL,
  `categoria` int(10) NOT NULL,
  `precio` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `marca`, `categoria`, `precio`) VALUES
(28, 1, 1, 49.00),
(29, 2, 1, 50.00),
(30, 3, 1, 70.00),
(32, 10, 2, 28.00),
(33, 11, 2, 28.00),
(34, 12, 2, 33.00),
(35, 19, 3, 32.00),
(36, 20, 3, 32.00),
(37, 21, 3, 32.00),
(38, 4, 1, 60.00),
(39, 5, 1, 60.00),
(40, 6, 1, 60.00),
(41, 13, 2, 30.00),
(42, 14, 2, 35.00),
(43, 15, 2, 35.00),
(44, 22, 3, 32.00),
(45, 23, 3, 32.00),
(46, 24, 3, 32.00),
(47, 7, 1, 31.00),
(48, 8, 1, 31.00),
(49, 9, 1, 31.00),
(50, 16, 2, 20.00),
(51, 17, 2, 23.00),
(52, 18, 2, 20.00),
(53, 25, 3, 20.00),
(54, 26, 3, 23.00),
(55, 27, 3, 20.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `modelo` (`modelo`),
  ADD KEY `nombre_2` (`nombre`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_modelo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `marca` (`marca`),
  ADD KEY `categoria` (`categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_modelo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `marca_ibfk_1` FOREIGN KEY (`modelo`) REFERENCES `modelo` (`id_modelo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`marca`) REFERENCES `marca` (`id_marca`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
