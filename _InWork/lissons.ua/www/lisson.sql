-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 03:46 PM
-- Server version: 5.5.25
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lisson`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` char(25) NOT NULL,
  `log` varchar(25) NOT NULL,
  `pass` char(25) NOT NULL,
  `email` char(25) NOT NULL,
  `sold` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `log`, `pass`, `email`, `sold`) VALUES
(1, 'sergiy', 'admin', '1323', 'scorp1323@gmail.com', 0),
(2, '1', '2', '3', '4', 0),
(3, '$name', '$login', '$pass', '$email', 0),
(4, '$name', '$login', '$pass', '$email', 0),
(5, 'sergiy', 'admin1', '', 'scorp1323@gmail.com', 0),
(6, 'sergiy', 'admin1', '', 'scorp1323@gmail.com', 0),
(7, 'sergiy', 'admin1', '', 'scorp1323@gmail.com', 0),
(8, 'sergiy', 'admin1', '', 'scorp1323@gmail.com', 0),
(9, 'sergiy', 'admin1', '', 'scorp1323@gmail.com', 0),
(10, 'sergiy', 'admin2', '', 'scorp1323@gmail.com', 1599),
(11, 'sergiy', 'admin3', '1193', 'scorp1323@gmail.com', 1193),
(12, 'sergiy', 'admin4', '1295', 'scorp1323@gmail.com', 1295),
(13, 'sergiy', 'admin5', '51', 'scorp1323@gmail.com', 51),
(14, 'sergiy', 'admin6', '8881628', 'scorp1323@gmail.com', 1628),
(15, '2222', '2222', 'a3478de5f442d0206cb7387c5', '2222', 451);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
