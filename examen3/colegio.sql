-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-02-2019 a las 10:05:08
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
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `dni` varchar(9) NOT NULL,
  `nombreAlumno` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `codCiclo` int(11) NOT NULL,
  PRIMARY KEY (`dni`),
  KEY `fk_codCiclo` (`codCiclo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`dni`, `nombreAlumno`, `apellido1`, `apellido2`, `direccion`, `telefono`, `codCiclo`) VALUES
('12345678A', 'diego', 'silva', 'gomez', 'urizar 24', 8106658, 2),
('12345678h', 'sergio', 'bustos', 'dias', 'casco', 686588, 2),
('12356478d', 'marce', 'marcius', 'marcius', 'casco', 6569616, 2),
('65154789f', 'ramon', 'silva', 'pinzon', 'bucaramanga', 689562, 3),
('65432587l', 'alicia', 'gomez', 'suarez', 'bogota', 2162885, 1),
('98754265s', 'pilar', 'lekue', 'lekue', 'casco', 654677, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos`
--

DROP TABLE IF EXISTS `ciclos`;
CREATE TABLE IF NOT EXISTS `ciclos` (
  `codCiclo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCiclo` varchar(50) NOT NULL,
  PRIMARY KEY (`codCiclo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclos`
--

INSERT INTO `ciclos` (`codCiclo`, `nombreCiclo`) VALUES
(1, 'Desarrollo de aplicaciones multiplataforma'),
(2, 'Desarrollo de aplicaciones web'),
(3, 'Guia informacion y asistencia turistica');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_codCiclo` FOREIGN KEY (`codCiclo`) REFERENCES `ciclos` (`codCiclo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
