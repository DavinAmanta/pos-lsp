-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jan 2026 pada 10.52
-- Versi server: 8.0.30
-- Versi PHP: 8.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `lsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuks`
--

CREATE TABLE `barang_masuks` (
  `id` bigint UNSIGNED NOT NULL,
  `id_produk` bigint UNSIGNED NOT NULL,
  `jumlah` int NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `harga_beli` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_masuks`
--

INSERT INTO `barang_masuks` (`id`, `id_produk`, `jumlah`, `tanggal_masuk`, `harga_beli`, `created_at`, `updated_at`) VALUES
(1, 4, 50, '2025-12-21', 45000.00, '2025-12-21 05:52:22', '2025-12-21 05:52:22'),
(2, 6, 50, '2025-12-21', 15000.00, '2025-12-21 06:30:54', '2025-12-21 06:30:54'),
(3, 1, 10, '2025-01-01', 12000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(4, 3, 5, '2025-01-02', 15000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(5, 3, 20, '2025-01-03', 8000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(6, 4, 12, '2025-01-04', 22000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(7, 5, 7, '2025-01-05', 17500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(8, 6, 30, '2025-01-06', 6000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(9, 7, 18, '2025-01-07', 9500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(10, 8, 25, '2025-01-08', 11000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(11, 9, 9, '2025-01-09', 14000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(12, 10, 15, '2025-01-10', 20000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(13, 1, 14, '2025-01-11', 12000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(14, 3, 8, '2025-01-12', 15000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(15, 3, 22, '2025-01-13', 8000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(16, 4, 10, '2025-01-14', 22000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(17, 5, 6, '2025-01-15', 17500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(18, 6, 35, '2025-01-16', 6000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(19, 7, 12, '2025-01-17', 9500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(20, 8, 20, '2025-01-18', 11000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(21, 9, 11, '2025-01-19', 14000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(22, 10, 18, '2025-01-20', 20000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(23, 1, 9, '2025-01-21', 12000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(24, 1, 7, '2025-01-22', 15000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(25, 3, 19, '2025-01-23', 8000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(26, 4, 13, '2025-01-24', 22000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(27, 5, 8, '2025-01-25', 17500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(28, 6, 28, '2025-01-26', 6000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(29, 7, 16, '2025-01-27', 9500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(30, 8, 24, '2025-01-28', 11000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(31, 9, 10, '2025-01-29', 14000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(32, 10, 17, '2025-01-30', 20000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(33, 1, 11, '2025-02-01', 12000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(34, 1, 6, '2025-02-02', 15000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(35, 3, 21, '2025-02-03', 8000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(36, 4, 9, '2025-02-04', 22000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(37, 5, 5, '2025-02-05', 17500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(38, 6, 32, '2025-02-06', 6000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(39, 7, 14, '2025-02-07', 9500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(40, 8, 26, '2025-02-08', 11000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(41, 9, 12, '2025-02-09', 14000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(42, 10, 19, '2025-02-10', 20000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(43, 1, 15, '2025-02-11', 12000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(44, 1, 9, '2025-02-12', 15000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(45, 3, 25, '2025-02-13', 8000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(46, 4, 14, '2025-02-14', 22000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(47, 5, 10, '2025-02-15', 17500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(48, 6, 40, '2025-02-16', 6000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(49, 7, 20, '2025-02-17', 9500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(50, 8, 30, '2025-02-18', 11000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(51, 9, 13, '2025-02-19', 14000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(52, 10, 22, '2025-02-20', 20000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(53, 1, 12, '2025-03-01', 12000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(54, 3, 10, '2025-03-02', 15000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(55, 3, 18, '2025-03-03', 8000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(56, 4, 11, '2025-03-04', 22000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(57, 5, 9, '2025-03-05', 17500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(58, 6, 33, '2025-03-06', 6000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(59, 7, 17, '2025-03-07', 9500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(60, 8, 28, '2025-03-08', 11000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(61, 9, 14, '2025-03-09', 14000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(62, 10, 20, '2025-03-10', 20000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(63, 1, 13, '2025-03-11', 12000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(64, 5, 11, '2025-03-12', 15000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(65, 3, 24, '2025-03-13', 8000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(66, 4, 15, '2025-03-14', 22000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(67, 5, 11, '2025-03-15', 17500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(68, 6, 36, '2025-03-16', 6000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(69, 7, 22, '2025-03-17', 9500.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(70, 8, 32, '2025-03-18', 11000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(71, 9, 15, '2025-03-19', 14000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(72, 10, 25, '2025-03-20', 20000.00, '2025-12-21 13:55:59', '2025-12-21 13:55:59'),
(73, 1, 10, '2025-12-21', 15000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(74, 3, 5, '2025-12-21', 22000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(75, 3, 8, '2025-12-21', 18000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(76, 4, 12, '2025-12-21', 25000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(77, 5, 6, '2025-12-21', 30000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(78, 1, 7, '2025-12-21', 15000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(79, 4, 9, '2025-12-21', 22000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(80, 3, 4, '2025-12-21', 18000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(81, 4, 15, '2025-12-21', 25000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(82, 5, 11, '2025-12-21', 30000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(83, 1, 20, '2025-12-21', 15000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(84, 3, 3, '2025-12-21', 22000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(85, 3, 14, '2025-12-21', 18000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(86, 4, 6, '2025-12-21', 25000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(87, 5, 9, '2025-12-21', 30000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(88, 1, 13, '2025-12-21', 15000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(89, 3, 17, '2025-12-21', 22000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(90, 3, 2, '2025-12-21', 18000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(91, 4, 8, '2025-12-21', 25000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48'),
(92, 5, 16, '2025-12-21', 30000.00, '2025-12-29 04:32:48', '2025-12-29 04:32:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksis`
--

CREATE TABLE `detail_transaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `id_transaksi` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL,
  `harga_modal` int NOT NULL,
  `harga_jual` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_transaksis`
--

INSERT INTO `detail_transaksis` (`id`, `id_transaksi`, `id_produk`, `jumlah`, `harga_modal`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 30000, 35000, '2025-10-20 06:54:12', '2025-10-20 06:54:12'),
(2, 1, 3, 3, 2500, 3000, '2025-10-20 06:54:12', '2025-10-20 06:54:12'),
(3, 2, 1, 2, 30000, 35000, '2025-10-20 06:56:48', '2025-10-20 06:56:48'),
(4, 3, 1, 2, 30000, 35000, '2025-10-20 07:11:04', '2025-10-20 07:11:04'),
(5, 3, 3, 1, 2500, 3000, '2025-10-20 07:11:04', '2025-10-20 07:11:04'),
(6, 4, 1, 1, 30000, 35000, '2025-10-29 18:47:37', '2025-10-29 18:47:37'),
(7, 5, 1, 1, 30000, 35000, '2025-11-05 19:26:54', '2025-11-05 19:26:54'),
(8, 6, 1, 4, 30000, 35000, '2025-11-05 21:29:15', '2025-11-05 21:29:15'),
(9, 7, 1, 1, 30000, 35000, '2025-11-08 20:29:57', '2025-11-08 20:29:57'),
(10, 8, 1, 1, 30000, 35000, '2025-11-08 20:29:57', '2025-11-08 20:29:57'),
(11, 9, 1, 1, 30000, 35000, '2025-12-21 04:45:04', '2025-12-21 04:45:04'),
(12, 1, 1, 2, 50000, 75000, NULL, NULL),
(13, 1, 3, 1, 25000, 50000, NULL, NULL),
(14, 2, 1, 3, 50000, 75000, NULL, NULL),
(15, 2, 3, 2, 30000, 60000, NULL, NULL),
(16, 3, 3, 2, 25000, 50000, NULL, NULL),
(17, 3, 4, 1, 20000, 40000, NULL, NULL),
(18, 4, 3, 1, 30000, 60000, NULL, NULL),
(19, 5, 5, 3, 40000, 70000, NULL, NULL),
(20, 6, 1, 1, 50000, 75000, NULL, NULL),
(21, 7, 3, 2, 25000, 50000, NULL, NULL),
(22, 8, 3, 2, 30000, 60000, NULL, NULL),
(23, 9, 4, 2, 20000, 40000, NULL, NULL),
(24, 10, 5, 1, 40000, 70000, NULL, NULL),
(25, 11, 1, 2, 50000, 75000, NULL, NULL),
(26, 12, 3, 3, 25000, 50000, NULL, NULL),
(27, 13, 3, 1, 30000, 60000, NULL, NULL),
(28, 14, 4, 2, 20000, 40000, NULL, NULL),
(29, 15, 5, 2, 40000, 70000, NULL, NULL),
(30, 16, 1, 1, 50000, 75000, NULL, NULL),
(31, 17, 3, 2, 25000, 50000, NULL, NULL),
(32, 18, 3, 2, 30000, 60000, NULL, NULL),
(33, 19, 4, 1, 20000, 40000, NULL, NULL),
(34, 20, 5, 2, 40000, 70000, NULL, NULL),
(35, 21, 1, 2, 50000, 75000, NULL, NULL),
(36, 22, 3, 3, 25000, 50000, NULL, NULL),
(37, 23, 3, 1, 30000, 60000, NULL, NULL),
(38, 24, 4, 2, 20000, 40000, NULL, NULL),
(39, 25, 5, 3, 40000, 70000, NULL, NULL),
(40, 26, 1, 1, 50000, 75000, NULL, NULL),
(41, 27, 3, 2, 25000, 50000, NULL, NULL),
(42, 28, 3, 2, 30000, 60000, NULL, NULL),
(43, 29, 4, 2, 20000, 40000, NULL, NULL),
(44, 30, 5, 1, 40000, 70000, NULL, NULL),
(45, 60, 1, 3, 30000, 35000, '2025-12-28 22:00:03', '2025-12-28 22:00:03'),
(46, 60, 3, 2, 2500, 3000, '2025-12-28 22:00:03', '2025-12-28 22:00:03'),
(47, 60, 5, 1, 5000, 8000, '2025-12-28 22:00:03', '2025-12-28 22:00:03'),
(48, 61, 1, 1, 30000, 35000, '2025-12-28 22:01:54', '2025-12-28 22:01:54'),
(49, 62, 5, 1, 5000, 8000, '2025-12-28 22:03:15', '2025-12-28 22:03:15'),
(50, 63, 7, 1, 7000, 10000, '2025-12-28 22:03:26', '2025-12-28 22:03:26'),
(51, 64, 9, 4, 10000, 15000, '2025-12-28 22:03:52', '2025-12-28 22:03:52'),
(52, 64, 6, 1, 15000, 0, '2025-12-28 22:03:52', '2025-12-28 22:03:52'),
(53, 65, 5, 1, 5000, 8000, '2025-12-28 22:04:01', '2025-12-28 22:04:01'),
(54, 66, 5, 6, 5000, 8000, '2025-12-28 22:04:14', '2025-12-28 22:04:14'),
(55, 67, 5, 1, 5000, 8000, '2025-12-28 22:04:33', '2025-12-28 22:04:33'),
(56, 68, 13, 1, 6000, 9000, '2025-12-28 22:05:24', '2025-12-28 22:05:24'),
(57, 69, 5, 1, 5000, 8000, '2025-12-28 22:05:40', '2025-12-28 22:05:40'),
(58, 70, 5, 1, 5000, 8000, '2025-12-28 22:06:12', '2025-12-28 22:06:12'),
(59, 70, 6, 1, 15000, 0, '2025-12-28 22:06:12', '2025-12-28 22:06:12'),
(60, 70, 9, 1, 10000, 15000, '2025-12-28 22:06:12', '2025-12-28 22:06:12'),
(61, 71, 5, 1, 5000, 8000, '2025-12-28 22:06:21', '2025-12-28 22:06:21'),
(62, 72, 11, 1, 8000, 12000, '2025-12-28 22:06:33', '2025-12-28 22:06:33'),
(63, 73, 5, 1, 5000, 8000, '2025-12-28 22:06:48', '2025-12-28 22:06:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasis`
--

CREATE TABLE `konfigurasis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_sewa` int NOT NULL,
  `gaji_karyawan` int NOT NULL,
  `biaya_lainnya` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konfigurasis`
--

INSERT INTO `konfigurasis` (`id`, `nama_toko`, `biaya_sewa`, `gaji_karyawan`, `biaya_lainnya`, `created_at`, `updated_at`) VALUES
(1, 'Maju Jaya', 1500000, 3000000, 1000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_15_133015_create_produks_table', 2),
(5, '2025_10_16_065952_create_konfigurasis_table', 3),
(6, '2025_10_18_042400_create_transaksis_table', 4),
(7, '2025_10_18_042944_create_detail_transaksis_table', 4),
(8, '2025_12_21_121054_create_barang_masuks_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_modal` int NOT NULL,
  `harga_jual` int NOT NULL,
  `stok` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama`, `kode_produk`, `harga_modal`, `harga_jual`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Pasta Gigi', '1289129182', 30000, 35000, 7, '2025-10-15 06:59:18', '2025-12-28 22:01:54'),
(3, 'Sabun', 'aqeqeqe', 2500, 3000, 94, '2025-10-15 07:04:31', '2025-12-28 22:00:03'),
(4, 'Parfum', 'pfpf1212', 45000, 50000, 50, '2025-12-21 05:48:32', '2025-12-21 05:52:22'),
(5, 'Produk 1', 'PRD001', 5000, 8000, 36, NULL, '2025-12-28 22:06:48'),
(6, 'Produk 2', 'PRD002', 15000, 0, 48, NULL, '2025-12-28 22:06:12'),
(7, 'Produk 3', 'PRD003', 7000, 10000, 29, NULL, '2025-12-28 22:03:26'),
(8, 'Produk 4', 'PRD004', 0, 0, 0, NULL, NULL),
(9, 'Produk 5', 'PRD005', 10000, 15000, 35, NULL, '2025-12-28 22:06:12'),
(10, 'Produk 6', 'PRD006', 0, 15000, 0, NULL, '2025-12-21 07:03:23'),
(11, 'Produk 7', 'PRD007', 8000, 12000, 24, NULL, '2025-12-28 22:06:33'),
(12, 'Produk 8', 'PRD008', 0, 0, 5, NULL, NULL),
(13, 'Produk 9', 'PRD009', 6000, 9000, 59, NULL, '2025-12-28 22:05:24'),
(14, 'Produk 10', 'PRD010', 0, 0, 0, NULL, NULL),
(15, 'Produk 11', 'PRD011', 5500, 8500, 45, NULL, NULL),
(16, 'Produk 12', 'PRD012', 0, 0, 0, NULL, NULL),
(17, 'Produk 13', 'PRD013', 9000, 13000, 35, NULL, NULL),
(18, 'Produk 14', 'PRD014', 0, 0, 0, NULL, NULL),
(19, 'Produk 15', 'PRD015', 12000, 18000, 20, NULL, NULL),
(20, 'Produk 16', 'PRD016', 0, 0, 0, NULL, NULL),
(21, 'Produk 17', 'PRD017', 7500, 11000, 55, NULL, NULL),
(22, 'Produk 18', 'PRD018', 0, 0, 0, NULL, NULL),
(23, 'Produk 19', 'PRD019', 6500, 9500, 70, NULL, NULL),
(24, 'Produk 20', 'PRD020', 0, 0, 0, NULL, NULL),
(25, 'Produk 21', 'PRD021', 5000, 8000, 30, NULL, NULL),
(26, 'Produk 22', 'PRD022', 0, 0, 0, NULL, NULL),
(27, 'Produk 23', 'PRD023', 8500, 12500, 25, NULL, NULL),
(28, 'Produk 24', 'PRD024', 0, 0, 0, NULL, NULL),
(29, 'Produk 25', 'PRD025', 11000, 16000, 40, NULL, NULL),
(30, 'Produk 26', 'PRD026', 0, 0, 0, NULL, NULL),
(31, 'Produk 27', 'PRD027', 7800, 11500, 20, NULL, NULL),
(32, 'Produk 28', 'PRD028', 0, 0, 0, NULL, NULL),
(33, 'Produk 29', 'PRD029', 6700, 9800, 65, NULL, NULL),
(34, 'Produk 30', 'PRD030', 0, 0, 0, NULL, NULL),
(35, 'Produk 31', 'PRD031', 5200, 8200, 33, NULL, NULL),
(36, 'Produk 32', 'PRD032', 0, 0, 0, NULL, NULL),
(37, 'Produk 33', 'PRD033', 9300, 14000, 28, NULL, NULL),
(38, 'Produk 34', 'PRD034', 0, 0, 0, NULL, NULL),
(39, 'Produk 35', 'PRD035', 12500, 18500, 18, NULL, NULL),
(40, 'Produk 36', 'PRD036', 0, 0, 0, NULL, NULL),
(41, 'Produk 37', 'PRD037', 8000, 12000, 22, NULL, NULL),
(42, 'Produk 38', 'PRD038', 0, 0, 0, NULL, NULL),
(43, 'Produk 39', 'PRD039', 6900, 10200, 48, NULL, NULL),
(44, 'Produk 40', 'PRD040', 0, 0, 0, NULL, NULL),
(45, 'Produk 41', 'PRD041', 5400, 8400, 36, NULL, NULL),
(46, 'Produk 42', 'PRD042', 0, 0, 0, NULL, NULL),
(47, 'Produk 43', 'PRD043', 9700, 14500, 19, NULL, NULL),
(48, 'Produk 44', 'PRD044', 0, 0, 0, NULL, NULL),
(49, 'Produk 45', 'PRD045', 11500, 17000, 27, NULL, NULL),
(50, 'Produk 46', 'PRD046', 0, 0, 0, NULL, NULL),
(51, 'Produk 47', 'PRD047', 8200, 12300, 31, NULL, NULL),
(52, 'Produk 48', 'PRD048', 0, 0, 0, NULL, NULL),
(53, 'Produk 49', 'PRD049', 7100, 10500, 52, NULL, NULL),
(54, 'Produk 50', 'PRD050', 0, 0, 0, NULL, NULL),
(55, 'Produk 51', 'PRD051', 5600, 8600, 44, NULL, NULL),
(56, 'Produk 52', 'PRD052', 0, 0, 0, NULL, NULL),
(57, 'Produk 53', 'PRD053', 9900, 15000, 29, NULL, NULL),
(58, 'Produk 54', 'PRD054', 0, 0, 0, NULL, NULL),
(59, 'Produk 55', 'PRD055', 13000, 19500, 16, NULL, NULL),
(60, 'Produk 56', 'PRD056', 0, 0, 0, NULL, NULL),
(61, 'Produk 57', 'PRD057', 8500, 12800, 23, NULL, NULL),
(62, 'Produk 58', 'PRD058', 0, 0, 0, NULL, NULL),
(63, 'Produk 59', 'PRD059', 7300, 10800, 41, NULL, NULL),
(64, 'Produk 60', 'PRD060', 0, 0, 0, NULL, NULL),
(65, 'Produk 61', 'PRD061', 5800, 8800, 38, NULL, NULL),
(66, 'Produk 62', 'PRD062', 0, 0, 0, NULL, NULL),
(67, 'Produk 63', 'PRD063', 10100, 15500, 21, NULL, NULL),
(68, 'Produk 64', 'PRD064', 0, 0, 0, NULL, NULL),
(69, 'Produk 65', 'PRD065', 13500, 20000, 14, NULL, NULL),
(70, 'Produk 66', 'PRD066', 0, 0, 0, NULL, NULL),
(71, 'Produk 67', 'PRD067', 8700, 13000, 26, NULL, NULL),
(72, 'Produk 68', 'PRD068', 0, 0, 0, NULL, NULL),
(73, 'Produk 69', 'PRD069', 7500, 11000, 34, NULL, NULL),
(74, 'Produk 70', 'PRD070', 0, 0, 0, NULL, NULL),
(75, 'Produk 71', 'PRD071', 6000, 9000, 46, NULL, NULL),
(76, 'Produk 72', 'PRD072', 0, 0, 0, NULL, NULL),
(77, 'Produk 73', 'PRD073', 10500, 16000, 17, NULL, NULL),
(78, 'Produk 74', 'PRD074', 0, 0, 0, NULL, NULL),
(79, 'Produk 75', 'PRD075', 14000, 21000, 12, NULL, NULL),
(80, 'Produk 76', 'PRD076', 0, 0, 0, NULL, NULL),
(81, 'Produk 77', 'PRD077', 9000, 13500, 24, NULL, NULL),
(82, 'Produk 78', 'PRD078', 0, 0, 0, NULL, NULL),
(83, 'Produk 79', 'PRD079', 7800, 11500, 39, NULL, NULL),
(84, 'Produk 80', 'PRD080', 0, 0, 0, NULL, NULL),
(85, 'Produk 81', 'PRD081', 6200, 9300, 28, NULL, NULL),
(86, 'Produk 82', 'PRD082', 0, 0, 0, NULL, NULL),
(87, 'Produk 83', 'PRD083', 11000, 16500, 15, NULL, NULL),
(88, 'Produk 84', 'PRD084', 0, 0, 0, NULL, NULL),
(89, 'Produk 85', 'PRD085', 14500, 22000, 10, NULL, NULL),
(90, 'Produk 86', 'PRD086', 0, 0, 0, NULL, NULL),
(91, 'Produk 87', 'PRD087', 9200, 13800, 20, NULL, NULL),
(92, 'Produk 88', 'PRD088', 0, 0, 0, NULL, NULL),
(93, 'Produk 89', 'PRD089', 8000, 12000, 32, NULL, NULL),
(94, 'Produk 90', 'PRD090', 0, 0, 0, NULL, NULL),
(95, 'Produk 91', 'PRD091', 6500, 9700, 27, NULL, NULL),
(96, 'Produk 92', 'PRD092', 0, 0, 0, NULL, NULL),
(97, 'Produk 93', 'PRD093', 11500, 17500, 13, NULL, NULL),
(98, 'Produk 94', 'PRD094', 0, 0, 0, NULL, NULL),
(99, 'Produk 95', 'PRD095', 15000, 23000, 8, NULL, NULL),
(100, 'Produk 96', 'PRD096', 0, 0, 0, NULL, NULL),
(101, 'Produk 97', 'PRD097', 9500, 14200, 18, NULL, NULL),
(102, 'Produk 98', 'PRD098', 0, 0, 0, NULL, NULL),
(103, 'Produk 99', 'PRD099', 8200, 12500, 29, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('UoKrGe0NF1j89DovVGUcMXKNbDhY9IZsHozwrcw4', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieGczQ2hYR1FsSkV0STNPQXJFYllIT1psTVQ5RTQ0eTRxU3k3a1ZiOCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoxNToiaHR0cDovL2xzcC50ZXN0Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sc3AudGVzdC9wcm9kdWsvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIyOiJQSFBERUJVR0JBUl9TVEFDS19EQVRBIjthOjA6e319', 1766985955);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `bayar` int NOT NULL,
  `kembalian` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `kode_transaksi`, `subtotal`, `tanggal`, `bayar`, `kembalian`, `created_at`, `updated_at`, `id_user`) VALUES
(1, 'TRX-20251020015412', 79000, '2025-10-20 13:54:12', 60000, -19000, '2025-10-20 06:54:12', '2025-10-20 06:54:12', 2),
(2, 'TRX-20251020015648', 70000, '2025-10-20 13:56:48', 80000, 10000, '2025-10-20 06:56:48', '2025-10-20 06:56:48', 2),
(3, 'TRX-20251020021104', 73000, '2025-10-20 14:11:04', 73000, 0, '2025-10-20 07:11:04', '2025-10-20 07:11:04', 2),
(4, 'TRX-20251030014737', 35000, '2025-10-30 01:47:37', 50000, 15000, '2025-10-29 18:47:37', '2025-10-29 18:47:37', 2),
(5, 'TRX-20251106022654', 35000, '2025-11-06 02:26:54', 40000, 5000, '2025-11-05 19:26:54', '2025-11-05 19:26:54', 2),
(6, 'TRX-20251106042914', 140000, '2025-11-06 04:29:14', 145000, 5000, '2025-11-05 21:29:14', '2025-11-05 21:29:14', 2),
(7, 'TRX-20251109032957', 35000, '2025-11-09 03:29:57', 40000, 5000, '2025-11-08 20:29:57', '2025-11-08 20:29:57', 2),
(8, 'TRX-20251109032957', 35000, '2025-11-09 03:29:57', 40000, 5000, '2025-11-08 20:29:57', '2025-11-08 20:29:57', 2),
(9, 'TRX-20251221114504', 35000, '2025-12-21 11:45:04', 50000, 15000, '2025-12-21 04:45:04', '2025-12-21 04:45:04', 2),
(10, 'TRX001', 150000, '2025-01-01 10:00:00', 200000, 50000, NULL, NULL, 2),
(11, 'TRX002', 175000, '2025-01-01 10:00:00', 200000, 25000, NULL, NULL, 2),
(12, 'TRX003', 120000, '2025-01-01 10:00:00', 150000, 30000, NULL, NULL, 2),
(13, 'TRX004', 90000, '2025-01-01 10:00:00', 100000, 10000, NULL, NULL, 2),
(14, 'TRX005', 210000, '2025-01-01 10:00:00', 250000, 40000, NULL, NULL, 2),
(15, 'TRX006', 80000, '2025-01-01 10:00:00', 100000, 20000, NULL, NULL, 2),
(16, 'TRX007', 135000, '2025-01-01 10:00:00', 150000, 15000, NULL, NULL, 2),
(17, 'TRX008', 160000, '2025-01-01 10:00:00', 200000, 40000, NULL, NULL, 2),
(18, 'TRX009', 110000, '2025-01-01 10:00:00', 150000, 40000, NULL, NULL, 2),
(19, 'TRX010', 95000, '2025-01-01 10:00:00', 100000, 5000, NULL, NULL, 2),
(20, 'TRX011', 140000, '2025-01-01 10:00:00', 150000, 10000, NULL, NULL, 2),
(21, 'TRX012', 180000, '2025-01-01 10:00:00', 200000, 20000, NULL, NULL, 2),
(22, 'TRX013', 125000, '2025-01-01 10:00:00', 150000, 25000, NULL, NULL, 2),
(23, 'TRX014', 155000, '2025-01-01 10:00:00', 200000, 45000, NULL, NULL, 2),
(24, 'TRX015', 170000, '2025-01-01 10:00:00', 200000, 30000, NULL, NULL, 2),
(25, 'TRX016', 98000, '2025-01-01 10:00:00', 100000, 2000, NULL, NULL, 2),
(26, 'TRX017', 132000, '2025-01-01 10:00:00', 150000, 18000, NULL, NULL, 2),
(27, 'TRX018', 165000, '2025-01-01 10:00:00', 200000, 35000, NULL, NULL, 2),
(28, 'TRX019', 118000, '2025-01-01 10:00:00', 150000, 32000, NULL, NULL, 2),
(29, 'TRX020', 145000, '2025-01-01 10:00:00', 150000, 5000, NULL, NULL, 2),
(30, 'TRX021', 150000, '2025-01-01 10:00:00', 200000, 50000, NULL, NULL, 2),
(31, 'TRX022', 175000, '2025-01-01 10:00:00', 200000, 25000, NULL, NULL, 2),
(32, 'TRX023', 120000, '2025-01-01 10:00:00', 150000, 30000, NULL, NULL, 2),
(33, 'TRX024', 90000, '2025-01-01 10:00:00', 100000, 10000, NULL, NULL, 2),
(34, 'TRX025', 210000, '2025-01-01 10:00:00', 250000, 40000, NULL, NULL, 2),
(35, 'TRX026', 80000, '2025-01-01 10:00:00', 100000, 20000, NULL, NULL, 2),
(36, 'TRX027', 135000, '2025-01-01 10:00:00', 150000, 15000, NULL, NULL, 2),
(37, 'TRX028', 160000, '2025-01-01 10:00:00', 200000, 40000, NULL, NULL, 2),
(38, 'TRX029', 110000, '2025-01-01 10:00:00', 150000, 40000, NULL, NULL, 2),
(39, 'TRX030', 95000, '2025-01-01 10:00:00', 100000, 5000, NULL, NULL, 2),
(40, 'TRX031', 140000, '2025-01-01 10:00:00', 150000, 10000, NULL, NULL, 2),
(41, 'TRX032', 180000, '2025-02-01 12:35:00', 200000, 20000, NULL, NULL, 2),
(42, 'TRX033', 125000, '2025-02-02 12:40:00', 150000, 25000, NULL, NULL, 2),
(43, 'TRX034', 155000, '2025-02-03 12:45:00', 200000, 45000, NULL, NULL, 2),
(44, 'TRX035', 170000, '2025-02-04 12:50:00', 200000, 30000, NULL, NULL, 2),
(45, 'TRX036', 98000, '2025-02-05 12:55:00', 100000, 2000, NULL, NULL, 2),
(46, 'TRX037', 132000, '2025-02-06 13:00:00', 150000, 18000, NULL, NULL, 2),
(47, 'TRX038', 165000, '2025-02-07 13:05:00', 200000, 35000, NULL, NULL, 2),
(48, 'TRX039', 118000, '2025-02-08 13:10:00', 150000, 32000, NULL, NULL, 2),
(49, 'TRX040', 145000, '2025-02-09 13:15:00', 150000, 5000, NULL, NULL, 2),
(50, 'TRX041', 150000, '2025-02-10 13:20:00', 200000, 50000, NULL, NULL, 2),
(51, 'TRX042', 175000, '2025-02-11 13:25:00', 200000, 25000, NULL, NULL, 2),
(52, 'TRX043', 120000, '2025-02-12 13:30:00', 150000, 30000, NULL, NULL, 2),
(53, 'TRX044', 90000, '2025-02-13 13:35:00', 100000, 10000, NULL, NULL, 2),
(54, 'TRX045', 210000, '2025-02-14 13:40:00', 250000, 40000, NULL, NULL, 2),
(55, 'TRX046', 80000, '2025-02-15 13:45:00', 100000, 20000, NULL, NULL, 2),
(56, 'TRX047', 135000, '2025-02-16 13:50:00', 150000, 15000, NULL, NULL, 2),
(57, 'TRX048', 160000, '2025-02-17 13:55:00', 200000, 40000, NULL, NULL, 2),
(58, 'TRX049', 110000, '2025-02-18 14:00:00', 150000, 40000, NULL, NULL, 2),
(59, 'TRX050', 95000, '2025-02-19 14:05:00', 100000, 5000, NULL, NULL, 2),
(60, 'TRX-20251229050003', 119000, '2025-12-29 05:00:03', 120000, 1000, '2025-12-28 22:00:03', '2025-12-28 22:00:03', 2),
(61, 'TRX-20251229050154', 35000, '2025-12-29 05:01:54', 50000, 15000, '2025-12-28 22:01:54', '2025-12-28 22:01:54', 2),
(62, 'TRX-20251229050315', 8000, '2025-12-29 05:03:15', 10000, 2000, '2025-12-28 22:03:15', '2025-12-28 22:03:15', 2),
(63, 'TRX-20251229050326', 10000, '2025-12-29 05:03:26', 20000, 10000, '2025-12-28 22:03:26', '2025-12-28 22:03:26', 2),
(64, 'TRX-20251229050352', 60000, '2025-12-29 05:03:52', 70000, 10000, '2025-12-28 22:03:52', '2025-12-28 22:03:52', 2),
(65, 'TRX-20251229050401', 8000, '2025-12-29 05:04:01', 10000, 2000, '2025-12-28 22:04:01', '2025-12-28 22:04:01', 2),
(66, 'TRX-20251229050414', 48000, '2025-12-29 05:04:14', 50000, 2000, '2025-12-28 22:04:14', '2025-12-28 22:04:14', 2),
(67, 'TRX-20251229050433', 8000, '2025-12-29 05:04:33', 10000, 2000, '2025-12-28 22:04:33', '2025-12-28 22:04:33', 2),
(68, 'TRX-20251229050524', 9000, '2025-12-29 05:05:24', 10000, 1000, '2025-12-28 22:05:24', '2025-12-28 22:05:24', 2),
(69, 'TRX-20251229050540', 8000, '2025-12-29 05:05:40', 10000, 2000, '2025-12-28 22:05:40', '2025-12-28 22:05:40', 2),
(70, 'TRX-20251229050612', 23000, '2025-12-29 05:06:12', 30000, 7000, '2025-12-28 22:06:12', '2025-12-28 22:06:12', 2),
(71, 'TRX-20251229050621', 8000, '2025-12-29 05:06:21', 10000, 2000, '2025-12-28 22:06:21', '2025-12-28 22:06:21', 2),
(72, 'TRX-20251229050633', 12000, '2025-12-29 05:06:33', 15000, 3000, '2025-12-28 22:06:33', '2025-12-28 22:06:33', 2),
(73, 'TRX-20251229050648', 8000, '2025-12-29 05:06:48', 10000, 2000, '2025-12-28 22:06:48', '2025-12-28 22:06:48', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','manajer','kasir') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', '$2y$12$Hf152PZYP059nggBvb0IA.lLL02NL0.4GL3dqYFHnFkIprt82s8Ua', 'admin', NULL, '2025-10-14 07:45:19', '2025-10-14 07:45:19'),
(3, 'kasir', 'kasir', '$2y$12$Ecxpxkkv3NC0WJjYYsve2eaeAv1Pffq3Zgt.mllG0JKMYBQqtqGG2', 'kasir', NULL, '2025-10-20 07:23:45', '2025-10-20 07:23:45'),
(4, 'manajer', 'manajer', '$2y$12$DWpIDO1OZrCHwKyz7N0TtOOD83oG9cNvxHYpkJiQ3tWBjbbs1rGl.', 'manajer', NULL, '2025-10-20 07:24:01', '2025-10-20 07:24:01'),
(5, 'User 1', 'user1', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(6, 'User 2', 'user2', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(7, 'User 3', 'user3', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(8, 'User 4', 'user4', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(9, 'User 5', 'user5', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(10, 'User 6', 'user6', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(11, 'User 7', 'user7', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(12, 'User 8', 'user8', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(13, 'User 9', 'user9', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(14, 'User 10', 'user10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(15, 'User 11', 'user11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(16, 'User 12', 'user12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(17, 'User 13', 'user13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(18, 'User 14', 'user14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(19, 'User 15', 'user15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(20, 'User 16', 'user16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(21, 'User 17', 'user17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(22, 'User 18', 'user18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(23, 'User 19', 'user19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(24, 'User 20', 'user20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:06:58', '2025-12-21 12:06:58'),
(25, 'User 21', 'user21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(26, 'User 22', 'user22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(27, 'User 23', 'user23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(28, 'User 24', 'user24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(29, 'User 25', 'user25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(30, 'User 26', 'user26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(31, 'User 27', 'user27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(32, 'User 28', 'user28', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(33, 'User 29', 'user29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(34, 'User 30', 'user30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(35, 'User 31', 'user31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(36, 'User 32', 'user32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(37, 'User 33', 'user33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(38, 'User 34', 'user34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(39, 'User 35', 'user35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(40, 'User 36', 'user36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(41, 'User 37', 'user37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(42, 'User 38', 'user38', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(43, 'User 39', 'user39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(44, 'User 40', 'user40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(45, 'User 41', 'user41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(46, 'User 42', 'user42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(47, 'User 43', 'user43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(48, 'User 44', 'user44', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(49, 'User 45', 'user45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(50, 'User 46', 'user46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(51, 'User 47', 'user47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(52, 'User 48', 'user48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(53, 'User 49', 'user49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(54, 'User 50', 'user50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(55, 'User 51', 'user51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(56, 'User 52', 'user52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(57, 'User 53', 'user53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(58, 'User 54', 'user54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(59, 'User 55', 'user55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(60, 'User 56', 'user56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(61, 'User 57', 'user57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(62, 'User 58', 'user58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(63, 'User 59', 'user59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(64, 'User 60', 'user60', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(65, 'User 61', 'user61', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(66, 'User 62', 'user62', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(67, 'User 63', 'user63', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(68, 'User 64', 'user64', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(69, 'User 65', 'user65', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(70, 'User 66', 'user66', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(71, 'User 67', 'user67', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(72, 'User 68', 'user68', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(73, 'User 69', 'user69', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(74, 'User 70', 'user70', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(75, 'User 71', 'user71', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(76, 'User 72', 'user72', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(77, 'User 73', 'user73', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(78, 'User 74', 'user74', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(79, 'User 75', 'user75', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(80, 'User 76', 'user76', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(81, 'User 77', 'user77', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(82, 'User 78', 'user78', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(83, 'User 79', 'user79', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(84, 'User 80', 'user80', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(85, 'User 81', 'user81', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(86, 'User 82', 'user82', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(87, 'User 83', 'user83', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(88, 'User 84', 'user84', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(89, 'User 85', 'user85', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(90, 'User 86', 'user86', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(91, 'User 87', 'user87', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(92, 'User 88', 'user88', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(93, 'User 89', 'user89', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(94, 'User 90', 'user90', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(95, 'User 91', 'user91', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(96, 'User 92', 'user92', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(97, 'User 93', 'user93', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(98, 'User 94', 'user94', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(99, 'User 95', 'user95', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(100, 'User 96', 'user96', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(101, 'User 97', 'user97', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(102, 'User 98', 'user98', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'manajer', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(103, 'User 99', 'user99', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kasir', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(104, 'User 100', 'user100', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2025-12-21 12:08:21', '2025-12-21 12:08:21'),
(105, 'admin123', 'admin123', '$2y$12$EPoc7KohjD1ZtqAa5njJM.BFUF2JblT/mjE9nFXJAyaLCbQuhuT2m', 'admin', NULL, '2025-12-21 05:09:32', '2025-12-21 05:09:32');

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `barang_masuks`
--
ALTER TABLE `barang_masuks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfigurasis`
--
ALTER TABLE `konfigurasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang_masuks`
--
ALTER TABLE `barang_masuks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konfigurasis`
--
ALTER TABLE `konfigurasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
