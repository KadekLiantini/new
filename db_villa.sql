-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2024 pada 05.07
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_villa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `telp` text NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_tipe` text NOT NULL,
  `room_paket` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama`, `email`, `telp`, `adult`, `child`, `check_in`, `check_out`, `room_tipe`, `room_paket`, `pesan`) VALUES
(1, 'Agalia Gi', 'kopikedai991@gmail.com', '081999276351', 1, 1, '2024-02-15', '2024-02-17', 'connecting', 'adjoining', 'fewffw'),
(2, 'Agalia Gi', 'kopikedai991@gmail.com', '081999276351', 1, 2, '2024-02-15', '2024-02-17', 'connecting', 'adjoining', 'fwfefee'),
(3, 'Lian', 'nasigorengspesial33@gmail.com', '081999276351', 2, 0, '2024-02-18', '2024-02-19', 'adjoining', 'connecting', 'test'),
(4, 'Cecilia', 'kopikedai991@gmail.com', '081999276351', 1, 2, '2024-02-21', '2024-02-23', 'adjoining', 'connecting', 'siapkan kamar yang bagus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
