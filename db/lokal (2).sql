-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 04:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lokal`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_user`
--

CREATE TABLE `absen_user` (
  `absen_id` int(50) NOT NULL,
  `user_id` varchar(5) NOT NULL,
  `user_absen_in` varchar(50) DEFAULT NULL,
  `user_absen_out` varchar(50) DEFAULT NULL,
  `user_location` varchar(50) DEFAULT NULL,
  `user_location_out` varchar(500) DEFAULT NULL,
  `user_absen_date` varchar(50) NOT NULL,
  `user_company` varchar(50) DEFAULT NULL,
  `user_photo` varchar(5000) NOT NULL,
  `user_photo_out` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen_user`
--

INSERT INTO `absen_user` (`absen_id`, `user_id`, `user_absen_in`, `user_absen_out`, `user_location`, `user_location_out`, `user_absen_date`, `user_company`, `user_photo`, `user_photo_out`, `created_at`, `updated_at`) VALUES
(1, 'User', '08:12:49', '16:00:00', 'Palembang', '', '2020-11-16', NULL, '', '', '2020-11-18 21:21:49', '2020-11-18 21:54:23'),
(2, 'User', '07:12:49', '16:10:00', 'Palembang', '', '2020-11-17', NULL, '', '', '2020-11-18 21:21:49', '2020-11-18 21:54:23'),
(3, 'User', '09:12:49', '16:10:00', 'Palembang', '', '2020-11-18', NULL, '', '', '2020-11-18 21:21:49', '2020-11-18 21:54:23'),
(15, 'User', '07:25:42', '20:26:24', 'Palembang', '', '2020-11-19', NULL, '', '', '2020-11-19 00:25:42', '2020-11-19 00:26:24'),
(16, 'User', '10:58:47', '16:59:16', 'Palembang', '', '2020-11-20', NULL, '', '', '2020-11-23 03:58:47', '2020-11-23 03:59:16'),
(17, 'User', '10:44:19', '10:44:31', 'Palembang', '', '2020-11-22', NULL, '', '', '2020-11-24 03:44:19', '2020-11-24 03:44:31'),
(18, 'User', '02:52:03', '18:03:20', 'Palembang', '', '2020-11-23', NULL, '', '', '2020-11-24 07:52:03', '2020-11-24 07:53:51'),
(20, 'User', '15:28:27', '15:28:42', 'Palembang', '', '2020-11-24', NULL, '', '', '2020-11-24 08:28:27', '2020-11-24 08:28:42'),
(31, 'User', '14:00:23', NULL, 'South Sumatra', '', '2020-11-30', NULL, 'background.jpg', '', '2020-11-30 07:00:23', '2020-11-30 07:00:23'),
(32, 'User', '12:51:01', '18:32:00', 'South Sumatra', NULL, '2020-12-02', NULL, 'WhatsApp Image 2020-12-01 at 20.06.38.jpeg', NULL, '2020-12-02 05:51:01', '2020-12-02 05:52:22'),
(33, 'User', '13:39:49', NULL, '', NULL, '2020-12-02', NULL, '16068913444611772108216859073383.jpg', NULL, '2020-12-02 06:39:49', '2020-12-02 06:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice_user`
--

CREATE TABLE `notice_user` (
  `id` int(11) NOT NULL,
  `user_id` char(5) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_reason` varchar(50) NOT NULL,
  `user_explain` text NOT NULL,
  `user_approve` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_user`
--

INSERT INTO `notice_user` (`id`, `user_id`, `user_from`, `user_to`, `user_reason`, `user_explain`, `user_approve`, `created_at`, `updated_at`) VALUES
(8, 'User', '2020-11-28', '2020-12-01', 'Sakit', 'Sakitt', 'Disetujui', '2020-11-24 04:36:52', '2020-11-24 04:38:27'),
(9, 'User', '2020-12-12', '2020-12-23', 'Melayat', 'Teman saya mati', 'Disetujui', '2020-11-24 07:18:40', '2020-11-24 07:18:57'),
(10, 'User', '2020-11-26', '2020-11-27', 'Sakit', 'Saya nikah', 'Disetujui', '2020-11-25 03:45:03', '2020-11-25 03:45:20'),
(11, 'User', '2020-12-04', '2020-12-06', 'Sakit', 'sakit\r\n', 'Disetujui', '2020-11-25 08:52:18', '2020-11-25 08:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `status_user`
--

CREATE TABLE `status_user` (
  `id` int(50) NOT NULL,
  `user_id` varchar(5) NOT NULL,
  `absen_id` varchar(50) DEFAULT NULL,
  `user_status` varchar(50) DEFAULT NULL,
  `absen_date` varchar(50) DEFAULT NULL,
  `absen_overtime` varchar(50) DEFAULT NULL,
  `overtime_approve` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_user`
--

INSERT INTO `status_user` (`id`, `user_id`, `absen_id`, `user_status`, `absen_date`, `absen_overtime`, `overtime_approve`, `created_at`, `updated_at`) VALUES
(18, 'User', '1', 'Hadir', '2020-11-16', '0 Menit', NULL, '2020-11-24 03:57:14', '2020-11-24 03:57:14'),
(19, 'User', '2', 'Hadir', '2020-11-17', '10 Menit', 'Approve', '2020-11-24 03:57:14', '2020-11-24 11:38:04'),
(20, 'User', '3', 'Telat', '2020-11-18', '10 Menit', 'Decline', '2020-11-24 03:57:14', '2020-11-24 11:43:09'),
(21, 'User', '15', 'Hadir', '2020-11-19', '4 Jam 26 Menit', 'Approve', '2020-11-24 03:57:14', '2020-11-24 03:57:14'),
(22, 'User', '16', 'Telat', '2020-11-20', '59 Menit', 'Decline', '2020-11-24 03:57:14', '2020-11-24 11:43:14'),
(23, 'User', '17', 'Telat', '2020-11-22', '-', NULL, '2020-11-24 03:57:14', '2020-11-24 03:57:14'),
(28, 'User', NULL, 'Izin', '2020-11-28', NULL, NULL, '2020-11-24 04:38:27', '2020-11-24 04:38:27'),
(29, 'User', NULL, 'Izin', '2020-11-29', NULL, NULL, '2020-11-24 04:38:27', '2020-11-24 04:38:27'),
(30, 'User', NULL, 'Izin', '2020-11-30', NULL, NULL, '2020-11-24 04:38:27', '2020-11-24 04:38:27'),
(31, 'User', NULL, 'Izin', '2020-12-01', NULL, NULL, '2020-11-24 04:38:27', '2020-11-24 04:38:27'),
(32, 'User', NULL, 'Izin', '2020-12-12', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(33, 'User', NULL, 'Izin', '2020-12-13', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(34, 'User', NULL, 'Izin', '2020-12-14', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(35, 'User', NULL, 'Izin', '2020-12-15', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(36, 'User', NULL, 'Izin', '2020-12-16', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(37, 'User', NULL, 'Izin', '2020-12-17', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(38, 'User', NULL, 'Izin', '2020-12-18', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(39, 'User', NULL, 'Izin', '2020-12-19', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(40, 'User', NULL, 'Izin', '2020-12-20', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(41, 'User', NULL, 'Izin', '2020-12-21', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(42, 'User', NULL, 'Izin', '2020-12-22', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(43, 'User', NULL, 'Izin', '2020-12-23', NULL, NULL, '2020-11-24 07:18:57', '2020-11-24 07:18:57'),
(44, 'User', '18', 'Hadir', '2020-11-23', '2 Jam 3 Menit ', 'Decline', '2020-11-24 07:53:51', '2020-11-24 11:43:19'),
(46, 'User', '20', 'Telat', '2020-11-24', '-', NULL, '2020-11-24 08:28:42', '2020-11-24 08:28:42'),
(53, 'User', NULL, 'Izin', '2020-12-04', NULL, NULL, '2020-11-25 08:53:19', '2020-11-25 08:53:19'),
(54, 'User', NULL, 'Izin', '2020-12-05', NULL, NULL, '2020-11-25 08:53:19', '2020-11-25 08:53:19'),
(55, 'User', NULL, 'Izin', '2020-12-06', NULL, NULL, '2020-11-25 08:53:19', '2020-11-25 08:53:19'),
(56, 'User', '28', 'Telat', '2020-11-30', NULL, NULL, '2020-11-30 04:43:36', '2020-11-30 04:43:36'),
(57, 'User', '29', 'Telat', '2020-11-30', NULL, NULL, '2020-11-30 04:44:25', '2020-11-30 04:44:25'),
(58, 'User', '30', 'Telat', '2020-11-30', NULL, NULL, '2020-11-30 04:44:54', '2020-11-30 04:44:54'),
(59, 'User', '31', 'Telat', '2020-11-30', NULL, NULL, '2020-11-30 07:00:23', '2020-11-30 07:00:23'),
(60, 'User', '32', 'Telat', '2020-12-02', '2 Jam 32 Menit ', NULL, '2020-12-02 05:51:01', '2020-12-02 05:52:22'),
(61, 'User', '33', 'Telat', '2020-12-02', NULL, NULL, '2020-12-02 06:39:49', '2020-12-02 06:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nomor_telp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'User@email.com', '08123', '$2y$10$e8qw2LBaHjGpq6YdO0AaUOYqUMfiTQwbu.bwe4KCSEGlhE8SeUnOW', NULL, '2020-12-02 05:05:21', '2020-12-02 05:05:21'),
(2, 'Hapis', 'zahranhafizh0@gmail.com', '134', '$2y$10$HKO5y8qOOL/pqP7KoPv82OVmCad21210EEW4/S6FeKXizidoQwc/2', NULL, '2020-12-04 03:23:04', '2020-12-04 03:23:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_user`
--
ALTER TABLE `absen_user`
  ADD PRIMARY KEY (`absen_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_user`
--
ALTER TABLE `notice_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_user`
--
ALTER TABLE `status_user`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `absen_user`
--
ALTER TABLE `absen_user`
  MODIFY `absen_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice_user`
--
ALTER TABLE `notice_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `status_user`
--
ALTER TABLE `status_user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
