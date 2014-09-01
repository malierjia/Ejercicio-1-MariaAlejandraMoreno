-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2014 a las 00:02:44
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `claseweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `codigo` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`codigo`, `nombre`, `apellido`, `correo`) VALUES
(11212007, 'maria', 'moreno', 'malierjia@hotmail.com'),
(11212006, 'juan', 'micolta', 'jmicolta@hotmail.com'),
(11212005, 'andres', 'valencia', 'avalencia@hotmail.com'),
(11212004, 'juan', 'ramon', 'jramon@hotmail.com'),
(11212014, 'Carlos', 'Moreno', 'camoreno@hotmail.com'),
(11212050, 'Pepito', 'Perez', 'ssadsda'),
(11212024, 'Jose', 'BolaÃ±os', 'josebdiaz@hotmail.com'),
(11212044, 'Juan', 'Gordillo', 'juanfer0611@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantesnotas`
--

CREATE TABLE IF NOT EXISTS `estudiantesnotas` (
  `codigo` int(11) NOT NULL,
  `idNota` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantesnotas`
--

INSERT INTO `estudiantesnotas` (`codigo`, `idNota`, `valor`) VALUES
(11212007, 1, 3),
(11212007, 2, 2),
(11212007, 3, 4),
(11212007, 4, 5),
(11212006, 1, 5),
(11212006, 2, 1),
(11212006, 3, 3),
(11212006, 4, 4),
(11212005, 1, 5),
(11212005, 2, 4),
(11212005, 3, 3),
(11212005, 4, 2),
(11212004, 1, 2),
(11212004, 2, 5),
(11212004, 3, 5),
(11212004, 4, 4),
(11212014, 4, 2),
(11212014, 2, 5),
(11212014, 1, 1),
(11212014, 3, 0),
(0, 1, 0),
(0, 2, 0),
(11212050, 1, 4),
(11212050, 2, 3),
(11212050, 3, 2),
(11212050, 4, 1),
(1, 1, 5),
(1, 2, 6),
(1, 3, 7),
(1, 4, 8),
(4, 1, 8),
(4, 2, 4),
(4, 3, 3),
(4, 4, 4),
(11212024, 1, 5),
(11212024, 2, 5),
(11212024, 3, 5),
(11212024, 4, 5),
(11212044, 1, 5),
(11212044, 2, 5),
(11212044, 3, 5),
(11212044, 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
`idNota` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `porcentaje` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`idNota`, `nombre`, `porcentaje`) VALUES
(1, 'taller 1', 10),
(2, 'taller 2', 20),
(3, 'taller 3', 20),
(4, 'final', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `FirstName` char(30) DEFAULT NULL,
  `LastName` char(30) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
 ADD PRIMARY KEY (`idNota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
MODIFY `idNota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
