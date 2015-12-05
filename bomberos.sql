-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-04-2015 a las 12:38:00
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bomberos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `accion` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_bitacora`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `accion`, `usuario`, `fecha`) VALUES
(1, 'Registro de nuevo Usuario', 'admi', '2015-04-25'),
(2, 'Acceso al sistema', '0', '2015-04-25'),
(3, 'Asignar Inspector', 'admi', '2015-04-25'),
(4, 'Acceso al sistema', '0', '2015-04-25'),
(5, 'Acceso al sistema', '0', '2015-04-25'),
(6, 'Acceso al sistema', '0', '2015-04-25'),
(7, 'Acceso al sistema', '0', '2015-04-25'),
(8, 'Acceso al sistema', '0', '2015-04-26'),
(9, 'Acceso al sistema', '0', '2015-04-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosinspeccion`
--

CREATE TABLE IF NOT EXISTS `datosinspeccion` (
  `nExpediente` int(11) NOT NULL,
  `razonSocial` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `ubicacion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `representante` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `titular` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaInspeccion` date NOT NULL,
  `inspector` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `nInsignia` int(11) NOT NULL,
  KEY `nExpediente` (`nExpediente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exp_inspec`
--

CREATE TABLE IF NOT EXISTS `exp_inspec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nExpediente` int(11) NOT NULL,
  `idUsuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nExpediente` (`nExpediente`,`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `exp_inspec`
--

INSERT INTO `exp_inspec` (`id`, `nExpediente`, `idUsuario`) VALUES
(1, 1, 'sad56'),
(5, 1, 'SadSape'),
(2, 2, 'sadsong'),
(3, 4, 'sad56'),
(4, 5, 'sad56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `tipoUsuario` int(11) NOT NULL,
  `idUsuario` varchar(255) NOT NULL,
  `nom_user` varchar(255) NOT NULL,
  `ape_user` varchar(255) NOT NULL,
  `cedula_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `tipoUsuario` (`tipoUsuario`,`cedula_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`tipoUsuario`, `idUsuario`, `nom_user`, `ape_user`, `cedula_user`, `email_user`) VALUES
(1, 'admi', 'sda', 'dsa', '25471556sa', 'sda@sa'),
(1, 'admi2', 'vector', 'gonzalez', '224407644', 'ejemplo@hotmail.com'),
(2, 'inspector', 'Inspector', 'Kali', '2312656656', 'eje@gmail.com'),
(3, 'loco', 'Loco', 'chon', '25471556', 'eje@gmail.com'),
(1, 'prueba3', 'victor', 'gonzalez', '123123123', 'ejemplo@hotmail.com'),
(3, 'sabe', 'sabe', 'sabe', '25471556', 'eje@gmail.com'),
(3, 'sad5', 'Loco', 'sad', '2312656', 'eje@gmail.com'),
(2, 'sad56', 'Loco', 'sad', '2312656', 'eje@gmail.com'),
(2, 'SadSape', 'Inspector', 'Bam', '22475869', 'eje@gmail.com'),
(2, 'sadsong', 'Inspector', 'Sape', '2312656656', 'eje@gmail.com'),
(3, 'se', 'Loco', 'sad', '2312656', 'eje@gmail.com'),
(1, 'uno', 'Loco', 'sad', '2312656', 'eje@gmail.com'),
(3, 'user', 'asd', 'asd', '25471556', 'eje@gmail.com'),
(3, 'victor', 'vector', 'sad', '254715566', 'eje@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razonsocial`
--

CREATE TABLE IF NOT EXISTS `razonsocial` (
  `nExpediente` int(11) NOT NULL,
  `inmueble` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `parroquia` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `objetoRazon` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `deposito` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaDeposito` date NOT NULL,
  KEY `nExpediente` (`nExpediente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `razonsocial`
--

INSERT INTO `razonsocial` (`nExpediente`, `inmueble`, `direccion`, `municipio`, `parroquia`, `cargo`, `objetoRazon`, `deposito`, `fechaDeposito`) VALUES
(5, 'asdas', 'asdas', '0', '0', 'sdasda', 'sadsda', '12312', '2015-03-23'),
(6, 'asd', 'asdas', '0', '0', 'sad', 'sdasdas', '12312', '2015-03-23'),
(7, 'Inmueble', 'Por ahi', 'Guaicaipuros', 'San Pedro', 'Programador', 'asdsdas', '1212', '2015-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `nSolicitud` int(20) NOT NULL AUTO_INCREMENT,
  `nExpediente` int(20) NOT NULL,
  `nOperativo` int(20) NOT NULL,
  `fechaSolicitud` date NOT NULL,
  `idUsuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`nSolicitud`),
  UNIQUE KEY `nExpediente` (`nExpediente`,`nOperativo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`nSolicitud`, `nExpediente`, `nOperativo`, `fechaSolicitud`, `idUsuario`) VALUES
(1, 1, 1, '2015-01-31', '\r\n   			    '),
(2, 2, 2, '2015-01-03', '\r\n   			    '),
(3, 3, 3, '2015-01-03', '\r\n   			    '),
(9, 4, 4, '0000-00-00', 'victor'),
(10, 5, 5, '0000-00-00', 'victor'),
(11, 6, 6, '2015-03-23', 'victor'),
(12, 7, 7, '2015-04-25', 'victor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `tipoUsuario` int(3) NOT NULL,
  `idUsuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  UNIQUE KEY `idUsuario` (`idUsuario`),
  KEY `tipoUsuario` (`tipoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`tipoUsuario`, `idUsuario`, `clave`) VALUES
(1, 'aas', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(1, 'admi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(1, 'admi2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'inspector', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'loco', '123'),
(3, 'probando', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(3, 'prueba', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(1, 'prueba3', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'sabe', '123'),
(3, 'sad5', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(2, 'sad56', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'SadSape', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(2, 'sadsong', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'sadsongg', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(3, 'se', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(3, 'silaves', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(1, 'uno', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(3, 'user', '123'),
(3, 'v', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'victor', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `razonsocial`
--
ALTER TABLE `razonsocial`
  ADD CONSTRAINT `razonsocial_ibfk_1` FOREIGN KEY (`nExpediente`) REFERENCES `solicitud` (`nExpediente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
