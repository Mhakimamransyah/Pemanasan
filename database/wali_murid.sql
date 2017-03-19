-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Mar 19, 2017 at 11:01 AM
-- Server version: 10.1.13-MariaDB
=======
-- Generation Time: 25 Feb 2017 pada 02.58
-- Versi Server: 10.1.13-MariaDB
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
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
-- Struktur dari tabel `wali_murid`
--

CREATE TABLE `wali_murid` (
  `id_wali_murid` int(11) NOT NULL,
  `nama_wali` varchar(70) NOT NULL,
  `TTL` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
<<<<<<< HEAD
-- Dumping data for table `wali_murid`
--

INSERT INTO `wali_murid` (`id_wali_murid`, `nama_wali`, `TTL`, `alamat`, `telepon`, `password`) VALUES
(1, 'Haris Budi Prasetyo', '5 Februari 1985', 'Jln.Karaya Agung', '08127564746', 11),
(2, 'Ahmad Royhan Jomblo', '5 April 1989', 'Jln.Sukabangun 2', '0812121211212', 33);
=======
-- Dumping data untuk tabel `wali_murid`
--

INSERT INTO `wali_murid` (`id_wali_murid`, `nama_wali`, `alamat`, `telepon`) VALUES
(1, 'Haris Budi Prasetyo', 'Jln.Karaya Agung', '08127564746'),
(2, 'Ahmad Royhan Jomblo', 'Jln.Sukabangun 2', '0812121211212');
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD PRIMARY KEY (`id_wali_murid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wali_murid`
--
ALTER TABLE `wali_murid`
  MODIFY `id_wali_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
