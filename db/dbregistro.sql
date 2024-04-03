-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 21:43:10
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
-- Base de datos: `dbregistro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcolege`
--

CREATE TABLE `tcolege` (
  `idColege` char(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `phone` char(15) NOT NULL,
  `email` char(15) NOT NULL,
  `webSite` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcompetence`
--

CREATE TABLE `tcompetence` (
  `idCompetence` varchar(13) NOT NULL,
  `idCourse` varchar(13) NOT NULL,
  `name` varchar(60) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tcompetence`
--

INSERT INTO `tcompetence` (`idCompetence`, `idCourse`, `name`, `create_at`, `update_at`) VALUES
('65f1195cb43c', '65f1195cb43cc', 'Competencia 1 Curso 1', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f1195cb43d', '65f1195cb43cc', 'Competencia 2 Curso 1', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f1195cb43e', '65f1195cb43cc', 'Competencia 3 Curso 1', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f1196c6eae', '65f1196c6eaef', 'Competencia 1 Curso 4', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f1196c6eaf', '65f1196c6eaef', 'Competencia 2 Curso 4', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f1196c6eb0', '65f1196c6eaef', 'Competencia 3 Curso 4', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f1197fe14c', '65f1197fe14c5', 'Competencia 1 Curso 2', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f1197fe14d', '65f1197fe14c5', 'Competencia 2 Curso 2', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f1197fe14e', '65f1197fe14c5', 'Competencia 3 Curso 2', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f119946cf1', '65f119946cf12', 'Competencia 1 Curso 5', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f119946cf2', '65f119946cf12', 'Competencia 2 Curso 5', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f119946cf3', '65f119946cf12', 'Competencia 3 Curso 5', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f119a5cca0', '65f119a5cca09', 'Competencia 1 Curso 3', '2024-04-02 09:22:05', '2024-04-02 09:22:05'),
('65f119a5cca1', '65f119a5cca09', 'Competencia 2 Curso 3', '2024-04-02 09:22:05', '2024-04-02 09:22:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcourse`
--

CREATE TABLE `tcourse` (
  `idCourse` varchar(13) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `requisites` text NOT NULL,
  `description` text NOT NULL,
  `modality` varchar(50) NOT NULL DEFAULT 'Presencial',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tcourse`
--

INSERT INTO `tcourse` (`idCourse`, `code`, `name`, `category`, `requisites`, `description`, `modality`, `created_at`, `updated_at`) VALUES
('65f1195cb43cc', 'MATE001', 'Matemáticas', 'Primaria', 'Ninguno', 'Curso de matemáticas.', 'Presencial', '2024-03-12 22:17:47', '0000-00-00 00:00:00'),
('65f1196c6eaef', 'CINA002', 'Ciencias Naturales', 'Primaria', 'Ninguno', 'Curso de ciencias naturales.', 'Presencial', '2024-03-12 22:17:47', '0000-00-00 00:00:00'),
('65f1197fe14c5', 'LECU003', 'Lenguaje y Comunicación', 'Primaria', 'Ninguno', 'Curso de lenguaje y comunicación.', 'Presencial', '2024-03-12 22:17:47', '0000-00-00 00:00:00'),
('65f119946cf12', 'ARMU004', 'Arte y Música', 'Primaria', 'Ninguno', 'Curso de arte y música.', 'Presencial', '2024-03-12 22:17:47', '0000-00-00 00:00:00'),
('65f119a5cca09', 'EDFI005', 'Educación Física', 'Primaria', 'Ninguno', 'Curso de educación física.', 'Presencial', '2024-03-12 22:17:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenrolled`
--

CREATE TABLE `tenrolled` (
  `idEnrolled` varchar(13) NOT NULL,
  `idPerson` varchar(13) NOT NULL,
  `idCourse` varchar(13) NOT NULL,
  `grade` int(4) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tenrolled`
--

INSERT INTO `tenrolled` (`idEnrolled`, `idPerson`, `idCourse`, `grade`, `state`, `created_at`, `updated_at`) VALUES
('a5BvR4s2j6PcD', 'a5BvR4s2j6PcD', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('a5BvR4s2j6scD', '6608a8c4c4242', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('b2Z4BpQ6XvC2N', 'b2Z4BpQ6XvC2N', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('b8Z4BpQ6XvC2N', 'b8Z4BpQ6XvC2N', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('c6XvC2N4BpQ6X', 'c6XvC2N4BpQ6X', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('d5VrC8x2Z4BpQ', 'd5VrC8x2Z4BpQ', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('e3T5FtY1JhM7V', 'e3T5FtY1JhM7V', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('g4Z4BpQ6XvC2N', 'g4Z4BpQ6XvC2N', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('h5VrC8x2Z4BpQ', 'h5VrC8x2Z4BpQ', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('j7U2JhM3T5FtY', 'j7U2JhM3T5FtY', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('k6XvC2N4BpQ6X', 'k6XvC2N4BpQ6X', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('m5VrC8x2Z4BpQ', 'm5VrC8x2Z4BpQ', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('m7V3T5FtY1JhM', 'm7V3T5FtY1JhM', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('o7U2JhM3T5FtY', 'o7U2JhM3T5FtY', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('p6XvC2N4BpQ6X', 'p6XvC2N4BpQ6X', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('p7ZmB4c9V8NlM', 'p7ZmB4c9V8NlM', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('p9XvC2N4BpQ6X', 'p9XvC2N4BpQ6X', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('q3KlP9o8Z6XvC', 'q3KlP9o8Z6XvC', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('q5VrC8x2Z4BpQ', 'q5VrC8x2Z4BpQ', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('r5FtY1v7U2JhI', 'r5FtY1v7U2JhI', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('r8XvC2N4BpQ6X', 'r8XvC2N4BpQ6X', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('s7U2JhM3T5FtY', 's7U2JhM3T5FtY', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('t2WdJ9x6g5LpE', 't2WdJ9x6g5LpE', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('t6XvC2N4BpQ6X', 't6XvC2N4BpQ6X', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('u2JhM7v3T5FtY', 'u2JhM7v3T5FtY', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('u5VrC8x2Z4BpQ', 'u5VrC8x2Z4BpQ', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('v7U2JhM3T5FtY', 'v7U2JhM3T5FtY', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('v8XvC2N4BpQ6X', 'v8XvC2N4BpQ6X', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('w1JhM3T5FtY7U', 'w1JhM3T5FtY7U', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('x8Z4BpQ6XvC2N', 'x8Z4BpQ6XvC2N', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('y8XvC2N4BpQ6X', 'y8XvC2N4BpQ6X', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('z5Xvk2Jd4Bp0', 'b2Z4BpQ6XvC2N', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4Bp1', 'b8Z4BpQ6XvC2N', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4Bp2', 'c6XvC2N4BpQ6X', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4Bp3', 'd5VrC8x2Z4BpQ', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4Bp4', 'e3T5FtY1JhM7V', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4Bp5', 'g4Z4BpQ6XvC2N', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4Bp6', 'h5VrC8x2Z4BpQ', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4Bp7', 'j7U2JhM3T5FtY', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4Bp8', 'k6XvC2N4BpQ6X', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4Bp9', 'm5VrC8x2Z4BpQ', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpA', 'm7V3T5FtY1JhM', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpB', 'o7U2JhM3T5FtY', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpC', 'p6XvC2N4BpQ6X', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpD', 'p7ZmB4c9V8NlM', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpE', 'p9XvC2N4BpQ6X', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpF', 'q3KlP9o8Z6XvC', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpG', 'q5VrC8x2Z4BpQ', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpH', 'r5FtY1v7U2JhI', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpI', 'r8XvC2N4BpQ6X', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpJ', 's7U2JhM3T5FtY', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpK', 't2WdJ9x6g5LpE', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpL', 't6XvC2N4BpQ6X', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpM', 'u2JhM7v3T5FtY', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpN', 'u5VrC8x2Z4BpQ', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpO', 'v7U2JhM3T5FtY', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpP', 'v8XvC2N4BpQ6X', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpQ', 'w1JhM3T5FtY7U', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpR', 'x8Z4BpQ6XvC2N', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpS', 'y8XvC2N4BpQ6X', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z5Xvk2Jd4BpT', 'z9XvC2N4BpQ6X', '65f1197fe14c5', 1, 1, '2024-04-02 15:10:36', '2024-04-02 15:10:36'),
('z9XvC2N4BpQ00', 'b2Z4BpQ6XvC2N', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ01', 'b8Z4BpQ6XvC2N', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ02', 'c6XvC2N4BpQ6X', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ03', 'd5VrC8x2Z4BpQ', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ04', 'e3T5FtY1JhM7V', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ05', 'g4Z4BpQ6XvC2N', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ06', 'h5VrC8x2Z4BpQ', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ07', 'j7U2JhM3T5FtY', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ08', 'k6XvC2N4BpQ6X', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ09', 'm5VrC8x2Z4BpQ', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ10', 'm7V3T5FtY1JhM', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ11', 'o7U2JhM3T5FtY', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ12', 'p6XvC2N4BpQ6X', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ13', 'p7ZmB4c9V8NlM', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ14', 'p9XvC2N4BpQ6X', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ15', 'q3KlP9o8Z6XvC', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ16', 'q5VrC8x2Z4BpQ', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ17', 'r5FtY1v7U2JhI', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ18', 'r8XvC2N4BpQ6X', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ19', 's7U2JhM3T5FtY', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ20', 't2WdJ9x6g5LpE', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ21', 't6XvC2N4BpQ6X', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ22', 'u2JhM7v3T5FtY', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ23', 'u5VrC8x2Z4BpQ', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ24', 'v7U2JhM3T5FtY', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ25', 'v8XvC2N4BpQ6X', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ26', 'w1JhM3T5FtY7U', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ27', 'x8Z4BpQ6XvC2N', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ28', 'y8XvC2N4BpQ6X', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ29', 'z9XvC2N4BpQ6X', '65f1196c6eaef', 1, 1, '2024-04-02 14:56:47', '2024-04-02 14:56:47'),
('z9XvC2N4BpQ6X', 'z9XvC2N4BpQ6X', '65f1195cb43cc', 1, 1, '2024-04-02 13:05:17', '2024-04-02 13:05:17'),
('z9Xvv2Jd4Bp0', 'b2Z4BpQ6XvC2N', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4Bp1', 'b8Z4BpQ6XvC2N', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4Bp2', 'c6XvC2N4BpQ6X', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4Bp3', 'd5VrC8x2Z4BpQ', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4Bp4', 'e3T5FtY1JhM7V', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4Bp5', 'g4Z4BpQ6XvC2N', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4Bp6', 'h5VrC8x2Z4BpQ', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4Bp7', 'j7U2JhM3T5FtY', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4Bp8', 'k6XvC2N4BpQ6X', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4Bp9', 'm5VrC8x2Z4BpQ', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpA', 'm7V3T5FtY1JhM', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpB', 'o7U2JhM3T5FtY', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpC', 'p6XvC2N4BpQ6X', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpD', 'p7ZmB4c9V8NlM', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpE', 'p9XvC2N4BpQ6X', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpF', 'q3KlP9o8Z6XvC', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpG', 'q5VrC8x2Z4BpQ', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpH', 'r5FtY1v7U2JhI', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpI', 'r8XvC2N4BpQ6X', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpJ', 's7U2JhM3T5FtY', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpK', 't2WdJ9x6g5LpE', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpL', 't6XvC2N4BpQ6X', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpM', 'u2JhM7v3T5FtY', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpN', 'u5VrC8x2Z4BpQ', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpO', 'v7U2JhM3T5FtY', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpP', 'v8XvC2N4BpQ6X', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpQ', 'w1JhM3T5FtY7U', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpR', 'x8Z4BpQ6XvC2N', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpS', 'y8XvC2N4BpQ6X', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2Jd4BpT', 'z9XvC2N4BpQ6X', '65f119946cf12', 1, 1, '2024-04-02 15:05:42', '2024-04-02 15:05:42'),
('z9Xvv2k4BpQ0', 'b2Z4BpQ6XvC2N', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQ1', 'b8Z4BpQ6XvC2N', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQ2', 'c6XvC2N4BpQ6X', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQ3', 'd5VrC8x2Z4BpQ', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQ4', 'e3T5FtY1JhM7V', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQ5', 'g4Z4BpQ6XvC2N', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQ6', 'h5VrC8x2Z4BpQ', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQ7', 'j7U2JhM3T5FtY', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQ8', 'k6XvC2N4BpQ6X', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQ9', 'm5VrC8x2Z4BpQ', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQA', 'm7V3T5FtY1JhM', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQB', 'o7U2JhM3T5FtY', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQC', 'p6XvC2N4BpQ6X', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQD', 'p7ZmB4c9V8NlM', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQE', 'p9XvC2N4BpQ6X', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQF', 'q3KlP9o8Z6XvC', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQG', 'q5VrC8x2Z4BpQ', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQH', 'r5FtY1v7U2JhI', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQI', 'r8XvC2N4BpQ6X', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQJ', 's7U2JhM3T5FtY', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQK', 't2WdJ9x6g5LpE', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQL', 't6XvC2N4BpQ6X', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQM', 'u2JhM7v3T5FtY', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQN', 'u5VrC8x2Z4BpQ', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQO', 'v7U2JhM3T5FtY', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQP', 'v8XvC2N4BpQ6X', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQQ', 'w1JhM3T5FtY7U', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQR', 'x8Z4BpQ6XvC2N', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQS', 'y8XvC2N4BpQ6X', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35'),
('z9Xvv2k4BpQT', 'z9XvC2N4BpQ6X', '65f119a5cca09', 1, 1, '2024-04-02 15:02:35', '2024-04-02 15:02:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tperson`
--

CREATE TABLE `tperson` (
  `idPerson` char(13) NOT NULL,
  `idUser` char(13) DEFAULT NULL,
  `firstName` varchar(50) NOT NULL,
  `surName` varchar(100) NOT NULL,
  `birthDate` date NOT NULL,
  `dni` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tperson`
--

INSERT INTO `tperson` (`idPerson`, `idUser`, `firstName`, `surName`, `birthDate`, `dni`, `phone`, `email`, `role`, `created_at`, `updated_at`) VALUES
('6604978a49e71', '6604978a072bc', 'Jaiber', 'Zamora', '2024-03-20', 76172043, '987654321', 'jaiber@gmail.com', 'admin', '2024-03-27 22:02:50', '2024-03-27 22:02:50'),
('66049e2a74d1e', '66049e2a569a8', 'Max', 'Huilca', '2024-03-12', 74185296, '987654321', 'admin1@gmail.com', 'admin', '2024-03-27 22:31:06', '2024-03-27 22:31:06'),
('6608a88161782', '6608a8812a98a', 'Roberth', 'Centeno Barrientos', '2003-02-15', 71423999, '987654321', 'admin@gmail.com', 'admin', '2024-03-31 00:04:17', '2024-03-31 00:04:17'),
('6608a8c4c4242', '6608a8c48b85f', 'Roberth', 'Centeno Barrientos', '2003-02-15', 12345678, '987654321', 'teacher@gmail.com', 'teacher', '2024-03-31 00:05:24', '2024-03-31 00:05:24'),
('660b3581d6844', '660b3581b5c69', 'Anais', 'Puma Huamanga', '2005-05-20', 75909339, '987654321', 'anais@gmail.com', 'admin', '2024-04-01 22:30:25', '2024-04-01 22:30:25'),
('660daf75b21e3', '660daf75752a2', 'admin', 'Puma Huamanga', '1998-10-21', 78945612, '987654321', 'admin1@gamil.com', 'admin', '2024-04-03 19:35:17', '2024-04-03 19:35:17'),
('a5BvR4s2j6PcD', NULL, 'Carlos', 'López', '0000-00-00', 34567890, '345678901', 'carlos@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('b2Z4BpQ6XvC2N', NULL, 'Marina', 'López', '0000-00-00', 67890124, '678901234', 'marina@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('b8Z4BpQ6XvC2N', NULL, 'Sara', 'López', '0000-00-00', 56789014, '567890123', 'sara@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('c6XvC2N4BpQ6X', NULL, 'Daniel', 'Fernández', '0000-00-00', 78901236, '789012345', 'daniel@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('d5VrC8x2Z4BpQ', NULL, 'Alejandro', 'Gómez', '0000-00-00', 89012347, '890123456', 'alejandro@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('e3T5FtY1JhM7V', NULL, 'Roberto', 'Fernández', '0000-00-00', 56789013, '567890123', 'roberto@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('g4Z4BpQ6XvC2N', NULL, 'Carmen', 'Sánchez', '0000-00-00', 45678902, '456789012', 'carmen@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('h5VrC8x2Z4BpQ', NULL, 'Hugo', 'García', '0000-00-00', 34567891, '345678901', 'hugo@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('j7U2JhM3T5FtY', NULL, 'Silvia', 'Martínez', '0000-00-00', 12345679, '123456780', 'silvia@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('k6XvC2N4BpQ6X', NULL, 'Eva', 'Hernández', '0000-00-00', 23456780, '234567890', 'eva@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('m5VrC8x2Z4BpQ', NULL, 'Antonio', 'García Martín', '0000-00-00', 90123457, '901234567', 'antonio@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('m7V3T5FtY1JhM', NULL, 'Julia', 'García', '0000-00-00', 34567892, '345678901', 'julia@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('o7U2JhM3T5FtY', NULL, 'Manuel', 'Gómez Ruiz', '0000-00-00', 23456789, '234567890', 'manuel@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('p6XvC2N4BpQ6X', NULL, 'Sara', 'Martínez García', '0000-00-00', 34567890, '345678901', 'sara@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('p7ZmB4c9V8NlM', NULL, 'Pedro', 'Rodríguez', '0000-00-00', 67890123, '678901234', 'pedro@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('p9XvC2N4BpQ6X', NULL, 'Pablo', 'Martínez', '0000-00-00', 89012346, '890123456', 'pablo@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('q3KlP9o8Z6XvC', NULL, 'Diego', 'Gómez', '0000-00-00', 89012345, '890123456', 'diego@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('q5VrC8x2Z4BpQ', NULL, 'Javier', 'López Sánchez', '0000-00-00', 45678901, '456789012', 'javier@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('r5FtY1v7U2JhI', NULL, 'Sofía', 'Fernández', '0000-00-00', 78901234, '789012345', 'sofia@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('r8XvC2N4BpQ6X', NULL, 'Laura', 'Fernández López', '0000-00-00', 56789012, '567890123', 'laura@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('s7U2JhM3T5FtY', NULL, 'David', 'Martín Gómez', '0000-00-00', 67890123, '678901234', 'david@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('t2WdJ9x6g5LpE', NULL, 'María', 'González', '0000-00-00', 23456789, '234567890', 'maria@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('t6XvC2N4BpQ6X', NULL, 'Paula', 'Rodríguez Martínez', '0000-00-00', 78901234, '789012345', 'paula@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('u2JhM7v3T5FtY', NULL, 'Lucía', 'Hernández', '0000-00-00', 90123456, '901234567', 'lucia@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('u5VrC8x2Z4BpQ', NULL, 'Miguel', 'Sánchez Rodríguez', '0000-00-00', 89012345, '890123456', 'miguel@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('v7U2JhM3T5FtY', NULL, 'Marta', 'Sánchez', '0000-00-00', 67890125, '678901234', 'marta@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('v8XvC2N4BpQ6X', NULL, 'Cristina', 'López Martínez', '0000-00-00', 90123456, '901234567', 'cristina@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('w1JhM3T5FtY7U', NULL, 'Isabel', 'Gómez', '0000-00-00', 78901235, '789012345', 'isabel@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('x8Z4BpQ6XvC2N', NULL, 'Luis', 'Martínez', '0000-00-00', 23456781, '234567890', 'luis@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('y8XvC2N4BpQ6X', NULL, 'Lucas', 'Rodríguez', '0000-00-00', 90123458, '901234567', 'lucas@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('z9XvC2N4BpQ6X', NULL, 'Mario', 'Pérez', '0000-00-00', 45678903, '456789012', 'mario@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trating`
--

CREATE TABLE `trating` (
  `idRating` varchar(13) NOT NULL,
  `idCompetence` varchar(13) NOT NULL,
  `idEnrolled` varchar(13) NOT NULL,
  `note` varchar(2) NOT NULL,
  `period` tinyint(3) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trating`
--

INSERT INTO `trating` (`idRating`, `idCompetence`, `idEnrolled`, `note`, `period`, `created_at`, `updated_at`) VALUES
('660c70470b29f', '65f1195cb43c', 'd5VrC8x2Z4BpQ', 'A', 1, '2024-04-02 20:53:27', '2024-04-02 20:53:27'),
('660c7047103d1', '65f1195cb43d', 'd5VrC8x2Z4BpQ', 'B', 1, '2024-04-02 20:53:27', '2024-04-02 20:53:27'),
('660c7047117f8', '65f1195cb43e', 'd5VrC8x2Z4BpQ', 'C', 1, '2024-04-02 20:53:27', '2024-04-02 20:53:27'),
('660cb6548a375', '65f1196c6eae', 'z9XvC2N4BpQ03', 'A', 1, '2024-04-03 01:52:20', '2024-04-03 01:52:20'),
('660cb6548f3c1', '65f1196c6eaf', 'z9XvC2N4BpQ03', 'B', 1, '2024-04-03 01:52:20', '2024-04-03 01:52:20'),
('660cb79b1ba8a', '65f1196c6eae', 'z9XvC2N4BpQ03', 'A', 1, '2024-04-03 01:57:47', '2024-04-03 01:57:47'),
('660cb79b20fd9', '65f1196c6eaf', 'z9XvC2N4BpQ03', 'B', 1, '2024-04-03 01:57:47', '2024-04-03 01:57:47'),
('660cb834e255e', '65f1196c6eae', 'z9XvC2N4BpQ03', 'A', 1, '2024-04-03 02:00:20', '2024-04-03 02:00:20'),
('660cb834e7d5b', '65f1196c6eaf', 'z9XvC2N4BpQ03', 'B', 1, '2024-04-03 02:00:20', '2024-04-03 02:00:20'),
('660cb834e9317', '65f1196c6eb0', 'z9XvC2N4BpQ03', 'C', 1, '2024-04-03 02:00:20', '2024-04-03 02:00:20'),
('660cb83cca22a', '65f1196c6eae', 'z9XvC2N4BpQ03', 'A', 1, '2024-04-03 02:00:28', '2024-04-03 02:00:28'),
('660cb83ccf5ae', '65f1196c6eaf', 'z9XvC2N4BpQ03', 'B', 1, '2024-04-03 02:00:28', '2024-04-03 02:00:28'),
('660cb83cd0336', '65f1196c6eaf', 'z9XvC2N4BpQ03', 'AD', 2, '2024-04-03 02:00:28', '2024-04-03 02:00:28'),
('660cb83cd13bf', '65f1196c6eb0', 'z9XvC2N4BpQ03', 'C', 1, '2024-04-03 02:00:28', '2024-04-03 02:00:28'),
('660cc74f3fc10', '65f119a5cca0', 'z9Xvv2k4BpQ3', 'A', 1, '2024-04-03 03:04:47', '2024-04-03 03:04:47'),
('660cc74f40f7f', '65f119a5cca1', 'z9Xvv2k4BpQ3', 'B', 1, '2024-04-03 03:04:47', '2024-04-03 03:04:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tsession`
--

CREATE TABLE `tsession` (
  `idSession` varchar(13) NOT NULL,
  `idUser` varchar(13) NOT NULL,
  `ipAddress` varchar(45) NOT NULL,
  `userAgent` varchar(255) NOT NULL,
  `routeAccessed` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tuser`
--

CREATE TABLE `tuser` (
  `idUser` char(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(700) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tuser`
--

INSERT INTO `tuser` (`idUser`, `email`, `password`, `created_at`, `updated_at`) VALUES
('6604978a072bc', 'jaiber@gmail.com', '$2y$10$WwlSEVUnHB6mMzxh/SXHseidA8nYsbRCIBx8sqig4ygdIc2F1H3aC', '2024-03-27 22:02:50', '2024-03-27 22:02:50'),
('66049e2a569a8', 'admin1@gmail.com', '$2y$10$IiuKM9v7h5AwR.CrxbArIuLBL/KdBprVNXDbujafSeoul8xIql2QO', '2024-03-27 22:31:06', '2024-03-27 22:31:06'),
('6608a8812a98a', 'admin@gmail.com', '$2y$10$ERcRnt9VEsyCqj2fuE4Oce560UpskLzOUsPPde0lN934YR9uLRiqC', '2024-03-31 00:04:17', '2024-03-31 00:04:17'),
('6608a8c48b85f', 'teacher@gmail.com', '$2y$10$x4a9E2mTOkydl4Tri6b9c.23lV5RMtJfmqYZo8.Qn0624TisGDXgq', '2024-03-31 00:05:24', '2024-03-31 00:05:24'),
('660b3581b5c69', 'anais@gmail.com', '$2y$10$0IXgnhX3xxajezLDqST4YuDW2oM5qa2ILB/Yu8syKsypO1WOrNhF.', '2024-04-01 22:30:25', '2024-04-01 22:30:25'),
('660daf75752a2', 'admin1@gamil.com', '$2y$10$pGko3.lTEypBOJf3lDAqqOxb1fqyOEUlaAMw57E6q.5NBJSS5xtHK', '2024-04-03 19:35:17', '2024-04-03 19:35:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tcolege`
--
ALTER TABLE `tcolege`
  ADD PRIMARY KEY (`idColege`);

--
-- Indices de la tabla `tcompetence`
--
ALTER TABLE `tcompetence`
  ADD PRIMARY KEY (`idCompetence`),
  ADD KEY `idCourse` (`idCourse`);

--
-- Indices de la tabla `tcourse`
--
ALTER TABLE `tcourse`
  ADD PRIMARY KEY (`idCourse`);

--
-- Indices de la tabla `tenrolled`
--
ALTER TABLE `tenrolled`
  ADD PRIMARY KEY (`idEnrolled`),
  ADD KEY `idCourse` (`idCourse`),
  ADD KEY `idPerson` (`idPerson`) USING BTREE;

--
-- Indices de la tabla `tperson`
--
ALTER TABLE `tperson`
  ADD PRIMARY KEY (`idPerson`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `trating`
--
ALTER TABLE `trating`
  ADD PRIMARY KEY (`idRating`),
  ADD KEY `idCompetence` (`idCompetence`),
  ADD KEY `idEnrolled` (`idEnrolled`);

--
-- Indices de la tabla `tsession`
--
ALTER TABLE `tsession`
  ADD PRIMARY KEY (`idSession`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`idUser`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tcompetence`
--
ALTER TABLE `tcompetence`
  ADD CONSTRAINT `tcompetence_ibfk_1` FOREIGN KEY (`idCourse`) REFERENCES `tcourse` (`idCourse`);

--
-- Filtros para la tabla `tenrolled`
--
ALTER TABLE `tenrolled`
  ADD CONSTRAINT `tenrolled_ibfk_1` FOREIGN KEY (`idPerson`) REFERENCES `tperson` (`idPerson`),
  ADD CONSTRAINT `tenrolled_ibfk_2` FOREIGN KEY (`idCourse`) REFERENCES `tcourse` (`idCourse`);

--
-- Filtros para la tabla `tperson`
--
ALTER TABLE `tperson`
  ADD CONSTRAINT `tperson_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tuser` (`idUser`);

--
-- Filtros para la tabla `trating`
--
ALTER TABLE `trating`
  ADD CONSTRAINT `trating_ibfk_1` FOREIGN KEY (`idCompetence`) REFERENCES `tcompetence` (`idCompetence`),
  ADD CONSTRAINT `trating_ibfk_2` FOREIGN KEY (`idEnrolled`) REFERENCES `tenrolled` (`idEnrolled`);

--
-- Filtros para la tabla `tsession`
--
ALTER TABLE `tsession`
  ADD CONSTRAINT `tsession_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tuser` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
