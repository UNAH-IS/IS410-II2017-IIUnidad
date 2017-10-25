-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 08:50 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playstore_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aplicaciones`
--

CREATE TABLE `tbl_aplicaciones` (
  `codigo_aplicacion` int(11) NOT NULL,
  `codigo_empresa` int(11) NOT NULL,
  `codigo_tipo_calificacion` int(11) NOT NULL,
  `codigo_tipo_contenido` int(11) NOT NULL,
  `nombre_aplicacion` varchar(200) NOT NULL,
  `version` varchar(45) DEFAULT NULL,
  `calificacion` float DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `cantidad_instalaciones` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aplicaciones`
--

INSERT INTO `tbl_aplicaciones` (`codigo_aplicacion`, `codigo_empresa`, `codigo_tipo_calificacion`, `codigo_tipo_contenido`, `nombre_aplicacion`, `version`, `calificacion`, `descripcion`, `fecha_publicacion`, `cantidad_instalaciones`) VALUES
(1, 1, 1, 1, 'Facebook', '12', 5, 'Lorem ipsum', '2017-10-06', 1000),
(2, 2, 2, 1, 'Whatsapp', '1', 4, 'Lorem ipsum', '2017-10-20', 111),
(3, 3, 3, 1, 'Clash of clans', '2', 5, 'Lorem ipsum', '2017-10-27', 111),
(4, 1, 1, 1, 'Waze', '2', 5, 'Lorem ipsum', '2017-10-13', 4556),
(5, 2, 2, 1, 'Pinterest', '3', 4, 'Lorem ipsum', '2017-10-13', 444);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `codigo_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`codigo_categoria`, `nombre_categoria`) VALUES
(1, 'Juegos'),
(2, 'Entretenimiendo'),
(3, 'Negocios'),
(4, 'Comunicacion'),
(5, 'Social'),
(6, 'Nueva categoria'),
(7, 'Nueva categoria'),
(8, 'Nueva categoria'),
(9, 'Nueva categoria'),
(10, 'Nueva categoria'),
(11, 'Nueva categoria'),
(12, 'Nueva categoria'),
(13, 'Nueva categoria'),
(14, 'Nueva categoria'),
(15, 'Nueva categoria'),
(16, 'Nueva categoria'),
(17, 'Nueva categoria'),
(18, 'Nueva categoria'),
(19, 'Nueva categoria'),
(20, 'Nueva categoria'),
(21, 'Nueva categoria'),
(22, 'Nueva categoria'),
(23, 'Nueva categoria'),
(24, 'Nueva categoria'),
(25, 'Nueva categoria'),
(26, 'Nueva categoria'),
(27, 'Nueva categoria');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categorias_x_aplicacion`
--

