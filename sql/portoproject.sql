-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 12:53 PM
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
(1, 'Technology', 'technology', 2, '2021-09-25 18:26:50', '2021-09-25 18:26:50'),
(2, 'Religions', 'religions', 2, '2021-09-25 18:29:22', '2021-09-25 18:29:22'),
(3, 'Fruits', 'fruits', 2, '2021-10-07 10:15:54', '2021-10-07 10:15:54'),
(4, 'Books', 'books', 2, '2021-10-07 10:32:13', '2021-10-07 10:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `category_post_model`
--

CREATE TABLE `category_post_model` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_model_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post_model`
--

INSERT INTO `category_post_model` (`id`, `post_model_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 4, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 3, 1, NULL, NULL),
(6, 3, 3, NULL, NULL),
(7, 3, 4, NULL, NULL),
(8, 4, 1, NULL, NULL),
(9, 4, 2, NULL, NULL),
(10, 4, 3, NULL, NULL),
(11, 4, 4, NULL, NULL),
(12, 5, 1, NULL, NULL),
(13, 5, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_subcategory`
--

CREATE TABLE `category_subcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_subcategory`
--

INSERT INTO `category_subcategory` (`id`, `category_id`, `subcategory_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, NULL, NULL),
(2, 1, 6, 1, NULL, NULL),
(3, 2, 2, 1, NULL, NULL),
(4, 2, 4, 1, NULL, NULL),
(5, 3, 7, 1, NULL, NULL),
(6, 3, 8, 1, NULL, NULL),
(7, 4, 9, 1, NULL, NULL),
(8, 4, 10, 1, NULL, NULL);

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
(1, '22e69b0bb6cc8b293f215d60c78480d3.jpg', 1, 'App\\Models\\Subcategory', '2021-09-25 18:20:08', '2021-09-25 18:20:08'),
(2, 'ffb76c99acfa5da2c2a06d626a24dcd8.jpg', 2, 'App\\Models\\Subcategory', '2021-09-25 18:20:55', '2021-09-25 18:20:55'),
(3, 'a83d15da40f2e0bbdca2001ffe99a67a.jpg', 3, 'App\\Models\\Subcategory', '2021-09-25 18:21:25', '2021-09-25 18:21:25'),
(4, '0f70a03222a6d61456f5339fa83098b3.jpg', 4, 'App\\Models\\Subcategory', '2021-09-25 18:21:58', '2021-09-25 18:21:58'),
(5, '58431c00b37c822a4f7026559ac37d12.jpg', 5, 'App\\Models\\Subcategory', '2021-09-25 18:22:21', '2021-09-25 18:22:21'),
(6, '2c0995050c32e4eec6ab3123e538a769.jpg', 6, 'App\\Models\\Subcategory', '2021-09-25 18:26:15', '2021-09-25 18:26:15'),
(7, '2d0809280493aff67d19a7fa66f00b2c.jpg', 1, 'App\\Models\\Category', '2021-09-25 18:26:50', '2021-09-25 18:26:50'),
(8, 'fd96e2982c7372fbd3481f91c3bc95b8.jpg', 1, 'App\\Models\\Category', '2021-09-25 18:26:50', '2021-09-25 18:26:50'),
(9, '84999675bc47ca470f3aa84fdd4f8d76.jpg', 1, 'App\\Models\\Category', '2021-09-25 18:26:51', '2021-09-25 18:26:51'),
(10, '5b81455e788bbcb17bc3a66d54017ccd.jpg', 1, 'App\\Models\\Category', '2021-09-25 18:26:51', '2021-09-25 18:26:51'),
(11, 'bb241f0e45caa5a45de273eaebb8ede5.jpg', 2, 'App\\Models\\Category', '2021-09-25 18:29:22', '2021-09-25 18:29:22'),
(12, '4b06f27a35d40473abd2446591d95f1a.jpg', 2, 'App\\Models\\Category', '2021-09-25 18:29:22', '2021-09-25 18:29:22'),
(13, '70309ce13cfec0f0b40a98d6b6f40008.jpg', 2, 'App\\Models\\Category', '2021-09-25 18:29:22', '2021-09-25 18:29:22'),
(14, 'e1b73bb6d8603aa902447482d2247b5c.jpg', 2, 'App\\Models\\Category', '2021-09-25 18:29:22', '2021-09-25 18:29:22'),
(15, 'feb4b30e043c36aea68f088d0633f492.jpg', 7, 'App\\Models\\Subcategory', '2021-10-07 10:13:26', '2021-10-07 10:13:26'),
(16, 'd97115f02c5baca0201abe14f555ff71.jpg', 8, 'App\\Models\\Subcategory', '2021-10-07 10:15:10', '2021-10-07 10:15:10'),
(17, '3e365f41792edbece6428f5a109aacdc.jpg', 3, 'App\\Models\\Category', '2021-10-07 10:15:55', '2021-10-07 10:15:55'),
(18, '9d9401dc3f08e3b6832d0abdd71de5b8.jpg', 3, 'App\\Models\\Category', '2021-10-07 10:15:55', '2021-10-07 10:15:55'),
(19, 'b8c49bdb8d7f63170179b7e2268d4b05.jpg', 3, 'App\\Models\\Category', '2021-10-07 10:15:55', '2021-10-07 10:15:55'),
(20, '0bb27ffda2a91671be6c95d174a0ee90.jpg', 3, 'App\\Models\\Category', '2021-10-07 10:15:55', '2021-10-07 10:15:55'),
(21, '5b505e84f2619875faeec36246d5ce84.jpg', 9, 'App\\Models\\Subcategory', '2021-10-07 10:26:14', '2021-10-07 10:26:14'),
(22, 'ca5b0ad8da00403511afeb8ab837a2ff.jpg', 10, 'App\\Models\\Subcategory', '2021-10-07 10:26:32', '2021-10-07 10:26:32'),
(23, '83cfec68a6fd27a1055470a450e6cb96.jpg', 4, 'App\\Models\\Category', '2021-10-07 10:32:13', '2021-10-07 10:32:13'),
(24, '2a721799fd52a0330d9387c5b491e0e0.jpg', 4, 'App\\Models\\Category', '2021-10-07 10:32:13', '2021-10-07 10:32:13'),
(25, '000bf4b0765088416c2aa9ad92e300aa.jpg', 4, 'App\\Models\\Category', '2021-10-07 10:32:13', '2021-10-07 10:32:13'),
(26, 'b727a753e710ba6f93d53808626e5464.jpg', 4, 'App\\Models\\Category', '2021-10-07 10:32:13', '2021-10-07 10:32:13'),
(27, '6be9cd6f6323af531eb4220e4384124f.jpg', 4, 'App\\Models\\Category', '2021-10-07 10:32:13', '2021-10-07 10:32:13'),
(28, 'bb903f54a7e1b8c2a073edb44514e573.jpg', 4, 'App\\Models\\Category', '2021-10-07 10:32:13', '2021-10-07 10:32:13'),
(29, '128461142e7c4b2961ebe7b558195693.jpg', 1, 'App\\Models\\Tag', '2021-10-07 11:29:06', '2021-10-07 11:29:06'),
(30, '574e1e6cfe71eceffce768ee73ce1e4b.jpg', 2, 'App\\Models\\Tag', '2021-10-07 11:29:27', '2021-10-07 11:29:27'),
(31, 'b9a25af1d5113e234effa29ab22f8651.jpg', 3, 'App\\Models\\Tag', '2021-10-07 12:05:15', '2021-10-07 12:05:15'),
(32, '13c59391b2bec2cb28e6fba71ec0721f.jpg', 4, 'App\\Models\\Tag', '2021-10-07 12:10:41', '2021-10-07 12:10:41'),
(33, 'a882d3e410b30829123ef28bc4efc96f.jpg', 1, 'App\\Models\\PostModel', '2021-10-07 17:31:11', '2021-10-07 17:31:11'),
(34, '7209bef3ec8da3f73e6e0ab888d8393b.jpg', 1, 'App\\Models\\PostModel', '2021-10-07 17:31:12', '2021-10-07 17:31:12'),
(35, '3a5904b4ed4a5dcfc8a93f6a2c4fc57a.webp', 1, 'App\\Models\\PostModel', '2021-10-07 17:31:12', '2021-10-07 17:31:12'),
(36, '942f19f6cc5d7b87681f0bfda8ed9e74.jpg', 1, 'App\\Models\\PostModel', '2021-10-07 17:31:12', '2021-10-07 17:31:12'),
(37, '32a93f320d85813444eb24911af0cba5.jpg', 1, 'App\\Models\\PostModel', '2021-10-09 05:01:28', '2021-10-09 05:01:28'),
(38, 'f814283d95173ed49c376ce552e7aacf.jpg', 1, 'App\\Models\\PostModel', '2021-10-09 05:01:28', '2021-10-09 05:01:28'),
(39, '906b4ae4624d18cc2a429f463488426d.jpeg', 1, 'App\\Models\\PostModel', '2021-10-09 05:01:28', '2021-10-09 05:01:28'),
(40, '1b54f2bbc7589218e53a322da4de4386.jpg', 1, 'App\\Models\\PostModel', '2021-10-09 05:31:36', '2021-10-09 05:31:36'),
(41, '30ebb6a2cbd861303273df79fcd12d28.jpg', 1, 'App\\Models\\PostModel', '2021-10-09 05:31:36', '2021-10-09 05:31:36'),
(42, '602eeecd0a1aefb7a62ea220acfd068e.jpg', 2, 'App\\Models\\PostModel', '2021-10-09 05:34:05', '2021-10-09 05:34:05'),
(43, '5b552be454b2059784c0dc3cdc7ca47a.jpg', 2, 'App\\Models\\PostModel', '2021-10-09 05:34:05', '2021-10-09 05:34:05'),
(44, '046a64c03de6d9e0b07e7df86b36df82.jpg', 1, 'App\\Models\\PostModel', '2021-10-09 05:57:50', '2021-10-09 05:57:50'),
(45, '15acdd75b31e5ab8df78b913ba88f610.jpg', 1, 'App\\Models\\PostModel', '2021-10-09 05:57:50', '2021-10-09 05:57:50'),
(46, '72eab2c695dc86147b558bf461874bde.webp', 1, 'App\\Models\\PostModel', '2021-10-09 05:57:50', '2021-10-09 05:57:50'),
(47, '089f0eaf7dca58e1fd9b5d36fb1b1ce6.jpg', 1, 'App\\Models\\PostModel', '2021-10-09 05:57:51', '2021-10-09 05:57:51'),
(48, '410d0e2f008aee27d9a9a139ddf2a84b.jpg', 2, 'App\\Models\\PostModel', '2021-10-09 06:17:10', '2021-10-09 06:17:10'),
(49, 'd51ccef3f27e5e6a361757ec69e21dcc.jpg', 2, 'App\\Models\\PostModel', '2021-10-09 06:17:10', '2021-10-09 06:17:10'),
(50, '5231e4a301f7008800221ff38c6bbe7e.jpg', 2, 'App\\Models\\PostModel', '2021-10-09 06:17:10', '2021-10-09 06:17:10'),
(51, '7ce7edc395c79845b88b13e05875dd86.webp', 3, 'App\\Models\\PostModel', '2021-10-09 06:22:03', '2021-10-09 06:22:03'),
(52, '644d88b6edc302c5327701552d63946d.jpg', 3, 'App\\Models\\PostModel', '2021-10-09 06:22:03', '2021-10-09 06:22:03'),
(53, 'bbb72dded408ac8dd62177e30a0838dd.jpg', 3, 'App\\Models\\PostModel', '2021-10-09 06:22:03', '2021-10-09 06:22:03'),
(54, 'd9919a7328bc9e032f389a9c1fad5aee.jpg', 4, 'App\\Models\\PostModel', '2021-10-09 06:59:33', '2021-10-09 06:59:33'),
(55, '71bfe3cc739cc323d8af1c85771b3450.jpg', 4, 'App\\Models\\PostModel', '2021-10-09 06:59:33', '2021-10-09 06:59:33'),
(56, 'a63611a660576227368e9f817e4b0d3e.jpg', 4, 'App\\Models\\PostModel', '2021-10-09 06:59:33', '2021-10-09 06:59:33'),
(57, '232a4dc15e7460795602759469e652ec.webm', 5, 'App\\Models\\PostModel', '2021-10-11 17:56:19', '2021-10-11 17:56:19'),
(58, '80ac4e5b8fb68723021eb22705227019.webm', 5, 'App\\Models\\PostModel', '2021-10-11 17:56:19', '2021-10-11 17:56:19'),
(59, '778d41bc8a5e7e74c374618773d0d97b.mp4', 5, 'App\\Models\\PostModel', '2021-10-11 17:56:19', '2021-10-11 17:56:19');

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
(16, '2021_09_14_204636_create_images_table', 3),
(17, '2021_09_11_233320_create_categories_table', 4),
(18, '2021_09_11_235638_create_tags_table', 5),
(19, '2021_09_24_211108_create_subcategories_table', 6),
(21, '2021_09_25_235439_create_category_subcategory_table', 7),
(26, '2021_10_07_233720_create_category_post_model_table', 10),
(28, '2021_10_09_112538_create_post_model_tag_table', 11),
(29, '2021_08_28_180727_create_post_models_table', 12);

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
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `views` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_models`
--

INSERT INTO `post_models` (`id`, `post_type`, `post_title`, `post_slug`, `post_content`, `special_link`, `user_role`, `status`, `trash`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Image', 'Hewlett-Packard (HP)', 'hewlett-packard', '<p>HP (Hewlett-Packard) is a multinational information technology (IT) company that sells hardware, software and related business services. &nbsp;</p>\r\n\r\n<p>HP product lines include PCs and other computing devices, enterprise and industry standard servers, storage devices, networking products, software, printers,&nbsp;<a href=\"https://whatis.techtarget.com/definition/scanner\">scanners</a>,&nbsp;<a href=\"https://whatis.techtarget.com/definition/plotter\">plotters</a>&nbsp;and other imaging products. The company introduced handheld calculators, the first commercially distributed data processing system, LaserJet printers, and (jointly with Intel) the Explicitly Parallel Instruction Computing (EPIC) architecture.&nbsp;</p>\r\n\r\n<p>The company&#39;s&nbsp;<a href=\"https://whatis.techtarget.com/definition/corporate-culture\">corporate culture</a>&nbsp;is encapsulated in an approach known as the HP Way, a set of values designed to foster innovation, respect for individuals and value for customers.</p>\r\n\r\n<p>Founded in 1939 by Stanford University Engineering graduates William R. Hewlett and David Packard, HP could be considered the first garage&nbsp;<a href=\"https://searchcio.techtarget.com/definition/startup\">startup</a>. Bill and Dave (as they were known within the company) first worked in a single-car garage manufacturing audio&nbsp;<a href=\"https://whatis.techtarget.com/definition/oscillator\">oscillators</a>. The garage was declared a California State Historical Landmark in 1989 and is considered the birthplace of Silicon Valley.&nbsp;The company&#39;s headquarters are in Palo Alto, California.&nbsp;</p>\r\n\r\n<p>In October 2014, HP announced that it would split its PC and printers business from the business segment selling enterprise products and services, as HP, Inc. and Hewlett-Packard Enterprise.</p>', 'About HP', 2, 1, 0, 0, '2021-10-09 05:57:50', '2021-10-09 05:57:50'),
(2, 'Image', 'Dell Laptop', 'dell-laptop', 'Dell is a computer technology company which sells, repairs and support computers, its related products and services. Named after its founder Michael Dell, it is a US-based comapny. Dell is one of the largest technological corporations in the world. It is widespread and well known for its computers, laptops. In 1987, after the company’s launch, the company built its first computer system and opened its first international subsidiary in the United Kingdom. Later with growing in number in 1988 around 80 per cent annually, Dell expands worldwide operations in Europe, Asia, Japan in 1995. In the year 2001, Dell becomes the number 1 computer systems provider worldwide and reached number 1 in the US. Then, in just 3 years, it becomes China’s third-largest provider of computer systems in 2004. In 2016, Dell and EMC joined hands and became the most significant technology merger in history to become Dell Technologies. Dell’s consumer class brands include Inspiron, XPS, Alienware, Venue. The company markets specific brand names to different market segments.\r\n\r\n', 'About Dell', 2, 1, 0, 0, '2021-10-09 06:17:10', '2021-10-09 06:17:10'),
(3, 'Image', 'Lenovo Laptop', 'lenovo-laptop', 'CPU: 11th Gen Intel Core i5-1135G7 Processor\r\nCache & Speed: 8MB cache and 2.4 GHz upto 4.2 GHz\r\nRAM: 8GB DDR4\r\nHard drive: 512GB SSD M.2 2280 PCIe 3.0×4 NVMe\r\nGraphics: NVIDIA GeForce MX450 2GB GDDR6\r\nCategories: Laptop & Notebook, LENOVO Laptop', 'About Lenovo', 2, 1, 0, 0, '2021-10-09 06:22:03', '2021-10-09 06:22:03'),
(4, 'Image', 'iPad Pro Q&A', 'ipad-pro-qa', '<p>Pros:</p>\r\n\r\n<ul>\r\n	<li>Beautiful, extremely thin designs. The 9.7&quot;, 10.5&quot; and 11&quot; models weigh a pound or less and the 12.9&quot; models weighs a little more than a pound and a half. Impressive.</li>\r\n	<li>Bright, high resolution and crisp displays. Although all are high quality, each series is even better than the last with increased brightness and improved refresh rates.</li>\r\n	<li>All displays have a helpful antiglare coating.</li>\r\n	<li>Fast performance, even faster than some Macs.</li>\r\n	<li>Excellent battery life.</li>\r\n	<li>System-wide&nbsp;<a href=\"https://everymac.com/systems/apple/ipad/ipad-faq/how-to-connect-ipad-to-tv-television-projector.html\">mirroring</a>&nbsp;support. All iPad Pro 11&quot; models and iPad Pro 12.9&quot; (3rd Gen &amp; 4th Gen) even support a second display.</li>\r\n	<li>Cellular capable models support a wide range of cellular bands with each new model supporting more bands than the last. The current iPad Pro 11&quot; (3rd Gen) and iPad Pro 12.9&quot; (5th Gen) models support 5G.</li>\r\n	<li>Quality rear cameras (especially iPad Pro 2nd Gen and later models).</li>\r\n	<li>Usable onscreen keyboard and optional external Apple Smart Keyboard and Apple Magic Keyboard make&nbsp;<a href=\"https://everymac.com/systems/apple/ipad/ipad-faq/ipad-typing-opening-saving-word-excel-powerpoint-pdf-files.html\">productive</a>&nbsp;use quite possible (larger keyboards for the 12.9&quot; models is easier to use than smaller keyboards for the smaller models).</li>\r\n	<li>Sold&nbsp;<a href=\"https://everymac.com/systems/apple/ipad/ipad-faq/ipad-design-info-font-where-to-buy-unlocked.html#unlocked\">unlocked</a>&nbsp;and without a contract in the US, and most other countries, with multiple wireless carrier options.</li>\r\n	<li>Touch ID or Face ID authentication.</li>\r\n	<li><a href=\"https://everymac.com/apple-pencil\" rel=\"nofollow\" target=\"_blank\">Apple Pencil</a>&nbsp;support (All iPad Pro 11&quot; models and iPad Pro 12.9&quot; 3rd and later models support the much better&nbsp;<a href=\"https://everymac.com/apple-pencil-2\" rel=\"nofollow\" target=\"_blank\">Apple Pencil 2nd Gen</a>).</li>\r\n	<li>USB-C support -- all iPad Pro 11&quot; models and iPad Pro 12.9&quot; 3rd and later models -- opens a world of more &quot;computer-like&quot; usage with&nbsp;<a href=\"https://everymac.com/systems/apple/ipad/ipad-pro-faq/best-ipad-pro-external-storage-lightning-usb-c-default-ipad-pro-storage.html\">storage</a>,&nbsp;<a href=\"https://everymac.com/systems/apple/ipad/ipad-pro-faq/ipad-pro-wifi-bluetooth-versions-compatibility.html#dock\">docks</a>, and&nbsp;<a href=\"https://everymac.com/systems/apple/ipad/ipad-pro-faq/ipad-pro-external-display-support-video-out-sidecar.html#external_display\">external display</a>&nbsp;capability. The current iPad Pro 11&quot; (3rd Gen) and iPad Pro 12.9&quot; (5th Gen) models support even faster Thunderbolt / USB 4 via their USB-C shaped port.</li>\r\n	<li>LiDAR scanner -- on iPad Pro 2 11&quot; and later and iPad Pro 4 12.9&quot; and later -- promises distant measurement and significant enhancements in AR experiences.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cons:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>The 12.9&quot; models are large and heavy enough that some users may find it unwieldy.</li>\r\n	<li>The original 12.9&quot; display is not as high quality as the 9.7&quot; model and subsequent models.</li>\r\n	<li>The original 9.7&quot; model only has 2 GB of RAM unlike the original 12.9&quot; model and subsequent models that have 4 GB of RAM or more. This likely means that the original 9.7&quot; model will not be usable for as long and iOS support will be more limited in the future.</li>\r\n	<li>The battery is glued in place and is not designed to be replaced by an end user.</li>\r\n	<li>Internal storage cannot be upgraded and may be inadequate given increasingly large file sizes to display images and other content optimized for the high-resolution displays (not to mention recording 4K video on compatible models). However, recent iPad Pro models easily can support external storage via USB-C.</li>\r\n	<li>Shooting photos and video with such a physically large device is awkward.</li>\r\n	<li>No SD card slot for easy&nbsp;<a href=\"https://everymac.com/systems/apple/ipad/ipad-faq/how-to-connect-camera-transfer-photos-to-ipad.html\">photo transfer</a>.</li>\r\n	<li>The original 9.7&quot; model only supports USB 2 rather than USB 3 like the original 12.9&quot; model and subsequent models, so data transfer is much slower on the 9.7&quot; model.</li>\r\n	<li>The original 12.9&quot; model lacks 4K video support.</li>\r\n	<li>Onscreen keyboard and even many of the external keyboard options are not as comfortable as typing on a &quot;traditional&quot; notebook keyboard with more &quot;travel&quot; for the keys (the&nbsp;<a href=\"https://everymac.com/systems/apple/ipad/ipad-pro-faq/best-ipad-pro-compatible-external-keyboard.html\">Apple Magic Keyboard options</a>&nbsp;finally get pretty close, though).</li>\r\n	<li>No bundled headphones (a particularly miserly omission given the high price of the device).</li>\r\n	<li>On all iPad Pro 11&quot; and iPad Pro 12.9&quot; (3rd &amp; 4th Gen) models, there is no &quot;Home&quot; button and this may take some getting used to for those not already acclimated by recent iPhone models.</li>\r\n	<li>All iPad Pro 11&quot; and iPad Pro 12.9&quot; (3rd &amp; 4th Gen) models are not compatible with many older Lightning-based peripherals without adapters.</li>\r\n	<li>Expensive compared to other iPad models, Android tablets, and even many full featured Mac and Windows notebooks.</li>\r\n</ul>', 'About iPad Pro', 2, 1, 0, 0, '2021-10-09 06:59:33', '2021-10-09 06:59:33'),
(5, 'Video', 'Vedio Upload', 'vedio-upload', '<p>Vedio Upload</p>', 'Vedio Upload', 2, 1, 0, 0, '2021-10-11 17:56:19', '2021-10-11 17:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `post_model_tag`
--

CREATE TABLE `post_model_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_model_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_model_tag`
--

INSERT INTO `post_model_tag` (`id`, `post_model_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 3, 2, NULL, NULL),
(6, 3, 3, NULL, NULL),
(7, 3, 4, NULL, NULL),
(8, 4, 1, NULL, NULL),
(9, 4, 2, NULL, NULL),
(10, 4, 3, NULL, NULL),
(11, 4, 4, NULL, NULL),
(12, 5, 1, NULL, NULL),
(13, 5, 2, NULL, NULL);

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
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `trash` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `sub_cate_name`, `sub_cate_slug`, `user_role_id`, `status`, `trash`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Animals', 'animals', '2', 1, 0, 0, '2021-09-25 18:20:08', '2021-09-25 18:20:08'),
(2, 'Islamic Religion Book', 'islamic-religion-book', '2', 1, 0, 0, '2021-09-25 18:20:55', '2021-09-25 18:20:55'),
(3, 'Laptop', 'laptop', '2', 1, 0, 0, '2021-09-25 18:21:25', '2021-09-25 18:21:25'),
(4, 'Prayer', 'prayer', '2', 1, 0, 0, '2021-09-25 18:21:58', '2021-09-25 18:21:58'),
(5, 'Asia Continent', 'asia-continent', '2', 1, 0, 0, '2021-09-25 18:22:20', '2021-09-25 18:22:20'),
(6, 'Internet', 'internet', '2', 1, 0, 0, '2021-09-25 18:26:15', '2021-09-25 18:26:15'),
(7, 'Mango', 'mango', '2', 1, 0, 0, '2021-10-07 10:13:26', '2021-10-07 10:13:26'),
(8, 'Apple', 'apple', '2', 1, 0, 0, '2021-10-07 10:15:10', '2021-10-07 10:15:10'),
(9, 'Physics', 'physics', '2', 1, 0, 0, '2021-10-07 10:26:14', '2021-10-07 10:26:14'),
(10, 'Chemistry', 'chemistry', '2', 1, 0, 0, '2021-10-07 10:26:32', '2021-10-07 10:26:32');

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
(1, 'Food Chain', 'food-chain', 2, '2021-10-07 11:29:06', '2021-10-07 11:29:06'),
(2, 'Human', 'human', 2, '2021-10-07 11:29:27', '2021-10-07 11:29:27'),
(3, 'Life-Style', 'life-style', 2, '2021-10-07 12:05:15', '2021-10-07 12:05:15'),
(4, 'Health', 'health', 2, '2021-10-07 12:10:41', '2021-10-07 12:10:41');

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
-- Indexes for table `category_post_model`
--
ALTER TABLE `category_post_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_subcategory`
--
ALTER TABLE `category_subcategory`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_models_post_title_unique` (`post_title`);

--
-- Indexes for table `post_model_tag`
--
ALTER TABLE `post_model_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `category_post_model`
--
ALTER TABLE `category_post_model`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category_subcategory`
--
ALTER TABLE `category_subcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `post_models`
--
ALTER TABLE `post_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_model_tag`
--
ALTER TABLE `post_model_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
