-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 12:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutmes`
--

CREATE TABLE `aboutmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutmes`
--

INSERT INTO `aboutmes` (`id`, `konten`, `link`, `created_at`, `updated_at`) VALUES
(1, 'I am a junior software developer and a novice gamer I have created many useful tools for automating programs and I really like new things about technology and other things that are useful to me', 'https://wa.me/6287781339449', NULL, '2023-05-01 20:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'frameworks', NULL, NULL),
(2, 'tools', NULL, NULL),
(3, 'languages', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `instagram`, `facebook`, `github`, `created_at`, `updated_at`) VALUES
(1, '0xd1m5@gmail.com', 'https://www.instagram.com/syaauqqii/', 'https://www.facebook.com/dimas.s.s.1000/', 'https://github.com/syauqqii', NULL, '2023-05-01 20:28:50');

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
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `nama`, `konten`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Dimas Syauqi Syauqi', 'I focus on developing a simple cli or web app software, sometimes i also play game and watch anime, i like to read news.', '0xd1m5@gmail.com', NULL, '2023-05-01 20:22:45');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_01_230958_create_homepages_table', 2),
(7, '2023_05_01_233332_create_aboutmes_table', 3),
(8, '2023_05_01_233355_create_recentprojects_table', 3),
(9, '2023_05_01_233406_create_otherprojects_table', 3),
(10, '2023_05_01_233411_create_contacts_table', 3),
(11, '2023_05_01_233431_create_skill_languages_table', 3),
(12, '2023_05_01_233437_create_skill_frameworks_table', 3),
(13, '2023_05_01_233442_create_skill_tools_table', 3),
(14, '2023_06_11_154238_create_categories_table', 4),
(15, '2023_06_11_160143_create_categories_table', 5),
(16, '2023_06_11_160201_create_skills_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `otherprojects`
--

CREATE TABLE `otherprojects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otherprojects`
--

INSERT INTO `otherprojects` (`id`, `judul`, `konten`, `link`, `created_at`, `updated_at`) VALUES
(2, 'KantinSunib', 'Application for buying and selling dynamically with a file.txt database to fulfill OOP course projects.', 'https://github.com/syauqqii/KantinSunib', NULL, '2023-05-01 18:51:13'),
(8, 'Automation-GitBash-Upload-File', 'Make easy to upload file into github with automation gitbash upload file, but.. now is under maintenance (error tools) :)', 'https://github.com/syauqqii/Automation-GitBash-Upload-File', '2023-05-01 18:55:48', '2023-05-01 19:07:47'),
(13, 'AR-permainan-tradisional', 'AR applications to display a 3D object about traditional games not only that, this application can display information about the 3D object that is displayed.', 'https://github.com/syauqqii/AR-permainan-tradisional', '2023-05-01 19:13:58', '2023-05-01 19:13:58');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recentprojects`
--

CREATE TABLE `recentprojects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recentprojects`
--

INSERT INTO `recentprojects` (`id`, `path_foto`, `judul`, `konten`, `link`, `created_at`, `updated_at`) VALUES
(1, 'pub/images/TEST-API.png', 'TEST-API', 'This is my project which is useful for other alternatives to postman, this tool can do simple get, post, put, delete requests.', 'https://github.com/syauqqii/TEST-API', NULL, '2023-05-01 20:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'LARAVEL', 1, NULL, '2023-06-11 11:11:43'),
(2, 'NODE JS', 1, NULL, NULL),
(3, 'BOOTSTRAP', 1, NULL, NULL),
(4, 'BASH', 3, NULL, NULL),
(5, 'C', 3, NULL, NULL),
(6, 'JAVASCRIPT', 3, NULL, NULL),
(7, 'PHP', 3, NULL, NULL),
(8, 'PYTHON', 3, NULL, NULL),
(9, 'BURPSUITE', 2, NULL, '2023-06-11 11:08:30'),
(10, 'GIT & GITHUB', 2, NULL, NULL),
(11, 'METASPLOIT', 2, NULL, NULL),
(12, 'NANO & VIM', 2, NULL, NULL),
(13, 'NMAP', 2, NULL, '2023-06-11 11:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `skill_frameworks`
--

CREATE TABLE `skill_frameworks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_frameworks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_frameworks`
--

INSERT INTO `skill_frameworks` (`id`, `skill_frameworks`, `created_at`, `updated_at`) VALUES
(1, 'LARAVEL', NULL, NULL),
(2, 'NODE JS', NULL, NULL),
(3, 'BOOTSTRAP', NULL, '2023-05-01 20:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `skill_languages`
--

CREATE TABLE `skill_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_languages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_languages`
--

INSERT INTO `skill_languages` (`id`, `skill_languages`, `created_at`, `updated_at`) VALUES
(1, 'BASH', NULL, NULL),
(2, 'C', NULL, NULL),
(3, 'JAVASCRIPT', NULL, NULL),
(4, 'PHP', NULL, NULL),
(5, 'PYTHON', NULL, '2023-05-01 20:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `skill_tools`
--

CREATE TABLE `skill_tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_tools` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_tools`
--

INSERT INTO `skill_tools` (`id`, `skill_tools`, `created_at`, `updated_at`) VALUES
(1, 'BURPSUITE', NULL, NULL),
(2, 'GIT & GITHUB', NULL, NULL),
(3, 'METASPLOIT', NULL, NULL),
(4, 'NANO & VIM', NULL, NULL),
(5, 'NMAP', NULL, '2023-05-01 19:55:07');

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
(2, 'Dimas Syauqi Syafa', 'admin@ytta.id', NULL, '$2y$10$C/16piVvrF2vdYIToOh7re09g0VhHUIi08ET1h74m82vZJrj0Q4Bq', NULL, '2023-03-01 15:00:00', '2023-03-01 15:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutmes`
--
ALTER TABLE `aboutmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otherprojects`
--
ALTER TABLE `otherprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recentprojects`
--
ALTER TABLE `recentprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_category_id_foreign` (`category_id`);

--
-- Indexes for table `skill_frameworks`
--
ALTER TABLE `skill_frameworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_languages`
--
ALTER TABLE `skill_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_tools`
--
ALTER TABLE `skill_tools`
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
-- AUTO_INCREMENT for table `aboutmes`
--
ALTER TABLE `aboutmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `otherprojects`
--
ALTER TABLE `otherprojects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recentprojects`
--
ALTER TABLE `recentprojects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `skill_frameworks`
--
ALTER TABLE `skill_frameworks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill_languages`
--
ALTER TABLE `skill_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skill_tools`
--
ALTER TABLE `skill_tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
