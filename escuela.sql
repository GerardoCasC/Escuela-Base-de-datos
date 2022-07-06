-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2022 a las 22:32:34
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Licenciatura` varchar(20) NOT NULL,
  `Cuatrimestre` varchar(20) NOT NULL,
  `Estatus` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `Licenciatura`, `Cuatrimestre`, `Estatus`) VALUES
(1, 'Gerardo', 'Casanova', '99465894', 'gerardo.cas@unid.mx', 'Ing. software y sist', 'Sexto cuatrimestre', '1'),
(2, 'Karen', 'Guillen', '998457843', 'karen.gui@unid.mx', 'Ing. software y sist', 'Sexto cuatrimestre', '1'),
(3, 'Moana', 'Rivera', '', 'moana.riv@unid.mx', 'Ing. software y sist', 'Sexto cuatrimestre', '1'),
(4, 'Augusto', 'Zamudio', '9983117006', 'augusto.zam@unid.mx', 'Ing. software y sist', 'Sexto cuatrimestre', '1'),
(5, 'Manuel', 'Euan', '852592525', 'manuel.eua@unid.mx', 'Ing. software y sist', 'Sexto cuatrimestre', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Cuatrimestre` varchar(30) NOT NULL,
  `Licenciatura` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID`, `Nombre`, `Cuatrimestre`, `Licenciatura`) VALUES
(1, 'Gestión de servidores', 'Sexto cuatrimestre', 'Ing. software y sistemas'),
(2, 'Administración de bases de dat', 'Sexto cuatrimestre', 'Ing. software y sistemas'),
(3, 'Educación física', 'Primer cuatrimestre', 'Físico culturista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `ID` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Teléfono` int(11) NOT NULL,
  `Correo electrónico` varchar(30) NOT NULL,
  `Licenciatura` varchar(30) NOT NULL,
  `Cuatrimestre` varchar(20) NOT NULL,
  `Status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`ID`, `Nombre`, `Apellido`, `Teléfono`, `Correo electrónico`, `Licenciatura`, `Cuatrimestre`, `Status`) VALUES
('1', 'Enrique', 'Perez', 998435233, 'enrique.per@unid.mx', 'Ing. software y sistemas', 'Sexto cuatrimestre', '0'),
('2', 'Mushu', 'Mushu', 943275234, 'mushu.mus@unid.mx', 'Ing. software y sistemas', 'Sexto cuatrimestre', '1'),
('3', 'Pepe', 'Pech', 895235234, 'pepe.pec@unid.mx', 'Ing. software y sistemas', 'Sexto cuatrimestre', '1'),
('4', 'Hector', 'Arcos', 945242434, 'hector.arc@unid.mx', 'Ing. software y sistemas', 'Sexto cuatrimestre', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
