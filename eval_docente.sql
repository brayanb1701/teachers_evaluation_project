-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-08-2018 a las 03:35:58
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eval_docente`
--
CREATE DATABASE IF NOT EXISTS `eval_docente` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `eval_docente`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `grado` smallint(6) NOT NULL,
  `codigo` smallint(6) NOT NULL,
  `contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `grado`, `codigo`, `contrasena`) VALUES
(1, 'Angelica Hernandez', 8, 5, '1005647382'),
(2, 'Felipe Orozco', 10, 21, '1005492852'),
(3, 'Juliana Tamayo', 6, 15, '1006028953'),
(4, 'Hector Sepulveda', 9, 23, '1005839285');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `identidad_est` varchar(10) NOT NULL,
  `cod_doc` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`identidad_est`, `cod_doc`) VALUES
('1005647382', '20154'),
('1005647382', '45647'),
('1005647382', '85463'),
('1005647382', '46578');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `codigo` varchar(5) NOT NULL,
  `nombre` text NOT NULL,
  `materia` text NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  `p7` int(11) NOT NULL,
  `p8` int(11) NOT NULL,
  `p9` int(11) NOT NULL,
  `p10` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `n_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`codigo`, `nombre`, `materia`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `total`, `n_est`) VALUES
('20154', 'Diego Suarez', 'Ingles', 1, 3, 5, 1, 3, 5, 1, 3, 5, 1, 28, 1),
('45647', 'Laura Jimenez', 'Ciencias', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('46578', 'Edwin Castro', 'Contabilidad', 3, 5, 1, 3, 1, 5, 1, 3, 5, 5, 32, 1),
('85463', 'Sara Blanco', 'Español', 3, 5, 1, 1, 3, 5, 5, 3, 1, 3, 30, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contraseña` (`contrasena`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD KEY `identidad_est` (`identidad_est`),
  ADD KEY `cod_doc` (`cod_doc`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`identidad_est`) REFERENCES `estudiantes` (`contrasena`),
  ADD CONSTRAINT `evaluacion_ibfk_2` FOREIGN KEY (`cod_doc`) REFERENCES `profesores` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
