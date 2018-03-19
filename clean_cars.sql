-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-03-2018 a las 09:59:19
-- Versión del servidor: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clean_cars`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `model` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cars`
--

INSERT INTO `cars` (`id`, `id_brand`, `model`) VALUES
(3, 1, 'C4'),
(4, 1, 'C5'),
(5, 2, '206'),
(6, 2, '307'),
(7, 3, 'Golf'),
(8, 3, 'Polo'),
(9, 4, 'A3'),
(10, 4, 'A4'),
(11, 1, 'C15'),
(12, 1, 'Xsara'),
(13, 2, '5008'),
(14, 2, '3008'),
(15, 3, 'Beetle'),
(16, 3, 'Passat'),
(17, 4, 'Q2'),
(18, 4, 'Q3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cars_brand`
--

CREATE TABLE `cars_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cars_brand`
--

INSERT INTO `cars_brand` (`id`, `name`) VALUES
(1, 'Citroën'),
(2, 'Peugeot'),
(3, 'Volkswagen'),
(4, 'Audi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cars_to_user`
--

CREATE TABLE `cars_to_user` (
  `id_user` int(11) NOT NULL,
  `id_car` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cars_to_user`
--

INSERT INTO `cars_to_user` (`id_user`, `id_car`) VALUES
(1, 3),
(1, 5),
(1, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL COMMENT 'sha1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'dani', '57149e413e1b158f04928330e5d8c7dabdac3f7e'),
(2, 'ana', '31d86d883ac82ce8a9a042b54b684d84ae39d4ae');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model` (`model`),
  ADD KEY `marca` (`id_brand`);

--
-- Indices de la tabla `cars_brand`
--
ALTER TABLE `cars_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cars_to_user`
--
ALTER TABLE `cars_to_user`
  ADD UNIQUE KEY `id_user_3` (`id_user`,`id_car`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_card` (`id_car`),
  ADD KEY `id_user_2` (`id_user`,`id_car`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `cars_brand`
--
ALTER TABLE `cars_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
