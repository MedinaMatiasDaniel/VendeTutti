-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2017 a las 23:02:03
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vende-tutti`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `IDARTICULO` int(11) NOT NULL,
  `NOMBRE` varchar(128) NOT NULL,
  `MARCA` varchar(64) NOT NULL,
  `DESCRIPCION` varchar(256) NOT NULL,
  `ACTIVO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`IDARTICULO`, `NOMBRE`, `MARCA`, `DESCRIPCION`, `ACTIVO`) VALUES
(1, 'mouse', 'sony', 'mouse inalambrico', 1),
(2, 'tablet', 'admiral', 'tablet kids 7 turquesa ', 1),
(3, 'tablet', 'positivo bgh', 'kids violeta', 1),
(4, 'notebook', 'samsung', 'core i5 memoria 4gb disco 500mb', 1),
(5, 'celulars', 'samsung', 'j7 blanco', 1),
(6, 'celular', 'motorola', 'x septima generacion negro', 1),
(7, 'celular', 'samsung', 'a5 blanco', 1),
(8, 'monitor', 'samsung ', 'curvo 32 pulgadas', 1),
(9, 'celular', 'huawei', 'libre y6 negro', 1),
(10, 'impresora', 'hp', 'multifuncion deskjet ', 1),
(11, 'notebook', 'acer', 'blanca core i6 disco 500gb memoria 2gb', 1),
(12, 'celular ', 'samsung ', 's8 color azul', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `IDCAMION` int(11) NOT NULL,
  `MODELO` varchar(64) NOT NULL,
  `MARCA` varchar(64) NOT NULL,
  `PATENTE` varchar(64) NOT NULL,
  `CHOFER` varchar(64) NOT NULL,
  `ACTIVO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`IDCAMION`, `MODELO`, `MARCA`, `PATENTE`, `CHOFER`, `ACTIVO`) VALUES
(1, '2000', 'scania', 'def567', 'juan cruz', 1),
(2, '2005', 'scania', 'fte476', 'julian', 1),
(3, '2010', 'volvo', 'fsd435', 'matias', 1),
(4, '1998', 'mercedes benz', 'aaa675', 'jonatan', 1),
(5, '1995', 'tata', 'fdr456', 'miguel', 1),
(6, '2001', 'scania', 'fdr567', 'nicolas', 1),
(7, '1999', 'tata', 'oij198', 'luis', 1),
(8, '2003', 'volvo', 'swe323', 'guillermo', 1),
(9, '1997', 'scania', 'dse965', 'marcelo', 1),
(10, '2005', 'scania', 'sdr876', 'julieta', 1),
(11, '2010', 'mercedes benz', 'rft458', 'martin', 1),
(12, '2008', 'tata', 'fdr493', 'marcos', 1),
(13, '1995', 'mercedes benz', 'fsd342', 'juan', 1),
(14, '2013', 'tata', 'xde492', 'damian', 1),
(15, '1997', 'volvo', 'hgt547', 'adrian', 1),
(16, '2008', 'tata', 'sdr456', 'emiliano', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IDCLIENTE` int(11) NOT NULL,
  `RAZONSOCIAL` varchar(64) NOT NULL,
  `EMAIL` char(128) NOT NULL,
  `TIPOIVA` varchar(64) NOT NULL,
  `CUIT` varchar(64) NOT NULL,
  `NOMBRE` varchar(64) NOT NULL,
  `DIRECCION` varchar(256) NOT NULL,
  `CP` int(11) NOT NULL,
  `LOCALIDAD` varchar(64) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  `ACTIVO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IDCLIENTE`, `RAZONSOCIAL`, `EMAIL`, `TIPOIVA`, `CUIT`, `NOMBRE`, `DIRECCION`, `CP`, `LOCALIDAD`, `PASSWORD`, `ACTIVO`) VALUES
