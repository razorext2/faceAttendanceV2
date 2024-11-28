-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: localhost    Database: faceid
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('current_date','s:15:\"20241128_093618\";',1732761388),('spatie.permission.cache','a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:51:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:10:\"users-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:12:\"users-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:10:\"users-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"users-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:10:\"roles-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:12:\"roles-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:10:\"roles-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:12:\"roles-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:16:\"permissions-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:18:\"permissions-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:16:\"permissions-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:18:\"permissions-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:11:\"divisi-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:13;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:13:\"divisi-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:14;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:11:\"divisi-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:15;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:13:\"divisi-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:16;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:14:\"placement-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:17;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:16:\"placement-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:18;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:14:\"placement-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:19;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:16:\"placement-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:20;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:13:\"golongan-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:21;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:15:\"golongan-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:22;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:13:\"golongan-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:23;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:15:\"golongan-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:24;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:12:\"jabatan-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:25;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:14:\"jabatan-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:26;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:12:\"jabatan-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:27;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:14:\"jabatan-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:28;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:12:\"pegawai-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:29;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:14:\"pegawai-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:30;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:12:\"pegawai-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:31;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:14:\"pegawai-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:32;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:8:\"log-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:10:\"log-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:7:{i:0;i:1;i:1;i:2;i:2;i:7;i:3;i:8;i:4;i:9;i:5;i:10;i:6;i:11;}}i:34;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:8:\"log-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:10:\"log-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:11:\"dayoff-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:6:{i:0;i:1;i:1;i:2;i:2;i:8;i:3;i:9;i:4;i:10;i:5;i:11;}}i:37;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:13:\"dayoff-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:5:{i:0;i:1;i:1;i:8;i:2;i:9;i:3;i:10;i:4;i:11;}}i:38;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:11:\"dayoff-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:5:{i:0;i:1;i:1;i:8;i:2;i:9;i:3;i:10;i:4;i:11;}}i:39;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:13:\"dayoff-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:8;}}i:40;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:13:\"dayoff-detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:6:{i:0;i:1;i:1;i:2;i:2;i:8;i:3;i:9;i:4;i:10;i:5;i:11;}}i:41;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:14:\"dayoff-confirm\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:42;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:7:\"capture\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:5:{i:0;i:1;i:1;i:7;i:2;i:9;i:3;i:10;i:4;i:11;}}i:43;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:16:\"pegawai-timeline\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:44;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:9:\"dashboard\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:8;}}i:45;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:14:\"dashboard-user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:5:{i:0;i:1;i:1;i:7;i:2;i:9;i:3;i:10;i:4;i:11;}}i:46;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:12:\"collect-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:14:\"collect-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:12:\"collect-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:14:\"collect-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:15:\"collect-approve\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:7:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:3:\"HRD\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:8;s:1:\"b\";s:10:\"Management\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:7;s:1:\"b\";s:8:\"Employee\";s:1:\"c\";s:3:\"web\";}i:4;a:3:{s:1:\"a\";i:9;s:1:\"b\";s:7:\"Teknisi\";s:1:\"c\";s:3:\"web\";}i:5;a:3:{s:1:\"a\";i:10;s:1:\"b\";s:6:\"Driver\";s:1:\"c\";s:3:\"web\";}i:6;a:3:{s:1:\"a\";i:11;s:1:\"b\";s:9:\"Collector\";s:1:\"c\";s:3:\"web\";}}}',1732846935);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (13,'2024_10_01_153336_create_tbllog_table',6),(23,'0001_01_01_000000_create_users_table',7),(24,'0001_01_01_000001_create_cache_table',7),(25,'0001_01_01_000002_create_jobs_table',7),(26,'2024_08_30_022504_create_tb_pegawai_table',7),(27,'2024_09_02_111823_create_tb_attendance_table',7),(28,'2024_09_02_112424_create_tb_attendance_out_table',7),(29,'2024_09_02_145341_create_tb_jabatan_table',7),(30,'2024_09_09_105914_create_personal_access_tokens_table',7),(31,'2024_09_20_164511_create_tb_division_table',7),(32,'2024_09_20_164525_create_tb_placement_table',7),(33,'2024_09_30_131459_create_tb_log_table',7),(34,'2024_10_01_150019_create_tbllog_table',7),(35,'2024_10_03_144245_create_tb_golongan_table',8),(36,'2024_10_04_101514_create_tb_jadwal_table',9),(38,'2024_10_05_111906_create_roles_and_permissions_tables',10),(39,'2024_10_05_115006_create_permission_tables',11),(40,'2024_10_05_133509_create_permission_tables',12),(41,'2024_10_11_090452_create_permission_tables',13),(42,'2024_10_14_134628_create_tb_dayoff_table',14),(43,'2024_11_01_154937_create_tb_salary_table',15),(44,'2024_11_01_164222_create_tb_allowance_table',15),(45,'2024_11_01_164555_create_tb_dedcution_table',15),(46,'2024_11_01_164647_create_tb_overtime_table',15),(47,'2024_11_19_100219_create_tb_collect_table',16),(48,'2024_11_19_100355_create_tb_photo_collect_table',16);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `model_to_user` FOREIGN KEY (`model_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',1005),(7,'App\\Models\\User',1006),(7,'App\\Models\\User',1020),(7,'App\\Models\\User',1021),(7,'App\\Models\\User',1022),(8,'App\\Models\\User',1023),(7,'App\\Models\\User',1024),(7,'App\\Models\\User',1026),(7,'App\\Models\\User',1027);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'users-list','web','2024-10-11 03:21:32','2024-10-11 03:21:32'),(2,'users-create','web','2024-10-11 03:21:32','2024-10-11 03:21:32'),(3,'users-edit','web','2024-10-11 03:21:32','2024-10-11 03:21:32'),(4,'users-delete','web','2024-10-11 03:21:32','2024-10-11 03:21:32'),(5,'roles-list','web','2024-10-10 20:21:32','2024-10-10 20:21:32'),(6,'roles-create','web','2024-10-10 20:21:32','2024-10-10 20:21:32'),(7,'roles-edit','web','2024-10-10 20:21:32','2024-10-10 20:21:32'),(8,'roles-delete','web','2024-10-10 20:21:32','2024-10-10 20:21:32'),(9,'permissions-list','web','2024-10-10 20:21:32','2024-10-10 20:21:32'),(10,'permissions-create','web','2024-10-10 20:21:32','2024-10-10 20:21:32'),(11,'permissions-edit','web','2024-10-10 20:21:32','2024-10-10 20:21:32'),(12,'permissions-delete','web','2024-10-10 20:21:32','2024-10-10 20:21:32'),(21,'divisi-list','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(22,'divisi-create','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(23,'divisi-edit','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(24,'divisi-delete','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(25,'placement-list','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(26,'placement-create','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(27,'placement-edit','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(28,'placement-delete','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(29,'golongan-list','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(30,'golongan-create','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(31,'golongan-edit','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(32,'golongan-delete','web','2024-10-12 03:23:20','2024-10-12 03:23:20'),(33,'jabatan-list','web','2024-10-12 03:24:38','2024-10-12 03:24:38'),(34,'jabatan-create','web','2024-10-12 03:24:38','2024-10-12 03:24:38'),(35,'jabatan-edit','web','2024-10-12 03:24:38','2024-10-12 03:24:38'),(36,'jabatan-delete','web','2024-10-12 03:24:38','2024-10-12 03:24:38'),(37,'pegawai-list','web','2024-10-12 03:24:38','2024-10-12 03:24:38'),(38,'pegawai-create','web','2024-10-12 03:24:38','2024-10-12 03:24:38'),(39,'pegawai-edit','web','2024-10-12 03:24:38','2024-10-12 03:24:38'),(40,'pegawai-delete','web','2024-10-12 03:24:38','2024-10-12 03:24:38'),(41,'log-list','web','2024-10-12 03:25:02','2024-10-12 03:25:02'),(42,'log-create','web','2024-10-12 03:25:02','2024-10-12 03:25:02'),(43,'log-edit','web','2024-10-12 03:25:02','2024-10-12 03:25:02'),(44,'log-delete','web','2024-10-12 03:25:02','2024-10-12 03:25:02'),(45,'dayoff-list','web','2024-10-14 07:15:09','2024-10-14 07:15:09'),(46,'dayoff-create','web','2024-10-14 07:15:09','2024-10-14 07:15:09'),(47,'dayoff-edit','web','2024-10-14 07:15:09','2024-10-14 07:15:09'),(48,'dayoff-delete','web','2024-10-14 07:15:09','2024-10-14 07:15:09'),(49,'dayoff-detail','web','2024-10-17 04:49:24','2024-10-17 04:49:24'),(50,'dayoff-confirm','web','2024-10-22 04:26:10','2024-10-22 04:30:02'),(51,'capture','web','2024-10-24 07:11:12','2024-10-24 07:11:12'),(53,'pegawai-timeline','web','2024-10-26 08:57:07','2024-10-26 08:57:07'),(54,'dashboard','web','2024-10-31 02:46:41','2024-10-31 02:46:41'),(55,'dashboard-user','web','2024-10-31 02:47:59','2024-11-12 01:22:43'),(56,'collect-list','web','2024-11-26 16:13:43','2024-11-26 16:13:43'),(57,'collect-create','web','2024-11-26 16:13:43','2024-11-26 16:13:43'),(58,'collect-edit','web','2024-11-26 16:13:43','2024-11-26 16:13:43'),(59,'collect-delete','web','2024-11-26 16:13:43','2024-11-26 16:13:43'),(60,'collect-approve','web','2024-11-26 16:13:43','2024-11-26 16:13:43');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(21,2),(22,2),(23,2),(25,2),(26,2),(27,2),(29,2),(30,2),(31,2),(33,2),(34,2),(35,2),(37,2),(38,2),(39,2),(42,2),(45,2),(49,2),(50,2),(53,2),(54,2),(42,7),(51,7),(55,7),(21,8),(22,8),(23,8),(24,8),(25,8),(26,8),(27,8),(28,8),(29,8),(30,8),(31,8),(32,8),(33,8),(34,8),(35,8),(36,8),(37,8),(38,8),(39,8),(40,8),(42,8),(45,8),(46,8),(47,8),(48,8),(49,8),(54,8),(42,9),(45,9),(46,9),(47,9),(49,9),(51,9),(55,9),(42,10),(45,10),(46,10),(47,10),(49,10),(51,10),(55,10),(42,11),(45,11),(46,11),(47,11),(49,11),(51,11),(55,11);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','web','2024-10-11 03:25:37','2024-10-11 03:25:37'),(2,'HRD','web','2024-10-11 03:25:37','2024-10-11 03:25:37'),(7,'Employee','web','2024-10-14 06:26:09','2024-10-14 06:26:09'),(8,'Management','web','2024-10-17 09:28:29','2024-10-17 09:28:29'),(9,'Teknisi','web','2024-11-08 06:34:23','2024-11-08 06:34:23'),(10,'Driver','web','2024-11-08 06:34:39','2024-11-08 06:34:39'),(11,'Collector','web','2024-11-08 06:34:58','2024-11-08 06:34:58');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('7wWuQlfbq6SmAXHMR2ChB7qYTRUxiRB73esZrv07',NULL,'114.10.80.71','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRFQ5NXp5UmRsaGRSWmVpSmYyWUhscldLRzVuUjYyTjhpUHpCcFNsVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjA6Imh0dHBzOi8vaW5kb2RhY2luLnJhem9yZXh0Lm15LmlkL2FwaS9nZXRQZWdhd2FpRGF0YS8yODEwMTk5OSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTI6ImN1cnJlbnRfZGF0ZSI7czoxNToiMjAyNDExMjhfMDkzNjE4Ijt9',1732761378),('Ew6oENfdETG6gDLOpRCi2AdMNf1H4gedczb07VFU',NULL,'114.10.80.71','WhatsApp/2.23.20.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYXRmdmlrVmhRTFpsblBnTzM4S2l6UkJuZEw1TGRJSEcxWDBPbktvZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaW5kb2RhY2luLnJhem9yZXh0Lm15LmlkL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1732761993),('lwo32BtBcKtczVel1rK9HbIWTt2f8ihtd6mTb18T',NULL,'202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXg1Zm1VWFk2ZHFLY0VCQzJhRDgzTmdhazNHaGNPWFlJUVpua2hwSiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaW5kb2RhY2luLnJhem9yZXh0Lm15LmlkL2xvZ2luIjt9fQ==',1732762229),('OoME81sY0A1xwJ8fVpJ2tyiFwIdI5SDFGNdPmmdD',1005,'202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSkZmRzZvTXNaaWs1aU5qSW1Dck1nZ1pBNU9aYVFFa0RiOFY4T0F2biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHBzOi8vaW5kb2RhY2luLnJhem9yZXh0Lm15LmlkL2Rhc2hib2FyZC9wZWdhd2FpLzIzNi9kZXRhaWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMDA1O30=',1732763403),('SUUezpIoBbt0mRHDVpMb8apLPc8oToVJ76ZVutrn',NULL,'141.98.252.182','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSWJKaWJwZXl6dnRNOXEyd0xYMExJVnQyUVlPMlRrZUozTzJ2TmhWYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaW5kb2RhY2luLnJhem9yZXh0Lm15LmlkL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1732762108),('syEpJrOXQ4D4lao1lEUA2vQGbrTLwBKXYwlVwr4K',NULL,'141.98.252.182','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDg2VzY5ZURXOEJGRml3SUw2dTJ3ODVUZWZPRTZFS2g1S1dHZjU0aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaW5kb2RhY2luLnJhem9yZXh0Lm15LmlkL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1732762108);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_allowance`
--

DROP TABLE IF EXISTS `tb_allowance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_allowance` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowance_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowance_type` float DEFAULT NULL COMMENT 'persen atau terbilang\r\n(5%) atau 5000',
  `allowance_fee` bigint DEFAULT NULL COMMENT 'kalau persen, dikalikan dengan gaji. kalau terbilang ya langsung sebut berapa',
  `allowance_period` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `allowance_to_pegawai` (`kode_pegawai`),
  CONSTRAINT `allowance_to_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_allowance`
--

LOCK TABLES `tb_allowance` WRITE;
/*!40000 ALTER TABLE `tb_allowance` DISABLE KEYS */;
INSERT INTO `tb_allowance` VALUES (1,'28101999','Premi Keahlian',500000,500000,'2024-10-01','2024-11-02 02:02:45','2024-11-07 04:50:31'),(2,'28101999','Tunjangan Jabatan',300000,300000,'2024-10-01','2024-11-02 02:09:06','2024-11-07 04:50:08'),(3,'28101999','Tunjangan Masa Kerja',15,600000,'2024-10-01','2024-11-06 02:38:36','2024-11-07 09:34:39');
/*!40000 ALTER TABLE `tb_allowance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_attendance`
--

DROP TABLE IF EXISTS `tb_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_attendance` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upl` tinyint DEFAULT NULL,
  `upl68` tinyint DEFAULT NULL,
  `uplm68` tinyint DEFAULT NULL,
  `upljam` tinyint DEFAULT NULL,
  `jenis` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktuori` datetime DEFAULT NULL,
  `status` tinyint DEFAULT NULL,
  `jam_masuk` datetime NOT NULL,
  `longitude` text COLLATE utf8mb4_unicode_ci,
  `latitude` text COLLATE utf8mb4_unicode_ci,
  `photoURL` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_pegawai` (`kode_pegawai`),
  CONSTRAINT `in_to_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_attendance`
--

LOCK TABLES `tb_attendance` WRITE;
/*!40000 ALTER TABLE `tb_attendance` DISABLE KEYS */;
INSERT INTO `tb_attendance` VALUES (66,'112233',0,0,0,0,'Wajah','2024-11-13 13:54:56',1,'2024-11-13 13:54:56',NULL,NULL,'11223320241113_135456','2024-11-13 06:54:56','2024-11-13 06:54:56'),(67,'123123',0,0,0,0,'Wajah','2024-11-13 16:14:11',1,'2024-11-13 16:14:11','98.6665848','3.6076307','12312320241113_161410','2024-11-13 09:14:11','2024-11-13 09:14:11'),(68,'112233',0,0,0,0,'Wajah','2024-11-14 07:45:27',1,'2024-11-14 07:45:27','97.9491521','2.6319443','11223320241114_074526','2024-11-14 00:45:27','2024-11-14 00:45:27'),(70,'315',0,0,0,0,'Wajah','2024-11-14 15:31:17',1,'2024-11-14 15:31:17','102.83983166667','-4.37809','31520241114_153116','2024-11-14 08:31:17','2024-11-14 08:31:17'),(71,'112233',0,0,0,0,'Wajah','2024-11-15 08:07:35',1,'2024-11-15 08:07:35','97.9489783','2.6319867','11223320241115_080734','2024-11-15 01:07:35','2024-11-15 01:07:35'),(73,'31450',0,0,0,0,'Wajah','2024-11-21 08:12:57',1,'2024-11-21 08:12:57','98.4803001','3.62132','3145020241121_081254','2024-11-21 01:12:57','2024-11-21 01:12:57'),(74,'31450',0,0,0,0,'Wajah','2024-11-22 07:40:14',1,'2024-11-22 07:40:14','101.4266918','0.603567','3145020241122_074012','2024-11-22 00:40:14','2024-11-22 00:40:14'),(75,'28101999',0,0,0,0,'Wajah','2024-11-22 16:46:57',1,'2024-11-22 16:46:57','98.6710711','3.5905198','2810199920241122_164657','2024-11-22 09:46:57','2024-11-22 09:46:57'),(76,'28101999',0,0,0,0,'Wajah','2024-11-23 08:55:56',1,'2024-11-23 08:55:56','98.6710711','3.5905198','2810199920241123_085555','2024-11-23 01:55:56','2024-11-23 01:55:56'),(78,'28101999',0,0,0,0,'Wajah','2024-11-28 09:25:44',1,'2024-11-28 09:25:44',NULL,NULL,'2810199920241123_085555','2024-11-28 09:25:44','2024-11-28 09:25:44');
/*!40000 ALTER TABLE `tb_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_attendance_out`
--

DROP TABLE IF EXISTS `tb_attendance_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_attendance_out` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_pegawai` (`kode_pegawai`),
  KEY `kode_pegawai_2` (`kode_pegawai`),
  KEY `kode_pegawai_3` (`kode_pegawai`),
  KEY `kode_pegawai_4` (`kode_pegawai`),
  CONSTRAINT `out_to_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_attendance_out`
--

LOCK TABLES `tb_attendance_out` WRITE;
/*!40000 ALTER TABLE `tb_attendance_out` DISABLE KEYS */;
INSERT INTO `tb_attendance_out` VALUES (200,'123123',0,0,0,0,'Wajah','2024-11-13 16:17:46',1,'2024-11-13 16:17:46','99.165423363447','3.3360303965685','12312320241113_161745','2024-11-13 09:17:46','2024-11-13 09:17:46'),(201,'123123',0,0,0,0,'Wajah','2024-11-13 16:23:12',1,'2024-11-13 16:23:12','99.792172461748','2.9617536159645','12312320241113_162311','2024-11-13 09:23:12','2024-11-13 09:23:12'),(202,'112233',0,0,0,0,'Wajah','2024-11-13 16:32:00',1,'2024-11-13 16:32:00','97.9492047','2.632071','11223320241113_163159','2024-11-13 09:32:00','2024-11-13 09:32:00'),(207,'112233',0,0,0,0,'Wajah','2024-11-14 19:02:11',1,'2024-11-14 19:02:11','97.9172414','2.6270318','11223320241114_190210','2024-11-14 12:02:11','2024-11-14 12:02:11'),(209,'31450',0,0,0,0,'Wajah','2024-11-21 08:13:56',1,'2024-11-21 08:13:56','98.4802951','3.6213185','3145020241121_081354','2024-11-21 01:13:56','2024-11-21 01:13:56'),(210,'31450',0,0,0,0,'Wajah','2024-11-21 08:15:39',1,'2024-11-21 08:15:39','98.480309','3.621199','3145020241121_081536','2024-11-21 01:15:39','2024-11-21 01:15:39'),(211,'31450',0,0,0,0,'Wajah','2024-11-22 16:32:17',1,'2024-11-22 16:32:17','101.8316983','0.42462','3145020241121_081536','2024-11-22 09:32:17','2024-11-22 09:32:17'),(212,'28101999',0,0,0,0,'Wajah','2024-11-22 16:52:39',1,'2024-11-22 16:52:39','98.6710711','3.5905198','2810199920241122_165237','2024-11-22 09:52:39','2024-11-22 09:52:39'),(213,'28101999',0,0,0,0,'Wajah','2024-11-22 16:56:04',1,'2024-11-22 16:56:04','98.6710711','3.5905198','2810199920241122_165602','2024-11-22 09:56:04','2024-11-22 09:56:04'),(214,'28101999',0,0,0,0,'Wajah','2024-11-23 08:56:18',1,'2024-11-23 08:56:18','98.6710711','3.5905198','2810199920241123_085617','2024-11-23 01:56:18','2024-11-23 01:56:18'),(215,'28101999',0,0,0,0,'Wajah','2024-11-26 16:35:18',1,'2024-11-26 16:35:18',NULL,NULL,'2810199920241123_085555','2024-11-26 16:35:18','2024-11-26 16:35:18'),(216,'28101999',0,0,0,0,'Wajah','2024-11-28 09:28:08',1,'2024-11-28 09:28:08',NULL,NULL,'2810199920241123_085555','2024-11-28 09:28:08','2024-11-28 09:28:08'),(217,'28101999',0,0,0,0,'Wajah','2024-11-28 09:31:14',1,'2024-11-28 09:31:14',NULL,NULL,'2810199920241128_093113','2024-11-28 09:31:14','2024-11-28 09:31:14'),(218,'28101999',0,0,0,0,'Wajah','2024-11-28 09:32:40',1,'2024-11-28 09:32:40','98.6710711','3.5862346','2810199920241128_093239','2024-11-28 09:32:40','2024-11-28 09:32:40'),(219,'28101999',0,0,0,0,'Wajah','2024-11-28 09:35:15',1,'2024-11-28 09:35:15',NULL,NULL,'2810199920241128_093514','2024-11-28 09:35:15','2024-11-28 09:35:15'),(220,'28101999',0,0,0,0,'Wajah','2024-11-28 09:36:18',1,'2024-11-28 09:36:18',NULL,NULL,'2810199920241128_093618','2024-11-28 09:36:18','2024-11-28 09:36:18');
/*!40000 ALTER TABLE `tb_attendance_out` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_collect`
--

DROP TABLE IF EXISTS `tb_collect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_collect` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `longitude` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_collect`
--

LOCK TABLES `tb_collect` WRITE;
/*!40000 ALTER TABLE `tb_collect` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_collect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_dayoff`
--

DROP TABLE IF EXISTS `tb_dayoff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_dayoff` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_user` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dayoff_for` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_dari` text COLLATE utf8mb4_unicode_ci,
  `tgl_hingga` text COLLATE utf8mb4_unicode_ci,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `dayoff_to_pegawai` FOREIGN KEY (`id_user`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_dayoff`
--

LOCK TABLES `tb_dayoff` WRITE;
/*!40000 ALTER TABLE `tb_dayoff` DISABLE KEYS */;
INSERT INTO `tb_dayoff` VALUES (17,'28101999','Absen',NULL,'2024-11-28T11:33','2024-11-29T09:33','<h3>Steps to Follow</h3><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>File Permissions</strong>: Ensure the necessary permissions for Laravel and the public folder:</li></ol><div data-value=\"true\"></div><div class=\"ql-code-block-container\" spellcheck=\"false\"><div class=\"ql-code-block\" data-language=\"plain\">sudo chown -R www-data:www-data /var/webapps/laravel-deploy</div><div class=\"ql-code-block\" data-language=\"plain\">sudo chown -R www-data:www-data /var/www/faceid-frontend</div><div class=\"ql-code-block\" data-language=\"plain\">sudo chmod -R 755 /var/webapps/laravel-deploy</div><div class=\"ql-code-block\" data-language=\"plain\">sudo chmod -R 755 /var/www/faceid-frontend</div></div><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Test Nginx Configuration</strong>: Check for syntax errors:</li></ol><div data-value=\"true\"></div><div class=\"ql-code-block-container\" spellcheck=\"false\"><div class=\"ql-code-block\" data-language=\"plain\">sudo nginx -t</div></div><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Reload Nginx</strong>: Apply the changes:</li></ol><div data-value=\"true\"></div><div class=\"ql-code-block-container\" spellcheck=\"false\"><div class=\"ql-code-block\" data-language=\"plain\">sudo systemctl reload nginx</div></div><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Verify Application</strong>: Visit <code>https://indodacin.razorext.my.id</code> to confirm the setup is working.</li></ol><p><br></p><p><img src=\"/storage/uploads/1AmHvhJlvRyBICkWf8tBxG4UcjPqjySh3GbCuX6h.png\"></p><p><br></p><p><img src=\"/storage/uploads/ITcCVde3fjcy3bliGxOEwgMJ36NgwAbG2spS7MI1.png\"></p><p><br></p><p><img src=\"/storage/uploads/2trO8U5o1luAqXbmbqT6bSMP4wWazDCuFVnL8chp.png\"></p>','2','2024-11-28 09:34:07','2024-11-28 09:34:07');
/*!40000 ALTER TABLE `tb_dayoff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_deduction`
--

DROP TABLE IF EXISTS `tb_deduction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_deduction` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deduction_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deduction_type` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deduction_fee` bigint DEFAULT NULL,
  `deduction_period` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_pegawai` (`kode_pegawai`),
  CONSTRAINT `deduction_to_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_deduction`
--

LOCK TABLES `tb_deduction` WRITE;
/*!40000 ALTER TABLE `tb_deduction` DISABLE KEYS */;
INSERT INTO `tb_deduction` VALUES (1,'28101999','BPJS Kesehatan','3.7',148000,'2024-10-01','2024-11-01 03:02:32','2024-11-07 04:52:40'),(2,'28101999','BPJS Ketenagakerjaan','4',160000,'2024-10-01','2024-11-01 03:05:42','2024-11-07 04:52:51'),(4,'28101999','Absen 2xc','98000',98000,'11/01/2024','2024-11-07 04:53:26','2024-11-07 07:40:13');
/*!40000 ALTER TABLE `tb_deduction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_division`
--

DROP TABLE IF EXISTS `tb_division`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_division` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_divisi` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_divisi` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96513 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_division`
--

LOCK TABLES `tb_division` WRITE;
/*!40000 ALTER TABLE `tb_division` DISABLE KEYS */;
INSERT INTO `tb_division` VALUES (7,'1001','Marketing','2024-09-29 20:25:09','2024-09-29 20:25:09'),(8,'2001','Finance','2024-09-29 20:25:16','2024-09-29 20:25:16'),(9,'3001','Admin','2024-09-29 20:25:29','2024-09-29 20:25:29'),(10,'4001','Technician','2024-09-29 20:25:40','2024-09-29 20:25:40'),(11,'5001','IT Support','2024-09-26 20:25:50','2024-10-08 07:24:57');
/*!40000 ALTER TABLE `tb_division` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_golongan`
--

DROP TABLE IF EXISTS `tb_golongan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_golongan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_golongan` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_golongan`
--

LOCK TABLES `tb_golongan` WRITE;
/*!40000 ALTER TABLE `tb_golongan` DISABLE KEYS */;
INSERT INTO `tb_golongan` VALUES (4,'Karyawan Tetap','Kartap','2024-10-04 03:22:16','2024-10-04 03:22:16'),(5,'Harian Lepas','Harlep','2024-10-04 03:39:33','2024-10-04 03:39:33'),(6,'Piket','Piket','2024-10-04 03:44:35','2024-10-04 03:44:35');
/*!40000 ALTER TABLE `tb_golongan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_jabatan`
--

DROP TABLE IF EXISTS `tb_jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_jabatan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` bigint unsigned NOT NULL,
  `penempatan` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `penempatan` (`penempatan`),
  KEY `divisi` (`divisi`),
  CONSTRAINT `jabatan_to_divisi` FOREIGN KEY (`divisi`) REFERENCES `tb_division` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `jabatan_to_placement` FOREIGN KEY (`penempatan`) REFERENCES `tb_placement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jabatan`
--

LOCK TABLES `tb_jabatan` WRITE;
/*!40000 ALTER TABLE `tb_jabatan` DISABLE KEYS */;
INSERT INTO `tb_jabatan` VALUES (11,'Software Developer',11,5,'2024-09-29 20:26:23','2024-10-07 09:36:00'),(12,'Service',9,5,'2024-09-29 21:56:58','2024-09-29 21:57:37'),(13,'Telemarketing',9,5,'2024-09-29 21:57:09','2024-09-29 21:57:42'),(14,'Kasir',8,5,'2024-09-29 21:57:55','2024-10-09 04:00:00'),(15,'Piutang',8,5,'2024-09-29 21:58:05','2024-09-29 21:58:05'),(24,'Hardware Support',11,5,'2024-10-14 03:18:45','2024-10-14 03:18:45'),(25,'Teknisi Office',10,5,'2024-10-24 02:47:04','2024-10-24 02:47:04'),(26,'Teknisi Rute',10,5,'2024-11-13 06:09:44','2024-11-13 06:09:44'),(27,'Karyawan PKU',8,10,'2024-11-22 09:26:03','2024-11-22 09:26:03');
/*!40000 ALTER TABLE `tb_jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_jadwal`
--

DROP TABLE IF EXISTS `tb_jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_jadwal` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_golongan` bigint unsigned DEFAULT NULL,
  `hari` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_masuk` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_keluar` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `break_start` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `break_end` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_golongan` (`id_golongan`),
  CONSTRAINT `jadwal_to_golongan` FOREIGN KEY (`id_golongan`) REFERENCES `tb_golongan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jadwal`
--

LOCK TABLES `tb_jadwal` WRITE;
/*!40000 ALTER TABLE `tb_jadwal` DISABLE KEYS */;
INSERT INTO `tb_jadwal` VALUES (1,4,'Senin','08:00','17:00',NULL,NULL,'2024-10-04 03:22:16','2024-10-04 04:33:36'),(2,4,'Selasa','08:00','17:00',NULL,NULL,'2024-10-04 03:22:16','2024-10-04 04:33:37'),(3,4,'Rabu','08:00','17:00',NULL,NULL,'2024-10-04 03:22:16','2024-10-04 04:33:37'),(4,4,'Kamis','08:00','17:00',NULL,NULL,'2024-10-04 03:22:16','2024-10-04 04:33:37'),(5,4,'Jumat','08:00','16:30',NULL,NULL,'2024-10-04 03:22:16','2024-10-04 04:33:52'),(6,4,'Sabtu','08:00','14:00',NULL,NULL,'2024-10-04 03:22:16','2024-10-04 04:33:52'),(7,5,'Senin','08:00','17:00',NULL,NULL,'2024-10-04 03:39:33','2024-10-04 04:34:19'),(8,5,'Selasa','08:00','17:00',NULL,NULL,'2024-10-04 03:39:33','2024-10-04 04:34:19'),(9,5,'Rabu','08:00','17:00',NULL,NULL,'2024-10-04 03:39:33','2024-10-04 04:34:19'),(10,5,'Kamis','08:00','17:00',NULL,NULL,'2024-10-04 03:39:33','2024-10-04 04:34:19'),(11,5,'Jumat','08:00','17:00',NULL,NULL,'2024-10-04 03:39:33','2024-10-04 04:34:19'),(12,5,'Sabtu','08:00','17:00',NULL,NULL,'2024-10-04 03:39:33','2024-10-04 04:34:19'),(13,6,'Senin','00:00','00:00',NULL,NULL,'2024-10-04 03:44:35','2024-11-13 06:55:31'),(14,6,'Selasa','00:00','00:00',NULL,NULL,'2024-10-04 03:44:35','2024-11-13 06:55:31'),(15,6,'Rabu','00:00','00:00',NULL,NULL,'2024-10-04 03:44:35','2024-11-13 06:55:31'),(16,6,'Kamis','00:00','00:00',NULL,NULL,'2024-10-04 03:44:35','2024-11-13 06:55:31'),(17,6,'Jumat','00:00','00:00',NULL,NULL,'2024-10-04 03:44:35','2024-11-13 06:55:31'),(18,6,'Sabtu','00:00','00:00',NULL,NULL,'2024-10-04 03:44:35','2024-11-13 06:55:31');
/*!40000 ALTER TABLE `tb_jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_log`
--

DROP TABLE IF EXISTS `tb_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `user_action` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_location` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `log_to_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2097 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_log`
--

LOCK TABLES `tb_log` WRITE;
/*!40000 ALTER TABLE `tb_log` DISABLE KEYS */;
INSERT INTO `tb_log` VALUES (1691,1,'login','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:09:21','2024-11-13 06:09:21'),(1692,1,'login > create','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:09:21','2024-11-13 06:09:21'),(1693,1,'jabatan > create','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:09:44','2024-11-13 06:09:44'),(1694,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:11:56','2024-11-13 06:11:56'),(1695,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:11:56','2024-11-13 06:11:56'),(1696,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:25:31','2024-11-13 06:25:31'),(1697,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:25:31','2024-11-13 06:25:31'),(1698,1,'pegawai > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:26:34','2024-11-13 06:26:34'),(1699,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:29:48','2024-11-13 06:29:48'),(1700,1020,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:29:57','2024-11-13 06:29:57'),(1701,1020,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:29:57','2024-11-13 06:29:57'),(1702,1020,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:29:57','2024-11-13 06:29:57'),(1703,1020,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:29:57','2024-11-13 06:29:57'),(1704,1020,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:30:34','2024-11-13 06:30:34'),(1705,1020,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:30:42','2024-11-13 06:30:42'),(1706,1020,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:30:42','2024-11-13 06:30:42'),(1707,1020,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:31:41','2024-11-13 06:31:41'),(1708,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:31:56','2024-11-13 06:31:56'),(1709,1005,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:31:56','2024-11-13 06:31:56'),(1710,1005,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:33:14','2024-11-13 06:33:14'),(1711,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:33:19','2024-11-13 06:33:19'),(1712,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:33:19','2024-11-13 06:33:19'),(1713,1,'roles > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:34:13','2024-11-13 06:34:13'),(1714,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:34:17','2024-11-13 06:34:17'),(1715,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:34:27','2024-11-13 06:34:27'),(1716,1005,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:34:27','2024-11-13 06:34:27'),(1717,1005,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:38:06','2024-11-13 06:38:06'),(1718,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:38:25','2024-11-13 06:38:25'),(1719,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:38:25','2024-11-13 06:38:25'),(1720,1006,'login','114.10.81.84','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0','Unknown','2024-11-13 06:41:11','2024-11-13 06:41:11'),(1721,1006,'login > create','114.10.81.84','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0','Unknown','2024-11-13 06:41:11','2024-11-13 06:41:11'),(1722,1020,'login','114.122.10.26','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 06:47:55','2024-11-13 06:47:55'),(1723,1020,'login > create','114.122.10.26','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 06:47:55','2024-11-13 06:47:55'),(1724,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:48:49','2024-11-13 06:48:49'),(1725,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:48:54','2024-11-13 06:48:54'),(1726,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:48:54','2024-11-13 06:48:54'),(1727,1,'pegawai > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:49:35','2024-11-13 06:49:35'),(1728,1020,'login > create','114.122.10.26','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 06:49:53','2024-11-13 06:49:53'),(1729,1020,'login > create','114.122.10.26','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 06:49:57','2024-11-13 06:49:57'),(1730,1020,'login > create','114.122.10.26','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 06:50:11','2024-11-13 06:50:11'),(1731,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:52:45','2024-11-13 06:52:45'),(1732,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:53:26','2024-11-13 06:53:26'),(1733,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:53:26','2024-11-13 06:53:26'),(1734,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:53:56','2024-11-13 06:53:56'),(1735,1020,'profile > update','114.122.10.26','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 06:53:58','2024-11-13 06:53:58'),(1736,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:54:01','2024-11-13 06:54:01'),(1737,1021,'login','182.3.104.226','Mozilla/5.0 (Android 12; Mobile; rv:132.0) Gecko/132.0 Firefox/132.0','Unknown','2024-11-13 06:54:13','2024-11-13 06:54:13'),(1738,1021,'login > create','182.3.104.226','Mozilla/5.0 (Android 12; Mobile; rv:132.0) Gecko/132.0 Firefox/132.0','Unknown','2024-11-13 06:54:13','2024-11-13 06:54:13'),(1739,1020,'api > create','114.122.10.26','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 06:54:56','2024-11-13 06:54:56'),(1740,1020,'check-attendance > create','114.122.10.26','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 06:54:56','2024-11-13 06:54:56'),(1741,1020,'store-attendance > create','114.122.10.26','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 06:54:56','2024-11-13 06:54:56'),(1742,1021,'login > create','182.3.104.226','Mozilla/5.0 (Android 12; Mobile; rv:132.0) Gecko/132.0 Firefox/132.0','Unknown','2024-11-13 06:54:59','2024-11-13 06:54:59'),(1743,1,'golongan > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 06:55:31','2024-11-13 06:55:31'),(1744,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:01:02','2024-11-13 07:01:02'),(1745,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:01:07','2024-11-13 07:01:07'),(1746,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:01:07','2024-11-13 07:01:07'),(1747,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:01:25','2024-11-13 07:01:25'),(1748,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:01:31','2024-11-13 07:01:31'),(1749,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:01:31','2024-11-13 07:01:31'),(1750,1006,'upload-image > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:04:00','2024-11-13 07:04:00'),(1751,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:08:05','2024-11-13 07:08:05'),(1752,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:11:35','2024-11-13 07:11:35'),(1753,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:11:35','2024-11-13 07:11:35'),(1754,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:11:41','2024-11-13 07:11:41'),(1755,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:12:47','2024-11-13 07:12:47'),(1756,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:12:47','2024-11-13 07:12:47'),(1757,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:14:05','2024-11-13 07:14:05'),(1758,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:16:04','2024-11-13 07:16:04'),(1759,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:16:04','2024-11-13 07:16:04'),(1760,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:16:18','2024-11-13 07:16:18'),(1761,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:16:25','2024-11-13 07:16:25'),(1762,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:16:25','2024-11-13 07:16:25'),(1763,1006,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:16:45','2024-11-13 07:16:45'),(1764,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:16:45','2024-11-13 07:16:45'),(1765,1006,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:16:46','2024-11-13 07:16:46'),(1766,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:17:52','2024-11-13 07:17:52'),(1767,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:17:58','2024-11-13 07:17:58'),(1768,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:17:58','2024-11-13 07:17:58'),(1769,1,'roles > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:18:24','2024-11-13 07:18:24'),(1770,1,'pegawai > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 07:54:12','2024-11-13 07:54:12'),(1771,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:01:22','2024-11-13 08:01:22'),(1772,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:01:27','2024-11-13 08:01:27'),(1773,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:01:27','2024-11-13 08:01:27'),(1774,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:01:38','2024-11-13 08:01:38'),(1775,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:01:43','2024-11-13 08:01:43'),(1776,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:01:43','2024-11-13 08:01:43'),(1777,1,'roles > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:02:06','2024-11-13 08:02:06'),(1778,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:13:03','2024-11-13 08:13:03'),(1779,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:13:10','2024-11-13 08:13:10'),(1780,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:13:10','2024-11-13 08:13:10'),(1781,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:15:13','2024-11-13 08:15:13'),(1782,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:15:18','2024-11-13 08:15:18'),(1783,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:15:18','2024-11-13 08:15:18'),(1784,1020,'login','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-13 08:18:00','2024-11-13 08:18:00'),(1785,1020,'login > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-13 08:18:00','2024-11-13 08:18:00'),(1786,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:19:58','2024-11-13 08:19:58'),(1787,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:20:07','2024-11-13 08:20:07'),(1788,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:20:07','2024-11-13 08:20:07'),(1789,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:25:59','2024-11-13 08:25:59'),(1790,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:26:05','2024-11-13 08:26:05'),(1791,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:26:05','2024-11-13 08:26:05'),(1792,1,'users > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:27:17','2024-11-13 08:27:17'),(1793,1006,'login','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:29:43','2024-11-13 08:29:43'),(1794,1006,'login > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:29:43','2024-11-13 08:29:43'),(1795,1006,'login','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:33:13','2024-11-13 08:33:13'),(1796,1006,'login > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:33:13','2024-11-13 08:33:13'),(1797,1006,'api > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:34:43','2024-11-13 08:34:43'),(1798,1006,'check-attendance > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:34:44','2024-11-13 08:34:44'),(1799,1006,'store-attendance-out > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:34:44','2024-11-13 08:34:44'),(1800,1006,'api > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:34:59','2024-11-13 08:34:59'),(1801,1006,'check-attendance > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:34:59','2024-11-13 08:34:59'),(1802,1006,'store-attendance-out > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:35:00','2024-11-13 08:35:00'),(1803,1006,'api > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:35:15','2024-11-13 08:35:15'),(1804,1006,'check-attendance > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:35:15','2024-11-13 08:35:15'),(1805,1006,'store-attendance-out > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:35:16','2024-11-13 08:35:16'),(1806,1006,'api > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:36:22','2024-11-13 08:36:22'),(1807,1006,'check-attendance > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:36:23','2024-11-13 08:36:23'),(1808,1006,'store-attendance-out > create','114.122.23.35','Mozilla/5.0 (iPhone; CPU iPhone OS 17_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/130.0.6723.90 Mobile/15E148 Safari/604.1','Unknown','2024-11-13 08:36:23','2024-11-13 08:36:23'),(1809,1022,'login','114.5.144.107','Mozilla/5.0 (Linux;  11; CPH2239 Build/RP1A.200720.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 08:41:22','2024-11-13 08:41:22'),(1810,1022,'login > create','114.5.144.107','Mozilla/5.0 (Linux;  11; CPH2239 Build/RP1A.200720.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 08:41:22','2024-11-13 08:41:22'),(1811,1006,'login','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 08:42:22','2024-11-13 08:42:22'),(1812,1006,'login > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 08:42:22','2024-11-13 08:42:22'),(1813,1006,'api > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 08:43:02','2024-11-13 08:43:02'),(1814,1006,'check-attendance > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 08:43:02','2024-11-13 08:43:02'),(1815,1006,'store-attendance-out > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 08:43:02','2024-11-13 08:43:02'),(1816,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:46:18','2024-11-13 08:46:18'),(1817,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:46:26','2024-11-13 08:46:26'),(1818,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:46:26','2024-11-13 08:46:26'),(1819,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:46:42','2024-11-13 08:46:42'),(1820,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:46:47','2024-11-13 08:46:47'),(1821,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 08:46:47','2024-11-13 08:46:47'),(1822,1,'pegawai > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 09:09:43','2024-11-13 09:09:43'),(1823,1024,'login','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:12:25','2024-11-13 09:12:25'),(1824,1024,'login > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:12:25','2024-11-13 09:12:25'),(1825,1024,'api > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:14:10','2024-11-13 09:14:10'),(1826,1024,'check-attendance > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:14:10','2024-11-13 09:14:10'),(1827,1024,'store-attendance > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:14:11','2024-11-13 09:14:11'),(1828,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 09:17:18','2024-11-13 09:17:18'),(1829,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 09:17:25','2024-11-13 09:17:25'),(1830,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 09:17:25','2024-11-13 09:17:25'),(1831,1024,'api > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:17:45','2024-11-13 09:17:45'),(1832,1024,'check-attendance > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:17:45','2024-11-13 09:17:45'),(1833,1024,'store-attendance-out > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:17:46','2024-11-13 09:17:46'),(1834,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 09:18:53','2024-11-13 09:18:53'),(1835,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 09:18:59','2024-11-13 09:18:59'),(1836,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-13 09:18:59','2024-11-13 09:18:59'),(1837,1024,'api > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:23:11','2024-11-13 09:23:11'),(1838,1024,'check-attendance > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:23:12','2024-11-13 09:23:12'),(1839,1024,'store-attendance-out > create','182.253.242.119','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36','Unknown','2024-11-13 09:23:12','2024-11-13 09:23:12'),(1840,1020,'api > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-13 09:31:59','2024-11-13 09:31:59'),(1841,1020,'check-attendance > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-13 09:31:59','2024-11-13 09:31:59'),(1842,1020,'store-attendance-out > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-13 09:32:00','2024-11-13 09:32:00'),(1843,1006,'api > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 09:36:37','2024-11-13 09:36:37'),(1844,1006,'check-attendance > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 09:36:37','2024-11-13 09:36:37'),(1845,1006,'store-attendance-out > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 09:36:38','2024-11-13 09:36:38'),(1846,1006,'api > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 09:58:09','2024-11-13 09:58:09'),(1847,1006,'check-attendance > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 09:58:10','2024-11-13 09:58:10'),(1848,1006,'store-attendance-out > create','114.10.81.200','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-13 09:58:10','2024-11-13 09:58:10'),(1849,1020,'login','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 00:43:59','2024-11-14 00:43:59'),(1850,1020,'login > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 00:43:59','2024-11-14 00:43:59'),(1851,1020,'api > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 00:45:26','2024-11-14 00:45:26'),(1852,1020,'check-attendance > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 00:45:27','2024-11-14 00:45:27'),(1853,1020,'store-attendance > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 00:45:27','2024-11-14 00:45:27'),(1854,1006,'login','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-14 01:10:03','2024-11-14 01:10:03'),(1855,1006,'login > create','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-14 01:10:03','2024-11-14 01:10:03'),(1856,1006,'api > create','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-14 01:13:49','2024-11-14 01:13:49'),(1857,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-14 01:13:50','2024-11-14 01:13:50'),(1858,1006,'store-attendance > create','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-14 01:13:50','2024-11-14 01:13:50'),(1859,1006,'api > create','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-14 01:15:53','2024-11-14 01:15:53'),(1860,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-14 01:15:54','2024-11-14 01:15:54'),(1861,1006,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.6 Mobile/15E148 Safari/604.1','Unknown','2024-11-14 01:15:55','2024-11-14 01:15:55'),(1862,1006,'login','114.5.144.206','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-14 01:17:24','2024-11-14 01:17:24'),(1863,1006,'login > create','114.5.144.206','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-14 01:17:24','2024-11-14 01:17:24'),(1864,1006,'login','114.5.144.206','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0','Unknown','2024-11-14 01:18:01','2024-11-14 01:18:01'),(1865,1006,'login > create','114.5.144.206','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0','Unknown','2024-11-14 01:18:01','2024-11-14 01:18:01'),(1866,1006,'login','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.8 Mobile/15E148 Safari/604.1 OPT/5.1.1','Unknown','2024-11-14 01:18:58','2024-11-14 01:18:58'),(1867,1006,'login > create','202.162.195.146','Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.8 Mobile/15E148 Safari/604.1 OPT/5.1.1','Unknown','2024-11-14 01:18:58','2024-11-14 01:18:58'),(1868,1006,'api > create','114.5.144.206','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-14 01:32:24','2024-11-14 01:32:24'),(1869,1006,'check-attendance > create','114.5.144.206','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-14 01:32:25','2024-11-14 01:32:25'),(1870,1006,'store-attendance-out > create','114.5.144.206','Mozilla/5.0 (Linux;  14; V2144 Build/UP1A.231005.007; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.107  Safari/537.36','Unknown','2024-11-14 01:32:25','2024-11-14 01:32:25'),(1871,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 01:33:06','2024-11-14 01:33:06'),(1872,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 01:33:06','2024-11-14 01:33:06'),(1873,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 03:22:02','2024-11-14 03:22:02'),(1874,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 03:22:21','2024-11-14 03:22:21'),(1875,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 03:22:21','2024-11-14 03:22:21'),(1876,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 03:22:27','2024-11-14 03:22:27'),(1877,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 03:23:35','2024-11-14 03:23:35'),(1878,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 03:23:35','2024-11-14 03:23:35'),(1879,1,'users > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 03:23:57','2024-11-14 03:23:57'),(1880,1021,'login','182.3.103.212','Mozilla/5.0 (Linux; U; Android 12; in-id; RMX3630 Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.88 Mobile Safari/537.36 HeyTapBrowser/45.11.4.1','Unknown','2024-11-14 08:28:57','2024-11-14 08:28:57'),(1881,1021,'login > create','182.3.103.212','Mozilla/5.0 (Linux; U; Android 12; in-id; RMX3630 Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.88 Mobile Safari/537.36 HeyTapBrowser/45.11.4.1','Unknown','2024-11-14 08:28:57','2024-11-14 08:28:57'),(1882,1021,'api > create','182.3.103.212','Mozilla/5.0 (Linux; U; Android 12; in-id; RMX3630 Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.88 Mobile Safari/537.36 HeyTapBrowser/45.11.4.1','Unknown','2024-11-14 08:31:16','2024-11-14 08:31:16'),(1883,1021,'check-attendance > create','182.3.103.212','Mozilla/5.0 (Linux; U; Android 12; in-id; RMX3630 Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.88 Mobile Safari/537.36 HeyTapBrowser/45.11.4.1','Unknown','2024-11-14 08:31:16','2024-11-14 08:31:16'),(1884,1021,'store-attendance > create','182.3.103.212','Mozilla/5.0 (Linux; U; Android 12; in-id; RMX3630 Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.88 Mobile Safari/537.36 HeyTapBrowser/45.11.4.1','Unknown','2024-11-14 08:31:17','2024-11-14 08:31:17'),(1885,1,'login','114.5.144.131','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 08:44:17','2024-11-14 08:44:17'),(1886,1,'login > create','114.5.144.131','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-14 08:44:17','2024-11-14 08:44:17'),(1887,1020,'login','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 12:01:33','2024-11-14 12:01:33'),(1888,1020,'login','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 12:01:34','2024-11-14 12:01:34'),(1889,1020,'api > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 12:02:10','2024-11-14 12:02:10'),(1890,1020,'check-attendance > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 12:02:10','2024-11-14 12:02:10'),(1891,1020,'store-attendance-out > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-14 12:02:11','2024-11-14 12:02:11'),(1892,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-15 01:01:15','2024-11-15 01:01:15'),(1893,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-15 01:01:15','2024-11-15 01:01:15'),(1894,1020,'login','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-15 01:06:56','2024-11-15 01:06:56'),(1895,1020,'login','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-15 01:06:57','2024-11-15 01:06:57'),(1896,1020,'api > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-15 01:07:34','2024-11-15 01:07:34'),(1897,1020,'check-attendance > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-15 01:07:34','2024-11-15 01:07:34'),(1898,1020,'store-attendance > create','114.122.10.26','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86  Safari/537.36','Unknown','2024-11-15 01:07:35','2024-11-15 01:07:35'),(1899,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-15 01:20:00','2024-11-15 01:20:00'),(1900,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-15 03:19:54','2024-11-15 03:19:54'),(1901,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-15 03:19:54','2024-11-15 03:19:54'),(1902,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-15 03:57:50','2024-11-15 03:57:50'),(1903,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0','Unknown','2024-11-15 04:00:43','2024-11-15 04:00:43'),(1904,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0','Unknown','2024-11-15 04:00:43','2024-11-15 04:00:43'),(1905,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0','Unknown','2024-11-15 04:00:47','2024-11-15 04:00:47'),(1906,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-15 07:41:33','2024-11-15 07:41:33'),(1907,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-15 07:41:33','2024-11-15 07:41:33'),(1908,1,'login','103.154.148.104','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0','Unknown','2024-11-15 17:36:58','2024-11-15 17:36:58'),(1909,1,'login > create','103.154.148.104','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0','Unknown','2024-11-15 17:36:58','2024-11-15 17:36:58'),(1910,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-16 01:12:19','2024-11-16 01:12:19'),(1911,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-16 01:12:19','2024-11-16 01:12:19'),(1912,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-16 05:43:52','2024-11-16 05:43:52'),(1913,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-16 05:43:52','2024-11-16 05:43:52'),(1914,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-16 09:37:05','2024-11-16 09:37:05'),(1915,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-16 09:37:05','2024-11-16 09:37:05'),(1916,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 01:05:43','2024-11-18 01:05:43'),(1917,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 01:05:43','2024-11-18 01:05:43'),(1918,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 03:43:49','2024-11-18 03:43:49'),(1919,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 03:43:57','2024-11-18 03:43:57'),(1920,1005,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 03:43:57','2024-11-18 03:43:57'),(1921,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-18 03:52:17','2024-11-18 03:52:17'),(1922,1005,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-18 03:52:17','2024-11-18 03:52:17'),(1923,1005,'pegawai > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 03:53:42','2024-11-18 03:53:42'),(1924,1005,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 03:56:33','2024-11-18 03:56:33'),(1925,1026,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 03:56:43','2024-11-18 03:56:43'),(1926,1026,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 03:56:43','2024-11-18 03:56:43'),(1927,1026,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:00:11','2024-11-18 04:00:11'),(1928,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:00:17','2024-11-18 04:00:17'),(1929,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:00:17','2024-11-18 04:00:17'),(1930,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:00:35','2024-11-18 04:00:35'),(1931,1006,'store-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:00:36','2024-11-18 04:00:36'),(1932,1006,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:04:23','2024-11-18 04:04:23'),(1933,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:04:24','2024-11-18 04:04:24'),(1934,1006,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:04:25','2024-11-18 04:04:25'),(1935,1005,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-18 04:05:30','2024-11-18 04:05:30'),(1936,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-18 04:06:41','2024-11-18 04:06:41'),(1937,1005,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-18 04:06:41','2024-11-18 04:06:41'),(1938,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:11:14','2024-11-18 04:11:14'),(1939,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:11:33','2024-11-18 04:11:33'),(1940,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:11:33','2024-11-18 04:11:33'),(1941,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:13:32','2024-11-18 04:13:32'),(1945,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:14:08','2024-11-18 04:14:08'),(1946,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:14:08','2024-11-18 04:14:08'),(1947,1,'users > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:14:28','2024-11-18 04:14:28'),(1948,1,'roles > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:14:58','2024-11-18 04:14:58'),(1949,1,'roles > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:15:11','2024-11-18 04:15:11'),(1950,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:15:33','2024-11-18 04:15:33'),(1956,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:19:15','2024-11-18 04:19:15'),(1957,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:19:15','2024-11-18 04:19:15'),(1958,1,'users > delete','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:19:33','2024-11-18 04:19:33'),(1959,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:35:14','2024-11-18 04:35:14'),(1960,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:35:23','2024-11-18 04:35:23'),(1961,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:35:23','2024-11-18 04:35:23'),(1962,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:37:23','2024-11-18 04:37:23'),(1963,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:37:50','2024-11-18 04:37:50'),(1964,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:37:50','2024-11-18 04:37:50'),(1965,1,'pegawai > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:39:26','2024-11-18 04:39:26'),(1966,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:39:36','2024-11-18 04:39:36'),(1967,1027,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:39:53','2024-11-18 04:39:53'),(1968,1027,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:39:53','2024-11-18 04:39:53'),(1969,1027,'login','139.195.144.238','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-18 04:41:22','2024-11-18 04:41:22'),(1970,1027,'login > create','139.195.144.238','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','Unknown','2024-11-18 04:41:22','2024-11-18 04:41:22'),(1971,1027,'login','114.10.85.181','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0','Unknown','2024-11-18 04:44:20','2024-11-18 04:44:20'),(1972,1027,'login > create','114.10.85.181','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36 OPR/85.0.0.0','Unknown','2024-11-18 04:44:20','2024-11-18 04:44:20'),(1973,1027,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:51:15','2024-11-18 04:51:15'),(1974,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:51:21','2024-11-18 04:51:21'),(1975,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 04:51:21','2024-11-18 04:51:21'),(1976,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-18 08:09:13','2024-11-18 08:09:13'),(1977,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 08:26:47','2024-11-18 08:26:47'),(1978,1005,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-18 08:26:47','2024-11-18 08:26:47'),(1979,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-19 02:52:04','2024-11-19 02:52:04'),(1980,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-19 02:52:04','2024-11-19 02:52:04'),(1981,1020,'login','2404:c0:1c30::5b3:71a','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-20 02:34:24','2024-11-20 02:34:24'),(1982,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-20 07:35:20','2024-11-20 07:35:20'),(1983,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-20 07:35:20','2024-11-20 07:35:20'),(1984,1026,'login','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:06:01','2024-11-21 01:06:01'),(1985,1026,'login > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:06:01','2024-11-21 01:06:01'),(1986,1026,'api > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:12:54','2024-11-21 01:12:54'),(1987,1026,'check-attendance > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:12:57','2024-11-21 01:12:57'),(1988,1026,'store-attendance > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:12:57','2024-11-21 01:12:57'),(1989,1026,'api > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:13:54','2024-11-21 01:13:54'),(1990,1026,'check-attendance > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:13:56','2024-11-21 01:13:56'),(1991,1026,'store-attendance-out > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:13:56','2024-11-21 01:13:56'),(1992,1026,'api > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:15:36','2024-11-21 01:15:36'),(1993,1026,'check-attendance > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:15:39','2024-11-21 01:15:39'),(1994,1026,'store-attendance-out > create','103.179.248.228','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-21 01:15:39','2024-11-21 01:15:39'),(1995,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-21 01:54:01','2024-11-21 01:54:01'),(1996,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-21 03:12:46','2024-11-21 03:12:46'),(1997,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-21 03:12:46','2024-11-21 03:12:46'),(1998,1026,'login','114.125.58.236','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-22 00:37:48','2024-11-22 00:37:48'),(1999,1026,'api > create','114.125.58.236','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-22 00:40:12','2024-11-22 00:40:12'),(2000,1026,'check-attendance > create','114.125.58.236','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-22 00:40:14','2024-11-22 00:40:14'),(2001,1026,'store-attendance > create','114.125.58.236','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-22 00:40:14','2024-11-22 00:40:14'),(2002,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 07:42:02','2024-11-22 07:42:02'),(2003,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 07:42:02','2024-11-22 07:42:02'),(2004,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-22 07:48:13','2024-11-22 07:48:13'),(2005,1005,'pegawai > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-22 08:11:52','2024-11-22 08:11:52'),(2006,1,'placement > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:22:55','2024-11-22 09:22:55'),(2007,1,'placement > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:23:53','2024-11-22 09:23:53'),(2008,1,'placement > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:24:27','2024-11-22 09:24:27'),(2009,1,'jabatan > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:26:03','2024-11-22 09:26:03'),(2010,1,'pegawai > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:26:33','2024-11-22 09:26:33'),(2011,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:27:59','2024-11-22 09:27:59'),(2012,1026,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:28:04','2024-11-22 09:28:04'),(2013,1026,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:28:04','2024-11-22 09:28:04'),(2014,1026,'login','114.125.22.50','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-22 09:29:45','2024-11-22 09:29:45'),(2015,1026,'check-attendance > create','114.125.22.50','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-22 09:32:13','2024-11-22 09:32:13'),(2016,1026,'store-attendance-out > create','114.125.22.50','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-22 09:32:17','2024-11-22 09:32:17'),(2017,1026,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:33:16','2024-11-22 09:33:16'),(2018,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:33:22','2024-11-22 09:33:22'),(2019,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:33:22','2024-11-22 09:33:22'),(2020,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:46:19','2024-11-22 09:46:19'),(2021,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:46:24','2024-11-22 09:46:24'),(2022,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:46:24','2024-11-22 09:46:24'),(2023,1006,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:46:57','2024-11-22 09:46:57'),(2024,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:46:57','2024-11-22 09:46:57'),(2025,1006,'store-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:46:57','2024-11-22 09:46:57'),(2026,1006,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:52:37','2024-11-22 09:52:37'),(2027,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:52:38','2024-11-22 09:52:38'),(2028,1006,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:52:39','2024-11-22 09:52:39'),(2029,1006,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:56:02','2024-11-22 09:56:02'),(2030,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:56:02','2024-11-22 09:56:02'),(2031,1006,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-22 09:56:04','2024-11-22 09:56:04'),(2032,1026,'login','110.137.85.52','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-23 00:43:09','2024-11-23 00:43:09'),(2033,1026,'login > create','110.137.85.52','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36','Unknown','2024-11-23 00:43:09','2024-11-23 00:43:09'),(2034,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:04:48','2024-11-23 01:04:48'),(2035,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:04:48','2024-11-23 01:04:48'),(2036,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-23 01:39:18','2024-11-23 01:39:18'),(2037,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:55:33','2024-11-23 01:55:33'),(2038,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:55:39','2024-11-23 01:55:39'),(2039,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:55:39','2024-11-23 01:55:39'),(2040,1006,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:55:55','2024-11-23 01:55:55'),(2041,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:55:56','2024-11-23 01:55:56'),(2042,1006,'store-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:55:56','2024-11-23 01:55:56'),(2043,1006,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:56:17','2024-11-23 01:56:17'),(2044,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:56:18','2024-11-23 01:56:18'),(2045,1006,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 01:56:18','2024-11-23 01:56:18'),(2046,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 02:02:00','2024-11-23 02:02:00'),(2047,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 03:45:00','2024-11-23 03:45:00'),(2048,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 03:45:00','2024-11-23 03:45:00'),(2049,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 06:29:41','2024-11-23 06:29:41'),(2050,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-23 06:29:41','2024-11-23 06:29:41'),(2051,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-23 06:30:59','2024-11-23 06:30:59'),(2052,1020,'login','2404:c0:1c30::5d3:82cb','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/131.0.6778.39  Safari/537.36','Unknown','2024-11-23 08:16:19','2024-11-23 08:16:19'),(2053,1020,'login','2404:c0:1c30::5d3:82cb','Mozilla/5.0 (Linux;  14; 2311DRK48G Build/UP1A.230905.011; ) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/131.0.6778.39  Safari/537.36','Unknown','2024-11-23 08:16:20','2024-11-23 08:16:20'),(2054,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-25 01:54:41','2024-11-25 01:54:41'),(2055,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-25 01:54:41','2024-11-25 01:54:41'),(2056,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 15:56:19','2024-11-26 15:56:19'),(2057,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 15:56:19','2024-11-26 15:56:19'),(2058,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:08:34','2024-11-26 16:08:34'),(2059,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:12:23','2024-11-26 16:12:23'),(2060,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:12:23','2024-11-26 16:12:23'),(2061,1,'permissions > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:13:43','2024-11-26 16:13:43'),(2062,1,'roles > update','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:14:00','2024-11-26 16:14:00'),(2063,1,'roles > delete','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:15:27','2024-11-26 16:15:27'),(2064,1,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:31:59','2024-11-26 16:31:59'),(2065,1,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:31:59','2024-11-26 16:31:59'),(2066,1,'store-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:31:59','2024-11-26 16:31:59'),(2067,1,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:35:18','2024-11-26 16:35:18'),(2068,1,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:35:18','2024-11-26 16:35:18'),(2069,1,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-26 16:35:18','2024-11-26 16:35:18'),(2070,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:22:15','2024-11-28 09:22:15'),(2071,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:22:15','2024-11-28 09:22:15'),(2072,1,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:25:43','2024-11-28 09:25:43'),(2073,1,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:25:43','2024-11-28 09:25:43'),(2074,1,'store-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:25:44','2024-11-28 09:25:44'),(2075,1,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:28:08','2024-11-28 09:28:08'),(2076,1,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:28:08','2024-11-28 09:28:08'),(2077,1,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:28:08','2024-11-28 09:28:08'),(2078,1,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:31:13','2024-11-28 09:31:13'),(2079,1,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:31:13','2024-11-28 09:31:13'),(2080,1,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:31:14','2024-11-28 09:31:14'),(2081,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:32:16','2024-11-28 09:32:16'),(2082,1006,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:32:20','2024-11-28 09:32:20'),(2083,1006,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:32:20','2024-11-28 09:32:20'),(2084,1006,'api > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:32:39','2024-11-28 09:32:39'),(2085,1006,'check-attendance > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:32:40','2024-11-28 09:32:40'),(2086,1006,'store-attendance-out > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:32:40','2024-11-28 09:32:40'),(2087,1006,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:32:44','2024-11-28 09:32:44'),(2088,1,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:32:48','2024-11-28 09:32:48'),(2089,1,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:32:48','2024-11-28 09:32:48'),(2090,1,'upload-image > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:33:53','2024-11-28 09:33:53'),(2091,1,'upload-image > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:34:00','2024-11-28 09:34:00'),(2092,1,'upload-image > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:34:05','2024-11-28 09:34:05'),(2093,1,'dayoff > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:34:07','2024-11-28 09:34:07'),(2094,1,'logout','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Unknown','2024-11-28 09:46:08','2024-11-28 09:46:08'),(2095,1005,'login','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-28 10:06:10','2024-11-28 10:06:10'),(2096,1005,'login > create','202.162.195.146','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','Unknown','2024-11-28 10:06:10','2024-11-28 10:06:10');
/*!40000 ALTER TABLE `tb_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_overtime`
--

DROP TABLE IF EXISTS `tb_overtime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_overtime` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_pegawai` (`kode_pegawai`),
  CONSTRAINT `overtime_to_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_overtime`
--

LOCK TABLES `tb_overtime` WRITE;
/*!40000 ALTER TABLE `tb_overtime` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_overtime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pegawai`
--

DROP TABLE IF EXISTS `tb_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pegawai` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pegawai` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick_name` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` bigint unsigned DEFAULT NULL,
  `golongan` bigint unsigned DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `salary_id` bigint unsigned DEFAULT NULL,
  `storage` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_pegawai` (`kode_pegawai`),
  UNIQUE KEY `salary_id_2` (`salary_id`),
  KEY `salary_id` (`salary_id`),
  KEY `golongan` (`golongan`),
  KEY `jabatan` (`jabatan`),
  CONSTRAINT `pegawai_to_golongan` FOREIGN KEY (`golongan`) REFERENCES `tb_golongan` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `pegawai_to_jabatan` FOREIGN KEY (`jabatan`) REFERENCES `tb_jabatan` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `pegawai_to_salary` FOREIGN KEY (`salary_id`) REFERENCES `tb_salary` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=10000000015 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pegawai`
--

LOCK TABLES `tb_pegawai` WRITE;
/*!40000 ALTER TABLE `tb_pegawai` DISABLE KEYS */;
INSERT INTO `tb_pegawai` VALUES (231,'28101999','12012810990001','Muhammad Abdi Mayu','Abdi','082265380192','Tanjung Morawa',11,4,'1999-10-28',1,'labels/28101999/','2024-09-29 13:57:55','2024-11-13 06:24:45'),(232,'112233','1209312211090001','Muhammad Taufik','Taufik','082265380918','Medan',26,5,'2002-05-16',NULL,'labels/112233/','2024-11-13 06:26:33','2024-11-13 06:26:33'),(233,'315','1209312810990001','Oky Sandy Sirait','Oky','081233445678','Medan',26,5,'2024-11-13',NULL,'labels/315/','2024-11-13 06:49:35','2024-11-13 06:49:35'),(234,'344','1209312810990001','Bernard Samuel Sianturi','Bernard','082265380192','Medan',26,5,'2024-11-07',NULL,'labels/344/','2024-11-13 07:54:12','2024-11-13 07:54:12'),(235,'123123','1209312810990001','Abdul Khalid Hasibuan','Abdul','085275349929','Medan',25,5,'2024-11-21',NULL,'labels/123123/','2024-11-13 09:09:43','2024-11-13 09:09:43'),(236,'31450','000000000000000','PUPUT JULIANTI','PUPUT','083186786654','Pekan Baru',27,5,'1996-07-29',NULL,'labels/31450/','2024-11-18 03:53:41','2024-11-22 09:26:33'),(237,'11182024','000000000000','Arenhost','Aren','085183377714','Aren',24,5,'2024-11-18',NULL,NULL,'2024-11-18 04:39:25','2024-11-18 04:39:25');
/*!40000 ALTER TABLE `tb_pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_photo_collect`
--

DROP TABLE IF EXISTS `tb_photo_collect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_photo_collect` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_collect` bigint unsigned DEFAULT NULL,
  `photourl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_photo_collect_id_collect_foreign` (`id_collect`),
  CONSTRAINT `tb_photo_collect_id_collect_foreign` FOREIGN KEY (`id_collect`) REFERENCES `tb_collect` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_photo_collect`
--

LOCK TABLES `tb_photo_collect` WRITE;
/*!40000 ALTER TABLE `tb_photo_collect` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_photo_collect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_placement`
--

DROP TABLE IF EXISTS `tb_placement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_placement` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_penempatan` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penempatan` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` int DEFAULT NULL,
  `restrict_app` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tb_placement_kode_penempatan_unique` (`kode_penempatan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_placement`
--

LOCK TABLES `tb_placement` WRITE;
/*!40000 ALTER TABLE `tb_placement` DISABLE KEYS */;
INSERT INTO `tb_placement` VALUES (5,'MDN01','Kantor Pusat','Jl. Glugur No 18D','98.66902828216554','3.591516090416829',99999999,'t','2024-09-29 20:26:07','2024-10-03 08:16:13'),(6,'MDN02','Kantor Pusat 2','Jl. Semambu','0.0013196468353271487','0.0008904933929162457',0,'y','2024-09-29 21:32:11','2024-10-04 04:48:56'),(7,'MDN03','Cabang Tembung','Jl. Gambir Ps. VIII No.88, Tembung','3.40576171875','1.142502403706165',0,'t','2024-09-29 21:32:41','2024-10-04 04:49:08'),(8,'MDN04','Cabang Titi Kuning','Jl. Brig Jend. Zein Hamid No.KM 7.6, Titi Kuning','98.6690390110016','3.5914732593566807',150,'y','2024-09-29 21:33:19','2024-10-04 04:49:15'),(10,'PKU001','Cabang PKU','Jl. Hangtuah SP IV','101.831765','0.424643',50,'t','2024-11-22 09:22:55','2024-11-22 09:23:53');
/*!40000 ALTER TABLE `tb_placement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_salary`
--

DROP TABLE IF EXISTS `tb_salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_salary` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payroll_type` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_fee` double DEFAULT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_pegawai` (`kode_pegawai`),
  CONSTRAINT `salary_to_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_salary`
--

LOCK TABLES `tb_salary` WRITE;
/*!40000 ALTER TABLE `tb_salary` DISABLE KEYS */;
INSERT INTO `tb_salary` VALUES (1,'28101999','monthly',4000000,'2024-11-01','2024-11-01 09:51:32',NULL);
/*!40000 ALTER TABLE `tb_salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `user_to_pegawai` (`kode_pegawai`),
  CONSTRAINT `user_to_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=1028 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'Muhammad Abdi Mayu','abdi@darkotech.id',NULL,'$2y$12$8PjfWYlAsiKTobWYA/mJcOzLDiXHh2sKfcabhkJelMx8oSftf8MOq','fpIx4j8jyszJztR2AX8DgpJGZ49rdSi29FChIiP6YniyNrfofeIpjZBktjYE','2024-10-01 09:55:37','2024-10-11 03:59:31'),(1005,NULL,'HRD','hrd@indodacin.com',NULL,'$2y$12$r559G0XgTTGuffzDo25m3Oa58tE/6UYs3ipk.ddfmR0jA/GyJe08y','EJL3qG8PHuTNOAO0XP2oBR4lhs3WixTIR6qB6esYEgoZ4jltqT7DyQ5hQlpK','2024-10-12 02:33:03','2024-10-12 02:33:03'),(1006,'28101999','Muhammad Abdi Mayu','user@indodacin.com',NULL,'$2y$12$mGyAhmMwQcW2OCA2aq/.4OImmLuBATJevl8hHkCJofp7bzc/LuSJ2','g9Rvz0xUrIBMJecZjY5REPZX05Skw4Q3zxCLwELs8UNMomF6gQJto8ghQkx5','2024-10-14 06:27:29','2024-10-14 06:27:29'),(1020,'112233','Muhammad Taufik','Taufik112233@indodacin.com',NULL,'$2y$12$G9cSVa/4XV7jzxD5PAuv/O4Re3X1c6n.gZmbkDp16dmqq1ccuBF8W','JhM5fTpUZO0NL9yI186Gg5ANDwc5tvcj9UgYsmBEfo3KpmMni4hsXxMX7OZy','2024-11-13 06:26:34','2024-11-13 06:26:34'),(1021,'315','Oky Sandy Sirait','Oky315@indodacin.com',NULL,'$2y$12$bT4ozWQKBux59/PnMjsoqeeuK0xgCz6rIbGy4PI5Ln.ZlckuYu9ky','fvOVCfeo2cY2oZyQ5H0WxO1sez63saG72FPvqUT3pdZeCqke8eyIdTiykh54','2024-11-13 06:49:35','2024-11-13 06:49:35'),(1022,'344','Bernard Samuel Sianturi','Bernard344@indodacin.com',NULL,'$2y$12$9N4Bb1rtlL6.fCuw.JqHEeJTouO4YzmUHaoFX.u1nnKn76NkR8RdS','mnncqIp46ccwJMV58C8Eqb3s74fYtQ2HGzi0v2NDQSD2XwQffAsmJJnF6LOL','2024-11-13 07:54:12','2024-11-13 07:54:12'),(1023,NULL,'Alfred','alfred@indodacin.com',NULL,'$2y$12$n6m6t7//WBdsDLbtfA6R0On4O/NauwYM1mUIgdnIf/Wdl5umrkWtK',NULL,'2024-11-13 08:27:17','2024-11-13 08:27:17'),(1024,'123123','Abdul Khalid Hasibuan','Abdul123123@indodacin.com',NULL,'$2y$12$5yIUHQsV62okHXnPPddjQeLIhZIMrqOIDk/PbqmFcq81uuCqYXTeW',NULL,'2024-11-13 09:09:43','2024-11-13 09:09:43'),(1026,'31450','PUPUT JULIANTI','PUPUT31450@indodacin.com',NULL,'$2y$12$Zz8Q4Dg9CBBggJz6o6xj0O/pbpeB2G5oxAkZp2sUvV7BvGGiyEZEG','F4GHhyMcraNkCpPrl1GpKuWh0qMf767KSEjyy6xISS7w99ZKCS28G1PSaOLT','2024-11-18 03:53:42','2024-11-18 03:53:42'),(1027,'11182024','Arenhost','Aren11182024@indodacin.com',NULL,'$2y$12$ggTfOXhAnn9h/G7h5JvEJ.RufZMXvohZbE6YtJvrdVQJhZUi402hW',NULL,'2024-11-18 04:39:26','2024-11-18 04:39:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-28  3:16:43