CREATE TABLE `tbl_categorias_x_aplicacion` (
  `codigo_aplicacion` int(11) NOT NULL,
  `codigo_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_categorias_x_aplicacion`
--

INSERT INTO `tbl_categorias_x_aplicacion` (`codigo_aplicacion`, `codigo_categoria`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comentarios`
--

CREATE TABLE `tbl_comentarios` (
  `codigo_comentario` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_aplicacion` int(11) NOT NULL,
  `comentario` varchar(4000) NOT NULL,
  `calificacion` float NOT NULL,
  `fecha_comentario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comentarios`
--

INSERT INTO `tbl_comentarios` (`codigo_comentario`, `codigo_usuario`, `codigo_aplicacion`, `comentario`, `calificacion`, `fecha_comentario`) VALUES
(1, 1, 1, 'Lorem ipsum', 4, '2017-10-10'),
(2, 2, 1, 'Lorem ipsum', 4, '2017-10-11'),
(3, 3, 2, 'Lorem ipsum', 3, '2017-10-11'),
(4, 2, 2, 'Lorem ipsum', 4, '2017-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_empresas`
--

CREATE TABLE `tbl_empresas` (
  `codigo_empresa` int(11) NOT NULL,
  `nombre_empresa` varchar(200) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_empresas`
--

INSERT INTO `tbl_empresas` (`codigo_empresa`, `nombre_empresa`, `direccion`, `telefono`) VALUES
(1, 'Facebook', 'No es en Honduras', '666666'),
(2, 'Empresa X', 'La Kennedy', '1111'),
(3, 'Empresa Y', 'Yamaranguila', '5555'),
(4, 'Google', 'Intibuca', '444');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipos_calificaciones`
--

CREATE TABLE `tbl_tipos_calificaciones` (
  `codigo_tipo_calificacion` int(11) NOT NULL,
  `nombre_caliificacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tipos_calificaciones`
--

INSERT INTO `tbl_tipos_calificaciones` (`codigo_tipo_calificacion`, `nombre_caliificacion`) VALUES
(1, 'Bueno'),
(2, 'Malo'),
(3, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipos_contenido`
--

CREATE TABLE `tbl_tipos_contenido` (
  `codigo_tipo_contenido` int(11) NOT NULL,
  `tipo_contenido` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tipos_contenido`
--

INSERT INTO `tbl_tipos_contenido` (`codigo_tipo_contenido`, `tipo_contenido`) VALUES
(1, 'Apto para todo public'),
(2, 'Solo pra mayores de edad'),
(3, 'Para viejitos');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `codigo_usuario` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `genero` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`codigo_usuario`, `usuario`, `nombre`, `apellido`, `fecha_nacimiento`, `genero`) VALUES
(1, 'usuario1', 'Juan', 'Lainez', '2017-10-25', 'M'),
(2, 'usuario2', 'Pedro', 'Perez', '2017-10-05', 'M'),
(3, 'usuario3', 'Maria', 'Rodriguez', '2017-10-19', 'F'),
(4, 'usuario4', 'Mario', 'Gomez', '2017-10-12', 'M'),
(5, 'usuario5', 'Luis', 'Martinez', '2017-10-05', 'M'),
(6, 'usuario6', 'Laura', 'Juarez', '2017-10-05', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aplicaciones`
--
ALTER TABLE `tbl_aplicaciones`
  ADD PRIMARY KEY (`codigo_aplicacion`),
  ADD KEY `fk_tbl_aplicaciones_tbl_empresas_idx` (`codigo_empresa`),
  ADD KEY `fk_tbl_aplicaciones_tbl_tpos_calificaciones1_idx` (`codigo_tipo_calificacion`),
  ADD KEY `fk_tbl_aplicaciones_tbl_tipos_contenido1_idx` (`codigo_tipo_contenido`);

--
-- Indexes for table `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`codigo_categoria`);

--
-- Indexes for table `tbl_categorias_x_aplicacion`
--
ALTER TABLE `tbl_categorias_x_aplicacion`
  ADD PRIMARY KEY (`codigo_aplicacion`,`codigo_categoria`),
  ADD KEY `fk_tbl_aplicaciones_has_tbl_categorias_tbl_categorias1_idx` (`codigo_categoria`),
  ADD KEY `fk_tbl_aplicaciones_has_tbl_categorias_tbl_aplicaciones1_idx` (`codigo_aplicacion`);

--
-- Indexes for table `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD PRIMARY KEY (`codigo_comentario`),
  ADD KEY `fk_tbl_comentarios_tbl_usuarios1_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_comentarios_tbl_aplicaciones1_idx` (`codigo_aplicacion`);

--
-- Indexes for table `tbl_empresas`
--
ALTER TABLE `tbl_empresas`
  ADD PRIMARY KEY (`codigo_empresa`);

--
-- Indexes for table `tbl_tipos_calificaciones`
--
ALTER TABLE `tbl_tipos_calificaciones`
  ADD PRIMARY KEY (`codigo_tipo_calificacion`);

--
-- Indexes for table `tbl_tipos_contenido`
--
ALTER TABLE `tbl_tipos_contenido`
  ADD PRIMARY KEY (`codigo_tipo_contenido`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`codigo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aplicaciones`
--
ALTER TABLE `tbl_aplicaciones`
  MODIFY `codigo_aplicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `codigo_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  MODIFY `codigo_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_empresas`
--
ALTER TABLE `tbl_empresas`
  MODIFY `codigo_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_tipos_calificaciones`
--
ALTER TABLE `tbl_tipos_calificaciones`
  MODIFY `codigo_tipo_calificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_tipos_contenido`
--
ALTER TABLE `tbl_tipos_contenido`
  MODIFY `codigo_tipo_contenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_aplicaciones`
--
ALTER TABLE `tbl_aplicaciones`
  ADD CONSTRAINT `fk_tbl_aplicaciones_tbl_empresas` FOREIGN KEY (`codigo_empresa`) REFERENCES `tbl_empresas` (`codigo_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_aplicaciones_tbl_tipos_contenido1` FOREIGN KEY (`codigo_tipo_contenido`) REFERENCES `tbl_tipos_contenido` (`codigo_tipo_contenido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_aplicaciones_tbl_tpos_calificaciones1` FOREIGN KEY (`codigo_tipo_calificacion`) REFERENCES `tbl_tipos_calificaciones` (`codigo_tipo_calificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_categorias_x_aplicacion`
--
ALTER TABLE `tbl_categorias_x_aplicacion`
  ADD CONSTRAINT `fk_tbl_aplicaciones_has_tbl_categorias_tbl_aplicaciones1` FOREIGN KEY (`codigo_aplicacion`) REFERENCES `tbl_aplicaciones` (`codigo_aplicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_aplicaciones_has_tbl_categorias_tbl_categorias1` FOREIGN KEY (`codigo_categoria`) REFERENCES `tbl_categorias` (`codigo_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD CONSTRAINT `fk_tbl_comentarios_tbl_aplicaciones1` FOREIGN KEY (`codigo_aplicacion`) REFERENCES `tbl_aplicaciones` (`codigo_aplicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_comentarios_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
