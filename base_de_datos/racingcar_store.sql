-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2019 a las 00:18:46
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `racingcar_store`
--
CREATE DATABASE IF NOT EXISTS `racingcar_store` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `racingcar_store`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agente`
--

CREATE TABLE `agente` (
  `id_agente` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `agente`
--

INSERT INTO `agente` (`id_agente`, `nombre`, `apellido`, `usuario`, `clave`, `fecha_ingreso`, `id_rol`) VALUES
(1, 'Carmen', 'Martinez', 'carmen.martinez@rcs.com', '202cb962ac59075b964b07152d234b70', '2017-01-30', 2),
(2, 'Ricardo', 'Rodriguez', 'ricardo.rodriguez@rcs.com', '202cb962ac59075b964b07152d234b70', '2018-03-07', 2),
(3, 'Pablo', 'Escobar', 'pablo.escobar@rcs.com', '202cb962ac59075b964b07152d234b70', '2019-09-17', 2),
(4, 'Luis', 'Vasquez', 'luis.vasquez@rcs.com', '202cb962ac59075b964b07152d234b70', '2017-02-16', 2),
(5, 'Efraim', 'Ventura', 'efraim.ventura@rcs.com', '202cb962ac59075b964b07152d234b70', '2019-01-09', 2),
(6, 'Sara', 'Romero', 'sara.romero@rcs.com', '202cb962ac59075b964b07152d234b70', '2017-11-17', 2),
(7, 'Armando', 'Molina', 'armando.molina@rcs.com', '202cb962ac59075b964b07152d234b70', '2016-07-15', 2),
(8, 'Ericka', 'Galdamez', 'ericka.galdamez@rcs.com', '202cb962ac59075b964b07152d234b70', '2016-05-11', 2),
(9, 'Moises', 'Sorto', 'moises.sorto@rcs.com', '202cb962ac59075b964b07152d234b70', '2017-03-12', 2),
(10, 'David', 'Reyes', 'david.reyes@rcs.com', '202cb962ac59075b964b07152d234b70', '2019-09-03', 2),
(11, 'Gerson', 'Reyes', 'gerson.reyes@rcs.com', '202cb962ac59075b964b07152d234b70', '2015-04-17', 2),
(12, 'Orlando', 'Sanchez', 'orlando.sanchez@rcs.com', '202cb962ac59075b964b07152d234b70', '2018-04-17', 2),
(13, 'Samuel', 'Monge', 'samuel.monge@rcs.com', '202cb962ac59075b964b07152d234b70', '2018-08-16', 2),
(14, 'Patricia', 'Alvarado', 'patricia.alvarado@rcs.com', '202cb962ac59075b964b07152d234b70', '2019-09-03', 2),
(15, 'Josue', 'Hernandez', 'josue.hernandez@rcs.com', '202cb962ac59075b964b07152d234b70', '2016-11-01', 1),
(16, 'Pedro', 'Mendoza', 'pedro.mendoza@rcs.com', '202cb962ac59075b964b07152d234b70', '2018-10-03', 1),
(17, 'Edgardo', 'Ramirez', 'edgardo.ramirez@rcs.com', '202cb962ac59075b964b07152d234b70', '2019-08-12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nombre_ciudad` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombre_ciudad`, `id_departamento`) VALUES
(1, 'Ahuachapan', 1),
(2, 'Sensuntepeque', 2),
(3, 'Chalatenango', 3),
(4, 'Cojutepeque', 4),
(5, 'Santa Tecla', 5),
(6, 'Zacatecoluca', 6),
(7, 'La Union', 7),
(8, 'San Francisco Gotera', 8),
(9, 'San Miguel', 9),
(10, 'San Salvador', 10),
(11, 'San Vicente', 11),
(12, 'Santa Ana', 12),
(13, 'Sonsonate', 13),
(14, 'Usulutan', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `telefono` int(8) NOT NULL,
  `id_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `usuario`, `clave`, `id_rol`, `telefono`, `id_ciudad`) VALUES
