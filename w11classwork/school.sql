-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2016 at 12:53 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `CellPhone` varchar(255) DEFAULT NULL,
  `Major` varchar(255) DEFAULT NULL,
  `GPA` double(2,1) DEFAULT NULL,
  `StartDate` char(10) DEFAULT NULL,
  `StudentId` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`StudentId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`FirstName`, `LastName`, `Email`, `CellPhone`, `Major`, `GPA`, `StartDate`, `StudentId`) VALUES
('John', 'Doe', 'johndoe@smileyface.edu', '408-333-3456', 'CIS', 2.8, '09/22/2004', 1),
('Mary', 'Chin', 'mchin@qmail.com', '650-123-4563', 'Biology', 3.3, '06/22/2003', 2),
('Sadish', 'Pamel', 'sadi@univ_ab.edu', '415-204-1234', 'CIS', 3.9, '06/22/2003', 3),
('Brandon', 'Frison', 'asdklfj@email.com', '435-244-5224', 'Chemistry', 2.3, '07/23/2005', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
