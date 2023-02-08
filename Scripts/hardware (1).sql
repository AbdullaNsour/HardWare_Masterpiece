-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 01:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardware`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Corsair', '2023-02-01 20:48:33', '2023-02-01 20:49:03'),
(2, 'HP', '2023-02-01 20:48:52', '2023-02-01 20:48:52'),
(3, 'Logitech', '2023-02-01 20:49:14', '2023-02-01 20:49:14'),
(4, 'Lenovo', '2023-02-02 12:56:33', '2023-02-02 12:56:33'),
(5, 'Dell', '2023-02-02 12:56:38', '2023-02-02 12:56:38'),
(6, 'Asus', '2023-02-05 05:25:15', '2023-02-05 05:25:15'),
(7, 'GTX', '2023-02-05 05:25:29', '2023-02-05 05:25:29'),
(8, 'Raser', '2023-02-05 05:26:19', '2023-02-05 05:26:19'),
(9, 'MSI', '2023-02-05 06:45:50', '2023-02-05 06:45:50'),
(10, 'test', '2023-02-05 06:52:09', '2023-02-05 06:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(20,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, '0.00', '2023-02-01 14:29:47', '2023-02-05 07:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE `cart_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `count` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PC', '', '2023-02-02 11:17:16', '2023-02-02 11:17:16'),
(2, 'Laptop', '', '2023-02-02 11:17:25', '2023-02-02 11:17:25'),
(3, 'Mouse', '', '2023-02-02 12:56:22', '2023-02-02 12:56:22'),
(4, 'headphone', '', '2023-02-05 05:22:26', '2023-02-05 05:22:26'),
(5, 'Keyboard', '', '2023-02-05 05:22:33', '2023-02-05 05:22:33'),
(6, 'Power Supply', '', '2023-02-05 05:22:44', '2023-02-05 05:22:44'),
(7, 'processor', '', '2023-02-05 05:23:09', '2023-02-05 05:23:09');

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

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '', 'test', 'queue test', 'payload teste', 'exception', '2023-02-04 10:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `governorates`
--

CREATE TABLE `governorates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` decimal(6,2) UNSIGNED NOT NULL DEFAULT 50.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `governorates`
--

