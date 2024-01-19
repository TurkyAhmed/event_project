-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 02:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'اربعين شقة', '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(2, 2, ' الشرج - باعبود ', '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(3, 3, ' فوة القديمة ', '2024-01-10 18:46:02', '2024-01-10 18:46:02');

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
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL DEFAULT 0.00,
  `is_avaliable` tinyint(1) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `name`, `capacity`, `feature`, `price`, `discount`, `is_avaliable`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'قاعة السعادة', '25', 'مساحة القاعة 30 متر مربع|إمكانية عقد(دورات - ورش عمل)|قاعة مكيفة|شبكة إنترنت واي فاي|شاشة عرض كبيرة|ستاند اوراق|إمكانية ربط بث الياف للبث المباشر', 100.00, 0.00, 1, '15 شخص نظام طاولات مستديرة', NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(2, 'قاعة الهجرين', '20', 'مساحة القاعة 60 متر مربع|إمكانية عقد(دورات - ندوات - ورش عمل)|تكييف مركزي|شبكة إنترنت واي فاي|جهاز صوتيات لاسلكي|شاشة عرض كبيرة|جهاز عرض بروجكتر|ستاند اوراق|إمكانية ربط بث الياف للبث المباشر', 120.00, 0.00, 1, '40 شخص نظام طاولات مستديرة', NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(3, 'قاعة الاستدامة', '20', 'مساحة القاعة 130 متر مربع|إمكانية عقد(دورات - ندوات - ورش عمل)|تكييف مركزي|شبكة إنترنت واي فاي|جهاز صوتيات لاسلكي|إمكانية ربط بث الياف للبث المباشر|غرفة إعداد وتجهيز', 120.00, 0.00, 1, '', NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(4, 'القاعة الكبرى', '300', 'مساحة القاعة 330 متر مربع|مسرح مزود بأجهزة عرض وصوت وإضاءة|إمكانية عقد(مؤتمرات - معارض - ندوات - ورش عمل)|تكييف مركزي|شبكة إنترنت واي فاي|جهاز صوتيات لاسلكي|إمكانية ربط بث الياف للبث المباشر|غرفة إعداد وتجهيز', 120.00, 0.00, 1, '300 شخص نظام حفل|100 شخص نظام طاولات مستديرة|120 شخص نظام دوائر مع الضيوف|65 شخص نظام تباعد| 70 شخص نظام حرف U|65 شخص نظام صفوف', NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(5, 'قاعة السلام', '20', 'مساحة القاعة 130 متر مربع|إمكانية عقد(دورات - ندوات - ورش عمل)|تكييف مركزي|شبكة إنترنت واي فاي|جهاز صوتيات لاسلكي|إمكانية ربط بث الياف للبث المباشر|غرفة إعداد وتجهيز', 120.00, 15.00, 1, NULL, NULL, '2024-01-10 18:46:02', '2024-01-17 06:22:20'),
(6, 'قاعة شبام', '20', 'مساحة القاعة 60 متر مربع|إمكانية عقد(دورات - ندوات - ورش عمل)|تكييف مركزي|شبكة إنترنت واي فاي|جهاز صوتيات لاسلكي|شاشة عرض كبيرة|جهاز عرض بروجكتر|سبورة ذكية تفاعلية|إمكانية ربط بث الياف للبث المباشر', 120.00, 0.00, 1, '40 شخص نظام طاولات مستديرة', NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(7, 'قاعة الاجتماعات', '20', 'مساحة القاعة 60 متر مربع|تكييف مركزي|شبكة إنترنت واي فاي|غرفة إعداد وتجهيز', 120.00, 0.00, 1, '25 شخص', NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(8, 'تجريب1', '25', 'نت', 150.00, 0.00, 0, NULL, '2024-01-11 06:04:47', '2024-01-11 06:03:05', '2024-01-11 06:04:47'),
(9, 'تجريب تعديل', '120', 'مساحة القاعة 130 متر مربع|إمكانية عقد(دورات - ندوات - ورش عمل)|تكييف مركزي|شبكة إنترنت واي فاي|جهاز صوتيات لاسلكي|إمكانية ربط بث الياف للبث المباشر|غرفة إعداد وتجهيز', 35.00, 0.00, 1, '15 شخص نظام طاولات مستديرة', '2024-01-16 07:27:30', '2024-01-16 07:25:05', '2024-01-16 07:27:30'),
(10, 'تجريب خارج الخدمة', '30', NULL, 80.00, 0.00, 0, NULL, NULL, '2024-01-16 20:26:25', '2024-01-16 20:26:25'),
(11, 'تجريب قاعة جديدة', '40', 'مساحة القاعة 130 متر مربع|إمكانية عقد(دورات - ندوات - ورش عمل)|تكييف مركزي|شبكة إنترنت واي فاي|جهاز صوتيات لاسلكي|إمكانية ربط بث الياف للبث المباشر|غرفة إعداد وتجهيز', 85.00, 15.00, 1, '15 شخص نظام طاولات مستديرة|35 شخص نظام طاولات صفوف', NULL, '2024-01-17 06:20:35', '2024-01-17 06:21:19');

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
(1, '2013_01_10_110740_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_12_27_060156_create_halls_table', 1),
(8, '2023_12_27_060313_create_services_table', 1),
(9, '2023_12_28_182028_create_employees_table', 1),
(10, '2023_12_30_210919_create_reservations_table', 1),
(11, '2023_12_30_225001_create_payments_table', 1),
(12, '2023_12_30_232648_create_reservation__details_table', 1),
(13, '2024_01_10_113225_create_sessions_table', 1),
(14, '2024_01_17_114001_create_notifications_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('280f562b-0bc7-44d4-b1c8-b13e290c112b', 'App\\Notifications\\reservations_notification', 'App\\Models\\User', 2, '{\"reservatinStatus\":\"jj\"}', NULL, '2024-01-17 08:46:53', '2024-01-17 08:46:53'),
('64ff0fc3-98dc-4f06-8ac1-fab78bdb710d', 'App\\Notifications\\reservations_notification', 'App\\Models\\User', 3, '{\"reservatinStatus\":\"jj\"}', NULL, '2024-01-17 08:46:54', '2024-01-17 08:46:54'),
('962c2a7c-aa5d-4682-a0e0-37bfbf1ad9bc', 'App\\Notifications\\reservations_notification', 'App\\Models\\User', 7, '{\"reservatinStatus\":\"jj\"}', NULL, '2024-01-17 08:46:57', '2024-01-17 08:46:57'),
('9c7f98e6-0665-49b7-a84a-e68db2b1fadb', 'App\\Notifications\\reservations_notification', 'App\\Models\\User', 1, '{\"reservatinStatus\":\"jj\"}', NULL, '2024-01-17 08:46:51', '2024-01-17 08:46:51');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `paid` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `interval` enum('صباح','مساء') NOT NULL,
  `status` enum('في الانتظار','تمت الموافقة','تم الغاء الحجز','تأخير الحجز') NOT NULL DEFAULT 'في الانتظار',
  `date_from` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_to` timestamp NULL DEFAULT NULL,
  `type_of_event` varchar(255) NOT NULL,
  `note` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `employee_id`, `user_id`, `title`, `interval`, `status`, `date_from`, `date_to`, `type_of_event`, `note`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 5, 'البوست الاول', 'صباح', 'في الانتظار', '2024-01-18 18:30:02', '2024-01-18 21:00:00', 'تدريب', 'بروجكتر', '2024-01-18 15:30:02', '2024-01-10 18:54:37', '2024-01-18 15:30:02'),
(2, NULL, 5, 'البوست الاول', 'صباح', 'تمت الموافقة', '2024-01-14 10:43:17', '2024-01-18 21:00:00', 'تدريب', 'بروجكتر', '2024-01-14 07:43:17', '2024-01-10 18:56:53', '2024-01-14 07:43:17'),
(3, NULL, 5, 'البوست الاول', 'صباح', 'تم الغاء الحجز', '2024-01-14 10:43:21', '2024-01-18 21:00:00', 'تدريب', 'بروجكتر', '2024-01-14 07:43:21', '2024-01-10 18:57:15', '2024-01-14 07:43:21'),
(4, NULL, 5, 'تجريب', 'صباح', 'تأخير الحجز', '2024-01-10 22:58:48', '2024-01-09 21:00:00', 'ندوة', NULL, NULL, '2024-01-10 18:59:53', '2024-01-10 18:59:53'),
(5, NULL, 5, 'تجريب2', 'مساء', 'تم الغاء الحجز', '2024-01-15 23:43:07', '2024-01-30 21:00:00', 'ورشة عمل', NULL, NULL, '2024-01-11 06:08:06', '2024-01-15 20:43:07'),
(12, NULL, 7, 'تجريبي', 'صباح', 'في الانتظار', '2024-01-13 21:00:00', '2024-01-14 21:00:00', 'مؤتمر', '', NULL, '2024-01-13 23:59:46', '2024-01-13 23:59:46'),
(13, NULL, 7, 'عنوان بعد التعديل', 'صباح', 'في الانتظار', '2024-01-18 18:30:20', '2024-01-13 21:00:00', 'مؤتمر', NULL, '2024-01-18 15:30:20', '2024-01-13 23:59:46', '2024-01-18 15:30:20'),
(14, NULL, 7, 'عنوان بعد التعديل', 'صباح', 'في الانتظار', '2024-01-18 21:00:00', '2024-01-19 21:00:00', 'مؤتمر', NULL, NULL, '2024-01-14 09:08:18', '2024-01-14 09:09:21'),
(15, NULL, 7, 'عنوان بعد التعديل', 'صباح', 'في الانتظار', '2024-01-13 21:00:00', '2024-01-13 21:00:00', 'مؤتمر', NULL, NULL, '2024-01-14 09:08:18', '2024-01-14 09:09:44'),
(16, NULL, 7, 'تجريبي', 'صباح', 'في الانتظار', '2024-01-18 23:10:22', '2023-12-31 21:00:00', 'مؤتمر', '', '2024-01-18 20:10:22', '2024-01-14 09:11:27', '2024-01-18 20:10:22'),
(17, NULL, 7, 'تجريبي', 'صباح', 'تمت الموافقة', '2024-01-18 01:46:01', '2024-02-01 21:00:00', 'مؤتمر', '', NULL, '2024-01-14 09:11:27', '2024-01-16 18:46:51'),
(18, NULL, 5, 'تجريب التوتال', 'صباح', 'تم الغاء الحجز', '2024-01-15 23:44:20', '2024-01-14 21:00:00', 'مؤتمر', 'صباح موتمر', NULL, '2024-01-15 00:50:04', '2024-01-15 20:44:20'),
(19, NULL, 5, 'توعية حول المناخ', 'مساء', 'تمت الموافقة', '2024-01-18 01:38:37', '2024-01-17 21:00:00', 'ندوة', NULL, NULL, '2024-01-15 00:50:04', '2024-01-15 20:44:14'),
(20, NULL, 5, 'تجريب', 'صباح', 'في الانتظار', '2024-01-14 21:00:00', '2024-01-14 21:00:00', 'ندوة', 'بروجكتر', NULL, '2024-01-15 09:06:54', '2024-01-15 09:06:54'),
(21, NULL, 5, 'تجريب', 'صباح', 'تمت الموافقة', '2024-01-16 21:23:31', '2024-01-14 21:00:00', 'ورشة عمل', NULL, NULL, '2024-01-15 09:06:54', '2024-01-16 18:23:31'),
(22, NULL, 7, 'توعية بالدراسة', 'صباح', 'تمت الموافقة', '2024-01-18 18:30:39', '2024-01-22 21:00:00', 'ندوة', 'بروجكتر', '2024-01-18 15:30:39', '2024-01-17 06:27:56', '2024-01-18 15:30:39'),
(23, NULL, 7, 'تجريب', 'صباح', 'في الانتظار', '2024-01-19 08:09:03', '2024-01-24 21:00:00', 'مؤتمر', NULL, '2024-01-19 05:09:03', '2024-01-18 07:10:16', '2024-01-19 05:09:03'),
(24, NULL, 7, 'تجريب', 'صباح', 'في الانتظار', '2024-01-18 23:10:47', '2024-01-24 21:00:00', 'مؤتمر', NULL, '2024-01-18 20:10:47', '2024-01-18 07:10:16', '2024-01-18 20:10:47'),
(25, NULL, 7, 'البوست الاول', 'صباح', 'في الانتظار', '2024-01-18 23:10:32', '2024-01-17 21:00:00', 'مؤتمر', NULL, '2024-01-18 20:10:32', '2024-01-18 12:32:21', '2024-01-18 20:10:32'),
(26, NULL, 7, 'البوست الاول', 'صباح', 'في الانتظار', '2024-01-18 18:30:27', '2024-01-17 21:00:00', 'مؤتمر', NULL, '2024-01-18 15:30:27', '2024-01-18 12:32:21', '2024-01-18 15:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `reservation__details`
--

CREATE TABLE `reservation__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `hall_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `service_count` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `service_price` double(8,2) NOT NULL,
  `note` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation__details`
--

INSERT INTO `reservation__details` (`id`, `reservation_id`, `hall_id`, `service_id`, `service_count`, `service_price`, `note`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 1, 1, 10.00, NULL, NULL, '2024-01-10 18:59:53', '2024-01-10 18:59:53'),
(2, 5, 1, 1, 1, 10.00, NULL, NULL, '2024-01-11 06:08:07', '2024-01-11 06:08:07'),
(3, 5, 1, 4, 1, 10.00, NULL, NULL, '2024-01-11 06:08:07', '2024-01-11 06:08:07'),
(4, 5, 2, 2, 1, 10.00, NULL, NULL, '2024-01-11 06:08:07', '2024-01-11 06:08:07'),
(5, 5, 2, 3, 1, 10.00, NULL, NULL, '2024-01-11 06:08:07', '2024-01-11 06:08:07'),
(10, 12, 1, 1, 1, 2.00, NULL, NULL, '2024-01-13 23:59:46', '2024-01-13 23:59:46'),
(11, 12, 1, 4, 3, 7.00, NULL, NULL, '2024-01-13 23:59:46', '2024-01-13 23:59:46'),
(12, 13, 3, 2, 2, 4.00, NULL, '2024-01-14 06:10:33', '2024-01-13 23:59:46', '2024-01-14 06:10:33'),
(13, 13, 3, 3, 2, 3.00, NULL, '2024-01-14 06:10:33', '2024-01-13 23:59:46', '2024-01-14 06:10:33'),
(14, 13, 3, 4, 1, 7.00, NULL, '2024-01-14 06:10:33', '2024-01-13 23:59:46', '2024-01-14 06:10:33'),
(15, 13, 3, 4, 1, 7.00, NULL, '2024-01-14 06:02:14', '2024-01-13 23:59:46', '2024-01-14 06:02:14'),
(16, 13, 3, 2, 2, 4.00, NULL, '2024-01-14 06:15:54', '2024-01-14 06:10:33', '2024-01-14 06:15:54'),
(17, 13, 3, 3, 2, 3.00, NULL, '2024-01-14 06:15:54', '2024-01-14 06:10:33', '2024-01-14 06:15:54'),
(18, 13, 3, 2, 4, 4.00, NULL, NULL, '2024-01-14 06:15:54', '2024-01-14 06:15:54'),
(19, 13, 3, 3, 3, 3.00, NULL, NULL, '2024-01-14 06:15:54', '2024-01-14 06:15:54'),
(20, 13, 3, 4, 1, 7.00, NULL, NULL, '2024-01-14 06:15:54', '2024-01-14 06:15:54'),
(21, 14, 1, 4, 3, 7.00, NULL, '2024-01-14 09:09:21', '2024-01-14 09:08:18', '2024-01-14 09:09:21'),
(22, 15, 3, 1, 4, 2.00, NULL, '2024-01-14 09:09:44', '2024-01-14 09:08:18', '2024-01-14 09:09:44'),
(23, 14, 1, 4, 3, 7.00, NULL, NULL, '2024-01-14 09:09:21', '2024-01-14 09:09:21'),
(24, 15, 3, 1, 4, 2.00, NULL, NULL, '2024-01-14 09:09:44', '2024-01-14 09:09:44'),
(25, 15, 3, 4, 1, 7.00, NULL, NULL, '2024-01-14 09:09:44', '2024-01-14 09:09:44'),
(26, 16, 4, 3, 4, 3.00, NULL, NULL, '2024-01-14 09:11:27', '2024-01-14 09:11:27'),
(27, 17, 5, 1, 5, 2.00, NULL, NULL, '2024-01-14 09:11:27', '2024-01-14 09:11:27'),
(28, 18, 4, 2, 4, 4.00, NULL, NULL, '2024-01-15 00:50:04', '2024-01-15 00:50:04'),
(29, 18, 4, 3, 2, 3.00, NULL, NULL, '2024-01-15 00:50:04', '2024-01-15 00:50:04'),
(30, 19, 2, 1, 5, 2.00, NULL, NULL, '2024-01-15 00:50:04', '2024-01-15 00:50:04'),
(31, 19, 2, 2, 12, 4.00, NULL, NULL, '2024-01-15 00:50:04', '2024-01-15 00:50:04'),
(32, 19, 2, 4, 7, 7.00, NULL, NULL, '2024-01-15 00:50:04', '2024-01-15 00:50:04'),
(33, 20, 1, 1, 15, 2.00, NULL, NULL, '2024-01-15 09:06:54', '2024-01-15 09:06:54'),
(34, 20, 1, 4, 20, 7.00, NULL, NULL, '2024-01-15 09:06:54', '2024-01-15 09:06:54'),
(35, 20, 1, 2, 5, 4.00, NULL, NULL, '2024-01-15 09:06:54', '2024-01-15 09:06:54'),
(36, 21, 2, 1, 20, 2.00, NULL, NULL, '2024-01-15 09:06:54', '2024-01-15 09:06:54'),
(37, 21, 2, 3, 10, 3.00, NULL, NULL, '2024-01-15 09:06:54', '2024-01-15 09:06:54'),
(38, 22, 5, 1, 20, 2.00, NULL, NULL, '2024-01-17 06:27:56', '2024-01-17 06:27:56'),
(39, 22, 5, 3, 20, 3.00, NULL, NULL, '2024-01-17 06:27:56', '2024-01-17 06:27:56'),
(40, 23, 3, 2, 20, 4.00, NULL, NULL, '2024-01-18 07:10:16', '2024-01-18 07:10:16'),
(41, 23, 3, 3, 20, 3.00, NULL, NULL, '2024-01-18 07:10:16', '2024-01-18 07:10:16'),
(42, 25, 7, 3, 1, 7.00, NULL, NULL, '2024-01-18 12:32:21', '2024-01-18 12:32:21'),
(43, 25, 7, 4, 1, 3.00, NULL, NULL, '2024-01-18 12:32:21', '2024-01-18 12:32:21'),
(44, 26, 3, 1, 1, 2.00, NULL, NULL, '2024-01-18 12:32:21', '2024-01-18 12:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'مسؤول', '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(2, 'organizer', 'منظم', '2024-01-10 18:46:02', '2024-01-10 18:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `is_main_service` tinyint(1) NOT NULL,
  `is_avaliable` tinyint(1) NOT NULL DEFAULT 1,
  `description` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `is_main_service`, `is_avaliable`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'وجبة بريك عادي 1', 2.00, 0, 1, NULL, NULL, '2024-01-10 18:46:02', '2024-01-18 19:18:32'),
(2, ' وجبة بريك مفتوح ', 4.00, 0, 1, '', NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(3, ' وجبة غداء دجاج  ', 3.00, 0, 1, '', NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(4, 'وجبة غداء مفتوح', 7.00, 0, 1, NULL, NULL, '2024-01-10 18:46:02', '2024-01-11 18:35:27'),
(5, 'تجريب1', 1.00, 0, 0, NULL, '2024-01-11 06:06:39', '2024-01-11 06:05:33', '2024-01-11 06:06:39'),
(6, 'تجريب تعديل1', 2.00, 1, 1, NULL, '2024-01-16 07:39:40', '2024-01-11 18:35:59', '2024-01-16 07:39:40');

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
('11YlewyU64m8clau1kxLWMgiFb8LtbScO93GeNWh', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicGpWWWE4MHJFN0VXQWN2M2s3a1JYS3BveERBWGJOY3hlMkJDSjRGeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6NDoiY2FydCI7YToxOntpOjM7YToxMDp7czo1OiJ0aXRsZSI7czozMDoi2KrZiNi52YrYqSDYrdmI2YQg2KfZhNmF2YbYp9iuIjtzOjg6ImludGVydmFsIjtzOjg6Iti12KjYp9itIjtzOjEzOiJ0eXBlX29mX2V2ZW50IjtzOjg6ItmG2K/ZiNipIjtzOjQ6Im5vdGUiO047czo5OiJkYXRlX2Zyb20iO3M6MTA6IjIwMjQtMDEtMjQiO3M6NzoiZGF0ZV90byI7czoxMDoiMjAyNC0wMS0yNCI7czoxMjoic2VydmljZXNfaWRzIjthOjI6e2k6MDtzOjE6IjIiO2k6MTtzOjE6IjMiO31zOjU6InByaWNlIjthOjI6e2k6MDtzOjE6IjQiO2k6MTtzOjE6IjMiO31zOjg6InF1YW50aXR5IjthOjI6e2k6MDtzOjE6IjgiO2k6MTtzOjE6IjgiO31zOjEwOiJ0b3RhbFByaWNlIjtkOjE3Njt9fX0=', 1705671145);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'علي محمد حبيشان', '781015110', 'halls@bnmahfouz.com', NULL, '$2y$12$y7cmUClE/Vzy2n6sKn2Nium/j9aJ3RY..XkRGCINvJ2C77QuCdB/i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 18:46:02', '2024-01-16 07:52:51'),
(2, 1, ' سعيد محمد الحبشي', '781015110', 'saeed@gemail.com', NULL, '$2y$12$y7cmUClE/Vzy2n6sKn2Nium/j9aJ3RY..XkRGCINvJ2C77QuCdB/i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(3, 1, ' حمود عبدالرقيب العطاس ', '781015110', 'hamood@bnmahfouz.com', NULL, '$2y$12$y7cmUClE/Vzy2n6sKn2Nium/j9aJ3RY..XkRGCINvJ2C77QuCdB/i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(4, 2, ' مؤسسة حضرموت ', '781015110', 'hadramout@gemail.com', NULL, '$2y$12$y7cmUClE/Vzy2n6sKn2Nium/j9aJ3RY..XkRGCINvJ2C77QuCdB/i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(5, 2, '  منظمة المناخ ', '781015110', 'mnakh@gemail.com', NULL, '$2y$12$y7cmUClE/Vzy2n6sKn2Nium/j9aJ3RY..XkRGCINvJ2C77QuCdB/i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(6, 2, '  وزارة التعليم  ', '781015110', 'education@gemail.com', NULL, '$2y$12$y7cmUClE/Vzy2n6sKn2Nium/j9aJ3RY..XkRGCINvJ2C77QuCdB/i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 18:46:02', '2024-01-10 18:46:02'),
(7, 1, 'تركي احمد', '700000001', 't@gmail.com', NULL, '$2y$12$y7cmUClE/Vzy2n6sKn2Nium/j9aJ3RY..XkRGCINvJ2C77QuCdB/i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 20:36:39', '2024-01-10 20:36:39'),
(8, 2, 'تركي', '700000001', 'tasg1818@gmail.com', NULL, '$2y$12$56rbD0LzVZ7VPJ09koQd/OI/cmhpl1ZQxU.5Ebc2/4T0bT3osUn1m', NULL, NULL, NULL, 'BHly4c6jd6h1DYlSqUv9vvEmu6XfIqpOmf8HFbgeBUI1QfqvaYoq8mcKJWj0', NULL, NULL, '2024-01-17 08:01:32', '2024-01-17 08:06:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_employee_id_foreign` (`employee_id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`);

--
-- Indexes for table `reservation__details`
--
ALTER TABLE `reservation__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation__details_reservation_id_foreign` (`reservation_id`),
  ADD KEY `reservation__details_hall_id_foreign` (`hall_id`),
  ADD KEY `reservation__details_service_id_foreign` (`service_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `reservation__details`
--
ALTER TABLE `reservation__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservation__details`
--
ALTER TABLE `reservation__details`
  ADD CONSTRAINT `reservation__details_hall_id_foreign` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`),
  ADD CONSTRAINT `reservation__details_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation__details_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
