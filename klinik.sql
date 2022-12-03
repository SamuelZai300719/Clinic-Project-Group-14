-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 10:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `atmin`
--

CREATE TABLE `atmin` (
  `id_adm` int(12) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nm_adm` varchar(45) NOT NULL,
  `telp` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atmin`
--

INSERT INTO `atmin` (`id_adm`, `username`, `password`, `email`, `nm_adm`, `telp`) VALUES
(5, 'admin1@admin.com', 'admin1', 'samuelanayaputra.zai@gmail.com', 'Samuel Zai', 2112345678);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dr` int(12) NOT NULL,
  `nm_dr` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tlp` bigint(16) NOT NULL,
  `ket` text NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dr`, `nm_dr`, `email`, `tlp`, `ket`, `foto`) VALUES
(1, 'Wiyarta Wijaya', 'wahyukurniarahman59@gmail.com', 6289601618653, 'Head Doctor of Klinik Kecantikan', 0x3037343664312e706e67),
(2, 'Stiven How', 'wahyukurniarahman59@gmail.com', 6289601618653, 'Medical Executive Committee', 0x3037313164322e706e67),
(3, 'Cindy Liang', 'wahyukurniarahman59@gmail.com', 6289601618653, 'Head Doctor of Klinik Kecantikan', 0x3037323764332e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pas` int(12) NOT NULL,
  `nm_pas` varchar(45) NOT NULL,
  `jk_pas` varchar(10) NOT NULL,
  `almt` varchar(50) NOT NULL,
  `tlp_pas` bigint(16) NOT NULL,
  `keluhan` text NOT NULL,
  `nm_dr` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pas`, `nm_pas`, `jk_pas`, `almt`, `tlp_pas`, `keluhan`, `nm_dr`) VALUES
(12345, 'Reyhan Abadi', 'Netral', 'Jl. Cebok no. 12 Kota padang sidempuan', 6282165434746, 'Muka tua tapi umur muda', 'Wiyarta Wijaya');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(12) NOT NULL,
  `nama_produk` varchar(45) NOT NULL,
  `ket_produk` text NOT NULL,
  `harga` varchar(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `ket_produk`, `harga`, `stok`, `foto`) VALUES
(1, 'Derma Angel Acne Patch Night', 'Produk Wajah', 'Rp 24.000', 100, '0709q (1).jpeg'),
(2, 'Bio Oil Skin Care', 'Produk Kulit', 'Rp 130.000', 100, '0741q (2).jpeg'),
(3, 'La Roche Posay Cicaplast Baume B5 Soothing Re', 'Produk Badan, Wajah, dan Bibir', 'Rp 120.000', 100, '0748p (12).png'),
(4, 'Parasol Gel 20 g', 'Produk Kulit', 'Rp 26.000', 100, '0735q (4).jpeg'),
(5, 'Erha Acneact ACSBP Acne Cleanser Scrub Beta P', 'Produk Wajah', 'Rp 96.000', 100, '0747q (5).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `rmedis`
--

CREATE TABLE `rmedis` (
  `id_rmed` int(12) NOT NULL,
  `tgl` date NOT NULL,
  `nm_pas` varchar(45) NOT NULL,
  `nm_dr` varchar(45) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rmedis`
--

INSERT INTO `rmedis` (`id_rmed`, `tgl`, `nm_pas`, `nm_dr`, `keluhan`, `status`) VALUES
(12345, '2022-11-12', 'Reyhan Abadi', 'Wiyarta Wijaya', 'Muka tua tapi umur muda', 'Belum Di Proses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atmin`
--
ALTER TABLE `atmin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dr`),
  ADD UNIQUE KEY `nm_dr` (`nm_dr`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pas`),
  ADD UNIQUE KEY `nm_dr` (`nm_dr`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rmedis`
--
ALTER TABLE `rmedis`
  ADD PRIMARY KEY (`id_rmed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atmin`
--
ALTER TABLE `atmin`
  MODIFY `id_adm` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dr` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
