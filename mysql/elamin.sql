-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 02:57 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elamin`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `title_ar`, `image`, `description`, `description_ar`, `created_at`, `updated_at`) VALUES
(13, 'who we Are', NULL, '2133165618.jpg', 'future is a leading organization in delivering integrated facilities management services across Egypt future has been accredited for over 4 years in providing quality FM services to some of the biggest regional names including leading multinationals in the region. Our FM portfolio comprises of prominent and prestigious clients.', NULL, '2019-12-26 09:20:10', '2020-01-04 16:56:03'),
(14, 'Cleaning service', NULL, '834140209.jpg', 'Our company has provided a wide range of cleaning services and when we provide these services, we focus on making your office or home look great all the time.\r\nCleaning is a basic need that you need to meet on a daily basis in your organization. However, it is a tiring and time-consuming task, whether it is a residential, commercial or mixed facility.\r\nThis is particularly the case when appropriate equipment, skills and experience are not used.', NULL, '2019-12-26 09:25:46', '2020-01-04 16:25:59'),
(15, 'Purpose', NULL, '1890012921.jpg', 'be a leader in the Facilities Management industry by providing enhanced services, relationship and profitability.', NULL, '2019-12-26 09:29:21', '2020-01-04 17:01:27'),
(16, 'Vision', NULL, '449126243.jpg', 'To provide quality services that exceeds the expectations of our esteemed customers.', NULL, '2019-12-26 09:36:51', '2020-01-04 17:01:59'),
(18, 'Mission', NULL, '1101278895.jpg', 'To build long term relationships with our customers and provide exceptional customer services by pursuing business through innovation and advanced technology.', NULL, '2019-12-26 10:03:55', '2020-01-04 17:02:34'),
(19, 'Core values', NULL, '616510400.jpg', 'We believe in treating our customers with respect,faith and Transparency. We grow through creativity, invention and innovation. We integrate honesty, integrity and business ethics into oll aspects of our business functioning.', NULL, '2019-12-26 10:06:24', '2020-01-04 17:03:41'),
(20, 'Gools', NULL, '1654410629.jpg', 'Regional expansion in the field of Facilities management and developa strong base of key customers. Increase the assets ond investments of the company to support the development of services. To build good reputation in the field of Facilities Management to become a key player in the industry.', NULL, '2019-12-26 10:06:46', '2020-01-04 17:04:10'),
(21, 'Financial Considerations', NULL, '864222008.jpg', 'The company expects to reach the desired profits and does not anticipate serious cash flow problems.', NULL, '2019-12-26 10:07:48', '2020-01-04 17:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `title_ar`, `image`, `description`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'Commercial Cleaning', NULL, '697754664.jpg', 'Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus Curabitur.', NULL, '2019-12-18 12:45:18', '2020-01-04 17:53:12'),
(2, 'Catering', NULL, '223306464.jpg', 'Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus Curabitur.', NULL, '2019-12-19 07:07:43', '2020-01-04 17:53:37'),
(3, 'Window Cleaning', NULL, '1713072358.jpg', 'Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus Curabitur.', NULL, '2019-12-19 07:08:09', '2020-01-04 17:55:20'),
(4, 'PEST CONTROL', NULL, '836018291.jpg', 'Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus Curabitur.', NULL, '2019-12-19 07:08:26', '2020-01-04 17:56:15'),
(5, 'Landscaping', NULL, '20306276.jpg', 'Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus Curabitur.', NULL, '2019-12-19 07:08:46', '2020-01-04 17:57:09'),
(6, 'Supplies', NULL, '1991669539.jpg', 'Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus Curabitur.', NULL, '2019-12-19 07:09:08', '2020-01-04 17:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `choose_campanies`
--

CREATE TABLE `choose_campanies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choose_campanies`
--

INSERT INTO `choose_campanies` (`id`, `title`, `title_ar`, `created_at`, `updated_at`) VALUES
(1, 'Consectetuer adipiscing elit suspendissejyguyg', NULL, '2019-12-19 10:08:08', '2019-12-19 10:15:08'),
(2, 'Hendrerit augue Cras tellus In pulvinar', NULL, '2019-12-19 10:08:19', '2019-12-19 10:08:19'),
(3, 'Consectetuer adipiscing elit suspendisse', NULL, '2019-12-19 10:08:26', '2019-12-25 19:15:54'),
(4, 'Hendrerit augue Cras tellus In pulvinar', NULL, '2019-12-19 10:08:34', '2019-12-19 10:08:34'),
(5, 'Consectetuer adipiscing elit suspendisse', NULL, '2019-12-19 10:08:41', '2019-12-19 10:08:41'),
(6, 'Hendrerit augue Cras tellus In pulvinar', NULL, '2019-12-19 10:08:50', '2019-12-19 10:08:50'),
(8, 'thank you', NULL, '2019-12-25 19:16:14', '2019-12-25 19:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1878706292.png', '2019-12-17 10:01:15', '2019-12-19 07:58:06'),
(2, '41736478.png', '2019-12-17 10:05:05', '2019-12-19 07:58:14'),
(4, '407891652.png', '2019-12-19 07:58:22', '2019-12-19 07:58:22'),
(5, '1811833841.png', '2019-12-19 07:58:30', '2019-12-19 07:58:30'),
(6, '1404295167.png', '2019-12-19 07:58:38', '2019-12-19 07:58:38'),
(7, '1864416950.png', '2019-12-19 09:05:57', '2019-12-19 09:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(44, '2019_12_11_121329_create_blogs_table', 1),
(52, '2014_10_12_000000_create_users_table', 2),
(53, '2014_10_12_100000_create_password_resets_table', 2),
(54, '2019_08_19_000000_create_failed_jobs_table', 2),
(55, '2019_12_11_093019_create_about_us_table', 2),
(56, '2019_12_11_093754_create_contact_us_table', 2),
(57, '2019_12_11_094030_create_services_table', 2),
(58, '2019_12_11_104001_create_categories_table', 2),
(59, '2019_12_11_105259_create_products_table', 2),
(60, '2019_12_11_105605_create_product_images_table', 2),
(61, '2019_12_11_120847_create_questions_table', 2),
(62, '2019_12_11_122241_create_privacy_policies_table', 2),
(63, '2019_12_11_122825_create_terms__conditions_table', 2),
(64, '2019_12_16_132147_create_sliders_table', 2),
(65, '2019_12_17_091058_create_blogs_table', 2),
(66, '2019_12_17_103158_create_news_table', 2),
(67, '2019_12_17_112939_create_clients_table', 2),
(68, '2019_12_17_113025_create_teams_table', 2),
(69, '2019_12_19_115247_create_choose_campanies_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `title_ar`, `image`, `description`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'Cleaning for Outdoor', NULL, '355561036.jpg', 'Cleaning of Balconies and Outdoor Patios, Outdoor Furniture and other decorative items are dusted and wiped.', NULL, '2019-12-17 09:58:46', '2020-01-04 17:16:23'),
(2, 'Cleaning for Kitchen', NULL, '954680503.jpg', 'Cabinets and Shelves wiping and dusting, Sink and Drying Counters cleaning with anti bacterial solution', NULL, '2019-12-19 07:47:45', '2020-01-04 17:15:28'),
(3, 'Cleaning for Bathrooms', NULL, '563505014.jpg', 'Our Deep Cleaning for Bathrooms Include:\r\n Walls Cleaning, Mirror Cleaning, Floor Cleaning,', NULL, '2019-12-19 07:49:28', '2020-01-04 17:14:02'),
(4, 'Cleaning for Bedrooms', NULL, '621037963.jpg', 'All electrical installations, Stains on walls, Dust removal from Curtains, Dust removal from Window Grills, Glass Cleaning', NULL, '2019-12-19 07:50:04', '2020-01-04 17:12:56');

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
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_image_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `title_ar`, `description`, `description_ar`, `created_at`, `updated_at`) VALUES
(2, 'There are many variations of message', NULL, 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2019-12-17 10:34:09', '2019-12-18 11:33:07'),
(3, 'Praesent mattis commodo', NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Donec elit lectus, pharetra quis, vulputate in, lobortis at, mi. Donec libero purus, pulvinar ac, congue id, iaculis ut, est.', NULL, '2019-12-18 11:16:13', '2019-12-18 11:16:13'),
(4, 'Praesent mattis commodo', NULL, 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2019-12-18 11:52:33', '2019-12-18 11:52:33'),
(5, 'Praesent mattis commodo', NULL, 'comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', NULL, '2019-12-18 11:52:57', '2019-12-18 11:52:57'),
(6, 'Praesent mattis commodos', NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Donec elit lectus, pharetra quis, vulputate in, lobortis at, mi. Donec libero purus, pulvinar ac, congue id, iaculis ut, est.', NULL, '2019-12-18 11:54:11', '2019-12-18 11:54:11'),
(7, 'There are many variations of message', NULL, 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2019-12-18 11:54:33', '2019-12-18 11:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `title_ar`, `image`, `description`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'Commercial Cleaning', 'التنظيف التجاري', '1920566757.jpg', 'Commercial office cleaning companies use a wide variety of cleaning methods, chemicals, and equipment to facilitate and expedite the cleaning process. The scope of work may include all internal, general and routine cleaning - including floors, tiles, partition walls, internal walls, suspended ceilings, lighting, furniture and cleaning, window cleaning, deep cleans of sanitary conveniences and washing facilities, kitchens and dining areas, consumables and feminine hygiene facilities as well as cleaning of telephones, IT, and other periodic cleaning as required. Carpet cleaning though, even with regular vacuuming, needs hot water extraction applied every 18 to 24 months', 'تستخدم شركات تنظيف المكاتب التجارية مجموعه واسعه من أساليب التنظيف والكيماويات والمعدات لتسهيل عمليه التنظيف وتسريعها.\r\nوقد يشمل نطاق العمل جميع التنظيف الداخلي والعام والروتيني-بما في ذلك الأرضيات والبلاط\r\nجدران التقسيم ، والجدران الداخلية ، والسقوف المعلقة ، والاضاءه ، والأثاث والتنظيف ، وتنظيف النوافذ ، وينظف \r\nعميق من وسائل الراحة الصحية\r\nومرافق الغسيل ، والمطابخ ومناطق تناول الطعام ، والمواد الاستهلاكية ومرافق النظافة الانثويه ، فضلا عن تنظيف الهواتف ، IT,\r\nوالتنظيف الدوري الأخرى علي النحو المطلوب. تنظيف السجاد علي الرغم من, حتى مع كنس العادية, يحتاج استخراج المياه الساخنة تطبيقها كل 18 إلى 24 أشهر.\r\n\r\n', '2020-01-04 15:43:27', '2020-01-04 15:43:27'),
(2, 'catering', NULL, '632868881.jpg', 'Catering is the business of providing food service at a remote site or a site such as a hotel, hospital, pub, aircraft, cruise ship, park, filming site or studio, entertainment site, or event venue', NULL, '2020-01-04 15:52:14', '2020-03-22 22:58:13'),
(3, 'repairs and maintenance', NULL, '141862710.jpg', 'The costs incurred to bring an asset back to an earlier condition or to keep the asset operating at its present condition (as opposed to improving the asset). For example, if a company truck is damaged, the cost to repair the damage is immediately debited to repairs and maintenance expense. Routine maintenance such as engine tune-ups, oil changes, radiator flushing, etc. is also debited to repairs and maintenance expense. (If an expenditure is made to improve the truck, such as adding a hydraulic lift to the truck or if an expenditure is a major repair that extends an asset\'s useful life, the amount is not expensed immediately; rather, the amount is recorded as an asset and is then depreciated over the truck\'s remaining useful life.)', NULL, '2020-01-04 16:01:15', '2020-01-04 16:01:15'),
(4, 'Window Cleaning', NULL, '822953742.jpg', 'Window cleaning, or window washing, is the exterior cleaning of architectural glass used for structural, lighting, or decorative purposes. It can be done manually, using a variety of tools for cleaning and access. Technology is also employed and increasingly, automation.\r\nCommercial work is contracted variously from in-person transactions for cash or barter, to formal tender processes. Regulations, licensing, technique, equipment and compensation vary nationally and regionally', NULL, '2020-01-04 16:03:45', '2020-01-04 16:06:56'),
(5, 'PEST CONTROL', NULL, '268315605.jpg', 'Pest control is the regulation or management of a species defined as a pest, a member of the animal kingdom that impacts adversely on human activities. The human response depends on the importance of the damage done, and will range from tolerance, through deterrence and management, to attempts to completely eradicate the pest. Pest control measures may be performed as part of an integrated pest management strategy.', NULL, '2020-01-04 16:08:56', '2020-01-04 16:08:56'),
(6, 'Landscaping', NULL, '1792836191.jpg', 'Construction requires study and observation. It is not the same in different parts of the world. Landscaping varies according to different regions.[1] Therefore, normally local natural experts are recommended if it is done for the first time. Understanding of the site is one of the chief essentials for successful landscaping. Different natural features like terrain, topography, soil qualities, prevailing winds, depth of the frost line, and the system of native flora and fauna must be taken into account.[2] Sometimes the land is not fit for landscaping. In order to landscape it, the land must be reshaped. This reshaping of land is called grading.[2]', NULL, '2020-01-04 16:11:17', '2020-01-04 16:11:17'),
(7, 'Supplies', NULL, '915373316.jpg', 'Supply refers to the amount of goods that are available. Demand refers to how many people want those goods. When supply of a product goes up, the price of a product goes down and demand for the product can rise because it costs loss. ... As a result, prices will rise', NULL, '2020-01-04 16:18:19', '2020-01-04 16:18:19'),
(8, 'Interior Design', NULL, '1047665187.jpg', 'Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. An interior designer is someone who plans, researches, coordinates, and manages such projects.', NULL, '2020-01-04 16:19:51', '2020-01-04 16:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `title_ar`, `image`, `description`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'Why should you  future company?', NULL, '2119348088.jpeg', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL, '2019-12-19 06:02:41', '2019-12-26 06:48:00'),
(2, 'simply dummy text of the printing and typesetting', NULL, '1857830413.jpg', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL, '2019-12-19 06:03:08', '2019-12-19 06:03:08'),
(3, 'It is a long established fact that a reader will be distracted by the admin', NULL, '1594677053.jpg', 'default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose', NULL, '2019-12-19 06:03:52', '2019-12-26 10:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `soical_media`
--

CREATE TABLE `soical_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `massenger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soical_media`
--

