-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mar 2017 pada 16.08
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
-- Struktur dari tabel `relasi_siswa_kelas_x`
--

CREATE TABLE `relasi_siswa_kelas_x` (
  `id_relasi_siswa_kelas_X` int(11) NOT NULL,
  `NISN` varchar(50) NOT NULL,
  `id_kelas_x` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_siswa_kelas_x`
--

INSERT INTO `relasi_siswa_kelas_x` (`id_relasi_siswa_kelas_X`, `NISN`, `id_kelas_x`) VALUES
(5, '1122334455', 1),
(11, '24680', 9),
(15, '5544332211', 1),
(16, '123456789', 9),
(17, '13579', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relasi_siswa_kelas_x`
--
ALTER TABLE `relasi_siswa_kelas_x`
  ADD PRIMARY KEY (`id_relasi_siswa_kelas_X`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relasi_siswa_kelas_x`
--
ALTER TABLE `relasi_siswa_kelas_x`
  MODIFY `id_relasi_siswa_kelas_X` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
