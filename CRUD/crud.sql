-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2024 pada 09.06
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(100) DEFAULT NULL,
  `Nama_Barang` varchar(100) DEFAULT NULL,
  `Kode_Barang` varchar(100) DEFAULT NULL,
  `Harga_Barang` varchar(100) DEFAULT NULL,
  `Stok_Barang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Gambar`, `Nama_Barang`, `Kode_Barang`, `Harga_Barang`, `Stok_Barang`) VALUES
(5, 'hitam.jpg', 'APPLE iPhone 12 (C-VA) 128GB - Black', '0987', '9.690.000', '3'),
(6, 'putih.jpg', 'APPLE iPhone 15 Pro (C-VA) 512GB - White', '	2345', '26.249.000', '1'),
(7, 'blue.jpg', 'APPLE iPhone 13 (C-VA) 128GB - Blue', '5674', '10.249.000', '2'),
(8, 'ROG6.jpeg', 'ASUS ROG phone 6', '6789', '14.000.000', '8'),
(9, 'razer.jpeg', 'Razer phone 2', '3456', '12.000.000', '12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
