-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2015 a las 18:34:53
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ipn_gestion`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `user_alumno`, `pass_alumno`, `nombre_alumno`, `grupoid_alumno`, `horarioid_alumno`, `boleta_alumno`) VALUES
(15, 'asdasd', 'qweqweq', 'alumno1', 25, -1, '123123'),
(16, '123123', '123123', 'alumno2', 25, -1, '3123123'),
(17, '123', '123123', '123', 0, -1, '123123'),
(18, 'qweq', 'weq', 'weqwe', 31, -1, 'qweqwe'),
(19, '12312', '3123123', 'ALumno 3iv3 1', 33, 31, 'asdasd'),
(20, '12312', '3123123', 'ALumno 3iv3 2', 33, 31, 'asdasd'),
(21, '12312', '3123123', 'ALumno 3iv3 3', 33, 31, 'asdasd'),
(22, '12312', '3123123', 'ALumno 3iv3 4', 33, 31, 'asdasd'),
(23, '12312', '3123123', 'Alumno con horario', 34, 28, '123123123'),
(24, 'admin', 'admin', 'admin', 33, 31, 'admin'),
(25, 'test', 'test', 'Alumno test', 35, 30, '123'),
(26, '123123', '12312', '3123', 33, 31, '123123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE IF NOT EXISTS `calificacion` (
`id_cali` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_mat` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id_cali`, `id_alumno`, `id_mat`, `calificacion`) VALUES
(1, 23, 1, 10),
(2, 23, 1, 10),
(3, 24, 9, 10),
(4, 24, 9, 8),
(5, 24, 9, 10),
(6, 23, 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
`id_grupo` int(11) NOT NULL,
  `nombre_grupo` text NOT NULL,
  `semestre` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `nombre_grupo`, `semestre`) VALUES
(33, '3iv3', 3),
(34, 'Grupo 123', 1),
(35, 'Grupo horario', 1),
(36, '123123123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
`id_horario` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

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
(27, 26),
(28, 34),
(29, 33),
(30, 35),
(31, 33);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- Volcado de datos para la tabla `horarios_mat`
--

INSERT INTO `horarios_mat` (`id_hor_mat`, `id_grupo`, `id_mat`, `lun_ini`, `lun_fin`, `mar_ini`, `mar_fin`, `mie_ini`, `mie_fin`, `jue_ini`, `jue_fin`, `vie_ini`, `vie_fin`, `id_hor`) VALUES
(56, 34, 8, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 28),
(57, 34, 6, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 28),
(58, 34, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 28),
(59, 34, 7, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 28),
(60, 34, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 28),
(61, 34, 6, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 28),
(62, 34, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 28),
(63, 34, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 28),
(64, 34, 1, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 28),
(65, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 29),
(66, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 29),
(67, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 29),
(68, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 29),
(69, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 29),
(70, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 29),
(71, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 29),
(72, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 29),
(73, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 29),
(74, 35, 5, '8:00', '11:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 30),
(75, 35, 7, 'vacio', 'vacio', '12:00', '12:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 30),
(76, 35, 7, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 30),
(77, 35, 6, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '11:00', '13:00', '14:00', '13:00', 'vacio', 30),
(78, 35, 13, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '13:00', 30),
(79, 35, 10, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 30),
(80, 35, 11, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 30),
(81, 35, 6, 'vacio', 'vacio', '11:00', '12:00', '13:00', '7:00', 'vacio', 'vacio', 'vacio', 'vacio', 30),
(82, 35, 7, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 30),
(83, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 31),
(84, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '11:00', 'vacio', 'vacio', 'vacio', 'vacio', 31),
(85, 33, 9, 'vacio', 'vacio', 'vacio', '11:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 31),
(86, 33, 9, '9:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '15:00', 'vacio', 'vacio', 31),
(87, 33, 9, 'vacio', '11:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 31),
(88, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '11:00', '10:00', 'vacio', 'vacio', 'vacio', 31),
(89, 33, 9, 'vacio', 'vacio', 'vacio', '10:00', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 31),
(90, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 31),
(91, 33, 9, 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE IF NOT EXISTS `maestros` (
`id_maestro` int(11) NOT NULL,
  `maestro_nombre` varchar(255) NOT NULL,
  `maestro_user` varchar(200) NOT NULL,
  `maestro_pass` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id_maestro`, `maestro_nombre`, `maestro_user`, `maestro_pass`) VALUES
