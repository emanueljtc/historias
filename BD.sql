-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2014 a las 04:07:39
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aisdevsc_est_s4p06`
--
CREATE DATABASE IF NOT EXISTS `aisdevsc_est_s4p06` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aisdevsc_est_s4p06`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento_pacientes`
--

DROP TABLE IF EXISTS `departamento_pacientes`;
CREATE TABLE IF NOT EXISTS `departamento_pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departamento_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(1, 'Odontologia'),
(2, 'Rayos X'),
(3, 'Medicina General'),
(4, 'Traumatologia'),
(5, 'Oftalmológia '),
(8, 'Pediatria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

DROP TABLE IF EXISTS `historia`;
CREATE TABLE IF NOT EXISTS `historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paciente_id` int(11) NOT NULL,
  `enfermedad` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id`, `paciente_id`, `enfermedad`, `observaciones`, `created`, `modified`) VALUES
(1, 1, 'Ninguna', 'Perfecto estado', '2014-11-17 17:36:31', '2014-11-17 17:36:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dni` varchar(20) CHARACTER SET latin1 NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `nombre`, `apellido`, `dni`, `edad`, `sexo`, `direccion`, `fecha_nacimiento`, `created`, `modified`) VALUES
(1, 'Ana', 'Cordova', '20355749', 0, '', '', '0000-00-00', '2014-11-17 17:36:01', '2014-11-17 17:36:01'),
(2, 'Daniel', 'Castellanos', '18044120', 26, 'M', 'San Sebastian de los Reyes', '1994-01-03', '2014-12-02 02:43:03', '2014-12-02 02:43:03'),
(6, 'Emanuel', 'Torres', '18971787', 24, 'M', 'San Juan de los Morros', '1994-07-04', '2014-12-02 02:49:11', '2014-12-02 02:49:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `departamento_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(25) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `grupo_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `departamento_id`, `username`, `password`, `role`, `nombre`, `apellido`, `dni`, `email`, `created`, `modified`, `grupo_id`, `user_id`) VALUES
(10, 1, 'emanueljtc', 'emanueltorres', 'admin', 'Emanuel', 'Torres', 0, 'emanueljtc@gmail.com', '2014-11-26 17:57:27', '2014-11-26 17:57:27', 1, NULL),
(11, 1, 'enano', '$2a$10$z20ESKbpznMz5r8NeIoape2PdtRLJJEDe', 'admin', 'Juan', 'cordova', 0, 'juan@gmail.com', '2014-11-26 18:02:30', '2014-11-26 18:02:30', 1, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
