-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2023 pada 10.45
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

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
-- Struktur dari tabel `passenger`
--

CREATE TABLE `passenger` (
  `userID` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe_penumpang` enum('dewasa','remaja','anak-anak') NOT NULL,
  `no_tlp` text NOT NULL,
  `title` enum('nyonya','tuan','nona') NOT NULL,
  `TTL` date NOT NULL,
  `no_passport` text NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `no_passport` text DEFAULT NULL,
  `no_tlp` varchar(50) DEFAULT NULL,
  `passenger_type` enum('dewasa','anak-anak','remaja','balita') DEFAULT NULL,
  `title` enum('nyonya','tuan','nona') DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `status_pembayaran` text NOT NULL,
  `tgl_pergi` date NOT NULL,
  `tanggal_pulang` date NOT NULL,
  `email` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_keseluruhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` text DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `harga` int(200) DEFAULT NULL,
  `kelas_penerbangan` enum('economy','premium economy','vip','vvip') DEFAULT NULL,
  `tanggal_pergi` date DEFAULT NULL,
  `waktu_keberangkatan` time DEFAULT NULL,
  `waktu_tiba` time NOT NULL,
  `type_pasenger` enum('dewasa','remaja','anak_anak') DEFAULT NULL,
  `dari` enum('jakarta','bandung','aceh') NOT NULL,
  `menuju` enum('bali','buol','sulut','kalut','jepang','australia','new zealand') NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `name`, `harga`, `kelas_penerbangan`, `tanggal_pergi`, `waktu_keberangkatan`, `waktu_tiba`, `type_pasenger`, `dari`, `menuju`, `stock`) VALUES
('1', 'ticket O-1', 12000000, 'economy', '2023-03-11', '10:00:00', '14:00:00', 'dewasa', 'jakarta', 'new zealand', 12),
('2', 'ticket O-2', 3000, 'economy', '2023-03-10', '10:01:00', '16:01:00', 'dewasa', 'jakarta', 'australia', 12),
('3', 'ticket O-2', 12000, 'premium economy', '2023-03-11', '16:06:00', '18:06:00', 'remaja', 'jakarta', 'australia', 5),
('4', 'ticket O-1', 4000, 'premium economy', '2023-03-18', '00:07:00', '18:07:00', 'anak_anak', 'jakarta', 'sulut', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userID` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `picture` text NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userID`, `username`, `name`, `email`, `password`, `no_tlp`, `alamat`, `picture`, `role`) VALUES
('1001', 'risma wati', 'rismaadm1', 'rismaadm1@gmail.com', '08366666', 'd7b76dc39d55fb35114e2feb513d9ee4', '', '01/09 kota bandung', 'admin'),
('1002', 'siti aeni paujiah', 'aeni_yeodongsaeng', 'aeni@gmail.com', '08344444', '6e60a28384bc05fa5b33cc579d040c56', '', '01/09 kota bandung', 'admin'),
('', 'anisa nurlaery arafah', 'anisa_09', 'anisa@gmail.com', 'b75705d7e35e7014521a46b532236ec3', '08366666', '01/09 kota bandung', '', 'user'),
('', 'risma wati', 'rismauser1', 'risma@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '08366666', '01/09 kota bandung', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
