-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2014 at 09:34 PM
-- Server version: 5.6.15
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cobit`
--

-- --------------------------------------------------------

--
-- Table structure for table `analista`
--

CREATE TABLE IF NOT EXISTS `analista` (
  `id_an` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `analista` varchar(45) NOT NULL DEFAULT '',
  `fecha_ingreso` date NOT NULL DEFAULT '0000-00-00',
  `correo` varchar(45) NOT NULL DEFAULT '',
  `contacto` varchar(45) NOT NULL DEFAULT '',
  `id_area` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_an`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `analista`
--

INSERT INTO `analista` (`id_an`, `analista`, `fecha_ingreso`, `correo`, `contacto`, `id_area`) VALUES
(1, 'Wilkeins valera', '2014-11-30', 'wilkeins.pepsico.com', '04262556539', '1'),
(2, 'Nuevo', '2014-11-30', 'wilkeins.valera@pepsico.com', '04262556539', '2');

-- --------------------------------------------------------

--
-- Table structure for table `aplicacion`
--

CREATE TABLE IF NOT EXISTS `aplicacion` (
  `id_ap` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aplicacion` varchar(45) NOT NULL DEFAULT '',
  `version_ap` varchar(45) NOT NULL DEFAULT '',
  `descripcion` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_ap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id_area` int(11) NOT NULL DEFAULT '0',
  `id_pais` int(11) NOT NULL DEFAULT '0',
  `nombre_area` varchar(45) NOT NULL DEFAULT '',
  `descripcion` text,
  PRIMARY KEY (`id_area`),
  KEY `id_pais` (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id_area`, `id_pais`, `nombre_area`, `descripcion`) VALUES
(1, 1, 'BIS', 'BUSSINES INTELILLENT SOLUTIONS'),
(2, 2, 'VENTAS', 'VENTAS VENTAS'),
(3, 2, 'PRODUCCION', 'PRODUCTION'),
(4, 6, 'Proyectos', 'Proyectos'),
(6, 6, 'OtraDDD', 'sdddasdasda'),
(7, 1, 'Area7', 'adddasdasdaaad'),
(8, 1, 'DE WILKEINS', 'DE WILKEINS');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_area` int(11) NOT NULL,
  `nombre_apellido` varchar(50) NOT NULL DEFAULT '',
  `cedula` varchar(20) NOT NULL DEFAULT '',
  `direccion` varchar(100) NOT NULL DEFAULT '',
  `telefono` varchar(20) NOT NULL DEFAULT '',
  `correo` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_cliente`),
  KEY `id_area` (`id_area`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `id_area`, `nombre_apellido`, `cedula`, `direccion`, `telefono`, `correo`) VALUES
(1, 1, 'wilkeins valera', '1234456564', 'san felipe', '04262556539', 'correo@gmail.com'),
(2, 1, 'peter parker', '12345678', 'other address', '1213131311', 'correo@gmail.com'),
(3, 1, 'wilkein', '19817447', 'san felipe yaracuy', '04262556539', 'correo@gmail.com'),
(4, 3, 'wilkein2', '19817447', 'san felipe yaracuy2', '04262556539', 'correo@gmail.com'),
(5, 1, 'aasdasadasd', 'aasdadads', 'aadsdasddsaada', 'aadasddasdas', 'correo@gmail.com'),
(8, 1, 'Alejandra', 'Valera', 'san felipe', '02545553967', 'correo@gmail.com'),
(9, 2, 'dsdadad', '23123131', 'dddasdasdd', 'sdadadsa', 'asdsdadsaa'),
(10, 3, 'Jhon freddy vega', '12345678', 'bogota', '12345443546464', 'jfv@mejorando.la');

-- --------------------------------------------------------

--
-- Table structure for table `desarrollador`
--

CREATE TABLE IF NOT EXISTS `desarrollador` (
  `id_dev` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `desarrollador` varchar(45) NOT NULL DEFAULT '',
  `correo` varchar(45) NOT NULL DEFAULT '',
  `contacto` varchar(45) NOT NULL DEFAULT '',
  `id_area` varchar(45) NOT NULL DEFAULT '',
  `fecha_creaciondev` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_dev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id_pais` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`id_pais`, `nombre`, `descripcion`) VALUES
(0, 'Peru', 'Lima'),
(1, 'Venezuela', 'Caracas'),
(2, 'Colombia', 'Bogota'),
(6, 'Chile', 'Santiago de chile');

-- --------------------------------------------------------

--
-- Table structure for table `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_project` varchar(100) DEFAULT NULL,
  `id_area` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_proyecto`,`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id_rg` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `registro` varchar(45) NOT NULL DEFAULT '',
  `documentacion` varchar(45) NOT NULL DEFAULT '',
  `procedimiento` varchar(45) NOT NULL DEFAULT '',
  `nivel_impacto` varchar(45) NOT NULL DEFAULT '',
  `status` varchar(45) NOT NULL DEFAULT '',
  `id_area` varchar(45) NOT NULL DEFAULT '',
  `id_usuario` varchar(45) NOT NULL DEFAULT '',
  `id_tp` varchar(45) NOT NULL DEFAULT '',
  `id_cliente` varchar(45) NOT NULL DEFAULT '',
  `id_dev` varchar(45) NOT NULL DEFAULT '',
  `id_ap` varchar(45) NOT NULL DEFAULT '',
  `id_an` varchar(45) NOT NULL DEFAULT '',
  `fecha_creacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_rg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_proceso`
--

CREATE TABLE IF NOT EXISTS `tipo_proceso` (
  `id_tp` int(11) NOT NULL AUTO_INCREMENT,
  `tproceso` varchar(45) NOT NULL DEFAULT '',
  `descripcion` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_tp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tipo_proceso`
--

INSERT INTO `tipo_proceso` (`id_tp`, `tproceso`, `descripcion`) VALUES
(1, 'proceso', 'proceso'),
(2, 'proceso', 'proceso'),
(3, 'proceso', 'descripcion2'),
(6, 'PROCESS', 'PROCESSS'),
(7, 'ratatatatata', 'atatatatatatta');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `login`, `password`, `rol`) VALUES
(1, 'admin', 'user', 'admin', 'ADMIN', 'administrador'),
(2, 'Nuevo', 'Nuevo', 'adsdasdda', '12345', 'administrador'),
(3, 'new', 'surname new', 'new', NULL, 'por defecto'),
(4, 'barbara', 'graterol', 'bgraterol', NULL, 'por defecto');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
