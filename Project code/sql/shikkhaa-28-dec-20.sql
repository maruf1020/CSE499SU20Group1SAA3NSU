-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 07:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shikkhaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author`, `description`, `post_id`, `created_at`, `updated_at`) VALUES
(3, 'tacher', 'thank you', 23, '2020-12-22 20:47:09', '2020-12-22 20:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `initial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `credit`, `initial`, `institution_id`, `department_id`, `created_at`, `updated_at`) VALUES
(3, 'Programming Language 1', 3, 'CSE115', 1, 3, '2020-12-21 12:41:42', '2020-12-21 12:41:42'),
(4, 'Bangla Language and Literature', 3, 'BEN205', 1, 2, '2020-12-21 12:42:17', '2020-12-21 12:42:17'),
(5, 'Programming Language 2 (JAVA)', 3, 'CSE215', 1, 3, '2020-12-21 12:42:45', '2020-12-21 12:42:45'),
(6, 'English grammar and pronunciation', 3, 'ENG420', 1, 3, '2020-12-22 18:29:07', '2020-12-22 18:29:07'),
(7, 'ENG 111 Public Speaking', 3, 'ENG103', 1, 4, '2020-12-22 18:58:59', '2020-12-22 18:58:59'),
(8, 'LBA 101 Bangladesh Culture and Heritage', 1, 'LBA101', 1, 5, '2020-12-22 18:59:32', '2020-12-22 18:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `institution_id`, `created_at`, `updated_at`) VALUES
(2, 'EEE Department', 1, '2020-12-19 04:03:37', '2020-12-19 04:08:37'),
(3, 'ECE Departments', 1, '2020-12-19 04:12:24', '2020-12-19 04:12:24'),
(4, 'English Department', 1, '2020-12-22 18:29:31', '2020-12-22 18:29:55'),
(5, 'SBE Department', 1, '2020-12-22 18:29:37', '2020-12-22 18:29:47'),
(6, 'Architecture Department', 1, '2020-12-22 18:30:10', '2020-12-22 18:30:10'),
(7, 'Bangla Department', 1, '2020-12-22 18:57:14', '2020-12-22 18:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_new` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_verified` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `institution_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `email`, `phone`, `address`, `photo`, `initial`, `dob`, `is_new`, `is_verified`, `institution_id`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'Dr. K. M. A. Salam', 'kazi.salam@northsouth.edu', '0165842544', 'Ph.D from Muroran Institute of Tech., Japan', NULL, 'KAS', '2021-01-01', '0', '1', 1, 4, '2020-12-21 17:05:40', '2020-12-22 18:33:41'),
(9, 'Dr. Shazzad Hosain', 'shazzad.hosain@northsouth.edu', '0255668200', 'PhD in Computer Science from Wayne State University, USA', NULL, 'SHN', '2020-12-26', '0', '1', 1, NULL, '2020-12-21 17:05:55', '2020-12-22 18:32:46'),
(10, 'MR. SYED ATHAR BIN AMIR', 'syed.amir@northsouth.edu', '02556682', 'B.S. in Electrical, Computer, and Biomedical Engineering, Worcester Polytechnic Institute (WPI), MA, USA', NULL, 'SAA3', '2020-12-25', '0', '1', 1, NULL, '2020-12-22 18:45:51', '2020-12-22 18:47:03'),
(11, 'Dr. Mahdy Rahman Chowdhury', 'mahdy.chowdhury@northsouth.edu', '880255668200', 'https://scholar.google.com.sg/citations?hl=en&user=PxNOguMAAAAJ&view_op=list_works', NULL, 'MDY', '1988-06-08', '0', '1', 1, NULL, '2020-12-22 18:48:30', '2020-12-22 18:48:30'),
(12, 'Dr. Shakila Nur', 'shakila.nur@northsouth.edu', '255668200', 'Ph.D., University of Tasmania, Australia      M.A., University of Dhaka, Bangladesh', NULL, 'SNU', '1985-02-28', '0', '1', 1, NULL, '2020-12-22 18:50:06', '2020-12-22 18:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE `institutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ein` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutions`
--

INSERT INTO `institutions` (`id`, `name`, `ein`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'North South University', '78568', 2, '2020-11-24 15:05:15', '2020-11-24 15:05:15'),
(2, 'East West University', '78', 2, '2020-11-24 15:05:27', '2020-11-24 15:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `institution_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `name`, `slug`, `start_time`, `end_time`, `date`, `status`, `institution_id`, `created_at`, `updated_at`) VALUES
(5, 'Shiam ahmed', 'shiam-ahmed', '07:25', '07:26', '2020-11-07', 0, 2, '2020-11-24 19:22:11', '2020-11-24 19:22:11'),
(7, 'Daffodil University', 'Daffodil-University', '01:43', '01:45', '2020-11-13', 0, 2, '2020-11-27 13:40:34', '2020-11-27 13:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `type`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
(1749358465, 'user', 3, 3, 'hi', NULL, 1, '2020-11-25 07:11:17', '2020-11-25 07:11:17'),
(1764316425, 'user', 1, 1, 'hi', NULL, 1, '2020-11-25 06:44:51', '2020-11-25 06:44:52'),
(1807904109, 'user', 3, 2, 'hi', NULL, 0, '2020-11-25 07:14:26', '2020-11-25 07:14:26'),
(1998384701, 'user', 1, 3, 'hello', NULL, 0, '2020-11-27 13:43:52', '2020-11-27 13:43:52'),
(2028817612, 'user', 3, 1, 'hi', NULL, 1, '2020-11-25 07:11:59', '2020-11-27 13:43:45'),
(2145829898, 'user', 1, 1, '', '6ae4b8cf-f64b-4358-b5b4-0a02a1db27ab.png,Screenshot (24).png', 1, '2020-11-25 06:45:14', '2020-11-25 06:45:14'),
(2368724694, 'user', 1, 2, 'hello', NULL, 0, '2020-11-27 13:44:50', '2020-11-27 13:44:50');

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
(50, '2014_10_12_000000_create_users_table', 1),
(51, '2014_10_12_100000_create_password_resets_table', 1),
(52, '2019_08_19_000000_create_failed_jobs_table', 1),
(53, '2019_09_22_192348_create_messages_table', 1),
(54, '2019_10_16_211433_create_favorites_table', 1),
(55, '2019_10_18_223259_add_avatar_to_users', 1),
(56, '2019_10_20_211056_add_messenger_color_to_users', 1),
(57, '2019_10_22_000539_add_dark_mode_to_users', 1),
(58, '2019_10_25_214038_add_active_status_to_users', 1),
(59, '2020_11_11_205333_create_personal_infos_table', 1),
(60, '2020_11_12_201425_create_institutions_table', 1),
(61, '2020_11_17_192718_create_verifiy_instiutions_table', 1),
(62, '2020_11_17_215314_create_packages_table', 1),
(63, '2020_11_24_195751_create_meetings_table', 1),
(66, '2020_11_28_191318_create_faculties_table', 2),
(67, '2020_12_19_085212_create_students_table', 3),
(68, '2020_12_19_094756_create_departments_table', 3),
(70, '2020_12_19_101955_create_courses_table', 4),
(74, '2020_12_19_165623_create_sessions_table', 5),
(75, '2020_12_20_083040_create_sections_table', 6),
(76, '2020_12_21_164539_create_timings_table', 7),
(79, '2020_12_21_182413_create_sections_table', 8),
(80, '2020_12_21_201429_create_section_details_table', 9),
(83, '2020_12_22_135535_create_resources_table', 10),
(84, '2020_12_22_191705_create_posts_table', 11),
(85, '2020_12_22_224230_create_comments_table', 12),
(88, '2020_12_26_115802_create_quizzes_table', 13),
(89, '2020_12_27_101251_create_tasks_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_infos`
--

CREATE TABLE `personal_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `institution_id` int(255) NOT NULL,
  `personal_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_infos`
--

INSERT INTO `personal_infos` (`id`, `area`, `phone`, `institution_id`, `personal_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, '5fbd755c01508', '2020-11-24 15:04:28', '2020-11-24 15:04:28'),
(2, NULL, NULL, 1, '5fbd92842c6d3', '2020-11-24 17:08:52', '2020-11-24 17:08:52'),
(3, NULL, NULL, 1, '5fbe57bd94103', '2020-11-25 07:10:21', '2020-11-25 07:10:21'),
(4, NULL, NULL, 1, '5fc285822de67', '2020-11-28 11:14:42', '2020-11-28 11:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL,
  `random` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resource_id` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `description`, `section_id`, `random`, `resource_id`, `created_at`, `updated_at`) VALUES
(23, 'tacher', 'As announced in class, there will be no updates held during lecture hours for the next two weeks, and no mandatory email updates either. Feel free to email me if there is anything noteworthy to report, or if you would like to set up a meeting on Google Meet for your group. Based on the semester schedule, you are recommended to begin working on your final report by the end of this month.', 44, '5fe2af9e95019', 27, '2020-12-22 20:46:54', '2020-12-22 20:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_id` int(11) NOT NULL,
  `faculty_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `random` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `exam_name`, `q_name`, `q_answer`, `q_option`, `institution_id`, `faculty_id`, `random`, `created_at`, `updated_at`) VALUES
(5, 'quiz-01', 'what is my name ?', 'sam,siam', 'sam,siam,maruf', 1, '8', '0.0653968893896173', '2020-12-26 07:20:18', '2020-12-26 07:20:18'),
(6, 'quiz-02', 'write a essay about cow.', 'test', 'test', 1, '8', '0.0653968893896173', '2020-12-26 07:20:18', '2020-12-26 07:20:18'),
(7, 'Midterm-01', 'jkhnikj', 'test', 'test', 1, '8', '0.3332363752616476', '2020-12-26 07:22:14', '2020-12-26 07:22:14'),
(8, 'Midterm-02', 'uuu', 'test', 'test', 1, '8', '0.653193507145587', '2020-12-26 07:23:05', '2020-12-26 07:23:05'),
(9, 'Final', 'ggg', 'test', 'test', 1, '8', '0.5395748085696521', '2020-12-26 07:23:31', '2020-12-26 07:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `is_public` int(11) NOT NULL,
  `random` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `file_name`, `original_file_name`, `extension`, `institution_id`, `faculty_id`, `section_id`, `course_id`, `session_id`, `is_public`, `random`, `created_at`, `updated_at`) VALUES
(27, '2060553215.docx', 'Institution.docx', 'docx', 1, 8, 44, 7, 6, 0, '5fe2af9e95019', '2020-12-22 20:46:54', '2020-12-22 20:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `random` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_number`, `start`, `end`, `session`, `capacity`, `random`, `institution_id`, `course_id`, `created_at`, `updated_at`) VALUES
(36, '1', '08:00', '09:30', '13', 40, '5fe29f627f158', 1, 8, '2020-12-22 19:37:38', '2020-12-22 19:37:38'),
(37, '2', '09:40', '11:10', '13', 40, '5fe29fb888335', 1, 8, '2020-12-22 19:39:04', '2020-12-22 19:39:04'),
(38, '3', '11:20', '12:50', '13', 30, '5fe2a064850b6', 1, 8, '2020-12-22 19:41:56', '2020-12-22 19:41:56'),
(39, '4', '13:00', '14:30', '13', 40, '5fe2a9be5758f', 1, 7, '2020-12-22 20:21:50', '2020-12-22 20:21:50'),
(40, '5', '16:20', '17:50', '13', 40, '5fe2aaf2a63c6', 1, 7, '2020-12-22 20:26:58', '2020-12-22 20:26:58'),
(41, '1', '08:00', '09:30', '13', 20, '5fe2ab6311ed8', 1, 7, '2020-12-22 20:28:51', '2020-12-22 20:28:51'),
(42, '2', '09:40', '11:10', '13', 30, '5fe2ab7ac6dde', 1, 7, '2020-12-22 20:29:14', '2020-12-22 20:29:14'),
(43, '3', '11:20', '12:50', '13', 40, '5fe2ab8f43cf5', 1, 7, '2020-12-22 20:29:35', '2020-12-22 20:29:35'),
(44, '4', '14:40', '16:10', '13', 30, '5fe2aba99c114', 1, 7, '2020-12-22 20:30:01', '2020-12-22 20:30:01'),
(45, '15', '08:00', '09:30', '13', 45, '5fe89e4a0e253', 1, 3, '2020-12-27 08:46:34', '2020-12-27 08:46:34'),
(46, '16', '08:00', '09:30', '13', 35, '5fe9009f30f58', 1, 3, '2020-12-27 15:46:07', '2020-12-27 15:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `section_details`
--

CREATE TABLE `section_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institution_id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `section_id` int(11) NOT NULL,
  `course_id` int(255) NOT NULL,
  `session_id` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_details`
--

INSERT INTO `section_details` (`id`, `institution_id`, `faculty_id`, `student_id`, `section_id`, `course_id`, `session_id`, `created_at`, `updated_at`) VALUES
(49, 1, 8, 9, 41, 7, 13, '2020-12-22 20:28:51', '2020-12-22 20:28:51'),
(50, 1, 10, 11, 42, 7, 13, '2020-12-22 20:29:14', '2020-12-22 20:29:14'),
(51, 1, 10, 11, 43, 7, 13, '2020-12-22 20:29:35', '2020-12-22 20:29:35'),
(52, 1, 8, 2, 44, 7, 13, '2020-12-22 20:30:01', '2020-12-22 20:30:01'),
(53, 1, 8, 9, 45, 3, 13, '2020-12-27 08:46:34', '2020-12-27 08:46:34'),
(54, 1, 8, 11, 45, 3, 13, '2020-12-27 08:46:34', '2020-12-27 08:46:34'),
(55, 1, 8, 10, 45, 3, 13, '2020-12-27 08:46:34', '2020-12-27 08:46:34'),
(56, 1, 8, 9, 46, 3, 13, '2020-12-27 15:46:07', '2020-12-27 15:46:07'),
(57, 1, 8, 11, 46, 3, 13, '2020-12-27 15:46:07', '2020-12-27 15:46:07'),
(58, 1, 8, 10, 46, 3, 13, '2020-12-27 15:46:07', '2020-12-27 15:46:07'),
(59, 1, 8, 4, 46, 3, 13, '2020-12-27 15:46:07', '2020-12-27 15:46:07'),
(60, 1, 8, 8, 46, 3, 13, '2020-12-27 15:46:07', '2020-12-27 15:46:07'),
(61, 1, 8, 2, 46, 3, 13, '2020-12-27 15:46:07', '2020-12-27 15:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `stop` int(11) NOT NULL DEFAULT 0,
  `institution_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `name`, `address`, `start`, `end`, `status`, `stop`, `institution_id`, `created_at`, `updated_at`) VALUES
(6, 'Spting-2019', NULL, '0109-01-01', '2019-03-04', '0', 1, 1, '2020-12-22 19:11:21', '2020-12-22 19:19:12'),
(7, 'Summer-2019', NULL, '2019-05-01', '2019-03-01', '0', 1, 1, '2020-12-22 19:12:30', '2020-12-22 19:19:01'),
(8, 'Fall-2019', NULL, '2019-01-09', '22019-03-01', '0', 1, 1, '2020-12-22 19:13:00', '2020-12-22 19:19:07'),
(9, 'Spting-2020', NULL, '2020-01-01', '2020-04-30', '0', 1, 1, '2020-12-22 19:14:13', '2020-12-22 19:18:48'),
(10, 'Summer-2020', NULL, '2020-01-05', '2020-03-31', '0', 1, 1, '2020-12-22 19:15:09', '2020-12-22 19:18:43'),
(13, 'Fall-2020', NULL, '2020-01-09', '2020-12-30', '1', 0, 1, '2020-12-22 19:17:26', '2020-12-22 19:17:26'),
(14, 'Spring-2021', NULL, '2021-01-01', '2021-04-30', '0', 0, 1, '2020-12-22 19:18:37', '2020-12-27 12:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_new` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_verified` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `institution_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `address`, `photo`, `dob`, `is_new`, `is_verified`, `institution_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Shiam ahmed', 'Hossainbarkatullah@gmail.com', '01685558993', 'Dhaka', NULL, '2021-01-01', '0', '1', 1, 3, '2020-12-20 01:20:27', '2020-12-20 01:20:27'),
(3, 'maruf billah', 'maruf.billah@northsouth.edu', '01675708783', 'moghbazar,Dhaka', NULL, '1996-10-05', '0', '1', 1, NULL, '2020-12-22 18:50:52', '2020-12-22 18:50:52'),
(4, 'Ifthakharul Alam Shuvo', 'alam.shuvo@northsouth.edu', '01530421045', 'moghbazar,Dhaka', NULL, '1999-02-09', '0', '1', 1, NULL, '2020-12-22 18:51:48', '2020-12-22 18:51:48'),
(5, 'MD. Zakaria', 'md.zakaria@northsouth.edu', '01430604042', 'moghbazar,Dhaka', NULL, '1991-06-04', '0', '1', 1, NULL, '2020-12-22 18:52:16', '2020-12-22 18:52:16'),
(6, 'Tomal Ahmed', 'tomal@hotmail.com', '01564885566', 'kakrail, Dhaka', NULL, '2005-10-11', '0', '1', 1, NULL, '2020-12-22 18:52:49', '2020-12-22 18:52:49'),
(7, 'Shammam Ahmed', 'shammam@gmail.com', '0255668288', 'niketon, Dhaka', NULL, '2020-12-03', '0', '1', 1, NULL, '2020-12-22 18:53:20', '2020-12-22 18:53:20'),
(8, 'Mahdy Billah', 'MahdyBillah@gmail.com', '01658445522', 'kakrail, Dhaka', NULL, '1996-11-11', '0', '1', 1, NULL, '2020-12-22 18:54:10', '2020-12-22 18:54:10'),
(9, 'Abdullah', 'abdullah@gmail.com', '015648896354', 'malibagh, Dhaka', NULL, '1998-10-12', '0', '1', 1, NULL, '2020-12-22 18:55:01', '2020-12-22 18:55:01'),
(10, 'Asif Abdullah', 'asif@hotmail.com', '01456338470', 'dhanmondi', NULL, '1990-05-06', '0', '1', 1, NULL, '2020-12-22 18:55:44', '2020-12-22 18:55:44'),
(11, 'Ahmedh arif', 'arif@yahoo.com', '01569984433', '55, mollapara, Dhaka', NULL, '1989-06-05', '0', '1', 1, NULL, '2020-12-22 18:56:42', '2020-12-22 18:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `institution_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `quiz_id`, `faculty_id`, `course_id`, `section_id`, `institution_id`, `session_id`, `marks`, `start`, `end`, `created_at`, `updated_at`) VALUES
(4, 5, 8, 3, 45, 1, 13, 35, '2021-01-17T18:45', '2020-02-27T13:02', '2020-12-27 12:56:16', '2020-12-27 14:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

CREATE TABLE `timings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`id`, `start`, `end`, `institution_id`, `created_at`, `updated_at`) VALUES
(7, '08:00', '09:30', 1, '2020-12-21 12:14:09', '2020-12-21 12:14:09'),
(8, '09:40', '11:10', 1, '2020-12-21 12:19:20', '2020-12-21 12:19:20'),
(9, '11:20', '12:50', 1, '2020-12-22 19:02:41', '2020-12-22 19:02:41'),
(10, '13:00', '14:30', 1, '2020-12-22 19:02:57', '2020-12-22 19:02:57'),
(11, '14:40', '16:10', 1, '2020-12-22 19:03:14', '2020-12-22 19:03:14'),
(12, '16:20', '17:50', 1, '2020-12-22 19:03:33', '2020-12-22 19:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `isVerified` tinyint(1) NOT NULL DEFAULT 0,
  `personal_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `active_status`, `dark_mode`, `messenger_color`, `avatar`, `email_verified_at`, `password`, `role`, `isVerified`, `personal_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shiam ahmed', 'admin@gmail.com', 0, 1, '#2180f3', 'b82e23e9-84d1-41df-aa1b-f274e0623122.png', NULL, '$2y$10$nuAyo52d/NRKyEsyMoJSYuKju888zNsI4JKCxbsgdnNag8mz/VqO.', 0, 1, '5fbd755c01508', NULL, '2020-11-24 15:04:28', '2020-11-27 14:03:34'),
(2, 'North south University', 'institution@gmail.com', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$LDW6U1cpk8r4u4t/bukdku0mh1UjquE5uzRLIeF61OUgm51U/Tj/m', 3, 1, '5fbd92842c6d3', 'oRsZ4sdgB767kiHWbjuMEn3R0ujf6u1bhbg6M0yvZr8bQ8mWLg8zML147qjO', '2020-11-24 17:08:52', '2020-11-24 17:08:52'),
(3, 'Barkat Ullah Hossain', 'student@gmail.com', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$kV7D0tOkDq0gqC2TNDaYyuu3HQZ4oZcICXJJGcPyrQCajen2NydC2', 1, 1, '5fbe57bd94103', 'UjwcI2mqHP2V8IFjAiVeOI18HEjsOURrlbbeksbsPlOqoSWoSqdsRPHQ60DA', '2020-11-25 07:10:21', '2020-11-25 07:10:21'),
(4, 'Dr. K. M. A. Salam', 'teacher@gmail.com', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$sHCXqvMuVkP5lOB5kY0wr.qTs29xSCs7yu/1PVOfzQRQmeKwF.weG', 2, 1, '5fc285822de67', 'vAaGjZmcA0YjIpdqh7fpfC5xMUjtBNKTV8jT0BJMTXU9e2lngGWSmPGz07e2', '2020-11-28 11:14:42', '2020-11-28 11:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `verifiy_instiutions`
--

CREATE TABLE `verifiy_instiutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `institution_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifiy_instiutions`
--

INSERT INTO `verifiy_instiutions` (`id`, `phone`, `address`, `email`, `website`, `status`, `user_id`, `institution_id`, `created_at`, `updated_at`) VALUES
(1, '01685558993', 'test', 'test@test', 'etc', 0, 2, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_initial_unique` (`initial`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculties_email_unique` (`email`),
  ADD UNIQUE KEY `faculties_phone_unique` (`phone`),
  ADD UNIQUE KEY `faculties_initial_unique` (`initial`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_infos`
--
ALTER TABLE `personal_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_details`
--
ALTER TABLE `section_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sessions_start_unique` (`start`),
  ADD UNIQUE KEY `sessions_end_unique` (`end`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_phone_unique` (`phone`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timings`
--
ALTER TABLE `timings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifiy_instiutions`
--
ALTER TABLE `verifiy_instiutions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institutions`
--
ALTER TABLE `institutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_infos`
--
ALTER TABLE `personal_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `section_details`
--
ALTER TABLE `section_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timings`
--
ALTER TABLE `timings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verifiy_instiutions`
--
ALTER TABLE `verifiy_instiutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
