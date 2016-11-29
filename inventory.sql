-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Nov 2016 pada 06.06
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `namaBarang` varchar(32) NOT NULL,
  `namaRuangan` varchar(32) NOT NULL,
  `statusBarang` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idBarang`, `namaBarang`, `namaRuangan`, `statusBarang`) VALUES
(6, 'Meja', 'A310', 'Baik'),
(7, 'Meja', 'A310', 'Baik'),
(8, 'Meja', 'A310', 'Baik'),
(9, 'Meja', 'A310', 'Baik'),
(10, 'Meja', 'A310', 'Baik'),
(11, 'Meja', 'A310', 'Baik'),
(12, 'Meja', 'A310', 'Baik'),
(13, 'Meja', 'A310', 'Baik'),
(14, 'Meja', 'A310', 'Baik'),
(15, 'Meja', 'A310', 'Baik'),
(16, 'Meja', 'A310', 'Baik'),
(17, 'Meja', 'A310', 'Baik'),
(18, 'Meja', 'A310', 'Baik'),
(19, 'Meja', 'A310', 'Baik'),
(20, 'Meja', 'A310', 'Baik'),
(21, 'Meja', 'A310', 'Baik'),
(22, 'Meja', 'A310', 'Baik'),
(23, 'Meja', 'A310', 'Baik'),
(24, 'Meja', 'A310', 'Baik'),
(25, 'Meja', 'A310', 'Baik'),
(26, 'Meja', 'A310', 'Baik'),
(28, 'Kursi', 'B210', 'Baik'),
(29, 'Kursi', 'B210', 'Baik'),
(31, 'Kursi', 'B210', 'Baik'),
(32, 'Kursi', 'B210', 'Baik'),
(33, 'Kursi', 'B210', 'Baik'),
(34, 'Kursi', 'B210', 'Baik'),
(35, 'Kursi', 'B210', 'Baik'),
(36, 'Kursi', 'B210', 'Baik'),
(37, 'Spidol', 'B110', 'Baik'),
(38, 'Spidol', 'B110', 'Baik'),
(39, 'LCD', 'A412', 'Baik'),
(40, 'hoho', 'A412', 'Baik'),
(41, 'hoho', 'A412', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `idGedung` int(11) NOT NULL,
  `namaGedung` varchar(32) NOT NULL,
  `statusGedung` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`idGedung`, `namaGedung`, `statusGedung`) VALUES
(2, 'BCD', 'Baik'),
(3, 'FiF', 'Baik'),
(4, 'A', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE `permintaan` (
  `idPermintaan` int(11) NOT NULL,
  `namaBarang` varchar(32) NOT NULL,
  `idRuangan` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `jumlahBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `idRuangan` int(11) NOT NULL,
  `namaRuangan` varchar(32) NOT NULL,
  `namaGedung` varchar(12) NOT NULL,
  `statusRuangan` varchar(32) NOT NULL,
  `namaUser` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`idRuangan`, `namaRuangan`, `namaGedung`, `statusRuangan`, `namaUser`) VALUES
(5, 'A412', 'A', 'Baik', 'FIF'),
(8, 'A110', 'A', 'Baik', 'FIF'),
(9, 'A208', 'A', 'Baik', 'FIF'),
(10, 'A03', 'A', 'Baik', 'FRI'),
(11, 'HOHO', 'BCD', 'Baik', 'FIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `idStatus` int(11) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `namaUser` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `namaUser`, `password`, `role`) VALUES
(1, 'FIF', '1f841f3b1ec2c61594ab6855381e4049', '1'),
(2, 'FTE', '6fdfd4bebe6d5e470f933b504d80d877', '1'),
(3, 'FKB', '33c884bf5fb8d4581d585dd71f033cd3', '1'),
(4, 'FEB', 'fe39e5e822e646acf86873dd4c967e07', '1'),
(5, 'FIT', '12197f0373bd373681e99d73fd509954', '1'),
(6, 'FIK', 'c26512c9c63bc97e3118dbae06cb0b2d', '1'),
(7, 'FRI', '680f07b9eea64858b79681a2003c0011', '1'),
(8, 'UNIVERSITAS', 'a6dc0df7aee80d8abfbf3b7ad9fd2f57', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`idGedung`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`idPermintaan`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`idRuangan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `idGedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `idPermintaan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `idRuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
