-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 02:20:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abarrote`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `abreviatura` varchar(10) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`, `descripcion`, `abreviatura`, `status`) VALUES
(1, 'Si', 'Si', 's', b'0'),
(2, 'Alimentos', 'Productos para el consumo', 'Alim', b'0'),
(3, 'Alimentos', 'Productos para el consumo ', 'Alim', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombre`, `edad`, `fechaIngreso`, `puesto`, `status`) VALUES
(1, 'Marcos', 12, '2023-05-31', 'Cajero', b'1'),
(2, 'Yayo', 12, '2002-12-31', 'CEO', b'1'),
(3, 'Antiguo', 12, '1879-12-31', 'Fundador', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `nombremarca` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `popularidad` varchar(255) NOT NULL,
  `periodoEntrega` date NOT NULL,
  `statusmarca` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `nombremarca`, `pais`, `popularidad`, `periodoEntrega`, `statusmarca`) VALUES
(1, '2023-05-18', '12.00', '1', '0000-00-00', b'1'),
(2, 'Lala', 'Mexico', 'Alta', '2023-05-17', b'0'),
(3, 'Norteñita', 'Mexico', 'Alta', '2002-10-12', b'0'),
(4, 'La costeña ', 'Mexico', 'Alta', '2002-12-10', b'0'),
(5, 'Tostileo', 'Mexico', 'Media', '2021-12-01', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `area` varchar(100) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `idMarca` int(11) NOT NULL,
  `idVenta` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombre`, `precio`, `stock`, `area`, `status`, `idMarca`, `idVenta`, `idCategoria`) VALUES
(6, 'Marcoss', '12.00', 12, '12', b'0', 1, 1, 1),
(7, 'Queso', '25.00', 4, 'Lacteos', b'0', 1, 1, 1),
(8, 'Coca', '20.00', 1, 'Refrescos', b'0', 2, 2, 1),
(9, 'Coca', '12.00', 1, '1', b'0', 3, 2, 2),
(10, 'Sabritas Flamin Hot', '17.00', 88, 'Botanas', b'1', 5, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `status`, `username`) VALUES
(1, '', 'd41d8cd98f00b204e9800998ecf8427e', b'1', ''),
(2, 'Marcos', 'c4ca4238a0b923820dcc509a6f75849b', b'1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idVenta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `unidadesVendidas` int(11) NOT NULL,
  `vendedor` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idVenta`, `fecha`, `total`, `unidadesVendidas`, `vendedor`, `status`, `idEmpleado`) VALUES
(1, '2023-05-18', '12.00', 1, 'yayo', b'1', 1),
(2, '2023-05-16', '12.00', 12, 'Brandon', b'1', 2),
(3, '2002-02-23', '12.00', 1, 'Marcos', b'1', 1),
(4, '2023-05-18', '1312.00', 1, 'Yayo', b'1', 2);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistaempleadoantiguo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vistaempleadoantiguo` (
`idEmpleado` int(11)
,`nombre` varchar(100)
,`edad` int(11)
,`fechaIngreso` date
,`puesto` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistaventamasalta`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vistaventamasalta` (
`idVenta` int(11)
,`fecha` date
,`total` decimal(10,2)
,`unidadesVendidas` int(11)
,`vendedor` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_producto_mas_caro`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_producto_mas_caro` (
`idProducto` int(11)
,`nombre` varchar(100)
,`precio` decimal(10,2)
,`stock` int(11)
,`area` varchar(100)
,`status` bit(1)
,`idMarca` int(11)
,`idVenta` int(11)
,`idCategoria` int(11)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vistaempleadoantiguo`
--
DROP TABLE IF EXISTS `vistaempleadoantiguo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistaempleadoantiguo`  AS SELECT `empleado`.`idEmpleado` AS `idEmpleado`, `empleado`.`nombre` AS `nombre`, `empleado`.`edad` AS `edad`, `empleado`.`fechaIngreso` AS `fechaIngreso`, `empleado`.`puesto` AS `puesto` FROM `empleado` WHERE `empleado`.`fechaIngreso` = (select `empleado`.`fechaIngreso` from `empleado` order by to_days(current_timestamp()) - to_days(`empleado`.`fechaIngreso`) desc limit 1)  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vistaventamasalta`
--
DROP TABLE IF EXISTS `vistaventamasalta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistaventamasalta`  AS SELECT `venta`.`idVenta` AS `idVenta`, `venta`.`fecha` AS `fecha`, `venta`.`total` AS `total`, `venta`.`unidadesVendidas` AS `unidadesVendidas`, `venta`.`vendedor` AS `vendedor` FROM `venta` WHERE `venta`.`fecha` = '2023//5/18' AND `venta`.`total` = (select max(`venta`.`total`) from `venta` where `venta`.`fecha` = '2023//5/18')  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_producto_mas_caro`
--
DROP TABLE IF EXISTS `vista_producto_mas_caro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_producto_mas_caro`  AS SELECT `producto`.`idProducto` AS `idProducto`, `producto`.`nombre` AS `nombre`, `producto`.`precio` AS `precio`, `producto`.`stock` AS `stock`, `producto`.`area` AS `area`, `producto`.`status` AS `status`, `producto`.`idMarca` AS `idMarca`, `producto`.`idVenta` AS `idVenta`, `producto`.`idCategoria` AS `idCategoria` FROM `producto` ORDER BY `producto`.`precio` DESC LIMIT 0, 11  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `IX_Categoria` (`idCategoria`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `IX_Empleado` (`idEmpleado`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`),
  ADD KEY `IX_Marca` (`idMarca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `FK_ProductoMarca` (`idMarca`),
  ADD KEY `FK_ProductoVenta` (`idVenta`),
  ADD KEY `FK_ProductoCategoria` (`idCategoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `FK_VentaEmpleado` (`idEmpleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_ProductoCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`),
  ADD CONSTRAINT `FK_ProductoMarca` FOREIGN KEY (`idMarca`) REFERENCES `marca` (`idMarca`),
  ADD CONSTRAINT `FK_ProductoVenta` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`idVenta`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `FK_VentaEmpleado` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
