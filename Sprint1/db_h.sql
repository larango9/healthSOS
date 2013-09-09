-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2013 a las 03:50:05
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_h`
--
CREATE DATABASE IF NOT EXISTS `db_h` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_h`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `numDocument` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userSurname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cellNum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `numDocument`, `password`, `userName`, `userSurname`, `birthday`, `email`, `cellNum`) VALUES
(1, 'je', 'je', '', '', '0000-00-00', '', ''),
(2, 'yuliana', 'yuli', '', '', '0000-00-00', '', ''),
(25, '8', '8', 'j', '', '0000-00-00', '', ''),
(26, '9', '9', 'k', '', '0000-00-00', '', ''),
(27, '4', '4', 'd', 'f', '0000-00-00', '', ''),
(30, '3', '3', 'd', 'x', '0000-00-00', 'ffg@gtr.com', ''),
(31, '5', '5', 'hy', 'ui', '2013-09-10', 'hghrt@hyh.com', ''),
(32, '65', 'tgg', 'ngh', 'sdcf', '2013-09-04', 'kjn@sadg.com', '1234'),
(33, '67', '67', 'jb', 'jb', '2013-09-25', 'oii@fuvj.com', '09876'),
(34, '9', '9', 'lk', 'pk', '2013-09-04', 'ue@igv.com', '45678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
