-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2024 a las 17:00:45
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
-- Base de datos: `oftalmologosofware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aegendas`
--

CREATE TABLE `aegendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `sintomas` varchar(255) NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_patalogia_ocular` bigint(20) UNSIGNED DEFAULT NULL,
  `id_salud_ocular` bigint(20) UNSIGNED DEFAULT NULL,
  `id_salud_general` bigint(20) UNSIGNED DEFAULT NULL,
  `id_disponibilidad` bigint(20) UNSIGNED DEFAULT NULL,
  `id_estado` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aegendas`
--

INSERT INTO `aegendas` (`id`, `fecha`, `nombre_completo`, `Telefono`, `direccion`, `cedula`, `sintomas`, `id_user`, `id_patalogia_ocular`, `id_salud_ocular`, `id_salud_general`, `id_disponibilidad`, `id_estado`, `created_at`, `updated_at`) VALUES
(1, '2024-07-04', 'Miguel Alejandro Estanga Martinez', '123456789', 'Los coco', '26101877', 'sqwsqwsq', 4, 1, 1, 1, 1, 6, '2024-07-04 19:19:03', '2024-07-04 19:22:02'),
(2, '2024-07-04', 'Miguel Alejandro Estanga Martinez', '123456789', 'Los coco', '26101877', 'qswsqw', 4, 1, 1, 1, 1, 6, '2024-07-04 19:28:09', '2024-07-04 19:29:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_lentes`
--

CREATE TABLE `descripcion_lentes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `descripcion_lentes`
--

INSERT INTO `descripcion_lentes` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Metal Pasta Acetato Titanium', '2024-07-04 03:53:04', '2024-07-04 03:53:04'),
(2, 'Visiòn secilla bifocales progresivos', '2024-07-04 03:53:04', '2024-07-04 03:53:04'),
(3, 'Blandos tóricos gas permeable', '2024-07-04 03:53:04', '2024-07-04 03:53:04'),
(4, 'Metal pasta acetato', '2024-07-04 03:53:04', '2024-07-04 03:53:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidads`
--

CREATE TABLE `disponibilidads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `horas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `disponibilidads`
--

