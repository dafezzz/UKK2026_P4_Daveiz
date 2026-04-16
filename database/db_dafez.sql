-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2026 at 03:55 AM
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
  `action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` bigint DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `action`, `model`, `model_id`, `description`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 10, 'peminjaman_approved', 'Peminjaman', 9, 'Peminjaman Buku Biar Kaya disetujui sampai 2026-04-22', NULL, '2026-04-15 09:19:33', '2026-04-15 09:19:33'),
(2, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:50', '2026-04-15 09:20:50'),
(3, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:51', '2026-04-15 09:20:51'),
(4, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:51', '2026-04-15 09:20:51'),
(5, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:52', '2026-04-15 09:20:52'),
(6, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:52', '2026-04-15 09:20:52'),
(7, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:53', '2026-04-15 09:20:53'),
(8, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:53', '2026-04-15 09:20:53'),
(9, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:54', '2026-04-15 09:20:54'),
(10, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:57', '2026-04-15 09:20:57'),
(11, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:57', '2026-04-15 09:20:57'),
(12, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:58', '2026-04-15 09:20:58'),
(13, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:58', '2026-04-15 09:20:58'),
(14, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:59', '2026-04-15 09:20:59'),
(15, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:20:59', '2026-04-15 09:20:59'),
(16, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:21:00', '2026-04-15 09:21:00'),
(17, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:21:01', '2026-04-15 09:21:01'),
(18, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:21:03', '2026-04-15 09:21:03'),
(19, 10, 'pengembalian_completed', 'Peminjaman', 9, 'Pengembalian Buku Biar Kaya selesai tanpa denda', NULL, '2026-04-15 09:21:04', '2026-04-15 09:21:04'),
(20, 10, 'peminjaman_approved', 'Peminjaman', 10, 'Peminjaman Buku Biar Kaya disetujui sampai 2026-04-23', NULL, '2026-04-15 17:20:23', '2026-04-15 17:20:23'),
(21, 10, 'denda_recorded', 'Denda', 10, 'Denda Rp 34,893 untuk keterlambatan 6.9786974663425925 hari', NULL, '2026-04-15 17:30:42', '2026-04-15 17:30:42'),
(22, 10, 'pengembalian_completed', 'Peminjaman', 10, 'Pengembalian Buku Biar Kaya selesai', NULL, '2026-04-15 17:30:42', '2026-04-15 17:30:42'),
(23, 10, 'peminjaman_approved', 'Peminjaman', 11, 'Peminjaman Buku Biar Kaya disetujui sampai 2026-04-23', NULL, '2026-04-15 17:31:30', '2026-04-15 17:31:30'),
(24, 10, 'peminjaman_approved', 'Peminjaman', 12, 'Peminjaman Buku Biar Kaya disetujui sampai 2026-04-23', NULL, '2026-04-15 17:58:37', '2026-04-15 17:58:37'),
(25, 10, 'denda_recorded', 'Denda', 11, 'Denda Rp 34,796 untuk keterlambatan 6.959253443275463 hari', NULL, '2026-04-15 17:58:42', '2026-04-15 17:58:42'),
(26, 10, 'pengembalian_completed', 'Peminjaman', 11, 'Pengembalian Buku Biar Kaya selesai', NULL, '2026-04-15 17:58:42', '2026-04-15 17:58:42'),
(27, 10, 'peminjaman_approved', 'Peminjaman', 13, 'Disetujui sampai 2026-04-23 01:20:29', NULL, '2026-04-15 18:20:29', '2026-04-15 18:20:29'),
(28, 10, 'peminjaman_approved', 'Peminjaman', 14, 'Disetujui sampai 2026-04-23 01:24:38', NULL, '2026-04-15 18:24:38', '2026-04-15 18:24:38'),
(29, 10, 'peminjaman_approved', 'Peminjaman', 15, 'Disetujui sampai 2026-04-23 01:32:14', NULL, '2026-04-15 18:32:14', '2026-04-15 18:32:14'),
(30, 10, 'peminjaman_approved', 'Peminjaman', 16, 'Disetujui sampai 2026-04-23 01:35:04', NULL, '2026-04-15 18:35:04', '2026-04-15 18:35:04'),
(31, 10, 'peminjaman_approved', 'Peminjaman', 17, 'Disetujui sampai 2026-04-23 01:52:52', NULL, '2026-04-15 18:52:52', '2026-04-15 18:52:52'),
(32, 10, 'peminjaman_approved', 'Peminjaman', 18, 'Disetujui sampai 2026-04-23 01:55:13', NULL, '2026-04-15 18:55:13', '2026-04-15 18:55:13'),
(33, 10, 'peminjaman_approved', 'Peminjaman', 19, 'Disetujui sampai 2026-04-23 02:02:27', NULL, '2026-04-15 19:02:27', '2026-04-15 19:02:27'),
(34, 10, 'peminjaman_approved', 'Peminjaman', 20, 'Disetujui sampai 2026-04-23 02:07:12', NULL, '2026-04-15 19:07:12', '2026-04-15 19:07:12'),
(35, 10, 'peminjaman_approved', 'Peminjaman', 21, 'Disetujui sampai 2026-04-23 02:07:47', NULL, '2026-04-15 19:07:47', '2026-04-15 19:07:47'),
(36, 10, 'peminjaman_approved', 'Peminjaman', 22, 'Disetujui sampai 2026-04-23 02:14:44', NULL, '2026-04-15 19:14:44', '2026-04-15 19:14:44'),
(37, 10, 'peminjaman_approved', 'Peminjaman', 23, 'Disetujui sampai 2026-04-23 02:42:46', NULL, '2026-04-15 19:42:46', '2026-04-15 19:42:46');

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
(1, 6, '232425265', '081334709', 'Kiaracondong', '2026-04-13 21:06:00', '2026-04-13 21:06:31'),
(2, 7, '23242245', '0895748243', 'Smk mvp ars', '2026-04-13 21:07:48', '2026-04-13 21:07:48');

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
(1, 'Buku Biar Kaya', 1, 1, 1, NULL, NULL, 800, 'cover/lGXozhCGS2L8KIivv1j0wdPTWyGSVuY2sD6hCHBM.jpg', '2026-04-13 22:26:06', '2026-04-15 20:01:09', 1);

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
(33, '2026_04_16_030031_add_rak_id_to_bukus_table', 26);

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
(1, 2, 1, '2026-04-14 05:47:25', NULL, NULL, 'ditolak', '2026-04-13 22:47:25', '2026-04-13 23:33:08'),
(2, 2, 1, '2026-04-14 05:47:29', NULL, NULL, 'selesai', '2026-04-13 22:47:29', '2026-04-14 00:09:36'),
(3, 2, 1, '2026-04-14 05:47:32', NULL, NULL, 'selesai', '2026-04-13 22:47:32', '2026-04-14 00:05:27'),
(4, 2, 1, '2026-04-14 06:36:19', NULL, NULL, 'ditolak', '2026-04-13 23:36:19', '2026-04-13 23:41:16'),
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
(24, 10, 1, NULL, NULL, NULL, 'pending', '2026-04-15 20:50:23', '2026-04-15 20:50:23');

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
(1, 'Telkom University', '98', 'Bandung', 'Indonesia', 'Bandung', '655866453', 'Telkom@gmail.com', '2026-04-13 19:10:17', '2026-04-13 19:10:29');

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
(2, 'Alibama', 'alibama@gmail.com', '085634343', 'antapni', '2026-04-15 19:27:11', '2026-04-15 19:27:22');

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

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `user_id`, `nip`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 8, '232424234', '08965965', 'Smk mvp ars', '2026-04-13 21:21:19', '2026-04-13 21:22:32');

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
(1, 'A1', 'Rak Sejarah', NULL, '2026-04-15 19:58:49', '2026-04-15 19:58:49');

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
(2, 'adminukk', 'admin@ukk2026.com', 'admin', NULL, '$2y$12$sCo6l0wsVhInTwYgc.sm1OP1SIGE4vCbYxhLoqYKTqqI2qG5I.O5y', NULL, '2026-04-08 02:48:48', '2026-04-08 02:48:48', NULL, NULL),
(3, 'Daveiz Alibama', 'daveiz@gmail.com', 'anggota', NULL, '$2y$12$XoH7M6Ia.noBV2oAgHxKR.7QZtNrnHH6NBnkZnhGxIHoLS4ldvmMK', NULL, '2026-04-12 21:16:33', '2026-04-12 21:16:33', NULL, NULL),
(4, 'Deril', 'deril@gmail.com', 'anggota', NULL, '$2y$12$eEBuOzB8LbElhsZa4AJcueUJTHPaN0MSBwqje7hojKkxtkM9Os4tq', NULL, '2026-04-13 19:55:45', '2026-04-13 19:55:45', NULL, NULL),
(5, 'admin', 'sdasdasd@ekmkef.com', 'anggota', NULL, '$2y$12$b66todTh9jzMx11fyIljZuR/uvXUgSgQPMlKsNQ7bdDFJ61gVIsDC', NULL, '2026-04-13 20:52:16', '2026-04-13 20:52:16', NULL, NULL),
(6, 'dapes', 'dapes@gmail.com', 'anggota', NULL, '$2y$12$15BWqomzw.HmXNt4LCbXwutL9sk4YEVrJl3BwyfM7qcS0TEfN/HFy', NULL, '2026-04-13 21:06:00', '2026-04-13 21:06:00', NULL, NULL),
(7, 'adminukk', 'adminukk@gmail.com', 'anggota', NULL, '$2y$12$h6BPvGie4zWtLUFljcLaXOWQ4TU18NDOlMy0EmPbWQ2MwjEBGzy0S', NULL, '2026-04-13 21:07:48', '2026-04-13 21:08:03', NULL, NULL),
(8, 'petugasukk', 'petugas@ukk2026.com', 'anggota', NULL, '$2y$12$aVKiIIU6Pj3kS/MRza5UR.90.htfboIymRStjFvlkuZVg2vpp.kYu', NULL, '2026-04-13 21:21:19', '2026-04-13 21:21:19', NULL, NULL),
(9, 'petugasukk', 'petugas@gmail.com', 'petugas', NULL, '$2y$12$NPwd.q3BE2el1UaQbjajXOACD98eGgkeYaDzkQdksKoHYN5o4vZm6', NULL, '2026-04-14 18:21:19', '2026-04-14 18:21:19', NULL, NULL),
(10, 'siswa', 'siswa@gmail.com', 'anggota', NULL, '$2y$12$5CxLqw.IBps11L1i630Qje49De5rOfRoXXZqduwnWey7kDc2vUZNa', NULL, '2026-04-14 19:09:09', '2026-04-14 19:09:09', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `penerbits`
--
ALTER TABLE `penerbits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengarangs`
--
ALTER TABLE `pengarangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
