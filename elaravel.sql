-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2019 at 07:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', NULL, NULL),
(2, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 04:54:32', '2019-02-06 04:54:32'),
(3, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 04:57:45', '2019-02-06 04:57:45'),
(38, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:25:19', '2019-02-06 07:25:19'),
(39, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:25:25', '2019-02-06 07:25:25'),
(40, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:25:28', '2019-02-06 07:25:28'),
(41, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:25:36', '2019-02-06 07:25:36'),
(42, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:26:45', '2019-02-06 07:26:45'),
(43, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:26:48', '2019-02-06 07:26:48'),
(44, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:27:32', '2019-02-06 07:27:32'),
(45, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:30:07', '2019-02-06 07:30:07'),
(46, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:30:44', '2019-02-06 07:30:44'),
(47, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:33:31', '2019-02-06 07:33:31'),
(48, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:39:18', '2019-02-06 07:39:18'),
(49, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:39:23', '2019-02-06 07:39:23'),
(50, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:41:53', '2019-02-06 07:41:53'),
(51, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:53:53', '2019-02-06 07:53:53'),
(52, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:54:05', '2019-02-06 07:54:05'),
(53, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:54:51', '2019-02-06 07:54:51'),
(54, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:55:36', '2019-02-06 07:55:36'),
(55, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 07:58:29', '2019-02-06 07:58:29'),
(56, 'vpnazem@gmail.com', 'adsfafa', 'Nazim', '01724074076', '2019-02-06 07:58:37', '2019-02-06 07:58:37'),
(57, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 08:38:41', '2019-02-06 08:38:41'),
(58, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 08:38:47', '2019-02-06 08:38:47'),
(59, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 08:39:04', '2019-02-06 08:39:04'),
(60, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 08:40:23', '2019-02-06 08:40:23'),
(61, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 08:40:31', '2019-02-06 08:40:31'),
(62, 'vpnazem@gmail.com', '01585441010', 'Nazim', '01724074076', '2019-02-06 08:42:41', '2019-02-06 08:42:41'),
(63, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-06 08:43:35', '2019-02-06 08:43:35'),
(64, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-08 03:25:36', '2019-02-08 03:25:36'),
(65, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-08 03:25:42', '2019-02-08 03:25:42'),
(66, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-08 03:25:45', '2019-02-08 03:25:45'),
(67, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-11 07:04:59', '2019-02-11 07:04:59'),
(68, 'vpnazem@gmail.com', '01686441010', 'Nazim', '01724074076', '2019-02-11 07:05:14', '2019-02-11 07:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rubel', 'dfdgdg', 1, '2019-02-02 13:36:22', '2019-02-06 23:46:05'),
(3, 'Shipon', 'Shipon is good', 1, '2019-02-07 00:12:12', '2019-02-07 00:12:32'),
(4, 'Ripon', 'Ripon is not good', 1, '2019-02-07 00:13:16', '2019-02-08 12:17:24'),
(5, 'jamal', 'it is good', 1, '2019-02-08 12:17:15', '2019-02-08 12:17:29'),
(6, 'Mofiz', 'is bad', 1, '2019-02-08 12:18:25', '2019-02-08 12:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'joseph', 'ooo', 1, '2019-02-02 13:36:59', '2019-02-06 23:54:30'),
(2, 'Samsung', 'Samsung is best', 1, '2019-02-10 01:26:13', '2019-02-10 01:28:15'),
(3, 'Symphony', 'symphony is Bangladeshi Phone', 1, '2019-02-10 01:27:10', '2019-02-10 01:28:19'),
(4, 'oppo', 'oppo is  one of the best phones', 1, '2019-02-10 01:28:06', '2019-02-10 01:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_29_144454_create_admins_table', 1),
(4, '2019_01_30_094101_create_categories_table', 1),
(5, '2019_01_30_181025_create_manufactures_table', 1),
(6, '2019_01_31_144313_create_products_table', 1),
(7, '2019_02_08_012807_create_sliders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `manufacture_id`, `short_description`, `long_description`, `price`, `image`, `size`, `color`, `status`, `created_at`, `updated_at`) VALUES
(3, 'head', 1, 1, 'xxxxx', 'xxxx', 888.00, '1549176752.jpg', 'x', 'beguni', 1, '2019-02-02 14:44:36', '2019-02-03 01:42:29'),
(6, 'samsung', 3, 1, 'ggggggggg', 'rrrrrrrrr', 555.00, '1549176390.jpg', 'xxl', 'red', 1, '2019-02-03 00:46:30', '2019-02-07 19:17:39'),
(7, 'samsung', 1, 1, 'ggggggggg', 'rrrrrrrrr', 555.00, '1549176420.jpg', 'xxl', 'red', 1, '2019-02-03 00:47:00', '2019-02-07 19:17:43'),
(8, 'samsung', 4, 1, 'ggggggggg', 'rrrrrrrrr', 555.00, '1549176671.jpg', 'xxl', 'red', 1, '2019-02-03 00:48:10', '2019-02-07 19:17:49'),
(9, 'samsung', 1, 1, 'ggggggggg', 'rrrrrrrrr', 555.00, '1549176643.jpg', 'xxl', 'red', 1, '2019-02-03 00:49:21', '2019-02-08 13:01:47'),
(10, 'valo', 3, 1, 'good', 'nice', 99.00, '1549650006.jpg', 'iu', 'blue', 1, '2019-02-08 12:20:06', '2019-02-08 13:02:05'),
(11, 'Hashi', 4, 1, 'kalo', 'loop', 1200.00, '1549650112.jpg', 'vi', 'yello', 1, '2019-02-08 12:21:52', '2019-02-08 13:02:33'),
(12, 'Mobile', 6, 2, 'Samsung is better', 'We like samsung', 12000.00, '1549783896.jpg', 'xx', 'black', 1, '2019-02-10 01:31:36', '2019-02-10 01:39:57'),
(13, 'Mobile', 5, 3, 'Symphony is not good', 'It has many pbl', 3400.00, '1549784013.jpg', 'ty', 'red', 1, '2019-02-10 01:33:33', '2019-02-10 01:40:08'),
(14, 'mobile', 6, 3, 'not good', 'authority has improved', 5000.00, '1549784112.jpg', 'vi', 'pink', 1, '2019-02-10 01:35:12', '2019-02-10 01:40:14'),
(15, 'Mobile', 5, 4, 'oppo is valuable phone', 'oppo is number one brand in the world', 12000.00, '1549784187.jpg', 'xl', 'gold', 1, '2019-02-10 01:36:27', '2019-02-10 01:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, '1549636984.jpg', '1', '2019-02-08 08:43:04', '2019-02-08 11:44:58'),
(4, '1549637296.jpg', '0', '2019-02-08 08:48:17', '2019-02-08 08:48:17'),
(5, '1549637984.jpg', '0', '2019-02-08 08:59:44', '2019-02-08 08:59:44'),
(6, '1549638246.jpg', '1', '2019-02-08 09:04:06', '2019-02-08 11:46:45'),
(7, '1549638298.jpg', '1', '2019-02-08 09:04:58', '2019-02-08 11:47:33'),
(8, '1549638319.jpg', '0', '2019-02-08 09:05:19', '2019-02-08 09:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
