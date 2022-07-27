-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 07:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mb_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `created_at`, `updated_at`) VALUES
(1, 'PRODUCTION', '2022-07-16 13:57:07', '2022-07-16 13:57:07'),
(2, 'HR & GA', '2022-07-16 13:57:07', '2022-07-16 13:57:07'),
(3, 'ENGINEERING', '2022-07-16 13:57:15', '2022-07-16 13:57:15'),
(4, 'PLANT', '2022-07-17 13:58:54', '2022-07-17 13:58:54'),
(5, 'INFRA', '2022-07-17 13:59:44', '2022-07-17 13:59:44'),
(6, 'HAULING', '2022-07-17 14:00:44', '2022-07-17 14:00:44'),
(7, 'SHIPPING', '2022-07-17 14:00:44', '2022-07-17 14:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `POH` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_22_001908_create_employees_table', 1),
(6, '2022_07_22_002020_create_people_table', 1),
(7, '2022_07_22_002850_create_positions_table', 1),
(8, '2022_07_22_003124_create_departments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NIK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `NIK`, `gender`, `address`, `phone_number`, `photo_path`, `created_at`, `updated_at`) VALUES
(1, 'ahmadi', '324', '1', 'dsfgs', 'phone nnumb', 'fas', '2022-07-22 04:11:22', '2022-07-22 04:11:22'),
(2, 'YEHUDA BILL GUTHERES', '1111', '1', 'Jl. Katinjak, RT. 007, Ds. Hajak, Kec. Teweh Baru, Kab. Barito Utara, Prov. Kalimatan Tengah', '0823 4966 1218', NULL, '2022-07-21 17:00:00', '2022-07-21 17:00:00'),
(3, 'HERIYANTO', '1112', '1', 'Jl. Ikan Julung Skip Rahayu LK I, RT. 019, Ds. Bumi Waras, Kec. Bumi Waras, Kab. Bandar Lampung', '0813 6663 6667', NULL, '2022-07-21 17:00:00', '2022-07-21 17:00:00'),
(4, 'RENDY', '1113', '1', 'Kel.Karang Sentosa, RT.02,RW.01, Kec.Karang Bahagia, Kab.Bekasi, Prov.Jawa Barat', '0821 5511 2294', NULL, '2022-07-21 17:00:00', '2022-07-21 17:00:00'),
(5, 'INTIQAL', '1114', '1', 'Jl. Jend. Sudirman, RT. 017, Ds. Melayu, Kec. Teweh Tengah, Kab. Barito Utara, Prov. Kalimantan Tengah', '0822 5216 3353', NULL, '2022-07-21 17:00:00', '2022-07-21 17:00:00'),
(6, 'AHMAD JULKURNAIN', '1115', '1', 'Jl. Merdeka Raya GG. Kamboja, RT.019, RW. 002, Ds. Buntok Kota, Kec. Dusun Selatan, Kab. Barito Selatan', '22', NULL, '2022-07-21 17:00:00', '2022-07-21 17:00:00'),
(7, 'ITA NORRAHMAH', '1116', '1', 'Ds. Tumbang Masao, Kec. Sumber Barito, Kab. Murung Raya, Prov. Kalimantan Tengah', '0812 5364 2197', NULL, '2022-07-21 17:00:00', '2022-07-21 17:00:00'),
(8, 'SURIANSYAH', '1117', '1', 'Jl. Pelita Raya No. 17, RT. 015, RW. 002, Ds. Hilir Sper, Kec. Dusun Selatan, Kab. Barito Selatan', '0822 5426 1133', NULL, '2022-07-21 17:00:00', '2022-07-21 17:00:00'),
(9, 'saydatunH1', '1117', '1', 'Jl. Pelita Raya No. 17, RT. 015, RW. 002, Ds. Hilir Sper, Kec. Dusun Selatan, Kab. Barito Selatan', '0822 5426 1133', NULL, '2022-07-23 00:08:39', '2022-07-23 00:08:39'),
(10, 'L&81u42)]Nj!', '1117', '0', 'Jl. Pelita Raya No. 17, RT. 015, RW. 002, Ds. Hilir Sper, Kec. Dusun Selatan, Kab. Barito Selatan', '0822 5426 1133', NULL, '2022-07-23 00:08:39', '2022-07-23 00:08:39'),
(11, 'saydatunH1', '1117', '1', 'Jl. Pelita Raya No. 17, RT. 015, RW. 002, Ds. Hilir Sper, Kec. Dusun Selatan, Kab. Barito Selatan', '0822 5426 1133', NULL, '2022-07-23 00:08:39', '2022-07-23 00:08:39'),
(12, 'L&81u42)]Nj!', '1117', '0', 'Jl. Pelita Raya No. 17, RT. 015, RW. 002, Ds. Hilir Sper, Kec. Dusun Selatan, Kab. Barito Selatan', '0822 5426 1133', NULL, '2022-07-23 00:08:39', '2022-07-23 00:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Bubut Operator', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(2, 'Bulldozer Operator', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(3, 'Checker Mining', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(4, 'Checker Production', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(5, 'Civil Bangunan', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(6, 'Civil Maintenance', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(7, 'Cooky', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(8, 'Crusher Crew', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(9, 'Driver Water Truck', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(10, 'DT Driver', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(11, 'DT Operator', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(12, 'Dump Man Tambang', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(13, 'Engineering', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(14, 'Entry Data Processing', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(15, 'Excavator Operator', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(16, 'Excavator Operator Production', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(17, 'Foreman Hauling', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(18, 'Fuel Foreman', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(19, 'Fuel Truck Driver (Renault)', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(20, 'Fuelman', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(21, 'General Worker', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(22, 'General Worker (Jahe)', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(23, 'General Worker Mining', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(24, 'General Worker Production', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(25, 'Genset Operator', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(26, 'Grader Operator Production', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(27, 'HD Operator', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(28, 'Helper Excavator Operator', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(29, 'HELPER MECHANIC', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(30, 'HR&GA Administration Clerk', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(31, 'HRGA Officer', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(32, 'LV Driver', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(33, 'LV Driver HRGA', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(34, 'LV Driver Production', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(35, 'Master Excavator Operator Production', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(36, 'Mechanic', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(37, 'Mechanic Deco', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(38, 'Mechanic Helper', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(39, 'Medic', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(40, 'Monitoring Control', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(41, 'Nursery Crew', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(42, 'Plant Foreman', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(43, 'Production Foreman', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(44, 'Quality Control', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(45, 'Safety Administration', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(46, 'Safety Man', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(47, 'Security', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(48, 'Service Maintenance', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(49, 'Sr. Welder', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(50, 'Tyreman', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(51, 'Unit Maintence & Washing Plant Adm Cleark', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(52, 'Unit Maintence & Washing Plant Crew', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(53, 'Ustadz', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(54, 'Welder', '2022-07-24 04:03:17', '2022-07-24 04:03:17'),
(55, 'Whasing Plant', '2022-07-24 04:03:17', '2022-07-24 04:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
