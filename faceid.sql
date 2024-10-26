-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2024 at 07:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faceid`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('current_date', 's:15:\"20241026_140823\";', 1729926512),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:43:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:10:\"users-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:12:\"users-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:10:\"users-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"users-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:10:\"roles-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:5;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:12:\"roles-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:5;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:10:\"roles-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:5;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:12:\"roles-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:16:\"permissions-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:5;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:18:\"permissions-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:5;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:16:\"permissions-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:5;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:18:\"permissions-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:11:\"divisi-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:13;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:13:\"divisi-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:14;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:11:\"divisi-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:5;i:2;i:8;}}i:15;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:13:\"divisi-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:16;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:14:\"placement-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:17;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:16:\"placement-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:18;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:14:\"placement-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:5;i:2;i:8;}}i:19;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:16:\"placement-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:20;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:13:\"golongan-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:21;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:15:\"golongan-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:22;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:13:\"golongan-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:5;i:2;i:8;}}i:23;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:15:\"golongan-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:24;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:12:\"jabatan-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:25;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:14:\"jabatan-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:26;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:12:\"jabatan-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:5;i:2;i:8;}}i:27;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:14:\"jabatan-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:28;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:12:\"pegawai-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:29;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:14:\"pegawai-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:8;}}i:30;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:12:\"pegawai-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:5;i:2;i:8;}}i:31;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:14:\"pegawai-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:32;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:8:\"log-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:5;i:2;i:7;}}i:33;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:10:\"log-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:5;i:3;i:7;}}i:34;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:8:\"log-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:10:\"log-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:11:\"dayoff-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:7;i:2;i:8;}}i:37;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:13:\"dayoff-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:7;i:2;i:8;}}i:38;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:11:\"dayoff-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:7;i:2;i:8;}}i:39;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:13:\"dayoff-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:40;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:13:\"dayoff-detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:7;i:2;i:8;}}i:41;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:14:\"dayoff-confirm\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:7:\"capture\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}}s:5:\"roles\";a:5:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:5;s:1:\"b\";s:7:\"Support\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:3:\"HRD\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:8;s:1:\"b\";s:10:\"Management\";s:1:\"c\";s:3:\"web\";}i:4;a:3:{s:1:\"a\";i:7;s:1:\"b\";s:8:\"Employee\";s:1:\"c\";s:3:\"web\";}}}', 1730003351),
('user@indo|127.0.0.1', 'i:1;', 1729925604),
('user@indo|127.0.0.1:timer', 'i:1729925604;', 1729925604);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2024_10_01_153336_create_tbllog_table', 6),
(23, '0001_01_01_000000_create_users_table', 7),
(24, '0001_01_01_000001_create_cache_table', 7),
(25, '0001_01_01_000002_create_jobs_table', 7),
(26, '2024_08_30_022504_create_tb_pegawai_table', 7),
(27, '2024_09_02_111823_create_tb_attendance_table', 7),
(28, '2024_09_02_112424_create_tb_attendance_out_table', 7),
(29, '2024_09_02_145341_create_tb_jabatan_table', 7),
(30, '2024_09_09_105914_create_personal_access_tokens_table', 7),
(31, '2024_09_20_164511_create_tb_division_table', 7),
(32, '2024_09_20_164525_create_tb_placement_table', 7),
(33, '2024_09_30_131459_create_tb_log_table', 7),
(34, '2024_10_01_150019_create_tbllog_table', 7),
(35, '2024_10_03_144245_create_tb_golongan_table', 8),
(36, '2024_10_04_101514_create_tb_jadwal_table', 9),
(38, '2024_10_05_111906_create_roles_and_permissions_tables', 10),
(39, '2024_10_05_115006_create_permission_tables', 11),
(40, '2024_10_05_133509_create_permission_tables', 12),
(41, '2024_10_11_090452_create_permission_tables', 13),
(42, '2024_10_14_134628_create_tb_dayoff_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1005),
(7, 'App\\Models\\User', 1006),
(7, 'App\\Models\\User', 1007),
(7, 'App\\Models\\User', 1008),
(7, 'App\\Models\\User', 1014),
(7, 'App\\Models\\User', 1015);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'users-list', 'web', '2024-10-11 03:21:32', '2024-10-11 03:21:32'),
(2, 'users-create', 'web', '2024-10-11 03:21:32', '2024-10-11 03:21:32'),
(3, 'users-edit', 'web', '2024-10-11 03:21:32', '2024-10-11 03:21:32'),
(4, 'users-delete', 'web', '2024-10-11 03:21:32', '2024-10-11 03:21:32'),
(5, 'roles-list', 'web', '2024-10-10 20:21:32', '2024-10-10 20:21:32'),
(6, 'roles-create', 'web', '2024-10-10 20:21:32', '2024-10-10 20:21:32'),
(7, 'roles-edit', 'web', '2024-10-10 20:21:32', '2024-10-10 20:21:32'),
(8, 'roles-delete', 'web', '2024-10-10 20:21:32', '2024-10-10 20:21:32'),
(9, 'permissions-list', 'web', '2024-10-10 20:21:32', '2024-10-10 20:21:32'),
(10, 'permissions-create', 'web', '2024-10-10 20:21:32', '2024-10-10 20:21:32'),
(11, 'permissions-edit', 'web', '2024-10-10 20:21:32', '2024-10-10 20:21:32'),
(12, 'permissions-delete', 'web', '2024-10-10 20:21:32', '2024-10-10 20:21:32'),
(21, 'divisi-list', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(22, 'divisi-create', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(23, 'divisi-edit', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(24, 'divisi-delete', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(25, 'placement-list', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(26, 'placement-create', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(27, 'placement-edit', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(28, 'placement-delete', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(29, 'golongan-list', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(30, 'golongan-create', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(31, 'golongan-edit', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(32, 'golongan-delete', 'web', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(33, 'jabatan-list', 'web', '2024-10-12 03:24:38', '2024-10-12 03:24:38'),
(34, 'jabatan-create', 'web', '2024-10-12 03:24:38', '2024-10-12 03:24:38'),
(35, 'jabatan-edit', 'web', '2024-10-12 03:24:38', '2024-10-12 03:24:38'),
(36, 'jabatan-delete', 'web', '2024-10-12 03:24:38', '2024-10-12 03:24:38'),
(37, 'pegawai-list', 'web', '2024-10-12 03:24:38', '2024-10-12 03:24:38'),
(38, 'pegawai-create', 'web', '2024-10-12 03:24:38', '2024-10-12 03:24:38'),
(39, 'pegawai-edit', 'web', '2024-10-12 03:24:38', '2024-10-12 03:24:38'),
(40, 'pegawai-delete', 'web', '2024-10-12 03:24:38', '2024-10-12 03:24:38'),
(41, 'log-list', 'web', '2024-10-12 03:25:02', '2024-10-12 03:25:02'),
(42, 'log-create', 'web', '2024-10-12 03:25:02', '2024-10-12 03:25:02'),
(43, 'log-edit', 'web', '2024-10-12 03:25:02', '2024-10-12 03:25:02'),
(44, 'log-delete', 'web', '2024-10-12 03:25:02', '2024-10-12 03:25:02'),
(45, 'dayoff-list', 'web', '2024-10-14 07:15:09', '2024-10-14 07:15:09'),
(46, 'dayoff-create', 'web', '2024-10-14 07:15:09', '2024-10-14 07:15:09'),
(47, 'dayoff-edit', 'web', '2024-10-14 07:15:09', '2024-10-14 07:15:09'),
(48, 'dayoff-delete', 'web', '2024-10-14 07:15:09', '2024-10-14 07:15:09'),
(49, 'dayoff-detail', 'web', '2024-10-17 04:49:24', '2024-10-17 04:49:24'),
(50, 'dayoff-confirm', 'web', '2024-10-22 04:26:10', '2024-10-22 04:30:02'),
(51, 'capture', 'web', '2024-10-24 07:11:12', '2024-10-24 07:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-10-11 03:25:37', '2024-10-11 03:25:37'),
(2, 'HRD', 'web', '2024-10-11 03:25:37', '2024-10-11 03:25:37'),
(5, 'Support', 'web', '2024-10-12 02:03:29', '2024-10-12 02:03:29'),
(7, 'Employee', 'web', '2024-10-14 06:26:09', '2024-10-14 06:26:09'),
(8, 'Management', 'web', '2024-10-17 09:28:29', '2024-10-17 09:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(21, 2),
(22, 2),
(25, 2),
(26, 2),
(29, 2),
(30, 2),
(33, 2),
(34, 2),
(37, 2),
(38, 2),
(42, 2),
(5, 5),
(6, 5),
(7, 5),
(9, 5),
(10, 5),
(11, 5),
(21, 5),
(22, 5),
(23, 5),
(25, 5),
(26, 5),
(27, 5),
(29, 5),
(30, 5),
(31, 5),
(33, 5),
(34, 5),
(35, 5),
(37, 5),
(38, 5),
(39, 5),
(41, 5),
(42, 5),
(41, 7),
(42, 7),
(45, 7),
(46, 7),
(47, 7),
(49, 7),
(51, 7),
(21, 8),
(22, 8),
(23, 8),
(24, 8),
(25, 8),
(26, 8),
(27, 8),
(28, 8),
(29, 8),
(30, 8),
(31, 8),
(32, 8),
(33, 8),
(34, 8),
(35, 8),
(36, 8),
(37, 8),
(38, 8),
(39, 8),
(40, 8),
(45, 8),
(46, 8),
(47, 8),
(48, 8),
(49, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1YlwIG37nMUYsTdLLYs9JWIJFkLxHEREDlJ6B9gE', 1006, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSXo0QnhuU29zd1VMNGR3OGpSdFdyZmRqaTBYcXZRS1hndFpXb3dWUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHA6Ly83ZDAyLTIwMi0xNjItMTk1LTE0Ni5uZ3Jvay1mcmVlLmFwcC9hcGkvZ2V0UGVnYXdhaURhdGEvMjgxMDE5OTkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTAwNjtzOjEyOiJjdXJyZW50X2RhdGUiO3M6MTU6IjIwMjQxMDI2XzEzNDE1NCI7fQ==', 1729924915),
('5YC761Ahv4C1y5HnrADYpX3VZ6mBbTcU9qyMxOu5', 1015, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOXQ4WXJyRkpvYlNmNUFDT21wYkdJMXhDVFlXNVZGWkRGeGhBZ2U0bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODE6Imh0dHA6Ly8xbnRnZGNjdHhxLmxvY2x4LmlvL2FwaS9nZXRQZWdhd2FpLyU3QiU3QiUyMCRkYXRhLSUzRWtvZGVfcGVnYXdhaSUyMCU3RCU3RCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwMTU7fQ==', 1729925995),
('AHSudQ4DoH2KhZz7UZmK1NlrKMigPVnSpo9yJExK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOWJNd3J6WXB6SVIwblBCNmpMOUlnMzRJT2lVZVJWd0FpQUVhTk5ZeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHA6Ly83ZDAyLTIwMi0xNjItMTk1LTE0Ni5uZ3Jvay1mcmVlLmFwcC9hcGkvZ2V0UGVnYXdhaSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1729924779),
('h2uMqZivveeZMc50KX89ZhaA7VNdJ6ZBkI6TIM6t', 1015, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNUF6NWNoQ3ZnYTRDMkwxZXZwRDg1MlhTbFZRNHFBVm84aGQxUmp5ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly9qY2Q4cXZ5aWt4LmxvY2x4LmlvL2FwaS9nZXRQZWdhd2FpRGF0YS8xMzMzMTAyMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMDE1O3M6MTI6ImN1cnJlbnRfZGF0ZSI7czoxNToiMjAyNDEwMjZfMTQwODIzIjt9', 1729926505),
('irzsI32oZJW3eZLi19cnvrhTVFgnxksjbK9o6mgp', 1006, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZWFNbG5xbXZjZENVRlJGanFUb0FpMnQ4T0FoZFA3Zm90ak9mb1dYaiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU0OiJodHRwOi8vMW50Z2RjY3R4cS5sb2NseC5pby9hcGkvZ2V0UGVnYXdhaURhdGEvMjgxMDE5OTkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMDA2O3M6MTI6ImN1cnJlbnRfZGF0ZSI7czoxNToiMjAyNDEwMjZfMTM1MDQ4Ijt9', 1729925450),
('M1cQ3DfVJSRw8dScouymj0aTZiExIKbGSrBX2axn', 1015, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidEZoclMzWWk1cEN4N0gxSE10ak1Cd3Q4WG4wdnBoSURRYm1yTExjeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTE6Imh0dHBzOi8vaW5kb2RhY2luLnRlc3QvZjZmYTQ2NTQ1NWExYTljYWE3OTg1NDg3NjM2MmU3Yzc0YjBmOTM1Zi8xMzMzMTAyMzIwMjQxMDI2XzE0MDgyMy5wbmciO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMDE1O30=', 1729926514),
('N23Xt2TParhZPwsvRXy2nDImc1OwXXUAz2lWODJh', 1006, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTjFLMDVYdkp0RktKQ1Z3ZmhYZnFUWGJUaXZ2S29GbWxUdzhyRU1tSSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU0OiJodHRwOi8vMW50Z2RjY3R4cS5sb2NseC5pby9hcGkvZ2V0UGVnYXdhaURhdGEvMjgxMDE5OTkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMDA2O3M6MTI6ImN1cnJlbnRfZGF0ZSI7czoxNToiMjAyNDEwMjZfMTM1NDExIjt9', 1729925653);

-- --------------------------------------------------------

--
-- Table structure for table `tb_attendance`
--

CREATE TABLE `tb_attendance` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_pegawai` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upl` tinyint DEFAULT NULL,
  `upl68` tinyint DEFAULT NULL,
  `uplm68` tinyint DEFAULT NULL,
  `upljam` tinyint DEFAULT NULL,
  `jenis` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktuori` datetime DEFAULT NULL,
  `status` tinyint DEFAULT NULL,
  `jam_masuk` datetime NOT NULL,
  `longitude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `latitude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photoURL` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_attendance`
--

