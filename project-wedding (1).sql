-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 02:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `bukti_tf` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `alasan` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_booking`
--

CREATE TABLE `detail_booking` (
  `id_booking` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `jumlahBayar` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `paket_id` int(11) NOT NULL,
  `nama_paket` varchar(40) NOT NULL,
  `include1` varchar(50) DEFAULT NULL,
  `include2` varchar(50) DEFAULT NULL,
  `include3` varchar(50) DEFAULT NULL,
  `include4` varchar(50) DEFAULT NULL,
  `include5` varchar(50) DEFAULT NULL,
  `include6` varchar(50) DEFAULT NULL,
  `include7` varchar(50) DEFAULT NULL,
  `include8` varchar(50) DEFAULT NULL,
  `include9` varchar(50) DEFAULT NULL,
  `include10` varchar(50) DEFAULT NULL,
  `include11` varchar(50) DEFAULT NULL,
  `include12` varchar(50) DEFAULT NULL,
  `include13` varchar(50) NOT NULL,
  `harga` int(40) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `foto4` varchar(255) DEFAULT NULL,
  `foto5` varchar(255) DEFAULT NULL,
  `foto6` varchar(255) DEFAULT NULL,
  `link_vidio` varchar(255) DEFAULT NULL,
  `keterangan` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`paket_id`, `nama_paket`, `include1`, `include2`, `include3`, `include4`, `include5`, `include6`, `include7`, `include8`, `include9`, `include10`, `include11`, `include12`, `include13`, `harga`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `link_vidio`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'PAKET 12.000.000', 'asdaj', 'j', 'h', 'jhghjg', 'jhg', 'jh', 'gj', 'hgj', 'hg', 'jh', 'gjh', 'gj', 'hgj', 12000000, 'foto1_1704742899.jpeg', 'foto2_1704740294.jpeg', 'foto3_1704740294.jpeg', 'foto4_1704740294.jpeg', NULL, NULL, 'asd', 'hgasdjashdjashdjsad', '2024-01-08 11:58:14', '2024-01-08 11:58:14'),
(5, 'PAKET 9.000.000', 'Make up Pengantin', 'hgj', 'hj', 'asd', 'j', 'jh', 'jh', 'gjh', 'gj', 'hg', 'jhg', 'jhgj', 'hgj', 1500000, 'foto1_1704742899.jpeg', 'foto2_1704742899.jpeg', 'foto3_1704742899.jpeg', NULL, NULL, NULL, 'a', 'hgj', '2024-01-08 12:41:39', '2024-01-08 12:41:39'),
(6, 'PAKET 12.000.000', 'asdaj', 'j', 'h', 'jhghjg', 'jhg', 'jh', 'gj', 'hgj', 'hg', 'jh', 'gjh', 'gj', 'hgj', 12000000, 'foto1_1704742899.jpeg', 'foto2_1704740294.jpeg', 'foto3_1704740294.jpeg', 'foto4_1704740294.jpeg', NULL, NULL, 'asd', 'hgasdjashdjashdjsad', '2024-01-08 11:58:14', '2024-01-08 11:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `facebook` varchar(150) DEFAULT NULL,
  `instagram` varchar(150) DEFAULT NULL,
  `twitter` varchar(150) DEFAULT NULL,
  `linkedin` varchar(150) DEFAULT NULL,
  `foto` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `catatan` int(200) NOT NULL,
  `bintang` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_tlfn` varchar(30) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `alamat`, `no_tlfn`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'admin@gmail.com', '1', '0', '0', '', NULL, '$2y$10$.d.5ULgdeoa91hYrZnICAukcnN0bS2igABWrARL8Lu3.gasXFnMau', NULL, '2024-01-08 14:15:33', '2024-01-08 14:15:33'),
(2, 'aasdasdasd', 'user@gmail.com', '2', NULL, NULL, '', NULL, '$2y$10$OxYHyamYamIB4ZkG6bXHXugbrikLaT.hNfld5ncnzqdJSCLlp9bwm', NULL, '2024-01-08 14:43:07', '2024-01-08 14:43:07'),
(3, 'user2', 'user22@gmail.com', '2', NULL, NULL, '', NULL, '$2y$10$e.KcxUDMGuD7jg09mTzstO5n..zcggMcvwsr2LklfPJPsiSrSNr2e', NULL, '2024-01-08 14:43:45', '2024-01-08 14:43:45'),
(4, 'USER 01', 'user01@gmail.com', '2', 'Blok Blokan lah belok kiri 003 002 kec kuc', '089506037357', '', NULL, '$2y$10$Ju2yaRd0z3.nx5E8XbSebeoji.iXVuIRleMx78DxwQ.oUaFDJ7A1u', NULL, '2024-01-08 15:37:09', '2024-01-08 15:37:09'),
(5, 'syarifadilla@gmail.com', 'Elansugianaripai@gmail.com', '2', 'mertapda', '123123123123', 'avatar_1704884125.jpeg', NULL, '$2y$10$HOlW2e6.ok/Tii/BxAMFlukoNMNhcjclFQ2qHd.Hv2c8qrCyrP7oa', NULL, '2024-01-10 03:55:25', '2024-01-10 03:55:25'),
(6, 'SDASD', 'superadmin@gmail.com', '2', 'ASLDALSDSADASD', '022020', 'avatar_1719486601.png', NULL, '$2y$10$LEuOX8dMv..Up0CttmdGYOfCjjfoDfV9xVE3QhUkKoFo6zKfKUKIe', NULL, '2024-06-27 04:10:01', '2024-06-27 04:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `no_tlp` varchar(16) NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `nama_vendor`, `alamat`, `foto`, `harga`, `no_tlp`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'SNACKasdsad', 'asdasdsadvagdhafhsagfhsaf', 'foto_1704893229.jpg', 1500002, '4', 'hasgdjahdkayafgakjshkajsh', '2024-01-10 05:58:40', '2024-01-10 06:27:09'),
(2, 'SNACK', 'asdasdsadvagdhafhsagfhsaf', 'foto_1704891531.jpg', 150000, '089506037357', 'hasgdjahdkayafgakjshkajsh', '2024-01-10 05:58:51', '2024-01-10 05:58:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
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
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
