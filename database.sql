-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2022 at 11:32 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'dgrge', 'efefr', 'efrefr'),
(2, 'Harsh', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subname` varchar(100) NOT NULL,
  `subcode` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `sem` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `branch`, `gender`, `phone`, `email`, `subname`, `subcode`, `section`, `sem`, `password`) VALUES
(1, 'harsh', 'cse', 'Male', '5644536', '@gmai.com', 'efvrfd', 'csl103', '', 5, 'ABCD'),
(2, 'harsh', 'cse', 'Male', '5644536', '@gmai.com', 'efvrfd', 'csl103', '', 5, 'ABCD'),
(3, 'harsh', 'cse', 'Male', '5644536', '@gmai.com', 'efvrfd', 'csl103', 'B', 5, 'ABCD'),
(4, 'hars', 'cse', 'Male', '65647565', '@gmail.com', 'cse', 'rgertr', 'A', 5, 'ABCD'),
(5, 'Harsh', 'CSE', 'Male', '9089684375', 'harsh324@gmail.com', 'Operating System', 'CSL203', 'A', 5, 'ABCD');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `sem` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`rollno`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `branch`, `gender`, `phone`, `email`, `rollno`, `section`, `sem`, `password`) VALUES
('rehtg', 'dfbnfgdgsfhdg', 'Male', 'fdgdbngf', 'dfghgf', '', 'A', 5, 'ABCD'),
('Harsh Tripathi', 'CSE', 'Male', '955867946', 'h@gmail.com', 'BT20CSE040', 'A', 5, 'ABCD');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subname` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `subcode` varchar(100) NOT NULL,
  `sem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subname`, `branch`, `subcode`, `sem`) VALUES
(1, 'gkljtgf', 'CSE', 'grktkhmgfn', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `registration_no` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `registration_no`, `password`) VALUES
(1, 'Ram', 'BT20CSE001', '1234'),
(2, 'Harsh Tripathi', '1234', '1234'),
(3, 'Tripathi', '324', '1234'),
(4, 'frw ', 'ere', 'e e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
