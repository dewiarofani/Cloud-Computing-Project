-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 11:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cc`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Kecamatan` varchar(255) NOT NULL,
  `Islam` int(11) NOT NULL,
  `Protestan` int(11) NOT NULL,
  `Katolik` int(11) NOT NULL,
  `Hindu` int(11) NOT NULL,
  `Budha` int(11) NOT NULL,
  `Lainnya` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `Kecamatan`, `Islam`, `Protestan`, `Katolik`, `Hindu`, `Budha`, `Lainnya`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Laweyan', 87301, 9177, 5557, 101, 143, 9, NULL, '2023-05-27 20:16:01', '2023-05-27 20:16:01'),
(2, 'Serengan', 41515, 8671, 4072, 15, 227, 13, NULL, '2023-05-27 20:17:45', '2023-05-27 20:17:45'),
(3, 'Pasar Kliwon', 76378, 5709, 4545, 15, 159, 6, NULL, '2023-05-27 20:18:54', '2023-05-27 20:18:54'),
(4, 'Jebres', 103858, 27944, 14285, 100, 523, 92, NULL, '2023-05-27 20:20:53', '2023-05-27 20:20:53'),
(5, 'Banjarsari', 141340, 28318, 12032, 147, 277, 31, NULL, '2023-05-27 20:22:53', '2023-05-27 20:22:53'),
(6, 'Kota Surakarta', 450392, 79819, 40491, 378, 1329, 151, NULL, '2023-05-28 10:19:00', '2023-05-28 10:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_27_194447_create_agama_table', 1),
(6, '2023_05_28_060907_create_usia_table', 2),
(8, '2023_05_28_083831_create_pertumbuhan_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertumbuhan`
--

CREATE TABLE `pertumbuhan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Kecamatan` varchar(255) NOT NULL,
  `Penduduk (ribu)` int(11) NOT NULL,
  `Laju Pertumbuhan per Tahun` double(8,2) NOT NULL,
  `Persentase Penduduk` varchar(255) NOT NULL,
  `Kepadatan Penduduk per km2` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertumbuhan`
--

INSERT INTO `pertumbuhan` (`id`, `Kecamatan`, `Penduduk (ribu)`, `Laju Pertumbuhan per Tahun`, `Persentase Penduduk`, `Kepadatan Penduduk per km2`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Laweyan', 102524, 0.64, '17.82%', 11867, NULL, '2023-05-28 08:52:48', '2023-05-28 08:52:48'),
(2, 'Serengan', 54671, 0.64, '9.5%', 17139, NULL, '2023-05-28 08:54:29', '2023-05-28 08:54:29'),
(3, 'Pasar Kliwon', 86890, 0.63, '15.11%', 18027, NULL, NULL, NULL),
(4, 'Jebres', 147694, 1.12, '25.68%', 11741, NULL, '2023-05-28 08:56:54', '2023-05-28 08:56:54'),
(5, 'Banjarsari', 183541, 1.29, '31.89%', 12387, NULL, '2023-05-28 08:58:05', '2023-05-28 08:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usia`
--

CREATE TABLE `usia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Kelompok Usia` varchar(255) NOT NULL,
  `Laki-Laki` int(11) NOT NULL,
  `Perempuan` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usia`
--

INSERT INTO `usia` (`id`, `Kelompok Usia`, `Laki-Laki`, `Perempuan`, `Jumlah`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0-4', 17585, 16924, 34509, NULL, '2023-05-28 06:14:48', '2023-05-28 06:14:48'),
(2, '5-9', 18067, 17697, 35764, NULL, '2023-05-28 06:15:57', '2023-05-28 06:15:57'),
(3, '10-14', 19912, 18925, 38837, NULL, '2023-05-28 06:16:54', '2023-05-28 06:16:54'),
(4, '15-19', 20921, 20172, 41093, NULL, '2023-05-28 06:18:06', '2023-05-28 06:18:06'),
(5, '20-24', 20237, 20014, 40251, NULL, '2023-05-28 06:18:58', '2023-05-28 06:18:58'),
(6, '25-29', 19794, 19364, 39158, NULL, '2023-05-28 06:20:29', '2023-05-28 06:20:29'),
(7, '30-34', 19134, 18659, 37793, NULL, '2023-05-28 06:21:14', '2023-05-28 06:21:14'),
(8, '35-39', 19909, 19753, 39662, NULL, '2023-05-28 06:22:04', '2023-05-28 06:22:04'),
(9, '40-44', 20077, 20315, 40392, NULL, '2023-05-28 06:43:30', '2023-05-28 06:43:30'),
(10, '45-49', 18430, 19041, 37471, NULL, '2023-05-28 06:44:40', '2023-05-28 06:44:40'),
(11, '50-54', 16988, 18264, 35252, NULL, '2023-05-28 06:45:43', '2023-05-28 06:45:43'),
(12, '55-59', 14542, 16517, 31059, NULL, '2023-05-28 06:47:10', '2023-05-28 06:47:10'),
(13, '60-64', 12184, 14148, 26332, NULL, '2023-05-28 06:48:15', '2023-05-28 06:48:15'),
(14, '65-69', 9423, 11457, 20880, NULL, '2023-05-28 06:49:41', '2023-05-28 06:49:41'),
(15, '70-74', 5341, 6566, 11907, NULL, '2023-05-28 06:50:48', '2023-05-28 06:50:48'),
(16, '75+', 4627, 7741, 12368, NULL, '2023-05-28 06:51:30', '2023-05-28 06:51:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pertumbuhan`
--
ALTER TABLE `pertumbuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usia`
--
ALTER TABLE `usia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertumbuhan`
--
ALTER TABLE `pertumbuhan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usia`
--
ALTER TABLE `usia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
