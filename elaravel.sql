-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 12:44 PM
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
(1, 'Rubel', 'fafaf', 1, '2019-02-18 08:51:13', '2019-02-18 08:54:28'),
(2, 'Freelancing', 'fafdadf', 1, '2019-02-18 08:51:37', '2019-02-18 08:54:23'),
(3, 'Samsung', 'good phone', 0, '2019-02-26 06:40:58', '2019-02-26 06:40:58');

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
(1, 'Others income', 'sggfsgsgsg', 0, '2019-02-18 08:52:50', '2019-02-18 08:52:50');

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
(7, '2019_02_08_012807_create_sliders_table', 1),
(8, '2019_02_21_103905_create_login-checks_table', 2),
(9, '2019_02_21_105007_create_customers_table', 3),
(10, '2019_02_23_105453_create_shippings_table', 4);

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
(1, 'hdhd', 1, 1, 'fasfaf', 'fafddaf', 44.00, '1550501603.jpg', 'qw', 'blue', 1, '2019-02-18 08:53:24', '2019-02-18 08:55:23');

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
(1, '1550741551.jpg', '1', '2019-02-21 03:32:32', '2019-02-21 03:32:39'),
(2, '1550741628.jpg', '1', '2019-02-21 03:33:48', '2019-02-21 03:34:08'),
(3, '1550741642.jpg', '1', '2019-02-21 03:34:03', '2019-02-21 03:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Nazim', 'vpnazem@gmail.com', NULL, '$2y$10$WGOzLYJBMmenE7e4ge5B.OPQHyYcOLmgeixwUFQwLW4slzCkV/JJq', 'cjz0uVEUB8u8TLG1OM3hSX9fZj1t6aa3zSlbHwFOI1XLrZYyWycGdmTx8n5B', '2019-02-18 06:43:12', '2019-02-18 06:43:12'),
(2, 'user', 'plabon', 'plabon@gmail.com', NULL, '$2y$10$TlY7gvt.FAuNFWwOIgRj9.5JEcBFufbvvIYn.nYaCsnbW/3y2aoAq', NULL, '2019-02-18 07:05:39', '2019-02-18 07:05:39'),
(3, 'user', 'Niren', 'niren@gmail.com', NULL, '$2y$10$cXZZJ75RmMbcxy/ntBGUMemyZ/T0aOOzn4HZlZ/FWdVouerQWGwSi', NULL, '2019-02-18 07:12:07', '2019-02-18 07:12:07'),
(4, 'user', 'Joseph', 'joseph@gmail.com', NULL, '$2y$10$xQwoYi6TbTi0f90huKFKYOAWBL3Y6NJynAViBkGwL2Hk0EuRAYWl2', NULL, '2019-02-18 07:15:24', '2019-02-18 07:15:24'),
(5, 'user', 'laravel', 'laravel@gmail.com', NULL, '$2y$10$BcscXuTSkrTOB2.cTwB.Vu//HG/BMaeWnjLn3FWKUONQj40BEqRye', NULL, '2019-02-18 07:20:20', '2019-02-18 07:20:20'),
(6, 'user', 'Vue', 'vue@gmail.com', NULL, '$2y$10$mBzKund.iIqzjHGEYrP53eI5bXtIzqTAyVC0.mDz/7SD2uXxwRyEK', NULL, '2019-02-18 07:22:15', '2019-02-18 07:22:15'),
(7, 'user', 'fafaf', 'faf@gmail.com', NULL, '$2y$10$o98V7wp6cMxXbJjjcwtVK.EJrz45VGCmG4CjO8YXPhUkqbHikww7K', NULL, '2019-02-18 07:25:12', '2019-02-18 07:25:12'),
(8, 'user', 'faf', 'fafa@gmail.com', NULL, '$2y$10$mpEwi/AsNKVevVOWfUpCz.R1Q2T9TD1Jj1MXSqPlVvIMfOk5Qg1pC', NULL, '2019-02-18 07:26:51', '2019-02-18 07:26:51'),
(9, 'user', 'fafa', 'affa@gmail.com', NULL, '$2y$10$fUyh9Z5o35VgxOWRuHxspelgPPcMAHgtWMdk3gLvaRo7Aq2BP95PW', NULL, '2019-02-18 07:28:15', '2019-02-18 07:28:15'),
(10, 'user', 'fafa', 'affgsgda@gmail.com', NULL, '$2y$10$bGJKeGg5n4Ii4BqbNYEGqOLe63qKki/0dgFeJi2q0oCjpbeGV6vUG', NULL, '2019-02-18 07:30:08', '2019-02-18 07:30:08'),
(11, 'user', 'fadfadf', 'fafafafafa@gmail.com', NULL, '$2y$10$JvheBaAnudQoS1X45K3RbuWJ.Q4NBKtlAK/HF/Qg8M7qhMn.lBUeu', NULL, '2019-02-18 07:31:44', '2019-02-18 07:31:44'),
(12, 'user', 'vzvzffaf', 'fasdfarer@gmail.com', NULL, '$2y$10$1ysAIHxM1axuXNzr7ZgSB.e15nQk2cWOPQZtt4znPhytPygwt7P4q', 'ni82FRjXOw9bwm7orQWF2OrnBFvG2LAwaMqrUiMCGIaNsqOUt6QSmnHrHqX9', '2019-02-18 07:36:00', '2019-02-18 07:36:00'),
(13, 'user', 'fafafadfafzv', 'twsgs@gmail.com', NULL, '$2y$10$5yq4cEkMER0qa7XKcWZnWeQrZ0xMlrMCTznriUFwJAtRGaYXC4CJu', 'SehRlqZUypsC8EZX3k1saDztvzTgzDFCdjwX9N3tFpeCQY2yEIs4k8CMbEOO', '2019-02-18 07:36:42', '2019-02-18 07:36:42'),
(14, 'user', 'rtuyrur', 'rtyuyru@gmail.com', NULL, '$2y$10$rdF/h71n6uQZWw/3rm4ydOedpGlQWmcUrAAOdO87QLMtH9ruuprbC', 'fGwpgLFKdR1hNJkUqWB3RIH8He08tMl0kPEoTtfjThw1fOgFueuzPPhIe8x5', '2019-02-18 07:37:36', '2019-02-18 07:37:36'),
(15, 'user', 'ghjvcc', 'bfbsd@gmail.com', NULL, '$2y$10$Ibqv2Nw.0ZbfF7t06Kcj5uL/GNaPuYGoDzGmgeC.Cx3xe3y.eWple', 'kLJUzkHxLJiTgjOm15aStswGE45eKadn70dIKKUxyHWc7zJSSZJzD4dcvNWT', '2019-02-18 07:40:16', '2019-02-18 07:40:16'),
(16, 'user', 'bxbxb', 'xbbxb@gmail.com', NULL, '$2y$10$HMHWcKuQrulfUuzZX7PXMOLmRlY/Ji99aKbUBFM9Fbaxna6C05F7q', 'xwZjyDfbJ9DttQrczKcm2FYanaARP51na6i75EQ3n004g0o5WplYyN5OqFOj', '2019-02-18 07:42:13', '2019-02-18 07:42:13'),
(17, 'user', 'bbxgsgs', 'aftrwtbb@gmail.com', NULL, '$2y$10$N3NUNsdxxoVn6hqjdQJf2OKNZQ8c8En7ffb3grVUR117X6d82Eij2', 'zo43VPdnKZZ6YPv37BqUl2V2T95xAZ8JoULlZAPoeuo0fCBFFojlj7SXhnuW', '2019-02-18 07:44:07', '2019-02-18 07:44:07'),
(18, 'user', 'xbbx', 'oyuioigsz@gmail.com', NULL, '$2y$10$lEuq35PI/9S0nTLditwui.vbYi5hBFif/KzZ2qiA3C89I5EidfMiS', NULL, '2019-02-18 07:46:24', '2019-02-18 07:46:24'),
(19, 'user', 'iuuit', 'qrqr@gmail.com', NULL, '$2y$10$reTfKwycgd/FXb5kTVaTu.Hkv6BCwXAR0l3vt2cvkKIBIx.GpQHB2', 'yKf7SD2QQ7lwmlbAKNLi3N1YbHCg2pIPrSKKIkD0W9kpjqsUbRCngXSYx28H', '2019-02-18 07:49:22', '2019-02-18 07:49:22'),
(20, 'user', 'll@gmail.com', 'll@gmail.com', NULL, '$2y$10$IP0/XFiZb2An2/aAkDBZo.O.tFcrHjLqzpf3OyHiCAYSRw9RxpqKG', NULL, '2019-02-18 08:02:35', '2019-02-18 08:02:35'),
(21, 'user', 'ncnbcn', 'ncncnb@gmail.com', NULL, '$2y$10$w8mfS/YiucfDmZiU9TGFuetVxxKTP4mfCBuQzA0mhQ8QrADy.2SXS', NULL, '2019-02-18 08:39:51', '2019-02-18 08:39:51');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
