-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: my_club
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.13.04.1

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
-- Table structure for table `avatars`
--

DROP TABLE IF EXISTS `avatars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avatars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(145) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `path_UNIQUE` (`path`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avatars`
--

LOCK TABLES `avatars` WRITE;
/*!40000 ALTER TABLE `avatars` DISABLE KEYS */;
INSERT INTO `avatars` VALUES (17,'upload/avatars/teams/19.png'),(19,'upload/avatars/teams/26.jpeg'),(20,'upload/avatars/teams/27.png'),(21,'upload/avatars/teams/28.jpeg'),(15,'upload/avatars/users/1.jpeg'),(18,'upload/avatars/users/2.jpeg');
/*!40000 ALTER TABLE `avatars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infos`
--

DROP TABLE IF EXISTS `infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infos` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `show_phone` tinyint(1) DEFAULT NULL,
  `show_email` tinyint(1) DEFAULT NULL,
  `height` tinyint(4) DEFAULT NULL,
  `weight` tinyint(4) DEFAULT NULL,
  `age` date DEFAULT NULL,
  `join_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_infos_users1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infos`
--

LOCK TABLES `infos` WRITE;
/*!40000 ALTER TABLE `infos` DISABLE KEYS */;
INSERT INTO `infos` VALUES (1,'Tomasz','Strzeszkowski',666666667,0,1,NULL,NULL,NULL,NULL),(2,'Tomek',NULL,666666666,NULL,NULL,NULL,NULL,NULL,NULL),(7,'aaa','',666666666,1,1,NULL,NULL,NULL,NULL),(8,'a','',666666666,1,1,NULL,NULL,NULL,NULL),(9,'aba','',666666666,1,1,NULL,NULL,NULL,NULL),(14,'','',666666666,1,1,NULL,NULL,NULL,NULL),(15,'','',666666666,1,1,NULL,NULL,NULL,NULL),(16,'','',0,1,1,NULL,NULL,NULL,NULL),(17,'','',0,1,1,NULL,NULL,NULL,NULL),(18,'','',0,1,1,NULL,NULL,NULL,NULL),(19,'','',0,1,1,NULL,NULL,NULL,NULL),(20,'','',0,1,1,NULL,NULL,NULL,NULL),(22,'','',0,0,0,NULL,NULL,NULL,NULL),(23,'','',0,1,1,NULL,NULL,NULL,NULL),(24,'','',0,1,1,NULL,NULL,NULL,NULL),(25,'','',0,1,1,NULL,NULL,NULL,'2013-09-17 13:45:18'),(26,'Robert','Orzelowski',666777888,1,1,NULL,NULL,NULL,'2013-09-17 14:27:19'),(27,'Marcin','Chmura',0,1,1,NULL,NULL,NULL,'2013-09-17 14:33:14'),(28,'Robert','Błąkała',0,1,1,NULL,NULL,NULL,'2013-09-17 14:39:39'),(29,'Adrian','Jękot',0,1,1,NULL,NULL,NULL,'2013-09-17 14:42:51');
/*!40000 ALTER TABLE `infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(145) NOT NULL,
  `team_id` int(10) unsigned DEFAULT NULL,
  `uploaded` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `compressed` varchar(145) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `address_UNIQUE` (`address`),
  KEY `fk_photos_1` (`team_id`),
  CONSTRAINT `fk_photos_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (36,'upload/gallery/teams/19/1376332042.jpeg',19,'2013-08-12 18:27:22',NULL),(42,'upload/gallery/teams/19/1376491855.jpeg',19,'2013-08-14 14:50:55',NULL),(43,'upload/gallery/teams/19/1376491863.jpeg',19,'2013-08-14 14:51:03',NULL),(48,'upload/gallery/teams/26/1376590320.jpeg',26,'2013-08-15 18:12:00',NULL),(49,'upload/gallery/teams/19/1376916652.png',19,'2013-08-19 12:50:53',NULL),(50,'upload/gallery/teams/19/1377112057.png',19,'2013-08-21 19:07:43',NULL),(51,'upload/gallery/teams/19/1377112073.png',19,'2013-08-21 19:07:54',NULL),(52,'upload/gallery/teams/19/1377112086.jpeg',19,'2013-08-21 19:08:06',NULL),(53,'upload/gallery/teams/19/1377112112.jpeg',19,'2013-08-21 19:08:32',NULL),(54,'upload/gallery/teams/19/1377112125.jpeg',19,'2013-08-21 19:08:46',NULL),(55,'upload/gallery/teams/19/1377112133.jpeg',19,'2013-08-21 19:08:53',NULL),(56,'upload/gallery/teams/19/1377112139.jpeg',19,'2013-08-21 19:09:00',NULL),(57,'upload/gallery/teams/19/1377112149.jpeg',19,'2013-08-21 19:09:09',NULL),(61,'upload/gallery/teams/19/1377112514.png',19,'2013-08-21 19:15:20',NULL),(62,'upload/gallery/teams/19/1377258593.png',19,'2013-08-23 11:49:54',NULL),(63,'upload/gallery/teams/19/1377805060.jpeg',19,'2013-08-29 19:37:40',NULL),(64,'upload/gallery/teams/19/1378285402.jpeg',19,'2013-09-04 09:03:22',NULL),(65,'upload/gallery/teams/19/1378285586.jpeg',19,'2013-09-04 09:06:26',NULL),(66,'upload/gallery/teams/27/1379426115.jpeg',27,'2013-09-17 13:55:16',NULL),(67,'upload/gallery/teams/27/1379426123.jpeg',27,'2013-09-17 13:55:24',NULL),(68,'upload/gallery/teams/27/1379426136.jpeg',27,'2013-09-17 13:55:37',NULL),(69,'upload/gallery/teams/27/1379426145.jpeg',27,'2013-09-17 13:55:46',NULL),(70,'upload/gallery/teams/27/1379426153.jpeg',27,'2013-09-17 13:55:53',NULL),(71,'upload/gallery/teams/27/1379426159.jpeg',27,'2013-09-17 13:55:59',NULL);
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `team_id` int(10) unsigned NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT NULL COMMENT 'If request is accepted set 1, if refused set 0',
  `read` timestamp NULL DEFAULT NULL COMMENT 'time when request was readed',
  `active` tinyint(4) DEFAULT '1' COMMENT 'If request is active set 1, if not active 0',
  `read_recipient` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`,`team_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`,`team_id`),
  KEY `fk_requests_1` (`user_id`),
  KEY `fk_requests_2` (`team_id`),
  CONSTRAINT `fk_requests_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_requests_2` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES (19,18,19,'2013-08-22 20:28:05',0,'2013-08-22 21:05:22',0,'2013-08-29 12:32:14'),(21,23,19,'2013-08-27 13:22:42',NULL,NULL,1,'2013-08-27 13:22:47'),(63,24,19,'2013-09-04 14:19:40',NULL,NULL,1,NULL),(92,22,19,'2013-09-10 19:18:50',1,'2013-09-10 19:19:04',0,'2013-09-10 19:19:42'),(93,27,27,'2013-09-17 14:33:54',1,'2013-09-17 14:35:43',0,NULL),(94,26,27,'2013-09-17 14:35:01',1,'2013-09-17 14:35:45',0,NULL),(95,28,27,'2013-09-17 14:40:03',1,'2013-09-17 14:40:40',0,NULL),(96,29,27,'2013-09-17 14:43:07',1,'2013-09-17 14:44:02',0,NULL),(97,17,19,'2013-09-17 19:34:33',1,'2013-09-17 19:35:04',0,'2013-09-17 19:38:08'),(98,1,19,'2013-09-17 19:37:46',1,'2013-09-17 19:38:11',0,'2013-09-17 20:01:48');
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_users` (
  `role_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `fk_role_users_users1` (`user_id`),
  KEY `fk_role_users_roles1` (`role_id`),
  CONSTRAINT `fk_role_users_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_role_users_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
INSERT INTO `role_users` VALUES (1,1),(3,1),(4,1),(6,1),(8,1),(1,2),(3,2),(1,5),(3,6),(1,7),(1,8),(1,9),(1,14),(1,15),(1,16),(3,16),(6,16),(1,17),(3,17),(7,17),(1,18),(3,18),(1,19),(2,19),(3,19),(6,19),(1,20),(6,20),(1,22),(4,22),(1,23),(3,23),(1,24),(3,24),(1,25),(6,25),(1,26),(7,26),(1,27),(7,27),(1,28),(3,28),(1,29),(3,29);
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.'),(3,'player','Player privileges, access to player options'),(4,'staff','Staff privileges, access to staff options'),(5,'accountant','Accountant privileges, access to accountant options'),(6,'manager','Manager privileges, manage the club options'),(7,'coach','Coach privileges, manage players'),(8,'capitan','Capitan privileges, manage players');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `short_name` varchar(15) NOT NULL,
  `full_name` varchar(65) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `success` varchar(255) DEFAULT NULL,
  `training` varchar(255) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `street_no` varchar(5) DEFAULT NULL,
  `zip_code` varchar(6) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `avatar_id` int(10) unsigned DEFAULT NULL,
  `join_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `short_name_UNIQUE` (`short_name`),
  UNIQUE KEY `full_name_UNIQUE` (`full_name`),
  KEY `fk_teams_1` (`avatar_id`),
  CONSTRAINT `fk_teams_1` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (18,'Ts. Wisła','Towarzystwo Sportowe Wisła Kraków','aa\' a\"aa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Kraków',NULL,NULL),(19,'Fc Barcelonia','Duma KaTaloni','Pierwszy opis klubu!','Mistrzostwo polski kadetów, udział w międzynarodowym turnieju i zajęcie trzeciego miejsca','Każdy piątek i niedziele co tydzień. \nHala sportowa Gryf.','barca@fc.cat',383666123,'Porto Price','62','32-200','Barcelona',17,NULL),(20,'Urlich','Urlich Boxing Promotion',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'Real Madryt','FC Real Madryt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,19,NULL),(27,'Rks Garbana','Robotniczy Klub Sportowy Garbana','Garbarska rezerwa zremisowała dziś bezbramkowo z Kaszowianką, w szeregach której widzowie mogli zobaczyć wychowanków Garbarni Patryka Kosmala i Sławomira Kuśmierczyka. Sprawiedliwie oddać trzeba, że remis jest wynikiem szczęśliwym dla gospodarzy.','Mistrzostwo Polski!','Nabór chłopców z roczników 1998, 99, 2000, 01, 02, 03, 04, 05, 06, 07!','garbana.test@o2.pl',2674002,'Rydlóka','33','30-366','Kraków',20,'2013-09-17 13:48:29'),(28,'Polonia Warsa','KSP Czarne Koszule',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,21,'2013-09-17 19:47:37');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_users`
--

DROP TABLE IF EXISTS `training_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `start` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `finish` timestamp NULL DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_training_users_1` (`user_id`),
  CONSTRAINT `fk_training_users_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_users`
--

LOCK TABLES `training_users` WRITE;
/*!40000 ALTER TABLE `training_users` DISABLE KEYS */;
INSERT INTO `training_users` VALUES (1,1,'2013-09-18 07:13:55','2013-09-18 09:18:11',NULL,NULL),(2,2,'2013-09-18 07:50:17',NULL,NULL,NULL),(3,1,'2013-09-18 08:07:39','2013-09-18 09:18:11','Basen','Pływanie delfinem oraz styl klasyczny'),(4,1,'2013-09-18 12:36:05','2013-09-18 12:54:05','Siłownia','Wyciskanie leżąc, trening bleców i barków'),(6,1,'2013-09-19 18:48:00','0000-00-00 00:00:00','Siłownia Timer','Wyciskanie leżąc, trening bleców i barków'),(7,1,'2013-09-19 18:48:00','0000-00-00 00:00:00','Siłownia Timer','Wyciskanie leżąc, trening bleców i barków'),(8,1,'2013-09-19 20:52:00','0000-00-00 00:00:00','Siłownia Timer','Wyciskanie leżąc, trening bleców i barków'),(9,1,'2013-09-19 21:11:00','2013-09-19 21:11:12','Siłownia OK','Wyciskanie leżąc, trening bleców i barków'),(10,1,'2013-09-19 21:11:00','2013-09-19 21:11:12','Siłownia OK','Wyciskanie leżąc, trening bleców i barków'),(11,1,'2013-09-19 21:16:00','2013-09-19 21:27:07','Siłownia Live','Wyciskanie leżąc, trening bleców i barków'),(12,1,'2013-09-20 09:46:00','2013-09-20 09:46:26','Siłownia Live','Wyciskanie leżąc, trening bleców i barków'),(13,1,'2013-09-20 15:24:00','2013-09-20 16:32:00','Siłownia NEW','Wyciskanie leżąc, trening bleców i barków'),(14,1,'2013-09-20 15:28:00','2013-09-20 16:36:00','Siłownia NEW','Wyciskanie leżąc, trening bleców i barków');
/*!40000 ALTER TABLE `training_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tokens`
--

DROP TABLE IF EXISTS `user_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_tokens_users1` (`user_id`),
  CONSTRAINT `fk_user_tokens_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tokens`
--

LOCK TABLES `user_tokens` WRITE;
/*!40000 ALTER TABLE `user_tokens` DISABLE KEYS */;
INSERT INTO `user_tokens` VALUES (83,19,'e9690e9f42164b3b38e25866f08c493bd1835e32','aeeb6c23b39701eb59418d0108a8d14313f9cd9b',1376573530,1377783130),(112,18,'e9690e9f42164b3b38e25866f08c493bd1835e32','0f517994b0fece1e23c3d32bdeae4c2b9197eb2b',1377162890,1378372490),(147,1,'e9690e9f42164b3b38e25866f08c493bd1835e32','233a74690afc47fb7927ba2f75116d1ad79da2f2',1377799738,1379009338),(180,1,'821021161a1356752940079a1a49065ae76da4e6','8100b040d1d3cf320a88239240be4989619ba71b',1379509977,1380719577),(181,22,'43eed23922a4bff99d7076f69755271510a6d714','3ebb23f7bfe96dc22574d8e8214437914272a476',1379532787,1380742387),(182,1,'e9690e9f42164b3b38e25866f08c493bd1835e32','c5ae4cad5e4d09a043e0a5c327c027db18b6d954',1379660572,1380870172);
/*!40000 ALTER TABLE `user_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `avatar_id` int(10) unsigned DEFAULT NULL,
  `team_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `fk_users_1` (`avatar_id`),
  KEY `fk_users_2` (`team_id`),
  CONSTRAINT `fk_users_1` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_users_2` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'tomek11@gmail.com','tomek11','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',319,1379660572,15,19),(2,'firstUser@fu.pl','firstUser','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',17,1379493652,18,19),(3,'firstUse2r@fu.pl','firstUser2','c1a74bf0c5f4293ec64267e9c059ae27f1706522cb933b410c4a453b0bd3b5c8',0,NULL,15,NULL),(4,'alvarez@gmail.com','alvarez','507522b9b40371cd325e9b822d2dabdfaae0f79e2320c7359cec1029bc1dc07e',0,NULL,15,NULL),(5,'alvarez2@gmail.com','alvarez2','c1a74bf0c5f4293ec64267e9c059ae27f1706522cb933b410c4a453b0bd3b5c8',0,NULL,15,NULL),(6,'beton@blue.pl','beton','c1a74bf0c5f4293ec64267e9c059ae27f1706522cb933b410c4a453b0bd3b5c8',0,NULL,15,NULL),(7,'tz23a@bbb.cc','agatameble','c1a74bf0c5f4293ec64267e9c059ae27f1706522cb933b410c4a453b0bd3b5c8',0,NULL,15,NULL),(8,'aaa@pol.ol','bbbbc','593199015e73b11c11ed8c5bafbea9866e8cf4b6fa04b2195c011d5ec39e0ffe',0,NULL,15,NULL),(9,'11aaa@pol.ola','bacccc','593199015e73b11c11ed8c5bafbea9866e8cf4b6fa04b2195c011d5ec39e0ffe',0,NULL,15,NULL),(14,'tomekGboot@bot.pl','tommekHashBogt','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',0,NULL,15,NULL),(15,'tomek22@gmail.com','tomek22','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',1,1373469982,15,NULL),(16,'testowy@testowy.pl','testowy','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',7,1377092162,15,20),(17,'testowy2@gmail.com','testowy2','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',39,1379446681,15,19),(18,'testowy3@test.pl','testowy3','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',26,1378912111,15,NULL),(19,'testowy4@test.pl','testowy4','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',11,1378757519,15,26),(20,'tomek33@gmail.com','tomek33','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',11,1379446836,15,28),(22,'testowy5@testowy.pl','testowy5','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',18,1379699806,NULL,19),(23,'testowy6@testowy.pl','testowy6','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',2,1377609794,NULL,NULL),(24,'testowy7@test.com','testowy7','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',1,1378304367,NULL,NULL),(25,'testowyGarbarniaManager@gmail.com','AndrzejWelk','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',5,1379429034,NULL,27),(26,'roberto@gmail.com','RobertOrzelows','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',1,1379428494,NULL,27),(27,'MarcinChmur@gmail.com','MarcinC','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',1,1379428425,NULL,27),(28,'RobertBlakkala@gmail.com','RobertB','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',1,1379428793,NULL,27),(29,'adrian@gmail.com','AdrianJ','311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da',1,1379428980,NULL,27);
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

-- Dump completed on 2013-09-21 12:09:17
