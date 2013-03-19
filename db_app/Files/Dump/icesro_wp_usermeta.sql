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
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (1,1,'first_name',''),(2,1,'last_name',''),(3,1,'nickname','Mora'),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','false'),(10,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(11,1,'wp_user_level','10'),(12,1,'dismissed_wp_pointers','wp330_toolbar,wp330_saving_widgets,wp340_choose_image_from_library,wp340_customize_current_theme_link,wp350_media'),(13,1,'show_welcome_panel','0'),(14,1,'wp_dashboard_quick_press_last_post_id','281'),(15,1,'managenav-menuscolumnshidden','a:2:{i:0;s:11:\"link-target\";i:1;s:3:\"xfn\";}'),(16,1,'metaboxhidden_nav-menus','a:0:{}'),(17,1,'wp_user-settings','editor=html&hidetb=1'),(18,1,'wp_user-settings-time','1359352367'),(19,1,'closedpostboxes_post','a:0:{}'),(20,1,'metaboxhidden_post','a:0:{}'),(21,1,'closedpostboxes_nav-menus','a:0:{}'),(22,1,'nav_menu_recently_edited','2'),(23,1,'aim',''),(24,1,'yim',''),(25,1,'jabber',''),(26,2,'first_name','hgh'),(27,2,'last_name','hghgh'),(28,2,'nickname','koko'),(29,2,'description',''),(30,2,'rich_editing','true'),(31,2,'comment_shortcuts','false'),(32,2,'admin_color','fresh'),(33,2,'use_ssl','0'),(34,2,'show_admin_bar_front','true'),(35,2,'wp_capabilities','a:1:{s:10:\"subscriber\";b:1;}'),(36,2,'wp_user_level','0'),(37,2,'dismissed_wp_pointers','wp330_toolbar,wp330_saving_widgets,wp340_choose_image_from_library,wp340_customize_current_theme_link,wp350_media'),(38,3,'first_name',''),(39,3,'last_name',''),(40,3,'nickname','mora1'),(41,3,'description',''),(42,3,'rich_editing','true'),(43,3,'comment_shortcuts','false'),(44,3,'admin_color','fresh'),(45,3,'use_ssl','0'),(46,3,'show_admin_bar_front','true'),(47,3,'wp_capabilities','a:1:{s:10:\"subscriber\";b:1;}'),(48,3,'wp_user_level','0'),(49,3,'dismissed_wp_pointers','wp330_toolbar,wp330_saving_widgets,wp340_choose_image_from_library,wp340_customize_current_theme_link,wp350_media'),(50,1,'closedpostboxes_settings_page_members-settings','a:0:{}'),(51,1,'metaboxhidden_settings_page_members-settings','a:0:{}'),(52,1,'closedpostboxes_dashboard','a:2:{i:0;s:25:\"dashboard_recent_comments\";i:1;s:24:\"dashboard_incoming_links\";}'),(53,1,'metaboxhidden_dashboard','a:0:{}'),(54,4,'first_name','Style'),(55,4,'last_name','NetCafe'),(56,4,'nickname','siteman'),(57,4,'description',''),(58,4,'rich_editing','true'),(59,4,'comment_shortcuts','false'),(60,4,'admin_color','fresh'),(61,4,'use_ssl','0'),(62,4,'show_admin_bar_front','true'),(63,4,'wp_capabilities','a:1:{s:11:\"sitemanager\";b:1;}'),(64,4,'wp_user_level','0'),(65,4,'dismissed_wp_pointers','wp330_toolbar,wp330_saving_widgets,wp340_choose_image_from_library,wp340_customize_current_theme_link,wp350_media'),(66,1,'meta-box-order_nav-menus','a:1:{s:4:\"side\";s:101:\"nav-menu-theme-locations,add-page,add-custom-links,add-post,add-category,add-post_tag,add-post_format\";}');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-05 14:54:59
