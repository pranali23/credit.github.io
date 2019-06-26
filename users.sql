-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2019 at 08:27 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `usersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `emai` varchar(255) NOT NULL,
  ` credit` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `emai`, ` credit`) VALUES
(1, 'Ranjit', 'ranjit@mail.com', 500),
(2, 'Kalpesh', 'kalpesh@ymail.com', 500),
(3, 'Prapti', 'prapti1@gmail.com', 500),
(4, 'Avi', 'avi@ymail.com', 500),
(5, 'Rony', 'rony@mail.com', 500),
(6, 'Ruhi', 'ruhi@gmail.com', 500),
(7, 'Ananya', 'ananya@gmail.com', 500),
(8, 'Raju', 'raju@mail.com', 500),
(9, 'Dani', 'dani@ymail.com', 500),
(10, 'manashree', 'manu@yahoo.com', 500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
