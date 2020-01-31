-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2020 a las 14:25:15
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginusuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `texto` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `telefono` int(9) NOT NULL,
  `rol` set('administrador','valorador','editor','','') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `password`, `nombre`, `apellido1`, `apellido2`, `email`, `fecha_nacimiento`, `pais`, `codigo_postal`, `telefono`, `rol`) VALUES
(2, 'jesududu', '1234', 'Usuario', 'usuario1', NULL, 'jesus@gmail.com', '2020-01-02', 'España', 14800, 123456789, 'valorador'),
(3, 'erniquedudu', '1234', 'asdf', 'asdf', '', 'enrique@gmail.com', '2020-01-03', 'asdf', 123, 123, 'valorador'),
(4, 'antoniodudu', '1234', 'hhh', 'hhh', 'fgh', 'antonio@gmail.com', '2020-01-04', 'jjj', 3456, 345646, 'valorador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_contenido` int(11) NOT NULL,
  `valoracion` int(5) DEFAULT NULL,
  `comentario` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_contenido` (`id_contenido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `id_contenido` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
