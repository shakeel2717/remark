-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2021 at 05:00 PM
-- Server version: 5.6.51
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asanhubc_remarketed`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_inventories`
--

CREATE TABLE `add_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `rma_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `reason_id` int(11) DEFAULT NULL,
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditNote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_inventories`
--

INSERT INTO `add_inventories` (`id`, `users_id`, `rma_id`, `customers_id`, `reason_id`, `serial`, `model`, `issue`, `creditNote`, `sale_price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, '3433434', 'iphone 8 64GB', 'SCHERM', NULL, '200', '2021-08-01 02:26:11', '2021-08-01 02:26:11'),
(2, 1, 3, 3, 1, '2342342344', 'iPhone 8 64GB', '233423', NULL, '200', '2021-08-01 14:12:34', '2021-08-01 14:12:34'),
(3, 1, 7, 5, 1, '353921105103386', 'iPhone 11 Pro Max 256GB', 'LCD', NULL, '550', '2021-08-01 17:10:26', '2021-08-01 17:10:26'),
(4, 1, 7, 5, 2, '353926100477446', 'iPhone 11 Pro Max 256GB', 'Network', NULL, '550', '2021-08-01 17:10:59', '2021-08-01 17:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `users_id`, `name`, `email`, `phone`, `address`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'ARA', 'GLOBAL@GROUP.COM', '0643764401', 'EREPRIJS3', 1, '2021-08-01 02:24:15', '2021-08-01 02:24:15'),
(2, 1, 'ara', 'GLOBAL@GROUP.COM', NULL, NULL, 0, '2021-08-01 02:24:32', '2021-08-01 02:24:32'),
(3, 1, 'COOLMIX', 'AJMAL@COOLMIX.NL', NULL, NULL, 0, '2021-08-01 02:27:30', '2021-08-01 02:27:30'),
(4, 1, 'ALCHAMY', NULL, NULL, NULL, 1, '2021-08-01 17:08:46', '2021-08-01 17:08:46'),
(5, 1, 'REMARKETED LEEK', NULL, NULL, NULL, 0, '2021-08-01 17:09:05', '2021-08-01 17:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_histories`
--

CREATE TABLE `login_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_histories`
--

INSERT INTO `login_histories` (`id`, `users_id`, `device`, `os`, `browser`, `city`, `country`, `created_at`, `updated_at`) VALUES
(1, '1', 'Desktop', 'Mac 10.15.6', 'Chrome', 'Mountain View', 'United States', '2021-08-01 02:23:28', '2021-08-01 02:23:28'),
(2, '1', 'Desktop', 'Mac 10.15.6', 'Chrome', 'Mountain View', 'United States', '2021-08-01 13:44:48', '2021-08-01 13:44:48'),
(3, '1', 'Desktop', 'Mac 10.15.6', 'Chrome', 'Mountain View', 'United States', '2021-08-01 17:04:59', '2021-08-01 17:04:59'),
(4, '1', 'Desktop', 'Mac 10.15.6', 'Chrome', 'Mountain View', 'United States', '2021-08-01 19:27:11', '2021-08-01 19:27:11'),
(5, '1', 'Desktop', 'Mac 10.15.7', 'Chrome', 'Mountain View', 'United States', '2021-08-02 17:59:50', '2021-08-02 17:59:50'),
(6, '2', 'Desktop', 'Windows 10', 'Chrome', 'Mountain View', 'United States', '2021-08-03 10:29:51', '2021-08-03 10:29:51'),
(7, '1', 'Mobile', 'iOS 14.6', 'Mobile Safari', 'Mountain View', 'United States', '2021-08-05 17:45:31', '2021-08-05 17:45:31'),
(8, '3', 'Desktop', 'Windows 10', 'Chrome', 'Mountain View', 'United States', '2021-08-05 17:47:48', '2021-08-05 17:47:48'),
(9, '4', 'Desktop', 'Windows 10', 'Chrome', 'Mountain View', 'United States', '2021-08-07 13:07:13', '2021-08-07 13:07:13');

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
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2021_07_16_152544_create_users_table', 1),
(3, '2021_07_16_164727_create_login_histories_table', 1),
(4, '2021_07_20_144132_create_supports_table', 1),
(5, '2021_07_22_063221_create_admins_table', 1),
(6, '2021_07_26_175839_create_suppliers_table', 1),
(7, '2021_07_26_190745_create_rmas_table', 1),
(8, '2021_07_26_190811_create_warehouses_table', 1),
(9, '2021_07_26_193238_create_customers_table', 1),
(10, '2021_07_27_111834_create_sale_orders_table', 1),
(11, '2021_07_27_183652_create_add_inventories_table', 1),
(12, '2021_07_27_192628_create_rma_refunds_table', 1),
(13, '2021_07_27_194153_create_reasons_table', 1),
(14, '2021_07_31_115153_create_rmahistories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reasons`
--

CREATE TABLE `reasons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reasons`
--

INSERT INTO `reasons` (`id`, `users_id`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'SCHERM', 'Active', '2021-08-01 02:25:34', '2021-08-01 02:25:34'),
(2, 1, 'icloud', 'Active', '2021-08-01 17:06:35', '2021-08-01 17:06:35'),
(3, 1, 'Microfoon', 'Active', '2021-08-01 17:06:46', '2021-08-01 17:06:46'),
(4, 1, 'Speaker', 'Active', '2021-08-01 17:06:52', '2021-08-01 17:06:52'),
(5, 1, 'Camera', 'Active', '2021-08-01 17:06:56', '2021-08-01 17:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `rmahistories`
--

CREATE TABLE `rmahistories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `rma_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rmahistories`
--

INSERT INTO `rmahistories` (`id`, `users_id`, `rma_id`, `customers_id`, `title`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'RMA Created Successfully', 'RMA# 1 Created by jeroen poelsma on 2021-07-31 22:24:52', '2021-08-01 02:24:52', '2021-08-01 02:24:52'),
(2, 1, 1, 2, 'Inventory Added into This RMA', 'Inventory Added into RMA# 1 Successfully by jeroen poelsma on 2021-07-31 22:26:11', '2021-08-01 02:26:11', '2021-08-01 02:26:11'),
(3, 1, 2, 2, 'RMA Created Successfully', 'RMA# 2 Created by jeroen poelsma on 2021-07-31 22:26:56', '2021-08-01 02:26:56', '2021-08-01 02:26:56'),
(4, 1, 3, 3, 'RMA Created Successfully', 'RMA# 3 Created by jeroen poelsma on 2021-07-31 22:27:46', '2021-08-01 02:27:46', '2021-08-01 02:27:46'),
(5, 1, 4, 2, 'RMA Created Successfully', 'RMA# 4 Created by jeroen poelsma on 2021-08-01 09:48:31', '2021-08-01 13:48:31', '2021-08-01 13:48:31'),
(6, 1, 3, 3, 'Inventory Added into This RMA', 'Inventory Added into RMA# 3 Successfully by jeroen poelsma on 2021-08-01 10:12:34', '2021-08-01 14:12:34', '2021-08-01 14:12:34'),
(7, 1, 5, 2, 'RMA Created Successfully', 'RMA# 5 Created by jeroen poelsma on 2021-08-01 13:05:51', '2021-08-01 17:05:51', '2021-08-01 17:05:51'),
(8, 1, 6, 5, 'RMA Created Successfully', 'RMA# 6 Created by jeroen poelsma on 2021-08-01 13:09:15', '2021-08-01 17:09:15', '2021-08-01 17:09:15'),
(9, 1, 7, 5, 'RMA Created Successfully', 'RMA# 7 Created by jeroen poelsma on 2021-08-01 13:09:29', '2021-08-01 17:09:29', '2021-08-01 17:09:29'),
(10, 1, 7, 5, 'Inventory Added into This RMA', 'Inventory Added into RMA# 7 Successfully by jeroen poelsma on 2021-08-01 13:10:26', '2021-08-01 17:10:26', '2021-08-01 17:10:26'),
(11, 1, 7, 5, 'Inventory Added into This RMA', 'Inventory Added into RMA# 7 Successfully by jeroen poelsma on 2021-08-01 13:10:59', '2021-08-01 17:10:59', '2021-08-01 17:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `rmas`
--

CREATE TABLE `rmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `supplire_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rmas`
--

INSERT INTO `rmas` (`id`, `users_id`, `customer_id`, `warehouse_id`, `supplire_id`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 1, 'New', 1, '2021-08-01 02:24:52', '2021-08-01 02:24:52'),
(2, 1, 2, 1, 1, 'New', 1, '2021-08-01 02:26:56', '2021-08-01 02:26:56'),
(3, 1, 3, 1, 1, 'New', 0, '2021-08-01 02:27:46', '2021-08-01 02:27:46'),
(4, 1, 2, 1, 1, 'New', 0, '2021-08-01 13:48:31', '2021-08-01 13:48:31'),
(5, 1, 2, 1, 1, 'New', 0, '2021-08-01 17:05:51', '2021-08-01 17:05:51'),
(6, 1, 5, 1, 4, 'New', 0, '2021-08-01 17:09:15', '2021-08-01 17:09:15'),
(7, 1, 5, 1, 4, 'New', 1, '2021-08-01 17:09:29', '2021-08-01 17:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `rma_refunds`
--

CREATE TABLE `rma_refunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `rma_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditNote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_orders`
--

CREATE TABLE `sale_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `txid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Default',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` tinyint(1) NOT NULL DEFAULT '0',
  `googleCode` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `refer`, `status`, `token`, `reset_token`, `city`, `country`, `mobile`, `google`, `googleCode`, `created_at`, `updated_at`) VALUES
(1, 'jeroen', 'poelsma', 'jeroenpoelsma', 'jeroen@tweedekans.nl', 'jeroen99', 'Default', 'Pending', 'PZMY79Q4TXG4F5BG8YFS7CEB', NULL, 'Mountain View', 'United States', NULL, 0, NULL, '2021-08-01 02:23:09', '2021-08-01 02:23:09'),
(2, 'Mercedes Benson', 'Stacey Kirkland', 'hecygu', 'tewysym@mailinator.com', 'Pa$$w0rd!', 'Default', 'Pending', '01E0CDK4Y5614IIOFGPLE2QD', NULL, 'Mountain View', 'United States', NULL, 0, NULL, '2021-08-03 10:29:43', '2021-08-03 10:29:43'),
(3, 'Colleen Sykes', 'Orla Alford', 'janinib', 'guwonu@mailinator.com', 'Pa$$w0rd!', 'Default', 'Pending', 'GYPQ2MLOXAC6FY2WG2H8VDHA', NULL, 'Mountain View', 'United States', NULL, 0, NULL, '2021-08-05 17:47:37', '2021-08-05 17:47:37'),
(4, 'Shakeel', 'Ahmad', 'shakeel2717', 'shakeel2717@gmail.com', 'asdfasdf', 'Default', 'Pending', 'VQDSDEGSTQYHQIR9Y1JYZQAK', NULL, 'Mountain View', 'United States', NULL, 0, NULL, '2021-08-07 13:06:39', '2021-08-07 13:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `users_id`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, 1, 'REMARKETED HQ', 'LEEK', '2021-08-01 02:24:43', '2021-08-01 02:24:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_inventories`
--
ALTER TABLE `add_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `login_histories`
--
ALTER TABLE `login_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmahistories`
--
ALTER TABLE `rmahistories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmas`
--
ALTER TABLE `rmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rma_refunds`
--
ALTER TABLE `rma_refunds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_orders`
--
ALTER TABLE `sale_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_inventories`
--
ALTER TABLE `add_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_histories`
--
ALTER TABLE `login_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rmahistories`
--
ALTER TABLE `rmahistories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rmas`
--
ALTER TABLE `rmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rma_refunds`
--
ALTER TABLE `rma_refunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_orders`
--
ALTER TABLE `sale_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
