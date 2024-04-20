-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2024 at 12:03 PM
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
-- Database: `test_rscm`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `no_sim` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_lengkap`, `no_sim`, `alamat`, `no_hp`, `status`) VALUES
(1, 'gh1', 'awd1', 'awd1', '234234', 0),
(2, 'gh', 'awd', 'awd', '234234', 0),
(3, 'gh', 'awd', 'awd', '234234', 0),
(4, 'gh', 'awd', 'awd', '234234', 0),
(5, 'gh1', 'awd1', 'awd1', '2342341', 0),
(6, 'rt', 'awd', 'awd', '234234', 0),
(7, 'vv', 'awd', 'awd', '234234', 0),
(8, 'vv', 'awd', 'awd', '234234', 0),
(9, 'vv', 'awd', 'awd', '234234', 0),
(10, 'vv', 'awd', 'awd', '234234', 0),
(11, 'rt', 'awd', 'awd', '234234', 0),
(12, 'vv', 'awd', 'awd', '234234', 0),
(13, 'rt', 'awd', 'awd', '234234', 0),
(14, 'rt', 'awd', 'awd', '234234', 0),
(15, 'rt', 'awd', 'awd', '234234', 0),
(16, 'coba', 'coba', 'coba', 'coba', 0),
(17, 'coba', 'coba', 'coba', 'coba', 0),
(18, 'ay', 'ay', 'ay', 'ay', 0),
(19, 'asd', '123123', 'Jl.Beringin 1 RT.01/04 Kec.Ciawi', '123123', 0),
(20, 'Muhamad Recka Naufal Legowo', '123123', 'Jl.Beringin 1 RT.01/04 Kec.Ciawi', '085888407470', 0),
(21, 'asd', '123123', 'Jl.Beringin 1 RT.01/04 Kec.Ciawi', '123123', 0),
(22, 'Muhamad Recka Naufal Legowo', '123', 'Jl.Beringin 1 RT.01/04 Kec.Ciawi', '085888407470', 0),
(23, 'Muhamad Recka Naufal Legowo', '123', 'Jl.Beringin 1 RT.01/04 Kec.Ciawi', '085888407470', 0),
(24, 'coba', 'coba', 'coba', '1234', 0),
(25, 'coba', '28352', 'ajwdn', '90235', 0),
(26, 'Muhamad Recka Naufal Legowo', '12412', 'ciawi', '0831981', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(20) NOT NULL,
  `merek` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `no_plat` varchar(20) DEFAULT NULL,
  `tarif` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `merek`, `model`, `no_plat`, `tarif`) VALUES
(3, 'inova', 'minibus', 'F 1 RI', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `rental_id` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `rental_id`, `total`) VALUES
(12, 3, 79000);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `registration_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `biodata_id`, `status`, `registration_at`) VALUES
(3, 8, NULL, '2023-06-10'),
(4, 9, NULL, '2023-06-10'),
(5, 10, NULL, '2023-06-12'),
(6, 11, NULL, '2023-06-10'),
(7, 12, NULL, '2023-06-10'),
(8, 13, NULL, '2023-06-10'),
(9, 14, NULL, '2023-06-10'),
(10, 15, NULL, '2023-06-10'),
(11, 16, 0, '2023-07-21'),
(12, 17, 0, '2023-07-22'),
(13, 18, 0, '2023-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id` int(20) NOT NULL,
  `mobil_id` int(11) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `mobil_id`, `tgl_mulai`, `tgl_selesai`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(10, 3, '2024-02-01', '2024-04-20', 1, '2024-04-20', NULL, 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `biodata_id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, NULL, 'admin', 'admin@admin.com', NULL, '$2y$10$FEzityBFS2OGeQm0xIl.D.JAAIb5zfxbm1IpcjbueGKu3nTd1GBBG', 'Admin', NULL, NULL, '2023-06-10 02:43:50', NULL, NULL),
(2, NULL, 'staff', 'staff@staff.com', NULL, '$2y$10$amivns33z0xar9b05ZmZ6.R1LKZpywGgtbp0xpaLe4/EHndpzTPdq', 'Staff', NULL, NULL, '2023-06-10 02:43:50', NULL, NULL),
(3, NULL, 'admin2', 'admin2@admin.com', NULL, 'iAN9t1dNXG5Iv2tb19Zyjw==', 'Admin', NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'admin3', 'admin3@admin.com', NULL, '$2y$10$FEzityBFS2OGeQm0xIl.D.JAAIb5zfxbm1IpcjbueGKu3nTd1GBBG', 'Admin', NULL, NULL, '2023-07-21 05:22:09', NULL, '2023-07-21 05:23:41'),
(9, 26, 'Muhamad Recka Naufal Legowo', 'recka309@gmail.com', NULL, '$2y$10$SLtusZh9KCbcvHdAC1ERnu/CKIAClKbkgPUGNWaLnv5tFbWMt8Bmm', 'pengguna', NULL, NULL, '2024-04-20 00:39:42', NULL, '2024-04-20 00:39:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