(1, 'Ernesto', 'Rivera', 'ernesto.rivera', '81dc9bdb52d04dc20036dbd8313ed055', 3, 77145233, 12),
(2, 'Jorge', 'Salazar', 'jorge.salazar', '81dc9bdb52d04dc20036dbd8313ed055', 3, 61196026, 2),
(3, 'Rosa', 'Espinosa', 'rosa.espinosa', '81dc9bdb52d04dc20036dbd8313ed055', 3, 77895462, 3),
(4, 'Josseline', 'Cartagena', 'josseline.cartagena', '81dc9bdb52d04dc20036dbd8313ed055', 3, 78521468, 4),
(5, 'Ramon', 'Hernandez', 'ramon.hernandez', '81dc9bdb52d04dc20036dbd8313ed055', 3, 61295901, 5),
(6, 'Nayib', 'Bukele', 'nayib.bukele', '81dc9bdb52d04dc20036dbd8313ed055', 3, 78954612, 6),
(8, 'Julio', 'Aguillon', 'julio.aguillon', '81dc9bdb52d04dc20036dbd8313ed055', 3, 75465892, 8),
(9, 'Yulissa', 'Romero', 'yulissa.romero', '81dc9bdb52d04dc20036dbd8313ed055', 3, 76824568, 9),
(13, 'Gloria', 'Gonzales', 'gloria.gonzales', '81dc9bdb52d04dc20036dbd8313ed055', 3, 78963214, 13),
(29, 'Pedro', 'Mensdosw', 'sadsdad-adas', '202cb962ac59075b964b07152d234b70', 3, 7897897, 2),
(30, 'Pedro', 'Mendoew<', 'pedro.mendoza', '202cb962ac59075b964b07152d234b70', 3, 12349865, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionario`
--

CREATE TABLE `concesionario` (
  `id_concesionario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `id_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `concesionario`
--

INSERT INTO `concesionario` (`id_concesionario`, `nombre`, `telefono`, `id_ciudad`) VALUES
(1, 'RCSA001', 22251478, 1),
(2, 'RCSSE002', 21038090, 2),
(3, 'RCSC003', 25325588, 3),
(4, 'RCSCJ004', 26584568, 4),
(5, 'RCSST005', 25468768, 5),
(6, 'RCSZ006', 24587950, 6),
(7, 'RCSLU007', 22154876, 7),
(8, 'RCSSFG008', 22687962, 8),
(9, 'RCSSM009', 22458796, 9),
(10, 'RCSSSV010', 22578866, 10),
(11, 'RCSSNV', 22583697, 11),
(12, 'RCSSTA', 22587413, 12),
(13, 'RCSSON013', 25789645, 13),
(14, 'RCSUSL014', 21469789, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre_departamento` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre_departamento`) VALUES
(1, 'Ahuachapan'),
(2, 'Cabañas'),
(3, 'chalatenango'),
(4, 'cuscatlan'),
(5, 'La Libertad'),
(6, 'La Paz'),
(7, 'La Union'),
(8, 'Morazan'),
(9, 'San Miguel'),
(10, 'San Salvador'),
(11, 'San Vicente'),
(12, 'Santa Ana'),
(13, 'Sonsonate'),
(14, 'Usulutan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidad`
--

CREATE TABLE `disponibilidad` (
  `id_disponibilidad` int(11) NOT NULL,
  `disponibilidad` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `disponibilidad`
--

INSERT INTO `disponibilidad` (`id_disponibilidad`, `disponibilidad`) VALUES
(1, 'Disponible'),
(2, 'Vendido'),
(3, 'Proximo Ingreso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_auto`
--

CREATE TABLE `estado_auto` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(15) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `estado_auto`
--

INSERT INTO `estado_auto` (`id_estado`, `nombre_estado`) VALUES
(1, 'Nuevo'),
(2, 'Usado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_venta`
--

CREATE TABLE `estado_venta` (
  `id_estado_venta` int(11) NOT NULL,
  `nombre_estado` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `estado_venta`
--

INSERT INTO `estado_venta` (`id_estado_venta`, `nombre_estado`) VALUES
(1, 'Vendido'),
(2, 'No Vendido'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`, `imagen`, `id_pais`) VALUES
(1, 'yamaha', '', 2),
(2, 'ford', '', 1),
(3, 'Honda', '', 2),
(4, 'Kia', '', 3),
(5, 'Toyota', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` int(11) NOT NULL,
  `nombre_modelo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(250) COLLATE latin1_spanish_ci NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `nombre_modelo`, `imagen`, `id_marca`) VALUES
(1, 'R15', 'R15.jpeg', 1),
(2, 'FZ', 'FZ.jpeg', 1),
(3, 'R7', 'R7.jpeg', 1),
(4, 'Mustang', 'Mustang.jpeg', 2),
(5, 'Ranger', 'Ranger.jpeg', 2),
(6, 'Figo', 'Figo.jpeg', 2),
(7, 'Civic Coupe', 'Civic Coupe.jpeg', 3),
(8, 'Type R', 'Type R.jpeg', 3),
(9, 'Ridgeline', 'Ridgeline.jpeg', 3),
(10, 'Forte', 'Forte.jpeg', 4),
(11, 'Sorento', 'Sorento.jpeg', 4),
(12, 'Serie K', 'Serie K.jpeg', 4),
(13, 'Rav4', 'Rav4.jpeg', 5),
(14, 'Hilux Doble Cabina 2.8L', 'Hilux Doble Cabina 2.8L.jpeg', 5),
(15, 'Yaris', 'Yaris.jpeg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nombre_pais` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nombre_pais`) VALUES
(1, 'Estados Unidos'),
(2, 'Japon'),
(3, 'Corea del Sur');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_concesionario` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `hora_pedido` time NOT NULL,
  `fecha_entrega` date NOT NULL,
  `hora_entrega` time NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_modelo`, `cantidad`, `id_concesionario`, `fecha_pedido`, `hora_pedido`, `fecha_entrega`, `hora_entrega`, `id_proveedor`) VALUES
(1, 7, 12, 6, '2019-02-05', '10:15:03', '2019-03-05', '12:00:00', 3),
(2, 2, 8, 2, '2019-02-27', '11:00:00', '2019-03-28', '15:00:00', 1),
(3, 4, 5, 3, '2018-07-09', '16:00:00', '2019-07-17', '15:00:00', 2),
(13, 1, 25, 2, '2019-10-17', '10:10:42', '2020-01-17', '10:10:42', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(90) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_contacto` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `direccion`, `nombre_contacto`, `telefono`) VALUES
(1, 'Yamaha Motors', 'Alameda Juan Pablo Segundo #351', 'Rocio Miranda', 22981818),
(2, 'Ford El Salvador', 'Bulevar del Ejercito #333 ', 'Javier Henriquez', 22488229),
(3, 'Honda Motors El Salvador', 'Prolongación, Alameda Juan Pablo II No. L-1, San Salvador', 'Johanna Zavala', 22603303),
(4, 'Kia Motors ', 'alameda juan pablo segundo frente a excel automotriz contiguo a metrocentro san salvador', 'Herberth Chavez', 22473500),
(5, 'Toyota El Salvador', 'avenida el espino y calle el pedregal contiguo a centro comercial multiplaza', 'Humberto Benitez', 22872555);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'administrador'),
(2, 'agente'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_coche` int(11) NOT NULL,
  `matricula` char(7) COLLATE latin1_spanish_ci NOT NULL,
  `color` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `anio` int(4) NOT NULL,
  `precio_unitario` float NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_disponibilidad` int(11) NOT NULL,
  `id_concesionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_coche`, `matricula`, `color`, `anio`, `precio_unitario`, `id_modelo`, `id_estado`, `id_disponibilidad`, `id_concesionario`) VALUES
(1, 'P246182', '#000000', 2019, 25000, 4, 1, 1, 9),
(4, 'M633457', '#ff0000', 2019, 14700, 3, 1, 2, 14),
(8, 'P456898', '#ff80c0', 2015, 250000, 8, 1, 1, 13),
(9, 'P456898', '#699f20', 2014, 255000, 13, 1, 1, 12),
(10, 'P456898', '#0000ff', 1994, 2510000, 1, 1, 1, 1),
(11, 'P456132', '#ff80c0', 2018, 255555, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_coche` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_agente` int(11) NOT NULL,
  `id_estado_venta` int(11) NOT NULL,
  `total` float NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_coche`, `id_cliente`, `id_agente`, `id_estado_venta`, `total`, `fecha_venta`) VALUES
(7, 4, 1, 9, 1, 132565000, '2019-10-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agente`
--
ALTER TABLE `agente`
  ADD PRIMARY KEY (`id_agente`),
  ADD KEY `agente_rol` (`id_rol`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `ciudad_departamento` (`id_departamento`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `cliente_ciudad` (`id_ciudad`),
  ADD KEY `cliente_rol` (`id_rol`);

--
-- Indices de la tabla `concesionario`
--
ALTER TABLE `concesionario`
  ADD PRIMARY KEY (`id_concesionario`),
  ADD KEY `concesionario_ciudad` (`id_ciudad`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  ADD PRIMARY KEY (`id_disponibilidad`);

--
-- Indices de la tabla `estado_auto`
--
ALTER TABLE `estado_auto`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estado_venta`
--
ALTER TABLE `estado_venta`
  ADD PRIMARY KEY (`id_estado_venta`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD KEY `marca_pais` (`id_pais`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_modelo`),
  ADD KEY `modelo_marca` (`id_marca`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `proveedor_pedido` (`id_proveedor`),
  ADD KEY `concesionario_pedido` (`id_concesionario`),
  ADD KEY `modelo_pedido` (`id_modelo`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_coche`),
  ADD KEY `auto_estado` (`id_estado`),
  ADD KEY `auto_modelo` (`id_modelo`),
  ADD KEY `auto_disponibilidad` (`id_disponibilidad`),
  ADD KEY `auto_concesionario` (`id_concesionario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `auto_venta` (`id_coche`),
  ADD KEY `agente_ventas` (`id_agente`),
  ADD KEY `cliente_venta` (`id_cliente`),
  ADD KEY `estado_venta` (`id_estado_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agente`
--
ALTER TABLE `agente`
  MODIFY `id_agente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `concesionario`
--
ALTER TABLE `concesionario`
  MODIFY `id_concesionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  MODIFY `id_disponibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado_auto`
--
ALTER TABLE `estado_auto`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_venta`
--
ALTER TABLE `estado_venta`
  MODIFY `id_estado_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_coche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agente`
--
ALTER TABLE `agente`
  ADD CONSTRAINT `agente_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `cliente_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`),
  ADD CONSTRAINT `cliente_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `concesionario`
--
ALTER TABLE `concesionario`
  ADD CONSTRAINT `concesionario_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `marca_pais` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_marca` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `concesionario_pedido` FOREIGN KEY (`id_concesionario`) REFERENCES `concesionario` (`id_concesionario`),
  ADD CONSTRAINT `modelo_pedido` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`),
  ADD CONSTRAINT `proveedor_pedido` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `auto_concesionario` FOREIGN KEY (`id_concesionario`) REFERENCES `concesionario` (`id_concesionario`),
  ADD CONSTRAINT `auto_disponibilidad` FOREIGN KEY (`id_disponibilidad`) REFERENCES `disponibilidad` (`id_disponibilidad`),
  ADD CONSTRAINT `auto_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado_auto` (`id_estado`),
  ADD CONSTRAINT `auto_modelo` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `agente_ventas` FOREIGN KEY (`id_agente`) REFERENCES `agente` (`id_agente`),
  ADD CONSTRAINT `auto_venta` FOREIGN KEY (`id_coche`) REFERENCES `vehiculos` (`id_coche`),
  ADD CONSTRAINT `cliente_venta` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `estado_venta` FOREIGN KEY (`id_estado_venta`) REFERENCES `estado_venta` (`id_estado_venta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
