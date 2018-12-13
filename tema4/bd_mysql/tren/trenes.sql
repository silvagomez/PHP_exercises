-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-12-2018 a las 17:37:37
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaciones`
--

DROP TABLE IF EXISTS `estaciones`;
CREATE TABLE IF NOT EXISTS `estaciones` (
  `cod_estacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `poblacion` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_estacion`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estaciones`
--

INSERT INTO `estaciones` (`cod_estacion`, `nombre`, `poblacion`) VALUES
(1, 'Campestre', 'Cajica'),
(2, 'Sabana', 'Chia'),
(3, 'Falabella', 'BogotÃ¡'),
(4, 'Cedritos', 'BogotÃ¡'),
(5, 'Unicentro', 'BogotÃ¡'),
(6, 'Calle 100', 'BogotÃ¡'),
(7, 'Chapinero', 'BogotÃ¡'),
(8, 'Centro', 'BogotÃ¡');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recorridos`
--

DROP TABLE IF EXISTS `recorridos`;
CREATE TABLE IF NOT EXISTS `recorridos` (
  `cod_tren` int(11) NOT NULL,
  `cod_estacion` int(11) NOT NULL,
  KEY `fk_cod_tren` (`cod_tren`),
  KEY `fk_cod_estacion` (`cod_estacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recorridos`
--

INSERT INTO `recorridos` (`cod_tren`, `cod_estacion`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(2, 3),
(2, 8),
(3, 3),
(3, 8),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(5, 3),
(5, 5),
(5, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trenes`
--

DROP TABLE IF EXISTS `trenes`;
CREATE TABLE IF NOT EXISTS `trenes` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_compra` date NOT NULL,
  `km_recorridos` int(11) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trenes`
--

INSERT INTO `trenes` (`numero`, `fecha_compra`, `km_recorridos`) VALUES
(1, '2010-01-01', 500000),
(2, '2012-02-02', 400000),
(3, '2013-03-03', 300000),
(4, '2014-04-04', 200000),
(5, '2015-05-05', 100000),
(6, '2016-06-06', 60000),
(7, '2016-07-06', 50000),
(8, '2018-12-04', 40000);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recorridos`
--
ALTER TABLE `recorridos`
  ADD CONSTRAINT `fk_cod_estacion` FOREIGN KEY (`cod_estacion`) REFERENCES `estaciones` (`cod_estacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cod_tren` FOREIGN KEY (`cod_tren`) REFERENCES `trenes` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
