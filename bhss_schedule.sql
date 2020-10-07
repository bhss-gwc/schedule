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
-- Table structure for table `counter`
--

DROP TABLE IF EXISTS `counter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counter`
--

LOCK TABLES `counter` WRITE;
/*!40000 ALTER TABLE `counter` DISABLE KEYS */;
INSERT INTO `counter` VALUES (1,41);
/*!40000 ALTER TABLE `counter` ENABLE KEYS */;
UNLOCK TABLES;

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
  `clubleadername` varchar(100) NOT NULL,
  `clubcommunication` varchar(100) NOT NULL,
  `clubmeetinglocation` varchar(30) NOT NULL,
  `clubmeetingdescription` varchar(100) NOT NULL,
  `clubpassword` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clubname` (`clubname`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `introduce_responses`
--

LOCK TABLES `introduce_responses` WRITE;
/*!40000 ALTER TABLE `introduce_responses` DISABLE KEYS */;
INSERT INTO `introduce_responses` VALUES (10,'Girls Who Code','Mr. Pizzo','spizzo@mccsc.net','EK','[Discord join link]','A325','fun stuff','$2y$10$nRtfzQRnVRjuVi94KzZrE.NhJxQZdBqfAI24ZtHB/ary.CkWZtUYi','club'),(14,'root','','','','','','','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','admin'),(16,'Chess Club','Mr. Joe','joe@mccsc.edu','Chuck','chessclub@gmail.com','A210','','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(17,'bhssadmin','','','','','','','$2y$10$BVMdj.UMj7aKvuU76MTxDeXnBdFYLLKWgpRtWb/udrjJDm06hmlzC','officer'),(18,'Food Club','Mr. Food','Food@gmail.com','Foodie','https://discord.gg/xxxxxx','cafeteria','eating food','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(20,'Drink Club','Mr. Drink','drink@mccsc.edu','','https://groupme.com/join_group/xxxxxxxx/xxxxxx','Cafeteria','','$2y$10$wpF03Tr3NDiUxe5TvHxkI.TmptUMRRgkhuPHJnj9NozWXzZ4qpI8q','club'),(22,'Dance Club','dance teacher','dance@gmail.com','dancer','[GroupMe link]','purple gym','dancing','$2y$10$05ENx9.tgJa/1i/Wqt0U/OZ7cfyFnKhVuwAasFg6ydP7e2UAqDUEK','club');
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
  `clubmeetingdescription` varchar(100) NOT NULL,
  `clubname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cname` (`clubname`),
  CONSTRAINT `cname` FOREIGN KEY (`clubname`) REFERENCES `introduce_responses` (`clubname`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meetings`
--

LOCK TABLES `meetings` WRITE;
/*!40000 ALTER TABLE `meetings` DISABLE KEYS */;
INSERT INTO `meetings` VALUES (26,'2020-10-03','3 pm','4 pm','A325','Do stuf','Girls Who Code'),(27,'2020-10-05','15:00','16:00','','','Girls Who Code'),(29,'2020-10-04','15:00','15:30','A325','Do stuf','Girls Who Code'),(30,'2020-10-04','15:00','16:00','A325','Do stuf','Girls Who Code'),(44,'2020-10-04','15:00','16:00','cafeteria','','Girls Who Code'),(45,'2020-10-10','15:20','15:22','Gym','','Girls Who Code'),(46,'2020-10-04','15:00','22:00','cafeteria','','Girls Who Code'),(47,'2020-10-09','15:00','15:35','purple gym','practicing choreo in the large purple gym','Dance Club'),(48,'2020-10-11','15:15','16:00','','','Chess Club'),(49,'','','','','','Dance Club'),(50,'','','','','','Dance Club'),(51,'','','','','','Dance Club'),(52,'','','','','','Dance Club'),(53,'','','','','','Dance Club'),(54,'2020-10-07','19:48','19:51','white gym','','Dance Club'),(56,'2020-10-22','','','','','Dance Club'),(57,'','','','','','Chess Club'),(58,'','','','','','Chess Club');
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
  `newscheduledate` varchar(30) NOT NULL,
  `1periodstart` varchar(30) NOT NULL,
  `1periodstop` varchar(30) NOT NULL,
  `2periodstart` varchar(30) NOT NULL,
  `2periodstop` varchar(30) NOT NULL,
  `srtperiodstart` varchar(30) NOT NULL,
  `srtperiodstop` varchar(30) NOT NULL,
  `3periodstart` varchar(30) DEFAULT NULL,
  `3periodstop` varchar(30) DEFAULT NULL,
  `Alunchperiodstart` varchar(30) NOT NULL,
  `Alunchperiodstop` varchar(30) NOT NULL,
  `Blunchperiodstart` varchar(30) NOT NULL,
  `Blunchperiodstop` varchar(30) NOT NULL,
  `Clunchperiodstart` varchar(30) NOT NULL,
  `Clunchperiodstop` varchar(30) NOT NULL,
  `4periodstart` varchar(30) NOT NULL,
  `4periodstop` varchar(30) NOT NULL,
  `5periodstart` varchar(30) NOT NULL,
  `5periodstop` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedulechange`
--

LOCK TABLES `schedulechange` WRITE;
/*!40000 ALTER TABLE `schedulechange` DISABLE KEYS */;
INSERT INTO `schedulechange` VALUES (1,'Regular','','08:00','9:05','9:10','10:15','10:20','10:50','10:55','12:35','10:55','11:25','11:30','12:00','12:05','12:35','12:40','1:45','1:50','2:55'),(6,'ISTEP testing week 1','2020-10-10','','','','','12:02','12:02','','','','','','','','','','14:02','14:03',''),(7,'AP testing week 1','2020-10-11','14:02','14:02','14:02','14:02','14:02','14:02','14:02','14:02','14:03','14:03','14:03','14:03','14:03','14:03','14:02','14:02','14:03','14:04'),(8,'AP testing week 2','2020-10-14','15:03','15:03','15:03','15:03','15:03','15:03','15:03','15:03','15:04','15:04','15:05','15:05','15:06','15:06','15:03','15:03','16:03','16:03'),(9,'Tri 1 Finals','2020-10-08','08:00','09:00','09:00','10:00','10:00','11:00','11:00','12:00','11:00','11:20','11:20','11:40','11:40','12:00','12:00','14:00','14:00','15:00'),(10,'Tri 1 Finals 2','2020-10-09','15:03','15:03','15:03','15:03','14:03','15:03','15:03','15:03','15:03','15:03','15:03','15:03','15:03','15:03','15:03','15:03','15:33','15:03'),(11,'Tri 1 Finals 3','2020-10-13','','','','','14:02','14:02','','','','','','','','','','14:02','14:02',''),(12,'ISTEP math part 1','2020-10-05','08:00','09:00','09:00','10:00','10:00','11:00','11:00','12:00','11:00','11:20','11:20','11:40','11:40','12:00','12:00','13:00','13:00','15:00'),(13,'Tri 1 Finals 5','2020-10-15','13:01','13:01','13:01','13:01','13:01','13:01','','','16:01','13:01','13:01','13:01','13:01','13:01','13:01','13:01','13:01','13:01');
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

-- Dump completed on 2020-10-06 20:59:25
