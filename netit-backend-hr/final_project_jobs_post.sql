CREATE DATABASE  IF NOT EXISTS `final_project` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `final_project`;
-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: final_project
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.11-MariaDB

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
-- Table structure for table `jobs_post`
--

DROP TABLE IF EXISTS `jobs_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `category` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `requirements` text NOT NULL,
  `company` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs_post`
--

LOCK TABLES `jobs_post` WRITE;
/*!40000 ALTER TABLE `jobs_post` DISABLE KEYS */;
INSERT INTO `jobs_post` VALUES (1,'Option1','Авиация','fdhjnghmn','jhmhjmjh ','creativemgrup'),(2,'Option2','Банки, кредитиране','jmhjhy','fghghnghnghn','klem'),(3,'Option3','Хотели','fgnghmghm','hnghmgjm jm ','creativemgrup'),(4,'Option4','ИТ','hm ghmn ghn ghn ','ghn ghn gn ghn gntg','klem'),(5,'Option5','Медии','cvbvbnnhn','ghngn b bn ','klem'),(6,'Option6','Шофьори',' vb nghnghnghnghnghn','hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh','klem');
/*!40000 ALTER TABLE `jobs_post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-28 14:21:42
