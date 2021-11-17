-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2021 a las 06:06:19
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ciie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asepro`
--

CREATE TABLE `asepro` (
  `id` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `idase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asepro`
--

INSERT INTO `asepro` (`id`, `idpro`, `idase`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor`
--

CREATE TABLE `asesor` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Movil` varchar(10) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Profesion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asesor`
--

INSERT INTO `asesor` (`id`, `Nombre`, `Apellido`, `Direccion`, `Movil`, `Mail`, `Profesion`) VALUES
(1, 'Adrian', 'Mendez Carrillo', 'Conocida', '993245533', 'profe@gmail.com', 'Ing. Mecatronica'),
(2, 'Ulin', 'Montejo', 'Vhsa', '9932312312', 'ulin@google.com', 'Dr Ciencia de Datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `id` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Apeliido` int(11) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emprendedor`
--

CREATE TABLE `emprendedor` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Movil` varchar(10) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Profesion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emprendedor`
--

INSERT INTO `emprendedor` (`id`, `Nombre`, `Apellido`, `Direccion`, `Movil`, `Mail`, `Profesion`) VALUES
(3, 'Efrain', 'Narvaez', 'Tacotalpa', '9932840190', 'efrain@hotmail.com', 'Alcalde Tacotalpa'),
(4, 'Ricky ', 'Arcos', 'Oxolotan', '9932840180', 'ricy@google.com', 'Alcalde Tacotalpa'),
(6, 'Ulin', 'Montejo', 'Vhsa', '9923423423', 'ulin@google.com', 'Dr Ciencia de Datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(500) NOT NULL,
  `Fecha` date NOT NULL,
  `Estatus` varchar(20) NOT NULL,
  `idemprendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `Nombre`, `Fecha`, `Estatus`, `idemprendedor`) VALUES
(1, 'Panel Solar TeslaTabasco', '2021-09-28', 'Proceso', 3),
(4, 'Mejoramiento de Vivienda', '2021-11-16', 'Proceso', 4),
(5, 'Alimentos a base de grillos', '2021-11-16', 'Proceso', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userxwz`
--

CREATE TABLE `userxwz` (
  `Id` int(11) NOT NULL,
  `usuario` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `Tipo` int(1) NOT NULL,
  `Nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `userxwz`
--

INSERT INTO `userxwz` (`Id`, `usuario`, `password`, `Tipo`, `Nombre`) VALUES
(1, 'admin', 'admin', 1, 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asepro`
--
ALTER TABLE `asepro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emprendedor`
--
ALTER TABLE `emprendedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userxwz`
--
ALTER TABLE `userxwz`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asepro`
--
ALTER TABLE `asepro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `emprendedor`
--
ALTER TABLE `emprendedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `userxwz`
--
ALTER TABLE `userxwz`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
