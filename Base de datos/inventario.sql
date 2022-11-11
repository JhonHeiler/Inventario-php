-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2022 a las 13:05:36
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
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'Escolares'),
(2, 'Utensilios de limpieza '),
(4, 'Aseo'),
(5, 'Deportes'),
(6, 'Manualidades'),
(7, 'Informática'),
(8, 'casa'),
(9, 'papel'),
(10, 'casa'),
(11, 'motor'),
(13, 'eléctrico '),
(14, 'sonido'),
(15, 'celular '),
(16, 'dibujo'),
(17, 'informativo '),
(18, 'prueba'),
(19, 'enfermería'),
(20, 'música  '),
(21, 'herramientas '),
(22, 'documento'),
(23, 'J&R'),
(27, 'Benito'),
(28, 'escoba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `contenido_id` int(11) NOT NULL,
  `modulo` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Chocó'),
(4, 'Huila'),
(8, 'Bolívar'),
(9, 'Atlantico'),
(10, 'Arauca'),
(11, 'Boyacá'),
(12, 'Caldas'),
(13, 'Caquetá'),
(14, 'Casanare'),
(15, 'Cauca'),
(16, 'Cesar'),
(17, 'Córdoba'),
(18, 'Cundinamarca'),
(19, 'Guainía'),
(20, 'Guaviare'),
(21, 'La Guajira'),
(22, 'Magdalena'),
(23, 'Meta'),
(24, 'Nariño'),
(25, 'Norte de Santander'),
(26, 'Putumayo'),
(27, 'Quindío'),
(28, 'Risaralda'),
(29, 'San Andrés y Providencia'),
(30, 'Santander'),
(31, 'Sucre'),
(32, 'Tolima'),
(33, 'Valle del Cauca'),
(34, 'Vaupés'),
(35, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `id_devolucion` int(11) NOT NULL,
  `obse` varchar(50) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `responsable` int(11) NOT NULL,
  `fecha_de` date NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega`
--

CREATE TABLE `entrega` (
  `id_entrega` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha_ad` date NOT NULL,
  `fecha_en` date NOT NULL,
  `respon` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `cargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entrega`
--

INSERT INTO `entrega` (`id_entrega`, `id_producto`, `fecha_ad`, `fecha_en`, `respon`, `cantidad`, `cargo`) VALUES
(30, 24, '2022-11-13', '2022-12-02', 1, 600, 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificacion`
--

CREATE TABLE `identificacion` (
  `id_identificacion` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `abre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `identificacion`
--

INSERT INTO `identificacion` (`id_identificacion`, `nombre`, `abre`) VALUES
(1, 'Tarjeta de identidad', 'TI'),
(2, 'Cédula de ciudadanía ', 'CC'),
(3, 'Cédula de Extranjería', 'CE'),
(5, 'Registro Civil', 'RC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`) VALUES
(26, 'rimax');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo_accion`
--

CREATE TABLE `modulo_accion` (
  `id_modulo_accion` int(11) NOT NULL,
  `modulo1` varchar(80) NOT NULL,
  `accion1` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulo_accion`
--

INSERT INTO `modulo_accion` (`id_modulo_accion`, `modulo1`, `accion1`) VALUES
(29, 'categoria', 'agregar'),
(32, 'categoria', 'cargar-datos'),
(31, 'categoria', 'eliminar'),
(28, 'categoria', 'listar'),
(30, 'categoria', 'modificar'),
(27, 'categoria', 'ver'),
(123, 'contactenos', 'ver'),
(140, 'contenido', 'agregar'),
(143, 'contenido', 'cargar-datos'),
(142, 'contenido', 'eliminar'),
(139, 'contenido', 'listar'),
(141, 'contenido', 'modificar'),
(138, 'contenido', 'ver'),
(35, 'departamento', 'agregar'),
(38, 'departamento', 'cargar-datos'),
(37, 'departamento', 'eliminar'),
(34, 'departamento', 'listar'),
(36, 'departamento', 'modificar'),
(33, 'departamento', 'ver'),
(49, 'devolucion', 'agregar'),
(52, 'devolucion', 'cargar-datos'),
(51, 'devolucion', 'eliminar'),
(48, 'devolucion', 'listar'),
(50, 'devolucion', 'modificar'),
(47, 'devolucion', 'ver'),
(41, 'entrega', 'agregar'),
(46, 'entrega', 'cargar-datos'),
(43, 'entrega', 'eliminar'),
(40, 'entrega', 'listar'),
(42, 'entrega', 'modificar'),
(39, 'entrega', 'ver'),
(55, 'identificacion', 'agregar'),
(58, 'identificacion', 'cargar-datos'),
(57, 'identificacion', 'eliminar'),
(54, 'identificacion', 'listar'),
(56, 'identificacion', 'modificar'),
(53, 'identificacion', 'ver'),
(125, 'inicio', 'inicio'),
(61, 'marca', 'agregar'),
(160, 'marca', 'arlex'),
(64, 'marca', 'cargar-datos'),
(63, 'marca', 'eliminar'),
(60, 'marca', 'listar'),
(62, 'marca', 'modificar'),
(59, 'marca', 'ver'),
(120, 'mision', 'mision'),
(114, 'modaccion', 'agregar'),
(118, 'modaccion', 'cargar-datos'),
(117, 'modaccion', 'eliminar'),
(113, 'modaccion', 'listar'),
(116, 'modaccion', 'modificar'),
(112, 'modaccion', 'ver'),
(67, 'municipio', 'agregar'),
(70, 'municipio', 'cargar-datos'),
(69, 'municipio', 'eliminar'),
(66, 'municipio', 'listar'),
(68, 'municipio', 'modificar'),
(65, 'municipio', 'ver'),
(102, 'permisorol', 'agregar'),
(105, 'permisorol', 'cargar-datos'),
(104, 'permisorol', 'eliminar'),
(101, 'permisorol', 'listar'),
(103, 'permisorol', 'modificar'),
(100, 'permisorol', 'ver'),
(73, 'persona', 'agregar'),
(76, 'persona', 'cargar-datos'),
(75, 'persona', 'eliminar'),
(72, 'persona', 'listar'),
(74, 'persona', 'modificar'),
(71, 'persona', 'ver'),
(108, 'personarol', 'agregar'),
(111, 'personarol', 'cargar-datos'),
(110, 'personarol', 'eliminar'),
(107, 'personarol', 'listar'),
(109, 'personarol', 'modificar'),
(106, 'personarol', 'ver'),
(79, 'producto', 'agregar'),
(82, 'producto', 'cargar-datos'),
(81, 'producto', 'eliminar'),
(78, 'producto', 'listar'),
(80, 'producto', 'modificar'),
(77, 'producto', 'ver'),
(85, 'proveedores', 'agregar'),
(89, 'proveedores', 'cargar-datos'),
(88, 'proveedores', 'eliminar'),
(84, 'proveedores', 'listar'),
(86, 'proveedores', 'modificar'),
(83, 'proveedores', 'ver'),
(158, 'prueba', 'probar'),
(151, 'reporte10', 'mostrar'),
(150, 'reporte10', 'ver'),
(153, 'reporte11', 'mostrar'),
(152, 'reporte11', 'ver'),
(155, 'reporte12', 'mostrar'),
(154, 'reporte12', 'ver'),
(157, 'reporte13', 'mostrar'),
(156, 'reporte13', 'ver'),
(129, 'reporte2', 'mostrar'),
(128, 'reporte2', 'ver'),
(131, 'reporte3', 'mostrar'),
(130, 'reporte3', 'ver'),
(133, 'reporte4', 'mostrar'),
(132, 'reporte4', 'ver'),
(135, 'reporte5', 'mostrar'),
(134, 'reporte5', 'ver'),
(137, 'reporte6', 'mostrar'),
(136, 'reporte6', 'ver'),
(145, 'reporte7', 'mostrar'),
(144, 'reporte7', 'ver'),
(147, 'reporte8', 'mostrar'),
(146, 'reporte8', 'ver'),
(149, 'reporte9', 'mostrar'),
(148, 'reporte9', 'ver'),
(96, 'rol', 'agregar'),
(99, 'rol', 'cargar-datos'),
(98, 'rol', 'eliminar'),
(95, 'rol', 'listar'),
(97, 'rol', 'modificar'),
(94, 'rol', 'ver'),
(127, 'rproducto', 'mostrar'),
(126, 'rproducto', 'ver'),
(93, 'sexo', 'agregar'),
(92, 'sexo', 'cargar-datos'),
(121, 'sexo', 'eliminar'),
(91, 'sexo', 'listar'),
(122, 'sexo', 'modificar'),
(90, 'sexo', 'ver'),
(124, 'vision', 'ver');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `nombre`, `id_departamento`) VALUES
(1, 'Leticia', 1),
(2, 'Bello', 2),
(4, 'Colombia', 4),
(6, 'QuibdÃ³', 3),
(7, 'Itsmina', 3),
(8, 'MedellÃ­n', 2),
(15, 'Arauca', 10),
(16, 'Barranquilla', 9),
(17, 'Cartagena de Indias', 8),
(18, 'Tunja', 11),
(19, 'Manizales', 12),
(20, 'Florencia', 13),
(21, 'Yopal', 14),
(22, 'Popayán', 15),
(23, 'Valledupar', 16),
(24, 'Montería', 17),
(25, 'Bogotá', 18),
(26, 'Inírida', 19),
(27, 'San José del Guaviare', 20),
(28, 'Neiva', 4),
(29, 'Riohacha', 21),
(30, 'Santa Marta', 22),
(31, 'Villavicencio', 23),
(32, 'Pasto', 24),
(33, 'San José de Cúcuta', 25),
(34, 'Mocoa', 26),
(35, 'Armenia', 27),
(36, 'Pereira', 28),
(37, 'San Andrés', 29),
(38, 'Bucaramanga', 30),
(39, 'Sincelejo', 31),
(40, 'Ibagué', 32),
(41, 'Cali', 33),
(42, 'Mitú', 34),
(43, 'Puerto Carreño', 35),
(46, 'Arlex', 18),
(47, 'asd', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_rol`
--

CREATE TABLE `permiso_rol` (
  `id_permiso_rol` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `modulo1` varchar(80) NOT NULL,
  `accion1` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso_rol`
--

INSERT INTO `permiso_rol` (`id_permiso_rol`, `id_rol`, `modulo1`, `accion1`) VALUES
(12, 10, 'departamento', 'listar'),
(16, 10, 'departamento', 'cargar-datos'),
(17, 10, 'devolucion', 'ver'),
(19, 10, 'devolucion', 'listar'),
(21, 10, 'devolucion', 'modificar'),
(22, 10, 'devolucion', 'cargar-datos'),
(23, 10, 'entrega', 'ver'),
(24, 10, 'entrega', 'listar'),
(26, 10, 'entrega', 'modificar'),
(30, 10, 'entrega', 'cargar-datos'),
(31, 10, 'identificacion', 'ver'),
(32, 10, 'identificacion', 'listar'),
(33, 10, 'identificacion', 'agregar'),
(34, 10, 'identificacion', 'modificar'),
(35, 10, 'identificacion', 'cargar-datos'),
(36, 10, 'marca', 'ver'),
(37, 10, 'marca', 'listar'),
(38, 10, 'marca', 'agregar'),
(39, 10, 'marca', 'modificar'),
(40, 10, 'marca', 'eliminar'),
(41, 10, 'marca', 'cargar-datos'),
(42, 10, 'municipio', 'ver'),
(43, 10, 'municipio', 'listar'),
(44, 10, 'municipio', 'agregar'),
(45, 10, 'municipio', 'modificar'),
(48, 10, 'municipio', 'eliminar'),
(49, 10, 'municipio', 'cargar-datos'),
(50, 10, 'identificacion', 'eliminar'),
(51, 10, 'persona', 'ver'),
(52, 10, 'persona', 'listar'),
(53, 10, 'persona', 'agregar'),
(54, 10, 'persona', 'modificar'),
(55, 10, 'persona', 'eliminar'),
(56, 10, 'persona', 'cargar-datos'),
(57, 10, 'producto', 'ver'),
(59, 10, 'producto', 'listar'),
(60, 10, 'producto', 'agregar'),
(61, 10, 'producto', 'modificar'),
(62, 10, 'producto', 'eliminar'),
(63, 10, 'producto', 'cargar-datos'),
(64, 10, 'proveedores', 'ver'),
(65, 10, 'proveedores', 'listar'),
(66, 10, 'proveedores', 'agregar'),
(67, 10, 'proveedores', 'modificar'),
(68, 10, 'proveedores', 'eliminar'),
(69, 10, 'proveedores', 'cargar-datos'),
(70, 10, 'sexo', 'ver'),
(71, 10, 'sexo', 'listar'),
(75, 10, 'sexo', 'cargar-datos'),
(77, 10, 'rol', 'ver'),
(78, 10, 'rol', 'listar'),
(79, 10, 'rol', 'agregar'),
(80, 10, 'rol', 'eliminar'),
(81, 10, 'rol', 'modificar'),
(82, 10, 'rol', 'cargar-datos'),
(83, 10, 'personarol', 'ver'),
(84, 10, 'personarol', 'listar'),
(85, 10, 'personarol', 'agregar'),
(86, 10, 'personarol', 'modificar'),
(87, 10, 'personarol', 'eliminar'),
(88, 10, 'personarol', 'cargar-datos'),
(89, 10, 'permisorol', 'ver'),
(90, 10, 'permisorol', 'listar'),
(91, 10, 'permisorol', 'agregar'),
(92, 10, 'permisorol', 'modificar'),
(93, 10, 'permisorol', 'eliminar'),
(94, 10, 'permisorol', 'cargar-datos'),
(96, 10, 'modaccion', 'ver'),
(97, 10, 'modaccion', 'listar'),
(99, 10, 'modaccion', 'modificar'),
(100, 10, 'modaccion', 'eliminar'),
(101, 10, 'modaccion', 'cargar-datos'),
(116, 10, 'sexo', 'eliminar'),
(118, 10, 'sexo', 'modificar'),
(119, 10, 'mision', 'mision'),
(121, 10, 'reporte6', 'ver'),
(122, 10, 'reporte6', 'mostrar'),
(123, 10, 'reporte5', 'ver'),
(124, 10, 'reporte5', 'mostrar'),
(125, 10, 'reporte4', 'ver'),
(126, 10, 'reporte4', 'mostrar'),
(127, 10, 'reporte3', 'ver'),
(128, 10, 'reporte3', 'mostrar'),
(129, 10, 'reporte2', 'ver'),
(130, 10, 'reporte2', 'mostrar'),
(131, 10, 'rproducto', 'ver'),
(132, 10, 'rproducto', 'mostrar'),
(133, 10, 'contenido', 'ver'),
(134, 10, 'contenido', 'listar'),
(135, 10, 'contenido', 'agregar'),
(136, 10, 'contenido', 'modificar'),
(137, 10, 'contenido', 'eliminar'),
(138, 10, 'contenido', 'cargar-datos'),
(160, 10, 'reporte7', 'ver'),
(161, 10, 'reporte7', 'mostrar'),
(162, 10, 'reporte8', 'ver'),
(163, 10, 'reporte8', 'mostrar'),
(164, 10, 'devolucion', 'eliminar'),
(165, 10, 'reporte9', 'ver'),
(166, 10, 'reporte9', 'mostrar'),
(167, 10, 'reporte10', 'ver'),
(169, 10, 'reporte10', 'mostrar'),
(170, 10, 'reporte11', 'ver'),
(171, 10, 'reporte11', 'mostrar'),
(172, 10, 'reporte12', 'ver'),
(173, 10, 'reporte12', 'mostrar'),
(174, 10, 'reporte13', 'ver'),
(175, 10, 'reporte13', 'mostrar'),
(179, 10, 'entrega', 'ver'),
(189, 10, 'categoria', 'ver'),
(190, 10, 'categoria', 'listar'),
(191, 10, 'categoria', 'agregar'),
(192, 10, 'categoria', 'cargar-datos'),
(193, 10, 'categoria', 'eliminar'),
(194, 10, 'categoria', 'modificar'),
(195, 10, 'departamento', 'agregar'),
(196, 10, 'departamento', 'modificar'),
(197, 10, 'departamento', 'eliminar'),
(198, 10, 'entrega', 'agregar'),
(199, 10, 'entrega', 'eliminar'),
(201, 10, 'departamento', 'ver'),
(202, 21, 'persona', 'ver'),
(219, 21, 'producto', 'agregar'),
(220, 21, 'producto', 'ver'),
(221, 21, 'producto', 'agregar'),
(222, 21, 'producto', 'cargar-datos'),
(223, 21, 'producto', 'listar'),
(224, 21, 'marca', 'ver'),
(228, 21, 'marca', 'agregar'),
(229, 21, 'marca', 'cargar-datos'),
(238, 21, 'proveedores', 'ver'),
(239, 21, 'proveedores', 'agregar'),
(240, 21, 'proveedores', 'cargar-datos'),
(241, 21, 'proveedores', 'listar'),
(242, 21, 'devolucion', 'agregar'),
(243, 21, 'devolucion', 'ver'),
(244, 21, 'devolucion', 'cargar-datos'),
(245, 21, 'devolucion', 'listar'),
(247, 21, 'entrega', 'ver'),
(248, 21, 'entrega', 'cargar-datos'),
(249, 21, 'entrega', 'listar'),
(250, 21, 'entrega', 'agregar'),
(253, 21, 'persona', 'ver'),
(254, 21, 'producto', 'ver');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `id_tipo_docu` int(11) NOT NULL,
  `num_docu` varchar(45) NOT NULL,
  `pri_nombre` varchar(45) NOT NULL,
  `seg_nombre` varchar(45) DEFAULT NULL,
  `pri_apellido` varchar(45) NOT NULL,
  `seg_apellido` varchar(45) DEFAULT NULL,
  `fecha_nac` date NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `id_mun_res` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `cor_pri` varchar(45) NOT NULL,
  `cor_alt` varchar(45) DEFAULT NULL,
  `tel_pri` varchar(45) NOT NULL,
  `tel_alt` varchar(45) DEFAULT NULL,
  `clave` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `id_tipo_docu`, `num_docu`, `pri_nombre`, `seg_nombre`, `pri_apellido`, `seg_apellido`, `fecha_nac`, `id_sexo`, `id_mun_res`, `direccion`, `cor_pri`, `cor_alt`, `tel_pri`, `tel_alt`, `clave`) VALUES
(1, 2, '1077476528', 'DARWIN', 'DUVAN', 'PALOMEQUE ', 'CUESTA ', '1997-09-27', 1, 6, 'obapo', 'darwinduvan0927@hotmail.com', '', '123', '1245', '0927lorenadd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_rol`
--

CREATE TABLE `persona_rol` (
  `id_persona_rol` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona_rol`
--

INSERT INTO `persona_rol` (`id_persona_rol`, `id_persona`, `id_rol`) VALUES
(3, 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_provedor` int(11) NOT NULL,
  `referencia` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `id_marca`, `modelo`, `stock`, `fecha`, `id_provedor`, `referencia`, `descripcion`, `id_categoria`) VALUES
(24, 'dd', 26, 'eerr', 1, '2022-11-15', 32, '22333', '33d', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_provedor` int(11) NOT NULL,
  `tipo_docu` int(11) NOT NULL,
  `num_docu` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_provedor`, `tipo_docu`, `num_docu`, `nombre`, `telefono`, `direccion`) VALUES
(32, 2, 1223, 'dd', '344', 'grff');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(10, 'ADMINISTRADOR DE PAGINA'),
(21, 'ADMINISTRADOR DE INVENTARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `nombre`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(4, 'otro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`contenido_id`),
  ADD UNIQUE KEY `modulo_UNIQUE` (`modulo`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`id_devolucion`),
  ADD KEY `producto` (`id_producto`),
  ADD KEY `fk_id_persona_idx` (`responsable`);

--
-- Indices de la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`id_entrega`),
  ADD KEY `producto` (`id_producto`),
  ADD KEY `entrega_ibfk_2_idx` (`respon`),
  ADD KEY `fk_responsable_idx` (`respon`);

--
-- Indices de la tabla `identificacion`
--
ALTER TABLE `identificacion`
  ADD PRIMARY KEY (`id_identificacion`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `modulo_accion`
--
ALTER TABLE `modulo_accion`
  ADD PRIMARY KEY (`id_modulo_accion`),
  ADD UNIQUE KEY `index2` (`modulo1`,`accion1`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `fk_id_departamento_idx` (`id_departamento`);

--
-- Indices de la tabla `permiso_rol`
--
ALTER TABLE `permiso_rol`
  ADD PRIMARY KEY (`id_permiso_rol`),
  ADD KEY `permiso_rol_fk1_idx` (`id_rol`),
  ADD KEY `permiso_rol_fk2_idx` (`modulo1`,`accion1`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `num_docu_UNIQUE` (`num_docu`),
  ADD KEY `fk_id_identificacion_idx` (`id_tipo_docu`),
  ADD KEY `fk_id_sexo_idx` (`id_sexo`),
  ADD KEY `fk_id_mun_res_idx` (`id_mun_res`);

--
-- Indices de la tabla `persona_rol`
--
ALTER TABLE `persona_rol`
  ADD PRIMARY KEY (`id_persona_rol`),
  ADD KEY `persona_rol_fk1_idx` (`id_rol`),
  ADD KEY `persona_rol_fk2_idx` (`id_persona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `marca` (`id_marca`),
  ADD KEY `provedores` (`id_provedor`),
  ADD KEY `categoria` (`id_categoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_provedor`),
  ADD KEY `fk_id_tipo_docum_idx` (`tipo_docu`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `contenido_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `id_devolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `entrega`
--
ALTER TABLE `entrega`
  MODIFY `id_entrega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `identificacion`
--
ALTER TABLE `identificacion`
  MODIFY `id_identificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `modulo_accion`
--
ALTER TABLE `modulo_accion`
  MODIFY `id_modulo_accion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `permiso_rol`
--
ALTER TABLE `permiso_rol`
  MODIFY `id_permiso_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `persona_rol`
--
ALTER TABLE `persona_rol`
  MODIFY `id_persona_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_provedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `devolucion_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_responsable` FOREIGN KEY (`responsable`) REFERENCES `persona` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD CONSTRAINT `fk_id_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_respon` FOREIGN KEY (`respon`) REFERENCES `persona` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fk_id_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `permiso_rol`
--
ALTER TABLE `permiso_rol`
  ADD CONSTRAINT `permiso_rol_fk1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE,
  ADD CONSTRAINT `permiso_rol_fk2_idx` FOREIGN KEY (`modulo1`,`accion1`) REFERENCES `modulo_accion` (`modulo1`, `accion1`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_id_identificacion` FOREIGN KEY (`id_tipo_docu`) REFERENCES `identificacion` (`id_identificacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_mun_res` FOREIGN KEY (`id_mun_res`) REFERENCES `municipio` (`id_municipio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_sexo` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona_rol`
--
ALTER TABLE `persona_rol`
  ADD CONSTRAINT `persona_rol_fk1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_rol_fk2` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `productol_fk1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productol_fk2` FOREIGN KEY (`id_provedor`) REFERENCES `proveedores` (`id_provedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productol_fk3` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
