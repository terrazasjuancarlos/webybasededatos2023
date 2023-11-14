-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 03:38:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cetis107`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `numero_control` varchar(30) NOT NULL,
  `semestre` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `sexo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `numero_control`, `semestre`, `edad`, `turno`, `sexo`) VALUES
(1, 'Luis Carlos', '111111', 5, 18, 'MATUTINO', 1),
(2, 'Juan', '98798789', 4, 19, 'Matutino', 1),
(3, 'Maria', '576576576', 2, 15, 'Vespertino', 0),
(4, 'Prueba', '234234234', 4, 20, 'MATUTINO', 1),
(6, 'juan', '456545654654', 2, 66, 'VESPERTINO', 1),
(7, 'dfdghjkl', '2345789', 2, 431, 'MATUTINO', 0),
(8, 'holarola', '4567890', 2, 3, 'MATUTINO', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id` bigint(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `semestre` int(11) NOT NULL,
  `especialidad` tinyint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `semestre`, `especialidad`) VALUES
(7, 'teoria matematica', 4, 0),
(8, '', 0, 0),
(9, '', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