(1, 'Profesor Test', '', ''),
(2, 'Profesor Test', 'maestro1', 'asasd'),
(3, 'Profesor Test2', 'maestro1', 'asasd'),
(4, 'Profesor Test3', 'maestro1', 'asasd'),
(5, 'Profesor Admin', 'admin', 'admin'),
(6, '123123', '123123', '12312');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
`id_materia` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `semestre` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre`, `semestre`) VALUES
(1, 'ProgramaciÃ³n', 1),
(5, 'Administracion', 1),
(6, 'Hola', 1),
(7, '13123123123', 1),
(8, 'asdasd', 1),
(9, 'Progra 3', 3),
(10, 'g1123', 1),
(11, 'gf23423', 1),
(12, 'g5467', 1),
(13, 'g7567', 1),
(14, '123123123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_maestro`
--

CREATE TABLE IF NOT EXISTS `materia_maestro` (
`id_mat_maestro` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `materia_maestro`
--

INSERT INTO `materia_maestro` (`id_mat_maestro`, `id_maestro`, `id_materia`) VALUES
(1, 1, 1),
(2, 3, 7),
(3, 4, 6),
(4, 4, 9),
(5, 4, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
`id_mensaje` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `mensaje` text NOT NULL,
  `for_maestro` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `id_maestro`, `id_alumno`, `mensaje`, `for_maestro`) VALUES
(3, 1, 24, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(4, 1, 24, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(5, 5, 24, 'asdasasdasd', 1),
(6, 5, 24, '1231213123', 1),
(7, 5, 24, 'asdasdasdasdasd', 1),
(8, 5, 24, 'asdasdasdasdasd', 1),
(9, 5, 24, 'Hola', 0),
(10, 5, 24, 'Holaaaaaaaaaaaaaaaaaaaa 2', 0),
(11, 5, 24, 'sasdasdasdasd', 0),
(12, 5, 15, '', 0),
(13, 5, 15, 'asdadasd', 0),
(14, 5, 15, 'asdadasd', 0),
(15, 5, 24, 'asdadasd', 0),
(16, 5, 24, 'asdadasd', 0),
(17, 5, 24, '', 0),
(18, 1, 24, '', 1),
(19, 1, 24, '', 1),
(20, 1, 24, '', 1),
(21, 1, 24, '', 1),
(22, 1, 24, '', 1),
(23, 1, 24, '', 1),
(24, 1, 24, '', 1),
(25, 1, 24, '', 1),
(26, 5, 24, 'asdasdasdasd', 0),
(27, 5, 24, 'Holaaaaaaaaaa tst', 0),
(28, 1, 24, '', 1),
(29, 1, 24, 'sdasdasdasdasd', 1),
(30, 5, 24, 'sdasdasdasdasdasdasdasd', 1),
(31, 5, 24, 'Holaaaaaaaaaa tst', 0),
(32, 5, 24, 'sdasdasdasdasdasdasdasd', 1),
(33, 5, 24, 'Holaaaaaaaaaa tst', 0),
(34, 5, 24, 'sdasdasdasdasdasdasdasd', 1),
(35, 5, 24, 'asdasdasdasd', 0),
(36, 5, 24, 'asdasdasdasd', 1);

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
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
 ADD PRIMARY KEY (`id_cali`);

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
-- Indices de la tabla `materia_maestro`
--
ALTER TABLE `materia_maestro`
 ADD PRIMARY KEY (`id_mat_maestro`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
 ADD PRIMARY KEY (`id_mensaje`);

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
MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
MODIFY `id_cali` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `horarios_mat`
--
ALTER TABLE `horarios_mat`
MODIFY `id_hor_mat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `materia_maestro`
--
ALTER TABLE `materia_maestro`
MODIFY `id_mat_maestro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
