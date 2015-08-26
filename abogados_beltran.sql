-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 26-08-2015 a las 06:48:47
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abogados_beltran`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Acuerdos`
--

CREATE TABLE `Acuerdos` (
  `idAcuerdos` int(11) NOT NULL,
  `fecha_auto` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `resumen` varchar(250) DEFAULT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  `Expediente_idExpediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Expediente`
--

CREATE TABLE `Expediente` (
  `idExpediente` int(11) NOT NULL,
  `no_expediente` varchar(25) DEFAULT NULL,
  `fecha_presentacion` date DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `secretaria` varchar(25) DEFAULT NULL,
  `actor` varchar(45) DEFAULT NULL,
  `demandado` varchar(45) DEFAULT NULL,
  `juicio` varchar(45) DEFAULT NULL,
  `Usuarios_idUsuarios` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Expediente`
--

INSERT INTO `Expediente` (`idExpediente`, `no_expediente`, `fecha_presentacion`, `fecha_ingreso`, `secretaria`, `actor`, `demandado`, `juicio`, `Usuarios_idUsuarios`) VALUES
(1, 'we767', '2015-08-28', '2015-08-11', 'e4567r78', '786g8h9pj[', 'ftyigu', 'fytitg', 2),
(2, 'we767', '2015-08-28', '2015-08-11', 'e4567r78', '786g8h9pj[', 'ftyigu', 'fytitg', 2),
(3, 'we767', '2015-08-28', '2015-08-11', 'e4567r78', '786g8h9pj[', 'ftyigu', 'fytitg', 2),
(4, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(5, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(6, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(7, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(8, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(9, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(10, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(11, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(12, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(13, 'hgfr', '2015-08-12', '2015-08-12', 'dsfdsfsd', 'sdfsdfsdfsdf', 'sdfsdfsd', 'sdfsdf', 2),
(14, 'dsf', '2015-08-18', '2015-08-07', 'sdf', 'dsf', 'adsf', 'asfd', 2),
(15, 'dsf', '2015-08-18', '2015-08-07', 'sdf', 'dsf', 'adsf', 'asfd', 2),
(16, 'dfsds', '2015-08-18', '2015-08-12', 'sdf', 'sdf', 'dsf', 'dsf', 3),
(17, 'sdf', '2015-08-19', '2015-08-12', 'sdf', 'dsffdssg', 'sdgsdfsd', 'sdgsdgsf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Imagenes`
--

CREATE TABLE `Imagenes` (
  `idImagenes` int(11) NOT NULL,
  `url` varchar(50) DEFAULT NULL,
  `Acuerdos_idAcuerdos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellidoP` varchar(15) DEFAULT NULL,
  `apellidoM` varchar(15) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`idUsuarios`, `nombre`, `apellidoP`, `apellidoM`, `password`, `correo`, `tipo`) VALUES
(1, 'Saul', 'rwe', 'werew', NULL, 'fdcfds@hubljk.com', 'cliente'),
(2, 'rodrigo', 'Luis', 'Santander', NULL, 'roidersp@gmail.com', 'cliente'),
(3, 'rodrigo', 'Luis', 'Santander', NULL, 'roidersp@gmail.com', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Acuerdos`
--
ALTER TABLE `Acuerdos`
  ADD PRIMARY KEY (`idAcuerdos`),
  ADD KEY `fk_Acuerdos_Expediente1_idx` (`Expediente_idExpediente`);

--
-- Indices de la tabla `Expediente`
--
ALTER TABLE `Expediente`
  ADD PRIMARY KEY (`idExpediente`),
  ADD KEY `fk_Expediente_Usuarios1_idx` (`Usuarios_idUsuarios`);

--
-- Indices de la tabla `Imagenes`
--
ALTER TABLE `Imagenes`
  ADD PRIMARY KEY (`idImagenes`),
  ADD KEY `fk_Imagenes_Acuerdos1_idx` (`Acuerdos_idAcuerdos`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Acuerdos`
--
ALTER TABLE `Acuerdos`
  MODIFY `idAcuerdos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Expediente`
--
ALTER TABLE `Expediente`
  MODIFY `idExpediente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `Imagenes`
--
ALTER TABLE `Imagenes`
  MODIFY `idImagenes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Acuerdos`
--
ALTER TABLE `Acuerdos`
  ADD CONSTRAINT `fk_Acuerdos_Expediente1` FOREIGN KEY (`Expediente_idExpediente`) REFERENCES `Expediente` (`idExpediente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Expediente`
--
ALTER TABLE `Expediente`
  ADD CONSTRAINT `fk_Expediente_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `Usuarios` (`idUsuarios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Imagenes`
--
ALTER TABLE `Imagenes`
  ADD CONSTRAINT `fk_Imagenes_Acuerdos1` FOREIGN KEY (`Acuerdos_idAcuerdos`) REFERENCES `Acuerdos` (`idAcuerdos`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
