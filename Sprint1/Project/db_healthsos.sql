-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2013 a las 00:38:02
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_healthsos`
--
CREATE DATABASE IF NOT EXISTS `db_healthsos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_healthsos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id_administrator` int(11) NOT NULL AUTO_INCREMENT,
  `numDocument` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userSurname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cellNum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_administrator`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `administrator`
--

INSERT INTO `administrator` (`id_administrator`, `numDocument`, `password`, `userName`, `userSurname`, `birthday`, `email`, `cellNum`) VALUES
(1, '1234567890', 'leydi1234', 'Leydi', 'Arango', '1992-07-01', 'leydi@hotmail.com', '3210984567'),
(2, '0987654321', 'yuliana1234', 'Yuliana', 'Noreña', '1992-03-10', 'yuliana@hotmail.com', '3214567890'),
(3, '0987123456', 'carlos1234', 'Carlos', 'Arbelaez', '1992-09-10', 'carlos@hotmail.com', '3214560987'),
(4, '1234567098', 'juan1234', 'Juan', 'Urango', '1992-02-01', 'juan@hotmail.com', '3210987654');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id_doctor` int(11) NOT NULL AUTO_INCREMENT,
  `numDocument` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userSurname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cellNum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_doctor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`id_doctor`, `numDocument`, `password`, `userName`, `userSurname`, `profession`, `birthday`, `email`, `cellNum`, `office`) VALUES
(1, '1234543212', 'david1234', 'David', 'Estrada', 'Medico General', '1980-02-20', 'david@hotmail.com', '3009874567', 'Piso 1, Consultorio 2'),
(2, '8745345234', 'andrea1234', 'Andrea', 'Velez', 'Pediatra', '1980-10-04', 'andrea@hotmail.com', '3006781232', 'Piso 2, Consultorio 1'),
(3, '2324356432', 'julian1234', 'Julian', 'Perez', 'Ginecologo', '1980-05-23', 'julian@hotmail.com', '3002340909', 'Piso 3, Consultorio 4'),
(4, '3423456543', 'milena1234', 'Milena', 'Hincapie', 'Odontologa', '1980-12-12', 'milena@hotmail.com', '3002312322', 'Piso 4, Consultorio 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id_patient` int(11) NOT NULL AUTO_INCREMENT,
  `numDocument` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userSurname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cellNum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_patient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `patient`
--

INSERT INTO `patient` (`id_patient`, `numDocument`, `password`, `userName`, `userSurname`, `birthday`, `email`, `cellNum`) VALUES
(1, '1834502876', 'jhoana1234', 'Jhoana', 'Grajales', '1992-07-10', 'jhoana@hotmail.com', '3210988901'),
(2, '3829087123', 'zoraida1234', 'Zoraida', 'Noreña', '1992-03-01', 'zoraida@hotmail.com', '3216783467'),
(3, '2309456878', 'andres1234', 'Andres', 'Zuluaga', '1992-09-01', 'andres@hotmail.com', '3217876554'),
(4, '1356754321', 'pablo1234', 'Pablo', 'Vitola', '1992-02-10', 'pablo@hotmail.com', '3214564455');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
