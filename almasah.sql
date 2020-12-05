-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 04:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

/*SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";*/
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almasah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$zgFqmubpw.WZp7nI3wSoK.0hnYZ9P45hOsniI0ggoW/ubj.vCleoW', 'nk3PhNhUICUNGdW066sgZmwilcdd2YzhbKVSbGotFi6xPs9dlQoQJGshMVRu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `department_id`, `title_ar`, `title_en`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 'العميل الأول', 'first customer', '15238773571.png', NULL, '2018-04-16 10:58:24', '2018-04-29 19:17:59'),
(2, 1, 'العميل التاني', 'second customer', '15238773622.png', NULL, '2018-04-16 10:58:39', '2018-04-29 19:18:04'),
(3, 1, 'العميل الثالث', 'third customer', '15238773673.png', NULL, '2018-04-16 10:59:00', '2018-04-23 11:26:50'),
(4, 1, 'العميل الرابع', 'fourth customer', '15238773724.png', NULL, '2018-04-16 10:59:37', '2018-04-29 19:18:09'),
(6, 1, 'العميل الخامس', 'fifth customer', '15238773845.png', NULL, '2018-04-16 11:07:32', '2018-04-29 19:18:20'),
(11, 2, 'الاول', 'first', '15250311641.png', NULL, '2018-04-29 19:37:03', '2018-04-29 19:46:04'),
(12, 2, 'الثاني', 'second', '15250311742.png', NULL, '2018-04-29 19:37:15', '2018-04-29 19:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title_ar`, `title_en`, `slug`, `created_at`, `updated_at`) VALUES
(0, 'الرئيسية', 'Home', 'home', '2018-04-12 08:02:57', '2018-04-12 08:02:57'),
(1, 'الماسة العلمية التجارية', 'Scientific Diamond Company', 'scientific-diamond-company', '2018-04-12 08:03:16', '2018-04-12 08:03:16'),
(2, 'مختبر الماسة العلمية', 'Scientific Diamond Lab', 'scientific-diamond-lab', '2018-04-12 08:03:37', '2018-04-12 08:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_ar` text COLLATE utf8mb4_unicode_ci,
  `intro_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `location_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements_ar` text COLLATE utf8mb4_unicode_ci,
  `requirements_en` text COLLATE utf8mb4_unicode_ci,
  `salary` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `department_id`, `title_ar`, `title_en`, `image`, `intro_ar`, `intro_en`, `description_ar`, `description_en`, `location_ar`, `location_en`, `requirements_ar`, `requirements_en`, `salary`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'الوظيفة الأولى', 'first job', '1524402285jobs_image.jpg', 'وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 'وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 'مصر', 'egypt', 'وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة  وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة وظيفة', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem  lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 500, 'first-job', '2018-04-22 13:04:45', '2018-04-22 13:42:30'),
(2, 2, 'وظيفة المختبر', 'Lab Job', '1525028339training_class.jpg', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'السعودية', 'KSA', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 5000, 'lab-job', '2018-04-29 18:58:59', '2018-04-29 18:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `job_requests`
--

CREATE TABLE `job_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `cv` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(20, '2018_03_07_100930_create_users_table', 1),
(43, '2018_03_06_144634_create_visions_table', 2),
(44, '2018_03_06_144655_create_messages_table', 2),
(45, '2018_03_06_144711_create_goals_table', 2),
(46, '2018_03_06_144731_create_values_table', 2),
(47, '2018_03_06_144745_create_missions_table', 2),
(59, '2018_03_06_151454_create_why_choose_uses_table', 2),
(61, '2018_03_06_143340_create_departments_table', 3),
(62, '2018_03_06_144521_create_settings_table', 3),
(63, '2018_03_06_144938_create_sliders_table', 3),
(64, '2018_03_06_144959_create_products_table', 3),
(65, '2018_03_06_145217_create_product_galleries_table', 3),
(66, '2018_03_06_145244_create_services_table', 3),
(67, '2018_03_06_145306_create_service_galleries_table', 3),
(68, '2018_03_06_145326_create_jobs_table', 3),
(69, '2018_03_06_145352_create_job_requests_table', 3),
(70, '2018_03_06_145410_create_news_table', 3),
(71, '2018_03_06_145427_create_customers_table', 3),
(72, '2018_03_06_145446_create_partners_table', 3),
(73, '2018_03_06_145500_create_contacts_table', 3),
(74, '2018_03_07_100930_create_admins_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_ar` text COLLATE utf8mb4_unicode_ci,
  `intro_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `department_id`, `title_ar`, `title_en`, `image`, `intro_ar`, `intro_en`, `description_ar`, `description_en`, `slug`, `created_at`, `updated_at`) VALUES
(1, 0, 'الخبر الاول', 'first newss', '1523787942download (1).jpg', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'first-newss', '2018-04-15 10:25:42', '2018-04-18 17:45:46'),
(2, 0, 'الخبر الثاني', 'second newss', '1523788195blog6.jpg', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'second-newss', '2018-04-15 10:29:55', '2018-04-18 17:46:16'),
(3, 1, 'الخبر الاول', 'first news', '1523886789services-image1.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'first-news', '2018-04-16 10:54:56', '2018-04-18 17:46:27'),
(4, 1, 'الخبر الثاني', 'second news', '1523886796services-image2.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'second-news', '2018-04-16 10:55:44', '2018-04-18 17:46:45'),
(5, 1, 'الخبر الثالث', 'third news', '1523886802services-image3.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'third-news', '2018-04-16 10:56:22', '2018-04-18 17:46:56'),
(6, 1, 'الخبر الرابع', 'fourth news', '1523886815services-image1.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'fourth-news', '2018-04-16 10:57:19', '2018-04-18 17:47:11'),
(7, 1, 'الخبر الخامس', 'fifth news', '1523886822services-image2.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'fifth-news', '2018-04-16 10:57:56', '2018-04-18 17:47:24'),
(8, 2, 'خبر المختبر 1', 'Lab News 1', '1525028881download.jpg', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'lab-news-1', '2018-04-29 19:08:01', '2018-04-29 19:08:01'),
(9, 2, 'خبر المختبر 2', 'Lab News 2', '1525028948free_consult_page_2.jpg', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'lab-news-2', '2018-04-29 19:09:08', '2018-04-29 19:09:08'),
(10, 2, 'خبر المختبر 3', 'Lab News 3', '1525029022blog6.jpg', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'lab-news-3', '2018-04-29 19:10:22', '2018-04-29 19:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `department_id`, `title_ar`, `title_en`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 'الشريك الاول', 'first partner', '15238901242425eb5.jpg', 'https://www.google.com.eg', '2018-04-16 14:48:44', '2018-04-16 14:48:44'),
(2, 1, 'الشريك الثاني', 'second partner', '1523890146124938_PrintImage.jpg', NULL, '2018-04-16 14:49:06', '2018-04-23 20:51:01'),
(4, 2, 'مختبر 1', 'Lab 1', '1525029705220px-Vodafone_logo_2017.png', NULL, '2018-04-29 19:21:45', '2018-04-29 19:21:45'),
(5, 2, 'مختبر 2', 'Lab 2', '15250297162000px-Adidas_Logo.svg.png', NULL, '2018-04-29 19:21:56', '2018-04-29 19:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_ar` text COLLATE utf8mb4_unicode_ci,
  `intro_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `department_id`, `title_ar`, `title_en`, `image`, `intro_ar`, `intro_en`, `description_ar`, `description_en`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'منتج رقم 1', 'product 1', '1523874736services-image1.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'product-1', '2018-04-16 10:32:16', '2018-04-18 17:42:15'),
(2, 1, 'منتج رقم 2', 'product 2', '1523874796services-image2.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'product-2', '2018-04-16 10:33:16', '2018-04-18 17:43:46'),
(3, 1, 'منتج رقم 3', 'product 3', '1523874859services-image3.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'product-3', '2018-04-16 10:34:19', '2018-04-18 17:43:58'),
(4, 1, 'منتج رقم 4', 'Product 4', '1524048644services-image2.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'product-4', '2018-04-18 17:50:44', '2018-04-18 17:50:44'),
(5, 1, 'منتج رقم 5', 'Product 5', '1524048717services-image1.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'product-5', '2018-04-18 17:51:57', '2018-04-18 17:54:08'),
(6, 1, 'منتج رقم 6', 'Product 6', '1524048767services-image3.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'product-6', '2018-04-18 17:52:47', '2018-04-18 17:54:21'),
(7, 2, 'اول منتج', 'first product', '1525027678services-image1.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'first-product', '2018-04-29 18:47:58', '2018-04-29 18:47:58'),
(8, 2, 'ثاني منتج', 'second product', '1525027727services-image3.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'second-product', '2018-04-29 18:48:47', '2018-04-29 18:48:47'),
(9, 2, 'ثالث منتج', 'third product', '1525027825services-image2.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'third-product', '2018-04-29 18:50:25', '2018-04-29 18:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `products_gallery`
--

CREATE TABLE `products_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_gallery`
--

INSERT INTO `products_gallery` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(3, 3, '1523891999mm_spec-02.jpg', '2018-04-16 14:10:51', '2018-04-16 22:19:59'),
(4, 3, '1523892009mb_product_img_03.png', '2018-04-16 14:10:51', '2018-04-16 22:20:09'),
(5, 3, '1523892020huawel-nova-2_01_img.jpg', '2018-04-16 14:10:51', '2018-04-16 22:20:20'),
(6, 7, '1525027956product.jpg', '2018-04-29 18:52:36', '2018-04-29 18:52:36'),
(8, 7, '1525027957Programming-World-Home-Slider.jpg', '2018-04-29 18:52:37', '2018-04-29 18:52:37'),
(9, 7, '1525027957retractable-banner-stands.png', '2018-04-29 18:52:37', '2018-04-29 18:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_ar` text COLLATE utf8mb4_unicode_ci,
  `intro_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `department_id`, `title_ar`, `title_en`, `image`, `intro_ar`, `intro_en`, `description_ar`, `description_en`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'ادارة الطلبات', 'Order Management', '1523874908services-image3.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'order-management', '2018-04-16 10:35:08', '2018-04-18 17:44:15'),
(2, 1, 'خدمة العملاء', 'Customer Service', '1523874946services-image2.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'customer-service', '2018-04-16 10:35:46', '2018-04-18 17:44:28'),
(3, 1, 'خدمة الصيانة والتشغيل', 'maintenance', '1523874985services-image1.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown printing press spiked a random number of characters from a text', 'maintenance', '2018-04-16 10:36:25', '2018-04-18 17:44:39'),
(4, 2, 'الخدمة الاولى', 'first service', '1525028178services-image1.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'first-service', '2018-04-29 18:56:18', '2018-04-29 18:56:18'),
(5, 2, 'الخدمة الثانية', 'second service', '1525028213services-image2.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'second-service', '2018-04-29 18:56:53', '2018-04-29 18:56:53'),
(6, 2, 'الخدمة الثالثة', 'third service', '1525028242services-image3.png', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content)\r\nLorem Epsom is simply a configurable text (meaning that the end is form and not content)', 'third-service', '2018-04-29 18:57:22', '2018-04-29 18:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `services_gallery`
--

CREATE TABLE `services_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `intro_ar` longtext COLLATE utf8mb4_unicode_ci,
  `intro_en` longtext COLLATE utf8mb4_unicode_ci,
  `vision_ar` longtext COLLATE utf8mb4_unicode_ci,
  `vision_en` longtext COLLATE utf8mb4_unicode_ci,
  `mission_ar` longtext COLLATE utf8mb4_unicode_ci,
  `mission_en` longtext COLLATE utf8mb4_unicode_ci,
  `message_ar` longtext COLLATE utf8mb4_unicode_ci,
  `message_en` longtext COLLATE utf8mb4_unicode_ci,
  `goal_ar` longtext COLLATE utf8mb4_unicode_ci,
  `goal_en` longtext COLLATE utf8mb4_unicode_ci,
  `values_ar` longtext COLLATE utf8mb4_unicode_ci,
  `values_en` longtext COLLATE utf8mb4_unicode_ci,
  `whyus_ar` longtext COLLATE utf8mb4_unicode_ci,
  `whyus_en` longtext COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_eg_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_eg_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_uae_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_uae_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ksa_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ksa_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_egy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_uae` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_ksa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_eg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_uae` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_ksa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `department_id`, `intro_ar`, `intro_en`, `vision_ar`, `vision_en`, `mission_ar`, `mission_en`, `message_ar`, `message_en`, `goal_ar`, `goal_en`, `values_ar`, `values_en`, `whyus_ar`, `whyus_en`, `facebook`, `twitter`, `youtube`, `googleplus`, `linkedin`, `address_eg_ar`, `address_eg_en`, `address_uae_ar`, `address_uae_en`, `address_ksa_ar`, `address_ksa_en`, `email_egy`, `email_uae`, `email_ksa`, `phone_eg`, `phone_uae`, `phone_ksa`, `created_at`, `updated_at`) VALUES
(1, 0, 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'https://www.facebook.com', 'https://www.twitter.com/', 'https://www.youtube.com/', 'https://www.google.com/', 'https://www.linkedin.com/', 'القاهرة - مصر', 'Cairo-Egypt', 'دبى - الامارات', 'Dubai - UAE', 'الرياض - السعودية', 'Riyadh-KSA', 'info@sdcltd.com.sa', 'info@sdcltd.com.sa', 'info@sdcltd.com.sa', '966114655502', '966114655502', '966114655502', '2018-04-12 08:37:12', '2018-04-16 11:32:42'),
(2, 1, 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'https://www.facebook.com', 'https://www.twitter.com/', 'https://www.youtube.com/', 'https://www.google.com/', 'https://www.linkedin.com/', 'القاهرة - مصر', 'Cairo-Egypt', 'دبى - الامارات', 'Dubai - UAE', 'الرياض - السعودية', 'Riyadh-KSA', 'info@sdcltd.com.sa', 'info@sdcltd.com.sa', 'info@sdcltd.com.sa', '966114655502', '966114655502', '966114655502', '2018-04-12 08:46:54', '2018-04-16 13:23:53'),
(3, 2, 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من  لاب الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text lab', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلاب', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text lab', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص \r\nلاب', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text lab', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص \r\nلاب', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text lab', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلاب', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text lab', 'لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويستخدم في صناعات المطابع ودور النشر كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص\r\nلاب', 'Lorem Epsom is simply a configurable text (meaning that the end is form and not content) and is used in the presses and publishing industries. Lorem Ipsum was still the standard of the text since the fifteenth century when an unknown press sprang a group of characters randomly taken from a text lab', 'https://www.facebooklab.com', 'https://www.twitterlab.com/', 'https://www.youtubelab.com/', 'https://www.googlelab.com/', 'https://www.linkedinlab.com/', 'القاهرة - مصر لاب', 'Cairo-Egypt lab', 'دبى - الامارات لاب', 'Dubai - UAE lab', 'الرياض - السعودية لاب', 'Riyadh-KSA lab', 'infolab@sdcltd.com.sa', 'infolab@sdcltd.com.sa', 'infolab@sdcltd.com.sa', '96611465550200', '96611465550200', '96611465550200', '2018-04-12 08:48:24', '2018-04-29 20:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `department_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 0, '1523537336img1.png', '2018-04-12 09:24:06', '2018-04-12 12:48:56'),
(3, 0, '1523537342img2.png', '2018-04-12 09:24:11', '2018-04-12 12:49:02'),
(5, 1, '1523871045img3.png', '2018-04-16 09:30:45', '2018-04-16 09:30:45'),
(6, 1, '1523871090img2.png', '2018-04-16 09:31:30', '2018-04-16 09:31:30'),
(7, 2, '1525026616img1.png', '2018-04-29 18:30:16', '2018-04-29 18:30:16'),
(8, 2, '1525026622img2.png', '2018-04-29 18:30:22', '2018-04-29 18:30:22'),
(9, 2, '1525026627img3.png', '2018-04-29 18:30:27', '2018-04-29 18:30:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_department_id_foreign` (`department_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_department_id_foreign` (`department_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `jobs_department_id_foreign` (`department_id`);

--
-- Indexes for table `job_requests`
--
ALTER TABLE `job_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_requests_job_id_foreign` (`job_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `news_department_id_foreign` (`department_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partners_department_id_foreign` (`department_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `products_department_id_foreign` (`department_id`);

--
-- Indexes for table `products_gallery`
--
ALTER TABLE `products_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_gallery_product_id_foreign` (`product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `services_department_id_foreign` (`department_id`);

--
-- Indexes for table `services_gallery`
--
ALTER TABLE `services_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_gallery_service_id_foreign` (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_department_id_foreign` (`department_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_department_id_foreign` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_requests`
--
ALTER TABLE `job_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products_gallery`
--
ALTER TABLE `products_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services_gallery`
--
ALTER TABLE `services_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_requests`
--
ALTER TABLE `job_requests`
  ADD CONSTRAINT `job_requests_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_requests_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_gallery`
--
ALTER TABLE `products_gallery`
  ADD CONSTRAINT `products_gallery_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services_gallery`
--
ALTER TABLE `services_gallery`
  ADD CONSTRAINT `services_gallery_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
