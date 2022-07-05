-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2020 at 11:42 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `training`
--
CREATE DATABASE IF NOT EXISTS `training` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `training`;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `con` varchar(500) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `qal` varchar(500) NOT NULL,
  `course` varchar(500) NOT NULL,
  `fees` varchar(500) NOT NULL,
  `paid` varchar(500) NOT NULL,
  `remain` varchar(500) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`rid`, `name`, `sname`, `email`, `con`, `cname`, `qal`, `course`, `fees`, `paid`, `remain`) VALUES
(3, 'Himani', 'Singh Thakur', 'hm@gmail.com', '8569856859', 'Aloysius College Jabalpur', 'BCA', 'Project', '2500', '1000', '1500'),
(5, 'Mansi', 'chouksey', 'mansi@gmail.com', '8546985789', 'Aloysious College JBP', 'BSC', 'Project', '2500', '1000', '1500'),
(7, 'Rocky ', 'Singh', 'rocky@gmail.com', '9856985478', 'GLOBAL College', 'BCA', 'JAVA', '10000', '5000', '5000'),
(8, 'Anoop ', 'Singhania', 'anoop@gmail.com', '9856485748', 'SIET Jabalpur', 'B TECH', 'PHP', '8000', '3000', '5000'),
(9, 'Tommy', 'John', 'tomy@gmail.com', '8811252525', 'SGBM Jabalpur', 'MCA', 'JAVA', '6000', '4000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `tid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `con` varchar(500) NOT NULL,
  `dept` varchar(500) NOT NULL,
  `post` varchar(500) NOT NULL,
  `salary` varchar(500) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `name`, `sname`, `email`, `con`, `dept`, `post`, `salary`) VALUES
(1, 'Vandna', 'Kumari  Nema', 'abcd@gmail.com', '9856985478', 'cs', 'Hod', '15000'),
(2, 'L.N', 'Sahu', 'abcd@gmail.com', '9856985478', 'BCA', 'Asst. Prof.', '25000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
