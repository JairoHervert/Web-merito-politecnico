-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-01-2024 a las 10:27:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `meritopol`
--
CREATE DATABASE IF NOT EXISTS `meritopol` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `meritopol`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`) VALUES
(1, 'Docente'),
(2, 'Administrativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `implemento`
--

CREATE TABLE `implemento` (
  `implemento_id` int(11) NOT NULL,
  `implemento_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `implemento`
--

INSERT INTO `implemento` (`implemento_id`, `implemento_nombre`) VALUES
(1, 'Silla de ruedas '),
(2, 'Bastón'),
(3, 'Muletas'),
(4, 'Andador'),
(5, 'Ortesis'),
(6, 'Ayudas para la audición'),
(7, 'Gafas y lentes especiales'),
(8, 'Dispositivos de comunicación alternativa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `institucion_id` int(11) NOT NULL,
  `institucion_nombre` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`institucion_id`, `institucion_nombre`) VALUES
(1, 'CENTRO INTERDISCIPLINARIO DE CIENCIAS DE LA SALUD (CICS), UNIDAD SANTO TOMÁS'),
(2, 'CENTRO DE INVESTIGACIÓN Y DESARROLLO DE TECNOLOGÍA DIGITAL (CITEDI)'),
(3, 'ESCUELA NACIONAL DE CIENCIAS BIOLÓGICAS (ENCB)'),
(4, 'ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD AZCAPOTZALCO'),
(5, 'ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD CULHUACÁN'),
(6, 'ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD TICOMÁN'),
(7, 'ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD ZACATENCO'),
(8, 'ESCUELA SUPERIOR DE INGENIERÍA QUÍMICA E INDUSTRIAS EXTRACTIVAS (ESIQIE)'),
(9, 'ESCUELA SUPERIOR DE INGENIERÍA Y ARQUITECTURA (ESIA) UNIDAD TECAMACHALCO'),
(10, 'ESCUELA SUPERIOR DE INGENIERÍA Y ARQUITECTURA (ESIA) UNIDAD TICOMÁN'),
(11, 'ESCUELA SUPERIOR DE INGENIERÍA Y ARQUITECTURA (ESIA) UNIDAD ZACATENCO'),
(12, 'ESCUELA SUPERIOR DE COMERCIO Y ADMINISTRACIÓN (ESCA), UNIDAD SANTO TOMÁS'),
(13, 'ESCUELA SUPERIOR DE CÓMPUTO (ESCOM) '),
(14, 'ESCUELA SUPERIOR DE COMERCIO Y ADMINISTRACIÓN (ESCA), UNIDAD TEPEPAN'),
(15, 'ESCUELA SUPERIOR DE ECONOMÍA (ESE)'),
(16, 'ESCUELA SUPERIOR DE FÍSICA Y MATEMÁTICAS (ESFM)'),
(17, 'ESCUELA SUPERIOR DE TURISMO (EST)'),
(19, 'ESCUELA SUPERIOR DE MEDICINA (ESM)'),
(20, 'ESCUELA NACIONAL DE MEDICINA Y HOMEOPATÍA (ENMH)'),
(21, 'CENTRO INTERDISCIPLINARIO DE CIENCIAS DE LA SALUD (CICS) ,UNIDAD MILPA ALTA'),
(22, 'UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA CAMPUS HIDALGO (UPIIH)'),
(23, 'UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA Y CIENCIAS SOCIALES Y ADMINISTRATIVAS (UPIICSA)'),
(24, 'UNIDAD PROFESIONAL INTERDISCIPLINARIA EN INGENIERÍA Y TECNOLOGÍAS AVANZADAS (UPIITA)'),
(25, 'CENTRO DE DESARROLLO DE PRODUCTOS BIÓTICOS (CEPROBI)'),
(26, 'CENTRO DE INVESTIGACIONES ECONÓMICAS, ADMINISTRATIVAS Y SOCIALES (CIECAS)'),
(27, 'CENTRO DE INVESTIGACIÓN EN COMPUTACIÓN (CIC)'),
(28, 'CENTRO INTERDISCIPLINARIO DE CIENCIAS MARINAS (CICIMAR)'),
(29, 'CENTRO INTERDISCIPLINARIO DE INVESTIGACIÓN PARA EL DESARROLLO INTEGRAL REGIONAL (CIIDIR), UNIDAD MICHOACÁN'),
(30, 'CENTRO INTERDISCIPLINARIO DE INVESTIGACIÓN PARA EL DESARROLLO INTEGRAL REGIONAL (CIIDIR), UNIDAD OAXACA'),
(31, 'DIRECCIÓN GENERAL'),
(32, 'ESCUELA SUPERIOR DE ENFERMERÍA Y OBSTETRICIA (ESEO)'),
(33, 'ESCUELA SUPERIOR DE INGENIERÍA TEXTIL (ESIT)'),
(34, 'UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA CAMPUS GUANAJUATO (UPIIG)'),
(35, 'UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA CAMPUS ZACATECAS (UPIIZ)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitado`
--

CREATE TABLE `invitado` (
  `invitado_id` int(11) NOT NULL,
  `invitado_nombre` varchar(150) NOT NULL,
  `implemento_invitado` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presea`
--

CREATE TABLE `presea` (
  `presea_id` int(11) NOT NULL,
  `presea_nombre` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `presea`
--

INSERT INTO `presea` (`presea_id`, `presea_nombre`) VALUES
(1, 'Diploma al Maestro Decano'),
(2, 'Diploma a la Investigación'),
(3, 'Diploma a la Cultura'),
(4, 'Diploma al Deporte'),
(5, 'Diploma de Eficiencia y Eficacia'),
(6, 'Presea \"Juan de Dios Bátiz\"'),
(7, 'Presea Carlos Vallejo Márquez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presea_usuario`
--

CREATE TABLE `presea_usuario` (
  `fk_usuario_id` int(11) NOT NULL,
  `fk_presea_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `presea_usuario`
--

INSERT INTO `presea_usuario` (`fk_usuario_id`, `fk_presea_id`) VALUES
(1954108, 1),
(1954117, 6),
(1954118, 6),
(1954119, 6),
(1954120, 6),
(1954121, 6),
(1954122, 6),
(1954123, 6),
(1954124, 6),
(1954125, 6),
(1954126, 6),
(1954127, 6),
(1954128, 6),
(1954129, 6),
(1954130, 6),
(1954131, 6),
(1954132, 6),
(1954133, 6),
(1954134, 6),
(1954135, 6),
(1954136, 6),
(1954137, 6),
(1954138, 6),
(1954139, 6),
(1954140, 6),
(1954141, 6),
(1954142, 6),
(1954143, 6),
(1954144, 6),
(1954145, 6),
(1954146, 6),
(1954147, 6),
(1954148, 6),
(1954149, 6),
(1954150, 6),
(1954151, 6),
(1954152, 7),
(1954153, 7),
(1954154, 7),
(1954155, 7),
(1954156, 7),
(1954157, 7),
(1954158, 7),
(1954159, 7),
(1954160, 7),
(1954161, 7),
(1954162, 7),
(1954163, 7),
(1954164, 7),
(1954165, 7),
(1954166, 7),
(1954167, 7),
(1954168, 7),
(1954169, 7),
(1954170, 7),
(1954171, 7),
(1954172, 7),
(1954173, 7),
(1954174, 7),
(1954175, 5),
(1954176, 5),
(1954177, 5),
(1954178, 5),
(1954179, 5),
(1954180, 5),
(1954181, 5),
(1954182, 5),
(1954183, 5),
(1954184, 5),
(1954152, 6),
(1954153, 6),
(1954154, 6),
(1954155, 6),
(1954156, 6),
(1954157, 6),
(1954158, 6),
(1954159, 6),
(1954160, 6),
(1954161, 6),
(1954162, 6),
(1954163, 6),
(1954164, 6),
(1954165, 6),
(1954166, 6),
(1954167, 6),
(1954168, 6),
(1954169, 6),
(1954170, 6),
(1954171, 6),
(1954172, 6),
(1954173, 6),
(1954174, 6),
(1954175, 6),
(1954176, 6),
(1954177, 6),
(1954178, 6),
(1954179, 6),
(1954180, 6),
(1954181, 6),
(1954182, 6),
(1954183, 6),
(1954184, 6),
(1954185, 6),
(1954186, 6),
(1954187, 6),
(1954188, 6),
(1954189, 6),
(1954190, 6),
(1954191, 6),
(1954192, 6),
(1954193, 6),
(1954194, 6),
(1954195, 6),
(1954196, 6),
(1954197, 6),
(1954198, 6),
(1954199, 6),
(1954200, 6),
(1954201, 6),
(1954202, 6),
(1954203, 6),
(1954204, 6),
(1954205, 6),
(1954206, 6),
(1954207, 6),
(1954208, 6),
(1954209, 6),
(1954210, 6),
(1954211, 6),
(1954212, 6),
(1954213, 6),
(1954214, 6),
(1954215, 6),
(1954216, 6),
(1954217, 6),
(1954218, 6),
(1954219, 6),
(1954220, 6),
(1954221, 6),
(1954222, 6),
(1954223, 6),
(1954224, 6),
(1954225, 6),
(1954226, 6),
(1954227, 6),
(1954228, 6),
(1954231, 7),
(1954232, 7),
(1954233, 7),
(920652, 3),
(1455552, 4),
(1954100, 6),
(1954101, 6),
(1954102, 6),
(1954103, 6),
(1954104, 6),
(1954105, 6),
(1954106, 6),
(1954107, 6),
(1954108, 6),
(1954109, 6),
(1954110, 6),
(1954111, 6),
(1954112, 6),
(1954113, 6),
(1954114, 6),
(1954115, 6),
(1954116, 6),
(1954099, 1),
(1954229, 7),
(1954230, 7),
(1954234, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol`) VALUES
(1, 'lector'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_curp` varchar(18) NOT NULL,
  `usuario_numero` varchar(30) DEFAULT NULL,
  `usuario_nombre` varchar(150) NOT NULL,
  `usuario_clave` varchar(500) DEFAULT NULL,
  `usuario_asistencia` varchar(50) DEFAULT 'pendiente',
  `usuario_implemento` varchar(60) DEFAULT NULL,
  `invitado_nombre` varchar(150) DEFAULT NULL,
  `invitado_implemento` varchar(60) DEFAULT NULL,
  `fk_insitucion_id` int(11) NOT NULL,
  `fk_rol_id` int(11) DEFAULT NULL,
  `fk_categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_curp`, `usuario_numero`, `usuario_nombre`, `usuario_clave`, `usuario_asistencia`, `usuario_implemento`, `invitado_nombre`, `invitado_implemento`, `fk_insitucion_id`, `fk_rol_id`, `fk_categoria_id`) VALUES
(1, 'HEMJ020805HDFRRRA7', '500', 'Jairo Jesús Hervert Martínez', '12345678', '', NULL, NULL, NULL, 13, 2, 1),
(920652, 'MMMMMMMMMMMMMMMMMM', NULL, 'Moctecumbia', '12345678', 'Pendiente', '', '', '', 13, 1, 1),
(1455552, 'donchuyddddddddddd', NULL, 'perrito', '$2y$10$cR0UB2B9GEn1DeZGy6EY7ufk41nKGTtTpbxpZB2qo.w.RFmdh0YaG', 'Pendiente', '', '', '', 3, 1, 1),
(1954099, 'MOCM540817HDFNRG02', '501', 'Miguel Montiel Cortés', '12345678', 'Pendiente', NULL, NULL, NULL, 1, 1, 1),
(1954100, 'SEGB590331HGRDDN08', '502', 'Benjamín Carlos Sedano Guadarrama', '12345678', 'Confirmada', '', '', '', 4, 1, 1),
(1954101, 'VIOG680919HDFLRB03', '503', 'Gabriel Arturo Villegas Ortiz', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 1),
(1954102, 'MEMG730324MDFRNB06', '504', 'Gabriela Leticia Mercado Mancera', '12345678', 'Negada', NULL, NULL, NULL, 4, 1, 1),
(1954103, 'AORG660307HDFRMR00', '505', 'Gerardo Irving Arjona Ramírez', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 1),
(1954104, 'VIRS620726HGRLYN04', '506', 'J. Santana Villarreal Reyes', '12345678', 'Confirmada', 'Andador', 'Adele Perez', 'Muletas', 4, 1, 1),
(1954105, 'HECA550821HDFRLN02', '507', 'José Antonio Hernández Cuellar', '12345678', 'Negada', NULL, NULL, NULL, 4, 1, 1),
(1954106, 'AUSR560615HSPGNB00', '508', 'José Rubén Aguilar Sánchez', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 1),
(1954107, 'ROHC651221MDFDRR09', '509', 'María del Carmen Rodríguez Hernández', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 1),
(1954108, 'ZARE680703MDFVMS00', '601', 'María Esther Zavala Ramírez', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 1),
(1954109, 'MACE620702HPLRRL08', '', 'Eloy Martínez Crisostomo', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 1),
(1954110, 'VASJ640923MSLLCH04', '', 'Jahel Valdés Sauceda', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 1),
(1954111, 'CAAJ610213HGTSRV02', '', 'José Javier Castro Arellano', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 1),
(1954112, 'PEPA581206HTLRNL09', NULL, 'Alejandro Pérez Pineda', '12345678', 'Pendiente', NULL, NULL, NULL, 9, 1, 1),
(1954113, 'LEGA570103HDFGTL09', NULL, 'Alfredo Legorreta Gutiérrez', '12345678', 'Pendiente', NULL, NULL, NULL, 9, 1, 1),
(1954114, 'CIAC571110HTSSRR03', NULL, 'Carlos Cisneros Araujo', '12345678', 'Pendiente', NULL, NULL, NULL, 9, 1, 1),
(1954115, 'MERG560913HDFNMS07', NULL, 'Gustavo Mendoza Romero', '12345678', 'Pendiente', NULL, NULL, NULL, 10, 1, 1),
(1954116, 'LIGL470506HVZRMR01', NULL, 'Lauro Lira Gómez', '12345678', 'Pendiente', NULL, NULL, NULL, 10, 1, 1),
(1954117, 'FOJF600402HDFLRR02', NULL, 'Francisco Flores Juárez', '12345678', 'Pendiente', NULL, NULL, NULL, 11, 1, 1),
(1954118, 'FIAE550708MNTGRV05', NULL, 'M. Evelia Figueroa Arellano', '12345678', 'Pendiente', NULL, NULL, NULL, 11, 1, 1),
(1954119, 'MEPA640519MOCNRD09', NULL, 'Aida Araceli Mendoza Pérez', '12345678', 'Pendiente', NULL, NULL, NULL, 12, 1, 1),
(1954120, 'PALA680807MDFNRM15', NULL, 'Amapola Pando De Lira', '12345678', 'Pendiente', NULL, NULL, NULL, 12, 1, 1),
(1954121, 'RAMA620613HOCMNN15', NULL, 'Antonio Ramos Mendoza', '12345678', 'Pendiente', NULL, NULL, NULL, 12, 1, 1),
(1954122, 'SOHA561001HDFLRN09', NULL, 'José Ángel Solano Hernández', '12345678', 'Pendiente', NULL, NULL, NULL, 12, 1, 1),
(1954123, 'RITL591017HDFVVS01', NULL, 'Luis Arturo Rivas Tovar', '12345678', 'Pendiente', NULL, NULL, NULL, 12, 1, 1),
(1954124, 'GABJ570701HDFLTM06', NULL, 'Jaime Galicia Betancourt', '12345678', 'Pendiente', NULL, NULL, NULL, 14, 1, 1),
(1954125, 'MEFM600511MDFNLR08', NULL, 'Martha Mendoza Flores', '12345678', 'Pendiente', NULL, NULL, NULL, 14, 1, 1),
(1954126, 'SAHE680209HDFLRN02', NULL, 'Encarnación Salinas Hernández', '12345678', 'Pendiente', NULL, NULL, NULL, 13, 1, 1),
(1954127, 'CACJ571003HGRSRS07', NULL, 'J. Jesús Casiano Cruz', '12345678', 'Pendiente', NULL, NULL, NULL, 15, 1, 1),
(1954128, 'OEPR650304HDFRNB06', NULL, 'Roberto Ortega Pineda', '12345678', 'Pendiente', NULL, NULL, NULL, 15, 1, 1),
(1954129, 'RUNA661228HDFDVD04', NULL, 'Adolfo Helmut Rudolf Navarro', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 1),
(1954130, 'AATA630305HDFLRD06', NULL, 'Adrián Alcantar Torres', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 1),
(1954131, 'HECA701009HDFRRN05', NULL, 'Antonio Hernández Cardoso', '12345678', 'Pendiente', NULL, NULL, NULL, 17, 1, 1),
(1954132, 'RIJJ710510HDFSRN02', NULL, 'Juan Carlos Ríos Juárez', '12345678', 'Pendiente', NULL, NULL, NULL, 17, 1, 1),
(1954133, 'GOLG650610MDFNGR06', NULL, 'Graciela Margarita González Lugo', '12345678', 'Pendiente', NULL, NULL, NULL, 3, 1, 1),
(1954134, 'DERF540120HDFLYR06', NULL, 'José Francisco Delgado Reyes', '12345678', 'Pendiente', NULL, NULL, NULL, 3, 1, 1),
(1954135, 'GACE630530MDFLCL09', NULL, 'Elvia Galindo Caciano', '12345678', 'Pendiente', NULL, NULL, NULL, 19, 1, 1),
(1954136, 'RACG631021HDFMLR05', NULL, 'Gerardo Ramírez Colín', '12345678', 'Pendiente', NULL, NULL, NULL, 19, 1, 1),
(1954137, 'LEFA680806MDFSRD01', NULL, 'Adriana Cecilia Leos Franco', '12345678', 'Pendiente', NULL, NULL, NULL, 20, 1, 1),
(1954138, 'VINL700118MDFLJR02', NULL, 'Laura Villagomez Nájera', '12345678', 'Pendiente', NULL, NULL, NULL, 20, 1, 1),
(1954139, 'RAMD630221MMCMRM05', NULL, 'Dominga Irene Ramírez Martínez', '12345678', 'Pendiente', NULL, NULL, NULL, 21, 1, 1),
(1954140, 'EAEA600529HDFSSD07', NULL, 'Adolfo Escamilla Esquivel', '12345678', 'Pendiente', NULL, NULL, NULL, 22, 1, 1),
(1954141, 'HEGD570804HHGRRM01', NULL, 'Domingo Hernández García', '12345678', 'Pendiente', NULL, NULL, NULL, 22, 1, 1),
(1954142, 'LEOJ640906HDFDRM00', NULL, 'Jaime Ledesma Ortiz', '12345678', 'Pendiente', NULL, NULL, NULL, 22, 1, 1),
(1954143, 'BUMA590409HDFNZB02', NULL, 'Abel Bueno Meza', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 1),
(1954144, 'SEMA670429HDFRNL06', NULL, 'Alberto Serna Méndez', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 1),
(1954145, 'ZAIA520118HDFRSL09', NULL, 'Alfonso Leobardo Zarco Istiga', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 1),
(1954146, 'LEMA730605HDFNLN09', NULL, 'Ángel León Maldonado', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 1),
(1954147, 'GARA550902HDFRSN00', NULL, 'Antonio García Rosas', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 1),
(1954148, 'CUXC660910HDFRXR05', NULL, 'Carlos Cruz ', '12345678', 'Pendiente', NULL, NULL, NULL, 24, 1, 1),
(1954149, 'BIME690211HDFRRM07', NULL, 'Emilio Nicéforo Brito Martínez', '12345678', 'Pendiente', NULL, NULL, NULL, 24, 1, 1),
(1954150, 'PEHJ700404HDFRRR06', NULL, 'Jorge Pérez Hernández', '12345678', 'Pendiente', NULL, NULL, NULL, 24, 1, 1),
(1954151, 'GOSM671212HMCNRN08', NULL, 'Manuel González Sarabia', '12345678', 'Pendiente', NULL, NULL, NULL, 24, 1, 1),
(1954152, 'AECS450126MDFRRF05', '333', 'Sofia Arreola Cervantes', '12345678', 'Pendiente', NULL, NULL, NULL, 5, 1, 1),
(1954153, 'ROMC480406HDFDTR05', NULL, 'Carlos Rodríguez Mota', '12345678', 'Pendiente', NULL, NULL, NULL, 7, 1, 1),
(1954154, 'GAOD490527HDFLRN03', NULL, 'Daniel Galindo Ortega', '12345678', 'Pendiente', NULL, NULL, NULL, 7, 1, 1),
(1954155, 'AOCE491013HVZCRD04', NULL, 'Eduardo Acosta Cartas', '12345678', 'Pendiente', NULL, NULL, NULL, 7, 1, 1),
(1954156, 'MASA521130MDFRLN01', NULL, 'Andrea Marmol Salazar', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 1),
(1954157, 'AEEE480426MDFRSL04', NULL, 'Elsa Miriam Arce Estrada', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 1),
(1954158, 'GAEJ420514HDFRSR03', NULL, 'Jorge García Espinosa', '12345678', 'Pendiente', NULL, NULL, NULL, 9, 1, 1),
(1954159, 'DIBM480303HGRZTR04', NULL, 'Marino Bertín Díaz Bautista', '12345678', 'Pendiente', NULL, NULL, NULL, 9, 1, 1),
(1954160, 'ROGE430328HHGJRS00', NULL, 'Esteban Luciano Rojas Guerrero', '12345678', 'Pendiente', NULL, NULL, NULL, 11, 1, 1),
(1954161, 'MOGM420815HDFRTR07', NULL, 'Mario Fortino Morales Gutiérrez', '12345678', 'Pendiente', NULL, NULL, NULL, 11, 1, 1),
(1954162, 'GOGE530301HSRNND07', NULL, 'Edmundo González González', '12345678', 'Pendiente', NULL, NULL, NULL, 12, 1, 1),
(1954163, 'UUVR530528MGRNZS05', NULL, 'Rosaura Unzueta Vázquez', '12345678', 'Pendiente', NULL, NULL, NULL, 14, 1, 1),
(1954164, 'GOCC461020HDFDMR05', NULL, 'Carlos Mario Godínez Camacho', '12345678', 'Pendiente', NULL, NULL, NULL, 15, 1, 1),
(1954165, 'VEZF450706HSLGTR04', NULL, 'Fernando Isaías Vega Zatarain', '12345678', 'Pendiente', NULL, NULL, NULL, 15, 1, 1),
(1954166, 'TOSL490610HDFVNS01', NULL, 'Luis Manuel Tovar Sánchez', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 1),
(1954167, 'SAFR500926HNELGM09', NULL, 'Ramón Sebastián Salat Figols', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 1),
(1954168, 'RERH490709HDFGVC03', NULL, 'Héctor Regalado Rivas', '12345678', 'Pendiente', NULL, NULL, NULL, 17, 1, 1),
(1954169, 'NECD511126MDFRRR08', NULL, 'Doris Neri Cortés', '12345678', 'Pendiente', NULL, NULL, NULL, 3, 1, 1),
(1954170, 'AARA471001MDFNDN01', NULL, 'Angelina Anaya Rodríguez', '12345678', 'Pendiente', NULL, NULL, NULL, 19, 1, 1),
(1954171, 'LALM530506HDFNDN05', NULL, 'Manuel Landeros Ledesma', '12345678', 'Pendiente', NULL, NULL, NULL, 20, 1, 1),
(1954172, 'PIPE480622MMCLDG09', NULL, 'Ma. Eugenia Pliego Padilla', '12345678', 'Pendiente', NULL, NULL, NULL, 32, 1, 1),
(1954173, 'RIGA491006HDFVRL03', NULL, 'Alfonso Rivas García', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 1),
(1954174, 'VATF490925HCLZRR00', NULL, 'Fernando Vázquez Torres', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 1),
(1954175, 'OIGL600516MDFRMC09', '222', 'Lucina Ortiz Gómez', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 2),
(1954176, 'SOAT790617MOCRRR00', NULL, 'Teresa Soriano Aragón', '12345678', 'Pendiente', NULL, NULL, NULL, 5, 1, 2),
(1954177, 'BELA640913MDFRPM09', NULL, 'Amada Gabriela Brenes López', '12345678', 'Pendiente', NULL, NULL, NULL, 6, 1, 2),
(1954178, 'FEMC800724MDFRNR02', NULL, 'Cristina Fernández Manrique', '12345678', 'Pendiente', NULL, NULL, NULL, 6, 1, 2),
(1954179, 'MIEC810529MQTJSC01', NULL, 'Cecilia Mijangos Escobedo', '12345678', 'Pendiente', NULL, NULL, NULL, 7, 1, 2),
(1954180, 'MADI841121MDFRLN00', NULL, 'Ingrid Mariel Martínez Delgadillo', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 2),
(1954181, 'ZAMN751111HDFMNC05', NULL, 'Nicolás Zamora Mendoza', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 2),
(1954182, 'MELR820908HDFDZB02', NULL, 'Roberto Medellín Lozano', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 2),
(1954183, 'EERA720108MMCCVN06', NULL, 'Ana Lilia Echeverría Rivera', '12345678', 'Pendiente', NULL, NULL, NULL, 9, 1, 2),
(1954184, 'RELC840724HDFYRR07', NULL, 'Cristian Evaristo Reyes Lara', '12345678', 'Pendiente', NULL, NULL, NULL, 9, 1, 2),
(1954185, 'VXGA751018MDFRNN05', '2345', 'Ana María Vargas González', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 2),
(1954186, 'OERA620708HDFRDN07', NULL, 'Antonio Orendain Rodríguez', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 2),
(1954187, 'LEQA720503MDFYNR08', NULL, 'Ariana Minerva Leyva Quintana', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 2),
(1954188, 'RUDE670722MDFBRS00', NULL, 'Esther Rubio Durán', '12345678', 'Pendiente', NULL, NULL, NULL, 4, 1, 2),
(1954189, 'CATB571204MDFSPL09', NULL, 'Blanca Estela Castillo Tapolla', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 2),
(1954190, 'AUGI680512MGTGTR04', NULL, 'Irma Aguilar Gutiérrez', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 2),
(1954191, 'OARA651230HDFRYL09', NULL, 'José Alfonso Ordaz Reyes', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 2),
(1954192, 'PAMA710117HDFRNL03', NULL, 'José Alfredo Prado Monsalvo', '12345678', 'Pendiente', NULL, NULL, NULL, 16, 1, 2),
(1954193, 'MUCD660317MTSCSL03', NULL, 'Delia Patricia Muciño Castillo', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 2),
(1954194, 'HECA690925HTLRML06', NULL, 'José Alberto Hernández Campech', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 2),
(1954195, 'GAMJ710109MDFRNN04', NULL, 'Juana García Monroy', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 2),
(1954196, 'YACJ720904MDFXSN02', NULL, 'Juana María Yáñez Castro', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 2),
(1954197, 'AULC650915HHGGPR05', NULL, 'Carlos Aguilar López', '12345678', 'Pendiente', NULL, NULL, NULL, 33, 1, 2),
(1954198, 'GORJ710903HDFNDR09', NULL, 'Jorge Ángel González Rodríguez', '12345678', 'Pendiente', NULL, NULL, NULL, 33, 1, 2),
(1954199, 'RAAL680121MDFMLS05', NULL, 'María Luisa Ramos Altamirano', '12345678', 'Pendiente', NULL, NULL, NULL, 33, 1, 2),
(1954200, 'CARC610819HDFRSR03', NULL, 'Carlos Carrillo Ríos', '12345678', 'Pendiente', NULL, NULL, NULL, 9, 1, 2),
(1954201, 'COPC690614MDFRLL06', NULL, 'Claudia Cortés Palacios', '12345678', 'Pendiente', NULL, NULL, NULL, 9, 1, 2),
(1954202, 'MORA740726MDFNMN01', NULL, 'Ana Aurora Montoya Ramírez', '12345678', 'Pendiente', NULL, NULL, NULL, 10, 1, 2),
(1954203, 'QURJ690813MDFXXS08', NULL, 'Josefina Angélica Quiñones Roa', '12345678', 'Pendiente', NULL, NULL, NULL, 10, 1, 2),
(1954204, 'OOMM731214MDFLRY07', NULL, 'Mayra Maura Olloqui Mora', '12345678', 'Pendiente', NULL, NULL, NULL, 11, 1, 2),
(1954205, 'CORM700326MDFNMR02', NULL, 'Mireya del Carmen Conde Romero', '12345678', 'Pendiente', NULL, NULL, NULL, 11, 1, 2),
(1954206, 'VAAA680425HDFLGL08', NULL, 'Alejandro Valencia Aguilar', '12345678', 'Pendiente', NULL, NULL, NULL, 12, 1, 2),
(1954207, 'GOGJ681012HDFMLS00', NULL, 'Jesús Gómez Galicia', '12345678', 'Pendiente', NULL, NULL, NULL, 12, 1, 2),
(1954208, 'RIHG640217MBCXRD01', NULL, 'María Guadalupe Riou Hernández', '12345678', 'Pendiente', NULL, NULL, NULL, 12, 1, 2),
(1954209, 'GOLC730519MDFNZL09', NULL, 'Claudia Guillermina González Lozada', '12345678', 'Pendiente', NULL, NULL, NULL, 14, 1, 2),
(1954210, 'PABE551102MGRLND08', NULL, 'Eudoxia Paulino Benítez', '12345678', 'Pendiente', NULL, NULL, NULL, 14, 1, 2),
(1954211, 'ROPF710120MDFDZB09', NULL, 'Fabiola Verónica Rodríguez Pozos', '12345678', 'Pendiente', NULL, NULL, NULL, 14, 1, 2),
(1954212, 'CUFG610423MTLRLR09', NULL, 'Georgina Elena Cruz Flores', '12345678', 'Pendiente', NULL, NULL, NULL, 14, 1, 2),
(1954213, 'SAVB720119MDFNRL08', NULL, 'Blanca Elena Sandoval Vargas', '12345678', 'Pendiente', NULL, NULL, NULL, 15, 1, 2),
(1954214, 'VASR651116HDFLNC04', NULL, 'Ricardo Valencia Sánchez', '12345678', 'Pendiente', NULL, NULL, NULL, 15, 1, 2),
(1954215, 'PAJV690711MDFRMR02', NULL, 'Verónica Paredes Jiménez', '12345678', 'Pendiente', NULL, NULL, NULL, 17, 1, 2),
(1954216, 'SUOR691207HDFRLG04', NULL, 'Rogelio Suárez Olvera', '12345678', 'Pendiente', NULL, NULL, NULL, 3, 1, 2),
(1954217, 'GURA690419MDFLDL04', NULL, 'Alicia Guel Rodríguez', '12345678', 'Pendiente', NULL, NULL, NULL, 19, 1, 2),
(1954218, 'MEBC660713HDFJRS03', NULL, 'César Miguel Mejia Barradas', '12345678', 'Pendiente', NULL, NULL, NULL, 19, 1, 2),
(1954219, 'NALG601122HDFVGR00', NULL, 'Gerardo Nava Lugo', '12345678', 'Pendiente', NULL, NULL, NULL, 19, 1, 2),
(1954220, 'GUGP470524MGTTZL14', NULL, 'Ma. Paula Gutiérrez Guzmán', '12345678', 'Pendiente', NULL, NULL, NULL, 32, 1, 2),
(1954221, 'EESO710420HDFSSS01', NULL, 'Óscar Israel Espejel Sosa', '12345678', 'Pendiente', NULL, NULL, NULL, 21, 1, 2),
(1954222, 'CAAP700618MHGSLL05', NULL, 'Paula Castelán Alfaro', '12345678', 'Pendiente', NULL, NULL, NULL, 21, 1, 2),
(1954223, 'EEDP710226HDFVGD05', NULL, 'Pedro Luis Everardo Degan', '12345678', 'Pendiente', NULL, NULL, NULL, 21, 1, 2),
(1954224, 'AAVP620827MDFLLT01', NULL, 'María Patricia Alarcón Velázquez', '12345678', 'Pendiente', NULL, NULL, NULL, 1, 1, 2),
(1954225, 'OEAE730327HDFTRD01', NULL, 'Eduardo Otero Arce', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 2),
(1954226, 'SORJ481225HDFSMR07', NULL, 'Jorge Sosa Ramírez', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 2),
(1954227, 'AEPL670722HDFRLS03', NULL, 'José Luis Arelio Palma', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 2),
(1954228, 'CURT690225MDFRDR08', NULL, 'María Teresa Cruz Rodríguez', '12345678', 'Pendiente', NULL, NULL, NULL, 24, 1, 2),
(1954229, 'RUOP550505HDFZRD06', NULL, 'Pedro Ruiz Ordorica', '12345678', 'Pendiente', NULL, NULL, NULL, 11, 1, 2),
(1954230, 'SOAF560529HDFSLR04', NULL, 'Francisco Sosa Alonso', '12345678', 'Pendiente', NULL, NULL, NULL, 8, 1, 2),
(1954231, 'GAZM520801HDFSMG05', NULL, 'Miguel Ángel Gasca Zempoalteca', '12345678', 'Pendiente', NULL, NULL, NULL, 33, 1, 2),
(1954232, 'LEAD520511MDFGGL05', NULL, 'Dolores Legorreta Aguilar', '12345678', 'Pendiente', NULL, NULL, NULL, 19, 1, 2),
(1954233, 'MASD501113HDFRNG08', NULL, 'Diego Martínez Sánchez', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 2),
(1954234, 'MOMV480203HPLRRC06', NULL, 'Víctor Morales Marín', '12345678', 'Pendiente', NULL, NULL, NULL, 23, 1, 2),
(1954235, 'HHHHHHHHHHHHHHHHHH', NULL, 'Junior H', '12345678', 'Pendiente', NULL, NULL, NULL, 13, 2, 2);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_usuarios` (
`usuario_id` int(11)
,`usuario_curp` varchar(18)
,`usuario_numero` varchar(30)
,`usuario_nombre` varchar(150)
,`institucion_nombre` varchar(350)
,`categoria_nombre` varchar(50)
,`presea_nombre` varchar(350)
,`usuario_asistencia` varchar(50)
,`usuario_implemento` varchar(60)
,`invitado_nombre` varchar(150)
,`invitado_implemento` varchar(60)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_usuarios_lya`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_usuarios_lya` (
`usuario_id` int(11)
,`usuario_curp` varchar(18)
,`usuario_numero` varchar(30)
,`usuario_nombre` varchar(150)
,`institucion_nombre` varchar(350)
,`categoria_nombre` varchar(50)
,`presea_nombre` varchar(350)
,`usuario_asistencia` varchar(50)
,`usuario_implemento` varchar(60)
,`invitado_nombre` varchar(150)
,`invitado_implemento` varchar(60)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_usuarios`
--
DROP TABLE IF EXISTS `vista_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `vista_usuarios`  AS SELECT `usuario`.`usuario_id` AS `usuario_id`, `usuario`.`usuario_curp` AS `usuario_curp`, `usuario`.`usuario_numero` AS `usuario_numero`, `usuario`.`usuario_nombre` AS `usuario_nombre`, `institucion`.`institucion_nombre` AS `institucion_nombre`, `categoria`.`categoria_nombre` AS `categoria_nombre`, `presea`.`presea_nombre` AS `presea_nombre`, `usuario`.`usuario_asistencia` AS `usuario_asistencia`, `usuario`.`usuario_implemento` AS `usuario_implemento`, `usuario`.`invitado_nombre` AS `invitado_nombre`, `usuario`.`invitado_implemento` AS `invitado_implemento` FROM ((((`usuario` join `institucion` on(`usuario`.`fk_insitucion_id` = `institucion`.`institucion_id`)) join `categoria` on(`usuario`.`fk_categoria_id` = `categoria`.`categoria_id`)) left join `presea_usuario` on(`usuario`.`usuario_id` = `presea_usuario`.`fk_usuario_id`)) left join `presea` on(`presea_usuario`.`fk_presea_id` = `presea`.`presea_id`)) WHERE `usuario`.`fk_rol_id` <> 2 ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_usuarios_lya`
--
DROP TABLE IF EXISTS `vista_usuarios_lya`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `vista_usuarios_lya`  AS SELECT `usuario`.`usuario_id` AS `usuario_id`, `usuario`.`usuario_curp` AS `usuario_curp`, `usuario`.`usuario_numero` AS `usuario_numero`, `usuario`.`usuario_nombre` AS `usuario_nombre`, `institucion`.`institucion_nombre` AS `institucion_nombre`, `categoria`.`categoria_nombre` AS `categoria_nombre`, `presea`.`presea_nombre` AS `presea_nombre`, `usuario`.`usuario_asistencia` AS `usuario_asistencia`, `usuario`.`usuario_implemento` AS `usuario_implemento`, `usuario`.`invitado_nombre` AS `invitado_nombre`, `usuario`.`invitado_implemento` AS `invitado_implemento` FROM ((((`usuario` join `institucion` on(`usuario`.`fk_insitucion_id` = `institucion`.`institucion_id`)) join `categoria` on(`usuario`.`fk_categoria_id` = `categoria`.`categoria_id`)) left join `presea_usuario` on(`usuario`.`usuario_id` = `presea_usuario`.`fk_usuario_id`)) left join `presea` on(`presea_usuario`.`fk_presea_id` = `presea`.`presea_id`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `implemento`
--
ALTER TABLE `implemento`
  ADD PRIMARY KEY (`implemento_id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`institucion_id`);

--
-- Indices de la tabla `invitado`
--
ALTER TABLE `invitado`
  ADD PRIMARY KEY (`invitado_id`);

--
-- Indices de la tabla `presea`
--
ALTER TABLE `presea`
  ADD PRIMARY KEY (`presea_id`);

--
-- Indices de la tabla `presea_usuario`
--
ALTER TABLE `presea_usuario`
  ADD KEY `fk_usuario_id` (`fk_usuario_id`),
  ADD KEY `fk_presea_id` (`fk_presea_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `fk_insitucion_id` (`fk_insitucion_id`),
  ADD KEY `fk_rol_id` (`fk_rol_id`),
  ADD KEY `fk_categoria_id` (`fk_categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `institucion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `invitado`
--
ALTER TABLE `invitado`
  MODIFY `invitado_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `presea`
--
ALTER TABLE `presea`
  MODIFY `presea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1954236;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `presea_usuario`
--
ALTER TABLE `presea_usuario`
  ADD CONSTRAINT `presea_usuario_ibfk_1` FOREIGN KEY (`fk_presea_id`) REFERENCES `presea` (`presea_id`),
  ADD CONSTRAINT `presea_usuario_ibfk_2` FOREIGN KEY (`fk_usuario_id`) REFERENCES `usuario` (`usuario_id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fk_categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`fk_rol_id`) REFERENCES `rol` (`rol_id`),
  ADD CONSTRAINT `usuario_ibfk_5` FOREIGN KEY (`fk_insitucion_id`) REFERENCES `institucion` (`institucion_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
