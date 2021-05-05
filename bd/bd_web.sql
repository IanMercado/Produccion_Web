-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2021 a las 06:33:27
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
(1, 1, 1, 49.00),
(2, 2, 1, 50.00),
(3, 3, 1, 70.00),
(4, 10, 2, 28.00),
(5, 11, 2, 28.00),
(6, 12, 2, 33.00),
(7, 19, 3, 32.00),
(8, 20, 3, 32.00),
(9, 21, 3, 32.00),
(10, 4, 1, 60.00),
(11, 5, 1, 60.00),
(12, 6, 1, 60.00),
(13, 13, 2, 30.00),
(14, 14, 2, 35.00),
(15, 15, 2, 35.00),
(16, 22, 3, 32.00),
(17, 23, 3, 32.00),
(18, 24, 3, 32.00),
(19, 7, 1, 31.00),
(20, 8, 1, 31.00),
(21, 9, 1, 31.00),
(22, 16, 2, 20.00),
(23, 17, 2, 23.00),
(24, 18, 2, 20.00),
(25, 25, 3, 20.00),
(26, 26, 3, 23.00),
(27, 27, 3, 20.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rol_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `mail`, `password`, `rol_id`) VALUES
(6, 'IanMercado', 'ian.mercado@mail.com', 'admin', 1),
(7, 'RamiroVita', 'ramiro.vita@mail.com', 'admin', 1),
(8, 'GonzaloMonzon', 'gonzalo.monzon@mail.com', 'admin', 1),
(9, 'usuario', 'usuario@mail.com', '123', 2);

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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`);

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
  MODIFY `id_marca` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_modelo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
