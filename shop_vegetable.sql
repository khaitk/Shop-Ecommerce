-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 09:37 AM
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
-- Database: `shop_vegetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'khaitkfa@gmail.com', '$2y$10$N1LnJ4hVnBaI/9zC0z24.e1JS2TyqefA0jWHkSzD.t510erLoP1ai');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `date_order` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `customer_id`, `date_order`, `total`, `payment`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-07-14', 310000.00, 'Thanh Toán Khi Nhận Hàng', 'giao nhanh còn nấu ăn trưa', 'Đã giao hàng', '2021-07-13 19:17:43', '2021-07-31 06:34:31'),
(2, 2, '2021-07-14', 100000.00, 'Thanh Toán Khi Nhận Hàng', 'giao nhanh còn ăn nhé', 'Đã giao hàng', '2021-07-14 01:51:54', '2021-07-14 01:51:54'),
(3, 3, '2021-07-19', 450000.00, 'Thanh Toán Khi Nhận Hàng', 'giao nhanh còn nấu ăn trưa', 'Đã giao hàng', '2021-07-18 23:39:49', '2021-07-19 08:22:40'),
(4, 4, '2021-07-19', 30000.00, 'Thanh Toán Khi Nhận Hàng', 'giao nhanh còn nấu ăn trưa', 'Đã giao hàng', '2021-07-19 00:15:37', '2021-07-19 08:25:16'),
(5, 5, '2021-07-19', 100000.00, 'Thanh Toán Khi Nhận Hàng', 'giao nhanh còn ăn nhé', 'Đã giao hàng', '2021-07-19 00:22:51', '2021-07-24 00:23:25'),
(6, 6, '2021-07-20', 125000.00, 'Thanh Toán Khi Nhận Hàng', 'giao nhanh còn nấu ăn trưa', 'Đã giao hàng', '2021-07-20 00:04:44', '2021-07-30 08:25:52'),
(7, 7, '2021-07-29', 700000.00, 'Thanh Toán Khi Nhận Hàng', 'nhanh lên còn nấu canh', 'Đang vận chuyển', '2021-07-29 04:30:25', '2021-07-30 08:27:52'),
(8, 8, '2021-07-29', 205000.00, 'Thanh Toán Khi Nhận Hàng', 'nhanh lên còn nấu canh', 'Đang vận chuyển', '2021-07-29 04:37:46', '2021-07-30 08:28:01'),
(9, 9, '2021-07-29', 90000.00, 'Thanh Toán Khi Nhận Hàng', 'nhanh lên còn nấu canh', 'Đang xử lý', '2021-07-29 04:42:52', '2021-07-29 04:42:52'),
(10, 10, '2021-07-29', 840000.00, 'Thanh Toán Khi Nhận Hàng', 'nhanh lên còn nấu canh', 'Đang xử lý', '2021-07-29 04:44:56', '2021-07-29 04:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `original_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `bill_id`, `product_id`, `quantity`, `original_price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 15000.00, '2021-07-13 19:17:43', '2021-07-13 19:17:43'),
(2, 1, 1, 2, 140000.00, '2021-07-13 19:17:43', '2021-07-13 19:17:43'),
(3, 2, 3, 3, 20000.00, '2021-07-14 01:51:54', '2021-07-14 01:51:54'),
(4, 2, 4, 4, 10000.00, '2021-07-14 01:51:54', '2021-07-14 01:51:54'),
(5, 3, 2, 2, 15000.00, '2021-07-18 23:39:49', '2021-07-18 23:39:49'),
(6, 3, 1, 3, 140000.00, '2021-07-18 23:39:49', '2021-07-18 23:39:49'),
(7, 4, 2, 2, 15000.00, '2021-07-19 00:15:37', '2021-07-19 00:15:37'),
(8, 5, 7, 2, 50000.00, '2021-07-19 00:22:51', '2021-07-19 00:22:51'),
(9, 6, 6, 5, 25000.00, '2021-07-20 00:04:44', '2021-07-20 00:04:44'),
(10, 7, 1, 5, 140000.00, '2021-07-29 04:30:25', '2021-07-29 04:30:25'),
(11, 8, 2, 7, 15000.00, '2021-07-29 04:37:46', '2021-07-29 04:37:46'),
(12, 8, 3, 5, 20000.00, '2021-07-29 04:37:46', '2021-07-29 04:37:46'),
(13, 9, 2, 6, 15000.00, '2021-07-29 04:42:52', '2021-07-29 04:42:52'),
(14, 10, 1, 6, 140000.00, '2021-07-29 04:44:56', '2021-07-29 04:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(16, 2, 2, 2, '2021-07-31 02:37:41', '2021-07-31 02:37:41'),
(17, 2, 8, 4, '2021-07-31 02:37:52', '2021-07-31 02:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Meat 1', '1627633074-1627631568-1626226965-product-1.jpg', '2021-07-13 18:37:13', '2021-07-30 08:17:54'),
(2, 'Vegetables', '1626226648-thumb-2.jpg', '2021-07-13 18:37:28', '2021-07-13 18:37:28'),
(3, 'Fruit & Nut Gifts', '1626226661-product-12.jpg', '2021-07-13 18:37:41', '2021-07-13 18:37:41'),
(4, 'Fastfood', '1626226679-product-5.jpg', '2021-07-13 18:37:59', '2021-07-13 18:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `name`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, 'Võ Thị Lan Khánh', 'lankhanh@gmail.com', 'Hải An - Hải Lăng - Quảng Trị', '0347184502', '2021-07-13 19:17:43', '2021-07-13 19:17:43'),
(2, 1, 'Mai Khải', 'khaitk@gmail.com', 'Hải An - Hải Lăng - Quảng Trị', '0347184502', '2021-07-14 01:51:53', '2021-07-14 01:51:53'),
(3, 2, 'Đặng Khánh Nam', 'nam@gmail.com', 'Hải Quế - Hải Lăng - Quảng Trị', '0347184502', '2021-07-18 23:39:49', '2021-07-18 23:39:49'),
(4, 2, 'Lan Khánh Ny', 'ny@gmail.com', 'Hải Thọ - Hải Lăng - Quảng Trị', '0347184502', '2021-07-19 00:15:37', '2021-07-19 00:15:37'),
(5, 2, 'Nguyễn Thảo Lan', 'lan@gmail.com', 'Hải Vĩnh - Hải Lăng - Quảng Trị', '0347184502', '2021-07-19 00:22:50', '2021-07-19 00:22:50'),
(6, 2, 'Trần Gia Lâm', 'gialam@gmail.com', 'Hải Xuân - Hải Lăng - Quảng Trị', '0347184502', '2021-07-20 00:04:44', '2021-07-20 00:04:44'),
(7, 2, 'Nguyễn Như Quỳnh', 'quynh@gmail.com', 'Hải Ba - Hải Lăng - Quảng Trị', '0347184502', '2021-07-29 04:30:25', '2021-07-29 04:30:25'),
(8, 2, 'Nguyễn Thanh Hoàng', 'hoang@gmail.com', 'Hải Dương - Hải Lăng - Quảng Trị', '0347184502', '2021-07-29 04:37:45', '2021-07-29 04:37:45'),
(9, 2, 'Hoàng Huy Gia Phương', 'giaphuong@gmail.com', 'Hải An - Hải Lăng - Quảng Trị', '0347184502', '2021-07-29 04:42:52', '2021-07-29 04:42:52'),
(10, 2, 'Lê Phương Thảo', 'lephuongthao@gmail.com', 'Hải Khê - Hải Lăng - Quảng Trị', '0347184502', '2021-07-29 04:44:55', '2021-07-29 04:44:55');

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
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2021_07_13_031312_create_customers_table', 1),
(23, '2021_07_13_031410_create_bills_table', 1),
(24, '2021_07_13_031426_create_bill_details_table', 1),
(25, '2021_07_13_031441_create_products_table', 1),
(26, '2021_07_13_031457_create_carts_table', 1),
(27, '2021_07_13_031528_create_categories_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` double(8,2) NOT NULL,
  `promotion_price` double(8,2) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_product` int(11) NOT NULL,
  `quantity` float NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `name`, `description`, `original_price`, `promotion_price`, `images`, `new_product`, `quantity`, `unit`, `created_at`, `updated_at`) VALUES
(1, 1, 'Meat', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 140000.00, 112000.00, '1627632333-1626226965-product-1.jpg', 1, 9, 'kg', '2021-07-13 18:47:12', '2021-07-30 08:05:33'),
(2, 3, 'Banana', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 15000.00, 12000.00, '1626227261-product-2.jpg', 1, 5.5, 'kg', '2021-07-13 18:47:41', '2021-07-29 04:42:52'),
(3, 3, 'Guava', '<span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span>', 20000.00, 16000.00, '1626227302-product-3.jpg', 1, 10.5, 'kg', '2021-07-13 18:48:22', '2021-07-29 04:37:46'),
(4, 3, 'Watermelon', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 10000.00, 8000.00, '1626227337-product-7.jpg', 1, 9, 'kg', '2021-07-13 18:48:58', '2021-07-13 18:48:58'),
(5, 3, 'Grapes', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 35000.00, 28000.00, '1626227372-product-4.jpg', 1, 11, 'kg', '2021-07-13 18:49:32', '2021-07-13 18:49:32'),
(6, 4, 'Sandwich', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 25000.00, 20000.00, '1626227421-product-5.jpg', 1, 8, 'cái', '2021-07-13 18:50:21', '2021-07-13 18:50:21'),
(7, 3, 'Mango', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 50000.00, 0.00, '1626227455-product-6.jpg', 0, 16, 'kg', '2021-07-13 18:50:55', '2021-07-13 18:50:55'),
(8, 3, 'Apple', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 35000.00, 0.00, '1626227487-product-8.jpg', 0, 13, 'kg', '2021-07-13 18:51:27', '2021-07-13 18:51:27'),
(9, 4, 'Fried chicken', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 15000.00, 0.00, '1626227529-product-10.jpg', 0, 7, 'cái', '2021-07-13 18:52:09', '2021-07-13 18:52:09'),
(10, 3, 'Milk', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 14000.00, 0.00, '1626227808-product-11.jpg', 0, 12, 'hộp', '2021-07-13 18:56:48', '2021-07-13 18:56:48'),
(11, 3, 'Fresh Berries', '<p><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">You may have noticed that some bunches in the store come with their crown wrapped in&nbsp;</span><a href=\"https://www.today.com/food/stop-storing-plastic-wrap-drawer-here-s-why-it-belongs-t138466\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">plastic wrap</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">. Keep it on. Or add plastic wrap at home, if you have to. According to&nbsp;</span><a href=\"https://dawnjacksonblatner.com/\" target=\"_blank\" style=\"box-sizing: border-box; background: rgb(248, 248, 248); color: inherit; outline: none; border-bottom: 1px solid rgb(255, 80, 60); padding-bottom: 2px; font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px;\">Dawn Jackson Blatner</a><span style=\"color: rgb(85, 85, 85); font-family: PublicoText, Georgia, TimesNewRoman, &quot;Times New Roman&quot;, Times, Baskerville, serif; font-size: 18px; background-color: rgb(248, 248, 248);\">, RDN — who also happens to work for Chiquita — much of the ethylene gas that increases the rate at which bananas ripen is released at the top of the bunch. \"Wrapping slows down the gas,\" said Blatner, who is also the Chicago Cubs dietitian and has made thousands of banana-based smoothies over the years. \"For even better results, pull the bananas apart and wrap each top separately.\"</span><br></p>', 16000.00, 0.00, '1626228091-thumb-1.jpg', 0, 14, 'kg', '2021-07-13 19:01:31', '2021-07-13 19:01:31'),
(13, 3, 'fruit', '<p>Khai TK</p>', 100000.00, 0.00, '1627692066-product-12.jpg', 0, 10, 'kg', '2021-07-31 00:41:06', '2021-07-31 00:41:06'),
(14, 2, 'fruit', '<p>ádasd</p>', 234300.00, 0.00, '1627694850-product-12.jpg', 0, 15, 'kg', '2021-07-31 01:27:30', '2021-07-31 01:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rate` float NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `rate`, `description`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 4, 'sfsfasfsa', '2021-07-20 00:05:00', '2021-07-20 00:05:00'),
(3, 2, 2, 3, 'hiihi, ngon lắm nè !', '2021-07-20 00:34:24', '2021-07-20 00:34:24'),
(4, 1, 7, 3, 'kkkk', '2021-07-20 10:34:38', '2021-07-20 10:34:38'),
(5, 1, 7, 5, 'ádsadasd', '2021-07-20 10:34:47', '2021-07-20 10:34:47'),
(6, 2, 6, 4, 'very', '2021-07-21 12:11:39', '2021-07-21 12:11:39');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gia Nhân', 'gianhan@gmail.com', NULL, '$2y$10$yG8CDqEJ3cNa6yzFwAmTA.KsSW6B2bSN7ymXYIjP29QfOG8oVuU3m', NULL, '2021-07-13 19:16:04', '2021-07-13 19:16:04'),
(2, 'Khải DEV', 'khaidev@gmail.com', NULL, '$2y$10$OMJ2yJGDtohx/XNwH5IfIO7gsvkEK4rqOAxNVlYANLhH/iWeEcepS', NULL, '2021-07-14 01:47:22', '2021-07-14 01:47:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
