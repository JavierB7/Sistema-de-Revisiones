-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-11-2017 a las 22:06:53
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `srevisiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `idestudiantes` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `enlace` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_parcial` int(11) NOT NULL,
  `rev_finalizada` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idestudiantes`),
  UNIQUE KEY `cedula_UNIQUE` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`idestudiantes`, `cedula`, `nombre`, `apellido`, `comentario`, `enlace`, `num_parcial`, `rev_finalizada`) VALUES
(4, 25632200, 'Javier', 'Bastidas', 'hola2', 'git', 1, 1),
(5, 342342, 'Marco', 'Ra', 'chao', 'git', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

DROP TABLE IF EXISTS `evaluacion`;
CREATE TABLE IF NOT EXISTS `evaluacion` (
  `idevaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_eval` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_eval` date NOT NULL,
  `cant_puntos` int(11) NOT NULL,
  `num_parcial` int(11) NOT NULL,
  `activa` tinyint(4) NOT NULL,
  PRIMARY KEY (`idevaluacion`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`idevaluacion`, `nombre_eval`, `fecha_eval`, `cant_puntos`, `num_parcial`, `activa`) VALUES
(9, 'Practica', '2017-11-01', 7, 1, 1),
(10, 'Proyecto', '2017-11-22', 18, 2, 1),
(11, 'Parcial', '2017-11-22', 75, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Javier', 'javier7bastidas@gmail.com', '$2y$10$fIwrGjf87JlJSnLJeSDfC.XxKClz6Va95ZRHBDxeYnjnSTyPsXFVG', 'z6UgEykDPqqghL9rg8vbBtTG7tBZEvBQCmIkkVeZgs1sJAEyOC9wAQsd0igz', '2017-11-10 01:12:58', '2017-11-10 01:12:58'),
(2, 'Marco', 'marco.tulioramirez@hotmail.com', '$2y$10$.lBRrwlTsrAOSLYM2Idhr.ROz4D67ecpRRTzyaoa46gACJBUSVw5W', 'F08JUDNThLDtxHoFAQ50YzXmi2y0awYIHgx5d3daQK9i8t4f41VgGh0ZO3To', '2017-11-10 01:18:35', '2017-11-10 01:18:35'),
(3, 'Miguel', 'miguel.useche@unet.edu.ve', '$2y$10$739qJ0gWrZ2DaZEczCho4.kGlFjYCWUAkoudA5kbEBRsmVTOQlzGO', 'gaEjO6hPy6LxuKwERcHyFKwumOqkMLn6eWEeMgySiDIgjR7OJ20zOB7Bji3k', '2017-11-10 01:19:20', '2017-11-10 01:19:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
