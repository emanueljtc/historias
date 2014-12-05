-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2014 a las 00:23:10
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Volcado de datos para la tabla `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 114),
(2, 1, NULL, NULL, 'DepartamentoPacientes', 2, 23),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'admin_index', 13, 14),
(9, 2, NULL, NULL, 'admin_view', 15, 16),
(10, 2, NULL, NULL, 'admin_add', 17, 18),
(11, 2, NULL, NULL, 'admin_edit', 19, 20),
(12, 2, NULL, NULL, 'admin_delete', 21, 22),
(13, 1, NULL, NULL, 'Departamentos', 24, 45),
(14, 13, NULL, NULL, 'index', 25, 26),
(15, 13, NULL, NULL, 'view', 27, 28),
(16, 13, NULL, NULL, 'add', 29, 30),
(17, 13, NULL, NULL, 'edit', 31, 32),
(18, 13, NULL, NULL, 'delete', 33, 34),
(19, 13, NULL, NULL, 'admin_index', 35, 36),
(20, 13, NULL, NULL, 'admin_view', 37, 38),
(21, 13, NULL, NULL, 'admin_add', 39, 40),
(22, 13, NULL, NULL, 'admin_edit', 41, 42),
(23, 13, NULL, NULL, 'admin_delete', 43, 44),
(24, 1, NULL, NULL, 'Groups', 46, 57),
(25, 24, NULL, NULL, 'index', 47, 48),
(26, 24, NULL, NULL, 'view', 49, 50),
(27, 24, NULL, NULL, 'add', 51, 52),
(28, 24, NULL, NULL, 'edit', 53, 54),
(29, 24, NULL, NULL, 'delete', 55, 56),
(31, 1, NULL, NULL, 'Historia', 58, 79),
(32, 31, NULL, NULL, 'index', 59, 60),
(33, 31, NULL, NULL, 'view', 61, 62),
(34, 31, NULL, NULL, 'add', 63, 64),
(35, 31, NULL, NULL, 'edit', 65, 66),
(36, 31, NULL, NULL, 'delete', 67, 68),
(37, 31, NULL, NULL, 'admin_index', 69, 70),
(38, 31, NULL, NULL, 'admin_view', 71, 72),
(39, 31, NULL, NULL, 'admin_add', 73, 74),
(40, 31, NULL, NULL, 'admin_edit', 75, 76),
(41, 31, NULL, NULL, 'admin_delete', 77, 78),
(42, 1, NULL, NULL, 'Pacientes', 80, 91),
(43, 42, NULL, NULL, 'index', 81, 82),
(44, 42, NULL, NULL, 'view', 83, 84),
(45, 42, NULL, NULL, 'add', 85, 86),
(46, 42, NULL, NULL, 'edit', 87, 88),
(47, 42, NULL, NULL, 'delete', 89, 90),
(48, 1, NULL, NULL, 'Pages', 92, 95),
(49, 48, NULL, NULL, 'display', 93, 94),
(50, 1, NULL, NULL, 'Users', 96, 111),
(51, 50, NULL, NULL, 'login', 97, 98),
(52, 50, NULL, NULL, 'logout', 99, 100),
(53, 50, NULL, NULL, 'index', 101, 102),
(54, 50, NULL, NULL, 'view', 103, 104),
(55, 50, NULL, NULL, 'add', 105, 106),
(56, 50, NULL, NULL, 'edit', 107, 108),
(57, 50, NULL, NULL, 'delete', 109, 110),
(58, 1, NULL, NULL, 'AclExtras', 112, 113);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 10),
(3, 1, 'User', 1, NULL, 2, 3),
(4, 2, 'User', 2, NULL, 6, 7),
(5, 2, 'User', 3, NULL, 8, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  KEY `idx_aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 42, '1', '1', '1', '1'),
(4, 2, 31, '1', '1', '1', '1'),
(5, 2, 52, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento_pacientes`
--

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
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'admin', '2014-12-04 22:05:29', '2014-12-04 22:05:29'),
(2, 'doctores', '2014-12-04 22:05:37', '2014-12-04 22:05:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

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
(1, 'Ana', 'Cordova', '20355749', 22, 'F', '', '1994-03-16', '2014-11-17 17:36:01', '2014-12-04 23:20:03'),
(2, 'Daniel', 'Castellanos', '18044120', 26, 'M', 'San Sebastian de los Reyes', '1994-01-03', '2014-12-02 02:43:03', '2014-12-02 02:43:03'),
(6, 'Emanuel', 'Torres', '18971787', 24, 'M', 'San Juan de los Morros', '1994-07-04', '2014-12-02 02:49:11', '2014-12-02 02:49:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `departamento_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(25) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `departamento_id`, `group_id`, `username`, `password`, `nombre`, `apellido`, `dni`, `email`, `created`, `modified`, `grupo_id`) VALUES
(1, 1, 1, 'emanueljtc', '1f73ba24e62dc262978fa8d37fbc6a5fb3569dc6', 'Emanuel', 'Torres', 0, 'emanueljtc@gmail.com', '2014-12-04 22:06:06', '2014-12-04 22:06:06', NULL),
(2, 1, 2, 'danielc', '4d5a837568a1cd66a9d66a08ef82ac931ab14683', 'Daniel', 'Castellanos', 0, 'danielcastellanos@gmail.com', '2014-12-04 22:06:43', '2014-12-04 22:06:43', NULL),
(3, 1, 2, 'ana', '8d946c519cd9b80ada3da34a3aecc673c62556d2', 'ana', 'cordova', 0, 'ana@gmail.com', '2014-12-04 22:45:12', '2014-12-04 22:45:12', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
