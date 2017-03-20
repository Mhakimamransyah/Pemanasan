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
-- Struktur dari tabel `kelas_x`
--

CREATE TABLE `kelas_x` (
  `Id_kelas_x` int(11) NOT NULL,
  `Nama_kelas_X` varchar(10) NOT NULL,
  `Wali_kelas` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_x`
--

INSERT INTO `kelas_x` (`Id_kelas_x`, `Nama_kelas_X`, `Wali_kelas`, `Password`, `ruangan`) VALUES
(1, 'X.A', '', 'Indonesia', 'B1'),
(9, 'X.B', '', 'garuda', 'B.5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas_x`
--
ALTER TABLE `kelas_x`
  ADD PRIMARY KEY (`Id_kelas_x`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas_x`
--
ALTER TABLE `kelas_x`
  MODIFY `Id_kelas_x` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
