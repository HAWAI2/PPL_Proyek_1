-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2015 at 04:45 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppl_proyek_1`
--
CREATE DATABASE IF NOT EXISTS `ppl_proyek_1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ppl_proyek_1`;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `id_taman` int(11) NOT NULL,
  PRIMARY KEY (`id_pengaduan`),
  KEY `id_konten` (`id_taman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `status`, `tanggal_dibuat`, `judul`, `isi`, `id_taman`) VALUES
(1, 'menunggu', '2015-02-11', 'Halo', 'Hola', 1),
(2, 'menunggu', '2015-02-12', 'Banyak banci', 'Ada banyak banci disini', 2),
(9, 'menunggu', '2015-02-12', 'Musiknya kurang indah', 'Banyak yang main suaranya sumbang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `taman`
--

CREATE TABLE IF NOT EXISTS `taman` (
  `id_taman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_taman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `taman`
--

INSERT INTO `taman` (`id_taman`, `nama`, `alamat`) VALUES
(1, 'Taman Jomblo', 'Bawah pasopati'),
(2, 'Taman Musik Centrum', 'Depan SMAN 3 Bandung');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_taman`) REFERENCES `taman` (`id_taman`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
