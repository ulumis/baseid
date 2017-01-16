-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jan 2017 pada 05.31
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baseid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
`id` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `No_Rekening` int(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `saldo` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `email`, `No_Rekening`, `level`, `nama`, `saldo`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin.base@gmail.com', 10101, 'admin', 'admin', 5000),
(3, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member.base@gmail.com', 11111, 'member', 'member', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(5) NOT NULL,
  `No_Rekening` int(25) NOT NULL,
  `Kategori` varchar(15) NOT NULL,
  `Berat` varchar(5) NOT NULL,
  `Nominal` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `No_Rekening`, `Kategori`, `Berat`, `Nominal`) VALUES
(1, 11111, 'Plastik', '1', 10000),
(2, 11111, 'Plastik', '12', 100),
(3, 11111, 'Plastik', '12', 100),
(4, 11111, 'Plastik', '1', 100),
(5, 10101, 'Kaca', '2', 9000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_perhari`
--

CREATE TABLE IF NOT EXISTS `laporan_perhari` (
`id` int(5) NOT NULL,
  `No_Rekening` varchar(20) NOT NULL,
  `Nama` text NOT NULL,
  `Jenis_Sampah` text NOT NULL,
  `Kg` varchar(5) NOT NULL,
  `Total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_bulanan`
--

CREATE TABLE IF NOT EXISTS `rekap_bulanan` (
`id` int(10) NOT NULL,
  `No_Rekening` int(20) NOT NULL,
  `Nama` text NOT NULL,
  `Jenis_Sampah` text NOT NULL,
  `Kg` int(5) NOT NULL,
  `Total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_perhari`
--
ALTER TABLE `laporan_perhari`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekap_bulanan`
--
ALTER TABLE `rekap_bulanan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `laporan_perhari`
--
ALTER TABLE `laporan_perhari`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekap_bulanan`
--
ALTER TABLE `rekap_bulanan`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
