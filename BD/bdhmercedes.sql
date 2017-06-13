-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2016 a las 19:46:22
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdhmercedes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eveninstitucionales`
--

CREATE TABLE IF NOT EXISTS `eveninstitucionales` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eveninstitucionales`
--

INSERT INTO `eveninstitucionales` (`codigo`, `titulo`, `descripcion`, `imagen`, `orden`, `estado`) VALUES
(1, 'Dia del NiÃ±o', 'El prÃ³ximo 30 de octubre celebraremos el dÃ­a de nuestros niÃ±os del hogar infantil, para este eventos hemos organizado actividades donde participaran los papitos y mamitas de nuestros niÃ±os.', 'evt1.jpg', 1, 1),
(2, 'DÃ­a de la Infancia ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad expedita porro voluptatibus cupiditate minus et doloribus ex architecto vero nisi quibusdam quod, laborum facilis quisquam molestiae magnam animi quasi tempore?', 'Chrysanthemum.jpg', 1, 1),
(3, 'DÃ­a de la Raza', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad expedita porro voluptatibus cupiditate minus et doloribus ex architecto vero nisi quibusdam quod, laborum facilis quisquam molestiae magnam animi quasi tempore?', 'Penguins.jpg', 1, 1),
(4, 'Muestra de Trabajos', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'header-bg.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `orden` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`codigo`, `titulo`, `descripcion`, `orden`, `imagen`, `estado`) VALUES
(1, 'ReseÃ±aa Historica', 'El hogar Infantil las Mercedes se encuentra ubicado en el municipio de SandonÃ¡, en el barrio BelÃ©n y se inaugurÃ³ formalmente en el aÃ±o 1981. Somos un hogar que brinda atenciÃ³n integral a 60 niÃ±os y niÃ±as menores de 5 aÃ±os en condiciones de vulnerabilidad, cuenta con personal idÃ³neo, capacitado para la atenciÃ³n con calidez y calidad de nuestra poblaciÃ³n de primera infancia. Actualmente trabajamos con el acompaÃ±amiento del operador, CorporaciÃ³n centro comunitario La Rosa, entidad inspirada en los principios del evangelio vividos segÃºn el carisma de la orden de la compaÃ±Ã­a de MarÃ­a y cuyo propÃ³sito es contribuir a formar una conciencia cristina en la comunidad beneficiaria con respeto por la diversidad..', 1, 'img-1.png', 1),
(2, 'MISIÃ“N', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.', 1, 'img-13.png', 1),
(3, 'VisiÃ³n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris', 1, 'img-14.png', 1),
(4, 'Valores Institucionales', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris', 1, 'img-25.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE IF NOT EXISTS `inscripciones` (
  `numeroinscripciones` int(4) NOT NULL,
  `codigo` varchar(6) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `fechainscripcion` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`numeroinscripciones`, `codigo`, `identificacion`, `fechainscripcion`) VALUES
(103, '01', '1010', '2016-10-19'),
(105, '01', '1086754678', '2016-10-19'),
(106, '01', '1010', '2016-10-19'),
(107, '01', '1010', '2016-10-19'),
(108, '01', '1010', '2016-10-20'),
(109, '', '931022', '2016-11-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE IF NOT EXISTS `ninos` (
  `identificacion` varchar(12) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `edad` varchar(4) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `estrato` int(1) NOT NULL,
  `eps` varchar(45) NOT NULL,
  `vacunas` varchar(45) NOT NULL,
  `crecimiento` varchar(45) NOT NULL,
  `gruposanguineo` varchar(45) NOT NULL,
  `acudiente` varchar(45) NOT NULL,
  `redunidos` varchar(45) NOT NULL,
  `desplazados` varchar(45) NOT NULL,
  `minoriaetnica` varchar(45) NOT NULL,
  `sisben` varchar(45) NOT NULL,
  `salariominimo` varchar(45) NOT NULL,
  `discapacidad` varchar(45) NOT NULL,
  `rna` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ninos`
--

INSERT INTO `ninos` (`identificacion`, `nombre`, `fechanacimiento`, `edad`, `genero`, `direccion`, `telefono`, `estrato`, `eps`, `vacunas`, `crecimiento`, `gruposanguineo`, `acudiente`, `redunidos`, `desplazados`, `minoriaetnica`, `sisben`, `salariominimo`, `discapacidad`, `rna`) VALUES
('', '', '0000-00-00', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', ''),
('1004540173', 'Juan Sebastian Lopez Rojas', '2013-09-06', '1', 'masculino', 'B/20 de julio', '3226466090', 0, 'emssanar', 'si', 'si', 'A negativo', 'juana Fajardo', 'no', 'no', 'ninguna', '23', '4', 'ninguna', 'no'),
('1004567890', 'Diana Rocio Paz Jimenez', '2013-02-06', '3 Añ', 'Femenino', 'B/Campo Alegre', '3138765678', 0, 'emssanar', 'si', 'si', 'O Positivo', 'Rocio Jimenez', 'si', 'no', 'no', '43', '6', 'no', 'no'),
('1010', 'Luisita Rojas', '0000-00-00', '2 aÃ', 'Femenino', 'San Antonio Alto', '3112875688', 1, 'Emsanar', 'No', 'No', 'AB-', 'Judith Tobar', 'Si', 'No', 'Negritudes', 'si', '1200000', 'si', 'Si'),
('1086134028', 'Neyi Narvaez Chaves', '2010-10-11', '3', 'Femenino', 'Sandona', '312875688', 1, 'Emsanar', 'Si', 'Si', 'A+', 'Dilia Chaves', 'Si', 'Si', 'Ninguno', '30', '1200000', 'No', 'hhhh'),
('1086754678', 'Kevin Santiago Castro Paz', '2013-06-02', '4 Añ', 'Masculino', 'B/Belen', '312453456', 0, 'Emssanar', 'si', 'si', 'A positivo', 'Sonia Paz', 'no', 'no', 'ninguna', '38', '4', 'ninguna', 'no'),
('1234567890', 'Juan Jose Montezuma Rosero', '2014-05-04', '2 añ', 'masculino', 'B/Melendez', '3124567456', 0, 'Emssanar', 'si', 'si', 'A positivo', 'Maria Rosero', 'no', 'no', 'ninguna', '22', '4', 'ninguna', 'no'),
('6578903214', 'Maria Jose Mora Cabrera', '2015-10-03', '9 me', 'femenino', 'V/Vella Vista', '3208976540', 0, 'asmet salud', 'si', 'si', 'B positivo', 'Alba Cabrera', 'no', 'si', 'ninguna', '26', '5', 'ninguna', 'no'),
('931022', 'Maria', '0000-00-00', '3', 'Femenino', 'MZ 2', '7895452', 1, 'Emsanar', 'No', 'No', 'AB-', 'Ana', 'Si', 'Si', 'Negritudes', 'si', '12000', 'no', 'No'),
('93102219', 'Maria', '0000-00-00', '3', 'Femenino', 'MZ 2', '7895452', 1, 'Emsanar', 'No', 'No', 'AB-', 'Ana', 'Si', 'Si', 'Negritudes', 'si', '12000', 'no', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE IF NOT EXISTS `niveles` (
  `codigo` varchar(6) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `duracion` varchar(45) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`codigo`, `nombre`, `descripcion`, `imagen`, `duracion`, `estado`) VALUES
('01', 'Sala Cuna ', 'NiÃ±os de 6 a 12 meses', 'n03.png', '6 meses', 0),
('02', 'Palvulos', 'A partir de los 12 meses', 'n07.png', '6 meses', 1),
('04', 'JardÃ­n', 'NiÃ±os de 3 aÃ±os', 'n01.png', '6 meses', 1),
('3', 'Pre-JardÃ­n', 'A partir de los 2 aÃ±os', 'n06.png', '6 meses', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE IF NOT EXISTS `oferta` (
  `codoferta` int(11) NOT NULL,
  `codigo` varchar(6) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `version` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `valor` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`codoferta`, `codigo`, `estado`, `version`, `fecha`, `valor`, `descripcion`) VALUES
(1, '01', 'Activo', '2016-2', '2016-10-29', 10000, 'Para todos'),
(2, '02', 'Activo', '2016-2', '2016-10-26', 20000, 'Prueba 2'),
(3, '01', 'Desactivo', '2017-2', '2016-10-21', 10000, 'prueba 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `identificacion` varchar(13) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(21) NOT NULL,
  `fechana` date NOT NULL,
  `genero` varchar(30) NOT NULL,
  `estrato` int(1) NOT NULL,
  `estadocivil` varchar(30) NOT NULL,
  `profesion` varchar(40) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `funciones` varchar(400) NOT NULL,
  `fechaingreso` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`identificacion`, `nombres`, `direccion`, `telefono`, `fechana`, `genero`, `estrato`, `estadocivil`, `profesion`, `cargo`, `funciones`, `fechaingreso`, `email`, `imagen`, `estado`) VALUES
('3456', 'Maria Camila Rosero', 'Barrio Campo Alegre', '7287839', '1987-01-01', 'Femenino', 1, 'Casada', 'Adminstracion de empresas', 'Docente', 'Docente Orientadora nivel PÃ¡rvulos', '2014-01-01', 'mariacamila@hotmail.com', 'art2.png', 1),
('741852963', 'Mario Fernando Lopez', 'Mz 12', '7121212', '1987-10-31', 'Masculino', 2, 'Soltero', 'PedagogÃ­a Infantil ', 'Docente', 'Docente Orientador Nivel Pre-JardÃ­n', '2016-10-30', 'mflopez@gmail.com', 'art1.png', 1),
('8521493', 'Jairo Andres Rivera', 'M15', '7215830', '1991-01-12', 'Masculino', 1, 'Casado', 'Ingenierio', 'Docente', 'Docente Orientador Nivel JardÃ­n', '2016-10-30', 'jarivera@gmail.com', 'art5.png', 1),
('963258741', 'Olga Lucia Rojas', 'M14', '736520', '1993-10-12', 'Femenino', 1, 'Soltera', 'Primera Infancia', 'Docente', 'Docente Orientadora Nivel Sala Cuna', '2016-10-31', 'olrojas@gmail.com', 'art3.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preinscripcion`
--

CREATE TABLE IF NOT EXISTS `preinscripcion` (
  `numeroinscripciones` int(11) NOT NULL,
  `codigo` varchar(6) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `noticia` varchar(450) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id_slider`, `titulo`, `imagen`, `noticia`, `link`, `orden`, `estado`, `fecha`) VALUES
(1, 'Sitio Web Hogar Infantil', 'bg_header.png', 'El hogar infantil las mercedes tendrÃ¡ su sitio web el cual fue creado por estudiantes del Instituto Compunet', 'j', 1, 1, '2016-08-10'),
(2, 'Nuestros Niños', 'ninos.jpg', 'Nuestros niños están rodeados de los mejores entornos de aprendizaje', 'h', 2, 1, '2016-08-10'),
(4, 'Noticia 2', 'frases sobre felicidad y amor.jpg', 'kkkkkkkkkkkkkkkkkkkkkkkkk', 'g', 4, 1, '2016-10-19'),
(5, 'BIENVENIDOS', 'bg_header.png', 'BIENVENIDOS A NUESTRA WEB', NULL, 1, 1, '2016-11-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcalendario`
--

CREATE TABLE IF NOT EXISTS `tcalendario` (
  `id` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `evento` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tcalendario`
--

INSERT INTO `tcalendario` (`id`, `fecha`, `evento`) VALUES
(2, '2016-10-21', 'Prueba Hogar 2'),
(3, '2016-10-27', 'Prueba Hogar 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` varchar(13) CHARACTER SET utf8 NOT NULL,
  `usuario_nombre` varchar(40) CHARACTER SET utf8 NOT NULL,
  `usuario_clave` varchar(10) CHARACTER SET utf8 NOT NULL,
  `usuario_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usuario_freg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_clave`, `usuario_email`, `usuario_freg`) VALUES
('1', 'neyi', '1234', 'neyinarvaez@hotmail.com', '2016-10-06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eveninstitucionales`
--
ALTER TABLE `eveninstitucionales`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`numeroinscripciones`);

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`codoferta`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `preinscripcion`
--
ALTER TABLE `preinscripcion`
  ADD PRIMARY KEY (`numeroinscripciones`),
  ADD KEY `fk_preinscripcion_niños_idx` (`identificacion`),
  ADD KEY `fk_preinscripcion_niveles1_idx` (`codigo`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `tcalendario`
--
ALTER TABLE `tcalendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eveninstitucionales`
--
ALTER TABLE `eveninstitucionales`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `info`
--
ALTER TABLE `info`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `numeroinscripciones` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tcalendario`
--
ALTER TABLE `tcalendario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preinscripcion`
--
ALTER TABLE `preinscripcion`
  ADD CONSTRAINT `fk_preinscripcion_niveles1` FOREIGN KEY (`codigo`) REFERENCES `niveles` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_preinscripcion_niños` FOREIGN KEY (`identificacion`) REFERENCES `ninos` (`identificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
