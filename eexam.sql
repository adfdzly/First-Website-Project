-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 02:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `idpengguna` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jantina` varchar(10) NOT NULL,
  `aras` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `password`, `nama`, `jantina`, `aras`) VALUES
('', '', '', '', 'PELAJAR'),
('111111111111', '1111', 'PENTADBIR SISTEM', 'Lelaki', 'ADMIN'),
('111213031234', '1234', 'SITI NORHALIZA BINTI SAMAD', 'PEREMPUAN', 'PELAJAR'),
('123456789012', '1234', 'siti abu kassim', 'LELAKI', 'PELAJAR'),
('222222222222', '2222', 'Shikin', 'PEREMPUAN', 'PELAJAR'),
('333333333333', '3333', 'Hisham', 'LELAKI', 'PELAJAR'),
('444444444444', '4444', 'Alif', 'LELAKI', 'PELAJAR');

-- --------------------------------------------------------

--
-- Table structure for table `perekodan`
--

CREATE TABLE IF NOT EXISTS `perekodan` (
`idperekodan` int(11) NOT NULL,
  `idpengguna` varchar(12) NOT NULL,
  `idtopik` int(10) NOT NULL,
  `skor` varchar(5) NOT NULL,
  `catatan_masa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perekodan`
--

INSERT INTO `perekodan` (`idperekodan`, `idpengguna`, `idtopik`, `skor`, `catatan_masa`) VALUES
(12, '222222222222', 7, '1', '2020-10-20 12:03:22'),
(13, '222222222222', 6, '5', '2020-10-20 12:05:27'),
(14, '333333333333', 6, '3', '2020-10-20 12:07:20'),
(15, '444444444444', 6, '4', '2020-10-20 12:10:59'),
(16, '123456789012', 6, '6', '2020-11-02 13:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE IF NOT EXISTS `pilihan` (
`idpilihan` int(11) NOT NULL,
  `nom_soalan` int(10) NOT NULL,
  `jawapan` varchar(20) NOT NULL,
  `pilihan_jawapan` text NOT NULL,
  `idsoalan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`idpilihan`, `nom_soalan`, `jawapan`, `pilihan_jawapan`, `idsoalan`) VALUES
(1, 1, '0', '0011', 1),
(2, 1, '0', '1100', 1),
(3, 1, '1', '1010', 1),
(4, 1, '0', '1122', 1),
(5, 1, '1', '2', 2),
(6, 1, '0', '1', 2),
(7, 1, '0', '11', 2),
(8, 1, '0', '21', 2),
(13, 3, '0', '9', 4),
(14, 3, '1', '6', 4),
(15, 3, '0', '0', 4),
(16, 3, '0', '1', 4),
(17, 4, '1', '8', 5),
(18, 4, '0', '44', 5),
(19, 4, '0', '1', 5),
(20, 4, '0', '0', 5),
(21, 5, '0', '55', 6),
(22, 5, '0', '0', 6),
(23, 5, '0', '1', 6),
(24, 5, '1', '10', 6),
(25, 1, '0', '2', 7),
(26, 1, '0', '11', 7),
(27, 1, '1', '0', 7),
(28, 1, '0', '1', 7),
(33, 2, '0', '1', 9),
(34, 2, '0', '4', 9),
(35, 2, '1', '5', 9),
(36, 2, '0', '6', 9),
(37, 1, '1', '2', 10),
(38, 1, '0', '8', 10),
(39, 1, '0', '9', 10),
(40, 1, '0', '53', 10),
(41, 2, '0', '3', 11),
(42, 2, '1', '4', 11),
(43, 2, '0', '5', 11),
(44, 2, '0', '6', 11),
(45, 1, '0', '1', 12),
(46, 1, '1', '2', 12),
(47, 1, '0', '3', 12),
(48, 1, '0', '4', 12),
(49, 2, '0', '1', 13),
(50, 2, '0', '2', 13),
(51, 2, '0', '3', 13),
(52, 2, '1', '4', 13),
(53, 3, '0', '5', 14),
(54, 3, '1', '6', 14),
(55, 3, '0', '7', 14),
(56, 3, '0', '8', 14),
(57, 4, '0', '5', 15),
(58, 4, '0', '6', 15),
(59, 4, '0', '7', 15),
(60, 4, '1', '8', 15),
(61, 5, '0', '7', 16),
(62, 5, '0', '8', 16),
(63, 5, '0', '9', 16),
(64, 5, '1', '10', 16),
(69, 6, '1', 'lampu', 18),
(70, 6, '0', 'kipas', 18),
(71, 6, '0', 'bantal', 18),
(72, 6, '0', 'topi', 18),
(73, 7, '0', 'lampu', 19),
(74, 7, '1', 'kipas', 19),
(75, 7, '0', 'bantal', 19),
(76, 7, '0', 'topi', 19);

-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE IF NOT EXISTS `soalan` (
`idsoalan` int(11) NOT NULL,
  `nom_soalan` int(11) NOT NULL,
  `soalan` text NOT NULL,
  `gambarajah` varchar(20) NOT NULL,
  `idtopik` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soalan`
--

INSERT INTO `soalan` (`idsoalan`, `nom_soalan`, `soalan`, `gambarajah`, `idtopik`) VALUES
(12, 1, '1+1', '', 6),
(13, 2, '2+2', '', 6),
(14, 3, '3+3', '', 6),
(15, 4, '4+4', '', 6),
(16, 5, '5+5', '', 6),
(18, 6, 'gambar apa ini?', 'lampu25526.jpg', 6),
(19, 7, 'apa ini?', 'lencana55876.png', 6);

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE IF NOT EXISTS `topik` (
`idtopik` int(11) NOT NULL,
  `topik` varchar(30) NOT NULL,
  `markah` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`idtopik`, `topik`, `markah`) VALUES
(6, 'PENAMBAHAN', 5),
(7, 'PENOLAKAN', 5),
(8, 'PENDARABAN', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `perekodan`
--
ALTER TABLE `perekodan`
 ADD PRIMARY KEY (`idperekodan`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
 ADD PRIMARY KEY (`idpilihan`);

--
-- Indexes for table `soalan`
--
ALTER TABLE `soalan`
 ADD PRIMARY KEY (`idsoalan`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
 ADD PRIMARY KEY (`idtopik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perekodan`
--
ALTER TABLE `perekodan`
MODIFY `idperekodan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
MODIFY `idpilihan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `soalan`
--
ALTER TABLE `soalan`
MODIFY `idsoalan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
MODIFY `idtopik` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
