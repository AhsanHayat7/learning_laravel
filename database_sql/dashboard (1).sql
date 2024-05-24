-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 07:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `category_image` text DEFAULT NULL,
  `category_discount` decimal(8,2) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `parent_id`, `CategoryName`, `category_image`, `category_discount`, `description`, `url`, `created_at`, `updated_at`, `status`) VALUES
(27, 0, 'Caps', NULL, 1.00, 'Caps and hats', 'cap', '2024-05-09 12:52:12', '2024-05-09 12:52:12', 1),
(36, 27, 'Snapback Cap', 'uploads/snapback-cap87872.jpg', 5.00, 'SnapBack Cap', 'snapbackcaps', '2024-05-09 13:39:19', '2024-05-09 13:39:19', 1),
(38, 27, 'Sun cap', 'uploads/sun-cap3216.jpg', 21.00, 'Sun Cap', 'Sun', '2024-05-09 13:41:41', '2024-05-09 13:41:41', 1),
(58, 0, 'Watches', NULL, 5.00, 'watches', 'watches', '2024-05-10 12:48:43', '2024-05-10 12:48:43', 1),
(59, 58, 'Analog Watches', 'uploads/analog-watches90192.jpg', 5.00, 'Analog', 'Analog', '2024-05-10 12:50:05', '2024-05-10 12:50:05', 1),
(60, 58, 'Digital Watches', 'uploads/digital-watches5835.jpg', 4.00, 'Digital', 'Digital', '2024-05-10 12:51:12', '2024-05-10 12:51:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Header` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `Image` text DEFAULT NULL,
  `Header_1` varchar(255) NOT NULL,
  `Description_1` text NOT NULL,
  `Header_2` varchar(255) NOT NULL,
  `Description_2` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `Header`, `title`, `Image`, `Header_1`, `Description_1`, `Header_2`, `Description_2`, `created_at`, `updated_at`) VALUES
(1, 'New cloth', '20 %', 'uploads/114181715636293router.jpg', 'Air shipping', 'free air shipping', '20 x 4  Service', 'service', '2024-05-13 16:38:13', '2024-05-13 16:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Start_Date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_04_225926_create_customers_table', 1),
(5, '2024_04_09_190722_create_products_table', 1),
(6, '2024_04_23_180141_create_productsimages_table', 1),
(7, '2024_04_24_202413_add_columns_to_products_table', 1),
(8, '2024_04_25_195940_create_category_table', 1),
(9, '2024_04_26_184301_add_sku_and_tags_to_products_table', 1),
(10, '2024_04_29_200348_add_columns_to_table_category', 1),
(11, '2024_05_01_185136_create_carts_table', 1),
(12, '2024_05_03_194120_create_orders_table', 1),
(13, '2024_05_03_214852_create_order_items_table', 1),
(14, '2024_05_06_221450_create_table_wishlist', 1),
(15, '2024_05_13_193045_create_cms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `address_line_1` varchar(255) NOT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `town_city` varchar(255) NOT NULL,
  `state_county` varchar(255) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `phone`, `company_name`, `country`, `address_line_1`, `address_line_2`, `town_city`, `state_county`, `grand_total`, `created_at`, `updated_at`) VALUES
