-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 04-04-2022 a las 16:23:18
-- Versión del servidor: 5.7.34
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almamater`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `id` int(5) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`id`, `nombre`, `apellidos`, `edad`) VALUES
(1, 'María', 'Pérez', 22),
(2, 'Juan', 'García', 17),
(3, 'Elena', 'Alonso', 14),
(4, 'Marta', 'Copete', 17),
(5, 'Eduardo', 'De Miguel', 15),
(9, 'Pepito', 'Lopez', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asignatura`
--

CREATE TABLE `Asignatura` (
  `id` int(5) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `curso` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Asignatura`
--

INSERT INTO `Asignatura` (`id`, `nombre`, `curso`) VALUES
(1, 'Matemáticas', '1º ESO'),
(2, 'Lengua', '3º ESO'),
(3, 'Matemáticas', '3º ESO'),
(4, 'Ciencias', '1º ESO'),
(5, 'Tecnología', '1º Bachiller'),
(6, 'Historia', '2º Bachiller'),
(7, 'Dibujo Técnico', '1º Bachiller'),
(8, 'Informática', '2º Bachiller'),
(11, 'Llingua Asturiana', '3º ESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Examen`
--

CREATE TABLE `Examen` (
  `idAlumno` int(5) UNSIGNED NOT NULL,
  `idAsignatura` int(5) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `nota` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Examen`
--

INSERT INTO `Examen` (`idAlumno`, `idAsignatura`, `fecha`, `nota`) VALUES
(1, 6, '2020-02-22', '5'),
(1, 8, '2020-03-21', '8'),
(4, 2, '2020-01-12', '4'),
(3, 1, '2020-01-15', '3'),
(4, 3, '2020-04-18', '1'),
(5, 4, '2020-03-05', '6'),
(2, 5, '2019-12-05', '8'),
(2, 7, '2019-11-04', '4'),
(2, 1, '2022-04-02', '6'),
(2, 1, '2022-04-02', '6'),
(4, 3, '2022-02-12', '4'),
(4, 3, '2022-02-12', '4'),
(9, 4, '2022-01-12', '5'),
(9, 11, '2022-02-04', '9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Asignatura`
--
ALTER TABLE `Asignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Examen`
--
ALTER TABLE `Examen`
  ADD KEY `idAlumno` (`idAlumno`),
  ADD KEY `idAsignatura` (`idAsignatura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `Asignatura`
--
ALTER TABLE `Asignatura`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Examen`
--
ALTER TABLE `Examen`
  ADD CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `Alumno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `examen_ibfk_2` FOREIGN KEY (`idAsignatura`) REFERENCES `Asignatura` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