INSERT INTO `governorates` (`id`, `name`, `zip_code`, `shipping_cost`, `created_at`, `updated_at`) VALUES
(1, 'amman', '11194', '3.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_06_27_201125_create_cats_table', 1),
(7, '2021_06_27_201142_create_brands_table', 1),
(8, '2021_06_27_201205_create_products_table', 1),
(9, '2021_06_27_201228_create_orders_table', 1),
(10, '2021_06_27_201244_create_carts_table', 1),
(11, '2021_06_27_201303_create_settings_table', 1),
(12, '2021_06_27_201405_create_cart_product_table', 1),
(13, '2021_06_27_201426_create_order_product_table', 1),
(14, '2021_07_01_220446_create_governorates_table', 1),
(15, '2021_07_03_022646_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','canceled','completed','shipped','declined','request return') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `shipping_method` enum('Shipping','Pickup From Store') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Shipping',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `shipping_method`, `user_id`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 'pending', 'Shipping', 1, '1503.00', '2023-02-03 07:45:59', '2023-02-03 07:45:59'),
(2, 'pending', 'Shipping', 1, '1203.00', '2023-02-05 07:50:04', '2023-02-05 07:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `count` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-02-03 07:45:59', '2023-02-03 07:45:59'),
(2, 2, 14, 1, '2023-02-05 07:50:04', '2023-02-05 07:50:04');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `discreption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `stock` enum('in Stock','out of stock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in Stock',
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sold` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`, `sale_price`, `discreption`, `brand_id`, `cat_id`, `stock`, `model`, `sold`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Laptop 15-CX', 'products/DgE2DVo7G9Eo9wvP4afZJLo3HXokn3efoj0dXlxO.png', '1500.00', '1400.00', 'Stay connected to what matters most with long-lasting battery life and a sleek and portable, micro-edge bezel design. Built to keep you productive and entertained from anywhere.', 2, 2, 'in Stock', 'RGB Pro', 0, 0, '2023-02-02 11:21:42', '2023-02-04 07:36:35'),
(4, 'Lenovo L340', 'products/XdH7EQcsrTG46Pn7xRYsZLcpDZa8HhaaVXJPx701.jpg', '750.00', '700.00', 'Daily to-do’s, done: Everyday tasks are quickly handled with ease using 11th Gen Intel® Core™ processors.', 4, 2, 'in Stock', 'core i7 G10-H', 0, 0, '2023-02-04 23:36:49', '2023-02-04 23:36:49'),
(5, 'arctis-1-1', 'products/lTVUP86GwLp88esI3LRDJ24npz3BdcI3TxaV4ZMp.jpg', '55.00', '50.00', 'ASUS TUF GT301 Honeycomb Panel Aura RBG Gaming Case', 6, 4, 'in Stock', 'RGB Pro', 0, 0, '2023-02-05 05:30:12', '2023-02-05 05:30:12'),
(6, 'arctis-2-2', 'products/mFzs9IM2OfoOXELycakNisysXlC42Uilj8GCuDRI.jpg', '40.00', '35.00', 'ASUS headphone GT301 Honeycomb Panel Aura RBG Gaming Case', 6, 4, 'in Stock', 'RGB Pro', 0, 0, '2023-02-05 05:31:22', '2023-02-05 05:31:22'),
(8, 'Laptop HP i5', 'products/vKffua9Wwm1nDSHn8bE3RMzzPWJPb7sQ31w4ww4W.png', '590.00', '570.00', 'HP Laptop dw4028nia Honeycomb Panel HP RBG office Case', 2, 2, 'in Stock', 'core i5 G10-H', 0, 0, '2023-02-05 05:34:03', '2023-02-05 05:34:03'),
(9, 'logitech m575', 'products/dNzf7NgWwCynh5iR1lAs7BldAi8R9efbeyHhUshn.jpg', '70.00', '65.00', 'Logitech MX Ergo Wireless Trackball Mouse Adjustable Ergonomic Design Rechargeable, Graphite - Black', 3, 3, 'in Stock', 'RGB Pro', 0, 0, '2023-02-05 05:36:20', '2023-02-05 05:36:20'),
(10, 'Razer Keyboard', 'products/jrZVkmXgsrdJExUDKogRUKLt7V4DwldJL1fYNo51.jpg', '89.00', '80.00', 'Razer Alloy Origins 60 Mechanical Gaming Keyboard', 8, 5, 'in Stock', 'RGB Pro', 0, 0, '2023-02-05 05:39:35', '2023-02-05 05:39:35'),
(11, 'HP laptop', 'products/CCeuFlnLMuTLRE2Xp9iW3SqDNZZYVCwo3fOIftj1.jpg', '750.00', '700.00', 'HP laptop TUF GT301 Honeycomb Panel HP RBG Gaming Case', 2, 2, 'in Stock', 'core i7 G10-H', 0, 0, '2023-02-05 05:41:14', '2023-02-05 05:41:14'),
(12, 'HP Pavilion Ci7', 'products/XWvMnJccbdByQ73FD22odosvjrlQDmf6BHWR1B7A.png', '899.00', '850.00', 'HP Pavilion Laptop 15-eg0002ne 11Gen Core i7 up to 4.7GHz 12M Cash 4-Cores , 16GB RAM DDR4', 2, 2, 'in Stock', 'core i7 G10-H', 0, 0, '2023-02-05 05:47:15', '2023-02-05 05:47:15'),
(13, 'evea', 'products/qtm8KCq66frzIxqbKNeR1YQTiDvDl9Z1NHyzwCFF.png', '79.00', '75.00', 'EVGA 650 BQ - \"Great Quality, Great Value\"80 PLUS Bronze certified, with 85% efficiency or higher', 6, 6, 'in Stock', '370', 0, 0, '2023-02-05 05:49:49', '2023-02-05 05:49:49'),
(14, 'Laptop 1614902', 'products/V1qRwN1lc3T9rXaaOvqVlKd5Zc4gr0VzVMBjp7X5.jpg', '1200.00', '1000.00', 'MAG Codex X5 (1014) Gaming Desktop 12Gen Intel Core i7 K-Series 12-Cores w/ Nvidia RTX 3080 & Liquid CoolerMAG Codex X5 (1014) Gaming Desktop 12Gen Intel Core i7 K-Series 12-Cores w/ Nvidia RTX 3080 & Liquid CoolerMAG Codex X5 (1014) Gaming Desktop 12Gen Intel Core i7 K-Series 12-Cores w/ Nvidia RTX 3080 & Liquid Cooler', 4, 2, 'in Stock', 'core i7 G10-H', 0, 0, '2023-02-05 07:48:56', '2023-02-05 07:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('super_admin','admin','bookkeeper','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `role`, `country`, `city`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah', 'alnsour.194@gmail.com', '0799601893', NULL, '$2y$10$44x7m7zVTaNzer9YfI.2Qu91yyza0A8JPjEpuMuEQL/DJp0jtBJoi', NULL, NULL, 'super_admin', NULL, 'amman', 'Imam Shafi\'i Mosque - Zay Street', NULL, '2023-02-01 14:29:47', '2023-02-03 07:45:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_product_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cats_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `governorates`
--
ALTER TABLE `governorates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `governorates`
--
ALTER TABLE `governorates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD CONSTRAINT `cart_product_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
