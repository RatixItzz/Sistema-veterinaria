-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-05-2024 a las 04:14:08
-- Versión del servidor: 10.11.7-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u902739393_sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE `tb_productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_minimo` int(11) NOT NULL,
  `stock_maximo` int(11) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `fecha_de_ingreso` date NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`id_producto`, `codigo`, `nombre_producto`, `descripcion`, `imagen`, `stock`, `stock_minimo`, `stock_maximo`, `precio_compra`, `precio_venta`, `fecha_de_ingreso`, `fyh_creacion`, `fyh_actualizacion`, `id_usuario`) VALUES
(15, 'P-00001', 'crokets', 'croquetas nuevas', '2024-03-29-01-48-262024-03-25-12-05-502023-08-19-03-12-01415+iwSZkZL._AC_UF1000,1000_QL80_.jpg', 10, 2, 12, 123, 200, '2024-03-29', '2024-03-29 01:48:26', '0000-00-00 00:00:00', 35),
(16, 'P-00002', 'pelota ', 'pelota de tela para perro', '2024-03-29-01-50-42juguete2.jpg', 10, 4, 12, 25, 35, '2024-03-29', '2024-03-29 01:50:42', '0000-00-00 00:00:00', 35),
(17, 'P-00003', 'peluche', 'peluche para perro para morder', '2024-03-29-01-51-27juguete1.jpeg', 8, 3, 10, 45, 60, '2024-03-29', '2024-03-29 01:51:27', '0000-00-00 00:00:00', 35),
(18, 'P-00004', 'Hueso', 'Blanco', '2024-05-20-09-46-30Captura de pantalla 2024-04-02 235506.png', 35, 10, 23, 12, 25, '2024-05-13', '2024-05-20 21:46:30', '0000-00-00 00:00:00', 41);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_reserva`
--

CREATE TABLE `tb_reserva` (
  `id_reserva` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_mascota` varchar(255) DEFAULT NULL,
  `tipo_servicio` varchar(255) NOT NULL,
  `fecha_cita` date NOT NULL,
  `hora_cita` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `color` varchar(50) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_reserva`
--

INSERT INTO `tb_reserva` (`id_reserva`, `id_usuario`, `nombre_mascota`, `tipo_servicio`, `fecha_cita`, `hora_cita`, `title`, `start`, `end`, `color`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(12, 35, 'toby', 'Limpieza de dientes', '2024-03-29', '15:00 - 16:00', 'Limpieza de dientes', '2024-03-29', '2024-03-29', 'black', '2024-03-29 02:16:53', '0000-00-00 00:00:00'),
(13, 37, 'Cofi', 'Vacuna', '2024-04-04', '08:00 - 09:00', 'Vacuna', '2024-04-04', '2024-04-04', 'black', '2024-04-03 22:21:17', '0000-00-00 00:00:00'),
(14, 38, 'laika', 'Baño y corte de uñas', '2024-04-08', '08:00 - 09:00', 'Baño y corte de uñas', '2024-04-08', '2024-04-08', 'black', '2024-04-03 22:45:57', '0000-00-00 00:00:00'),
(15, 35, 'Abu', 'Operacion', '2024-04-04', '14:00 - 15:00', 'Operacion', '2024-04-04', '2024-04-04', 'black', '2024-04-04 09:50:29', '0000-00-00 00:00:00'),
(16, 35, 'Pepino', 'Consulta', '2024-04-05', '08:00 - 09:00', 'Consulta', '2024-04-05', '2024-04-05', 'black', '2024-04-04 11:58:12', '0000-00-00 00:00:00'),
(17, 35, 'Yumiko', 'Baño y corte de uñas', '2024-04-05', '15:00 - 16:00', 'Baño y corte de uñas', '2024-04-05', '2024-04-05', 'black', '2024-04-04 12:23:09', '0000-00-00 00:00:00'),
(18, 41, '', 'Limpieza de dientes', '2024-05-21', '10:00 - 11:00', 'Limpieza de dientes', '2024-05-21', '2024-05-21', 'black', '2024-05-20 21:59:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `token` varchar(11) DEFAULT NULL,
  `cargo` varchar(50) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombre_completo`, `email`, `password`, `token`, `cargo`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(35, 'ADMIN', 'admin@gmail.com', '$2y$10$OCIaCg86Ff0T1ik0kKrpKO//avpPnTfUWOysa22sdBVl2bG4hB8XK', NULL, 'ADMINISTRADOR', '2024-03-28 02:23:25', '2024-04-03 22:52:34'),
(36, 'oscar', 'oscar@gmail.com', '$2y$10$UeDIziRIrGWGU4rkhmreS.LK0LRky64Guz7dnjndxO1wZg4lTxYYC', NULL, 'CLIENTE', '2024-03-29 02:18:53', '2024-04-03 22:52:42'),
(37, 'oscar', 'oscar_459969@hotmail.com', '$2y$10$2kp6syoZUfpNIJlMxdeebOndZvJN9tTQDvI9/YcEUlLefhlYS0hCS', NULL, 'CLIENTE', '2024-04-03 22:17:56', '2024-04-03 22:52:50'),
(38, 'Usuario', 'usuario@gmail.com', '$2y$10$adhrQPy6IOpq3W1jJuM8gOWAA7J4nlASuiOubLVvBCcRO9ujfIV6u', NULL, 'CLIENTE', '2024-04-03 22:45:01', '2024-04-03 22:52:58'),
(39, 'adm', 'admin1@gmail.com', '$2y$10$csBofCWuk0NlNFFn9FsWqeoVTK0/1.5j0WLY8Akg5mDguFoa8Dmaa', NULL, 'ADMINISTRADOR', '2024-04-03 22:51:56', '2024-04-03 22:53:06'),
(40, 'moratux', 'jplacios@gmail.com', '$2y$10$sGr9N5jEB3vDYCUQNFRBWuk8UTWvZUFpIy144aTC2BoMK9SrsU3Cy', NULL, 'CLIENTE', '2024-04-04 12:19:47', NULL),
(41, '', '', '$2y$10$VRRNlC/wKk1p7aX4g9kb0OcP2Bb72AK0k/8zaYMNCplSYPqiD9T.e', NULL, 'CLIENTE', '2024-04-08 17:44:17', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tb_reserva`
--
ALTER TABLE `tb_reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE;

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tb_reserva`
--
ALTER TABLE `tb_reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD CONSTRAINT `tb_productos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `tb_reserva`
--
ALTER TABLE `tb_reserva`
  ADD CONSTRAINT `tb_reserva` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
