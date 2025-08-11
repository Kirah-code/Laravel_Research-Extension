-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 04:38 PM
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
-- Database: `ojt_project`
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
-- Table structure for table `extensions`
--

CREATE TABLE `extensions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `months` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Ongoing',
  `proponents` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `terminal_report` varchar(255) DEFAULT NULL,
  `moa` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extensions`
--

INSERT INTO `extensions` (`id`, `title`, `project_type`, `start_date`, `end_date`, `months`, `status`, `proponents`, `description`, `created_at`, `updated_at`, `user_id`, `terminal_report`, `moa`, `mou`) VALUES
(6, 'Extension 1', 'Extension', '2025-06-16', '2025-07-16', 2, 'Ongoing', 'Zhul\r\nLeonard', 'Extension Cord', '2025-06-15 22:10:37', '2025-06-15 22:10:37', 3, 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link'),
(7, 'Extension 2', 'Extension', '2025-06-19', '2025-08-19', 2, 'Ongoing', 'Zhul\r\nRhea', NULL, '2025-06-19 05:42:05', '2025-06-19 05:42:05', NULL, 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link'),
(8, 'Extension 2', 'Extension', '2025-06-19', '2025-08-19', 2, 'Ongoing', 'Zhul\r\nRhea', NULL, '2025-06-19 05:42:28', '2025-06-19 05:42:28', NULL, 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link');

-- --------------------------------------------------------

--
-- Table structure for table `extension_user`
--

CREATE TABLE `extension_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `extension_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extension_user`
--

INSERT INTO `extension_user` (`id`, `extension_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 7, 3, NULL, NULL),
(2, 7, 7, NULL, NULL),
(3, 8, 3, NULL, NULL),
(4, 8, 7, NULL, NULL);

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
(4, '2025_05_08_180540_create_researches_table', 2),
(5, '2025_05_13_145829_update_researches_table_add_more_fields', 3),
(6, '2025_05_13_150544_update_researches_table_remove_duration', 4),
(7, '2025_05_13_182126_add_role_to_users_table', 5),
(8, '2025_05_22_152144_add_fields_to_researches_table', 6),
(9, '2025_05_22_160811_add_user_id_to_researches_table', 7),
(10, '2025_05_22_162544_create_notifications_table', 8),
(11, '2025_06_01_142718_add_user_id_to_notifications_table', 9),
(12, '2025_06_04_101935_create_extensions_table', 10),
(13, '2025_06_04_180407_update_researches_table_add_specific_file_fields', 11),
(14, '2025_06_08_141657_add_reports_and_agreements_to_researches_table', 12),
(15, '2025_06_08_165253_add_user_id_to_extensions_table', 13),
(16, '2025_06_08_173654_update_extensions_table_add_moa_moo_and_user_id', 14),
(17, '2025_06_10_155616_add_proponents_to_researches_table', 15),
(18, '2025_06_10_170823_add_proponents_to_extensions_table', 16),
(19, '2025_06_15_073900_update_researches_table', 17),
(20, '2025_06_15_074548_update_researches_table', 18),
(21, '2025_06_15_081031_drop_proponents_from_researches_table', 19),
(22, '2025_06_15_081150_add_proponents_to_researches_table', 20),
(23, '2025_06_15_090622_update_extensions_table_add_document_link', 21),
(24, '2025_06_15_090707_update_extensions_table_add_document_link', 21),
(25, '2025_06_16_050219_add_documents_and_yearly_links_to_researches_table', 22),
(26, '2025_06_16_054454_update_document_fields_on_extensions_table', 23),
(27, '2025_06_19_125618_create_research_user_table', 24),
(28, '2025_06_19_133319_create_extension_user_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `message`, `type`, `read`, `created_at`, `updated_at`) VALUES
(1, NULL, 'New Research Added', 'Research titled \"sadasd\" was uploaded.', 'info', 0, '2025-05-22 10:32:10', '2025-05-22 10:32:10'),
(2, NULL, 'New Research Added', 'Research titled \"Wwqwqwqqwqwq\" was uploaded.', 'info', 0, '2025-05-27 07:31:00', '2025-05-27 07:31:00'),
(3, NULL, 'New Research Added', 'Research titled \"qweqweqweqwe\" was uploaded.', 'info', 0, '2025-05-27 07:43:22', '2025-05-27 07:43:22'),
(4, NULL, 'New Research Added', 'Research titled \"asdasddqwqeq\" was uploaded.', 'info', 0, '2025-05-27 07:55:19', '2025-05-27 07:55:19'),
(5, NULL, 'New Research Added', 'Research titled \"qwewqeqwe\" was uploaded.', 'info', 0, '2025-05-27 07:58:22', '2025-05-27 07:58:22'),
(6, NULL, 'New Research Added', 'Research titled \"wqeqweq\" was uploaded.', 'info', 0, '2025-05-27 07:59:54', '2025-05-27 07:59:54'),
(7, NULL, 'New Research Added', 'Research titled \"qweqweqw\" was uploaded.', 'info', 0, '2025-05-27 08:02:46', '2025-05-27 08:02:46'),
(8, NULL, 'New Research Added', 'Research titled \"qweqwe\" was uploaded.', 'info', 0, '2025-05-27 08:03:32', '2025-05-27 08:03:32'),
(9, NULL, 'New Research Added', 'Research titled \"qweqwe\" was uploaded.', 'info', 0, '2025-05-27 08:04:12', '2025-05-27 08:04:12'),
(10, NULL, 'New Research Added', 'Research titled \"qweqwe\" was uploaded.', 'info', 0, '2025-05-27 08:06:17', '2025-05-27 08:06:17'),
(11, NULL, 'New Research Added', 'Research titled \"asdasd\" was uploaded.', 'info', 0, '2025-06-01 06:28:38', '2025-06-01 06:28:38'),
(12, NULL, 'New Research Added', 'Research titled \"asdasda\" was uploaded.', 'info', 0, '2025-06-01 06:29:36', '2025-06-01 06:29:36'),
(13, 5, 'New Research Added', 'Research titled \"asdas\" was uploaded.', 'info', 0, '2025-06-01 06:35:11', '2025-06-01 06:35:11'),
(14, 5, 'New Research Added', 'Research titled \"asdasd\" was uploaded.', 'info', 0, '2025-06-01 06:41:44', '2025-06-01 06:41:44'),
(15, NULL, 'New Research Added', 'Research titled \"asdasdasd\" was uploaded.', 'info', 0, '2025-06-01 06:50:19', '2025-06-01 06:50:19'),
(16, 5, 'New Research Added', 'Research titled \"dasdasdas\" was uploaded.', 'info', 0, '2025-06-01 06:52:14', '2025-06-01 06:52:14'),
(17, 5, 'New Research Added', 'Research titled \"Title of the world\" was uploaded.', 'info', 0, '2025-06-04 10:25:29', '2025-06-04 10:25:29'),
(18, 5, 'New Research Added', 'Research titled \"Yes\" was uploaded.', 'info', 0, '2025-06-08 06:44:57', '2025-06-08 06:44:57'),
(19, NULL, 'New Research Added', 'Research titled \"Yes\" was uploaded.', 'info', 0, '2025-06-08 06:53:27', '2025-06-08 06:53:27'),
(20, NULL, 'New Research Added', 'Research titled \"asdasda\" was uploaded.', 'info', 0, '2025-06-08 06:58:24', '2025-06-08 06:58:24'),
(21, 3, 'New Extension Added', 'Extension titled \"asdasd\" was uploaded.', 'info', 0, '2025-06-08 10:08:06', '2025-06-08 10:08:06'),
(22, 3, 'New Extension Added', 'Extension titled \"asdasd\" was uploaded.', 'info', 0, '2025-06-08 10:11:21', '2025-06-08 10:11:21'),
(23, 3, 'New Extension Added', 'Extension titled \"Yes yes yes\" was uploaded.', 'info', 0, '2025-06-15 01:14:35', '2025-06-15 01:14:35'),
(24, 3, 'New Extension Added', 'Extension titled \"Extension 1\" was uploaded.', 'info', 0, '2025-06-15 22:08:21', '2025-06-15 22:08:21'),
(25, 3, 'New Extension Added', 'Extension titled \"Extension 1\" was uploaded.', 'info', 0, '2025-06-15 22:10:37', '2025-06-15 22:10:37');

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
-- Table structure for table `researches`
--

CREATE TABLE `researches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `months` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Incomplete','Ongoing','Completed','Approved','Rejected','Declined') NOT NULL DEFAULT 'Ongoing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `proponents` varchar(255) DEFAULT NULL,
  `imrad_link` varchar(255) DEFAULT NULL,
  `moa_link` varchar(255) DEFAULT NULL,
  `mou_link` varchar(255) DEFAULT NULL,
  `year1_q1_link` varchar(255) DEFAULT NULL,
  `year1_q2_link` varchar(255) DEFAULT NULL,
  `year1_q3_link` varchar(255) DEFAULT NULL,
  `year1_q4_link` varchar(255) DEFAULT NULL,
  `year2_q1_link` varchar(255) DEFAULT NULL,
  `year2_q2_link` varchar(255) DEFAULT NULL,
  `year2_q3_link` varchar(255) DEFAULT NULL,
  `year2_q4_link` varchar(255) DEFAULT NULL,
  `year3_q1_link` varchar(255) DEFAULT NULL,
  `year3_q2_link` varchar(255) DEFAULT NULL,
  `year3_q3_link` varchar(255) DEFAULT NULL,
  `year3_q4_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `researches`
--

INSERT INTO `researches` (`id`, `user_id`, `title`, `project_type`, `months`, `description`, `status`, `created_at`, `updated_at`, `start_date`, `end_date`, `proponents`, `imrad_link`, `moa_link`, `mou_link`, `year1_q1_link`, `year1_q2_link`, `year1_q3_link`, `year1_q4_link`, `year2_q1_link`, `year2_q2_link`, `year2_q3_link`, `year2_q4_link`, `year3_q1_link`, `year3_q2_link`, `year3_q3_link`, `year3_q4_link`) VALUES
(37, 3, 'Research 1', 'Thesis', 2, 'Basic tools for sabotaging thesis project', 'Ongoing', '2025-06-15 21:28:35', '2025-06-15 21:28:35', '2025-06-16', '2025-09-16', 'Zhul, Leonard', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, 'Research 2', 'Thesis', 2, NULL, 'Ongoing', '2025-06-19 05:06:56', '2025-06-19 05:06:56', '2025-06-19', '2025-08-19', 'Zhul, Leonard', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', 'https://drive.google.com/file/d/1t3mNNHAWEhAsOwLPMIPuU9eGDL-bHQn5/view?usp=drive_link', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `research_user`
--

CREATE TABLE `research_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `research_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `research_user`
--

INSERT INTO `research_user` (`id`, `research_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 38, 3, NULL, NULL),
(2, 38, 7, NULL, NULL);

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
('fR6Pa9QkYP9LvYbdCGESHqql3yr0VBSwcGg3AypQ', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiOVVOZmZHZng5cHlGa20yUWV5T3pLaWQyaUVyaTdMZmNpbWVHN1VZVCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkL3VwbG9hZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NzoidXNlcl9pZCI7aTo1O3M6NDoicm9sZSI7aTowO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1750343094);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(2, 'Leonard Palco', 'palco@gmail.com', NULL, '$2y$12$wOkWsnCYqdg7qlmIgJoyIe.XOxTBeT1aSescuuftRySz5rULuwk2G', NULL, '2025-05-07 10:39:17', '2025-05-07 10:39:17', 0),
(5, 'admin', 'admin@gmail.com', NULL, '$2y$12$cBYmL86bDuP1hC1ZeK/cy.wMDrKDpYhY1H7jrsOsvmlKU6WdGPbsi', NULL, '2025-05-18 08:19:13', '2025-05-18 08:19:13', 0),
(6, 'Zhul', 'zhulzhul@gmail.com', NULL, '$2y$12$DpqYFe6VA1PjNQEhW0Il8OcEIM8AIEFoCnrBqUE/R34p4uNHqMKqO', NULL, '2025-06-08 07:18:57', '2025-06-08 07:18:57', 1),
(7, 'Yemen Earth', 'yemen.earth@gmail.com', NULL, '$2y$12$vG7pNdkSsSm/.aIo/LpVke1q3AzdXzpZa7iTBTimFrqiEhQPPYfTK', NULL, '2025-06-15 23:58:32', '2025-06-15 23:58:32', 1);

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
-- Indexes for table `extensions`
--
ALTER TABLE `extensions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `extensions_user_id_foreign` (`user_id`);

--
-- Indexes for table `extension_user`
--
ALTER TABLE `extension_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `extension_user_extension_id_foreign` (`extension_id`),
  ADD KEY `extension_user_user_id_foreign` (`user_id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `researches`
--
ALTER TABLE `researches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `researches_user_id_foreign` (`user_id`);

--
-- Indexes for table `research_user`
--
ALTER TABLE `research_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `research_user_research_id_foreign` (`research_id`),
  ADD KEY `research_user_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extensions`
--
ALTER TABLE `extensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `extension_user`
--
ALTER TABLE `extension_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `researches`
--
ALTER TABLE `researches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `research_user`
--
ALTER TABLE `research_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `extensions`
--
ALTER TABLE `extensions`
  ADD CONSTRAINT `extensions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `extension_user`
--
ALTER TABLE `extension_user`
  ADD CONSTRAINT `extension_user_extension_id_foreign` FOREIGN KEY (`extension_id`) REFERENCES `extensions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `extension_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `researches`
--
ALTER TABLE `researches`
  ADD CONSTRAINT `researches_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `research_user`
--
ALTER TABLE `research_user`
  ADD CONSTRAINT `research_user_research_id_foreign` FOREIGN KEY (`research_id`) REFERENCES `researches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `research_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
