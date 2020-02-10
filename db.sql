-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 10-02-2020 a las 01:01:52
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fumipronort`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `apellidoP`, `apellidoM`, `nombre`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Perez', 'Lopez', 'Juan', 'Calle Ninguno 23', '123456789', 'test@test.com'),
(2, 'Juarez', 'Martinez', 'Francisco', 'Fronteras 2', '123456789', 'test@test.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacionservicio`
--

DROP TABLE IF EXISTS `operacionservicio`;
CREATE TABLE IF NOT EXISTS `operacionservicio` (
  `idOperacionServicio` int(11) NOT NULL AUTO_INCREMENT,
  `costo` double NOT NULL,
  `formaPago` varchar(45) NOT NULL,
  `garantia` longblob NOT NULL,
  `certificado` longblob NOT NULL,
  `recibo` enum('Pagado','Pendiente') NOT NULL,
  `idTecnico` int(11) NOT NULL,
  `presupuesto` double NOT NULL,
  `atencionGarantia` varchar(45) NOT NULL,
  PRIMARY KEY (`idOperacionServicio`),
  KEY `fk_OperacionServicio_Tecnico1_idx` (`idTecnico`)
) ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problema`
--

DROP TABLE IF EXISTS `problema`;
CREATE TABLE IF NOT EXISTS `problema` (
  `idProblema` int(11) NOT NULL AUTO_INCREMENT,
  `problema` varchar(45) NOT NULL,
  PRIMARY KEY (`idProblema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreComercial` varchar(100) NOT NULL,
  `presentacion` varchar(100) NOT NULL,
  `unidades` int(11) NOT NULL,
  `imagenProducto` varchar(45) NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE IF NOT EXISTS `servicio` (
  `idServicio` int(11) NOT NULL AUTO_INCREMENT,
  `fechaServicio` date NOT NULL,
  `horaServicio` time NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idProblema` int(11) NOT NULL,
  `idTipoServicio` int(11) NOT NULL,
  `idOperacionServicio` int(11) NOT NULL,
  PRIMARY KEY (`idServicio`),
  KEY `fk_Servicio_Cliente_idx` (`idCliente`),
  KEY `fk_Servicio_Problema1_idx` (`idProblema`),
  KEY `fk_Servicio_TipoServicio1_idx` (`idTipoServicio`),
  KEY `fk_Servicio_OperacionServicio1_idx` (`idOperacionServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

DROP TABLE IF EXISTS `tecnico`;
CREATE TABLE IF NOT EXISTS `tecnico` (
  `idTecnico` int(11) NOT NULL AUTO_INCREMENT,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idTecnico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposervicio`
--

DROP TABLE IF EXISTS `tiposervicio`;
CREATE TABLE IF NOT EXISTS `tiposervicio` (
  `idTipoServicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreServicio` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_Servicio_Cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `fk_Servicio_OperacionServicio1` FOREIGN KEY (`idOperacionServicio`) REFERENCES `operacionservicio` (`idOperacionServicio`),
  ADD CONSTRAINT `fk_Servicio_Problema1` FOREIGN KEY (`idProblema`) REFERENCES `problema` (`idProblema`),
  ADD CONSTRAINT `fk_Servicio_TipoServicio1` FOREIGN KEY (`idTipoServicio`) REFERENCES `tiposervicio` (`idTipoServicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
