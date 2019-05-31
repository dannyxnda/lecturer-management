-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 06:36 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lecturer_management01`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `address`, `phone_number`, `type`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Bộ môn Các Hệ thống Thông tin', 'Hà Nội', '1234567896', 'Bộ môn', 'httt.com', NULL, '2019-05-28 10:04:50'),
(2, 'Bộ môn Công nghệ Phần mềm', 'Hà nội', '963729875', 'Bộ môn', 'cnpm.vnu.edu.vn', '2019-05-28 13:36:21', '2019-05-28 13:36:21'),
(3, 'Nghiên cứu không gian', 'UET VNU', '963729875', 'Phòng thí nghiệm', 'ngkg.uet.vn', '2019-05-28 16:09:37', '2019-05-28 16:09:37'),
(4, 'Phòng thí nghiệm tương tác Người - Máy', 'UET - VNU', '963729875', 'Phòng thí nghiệm', 'ttnm.uet.vn', '2019-05-28 16:14:08', '2019-05-28 16:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_relation`
--

CREATE TABLE `lecturer_relation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_research_field` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturer_relation`
--

INSERT INTO `lecturer_relation` (`id`, `name`, `id_research_field`, `created_at`, `updated_at`) VALUES
(1, 'Tái tạo rác thải', 1, '2019-05-28 13:35:28', '2019-05-28 13:35:28'),
(2, 'Chủ đề 1', 1, '2019-05-28 15:41:58', '2019-05-28 15:41:58'),
(4, 'Chủ đề I', 2, '2019-05-28 15:42:40', '2019-05-28 15:42:40'),
(5, 'Chủ đề II', 2, '2019-05-28 15:42:54', '2019-05-28 15:42:54'),
(6, 'Control Algorithm', 1, '2019-05-29 04:29:03', '2019-05-29 04:29:03'),
(8, 'Điều khiển máy móc', 3, '2019-05-29 04:29:55', '2019-05-29 04:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_research`
--

CREATE TABLE `lecturer_research` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_research_field` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturer_research`
--

