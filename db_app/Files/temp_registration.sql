-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2013 at 04:02 PM
-- Server version: 5.1.67
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icesro`
--

-- --------------------------------------------------------

--
-- Table structure for table `temp_registrations`
--

CREATE TABLE IF NOT EXISTS `temp_registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_full_name` varchar(50) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_acti_token` varchar(50) NOT NULL,
  `user_is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`,`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `temp_registrations`
--

INSERT INTO `temp_registrations` (`id`, `user_full_name`, `user_name`, `user_email`, `user_password`, `user_acti_token`, `user_is_active`) VALUES
(1, 'fff', 'cc', 'magdy2.abass@gmail.com', '1aabac6d068eef6a7bad3fdf50a05cc8', '2f27c5bf7ef8156e0230fe0b8f5a0f44', 0),
(2, 'magdy abass', 'm_abass', 'magdy3.abass@gmail.com', 'eb0fbeb8419885b4d75491f6e12f1baf', '022562722a3c8494f45e7aa16260fe7a', 0),
(5, 'magdy abass', 'm_abass2', 'magdy13.abass@gmail.com', '8a4ffa74ed5e34e70c67fea81d243a5f', 'd2923119fc820fc38710a7042fbc399a', 0),
(9, 'magdy abass', 'm_abass2e', 'magdy1e3.abass@gmail.com', '86871b9b1ab33b0834d455c540d82e89', '246d56ae655e55ceb3952b3587231e1a', 0),
(12, 'magdy abass', 'm_abass2we', 'magdy1ew3.abass@gmail.com', 'df483402b9bfeb234717a32c6e86280e', 'fc61d3403d037e9487990663bc74eb22', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
