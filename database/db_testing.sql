-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Agu 2024 pada 14.12
-- Versi server: 8.0.30
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_testing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `submitted_by` varchar(150) NOT NULL,
  `submitted_when` date NOT NULL,
  `site_code` varchar(30) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `uom` varchar(20) NOT NULL,
  `block` int NOT NULL,
  `task` varchar(10) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `mesin` varchar(50) NOT NULL,
  `fuel` int NOT NULL,
  `check_by` varchar(100) DEFAULT NULL,
  `when_check` varchar(100) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_when` varchar(100) DEFAULT NULL,
  `duty` varchar(10) NOT NULL,
  `reason` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id`, `submitted_by`, `submitted_when`, `site_code`, `activity`, `uom`, `block`, `task`, `start`, `end`, `mesin`, `fuel`, `check_by`, `when_check`, `verified_by`, `verified_when`, `duty`, `reason`) VALUES
(1, 'Abdul Rahman', '2024-06-24', 'R002', 'Cincang 4\" Tebal', 'Pokok', 116, 'A1', '07:00:00', '17:00:00', 'LYK01', 200, NULL, NULL, NULL, NULL, 'On Duty', NULL),
(2, 'Abdul Mubin', '2024-06-26', 'R002', 'Cincang 4\" Tebal', 'Pokok', 116, 'A1', '07:00:00', '17:00:00', 'LYK 10', 200, NULL, NULL, NULL, NULL, 'On Duty', NULL),
(3, 'Robin', '2024-06-24', 'R002', 'Cincang 4\" Tebal', 'Pokok', 116, 'A1', '07:00:00', '17:00:00', 'LYK206', 200, NULL, NULL, NULL, NULL, 'On Duty', NULL),
(4, 'Jobe', '2024-06-24', 'R002', 'Cuci Parit Pinggir 12 FT', 'Meter', 116, 'A1', '07:00:00', '17:00:00', 'LYK 11', 200, NULL, NULL, NULL, NULL, 'On Duty', NULL),
(5, 'Boy Sandi', '2024-06-24', 'R002', 'Cincang 4\" Tebal', 'Pokok', 116, 'A1', '07:00:00', '17:00:00', 'LYK 205', 200, NULL, NULL, NULL, NULL, 'On Duty', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
