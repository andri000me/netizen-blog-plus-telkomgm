-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2014 at 11:06 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `lombacuy`
--

INSERT INTO `lombacuy` (`id`, `namadepan`, `namaakhir`, `alamat`, `jeniskelamin`, `alamatsitus`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `total`) VALUES
(1, 'rama', 'astadipati', 'toeban cuy okok', 'Laki-laki', 'hahahihi.blogspot.com saja', 100, 100, 100, 87, 98, 0),
(2, 'rama', 'astadinata', 'toeban juga cuy', 'laki', 'owalah.belogsepot.com', 90, 90, 80, 80, 70, 0),
(3, 'roni', 'yahya', 'merakurak', 'laki', 'sesuatu.belogsepot.com', 80, 80, 90, 75, 60, 0),
(4, 'eka ', 'syahwan', 'jenu bos hahahihi', 'Laki-laki', 'eka.belogg.sepotdotcom saja', 80, 80, 79, 90, 80, 0),
(5, 'Fitri', 'Yahya', 'dihatimu sayaang', 'Perempuan', 'cintayahya.belog.sepotdotcom', 80, 80, 80, 75, 80, 0),
(7, 'Kenzie', 'niscala', 'Semanding', 'Laki-laki', 'tes.blogspot.com', 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