INSERT INTO `disponibilidads` (`id`, `horas`, `created_at`, `updated_at`) VALUES
(1, '08:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(2, '09:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(3, '10:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(4, '11:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(5, '12:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(6, '13:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(7, '14:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(8, '15:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(9, '16:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(10, '17:00', '2024-07-04 03:53:01', '2024-07-04 03:53:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Activo', '2024-07-04 03:52:58', '2024-07-04 03:52:58'),
(2, 'Cancelado', '2024-07-04 03:52:58', '2024-07-04 03:52:58'),
(3, 'Inactivo', '2024-07-04 03:52:58', '2024-07-04 03:52:58'),
(4, 'Rechazado', '2024-07-04 03:52:58', '2024-07-04 03:52:58'),
(5, 'Suspendido', '2024-07-04 03:52:58', '2024-07-04 03:52:58'),
(6, 'Relizado', '2024-07-04 03:52:58', '2024-07-04 03:52:58'),
(7, 'En proceso', '2024-07-04 03:52:58', '2024-07-04 03:52:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_r_t_x_e_s`
--

CREATE TABLE `examen_r_t_x_e_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DEferaEPH` varchar(255) NOT NULL,
  `DCilindroCYL` varchar(255) NOT NULL,
  `DEjeAXIS` varchar(255) NOT NULL,
  `DADD` varchar(255) NOT NULL,
  `IEferaSPH` varchar(255) NOT NULL,
  `ICilindroCLY` varchar(255) NOT NULL,
  `IEjeAXIS` varchar(255) NOT NULL,
  `IADD` varchar(255) NOT NULL,
  `id_optometrista` bigint(20) UNSIGNED DEFAULT NULL,
  `id_cliente` bigint(20) UNSIGNED DEFAULT NULL,
  `id_opstometrista_usuarios` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `examen_r_t_x_e_s`
--

INSERT INTO `examen_r_t_x_e_s` (`id`, `DEferaEPH`, `DCilindroCYL`, `DEjeAXIS`, `DADD`, `IEferaSPH`, `ICilindroCLY`, `IEjeAXIS`, `IADD`, `id_optometrista`, `id_cliente`, `id_opstometrista_usuarios`, `created_at`, `updated_at`) VALUES
(1, '2', '1', '2', '1', '1', '2', '1', '1', 2, 4, 1, '2024-07-04 19:22:02', '2024-07-04 19:22:02'),
(2, '1', '1', '2', '1', '1', '1', '1', '1', 2, 4, 2, '2024-07-04 19:29:04', '2024-07-04 19:29:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_05_23_163718_create_estados_table', 1),
(4, '2024_05_23_163718_create_users_table', 1),
(5, '2024_06_21_014021_create_permission_tables', 1),
(6, '2024_06_22_034803_create_perfils_table', 1),
(7, '2024_06_22_045848_create_disponibilidads_table', 1),
(8, '2024_06_22_051644_create_salud_generals_table', 1),
(9, '2024_06_22_051656_create_salud_oculars_table', 1),
(10, '2024_06_22_051710_create_patalogia_oculars_table', 1),
(11, '2024_06_23_162514_create_aegendas_table', 1),
(12, '2024_06_23_211412_create_notificacions_table', 1),
(13, '2024_06_28_054827_create_opstometrista_usuarios_table', 1),
(14, '2024_07_01_002325_create_examen_r_t_x_e_s_table', 1),
(15, '2024_07_03_233646_create_tipo_monturas_table', 1),
(16, '2024_07_03_233947_create_descripcion_lentes_table', 1),
(17, '2024_07_04_045050_create_productos_table', 1),
(18, '2024_08_04_022429_create_ventas_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(6, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacions`
--

CREATE TABLE `notificacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visto` tinyint(1) NOT NULL DEFAULT 0,
  `titulo` varchar(255) NOT NULL,
  `ruta` text NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notificacions`
--

INSERT INTO `notificacions` (`id`, `visto`, `titulo`, `ruta`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 0, 'Se ha asignado un optometristra correctamente ', 'optometrista.cita_show', 4, '2024-07-04 19:19:44', '2024-07-04 19:19:44'),
(2, 0, 'Se te ha asigando un paciente', 'optometrista.cita_show', 2, '2024-07-04 19:19:44', '2024-07-04 19:19:44'),
(3, 0, 'Se ha asignado un optometristra correctamente ', 'optometrista.cita_show', 4, '2024-07-04 19:28:48', '2024-07-04 19:28:48'),
(4, 0, 'Se te ha asigando un paciente', 'optometrista.cita_show', 2, '2024-07-04 19:28:48', '2024-07-04 19:28:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opstometrista_usuarios`
--

CREATE TABLE `opstometrista_usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_optometrista` bigint(20) UNSIGNED DEFAULT NULL,
  `id_cliente` bigint(20) UNSIGNED DEFAULT NULL,
  `id_agenda` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `opstometrista_usuarios`
--

INSERT INTO `opstometrista_usuarios` (`id`, `id_optometrista`, `id_cliente`, `id_agenda`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 1, '2024-07-04 19:19:44', '2024-07-04 19:19:44'),
(2, 2, NULL, 2, '2024-07-04 19:28:48', '2024-07-04 19:28:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patalogia_oculars`
--

CREATE TABLE `patalogia_oculars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patologia_ocular` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `patalogia_oculars`
--

INSERT INTO `patalogia_oculars` (`id`, `patologia_ocular`, `created_at`, `updated_at`) VALUES
(1, 'Sin antecedentes', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(2, 'Alergias oculares', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(3, 'Infecciones oculares', '2024-07-04 03:53:01', '2024-07-04 03:53:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfils`
--

CREATE TABLE `perfils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha_nacimiento` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfils`
--

INSERT INTO `perfils` (`id`, `direccion`, `sexo`, `edad`, `imagen`, `fecha_nacimiento`, `cedula`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '', 'Masculino', 26, 'avatars/avatar.png', '', '26101877', 1, '2024-07-04 03:53:12', '2024-07-04 03:53:12'),
(2, 'los coco', 'Masculino', 26, 'C:\\xampp\\tmp\\php774C.tmp', '2024-07-03', '26101877', 2, '2024-07-04 07:44:24', '2024-07-04 07:44:24'),
(3, 'vivienda', 'Masculino', 26, 'avatars/F3W3ByOf2MomGCEqLskNW5sQ6ulyvVip5cQvNDA6.png', '2024-07-04', '123123132', 3, '2024-07-04 19:13:10', '2024-07-04 19:13:25'),
(4, 'Los coco', 'Masculino', 11, 'default.png', '2024-07-04', '26101877', 4, '2024-07-04 19:19:03', '2024-07-04 19:19:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2024-07-04 03:53:12', '2024-07-04 03:53:12'),
(2, 'admin', 'web', '2024-07-04 03:53:12', '2024-07-04 03:53:12'),
(3, 'user', 'web', '2024-07-04 03:53:12', '2024-07-04 03:53:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `descripcion_montura` varchar(255) NOT NULL,
  `id_estado` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `marca`, `cantidad`, `descripcion`, `tipo`, `precio`, `descripcion_montura`, `id_estado`, `created_at`, `updated_at`, `imagen`) VALUES
(1, '123qweqwe', 'marca', '19', 'dwedwedwe', 'Cristales', '20', 'Visiòn secilla bifocales progresivos', NULL, '2024-07-04 04:21:25', '2024-07-04 19:17:23', 'productos/xMGLDT3LbBzb9e8uUEji9GEbxh3WC8SecY86facK.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Obtometrista', 'web', '2024-07-04 03:53:12', '2024-07-04 03:53:12'),
(2, 'Jefe de ventas', 'web', '2024-07-04 03:53:12', '2024-07-04 03:53:12'),
(3, 'cliente', 'web', '2024-07-04 03:53:12', '2024-07-04 03:53:12'),
(4, 'Gerente Administrativo', 'web', '2024-07-04 03:53:12', '2024-07-04 03:53:12'),
(5, 'Laborista optico', 'web', '2024-07-04 03:53:12', '2024-07-04 03:53:12'),
(6, 'SuperAdmin', 'web', '2024-07-04 03:53:12', '2024-07-04 03:53:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 6),
(2, 1),
(2, 2),
(2, 6),
(3, 1),
(3, 2),
(3, 3),
(3, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud_generals`
--

CREATE TABLE `salud_generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salud_general` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `salud_generals`
--

INSERT INTO `salud_generals` (`id`, `salud_general`, `created_at`, `updated_at`) VALUES
(1, 'Sin antecedentes', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(2, 'Hipertensión', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(3, 'Diabetes', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(4, 'Alergias a medicamentos', '2024-07-04 03:53:01', '2024-07-04 03:53:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud_oculars`
--

CREATE TABLE `salud_oculars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salud_ocular` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `salud_oculars`
--

INSERT INTO `salud_oculars` (`id`, `salud_ocular`, `created_at`, `updated_at`) VALUES
(1, 'Defectos visuales', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(2, 'Astigmatismo', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(3, 'Miopia', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(4, 'Hipertropia', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(5, 'Presbicia', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(6, 'Glaucoma', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(7, 'Cataratas', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(8, 'Pterigion', '2024-07-04 03:53:01', '2024-07-04 03:53:01'),
(9, 'ninguno', '2024-07-04 03:53:01', '2024-07-04 03:53:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6mxbPyRszjBYwOTdleEUayPiZBw7yvjvhMwSGhhM', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaHdMREpGSm11Sko4cDlvd0gyMXlzRVhnV2s0WnRKc0RoYjJsR2YwVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9yZXBvcnRlcy9wcm9kdWN0by9wZGY/dGlwbz0yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1720996434);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_monturas`
--

CREATE TABLE `tipo_monturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_monturas`
--

INSERT INTO `tipo_monturas` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Monturas', '2024-07-04 03:53:04', '2024-07-04 03:53:04'),
(2, 'Cristales', '2024-07-04 03:53:04', '2024-07-04 03:53:04'),
(3, 'Lentes Contactos', '2024-07-04 03:53:04', '2024-07-04 03:53:04'),
(4, 'Lentes de sol', '2024-07-04 03:53:04', '2024-07-04 03:53:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `id_estado` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `telefono`, `id_estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', NULL, '$2y$12$PespGQvprA4FDyvV7YI02.8WfPpHukhTCTAw6cowyAtczqXh/Kj8i', '+58 426 382 1517', NULL, NULL, '2024-07-04 03:53:12', '2024-07-04 03:53:12'),
(2, 'Miguel Estanaga', 'miguelestanga12@gmail.com', NULL, '$2y$12$DFM29Fg9DgnA8gxQ1OcIouIB4o.yFYGl2e6yQt8srA86uqiWs1LUG', '04263821517', 1, NULL, '2024-07-04 07:44:24', '2024-07-04 07:44:24'),
(3, 'Usuario', 'usuario@gmail.com', NULL, '$2y$12$mN09ANYzv0YIyaLuPlXipOrfoKgLWkb/wqReo6AV7F.sJgo4UMqUm', '12312312', 1, NULL, '2024-07-04 19:13:10', '2024-07-04 19:13:10'),
(4, 'Miguel Alejandro Estanga Martinez', 'miguelestanga1222@gmail.com', NULL, '$2y$12$.6pS1F41hDagcs380.jwzOv2EptqcnaKoe/h5V7jZGQp8EIMsnGoe', '123456789', 1, NULL, '2024-07-04 19:19:03', '2024-07-04 19:22:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `apellido_cliente` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `id_productos` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `nombre_cliente`, `apellido_cliente`, `cedula`, `telefono`, `cantidad`, `total`, `id_productos`, `created_at`, `updated_at`) VALUES
(1, '2024-07-03', 'Miguel Alejandro', 'Estanga Martinez', '26101877', '26101877', '1', '20', 1, '2024-07-04 06:55:24', '2024-07-04 06:55:24'),
(2, '2024-07-03', 'Miguel Alejandro', 'Estanga Martinez', '26101877', '26101877', '1', '20', 1, '2024-07-04 06:55:48', '2024-07-04 06:55:48'),
(3, '2024-07-04', 'nombre', 'apellido', '123123', '12312321', '1', '20', 1, '2024-07-04 19:14:56', '2024-07-04 19:14:56'),
(4, '2024-07-04', 'miguel', 'wqwqs', '123123', '13231', '1', '20', 1, '2024-07-04 19:16:51', '2024-07-04 19:16:51'),
(5, '2024-07-04', 'Miguel Estanga', 'Estanga Martinez', '26101877', '123123', '1', '20', 1, '2024-07-04 19:17:23', '2024-07-04 19:17:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aegendas`
--
ALTER TABLE `aegendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aegendas_id_user_foreign` (`id_user`),
  ADD KEY `aegendas_id_patalogia_ocular_foreign` (`id_patalogia_ocular`),
  ADD KEY `aegendas_id_salud_ocular_foreign` (`id_salud_ocular`),
  ADD KEY `aegendas_id_salud_general_foreign` (`id_salud_general`),
  ADD KEY `aegendas_id_disponibilidad_foreign` (`id_disponibilidad`),
  ADD KEY `aegendas_id_estado_foreign` (`id_estado`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `descripcion_lentes`
--
ALTER TABLE `descripcion_lentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `disponibilidads`
--
ALTER TABLE `disponibilidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `examen_r_t_x_e_s`
--
ALTER TABLE `examen_r_t_x_e_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examen_r_t_x_e_s_id_optometrista_foreign` (`id_optometrista`),
  ADD KEY `examen_r_t_x_e_s_id_cliente_foreign` (`id_cliente`),
  ADD KEY `examen_r_t_x_e_s_id_opstometrista_usuarios_foreign` (`id_opstometrista_usuarios`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `notificacions`
--
ALTER TABLE `notificacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notificacions_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `opstometrista_usuarios`
--
ALTER TABLE `opstometrista_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opstometrista_usuarios_id_optometrista_foreign` (`id_optometrista`),
  ADD KEY `opstometrista_usuarios_id_cliente_foreign` (`id_cliente`),
  ADD KEY `opstometrista_usuarios_id_agenda_foreign` (`id_agenda`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `patalogia_oculars`
--
ALTER TABLE `patalogia_oculars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfils`
--
ALTER TABLE `perfils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfils_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id_estado_foreign` (`id_estado`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `salud_generals`
--
ALTER TABLE `salud_generals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salud_oculars`
--
ALTER TABLE `salud_oculars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `tipo_monturas`
--
ALTER TABLE `tipo_monturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_estado_foreign` (`id_estado`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventas_id_productos_foreign` (`id_productos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aegendas`
--
ALTER TABLE `aegendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `descripcion_lentes`
--
ALTER TABLE `descripcion_lentes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `disponibilidads`
--
ALTER TABLE `disponibilidads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `examen_r_t_x_e_s`
--
ALTER TABLE `examen_r_t_x_e_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `notificacions`
--
ALTER TABLE `notificacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `opstometrista_usuarios`
--
ALTER TABLE `opstometrista_usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `patalogia_oculars`
--
ALTER TABLE `patalogia_oculars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfils`
--
ALTER TABLE `perfils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `salud_generals`
--
ALTER TABLE `salud_generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `salud_oculars`
--
ALTER TABLE `salud_oculars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipo_monturas`
--
ALTER TABLE `tipo_monturas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aegendas`
--
ALTER TABLE `aegendas`
  ADD CONSTRAINT `aegendas_id_disponibilidad_foreign` FOREIGN KEY (`id_disponibilidad`) REFERENCES `disponibilidads` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `aegendas_id_estado_foreign` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `aegendas_id_patalogia_ocular_foreign` FOREIGN KEY (`id_patalogia_ocular`) REFERENCES `patalogia_oculars` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `aegendas_id_salud_general_foreign` FOREIGN KEY (`id_salud_general`) REFERENCES `salud_generals` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `aegendas_id_salud_ocular_foreign` FOREIGN KEY (`id_salud_ocular`) REFERENCES `salud_oculars` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `aegendas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `examen_r_t_x_e_s`
--
ALTER TABLE `examen_r_t_x_e_s`
  ADD CONSTRAINT `examen_r_t_x_e_s_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `examen_r_t_x_e_s_id_opstometrista_usuarios_foreign` FOREIGN KEY (`id_opstometrista_usuarios`) REFERENCES `opstometrista_usuarios` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `examen_r_t_x_e_s_id_optometrista_foreign` FOREIGN KEY (`id_optometrista`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `notificacions`
--
ALTER TABLE `notificacions`
  ADD CONSTRAINT `notificacions_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `opstometrista_usuarios`
--
ALTER TABLE `opstometrista_usuarios`
  ADD CONSTRAINT `opstometrista_usuarios_id_agenda_foreign` FOREIGN KEY (`id_agenda`) REFERENCES `aegendas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `opstometrista_usuarios_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `opstometrista_usuarios_id_optometrista_foreign` FOREIGN KEY (`id_optometrista`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `perfils`
--
ALTER TABLE `perfils`
  ADD CONSTRAINT `perfils_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_id_estado_foreign` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_estado_foreign` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_id_productos_foreign` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
