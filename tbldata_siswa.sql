-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2022 pada 08.35
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftaran_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldata_siswa`
--

CREATE TABLE `tbldata_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `tempat lahir` varchar(100) NOT NULL,
  `warga negara` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `nomor hp` int(120) NOT NULL,
  `asal smp` varchar(120) NOT NULL,
  `nama ayah` varchar(120) NOT NULL,
  `nama ibu` varchar(120) NOT NULL,
  `penghasilan` int(50) NOT NULL,
  `gambar siswa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbldata_siswa`
--
ALTER TABLE `tbldata_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbldata_siswa`
--
ALTER TABLE `tbldata_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
