-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 01:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maGV` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classroms`
--

CREATE TABLE `classroms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_of_class` int(11) NOT NULL,
  `maKhoi` int(10) UNSIGNED DEFAULT NULL,
  `maGV` int(10) UNSIGNED DEFAULT NULL,
  `maHK` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classroms`
--

INSERT INTO `classroms` (`id`, `name_class`, `size_of_class`, `maKhoi`, `maGV`, `maHK`, `created_at`, `updated_at`) VALUES
(1, '10a3', 43, 2, 1, 1, '2019-06-24 01:26:56', '2019-06-24 01:26:56'),
(2, '11A3', 43, 4, 4, 2, '2019-06-24 03:50:47', '2019-06-24 03:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximun_class` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name_grade`, `maximun_class`, `created_at`, `updated_at`) VALUES
(2, '10', 45, '2019-06-24 01:23:53', '2019-06-24 03:46:37'),
(4, '11', 50, '2019-06-24 01:25:36', '2019-06-24 01:25:36'),
(5, '12', 10, '2019-06-24 01:25:43', '2019-06-24 01:25:43');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_05_15_101529_create_roles_table', 1),
(3, '2019_05_15_101832_create_teachers_table', 1),
(4, '2019_05_15_101914_create_grades_table', 1),
(5, '2019_05_15_102027_create_objects_table', 1),
(6, '2019_05_15_102102_create_semesters_table', 1),
(7, '2019_05_16_101902_create_classroms_table', 1),
(8, '2019_05_18_101926_create_students_table', 1),
(9, '2019_05_19_102227_create_score_boards_table', 1),
(10, '2019_05_19_102339_create_m_object_semesters_table', 1),
(11, '2019_05_19_102354_create_m_object_teachers_table', 1),
(12, '2019_05_31_144133_create_accounts_table', 1),
(13, '2019_06_15_083033_create_student_objects_table', 1),
(14, '2019_06_20_072654_create_object_classes_table', 1),
(15, '2019_5_16_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_object_semesters`
--

