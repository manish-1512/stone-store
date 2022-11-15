-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 01:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stone_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'manish@gmail.com', NULL, '$2y$10$rKiwz21gpU4O7PbgJcIkWOm.MRjx1FkFvw54tiltFKuNe6qmGNXPm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `label_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `hindi_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `label_id`, `name`, `hindi_name`, `order`, `banner`, `image`, `short_description`, `description`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `slug`) VALUES
(1, NULL, NULL, 'GEMSTONES', 'GEMSTONES', 1, '1667903660.png', '', '<p>asasas</p>', '<p>asasa</p>', 1, 0, '2022-10-13 10:05:46', '2022-11-08 10:34:20', 'gemstones'),
(2, NULL, NULL, 'RUDRAKSHA', 'RUDRAKSHA', 2, '1665655602.jpg', '', '<p>asasas sew</p>', '<p>asasasdsd</p>', 1, 0, '2022-10-13 10:06:42', '2022-10-28 05:24:01', 'rudraksha'),
(12, 1, 1, 'BLUE SAPPHIRE', 'नीलम', 7, '1666936034.jpg', '1666936034.png', NULL, NULL, 1, 0, '2022-10-28 05:47:14', '2022-10-28 10:01:49', 'blue-sapphire'),
(9, NULL, NULL, 'PEARL', 'PEARL', 3, '1666934579.jpg', '', NULL, NULL, 1, 0, '2022-10-28 05:22:59', '2022-10-28 05:22:59', 'pearl'),
(10, NULL, NULL, 'jewellery', 'jewellery', 4, '1666934729.jpg', '', NULL, NULL, 1, 0, '2022-10-28 05:25:29', '2022-10-28 05:25:29', 'jewellery'),
(13, 1, 1, 'CAT’S EYE', 'लहसुनिया', 8, '1666936222.jpg', '1666936222.png', NULL, NULL, 1, 0, '2022-10-28 05:50:22', '2022-10-28 10:02:23', 'cats-eye'),
(14, 2, NULL, '1 TO 7 MUKHI RUDRAKSHA', NULL, 12, '1666939122.jpg', '1666939122.png', '<p>qwqwq</p>', '<p>qwq</p>', 1, 0, '2022-10-28 06:38:42', '2022-10-28 06:38:42', '1-to-7-mukhi-rudraksha'),
(15, 2, NULL, '8 Mukhi', NULL, 13, '1666939204.jpg', '1666939204.png', '<p>as</p>', '<p>as14</p>', 1, 0, '2022-10-28 06:40:04', '2022-10-28 06:40:29', '8-mukhi'),
(16, 2, NULL, '9 Mukh', NULL, 14, '1666939279.jpg', '1666939279.png', NULL, NULL, 1, 0, '2022-10-28 06:41:19', '2022-10-28 06:41:19', '9-mukh'),
(17, 2, NULL, '10 mukhi', NULL, 14, '1666939315.jpg', '1666939315.png', NULL, NULL, 1, 0, '2022-10-28 06:41:55', '2022-10-28 06:41:55', '10-mukhi'),
(18, 2, NULL, '11 Mukhi', NULL, 15, '1666939358.jpg', '1666939358.png', '<p>1212</p>', '<p>12</p>', 1, 0, '2022-10-28 06:42:38', '2022-10-28 06:42:38', '11-mukhi');

-- --------------------------------------------------------

--
-- Table structure for table `category_label`
--

