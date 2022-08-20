-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 08:39 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skul_pro1`
--
Create The Database before anything else
-- --------------------------------------------------------

--
-- Table structure for table `export`
--

CREATE TABLE IF NOT EXISTS `export` (
  `f_id` int(10) NOT NULL AUTO_INCREMENT,
  `Export_Date` varchar(234) NOT NULL,
  `Quantity` varchar(123) NOT NULL,
  PRIMARY KEY (`f_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `export`
--

INSERT INTO `export` (`f_id`, `Export_Date`, `Quantity`) VALUES
(1, '21/12/2022', '12');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE IF NOT EXISTS `furniture` (
  `f_id` int(10) NOT NULL AUTO_INCREMENT,
  `funName` varchar(234) NOT NULL,
  `funOwnerName` varchar(123) NOT NULL,
  PRIMARY KEY (`f_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`f_id`, `funName`, `funOwnerName`) VALUES
(1, 'Hennesy', 'Joe');

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE IF NOT EXISTS `import` (
  `f_id` int(10) NOT NULL AUTO_INCREMENT,
  `importDate` varchar(234) NOT NULL,
  `Quantity` varchar(123) NOT NULL,
  PRIMARY KEY (`f_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(234) NOT NULL,
  `password` varchar(123) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `username`, `password`) VALUES
(19, 'admin', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `export`
--
ALTER TABLE `export`
  ADD CONSTRAINT `export_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `furniture` (`f_id`);

--
-- Constraints for table `import`
--
ALTER TABLE `import`
  ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `furniture` (`f_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
