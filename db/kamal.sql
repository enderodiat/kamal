-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-10-2018 a las 21:39:03
-- Versión del servidor: 5.6.41-84.1
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kamal`
--
CREATE DATABASE IF NOT EXISTS `kamal` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kamal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas`
--

CREATE TABLE IF NOT EXISTS `etiquetas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Castellano` varchar(60) NOT NULL,
  `Ingles` varchar(60) NOT NULL,
  `Euskera` varchar(60) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `etiquetas`
--

INSERT INTO `etiquetas` (`Id`, `Castellano`, `Ingles`, `Euskera`) VALUES
(1, 'cuerpo', 'body', 'gorputz'),
(2, 'frontera', 'bordery', 'muga'),
(3, 'territorio', 'territory', 'lurralde'),
(4, 'naturaleza', 'nature', 'izadi'),
(5, 'tiempo', 'time', 'denbora'),
(6, 'nuevas tecnologías', 'new tecnologies', 'teknologia berria'),
(7, 'memoria', 'memory', 'oroimen'),
(8, 'archivo', 'archive', 'agiritegi'),
(9, 'identidad', 'identity', 'berberatasun'),
(10, 'resistencia', 'resistance', 'iraun'),
(11, 'género', 'gender', 'genero'),
(12, 'cine', 'cinema', 'zinema'),
(13, 'ficción', 'fiction', 'fikzio'),
(14, 'documental', 'documentary', 'dokumental'),
(15, 'cómic', 'comic', 'komiki'),
(16, 'comisariado', 'curating', 'komisariotza'),
(17, 'editorial', 'publishing', ' argitaletxe'),
(18, 'ensayo', 'essay', 'saiakera'),
(19, 'teoría', 'theorie', ' teoria'),
(20, 'Historia del Arte', 'Art History', 'Artearen Historia'),
(21, 'ilustración', 'illustration', 'irudi;'),
(22, 'diseño', 'design', 'diseinu:'),
(23, 'dibujo', 'drawing', 'marrazte'),
(24, 'impresión', 'printing', 'inprimatze'),
(25, 'arquitectura', 'architecture', 'arkitektura'),
(26, 'jazz', 'jazz', 'jazz'),
(27, 'danza', 'dance', 'antza'),
(28, 'contemporáneo', 'contemporary', 'garaikide'),
(29, 'clásico', 'classic', 'klasiko'),
(30, 'tradición', 'tradicion', 'tradizio'),
(31, 'postmoderno', 'postmodern', 'postmoderno'),
(32, 'performance', 'performance', 'arte ekintza'),
(33, 'teatro', 'theater', 'antzoki'),
(34, 'música', 'music', 'musika'),
(35, 'canto', 'singing', 'abeste'),
(36, 'escultura', 'sculpture', 'eskultura'),
(37, 'instalación', 'installation', 'instalazio'),
(38, 'rap, trap, hipop', 'rap, trap, hipop', 'rap, trap, hipop'),
(39, 'Rock, metal, punk', 'Rock, metal, punk', 'Rock, metal, punk'),
(40, 'Pop, cantautor', 'Pop, singer-songwriter', 'Pop, egile abeslari'),
(41, 'política', 'politics', 'politika'),
(42, 'lenguaje', 'language', 'hizkuntza'),
(43, 'land art', 'land art', 'land art'),
(44, 'conceptual', 'conceptual', 'kontzeptual'),
(45, 'net art', 'net art', 'net art'),
(46, 'postcolonial', 'postcolonial', 'postcolonial'),
(47, 'site-specific', 'site-specific', 'site-specific'),
(48, 'apropiación', 'apropiation', 'eskuratze'),
(49, 'queer', 'queer', 'queer'),
(50, 'urbano', 'urban', 'hiri-'),
(51, 'grafitti', 'grafitti', 'grafitti'),
(52, 'pintura', 'painting', 'margolaritza'),
(53, 'videoarte', 'videoart', 'bideoarte'),
(54, 'readymade', 'readymade', 'readymade'),
(55, 'abstracto', 'abstract', 'abstraktu'),
(56, 'figurativo', 'figurative', 'figuratibo'),
(57, 'minimalismo', 'minimal', 'minimal'),
(58, 'proceso', 'process', 'prozesu'),
(59, 'emergente', 'rising', 'agertzen den.'),
(60, 'híbrido', 'hibride', 'nahastekako'),
(61, 'multidisciplinar', 'multidisciplinary', 'multidisziplinario'),
(62, 'pliegue', 'fold', 'toles'),
(63, 'apropiación', 'appropiation', 'eskuratze'),
(64, 'trabajo en curso', 'Work in progress', 'Work in progress'),
(65, 'moda', 'fashion', 'moda'),
(66, 'participación', 'participation', 'parte hartze'),
(67, 'electrónica', 'electronic', 'elektronika'),
(68, 'colectivo', 'collective', ' kolektibo'),
(69, 'independiente', 'independent', 'bere eskuko'),
(70, 'cotidiano', 'routine', 'eguneroko'),
(71, 'globalización', 'globalisation', 'globalizazio'),
(72, 'azar', 'chance', 'zori');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `festivales`
--