CREATE TABLE `category_label` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_label`
--

INSERT INTO `category_label` (`id`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Precious Gemstone', NULL, NULL),
(2, 'Semi- Precious Gemstone', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `name` varchar(100) NOT NULL,
  `banner` varchar(250) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(2) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for cms page';

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`name`, `banner`, `slug`, `title`, `body`, `meta_title`, `meta_description`, `meta_keywords`, `is_active`, `created_at`, `updated_at`) VALUES
('about', 'new_logo.png', 'about-us', 'about us', '<ul><li>Pasasasa wewe</li><li>wewew</li><li>ew</li><li>e</li><li>we</li><li>w</li><li>w</li><li>ewe</li></ul>', 'asasasdsdsdsd', 'asassdsdsds', 'asasasasds sewewe', 1, '2020-05-18 13:20:41', '2021-12-18 16:25:19'),
('contact', NULL, 'contact-us', 'contact', 'Place <em>some</em> <u>text</u> <strong>here</strong>', 'contact', 'contact', 'contact', 1, '2020-05-18 13:28:43', '2021-12-18 16:30:07'),
('faq', NULL, 'faq', 'faq', 'Place <em>some</em> <u>text</u> <strong>here</strong>', 'faq', 'faq', 'faq', 1, '2022-10-10 12:11:42', '2022-10-10 12:11:42'),
('privacy-policy\r\n', NULL, 'privacy-policy', 'pp', '<ol><li>asasasasasasa</li><li>a</li><li>a</li><li>sa</li><li>s</li><li>as</li><li>as</li><li>as</li><li>&nbsp;</li></ol>', 'pp', 'pp', 'pp', 1, '2022-10-10 12:10:27', '2022-10-10 12:10:27'),
('terms', NULL, 'terms', 'terms', '<p>Place <i>some</i> text <strong>here</strong></p>', 'terms', 'tertm', 'term', 1, '2022-10-10 12:11:15', '2022-10-10 12:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
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
-- Table structure for table `final_product_items`
--

CREATE TABLE `final_product_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `final_product_items`
--