(1, 'hermanos sa', 'hermanos@hotmail.com', 'responsable inscripto', '30-45678934-1', 'juan', 'lilas 456', 1804, 'ezeiza', ' b59c67bf196a4758191e42f76670ceba', 1),
(2, 'electro sa', 'electro@hotmail.com', 'exento', '30-45736485-2', 'jose luis', 'algas 345', 1234, 'munro', '20d135f0f28185b84a4cf7aa51f29500', 1),
(3, 'eliana ', 'eliana@hotmail.com', 'consumidor final', '27-43567867-1', 'eliana', 'las heras 234', 2020, 'monte grande', '9c3b1830513cc3b8fc4b76635d32e692', 1),
(4, 'show sa', 'administracion@show.com', 'consumidor final', '30-89765672-2', 'emiliano', 'los chañares 456', 1804, 'ezeiza', 'd6ef5f7fa914c19931a55bb262ec879c', 1),
(5, 'net', 'info@net.com', 'responsable inscripto', '30-65434267-9', 'andrea ', 'los chañares 545', 2065, 'la union', 'e19347e1c3ca0c0b97de5fb3b690855a', 1),
(6, 'julian', 'julianhotmail.com', 'consumidor final', '24-65658978-9', 'julian', 'avenida siempre viva 742', 6000, 'springfield', 'dd77279f7d325eec933f05b1672f6a1f', 1),
(7, 'electronico', 'electronico@gmail.com', 'responsable inscripto', '30-43267665-8', 'andres', 'los talas 456', 1804, 'ezeiza', '0eec27c419d0fe24e53c90338cdc8bc6', 1),
(8, 'fravega', 'compras@fravega.com', 'responsable inscripto', '30-77656325-1', 'julieta', 'ruta 205', 1804, 'ezeiza', 'c60d060b946d6dd6145dcbad5c4ccf6f', 1),
(9, 'estela', 'estelahotmail.com', 'consumidor final', '27-34567890-7', 'estela', 'andreani 34', 1804, 'ezeiza', '8597a6cfa74defcbde3047c891d78f90', 1),
(10, 'garbarino', 'info@garbarino.com', 'responsable inscripto', '30-34256758-8', 'laura', 'alem 200', 1230, 'monte grande', 'c6036a69be21cb660499b75718a3ef24', 1),
(11, 'paula', 'paula@gmail.com', 'consumidor final', '27-42876767-7', 'paula', 'los pinos 345', 1804, 'ezeiza', '3a15c7d0bbe60300a39f76f8a5ba6896', 1),
(12, 'todo electronica', 'info@todoelectronica.com', 'responsable inscripto', '30-34546243-9', 'tomas', 'alem 500', 1230, 'monte grande', '3b712de48137572f3849aabd5666a4e3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE `contiene` (
  `IDARTICULO` int(11) NOT NULL,
  `IDORDEN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contiene`
--

INSERT INTO `contiene` (`IDARTICULO`, `IDORDEN`) VALUES
(1, 5),
(3, 3),
(5, 1),
(5, 4),
(8, 1),
(11, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `IDEMPLEADO` int(11) NOT NULL,
  `EMAIL` varchar(128) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  `TIPO` varchar(64) NOT NULL,
  `ACTIVO` tinyint(1) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `DIRECCION` varchar(60) NOT NULL,
  `LOCALIDAD` varchar(60) NOT NULL,
  `CP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`IDEMPLEADO`, `EMAIL`, `PASSWORD`, `TIPO`, `ACTIVO`, `NOMBRE`, `DIRECCION`, `LOCALIDAD`, `CP`) VALUES
(1, 'administrador@hotmail.com', '2cfd4560539f887a5e420412b370b361', 'administrador', 1, 'juan', 'las lias 435', 'ezeiza', 1804),
(2, 'supervisor@hotmail.com', 'c7635bfd99248a2cdef8249ef7bfbef4', 'supervisor', 1, 'diego', 'los pinos', 'ezeiza', 1804),
(3, 'administrativo@hotmail.com', 'c21002f464c5fc5bee3b98ced83963b8', 'administrativo', 1, 'martin', 'toscas 345', 'monte grande', 2020);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `IDORDEN` int(11) NOT NULL,
  `IDCLIENTE` int(11) NOT NULL,
  `IDCAMION` int(11) NOT NULL,
  `IDZONA` int(11) NOT NULL,
  `ESTADO` varchar(64) NOT NULL,
  `FECHAINGRESO` datetime NOT NULL,
  `FECHAENTREGA` datetime NOT NULL,
  `HORARIO` time NOT NULL,
  `OBSERVACIONES` varchar(256) NOT NULL,
  `ACTIVO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`IDORDEN`, `IDCLIENTE`, `IDCAMION`, `IDZONA`, `ESTADO`, `FECHAINGRESO`, `FECHAENTREGA`, `HORARIO`, `OBSERVACIONES`, `ACTIVO`) VALUES
(1, 2, 8, 34, 'sin rendir', '2017-11-01 00:00:00', '2017-11-07 00:00:00', '11:00:00', '', 1),
(2, 10, 12, 41, 'sin rendir', '2017-11-02 00:00:00', '2017-11-14 00:00:00', '08:00:00', '', 1),
(3, 11, 4, 20, 'entregado', '2017-11-08 00:00:00', '2017-11-08 00:00:00', '12:00:00', '', 1),
(4, 6, 14, 34, 'sin rendir', '2017-11-14 00:00:00', '2017-11-20 00:00:00', '08:00:00', '', 1),
(5, 12, 14, 1, 'entregado pero con observaciones', '2017-11-14 00:00:00', '2017-11-22 00:00:00', '07:00:00', 'mercaderia faltante', 1),
(6, 5, 12, 16, 'rechazado', '2017-11-14 00:00:00', '2017-11-20 00:00:00', '08:00:00', 'No eran los articulos que el cliente habia comprado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `idzona` int(11) NOT NULL,
  `area` varchar(128) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`idzona`, `area`, `activo`) VALUES
(1, '50', 1),
(2, '60', 1),
(3, '120', 1),
(4, '89', 1),
(5, '45', 1),
(6, '23', 1),
(7, '50', 1),
(8, '70', 1),
(9, '55', 1),
(10, '30', 1),
(11, '67', 1),
(12, '45', 1),
(13, '65', 1),
(14, '78', 1),
(15, '23', 1),
(16, '56', 1),
(17, '67', 1),
(18, '98', 1),
(19, '70', 1),
(20, '40', 1),
(21, '34', 1),
(22, '56', 1),
(23, '78', 1),
(24, '50', 1),
(25, '30', 1),
(26, '30', 1),
(27, '90', 1),
(28, '50', 1),
(29, '80', 1),
(30, '30', 1),
(31, '45', 1),
(32, '55', 1),
(33, '56', 1),
(34, '45', 1),
(35, '70', 1),
(36, '80', 1),
(37, '65', 1),
(38, '45', 1),
(39, '85', 1),
(40, '45', 1),
(41, '38', 1),
(42, '26', 1),
(43, '67', 1),
(44, '12', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`IDARTICULO`);

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`IDCAMION`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDCLIENTE`);

--
-- Indices de la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD PRIMARY KEY (`IDARTICULO`,`IDORDEN`),
  ADD KEY `IDORDEN` (`IDORDEN`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`IDEMPLEADO`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`IDORDEN`),
  ADD KEY `IDCLIENTE` (`IDCLIENTE`),
  ADD KEY `IDCAMION` (`IDCAMION`),
  ADD KEY `IDZONA` (`IDZONA`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`idzona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `IDARTICULO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `camion`
--
ALTER TABLE `camion`
  MODIFY `IDCAMION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDCLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `IDEMPLEADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `IDORDEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `idzona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`IDARTICULO`) REFERENCES `articulo` (`IDARTICULO`),
  ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`IDORDEN`) REFERENCES `orden` (`IDORDEN`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`IDCLIENTE`) REFERENCES `cliente` (`IDCLIENTE`),
  ADD CONSTRAINT `orden_ibfk_2` FOREIGN KEY (`IDCAMION`) REFERENCES `camion` (`IDCAMION`),
  ADD CONSTRAINT `orden_ibfk_3` FOREIGN KEY (`IDZONA`) REFERENCES `zona` (`idzona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
