# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.32-MariaDB)
# Database: Richman
# Generation Time: 2019-06-30 00:48:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table hasil_diskon
# ------------------------------------------------------------

DROP VIEW IF EXISTS `hasil_diskon`;

CREATE TABLE `hasil_diskon` (
   `id` INT(10) UNSIGNED NOT NULL DEFAULT '0',
   `IDurl_slug` TEXT NULL DEFAULT NULL,
   `total` DOUBLE NULL DEFAULT NULL
) ENGINE=MyISAM;



# Dump of table Kelas_pengajar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Kelas_pengajar`;

CREATE TABLE `Kelas_pengajar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_kelas` double DEFAULT NULL,
  `diskon_harga` double DEFAULT NULL,
  `kategori_kelas` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_foto` text COLLATE utf8mb4_unicode_ci,
  `file_video` text COLLATE utf8mb4_unicode_ci,
  `diskripsi` text COLLATE utf8mb4_unicode_ci,
  `id_user` int(10) unsigned DEFAULT NULL,
  `IDurl_slug` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `UserTo_KelasPengajar` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `Kelas_pengajar` WRITE;
/*!40000 ALTER TABLE `Kelas_pengajar` DISABLE KEYS */;

INSERT INTO `Kelas_pengajar` (`id`, `nama_kelas`, `harga_kelas`, `diskon_harga`, `kategori_kelas`, `file_foto`, `file_video`, `diskripsi`, `id_user`, `IDurl_slug`)
VALUES
	(1,'Belajar HTML',100000,10,'pemrograman','1561126740html1.jpg','1561126740Pengenalan HTML.mp4','Some text inside',1,'Belajar-HTML'),
	(2,'Belajar Framework',200000,40,'pemrograman','1561382579belajar framework.jpg','1561382579Pengenalan HTML.mp4','Some text inside',1,'Belajar-Framework'),
	(3,'Belajar Database',150000,60,'pemrograman','1561382750db.png','1561382750Pengenalan HTML.mp4','Some text inside',1,'Belajar-Database'),
	(5,'Belajar PHP',100000,60,'pemrograman','1561452173php.png','1561452173Pengenalan HTML.mp4','Some text inside',1,'belajar-php');

/*!40000 ALTER TABLE `Kelas_pengajar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2019_06_21_141454_create_Kelas_pengajar_table',1),
	(2,'2019_06_21_141454_create_password_resets_table',1),
	(3,'2019_06_21_141454_create_topik_pengajar_table',1),
	(4,'2019_06_21_141454_create_user_activation_table',1),
	(5,'2019_06_21_141454_create_users_table',1),
	(6,'2019_06_21_141455_add_foreign_keys_to_Kelas_pengajar_table',1),
	(7,'2019_06_21_141455_add_foreign_keys_to_topik_pengajar_table',1),
	(8,'2019_06_21_141455_add_foreign_keys_to_user_activation_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table topik_pengajar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `topik_pengajar`;

CREATE TABLE `topik_pengajar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul_topik` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_video` text COLLATE utf8mb4_unicode_ci,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `file_lampiran` text COLLATE utf8mb4_unicode_ci,
  `id_user` int(10) unsigned DEFAULT NULL,
  `id_kelas` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `topik_pengajar` WRITE;
/*!40000 ALTER TABLE `topik_pengajar` DISABLE KEYS */;

INSERT INTO `topik_pengajar` (`id`, `judul_topik`, `file_video`, `deskripsi`, `file_lampiran`, `id_user`, `id_kelas`)
VALUES
	(2,'Pengenalan HTML 1','1561126913Pengenalan HTML.mp4','Some text inside','1561126913html1.jpg',1,1);

/*!40000 ALTER TABLE `topik_pengajar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_activation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_activation`;

CREATE TABLE `user_activation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_activation_id_user_foreign` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `is_activated`)
VALUES
	(1,'faesol','fhaesolaa01@gmail.com','$2y$10$ije7TRpBJobsI9SKCKzbmutR3o0EFyyZq/guBSvmXJQXm4d78xeyS','agent',NULL,'2019-06-21 14:17:38','2019-06-21 14:18:18',1),
	(2,'bambanx','bambanxyesyu@gmail.com','$2y$10$9nWz11PsDm6zJEevpIA6R.vSICyof0Sv1mTTthwh6keILwvGbMwXi','customer',NULL,'2019-06-24 16:14:19','2019-06-24 16:16:14',1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
