-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 08, 2021 at 05:39 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crms`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvaldata`
--

DROP TABLE IF EXISTS `approvaldata`;
CREATE TABLE IF NOT EXISTS `approvaldata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_type` enum('Student','H.O.D','Lab Operator','Admin') NOT NULL DEFAULT 'Student',
  `Time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `approvaldata`
--

INSERT INTO `approvaldata` (`id`, `name`, `gender`, `email`, `password`, `address`, `user_type`, `Time_stamp`) VALUES
(10, 'Asad', 'Male', 'studessnt@gmail.com', 'c3Nz', 'sa', 'Student', '2021-04-07 10:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE IF NOT EXISTS `complain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `type` enum('admin','lab') NOT NULL DEFAULT 'admin',
  `room` varchar(15) NOT NULL,
  `roomno` varchar(13) NOT NULL,
  `problem` varchar(70) NOT NULL,
  `description` varchar(200) NOT NULL,
  `Time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `userid`, `type`, `room`, `roomno`, `problem`, `description`, `Time_stamp`) VALUES
(23, 'student@gmail.com', 'admin', 'lobby', 'Floor-3', 'Light Reflection Problem', 'HOgay re ho gaya apna to kam re...', '2021-04-07 09:39:17'),
(20, 'student@gmail.com', '', 'class', '101', 'Computer Not Working ', 'hello', '2021-04-06 17:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

DROP TABLE IF EXISTS `problem`;
CREATE TABLE IF NOT EXISTS `problem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `problem` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `problem`) VALUES
(1, 'Computer Not Working '),
(2, 'Server Not Working'),
(3, 'Mouse Not Working'),
(4, 'Projector Not Working'),
(5, 'Keyboard Not Working'),
(6, 'Fan Not Working'),
(7, 'Light Not working'),
(8, 'Light Reflection Problem'),
(9, 'Benches Broken'),
(10, 'Camera Not working'),
(11, 'Board Broken'),
(12, 'Computer Not Working ');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `roomno` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `roomno`) VALUES
(1, 'class', '101'),
(2, 'class', '102'),
(3, 'class', '103'),
(4, 'class', '104'),
(5, 'class', '105'),
(6, 'class', '106'),
(7, 'lab', 'Lab-1'),
(8, 'lab', 'Lab-2'),
(9, 'lab', 'Lab-3'),
(10, 'lab', 'Lab-4'),
(11, 'auditorium', 'A-101'),
(12, 'lobby', 'Floor-1'),
(13, 'lobby', 'Floor-2'),
(14, 'lobby', 'Floor-3');

-- --------------------------------------------------------

--
-- Table structure for table `solved`
--

DROP TABLE IF EXISTS `solved`;
CREATE TABLE IF NOT EXISTS `solved` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `room` varchar(15) NOT NULL,
  `roomno` varchar(10) NOT NULL,
  `problem` varchar(70) NOT NULL,
  `description` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `solved`
--

INSERT INTO `solved` (`id`, `userid`, `type`, `room`, `roomno`, `problem`, `description`, `time`) VALUES
(18, 'student@gmail.com', 'admin', 'auditorium', 'A-101', 'Fan Not Working', 'asasasas', '2021-04-06 13:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `email` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_type` enum('Student','H.O.D','Lab Operator','Admin') NOT NULL DEFAULT 'Student',
  `Time_stamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `gender`, `email`, `password`, `address`, `user_type`, `Time_stamp`) VALUES
(3, 'Admin', 'Male', 'admin@gmail.com', 'YWRtaW4=', 'Admin', 'Admin', '2021-04-03 11:01:37'),
(4, 'Student', 'Male', 'student@gmail.com', 'c3R1ZGVudA==', 'student', 'Student', '2021-04-03 11:02:46'),
(9, 'MOHAMMED SAQIB', 'Male', 'siddiqui@gmail.com', 'c2lkZGlxdWk=', 'Al-ASBAB PARK ', 'Student', '2021-04-06 17:41:14'),
(5, 'Umair ', 'Male', 'umair@gmail.com', 'dW1haXI=', 'mkjhggvhbj', 'Student', '2021-04-05 08:20:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