CREATE TABLE IF NOT EXISTS `festivales` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(60) NOT NULL,
  `IdCiudad` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Festivales_Ciudades` (`IdCiudad`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `festivales`
--

INSERT INTO `festivales` (`Id`, `Nombre`, `IdCiudad`) VALUES
(1, 'El barrio de los artistas', 1),
(2, 'Festival de danza, DNA', 1),
(17, 'Encuentros de Arte Joven', 1),
(18, 'Festival de Teatro de Olite', 7),
(19, 'Holika Festival', 12),
(20, 'Festival Barranco Fest', 11),
(21, 'Festival Ibaiertzean', 1),
(22, 'Festival Turmalina', 1),
(23, 'Fauna, Festival de Arte Urbano', 1),
(24, 'Punto de Vista', 1),
(25, 'Festival Tran Tran', 16),
(26, 'NAK, Festival de musica contemporanea de Navarra', 1),
(27, 'Nafarroa Oinez', 1),
(28, 'Cartel de San Fermín', 1),
(29, 'Concurso Internacional de Poesia Ciudad de Pamplona', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE IF NOT EXISTS `localidades` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(60) NOT NULL,
  `lg` double NOT NULL,
  `lt` double NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`Id`, `Nombre`, `lg`, `lt`) VALUES
(1, 'Pamploa/Iruña', -1.6479187, 42.8128719),
(2, 'Altsasu', -2.1709357, 42.8951589),
(3, 'Barañain', -1.6882977, 42.8042974),
(4, 'Barcelona', 2.1712963, 41.404817),
(5, 'Bera', -1.6848697, 43.2811939),
(6, 'Bilbao', -2.9370407, 43.2632009),
(7, 'Olite', -1.650975, 42.481454),
(8, 'Burgos', -3.697011, 42.344315),
(9, 'Huarte/Uharte', -1.590235, 42.831348),
(10, 'Madrid', -3.704263, 40.419053),
(11, 'Fitero', -1.858322, 42.059441),
(12, 'Cortes', -1.420662, 41.923436),
(13, 'Sabadell', 2.107915, 41.547157),
(14, 'San Sebastian/Donostia', -1.976801, 43.323903),
(15, 'Tudela', -1.60655, 42.062006),
(16, 'Castejón', -1.690478, 42.170915);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(60) NOT NULL,
  `lg` double NOT NULL,
  `lt` double NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`Id`, `Nombre`, `lg`, `lt`) VALUES
(3, 'Jazar', -1.6741232, 42.800491),
(4, 'Ateneo Navarra', -1.6592842, 42.812857),
(5, 'Centro Huarte', -1.5949352, 42.831531),
(6, 'La Ciudadela', -1.6499202, 42.812384),
(7, 'Museo de Navarra', -1.6466032, 42.819519),
(8, 'Galeria Moises Perez de Albeniz', -3.7036568, 40.4066956),
(9, 'Club Nicolette', -1.6423046, 42.8171563),
(10, 'Gaztetxe Irunea', -1.6430247, 42.8193117),
(11, 'Katakrak Liburuak', -1.6502154, 42.8174871),
(13, 'Plazara Centro Comunitario', -1.6485538, 42.8179155),
(15, 'Teatro Gayarre', -1.6439691, 42.8157025),
(17, 'Fundación Museo Jorge Oteiza', -1.5677957, 42.8380729),
(18, 'Auditorio de Baranain', -1.6905213, 42.8049376),
(19, 'UPNA', -1.6343405, 42.7972669),
(20, 'Centro cultural de Noain', -1.6351481, 42.7563998),
(21, 'Bar Nébula', -1.6504321, 42.8169872),
(22, 'Baluarte', -1.6495797, 42.806521),
(23, 'Txintxarri', -1.6505353, 42.8170086),
(26, 'Palacio del Marqués de Rozalejo', -1.6452537, 42.819396),
(27, 'Vesarte', -1.6475017, 42.826171),
(30, 'El vertigo de la trapecista', -1.6579477, 42.824995),
(31, 'Dormitaleria 54', -1.6409552, 42.81823),
(32, 'Museo Universidad Navarra', -1.6597227, 42.803605);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexos`
--

CREATE TABLE IF NOT EXISTS `sexos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Castellano` varchar(60) NOT NULL,
  `Ingles` varchar(60) NOT NULL,
  `Euskera` varchar(60) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexos`
--

INSERT INTO `sexos` (`Id`, `Castellano`, `Ingles`, `Euskera`) VALUES
(1, 'Él', '', ''),
(2, 'Ella', '', ''),
(3, 'No quiero responder', '', ''),
(4, 'Le', '', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `festivales`
--
ALTER TABLE `festivales`
  ADD CONSTRAINT `FK_Festivales_Ciudades` FOREIGN KEY (`IdCiudad`) REFERENCES `localidades` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