INSERT INTO `final_product_items` (`id`, `name`, `parent_id`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Ring2', NULL, '1668232351.png', '0', '2022-11-17 12:05:28', '2022-11-12 00:22:40'),
(2, '1333', NULL, '1668232195.png', '0', '2022-11-07 06:45:20', '2022-11-12 00:22:44'),
(6, 'pandent121', NULL, '1668230615-image.png', '0', '2022-11-11 23:53:35', '2022-11-12 00:22:46'),
(7, 'r1', 1, NULL, '0', '2022-11-12 02:12:04', '2022-11-15 00:27:11'),
(8, 'r2', 1, NULL, '1', '2022-11-12 02:12:10', '2022-11-15 00:27:07'),
(9, 'r3', 1, NULL, '1', '2022-11-12 02:12:17', '2022-11-12 02:12:17'),
(10, 'r4', 1, NULL, '1', '2022-11-12 02:12:23', '2022-11-12 02:12:23');

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
(4, '2022_10_10_045003_add_social_login_field', 2),
(5, '2022_10_10_055924_create_admins_table', 3),
(6, '2022_10_12_043614_create_admins_table', 0),
(7, '2022_10_12_043614_create_cms_pages_table', 0),
(8, '2022_10_12_043614_create_contacts_table', 0),
(9, '2022_10_12_043614_create_failed_jobs_table', 0),
(10, '2022_10_12_043614_create_password_resets_table', 0),
(11, '2022_10_12_043614_create_settings_table', 0),
(12, '2022_10_12_043614_create_users_table', 0),
(13, '2022_10_13_052535_create_categories_table', 0),
(16, '2022_11_08_110201_create_products_table', 6),
(18, '2022_11_15_053020_create_product_available_variant_table', 7),
(19, '2022_11_08_111411_create_product_variants_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('manish@gmail.com', '$2y$10$Nv6aIfAc.FDOI1QsHvWevOCe5qOHnzhNNH/S5I.e4T1k2YyEhexX6', '2022-10-09 23:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `specifications` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `stock_status` tinyint(1) NOT NULL DEFAULT 1,
  `quantity` int(11) NOT NULL,
  `available_to_create` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'in this colum we save what kind of item we create form this product like ring,pandent etc.this colum relate to the final_product_items table ids',
  `disappear_after_order` tinyint(1) NOT NULL COMMENT 'these kind of products is not show after order',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_available_variant`
--

CREATE TABLE `product_available_variant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_variant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_matrials`
--

CREATE TABLE `product_matrials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matrial_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_matrials`
--

INSERT INTO `product_matrials` (`id`, `matrial_name`, `created_at`, `updated_at`) VALUES
(2, 'gold', '2022-11-01 07:28:18', '2022-11-12 04:28:25'),
(8, 'silver', '2022-11-05 08:26:44', '2022-11-12 04:28:42'),
(11, 'white gold', '2022-11-07 06:16:05', '2022-11-12 04:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_matrial_id` bigint(20) UNSIGNED NOT NULL,
  `item_parent_id` bigint(20) UNSIGNED NOT NULL,
  `final_product_item_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_matrial_id`, `item_parent_id`, `final_product_item_id`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 8, '211.00', '2022-11-15 00:45:35', '2022-11-15 00:45:35'),
(2, 2, 1, 7, '12.00', '2022-11-15 00:45:57', '2022-11-15 00:45:57'),
(3, 8, 1, 7, '212.00', '2022-11-15 00:46:18', '2022-11-15 00:46:18'),
(4, 11, 1, 7, '2121.00', '2022-11-15 00:46:27', '2022-11-15 00:46:27'),
(5, 8, 1, 8, '212.00', '2022-11-15 00:46:53', '2022-11-15 00:46:53'),
(6, 11, 1, 8, '22222.00', '2022-11-15 00:47:10', '2022-11-15 00:47:10'),
(7, 2, 1, 9, '212.00', '2022-11-15 00:47:25', '2022-11-15 00:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` tinyint(4) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `site_title` varchar(200) DEFAULT NULL,
  `seo_title` varchar(200) DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `copyright` varchar(250) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `about_us` tinytext DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `favicon` varchar(200) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `youtube` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL,
  `record_per_page` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `slug`, `site_title`, `seo_title`, `seo_description`, `copyright`, `address`, `email`, `phone`, `about_us`, `logo`, `favicon`, `facebook`, `twitter`, `youtube`, `instagram`, `record_per_page`, `created_at`, `updated_at`) VALUES
(2, 'settings', 'asasas 1221asa', 'asasasasas', 'asasasa', 'asasa', 'asas', 'asas@sdjl.com', '12121122112', 'qwqwq', '1665559075-logo.png', '1665559075-favicon.png', 'facebook@sdsd.com12', 'facebook@sdsd.com21', 'facebook@sdsd.com21', 'facebook@sdsd.com21', NULL, NULL, '2022-10-12 01:47:55');

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
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`, `social_id`, `social_type`) VALUES
(1, 'manish kumar ujjainia', 'manish@gmail.com', NULL, '$2y$10$rKiwz21gpU4O7PbgJcIkWOm.MRjx1FkFvw54tiltFKuNe6qmGNXPm', '123456789', NULL, '2022-10-08 00:32:16', '2022-10-08 00:32:16', NULL, NULL),
(2, 'manish kumar', 'kumarvijesh089@gmail.com', NULL, 'eyJpdiI6IlJRSGg5MDBRa3NpZGpqcnNtbVptTmc9PSIsInZhbHVlIjoib3RIRnhianB2Y0tFOFNRNUdYbUxML1dicjRGWEMrSVVqSmFna1R0V2ViWT0iLCJtYWMiOiJhNDY0M2UwZTU5NTU2NjdkNzA4Njc5ZWM1MmY2YWVmMWYxNTkwMzA4ZWJiOTA1MDM0ZjIzZmUzMTY3NGE2NGI5IiwidGFnIjoiIn0=', NULL, NULL, '2022-10-09 23:57:38', '2022-10-09 23:57:38', '114273340327855230681', 'google');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_label`
--
ALTER TABLE `category_label`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `final_product_items`
--
ALTER TABLE `final_product_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_available_variant`
--
ALTER TABLE `product_available_variant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_available_variant_product_id_foreign` (`product_id`),
  ADD KEY `product_available_variant_product_variant_id_foreign` (`product_variant_id`);

--
-- Indexes for table `product_matrials`
--
ALTER TABLE `product_matrials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_matrial_id_foreign` (`product_matrial_id`),
  ADD KEY `product_variants_final_product_item_id_foreign` (`final_product_item_id`),
  ADD KEY `product_variants_item_parent_id_foreign` (`item_parent_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category_label`
--
ALTER TABLE `category_label`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `final_product_items`
--
ALTER TABLE `final_product_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_available_variant`
--
ALTER TABLE `product_available_variant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_matrials`
--
ALTER TABLE `product_matrials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_available_variant`
--
ALTER TABLE `product_available_variant`
  ADD CONSTRAINT `product_available_variant_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_available_variant_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_final_product_item_id_foreign` FOREIGN KEY (`final_product_item_id`) REFERENCES `final_product_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_variants_item_parent_id_foreign` FOREIGN KEY (`item_parent_id`) REFERENCES `final_product_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_variants_product_matrial_id_foreign` FOREIGN KEY (`product_matrial_id`) REFERENCES `product_matrials` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
