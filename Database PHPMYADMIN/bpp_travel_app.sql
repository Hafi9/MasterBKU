-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 12:22 PM
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
-- Database: `bpp_travel_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbm`
--

CREATE TABLE `bbm` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `harga_bbm` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bbm`
--

INSERT INTO `bbm` (`id`, `provinsi`, `kota`, `harga_bbm`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Timur', 'Surabaya', 100000.00, '2023-11-19 10:36:28', '2023-11-19 10:36:28'),
(2, 'Jawa Timur', 'Malang', 150000.00, '2023-11-19 10:36:38', '2023-11-19 10:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `perdin_id` int(11) DEFAULT NULL,
  `rekening_bank` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `debet` decimal(10,2) DEFAULT NULL,
  `kredit` decimal(10,2) DEFAULT NULL,
  `user_input` varchar(50) DEFAULT NULL,
  `user_edit` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_perjalanan_dinas`
--

CREATE TABLE `laporan_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `perdin_id` int(11) DEFAULT NULL,
  `sp` varchar(255) DEFAULT NULL,
  `sppd` varchar(255) DEFAULT NULL,
  `lp` varchar(255) DEFAULT NULL,
  `kwitansi` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `laporan_pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nama_pelaksana`
--

CREATE TABLE `nama_pelaksana` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama_pelaksana` varchar(255) DEFAULT NULL,
  `nik_nip` int(11) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `status_pegawai` enum('pns','dewan','thl') DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_input` varchar(50) DEFAULT NULL,
  `user_edit` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nama_pelaksana`
--

INSERT INTO `nama_pelaksana` (`id`, `user_id`, `nama_pelaksana`, `nik_nip`, `jabatan`, `status_pegawai`, `no_telp`, `email`, `user_input`, `user_edit`, `created_at`, `updated_at`) VALUES
(2, 2, 'bisrul hafi', 2147483647, 'Pegawai Honorer', 'pns', '08214306626', 'birul@gmail.com', '1', '1', '2023-11-19 12:41:29', '2023-11-19 12:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan_dinas`
--

CREATE TABLE `perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `pelaksana_id` int(11) DEFAULT NULL,
  `bbm_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `biaya` decimal(10,2) DEFAULT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  `user_input` varchar(50) DEFAULT NULL,
  `user_edit` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama_role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-11-19 10:35:32', '2023-11-19 10:35:32'),
(2, 'User', '2023-11-19 10:35:36', '2023-11-19 10:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `nama_user`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'joko', 'joko', '$2y$10$9BNO82LvtzFQoMhydlk.iucGCEnd2tc37G51044y9GH', '2023-11-19 10:35:51', '2023-11-19 10:35:51'),
(2, 2, 'hafi', 'hafi', '$2y$10$j52gHRY2QWqWZcGVP0FzC.nRgTPVVB1A/BYykcLPmQz', '2023-11-19 10:36:05', '2023-11-19 10:36:05'),
(3, 2, 'budi', 'budido', '$2y$10$4i63EQbzTlidwfcE7nZORe6buVD9wFSAFFY97.hY5n3', '2023-11-21 06:54:10', '2023-11-21 06:54:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bbm`
--
ALTER TABLE `bbm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perdin_id` (`perdin_id`);

--
-- Indexes for table `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perdin_id` (`perdin_id`);

--
-- Indexes for table `nama_pelaksana`
--
ALTER TABLE `nama_pelaksana`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelaksana_id` (`pelaksana_id`),
  ADD KEY `bbm_id` (`bbm_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bbm`
--
ALTER TABLE `bbm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nama_pelaksana`
--
ALTER TABLE `nama_pelaksana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kas`
--
ALTER TABLE `kas`
  ADD CONSTRAINT `kas_ibfk_1` FOREIGN KEY (`perdin_id`) REFERENCES `perjalanan_dinas` (`id`);

--
-- Constraints for table `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  ADD CONSTRAINT `laporan_perjalanan_dinas_ibfk_1` FOREIGN KEY (`perdin_id`) REFERENCES `perjalanan_dinas` (`id`);

--
-- Constraints for table `nama_pelaksana`
--
ALTER TABLE `nama_pelaksana`
  ADD CONSTRAINT `nama_pelaksana_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  ADD CONSTRAINT `perjalanan_dinas_ibfk_1` FOREIGN KEY (`pelaksana_id`) REFERENCES `nama_pelaksana` (`id`),
  ADD CONSTRAINT `perjalanan_dinas_ibfk_2` FOREIGN KEY (`bbm_id`) REFERENCES `bbm` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
