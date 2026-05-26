-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2026 pada 06.54
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2526_07db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_tjkt`
--

CREATE TABLE `guru_tjkt` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru_tjkt`
--

INSERT INTO `guru_tjkt` (`id`, `nama_guru`, `mapel`) VALUES
(3, 'GEMMA MAHESA,S.Pd', 'DPK'),
(4, 'RAHMAT ZULKIFLI,S.Pd', 'DPK'),
(5, 'ROPIDIN, S.Kom', 'PPJ & PKPJ'),
(6, 'TRIMANS YOGIANA, S.Pd', 'ASJ & KAMJAR'),
(7, 'LILIS DESI KHOLISOH, S.Kom', 'INFORMATIKA'),
(8, 'DESI MAYASARI, S.Kom', 'PKK'),
(9, 'KIKI SANSI M, S.Pd', 'PKK'),
(10, 'INDRA SETIA NUGRAHA, S.T', 'PPJ & PKPJ'),
(11, 'RONI NOOR RONI, S.Kom', 'DPK'),
(12, 'MOH.SOBAR, S.Pd', 'ASJ & KAMJAR'),
(13, 'KIKI MUHAMMAD RIZKI, S.Pd', 'TJKN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_tjkt`
--

CREATE TABLE `siswa_tjkt` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa_tjkt`
--

INSERT INTO `siswa_tjkt` (`id`, `nama_siswa`, `kelas`) VALUES
(2, 'rahma', 'tjkt 1'),
(3, 'valda', 'xi tjkt 1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru_tjkt`
--
ALTER TABLE `guru_tjkt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa_tjkt`
--
ALTER TABLE `siswa_tjkt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru_tjkt`
--
ALTER TABLE `guru_tjkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `siswa_tjkt`
--
ALTER TABLE `siswa_tjkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
