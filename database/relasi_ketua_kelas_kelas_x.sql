-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mar 2017 pada 16.09
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_ketua_kelas_kelas_x`
--

CREATE TABLE `relasi_ketua_kelas_kelas_x` (
  `Id_relasi_kk_kelas_x` int(11) NOT NULL,
  `NISN` varchar(50) NOT NULL,
  `Id_kelas_X` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_ketua_kelas_kelas_x`
--

INSERT INTO `relasi_ketua_kelas_kelas_x` (`Id_relasi_kk_kelas_x`, `NISN`, `Id_kelas_X`) VALUES
(1, '1122334455', 1),
(7, '24680', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relasi_ketua_kelas_kelas_x`
--
ALTER TABLE `relasi_ketua_kelas_kelas_x`
  ADD PRIMARY KEY (`Id_relasi_kk_kelas_x`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relasi_ketua_kelas_kelas_x`
--
ALTER TABLE `relasi_ketua_kelas_kelas_x`
  MODIFY `Id_relasi_kk_kelas_x` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