CREATE TABLE `m_object_semesters` (
  `id` int(10) UNSIGNED NOT NULL,
  `maHK` int(10) UNSIGNED DEFAULT NULL,
  `maMH` int(10) UNSIGNED DEFAULT NULL,
  `maLop` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_object_teachers`
--

CREATE TABLE `m_object_teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `maMH` int(10) UNSIGNED DEFAULT NULL,
  `maGV` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objects`
--

CREATE TABLE `objects` (
  `id` int(10) UNSIGNED NOT NULL,
  `nameObject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_passed` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `objects`
--

INSERT INTO `objects` (`id`, `nameObject`, `score_passed`, `created_at`, `updated_at`) VALUES
(1, 'Toán', 5.00, '2019-06-24 01:21:45', '2019-06-24 01:21:45'),
(3, 'Lý', 5.00, '2019-06-24 01:22:48', '2019-06-24 01:22:48'),
(4, 'Hóa', 5.00, '2019-06-24 01:46:56', '2019-06-24 01:46:56'),
(5, 'Văn', 5.00, '2019-06-24 03:47:55', '2019-06-24 03:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `object_classes`
--

CREATE TABLE `object_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_roles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name_roles`, `created_at`, `updated_at`) VALUES
(1, 'Giáo viên', '2019-06-24 01:19:45', '2019-06-24 01:19:45'),
(2, 'Giáo vụ', '2019-06-24 01:19:50', '2019-06-24 01:19:50'),
(3, 'Hiệu trưởng', '2019-06-24 01:19:55', '2019-06-24 01:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `score_boards`
--

CREATE TABLE `score_boards` (
  `id` int(10) UNSIGNED NOT NULL,
  `maHS` int(10) UNSIGNED DEFAULT NULL,
  `maLop` int(10) UNSIGNED DEFAULT NULL,
  `maMonHoc` int(10) UNSIGNED DEFAULT NULL,
  `score` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `score_boards`
--

INSERT INTO `score_boards` (`id`, `maHS`, `maLop`, `maMonHoc`, `score`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 1, 5.00, '2019-06-24 01:30:17', '2019-06-24 03:59:28'),
(8, 2, 1, 1, 5.00, '2019-06-24 01:30:17', '2019-06-24 03:59:28'),
(9, 3, 1, 1, 5.00, '2019-06-24 01:30:17', '2019-06-24 03:59:28'),
(10, 1, 1, 3, 10.00, '2019-06-24 01:30:17', '2019-06-24 03:58:17'),
(11, 2, 1, 3, 5.00, '2019-06-24 01:30:17', '2019-06-24 03:58:17'),
(12, 3, 1, 3, 4.00, '2019-06-24 01:30:17', '2019-06-24 03:58:17'),
(13, 4, 2, 1, 0.00, '2019-06-24 03:57:39', '2019-06-24 03:57:39'),
(14, 4, 2, 3, 0.00, '2019-06-24 03:57:39', '2019-06-24 03:57:39'),
(15, 4, 2, 4, 0.00, '2019-06-24 03:57:39', '2019-06-24 03:57:39'),
(16, 4, 2, 5, 5.00, '2019-06-24 04:07:01', '2019-06-24 04:07:18'),
(17, 6, 2, 5, 5.00, '2019-06-24 04:07:01', '2019-06-24 04:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `name`, `year_from`, `year_to`, `created_at`, `updated_at`) VALUES
(1, 'Học kì 1', '2019-06-05', '2020-06-09', '2019-06-24 01:20:27', '2019-06-24 01:20:27'),
(2, 'Học kì 2', '2019-06-14', '2019-07-25', '2019-06-24 03:47:12', '2019-06-24 03:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `nameStudent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexual` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLop` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nameStudent`, `date_of_birth`, `address`, `sexual`, `maLop`, `created_at`, `updated_at`) VALUES
(1, 'clone 1', '2019-06-20', 'asdasd', 'male', 1, '2019-06-24 01:27:17', '2019-06-24 01:28:28'),
(2, 'clone 2', '2019-06-11', 'kwekjad', 'female', 1, '2019-06-24 01:27:29', '2019-06-24 01:28:28'),
(3, 'clone 3', '2019-06-08', '213123', 'male', 1, '2019-06-24 01:27:41', '2019-06-24 01:28:28'),
(4, 'clone 4', '2019-06-13', 'abc zyx', 'male', 2, '2019-06-24 03:51:07', '2019-06-24 03:57:39'),
(6, 'clone 5', '2019-06-21', '139 lý chính thằng', 'male', 2, '2019-06-24 04:06:23', '2019-06-24 04:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_objects`
--

CREATE TABLE `student_objects` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_teacher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexual` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maRole` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name_teacher`, `sexual`, `dob`, `address`, `email`, `phone_number`, `maRole`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A', 'male', '2019-06-15', '139 lý chính thắng', 'a@a.com', '09123213', 1, '2019-06-24 01:26:12', '2019-06-24 03:50:19'),
(2, 'Nguyễn Văn Cừ', 'female', '2019-06-21', '12333 ABC', 'maa@a.com', '091230123', 2, '2019-06-24 01:26:42', '2019-06-24 01:26:42'),
(3, 'Test thị Test', 'female', '2019-06-22', 'Scam', 'a@a.com', '091232323', 3, '2019-06-24 03:48:53', '2019-06-24 03:48:53'),
(4, 'test văn test', 'female', '2019-06-29', 'test abc', 'absd@as.com', '091222222', 2, '2019-06-24 03:49:38', '2019-06-24 03:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maGV` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `maGV`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'viet', 'viet@a.com', NULL, '$2y$10$XMZJEuOjYee8/pgeR5mp0ua8evEGiz6aKzM/Zlk5CQjVu9piwDXQe', NULL, NULL, '2019-06-24 01:19:38', '2019-06-24 01:19:38'),
(2, 'abc', 'a@a.com', NULL, '$2y$10$kMhVNj1zg8HpASxQN8HcZO9Ph2qJpfGPpULLVnU67JEvCrMCEWZFq', 1, NULL, '2019-06-24 01:26:12', '2019-06-24 01:26:12'),
(3, 'abcd', 'maa@a.com', NULL, '$2y$10$2mFrDDe1EsEyLEFEW9opjuqWte71P93945SpIl.2GR55d4fliMA8a', 2, NULL, '2019-06-24 01:26:42', '2019-06-24 01:26:42'),
(4, 'test', 'absd@as.com', NULL, '$2y$10$sCeKBlMxtQUA4UgjiRDsOuGbqVux589FEIGxaNXK6nV5M/uei6.i6', 4, NULL, '2019-06-24 03:49:39', '2019-06-24 03:49:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classroms`
--
ALTER TABLE `classroms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_object_semesters`
--
ALTER TABLE `m_object_semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_object_teachers`
--
ALTER TABLE `m_object_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `object_classes`
--
ALTER TABLE `object_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score_boards`
--
ALTER TABLE `score_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_objects`
--
ALTER TABLE `student_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classroms`
--
ALTER TABLE `classroms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_object_semesters`
--
ALTER TABLE `m_object_semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_object_teachers`
--
ALTER TABLE `m_object_teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `objects`
--
ALTER TABLE `objects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `object_classes`
--
ALTER TABLE `object_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `score_boards`
--
ALTER TABLE `score_boards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_objects`
--
ALTER TABLE `student_objects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
