-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 08:45 AM
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
-- Table structure for table `pohs`
--

CREATE TABLE `pohs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pohs`
--

INSERT INTO `pohs` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Dalam Kabupaten', 150000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Dalam Pulau', 250000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Dalam Kabupaten', 150000, '2022-07-24 06:44:00', '2022-07-24 06:44:00'),
(4, 'Dalam Pulau', 250000, '2022-07-24 06:44:00', '2022-07-24 06:44:00'),
(5, 'Luar Pulau', 500000, '2022-07-24 06:44:00', '2022-07-24 06:44:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pohs`
--
ALTER TABLE `pohs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pohs`
--
ALTER TABLE `pohs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
