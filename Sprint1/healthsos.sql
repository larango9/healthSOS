-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2013 a las 23:13:10
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `healthsos`
--
CREATE DATABASE IF NOT EXISTS `healthsos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `healthsos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `tipoUsuario` varchar(255) NOT NULL DEFAULT 'Administrador',
  `tipoDocumento` varchar(255) NOT NULL,
  `numeroDocumento` int(20) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `numeroCelular` int(20) NOT NULL,
  PRIMARY KEY (`numeroDocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