INSERT INTO `tb_attendance` (`id`, `kode_pegawai`, `upl`, `upl68`, `uplm68`, `upljam`, `jenis`, `waktuori`, `status`, `jam_masuk`, `longitude`, `latitude`, `photoURL`, `created_at`, `updated_at`) VALUES
(49, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 08:22:04', 1, '2024-10-26 08:22:04', NULL, NULL, '2810199920241026_082204', '2024-10-26 01:22:04', '2024-10-26 01:22:04'),
(50, '13331023', 0, 0, 0, 0, 'Wajah', '2024-10-26 14:04:29', 1, '2024-10-26 14:04:29', '108.49411453191', '-7.2222225736288', '1333102320241026_140427', '2024-10-26 07:04:29', '2024-10-26 07:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_attendance_out`
--

CREATE TABLE `tb_attendance_out` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_pegawai` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upl` tinyint DEFAULT NULL,
  `upl68` tinyint DEFAULT NULL,
  `uplm68` tinyint DEFAULT NULL,
  `upljam` tinyint DEFAULT NULL,
  `jenis` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktuori` datetime DEFAULT NULL,
  `status` tinyint DEFAULT NULL,
  `jam_keluar` datetime NOT NULL,
  `longitude` text COLLATE utf8mb4_unicode_ci,
  `latitude` text COLLATE utf8mb4_unicode_ci,
  `photoURL` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_attendance_out`
--

INSERT INTO `tb_attendance_out` (`id`, `kode_pegawai`, `upl`, `upl68`, `uplm68`, `upljam`, `jenis`, `waktuori`, `status`, `jam_keluar`, `longitude`, `latitude`, `photoURL`, `created_at`, `updated_at`) VALUES
(153, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 08:30:06', 1, '2024-10-26 08:30:06', '98.663134', '3.5074946', '2810199920241026_083006', '2024-10-26 01:30:06', '2024-10-26 01:30:06'),
(154, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 08:31:26', 1, '2024-10-26 08:31:26', '98.703134', '3.6037496', '2810199920241026_083126', '2024-10-26 01:31:26', '2024-10-26 01:31:26'),
(155, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 08:35:42', 1, '2024-10-26 08:35:42', '98.693134', '3.8037496', '2810199920241026_083542', '2024-10-26 01:35:42', '2024-10-26 01:35:42'),
(156, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 08:38:08', 1, '2024-10-26 08:38:08', '98.673134', '3.6637496', '2810199920241026_083808', '2024-10-26 01:38:08', '2024-10-26 01:38:08'),
(157, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 09:14:11', 1, '2024-10-26 09:14:11', '98.683134', '3.5037496', '2810199920241026_091411', '2024-10-26 02:14:11', '2024-10-26 02:14:11'),
(159, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 13:41:54', 1, '2024-10-26 13:41:54', '98.6690342', '3.5915567', '2810199920241026_134154', '2024-10-26 06:41:54', '2024-10-26 06:41:54'),
(160, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 13:47:11', 1, '2024-10-26 13:47:11', '103.5997866705', '-1.5533481621924', '2810199920241026_134709', '2024-10-26 06:47:11', '2024-10-26 06:47:11'),
(161, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 13:50:50', 1, '2024-10-26 13:50:50', '111.66999369569', '-0.21957560603587', '2810199920241026_135048', '2024-10-26 06:50:50', '2024-10-26 06:50:50'),
(162, '28101999', 0, 0, 0, 0, 'Wajah', '2024-10-26 13:54:13', 1, '2024-10-26 13:54:13', '125.09470528094', '1.8797259698857', '2810199920241026_135411', '2024-10-26 06:54:13', '2024-10-26 06:54:13'),
(163, '13331023', 0, 0, 0, 0, 'Wajah', '2024-10-26 14:08:25', 1, '2024-10-26 14:08:25', '106.71728190245', '-6.5085785316488', '1333102320241026_140823', '2024-10-26 07:08:25', '2024-10-26 07:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dayoff`
--

CREATE TABLE `tb_dayoff` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dayoff_for` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_dari` text COLLATE utf8mb4_unicode_ci,
  `tgl_hingga` text COLLATE utf8mb4_unicode_ci,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_dayoff`
--

INSERT INTO `tb_dayoff` (`id`, `id_user`, `dayoff_for`, `url`, `tgl_dari`, `tgl_hingga`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(12, '28101999', 'Absen', NULL, '2024-10-15T08:29', '2024-10-16T08:29', '<p>Salam hormat,</p><p><br></p><p>Saya yang bertanda tangan dibawah ini ingin mengajukan izin tidak dapat datang ke kantor dikarenakan <strong>SAKIT PARAH SIH KEKNYA.</strong></p><p><br></p><p>Berikut saya sertakan surat sakit dan beberapa <strong>bukti </strong>bahwasanya memang benar saya sakit parah keknya:</p><p><br></p><p><strong>Surat Sakit:</strong></p><p><img src=\"/storage/uploads/iR00lyY1kvvK6eylajznD4v2NhM0j1gBF9oMMPuq.png\"></p><p><img src=\"/storage/uploads/Bdr2cb5GakrrxcVAwMlLhjkJXMLiJg4SnFMB1xqI.png\"></p><p>Foto saat berobat:</p><p><br></p>', '1', '2024-10-15 01:31:46', '2024-10-17 09:17:00'),
(14, '14102024', 'Izin', NULL, '2024-10-22T11:10', '2024-10-23T11:10', '<p>Sakit </p>', '2', '2024-10-22 04:10:34', '2024-10-22 04:10:34'),
(15, '14102024', 'Sakit', NULL, '2024-10-22T08:00', '2024-10-25T08:00', '<p><img src=\"/storage/uploads/GdcqjJfi5qpSnhtu7E4lMG2gGxlnAdARb6ioz8dF.png\"></p>', '2', '2024-10-22 04:45:44', '2024-10-22 04:45:44'),
(16, '14102024', 'PC', NULL, '2024-10-22T13:31', '2024-10-22T15:31', '<div data-value=\"true\"></div><p>asdxsaycvbbbbbbbbbbbbbbbbbbbbbbbbbbyyyyysssssssssssssssssssssooooooooooooooooooooooo</p><div data-value=\"true\"></div><p><img src=\"/storage/uploads/Y52NAOVOqwDC2afjbVaPdUrWYGoDKetQgCZBBzUy.png\"></p>', '2', '2024-10-22 06:33:30', '2024-10-22 06:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_division`
--

CREATE TABLE `tb_division` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_divisi` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_divisi` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_division`
--

INSERT INTO `tb_division` (`id`, `kode_divisi`, `nama_divisi`, `created_at`, `updated_at`) VALUES
(7, '1001', 'Marketing', '2024-09-29 20:25:09', '2024-09-29 20:25:09'),
(8, '2001', 'Finance', '2024-09-29 20:25:16', '2024-09-29 20:25:16'),
(9, '3001', 'Admin', '2024-09-29 20:25:29', '2024-09-29 20:25:29'),
(10, '4001', 'Technician', '2024-09-29 20:25:40', '2024-09-29 20:25:40'),
(11, '5001', 'IT Support', '2024-09-29 20:25:50', '2024-10-08 07:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_golongan` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`id`, `nama_golongan`, `alias`, `created_at`, `updated_at`) VALUES
(4, 'Karyawan Tetap', 'Kartap', '2024-10-04 03:22:16', '2024-10-04 03:22:16'),
(5, 'Harian Lepas', 'Harlep', '2024-10-04 03:39:33', '2024-10-04 03:39:33'),
(6, 'Piket', 'Piket', '2024-10-04 03:44:35', '2024-10-04 03:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_jabatan` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penempatan` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id`, `nama_jabatan`, `divisi`, `penempatan`, `created_at`, `updated_at`) VALUES
(11, 'Software Developer', '11', 5, '2024-09-29 20:26:23', '2024-10-07 09:36:00'),
(12, 'Service', '9', 5, '2024-09-29 21:56:58', '2024-09-29 21:57:37'),
(13, 'Telemarketing', '9', 5, '2024-09-29 21:57:09', '2024-09-29 21:57:42'),
(14, 'Kasir', '8', 5, '2024-09-29 21:57:55', '2024-10-09 04:00:00'),
(15, 'Piutang', '8', 5, '2024-09-29 21:58:05', '2024-09-29 21:58:05'),
(24, 'Hardware Support', '11', 5, '2024-10-14 03:18:45', '2024-10-14 03:18:45'),
(25, 'Teknisi Office', '10', 5, '2024-10-24 02:47:04', '2024-10-24 02:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` bigint UNSIGNED NOT NULL,
  `id_golongan` int DEFAULT NULL,
  `hari` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_masuk` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_keluar` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `break_start` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `break_end` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `id_golongan`, `hari`, `jam_masuk`, `jam_keluar`, `break_start`, `break_end`, `created_at`, `updated_at`) VALUES
(1, 4, 'Senin', '08:00', '17:00', NULL, NULL, '2024-10-04 03:22:16', '2024-10-04 04:33:36'),
(2, 4, 'Selasa', '08:00', '17:00', NULL, NULL, '2024-10-04 03:22:16', '2024-10-04 04:33:37'),
(3, 4, 'Rabu', '08:00', '17:00', NULL, NULL, '2024-10-04 03:22:16', '2024-10-04 04:33:37'),
(4, 4, 'Kamis', '08:00', '17:00', NULL, NULL, '2024-10-04 03:22:16', '2024-10-04 04:33:37'),
(5, 4, 'Jumat', '08:00', '16:30', NULL, NULL, '2024-10-04 03:22:16', '2024-10-04 04:33:52'),
(6, 4, 'Sabtu', '08:00', '14:00', NULL, NULL, '2024-10-04 03:22:16', '2024-10-04 04:33:52'),
(7, 5, 'Senin', '08:00', '17:00', NULL, NULL, '2024-10-04 03:39:33', '2024-10-04 04:34:19'),
(8, 5, 'Selasa', '08:00', '17:00', NULL, NULL, '2024-10-04 03:39:33', '2024-10-04 04:34:19'),
(9, 5, 'Rabu', '08:00', '17:00', NULL, NULL, '2024-10-04 03:39:33', '2024-10-04 04:34:19'),
(10, 5, 'Kamis', '08:00', '17:00', NULL, NULL, '2024-10-04 03:39:33', '2024-10-04 04:34:19'),
(11, 5, 'Jumat', '08:00', '17:00', NULL, NULL, '2024-10-04 03:39:33', '2024-10-04 04:34:19'),
(12, 5, 'Sabtu', '08:00', '17:00', NULL, NULL, '2024-10-04 03:39:33', '2024-10-04 04:34:19'),
(13, 6, 'Senin', '00:00', '00:00', NULL, NULL, '2024-10-04 03:44:35', '2024-10-04 04:32:56'),
(14, 6, 'Selasa', '00:00', '00:00', NULL, NULL, '2024-10-04 03:44:35', '2024-10-04 03:44:35'),
(15, 6, 'Rabu', '00:00', '00:00', NULL, NULL, '2024-10-04 03:44:35', '2024-10-04 03:44:35'),
(16, 6, 'Kamis', '00:00', '00:00', NULL, NULL, '2024-10-04 03:44:35', '2024-10-04 03:44:35'),
(17, 6, 'Jumat', '00:00', '00:00', NULL, NULL, '2024-10-04 03:44:35', '2024-10-04 03:44:35'),
(18, 6, 'Sabtu', '00:00', '00:00', NULL, NULL, '2024-10-04 03:44:35', '2024-10-04 03:44:35'),
(19, 7, 'Senin', NULL, NULL, NULL, NULL, '2024-10-04 04:27:00', '2024-10-04 04:27:00'),
(20, 7, 'Selasa', NULL, NULL, NULL, NULL, '2024-10-04 04:27:00', '2024-10-04 04:27:00'),
(21, 7, 'Rabu', NULL, NULL, NULL, NULL, '2024-10-04 04:27:00', '2024-10-04 04:27:00'),
(22, 7, 'Kamis', NULL, NULL, NULL, NULL, '2024-10-04 04:27:00', '2024-10-04 04:27:00'),
(23, 7, 'Jumat', NULL, NULL, NULL, NULL, '2024-10-04 04:27:00', '2024-10-04 04:27:00'),
(24, 7, 'Sabtu', NULL, NULL, NULL, NULL, '2024-10-04 04:27:00', '2024-10-04 04:27:00'),
(25, 8, 'Senin', '00:00', '15:00', NULL, NULL, '2024-10-04 04:28:49', '2024-10-04 04:31:23'),
(26, 8, 'Selasa', '00:00', '00:00', NULL, NULL, '2024-10-04 04:28:49', '2024-10-04 04:28:49'),
(27, 8, 'Rabu', '00:00', '00:00', NULL, NULL, '2024-10-04 04:28:49', '2024-10-04 04:28:49'),
(28, 8, 'Kamis', '00:00', '00:00', NULL, NULL, '2024-10-04 04:28:49', '2024-10-04 04:28:49'),
(29, 8, 'Jumat', '00:00', '00:00', NULL, NULL, '2024-10-04 04:28:49', '2024-10-04 04:28:49'),
(30, 8, 'Sabtu', '00:00', '00:00', NULL, NULL, '2024-10-04 04:28:49', '2024-10-04 04:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_action` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_location` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id`, `user_id`, `user_action`, `ip_address`, `user_agent`, `user_location`, `created_at`, `updated_at`) VALUES
(1, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-01 09:55:37', '2024-10-01 09:55:37'),
(2, '1', 'register > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-01 09:55:37', '2024-10-01 09:55:37'),
(3, '1', 'jabatan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-01 10:00:34', '2024-10-01 10:00:34'),
(4, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-01 10:01:44', '2024-10-01 10:01:44'),
(5, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-01 10:01:44', '2024-10-01 10:01:44'),
(6, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-01 10:01:44', '2024-10-01 10:01:44'),
(7, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 01:19:30', '2024-10-02 01:19:30'),
(8, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 01:19:30', '2024-10-02 01:19:30'),
(9, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 01:23:18', '2024-10-02 01:23:18'),
(10, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 01:36:18', '2024-10-02 01:36:18'),
(11, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 01:36:18', '2024-10-02 01:36:18'),
(12, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 01:47:03', '2024-10-02 01:47:03'),
(13, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36 OPR/84.0.0.0', 'Unknown', '2024-10-02 01:52:53', '2024-10-02 01:52:53'),
(14, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36 OPR/84.0.0.0', 'Unknown', '2024-10-02 01:52:53', '2024-10-02 01:52:53'),
(15, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36 OPR/84.0.0.0', 'Unknown', '2024-10-02 01:53:22', '2024-10-02 01:53:22'),
(16, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:02:05', '2024-10-02 02:02:05'),
(17, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:02:20', '2024-10-02 02:02:20'),
(18, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:04:12', '2024-10-02 02:04:12'),
(19, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:04:12', '2024-10-02 02:04:12'),
(20, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:04:12', '2024-10-02 02:04:12'),
(21, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:05:05', '2024-10-02 02:05:05'),
(22, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 02:44:56', '2024-10-02 02:44:56'),
(23, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 02:44:58', '2024-10-02 02:44:58'),
(24, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 02:45:36', '2024-10-02 02:45:36'),
(25, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:46:28', '2024-10-02 02:46:28'),
(26, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:48:01', '2024-10-02 02:48:01'),
(27, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:49:32', '2024-10-02 02:49:32'),
(28, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:50:59', '2024-10-02 02:50:59'),
(29, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:51:08', '2024-10-02 02:51:08'),
(30, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:51:19', '2024-10-02 02:51:19'),
(31, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:51:20', '2024-10-02 02:51:20'),
(32, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:51:20', '2024-10-02 02:51:20'),
(33, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:51:45', '2024-10-02 02:51:45'),
(34, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:53:09', '2024-10-02 02:53:09'),
(35, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:53:42', '2024-10-02 02:53:42'),
(36, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:53:42', '2024-10-02 02:53:42'),
(37, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:53:42', '2024-10-02 02:53:42'),
(38, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:53:50', '2024-10-02 02:53:50'),
(39, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:53:50', '2024-10-02 02:53:50'),
(40, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:53:51', '2024-10-02 02:53:51'),
(41, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:54:29', '2024-10-02 02:54:29'),
(42, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:54:39', '2024-10-02 02:54:39'),
(43, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:54:40', '2024-10-02 02:54:40'),
(44, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:54:40', '2024-10-02 02:54:40'),
(45, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:54:42', '2024-10-02 02:54:42'),
(46, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:54:42', '2024-10-02 02:54:42'),
(47, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 02:54:43', '2024-10-02 02:54:43'),
(48, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:00:31', '2024-10-02 03:00:31'),
(49, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:00:32', '2024-10-02 03:00:32'),
(50, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:00:32', '2024-10-02 03:00:32'),
(51, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:01:37', '2024-10-02 03:01:37'),
(52, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:01:38', '2024-10-02 03:01:38'),
(53, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:01:38', '2024-10-02 03:01:38'),
(54, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:02:47', '2024-10-02 03:02:47'),
(55, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:02:47', '2024-10-02 03:02:47'),
(56, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:02:47', '2024-10-02 03:02:47'),
(57, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:03:42', '2024-10-02 03:03:42'),
(58, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:03:42', '2024-10-02 03:03:42'),
(59, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:03:42', '2024-10-02 03:03:42'),
(60, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:05:13', '2024-10-02 03:05:13'),
(61, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:05:13', '2024-10-02 03:05:13'),
(62, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:05:13', '2024-10-02 03:05:13'),
(63, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:07:48', '2024-10-02 03:07:48'),
(64, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:07:48', '2024-10-02 03:07:48'),
(65, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:07:48', '2024-10-02 03:07:48'),
(66, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:08:36', '2024-10-02 03:08:36'),
(67, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:08:37', '2024-10-02 03:08:37'),
(68, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:08:37', '2024-10-02 03:08:37'),
(69, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:09:08', '2024-10-02 03:09:08'),
(70, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:09:08', '2024-10-02 03:09:08'),
(71, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:09:09', '2024-10-02 03:09:09'),
(72, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:12:09', '2024-10-02 03:12:09'),
(73, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:12:10', '2024-10-02 03:12:10'),
(74, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:12:10', '2024-10-02 03:12:10'),
(75, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:14:22', '2024-10-02 03:14:22'),
(76, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:14:22', '2024-10-02 03:14:22'),
(77, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:14:23', '2024-10-02 03:14:23'),
(78, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:14:33', '2024-10-02 03:14:33'),
(79, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:14:33', '2024-10-02 03:14:33'),
(80, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:14:33', '2024-10-02 03:14:33'),
(81, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:15:01', '2024-10-02 03:15:01'),
(82, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:15:18', '2024-10-02 03:15:18'),
(83, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:15:19', '2024-10-02 03:15:19'),
(84, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:15:19', '2024-10-02 03:15:19'),
(85, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:15:24', '2024-10-02 03:15:24'),
(86, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:15:24', '2024-10-02 03:15:24'),
(87, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-02 03:15:24', '2024-10-02 03:15:24'),
(88, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:16:58', '2024-10-02 03:16:58'),
(89, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:16:58', '2024-10-02 03:16:58'),
(90, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:16:58', '2024-10-02 03:16:58'),
(91, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:19:37', '2024-10-02 03:19:37'),
(92, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:19:37', '2024-10-02 03:19:37'),
(93, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-02 03:19:37', '2024-10-02 03:19:37'),
(94, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 04:54:49', '2024-10-03 04:54:49'),
(95, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 04:54:49', '2024-10-03 04:54:49'),
(96, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 06:22:11', '2024-10-03 06:22:11'),
(97, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 06:22:26', '2024-10-03 06:22:26'),
(98, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 06:22:26', '2024-10-03 06:22:26'),
(99, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 06:28:31', '2024-10-03 06:28:31'),
(100, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 06:28:31', '2024-10-03 06:28:31'),
(101, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 06:33:09', '2024-10-03 06:33:09'),
(102, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 06:33:09', '2024-10-03 06:33:09'),
(103, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 06:33:16', '2024-10-03 06:33:16'),
(104, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 06:33:19', '2024-10-03 06:33:19'),
(105, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 06:33:21', '2024-10-03 06:33:21'),
(106, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 06:33:23', '2024-10-03 06:33:23'),
(107, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 06:45:06', '2024-10-03 06:45:06'),
(108, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 06:45:21', '2024-10-03 06:45:21'),
(109, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-03 06:45:21', '2024-10-03 06:45:21'),
(110, '1', 'pegawai > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:04:42', '2024-10-03 08:04:42'),
(111, '1', 'placement > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:10:32', '2024-10-03 08:10:32'),
(112, '1', 'placement > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:13:27', '2024-10-03 08:13:27'),
(113, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:16:06', '2024-10-03 08:16:06'),
(114, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:16:13', '2024-10-03 08:16:13'),
(115, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:21:20', '2024-10-03 08:21:20'),
(116, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:21:20', '2024-10-03 08:21:20'),
(117, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:21:21', '2024-10-03 08:21:21'),
(118, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:22:07', '2024-10-03 08:22:07'),
(119, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:22:07', '2024-10-03 08:22:07'),
(120, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:22:08', '2024-10-03 08:22:08'),
(121, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:27:25', '2024-10-03 08:27:25'),
(122, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:27:26', '2024-10-03 08:27:26'),
(123, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:27:26', '2024-10-03 08:27:26'),
(124, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:35:15', '2024-10-03 08:35:15'),
(125, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:35:15', '2024-10-03 08:35:15'),
(126, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:35:15', '2024-10-03 08:35:15'),
(127, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:36:32', '2024-10-03 08:36:32'),
(128, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:36:32', '2024-10-03 08:36:32'),
(129, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:36:33', '2024-10-03 08:36:33'),
(130, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:36:56', '2024-10-03 08:36:56'),
(131, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:36:56', '2024-10-03 08:36:56'),
(132, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:36:56', '2024-10-03 08:36:56'),
(133, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:43:15', '2024-10-03 08:43:15'),
(134, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:43:15', '2024-10-03 08:43:15'),
(135, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:43:16', '2024-10-03 08:43:16'),
(136, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:44:19', '2024-10-03 08:44:19'),
(137, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:44:19', '2024-10-03 08:44:19'),
(138, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 08:44:19', '2024-10-03 08:44:19'),
(139, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:04:38', '2024-10-03 09:04:38'),
(140, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:04:38', '2024-10-03 09:04:38'),
(141, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:05:16', '2024-10-03 09:05:16'),
(142, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:05:17', '2024-10-03 09:05:17'),
(143, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:06:29', '2024-10-03 09:06:29'),
(144, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:07:01', '2024-10-03 09:07:01'),
(145, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:07:01', '2024-10-03 09:07:01'),
(146, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:07:01', '2024-10-03 09:07:01'),
(147, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:08:30', '2024-10-03 09:08:30'),
(148, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:08:30', '2024-10-03 09:08:30'),
(149, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:08:30', '2024-10-03 09:08:30'),
(150, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:13:44', '2024-10-03 09:13:44'),
(151, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:13:44', '2024-10-03 09:13:44'),
(152, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:13:44', '2024-10-03 09:13:44'),
(153, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:14:08', '2024-10-03 09:14:08'),
(154, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:14:08', '2024-10-03 09:14:08'),
(155, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:14:56', '2024-10-03 09:14:56'),
(156, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:14:56', '2024-10-03 09:14:56'),
(157, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:15:54', '2024-10-03 09:15:54'),
(158, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:15:54', '2024-10-03 09:15:54'),
(159, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:16:18', '2024-10-03 09:16:18'),
(160, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:16:18', '2024-10-03 09:16:18'),
(161, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:16:19', '2024-10-03 09:16:19'),
(162, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:21:25', '2024-10-03 09:21:25'),
(163, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:21:25', '2024-10-03 09:21:25'),
(164, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:22:06', '2024-10-03 09:22:06'),
(165, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:22:07', '2024-10-03 09:22:07'),
(166, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:22:56', '2024-10-03 09:22:56'),
(167, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:22:56', '2024-10-03 09:22:56'),
(168, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:23:31', '2024-10-03 09:23:31'),
(169, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:23:31', '2024-10-03 09:23:31'),
(170, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:24:01', '2024-10-03 09:24:01'),
(171, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:24:02', '2024-10-03 09:24:02'),
(172, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:24:44', '2024-10-03 09:24:44'),
(173, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:24:44', '2024-10-03 09:24:44'),
(174, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:25:51', '2024-10-03 09:25:51'),
(175, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:25:51', '2024-10-03 09:25:51'),
(176, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:27:11', '2024-10-03 09:27:11'),
(177, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:27:12', '2024-10-03 09:27:12'),
(178, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:27:12', '2024-10-03 09:27:12'),
(179, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:27:43', '2024-10-03 09:27:43'),
(180, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:27:44', '2024-10-03 09:27:44'),
(181, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-03 09:27:44', '2024-10-03 09:27:44'),
(182, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 01:16:20', '2024-10-04 01:16:20'),
(183, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 01:16:20', '2024-10-04 01:16:20'),
(184, '1', 'golongan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 01:40:46', '2024-10-04 01:40:46'),
(185, '1', 'golongan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 01:55:46', '2024-10-04 01:55:46'),
(186, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 01:57:20', '2024-10-04 01:57:20'),
(187, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 01:57:24', '2024-10-04 01:57:24'),
(188, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 01:57:29', '2024-10-04 01:57:29'),
(189, '1', 'golongan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 03:22:16', '2024-10-04 03:22:16'),
(190, '1', 'golongan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 03:39:33', '2024-10-04 03:39:33'),
(191, '1', 'golongan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 03:44:35', '2024-10-04 03:44:35'),
(192, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:15:36', '2024-10-04 04:15:36'),
(193, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:18:12', '2024-10-04 04:18:12'),
(194, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:20:20', '2024-10-04 04:20:20'),
(195, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:20:38', '2024-10-04 04:20:38'),
(196, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:21:19', '2024-10-04 04:21:19'),
(197, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:24:43', '2024-10-04 04:24:43'),
(198, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:25:25', '2024-10-04 04:25:25'),
(199, '1', 'golongan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:27:00', '2024-10-04 04:27:00'),
(200, '1', 'golongan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:28:49', '2024-10-04 04:28:49'),
(201, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:28:58', '2024-10-04 04:28:58'),
(202, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:29:48', '2024-10-04 04:29:48'),
(203, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:31:23', '2024-10-04 04:31:23'),
(204, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:31:35', '2024-10-04 04:31:35'),
(205, '1', 'golongan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:32:33', '2024-10-04 04:32:33'),
(206, '1', 'golongan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:32:46', '2024-10-04 04:32:46'),
(207, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:32:56', '2024-10-04 04:32:56'),
(208, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:33:37', '2024-10-04 04:33:37'),
(209, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:33:52', '2024-10-04 04:33:52'),
(210, '1', 'golongan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:34:19', '2024-10-04 04:34:19'),
(211, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:41:32', '2024-10-04 04:41:32'),
(212, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:44:36', '2024-10-04 04:44:36'),
(213, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:44:48', '2024-10-04 04:44:48'),
(214, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:45:09', '2024-10-04 04:45:09'),
(215, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:45:43', '2024-10-04 04:45:43'),
(216, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:46:15', '2024-10-04 04:46:15'),
(217, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:48:56', '2024-10-04 04:48:56'),
(218, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:49:08', '2024-10-04 04:49:08'),
(219, '1', 'placement > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 04:49:15', '2024-10-04 04:49:15'),
(220, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 06:59:49', '2024-10-04 06:59:49'),
(221, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 06:59:49', '2024-10-04 06:59:49'),
(222, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 06:59:50', '2024-10-04 06:59:50'),
(223, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:30:08', '2024-10-04 07:30:08'),
(224, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:30:08', '2024-10-04 07:30:08'),
(225, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:30:08', '2024-10-04 07:30:08');
INSERT INTO `tb_log` (`id`, `user_id`, `user_action`, `ip_address`, `user_agent`, `user_location`, `created_at`, `updated_at`) VALUES
(226, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:32:53', '2024-10-04 07:32:53'),
(227, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:32:53', '2024-10-04 07:32:53'),
(228, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:32:53', '2024-10-04 07:32:53'),
(229, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:38:30', '2024-10-04 07:38:30'),
(230, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:54:34', '2024-10-04 07:54:34'),
(231, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:54:34', '2024-10-04 07:54:34'),
(232, '1', 'jabatan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 07:56:49', '2024-10-04 07:56:49'),
(233, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 08:00:03', '2024-10-04 08:00:03'),
(234, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 08:00:03', '2024-10-04 08:00:03'),
(235, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 08:00:03', '2024-10-04 08:00:03'),
(236, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-04 08:00:27', '2024-10-04 08:00:27'),
(237, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-04 08:00:27', '2024-10-04 08:00:27'),
(238, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-04 08:00:27', '2024-10-04 08:00:27'),
(239, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-04 08:00:33', '2024-10-04 08:00:33'),
(240, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-04 08:00:33', '2024-10-04 08:00:33'),
(241, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-04 08:00:34', '2024-10-04 08:00:34'),
(242, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-04 08:00:38', '2024-10-04 08:00:38'),
(243, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-04 08:00:38', '2024-10-04 08:00:38'),
(244, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-04 08:00:38', '2024-10-04 08:00:38'),
(245, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 09:38:39', '2024-10-04 09:38:39'),
(246, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 09:44:33', '2024-10-04 09:44:33'),
(247, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 09:44:33', '2024-10-04 09:44:33'),
(248, '1', 'jabatan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-04 09:57:17', '2024-10-04 09:57:17'),
(249, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 01:52:02', '2024-10-05 01:52:02'),
(250, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 01:52:02', '2024-10-05 01:52:02'),
(251, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 01:52:42', '2024-10-05 01:52:42'),
(252, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 01:52:42', '2024-10-05 01:52:42'),
(253, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 01:52:42', '2024-10-05 01:52:42'),
(254, '1', 'jabatan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 01:53:18', '2024-10-05 01:53:18'),
(255, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 02:44:27', '2024-10-05 02:44:27'),
(256, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 02:44:27', '2024-10-05 02:44:27'),
(257, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 02:44:27', '2024-10-05 02:44:27'),
(258, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 02:53:23', '2024-10-05 02:53:23'),
(259, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 02:53:23', '2024-10-05 02:53:23'),
(260, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 02:53:24', '2024-10-05 02:53:24'),
(261, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 02:58:17', '2024-10-05 02:58:17'),
(262, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 02:58:17', '2024-10-05 02:58:17'),
(263, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 02:58:17', '2024-10-05 02:58:17'),
(264, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:02:46', '2024-10-05 03:02:46'),
(265, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:02:47', '2024-10-05 03:02:47'),
(266, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:02:47', '2024-10-05 03:02:47'),
(267, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 13; SM-G981B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:18:34', '2024-10-05 03:18:34'),
(268, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 13; SM-G981B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:18:34', '2024-10-05 03:18:34'),
(269, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 13; SM-G981B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:18:34', '2024-10-05 03:18:34'),
(270, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 13; SM-G981B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:19:21', '2024-10-05 03:19:21'),
(271, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 13; SM-G981B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:19:21', '2024-10-05 03:19:21'),
(272, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 13; SM-G981B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:19:22', '2024-10-05 03:19:22'),
(273, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:20:53', '2024-10-05 03:20:53'),
(274, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:20:53', '2024-10-05 03:20:53'),
(275, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:20:54', '2024-10-05 03:20:54'),
(276, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:21:16', '2024-10-05 03:21:16'),
(277, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:21:16', '2024-10-05 03:21:16'),
(278, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:21:17', '2024-10-05 03:21:17'),
(279, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:22:20', '2024-10-05 03:22:20'),
(280, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:22:20', '2024-10-05 03:22:20'),
(281, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:22:20', '2024-10-05 03:22:20'),
(282, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:23:45', '2024-10-05 03:23:45'),
(283, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:23:45', '2024-10-05 03:23:45'),
(284, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:23:45', '2024-10-05 03:23:45'),
(285, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:24:15', '2024-10-05 03:24:15'),
(286, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:24:15', '2024-10-05 03:24:15'),
(287, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:24:15', '2024-10-05 03:24:15'),
(288, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:25:08', '2024-10-05 03:25:08'),
(289, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:25:08', '2024-10-05 03:25:08'),
(290, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:25:08', '2024-10-05 03:25:08'),
(291, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:25:21', '2024-10-05 03:25:21'),
(292, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:25:21', '2024-10-05 03:25:21'),
(293, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:25:22', '2024-10-05 03:25:22'),
(294, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:26:11', '2024-10-05 03:26:11'),
(295, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:26:11', '2024-10-05 03:26:11'),
(296, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:26:12', '2024-10-05 03:26:12'),
(297, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:20', '2024-10-05 03:27:20'),
(298, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:20', '2024-10-05 03:27:20'),
(299, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:20', '2024-10-05 03:27:20'),
(300, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:37', '2024-10-05 03:27:37'),
(301, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:37', '2024-10-05 03:27:37'),
(302, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:37', '2024-10-05 03:27:37'),
(303, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:46', '2024-10-05 03:27:46'),
(304, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:46', '2024-10-05 03:27:46'),
(305, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:46', '2024-10-05 03:27:46'),
(306, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:55', '2024-10-05 03:27:55'),
(307, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:55', '2024-10-05 03:27:55'),
(308, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:27:55', '2024-10-05 03:27:55'),
(309, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:28:49', '2024-10-05 03:28:49'),
(310, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:28:50', '2024-10-05 03:28:50'),
(311, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-05 03:28:50', '2024-10-05 03:28:50'),
(312, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 06:19:39', '2024-10-05 06:19:39'),
(313, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 06:27:50', '2024-10-05 06:27:50'),
(314, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 06:27:50', '2024-10-05 06:27:50'),
(315, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:31:53', '2024-10-05 09:31:53'),
(316, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:31:53', '2024-10-05 09:31:53'),
(317, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:32:33', '2024-10-05 09:32:33'),
(318, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:32:38', '2024-10-05 09:32:38'),
(319, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:32:38', '2024-10-05 09:32:38'),
(320, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:33:20', '2024-10-05 09:33:20'),
(321, '1', 'pegawai > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:33:31', '2024-10-05 09:33:31'),
(322, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:35:30', '2024-10-05 09:35:30'),
(323, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:35:34', '2024-10-05 09:35:34'),
(324, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:35:40', '2024-10-05 09:35:40'),
(325, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:35:45', '2024-10-05 09:35:45'),
(326, '1', 'jabatan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:36:45', '2024-10-05 09:36:45'),
(327, '1', 'jabatan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:36:48', '2024-10-05 09:36:48'),
(328, '1', 'jabatan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:36:52', '2024-10-05 09:36:52'),
(329, '1', 'jabatan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-05 09:36:55', '2024-10-05 09:36:55'),
(330, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 01:16:25', '2024-10-07 01:16:25'),
(331, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 01:16:25', '2024-10-07 01:16:25'),
(332, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 02:45:27', '2024-10-07 02:45:27'),
(333, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 02:47:43', '2024-10-07 02:47:43'),
(334, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 02:47:48', '2024-10-07 02:47:48'),
(335, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 02:47:53', '2024-10-07 02:47:53'),
(336, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 02:48:19', '2024-10-07 02:48:19'),
(337, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 02:48:41', '2024-10-07 02:48:41'),
(338, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 02:48:49', '2024-10-07 02:48:49'),
(339, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 02:49:20', '2024-10-07 02:49:20'),
(340, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 02:49:27', '2024-10-07 02:49:27'),
(341, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:00:27', '2024-10-07 03:00:27'),
(342, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:00:34', '2024-10-07 03:00:34'),
(343, '1', 'jabatan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:02:39', '2024-10-07 03:02:39'),
(344, '1', 'jabatan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:05:20', '2024-10-07 03:05:20'),
(345, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:06:15', '2024-10-07 03:06:15'),
(346, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:07:52', '2024-10-07 03:07:52'),
(347, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:08:00', '2024-10-07 03:08:00'),
(348, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:25:32', '2024-10-07 03:25:32'),
(349, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:28:10', '2024-10-07 03:28:10'),
(350, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:40:29', '2024-10-07 03:40:29'),
(351, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 03:42:15', '2024-10-07 03:42:15'),
(352, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:53:23', '2024-10-07 03:53:23'),
(353, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:53:28', '2024-10-07 03:53:28'),
(354, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:53:43', '2024-10-07 03:53:43'),
(355, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:53:48', '2024-10-07 03:53:48'),
(356, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:53:54', '2024-10-07 03:53:54'),
(357, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 03:54:01', '2024-10-07 03:54:01'),
(358, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 03:57:27', '2024-10-07 03:57:27'),
(359, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 03:57:32', '2024-10-07 03:57:32'),
(360, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 03:59:59', '2024-10-07 03:59:59'),
(361, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 04:01:37', '2024-10-07 04:01:37'),
(362, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 04:01:37', '2024-10-07 04:01:37'),
(363, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 04:20:27', '2024-10-07 04:20:27'),
(364, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 04:20:27', '2024-10-07 04:20:27'),
(365, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 04:52:18', '2024-10-07 04:52:18'),
(366, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 08:57:49', '2024-10-07 08:57:49'),
(367, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 08:57:49', '2024-10-07 08:57:49'),
(368, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 09:19:41', '2024-10-07 09:19:41'),
(369, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 09:19:51', '2024-10-07 09:19:51'),
(370, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 09:19:51', '2024-10-07 09:19:51'),
(371, '1', 'jabatan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 09:35:40', '2024-10-07 09:35:40'),
(372, '1', 'jabatan > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-07 09:36:00', '2024-10-07 09:36:00'),
(373, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 09:41:53', '2024-10-07 09:41:53'),
(374, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 09:41:53', '2024-10-07 09:41:53'),
(375, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 09:41:53', '2024-10-07 09:41:53'),
(376, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 09:42:07', '2024-10-07 09:42:07'),
(377, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 09:42:07', '2024-10-07 09:42:07'),
(378, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-07 09:42:07', '2024-10-07 09:42:07'),
(379, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-08 03:01:28', '2024-10-08 03:01:28'),
(380, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-08 03:01:28', '2024-10-08 03:01:28'),
(381, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-08 04:57:56', '2024-10-08 04:57:56'),
(382, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-08 04:58:03', '2024-10-08 04:58:03'),
(383, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-08 04:58:12', '2024-10-08 04:58:12'),
(384, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-08 04:58:16', '2024-10-08 04:58:16'),
(385, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-08 06:13:34', '2024-10-08 06:13:34'),
(386, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-08 06:13:42', '2024-10-08 06:13:42'),
(387, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-08 06:37:31', '2024-10-08 06:37:31'),
(388, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-08 06:37:36', '2024-10-08 06:37:36'),
(389, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-08 06:37:42', '2024-10-08 06:37:42'),
(390, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-09 01:12:22', '2024-10-09 01:12:22'),
(391, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-09 01:12:22', '2024-10-09 01:12:22'),
(392, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-09 01:17:00', '2024-10-09 01:17:00'),
(393, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-09 01:17:01', '2024-10-09 01:17:01'),
(394, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-09 01:17:01', '2024-10-09 01:17:01'),
(395, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:18:12', '2024-10-09 01:18:12'),
(396, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:18:12', '2024-10-09 01:18:12'),
(397, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:18:12', '2024-10-09 01:18:12'),
(398, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:19:56', '2024-10-09 01:19:56'),
(399, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:19:56', '2024-10-09 01:19:56'),
(400, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:19:56', '2024-10-09 01:19:56'),
(401, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:20:10', '2024-10-09 01:20:10'),
(402, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:20:10', '2024-10-09 01:20:10'),
(403, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:20:10', '2024-10-09 01:20:10'),
(404, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:51:58', '2024-10-09 01:51:58'),
(405, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:52:18', '2024-10-09 01:52:18'),
(406, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:52:23', '2024-10-09 01:52:23'),
(407, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:52:30', '2024-10-09 01:52:30'),
(408, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 01:54:05', '2024-10-09 01:54:05'),
(409, '1', 'jabatan > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 03:59:49', '2024-10-09 03:59:49'),
(410, '1', 'jabatan > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-09 04:00:00', '2024-10-09 04:00:00'),
(411, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-09 04:23:43', '2024-10-09 04:23:43'),
(412, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-09 04:23:43', '2024-10-09 04:23:43'),
(413, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-09 04:23:43', '2024-10-09 04:23:43'),
(414, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 01:11:48', '2024-10-11 01:11:48'),
(415, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 01:11:48', '2024-10-11 01:11:48'),
(416, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:36:21', '2024-10-11 03:36:21'),
(417, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:41:11', '2024-10-11 03:41:11'),
(418, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 03:41:49', '2024-10-11 03:41:49'),
(419, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 03:43:41', '2024-10-11 03:43:41'),
(420, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 03:44:09', '2024-10-11 03:44:09'),
(421, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 03:44:57', '2024-10-11 03:44:57'),
(422, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:51:04', '2024-10-11 03:51:04'),
(423, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:51:06', '2024-10-11 03:51:06'),
(424, '1', 'users > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:57:25', '2024-10-11 03:57:25'),
(425, '1', 'users > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:58:40', '2024-10-11 03:58:40'),
(426, '1', 'users > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:58:42', '2024-10-11 03:58:42'),
(427, '1', 'users > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:58:51', '2024-10-11 03:58:51'),
(428, '1', 'users > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:58:58', '2024-10-11 03:58:58'),
(429, '1', 'users > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 03:59:31', '2024-10-11 03:59:31'),
(430, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 04:26:52', '2024-10-11 04:26:52'),
(431, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 04:26:57', '2024-10-11 04:26:57'),
(432, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 04:26:57', '2024-10-11 04:26:57'),
(433, '1', 'roles > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 04:48:49', '2024-10-11 04:48:49'),
(434, '1', 'roles > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-11 04:48:59', '2024-10-11 04:48:59'),
(435, '1', 'roles > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 04:49:12', '2024-10-11 04:49:12'),
(436, '1', 'roles > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 04:50:35', '2024-10-11 04:50:35'),
(437, '1', 'roles > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 04:50:39', '2024-10-11 04:50:39'),
(438, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 04:51:38', '2024-10-11 04:51:38'),
(439, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 04:51:46', '2024-10-11 04:51:46'),
(440, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 04:51:55', '2024-10-11 04:51:55'),
(441, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 04:52:03', '2024-10-11 04:52:03'),
(442, '1', 'roles > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-11 04:52:12', '2024-10-11 04:52:12'),
(443, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 01:06:42', '2024-10-12 01:06:42'),
(444, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 01:06:42', '2024-10-12 01:06:42'),
(445, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 01:28:33', '2024-10-12 01:28:33');
INSERT INTO `tb_log` (`id`, `user_id`, `user_action`, `ip_address`, `user_agent`, `user_location`, `created_at`, `updated_at`) VALUES
(446, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 01:28:41', '2024-10-12 01:28:41'),
(447, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 01:41:29', '2024-10-12 01:41:29'),
(448, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 01:41:29', '2024-10-12 01:41:29'),
(449, '1', 'roles > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-12 02:03:29', '2024-10-12 02:03:29'),
(450, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-12 02:03:36', '2024-10-12 02:03:36'),
(451, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:27:52', '2024-10-12 02:27:52'),
(452, '1', 'permissions > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:30:43', '2024-10-12 02:30:43'),
(453, '1', 'permissions > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:30:47', '2024-10-12 02:30:47'),
(454, '1', 'permissions > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:31:23', '2024-10-12 02:31:23'),
(455, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:33:03', '2024-10-12 02:33:03'),
(456, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:33:07', '2024-10-12 02:33:07'),
(457, '1005', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:33:15', '2024-10-12 02:33:15'),
(458, '1005', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:33:15', '2024-10-12 02:33:15'),
(459, '1005', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:33:44', '2024-10-12 02:33:44'),
(460, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:33:49', '2024-10-12 02:33:49'),
(461, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:33:49', '2024-10-12 02:33:49'),
(462, '1', 'permissions > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:34:06', '2024-10-12 02:34:06'),
(463, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:46:11', '2024-10-12 02:46:11'),
(464, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:46:39', '2024-10-12 02:46:39'),
(465, '1', 'permissions > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:47:10', '2024-10-12 02:47:10'),
(466, '1', 'permissions > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:47:14', '2024-10-12 02:47:14'),
(467, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:48:22', '2024-10-12 02:48:22'),
(468, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:50:28', '2024-10-12 02:50:28'),
(469, '1', 'permissions > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:50:34', '2024-10-12 02:50:34'),
(470, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 02:50:39', '2024-10-12 02:50:39'),
(471, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:22:16', '2024-10-12 03:22:16'),
(472, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:23:20', '2024-10-12 03:23:20'),
(473, '1', 'permissions > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:23:27', '2024-10-12 03:23:27'),
(474, '1', 'permissions > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:23:32', '2024-10-12 03:23:32'),
(475, '1', 'permissions > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:23:36', '2024-10-12 03:23:36'),
(476, '1', 'permissions > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:23:41', '2024-10-12 03:23:41'),
(477, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:24:38', '2024-10-12 03:24:38'),
(478, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:25:02', '2024-10-12 03:25:02'),
(479, '1', 'roles > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:29:53', '2024-10-12 03:29:53'),
(480, '1', 'roles > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:30:01', '2024-10-12 03:30:01'),
(481, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:31:48', '2024-10-12 03:31:48'),
(482, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:32:34', '2024-10-12 03:32:34'),
(483, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:34:45', '2024-10-12 03:34:45'),
(484, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:35:24', '2024-10-12 03:35:24'),
(485, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:35:30', '2024-10-12 03:35:30'),
(486, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:38:54', '2024-10-12 03:38:54'),
(487, '1005', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:39:03', '2024-10-12 03:39:03'),
(488, '1005', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:39:03', '2024-10-12 03:39:03'),
(489, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:39:54', '2024-10-12 03:39:54'),
(490, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:39:54', '2024-10-12 03:39:54'),
(491, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:40:07', '2024-10-12 03:40:07'),
(492, '1005', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:41:11', '2024-10-12 03:41:11'),
(493, '1005', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:41:11', '2024-10-12 03:41:11'),
(494, '1005', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:41:12', '2024-10-12 03:41:12'),
(495, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:41:52', '2024-10-12 03:41:52'),
(496, '1005', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:42:01', '2024-10-12 03:42:01'),
(497, '1005', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:42:07', '2024-10-12 03:42:07'),
(498, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:42:44', '2024-10-12 03:42:44'),
(499, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:46:07', '2024-10-12 03:46:07'),
(500, '1005', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:53:49', '2024-10-12 03:53:49'),
(501, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:53:54', '2024-10-12 03:53:54'),
(502, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:53:54', '2024-10-12 03:53:54'),
(503, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:54:42', '2024-10-12 03:54:42'),
(504, '1', 'jabatan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:55:03', '2024-10-12 03:55:03'),
(505, '1', 'jabatan > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 03:55:06', '2024-10-12 03:55:06'),
(506, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:01:15', '2024-10-12 04:01:15'),
(507, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:02:13', '2024-10-12 04:02:13'),
(508, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:02:26', '2024-10-12 04:02:26'),
(509, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:03:35', '2024-10-12 04:03:35'),
(510, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:03:42', '2024-10-12 04:03:42'),
(511, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:08:04', '2024-10-12 04:08:04'),
(512, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:08:10', '2024-10-12 04:08:10'),
(513, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:08:29', '2024-10-12 04:08:29'),
(514, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:11:26', '2024-10-12 04:11:26'),
(515, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:13:44', '2024-10-12 04:13:44'),
(516, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:14:36', '2024-10-12 04:14:36'),
(517, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:14:42', '2024-10-12 04:14:42'),
(518, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:14:51', '2024-10-12 04:14:51'),
(519, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:15:03', '2024-10-12 04:15:03'),
(520, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:15:47', '2024-10-12 04:15:47'),
(521, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:15:54', '2024-10-12 04:15:54'),
(522, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:16:01', '2024-10-12 04:16:01'),
(523, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:16:37', '2024-10-12 04:16:37'),
(524, '1005', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:16:54', '2024-10-12 04:16:54'),
(525, '1005', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:16:54', '2024-10-12 04:16:54'),
(526, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:20:52', '2024-10-12 04:20:52'),
(527, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:22:05', '2024-10-12 04:22:05'),
(528, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:22:08', '2024-10-12 04:22:08'),
(529, '1005', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:22:14', '2024-10-12 04:22:14'),
(530, '1005', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:22:14', '2024-10-12 04:22:14'),
(531, '1005', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:22:24', '2024-10-12 04:22:24'),
(532, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:22:36', '2024-10-12 04:22:36'),
(533, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:22:36', '2024-10-12 04:22:36'),
(534, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:22:52', '2024-10-12 04:22:52'),
(535, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:26:33', '2024-10-12 04:26:33'),
(536, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:26:40', '2024-10-12 04:26:40'),
(537, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:26:47', '2024-10-12 04:26:47'),
(538, '1005', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:26:53', '2024-10-12 04:26:53'),
(539, '1005', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:26:53', '2024-10-12 04:26:53'),
(540, '1005', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:27:02', '2024-10-12 04:27:02'),
(541, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:27:06', '2024-10-12 04:27:06'),
(542, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:27:06', '2024-10-12 04:27:06'),
(543, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:28:56', '2024-10-12 04:28:56'),
(544, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:36:10', '2024-10-12 04:36:10'),
(545, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:39:03', '2024-10-12 04:39:03'),
(546, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:46:44', '2024-10-12 04:46:44'),
(547, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:54:18', '2024-10-12 04:54:18'),
(548, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:54:50', '2024-10-12 04:54:50'),
(549, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 04:57:14', '2024-10-12 04:57:14'),
(550, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 05:01:14', '2024-10-12 05:01:14'),
(551, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 06:02:22', '2024-10-12 06:02:22'),
(552, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 06:05:37', '2024-10-12 06:05:37'),
(553, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 06:07:17', '2024-10-12 06:07:17'),
(554, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 06:08:52', '2024-10-12 06:08:52'),
(555, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 06:10:54', '2024-10-12 06:10:54'),
(556, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 06:11:03', '2024-10-12 06:11:03'),
(557, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-12 06:21:22', '2024-10-12 06:21:22'),
(558, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 01:02:42', '2024-10-14 01:02:42'),
(559, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 01:02:42', '2024-10-14 01:02:42'),
(560, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 01:15:48', '2024-10-14 01:15:48'),
(561, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 01:15:48', '2024-10-14 01:15:48'),
(562, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 01:15:49', '2024-10-14 01:15:49'),
(563, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 01:24:55', '2024-10-14 01:24:55'),
(564, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 01:24:58', '2024-10-14 01:24:58'),
(565, '1005', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 01:25:05', '2024-10-14 01:25:05'),
(566, '1005', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 01:25:05', '2024-10-14 01:25:05'),
(567, '1005', 'logout', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 02:42:56', '2024-10-14 02:42:56'),
(568, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 02:43:02', '2024-10-14 02:43:02'),
(569, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 02:43:02', '2024-10-14 02:43:02'),
(570, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 03:17:14', '2024-10-14 03:17:14'),
(571, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 03:17:14', '2024-10-14 03:17:14'),
(572, '1', 'jabatan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 03:18:45', '2024-10-14 03:18:45'),
(573, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 03:19:49', '2024-10-14 03:19:49'),
(574, '1', 'pegawai > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 03:22:04', '2024-10-14 03:22:04'),
(575, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 03:41:16', '2024-10-14 03:41:16'),
(576, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 03:41:16', '2024-10-14 03:41:16'),
(577, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 03:41:17', '2024-10-14 03:41:17'),
(578, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 06:14:59', '2024-10-14 06:14:59'),
(579, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 06:14:59', '2024-10-14 06:14:59'),
(580, '1', 'roles > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 06:25:50', '2024-10-14 06:25:50'),
(581, '1', 'roles > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 06:26:09', '2024-10-14 06:26:09'),
(582, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 06:27:29', '2024-10-14 06:27:29'),
(583, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 06:27:58', '2024-10-14 06:27:58'),
(584, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 06:28:07', '2024-10-14 06:28:07'),
(585, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'Unknown', '2024-10-14 06:28:07', '2024-10-14 06:28:07'),
(586, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 06:39:04', '2024-10-14 06:39:04'),
(587, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 06:39:04', '2024-10-14 06:39:04'),
(588, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 06:56:58', '2024-10-14 06:56:58'),
(589, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 06:57:07', '2024-10-14 06:57:07'),
(590, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 06:57:07', '2024-10-14 06:57:07'),
(591, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 06:57:58', '2024-10-14 06:57:58'),
(592, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 06:58:03', '2024-10-14 06:58:03'),
(593, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 06:58:03', '2024-10-14 06:58:03'),
(594, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 07:15:09', '2024-10-14 07:15:09'),
(595, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 07:15:50', '2024-10-14 07:15:50'),
(596, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 07:34:15', '2024-10-14 07:34:15'),
(597, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 07:50:14', '2024-10-14 07:50:14'),
(598, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 09:09:41', '2024-10-14 09:09:41'),
(599, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-14 09:09:41', '2024-10-14 09:09:41'),
(600, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:35:08', '2024-10-14 09:35:08'),
(601, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:36:01', '2024-10-14 09:36:01'),
(602, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:36:47', '2024-10-14 09:36:47'),
(603, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:37:27', '2024-10-14 09:37:27'),
(604, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:38:17', '2024-10-14 09:38:17'),
(605, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:39:16', '2024-10-14 09:39:16'),
(606, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:43:42', '2024-10-14 09:43:42'),
(607, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:51:12', '2024-10-14 09:51:12'),
(608, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:55:05', '2024-10-14 09:55:05'),
(609, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:56:51', '2024-10-14 09:56:51'),
(610, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-14 09:56:57', '2024-10-14 09:56:57'),
(611, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-15 01:07:30', '2024-10-15 01:07:30'),
(612, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-15 01:07:30', '2024-10-15 01:07:30'),
(613, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-15 01:31:14', '2024-10-15 01:31:14'),
(614, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-15 01:31:22', '2024-10-15 01:31:22'),
(615, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-15 01:31:46', '2024-10-15 01:31:46'),
(616, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-16 01:38:51', '2024-10-16 01:38:51'),
(617, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-16 01:38:51', '2024-10-16 01:38:51'),
(618, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-16 01:40:53', '2024-10-16 01:40:53'),
(619, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 04:14:55', '2024-10-17 04:14:55'),
(620, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 04:14:55', '2024-10-17 04:14:55'),
(621, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 04:43:55', '2024-10-17 04:43:55'),
(622, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 04:44:14', '2024-10-17 04:44:14'),
(623, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 04:45:47', '2024-10-17 04:45:47'),
(624, '1', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 04:45:48', '2024-10-17 04:45:48'),
(625, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 04:45:57', '2024-10-17 04:45:57'),
(626, '1', 'dayoff > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 04:48:49', '2024-10-17 04:48:49'),
(627, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 04:49:24', '2024-10-17 04:49:24'),
(628, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 04:49:35', '2024-10-17 04:49:35'),
(629, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 06:21:15', '2024-10-17 06:21:15'),
(630, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 06:46:46', '2024-10-17 06:46:46'),
(631, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 06:46:52', '2024-10-17 06:46:52'),
(632, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 06:46:57', '2024-10-17 06:46:57'),
(633, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 06:50:28', '2024-10-17 06:50:28'),
(634, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:11:44', '2024-10-17 07:11:44'),
(635, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:12:01', '2024-10-17 07:12:01'),
(636, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:12:11', '2024-10-17 07:12:11'),
(637, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:12:21', '2024-10-17 07:12:21'),
(638, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:12:27', '2024-10-17 07:12:27'),
(639, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:13:45', '2024-10-17 07:13:45'),
(640, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:13:52', '2024-10-17 07:13:52'),
(641, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:13:58', '2024-10-17 07:13:58'),
(642, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:13:58', '2024-10-17 07:13:58'),
(643, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:15:37', '2024-10-17 07:15:37'),
(644, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:15:43', '2024-10-17 07:15:43'),
(645, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:15:43', '2024-10-17 07:15:43'),
(646, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 07:41:16', '2024-10-17 07:41:16'),
(647, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 07:44:22', '2024-10-17 07:44:22'),
(648, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 07:46:13', '2024-10-17 07:46:13'),
(649, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 08:44:45', '2024-10-17 08:44:45'),
(650, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 08:44:58', '2024-10-17 08:44:58'),
(651, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 08:45:24', '2024-10-17 08:45:24'),
(652, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 08:46:19', '2024-10-17 08:46:19'),
(653, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 08:54:31', '2024-10-17 08:54:31'),
(654, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 08:58:16', '2024-10-17 08:58:16'),
(655, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:01:26', '2024-10-17 09:01:26'),
(656, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:01:33', '2024-10-17 09:01:33'),
(657, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:01:37', '2024-10-17 09:01:37'),
(658, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:01:42', '2024-10-17 09:01:42'),
(659, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:08:16', '2024-10-17 09:08:16'),
(660, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:09:32', '2024-10-17 09:09:32'),
(661, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:12:05', '2024-10-17 09:12:05'),
(662, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:12:30', '2024-10-17 09:12:30'),
(663, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:12:56', '2024-10-17 09:12:56'),
(664, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:13:11', '2024-10-17 09:13:11'),
(665, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:13:24', '2024-10-17 09:13:24'),
(666, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:14:10', '2024-10-17 09:14:10'),
(667, '1', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:16:57', '2024-10-17 09:16:57'),
(668, '1', 'dayoff > update', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-17 09:17:00', '2024-10-17 09:17:00'),
(669, '1', 'roles > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-17 09:28:29', '2024-10-17 09:28:29'),
(670, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-18 02:09:08', '2024-10-18 02:09:08'),
(671, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-18 02:09:09', '2024-10-18 02:09:09'),
(672, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-21 06:41:22', '2024-10-21 06:41:22');
INSERT INTO `tb_log` (`id`, `user_id`, `user_action`, `ip_address`, `user_agent`, `user_location`, `created_at`, `updated_at`) VALUES
(673, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-21 06:41:22', '2024-10-21 06:41:22'),
(674, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-21 07:27:18', '2024-10-21 07:27:18'),
(675, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-21 07:27:18', '2024-10-21 07:27:18'),
(676, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-21 08:37:26', '2024-10-21 08:37:26'),
(677, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-21 08:38:35', '2024-10-21 08:38:35'),
(678, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-21 08:38:35', '2024-10-21 08:38:35'),
(679, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:02:25', '2024-10-22 01:02:25'),
(680, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:02:25', '2024-10-22 01:02:25'),
(681, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:50:08', '2024-10-22 01:50:08'),
(682, '1005', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:54:19', '2024-10-22 01:54:19'),
(683, '1005', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:54:19', '2024-10-22 01:54:19'),
(684, '1005', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:56:24', '2024-10-22 01:56:24'),
(685, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:56:29', '2024-10-22 01:56:29'),
(686, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:56:29', '2024-10-22 01:56:29'),
(687, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:57:54', '2024-10-22 01:57:54'),
(688, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:58:49', '2024-10-22 01:58:49'),
(689, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 01:58:49', '2024-10-22 01:58:49'),
(690, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 02:41:16', '2024-10-22 02:41:16'),
(691, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 02:41:17', '2024-10-22 02:41:17'),
(692, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 02:41:17', '2024-10-22 02:41:17'),
(693, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 03:51:35', '2024-10-22 03:51:35'),
(694, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 03:51:43', '2024-10-22 03:51:43'),
(695, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 03:51:58', '2024-10-22 03:51:58'),
(696, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 03:53:41', '2024-10-22 03:53:41'),
(697, '1006', 'generated::qMznmdNdQePGTRKR > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 03:53:41', '2024-10-22 03:53:41'),
(698, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:10:02', '2024-10-22 04:10:02'),
(699, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:10:10', '2024-10-22 04:10:10'),
(700, '1006', 'generated::qMznmdNdQePGTRKR > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:10:10', '2024-10-22 04:10:10'),
(701, '1006', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:10:34', '2024-10-22 04:10:34'),
(702, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:11:11', '2024-10-22 04:11:11'),
(703, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:11:17', '2024-10-22 04:11:17'),
(704, '1006', 'generated::qMznmdNdQePGTRKR > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:11:17', '2024-10-22 04:11:17'),
(705, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:17:48', '2024-10-22 04:17:48'),
(706, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:17:53', '2024-10-22 04:17:53'),
(707, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:17:53', '2024-10-22 04:17:53'),
(708, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:18:18', '2024-10-22 04:18:18'),
(709, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:18:32', '2024-10-22 04:18:32'),
(710, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:18:32', '2024-10-22 04:18:32'),
(711, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:25:22', '2024-10-22 04:25:22'),
(712, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:25:22', '2024-10-22 04:25:22'),
(713, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:25:50', '2024-10-22 04:25:50'),
(714, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:26:10', '2024-10-22 04:26:10'),
(715, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:26:21', '2024-10-22 04:26:21'),
(716, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:26:47', '2024-10-22 04:26:47'),
(717, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:26:56', '2024-10-22 04:26:56'),
(718, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:26:56', '2024-10-22 04:26:56'),
(719, '1', 'permissions > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:30:02', '2024-10-22 04:30:02'),
(720, '1006', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:45:42', '2024-10-22 04:45:42'),
(721, '1006', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:45:44', '2024-10-22 04:45:44'),
(722, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:46:00', '2024-10-22 04:46:00'),
(723, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:46:05', '2024-10-22 04:46:05'),
(724, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 04:46:05', '2024-10-22 04:46:05'),
(725, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:03:34', '2024-10-22 06:03:34'),
(726, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:03:43', '2024-10-22 06:03:43'),
(727, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:03:43', '2024-10-22 06:03:43'),
(728, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:25:09', '2024-10-22 06:25:09'),
(729, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:25:16', '2024-10-22 06:25:16'),
(730, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:25:16', '2024-10-22 06:25:16'),
(731, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:27:41', '2024-10-22 06:27:41'),
(732, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:27:45', '2024-10-22 06:27:45'),
(733, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:27:46', '2024-10-22 06:27:46'),
(734, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:27:58', '2024-10-22 06:27:58'),
(735, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:28:04', '2024-10-22 06:28:04'),
(736, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:28:04', '2024-10-22 06:28:04'),
(737, '1006', 'upload-image > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:32:10', '2024-10-22 06:32:10'),
(738, '1006', 'dayoff > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:33:30', '2024-10-22 06:33:30'),
(739, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:34:33', '2024-10-22 06:34:33'),
(740, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:34:38', '2024-10-22 06:34:38'),
(741, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:34:38', '2024-10-22 06:34:38'),
(742, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:57:00', '2024-10-22 06:57:00'),
(743, '1', 'users > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 06:58:13', '2024-10-22 06:58:13'),
(744, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:00:35', '2024-10-22 07:00:35'),
(745, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:11:44', '2024-10-22 07:11:44'),
(746, '1', 'division > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:19:36', '2024-10-22 07:19:36'),
(747, '1', 'division > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:19:40', '2024-10-22 07:19:40'),
(748, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:25:02', '2024-10-22 07:25:02'),
(749, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:25:24', '2024-10-22 07:25:24'),
(750, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:27:10', '2024-10-22 07:27:10'),
(751, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:27:51', '2024-10-22 07:27:51'),
(752, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:27:52', '2024-10-22 07:27:52'),
(753, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:27:53', '2024-10-22 07:27:53'),
(754, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:28:25', '2024-10-22 07:28:25'),
(755, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:28:46', '2024-10-22 07:28:46'),
(756, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:29:41', '2024-10-22 07:29:41'),
(757, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:44:11', '2024-10-22 07:44:11'),
(758, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:45:42', '2024-10-22 07:45:42'),
(759, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:46:58', '2024-10-22 07:46:58'),
(760, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-22 07:47:24', '2024-10-22 07:47:24'),
(761, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:48:28', '2024-10-22 07:48:28'),
(762, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:49:57', '2024-10-22 07:49:57'),
(763, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:50:30', '2024-10-22 07:50:30'),
(764, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:50:52', '2024-10-22 07:50:52'),
(765, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:52:23', '2024-10-22 07:52:23'),
(766, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:55:45', '2024-10-22 07:55:45'),
(767, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:55:52', '2024-10-22 07:55:52'),
(768, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:56:11', '2024-10-22 07:56:11'),
(769, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:57:06', '2024-10-22 07:57:06'),
(770, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:58:39', '2024-10-22 07:58:39'),
(771, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 07:58:50', '2024-10-22 07:58:50'),
(772, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:01:08', '2024-10-22 08:01:08'),
(773, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:01:49', '2024-10-22 08:01:49'),
(774, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:02:09', '2024-10-22 08:02:09'),
(775, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:02:12', '2024-10-22 08:02:12'),
(776, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:02:31', '2024-10-22 08:02:31'),
(777, '1', 'pegawai > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:04:36', '2024-10-22 08:04:36'),
(778, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:05:21', '2024-10-22 08:05:21'),
(779, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:06:48', '2024-10-22 08:06:48'),
(780, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:07:32', '2024-10-22 08:07:32'),
(781, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:10:08', '2024-10-22 08:10:08'),
(782, '1', 'users > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:11:04', '2024-10-22 08:11:04'),
(783, '1', 'users > delete', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:11:17', '2024-10-22 08:11:17'),
(784, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:26:17', '2024-10-22 08:26:17'),
(785, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:26:24', '2024-10-22 08:26:24'),
(786, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:26:24', '2024-10-22 08:26:24'),
(787, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:28:11', '2024-10-22 08:28:11'),
(788, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:28:15', '2024-10-22 08:28:15'),
(789, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 08:28:15', '2024-10-22 08:28:15'),
(790, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 09:20:56', '2024-10-22 09:20:56'),
(791, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 09:21:02', '2024-10-22 09:21:02'),
(792, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-22 09:21:02', '2024-10-22 09:21:02'),
(793, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-22 09:24:15', '2024-10-22 09:24:15'),
(794, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-22 09:24:15', '2024-10-22 09:24:15'),
(795, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-22 09:27:01', '2024-10-22 09:27:01'),
(796, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-22 09:27:15', '2024-10-22 09:27:15'),
(797, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-22 09:27:15', '2024-10-22 09:27:15'),
(798, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 01:42:06', '2024-10-23 01:42:06'),
(799, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 01:42:06', '2024-10-23 01:42:06'),
(800, '1', 'photo > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 03:21:13', '2024-10-23 03:21:13'),
(801, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 03:50:53', '2024-10-23 03:50:53'),
(802, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 03:50:53', '2024-10-23 03:50:53'),
(803, '1', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 03:50:53', '2024-10-23 03:50:53'),
(804, '1', 'pegawai > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 04:49:34', '2024-10-23 04:49:34'),
(805, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:04:34', '2024-10-23 06:04:34'),
(806, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:04:35', '2024-10-23 06:04:35'),
(807, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:04:35', '2024-10-23 06:04:35'),
(808, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:12:52', '2024-10-23 06:12:52'),
(809, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:12:53', '2024-10-23 06:12:53'),
(810, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:12:53', '2024-10-23 06:12:53'),
(811, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:14:56', '2024-10-23 06:14:56'),
(812, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:14:56', '2024-10-23 06:14:56'),
(813, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:14:57', '2024-10-23 06:14:57'),
(814, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:19:41', '2024-10-23 06:19:41'),
(815, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:19:49', '2024-10-23 06:19:49'),
(816, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:19:49', '2024-10-23 06:19:49'),
(817, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:26:09', '2024-10-23 06:26:09'),
(818, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:26:18', '2024-10-23 06:26:18'),
(819, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:26:18', '2024-10-23 06:26:18'),
(820, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:27:19', '2024-10-23 06:27:19'),
(821, '1', 'pegawai > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:34:33', '2024-10-23 06:34:33'),
(822, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:36:15', '2024-10-23 06:36:15'),
(823, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:36:29', '2024-10-23 06:36:29'),
(824, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:36:29', '2024-10-23 06:36:29'),
(825, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:51:45', '2024-10-23 06:51:45'),
(826, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:51:51', '2024-10-23 06:51:51'),
(827, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 06:51:51', '2024-10-23 06:51:51'),
(828, '1', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:23:17', '2024-10-23 07:23:17'),
(829, '1', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:23:17', '2024-10-23 07:23:17'),
(830, '1', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:23:17', '2024-10-23 07:23:17'),
(831, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:23:34', '2024-10-23 07:23:34'),
(832, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:23:50', '2024-10-23 07:23:50'),
(833, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:23:50', '2024-10-23 07:23:50'),
(834, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:45:02', '2024-10-23 07:45:02'),
(835, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:45:02', '2024-10-23 07:45:02'),
(836, '1006', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:45:02', '2024-10-23 07:45:02'),
(837, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:46:40', '2024-10-23 07:46:40'),
(838, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:46:40', '2024-10-23 07:46:40'),
(839, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:46:41', '2024-10-23 07:46:41'),
(840, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:47:16', '2024-10-23 07:47:16'),
(841, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:47:16', '2024-10-23 07:47:16'),
(842, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:47:17', '2024-10-23 07:47:17'),
(843, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:47:36', '2024-10-23 07:47:36'),
(844, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:47:36', '2024-10-23 07:47:36'),
(845, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 07:47:37', '2024-10-23 07:47:37'),
(846, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 08:09:12', '2024-10-23 08:09:12'),
(847, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 08:09:12', '2024-10-23 08:09:12'),
(848, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 08:09:12', '2024-10-23 08:09:12'),
(849, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 08:26:31', '2024-10-23 08:26:31'),
(850, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 08:26:31', '2024-10-23 08:26:31'),
(851, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 08:38:20', '2024-10-23 08:38:20'),
(852, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 08:38:20', '2024-10-23 08:38:20'),
(853, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 08:38:20', '2024-10-23 08:38:20'),
(854, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-23 08:43:33', '2024-10-23 08:43:33'),
(855, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-23 08:43:33', '2024-10-23 08:43:33'),
(856, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-23 09:50:11', '2024-10-23 09:50:11'),
(857, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-23 09:50:11', '2024-10-23 09:50:11'),
(858, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-23 09:53:01', '2024-10-23 09:53:01'),
(859, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-23 09:53:01', '2024-10-23 09:53:01'),
(860, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-23 09:55:54', '2024-10-23 09:55:54'),
(861, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.6 Mobile/15E148 Safari/604.1', 'Unknown', '2024-10-23 09:55:54', '2024-10-23 09:55:54'),
(862, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 09:57:00', '2024-10-23 09:57:00'),
(863, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'Unknown', '2024-10-23 09:57:00', '2024-10-23 09:57:00'),
(864, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-23 09:57:49', '2024-10-23 09:57:49'),
(865, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-23 09:57:49', '2024-10-23 09:57:49'),
(866, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 02:09:07', '2024-10-24 02:09:07'),
(867, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 02:09:07', '2024-10-24 02:09:07'),
(868, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 02:18:37', '2024-10-24 02:18:37'),
(869, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 02:18:37', '2024-10-24 02:18:37'),
(870, '1006', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 02:18:37', '2024-10-24 02:18:37'),
(871, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 02:41:13', '2024-10-24 02:41:13'),
(872, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 02:41:13', '2024-10-24 02:41:13'),
(873, '1', 'jabatan > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 02:47:04', '2024-10-24 02:47:04'),
(874, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 02:48:25', '2024-10-24 02:48:25'),
(875, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 03:00:06', '2024-10-24 03:00:06'),
(876, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 03:00:06', '2024-10-24 03:00:06'),
(877, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 03:02:19', '2024-10-24 03:02:19'),
(878, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 03:02:19', '2024-10-24 03:02:19'),
(879, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 03:26:08', '2024-10-24 03:26:08'),
(880, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 03:26:08', '2024-10-24 03:26:08'),
(881, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 03:26:08', '2024-10-24 03:26:08'),
(882, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 04:39:02', '2024-10-24 04:39:02'),
(883, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 04:39:02', '2024-10-24 04:39:02'),
(884, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 04:41:06', '2024-10-24 04:41:06'),
(885, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 04:41:24', '2024-10-24 04:41:24'),
(886, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 04:41:24', '2024-10-24 04:41:24'),
(887, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 04:45:40', '2024-10-24 04:45:40'),
(888, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 04:45:40', '2024-10-24 04:45:40'),
(889, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 04:54:29', '2024-10-24 04:54:29'),
(890, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 04:54:34', '2024-10-24 04:54:34'),
(891, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 04:54:34', '2024-10-24 04:54:34'),
(892, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:06:57', '2024-10-24 06:06:57'),
(893, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:06:57', '2024-10-24 06:06:57'),
(894, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:06:57', '2024-10-24 06:06:57'),
(895, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:07:19', '2024-10-24 06:07:19'),
(896, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:07:19', '2024-10-24 06:07:19'),
(897, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:07:19', '2024-10-24 06:07:19'),
(898, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:07:42', '2024-10-24 06:07:42'),
(899, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:07:42', '2024-10-24 06:07:42'),
(900, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:07:42', '2024-10-24 06:07:42'),
(901, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:08:09', '2024-10-24 06:08:09');
INSERT INTO `tb_log` (`id`, `user_id`, `user_action`, `ip_address`, `user_agent`, `user_location`, `created_at`, `updated_at`) VALUES
(902, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:08:09', '2024-10-24 06:08:09'),
(903, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:08:09', '2024-10-24 06:08:09'),
(904, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:36:39', '2024-10-24 06:36:39'),
(905, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:36:39', '2024-10-24 06:36:39'),
(906, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:36:55', '2024-10-24 06:36:55'),
(907, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:37:05', '2024-10-24 06:37:05'),
(908, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:37:05', '2024-10-24 06:37:05'),
(909, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:37:34', '2024-10-24 06:37:34'),
(910, '1015', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:37:47', '2024-10-24 06:37:47'),
(911, '1015', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:37:47', '2024-10-24 06:37:47'),
(912, '1015', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:39:02', '2024-10-24 06:39:02'),
(913, '1015', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:39:02', '2024-10-24 06:39:02'),
(914, '1015', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:45:47', '2024-10-24 06:45:47'),
(915, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:46:18', '2024-10-24 06:46:18'),
(916, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:46:18', '2024-10-24 06:46:18'),
(917, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:47:34', '2024-10-24 06:47:34'),
(918, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:47:34', '2024-10-24 06:47:34'),
(919, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:47:35', '2024-10-24 06:47:35'),
(920, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:48:04', '2024-10-24 06:48:04'),
(921, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:48:09', '2024-10-24 06:48:09'),
(922, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:48:09', '2024-10-24 06:48:09'),
(923, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:49:30', '2024-10-24 06:49:30'),
(924, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:49:34', '2024-10-24 06:49:34'),
(925, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:49:34', '2024-10-24 06:49:34'),
(926, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:49:55', '2024-10-24 06:49:55'),
(927, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:50:03', '2024-10-24 06:50:03'),
(928, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:50:03', '2024-10-24 06:50:03'),
(929, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:51:18', '2024-10-24 06:51:18'),
(930, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:51:27', '2024-10-24 06:51:27'),
(931, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:51:27', '2024-10-24 06:51:27'),
(932, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:51:37', '2024-10-24 06:51:37'),
(933, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:52:37', '2024-10-24 06:52:37'),
(934, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:52:48', '2024-10-24 06:52:48'),
(935, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 06:52:48', '2024-10-24 06:52:48'),
(936, '1015', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 06:55:44', '2024-10-24 06:55:44'),
(937, '1015', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 06:55:44', '2024-10-24 06:55:44'),
(938, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 07:00:31', '2024-10-24 07:00:31'),
(939, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-24 07:00:31', '2024-10-24 07:00:31'),
(940, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 07:01:32', '2024-10-24 07:01:32'),
(941, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 07:01:32', '2024-10-24 07:01:32'),
(942, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:02:45', '2024-10-24 07:02:45'),
(943, '1015', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 07:03:10', '2024-10-24 07:03:10'),
(944, '1015', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 07:03:10', '2024-10-24 07:03:10'),
(945, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:05:20', '2024-10-24 07:05:20'),
(946, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:05:20', '2024-10-24 07:05:20'),
(947, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:10:33', '2024-10-24 07:10:33'),
(948, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:10:55', '2024-10-24 07:10:55'),
(949, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:10:55', '2024-10-24 07:10:55'),
(950, '1', 'permissions > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:11:12', '2024-10-24 07:11:12'),
(951, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:11:29', '2024-10-24 07:11:29'),
(952, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:11:41', '2024-10-24 07:11:41'),
(953, '1', 'roles > update', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:13:47', '2024-10-24 07:13:47'),
(954, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:53:10', '2024-10-24 07:53:10'),
(955, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:53:10', '2024-10-24 07:53:10'),
(956, '1015', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 07:57:30', '2024-10-24 07:57:30'),
(957, '1015', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 07:57:30', '2024-10-24 07:57:30'),
(958, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:59:08', '2024-10-24 07:59:08'),
(959, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 07:59:08', '2024-10-24 07:59:08'),
(960, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 08:02:05', '2024-10-24 08:02:05'),
(961, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 08:02:06', '2024-10-24 08:02:06'),
(962, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 08:02:08', '2024-10-24 08:02:08'),
(963, '1015', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 08:05:33', '2024-10-24 08:05:33'),
(964, '1015', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 08:05:34', '2024-10-24 08:05:34'),
(965, '1015', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36', 'Unknown', '2024-10-24 08:05:35', '2024-10-24 08:05:35'),
(966, '1015', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 08:18:01', '2024-10-24 08:18:01'),
(967, '1015', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-24 08:18:01', '2024-10-24 08:18:01'),
(968, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 01:06:42', '2024-10-25 01:06:42'),
(969, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 01:06:42', '2024-10-25 01:06:42'),
(970, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 01:18:26', '2024-10-25 01:18:26'),
(971, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 01:18:33', '2024-10-25 01:18:33'),
(972, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 01:18:33', '2024-10-25 01:18:33'),
(973, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 06:36:02', '2024-10-25 06:36:02'),
(974, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 06:36:02', '2024-10-25 06:36:02'),
(975, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 06:37:18', '2024-10-25 06:37:18'),
(976, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 06:37:22', '2024-10-25 06:37:22'),
(977, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-25 06:37:23', '2024-10-25 06:37:23'),
(978, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:06:15', '2024-10-26 01:06:15'),
(979, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:06:15', '2024-10-26 01:06:15'),
(980, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:22:04', '2024-10-26 01:22:04'),
(981, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:22:04', '2024-10-26 01:22:04'),
(982, '1006', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:22:04', '2024-10-26 01:22:04'),
(983, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:28:58', '2024-10-26 01:28:58'),
(984, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:28:59', '2024-10-26 01:28:59'),
(985, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:29:39', '2024-10-26 01:29:39'),
(986, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:29:39', '2024-10-26 01:29:39'),
(987, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:30:06', '2024-10-26 01:30:06'),
(988, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:30:06', '2024-10-26 01:30:06'),
(989, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:30:06', '2024-10-26 01:30:06'),
(990, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:31:26', '2024-10-26 01:31:26'),
(991, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:31:26', '2024-10-26 01:31:26'),
(992, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:31:26', '2024-10-26 01:31:26'),
(993, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:35:14', '2024-10-26 01:35:14'),
(994, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:35:42', '2024-10-26 01:35:42'),
(995, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:35:42', '2024-10-26 01:35:42'),
(996, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:35:42', '2024-10-26 01:35:42'),
(997, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:38:08', '2024-10-26 01:38:08'),
(998, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:38:08', '2024-10-26 01:38:08'),
(999, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 01:38:08', '2024-10-26 01:38:08'),
(1000, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 02:14:11', '2024-10-26 02:14:11'),
(1001, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 02:14:11', '2024-10-26 02:14:11'),
(1002, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 02:14:12', '2024-10-26 02:14:12'),
(1003, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 02:14:23', '2024-10-26 02:14:23'),
(1004, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 02:16:42', '2024-10-26 02:16:42'),
(1005, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 02:16:42', '2024-10-26 02:16:42'),
(1006, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 03:04:40', '2024-10-26 03:04:40'),
(1007, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 03:04:44', '2024-10-26 03:04:44'),
(1008, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 03:04:44', '2024-10-26 03:04:44'),
(1009, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 03:05:14', '2024-10-26 03:05:14'),
(1010, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 03:05:19', '2024-10-26 03:05:19'),
(1011, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 03:05:19', '2024-10-26 03:05:19'),
(1012, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 04:30:58', '2024-10-26 04:30:58'),
(1013, '1', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 04:31:03', '2024-10-26 04:31:03'),
(1014, '1', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 04:31:03', '2024-10-26 04:31:03'),
(1015, '1', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 04:33:53', '2024-10-26 04:33:53'),
(1016, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 04:34:01', '2024-10-26 04:34:01'),
(1017, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 04:34:01', '2024-10-26 04:34:01'),
(1018, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:41:23', '2024-10-26 06:41:23'),
(1019, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:41:23', '2024-10-26 06:41:23'),
(1020, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:41:54', '2024-10-26 06:41:54'),
(1021, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:41:54', '2024-10-26 06:41:54'),
(1022, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:41:55', '2024-10-26 06:41:55'),
(1023, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:46:04', '2024-10-26 06:46:04'),
(1024, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:46:04', '2024-10-26 06:46:04'),
(1025, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:47:09', '2024-10-26 06:47:09'),
(1026, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:47:10', '2024-10-26 06:47:10'),
(1027, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:47:11', '2024-10-26 06:47:11'),
(1028, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:49:27', '2024-10-26 06:49:27'),
(1029, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:49:27', '2024-10-26 06:49:27'),
(1030, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:50:48', '2024-10-26 06:50:48'),
(1031, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:50:49', '2024-10-26 06:50:49'),
(1032, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:50:50', '2024-10-26 06:50:50'),
(1033, '1006', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:53:25', '2024-10-26 06:53:25'),
(1034, '1006', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:53:25', '2024-10-26 06:53:25'),
(1035, '1006', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:54:11', '2024-10-26 06:54:11'),
(1036, '1006', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:54:12', '2024-10-26 06:54:12'),
(1037, '1006', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:54:13', '2024-10-26 06:54:13'),
(1038, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:57:48', '2024-10-26 06:57:48'),
(1039, '1015', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:58:46', '2024-10-26 06:58:46'),
(1040, '1015', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 06:58:46', '2024-10-26 06:58:46'),
(1041, '1015', 'login', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 07:02:32', '2024-10-26 07:02:32'),
(1042, '1015', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 07:02:32', '2024-10-26 07:02:32'),
(1043, '1015', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 07:04:27', '2024-10-26 07:04:27'),
(1044, '1015', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 07:04:28', '2024-10-26 07:04:28'),
(1045, '1015', 'store-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 07:04:29', '2024-10-26 07:04:29'),
(1046, '1006', 'logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 07:04:51', '2024-10-26 07:04:51'),
(1047, '1015', 'login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 07:05:01', '2024-10-26 07:05:01'),
(1048, '1015', 'login > create', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'Unknown', '2024-10-26 07:05:01', '2024-10-26 07:05:01'),
(1049, '1015', 'api > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 07:08:23', '2024-10-26 07:08:23'),
(1050, '1015', 'check-attendance > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 07:08:24', '2024-10-26 07:08:24'),
(1051, '1015', 'store-attendance-out > create', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0', 'Unknown', '2024-10-26 07:08:25', '2024-10-26 07:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_pegawai` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pegawai` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick_name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` int DEFAULT NULL,
  `golongan` int DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `storage` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `kode_pegawai`, `nik_pegawai`, `full_name`, `nick_name`, `no_telp`, `alamat`, `jabatan`, `golongan`, `tgl_lahir`, `storage`, `created_at`, `updated_at`) VALUES
(1, '10025', '201911010054', 'CHAIRUNNISA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(3, '12', '202102110075', 'SAKIR', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(5, '30106', '201808060020', 'ARIYANTO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-09-29 13:57:55', '2024-09-29 13:57:55'),
(6, '30210', '00000', 'ENDRI SUSANDI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-09-29 13:57:55', '2024-09-29 13:57:55'),
(7, '30211', '200910100021', 'MISIANTO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-09-29 13:57:55', '2024-09-29 13:57:55'),
(8, '30212', '00000', 'EDI SISWANTO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-09-29 13:57:55', '2024-09-29 13:57:55'),
(9, '30302', '201609200449', 'WAHYU PANDU BIMANTARA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(10, '30364', '00000', 'IRFAN PRATAMA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(11, '30402', '201101020101', 'MISRAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(12, '30412', '201109070177', 'MUHAMMAD YACUB LUBIS', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(13, '30422', '201209250273', 'SAHRUM', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(14, '30424', '00000', 'RAHMADSYAH HARAHAP', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(15, '30426', '00000', 'AGUS PRAYETNO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(16, '30431', '202104070082', 'HANDA YULIANDA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(17, '30460', '2021111500101', 'WAHYUNI PRATIWI SIAHAAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(18, '30467', '20211201006', 'ADRIYAS TARIQ KALIFA LUBIS', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(19, '30468', '2021120200105', 'INDRA HADI SUSWOYO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(20, '30469', '2021120400106', 'DARMAWAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(21, '30471', '2021121700107', 'SUMIATI MANURUNG', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(22, '30472', '2022011200108', 'PRIYONO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(23, '30477', '2022010200111', 'BOBY HARDIYAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(24, '30490', '1207270805990000', 'FAUZAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(25, '30501', '202207010042', 'DAMERIA SIMBOLON', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(26, '30504', '2022100800115', 'BASTIAN ALESSANDRO S', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(27, '30601', '00000', 'SURYADI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(28, '30606', '201103180115', 'INDRA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(29, '30611', '00000', 'IWAN RIANTO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(30, '30615', '00000', 'ADEK S', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(31, '30635', '201904110042', 'ZHON PII SIREGAR', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(32, '30648', '00000', 'M. IPAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(33, '30702', '200903240023', 'JUNIATI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(34, '30710', '201202290219', 'IRA YANDA NASUTION', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(35, '30711', '201503020424', 'HERWAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(36, '30719', '20210603005', 'NAZARUDDIN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(37, '30720', '00000', 'DARMAWI USMAN ST', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(38, '30807', '201109090178', 'LIBUR SUSANTO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(39, '30816', '201901080038', 'DARWINSYAH', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(40, '30834', '201602090435', 'SUJIRNO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(41, '30905', '202105270085', 'ADI WINOTO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(42, '31203', '2022210700133', 'HUI CUANG', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(43, '31206', '20211201007', 'REZA ANANDA LEO SAPUTRA PURBA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(44, '31212', '00000', 'INSAN SAPUTRA SIREGAR', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(45, '31221', '00000', 'DARDA WIDARDI SIMPHO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(46, '31224', '202318010017', 'PARIANTO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(47, '31225', '202301250018', 'AKBAR RIYANTO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(48, '31229', '202302130021', 'IKA RAHMAWATI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(49, '31231', '202302210024', 'SRI ENDAYANI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(50, '31233', '202303010026', 'DIONARDI SIMANGUNGSONG', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(51, '31234', '202303130028', 'MUHAMMAD AQRO REZA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(52, '31235', '202303130027', 'SANTO ANRE TOGATOROP', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(53, '31237', '202303240029', 'SYAMSURIZAL', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(54, '31240', '202304290031', 'RUDI AMRULLAH', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(55, '31249', '202305290041', 'MUHAMMAD RANGGA ATSIL', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(56, '31251', '202302010025', 'RENDI GUNAWAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(57, '31252', '202306130042', 'ERIANTO', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(58, '31272', '202307110060', 'FIRJA AGUSTIAN LUBIS', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(59, '31273', '202307170062', 'Sudiro', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(60, '31278', '202307240067', 'Agus Maulana', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(61, '31279', '202307010054', 'RIO CHANDRA HUTAGALUNG', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(62, '31281', '202308070069', 'Boy Setiawan', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(63, '31282', '202308070071', 'MARTAHI SITUMEANG', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(64, '31285', '202308140073', 'M. Haikal Siregar', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(65, '31287', '202308210076', 'Mhd Muzamil', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(66, '31288', '202308210075', 'Mujiono', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(67, '31292', '202308250079', 'Darma Indra Harahap', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(68, '31294', '202309010082', 'YUDI DWI APRIANSYAH', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(69, '31295', '202309010083', 'Dodi Alexius Siringoringo', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(70, '31297', '202309040085', 'M. Maulana Putra', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(71, '31300', '202309180088', 'Are Mozrat Barus', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(72, '31302', '202310270090', 'MUHAMMAD IKBAL', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(73, '31305', '202311010093', 'Taufiq Qurrahman', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(74, '31307', '202311030095', 'M. RONA MUNARI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(75, '31309', '202311130097', 'MUHAMMAD  DANI RAMADHAN SIREGAR', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(76, '31313', '202311200101', 'M. Heru Qurahman', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(77, '31314', '202311220102', 'SAIFUL ASMADI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(78, '31315', '202312010103', 'BUDI ASMAR LUBIS', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(79, '31317', '202312040105', 'M HADI TAYEB SIREGAR', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(80, '31318', '202312050106', 'Johan', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(81, '31319', '202312050107', 'ABDUL ROSID', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(82, '31320', '202312270108', 'Manolo Daely', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(83, '31321', '202401020110', 'Abdul Sangap Berutu ', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(84, '31322', '202401020109', 'Roni', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(85, '31324', '202401030112', 'MUHAMMAD RIFAI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(86, '31326', '202401150114', 'Anggi Syahputra Lubis', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(87, '31329', '202401170117', 'HENDRA WIJAYA KESUMA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(88, '31330', '202401180118', 'RIAN PRATAMA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(89, '31331', '202301180119', 'Budi Ramansah Siahaan', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(90, '31332', '202301190120', 'MUHAMMAD IFNU LUHUKAI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(91, '31334', '202301220121', 'MUHAMMAD ASRI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(92, '31335', '202301250123', 'Han Juhairi Siregar', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(93, '31336', '202429010126', 'Ferdiansyah', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(94, '31337', '202401290125', 'Rahmadh Awaluddin', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(95, '31338', '202401290124', 'Nael Aries Marcelino Purba', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(96, '31339', '202401300128', 'ASRUL NIZAR', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(97, '31340', '202401300127', 'AZHAR FAUZAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(98, '31341', '202401310129', 'Hafiz Ramadhan', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(99, '31342', '202402010130', 'Adha Afrinanda Tanjung', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(100, '31343', '202402030131', 'Stanley Stevenson', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(101, '31344', '202402050132', 'Risky', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(102, '31345', '202402120133', 'Herison Sinaga', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(103, '31346', '202402150134', 'Monica Desi Deria Gultom', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(104, '31347', '202402200135', 'Mhd Gerald Faler Handoko', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(105, '31348', '202402210136', 'Fahrul Reza Siregar', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(106, '31349', '202403010140', 'Miftakhul Huda', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(107, '31350', '202403010138', 'Tengku Imran', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(108, '31351', '202403010139', 'Irfan Syahputra', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(109, '31352', '202403010137', 'Eric Agustian Sihombing', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(110, '31353', '202403010141', 'Jusnan Hasan', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(111, '31354', '202403020143', 'Rizky Sumahadi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(112, '31355', '202403020142', 'Krisdian Jogi Sianturi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(113, '31356', '202403050144', 'Surya Hendrik', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(114, '3454', '202107220090', 'JANSEN HUTAGALUNG', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(115, '3456', '00000', 'AZUANDA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(116, '3465', '00000', 'ROZUL', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(117, '34677', '00000', 'M. IKBAL', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(118, '3470', '202108030096', 'CANDRA SYAHPUTRA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(119, '3472', '202110110098', 'WAHYU SYAHPUTRA', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(120, '7', '202009010071', 'FERA ARINI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(121, '315', '201812100602', 'OKY SANDY SIRAIT', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(122, '55', '0', 'SUWANDI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(123, '31357', '0', 'Ari Syahputra', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(126, '31358', '0', 'Risky Pasaribu', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(127, '31359', '0', 'Rapi Pasaribu', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(128, '31360', '0', 'Ageng Prastio', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(129, '31361', '0', 'Muhammad Ridho', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(130, '31362', '0', 'Dewa Anggoro', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(131, '31363', '0', 'Khairul Saban Harahap', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(133, '31364', '0', 'Muhammad Gunadi Siregar', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(134, '31365', '0', 'Muhammad Celpin Nasution', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(135, '31368', '0', 'Muhammad Sadriyanto', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(136, '31369', '0', 'Jekki Suprastio', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(137, '31370', '0', 'Kiki Prayetno', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(138, '31366', '0', 'M. Anja Kesuma', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(139, '31367', '0', 'Ali Sabana', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(140, '31371', '0', 'Dwi Bagus Permadi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(141, '31373', '0', 'Raihan Sahrian Brutu', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(142, '31375', '0', 'Handoko', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(143, '31376', '202405020165', 'RENDI GUNAWAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(144, '31377', '0', 'Heri Wibowo', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(145, '31378', '0', 'Imam Syahputra', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(146, '31379', '0', 'Mhd Idris', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(147, '31380', '0', 'Sandi Harefa', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(148, '31381', '0', 'Syafrizal', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(149, '31372', '0', 'NOVI TRIYANTI SIAGIAN', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(150, '31384', '0', 'Wawan Agustin', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(153, '31382', '0', 'MUHAMMAD IPAN TAUFIK', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(155, '31383', '0', 'Serpina Riris Simorangkir', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(156, '31385', '0', 'Misdianto', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(158, '31386', '0', 'Dedi Hardiansyah', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(160, '31387', '0', 'BRANDU JAYA OMPUSUNGGU', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(162, '31388', '0', 'Surio Ismanto', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(165, '495', '2024024050175', 'IMAM AFANDI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(166, '31392', '0', 'Dian Bagus Suhendardi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(168, '31374', '0', 'DZIKRI ALFARISI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(169, '31389', '0', 'Rusman Hadi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(170, '31391', '0', 'Nico Ramadino', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(175, '31390', '0', 'Rudy Effendi Nasution', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(176, '31393', '0', 'Syapriandi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(177, '31394', '0', 'Herman', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(179, '31395', '0', 'Sunaryo', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(180, '31396', '0', 'Chandra Irawan', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(182, '31397', '0', 'Tri Bayudi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(183, '31398', '0', 'Rozul Wardani', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(184, '31399', '0', 'Budianto Basri', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(185, '31400', '0', 'Riskita Darsa', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(186, '31401', '0', 'Tri Wahyu Andika', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(187, '31402', '0', 'Ajirama', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(188, '31403', '0', 'Raja Ansari', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(189, '31404', '0', 'Arif Rahman', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(190, '31405', '0', 'Akhiruddin', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(191, '31406', '0', 'Reynal Wahyudin', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(192, '31407', '0', 'Nofriansyah Pane', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(193, '31408', '0', 'Sutrisman', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(194, '31409', '0', 'Ariyadi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(195, '31413', '0', 'Ronald Glory Sinaga', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(196, '31410', '0', 'Dimas Sahputra', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(197, '31411', '0', 'Jefri K Daulay', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(198, '31412', '0', 'Misianto', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(201, '31414', '0', 'Ramdani', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(202, '31416', '0', 'Rahmad Hamdani Nasution', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(203, '31415', '0', 'Han Juhairi Siregar', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(204, '31417', '0', 'Tri Ardianto', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(205, '31418', '0', 'Winarto', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(206, '31419', '0', 'M SOFYAN HADI', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(207, '31420', '0', 'Eki Al Vadli', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(208, '31421', '0', 'Akbar Fitra Perdana', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(209, '31422', '0', 'Dedy Wicaksono', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(210, '31423', '0', 'Raden Mhd Azril Azhari', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(211, '31424', '0', 'Irro Siregar', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(212, '31425', '0', 'Herwan', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(213, '31426', '0', 'Rizky M. Siregar', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(214, '31428', '0', 'Daniel Darmayanto Simanjuntak', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(215, '31432', '0', 'Robani Zebua', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(216, '31427', '0', 'Agil Wahyudi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(217, '31429', '0', 'Andre', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(218, '31430', '0', 'Parianto', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(219, '31431', '0', 'Ali Muda Pane', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(220, '507', '2024002090184', 'M. FADLY', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(221, '31433', '0', 'Edi Siswanto', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(223, '31434', '202409090234', 'Jandri Tindaon', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(224, '31435', '0', 'Agus Maulana', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(225, '31436', '0', 'Sialip Siregar', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(226, '31437', '0', 'Ahmad Purwondo', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(227, '31438', '0', 'Robiyanta', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(228, '31439', '0', 'harliadi', NULL, NULL, NULL, NULL, 6, NULL, NULL, '2024-10-09 02:15:35', '2024-10-09 02:15:35'),
(230, '14102024', '1209312810990001', 'Dito Sabbihisma', 'Dito', '083189134389', 'Medan', 24, 6, '2024-04-29', 'labels/14102024/', '2024-10-14 03:19:49', '2024-10-23 04:49:34'),
(9999999999, '28101999', '12012810990001', 'Muhammad Abdi Mayu', 'Abdi', '082265380192', 'Tanjung Morawa', 11, 6, '1999-10-28', 'labels/28101999/', '2024-09-29 13:57:55', '2024-10-23 03:21:13'),
(10000000007, '10232024', '12093123102024000', 'Juli', 'Juli', '082265380918', 'Medan', 12, 4, '2024-09-17', 'labels/10232024/', '2024-10-23 06:27:19', '2024-10-23 06:48:39'),
(10000000008, '13331023', '1209312810990001', 'Abdul', 'Abdul', '085275349929', 'Medan', 24, 4, '2024-09-13', 'labels/13331023/', '2024-10-23 06:34:32', '2024-10-23 06:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_placement`
--

CREATE TABLE `tb_placement` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_penempatan` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penempatan` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` int DEFAULT NULL,
  `restrict_app` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_placement`
--

INSERT INTO `tb_placement` (`id`, `kode_penempatan`, `penempatan`, `alamat`, `longitude`, `latitude`, `radius`, `restrict_app`, `created_at`, `updated_at`) VALUES
(5, 'MDN01', 'Kantor Pusat', 'Jl. Glugur No 18D', '98.66902828216554', '3.591516090416829', 999999000, 't', '2024-09-29 20:26:07', '2024-10-03 08:16:13'),
(6, 'MDN02', 'Kantor Pusat 2', 'Jl. Semambu', '0.0013196468353271487', '0.0008904933929162457', 0, 'y', '2024-09-29 21:32:11', '2024-10-04 04:48:56'),
(7, 'MDN03', 'Cabang Tembung', 'Jl. Gambir Ps. VIII No.88, Tembung', '3.40576171875', '1.142502403706165', 0, 't', '2024-09-29 21:32:41', '2024-10-04 04:49:08'),
(8, 'MDN04', 'Cabang Titi Kuning', 'Jl. Brig Jend. Zein Hamid No.KM 7.6, Titi Kuning', '98.6690390110016', '3.5914732593566807', 150, 'y', '2024-09-29 21:33:19', '2024-10-04 04:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_pegawai` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `kode_pegawai`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Muhammad Abdi Mayu', 'abdi@darkotech.id', NULL, '$2y$12$8PjfWYlAsiKTobWYA/mJcOzLDiXHh2sKfcabhkJelMx8oSftf8MOq', '1BP2HqqC4pirCfvy0PwA7LvQhfT4XG0Xf8PVjqQtXh3ohzsVqJuJhNA7Bs6h', '2024-10-01 09:55:37', '2024-10-11 03:59:31'),
(1005, NULL, 'HRD', 'hrd@indodacin.com', NULL, '$2y$12$r559G0XgTTGuffzDo25m3Oa58tE/6UYs3ipk.ddfmR0jA/GyJe08y', NULL, '2024-10-12 02:33:03', '2024-10-12 02:33:03'),
(1006, 28101999, 'Muhammad Abdi Mayu', 'user@indodacin.com', NULL, '$2y$12$mGyAhmMwQcW2OCA2aq/.4OImmLuBATJevl8hHkCJofp7bzc/LuSJ2', 'Up7ZoA6HzFHpbXAEHHOYYZJoVHhPRRUYmafiw1bRF3IRMnS2sb6Q44zkpEfA', '2024-10-14 06:27:29', '2024-10-14 06:27:29'),
(1014, 10232024, 'Juli', 'Juli@indodacin.com', NULL, '$2y$12$OkOh.QbZDaEH5FHacEithOJOFzgjYbOyi01vgJHGUsnUmEkktvGwG', NULL, '2024-10-23 06:27:19', '2024-10-23 06:27:19'),
(1015, 13331023, 'Abdul', 'Abdul@indodacin.com', NULL, '$2y$12$mGyAhmMwQcW2OCA2aq/.4OImmLuBATJevl8hHkCJofp7bzc/LuSJ2', 'm7iGU3hdwqY7vCI2aL1HB73ST5nhraF9HyRyfF8pUmAP2aoLed1MnJ6ibiVn', '2024-10-23 06:34:33', '2024-10-23 06:34:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_attendance_out`
--
ALTER TABLE `tb_attendance_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_pegawai` (`kode_pegawai`),
  ADD KEY `kode_pegawai_2` (`kode_pegawai`),
  ADD KEY `kode_pegawai_3` (`kode_pegawai`);

--
-- Indexes for table `tb_dayoff`
--
ALTER TABLE `tb_dayoff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_division`
--
ALTER TABLE `tb_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penempatan` (`penempatan`),
  ADD KEY `divisi` (`divisi`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_golongan` (`id_golongan`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_pegawai` (`kode_pegawai`);

--
-- Indexes for table `tb_placement`
--
ALTER TABLE `tb_placement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_placement_kode_penempatan_unique` (`kode_penempatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `bjkkjjk` (`kode_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_attendance_out`
--
ALTER TABLE `tb_attendance_out`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `tb_dayoff`
--
ALTER TABLE `tb_dayoff`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_division`
--
ALTER TABLE `tb_division`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96513;

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1052;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000000009;

--
-- AUTO_INCREMENT for table `tb_placement`
--
ALTER TABLE `tb_placement`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