INSERT INTO `soical_media` (`id`, `facebook`, `twitter`, `massenger`, `whatsup`, `gmail`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'twitter', 'Alaminimportt', '01120305354', 'gmail', '01152144344', '249 ramses street', NULL, '2019-12-26 11:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'web designer', '1469086490.jpg', 'dsdsd', '2019-12-17 10:13:41', '2019-12-23 07:48:50'),
(3, 'test2', '1703862194.jpg', 'ss', '2019-12-23 07:50:26', '2019-12-23 07:50:26'),
(4, 'web designer', '1035462566.jpg', 'web designer', '2019-12-23 08:11:14', '2019-12-23 08:11:14'),
(5, 'web designer', '2047073812.jpg', 'web designer', '2019-12-23 08:11:44', '2019-12-23 08:11:44'),
(6, 'web designer', '894052575.jpg', 'web designer', '2019-12-23 08:13:10', '2019-12-23 08:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `terms__conditions`
--

CREATE TABLE `terms__conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_seos`
--

CREATE TABLE `test_seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_seos`
--

INSERT INTO `test_seos` (`id`, `title`, `logo`, `footer`, `keywords`, `subject`, `descriptions`, `created_at`, `updated_at`) VALUES
(1, 'future', '1577352807.png', 'facebook', 'test', 'tresting', 'typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2019-12-24 22:00:00', '2019-12-26 07:33:27');

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
(1, 'admin', 'admin123@gmail.com', NULL, '$2y$10$jgvKeqE3f2DSTeuEf0pnneVo.8.Xv1qD5a.ToWvut1wLG6zva2akS', NULL, '2019-12-18 10:18:45', '2019-12-18 10:18:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_campanies`
--
ALTER TABLE `choose_campanies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soical_media`
--
ALTER TABLE `soical_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms__conditions`
--
ALTER TABLE `terms__conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_seos`
--
ALTER TABLE `test_seos`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choose_campanies`
--
ALTER TABLE `choose_campanies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soical_media`
--
ALTER TABLE `soical_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `terms__conditions`
--
ALTER TABLE `terms__conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_seos`
--
ALTER TABLE `test_seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
