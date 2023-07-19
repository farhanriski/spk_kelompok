-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2023 pada 10.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `spk_calon`
--

CREATE TABLE `spk_calon` (
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `angkatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `spk_calon`
--

INSERT INTO `spk_calon` (`nama`, `prodi`, `angkatan`) VALUES
('Farel', 'Tata Boga', '2011'),
('Farhan', 'Sistem Informasi', '2021'),
('Ibet', 'Kedokteran', '2020'),
('Mic', 'Sistem Informasi', '2010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spk_kriteria`
--

CREATE TABLE `spk_kriteria` (
  `no` int(11) NOT NULL,
  `prestasi` float NOT NULL,
  `IPK` float NOT NULL,
  `wawasan` float NOT NULL,
  `talenta` float NOT NULL,
  `tinggi_badan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `spk_kriteria`
--

INSERT INTO `spk_kriteria` (`no`, `prestasi`, `IPK`, `wawasan`, `talenta`, `tinggi_badan`) VALUES
(4, 0.19, 0.19, 0.19, 0.19, 0.25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spk_penilaian`
--

CREATE TABLE `spk_penilaian` (
  `nama` varchar(50) NOT NULL,
  `prestasi` float NOT NULL,
  `IPK` float NOT NULL,
  `wawasan` float NOT NULL,
  `talenta` float NOT NULL,
  `tinggi_badan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `spk_penilaian`
--

INSERT INTO `spk_penilaian` (`nama`, `prestasi`, `IPK`, `wawasan`, `talenta`, `tinggi_badan`) VALUES
('Farel', 3, 3, 4, 3, 1),
('Farhan', 3, 3, 2, 4, 3),
('Ibet', 5, 5, 5, 5, 5),
('Mic', 1, 2, 3, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spk_perankingan`
--

CREATE TABLE `spk_perankingan` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `spk_perankingan`
--

INSERT INTO `spk_perankingan` (`no`, `nama`, `nilai_akhir`) VALUES
(1, 'Farel', 0.557),
(2, 'Farhan', 0.619),
(3, 'Ibet', 0.896),
(4, 'Mic', 0.53);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `spk_calon`
--
ALTER TABLE `spk_calon`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `spk_kriteria`
--
ALTER TABLE `spk_kriteria`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `spk_penilaian`
--
ALTER TABLE `spk_penilaian`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `spk_perankingan`
--
ALTER TABLE `spk_perankingan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `spk_kriteria`
--
ALTER TABLE `spk_kriteria`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `spk_perankingan`
--
ALTER TABLE `spk_perankingan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
