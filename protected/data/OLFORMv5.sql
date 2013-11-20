-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: OLFORM
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `AuthAssignment`
--

DROP TABLE IF EXISTS `AuthAssignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthAssignment`
--

LOCK TABLES `AuthAssignment` WRITE;
/*!40000 ALTER TABLE `AuthAssignment` DISABLE KEYS */;
INSERT INTO `AuthAssignment` VALUES ('Admin','1',NULL,'N;'),('Employee','103',NULL,'N;'),('Employee','104',NULL,'N;'),('Employee','107',NULL,'N;'),('Employee','109',NULL,'N;'),('Employee','110',NULL,'N;'),('Employee','112',NULL,'N;'),('Employee','116',NULL,'N;'),('Employee','117',NULL,'N;'),('Employee','119',NULL,'N;'),('Employee','123',NULL,'N;'),('Employee','124',NULL,'N;'),('Employee','129',NULL,'N;'),('Employee','132',NULL,'N;'),('Employee','134',NULL,'N;'),('Employee','139',NULL,'N;'),('Employee','140',NULL,'N;'),('Employee','144',NULL,'N;'),('Employee','147',NULL,'N;'),('Employee','148',NULL,'N;'),('Employee','149',NULL,'N;'),('Employee','152',NULL,'N;'),('Employee','153',NULL,'N;'),('Employee','154',NULL,'N;'),('Employee','155',NULL,'N;'),('Employee','157',NULL,'N;'),('Employee','158',NULL,'N;'),('Employee','160',NULL,'N;'),('Employee','162',NULL,'N;'),('Employee','163',NULL,'N;'),('Employee','164',NULL,'N;'),('Employee','165',NULL,'N;'),('Employee','166',NULL,'N;'),('Employee','167',NULL,'N;'),('Employee','168',NULL,'N;'),('Employee','169',NULL,'N;'),('Employee','170',NULL,'N;'),('Employee','171',NULL,'N;'),('Employee','172',NULL,'N;'),('Employee','173',NULL,'N;'),('Employee','174',NULL,'N;'),('Employee','176',NULL,'N;'),('Employee','177',NULL,'N;'),('Employee','179',NULL,'N;'),('Employee','180',NULL,'N;'),('Employee','183',NULL,'N;'),('Employee','185',NULL,'N;'),('Employee','187',NULL,'N;'),('Employee','189',NULL,'N;'),('Employee','190',NULL,'N;'),('Employee','191',NULL,'N;'),('Employee','192',NULL,'N;'),('Employee','194',NULL,'N;'),('Employee','195',NULL,'N;'),('Employee','196',NULL,'N;'),('Employee','197',NULL,'N;'),('Employee','198',NULL,'N;'),('Employee','202',NULL,'N;'),('Employee','203',NULL,'N;'),('Employee','204',NULL,'N;'),('Employee','205',NULL,'N;'),('Employee','206',NULL,'N;'),('Employee','208',NULL,'N;'),('Employee','209',NULL,'N;'),('Employee','21',NULL,'N;'),('Employee','210',NULL,'N;'),('Employee','212',NULL,'N;'),('Employee','213',NULL,'N;'),('Employee','214',NULL,'N;'),('Employee','216',NULL,'N;'),('Employee','217',NULL,'N;'),('Employee','218',NULL,'N;'),('Employee','219',NULL,'N;'),('Employee','221',NULL,'N;'),('Employee','225',NULL,'N;'),('Employee','226',NULL,'N;'),('Employee','227',NULL,'N;'),('Employee','229',NULL,'N;'),('Employee','230',NULL,'N;'),('Employee','231',NULL,'N;'),('Employee','232',NULL,'N;'),('Employee','233',NULL,'N;'),('Employee','27',NULL,'N;'),('Employee','28',NULL,'N;'),('Employee','31',NULL,'N;'),('Employee','36',NULL,'N;'),('Employee','5',NULL,'N;'),('Employee','51',NULL,'N;'),('Employee','6',NULL,'N;'),('HR Manager','27',NULL,'N;'),('Manager','33',NULL,'N;'),('Supervisor','146',NULL,'N;'),('Supervisor','3',NULL,'N;'),('Supervisor','30',NULL,'N;'),('Supervisor','33',NULL,'N;'),('Supervisor','35',NULL,'N;'),('Team Lead','102',NULL,'N;'),('Team Lead','113',NULL,'N;'),('Team Lead','115',NULL,'N;'),('Team Lead','126',NULL,'N;'),('Team Lead','131',NULL,'N;'),('Team Lead','138',NULL,'N;'),('Team Lead','145',NULL,'N;'),('Team Lead','156',NULL,'N;'),('Team Lead','202',NULL,'N;'),('Team Lead','204',NULL,'N;'),('Team Lead','205',NULL,'N;'),('Team Lead','4',NULL,'N;');
/*!40000 ALTER TABLE `AuthAssignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuthItem`
--

DROP TABLE IF EXISTS `AuthItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthItem`
--

LOCK TABLES `AuthItem` WRITE;
/*!40000 ALTER TABLE `AuthItem` DISABLE KEYS */;
INSERT INTO `AuthItem` VALUES ('Admin',2,NULL,NULL,'N;'),('Authenticated',2,NULL,NULL,'N;'),('Employee',2,'Employee Role',NULL,'N;'),('Guest',2,NULL,NULL,'N;'),('HR Manager',2,'HR Manager Role',NULL,'N;'),('Leave.*',1,NULL,NULL,'N;'),('Leave.Admin',0,NULL,NULL,'N;'),('Leave.Approve',0,NULL,NULL,'N;'),('Leave.Create',0,NULL,NULL,'N;'),('Leave.Delete',0,NULL,NULL,'N;'),('Leave.Index',0,NULL,NULL,'N;'),('Leave.Update',0,NULL,NULL,'N;'),('Leave.View',0,NULL,NULL,'N;'),('Manager',2,'Operation\'s Manager Role',NULL,'N;'),('Otform.*',1,NULL,NULL,'N;'),('Otform.Admin',0,NULL,NULL,'N;'),('Otform.Approve',0,NULL,NULL,'N;'),('Otform.Create',0,NULL,NULL,'N;'),('Otform.Delete',0,NULL,NULL,'N;'),('Otform.Index',0,NULL,NULL,'N;'),('Otform.Update',0,NULL,NULL,'N;'),('Otform.View',0,NULL,NULL,'N;'),('Site.*',1,NULL,NULL,'N;'),('Site.Contact',0,NULL,NULL,'N;'),('Site.Error',0,NULL,NULL,'N;'),('Site.Index',0,NULL,NULL,'N;'),('Site.Login',0,NULL,NULL,'N;'),('Site.Logout',0,NULL,NULL,'N;'),('Supervisor',2,'Supervisor Role',NULL,'N;'),('Team Lead',2,'Team Lead Role',NULL,'N;'),('User.Activation.*',1,NULL,NULL,'N;'),('User.Activation.Activation',0,NULL,NULL,'N;'),('User.Admin.*',1,NULL,NULL,'N;'),('User.Admin.Admin',0,NULL,NULL,'N;'),('User.Admin.Create',0,NULL,NULL,'N;'),('User.Admin.Delete',0,NULL,NULL,'N;'),('User.Admin.Update',0,NULL,NULL,'N;'),('User.Admin.View',0,NULL,NULL,'N;'),('User.Default.*',1,NULL,NULL,'N;'),('User.Default.Index',0,NULL,NULL,'N;'),('User.Login.*',1,NULL,NULL,'N;'),('User.Login.Login',0,NULL,NULL,'N;'),('User.Logout.*',1,NULL,NULL,'N;'),('User.Logout.Logout',0,NULL,NULL,'N;'),('User.Profile.*',1,NULL,NULL,'N;'),('User.Profile.Changepassword',0,NULL,NULL,'N;'),('User.Profile.Edit',0,NULL,NULL,'N;'),('User.Profile.Profile',0,NULL,NULL,'N;'),('User.ProfileField.*',1,NULL,NULL,'N;'),('User.ProfileField.Admin',0,NULL,NULL,'N;'),('User.ProfileField.Create',0,NULL,NULL,'N;'),('User.ProfileField.Delete',0,NULL,NULL,'N;'),('User.ProfileField.Update',0,NULL,NULL,'N;'),('User.ProfileField.View',0,NULL,NULL,'N;'),('User.Recovery.*',1,NULL,NULL,'N;'),('User.Recovery.Recovery',0,NULL,NULL,'N;'),('User.Registration.*',1,NULL,NULL,'N;'),('User.Registration.Registration',0,NULL,NULL,'N;'),('User.User.*',1,NULL,NULL,'N;'),('User.User.Index',0,NULL,NULL,'N;'),('User.User.View',0,NULL,NULL,'N;');
/*!40000 ALTER TABLE `AuthItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuthItemChild`
--

DROP TABLE IF EXISTS `AuthItemChild`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthItemChild`
--

LOCK TABLES `AuthItemChild` WRITE;
/*!40000 ALTER TABLE `AuthItemChild` DISABLE KEYS */;
INSERT INTO `AuthItemChild` VALUES ('HR Manager','Leave.Approve'),('Manager','Leave.Approve'),('Supervisor','Leave.Approve'),('Team Lead','Leave.Approve'),('Employee','Leave.Create'),('HR Manager','Leave.Create'),('Manager','Leave.Create'),('Supervisor','Leave.Create'),('Team Lead','Leave.Create'),('Employee','Leave.Delete'),('HR Manager','Leave.Delete'),('Manager','Leave.Delete'),('Supervisor','Leave.Delete'),('Team Lead','Leave.Delete'),('Employee','Leave.Index'),('HR Manager','Leave.Index'),('Manager','Leave.Index'),('Supervisor','Leave.Index'),('Team Lead','Leave.Index'),('Employee','Leave.Update'),('HR Manager','Leave.Update'),('Manager','Leave.Update'),('Supervisor','Leave.Update'),('Team Lead','Leave.Update'),('Employee','Leave.View'),('HR Manager','Leave.View'),('Manager','Leave.View'),('Supervisor','Leave.View'),('Team Lead','Leave.View'),('HR Manager','Otform.Approve'),('Manager','Otform.Approve'),('Supervisor','Otform.Approve'),('Team Lead','Otform.Approve'),('Employee','Otform.Create'),('HR Manager','Otform.Create'),('Manager','Otform.Create'),('Supervisor','Otform.Create'),('Team Lead','Otform.Create'),('Employee','Otform.Delete'),('HR Manager','Otform.Delete'),('Manager','Otform.Delete'),('Supervisor','Otform.Delete'),('Team Lead','Otform.Delete'),('Employee','Otform.Index'),('HR Manager','Otform.Index'),('Manager','Otform.Index'),('Supervisor','Otform.Index'),('Team Lead','Otform.Index'),('Employee','Otform.Update'),('HR Manager','Otform.Update'),('Manager','Otform.Update'),('Supervisor','Otform.Update'),('Team Lead','Otform.Update'),('Employee','Otform.View'),('HR Manager','Otform.View'),('Manager','Otform.View'),('Supervisor','Otform.View'),('Team Lead','Otform.View'),('Employee','User.Login.*'),('HR Manager','User.Login.*'),('Supervisor','User.Login.*'),('Team Lead','User.Login.*');
/*!40000 ALTER TABLE `AuthItemChild` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Rights`
--

DROP TABLE IF EXISTS `Rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`),
  CONSTRAINT `Rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Rights`
--

LOCK TABLES `Rights` WRITE;
/*!40000 ALTER TABLE `Rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `Rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Systems'),(2,'Network'),(3,'HR'),(4,'Head'),(5,'Admin Staff');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave`
--

DROP TABLE IF EXISTS `leave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date_filed` date NOT NULL,
  `sv1` int(11) DEFAULT NULL,
  `sv2` int(11) DEFAULT NULL,
  `om` int(11) DEFAULT NULL,
  `hrm` int(11) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `days_with_pay` int(11) DEFAULT NULL,
  `days_without_pay` int(11) DEFAULT NULL,
  `others` int(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  KEY `leave_type_id` (`leave_type_id`),
  KEY `sv1` (`sv1`),
  KEY `sv2` (`sv2`),
  KEY `om` (`om`),
  KEY `hrm` (`hrm`),
  CONSTRAINT `leave_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`),
  CONSTRAINT `leave_ibfk_3` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_type` (`id`),
  CONSTRAINT `leave_ibfk_4` FOREIGN KEY (`sv1`) REFERENCES `users` (`id`),
  CONSTRAINT `leave_ibfk_5` FOREIGN KEY (`sv2`) REFERENCES `users` (`id`),
  CONSTRAINT `leave_ibfk_6` FOREIGN KEY (`om`) REFERENCES `users` (`id`),
  CONSTRAINT `leave_ibfk_7` FOREIGN KEY (`hrm`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave`
--

LOCK TABLES `leave` WRITE;
/*!40000 ALTER TABLE `leave` DISABLE KEYS */;
INSERT INTO `leave` VALUES (8,1,2,'dsfsf','2013-11-13','2013-11-13','2013-11-12',1,1,1,1,NULL,'2013-11-12 08:22:35',NULL,NULL,NULL,3),(9,203,1,'','2013-11-21','2013-11-22','2013-11-21',33,33,33,1,NULL,'2013-11-12 09:37:14',NULL,NULL,NULL,4),(10,203,2,'lbm','2013-11-27','2013-11-28','2013-11-28',1,1,1,1,NULL,'2013-11-12 09:37:37',NULL,NULL,NULL,1),(11,158,1,'','2013-11-27','2013-11-27','2013-11-20',33,33,33,1,NULL,'2013-11-12 09:38:39',NULL,NULL,NULL,2),(12,212,4,'birthday Leave','2014-01-31','2014-01-31','2013-11-14',1,1,1,1,NULL,'2013-11-14 04:31:50',NULL,NULL,NULL,3);
/*!40000 ALTER TABLE `leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave_type`
--

DROP TABLE IF EXISTS `leave_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leave_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` char(32) NOT NULL,
  `credits` tinyint(4) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave_type`
--

LOCK TABLES `leave_type` WRITE;
/*!40000 ALTER TABLE `leave_type` DISABLE KEYS */;
INSERT INTO `leave_type` VALUES (1,'Vacation','VA',NULL,'2013-11-07 08:42:33',1),(2,'Sick','SI',NULL,'2013-11-07 08:54:37',1),(3,'Maternity/Paternity','MP',NULL,'2013-11-07 08:55:38',1),(4,'Others','OT',NULL,'2013-11-07 08:55:38',1);
/*!40000 ALTER TABLE `leave_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otform`
--

DROP TABLE IF EXISTS `otform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `remarks` text NOT NULL,
  `date` date NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tl` int(11) DEFAULT NULL,
  `sv` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  KEY `tl` (`tl`),
  KEY `sv` (`sv`),
  CONSTRAINT `otform_ibfk_7` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`),
  CONSTRAINT `otform_ibfk_8` FOREIGN KEY (`sv`) REFERENCES `users` (`id`),
  CONSTRAINT `otform_ibfk_9` FOREIGN KEY (`tl`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otform`
--

LOCK TABLES `otform` WRITE;
/*!40000 ALTER TABLE `otform` DISABLE KEYS */;
INSERT INTO `otform` VALUES (8,1,'12:30:00','12:30:00','test','0000-00-00','2013-10-30 04:42:35',4,3,3),(9,1,'08:45:00','09:45:00','fsdddddddddd fsdkjfasksajdfkj fdshaskjhfjksdahkl saklhfkljsahkfjdshj','0000-00-00','2013-10-30 07:50:05',4,3,3),(10,3,'06:45:00','08:45:00','tulala','0000-00-00','2013-10-31 01:56:34',4,3,3),(11,4,'10:45:00','11:45:00','midnight snack','0000-00-00','2013-10-31 02:58:54',131,3,1),(12,2,'03:30:00','03:45:00','break time ni noi','0000-00-00','2013-11-04 07:45:17',131,3,1),(13,5,'04:15:00','11:45:00','wat d fox say?','0000-00-00','2013-11-04 08:26:55',131,33,1),(14,5,'05:00:00','11:00:00','break time nanaman ni noi','2013-11-04','2013-11-04 09:10:40',131,3,1),(15,2,'05:15:00','11:27:00','tuloog','2013-11-13','2013-11-04 09:19:02',4,33,3),(16,2,'05:15:00','09:56:00','jhgugh','2013-11-28','2013-11-04 09:19:28',4,33,3),(17,3,'05:30:00','06:30:00','tambay mode','2013-11-04','2013-11-04 09:33:24',4,33,3),(18,3,'07:15:00','07:15:00','Fajd','2013-11-20','2013-11-04 11:16:11',4,33,2),(19,5,'05:30:00','11:30:00','date','2013-11-13','2013-11-05 06:38:52',4,33,2),(20,5,'02:45:00','08:45:00','labalaba','2014-01-31','2013-11-05 06:54:12',4,33,3),(21,2,'03:00:00','07:00:00','kain','2013-11-28','2013-11-05 07:00:29',4,33,3),(22,2,'03:30:00','09:30:00','test','2013-11-20','2013-11-05 07:45:03',4,33,3),(24,5,'04:00:00','06:00:00','sssssssssssss','2013-11-15','2013-11-05 08:03:41',4,33,3),(25,6,'04:00:00','04:00:00','ssss','2013-11-30','2013-11-05 08:04:33',4,33,3),(26,6,'04:00:00','07:30:00','ssddddd','2013-11-21','2013-11-05 08:04:50',4,33,3),(27,5,'08:45:00','12:45:00','antok','2013-11-26','2013-11-05 08:52:37',4,33,3),(28,5,'06:30:00','08:45:00','f+','2013-11-29','2013-11-05 10:33:15',4,33,3),(29,3,'09:30:00','02:30:00','ako nmn mag oot','2013-11-06','2013-11-05 11:33:15',4,33,3),(31,158,'05:30:00','09:30:00','test','2013-11-08','2013-11-08 09:41:13',NULL,NULL,0),(32,1,'05:45:00','07:45:00','cccc','2013-11-09','2013-11-08 09:45:17',NULL,NULL,0),(33,1,'10:30:00','01:30:00','assssdad','2013-11-20','2013-11-11 02:36:50',NULL,NULL,0),(34,212,'12:30:00','01:30:00','asdf','2013-11-14','2013-11-14 04:33:04',NULL,NULL,0),(35,212,'12:45:00','12:45:00','asdfasdfasdf','2013-11-21','2013-11-14 04:55:14',NULL,NULL,0),(36,212,'02:45:00','02:45:00','sdfdfessfda','2013-11-05','2013-11-14 06:55:16',NULL,NULL,0),(37,212,'03:00:00','04:00:00','jeline is absent','2013-11-08','2013-11-14 06:56:43',NULL,NULL,0),(38,203,'06:30:00','08:30:00','test ','2013-11-19','2013-11-19 10:30:41',NULL,NULL,0),(39,203,'06:30:00','08:30:00','test ','2013-11-19','2013-11-19 10:30:54',NULL,NULL,0);
/*!40000 ALTER TABLE `otform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `position`
--

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
INSERT INTO `position` VALUES (1,'Human Resource'),(2,'Administration Staff'),(3,'Company Driver'),(4,'Systems Engineer'),(5,'Network Engineer'),(6,'Supervisor'),(7,'Manager');
/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `middle_initial` varchar(255) NOT NULL DEFAULT '',
  `position_id` int(11) DEFAULT '5',
  `department_id` int(11) NOT NULL DEFAULT '5',
  PRIMARY KEY (`user_id`),
  KEY `position_id` (`position_id`),
  KEY `department_id` (`department_id`),
  CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `position` (`id`),
  CONSTRAINT `profiles_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Admin','Administrator','A',2,2),(2,'Demo','Demo','',7,2),(3,'Visor','Super','',6,2),(4,'Lead','Team','',6,2),(5,'lastname','employee','',4,2),(6,'gusi','noi','',4,2),(7,'test','test','t',5,2),(27,'Aguirre','Mary Grace','T',1,4),(28,'Pahulas','Jaime','',3,5),(30,'Dy','Ramon','V',6,2),(31,'Apuyan','Arnel','',2,5),(33,'Mapa','Gary','C',6,4),(35,'Nepomuceno','Manuel Luis','M',6,2),(36,'Ducanes','Jenalyn','A',1,3),(51,'Tanga','Juzen Khay','C',2,5),(102,'Noche','Rhona','F',5,2),(103,'Ramos','Jheera','D',5,2),(104,'Oxina','Cristhamay','S',5,2),(107,'Magparoc','Mariel Aikeem','A',5,2),(109,'Alcaraz','Lara Marynell','C',5,2),(110,'Carlos','Mark Kristoffer','M',5,2),(112,'Dagami','Randell','B',5,2),(113,'Rojas','Fredrick','N',5,2),(115,'Frane','Mcnaire','D',5,2),(116,'Flores','Jefrey','P',5,2),(117,'Sumagyap','Patrick','A',5,2),(119,'Olermo','Perry James','A',5,2),(123,'Dawang','Mark Lloyd','D',5,2),(124,'Castro','Philip','P',5,2),(126,'Curay','Naomi Claire','G',5,2),(129,'Inubio','Josiah','V',5,2),(131,'Balino','Karlo Ben','A',5,2),(132,'Raya','Randy','F',5,2),(134,'Mercene','Melody','M',5,2),(138,'Morales','Jose Jewel','A',5,2),(139,'Marin','Kristian','B',5,2),(140,'Mallari','Mary Ann','A',5,2),(144,'Cruz','Russel','M',5,2),(145,'Franco','Katrina','C',5,2),(146,'Anir','Anna','S',6,2),(147,'Cabigas','Jake','B',5,2),(148,'Samson','Camille','E',5,2),(149,'Basulgan','Jayson','G',5,2),(152,'Cada','Lexter','M',5,2),(153,'Agustin','Jesie','G',5,2),(154,'Dupo','Raymart','B',5,2),(155,'Morales','Jay bee','D',5,2),(156,'Joaquin','Enjay','M',5,2),(157,'Ilagan','Lexter Angelo','R',5,2),(158,'Arica','Daryll Smart','D',4,1),(160,'Guarismo','Mark Roviel','B',4,1),(162,'Tortoles','Edd Julius','T',5,2),(163,'Domingo','Danica','C',5,2),(164,'Casimiro','Caluna','L',5,2),(165,'Go','Mark Angelo','B',5,2),(166,'Abling','Patrick Joseph','R',5,2),(167,'Semana','Marvin Lance','V',5,2),(168,'Diaz','Jefrey','R',5,2),(169,'Yabut','Jocelyn','C',5,2),(170,'Morillo','Gilbert','D',5,2),(171,'Tienzo','Edmund','M',5,2),(172,'Danganan','Maricel','G',5,2),(173,'Guevarra','Alexis','C',5,2),(174,'Frias','April John','P',5,2),(176,'Castillo','Daryl','C',5,2),(177,'Nunez','Audi','M',5,2),(179,'Mariano','Ron','C',5,2),(180,'De Guzman','John Felix','Z',5,2),(183,'Recto','Ralph','N',5,2),(185,'Cornista','Earl John','A',5,2),(187,'Junaide','Mohammad Kinhar','T',5,2),(189,'Violanda','Donnabelle','C',5,2),(190,'Pagtakhan','Kathy','F',5,2),(191,'Arroyo','Ella','C',5,2),(192,'Agrame','Rishelle','S',5,2),(194,'Parsacala','Mark Jason','E',5,2),(195,'Carteciano','Jay Francis','M',5,2),(196,'Collera','Dandy','H',4,1),(197,'Serapio','Jefferson','M',5,2),(198,'Precilla','Limuel','E',5,2),(202,'Santiago','Vhilly','M',4,1),(203,'Gusi','Noelyn','L',4,1),(204,'Luna','Chey','D',4,1),(205,'Sosa','Adrian','O',4,1),(206,'Convicto','Karen Mae','C',4,1),(208,'Subang','Joyce','C',4,1),(209,'Samonte','Syd','B',4,1),(210,'Cabug-os','Neil','E',4,1),(212,'Alcorin','Maychell','M',4,1),(213,'Panaligan','Marijo','T',5,2),(214,'Mendoza','James Harold','G',5,2),(216,'Bernal','Wilfredo','O',5,2),(217,'Tatualla','Vic','',2,5),(218,'Aguirre','Ryan','T',2,5),(219,'Purungganan','Jaworski','P',5,2),(221,'Morita','Ryouhei','',4,5),(225,'Namoro','Richard','R',5,2),(226,'Genorga','Mark Ronald','C',5,2),(227,'Gutierrez','Alexis','P',5,2),(229,'Quito','Mary Rose','M',5,2),(230,'Cardeno','Rai Clarence','G',5,2),(231,'Venturina','Daniel','A',5,2),(232,'Romero','Jose Enrico','B',5,2),(233,'Corpuz','Michael Rhine','T',4,2);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles_fields`
--

DROP TABLE IF EXISTS `profiles_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles_fields`
--

LOCK TABLES `profiles_fields` WRITE;
/*!40000 ALTER TABLE `profiles_fields` DISABLE KEYS */;
INSERT INTO `profiles_fields` VALUES (1,'lastname','Last Name','VARCHAR','50','3',1,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',1,3),(2,'firstname','First Name','VARCHAR','50','3',1,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',0,3),(3,'middle_initial','Middle Initial','VARCHAR','4','',1,'','','','','','','',2,3);
/*!40000 ALTER TABLE `profiles_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','webmaster@example.com','9a24eff8c15a6a141ece27eb6947da0f','2013-11-04 07:26:41','2013-11-20 03:18:52',1,1),(2,'demo','fe01ce2a7fbac8fafaed7c982a04e229','demo@example.com','099f825543f7850cc038b90aaff39fac','2013-11-04 07:26:41','2013-11-05 06:20:58',0,1),(3,'supervisor','09348c20a019be0318387c08df7a783d','test@imperium.ph','57a567b4786b2a513d31f6aced84bc12','2013-11-05 04:43:02','2013-11-06 12:31:39',0,1),(4,'teamlead','66a62356f4247933509774da05fb9522','noi@imperium.ph','16434cd23fd4e483f7087cfae20aaf01','2013-11-05 05:29:57','2013-11-06 06:45:44',0,1),(5,'employee','fa5473530e4d1a5a1e1eb53d2fedb10c','example@google.com','36c46eb95341efda4d1f7b3b5c4cd28b','2013-11-05 05:34:38','2013-11-06 04:54:40',0,1),(6,'noichii','61f836dd6343e0f45b36c4fcd8b3c7c6','quutee_12@yahoo.com','20571e2ede33b001204c361525e23367','2013-11-05 05:40:31','2013-11-06 06:49:24',0,1),(7,'test','668f41556b0b778a12fad00473cf9506','test@example.com','8e24436189632e40454e3d65b586a245','2013-11-06 04:38:01','0000-00-00 00:00:00',0,1),(27,'grace@imperium.ph','668f41556b0b778a12fad00473cf9506','grace@imperium.ph','','2013-11-06 10:18:54','0000-00-00 00:00:00',0,1),(28,'Jaime','668f41556b0b778a12fad00473cf9506','Jaime','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(30,'mondy@imperium.ph','668f41556b0b778a12fad00473cf9506','mondy@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(31,'Arnel','668f41556b0b778a12fad00473cf9506','Arnel','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(33,'gary@imperium.ph','668f41556b0b778a12fad00473cf9506','gary@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(35,'nepz@imperium.ph','668f41556b0b778a12fad00473cf9506','nepz@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(36,'lenlen@imperium.ph','668f41556b0b778a12fad00473cf9506','lenlen@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(51,'juzen@imperium.ph','668f41556b0b778a12fad00473cf9506','juzen@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(102,'rhona@imperium.ph','668f41556b0b778a12fad00473cf9506','rhona@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(103,'raj@imperium.ph','668f41556b0b778a12fad00473cf9506','raj@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(104,'thamay@imperium.ph','668f41556b0b778a12fad00473cf9506','thamay@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(107,'mariel@imperium.ph','668f41556b0b778a12fad00473cf9506','mariel@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(109,'lara@imperium.ph','668f41556b0b778a12fad00473cf9506','lara@imperium.ph','','2013-11-06 10:18:54','0000-00-00 00:00:00',0,1),(110,'mark@imperium.ph','668f41556b0b778a12fad00473cf9506','mark@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(112,'dhel@imperium.ph','668f41556b0b778a12fad00473cf9506','dhel@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(113,'fred@imperium.ph','668f41556b0b778a12fad00473cf9506','fred@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(115,'mc@imperium.ph','668f41556b0b778a12fad00473cf9506','mc@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(116,'jef@imperium.ph','668f41556b0b778a12fad00473cf9506','jef@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(117,'pat@imperium.ph','668f41556b0b778a12fad00473cf9506','pat@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(119,'perry@imperium.ph','668f41556b0b778a12fad00473cf9506','perry@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(123,'llyod@imperium.ph','668f41556b0b778a12fad00473cf9506','llyod@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(124,'philip@imperium.ph','668f41556b0b778a12fad00473cf9506','philip@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(126,'naoru@imperium.ph','668f41556b0b778a12fad00473cf9506','naoru@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(129,'jong@imperium.ph','668f41556b0b778a12fad00473cf9506','jong@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(131,'ben@imperium.ph','668f41556b0b778a12fad00473cf9506','ben@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(132,'dheck@imperium.ph','668f41556b0b778a12fad00473cf9506','dheck@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(134,'sai@imperium.ph','668f41556b0b778a12fad00473cf9506','sai@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(138,'borjz@imperium.ph','668f41556b0b778a12fad00473cf9506','borjz@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(139,'kristian@imperium.ph','668f41556b0b778a12fad00473cf9506','kristian@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(140,'mary@imperium.ph','668f41556b0b778a12fad00473cf9506','mary@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(144,'russel@imperium.ph','668f41556b0b778a12fad00473cf9506','russel@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(145,'yna@imperium.ph','668f41556b0b778a12fad00473cf9506','yna@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(146,'anna@imperium.ph','668f41556b0b778a12fad00473cf9506','anna@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(147,'jake@imperium.ph','668f41556b0b778a12fad00473cf9506','jake@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(148,'camille@imperium.ph','668f41556b0b778a12fad00473cf9506','camille@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(149,'jayson@imperium.ph','668f41556b0b778a12fad00473cf9506','jayson@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(152,'lexter@imperium.ph','668f41556b0b778a12fad00473cf9506','lexter@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(153,'jesie@imperium.ph','668f41556b0b778a12fad00473cf9506','jesie@imperium.ph','','2013-11-06 10:18:54','0000-00-00 00:00:00',0,1),(154,'mat@imperium.ph','668f41556b0b778a12fad00473cf9506','mat@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(155,'jaybee@imperium.ph','668f41556b0b778a12fad00473cf9506','jaybee@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(156,'enjay@imperium.ph','668f41556b0b778a12fad00473cf9506','enjay@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(157,'lai@imperium.ph','668f41556b0b778a12fad00473cf9506','lai@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(158,'daryll@imperium.ph','668f41556b0b778a12fad00473cf9506','daryll@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(160,'roviel@imperium.ph','668f41556b0b778a12fad00473cf9506','roviel@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(162,'edd@imperium.ph','668f41556b0b778a12fad00473cf9506','edd@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(163,'danica@imperium.ph','668f41556b0b778a12fad00473cf9506','danica@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(164,'bongbong@imperium.ph','668f41556b0b778a12fad00473cf9506','bongbong@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(165,'angelo@imperium.ph','668f41556b0b778a12fad00473cf9506','angelo@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(166,'joseph@imperium.ph','668f41556b0b778a12fad00473cf9506','joseph@imperium.ph','','2013-11-06 10:18:54','0000-00-00 00:00:00',0,1),(167,'lance@imperium.ph','668f41556b0b778a12fad00473cf9506','lance@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(168,'jepoy@imperium.ph','668f41556b0b778a12fad00473cf9506','jepoy@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(169,'jo@imperium.ph','668f41556b0b778a12fad00473cf9506','jo@imperium.ph','','2013-11-06 10:19:00','0000-00-00 00:00:00',0,1),(170,'gilbs@imperium.ph','668f41556b0b778a12fad00473cf9506','gilbs@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(171,'mund@imperium.ph','668f41556b0b778a12fad00473cf9506','mund@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(172,'cel@imperium.ph','668f41556b0b778a12fad00473cf9506','cel@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(173,'alexis@imperium.ph','668f41556b0b778a12fad00473cf9506','alexis@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(174,'aj@imperium.ph','668f41556b0b778a12fad00473cf9506','aj@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(176,'dahdah@imperium.ph','668f41556b0b778a12fad00473cf9506','dahdah@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(177,'audi@imperium.ph','668f41556b0b778a12fad00473cf9506','audi@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(179,'ron@imperium.ph','668f41556b0b778a12fad00473cf9506','ron@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(180,'jben@imperium.ph','668f41556b0b778a12fad00473cf9506','jben@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(183,'ralph@imperium.ph','668f41556b0b778a12fad00473cf9506','ralph@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(185,'ej@imperium.ph','668f41556b0b778a12fad00473cf9506','ej@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(187,'kim@imperium.ph','668f41556b0b778a12fad00473cf9506','kim@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(189,'donna@imperium.ph','668f41556b0b778a12fad00473cf9506','donna@imperium.ph','','2013-11-06 10:19:00','0000-00-00 00:00:00',0,1),(190,'kathy@imperium.ph','668f41556b0b778a12fad00473cf9506','kathy@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(191,'ella@imperium.ph','668f41556b0b778a12fad00473cf9506','ella@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(192,'shelle@imperium.ph','668f41556b0b778a12fad00473cf9506','shelle@imperium.ph','','2013-11-06 10:18:54','0000-00-00 00:00:00',0,1),(194,'mj@imperium.ph','668f41556b0b778a12fad00473cf9506','mj@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(195,'francis@imperium.ph','668f41556b0b778a12fad00473cf9506','francis@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(196,'dandy@imperium.ph','668f41556b0b778a12fad00473cf9506','dandy@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(197,'jefferson@imperium.p','668f41556b0b778a12fad00473cf9506','jefferson@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(198,'lj@imperium.ph','668f41556b0b778a12fad00473cf9506','lj@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(202,'vhilly@imperium.ph','668f41556b0b778a12fad00473cf9506','vhilly@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(203,'lyn@imperium.ph','668f41556b0b778a12fad00473cf9506','lyn@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(204,'chey@imperium.ph','668f41556b0b778a12fad00473cf9506','chey@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(205,'ian@imperium.ph','668f41556b0b778a12fad00473cf9506','ian@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(206,'karen@imperium.ph','668f41556b0b778a12fad00473cf9506','karen@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(208,'joyce@imperium.ph','668f41556b0b778a12fad00473cf9506','joyce@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(209,'syd@imperium.ph','668f41556b0b778a12fad00473cf9506','syd@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(210,'neil@imperium.ph','668f41556b0b778a12fad00473cf9506','neil@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(212,'maychell@imperium.ph','668f41556b0b778a12fad00473cf9506','maychell@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(213,'marijo@imperium.ph','668f41556b0b778a12fad00473cf9506','marijo@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(214,'harold@imperium.ph','668f41556b0b778a12fad00473cf9506','harold@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(216,'Wilfredo','668f41556b0b778a12fad00473cf9506','Wilfredo','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(217,'Vic','668f41556b0b778a12fad00473cf9506','Vic','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(218,'Ryan','668f41556b0b778a12fad00473cf9506','Ryan','','2013-11-06 10:18:54','0000-00-00 00:00:00',0,1),(219,'jawo@imperium.ph','668f41556b0b778a12fad00473cf9506','jawo@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(221,'Ryouhei','668f41556b0b778a12fad00473cf9506','Ryouhei','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(225,'richard@imperium.ph','668f41556b0b778a12fad00473cf9506','richard@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(226,'ronald@imperium.ph','668f41556b0b778a12fad00473cf9506','ronald@imperium.ph','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1),(227,'alex@imperium.ph','668f41556b0b778a12fad00473cf9506','alex@imperium.ph','','2013-11-06 10:18:57','0000-00-00 00:00:00',0,1),(229,'mr@imperium.ph','668f41556b0b778a12fad00473cf9506','mr@imperium.ph','','2013-11-06 10:18:58','0000-00-00 00:00:00',0,1),(230,'clang@imperium.ph','668f41556b0b778a12fad00473cf9506','clang@imperium.ph','','2013-11-06 10:18:55','0000-00-00 00:00:00',0,1),(231,'daniel@imperium.ph','668f41556b0b778a12fad00473cf9506','daniel@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(232,'enrico@imperium.ph','668f41556b0b778a12fad00473cf9506','enrico@imperium.ph','','2013-11-06 10:18:59','0000-00-00 00:00:00',0,1),(233,'Michael Rhine','668f41556b0b778a12fad00473cf9506','Michael Rhine','','2013-11-06 10:18:56','0000-00-00 00:00:00',0,1);
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

-- Dump completed on 2013-11-20 13:49:15
