-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2017 a las 08:30:33
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logica_db`
--
CREATE DATABASE IF NOT EXISTS `logica_db` DEFAULT CHARACTER SET utf32 COLLATE utf32_spanish2_ci;
USE `logica_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formula`
--

DROP TABLE IF EXISTS `formula`;
CREATE TABLE `formula` (
  `id` int(11) NOT NULL,
  `nombre` varchar(175) COLLATE utf32_spanish2_ci NOT NULL,
  `formula` varchar(100) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `formula`
--

INSERT INTO `formula` (`id`, `nombre`, `formula`) VALUES
(1, '4.1 Identidad de equivalencia', '(A≡true)≡A'),
(2, '4.2 Asociatividad de equivalencia', '(A≡(B≡C))≡((A≡B)≡C)'),
(3, '4.3 Simetría de equivalencia', '(A≡B)≡(B≡A)'),
(4, '4.4 Reflexividad de equivalencia', 'A≡A'),
(5, '4.8 Axioma de negación', '¬A≡(A≡false)'),
(6, '4.9 Intercambio de negación', '¬A≡B≡A≡¬B'),
(7, '4.10 Doble negación', '¬¬A≡A'),
(8, '4.11 Definición de false', 'false≡¬true'),
(9, '4.12 Negación de false', '¬false≡true'),
(10, '4.13 Negación de equivalencia', '¬(A≡B)≡(¬A≡B)'),
(11, '4.18 Simetría de disyunción', 'A∨B≡B∨A'),
(12, '4.19 Asociatividad de disyunción', '(A∨B)∨C≡A∨(B∨C)'),
(13, '4.20 Identidad de disyunción', 'A∨false≡A'),
(14, '4.21 Idempotencia de disyunción', 'A∨A≡A'),
(15, '4.22 Distribución de disyunción sobre equivalencia', 'A∨(B≡C)≡A∨B≡A∨C'),
(16, '4.23 Anulador de disyunción', 'A∨true≡true'),
(17, '4.24 Tercero excluído', 'A∨¬A'),
(18, '4.25 Distribución de disyunción sobre disyunción', 'A∨(B∨C)≡(A∨B)∨(A∨C)'),
(19, '4.26 Alternación de disyunción', 'A∨B≡A∨¬B≡A'),
(20, '4.27 Axioma la Regla Dorada', 'A∧B≡(A∨B≡A≡B)'),
(21, '4.28 Simetría de conjunción', 'A∧B≡B∧A'),
(22, '4.29 Asociatividad de conjunción', 'A∧(B∧C)≡(A∧B)∧C'),
(23, '4.30 Idempotencia de conjunción', 'A∧A≡A'),
(24, '4.31 Identidad de conjunción', 'A∧true≡A'),
(25, '4.32 Anulador de conjunción', 'A∧false≡false'),
(26, '4.33 Contradicción', 'A∧¬A≡false'),
(27, '4.34 Distribución de disyunción sobre conjunción', 'A∨(B∧C)≡(A∨B)∧(A∨C)'),
(28, '4.35 Distribución de conjunción sobre disyunción', 'A∧(B∨C)≡(A∧B)∨(A∧C)'),
(29, '4.36 a) De Morgan', '¬(A∧B)≡¬A∨¬B'),
(30, '4.36 b) De Morgan', '¬(A∨B)≡¬A∧¬B'),
(31, '4.37 a) Absorción', 'A∧(A∨B)≡A'),
(32, '4.37 b) Absorción', 'A∨(A∧B)≡A'),
(33, '4.37 c) Absorción', 'A∧(¬A∨B)≡A∧B'),
(34, '4.37 d) Absorción', 'A∨(¬A∧B)≡A∨B'),
(35, '4.38 Alternación de conjunción', 'A∧B≡A∧¬B≡¬A'),
(36, '4.39 Pseudo-distribución de conjunción sobre equivalencia', 'A∧(B≡C)≡A∧B≡A∧C≡A'),
(37, '4.40 Compresión', 'A∧(A≡B)≡A∧B'),
(38, '4.41 Reemplazo', 'A∧(A≡B)≡B∧(A≡B)'),
(39, '4.42 Sustitución', '(A∧B)∧(A≡C)≡(A∧B)∧(B≡C)'),
(40, '4.43 Definición de equivalencia', 'A≡B≡(A∧B)∨(¬A∧¬B)'),
(41, '4.45 Axioma de implicación', 'A→B≡A∨B≡B'),
(42, '4.46 Definición alternativa de implicación', 'A→B≡A∧B≡A'),
(43, '4.47 Definición alternativa de implicación', 'A→B≡¬A∨B');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formula`
--
ALTER TABLE `formula`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formula`
--
ALTER TABLE `formula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
