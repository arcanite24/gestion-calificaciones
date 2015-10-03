-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2015 a las 19:07:40
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test_ipn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `admin_user` varchar(200) NOT NULL,
  `admin_pass` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_user`, `admin_pass`) VALUES
(1, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
`id_alumno` int(11) NOT NULL,
  `user_alumno` varchar(200) NOT NULL,
  `pass_alumno` varchar(64) NOT NULL,
  `nombre_alumno` varchar(200) NOT NULL,
  `grupoid_alumno` int(10) NOT NULL,
  `horarioid_alumno` int(10) NOT NULL,
  `boleta_alumno` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `user_alumno`, `pass_alumno`, `nombre_alumno`, `grupoid_alumno`, `horarioid_alumno`, `boleta_alumno`) VALUES
(15, 'asdasd', 'qweqweq', 'alumno1', 25, -1, '123123'),
(16, '123123', '123123', 'alumno2', 25, -1, '3123123'),
(17, '123', '123123', '123', 0, -1, '123123'),
(18, 'qweq', 'weq', 'weqwe', 31, -1, 'qweqwe'),
(19, '12312', '3123123', 'ALumno 3iv3 1', 33, -1, 'asdasd'),
(20, '12312', '3123123', 'ALumno 3iv3 2', 33, -1, 'asdasd'),
(21, '12312', '3123123', 'ALumno 3iv3 3', 33, -1, 'asdasd'),
(22, '12312', '3123123', 'ALumno 3iv3 4', 33, -1, 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
`id_grupo` int(11) NOT NULL,
  `nombre_grupo` text NOT NULL,
  `semestre` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `nombre_grupo`, `semestre`) VALUES
(33, '3iv3', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
`id_horario` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `id_grupo`) VALUES
(17, 26),
(18, 26),
(19, 26),
(20, 26),
(21, 27),
(22, 27),
(23, 29),
(24, 31),
(25, 31),
(26, 27),
(27, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_mat`
--

CREATE TABLE IF NOT EXISTS `horarios_mat` (
`id_hor_mat` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_mat` int(11) NOT NULL,
  `lun_ini` varchar(200) NOT NULL,
  `lun_fin` varchar(200) NOT NULL,
  `mar_ini` varchar(200) NOT NULL,
  `mar_fin` varchar(200) NOT NULL,
  `mie_ini` varchar(200) NOT NULL,
  `mie_fin` varchar(200) NOT NULL,
  `jue_ini` varchar(200) NOT NULL,
  `jue_fin` varchar(200) NOT NULL,
  `vie_ini` varchar(200) NOT NULL,
  `vie_fin` varchar(200) NOT NULL,
  `id_hor` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Volcado de datos para la tabla `horarios_mat`
--

INSERT INTO `horarios_mat` (`id_hor_mat`, `id_grupo`, `id_mat`, `lun_ini`, `lun_fin`, `mar_ini`, `mar_fin`, `mie_ini`, `mie_fin`, `jue_ini`, `jue_fin`, `vie_ini`, `vie_fin`, `id_hor`) VALUES
(1, 0, 0, '', '', '', '', '', '', '', '', '', '', 0),
(2, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 22),
(3, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 22),
(4, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 22),
(5, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 22),
(6, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 22),
(7, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 22),
(8, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 22),
(9, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 22),
(10, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 22),
(11, 29, 7, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 23),
(12, 29, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 23),
(13, 29, 6, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 23),
(14, 29, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 23),
(15, 29, 6, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 23),
(16, 29, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 23),
(17, 29, 6, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 23),
(18, 29, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 23),
(19, 29, 6, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 23),
(20, 31, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 24),
(21, 31, 7, 'vacio', '8:00', 'vacio', 'vacio', 'vacio', '11:00', 'vacio', 'vacio', '13:00', 'vacio', 24),
(22, 31, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 24),
(23, 31, 1, '11:00', 'vacio', '12:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 24),
(24, 31, 6, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '13:00', 'vacio', 'vacio', 24),
(25, 31, 8, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '14:00', 'vacio', 'vacio', 'vacio', 24),
(26, 31, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '11:00', 'vacio', 'vacio', 'vacio', 'vacio', 24),
(27, 31, 5, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '10:00', 24),
(28, 31, 5, 'vacio', 'vacio', 'vacio', '9:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 24),
(29, 31, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 25),
(30, 31, 7, 'vacio', '8:00', 'vacio', 'vacio', 'vacio', '11:00', 'vacio', 'vacio', '13:00', 'vacio', 25),
(31, 31, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 25),
(32, 31, 1, '11:00', 'vacio', '12:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 25),
(33, 31, 6, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '13:00', 'vacio', 'vacio', 25),
(34, 31, 8, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '14:00', 'vacio', 'vacio', 'vacio', 25),
(35, 31, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '11:00', 'vacio', 'vacio', 'vacio', 'vacio', 25),
(36, 31, 5, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '10:00', 25),
(37, 31, 5, 'vacio', 'vacio', 'vacio', '9:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 25),
(38, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 26),
(39, 27, 5, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 26),
(40, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 26),
(41, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 26),
(42, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 26),
(43, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 26),
(44, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 26),
(45, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 26),
(46, 27, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 26),
(47, 26, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 27),
(48, 26, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 27),
(49, 26, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 27),
(50, 26, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 27),
(51, 26, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 27),
(52, 26, 5, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 27),
(53, 26, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 27),
(54, 26, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 27),
(55, 26, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE IF NOT EXISTS `maestros` (
`id_maestro` int(11) NOT NULL,
  `maestro_nombre` varchar(255) NOT NULL,
  `maestro_user` varchar(200) NOT NULL,
  `maestro_pass` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id_maestro`, `maestro_nombre`, `maestro_user`, `maestro_pass`) VALUES
(1, 'Profesor Test', '', ''),
(2, 'Profesor Test', 'maestro1', 'asasd'),
(3, 'Profesor Test2', 'maestro1', 'asasd'),
(4, 'Profesor Test3', 'maestro1', 'asasd'),
(5, 'Profesor Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
`id_materia` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `semestre` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre`, `semestre`) VALUES
(1, 'ProgramaciÃ³n', 1),
(5, 'Administracion', 1),
(6, 'Hola', 1),
(7, '13123123123', 1),
(8, 'asdasd', 1),
(9, 'Progra 3', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
 ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
 ADD PRIMARY KEY (`id_grupo`), ADD UNIQUE KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
 ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `horarios_mat`
--
ALTER TABLE `horarios_mat`
 ADD PRIMARY KEY (`id_hor_mat`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
 ADD PRIMARY KEY (`id_maestro`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
 ADD PRIMARY KEY (`id_materia`), ADD KEY `semestre` (`semestre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `horarios_mat`
--
ALTER TABLE `horarios_mat`
MODIFY `id_hor_mat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
