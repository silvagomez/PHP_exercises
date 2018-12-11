-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-12-2018 a las 10:07:45
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
(8, '2016-08-06', 40000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
