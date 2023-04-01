-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2023 pada 20.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utswebpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` varchar(500) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `priv` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table id admin';

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `pass`, `priv`) VALUES
('davidongky', '909090', 'real');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `IDberkas` int(10) NOT NULL,
  `Nama Ayah` varchar(100) DEFAULT NULL,
  `Nama Ibu` varchar(100) DEFAULT NULL,
  `Ijazah SD` varchar(500) DEFAULT NULL,
  `Akte Lahir` varchar(500) DEFAULT NULL,
  `Status` varchar(50) DEFAULT 'Belom Approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`IDberkas`, `Nama Ayah`, `Nama Ibu`, `Ijazah SD`, `Akte Lahir`, `Status`) VALUES
(2, 'dadadaw', 'asdadsad', 'ijazah/00000055626_Tugas1.pdf', 'akteLahir/00000055626_Tugas2.pdf', 'Belum Approved');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `IDsiswa` int(10) NOT NULL,
  `NISN` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Tempat Lahir` varchar(200) NOT NULL,
  `Tanggal Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `Latitute` double NOT NULL,
  `Longitute` double NOT NULL,
  `Pas Foto` varchar(500) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `berkas` int(10) DEFAULT NULL,
  `Recovery key` varchar(60) NOT NULL,
  `nis` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`IDsiswa`, `NISN`, `Nama`, `Email`, `Tempat Lahir`, `Tanggal Lahir`, `Alamat`, `Latitute`, `Longitute`, `Pas Foto`, `Password`, `Status`, `berkas`, `Recovery key`, `nis`) VALUES
(2, '1231231', 'davidongky', 'davidongky', 'asdasd', '1232-02-23', 'adsasdas', 1232131, 123131, 'pasFoto/lofi_generator (1).png', '$2y$10$pmv4SZzwg2JcE32wa9EX1u7jrtfHO2FLqrIOWp2cSrdWokLgN0ZwK', 'Belum Diterima', 2, '720491', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`IDberkas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`IDsiswa`),
  ADD UNIQUE KEY `Recovery key` (`Recovery key`),
  ADD UNIQUE KEY `NISN` (`NISN`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `berkas` (`berkas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `IDsiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`berkas`) REFERENCES `berkas` (`IDberkas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
