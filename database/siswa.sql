-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: 14 Mar 2017 pada 05.06
=======
-- Generation Time: 18 Mar 2017 pada 02.10
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NISN` varchar(50) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `TTL` date NOT NULL,
<<<<<<< HEAD
  `Alamat` varchar(30) NOT NULL,
=======
  `Alamat` varchar(100) NOT NULL,
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
  `Kontak` varchar(20) NOT NULL,
  `Jurusan` varchar(25) NOT NULL,
  `ID_wali_kelas` int(11) NOT NULL,
  `ID_wali_murid` int(11) NOT NULL,
  `Asal_SMP` varchar(30) NOT NULL,
<<<<<<< HEAD
  `Foto` varchar(50) NOT NULL,
=======
  `Foto` varchar(30) NOT NULL,
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NISN`, `Nama`, `TTL`, `Alamat`, `Kontak`, `Jurusan`, `ID_wali_kelas`, `ID_wali_murid`, `Asal_SMP`, `Foto`, `Password`) VALUES
<<<<<<< HEAD
('1122334455', 'Andi Soraya', '1996-01-02', 'Jln.Karaya Agung', '081271286874', 'IPA', 1, 1, 'SMP N 4 Palembang', '', '54321'),
('5544332211', 'Samir Ali', '1996-03-02', 'Jln.Sukabangun 2', '081266574645', 'IPA', 1, 2, 'SMP N 4 Palembang', '', '12345');
=======
('1122334455', 'Andi Soraya', '1996-01-02', 'Jln.Karaya Agung', '081271286874', 'IPA', 1, 1, 'SMP N 4 Palembang', 'almamater.jpg', '54321'),
('123456789', 'Jay Zaelani', '1996-01-02', 'Jln. Kemuning Lrg.Sampah', '0812345678', 'IPA', 0, 0, 'Smp N 4 , Curuk', 'unsri2.jpg', 'Acm1899'),
('24680', 'M.Hakim Amransyah', '1996-01-02', 'JLn. Sukabangun 2 ,No. 9A , Palembang', '081271286874', 'IPA', 0, 0, 'SMP N 4 Palembang', 'almamater.jpg', 'Acmilan1899'),
('5544332211', 'Samir Ali', '1996-03-02', 'Jln.Sukabangun 2', '081266574645', 'IPA', 1, 2, 'SMP N 4 Palembang', 'almamater.jpg', '12345'),
('66778899', 'Diego Suroyo', '1995-04-02', 'Jln. Kembang sakti , lrg.sampahkur , Palembang', '0812345678', 'IPA', 0, 0, 'SMP N 41 Palembang', 'KUCO.JPG', 'Acmilan1899');
>>>>>>> fbe5ba09c61b9539e01886bbf1e2a22a719e92e6

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NISN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
