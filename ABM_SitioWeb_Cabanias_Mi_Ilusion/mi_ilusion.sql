-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-03-2022 a las 18:50:38
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_ilusion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acompaniantes`
--

DROP TABLE IF EXISTS `acompaniantes`;
CREATE TABLE IF NOT EXISTS `acompaniantes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombreApellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dni` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `acompaniantes`
--

INSERT INTO `acompaniantes` (`id`, `nombreApellido`, `dni`) VALUES
(1, 'marcos figueroa', 23546789),
(3, 'dsd', 24545);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acompaniantescliente`
--

DROP TABLE IF EXISTS `acompaniantescliente`;
CREATE TABLE IF NOT EXISTS `acompaniantescliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idacompaniante` int NOT NULL,
  `idcliente` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idacompaniante` (`idacompaniante`),
  KEY `idcliente` (`idcliente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `acompaniantescliente`
--

INSERT INTO `acompaniantescliente` (`id`, `idacompaniante`, `idcliente`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `apellidoNombre` varchar(40) NOT NULL,
  `nacionalidad` varchar(40) NOT NULL,
  `estadoCivil` varchar(10) NOT NULL,
  `dni` int NOT NULL,
  `edad` int NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `cp` int NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `telCel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vehiculoPatente` varchar(6) NOT NULL,
  `vehiculoMarca` varchar(20) NOT NULL,
  `vehiculoColor` varchar(20) NOT NULL,
  `fechaIngreso` varchar(12) NOT NULL,
  `fechaEgreso` varchar(12) NOT NULL,
  `horaEgreso` varchar(5) NOT NULL,
  `idCabania` int NOT NULL,
  `idProvincia` int NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idCabania` (`idCabania`),
  KEY `idProvincia` (`idProvincia`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `apellidoNombre`, `nacionalidad`, `estadoCivil`, `dni`, `edad`, `direccion`, `cp`, `localidad`, `telCel`, `email`, `vehiculoPatente`, `vehiculoMarca`, `vehiculoColor`, `fechaIngreso`, `fechaEgreso`, `horaEgreso`, `idCabania`, `idProvincia`, `imagen`) VALUES
(2, 'Adrian ', 'Argentina', 'soltero', 42356789, 42, 'San Martin', 2344, 'Salsacate', '3544-125423', 'adrian@gmail.com', 'HTM-13', 'fiat', 'azul', '12/05/2022', '20/05/2022', '12:00', 1, 6, 'avatar_hombre.jpg'),
(3, 'Hernandez Lucia', 'Argentina', 'casada', 42123456, 30, 'Luro', 2345, 'Mar del Plata', '3544-205421', 'lucia@gmail.com', 'HTP-23', 'fiat', 'rojo', '12/03/2022', '13/03/2022', '12:00', 4, 1, 'avatar_mujer.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

DROP TABLE IF EXISTS `consultas`;
CREATE TABLE IF NOT EXISTS `consultas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idUsuario` int NOT NULL,
  `fechaIngreso` timestamp NOT NULL,
  `fechaEgreso` timestamp NOT NULL,
  `cantAdultos` int NOT NULL,
  `cantMenores` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `idUsuario`, `fechaIngreso`, `fechaEgreso`, `cantAdultos`, `cantMenores`) VALUES
(1, 1, '2022-03-23 03:00:00', '2022-03-23 03:00:00', 1, 1),
(2, 3, '2022-03-25 03:00:00', '2022-03-26 03:00:00', 1, 1),
(3, 4, '2022-03-26 03:00:00', '2022-03-28 03:00:00', 2, 2),
(4, 5, '2022-03-28 03:00:00', '2022-03-30 03:00:00', 3, 1),
(5, 3, '2022-03-29 03:00:00', '2022-03-31 03:00:00', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gentecabanias`
--

DROP TABLE IF EXISTS `gentecabanias`;
CREATE TABLE IF NOT EXISTS `gentecabanias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `gentecabanias`
--

INSERT INTO `gentecabanias` (`id`, `numero`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

DROP TABLE IF EXISTS `provincias`;
CREATE TABLE IF NOT EXISTS `provincias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nombre`) VALUES
(1, 'Buenos Aires'),
(2, 'Ciudad Autonoma de Buenos Aire'),
(3, 'Catamarca'),
(4, 'Chaco'),
(5, 'Chubut'),
(6, 'Cordoba'),
(7, 'Corrientes'),
(8, 'Entre Rios'),
(9, 'Formosa'),
(10, 'Jujuy'),
(11, 'La Pampa'),
(12, 'La Rioja'),
(13, 'Mendoza'),
(14, 'Misiones'),
(15, 'Neuquen'),
(16, 'Rio Negro'),
(17, 'Salta'),
(18, 'San Juan'),
(19, 'San Luis'),
(20, 'Santa Cruz'),
(21, 'Santa Fe'),
(22, 'Santiago del Estero'),
(23, 'Tierra del Fuego'),
(24, 'Tucuman');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(8) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `nombre`, `email`) VALUES
(1, 'Marc12', '827ccb0eea8a706c4c34a16891f84e7b', 'Marcos Figueroa', 'marcos12@gmail.com'),
(2, 'Juancito', '827ccb0eea8a706c4c34a16891f84e7b', 'Lopez Juan', 'juanlopez@gmail.com'),
(3, 'Isco', '827ccb0eea8a706c4c34a16891f84e7b', 'Cucurella Isco', 'isco@gmail.com'),
(4, 'Jorge', 'e10adc3949ba59abbe56e057f20f883e', 'Molina Jorge', 'jorge@gmail.com'),
(5, 'Ariel', '828c88f34ecb4c1ca8d89e018c6fad1a', 'Figueroa Ariel', 'ariel@hotmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
