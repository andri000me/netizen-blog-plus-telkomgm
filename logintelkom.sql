-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2014 at 09:50 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `logintelkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE IF NOT EXISTS `idea` (
  `id_ide` int(8) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `hp` int(13) NOT NULL,
  `lokasi_kerja` varchar(50) NOT NULL,
  `jenis_ide` varchar(20) NOT NULL,
  `isi_ide` varchar(2000) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  UNIQUE KEY `id_ide` (`id_ide`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin'),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
