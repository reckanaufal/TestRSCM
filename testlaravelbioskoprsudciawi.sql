-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2023 at 09:48 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testlaravelbioskoprsudciawi`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_identitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_lengkap`, `no_identitas`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `status`) VALUES
(1, 'gh1', 'awd1', 'awd1', '2023-06-14', '234234', 0),
(2, 'gh', 'awd', 'awd', '2023-06-14', '234234', 0),
(3, 'gh', 'awd', 'awd', '2023-06-14', '234234', 0),
(4, 'gh', 'awd', 'awd', '2023-06-14', '234234', 0),
(5, 'gh1', 'awd1', 'awd1', '2023-06-01', '2342341', 0),
(6, 'rt', 'awd', 'awd', '2023-06-01', '234234', 0),
(7, 'vv', 'awd', 'awd', '2023-06-14', '234234', 0),
(8, 'vv', 'awd', 'awd', '2023-06-14', '234234', 0),
(9, 'vv', 'awd', 'awd', '2023-06-14', '234234', 0),
(10, 'vv', 'awd', 'awd', '2023-06-21', '234234', 0),
(11, 'rt', 'awd', 'awd', '2023-06-14', '234234', 0),
(12, 'vv', 'awd', 'awd', '2023-06-15', '234234', 0),
(13, 'rt', 'awd', 'awd', '2023-06-13', '234234', 0),
(14, 'rt', 'awd', 'awd', '2023-06-13', '234234', 0),
(15, 'rt', 'awd', 'awd', '2023-06-21', '234234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `movie_registration`
--

CREATE TABLE `movie_registration` (
  `id` int NOT NULL,
  `biodata_id` int DEFAULT NULL,
  `tiket_id` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  `registration_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_registration`
--

INSERT INTO `movie_registration` (`id`, `biodata_id`, `tiket_id`, `status`, `registration_at`) VALUES
(3, 8, 'f8WXu5dnVeDW03vjAOgitzT08olv2S_', NULL, '2023-06-10'),
(4, 9, 'QgYoH0egHn16bAgglD0A1io50TQHWi_', NULL, '2023-06-10'),
(5, 10, '1dmG6GsCvJG4tzeR21E7eTDuENAoPL_', NULL, '2023-06-12'),
(6, 11, '2A6EzczxPXi41kH6QayixpVEDo68R8_', NULL, '2023-06-10'),
(7, 12, 'dHFTNvPol9PcevzfaZ8ZrBhywptolD_', NULL, '2023-06-10'),
(8, 13, 'XaAqbPxLJkiBwNsJeimtGWXZYiPkOy_', NULL, '2023-06-10'),
(9, 14, 'W3x94k4Nn3rr4RSpUWWLxnmkQiawY0_', NULL, '2023-06-10'),
(10, 15, 'yrkRE8xtxEq40nYbZmLamv8AHD8YzQ_', NULL, '2023-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$amivns33z0xar9b05ZmZ6.R1LKZpywGgtbp0xpaLe4/EHndpzTPdq', 'Admin', NULL, NULL, '2023-06-10 02:43:50', NULL, NULL),
(2, 'staff', 'staff@staff.com', NULL, '$2y$10$amivns33z0xar9b05ZmZ6.R1LKZpywGgtbp0xpaLe4/EHndpzTPdq', 'Staff', NULL, NULL, '2023-06-10 02:43:50', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_registration`
--
ALTER TABLE `movie_registration`
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
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movie_registration`
--
ALTER TABLE `movie_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
