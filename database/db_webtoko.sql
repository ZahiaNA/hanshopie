-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2026 pada 08.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webtoko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `un` varchar(100) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `un`, `pw`) VALUES
(2, 'admin1', 'admin1'),
(3, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bundle`
--

CREATE TABLE `tbl_bundle` (
  `id` int(10) NOT NULL,
  `namaset` varchar(100) NOT NULL,
  `harga` varchar(150) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_bundle`
--

INSERT INTO `tbl_bundle` (`id`, `namaset`, `harga`, `gambar`) VALUES
(3, 'set jas hitam', 'Rp250.000', 'setjas.jpeg'),
(4, 'set pakaian bayi', 'Rp125.000', 'setpakaianbayi.jpeg'),
(5, 'Jaket + Celana', 'Hanya Rp100.000', 'setjaketcelana.jpeg'),
(6, 'set lebaran 2', 'Rp165.000', 'setlebaran2.jpeg'),
(7, 'set lebaran 1', 'Rp150.000', 'setlebaran.jpeg'),
(8, 'set jas abu-abu', 'Rp200.000', 'setjasabu.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(10) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` enum('Jaket','Celana','Baju','Dress','Kemeja') NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `merk`, `jenis`, `harga`, `gambar`) VALUES
(11, 'uniqlo', 'Kemeja', 'Rp35.000', 'uniqlokemeja.jpeg'),
(12, 'adidas', 'Baju', 'Rp75.000', 'bajuadidas.jpeg'),
(13, 'adidas', 'Jaket', 'Rp85.000', 'adidasjaket.jpeg'),
(14, 'nike', 'Celana', 'Rp50.000', 'contohcelana1.jpeg'),
(15, 'crocodile', 'Kemeja', 'Rp75.000', 'kemejacrocodile.jpeg'),
(16, 'cardinal', 'Jaket', 'Rp137.000', 'jaketcardinal.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_bundle`
--
ALTER TABLE `tbl_bundle`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_bundle`
--
ALTER TABLE `tbl_bundle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
