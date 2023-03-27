-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 11:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_lmao`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(500) NOT NULL,
  `pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table id admin';

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `IDsiswa` int(10) NOT NULL,
  `IDberkas` int(10) NOT NULL,
  `Nama Ayah` int(100) NOT NULL,
  `Nama Ibu` int(100) NOT NULL,
  `Ijazah SD` longblob NOT NULL,
  `Akte Lahir` longblob NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `IDsiswa` int(10) NOT NULL,
  `NISN` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Tempat Lahir` varchar(200) NOT NULL,
  `Tanggal Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `Latitute` double NOT NULL,
  `Longitute` double NOT NULL,
  `Pas Foto` longblob NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `berkas` int(10) NOT NULL,
  `Recovery key` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`IDberkas`),
  ADD KEY `IDsiswa` (`IDsiswa`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`IDsiswa`),
  ADD UNIQUE KEY `Recovery key` (`Recovery key`),
  ADD UNIQUE KEY `NISN` (`NISN`),
  ADD KEY `berkas` (`berkas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `IDberkas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `IDsiswa` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `berkas_ibfk_1` FOREIGN KEY (`IDsiswa`) REFERENCES `siswa` (`IDsiswa`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`berkas`) REFERENCES `berkas` (`IDberkas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
