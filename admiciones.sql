-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2019 a las 17:00:00
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admiciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirantes`
--

CREATE TABLE `aspirantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `personas_id` int(10) UNSIGNED NOT NULL,
  `grado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_formulario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estrato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reponsable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` longtext COLLATE utf8mb4_unicode_ci,
  `contacto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aspirantes`
--

INSERT INTO `aspirantes` (`id`, `personas_id`, `grado`, `numero_formulario`, `fecha_inscripcion`, `direccion`, `barrio`, `telefono`, `municipio`, `zona`, `estrato`, `eps`, `Foto`, `reponsable`, `religion`, `observacion`, `contacto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 20, 'Octavo', '123', '2006-10-27', 'Manzana 7 casa 4', 'Sierradentro', '3012796006', 'Santa Marta', 'Rural', '3', 'Sanitas', '1567694767.jpg', 'Ma', 'ca', NULL, 'elamoron@hotmail.com', '2019-09-05 19:46:07', '2019-09-05 19:46:07', NULL),
(2, 23, 'PRIMERO DE PRIMARIA', '123', '2013-09-14', 'DIAGONAL 34 N 8 84', 'MAMATOCO', '4337544', 'SANTA MARTA', 'Urbana', '3', 'CENTRO MEDICO SENA', 'sin-foto', 'Pa', 'ca', NULL, 'limaraceve5@hotmail.com', '2019-09-05 22:07:33', '2019-09-05 22:07:33', NULL),
(3, 26, 'Primero de primaria', '123', '2014-04-29', 'Transversal 15# 31-71 edificio Moriah apartamento 202', 'San Pedro Alejandrino', '3007366502', 'Santa Marta', 'Urbana', '4', 'Sanitas', '1567724840.jpg', 'Pa', 'ca', NULL, 'malejandra.arias@hotmail.com', '2019-09-06 04:07:21', '2019-09-06 04:07:21', NULL),
(4, 30, '4 grado', '123', '2010-12-29', 'calle 18 # 6/51', 'centro', '3004371489', 'santa marta', 'Urbana', '3', 'coomeva', 'sin-foto', 'Ma', 'ca', NULL, 'enitmontenegro@gmail.com', '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(5, 29, '4 grado', '123', '2010-12-29', 'calle 18 # 6/51', 'centro', '3004371489', 'santa marta', 'Urbana', '3', 'coomeva', 'sin-foto', 'Ma', 'ca', NULL, 'enitmontenegro@gmail.com', '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(6, 35, 'primero', '123', '2014-07-29', 'manzana uno casa seis', 'nevada', '4361210', 'santa marta', 'Urbana', '3', 'coomeva eps', 'sin-foto', 'Pa', 'cr', NULL, 'joseluiscerrejon@hotmail.com', '2019-09-10 17:49:58', '2019-09-10 17:49:58', NULL),
(7, 38, 'PRIMERO', '123', '2013-11-28', 'MANZANA E CASA 1', 'VILLAS DE ALEJANDRIA', '4405465', 'SANTA MARTA', 'Urbana', '3', 'MEDIMAS', 'sin-foto', 'Pa', 'cr', NULL, 'olyanetf2671@hotmail.com', '2019-09-11 01:36:19', '2019-09-11 01:36:19', NULL),
(8, 41, 'PRIMERO', '123', '2013-11-28', 'MANZANA E CASA 1', 'VILLAS DE ALEJANDRIA', '4405465', 'SANTA MARTA', 'Urbana', '3', 'MEDIMAS', 'sin-foto', 'Pa', 'cr', NULL, 'olyanetf2671@hotmail.com', '2019-09-11 01:50:04', '2019-09-11 01:50:04', NULL),
(9, 44, 'Primero', '123', '2014-05-03', 'Urb. Nevada Mz 2 Casa 32', 'Urb. Nevada', '4250833', 'Santa Marta', 'Urbana', '3', 'Salud Total', 'sin-foto', 'Pa', 'ca', NULL, 'mariuxiam@hotmail.com', '2019-09-11 19:35:24', '2019-09-11 19:35:24', NULL),
(10, 49, '7', '123', '2008-07-23', 'CALLE 16# 2-62', 'TAGANGA', '4219482-4219590', 'SANTA MARTA', 'Urbana', '2', 'COOMEVA', 'sin-foto', 'Pa', 'ca', NULL, 'aklinz40@gmail.co', '2019-09-14 22:41:28', '2019-09-14 22:41:28', NULL),
(11, 52, '7', '123', '2008-07-23', 'CALLE 16 # 2-62', 'TAGANGA', '4219482-4219590', 'SANTA MARTA', 'Urbana', '2', 'COOMEVA', '1568485868.jpg', 'Pa', 'ca', NULL, 'aklinz40@gmail.co', '2019-09-14 23:31:08', '2019-09-14 23:31:08', NULL),
(12, 55, 'TRANSICIÓN', '123', '2015-05-20', 'CALLE 18  8C-50', 'CENTRO', '3046034630', 'SANTA MARTA', 'Urbana', '4', 'SALUD TOTAL', '1568486732.jpg', 'Ma', 'ca', NULL, 'secretaria@institutolamilagrosa.com', '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL),
(13, 58, 'transicion', '123', '2014-07-24', 'CLL 11E N 34 A 25', 'GALICIA', '4362466', 'SANTA MARTA', 'Urbana', '3', 'COSALUD', '1568505675.jpg', 'Otr', 'ca', 'RESPONSABLE DEL PAGO DE COSTO EDUCATIVO LOS PADRES', 'zenaidamunoz96@gmail.com', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(14, 59, 'transicion', '123', '2014-07-24', 'CLL 11E N 34 A 25', 'GALICIA', '4362466', 'SANTA MARTA', 'Urbana', '3', 'COSALUD', '1568505675.jpg', 'Otr', 'ca', 'RESPONSABLE DEL PAGAO DE COSTO EDUCATIVO LOS PADRES', 'zenaidamunoz96@gmail.com', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(15, 64, '7', '123', '2008-07-23', 'calle 16 # 262', 'taganga', '4219482-4219590', 'SANTA MARTA', 'Urbana', '2', 'coomeva', '1568653152.jpg', 'Pa', 'ca', NULL, 'aklinz40@gmail.co', '2019-09-16 21:59:12', '2019-09-16 21:59:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `aspirantes_id` int(10) UNSIGNED NOT NULL,
  `tarjeta_identidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costancia_comportamiento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificado_medico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `afiliacion_salud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula_papas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carnet_vacunacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examen_aud_vis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paz_salvo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informe_final` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificado_notas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `simat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_incripcions`
--

CREATE TABLE `documentos_incripcions` (
  `id` int(10) UNSIGNED NOT NULL,
  `solicitud_admision` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procedencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificado_registro_civil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informe_academico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paz_salvo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recibo_inscripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspirantes_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos_incripcions`
--

INSERT INTO `documentos_incripcions` (`id`, `solicitud_admision`, `procedencia`, `certificado_registro_civil`, `informe_academico`, `paz_salvo`, `recibo_inscripcion`, `aspirantes_id`, `created_at`, `updated_at`) VALUES
(1, 'solicitud_admision-1569104607.jpg', 'procedencia-1569104607.png', 'certificado_registro_civil-1569104607.jpg', 'informe_academico-1569104607.png', 'paz_salvo-1569104607.jpg', 'recibo_inscripcion-1569104607.png', 3, '2019-09-22 03:23:27', '2019-09-22 03:23:27'),
(2, 'solicitud_admision-1569105276.jpg', 'procedencia-1569105276.png', 'certificado_registro_civil-1569105276.jpg', 'informe_academico-1569105276.png', 'paz_salvo-1569105276.jpg', 'recibo_inscripcion-1569105276.png', 3, '2019-09-22 03:34:36', '2019-09-22 03:34:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hermanos`
--

CREATE TABLE `hermanos` (
  `id` int(10) UNSIGNED NOT NULL,
  `aspirantes_id` int(10) UNSIGNED NOT NULL,
  `primer_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundo_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primer_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundo_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hermanos`
--

INSERT INTO `hermanos` (`id`, `aspirantes_id`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `grado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 'DANIELA', 'MICHELL', 'MARIN', 'YANET', 'QUINTO', '2019-09-11 01:36:19', '2019-09-11 01:36:19', NULL),
(2, 8, 'DANIELA', 'MICHELL', 'MARIN', 'YANET', 'QUINTO', '2019-09-11 01:50:04', '2019-09-11 01:50:04', NULL),
(3, 9, 'Helena', 'Patricia', 'Arregocés', 'Mancheno', 'Noveno', '2019-09-11 19:35:25', '2019-09-11 19:35:25', NULL),
(4, 12, 'MARIANA', '.', 'BOTELLO', 'SALEME', 'OCTAVO', '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_academicas`
--

CREATE TABLE `historia_academicas` (
  `id` int(10) UNSIGNED NOT NULL,
  `aspirantes_id` int(10) UNSIGNED NOT NULL,
  `colegio_procedencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grados_repetidos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `historia_academicas`
--

INSERT INTO `historia_academicas` (`id`, `aspirantes_id`, `colegio_procedencia`, `grados_repetidos`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 1, 'María Auxiliadora Norte', NULL, '2019-09-05 19:46:07', '2019-09-05 19:46:07', NULL),
(7, 2, 'KINDERLANDIA', NULL, '2019-09-05 22:07:33', '2019-09-05 22:07:33', NULL),
(8, 3, 'Jardín infantil mi mundo del saber', NULL, '2019-09-06 04:07:21', '2019-09-06 04:07:21', NULL),
(9, 4, 'Instituto Educativo Distrital MADRE LAURA', NULL, '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(10, 5, 'Instituto Educativo Distrital MADRE LAURA', NULL, '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(11, 6, NULL, NULL, '2019-09-10 17:49:58', '2019-09-10 17:49:58', NULL),
(12, 7, 'PINCELADAS CREATIVAS', NULL, '2019-09-11 01:36:19', '2019-09-11 01:36:19', NULL),
(13, 8, 'PINCELADAS CREATIVAS', NULL, '2019-09-11 01:50:04', '2019-09-11 01:50:04', NULL),
(14, 9, 'Colegio Diocesano San José', NULL, '2019-09-11 19:35:25', '2019-09-11 19:35:25', NULL),
(15, 10, 'LICEO DEL CARIBE', NULL, '2019-09-14 22:41:28', '2019-09-14 22:41:28', NULL),
(16, 11, 'LICEO DEL CARIBE', NULL, '2019-09-14 23:31:08', '2019-09-14 23:31:08', NULL),
(17, 12, 'MI PEQUEÑO MUNDO', NULL, '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL),
(18, 13, 'MY FOREST', NULL, '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(19, 14, 'MY FOREST', NULL, '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(20, 15, 'liceo del caribe', NULL, '2019-09-16 21:59:12', '2019-09-16 21:59:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(102, '2019_08_31_060934_create_personas_table', 1),
(103, '2019_08_31_064203_create_padres_table', 1),
(104, '2019_08_31_065719_create_aspirantes_table', 1),
(105, '2019_08_31_070050_create_hermanos_table', 1),
(106, '2019_08_31_070800_create_historia_academicas_table', 1),
(107, '2019_08_31_071356_create_relacion_colegios_table', 1),
(108, '2019_08_31_072116_create_documentos_table', 1),
(109, '2019_09_03_055543_update_padres_table', 1),
(112, '2014_10_12_000000_create_users_table', 2),
(113, '2014_10_12_100000_create_password_resets_table', 2),
(115, '2019_09_21_184527_create_documentos_incripcions_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id` int(10) UNSIGNED NOT NULL,
  `personas_id` int(10) UNSIGNED NOT NULL,
  `aspirantes_id` int(10) UNSIGNED NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `es_acudiente` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id`, `personas_id`, `aspirantes_id`, `direccion`, `barrio`, `telefono`, `celular`, `correo`, `profesion`, `nombre_empresa`, `telefono_empresa`, `direccion_empresa`, `es_acudiente`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 21, 1, 'Manzana 7 Casa 4', 'Sierradentro', 'Sin-datos', '3003261152', 'augusto.chan@hotmail.com', 'Administrador de Empresas', 'ADG Suministros y Mantenimientos Generales SAS', '4214455', 'Mz 7 Casa 4', 0, '2019-09-05 19:46:07', '2019-09-05 19:46:07', NULL),
(12, 22, 1, 'Manzana 7 Casa 4', 'Sierradentro', 'Sin-datos', '3012796006', 'elamoron@hotmail.com', 'Comunicador Social y Periodista', 'ADG Suministros y Mantenimientos Generales SAS', '4214455', 'Mz 7 Casa 4', 0, '2019-09-05 19:46:07', '2019-09-05 19:46:07', NULL),
(13, 24, 2, 'CRA 2 N 17 24', 'CENTRO', 'Sin-datos', '300 606 1364', 'williamsalcedo@gmail.com', 'ADMINISTRADOR', 'SENA', 'Sin-datos', 'COMERCIAL', 0, '2019-09-05 22:07:33', '2019-09-05 22:07:33', NULL),
(14, 25, 2, 'DIAGONAL 34 N 8 84', 'MAMATOCO', '4337544', '3008713233', 'limaraceve5@hotmail.com    limaraceve5@gmail.com', 'ADMINISTRADORA', 'PLÁSTICOS JS', '4212242 - 431 8793', 'CRA 4 N 11 55', 0, '2019-09-05 22:07:33', '2019-09-05 22:07:33', NULL),
(15, 27, 3, 'Transversal 15# 31-71 edificio Moriah apartamento 202', 'San Pedro Alejandrino', 'Sin-datos', '3022953050', 'ing.orgepuerto55@gmail.com', 'Ingeniero civil', 'Inpro construcciones sas', '3022953050', 'Calle 27 # 32c', 0, '2019-09-06 04:07:21', '2019-09-06 04:07:21', NULL),
(16, 28, 3, 'Transversal 15# 31-71 edificio Moriah apartamento 202', 'San Pedro Alejandrino', 'Sin-datos', '3007366502', 'malejandra.arias@hotmail.com', 'Ama de casa', 'Sin-datos', 'Sin-datos', 'Sin-datos', 0, '2019-09-06 04:07:21', '2019-09-06 04:07:21', NULL),
(17, 31, 4, 'MZ Ñ CASA 2', 'GARAGOA', 'Sin-datos', '300 4883525/320 4357926', 'Sin-datos', 'Comerciante', 'Sin-datos', 'Sin-datos', 'Sin-datos', 0, '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(18, 32, 5, 'MZ Ñ CASA 2', 'GARAGOA', 'Sin-datos', '300 4883525/320 4357926', 'Sin-datos', 'Comerciante', 'Sin-datos', 'Sin-datos', 'Sin-datos', 0, '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(19, 33, 4, 'Calle 18 #6/51', 'centro', 'Sin-datos', '3004883525', 'enitmontenegro@gmail.com', 'Impulsadora de ventas', 'ZONA FRANCA INDUSTRIAL SANTA MARTA', '3017963717', 'K1 Via Gaira', 0, '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(20, 34, 5, 'Calle 18 #6/51', 'centro', 'Sin-datos', '3004883525', 'enitmontenegro@gmail.com', 'Impulsadora de ventas', 'ZONA FRANCA INDUSTRIAL SANTA MARTA', '3017963717', 'K1 Via Gaira', 0, '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(21, 36, 6, 'manzana uno casa seis', 'nevada', '4361210', '3005687661', 'joseluiscerrejon@hotmail.com', 'psicologo', 'pensionado', 'Sin-datos', 'Sin-datos', 0, '2019-09-10 17:49:58', '2019-09-10 17:49:58', NULL),
(22, 37, 6, 'manzana uno casa seis', 'nevada', '4361210', '3012160963', 'joseluiscerrejon@hotmail.com', 'ama de casa', 'Sin-datos', 'Sin-datos', 'Sin-datos', 0, '2019-09-10 17:49:58', '2019-09-10 17:49:58', NULL),
(23, 39, 7, 'MANZANA E CASA 1', 'VILLAS DE ALEJANDRIA', '4405465', '3016029460', 'asosa2608@hotmail.com', 'INGENIERO ELECTRICO (CONTRATISTA)', 'INDEPENDIENTE', '3016029460', 'MANZANA E CASA 15 VILLAS DE ALEJANDRIA', 0, '2019-09-11 01:36:19', '2019-09-11 01:36:19', NULL),
(24, 40, 7, 'MANZANA E CASA 1', 'VILLAS DE ALEJANDRIA', '4405465', '3002699977', 'olyanetf2671@hotmail.com', 'ODONTOLOGA', 'IAC GPP SERVICIOS INTEGRALES', '3013856629', 'AV. LIBERTADOR CARRERA 32A #16-13', 0, '2019-09-11 01:36:19', '2019-09-11 01:36:19', NULL),
(25, 42, 8, 'manzana e casa 1', 'VILLAS DE ALEJANDRIA', '4405465', '3016029460', 'asosa2608@hotmail.com', 'INGENIERO ELECTRICO (CONTRATISTA)', 'INDEPENDIENTE', '3016029460', 'MANZANA E CASA 15 VILLAS DE ALEJANDRIA', 0, '2019-09-11 01:50:04', '2019-09-11 01:50:04', NULL),
(26, 43, 8, 'manzana e casa 1', 'VILLAS DE ALEJANDRIA', '4405465', '3002699977', 'olyanetf2671@hotmail.com', 'ODONTOLOGA', 'IAC GPP SERVICIOS INTEGRALES', '3013856629', 'AV. LIBERTADOR CARRERA 32A #16-13', 0, '2019-09-11 01:50:04', '2019-09-11 01:50:04', NULL),
(27, 45, 9, 'Urb. Nevada Mz 2 Casa 32', 'Urb. Nevada', '4250833', '3157538864-3008040716', 'adaulfogm@hotmail.com', 'Arquitecto', 'Arquiplott\'s', '4233971', 'Calle 18 # 4-17 Local', 0, '2019-09-11 19:35:24', '2019-09-11 19:35:24', NULL),
(28, 46, 9, 'Urb. Nevada Mz 2 Casa 32', 'Urb. Nevada', '4250833', '3053424534', 'mariuxiam@hotmail.com', 'Arquitecto', 'Arquiplott\'s', '4233971', 'Calle 18 # 4-17 Local', 0, '2019-09-11 19:35:25', '2019-09-11 19:35:25', NULL),
(29, 50, 10, 'CALLE 16 # 2-62', 'TAGANGA', '4219482-4219590', '3167963214', 'richyalva1@gmail.com', 'comerciante', 'RESTAURANTE VELERO BITACORA', '4219482', 'KRA 1 # 7-13', 0, '2019-09-14 22:41:28', '2019-09-14 22:41:28', NULL),
(30, 51, 10, 'CALLE 16 # 2-62', 'TAGANGA', '4219482-4219590', '3163884319', 'aklinz40@gmail.com', 'ADMINISTRADORA DE SU PROPIO NEGOCIO', 'RESTAURANTE VELERO BITACORA', '4219482-4219590', 'KRA 1 # 17-13', 0, '2019-09-14 22:41:28', '2019-09-14 22:41:28', NULL),
(31, 53, 11, 'CALLE 16 # 2-62', 'TAGANGA', '4219482-4219590', '3167963214', 'richyalva1@gmail.com', 'comerciante', 'RESTAURANTE VELERO BITACORA', '4219482', 'KRA 1 # 7-13', 0, '2019-09-14 23:31:08', '2019-09-14 23:31:08', NULL),
(32, 54, 11, 'CALLE 16 # 2-62', 'TAGANGA', '4219482-4219590', '3163884319', 'aklinz40@gmail.com', 'ADMINISTRADORA DE SU PROPIO NEGOCIO', 'RESTAURANTE VELERO BITACORA', '4219482-4219590', 'KRA 1 # 17-13', 0, '2019-09-14 23:31:08', '2019-09-14 23:31:08', NULL),
(33, 56, 12, 'CALLE 18  8C-50', 'CENTRO', '4387271', '3016504110', 'botellosaleme20@gmail.com', 'INDEPENDIENTE COMERCIANTE', 'INDEPENDIENTE', '3016504110', 'CALLE 18  8C-50', 0, '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL),
(34, 57, 12, 'CALLE 18  8C-50', 'CENTRO', '4387271', '3046034630', 'karensaleme95@gmail.com', 'AMA DE CASA', 'HOGAR', '4387271', 'CALLE 18  8C-50', 0, '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL),
(35, 60, 14, 'CLL11 E N 34 A 25', 'GALICIA', 'Sin-datos', '3005950101', 'zenaidamunoz96@gmail.com', 'COMERCIANTE/ INDEPENDIENTE', 'Sin-datos', 'Sin-datos', 'Sin-datos', 0, '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(36, 61, 13, 'CLL11 E N 34 A 25', 'GALICIA', 'Sin-datos', '3005950101', 'zenaidamunoz96@gmail.com', 'COMERCIANTE/ INDEPENDIENTE', 'Sin-datos', 'Sin-datos', 'Sin-datos', 0, '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(37, 63, 13, 'CLL11 E N 34 A 25', 'GALICIA', 'Sin-datos', '3005950101', 'zenaidamunoz96@gmail.com', 'COSMETOLOGA MEDICA /INDEPENDIENTE', 'Sin-datos', 'Sin-datos', 'Sin-datos', 0, '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(38, 62, 14, 'CLL11 E N 34 A 25', 'GALICIA', 'Sin-datos', '3005950101', 'zenaidamunoz96@gmail.com', 'COSMETOLOGA MEDICA /INDEPENDIENTE', 'Sin-datos', 'Sin-datos', 'Sin-datos', 0, '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(39, 65, 15, 'CALLE 16 # 2-62', 'TAGANGA', '4219482-4219590', '3167963214', 'richyalva1@gmail.com', 'comerciante', 'RESTAURANTE VELERO BITACORA', '4219482', 'KRA 1 # 7-13', 0, '2019-09-16 21:59:12', '2019-09-16 21:59:12', NULL),
(40, 66, 15, 'CALLE 16 # 2-62', 'TAGANGA', '4219482-4219590', '3163884319', 'aklinz40@gmail.com', 'ADMINISTRADORA DE SU PROPIO NEGOCIO', 'RESTAURANTE VELERO BITACORA', '4219482-4219590', 'KRA 1 # 17-13', 0, '2019-09-16 21:59:12', '2019-09-16 21:59:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(10) UNSIGNED NOT NULL,
  `primer_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundo_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primer_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundo_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_documento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugar_expedicion_documento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_nacimiento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `tipo_documento`, `numero_documento`, `lugar_expedicion_documento`, `fecha_nacimiento`, `lugar_nacimiento`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Luna', 'Sofía', 'Morón', 'Barros', 'TI', '1027282454', 'Bogotá', '2006-10-27', 'Bogotá', '2019-09-05 01:07:59', '2019-09-05 01:07:59', NULL),
(2, 'JE', 'SADA', 'SAD', 'SDAD', 'RC', '4587879852', 'SDADA', '2019-09-02', 'SANTA', '2019-09-05 01:29:08', '2019-09-05 01:29:08', NULL),
(3, '666', '666', '666', '66', 'RC', '666', '66', '2019-09-30', '66', '2019-09-05 12:39:44', '2019-09-05 12:39:44', NULL),
(4, 'Emely', 'Sofía', 'Cañas', 'De la hoz', 'RC', '1084', 'Santa Marta', NULL, 'Santa Marta', '2019-09-05 12:50:19', '2019-09-05 12:50:19', NULL),
(5, '666', '666', '666', '66', 'RC', '666', '66', '2019-09-30', '66', '2019-09-05 13:08:59', '2019-09-05 13:08:59', NULL),
(6, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'CC', 'Sin-datos', 'Sin-datos', NULL, 'Sin-datos', '2019-09-05 13:08:59', '2019-09-05 13:08:59', NULL),
(7, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'CC', 'Sin-datos', 'Sin-datos', NULL, 'Sin-datos', '2019-09-05 13:08:59', '2019-09-05 13:08:59', NULL),
(8, '666', '666', '666', '66', 'RC', '666', '66', '2019-09-30', '66', '2019-09-05 13:13:53', '2019-09-05 13:13:53', NULL),
(9, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'CC', 'Sin-datos', 'Sin-datos', NULL, 'Sin-datos', '2019-09-05 13:13:53', '2019-09-05 13:13:53', NULL),
(10, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'CC', 'Sin-datos', 'Sin-datos', NULL, 'Sin-datos', '2019-09-05 13:13:53', '2019-09-05 13:13:53', NULL),
(11, '666', '666', '666', '66', 'RC', '666', '66', '2019-09-30', '66', '2019-09-05 13:17:58', '2019-09-05 13:17:58', NULL),
(12, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'CC', 'Sin-datos', 'Sin-datos', NULL, 'Sin-datos', '2019-09-05 13:17:58', '2019-09-05 13:17:58', NULL),
(13, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'CC', 'Sin-datos', 'Sin-datos', NULL, 'Sin-datos', '2019-09-05 13:17:58', '2019-09-05 13:17:58', NULL),
(14, '666', '666', '666', '66', 'RC', '666', '66', '2019-09-30', '66', '2019-09-05 13:19:06', '2019-09-05 13:19:06', NULL),
(15, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'CC', 'Sin-datos', 'Sin-datos', NULL, 'Sin-datos', '2019-09-05 13:19:06', '2019-09-05 13:19:06', NULL),
(16, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'CC', 'Sin-datos', 'Sin-datos', NULL, 'Sin-datos', '2019-09-05 13:19:06', '2019-09-05 13:19:06', NULL),
(17, '88', '88', '88', '88', 'RC', '88', '88', '2019-09-08', '88', '2019-09-05 14:09:33', '2019-09-05 14:09:33', NULL),
(18, '888', '88', '88', '88', 'CC', '88', '88', NULL, 'Sin-datos', '2019-09-05 14:09:33', '2019-09-05 14:09:33', NULL),
(19, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'CC', 'Sin-datos', 'Sin-datos', NULL, 'Sin-datos', '2019-09-05 14:09:33', '2019-09-05 14:09:33', NULL),
(20, 'Luna', 'Sofía', 'Morón', 'Barros', 'TI', '1027282454', 'Bogotá', '2006-10-27', 'Bogotá', '2019-09-05 19:46:07', '2019-09-05 19:46:07', NULL),
(21, 'Augusto', 'Arturo', 'Diazgranados', 'Garrido', 'CC', '7603972', 'Santa Marta', NULL, 'Sin-datos', '2019-09-05 19:46:07', '2019-09-05 19:46:07', NULL),
(22, 'Ela', 'María', 'Morón', 'Barros', 'CC', '52804191', 'Bogotá', NULL, 'Sin-datos', '2019-09-05 19:46:07', '2019-09-05 19:46:07', NULL),
(23, 'GABRIELA', '*', 'SALCEDO', 'ACEVEDO', 'RC', '1083731', 'SANTA MARTA', '2013-09-14', 'SANTA MARTA', '2019-09-05 22:07:33', '2019-09-05 22:07:33', NULL),
(24, 'WILLIAM', 'DE JESUS', 'SALCEDO', 'CUAO', 'CC', '85.449.170', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-05 22:07:33', '2019-09-05 22:07:33', NULL),
(25, 'LILIANA', 'MARGARITA', 'ACEVEDO', 'ACEVEDO', 'CC', '39.046.722', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-05 22:07:33', '2019-09-05 22:07:33', NULL),
(26, 'Mariana', '-', 'Puerto', 'Aranzazu', 'RC', '1205964304', 'Santa Marta', '2014-04-29', 'Santa Marta', '2019-09-06 04:07:21', '2019-09-06 04:07:21', NULL),
(27, 'Jorge', 'Luis', 'Puerto', 'Velásquez', 'CC', '80025267', 'Bogotá', NULL, 'Sin-datos', '2019-09-06 04:07:21', '2019-09-06 04:07:21', NULL),
(28, 'Maria', 'Alejandra', 'Aranzazu', 'Arias', 'CC', '1053793356', 'Manizales', NULL, 'Sin-datos', '2019-09-06 04:07:21', '2019-09-06 04:07:21', NULL),
(29, 'danna', 'valentina', 'martinez', 'montenegro', 'TI', '1082961013', 'santa marta', '2010-12-29', 'santa marta', '2019-09-09 23:40:40', '2019-09-09 23:40:40', NULL),
(30, 'danna', 'valentina', 'martinez', 'montenegro', 'TI', '1082961013', 'santa marta', '2010-12-29', 'santa marta', '2019-09-09 23:40:40', '2019-09-09 23:40:40', NULL),
(31, 'Rene', 'Alberto', 'Martinez', 'Suarez', 'CC', '85463055', 'Santa Marta', NULL, 'Sin-datos', '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(32, 'Rene', 'Alberto', 'Martinez', 'Suarez', 'CC', '85463055', 'Santa Marta', NULL, 'Sin-datos', '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(33, 'ENITH', 'Sin-datos', 'MONTENEGRO', 'RUIZ', 'CC', '26670360', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(34, 'ENITH', 'Sin-datos', 'MONTENEGRO', 'RUIZ', 'CC', '26670360', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(35, 'tasharen', 'victoria', 'gutierrez', 'muñoz', 'RC', '1124063513', 'maicao la guajira', '2014-07-29', 'maicao la guajira', '2019-09-10 17:49:57', '2019-09-10 17:49:57', NULL),
(36, 'jose', 'luis', 'gutierrez', 'goenaga', 'CC', '84040812', 'maicao la guajira', NULL, 'Sin-datos', '2019-09-10 17:49:58', '2019-09-10 17:49:58', NULL),
(37, 'esther', 'felicia', 'muñoz', 'vanegas', 'CC', '49733064', 'valledupar', NULL, 'Sin-datos', '2019-09-10 17:49:58', '2019-09-10 17:49:58', NULL),
(38, 'DANIA', 'MICHELL', 'MARIN', 'YANET', 'RC', '1084456292', 'SANTA MARTA', '2013-11-28', 'SANTA MARTA', '2019-09-11 01:36:19', '2019-09-11 01:36:19', NULL),
(39, 'ALBEIRO', 'ALFONSO', 'MARIN', 'SOSA', 'CC', '4978702', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-11 01:36:19', '2019-09-11 01:36:19', NULL),
(40, 'OLGA', 'LUCIA', 'YANET', 'FUENTES', 'CC', '57434804', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-11 01:36:19', '2019-09-11 01:36:19', NULL),
(41, 'DANIA', 'MICHELL', 'MARIN', 'YANET', 'RC', '1084456292', 'SANTA MARTA', '2013-11-28', 'SANTA MARTA', '2019-09-11 01:50:04', '2019-09-11 01:50:04', NULL),
(42, 'ALBEIRO', 'ALFONSO', 'MARIN', 'SOSA', 'CC', '4978702', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-11 01:50:04', '2019-09-11 01:50:04', NULL),
(43, 'OLGA', 'LUCIA', 'YANET', 'FUENTES', 'CC', '57434804', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-11 01:50:04', '2019-09-11 01:50:04', NULL),
(44, 'Inés', 'Sofía', 'Arregocés', 'Mancheno', 'RC', '1084456622', 'Santa Marta', '2014-05-03', 'Santa Marta', '2019-09-11 19:35:24', '2019-09-11 19:35:24', NULL),
(45, 'Adaulfo', 'Pastor', 'Gómez', 'Matiz', 'CC', '85471336', 'Santa Marta', NULL, 'Sin-datos', '2019-09-11 19:35:24', '2019-09-11 19:35:24', NULL),
(46, 'Mariuxi', '-', 'Arregocés', 'Mancheno', 'CC', '57444485', 'Santa Marta', NULL, 'Sin-datos', '2019-09-11 19:35:25', '2019-09-11 19:35:25', NULL),
(47, 'gabriela', 'sofia', 'ayala', 'muñoz', 'RC', '1083022715', 'santa marta', NULL, 'santa marta', '2019-09-14 05:28:01', '2019-09-14 05:28:01', NULL),
(48, 'gabriela', 'sofia', 'ayala', 'muñoz', 'RC', '1083022715', 'santa marta', NULL, 'santa marta', '2019-09-14 05:28:03', '2019-09-14 05:28:03', NULL),
(49, 'LAURA', 'JASAY', 'ALVAREZ', 'GONZALEZ', 'TI', '1082919412', 'SANTA MARTA', '2008-07-23', 'SANTA MARTA', '2019-09-14 22:41:28', '2019-09-14 22:41:28', NULL),
(50, 'RICARDO', 'Sin-datos', 'ALVAREZ', 'BARRERA', 'CC', '79303466', 'BOGOTA', NULL, 'Sin-datos', '2019-09-14 22:41:28', '2019-09-14 22:41:28', NULL),
(51, 'NILKA', 'JOSEFINA', 'GONZALEZ', 'DANIEL', 'CC', '39048049', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-14 22:41:28', '2019-09-14 22:41:28', NULL),
(52, 'LAURA', 'JASAY', 'ALVAREZ', 'GONZALEZ', 'TI', '1082919412', 'SANTA MARTA', '2008-07-23', 'SANTA MARTA', '2019-09-14 23:31:08', '2019-09-14 23:31:08', NULL),
(53, 'RICARDO', 'Sin-datos', 'ALVAREZ', 'BARRERA', 'CC', '79303466', 'BOGOTA', NULL, 'Sin-datos', '2019-09-14 23:31:08', '2019-09-14 23:31:08', NULL),
(54, 'NILKA', 'JOSEFINA', 'GONZALEZ', 'DANIEL', 'CC', '39048049', 'Sin-datos', NULL, 'Sin-datos', '2019-09-14 23:31:08', '2019-09-14 23:31:08', NULL),
(55, 'MARIANGEL', '.', 'BOTELLO', 'SALEME', 'RC', '1062534059', 'MONTERIA', '2015-05-20', 'MONTERIA', '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL),
(56, 'LUCAS', 'EVENGELISTA', 'BOTELLO', 'GÓMEZ', 'CC', '85470685', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL),
(57, 'KAREN', 'BEATRIZ', 'SALEME', 'RUIZ', 'CC', '1067844280', 'MONTERIA', NULL, 'Sin-datos', '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL),
(58, 'GABRIELA', 'SOFIA', 'AYALA', 'MUÑOZ', 'RC', '1083022715', 'SANTA MARTA', '2014-07-24', 'SANTA MARTA', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(59, 'GABRIELA', 'SOFIA', 'AYALA', 'MUÑOZ', 'RC', '1083022715', 'SANTA MARTA', '2014-07-24', 'SANTA MARTA', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(60, 'JHON', 'EFREN', 'AYALA', 'ALZATE', 'CC', '15.437.395', 'RIONEGRO', NULL, 'Sin-datos', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(61, 'JHON', 'EFREN', 'AYALA', 'ALZATE', 'CC', '15.437.395', 'RIONEGRO', NULL, 'Sin-datos', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(62, 'ZENAIDA', 'ESTHER', 'MUÑOZ', 'CERVANTES', 'CC', '36.667.484', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(63, 'ZENAIDA', 'ESTHER', 'MUÑOZ', 'CERVANTES', 'CC', '36.667.484', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(64, 'LAURA', 'JASAY', 'alvarez', 'gonzalez', 'TI', '1082919412', 'santa marta', '2008-07-23', 'santa marta', '2019-09-16 21:59:12', '2019-09-16 21:59:12', NULL),
(65, 'RICARDO', 'Sin-datos', 'ALVAREZ', 'BARRERA', 'CC', '79303466', 'BOGOTA', NULL, 'Sin-datos', '2019-09-16 21:59:12', '2019-09-16 21:59:12', NULL),
(66, 'NILKA', 'JOSEFINA', 'GONZALEZ', 'Sin-datos', 'CC', '39048049', 'SANTA MARTA', NULL, 'Sin-datos', '2019-09-16 21:59:12', '2019-09-16 21:59:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_colegios`
--

CREATE TABLE `relacion_colegios` (
  `id` int(10) UNSIGNED NOT NULL,
  `historia_academicas_id` int(10) UNSIGNED NOT NULL,
  `grado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_colegios` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivo_retiro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_intitucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `relacion_colegios`
--

INSERT INTO `relacion_colegios` (`id`, `historia_academicas_id`, `grado`, `ano`, `nombre_colegios`, `ciudad`, `motivo_retiro`, `tipo_intitucion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 6, '1,2,3,4,5,6,7', '2013-2019', 'María Auxiliadora Norte', 'Bogotá', 'Traslado de ciudad', 'p', '2019-09-05 19:46:07', '2019-09-05 19:46:07', NULL),
(5, 7, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', '2019-09-05 22:07:33', '2019-09-05 22:07:33', NULL),
(6, 8, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', '2019-09-06 04:07:21', '2019-09-06 04:07:21', NULL),
(7, 9, '2 GRADO', '2018', 'SIMÓN RODRIGUES', 'Santa Marta', 'Cambio de vivienda', 'p', '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(8, 10, '2 GRADO', '2018', 'SIMÓN RODRIGUES', 'Santa Marta', 'Cambio de vivienda', 'p', '2019-09-09 23:40:41', '2019-09-09 23:40:41', NULL),
(9, 12, 'PREJARDIN,JARDIN Y TRANSICION', '3', 'PINCELADAS CREATIVAS', 'SANTA MARTA', 'QUIERO QUE MIS HIJAS ESTUDIEN EN EL MISMO PLANTEL', 'p', '2019-09-11 01:36:19', '2019-09-11 01:36:19', NULL),
(10, 13, 'PREJARDIN,JARDIN Y TRANSICION', '3', 'PINCELADAS CREATIVAS', 'SANTA MARTA', 'QUIERO QUE MIS HIJAS ESTUDIEN EN EL MISMO PLANTEL', 'p', '2019-09-11 01:50:04', '2019-09-11 01:50:04', NULL),
(11, 14, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', '2019-09-11 19:35:25', '2019-09-11 19:35:25', NULL),
(12, 15, '1-2-3', '3', 'ESCUELA MARIA AUXILIADORA TAGANGA', 'SANTA MARTA', 'HORARIOS', 'p', '2019-09-14 22:41:29', '2019-09-14 22:41:29', NULL),
(13, 16, '1-2-3', '3', 'ESCUELA MARIA AUXILIADORA TAGANGA', 'SANTA MARTA', 'HORARIOS', 'p', '2019-09-14 23:31:08', '2019-09-14 23:31:08', NULL),
(14, 17, 'PARVULO', '2017', 'PERSONITAS DEL FUTURO', 'SANTA MARTA', 'VOLUNTARIO', 'p', '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL),
(15, 17, 'PREJARDIN', '2018', 'PERSONITAS DEL FUTURO', 'SANTA MARTA', 'VOLUNTARIO', 'r', '2019-09-14 23:45:33', '2019-09-14 23:45:33', NULL),
(16, 18, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(17, 19, 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', 'Sin-datos', '2019-09-15 05:01:16', '2019-09-15 05:01:16', NULL),
(18, 20, '1-2-3', '3', 'escuela maria auxiliadora', 'SANTA MARTA', 'HORARIOS', 'p', '2019-09-16 21:59:12', '2019-09-16 21:59:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Sistema', 'admin@admin.com', NULL, '$2y$10$UePibVcsbgz.oi7fdvFBj.pQeqpaza0Scpwi5YFrw8IG4Uw7wk09K', NULL, '2019-09-17 13:52:17', '2019-09-17 13:52:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aspirantes_personas_id_foreign` (`personas_id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documentos_aspirantes_id_foreign` (`aspirantes_id`);

--
-- Indices de la tabla `documentos_incripcions`
--
ALTER TABLE `documentos_incripcions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documentos_incripcions_aspirantes_id_foreign` (`aspirantes_id`);

--
-- Indices de la tabla `hermanos`
--
ALTER TABLE `hermanos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hermanos_aspirantes_id_foreign` (`aspirantes_id`);

--
-- Indices de la tabla `historia_academicas`
--
ALTER TABLE `historia_academicas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historia_academicas_aspirantes_id_foreign` (`aspirantes_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `padres_personas_id_foreign` (`personas_id`),
  ADD KEY `padres_aspirantes_id_foreign` (`aspirantes_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `relacion_colegios`
--
ALTER TABLE `relacion_colegios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relacion_colegios_historia_academicas_id_foreign` (`historia_academicas_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos_incripcions`
--
ALTER TABLE `documentos_incripcions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hermanos`
--
ALTER TABLE `hermanos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `historia_academicas`
--
ALTER TABLE `historia_academicas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `relacion_colegios`
--
ALTER TABLE `relacion_colegios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
  ADD CONSTRAINT `aspirantes_personas_id_foreign` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_aspirantes_id_foreign` FOREIGN KEY (`aspirantes_id`) REFERENCES `aspirantes` (`id`);

--
-- Filtros para la tabla `documentos_incripcions`
--
ALTER TABLE `documentos_incripcions`
  ADD CONSTRAINT `documentos_incripcions_aspirantes_id_foreign` FOREIGN KEY (`aspirantes_id`) REFERENCES `aspirantes` (`id`);

--
-- Filtros para la tabla `hermanos`
--
ALTER TABLE `hermanos`
  ADD CONSTRAINT `hermanos_aspirantes_id_foreign` FOREIGN KEY (`aspirantes_id`) REFERENCES `aspirantes` (`id`);

--
-- Filtros para la tabla `historia_academicas`
--
ALTER TABLE `historia_academicas`
  ADD CONSTRAINT `historia_academicas_aspirantes_id_foreign` FOREIGN KEY (`aspirantes_id`) REFERENCES `aspirantes` (`id`);

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `padres_aspirantes_id_foreign` FOREIGN KEY (`aspirantes_id`) REFERENCES `aspirantes` (`id`),
  ADD CONSTRAINT `padres_personas_id_foreign` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `relacion_colegios`
--
ALTER TABLE `relacion_colegios`
  ADD CONSTRAINT `relacion_colegios_historia_academicas_id_foreign` FOREIGN KEY (`historia_academicas_id`) REFERENCES `historia_academicas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