INSERT INTO `lecturer_research` (`id`, `name`, `id_research_field`, `created_at`, `updated_at`) VALUES
(1, 'Tái tạo rác thải', 1, '2019-05-28 13:35:28', '2019-05-28 13:35:28'),
(2, 'Chủ đề 1', 1, '2019-05-28 15:41:58', '2019-05-28 15:41:58'),
(4, 'Chủ đề I', 2, '2019-05-28 15:42:40', '2019-05-28 15:42:40'),
(5, 'Chủ đề II', 2, '2019-05-28 15:42:54', '2019-05-28 15:42:54'),
(9, 'Control Algorithm', 1, '2019-05-29 04:29:03', '2019-05-29 04:29:03'),
(11, 'Điều khiển máy móc', 3, '2019-05-29 04:29:55', '2019-05-29 04:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_05_20_214653_create_table_department_table', 1),
(2, '2019_05_20_211855_create_table_research_field_table', 1),
(3, '2014_10_12_000000_create_users_table', 2),
(4, '2019_05_20_220115_create_table_lecturer_research_table', 2),
(5, '2019_05_20_221644_create_table_lecturer_relation_table', 2),
(6, '2019_05_23_205419_create_user_lecturer_table', 3),
(7, '2019_05_23_205727_create_user_research_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `research_field`
--

CREATE TABLE `research_field` (
  `id` int(10) UNSIGNED NOT NULL,
  `research_field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `research_field`
--

INSERT INTO `research_field` (`id`, `research_field`, `created_at`, `updated_at`) VALUES
(1, 'Trí tuệ tái tạo', '2019-05-28 13:32:54', '2019-05-28 13:32:54'),
(2, 'Khoa học máy tính', '2019-05-28 15:40:47', '2019-05-28 15:40:47'),
(3, 'Robot', '2019-05-28 15:41:10', '2019-05-28 15:41:10'),
(4, 'Weather forcast', '2019-05-29 04:02:07', '2019-05-29 04:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `id_department` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `profile_picture`, `degree`, `phone_number`, `website`, `password`, `role`, `id_department`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'Admin', 'admin@admin.com', '', '', '', NULL, '$2y$12$.yQ.nprlYysoeTv80uWPk.TjI7KE/LFUDMjaQ5WCPTVWyNIsu6.PG', 1, 1, NULL, NULL, NULL),
(6, 'teacher1', 'Giảng viên A', 'teacher1@gmail.com', 'avatar.png', 'Thạc Sĩ', '0', NULL, '$2y$10$HxfJOIMOWI7cdMJe1xFrOuco7PB8Bv/t6P/jRG2braHGKUZUcsjl2', 0, 1, NULL, '2019-05-28 08:58:19', '2019-05-28 08:58:19'),
(7, 'teacher2', 'Baby', 'teacher2@gmail.com', 'avatar.png', 'Thạc Sĩ', '0', NULL, '$2y$10$BNSLlLb21ODKbR5hV7qPXeSYk/03vCbBWVRmUfsJog7pEn5/DMYum', 0, 1, NULL, '2019-05-28 08:58:19', '2019-05-28 08:58:19'),
(9, '16020196', 'Nguyễn Đức Anh', '16020196@vnu.edu.vn', 'avatar.png', 'TS', '963729875', NULL, '$2y$10$tfXCYhxsiMpi1/yYRUmOQOV24nwM3vxZiA8ofnfpogmQlWySthiRa', 0, 1, NULL, '2019-05-28 09:22:05', '2019-05-28 09:22:05'),
(10, 'thanhld', 'Lê Đình Thanh', 'thanhld@vnu.edu.vn', 'avatar.png', 'Thạc Sĩ', NULL, NULL, '$2y$10$OOxNvssXcMICEPdfc2I9aebQYti/2TDATKME.mTZivttgj.59.jgi', 0, 1, NULL, '2019-05-28 09:32:00', '2019-05-28 14:45:11'),
(11, 'tunghx', ' Hoàng Xuân Tùng', 'tunghx@vnu.edu.vn', 'avatar.png', 'Thạc Sĩ', '0', NULL, '$2y$10$cQXSEowtQ7Ny6EkdANXyguS4r9Cg213F8wrWFyNa3tVQ8QkQq.M7q', 0, 1, NULL, '2019-05-28 09:32:00', '2019-05-28 09:32:00'),
(12, 'sonnh', 'Nguyễn Hoài Sơn', 'sonnh@vnu.edu.vn', 'avatar.png', 'Thạc Sĩ', '0', NULL, '$2y$10$5zw8f7B2LzrGxdWwQcg6uOGu3XqCrf05lCNiSRfAt5rS.hfitt6ka', 0, 1, NULL, '2019-05-28 09:32:00', '2019-05-28 09:32:00'),
(13, 'thudm', 'Đào Minh Thư', 'thudm@vnu.edu.vn', 'l32p_FlyingSorceress3.jpg', 'Thạc Sĩ', '1234567896', 'thudm.uet.vn', '$2y$10$PcIWI/GKpkAJxCg6vIGsUOLNPJhtfG5coYMRondgy233mE5tudUfS', 0, 1, NULL, '2019-05-28 09:32:00', '2019-05-28 15:30:58'),
(14, 'maitt', 'Trần Trúc Mai', 'maitt@vnu.edu.vn', 'avatar.png', 'Thạc Sĩ', '0', NULL, '$2y$10$35qOGE67d23oOG.g2GRCCeOvoemMQkejLtzDcBlWx3MEvMIjA2gb.', 0, 1, NULL, '2019-05-28 09:32:00', '2019-05-28 09:32:00'),
(15, 'lec001', 'Lếc Trờ Một', 'lec001@vnu.edu.vn', 'avatar.png', 'Thạc Sĩ', '0', NULL, '$2y$10$XRpQOFLurzsZqNt4hAxA7OTq0.3BBS8SEb7pv4XAooMza7g9npgJ2', 0, 2, NULL, '2019-05-28 09:32:00', '2019-05-28 15:58:24'),
(16, 'lec002', 'Lếc Trờ Hai', 'lec002@vnu.edu.vn', 'avatar.png', 'Thạc Sĩ', '0', NULL, '$2y$10$JvAt53X5KirgSNRt7nr2lerEwc2O2Bu7.ibZhYOnJNNoVYefq9hly', 0, 1, NULL, '2019-05-28 09:32:00', '2019-05-28 09:32:00'),
(17, 'lec003', 'Lếc Trờ Ba', 'lec003@vnu.edu.vn', 'avatar.png', 'Thạc Sĩ', '0', NULL, '$2y$10$Rlx2nNs1/LDkumiiV38xBOooklhcrYaB0UBFIJXEkiHVP/ykXm1Ua', 0, 2, NULL, '2019-05-28 09:32:01', '2019-05-28 15:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_lecturer`
--

CREATE TABLE `user_lecturer` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_lecturer_relation` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_lecturer`
--

INSERT INTO `user_lecturer` (`id`, `id_user`, `id_lecturer_relation`, `created_at`, `updated_at`) VALUES
(15, 13, 2, '2019-05-29 03:51:09', '2019-05-29 03:51:09'),
(16, 13, 4, '2019-05-29 03:51:09', '2019-05-29 03:51:09'),
(17, 13, 5, '2019-05-29 03:51:09', '2019-05-29 03:51:09'),
(18, 13, 1, '2019-05-29 03:51:31', '2019-05-29 03:51:31'),
(20, 13, 6, '2019-05-29 04:32:07', '2019-05-29 04:32:07'),
(21, 13, 8, '2019-05-29 04:32:07', '2019-05-29 04:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_research`
--

CREATE TABLE `user_research` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_lecturer_research` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_research`
--

INSERT INTO `user_research` (`id`, `id_user`, `id_lecturer_research`, `created_at`, `updated_at`) VALUES
(1, 13, 2, '2019-05-28 16:32:44', '2019-05-28 16:32:44'),
(2, 13, 4, '2019-05-29 02:40:42', '2019-05-29 02:40:42'),
(4, 13, 5, '2019-05-29 03:14:58', '2019-05-29 03:14:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_relation`
--
ALTER TABLE `lecturer_relation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecturer_relation_id_research_field_foreign` (`id_research_field`);

--
-- Indexes for table `lecturer_research`
--
ALTER TABLE `lecturer_research`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecturer_research_id_research_field_foreign` (`id_research_field`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_field`
--
ALTER TABLE `research_field`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `research_field_research_field_unique` (`research_field`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_department_foreign` (`id_department`);

--
-- Indexes for table `user_lecturer`
--
ALTER TABLE `user_lecturer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_lecturer_id_user_foreign` (`id_user`),
  ADD KEY `user_lecturer_id_lecturer_relation_foreign` (`id_lecturer_relation`);

--
-- Indexes for table `user_research`
--
ALTER TABLE `user_research`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_research_id_user_foreign` (`id_user`),
  ADD KEY `user_research_id_lecturer_research_foreign` (`id_lecturer_research`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecturer_relation`
--
ALTER TABLE `lecturer_relation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lecturer_research`
--
ALTER TABLE `lecturer_research`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `research_field`
--
ALTER TABLE `research_field`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_lecturer`
--
ALTER TABLE `user_lecturer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_research`
--
ALTER TABLE `user_research`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturer_relation`
--
ALTER TABLE `lecturer_relation`
  ADD CONSTRAINT `lecturer_relation_id_research_field_foreign` FOREIGN KEY (`id_research_field`) REFERENCES `research_field` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lecturer_research`
--
ALTER TABLE `lecturer_research`
  ADD CONSTRAINT `lecturer_research_id_research_field_foreign` FOREIGN KEY (`id_research_field`) REFERENCES `research_field` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_department_foreign` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_lecturer`
--
ALTER TABLE `user_lecturer`
  ADD CONSTRAINT `user_lecturer_id_lecturer_relation_foreign` FOREIGN KEY (`id_lecturer_relation`) REFERENCES `lecturer_relation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_lecturer_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_research`
--
ALTER TABLE `user_research`
  ADD CONSTRAINT `user_research_id_lecturer_research_foreign` FOREIGN KEY (`id_lecturer_research`) REFERENCES `lecturer_research` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_research_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
