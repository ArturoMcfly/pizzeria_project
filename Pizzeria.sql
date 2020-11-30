-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2020 a las 06:10:25
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Pizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_nombre` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `colonia` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `paquete` varchar(255) NOT NULL,
  `ingredientes` varchar(255) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_nombre`, `nombre`, `direccion`, `colonia`, `municipio`, `referencia`, `paquete`, `ingredientes`, `tipo`) VALUES
(1, 'artur', 'santiago', 'hola', 'que hay', 'ey', 'paquete1', '', 'peperoni'),
(2, '', '', '', '', '', '', '', ''),
(3, 'ar', 'me', 'sa', 'na', 'sasa', 'paquete2', 'dsds', 'efectivo'),
(4, 'ar', 'me', 'sa', 'na', 'sasa', 'paquete2', 'dsds', 'efectivo'),
(5, 'ar', 'me', 'sa', 'na', 'sasa', 'paquete2', 'dsds', 'efectivo'),
(6, 'ar', 'me', 'sa', 'na', 'sasa', 'paquete2', 'dsds', 'efectivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_nombre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
