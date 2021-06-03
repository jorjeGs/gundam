-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 07:42:09
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendagundam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Mujeres', 'Ropar para dama', 'women.jpg'),
(2, 'Hombres', 'Ropa para hombre', 'men.jpg'),
(3, 'Niños', 'Ropa para niños', 'children.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_web`
--

CREATE TABLE `contacto_web` (
  `id` int(11) NOT NULL COMMENT 'numero de consulta',
  `nombre` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'nombre ',
  `correo` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'email',
  `telefono` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'telefono(opcional)',
  `mensaje` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'mensaje de la consulta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tabla de contacto.html';

--
-- Volcado de datos para la tabla `contacto_web`
--

INSERT INTO `contacto_web` (`id`, `nombre`, `correo`, `telefono`, `mensaje`) VALUES
(1, 'Jorge', 'jorge.garcia.serrano@uabc.edu.mx', '6466666666', 'Hola me gusto mucho la pagina xd'),
(2, 'Jorge', 'jorge.garcia.serrano@uabc.edu.mx', '6466666666', 'Hola me gusto mucho la pagina xd'),
(3, 'Jorge', 'jorge.garcia.serrano@uabc.edu.mx', '6466666666', 'Hola me gusto mucho la pagina xd'),
(4, 'Jorge', 'jorge.garcia.serrano@uabc.edu.mx', '6466666666', 'esta chida la pagina xd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `inventario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `inventario`, `id_categoria`) VALUES
(1, 'Intel i5', 'Un buen procesador', 500, 'procesadorinteli5.png', 30, 3),
(3, 'Procesador Intel i7', 'El mejor procesador', 700, 'procesadorinteli7.png', 20, 3),
(4, 'Procesador Ryzen 3', 'Un procesador', 300, 'procesadorryzen3.png', 30, 3),
(5, 'Procesador Ryzen 5', 'Un procesador muy bueno', 500, 'procesadorryzen5.png', 30, 3),
(6, 'Procesador Ryzen 7', 'EL mejor procesador de Ryzen', 800, 'procesadorryzen7.png', 30, 3),
(7, 'AeroCool Cyclon', 'Lo mas esencial', 5000, 'aerocool-cyclon.png', 30, 3),
(8, 'Zalman M3', 'Para el trabajo, la escuela, y el gaming', 6000, 'zalman-m3-plus.png', 30, 3),
(9, 'Lian-Li', 'Chatea, graba, o haz stream', 7000, 'lianli-pc011-dynamic.png', 30, 3),
(10, 'Phanteks Eclipse', 'Los ultimos y mas nuevos juegos', 8000, 'phanteks-eclipse-p360x.png', 30, 3),
(11, 'Gundam V', 'La Maquina de Combate unica', 9000, 'thermaltake-commander-g31.png', 30, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_venta`
--

INSERT INTO `productos_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 1, 5, 3, 500, 1500),
(2, 1, 4, 2, 300, 600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_perfil` varchar(300) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `total`, `fecha`) VALUES
(1, 1, 2100, '2021-06-03 12:06:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_web`
--
ALTER TABLE `contacto_web`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacto_web`
--
ALTER TABLE `contacto_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'numero de consulta', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