(1, 'DADA', 'DADA', 'raja@gmail.com', '21212121', 'DAD', 'DZ', 'block 15 federal be area', 'DWADA', 'Karachi', 'sindh', 96058115.00, '2024-05-03 11:20:13', '2024-05-03 11:20:13'),
(2, 'lala', 'maskan', 'Mamu@gmail.com', '123456789', 'tech', 'GB', '12 street', 'bakers street', 'england', 'england', 96058115.00, '2024-05-03 12:14:12', '2024-05-03 12:14:12'),
(3, 'ahmed', 'khan', 'khan@gmail.com', '2131', 'khan', 'GM', '123', '323', 'karachi', 'sindh', 96058115.00, '2024-05-03 12:45:24', '2024-05-03 12:45:24'),
(4, 'Tashya', 'Bryan', 'qeheb@mailinator.com', '+1 (266) 291-6001', 'Flowers and Cardenas LLC', 'ID', '37 Green Oak Court', 'Est aperiam ipsum', 'Amet ullamco facere', 'Aliquid laudantium', 96058115.00, '2024-05-03 13:24:34', '2024-05-03 13:24:34'),
(5, 'Evan', 'Everett', 'qigaw@mailinator.com', '+1 (233) 995-7975', 'Nash Dalton Inc', 'MH', '53 First Road', 'Minus fuga Dolorem', 'Explicabo Rerum in', 'Veniam modi delenit', 96058115.00, '2024-05-03 13:29:26', '2024-05-03 13:29:26'),
(6, 'Ahsan', '.', 'givumebof@mailinator.com', '+1 (449) 509-5802', 'Kelly and Powell Plc', 'GY', '494 North Oak Drive', 'Libero et et exercit', 'Ipsum perferendis co', 'Rem aut id proident', 96058115.00, '2024-05-03 13:29:43', '2024-05-03 13:29:43'),
(7, 'dam', 'Tyson', 'dam@gmail.com', '+1 (108) 384-8102', 'Dean and Herrera LLC', 'TM', '59 Old Extension', 'Numquam possimus at', 'Voluptatem suscipit', 'Illum qui nulla cup', 96058115.00, '2024-05-03 13:35:42', '2024-05-03 13:35:42'),
(8, 'Elton', 'Weeks', 'zanyjosofe@mailinator.com', '+1 (438) 675-1046', 'French and Rodgers LLC', 'IM', '346 South Old Parkway', 'Tempor dignissimos a', 'Et excepteur eum et', 'Nam amet et in nequ', 409119.00, '2024-05-03 13:51:34', '2024-05-03 13:51:34'),
(9, 'Victor', 'Burt', 'gucyn@mailinator.com', '+1 (561) 493-4095', 'Ellison Leblanc Inc', 'OM', '446 White New Parkway', 'Reprehenderit nihil', 'Aut dignissimos ipsa', 'Nulla qui pariatur', 1908765.00, '2024-05-06 08:33:47', '2024-05-06 08:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(256) NOT NULL,
  `section_title` varchar(256) NOT NULL,
  `data` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Customer_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(20,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `Image` text DEFAULT NULL,
  `Description` text NOT NULL,
  `Tags` text DEFAULT NULL,
  `SKU` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Customer_id`, `category_id`, `Name`, `Price`, `category`, `Image`, `Description`, `Tags`, `SKU`, `created_at`, `updated_at`) VALUES
(53, 6, 'rolex', 213131.00, '', 'uploads/935471714165829watches.jpg', 'These are just a few examples of Rolex watches, and there are many other models available, each with its own unique features and appeal. If youre interested in Rolex watches, you can explore their official website or visit authorized retailers to learn more about their collections and find the perfect watch for you.', 'xl,golden black,bigdial', '06LZg6rr', '2024-04-26 11:10:29', '2024-04-26 11:10:29'),
(54, 3, 'Cats', 1908765.00, '', 'uploads/913281714168015catslovers.jpg', 'The most lovely pet in the world', '3qouted,blue eyes, trained', '4EZOUImU', '2024-04-26 11:46:55', '2024-04-26 11:46:55'),
(57, 5, 'helicopter', 10009982.00, '', 'uploads/768351714169145hel.jpg', 'helicopter or copper for travelling for personal use', 'helicopter,flymachine,airking', 'vsPM0uwb', '2024-04-26 12:05:45', '2024-04-26 12:05:45'),
(59, 6, 'kids clothing', 132131.00, '', 'uploads/389951714516635clothing.jpg', 'kids clothing', 'large,small,medium', 'tsy5GtcF', '2024-04-30 12:37:15', '2024-04-30 12:37:15'),
(60, 5, 'women clothing', 3131321.00, '', 'uploads/410351714517047women.jpg', 'women clothing of all brands', 'all colours, all sizes', 'FvaF1C21', '2024-04-30 12:44:07', '2024-04-30 12:44:07'),
(62, 4, 'Men clothing', 4242.00, '', 'uploads/342171714517302images.jpg', 'Men clothing with all products', 'coatpant,jeans,shirts,tshirts', '6xAFG80C', '2024-04-30 12:48:22', '2024-04-30 12:48:22'),
(64, 4, 'lala', 21313131.00, '', 'uploads/590141714518822men.jpg', 'salwar kameez', 'green,blue,black', 'cQ4a5Svy', '2024-04-30 13:13:54', '2024-04-30 13:13:54'),
(66, 20, 'cars', 3213213.00, '', 'uploads/753111715207200bluelexus.jpg', 'helicopter or copper for travelling for personal use', 'helicopter,flymachine,airking', 'MhjnuxID', '2024-05-08 12:26:40', '2024-05-08 12:26:40'),
(67, 20, 'bike', 21313.00, '', 'uploads/776871715207427heavybike.jpg', 'bike', 'green,blue,black', 'LldUsnuf', '2024-05-08 12:30:27', '2024-05-08 12:30:27'),
(69, 27, 'Caps', 2131313.00, '', 'uploads/720921715298508chicagocaps.jpg', 'Caps', 'green,blue,black', 'CQeo89C7', '2024-05-09 13:48:28', '2024-05-09 13:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `productsimages`
--

CREATE TABLE `productsimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productsimages`
--

INSERT INTO `productsimages` (`id`, `product_id`, `image_path`, `created_at`, `updated_at`) VALUES
(32, 54, 'uploads/913281714168015catslovers.jpg', '2024-04-01 16:47:39', '2024-04-15 16:47:39'),
(36, 59, 'uploads/389951714516635clothing.jpg', '2024-04-30 17:40:56', '2024-04-30 17:40:56'),
(37, 60, 'uploads/410351714517047women.jpg', '2024-05-01 17:45:59', '2024-05-20 17:45:59'),
(38, 62, 'uploads/342171714517302images.jpg', '2024-05-14 17:49:35', '2024-05-14 17:49:35'),
(39, 59, 'uploads/633971714518241kids.jpg', '2024-05-08 18:05:19', '2024-05-11 18:05:19'),
(40, 64, 'uploads/590141714518822men.jpg', '2024-05-15 18:14:53', '2024-05-13 18:14:53'),
(42, 57, 'uploads/768351714169145hel.jpg', '2024-05-01 17:23:11', '2024-05-16 17:23:11'),
(43, 66, 'uploads/753111715207200bluelexus.jpg', '2024-04-30 17:27:59', '2024-05-14 17:27:59'),
(44, 67, 'uploads/776871715207427heavybike.jpg', '2024-05-08 17:31:17', '2024-05-15 17:31:17'),
(45, 53, 'uploads/935471714165829watches.jpg', '2024-04-30 19:47:36', '2024-05-14 19:47:36'),
(47, 69, 'uploads/720921715298508chicagocaps.jpg', '2024-05-08 18:49:13', '2024-05-14 18:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4CyVQWNODTuHWW0Ag2vK7iw29A3iUbEogIF6Ej9G', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0NpYkJyTWNGSDVnYnNvWlRnRzRTSHJLSG9aSjhweDRBcm9VVEZyNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9DbXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715802154),
('eOLkSBv4pV9AiMvZN1sH3nGWREEUHnO3fQwOx9aZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTUxcDZZb1J4aTcyaVA4Qko0WmNFcnlNWTM5eDhHcXREVG56T0h2YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG9wIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715728507),
('mZcXH90BrS7WTRtpvDL04mudrCT8HmKh4xA6yiYf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWFYNldxcHc5UUhqRFZ4SnVCbGJpc2Q1VWdtY2g4bm1HRE9tbFVnWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9DbXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715799259),
('N5QQRrUxG6KEmpQXP2yYoOKSlP5IZwRWT1H8CuBk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiZng0R1dJbk9hTnp3NTJQdVBnYmVOU205NEE3UjVxVTVhRjgzR011bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715808051),
('nV6mEhVydr12Ty0b50SkmtTel41unXge4WpCEhLs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXBxT1hWVzZOVFB2bzRRcVJoT24zZ01JUlFKalRwYm5LekZjNTNaWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715706836);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'raja', 'raja@gmail.com', NULL, '$2y$12$RQv0AtzXdlQIsf.iEs2SqevZAfHS6pFuD7GQ.F7ItIF2n7i/LUTgO', NULL, '2024-04-18 11:42:33', '2024-04-18 11:42:33'),
(2, 'ahsan', 'Mamu@gmail.com', NULL, '$2y$12$zqH8pOHCXuHrgDU2IRzj0OOR/0tDV6kYN/qVrs56sGmlveVWs/Zou', NULL, '2024-04-18 13:05:41', '2024-04-18 13:05:41'),
(3, 'alex', 'alex@gmail.com', NULL, '$2y$12$067FqjrIS2Dvz81VCIMOHOUdq.x5XhYcL9UtSTNalFd9oEIqTYI3O', NULL, '2024-04-18 14:20:58', '2024-04-18 14:20:58'),
(4, 'afghan', 'afghan@gmail.com', NULL, '$2y$12$K7DpRAxaUZOBRSLuylBeg.eLp28qDLAxLNHS3GeutuX4cXOV9uA0u', NULL, '2024-04-19 06:40:20', '2024-04-19 06:40:20'),
(5, 'a', 'a@gmail.com', NULL, '$2y$12$Vel0d51ANPsKLN6vBzpiE.SGgJ40b/66.k2rkDCBI5mZffgMun.be', NULL, '2024-04-19 07:31:32', '2024-04-19 07:31:32'),
(6, 'sherlock', 'sherlock@gmail.com', NULL, '$2y$12$3vGCTaBXCQWmKeg9AVCRcOjWkno/Bff39J6AqQteGVsel6nb9Hqh6', NULL, '2024-04-19 07:46:48', '2024-04-19 07:46:48'),
(7, 'k', 'K@gmail.com', NULL, '$2y$12$Oa/.MShx0KgLdnhHoXOWn.dTnn3CJdGxXrgJorKF79HWRJkc.th/S', NULL, '2024-04-19 08:23:49', '2024-04-19 08:23:49'),
(8, 'y', 'y@gmail.com', NULL, '$2y$12$xlxBtQJAMzPVSzxPLjDyeOd.10UwDLtU7imUpDAlhyzwwWPXp/HDW', NULL, '2024-04-19 08:24:48', '2024-04-19 08:24:48'),
(9, 'n', 'n@gmail.com', NULL, '$2y$12$.VrRozdmdRuCY2n2BdTQGeR6kTLGqGihk9K0kgEumFtzT6YY8QV7W', NULL, '2024-04-19 08:29:13', '2024-04-19 08:29:13'),
(10, 'b', 'b@gmail.com', NULL, '$2y$12$J7FzE8wPxHq/AyL5Ycf.MePKmtzmIHBO2xXdni6mkIaXejcV/6zEm', NULL, '2024-04-19 08:38:44', '2024-04-19 08:38:44'),
(11, 'v', 'v@gmail.com', NULL, '$2y$12$3v36.MdDd7t3udZyvQjPKOvQLcqFya6oFKTB3GBi6Jc06VQGvDuEO', NULL, '2024-04-22 08:43:28', '2024-04-22 08:43:28'),
(13, 'niba', 'niba@gmail.com', NULL, '$2y$12$qCf0DjhUxkvAFtbaiAaXGOvfFHcedUssVHD6ko7SVA0hQIYsIi682', NULL, '2024-05-03 08:19:11', '2024-05-03 08:19:11'),
(14, 'maskan', 'maskan23@gmail.com', NULL, '$2y$12$J28ReT9VM5NyCozrb62PhOOS4tLtRKQC6xlL/vwFjdU25gUiaNgy.', NULL, '2024-05-03 13:49:24', '2024-05-03 13:49:24'),
(15, 'army', 'army@gmail.com', NULL, '$2y$12$SNx.HSYGKvLeXaq47nuhruiLu5DpAT4oP86LfknuTjIDrUVD7TRf2', NULL, '2024-05-08 06:47:06', '2024-05-08 06:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `productsimages`
--
ALTER TABLE `productsimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productsimages_product_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `productsimages`
--
ALTER TABLE `productsimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productsimages`
--
ALTER TABLE `productsimages`
  ADD CONSTRAINT `productsimages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`Customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
