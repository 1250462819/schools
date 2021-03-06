-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: school
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `absenteeisms`
--

DROP TABLE IF EXISTS `absenteeisms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `absenteeisms` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `teacher_id` int(10) unsigned NOT NULL,
  `lesson_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `absenteeisms_student_id_foreign` (`student_id`),
  KEY `absenteeisms_teacher_id_foreign` (`teacher_id`),
  KEY `absenteeisms_lesson_id_foreign` (`lesson_id`),
  CONSTRAINT `absenteeisms_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `absenteeisms_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  CONSTRAINT `absenteeisms_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absenteeisms`
--

LOCK TABLES `absenteeisms` WRITE;
/*!40000 ALTER TABLE `absenteeisms` DISABLE KEYS */;
/*!40000 ALTER TABLE `absenteeisms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `addresses_school_id_foreign` (`school_id`),
  CONSTRAINT `addresses_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classroom_teacher`
--

DROP TABLE IF EXISTS `classroom_teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classroom_teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classroom_id` int(10) unsigned NOT NULL,
  `teacher_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classroom_teacher_classroom_id_foreign` (`classroom_id`),
  KEY `classroom_teacher_teacher_id_foreign` (`teacher_id`),
  CONSTRAINT `classroom_teacher_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE,
  CONSTRAINT `classroom_teacher_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classroom_teacher`
--

LOCK TABLES `classroom_teacher` WRITE;
/*!40000 ALTER TABLE `classroom_teacher` DISABLE KEYS */;
/*!40000 ALTER TABLE `classroom_teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classrooms`
--

DROP TABLE IF EXISTS `classrooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classrooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `classrooms_school_id_foreign` (`school_id`),
  CONSTRAINT `classrooms_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classrooms`
--

LOCK TABLES `classrooms` WRITE;
/*!40000 ALTER TABLE `classrooms` DISABLE KEYS */;
/*!40000 ALTER TABLE `classrooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conditions`
--

DROP TABLE IF EXISTS `conditions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conditions` (
  `id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `teacher_id` int(10) unsigned NOT NULL,
  `lesson_id` int(10) unsigned NOT NULL,
  `date` date NOT NULL,
  `base` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `conditions_student_id_foreign` (`student_id`),
  KEY `conditions_teacher_id_foreign` (`teacher_id`),
  KEY `conditions_lesson_id_foreign` (`lesson_id`),
  CONSTRAINT `conditions_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `conditions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  CONSTRAINT `conditions_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conditions`
--

LOCK TABLES `conditions` WRITE;
/*!40000 ALTER TABLE `conditions` DISABLE KEYS */;
/*!40000 ALTER TABLE `conditions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lesson_teacher`
--

DROP TABLE IF EXISTS `lesson_teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lesson_teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lesson_id` int(10) unsigned NOT NULL,
  `teacher_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lesson_teacher_lesson_id_foreign` (`lesson_id`),
  KEY `lesson_teacher_teacher_id_foreign` (`teacher_id`),
  CONSTRAINT `lesson_teacher_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lesson_teacher_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson_teacher`
--

LOCK TABLES `lesson_teacher` WRITE;
/*!40000 ALTER TABLE `lesson_teacher` DISABLE KEYS */;
/*!40000 ALTER TABLE `lesson_teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lessons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classroom_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lessons_classroom_id_foreign` (`classroom_id`),
  CONSTRAINT `lessons_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lessons`
--

LOCK TABLES `lessons` WRITE;
/*!40000 ALTER TABLE `lessons` DISABLE KEYS */;
/*!40000 ALTER TABLE `lessons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2013_11_14_083321_craete_schools_table',1),(2,'2013_11_15_000000_create_users_table',1),(3,'2013_11_16_113023_create_teachers_table',1),(4,'2013_11_16_122014_create_classrooms_table',1),(5,'2013_12_02_115458_create_students_table',1),(6,'2014_10_12_100000_create_password_resets_table',1),(7,'2018_11_15_080739_create_addresses_table',1),(8,'2018_11_15_124436_create_lessons_table',1),(9,'2018_11_15_144930_create_conditions_table',1),(10,'2018_11_15_150225_create_absenteeisms_table',1),(11,'2019_02_03_114912_create_posts_table',1),(12,'2019_02_03_115757_create_sliders_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(10) unsigned NOT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_school_id_foreign` (`school_id`),
  CONSTRAINT `posts_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schools` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schools`
--

LOCK TABLES `schools` WRITE;
/*!40000 ALTER TABLE `schools` DISABLE KEYS */;
/*!40000 ALTER TABLE `schools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `school_id` int(10) unsigned NOT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sliders_school_id_foreign` (`school_id`),
  CONSTRAINT `sliders_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `StudentCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `classroom_id` int(10) unsigned NOT NULL,
  `school_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_user_id_foreign` (`user_id`),
  KEY `students_classroom_id_foreign` (`classroom_id`),
  KEY `students_school_id_foreign` (`school_id`),
  CONSTRAINT `students_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE,
  CONSTRAINT `students_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PersonnelCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teachers_school_id_foreign` (`school_id`),
  KEY `teachers_user_id_foreign` (`user_id`),
  CONSTRAINT `teachers_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_school_id_foreign` (`school_id`),
  CONSTRAINT `users_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'school'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-03 20:12:17
