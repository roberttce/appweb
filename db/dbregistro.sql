-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2024 a las 16:56:15
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
-- Estructura de tabla para la tabla `tcourse`
--

CREATE TABLE `tcourse` (
  `idCourse` varchar(13) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `requisites` text NOT NULL,
  `description` text NOT NULL,
  `modality` varchar(50) NOT NULL,
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
  `state` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tenrolled`
--

INSERT INTO `tenrolled` (`idEnrolled`, `idPerson`, `idCourse`, `state`, `created_at`, `updated_at`) VALUES
('1E1zZ4D9oP6Xv', 'u5VrC8x2Z4BpQ', '65f1195cb43cc', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('1J1E1zZ4D9oP6', 'x8Z4BpQ6XvC2N', '65f1195cb43cc', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('1pZ4D9oP6XvK8', 'n6VrC8x2Z4BpQ', '65f1195cb43cc', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('1tY7uM3vJ5hT1', 'p9XvC2N4BpQ6X', '65f1195cb43cc', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('1wQ9vS6pZ4D8o', 'g4Z4BpQ6XvC2N', '65f119a5cca09', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('1zX8bH3tS6pQ9', 'b8Z4BpQ6XvC2N', '65f119a5cca09', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('1zZ4D9oP6XvK8', 's7U2JhM3T5FtY', '65f1195cb43cc', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('2zX8bH3tS6pQ9', 'h5VrC8x2Z4BpQ', '65f1195cb43cc', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('4D4yZ4D9oP6Xv', 'u2JhM7v3T5FtY', '65f119a5cca09', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('4I4D4yZ4D9oP6', 'w9QkS3t6PzHbX', '65f119a5cca09', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('4oK8lP4sT2J5h', 'm7V3T5FtY1JhM', '65f119a5cca09', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('4sT2J5hY7uM3v', 'p7ZmB4c9V8NlM', '65f119a5cca09', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('4yZ4D9oP6XvK8', 'r8XvC2N4BpQ6X', '65f119a5cca09', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('7A1wQ9vS6pZ4D', 's8hU1kF7n3QzY', '65f1196c6eaef', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('7cZ4D9oP6XvK8', 'c6XvC2N4BpQ6X', '65f1195cb43cc', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('7F7A1wQ9vS6pZ', 'v7U2JhM3T5FtY', '65f1196c6eaef', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('7hKpN9o6XcZ4D', '65f13390e96b3', '65f1195cb43cc', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('7K7F7A1wQ9vS6', 'y8XvC2N4BpQ6X', '65f1196c6eaef', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('7lP4sT2J5hY7u', 'j7U2JhM3T5FtY', '65f1196c6eaef', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('7pZ4D9oP6XvK8', 'n8XvC2N4BpQ6X', '65f1196c6eaef', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('7vK8lP4sT2J5h', 'q3KlP9o8Z6XvC', '65f1196c6eaef', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('8B2zX8bH3tS6p', 't2WdJ9x6g5LpE', '65f1197fe14c5', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('8G8B2zX8bH3tS', 'v8XvC2N4BpQ6X', '65f1197fe14c5', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('8hKpN9o6XcZ4D', 'd5VrC8x2Z4BpQ', '65f1196c6eaef', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('8L8G8B2zX8bH3', 'z9XvC2N4BpQ6X', '65f1197fe14c5', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('8oK8lP4sT2J5h', 'k6XvC2N4BpQ6X', '65f1197fe14c5', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('8qW9vS6pZ4D8o', 'o7U2JhM3T5FtY', '65f1197fe14c5', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('8vPzB6cS9kQ3W', '65f13409b39c0', '65f1196c6eaef', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('8wQ9vS6pZ4D8o', 'q5VrC8x2Z4BpQ', '65f1197fe14c5', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('9C3xX8bH3tS6p', 't6XvC2N4BpQ6X', '65f119946cf12', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('9H9C3xX8bH3tS', 'w1JhM3T5FtY7U', '65f119946cf12', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('9nVqL8hP4sT2J', 'a5BvR4s2j6PcD', '65f1197fe14c5', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('9rX8bH3tS6pQ9', 'p6XvC2N4BpQ6X', '65f119946cf12', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('9vK8lP4sT2J5h', 'm5VrC8x2Z4BpQ', '65f119946cf12', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('9vPzB6cS9kQ3W', 'e3T5FtY1JhM7V', '65f1197fe14c5', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00'),
('9xX8bH3tS6pQ9', 'r5FtY1v7U2JhI', '65f119946cf12', 1, '2024-03-25 14:30:00', '2024-03-25 14:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tperson`
--

CREATE TABLE `tperson` (
  `idPerson` char(13) NOT NULL,
  `idUser` char(13) DEFAULT NULL,
  `firstName` varchar(50) NOT NULL,
  `surName` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
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

INSERT INTO `tperson` (`idPerson`, `idUser`, `firstName`, `surName`, `age`, `dni`, `phone`, `email`, `role`, `created_at`, `updated_at`) VALUES
('65f13390e96b3', '65f12b531fb18', 'Max', 'huilca Lopinta', 0, 85274163, '987852654', 'max@gmail.com', 'admin', '2024-03-13 06:06:26', '2024-03-13 06:06:26'),
('65f13409b39c0', 'ece4797eaf5e', 'Roberth', 'Centeno', 0, 71423999, '987654321', 'r.centen0ba@gmail.com', 'teacher', '2024-03-13 06:08:39', '2024-03-13 06:08:39'),
('a5BvR4s2j6PcD', NULL, 'Carlos', 'López', 0, 34567890, '345678901', 'carlos@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('b2Z4BpQ6XvC2N', NULL, 'Marina', 'López', 0, 67890124, '678901234', 'marina@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('b8Z4BpQ6XvC2N', NULL, 'Sara', 'López', 0, 56789014, '567890123', 'sara@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('c6XvC2N4BpQ6X', NULL, 'Daniel', 'Fernández', 0, 78901236, '789012345', 'daniel@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('d5VrC8x2Z4BpQ', NULL, 'Alejandro', 'Gómez', 0, 89012347, '890123456', 'alejandro@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('e3T5FtY1JhM7V', NULL, 'Roberto', 'Fernández', 0, 56789013, '567890123', 'roberto@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('f1GhJ8n2VrKlT', NULL, 'Laura', 'Martínez', 0, 45678901, '456789012', 'laura@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('g4Z4BpQ6XvC2N', NULL, 'Carmen', 'Sánchez', 0, 45678902, '456789012', 'carmen@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('h5VrC8x2Z4BpQ', NULL, 'Hugo', 'García', 0, 34567891, '345678901', 'hugo@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('j7U2JhM3T5FtY', NULL, 'Silvia', 'Martínez', 0, 12345679, '123456780', 'silvia@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('k6XvC2N4BpQ6X', NULL, 'Eva', 'Hernández', 0, 23456780, '234567890', 'eva@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('m5VrC8x2Z4BpQ', NULL, 'Antonio', 'García Martín', 0, 90123457, '901234567', 'antonio@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('m7V3T5FtY1JhM', NULL, 'Julia', 'García', 0, 34567892, '345678901', 'julia@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('n6VrC8x2Z4BpQ', NULL, 'Elena', 'López', 0, 12345670, '123456780', 'elena@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('n8XvC2N4BpQ6X', NULL, 'Elena', 'Hernández López', 0, 12345678, '123456789', 'elena@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('o7U2JhM3T5FtY', NULL, 'Manuel', 'Gómez Ruiz', 0, 23456789, '234567890', 'manuel@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('p6XvC2N4BpQ6X', NULL, 'Sara', 'Martínez García', 0, 34567890, '345678901', 'sara@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('p7ZmB4c9V8NlM', NULL, 'Pedro', 'Rodríguez', 0, 67890123, '678901234', 'pedro@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('p9XvC2N4BpQ6X', NULL, 'Pablo', 'Martínez', 0, 89012346, '890123456', 'pablo@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('q3KlP9o8Z6XvC', NULL, 'Diego', 'Gómez', 0, 89012345, '890123456', 'diego@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('q5VrC8x2Z4BpQ', NULL, 'Javier', 'López Sánchez', 0, 45678901, '456789012', 'javier@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('r5FtY1v7U2JhI', NULL, 'Sofía', 'Fernández', 0, 78901234, '789012345', 'sofia@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('r8XvC2N4BpQ6X', NULL, 'Laura', 'Fernández López', 0, 56789012, '567890123', 'laura@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('s7U2JhM3T5FtY', NULL, 'David', 'Martín Gómez', 0, 67890123, '678901234', 'david@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('s8hU1kF7n3QzY', NULL, 'Juan', 'Pérez', 0, 12345678, '123456789', 'juan@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('t2WdJ9x6g5LpE', NULL, 'María', 'González', 0, 23456789, '234567890', 'maria@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('t6XvC2N4BpQ6X', NULL, 'Paula', 'Rodríguez Martínez', 0, 78901234, '789012345', 'paula@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('u2JhM7v3T5FtY', NULL, 'Lucía', 'Hernández', 0, 90123456, '901234567', 'lucia@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('u5VrC8x2Z4BpQ', NULL, 'Miguel', 'Sánchez Rodríguez', 0, 89012345, '890123456', 'miguel@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('v7U2JhM3T5FtY', NULL, 'Marta', 'Sánchez', 0, 67890125, '678901234', 'marta@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('v8XvC2N4BpQ6X', NULL, 'Cristina', 'López Martínez', 0, 90123456, '901234567', 'cristina@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('w1JhM3T5FtY7U', NULL, 'Isabel', 'Gómez', 0, 78901235, '789012345', 'isabel@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('w9QkS3t6PzHbX', NULL, 'Ana', 'Sánchez', 0, 56789012, '567890123', 'ana@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('x8Z4BpQ6XvC2N', NULL, 'Luis', 'Martínez', 0, 23456781, '234567890', 'luis@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('y8XvC2N4BpQ6X', NULL, 'Lucas', 'Rodríguez', 0, 90123458, '901234567', 'lucas@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23'),
('z9XvC2N4BpQ6X', NULL, 'Mario', 'Pérez', 0, 45678903, '456789012', 'mario@gmail.com', 'student', '2024-03-13 08:54:23', '2024-03-13 08:54:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trating`
--

CREATE TABLE `trating` (
  `idRating` varchar(13) NOT NULL,
  `idEnrolled` varchar(13) NOT NULL,
  `competence1` varchar(2) DEFAULT NULL,
  `competence2` varchar(2) DEFAULT NULL,
  `competence3` varchar(2) DEFAULT NULL,
  `competence4` varchar(2) DEFAULT NULL,
  `competence5` varchar(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `firstName` varchar(70) NOT NULL,
  `surName` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(700) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tuser`
--

INSERT INTO `tuser` (`idUser`, `firstName`, `surName`, `email`, `password`, `created_at`, `updated_at`) VALUES
('65f12b531fb18', 'Max', 'Huilca Lopinta', 'max@gmail.com', '12345678', '2024-03-13 05:30:51', '2024-03-13 05:30:51'),
('ece4797eaf5e', 'Roberth', 'Centeno', 'r.centen0ba@gmail.com', '12345678', '2024-03-13 05:30:51', '2024-03-13 05:30:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tcolege`
--
ALTER TABLE `tcolege`
  ADD PRIMARY KEY (`idColege`);

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
  ADD UNIQUE KEY `idEnrolled` (`idEnrolled`) USING BTREE;

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
-- Filtros para la tabla `tenrolled`
--
ALTER TABLE `tenrolled`
  ADD CONSTRAINT `tenrolled_ibfk_1` FOREIGN KEY (`idPerson`) REFERENCES `tperson` (`idPerson`),
  ADD CONSTRAINT `tenrolled_ibfk_2` FOREIGN KEY (`idCourse`) REFERENCES `tcourse` (`idCourse`);

--
-- Filtros para la tabla `trating`
--
ALTER TABLE `trating`
  ADD CONSTRAINT `trating_ibfk_1` FOREIGN KEY (`idEnrolled`) REFERENCES `tenrolled` (`idEnrolled`);

--
-- Filtros para la tabla `tsession`
--
ALTER TABLE `tsession`
  ADD CONSTRAINT `tsession_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tuser` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
