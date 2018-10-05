-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 05:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '12345', 'admin', '123456789', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(10) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `jobpost_id` int(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `jobseeker_id`, `jobpost_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, NULL, NULL),
(2, 1, 8, NULL, NULL),
(3, 1, 1, NULL, NULL),
(4, 1, 2, NULL, NULL),
(6, 1, 3, NULL, NULL),
(8, 2, 1, NULL, NULL),
(9, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `company_email`, `company_password`, `company_phone`, `company_type`, `company_image`) VALUES
(1, 'bengal', 'bengal@gmail.com', '12345', '123456789', 'multinational', 0x646f776e6c6f61642e706e67),
(2, 'Pran & Rfl L.td', 'rfl@gmail.com', '12345', '123456789', 'multinational', 0x646f776e6c6f61642e706e67),
(3, 'Square Group of Industries', 'square@gmail.com', '12345', '123456789', 'multinational', 0x6b697373706e672d7371756172652d706861726d61636575746963616c732d706861726d61636575746963616c2d696e6475737472792d6c696d2d7371756172652d35616264656161613136386238332e383236373430353631353232333935383138303932342e706e67),
(4, 'Shopno  Super Shop', 'shopno@gmail.com', '12345', '123456789', 'marketing', 0x73687761706e6f32303135303632343137303835302e6a7067),
(5, 'DataSoft', 'datasoft@gmail.com', '12345', '123456789', 'it', 0x313531383432353631352e706e67),
(6, 'sami', 'sami@gmail.com', '12345', '123456789', 'it', 0x70686f6e6570696375747265732d54412e6a7067),
(7, 'laz Pharma', 'laz@gmail.com', '12345', '12345', 'marketing', 0x70686f6e6570696375747265732d54412e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `jobpost_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `jobpost_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobpost_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobpost_salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`jobpost_id`, `company_id`, `jobpost_title`, `jobpost_description`, `jobpost_salary`, `created_at`, `updated_at`) VALUES
(1, 1, 'Senior Manager', 'we have needed 3 of employees for this desire post.', '25000', NULL, NULL),
(2, 2, 'In house Assistant Auditor', 'There have several more faciulities for this vacany.', '20000', NULL, NULL),
(3, 3, 'Pharmachist', 'Graduated from any reputable university with minimum c.g.p.a 3.00.', '30000', NULL, NULL),
(4, 4, 'Sales Executive', 'Graduated in Accounting from any reputable university. We have only one vacancy for this post.\r\nFor more details:\r\ncall:0168857471', '20000', NULL, NULL),
(5, 5, 'Junior Developer', 'Must have to be graduated.\r\nacknowledgment in Php/c#\r\nframework: laravel / .net', '25000', NULL, NULL),
(6, 5, 'Data Analyse', 'Have to have the knowledge in cse', '15000', NULL, NULL),
(7, 2, 'ASSISANT MANAGER', 'SXVSABDFDA', '1215', NULL, NULL),
(8, 2, 'DFFDFHSDGH', 'SDGSDHS', '243252', NULL, NULL),
(9, 2, 'af', 'safazxbz', '1234', NULL, NULL),
(10, 2, 'af', 'safazxbz', '1234', NULL, NULL),
(11, 2, 'Senior Manager', 'adsg', 'agadgs', NULL, NULL),
(12, 2, 'ag', 'sagfa142', '241', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `jobseeker_id` int(10) UNSIGNED NOT NULL,
  `jobseeker_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobseeker_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobseeker_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobseeker_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobseeker_jobtype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobseeker_cv` blob NOT NULL,
  `jobseeker_image` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`jobseeker_id`, `jobseeker_name`, `jobseeker_email`, `jobseeker_password`, `jobseeker_phone`, `jobseeker_jobtype`, `jobseeker_cv`, `jobseeker_image`, `created_at`, `updated_at`) VALUES
(1, 'anik', 'anik@gmail.com', '12345', '123456789', 'it', 0x70726f6a6563742070726f706f73616c2e706466, 0x70686f6e6570696375747265732d54412e6a7067, NULL, NULL),
(2, 'sami', 'sami@gmail.com', '12345', '123456789', 'marketing', 0x646f63756d656e746174696f6e2e646f6378, 0x70686f6e6570696375747265732d54412e6a7067, NULL, NULL);

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2018_07_15_133000_create_admin_table', 1),
(22, '2018_07_21_160605_create_jobseeker_table', 1),
(23, '2018_07_24_043625_create_company_table', 1),
(24, '2018_08_01_144003_create_jobpost_table', 1),
(25, '2018_08_06_133812_create_application_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`jobpost_id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`jobseeker_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `jobpost_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `jobseeker_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
