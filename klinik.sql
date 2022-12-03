-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2022 pada 16.47
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

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
-- Struktur dari tabel `atmin`
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
-- Dumping data untuk tabel `atmin`
--

INSERT INTO `atmin` (`id_adm`, `username`, `password`, `email`, `nm_adm`, `telp`) VALUES
(5, 'admin1@admin.com', 'admin1', 'samuelanayaputra.zai@gmail.com', 'Samuel Zai', 2112345678);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
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
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dr`, `nm_dr`, `email`, `tlp`, `ket`, `foto`) VALUES
(101, 'dr. Fanyya Thanyya', 'samuelanayaputra.zai@gmail.com', 62895422494709, 'dokter Umum', 0x30323136494d472d32303230303731362d5741303032312e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
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
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pas`, `nm_pas`, `jk_pas`, `almt`, `tlp_pas`, `keluhan`, `nm_dr`) VALUES
(12345, 'Reyhan Abadi', 'Netral', 'Jl. Cebok no. 12 Kota padang sidempuan', 6282165434746, 'Keseringan berak', 'dr. Fanyya Thanyya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `ket_produk`, `harga`, `stok`, `foto`) VALUES
(10001, 'Obat Supaya Ga Jelek', 'Membantu menghilangkan kejelekan pada wajah buruk rupa anda!', 'Rp 500.000', 100, '1207sertifikat magang samuel.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmedis`
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
-- Dumping data untuk tabel `rmedis`
--

INSERT INTO `rmedis` (`id_rmed`, `tgl`, `nm_pas`, `nm_dr`, `keluhan`, `status`) VALUES
(110, '2006-11-23', 'Samuel Zai', 'dr. Fanyya Thanyya', 'Keseringan berak', 'Sedang Di Proses');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `atmin`
--
ALTER TABLE `atmin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dr`),
  ADD UNIQUE KEY `nm_dr` (`nm_dr`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pas`),
  ADD UNIQUE KEY `nm_dr` (`nm_dr`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `rmedis`
--
ALTER TABLE `rmedis`
  ADD PRIMARY KEY (`id_rmed`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `atmin`
--
ALTER TABLE `atmin`
  MODIFY `id_adm` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dr` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
