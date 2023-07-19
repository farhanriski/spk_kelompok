-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2023 pada 15.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw_main`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `spk_calon`
--

CREATE TABLE `spk_calon` (
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `angkatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spk_calon`
--

INSERT INTO `spk_calon` (`nama`, `prodi`, `angkatan`) VALUES
('Ajik', 'Sistem Informasi', '2020'),
('Faizal', 'Sistem Informasi', '2020'),
('Michael', 'Sistem Informasi', '2020'),
('Rika', 'Sistem Informasi', '2020'),
('Wahyu', 'Sistem Informasi', '2020');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spk_kriteria`
--

INSERT INTO `spk_kriteria` (`no`, `prestasi`, `IPK`, `wawasan`, `talenta`, `tinggi_badan`) VALUES
(7, 0.4, 0.3, 0.1, 0.15, 0.05);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spk_penilaian`
--

INSERT INTO `spk_penilaian` (`nama`, `prestasi`, `IPK`, `wawasan`, `talenta`, `tinggi_badan`) VALUES
('Ajik', 1, 4, 5, 1, 1),
('Faizal', 2, 5, 4, 2, 5),
('Michael', 5, 3, 1, 5, 2),
('Rika', 4, 1, 3, 3, 4),
('Wahyu', 3, 2, 2, 4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spk_perankingan`
--

CREATE TABLE `spk_perankingan` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spk_perankingan`
--

INSERT INTO `spk_perankingan` (`no`, `nama`, `nilai_akhir`) VALUES
(1, 'Ajik', 0.46),
(2, 'Faizal', 0.65),
(3, 'Michael', 0.77),
(4, 'Rika', 0.57),
(5, 'Wahyu', 0.55);

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
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `spk_perankingan`
--
ALTER TABLE `spk_perankingan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
