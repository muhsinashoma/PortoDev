-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 03:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portoproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `cate_slug`, `user_role_id`, `created_at`, `updated_at`) VALUES
(1, 'Fruits', 'fruits', 2, '2021-09-21 10:52:03', '2021-09-21 10:52:03'),
(2, 'Prayers', 'prayers', 2, '2021-09-21 11:19:01', '2021-09-21 11:19:01'),
(3, 'Product', 'product', 2, '2021-09-21 11:27:31', '2021-09-21 11:27:31'),
(4, 'Cloth', 'cloth', 2, '2021-09-21 11:29:57', '2021-09-21 11:29:57');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(1, '159ff9cee6cae12a8c458a2d6ae1b880.jpg', 1, 'App\\Models\\Category', '2021-09-21 10:52:03', '2021-09-21 10:52:03'),
(2, '6eca6f247afec6bc4bd16567c25d7644.jpg', 1, 'App\\Models\\Category', '2021-09-21 10:52:03', '2021-09-21 10:52:03'),
(3, '7ce627e2f0a1ce7dcf5ea93216e4e783.jpg', 1, 'App\\Models\\Category', '2021-09-21 10:52:03', '2021-09-21 10:52:03'),
(4, '3f2fea5898d5483ff121071fef693e41.jpg', 1, 'App\\Models\\Category', '2021-09-21 10:52:03', '2021-09-21 10:52:03'),
(5, '6eb5a83fcb58ee149695aab527a88b41.jpg', 2, 'App\\Models\\Category', '2021-09-21 11:19:01', '2021-09-21 11:19:01'),
(6, '1a0e19f484c5bc3746c61cd3fec708b8.jpg', 2, 'App\\Models\\Category', '2021-09-21 11:19:01', '2021-09-21 11:19:01'),
(7, '4ad5d9965b1b2d9cca0d8f87c35ac4f5.jpg', 2, 'App\\Models\\Category', '2021-09-21 11:19:01', '2021-09-21 11:19:01'),
(8, 'c1c2d911e2b1e4a74251a1ee4561ca07.jpg', 1, 'App\\Models\\Tag', '2021-09-21 11:23:06', '2021-09-21 11:23:06'),
(9, 'cdde4e2dd57c71ad2e26ddaf035f3a32.jpg', 3, 'App\\Models\\Category', '2021-09-21 11:27:31', '2021-09-21 11:27:31'),
(10, 'a3a758f6e2905cadfaf4bfbde9488fae.jpg', 4, 'App\\Models\\Category', '2021-09-21 11:29:57', '2021-09-21 11:29:57'),
(11, 'f7fa903e4c630888fd98cc6a7cf7ae39.jpg', 4, 'App\\Models\\Category', '2021-09-21 11:29:57', '2021-09-21 11:29:57'),
(12, '6ef44509788d36be67b6d98bd246a5ca.jpg', 4, 'App\\Models\\Category', '2021-09-21 11:29:57', '2021-09-21 11:29:57'),
(13, '8ab3f350d63314d7a0ab024cc2364a1f.jpg', 2, 'App\\Models\\Tag', '2021-09-21 11:32:42', '2021-09-21 11:32:42'),
(14, '5e3f245776064fd0ec75b3319319d293.jpg', 3, 'App\\Models\\Tag', '2021-09-21 11:35:09', '2021-09-21 11:35:09');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_08_05_172930_create_roles_table', 1),
(13, '2021_08_28_180727_create_post_models_table', 2),
(16, '2021_09_14_204636_create_images_table', 3),
(17, '2021_09_11_233320_create_categories_table', 4),
(18, '2021_09_11_235638_create_tags_table', 5);

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
-- Table structure for table `post_models`
--

CREATE TABLE `post_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `tag_slug`, `user_role_id`, `created_at`, `updated_at`) VALUES
(1, 'Mango', 'mango', 2, '2021-09-21 11:23:06', '2021-09-21 11:23:06'),
(2, 'Eye Liner', 'eye-liner', 2, '2021-09-21 11:32:42', '2021-09-21 11:32:42'),
(3, 'Shirt', 'shirt', 2, '2021-09-21 11:35:09', '2021-09-21 11:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 2,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.jpg',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `phone_number`, `username`, `email_verified_at`, `password`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Muhsina Akter', 2, 'muhsina.akter2@gmail.com', '8801847102314', NULL, NULL, '$2y$10$ugmJNdPZBP1p1IL3CdDCdu1GLPX45NkBEus9zPpElZmaGt/6peI7m', 'avatar.jpg', 1, NULL, '2021-08-20 15:50:35', '2021-08-20 15:50:35'),
(5, 'Abdulllah Al Noman', 2, 'noman093039@gmail.com', '909090', NULL, NULL, '$2y$10$jJIZuoJu7bmTiCEdFkoUVu8ALXDnRQwEzNGVfwxILrT.oPVDjIAhG', 'avatar.jpg', 1, NULL, '2021-09-01 06:46:25', '2021-09-01 06:46:25'),
(6, 'Muhsina Akter', 2, 'muhsina01715@gmail.com', '01715022945', NULL, NULL, '$2y$10$8yI5FL5fauDoSPpvcezgqOYs5a1uQU0S4P/n2ElHqYrrbpUhgGJWK', 'avatar.jpg', 1, NULL, '2021-09-01 07:11:34', '2021-09-01 07:11:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `post_models`
--
ALTER TABLE `post_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post_models`
--
ALTER TABLE `post_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
