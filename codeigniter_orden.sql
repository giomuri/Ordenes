-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-12-2019 a las 05:39:53
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codeigniter_orden`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idArticulo` int(11) NOT NULL,
  `nomArticulo` varchar(50) DEFAULT NULL,
  `tipArticulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idArticulo`, `nomArticulo`, `tipArticulo`) VALUES
(10001, 'Trio(BA20MB-TVDigital-TO)', 'Instalacion'),
(10002, 'TV DIgital', 'Nuevo Servicio'),
(10003, 'Duo(BA20MB-TO)', 'Instalacion'),
(10004, 'Nuevo Decodificador', 'Cambio'),
(10005, 'Nueva Linea TO', 'Instalación'),
(10006, 'Trio(BA50MB-TVDigital-TO)', 'Instalcion nueva recidencia'),
(10007, 'Prueba', 'test'),
(10008, 'Prueba', 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `titulo`, `ruta`) VALUES
(15, 'Mi imagen', 'Captura.PNG'),
(21, 'porhub', 'Screenshot_52.png'),
(22, 'porhub', 'Screenshot_53.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `idOrden` int(11) NOT NULL,
  `idTecnico` int(11) DEFAULT NULL,
  `cliente` varchar(50) DEFAULT NULL,
  `idArticulo` int(11) DEFAULT NULL,
  `fechaOrden` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`idOrden`, `idTecnico`, `cliente`, `idArticulo`, `fechaOrden`) VALUES
(1, 1, 'Maria Fernanda Diaz', 10001, '2019-09-01'),
(2, 1, 'Luiz Antonio jaramillo', 10002, '2019-10-23'),
(3, 4, 'Giovanny Andres Murillo', 10004, '2019-12-27'),
(4, 2, 'Martha Lucia Ramirez', 10006, '2019-12-15'),
(5, 3, 'Maria del Carmen restrepo', 10005, '2019-11-18'),
(6, 1, 'Martha Elena Giraldo', 10007, '2019-12-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `appaterno` varchar(30) DEFAULT NULL,
  `apmaterno` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `idCiudad` int(11) DEFAULT NULL,
  `fecnac` date DEFAULT NULL,
  `sitReg` int(1) DEFAULT NULL COMMENT '1 - Activo, 0 - Inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `nombre`, `appaterno`, `apmaterno`, `email`, `dni`, `idCiudad`, `fecnac`, `sitReg`) VALUES
(1, 'Michael', 'Jackson', 'I', 'asdf@adsf.com', '99999999', 1, '2016-09-01', 1),
(4, 'kurt', 'donald', 'cobain', 'asdf@adsf.com', '55555555', 2, '2014-11-30', 0),
(5, 'Eduardo', 'Duque', 'II', 'ede@dfdf.com', '11111111', 3, '2016-05-17', NULL),
(6, 'Axl', 'Rose', 'xD', 'axl@dfdf.com', '22222222', 5, '2016-05-17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `peso` varchar(20) DEFAULT NULL,
  `precioUSD` int(11) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `descripcion`, `peso`, `precioUSD`, `categoria`, `foto`) VALUES
(1, 'azucar', 'kilo', '2', 2000, 'nada', 'xxxxx.jpg'),
(4, 'atun', 'lata', '1', 3000, 'pez', 'wfwcwvc.jg'),
(8, 'Arroz', 'Diana', '0', 12, 'cereal', 'Screenshot_6.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `idTecnico` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `appaterno` varchar(30) DEFAULT NULL,
  `apmaterno` varchar(30) DEFAULT NULL,
  `nomUsuario` varchar(20) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`idTecnico`, `nombre`, `appaterno`, `apmaterno`, `nomUsuario`, `clave`) VALUES
(1, 'Giovanny ', 'Murillo', 'Mosquera', 'gmurillo', '123456'),
(2, 'kurt', 'donald', 'cobain', 'kdonald', '123456'),
(3, 'Eduardo', 'Duque', 'Martinez', 'eduque', '123456'),
(4, 'Axl', 'Rose', 'Londoño', 'arose', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomUsuario` varchar(20) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `idPersona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomUsuario`, `clave`, `idPersona`) VALUES
(1, 'gamurillo', '12345', 1),
(7, 'gggg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4),
(8, 'eduque', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 5),
(9, 'arose', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idArticulo`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`idOrden`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`idTecnico`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idPersona` (`idPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `idTecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
