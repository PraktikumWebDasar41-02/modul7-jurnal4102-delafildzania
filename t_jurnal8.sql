-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.06
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal8`
--

CREATE TABLE `t_jurnal8` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tgl` date NOT NULL,
  `jk` enum('laki','perempuan') NOT NULL,
  `prodi` enum('Manajemen_Informatika','Manajemen_Pemasaran','Teknik_Komputer','Teknik_Informatika','Teknik_Telekomunikasi') NOT NULL,
  `fakultas` enum('fit','feb','fkb','fif') NOT NULL,
  `asal` varchar(50) NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal8`
--

INSERT INTO `t_jurnal8` (`nim`, `nama`, `tgl`, `jk`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('6701171052', 'Devi Fildzania', '2018-10-19', 'perempuan', 'Manajemen_Informatika', 'fit', 'Sidoarjo', 'bahagia\r\n			'),
('6701171111', 'halo', '2018-10-19', 'laki', 'Manajemen_Informatika', 'fit', 'bandung', 'ssss\r\n			'),
('6701174444', 'heli', '2018-10-19', 'perempuan', 'Teknik_Komputer', 'fit', 'bandung', 'yolo\r\n			');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_jurnal8`
--
ALTER TABLE `t_jurnal8`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
