-- MySQL dump 10.13  Distrib 5.7.26, for osx10.10 (x86_64)
--
-- Host: localhost    Database: bhss_schedule
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `introduce_responses`
--

DROP TABLE IF EXISTS `introduce_responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `introduce_responses` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `clubname` varchar(30) NOT NULL,
  `clubsponsorname` varchar(30) NOT NULL,
  `clubsponsoremail` varchar(30) NOT NULL,
  `clubmeetinglocation` varchar(30) NOT NULL,
  `clubmeetingdescription` varchar(30) NOT NULL,
  `clubpassword` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `introduce_responses`
--

LOCK TABLES `introduce_responses` WRITE;
/*!40000 ALTER TABLE `introduce_responses` DISABLE KEYS */;
INSERT INTO `introduce_responses` VALUES (10,'Coding Club','Mr. Pizzo','spizzo@mccsc.net','A325','Do stuf','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(12,'Freee Debate Case','Katrina','Katrina','Katrina','Katrina','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(13,'sdga','wrtqw','qrtqe','ertqet','ertqe','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(14,'root','','','','','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','admin'),(15,'overseer','Mr. Pizzo','spizzo@mccsc.net','A325','do stuff','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(16,'chess club','joe','joe','Joe','Joe','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(17,'bhssadmin','','','','','$2y$10$BVMdj.UMj7aKvuU76MTxDeXnBdFYLLKWgpRtWb/udrjJDm06hmlzC','officer'),(18,'food club','mr. food','food@gmail.com','cafeteria','eating food','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(20,'drink club','mr. food','food@gmail.com','cafeteria','eating food','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(21,'soccer club','mr. food','kimele2003@gmail.com','cafeteria','eating food','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club');
/*!40000 ALTER TABLE `introduce_responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meetings` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `meetingdate` varchar(30) NOT NULL,
  `starttime` varchar(30) NOT NULL,
  `stoptime` varchar(30) NOT NULL,
  `clubmeetinglocation` varchar(30) NOT NULL,
  `clubmeetingdescription` varchar(30) NOT NULL,
  `clubname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meetings`
--

LOCK TABLES `meetings` WRITE;
/*!40000 ALTER TABLE `meetings` DISABLE KEYS */;
INSERT INTO `meetings` VALUES (26,'2020-10-03','3 pm','4 pm','A325','Do stuf','debate'),(27,'2020-10-05','3 pm','4 pm','','','debate'),(28,'2020-10-06','right now','as soon as i get the case','Katrina','Katrina',''),(29,'2020-10-04','3 pm','4 pm','A325','Do stuf',''),(30,'2020-10-04','3 pm','4 pm','A325','Do stuf',''),(44,'2020-10-04','15:00','16:00','cafeteria','','chess club'),(45,'2020-10-10','15:20','15:22','Gym','','chess club'),(46,'2020-10-04','15:00','22:00','cafeteria','','chess club');
/*!40000 ALTER TABLE `meetings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedulechange`
--

DROP TABLE IF EXISTS `schedulechange`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedulechange` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `schedule_type` varchar(30) NOT NULL,
  `1stperiodstart` varchar(30) NOT NULL,
  `1stperiodstop` varchar(30) NOT NULL,
  `2ndperiodstart` varchar(30) NOT NULL,
  `2ndperiodstop` varchar(30) NOT NULL,
  `3rdperiodstart` varchar(30) NOT NULL,
  `3rdperiodstop` varchar(30) NOT NULL,
  `4thperiodstart` varchar(30) NOT NULL,
  `4thperiodstop` varchar(30) NOT NULL,
  `5thperiodstart` varchar(30) NOT NULL,
  `5thperiodstop` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedulechange`
--

LOCK TABLES `schedulechange` WRITE;
/*!40000 ALTER TABLE `schedulechange` DISABLE KEYS */;
INSERT INTO `schedulechange` VALUES (1,'','8 am - 8:50 am','0','8:55 am - 9:05 am','','9:10 am - 2 pm','','2:05 pm - 2:30 pm','','',''),(2,'','8 am - 8:50 am','0','8:55 am - 9:05 am','','9:10 am - 2 pm','','2:05 pm - 2:30 pm','','',''),(3,'','8 am - 8:50 am','0','8:55 am - 9:05 am','','9:10 am - 2 pm','','2:05 pm - 2:30 pm','','','');
/*!40000 ALTER TABLE `schedulechange` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weirdschedules`
--

DROP TABLE IF EXISTS `weirdschedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weirdschedules` (
  `month` varchar(15) NOT NULL,
  `day` int(11) NOT NULL,
  `schedule_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weirdschedules`
--

LOCK TABLES `weirdschedules` WRITE;
/*!40000 ALTER TABLE `weirdschedules` DISABLE KEYS */;
INSERT INTO `weirdschedules` VALUES ('Nov',1,'istep math part 1'),('Dec',18,'ap testing'),('Dec',18,'ap testing'),('Dec',18,'ap testing'),('Dec',17,'ap testing');
/*!40000 ALTER TABLE `weirdschedules` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-04 21:43:16
