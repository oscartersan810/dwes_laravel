-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2025 a las 20:59:45
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
-- Base de datos: `gestormv`
--
CREATE DATABASE IF NOT EXISTS `gestormv` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gestormv`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinas_virtuales`
--

CREATE TABLE IF NOT EXISTS `maquinas_virtuales` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `so` varchar(50) NOT NULL,
  `ram` int(11) NOT NULL,
  `cpu` int(11) NOT NULL,
  `discoduro` int(11) NOT NULL,
  `tipoRed` varchar(50) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `maquinas_virtuales_id_usuario_foreign` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `maquinas_virtuales`
--

INSERT INTO `maquinas_virtuales` (`id`, `nombre`, `so`, `ram`, `cpu`, `discoduro`, `tipoRed`, `fecha_creacion`, `id_usuario`, `created_at`, `updated_at`) VALUES
(1, 'VM-23tg', 'Debian 8', 11, 3, 181, 'Adaptador Puente', '2022-06-27 11:30:16', 7, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(2, 'VM-78tm', 'CentOS 6', 10, 2, 323, 'Adaptador Puente', '2020-07-11 10:33:46', 4, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(3, 'VM-99cs', 'CentOS 7', 14, 2, 122, 'Host-only', '2020-09-16 05:34:36', 9, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(4, 'VM-36ft', 'Guadalinex V11', 10, 3, 386, 'NAT', '2023-07-24 04:23:40', 4, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(5, 'VM-68nr', 'Ubuntu 20.04 LTS', 5, 2, 428, 'NAT', '2024-06-18 18:50:20', 6, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(6, 'VM-63yz', 'Fedora 35', 8, 2, 237, 'Host-only', '2021-05-25 07:17:25', 5, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(7, 'VM-86pt', 'MaxOS X', 5, 4, 276, 'Host-only', '2022-10-21 22:40:28', 6, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(8, 'VM-73rv', 'Guadalinex V9', 9, 4, 245, 'Host-only', '2021-02-01 15:36:49', 1, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(9, 'VM-25ip', 'Ubuntu 16.04 LTS', 6, 3, 109, 'NAT', '2021-03-01 17:19:19', 1, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(10, 'VM-60ve', 'Ubuntu 14.04 LTS', 9, 1, 248, 'Host-only', '2020-03-30 08:25:13', 7, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(11, 'VM-60iu', 'Debian 11', 9, 1, 374, 'Host-only', '2024-03-08 04:51:09', 1, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(12, 'VM-21xc', 'Windows 10', 9, 2, 103, 'Host-only', '2022-12-31 01:48:27', 8, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(13, 'VM-98cu', 'Debian 9', 16, 1, 148, 'Host-only', '2020-05-01 15:00:57', 10, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(14, 'VM-80gs', 'Ubuntu 18.04 LTS', 2, 1, 112, 'NAT', '2024-06-11 23:07:25', 9, '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(15, 'VM-33eu', 'Ubuntu 14.04 LTS', 13, 4, 379, 'Adaptador Puente', '2022-08-14 19:12:36', 3, '2025-03-07 20:23:28', '2025-03-07 20:23:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_04_081120_create_usuarios_table', 1),
(5, '2025_03_04_081122_create_maquinas_virtuales_table', 1),
(6, '2025_03_04_091259_add_rol_to_usuarios_table', 1),
(7, '2025_03_05_110059_add_password_to_usuarios_table', 1),
(8, '2025_03_07_113605_add_email_to_usuarios_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('YEl7QCgOQbMuTDyaBFrdDZ1Yt8tPo9Avyw51Uq4y', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidkE0ZzhZSklwZWRJR1ZvandhSmZqODRUaHliU1ZvMHppNjA3MTRuWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1741463764);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oscar', 'oscartersan810@gmail.com', NULL, '$2y$12$8G/Jm1sfr5TYW6xinCYzcOaoxWkl7HGbX0eRAxX18.HS2TUtzgRJW', 'R4O4qkCTqzjz5Q4vRpZ4y7uZjAheQfFRJpkK38U4bKkepedUVymlvbggwMUL', '2025-03-08 18:14:38', '2025-03-08 18:56:04'),
(2, 'Carlos', 'carlitos33@gmail.com', NULL, '$2y$12$KdkjiawcmByXWThQ5m9BPO0LAG2bg8sUqIucE9jB0nSqSwmqSsePu', NULL, '2025-03-08 18:54:43', '2025-03-08 18:54:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `apodo` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `rol` enum('admin','user') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `apodo`, `email`, `email_verified_at`, `password`, `edad`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'Eloise Kassulke', 'Rolfson', 'nick.bergnaum', 'heather.wisozk@example.org', '2025-03-07 20:23:28', '82k,a$1g', 54, 'admin', '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(2, 'Mrs. Delphine Kassulke III', 'Altenwerth', 'glover.della', 'vfeil@example.net', '2025-03-07 20:23:28', '4V_;#\'A\\[[1}dn98', 54, 'user', '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(3, 'Mrs. Maudie Goodwin IV', 'Kassulke', 'lula.halvorson', 'lolita.gerhold@example.com', '2025-03-07 20:23:28', 'GzjHj\'Km&0o$m-iyg', 18, 'admin', '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(4, 'Sage Runte', 'Hackett', 'heidenreich.muhammad', 'lorenzo78@example.org', '2025-03-07 20:23:28', 'Gg+_HF.UmeRL3', 58, 'admin', '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(5, 'Katrina Gaylord', 'Daugherty', 'ireichert', 'roger.feest@example.net', '2025-03-07 20:23:28', '4c<j*zL<_%;\'o', 52, 'admin', '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(6, 'Carson Spinka', 'Waters', 'amir40', 'hahn.adrian@example.net', '2025-03-07 20:23:28', 'l`y,S\\xEd\"bvalc#Xbu', 21, 'user', '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(7, 'Zoe O\'Kon', 'Von', 'bthiel', 'rath.orpha@example.net', '2025-03-07 20:23:28', 'Xw`7s)Cu^=xM:A}rei', 46, 'user', '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(8, 'Prof. Antonio Purdy', 'Hudson', 'reta16', 'barton.evan@example.com', '2025-03-07 20:23:28', '7vS>{,ejqmAB&wV0A', 29, 'user', '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(9, 'Trace Turner', 'Aufderhar', 'bogisich.sadie', 'chris47@example.org', '2025-03-07 20:23:28', 'E>3HLDL}', 45, 'user', '2025-03-07 20:23:28', '2025-03-07 20:23:28'),
(10, 'Ashtyn Mohr', 'Becker', 'madelyn.cassin', 'felicia55@example.net', '2025-03-07 20:23:28', 'AcHO>l', 30, 'admin', '2025-03-07 20:23:28', '2025-03-07 20:23:28');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `maquinas_virtuales`
--
ALTER TABLE `maquinas_virtuales`
  ADD CONSTRAINT `maquinas_virtuales_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
