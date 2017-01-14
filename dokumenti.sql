-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2017 at 05:44 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dokumenti`
--
CREATE DATABASE IF NOT EXISTS `dokumenti` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dokumenti`;

-- --------------------------------------------------------

--
-- Table structure for table `dokument`
--

CREATE TABLE IF NOT EXISTS `dokument` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `sadrzaj` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `dokument`
--

INSERT INTO `dokument` (`id`, `ime`, `sadrzaj`) VALUES
(3, 'Neko ime', 'Neki sadrzaj'),
(4, 'novi node', 'novi sadrzaja,,, .... asdsadsa'),
(5, 'asdsad', 'aaaaa'),
(6, 'asdsad', 'aaaaa'),
(7, 'asdsad', 'aaaaa'),
(8, 'asdsad', 'aaaaa'),
(9, 'asdsad', 'aaaaa'),
(10, 'a', 'hasdsahdkjsahc'),
(11, 'aaaaaa', 'adnan'),
(12, 'Neko ime', 'Neki sadrzaj'),
(13, 'novi node', 'novi sadrzaja,,, .... asdsadsa'),
(14, 'asdsad', 'aaaaa'),
(15, 'asdsad', 'aaaaa'),
(16, 'asdsad', 'aaaaa'),
(17, 'asdsad', 'aaaaa'),
(18, 'asdsad', 'aaaaa'),
(19, 'a', 'hasdsahdkjsahc'),
(20, 'aaaaaa', 'adnan'),
(21, 'aaa', 'aaaaaaaad'),
(22, 'Neko ime', 'Neki sadrzaj'),
(23, 'novi node', 'novi sadrzaja,,, .... asdsadsa'),
(24, 'asdsad', 'aaaaa'),
(25, 'asdsad', 'aaaaa'),
(26, 'asdsad', 'aaaaa'),
(27, 'asdsad', 'aaaaa'),
(28, 'asdsad', 'aaaaa'),
(29, 'a', 'hasdsahdkjsahc'),
(30, 'aaaaaa', 'adnan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
