-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: lastlevelevent
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (7,'Spectacle, Théâtre, Comédie musicale',NULL,'2023-06-26 12:41:06','2023-06-26 12:44:15'),(8,'Musées, Expositions, Visites, Parcs',NULL,'2023-06-26 12:41:52','2023-06-26 12:41:52'),(9,'Soirée en club',NULL,'2023-06-26 12:42:18','2023-06-26 12:42:18'),(10,'Événement étudiant (soirée, gala, ...)',NULL,'2023-06-26 12:42:30','2023-06-26 12:42:30'),(11,'Salon, Foire, Forum',NULL,'2023-06-26 12:42:40','2023-06-26 12:42:40'),(12,'Conférence, Séminaire, Stage',NULL,'2023-06-26 12:42:57','2023-06-26 12:44:34'),(13,'Cours, Stage',NULL,'2023-06-26 12:43:07','2023-06-26 12:44:45'),(14,'Diner',NULL,'2023-06-26 12:43:14','2023-06-26 12:43:14'),(15,'Adhésion, Abonnement, Cotisation',NULL,'2023-06-26 12:43:25','2023-06-26 12:43:25'),(16,'Dons en ligne, Cagnotte, Crowdfunding',NULL,'2023-06-26 12:43:34','2023-06-26 12:43:34'),(17,'Bon cadeau',NULL,'2023-06-26 12:43:43','2023-06-26 12:43:43'),(18,'Vente de produits',NULL,'2023-06-26 12:43:52','2023-06-26 12:43:52'),(19,'Autre',NULL,'2023-06-26 12:44:00','2023-06-26 12:44:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-27 17:28:51
