-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `proyecto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `proyecto`;

DROP TABLE IF EXISTS `material_bibliografico`;
CREATE TABLE `material_bibliografico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL DEFAULT 'Sin DescripciÃ³n',
  `foto` varchar(50) DEFAULT NULL,
  `copias` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `material_bibliografico` (`id`, `nombre`, `autor`, `descripcion`, `foto`, `copias`) VALUES
(3,	'Don Quijote De La Mancha',	'Miguel De Cervantes',	'Literatura EspaÃ±ola',	'DonQuijote.jpg',	3),
(8,	'El Alquimista',	'Paulo Coelho',	'Desarrollo y Crecimiento personal',	'Alquimista.jpg',	0),
(9,	'chiguinadas',	'romero',	'hrloow',	'maria.jpg',	0),
(11,	'principios de admon',	'james stoner',	'editorial mgrw-hil',	'',	0),
(12,	'gggggg',	'qqqwqw',	'asdsdds',	'',	0),
(13,	'ihf3i.lrf3qrgfj3rgfkj',	'wrfg,3k',	'rgvk.eg',	'',	0),
(14,	'perros',	'dogui',	'perritos jugando',	'',	0),
(15,	'almarte',	'fernando burbano',	'nunca en mic camino',	'',	0),
(16,	'were',	'sdfsd',	'sfsdf',	'',	0);

DROP TABLE IF EXISTS `multa`;
CREATE TABLE `multa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prestamo` int(11) NOT NULL,
  `valor_sancion` int(50) NOT NULL DEFAULT '0',
  `motivo` text,
  PRIMARY KEY (`id`),
  KEY `id_prestamo` (`id_prestamo`),
  CONSTRAINT `multa_ibfk_1` FOREIGN KEY (`id_prestamo`) REFERENCES `prestamo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE `prestamo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_material_bibliografico` int(11) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_fin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_material_bibliografico` (`id_material_bibliografico`),
  CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`id_material_bibliografico`) REFERENCES `material_bibliografico` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `prestamo` (`id`, `id_usuario`, `id_material_bibliografico`, `fecha_inicio`, `fecha_fin`) VALUES
(10,	5,	3,	'2020-08-11 20:20:09',	'2020-08-12 05:00:00'),
(11,	5,	3,	'2020-08-11 20:25:38',	'2020-08-11 20:25:30'),
(12,	5,	3,	'2020-08-11 20:27:41',	'2020-08-11 20:27:33'),
(13,	5,	3,	'2020-08-11 21:02:13',	'2020-08-11 20:34:18'),
(14,	5,	3,	'2020-08-11 21:04:07',	'2020-08-11 21:03:58'),
(15,	5,	3,	'2020-08-11 21:14:23',	'2020-08-11 21:14:17');

DROP TABLE IF EXISTS `prolongar`;
CREATE TABLE `prolongar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prestamo` int(11) NOT NULL,
  `fecha_fin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `motivo` text,
  PRIMARY KEY (`id`),
  KEY `id_prestamo` (`id_prestamo`),
  CONSTRAINT `prolongar_ibfk_1` FOREIGN KEY (`id_prestamo`) REFERENCES `prestamo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `solicitud`;
CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_material_bibliografico` int(11) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_fin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` enum('Aprobado','Rechazado','Pendiente') NOT NULL DEFAULT 'Pendiente',
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_material_bibliografico` (`id_material_bibliografico`),
  CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`id_material_bibliografico`) REFERENCES `material_bibliografico` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `solicitud` (`id`, `id_usuario`, `id_material_bibliografico`, `fecha_inicio`, `fecha_fin`, `estado`) VALUES
(9,	5,	3,	'2020-08-21 13:40:49',	'2020-08-21 13:40:49',	'Rechazado');

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` enum('Administrativo','Alumno') NOT NULL DEFAULT 'Alumno',
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `documento` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`id`, `tipo`, `nombres`, `apellidos`, `documento`, `email`, `foto`) VALUES
(2,	'Administrativo',	'Chivo Antonio',	'',	'1234',	'chivo@gmail.com',	'chivo.jpg'),
(3,	'Alumno',	'Carlos',	'',	'1112791454',	'carlos@gmail.com',	'nicolas.jpg'),
(4,	'Alumno',	'Camilo',	'',	'1112791676',	'camilo@gmail.com',	'chocolo.jpg'),
(5,	'Alumno',	'Andres',	'',	'1112791787',	'andres@gmail.com',	''),
(6,	'Alumno',	'Carmen',	'',	'1112791998',	'camen@gmail.com',	''),
(7,	'Alumno',	'Yuliana',	'',	'1112791232',	'yuliana@gmail.com',	''),
(8,	'Alumno',	'Carolina',	'',	'1112791555',	'carolina@gmail.com',	''),
(9,	'Alumno',	'Sebastian',	'',	'1113565784',	'sebastian@gmail.com',	''),
(10,	'Alumno',	'Silvana',	'',	'1112678533',	'silvana@gmail.com',	''),
(11,	'Alumno',	'Maria',	'',	'31427809',	'maria@gmail.com',	''),
(12,	'Alumno',	'Robert',	'Sanchez',	'1123567890',	'robert@gmail.com',	''),
(13,	'Alumno',	'Alfonso',	'',	'1112456456',	'alfonso@gmail.com',	''),
(14,	'Alumno',	'Jeanpaul',	'',	'32263271',	'jeanpaul@gmail.com',	''),
(15,	'Alumno',	'Yurany',	'',	'31289193',	'yurany@gmail.com',	''),
(16,	'Alumno',	'Maicol',	'',	'1112892456',	'maicol@gmail.com',	''),
(17,	'Alumno',	'Karime',	'',	'1112678345',	'karime@gmail.com',	''),
(18,	'Alumno',	'Maira',	'',	'1120982345',	'maira@gmail.com',	''),
(19,	'Alumno',	'Braulio',	'',	'34532359',	'braulio@gmail.com',	''),
(20,	'Alumno',	'Estefan',	'',	'1112756487',	'estefan@gmail.com',	''),
(21,	'Alumno',	'Mauricio',	'',	'1112092587',	'mauricio@gmail.com',	''),
(22,	'Alumno',	'Salomon',	'',	'34905323',	'salomon@gmail.com',	'');

-- 2020-10-14 19:46:45
