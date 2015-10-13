-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2014 at 11:21 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peserta`
--

-- --------------------------------------------------------

--
-- Table structure for table `lombacuy`
--

CREATE TABLE IF NOT EXISTS `lombacuy` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `namadepan` varchar(30) NOT NULL,
  `namaakhir` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamatsitus` varchar(70) NOT NULL,
  `nilai1` int(6) NOT NULL,
  `nilai2` int(6) NOT NULL,
  `nilai3` int(6) NOT NULL,
  `nilai4` int(6) NOT NULL,
  `nilai5` int(6) NOT NULL,
  `total` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lombacuy`
--

INSERT INTO `lombacuy` (`id`, `namadepan`, `namaakhir`, `alamat`, `jeniskelamin`, `alamatsitus`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `total`) VALUES
(1, 'rama', 'astadipati', 'toeban cuy', 'laki', 'hahahihi.blogspot.com', 80, 80, 90, 90, 90, 0),
(2, 'rama', 'astadinata', 'toeban juga cuy', 'laki', 'owalah.belogsepot.com', 90, 90, 80, 80, 70, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
