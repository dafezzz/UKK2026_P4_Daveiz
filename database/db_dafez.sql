-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2026 at 10:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dafez`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` bigint DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `activity`, `action`, `model`, `model_id`, `description`, `ip_address`, `method`, `url`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 9, 'Peminjaman Buku Biar Kaya disetujui sampai 2026-04-22', NULL, NULL, NULL, NULL, '2026-04-15 09:19:33', '2026-04-20 07:43:00'),
(2, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:50', '2026-04-20 07:43:00'),
(3, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:51', '2026-04-20 07:43:00'),
(4, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:51', '2026-04-20 07:43:00'),
(5, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:52', '2026-04-20 07:43:00'),
(6, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:52', '2026-04-20 07:43:00'),
(7, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:53', '2026-04-20 07:43:00'),
(8, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:53', '2026-04-20 07:43:00'),
(9, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:54', '2026-04-20 07:43:00'),
(10, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:57', '2026-04-20 07:43:00'),
(11, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:57', '2026-04-20 07:43:00'),
(12, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:58', '2026-04-20 07:43:00'),
(13, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:58', '2026-04-20 07:43:00'),
(14, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:59', '2026-04-20 07:43:00'),
(15, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:20:59', '2026-04-20 07:43:00'),
(16, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:21:00', '2026-04-20 07:43:00'),
(17, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:21:01', '2026-04-20 07:43:00'),
(18, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:21:03', '2026-04-20 07:43:00'),
(19, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, NULL, NULL, NULL, '2026-04-15 09:21:04', '2026-04-20 07:43:00'),
(20, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 10, 'Peminjaman Buku Biar Kaya disetujui sampai 2026-04-23', NULL, NULL, NULL, NULL, '2026-04-15 17:20:23', '2026-04-20 07:43:00'),
(21, 10, 'denda_recorded', 'denda_recorded', 'Denda', 10, 'Denda Rp 34,893 untuk keterlambatan 6.9786974663425925 hari', NULL, NULL, NULL, NULL, '2026-04-15 17:30:42', '2026-04-20 07:43:00'),
(22, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 10, 'Pengembalian Buku Biar Kaya selesai', NULL, NULL, NULL, NULL, '2026-04-15 17:30:42', '2026-04-20 07:43:00'),
(23, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 11, 'Peminjaman Buku Biar Kaya disetujui sampai 2026-04-23', NULL, NULL, NULL, NULL, '2026-04-15 17:31:30', '2026-04-20 07:43:00'),
(24, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 12, 'Peminjaman Buku Biar Kaya disetujui sampai 2026-04-23', NULL, NULL, NULL, NULL, '2026-04-15 17:58:37', '2026-04-20 07:43:00'),
(25, 10, 'denda_recorded', 'denda_recorded', 'Denda', 11, 'Denda Rp 34,796 untuk keterlambatan 6.959253443275463 hari', NULL, NULL, NULL, NULL, '2026-04-15 17:58:42', '2026-04-20 07:43:00'),
(26, 10, 'pengembalian_completed', 'pengembalian_completed', 'Peminjaman', 11, 'Pengembalian Buku Biar Kaya selesai', NULL, NULL, NULL, NULL, '2026-04-15 17:58:42', '2026-04-20 07:43:00'),
(27, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 13, 'Disetujui sampai 2026-04-23 01:20:29', NULL, NULL, NULL, NULL, '2026-04-15 18:20:29', '2026-04-20 07:43:00'),
(28, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 14, 'Disetujui sampai 2026-04-23 01:24:38', NULL, NULL, NULL, NULL, '2026-04-15 18:24:38', '2026-04-20 07:43:00'),
(29, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 15, 'Disetujui sampai 2026-04-23 01:32:14', NULL, NULL, NULL, NULL, '2026-04-15 18:32:14', '2026-04-20 07:43:00'),
(30, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 16, 'Disetujui sampai 2026-04-23 01:35:04', NULL, NULL, NULL, NULL, '2026-04-15 18:35:04', '2026-04-20 07:43:00'),
(31, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 17, 'Disetujui sampai 2026-04-23 01:52:52', NULL, NULL, NULL, NULL, '2026-04-15 18:52:52', '2026-04-20 07:43:00'),
(32, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 18, 'Disetujui sampai 2026-04-23 01:55:13', NULL, NULL, NULL, NULL, '2026-04-15 18:55:13', '2026-04-20 07:43:00'),
(33, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 19, 'Disetujui sampai 2026-04-23 02:02:27', NULL, NULL, NULL, NULL, '2026-04-15 19:02:27', '2026-04-20 07:43:00'),
(34, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 20, 'Disetujui sampai 2026-04-23 02:07:12', NULL, NULL, NULL, NULL, '2026-04-15 19:07:12', '2026-04-20 07:43:00'),
(35, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 21, 'Disetujui sampai 2026-04-23 02:07:47', NULL, NULL, NULL, NULL, '2026-04-15 19:07:47', '2026-04-20 07:43:00'),
(36, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 22, 'Disetujui sampai 2026-04-23 02:14:44', NULL, NULL, NULL, NULL, '2026-04-15 19:14:44', '2026-04-20 07:43:00'),
(37, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 23, 'Disetujui sampai 2026-04-23 02:42:46', NULL, NULL, NULL, NULL, '2026-04-15 19:42:46', '2026-04-20 07:43:00'),
(38, 10, 'peminjaman_approved', 'peminjaman_approved', 'Peminjaman', 24, 'Disetujui sampai 2026-04-23 07:11:59', NULL, NULL, NULL, NULL, '2026-04-16 00:12:00', '2026-04-20 07:43:00'),
(39, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:43:23', '2026-04-20 07:43:23'),
(40, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:43:25', '2026-04-20 07:43:25'),
(41, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:43:26', '2026-04-20 07:43:26'),
(42, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:43:37', '2026-04-20 07:43:37'),
(43, NULL, 'view', NULL, 'admin', NULL, 'GET admin', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/admin', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:43:58', '2026-04-20 07:43:58'),
(44, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:44:01', '2026-04-20 07:44:01'),
(45, NULL, 'view', NULL, 'kelas', NULL, 'GET kelas', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/kelas', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:44:09', '2026-04-20 07:44:09'),
(46, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:44:13', '2026-04-20 07:44:13'),
(47, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:46:29', '2026-04-20 07:46:29'),
(48, NULL, 'view', NULL, 'kelas', NULL, 'GET kelas', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/kelas', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:46:38', '2026-04-20 07:46:38'),
(49, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:46:42', '2026-04-20 07:46:42'),
(50, NULL, 'view', NULL, 'denda-semua', NULL, 'GET denda-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/denda-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:46:52', '2026-04-20 07:46:52'),
(51, NULL, 'view', NULL, 'buku', NULL, 'GET buku', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/buku', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:47:02', '2026-04-20 07:47:02'),
(52, NULL, 'view', NULL, 'buku', NULL, 'GET buku', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/buku', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:48:58', '2026-04-20 07:48:58'),
(53, NULL, 'view', NULL, 'penerbit', NULL, 'GET penerbit', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/penerbit', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:11', '2026-04-20 07:49:11'),
(54, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:22', '2026-04-20 07:49:22'),
(55, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:22', '2026-04-20 07:49:22'),
(56, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:23', '2026-04-20 07:49:23'),
(57, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:34', '2026-04-20 07:49:34'),
(58, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:34', '2026-04-20 07:49:34'),
(59, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:35', '2026-04-20 07:49:35'),
(60, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:45', '2026-04-20 07:49:45'),
(61, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:45', '2026-04-20 07:49:45'),
(62, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:45', '2026-04-20 07:49:45'),
(63, 10, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:51', '2026-04-20 07:49:51'),
(64, 10, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:51', '2026-04-20 07:49:51'),
(65, 10, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:49:52', '2026-04-20 07:49:52'),
(66, 10, 'view', NULL, 'riwayat-saya', NULL, 'GET riwayat-saya', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-saya', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:50:28', '2026-04-20 07:50:28'),
(67, 10, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:50:40', '2026-04-20 07:50:40'),
(68, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:50:40', '2026-04-20 07:50:40'),
(69, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:50:41', '2026-04-20 07:50:41'),
(70, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:50:47', '2026-04-20 07:50:47'),
(71, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:50:47', '2026-04-20 07:50:47'),
(72, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 07:50:48', '2026-04-20 07:50:48'),
(73, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:01:51', '2026-04-20 08:01:51'),
(74, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:02:01', '2026-04-20 08:02:01'),
(75, NULL, 'view', NULL, 'denda-semua', NULL, 'GET denda-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/denda-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:02:06', '2026-04-20 08:02:06'),
(76, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:02:26', '2026-04-20 08:02:26'),
(77, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:21', '2026-04-20 08:03:21'),
(78, NULL, 'view', NULL, 'denda-semua', NULL, 'GET denda-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/denda-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:23', '2026-04-20 08:03:23'),
(79, NULL, 'view', NULL, 'approval', NULL, 'GET approval', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/approval', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:27', '2026-04-20 08:03:27'),
(80, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:34', '2026-04-20 08:03:34'),
(81, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:34', '2026-04-20 08:03:34'),
(82, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:34', '2026-04-20 08:03:34'),
(83, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:38', '2026-04-20 08:03:38'),
(84, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:39', '2026-04-20 08:03:39'),
(85, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:45', '2026-04-20 08:03:45'),
(86, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:45', '2026-04-20 08:03:45'),
(87, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:46', '2026-04-20 08:03:46'),
(88, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:56', '2026-04-20 08:03:56'),
(89, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:56', '2026-04-20 08:03:56'),
(90, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:03:57', '2026-04-20 08:03:57'),
(91, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:04:00', '2026-04-20 08:04:00'),
(92, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:04:01', '2026-04-20 08:04:01'),
(93, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:04:05', '2026-04-20 08:04:05'),
(94, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:04:05', '2026-04-20 08:04:05'),
(95, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:04:12', '2026-04-20 08:04:12'),
(96, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:04:12', '2026-04-20 08:04:12'),
(97, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:04:13', '2026-04-20 08:04:13'),
(98, NULL, 'view', NULL, 'denda-semua', NULL, 'GET denda-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/denda-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:04:22', '2026-04-20 08:04:22'),
(99, NULL, 'view', NULL, 'denda-semua', NULL, 'GET denda-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/denda-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:06:49', '2026-04-20 08:06:49'),
(100, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:06:53', '2026-04-20 08:06:53'),
(101, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:06:56', '2026-04-20 08:06:56'),
(102, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:07:07', '2026-04-20 08:07:07'),
(103, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '2026-04-20 08:07:44', '2026-04-20 08:07:44'),
(104, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '2026-04-20 08:08:02', '2026-04-20 08:08:02'),
(105, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '2026-04-20 08:08:02', '2026-04-20 08:08:02'),
(106, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '2026-04-20 08:08:02', '2026-04-20 08:08:02'),
(107, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '2026-04-20 08:08:09', '2026-04-20 08:08:09'),
(108, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '2026-04-20 08:08:12', '2026-04-20 08:08:12'),
(109, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', '2026-04-20 08:08:30', '2026-04-20 08:08:30'),
(110, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:10:14', '2026-04-20 08:10:14'),
(111, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:10:18', '2026-04-20 08:10:18'),
(112, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:10:18', '2026-04-20 08:10:18'),
(113, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:10:22', '2026-04-20 08:10:22'),
(114, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:10:25', '2026-04-20 08:10:25'),
(115, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:11:01', '2026-04-20 08:11:01'),
(116, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:11:05', '2026-04-20 08:11:05'),
(117, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:11:06', '2026-04-20 08:11:06'),
(118, NULL, 'view', NULL, 'pengarang', NULL, 'GET pengarang', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/pengarang', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:11:20', '2026-04-20 08:11:20'),
(119, NULL, 'view', NULL, 'pengarang', NULL, 'GET pengarang/create', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/pengarang/create', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:11:22', '2026-04-20 08:11:22'),
(120, NULL, 'create', NULL, 'pengarang', NULL, 'POST pengarang', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/pengarang', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:11:53', '2026-04-20 08:11:53'),
(121, NULL, 'view', NULL, 'pengarang', NULL, 'GET pengarang', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/pengarang', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:11:54', '2026-04-20 08:11:54'),
(122, NULL, 'view', NULL, 'pengarang', NULL, 'GET pengarang/4/edit', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/pengarang/4/edit', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:11:59', '2026-04-20 08:11:59'),
(123, NULL, 'update', NULL, 'pengarang', NULL, 'PUT pengarang/4', '127.0.0.1', 'PUT', 'http://127.0.0.1:8000/pengarang/4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:12:04', '2026-04-20 08:12:04'),
(124, NULL, 'view', NULL, 'pengarang', NULL, 'GET pengarang', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/pengarang', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:12:04', '2026-04-20 08:12:04'),
(125, NULL, 'view', NULL, 'penerbit', NULL, 'GET penerbit', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/penerbit', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:12:08', '2026-04-20 08:12:08'),
(126, NULL, 'view', NULL, 'penerbit', NULL, 'GET penerbit/create', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/penerbit/create', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:12:13', '2026-04-20 08:12:13'),
(127, NULL, 'create', NULL, 'penerbit', NULL, 'POST penerbit', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/penerbit', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:12:24', '2026-04-20 08:12:24'),
(128, NULL, 'view', NULL, 'penerbit', NULL, 'GET penerbit/create', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/penerbit/create', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:12:26', '2026-04-20 08:12:26'),
(129, NULL, 'create', NULL, 'penerbit', NULL, 'POST penerbit', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/penerbit', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:00', '2026-04-20 08:13:00'),
(130, NULL, 'view', NULL, 'penerbit', NULL, 'GET penerbit', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/penerbit', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:00', '2026-04-20 08:13:00'),
(131, NULL, 'view', NULL, 'kategori', NULL, 'GET kategori', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/kategori', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:06', '2026-04-20 08:13:06'),
(132, NULL, 'view', NULL, 'kelas', NULL, 'GET kelas', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/kelas', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:11', '2026-04-20 08:13:11'),
(133, NULL, 'view', NULL, 'rak', NULL, 'GET rak', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/rak', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:15', '2026-04-20 08:13:15'),
(134, NULL, 'view', NULL, 'admin', NULL, 'GET admin', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/admin', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:17', '2026-04-20 08:13:17'),
(135, NULL, 'view', NULL, 'approval', NULL, 'GET approval', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/approval', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:22', '2026-04-20 08:13:22'),
(136, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:53', '2026-04-20 08:13:53'),
(137, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:57', '2026-04-20 08:13:57'),
(138, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:57', '2026-04-20 08:13:57'),
(139, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:13:58', '2026-04-20 08:13:58'),
(140, 10, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:02', '2026-04-20 08:14:02'),
(141, 10, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:02', '2026-04-20 08:14:02'),
(142, 10, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:03', '2026-04-20 08:14:03'),
(143, 10, 'view', NULL, 'pengembalian-user', NULL, 'GET pengembalian-user', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/pengembalian-user', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:13', '2026-04-20 08:14:13'),
(144, 10, 'create', NULL, 'pengembalian-user', NULL, 'POST pengembalian-user/24', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/pengembalian-user/24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:15', '2026-04-20 08:14:15'),
(145, 10, 'view', NULL, 'pengembalian-user', NULL, 'GET pengembalian-user', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/pengembalian-user', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:16', '2026-04-20 08:14:16'),
(146, 10, 'view', NULL, 'katalog', NULL, 'GET katalog', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/katalog', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:19', '2026-04-20 08:14:19'),
(147, 10, 'create', NULL, 'katalog', NULL, 'POST katalog', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/katalog', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:23', '2026-04-20 08:14:23'),
(148, 10, 'view', NULL, 'katalog', NULL, 'GET katalog', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/katalog', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:24', '2026-04-20 08:14:24'),
(149, 10, 'view', NULL, 'pengembalian-user', NULL, 'GET pengembalian-user', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/pengembalian-user', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:27', '2026-04-20 08:14:27'),
(150, 10, 'view', NULL, 'riwayat-saya', NULL, 'GET riwayat-saya', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-saya', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:28', '2026-04-20 08:14:28'),
(151, 10, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:31', '2026-04-20 08:14:31'),
(152, 10, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:41', '2026-04-20 08:14:41'),
(153, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:41', '2026-04-20 08:14:41'),
(154, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:41', '2026-04-20 08:14:41'),
(155, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:47', '2026-04-20 08:14:47'),
(156, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:47', '2026-04-20 08:14:47'),
(157, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:47', '2026-04-20 08:14:47'),
(158, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:51', '2026-04-20 08:14:51'),
(159, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:55', '2026-04-20 08:14:55'),
(160, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:55', '2026-04-20 08:14:55'),
(161, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:14:56', '2026-04-20 08:14:56'),
(162, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:04', '2026-04-20 08:15:04'),
(163, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:04', '2026-04-20 08:15:04'),
(164, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:05', '2026-04-20 08:15:05'),
(165, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:08', '2026-04-20 08:15:08'),
(166, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:12', '2026-04-20 08:15:12'),
(167, NULL, 'view', NULL, 'approval', NULL, 'GET approval', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/approval', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:37', '2026-04-20 08:15:37'),
(168, 10, 'update', NULL, 'peminjaman', 25, 'Disetujui sampai 2026-04-27 15:15:40', NULL, NULL, NULL, NULL, '2026-04-20 08:15:40', '2026-04-20 08:15:40'),
(169, NULL, 'create', NULL, 'approval', NULL, 'POST approval/25/approve', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/approval/25/approve', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:40', '2026-04-20 08:15:40'),
(170, NULL, 'view', NULL, 'approval', NULL, 'GET approval', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/approval', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:40', '2026-04-20 08:15:40'),
(171, NULL, 'create', NULL, 'approval', NULL, 'POST approval/24/konfirmasi', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/approval/24/konfirmasi', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:42', '2026-04-20 08:15:42'),
(172, NULL, 'view', NULL, 'approval', NULL, 'GET approval', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/approval', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:45', '2026-04-20 08:15:45'),
(173, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:15:47', '2026-04-20 08:15:47'),
(174, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:17:04', '2026-04-20 08:17:04'),
(175, NULL, 'view', NULL, 'approval', NULL, 'GET approval', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/approval', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:17:12', '2026-04-20 08:17:12'),
(176, NULL, 'view', NULL, 'buku', NULL, 'GET buku', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/buku', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:17:14', '2026-04-20 08:17:14'),
(177, NULL, 'view', NULL, 'buku', NULL, 'GET buku/2/edit', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/buku/2/edit', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:17:18', '2026-04-20 08:17:18'),
(178, NULL, 'update', NULL, 'buku', NULL, 'PUT buku/2', '127.0.0.1', 'PUT', 'http://127.0.0.1:8000/buku/2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:17:23', '2026-04-20 08:17:23'),
(179, NULL, 'view', NULL, 'buku', NULL, 'GET buku', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/buku', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:17:24', '2026-04-20 08:17:24'),
(180, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:30:04', '2026-04-20 08:30:04'),
(181, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:30:16', '2026-04-20 08:30:16'),
(182, NULL, 'view', NULL, 'denda-semua', NULL, 'GET denda-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/denda-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:30:28', '2026-04-20 08:30:28'),
(183, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:30:31', '2026-04-20 08:30:31'),
(184, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:30:51', '2026-04-20 08:30:51'),
(185, NULL, 'view', NULL, 'denda-semua', NULL, 'GET denda-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/denda-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:30:56', '2026-04-20 08:30:56'),
(186, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:30:59', '2026-04-20 08:30:59'),
(187, NULL, 'view', NULL, 'denda-semua', NULL, 'GET denda-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/denda-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:34:43', '2026-04-20 08:34:43'),
(188, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01&type=denda', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:34:45', '2026-04-20 08:34:45'),
(189, NULL, 'view', NULL, 'riwayat-semua', NULL, 'GET riwayat-semua', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/riwayat-semua', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:34:56', '2026-04-20 08:34:56'),
(190, NULL, 'view', NULL, 'laporan', NULL, 'GET laporan/pdf', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/laporan/pdf?end_date=2026-04-30&start_date=2026-04-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 08:34:58', '2026-04-20 08:34:58'),
(191, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:33:15', '2026-04-20 15:33:15'),
(192, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:33:20', '2026-04-20 15:33:20'),
(193, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:34:27', '2026-04-20 15:34:27'),
(194, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:34:28', '2026-04-20 15:34:28'),
(195, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:34:37', '2026-04-20 15:34:37'),
(196, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:34:37', '2026-04-20 15:34:37'),
(197, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:34:51', '2026-04-20 15:34:51'),
(198, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:34:52', '2026-04-20 15:34:52'),
(199, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:37:59', '2026-04-20 15:37:59'),
(200, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:38:00', '2026-04-20 15:38:00'),
(201, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:38:11', '2026-04-20 15:38:11'),
(202, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:38:12', '2026-04-20 15:38:12'),
(203, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:38:55', '2026-04-20 15:38:55'),
(204, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:38:55', '2026-04-20 15:38:55'),
(205, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:39:08', '2026-04-20 15:39:08'),
(206, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:39:08', '2026-04-20 15:39:08'),
(207, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:39:53', '2026-04-20 15:39:53'),
(208, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:39:53', '2026-04-20 15:39:53'),
(209, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:40:05', '2026-04-20 15:40:05'),
(210, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:40:05', '2026-04-20 15:40:05');
INSERT INTO `activity_logs` (`id`, `user_id`, `activity`, `action`, `model`, `model_id`, `description`, `ip_address`, `method`, `url`, `user_agent`, `created_at`, `updated_at`) VALUES
(211, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:40:06', '2026-04-20 15:40:06'),
(212, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:40:37', '2026-04-20 15:40:37'),
(213, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:41:25', '2026-04-20 15:41:25'),
(214, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:41:25', '2026-04-20 15:41:25'),
(215, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:41:34', '2026-04-20 15:41:34'),
(216, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:41:34', '2026-04-20 15:41:34'),
(217, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:41:55', '2026-04-20 15:41:55'),
(218, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:41:55', '2026-04-20 15:41:55'),
(219, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:42:02', '2026-04-20 15:42:02'),
(220, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:42:46', '2026-04-20 15:42:46'),
(221, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:42:46', '2026-04-20 15:42:46'),
(222, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:43:23', '2026-04-20 15:43:23'),
(223, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:43:23', '2026-04-20 15:43:23'),
(224, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:43:23', '2026-04-20 15:43:23'),
(225, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:43:38', '2026-04-20 15:43:38'),
(226, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:06', '2026-04-20 15:44:06'),
(227, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:07', '2026-04-20 15:44:07'),
(228, NULL, 'view', NULL, 'katalog', NULL, 'GET katalog', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/katalog', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:12', '2026-04-20 15:44:12'),
(229, NULL, 'create', NULL, 'katalog', NULL, 'POST katalog', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/katalog', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:16', '2026-04-20 15:44:16'),
(230, NULL, 'view', NULL, 'katalog', NULL, 'GET katalog', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/katalog', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:17', '2026-04-20 15:44:17'),
(231, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:21', '2026-04-20 15:44:21'),
(232, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:21', '2026-04-20 15:44:21'),
(233, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:21', '2026-04-20 15:44:21'),
(234, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:36', '2026-04-20 15:44:36'),
(235, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:37', '2026-04-20 15:44:37'),
(236, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:43', '2026-04-20 15:44:43'),
(237, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:43', '2026-04-20 15:44:43'),
(238, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:44', '2026-04-20 15:44:44'),
(239, NULL, 'view', NULL, 'approval', NULL, 'GET approval', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/approval', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:47', '2026-04-20 15:44:47'),
(240, NULL, 'update', NULL, 'peminjaman', 26, 'Disetujui sampai 2026-04-27 22:44:50', NULL, NULL, NULL, NULL, '2026-04-20 15:44:50', '2026-04-20 15:44:50'),
(241, NULL, 'create', NULL, 'approval', NULL, 'POST approval/26/approve', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/approval/26/approve', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:50', '2026-04-20 15:44:50'),
(242, NULL, 'view', NULL, 'approval', NULL, 'GET approval', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/approval', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:50', '2026-04-20 15:44:50'),
(243, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:57', '2026-04-20 15:44:57'),
(244, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:57', '2026-04-20 15:44:57'),
(245, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:44:58', '2026-04-20 15:44:58'),
(246, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:15', '2026-04-20 15:45:15'),
(247, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:16', '2026-04-20 15:45:16'),
(248, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:23', '2026-04-20 15:45:23'),
(249, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:24', '2026-04-20 15:45:24'),
(250, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:42', '2026-04-20 15:45:42'),
(251, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:42', '2026-04-20 15:45:42'),
(252, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:42', '2026-04-20 15:45:42'),
(253, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:56', '2026-04-20 15:45:56'),
(254, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:56', '2026-04-20 15:45:56'),
(255, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:45:56', '2026-04-20 15:45:56'),
(256, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:20', '2026-04-20 15:46:20'),
(257, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:20', '2026-04-20 15:46:20'),
(258, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:29', '2026-04-20 15:46:29'),
(259, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:29', '2026-04-20 15:46:29'),
(260, NULL, 'login', NULL, 'auth', NULL, 'User login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:35', '2026-04-20 15:46:35'),
(261, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:35', '2026-04-20 15:46:35'),
(262, NULL, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:36', '2026-04-20 15:46:36'),
(263, NULL, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:48', '2026-04-20 15:46:48'),
(264, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:48', '2026-04-20 15:46:48'),
(265, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:46:48', '2026-04-20 15:46:48'),
(266, NULL, 'create', NULL, 'login', NULL, 'POST login', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:47:11', '2026-04-20 15:47:11'),
(267, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:47:12', '2026-04-20 15:47:12'),
(268, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:47:26', '2026-04-20 15:47:26'),
(269, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:47:56', '2026-04-20 15:47:56'),
(270, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:47:57', '2026-04-20 15:47:57'),
(271, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:48:11', '2026-04-20 15:48:11'),
(272, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:48:12', '2026-04-20 15:48:12'),
(273, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:48:29', '2026-04-20 15:48:29'),
(274, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:48:29', '2026-04-20 15:48:29'),
(275, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:48:43', '2026-04-20 15:48:43'),
(276, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:48:44', '2026-04-20 15:48:44'),
(277, NULL, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:48:56', '2026-04-20 15:48:56'),
(278, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:48:57', '2026-04-20 15:48:57'),
(279, 14, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:49:33', '2026-04-20 15:49:33'),
(280, 14, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:49:34', '2026-04-20 15:49:34'),
(281, 14, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:49:39', '2026-04-20 15:49:39'),
(282, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:49:39', '2026-04-20 15:49:39'),
(283, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:49:40', '2026-04-20 15:49:40'),
(284, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:50:05', '2026-04-20 15:50:05'),
(285, 15, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:50:24', '2026-04-20 15:50:24'),
(286, 15, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:50:25', '2026-04-20 15:50:25'),
(287, 15, 'logout', NULL, 'auth', NULL, 'User logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:50:28', '2026-04-20 15:50:28'),
(288, NULL, 'create', NULL, 'logout', NULL, 'POST logout', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/logout', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:50:28', '2026-04-20 15:50:28'),
(289, NULL, 'view', NULL, 'home', NULL, 'GET /', '127.0.0.1', 'GET', 'http://127.0.0.1:8000', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:50:29', '2026-04-20 15:50:29'),
(290, NULL, 'view', NULL, 'register', NULL, 'GET register', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:50:31', '2026-04-20 15:50:31'),
(291, 16, 'create', NULL, 'register', NULL, 'POST register', '127.0.0.1', 'POST', 'http://127.0.0.1:8000/register', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:51:03', '2026-04-20 15:51:03'),
(292, 16, 'view', NULL, 'dashboard', NULL, 'GET dashboard', '127.0.0.1', 'GET', 'http://127.0.0.1:8000/dashboard', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', '2026-04-20 15:51:04', '2026-04-20 15:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `nip`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 6, '232425265', '081334709', 'Kiaracondong', '2026-04-13 21:06:00', '2026-04-13 21:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `kelas_id` bigint UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `user_id`, `kelas_id`, `nis`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '232412144', 'Antapani Lama', '2026-04-13 19:55:45', '2026-04-13 19:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang_id` bigint UNSIGNED NOT NULL,
  `penerbit_id` bigint UNSIGNED NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` year DEFAULT NULL,
  `stok` int NOT NULL DEFAULT '0',
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rak_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `judul`, `pengarang_id`, `penerbit_id`, `kategori_id`, `isbn`, `tahun`, `stok`, `cover`, `created_at`, `updated_at`, `rak_id`) VALUES
(1, 'Mie Ayam Sebelum Mati', 1, 1, 12, NULL, NULL, 800, '1776322375_69e08747a3025.png', '2026-04-13 22:26:06', '2026-04-20 08:15:42', 1),
(2, 'Prabowo Apa Adanya', 2, 2, 1, NULL, NULL, 999, '1776323993_69e08d9961105.png', '2026-04-16 00:19:53', '2026-04-20 15:44:50', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id` bigint UNSIGNED NOT NULL,
  `peminjaman_id` bigint UNSIGNED NOT NULL,
  `hari_terlambat` int NOT NULL,
  `jumlah_denda` decimal(12,2) NOT NULL,
  `status` enum('belum_bayar','sudah_bayar') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'belum_bayar',
  `tanggal_denda` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_bayar` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`id`, `peminjaman_id`, `hari_terlambat`, `jumlah_denda`, `status`, `tanggal_denda`, `tanggal_bayar`, `created_at`, `updated_at`) VALUES
(1, 10, 7, 34893.49, 'sudah_bayar', '2026-04-16 00:30:42', '2026-04-15 17:30:42', '2026-04-15 17:30:42', '2026-04-15 17:30:42'),
(2, 11, 7, 34796.27, 'sudah_bayar', '2026-04-16 00:58:42', '2026-04-15 17:58:42', '2026-04-15 17:58:42', '2026-04-15 17:58:42'),
(3, 22, 6, 30000.00, 'sudah_bayar', '2026-04-16 02:26:42', '2026-04-15 19:26:42', '2026-04-15 19:26:42', '2026-04-15 19:26:42'),
(4, 23, 11, 55000.00, 'sudah_bayar', '2026-04-16 02:43:33', '2026-04-15 19:43:33', '2026-04-15 19:43:33', '2026-04-15 19:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
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
-- Table structure for table `job_batches`
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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah', '2026-04-12 21:35:43', '2026-04-12 21:36:58'),
(2, 'Novel', '2026-04-13 22:26:41', '2026-04-13 22:26:41'),
(3, 'Pelajaran', '2026-04-13 22:26:46', '2026-04-13 22:26:46'),
(4, 'Teknologi', '2026-04-13 22:26:51', '2026-04-13 22:26:51'),
(5, 'Sains', '2026-04-13 22:26:57', '2026-04-13 22:26:57'),
(6, 'Agama', '2026-04-13 22:27:02', '2026-04-13 22:27:02'),
(7, 'Biografi', '2026-04-13 22:27:08', '2026-04-13 22:27:08'),
(8, 'Komik', '2026-04-13 22:27:15', '2026-04-13 22:27:15'),
(9, 'Ensiklopedia', '2026-04-13 22:27:23', '2026-04-13 22:27:23'),
(10, 'Bahasa', '2026-04-13 22:27:29', '2026-04-13 22:27:29'),
(11, 'Ekonomi', '2026-04-13 22:27:36', '2026-04-13 22:27:36'),
(12, 'Psikologi', '2026-04-13 22:27:42', '2026-04-13 22:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint UNSIGNED NOT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `tingkat`, `jurusan`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'XII', 'RPL', '12 RPL', '2026-04-13 19:42:03', '2026-04-13 19:42:03'),
(2, 'XII', 'RPL', 'hh', '2026-04-15 08:06:16', '2026-04-15 08:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_04_07_030331_create_raks_table', 2),
(5, '2026_04_07_030427_create_books_table', 3),
(6, '2026_04_07_030454_create_peminjaman_table', 3),
(7, '2026_04_07_030504_create_pengembalian_table', 3),
(8, '2026_04_07_030547_create_activity_logs_table', 3),
(9, '2026_04_07_030631_add_role_to_users_table', 4),
(10, '2026_04_10_120340_create_pengarangs_table', 5),
(11, '2026_04_13_033403_create_kelas_table', 6),
(12, '2026_04_13_035155_create_anggotas_table', 7),
(13, '2026_04_13_042331_create_kategoris_table', 8),
(14, '2026_04_14_011527_create_penerbits_table', 9),
(15, '2026_04_14_014904_create_penerbits_table', 10),
(16, '2026_04_14_021604_add_field_to_pengarangs', 11),
(17, '2026_04_14_022640_create_pengarangs_table', 12),
(18, '2026_04_14_023042_create_pengarangs_table', 13),
(19, '2026_04_14_023930_create_kelas_table', 14),
(20, '2026_04_14_024709_create_anggotas_table', 15),
(21, '2026_04_14_034337_create_admins_table', 16),
(22, '2026_04_14_035640_create_admins_table', 17),
(23, '2026_04_14_041451_create_petugas_table', 18),
(24, '2026_04_14_050346_create_bukus_table', 19),
(25, '2026_04_14_050536_create_peminjaman_table', 19),
(26, '2026_04_14_054632_create_peminjaman_table', 20),
(27, '2026_04_15_000001_fix_role_enum_to_anggota', 21),
(28, '2026_04_15_000002_change_role_enum_to_anggota', 22),
(29, '2026_04_15_add_tanggal_jatuh_tempo_to_peminjaman', 23),
(30, '2026_04_15_create_denda_table', 23),
(31, '2026_04_15_161555_add_action_to_activity_logs_table', 24),
(32, '2026_04_15_161855_drop_activity_from_activity_logs', 25),
(33, '2026_04_16_030031_add_rak_id_to_bukus_table', 26),
(34, '2026_04_17_120000_sync_activity_logs_schema', 27);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `buku_id` bigint UNSIGNED NOT NULL,
  `tanggal_pinjam` datetime DEFAULT NULL,
  `tanggal_jatuh_tempo` date DEFAULT NULL,
  `tanggal_kembali` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `user_id`, `buku_id`, `tanggal_pinjam`, `tanggal_jatuh_tempo`, `tanggal_kembali`, `status`, `created_at`, `updated_at`) VALUES
(5, 10, 1, '2026-04-15 03:02:13', NULL, NULL, 'selesai', '2026-04-14 20:02:13', '2026-04-15 08:47:10'),
(6, 10, 1, '2026-04-15 03:15:17', NULL, NULL, 'ditolak', '2026-04-14 20:15:17', '2026-04-15 08:35:48'),
(7, 10, 1, '2026-04-15 03:18:56', NULL, NULL, 'ditolak', '2026-04-14 20:18:56', '2026-04-15 08:35:45'),
(8, 10, 1, '2026-04-15 15:46:38', '2026-04-22', '2026-04-15 00:00:00', 'dikembalikan', '2026-04-15 08:46:38', '2026-04-15 09:10:20'),
(9, 10, 1, '2026-04-15 16:13:33', '2026-04-22', '2026-04-15 00:00:00', 'dikembalikan', '2026-04-15 09:13:33', '2026-04-15 09:21:04'),
(10, 10, 1, '2026-04-16 00:19:44', '2026-04-23', '2026-04-16 00:00:00', 'dikembalikan', '2026-04-15 17:19:44', '2026-04-15 17:30:42'),
(11, 10, 1, '2026-04-16 00:29:18', '2026-04-23', '2026-04-16 00:00:00', 'dikembalikan', '2026-04-15 17:29:18', '2026-04-15 17:58:42'),
(12, 10, 1, '2026-04-16 00:58:07', '2026-04-23', '2026-04-16 01:13:08', 'dikembalikan', '2026-04-15 17:58:07', '2026-04-15 18:13:08'),
(13, 10, 1, '2026-04-16 01:20:29', '2026-04-23', '2026-04-16 01:22:29', 'dikembalikan', '2026-04-15 18:15:15', '2026-04-15 18:22:29'),
(14, 10, 1, '2026-04-16 01:24:38', '2026-04-23', '2026-04-16 01:25:31', 'dikembalikan', '2026-04-15 18:24:24', '2026-04-15 18:25:31'),
(15, 10, 1, '2026-04-16 01:32:14', '2026-04-23', '2026-04-16 01:34:56', 'dikembalikan', '2026-04-15 18:30:05', '2026-04-15 18:34:56'),
(16, 10, 1, '2026-04-16 01:35:04', '2026-04-23', '2026-04-16 01:46:15', 'dikembalikan', '2026-04-15 18:34:25', '2026-04-15 18:46:15'),
(17, 10, 1, '2026-04-16 01:52:52', '2026-04-23', '2026-04-16 01:53:31', 'dikembalikan', '2026-04-15 18:52:30', '2026-04-15 18:53:31'),
(18, 10, 1, '2025-06-16 01:55:13', '2026-03-23', '2026-04-16 01:57:51', 'dikembalikan\r\n\r\n', '2026-04-15 18:55:02', '2026-04-15 18:57:51'),
(19, 10, 1, '2025-04-16 02:02:27', '2025-01-23', '2026-04-16 02:03:31', 'dikembalikan', '2026-04-15 19:02:20', '2026-04-15 19:03:31'),
(20, 10, 1, '2026-04-16 02:07:12', '2026-04-23', '2026-04-16 02:07:29', 'dikembalikan', '2026-04-15 19:06:55', '2026-04-15 19:07:29'),
(22, 10, 1, '2026-04-16 02:14:44', '2026-04-10', '2026-04-16 02:26:42', 'dikembalikan', '2026-04-15 19:14:36', '2026-04-15 19:26:42'),
(23, 10, 1, '2026-04-16 02:42:46', '2026-04-05', '2026-04-16 02:43:33', 'dikembalikan', '2026-04-15 19:42:38', '2026-04-15 19:43:33'),
(24, 10, 1, '2026-04-16 07:11:59', '2026-04-23', '2026-04-20 15:15:42', 'dikembalikan', '2026-04-15 20:50:23', '2026-04-20 08:15:42'),
(25, 10, 2, '2026-04-20 15:15:40', '2026-04-27', NULL, 'dipinjam', '2026-04-20 08:14:23', '2026-04-20 08:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `penerbits`
--

CREATE TABLE `penerbits` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Indonesia',
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penerbits`
--

INSERT INTO `penerbits` (`id`, `nama`, `kode`, `kota`, `negara`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Telkom University', '98', 'Bandung', 'Indonesia', 'Bandung', '655866453', 'Telkom@gmail.com', '2026-04-13 19:10:17', '2026-04-13 19:10:29'),
(2, 'Gramedia', '2002', 'Bandung', 'Indonesia', 'Bandung', '4535435', 'Gramedia@gmail.com', '2026-04-16 00:09:55', '2026-04-16 00:09:55'),
(3, 'Smk MVP', '87387', 'bandung', 'Indonesia', 'antapani', '089898777', 'mvp@gmail.com', '2026-04-20 08:13:00', '2026-04-20 08:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengarangs`
--

CREATE TABLE `pengarangs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengarangs`
--

INSERT INTO `pengarangs` (`id`, `nama`, `email`, `telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Yana', 'yana@gmail.com', '093482384', 'Antapani Lama', '2026-04-13 19:31:19', '2026-04-13 19:31:19'),
(2, 'Alibama', 'alibama@gmail.com', '085634343', 'antapni', '2026-04-15 19:27:11', '2026-04-15 19:27:22'),
(3, 'Joko Anwar', 'anwar@gmail.com', '4543436', 'Jakarta', '2026-04-16 00:09:19', '2026-04-16 00:09:19'),
(4, 'Zulham', 'xulfan@gmail.com', '8787888', 'antapni lama', '2026-04-20 08:11:53', '2026-04-20 08:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` bigint UNSIGNED NOT NULL,
  `peminjaman_id` bigint UNSIGNED DEFAULT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raks`
--

CREATE TABLE `raks` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_rak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_rak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `raks`
--

INSERT INTO `raks` (`id`, `kode_rak`, `nama_rak`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'A1', 'Rak Sejarah', NULL, '2026-04-15 19:58:49', '2026-04-15 19:58:49'),
(2, 'A2', 'Rak Publik', NULL, '2026-04-16 00:10:24', '2026-04-16 00:10:24'),
(3, 'B2', 'Rak Private', NULL, '2026-04-16 00:10:38', '2026-04-16 00:10:38'),
(4, 'B1', 'Rak Student', NULL, '2026-04-16 00:10:59', '2026-04-16 00:10:59'),
(5, 'C1', 'Rak Pelajaran', NULL, '2026-04-16 00:11:22', '2026-04-16 00:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fASOlVioHCoonsk5TJvvtRLD8OEaQlzdhBHAz7rh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYUU5UnJ4VFcxMXBVamVJazQxSWhNeHpkQmhuYWlZWW54ckFHYWVQVCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO3M6NToicm91dGUiO3M6NToibG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1775531881),
('sCPoqAYg6wKTPR7Oe4sRYYt1hTZ9aTvaCv11f5aA', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNDBOVlpUZHRXbmJYeGsxY0RCMjVUbDhKTFY1anJQNk1oR1hVNDJOayI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1775532582);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','petugas','anggota') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'anggota',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `alamat`, `telp`) VALUES
(1, 'Daveiz', 'admindaveiz@gmail.com', 'admin', NULL, '$2y$12$w15PhiMD4/g8Ays/N81ej.waaYmj2tdMsqQFjZCGZVV9Df5DgW76m', NULL, '2026-04-06 20:16:19', '2026-04-06 20:16:19', NULL, NULL),
(3, 'Daveiz Alibama', 'daveiz@gmail.com', 'anggota', NULL, '$2y$12$XoH7M6Ia.noBV2oAgHxKR.7QZtNrnHH6NBnkZnhGxIHoLS4ldvmMK', NULL, '2026-04-12 21:16:33', '2026-04-12 21:16:33', NULL, NULL),
(4, 'Deril', 'deril@gmail.com', 'anggota', NULL, '$2y$12$eEBuOzB8LbElhsZa4AJcueUJTHPaN0MSBwqje7hojKkxtkM9Os4tq', NULL, '2026-04-13 19:55:45', '2026-04-13 19:55:45', NULL, NULL),
(5, 'admin', 'sdasdasd@ekmkef.com', 'anggota', NULL, '$2y$12$b66todTh9jzMx11fyIljZuR/uvXUgSgQPMlKsNQ7bdDFJ61gVIsDC', NULL, '2026-04-13 20:52:16', '2026-04-13 20:52:16', NULL, NULL),
(6, 'dapes', 'dapes@gmail.com', 'anggota', NULL, '$2y$12$15BWqomzw.HmXNt4LCbXwutL9sk4YEVrJl3BwyfM7qcS0TEfN/HFy', NULL, '2026-04-13 21:06:00', '2026-04-13 21:06:00', NULL, NULL),
(10, 'siswa', 'siswa@gmail.com', 'anggota', NULL, '$2y$12$5CxLqw.IBps11L1i630Qje49De5rOfRoXXZqduwnWey7kDc2vUZNa', NULL, '2026-04-14 19:09:09', '2026-04-14 19:09:09', NULL, NULL),
(14, 'anggotaukk2026', 'anggota@ukk2026.com', 'anggota', NULL, '$2y$12$q2U9QtPatlTJOeVSBpzS5OlbWymcg3vijeKfcaO1mSZnHbVLDF.Jq', NULL, '2026-04-20 15:49:33', '2026-04-20 15:49:33', NULL, NULL),
(15, 'adminukk2026', 'admin@ukk2026.com', 'admin', NULL, '$2y$12$R2uv8l7cod6imHHC0eNdJO.YrvHdF2.hHgzxIaM/t8j2DcGzr6Yz6', NULL, '2026-04-20 15:50:24', '2026-04-20 15:50:24', NULL, NULL),
(16, 'petugasukk2026', 'petugas@ukk2026.com', 'petugas', NULL, '$2y$12$Bm3MQgt5.Rp4upphZ7zVAezCITGLvurqNLWApFvqx5uVhNYvwnXae', NULL, '2026-04-20 15:51:03', '2026-04-20 15:51:03', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_created_at` (`created_at`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_nip_unique` (`nip`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `anggotas_nis_unique` (`nis`),
  ADD KEY `anggotas_user_id_foreign` (`user_id`),
  ADD KEY `anggotas_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukus_pengarang_id_foreign` (`pengarang_id`),
  ADD KEY `bukus_penerbit_id_foreign` (`penerbit_id`),
  ADD KEY `bukus_kategori_id_foreign` (`kategori_id`),
  ADD KEY `bukus_rak_id_foreign` (`rak_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denda_peminjaman_id_foreign` (`peminjaman_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_user_id_foreign` (`user_id`),
  ADD KEY `peminjaman_buku_id_foreign` (`buku_id`);

--
-- Indexes for table `penerbits`
--
ALTER TABLE `penerbits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penerbits_kode_unique` (`kode`);

--
-- Indexes for table `pengarangs`
--
ALTER TABLE `pengarangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengembalian_peminjaman_id_foreign` (`peminjaman_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `petugas_nip_unique` (`nip`),
  ADD KEY `petugas_user_id_foreign` (`user_id`);

--
-- Indexes for table `raks`
--
ALTER TABLE `raks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `raks_kode_rak_unique` (`kode_rak`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `penerbits`
--
ALTER TABLE `penerbits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengarangs`
--
ALTER TABLE `pengarangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `raks`
--
ALTER TABLE `raks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD CONSTRAINT `anggotas_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `anggotas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bukus`
--
ALTER TABLE `bukus`
  ADD CONSTRAINT `bukus_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`),
  ADD CONSTRAINT `bukus_penerbit_id_foreign` FOREIGN KEY (`penerbit_id`) REFERENCES `penerbits` (`id`),
  ADD CONSTRAINT `bukus_pengarang_id_foreign` FOREIGN KEY (`pengarang_id`) REFERENCES `pengarangs` (`id`),
  ADD CONSTRAINT `bukus_rak_id_foreign` FOREIGN KEY (`rak_id`) REFERENCES `raks` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `denda_peminjaman_id_foreign` FOREIGN KEY (`peminjaman_id`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_buku_id_foreign` FOREIGN KEY (`buku_id`) REFERENCES `bukus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `peminjaman_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_peminjaman_id_foreign` FOREIGN KEY (`peminjaman_id`) REFERENCES `peminjaman` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
