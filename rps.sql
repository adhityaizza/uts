-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2023 pada 16.43
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
-- Database: `rps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nik`, `username`, `password`) VALUES
(1, '123123', 'tom', 'tom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rps`
--

CREATE TABLE `rps` (
  `id_rps` int(11) NOT NULL,
  `nama_mata_kuliah` varchar(255) DEFAULT NULL,
  `deskripsi_mata_kuliah` text DEFAULT NULL,
  `pertemuan_1` text DEFAULT NULL,
  `pertemuan_2` text DEFAULT NULL,
  `pertemuan_3` text DEFAULT NULL,
  `pertemuan_4` text DEFAULT NULL,
  `pertemuan_5` text DEFAULT NULL,
  `pertemuan_6` text DEFAULT NULL,
  `pertemuan_7` text DEFAULT NULL,
  `pertemuan_8` text DEFAULT NULL,
  `pertemuan_9` text DEFAULT NULL,
  `pertemuan_10` text DEFAULT NULL,
  `pertemuan_11` text DEFAULT NULL,
  `pertemuan_12` text DEFAULT NULL,
  `pertemuan_13` text DEFAULT NULL,
  `pertemuan_14` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rps`
--

INSERT INTO `rps` (`id_rps`, `nama_mata_kuliah`, `deskripsi_mata_kuliah`, `pertemuan_1`, `pertemuan_2`, `pertemuan_3`, `pertemuan_4`, `pertemuan_5`, `pertemuan_6`, `pertemuan_7`, `pertemuan_8`, `pertemuan_9`, `pertemuan_10`, `pertemuan_11`, `pertemuan_12`, `pertemuan_13`, `pertemuan_14`) VALUES
(1, 'Bahasa Indonesia', 'Pembelajaran tentang Bahasa Indonesia yang baik dan benar', 'Kalimat SPOK', 'Penggunaan Bahasa dengan baik dan benar', 'Puisi', 'Pantun', 'Syair', 'Paragraf', 'Antonim Sinonim', 'Diksi', 'Penggunaan Bahasa Indonesia dan Bahasa Gaul', 'Kalimat Baku', 'Kalimat tidak baku', 'Kata Sambung', 'Teks Berita', 'Teks Eksplanasi'),
(4, 'Bahasa Inggris', 'Pelatihan Grammar', 'uoi', 'u', 'oiu', 'oi', 'u', 'oi', 'uoi', 'u', 'oiu', 'oi', 'uo', 'iu', 'oi', 'uo'),
(5, 'Success Skill', 'Mengetahui kemampuan diri', 'oi', 'h', 'oih', 'oi', 'h', 'ioh', 'io', 'h', 'ioh', 'i', 'h', 'oih', 'oi', 'ho'),
(7, 'Kewarganegaraan', 'Berpikir kritis sebagai warga negara Indonesia', 'oiu', 'oi', 'u', 'oi', 'uoi', 'u', 'oi', 'uo', 'iu', 'oi', 'uoi', 'uoi', 'oiu', 'oiu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`id_rps`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rps`
--
ALTER TABLE `rps`
  MODIFY `id_rps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
