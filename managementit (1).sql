-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2019 at 02:51 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managementit`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `sn_alat` varchar(50) NOT NULL,
  `ip_alat` varchar(30) DEFAULT NULL,
  `status_alat` enum('Rusak','Normal','Servis') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id_alat`, `id_kategori`, `id_user`, `nama_alat`, `sn_alat`, `ip_alat`, `status_alat`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 'lenovo', 'sgrgr', 'kkkkkkk', 'Rusak', '2019-10-16 23:26:59', '2019-10-16 16:26:59'),
(3, 7, 2, 'Hp 1000', 'nnnnn', '192.168.1.100', 'Rusak', '2019-10-12 19:27:48', '2019-10-12 19:27:48'),
(4, 3, 1, 'Epson L300', 'dfsfdhg', NULL, 'Normal', '2019-10-21 22:42:16', '2019-10-21 15:42:16'),
(6, 3, 1, 'Router Css', 'nnnnn', '192.168.1.100', 'Normal', '2019-10-21 16:11:09', '2019-10-21 16:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(10) UNSIGNED NOT NULL,
  `nama_departemen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`, `created_at`, `updated_at`) VALUES
(1, 'FT', '2019-10-08 16:33:12', '2019-10-08 16:33:12'),
(2, 'IT', '2019-10-09 06:48:35', '2019-10-09 06:48:35'),
(3, 'DF', '2019-10-09 06:48:46', '2019-10-09 06:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `updated_at`, `created_at`) VALUES
(2, 'Staff', '2019-10-08 15:57:01', '2019-10-08 15:51:41'),
(3, 'Kepala', '2019-10-09 06:49:55', '2019-10-09 06:49:55'),
(4, 'Admin', '2019-10-09 06:50:12', '2019-10-09 06:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(3, 'Komputer', '2019-10-09 06:50:38', '2019-10-09 06:50:38'),
(4, 'Printer', '2019-10-09 06:50:52', '2019-10-09 06:50:52'),
(6, 'IP Cam', '2019-10-09 13:52:10', '2019-10-09 06:52:10'),
(7, 'Laptop', '2019-10-09 06:52:21', '2019-10-09 06:52:21'),
(8, 'Router', '2019-10-09 06:52:32', '2019-10-09 06:52:32'),
(9, 'Finger Print', '2019-10-09 06:52:45', '2019-10-09 06:52:45');

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
(1, '2019_10_08_230448_departemen', 1),
(2, '2019_10_11_135003_navigasis', 2);

-- --------------------------------------------------------

--
-- Table structure for table `navigasi`
--

CREATE TABLE `navigasi` (
  `id_navigasi` int(10) UNSIGNED NOT NULL,
  `nama_navigasi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_navigasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_navigasi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigasi`
--

INSERT INTO `navigasi` (`id_navigasi`, `nama_navigasi`, `url_navigasi`, `gambar_navigasi`) VALUES
(3, 'Dashboard', 'admin', 'fa-dashboard'),
(4, 'Kategori', 'kategori', 'fa-table'),
(5, 'Jabatan', 'jabatan', 'fa-table'),
(6, 'Departemen', 'departemen', 'fa-table'),
(7, 'Alat', 'alat', 'fa-table'),
(8, 'Navigasi', 'navigasi', 'fa-table');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `telepon_user` int(11) NOT NULL,
  `email_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_departemen` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `telepon` int(11) DEFAULT NULL,
  `status_user` enum('admin','it','user') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_departemen`, `id_jabatan`, `telepon`, `status_user`) VALUES
(1, 'matori', 'muhammadmatorihidayatullah@gmail.com', NULL, '$2y$10$jXvK5qFGiiHD4vl4pVuVJe3DOOXNS2l0SD.Pj6PrzaaXW5xcLc8m2', NULL, '2019-10-09 05:08:44', '2019-10-09 05:08:44', 2, 2, 0, 'admin'),
(2, 'Niawati', 'niawati@gmail.com', NULL, '$2y$10$bCcmJj6gIOU4VqrXLz0kRuElph2wp.IBgA4g9M06WInwji2UBI0LW', NULL, '2019-10-12 19:18:06', '2019-10-12 19:18:06', NULL, NULL, NULL, 'it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigasi`
--
ALTER TABLE `navigasi`
  ADD PRIMARY KEY (`id_navigasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `navigasi`
--
ALTER TABLE `navigasi`
  MODIFY `id_navigasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
