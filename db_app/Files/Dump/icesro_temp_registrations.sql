CREATE DATABASE  IF NOT EXISTS `icesro` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `icesro`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: icesro
-- ------------------------------------------------------
-- Server version	5.5.28-enterprise-commercial-advanced

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
-- Table structure for table `temp_registrations`
--

DROP TABLE IF EXISTS `temp_registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_full_name` varchar(50) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_acti_token` varchar(50) NOT NULL,
  `user_is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_mail` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_registrations`
--

LOCK TABLES `temp_registrations` WRITE;
/*!40000 ALTER TABLE `temp_registrations` DISABLE KEYS */;
INSERT INTO `temp_registrations` (`id`, `user_full_name`, `user_name`, `user_email`, `user_password`, `user_acti_token`, `user_is_active`) VALUES (13,'MySelf Names','moras','Mymail@MyVendor.Exts','a30f35aec9030a6e6d349c3b2db205d5','68d83fe43a5da183e544e6ee2f4cde7f',0),(18,'magdy abass','mmm','magdy3.abass@gmail.com','d827eb711dc0d40de2429833a9d9f349','d5b6d780ea1ec16a09c5e8dc70ef7395',0),(21,'mmmmm','mmmmmmmm','magdy.abass@gmail.com','8a4ffa74ed5e34e70c67fea81d243a5f','9d1cdfba9b88775930be16ee407c39ae',0),(26,'iiiii','iiii','magdy1e3.abass@gmail.com','2210a2fca76bc0be329770c5b686d048','a8ec69283343ecc23d2360075ea7c673',0);
/*!40000 ALTER TABLE `temp_registrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-05 14:54:52
