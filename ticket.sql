-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2023 pada 08.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travego_`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` text DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `harga` text DEFAULT NULL,
  `no_tlp` text DEFAULT NULL,
  `kelas_penerbangan` enum('economy','premium economy','vip','vvip') DEFAULT NULL,
  `status_pembayaran` enum('belum dibayar','dalam progress','selesai') DEFAULT NULL,
  `tanggal_pergi` date DEFAULT NULL,
  `tanggal_pulang` date DEFAULT NULL,
  `pasenger` text DEFAULT NULL,
  `dari` enum('jakarta','bandung','aceh') NOT NULL,
  `menuju` enum('bali','buol','sulut','kalut','jepang','australia','new zealand') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `username`, `name`, `harga`, `no_tlp`, `kelas_penerbangan`, `status_pembayaran`, `tanggal_pergi`, `tanggal_pulang`, `pasenger`, `dari`, `menuju`) VALUES
('3', '', '', '2.000.000', 'vip', '', '', '2023-03-04', NULL, '', 'jakarta', 'kalut');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
