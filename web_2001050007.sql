-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2022 pada 14.03
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_2001050007`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_2001050007`
--

CREATE TABLE `tabel_2001050007` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `isi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_2001050007`
--

INSERT INTO `tabel_2001050007` (`id`, `fakultas`, `prodi`, `kelas`, `isi`) VALUES
(1, 'Kedokteran', 'Ilmu Kedokteran', 'KPD-1A', 52),
(2, 'Farmasi', 'Farmasi', 'FFA-1A', 46),
(3, 'MIPA', 'Biologi', 'MBI-A1', 63),
(4, 'Teknik', 'Teknik Sipil', 'TTS-A1', 45);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_2001050007`
--
ALTER TABLE `tabel_2001050007`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_2001050007`
--
ALTER TABLE `tabel_2001050007`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
