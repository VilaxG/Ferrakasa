-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2022 a las 21:14:20
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferrekasa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` double DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellidos`, `direccion`, `telefono`, `email`) VALUES
(2, 'Cornelius', 'Dumbledore', 'Hogwarts', 1116669999, 'sauco@hotmail.com'),
(3, 'Snape', 'Shador', 'Hogwarts', 1116669999, 'hmmm@hotmail.com'),
(4, 'Albus', 'Dumbledore', 'Hogwarts', 1116669999, 'sauco@hotmail.com'),
(5, 'Harry', 'Potter', 'Queens', 1116669999, 'cicatriz@hotmail.com'),
(6, 'Toño', 'Muggle', 'Tlaxcala', 1116669999, 'correito@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `id_tienda` int(11) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL,
  `total` float DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `id_tienda`, `id_vendedor`, `id_cliente`, `fecha_compra`, `total`, `descripcion`) VALUES
(1, 1, 1, 6, '2022-04-01', 1500, NULL),
(2, 1, 1, 6, '2022-04-01', 1500, NULL),
(3, 1, 1, 6, '2022-04-01', 1500, NULL),
(4, 1, 4, 2, '2022-04-01', 1500, NULL),
(5, 1, 4, 5, '2022-04-01', 1500, NULL),
(6, 1, 3, 5, '2022-04-01', 1500, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_material`
--

CREATE TABLE `factura_material` (
  `id_factura_material` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `id_material` int(11) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura_material`
--

INSERT INTO `factura_material` (`id_factura_material`, `id_factura`, `id_material`, `cantidad`, `total`) VALUES
(1, 2, 3, 30, 1500),
(2, 2, 20, 30, 1500),
(3, 2, 2, 30, 1500),
(4, 2, 5, 30, 1500),
(5, 2, 6, 30, 1500),
(6, 2, 7, 30, 1500),
(7, 3, 8, 30, 1500),
(8, 3, 9, 30, 1500),
(9, 4, 10, 30, 1500),
(10, 4, 11, 40, 1500),
(11, 5, 12, 10, 1500),
(12, 5, 13, 30, 1500),
(13, 6, 14, 10, 1500),
(14, 6, 15, 90, 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL,
  `id_tienda` int(11) DEFAULT NULL,
  `medida` varchar(6) DEFAULT NULL,
  `producto` text DEFAULT NULL,
  `almacen` float DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `categoria` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id_material`, `id_tienda`, `medida`, `producto`, `almacen`, `descripcion`, `precio`, `categoria`) VALUES
(1, 1, 'kg', 'varilla', 60, '                                                            Varilla de acero para construcción                                                            ', 50, 'Aceros'),
(2, 1, 'pza', 'Anillo 1/4', 60, 'Anillos de acero vendidos por pieza', 50, 'Aceros'),
(3, 1, 'pza', 'Anillo 3/8', 60, '                    Anillos de acero vendidos por pieza                    ', 50, 'Aceros'),
(4, 1, 'pza', 'Anillo 1/2', 60, '                    Anillo de acero vendido por pieza                    ', 50, 'Aceros'),
(5, 1, 'pza', 'Anillo 1', 60, 'Anillo de 1 pulgada vendidos por pieza', 50, 'Aceros'),
(6, 1, 'pza', 'Armex', 60, '', 50, 'Aceros'),
(7, 1, 'pza', 'Clavo con Cabeza', 60, '', 50, 'Aceros'),
(8, 1, 'pza', 'Clavo sin cabeza', 60, '', 50, 'Aceros'),
(9, 1, 'pza', 'Clavo para Concreto', 60, '', 50, 'Aceros'),
(10, 1, 'kg', 'Cemento Cemex', 60, '', 50, 'Envasados'),
(11, 1, 'kg', 'Cemento Cruz Azul', 60, '', 50, 'Envasados'),
(12, 1, 'kg', 'Cemento Moctezuma', 60, '', 50, 'Envasados'),
(13, 1, 'kg', 'Yeso Cemex', 60, '', 50, 'Envasados'),
(14, 1, 'kg', 'Yeso Cruz Azul', 60, '', 50, 'Envasados'),
(15, 1, 'kg', 'Yeso Moctezuma', 60, '', 50, 'Envasados'),
(16, 1, 'kg', 'Mortero Cemex', 60, '', 50, 'Envasados'),
(17, 1, 'kg', 'Arena', 50, '', 50, 'Agregados'),
(18, 1, 'kg', 'Grava', 60, '', 50, 'Agregados'),
(19, 1, 'pza', 'Block Hueco', 600, '', 50, 'Tabique'),
(20, 1, 'kg', 'Block Macizo', 1, '                                                                                                                        ', 50, 'Envasados'),
(21, 1, 'm', 'Barrote de Madera', 60, '', 50, 'Madera'),
(22, 1, 'm', 'Chaflan de Madera', 50, '', 60, 'Madera'),
(23, 1, 'm', 'Polín de Madera', 60, '', 50, 'Madera'),
(24, 1, 'm', 'Tarima', 60, '', 50, 'Madera'),
(25, 1, 'm2', 'Triplay', 20, '', 60, 'Madera'),
(26, 1, 'pza', 'Tabique Rojo', 60, '', 50, 'Tabique');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id_tienda` int(11) NOT NULL,
  `nombre_tienda` varchar(30) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `encargado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id_tienda`, `nombre_tienda`, `direccion`, `telefono`, `encargado`) VALUES
(1, 'Ferrekasa', 'Paseo Tollocan, Emiliano Zapata, Alvaro Obregon, 52110 San Mateo Atenco, Méx.', '7222712218', 'Pedro Rojass'),
(2, 'ff', 'ff', '45', 'ff');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pswd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellidos`, `email`, `pswd`) VALUES
(3, 'Axel', 'Villa García', 'axelvillagarcia@gmail.com', 'abcd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `telefono` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nombre`, `apellidos`, `telefono`) VALUES
(1, 'Archivald', 'Rich', 1234567891),
(3, 'Marco Antonio', 'Quintana Castañeda', 4445553333),
(4, 'Axel', 'Villa García', 7221836693);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_tienda` (`id_tienda`),
  ADD KEY `id_vendedor` (`id_vendedor`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `factura_material`
--
ALTER TABLE `factura_material`
  ADD PRIMARY KEY (`id_factura_material`),
  ADD KEY `id_material` (`id_material`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `id_tienda` (`id_tienda`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_tienda`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `factura_material`
--
ALTER TABLE `factura_material`
  MODIFY `id_factura_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id_tienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id_tienda`),
  ADD CONSTRAINT `factura_ibfk_4` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `factura_ibfk_5` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id_vendedor`);

--
-- Filtros para la tabla `factura_material`
--
ALTER TABLE `factura_material`
  ADD CONSTRAINT `factura_material_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `material` (`id_material`),
  ADD CONSTRAINT `factura_material_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`);

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id_tienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
