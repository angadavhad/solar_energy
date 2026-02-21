-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: bb9ug2xb6d1gxw7zhscz-mysql.services.clever-cloud.com:3306
-- Generation Time: Feb 21, 2026 at 05:11 AM
-- Server version: 8.0.22-13
-- PHP Version: 8.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bb9ug2xb6d1gxw7zhscz`
--
CREATE DATABASE IF NOT EXISTS `bb9ug2xb6d1gxw7zhscz` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bb9ug2xb6d1gxw7zhscz`;

-- --------------------------------------------------------

--
-- Table structure for table `about_brand`
--

CREATE TABLE `about_brand` (
  `id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_brand`
--

INSERT INTO `about_brand` (`id`, `title`, `description`, `image`) VALUES
(1, 'Our Brand....', 'To make our future more vibrant and sustainable by using green  energy ', 'd2341a5b2e38fc249fa0ceb2eb17d9ab.webp');

-- --------------------------------------------------------

--
-- Table structure for table `about_hero`
--

CREATE TABLE `about_hero` (
  `id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `bg1` varchar(255) DEFAULT NULL,
  `bg2` varchar(255) DEFAULT NULL,
  `bg3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_hero`
--

INSERT INTO `about_hero` (`id`, `title`, `bg1`, `bg2`, `bg3`) VALUES
(1, 'About Us', 'about_bg1.jpg', 'about_bg2.jpg', 'about_bg3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description_1` text,
  `description_2` text,
  `image` varchar(255) DEFAULT NULL,
  `button_text` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description_1`, `description_2`, `image`, `button_text`, `status`) VALUES
(3, ' About Us', 'Agni Solar has 3 decades of experience as a leader and innovator in the solar energy space. Our varied expertise includes all major verticals of solar power systems and solutions.', 'Our aim is to be a solar energy brand that evokes trust, confidence and reliability. We guide customers into taking the right decisions for all their solar energy needs. ', '1770875941_blog2.webp', 'Learn More', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_vision`
--

CREATE TABLE `about_vision` (
  `id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_vision`
--

INSERT INTO `about_vision` (`id`, `title`, `description`, `image`, `status`) VALUES
(2, 'Our Vision', 'We aim to lead the renewable energy revolution with innovation and trust.\r\n', 'e904a86a1951e8308eb175b5c1ec03b3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`) VALUES
(2, 'convex', 'admin@convexsolar.com', 'Convex@123');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`, `status`) VALUES
(4, 'Exploring New Types of Solar Panels in the Market', 'Solar energy is one of the fastest growing renewable energy sources in India. In Ahilyanagar, man...', 'b64277a530fef1d1ec95cb3753625aeb.jpg', '2026-02-13 00:00:00', 1),
(5, 'Everything about Solar Panels Subsidies in India ', 'Solar energy is one of the fastest growing renewable energy sources in India.\r\n\r\nIn Ahilyanagar, many homes are shifting to rooftop solar systems to reduce electricity bills.\r\n\r\nSolar systems help reduce carbon emissions and promote clean energy usage.\r\n\r\nGovernment subsidies are also encouraging people to adopt solar power.', 'a0be3047ff61cf4394e900422e149af2.jpg', '2026-02-13 00:00:00', 1),
(6, 'Benefits of Installing Rooftop Solar System', 'Rooftop solar systems are becoming increasingly popular in India, especially in cities like Ahilyanagar. With rising electricity bills and growing environmental concerns, solar energy offers a smart and sustainable solution.\r\n\r\nInstalling a rooftop solar system helps reduce your monthly electricity expenses significantly. Once installed, solar panels generate free electricity using sunlight, which reduces dependency on traditional power sources.', '51c407aac226aecd6cec4b4b126beff2.jpg', '2026-02-13 00:00:00', 1),
(7, 'Everything about Solar Panels Subsidies in India', 'Solar energy is one of the fastest growing renewable energy sources in India. In Ahilyanagar, many homes are shifting to rooftop solar systems to r...', 'ecb60049cd52cc08397f76fc7201e765.jpg', '2026-02-13 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs_home`
--

CREATE TABLE `blogs_home` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `button_text` varchar(100) DEFAULT 'Read Blogs',
  `status` tinyint(1) DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs_home`
--

INSERT INTO `blogs_home` (`id`, `title`, `description_one`, `description_two`, `image`, `button_text`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Blogs & Solar Articles', 'Save Electricity With Solar Power Systems', 'Choose Maha Solar Systems', 'f3f8c791960575ac9f014cb8cf560b51.png', 'Read Blogs', 1, '2026-02-11 04:49:22', '2026-02-14 08:13:07'),
(5, 'Blogs & Solar Articles', '	Save Electricity With Solar Power Systems', 'Choose Maha Solar Systems', 'd28743e3c0e111340b231d8e156f9e20.png', 'Read Blogs', 1, '2026-02-14 04:39:19', '2026-02-14 08:12:41'),
(6, '	Blogs & Solar Articles', 'Ipsum repellat quibusdam illo! Corrupti, aperiam? Nisi neque ipsa voluptas?', '    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, unde animi! Pariatur voluptates amet, at voluptate quasi eum quia ullam. Ipsum repellat quibusdam illo! Corrupti, aperiam? Nisi neque ipsa voluptas?\r\n', 'eed7c5fa5e63ba799b94db6d79e2f5d9.png', 'Read Blogs', 1, '2026-02-14 04:41:52', '2026-02-16 07:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `business_verticals`
--

CREATE TABLE `business_verticals` (
  `id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `business_verticals`
--

INSERT INTO `business_verticals` (`id`, `title`, `description`, `image1`, `image2`, `image3`, `color`) VALUES
(1, 'Solar Panels', 'High efficiency solar panels', '8976ed66d45710ffd7a46c43cab54b9c.jpg', '4627aa7e0816e5afff7b2273e79605f1.jpg', '7b149c4cdc25574956f055c5fff514a9.jpg', 'orange'),
(2, 'Solar Pumps', 'Eco friendly water pumps\r\n', 'fb43fb2162e780ab8d0763040f8961f7.jpg', NULL, NULL, 'red'),
(3, 'Street Lights', 'Smart solar street lights', '9f787f2cba38cee7518ac9bbde08d84f.webp', NULL, NULL, 'yellow');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_about`
--

CREATE TABLE `commercial_about` (
  `id` int NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commercial_about`
--

INSERT INTO `commercial_about` (`id`, `description`, `image`) VALUES
(1, 'Maha Solar delivers customized solar solutions for commercial buildings to reduce operational costs and improve long-term sustainability. Our systems are designed to provide high efficiency and better ROI.', '9536e997394e0ed0a5926591b2f1149d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_benefits`
--

CREATE TABLE `commercial_benefits` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commercial_benefits`
--

INSERT INTO `commercial_benefits` (`id`, `title`) VALUES
(1, 'Lower Operating Costs'),
(2, 'Better Return on Investment'),
(3, 'Reliable Power Supply'),
(4, 'Green & Sustainable Image');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_points`
--

CREATE TABLE `commercial_points` (
  `id` int NOT NULL,
  `point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commercial_points`
--

INSERT INTO `commercial_points` (`id`, `point`) VALUES
(1, 'Customized Solar System Design'),
(2, 'Rooftop & On-Grid Solar Solutions'),
(3, 'Energy Cost Optimization'),
(4, 'Installation & Maintenance Support');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_suitable`
--

CREATE TABLE `commercial_suitable` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commercial_suitable`
--

INSERT INTO `commercial_suitable` (`id`, `title`) VALUES
(1, 'Office Buildings'),
(2, 'Educational Institutions'),
(3, 'Hospitals & Clinics'),
(4, 'Retail Shops & Complexes');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `phone`, `email`, `message`, `created_at`) VALUES
(4, 'Pavan Gange ', '1290009876', 'angad@gmail.com', 'sadgh', '2026-02-16 05:14:09'),
(7, 'Rushi Ghule', '7499887480', 'rushi45@gmail.com', 'Welcome', '2026-02-16 05:17:06'),
(8, 'xyz', '8765432189', 'xyz@gmail.com', 'abcd', '2026-02-16 05:17:59'),
(9, 'Karan Pawar', '1234567890', 'karan@gmail.com', 'karan', '2026-02-16 06:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`) VALUES
(3, '  What is Solar Energy?', 'Solar energy is energy obtained from sunlight and converted into electricity or heat using solar systems.', '2026-02-12 09:06:53'),
(4, '  How long do solar panels last?', ' Solar panels generally last 25–30 years with proper maintenance.', '2026-02-12 09:07:47'),
(5, 'Can solar panels work on cloudy days?', ' Yes, solar panels still generate electricity even on cloudy days,\r\n though output may be lower.', '2026-02-12 09:08:23'),
(6, ' What maintenance is required for solar systems?', ' Solar systems require minimal maintenance like cleaning and regular\r\n inspection for best performance.', '2026-02-12 09:08:58'),
(7, 'Do you provide installation support?', 'Yes, we provide complete installation, service, and maintenance\r\nsupport for all solar projects.', '2026-02-12 09:10:35'),
(8, '    How long does solar installation take?', ' Installation usually takes 2–7 days depending on project size and site\r\n requirements.', '2026-02-12 09:11:42'),
(9, 'What is Solar Energy?', 'Solar energy is energy obtained from sunlight and converted into\r\nelectricity or heat using solar systems.', '2026-02-12 09:12:11'),
(10, 'How long does solar installation take?', 'Installation usually takes 2–7 days depending on project size and site requirements.', '2026-02-17 07:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `hero_banner`
--

CREATE TABLE `hero_banner` (
  `id` int NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `button_text` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hero_banner`
--

INSERT INTO `hero_banner` (`id`, `video`, `title`, `sub_title`, `button_text`, `status`) VALUES
(5, '1770873251_video.mp4', ' Power Your Future With Solar Energy....', 'Clean, Renewable & Affordable Solar Solutions ', 'Explore More', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `button_text` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `title`, `description`, `image`, `button_text`, `created_at`, `updated_at`) VALUES
(1, 'Services', 'We provide complete solar solutions for residential, commercial, and industrial needs. Our expert services ensure sustainable energy, lower electricity bills, and long-term reliability. Explore Services\r\n', 'uploads/8cd6b2a849aa33e3eda23ab89ec3e629.jpg', 'Learn More', '2026-02-12 07:27:14', '2026-02-14 08:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_about`
--

CREATE TABLE `industrial_about` (
  `id` int NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `industrial_about`
--

INSERT INTO `industrial_about` (`id`, `description`, `image`) VALUES
(1, 'Maha Solar provides residential, commercial and industrial solar solutions across Maharashtra. We help homes, businesses and industries reduce electricity costs with reliable and sustainable solar energy systems.\r\n', '04eb3e3c761d759d3766d0dd1b2c090d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_capabilities`
--

CREATE TABLE `industrial_capabilities` (
  `id` int NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `industrial_capabilities`
--

INSERT INTO `industrial_capabilities` (`id`, `title`) VALUES
(1, 'Large Rooftop Installations'),
(2, 'Ground Mounted Solar Plants'),
(3, 'High Efficiency Inverters'),
(4, 'Project Planning & Execution');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_points`
--

CREATE TABLE `industrial_points` (
  `id` int NOT NULL,
  `point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `industrial_points`
--

INSERT INTO `industrial_points` (`id`, `point`) VALUES
(1, 'MW-Scale Solar Power Plants'),
(2, 'On-Grid & Hybrid Solar Systems'),
(3, 'Engineering, Procurement & Commissioning (EPC)'),
(4, 'Energy Monitoring & Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_why_choose`
--

CREATE TABLE `industrial_why_choose` (
  `id` int NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `industrial_why_choose`
--

INSERT INTO `industrial_why_choose` (`id`, `title`) VALUES
(1, 'Experienced Technical  Team'),
(2, 'High-Quality Components'),
(3, 'Timely Project Delivery'),
(4, 'Reliable Long-Term Support');

-- --------------------------------------------------------

--
-- Table structure for table `leading_section`
--

CREATE TABLE `leading_section` (
  `id` int NOT NULL,
  `main_heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) DEFAULT NULL,
  `button_text` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leading_section`
--

INSERT INTO `leading_section` (`id`, `main_heading`, `sub_heading`, `button_text`, `image`, `created_at`) VALUES
(1, 'India’s Leading Integrated Solar Energy', 'Smart Solar Energy', 'CONNECT WITH US', '302c355a547b201fd26db67c2076bd41.jfif', '2026-02-11 07:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `on_grid_solar`
--

CREATE TABLE `on_grid_solar` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `on_grid_solar`
--

INSERT INTO `on_grid_solar` (`id`, `title`, `description`, `image1`, `image2`, `image3`, `created_at`) VALUES
(5, 'On Grid Solar Power System', 'On Grid Solar Power Systems are connected directly to the electricity grid and help reduce your electricity bills by using solar energy during the daytime.\r\n\r\n', '1770908337.jpg', '1770908337.jpg', '1770908337.jpg', '2026-02-12 14:39:13'),
(7, 'Benefits of On Grid Solar.', 'Significant reduction in electricity bills\r\nNo need for batteries – low maintenance\r\nNet metering benefits\r\nEnvironment friendly energy solution\r\nHigh return on investment (ROI)', '1770908233.jpg', '1770908233.jpg', '1770908233.jpg', '2026-02-12 14:40:54'),
(8, 'Generate Power. Cut Bills. Stay Connected.', 'On Grid Solar systems let you use solar power directly during the day while staying connected to the electricity grid. You consume what you generate and send the extra power back — reducing costs without compromising reliability.\r\n\r\n', '1770908186.jpg', '1770908186.jpg', '1770908186.jpg', '2026-02-12 14:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_image`) VALUES
(13, 'Solar Water Heater', '1770350826.png'),
(14, 'Solar Water Pump', '1770350958.png'),
(15, 'On Grid Solar Plant', '1770351042.jpg'),
(16, 'Solar Street Light', '1770351142.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `page_slug` varchar(100) NOT NULL,
  `section_type` enum('left','right') DEFAULT 'left',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `page_slug`, `section_type`, `created_at`) VALUES
(1, 'Solar Water Heater', '1771052314.jpeg', 'solar_water_heater', 'left', '2026-02-14 07:58:34'),
(3, 'Solar Water Pump', '1771052732.jpeg', 'solar_water_pump', 'right', '2026-02-14 08:05:32'),
(4, 'On Grid Solar Plant', '1771053175.jpeg', 'on_grid_solar', 'left', '2026-02-14 08:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `products_section`
--

CREATE TABLE `products_section` (
  `id` int NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `button_text` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_section`
--

INSERT INTO `products_section` (`id`, `heading`, `title`, `description`, `image`, `button_text`, `status`) VALUES
(1, 'Products', 'Our Solar Products', 'We provide complete solar solutions for residential, commercial, and industrial needs. Our expert services ensure sustainable energy, lower electricity bills, and long-term reliability.\r\n\r\nExplore Services', '1770879956_gal1.webp', 'View Products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `service_type` varchar(100) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `message` text,
  `status` varchar(50) DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `name`, `email`, `phone`, `service_type`, `quantity`, `source`, `message`, `status`, `created_at`) VALUES
(1, 'Pavan Gange', 'pavangange1@gmail.com', '079722 51545', 'residential', 1, 'Our Executive', 'welcome', 'Approved', '2026-02-14 06:32:29'),
(9, 'Pavan Dadasaheb Gange', 'pavangange1@gmail.com', '7972251545', 'solar_street_light', 1, 'Our Executive', 'df gs ', 'Approved', '2026-02-14 07:52:36'),
(10, 'rushi ghule', 'rushi@gmail.com', '079722 51545', 'commercial', 1, 'Newspaper Advertisement', 'eresrtrtr', 'Approved', '2026-02-14 07:55:14'),
(11, 'angad avhad', 'info@tajhotel.com', '079722 51545', 'commercial', 1, 'Our Executive', 'dfsg', 'Approved', '2026-02-14 08:01:05'),
(14, 'yogesh kolte', 'kolte@gmail.com', '7864245246', 'residential', 1, 'Our Executive', 'welcoeme', 'Approved', '2026-02-16 07:26:51'),
(15, 'avinash ajabe', 'ajabe@gmail.com', '8756453464', 'industrial', 1, 'Newspaper Advertisement', 'welcome', 'Rejected', '2026-02-16 07:56:28'),
(16, 'yogesh kolate', 'yogeshkolate1@gmail.com', '8087781034', 'solar_water_heater', 1, 'Our Executive', 'hello', 'Approved', '2026-02-17 07:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `residential_about`
--

CREATE TABLE `residential_about` (
  `id` int NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `residential_about`
--

INSERT INTO `residential_about` (`id`, `description`, `image`) VALUES
(1, 'Maha Solar provides reliable and cost-effective rooftop solar solutions for homes. Our systems help reduce electricity bills while ensuring long-term savings using clean and renewable energy.', '922baea26e8f80253c7a7e50f98a2a62.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `residential_benefits`
--

CREATE TABLE `residential_benefits` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `residential_benefits`
--

INSERT INTO `residential_benefits` (`id`, `title`) VALUES
(1, 'Lower Electricity Bills'),
(2, 'Clean & Renewable Energy'),
(3, 'Long-Term Savings'),
(4, 'Increase Property Value');

-- --------------------------------------------------------

--
-- Table structure for table `residential_points`
--

CREATE TABLE `residential_points` (
  `id` int NOT NULL,
  `point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `residential_points`
--

INSERT INTO `residential_points` (`id`, `point`) VALUES
(1, 'Rooftop Solar Panel Installation'),
(2, 'Net Metering Assistance'),
(3, 'On-Grid & Hybrid Solar Systems'),
(4, 'Maintenance & After-Sales Support');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `type` enum('residential','industrial','commercial') DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `short_desc` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `title`, `short_desc`, `image`) VALUES
(1, 'residential', 'Residential', 'Smart solar systems for modern homes.', 'residential.webp'),
(2, 'industrial', 'Industrial', 'Heavy-duty solar solutions for industries.', 'industrial.webp'),
(3, 'commercial', 'Commercial', 'Efficient solar for business growth.', 'commercial.webp'),
(4, '', 'done', NULL, '3d8760d8487563c20ead88ff7659516f.png');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` int NOT NULL,
  `service_id` int DEFAULT NULL,
  `long_desc` text,
  `point1` varchar(255) DEFAULT NULL,
  `point2` varchar(255) DEFAULT NULL,
  `point3` varchar(255) DEFAULT NULL,
  `detail_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `service_id`, `long_desc`, `point1`, `point2`, `point3`, `detail_image`) VALUES
(1, 1, 'Our residential solar systems help homeowners reduce electricity costs while contributing to a greener environment.', 'Reduce electricity bills up to 70%', '25 Years Performance Warranty', 'Government subsidy assistance', 'f14b40140a6921d4a18580225e846030.jpg'),
(2, 2, 'We deliver large-scale solar installations tailored for factories and manufacturing units.', 'High capacity installations', 'Custom energy planning', 'Rapid ROI generation', 'd3f776d9ca944a87ef8865c78ecdcf07.jpg'),
(3, 3, 'Our commercial solar systems are ideal for offices and business buildings.', 'Fast & efficient installation', 'Energy cost optimization', 'Long-term savings guarantee', '954d7a48e507db63d60e0a97b8cd84ea.jpg'),
(4, NULL, 'nothing ', 'Reduce electricity bills up to 70%', 'Energy cost optimization', 'Government subsidy assistance', 'Gemini_Generated_Image_lkty4plkty4plkty.png'),
(6, NULL, 'i have not available now ', 'Fast & efficient installation', '25 Years Performance Warranty', 'Rapid ROI generation', 'ChatGPT_Image_Jan_16,_2026,_11_53_51_AM.png');

-- --------------------------------------------------------

--
-- Table structure for table `solar_street_light`
--

CREATE TABLE `solar_street_light` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `solar_street_light`
--

INSERT INTO `solar_street_light` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(1, 'Solar Street Light', 'Reliable outdoor lighting powered entirely by solar energy — designed for streets, highways, villages, campuses, and public areas without any grid dependency.\r\n\r\n', '1770955778.jpeg', '2026-02-13 04:08:27'),
(2, 'Why Choose Solar Street Lights?', 'No electricity bills\r\nEasy installation & low maintenance\r\nEco-friendly renewable solution\r\nAutomatic dusk-to-dawn operation\r\nIdeal for remote & rural locations', '1770955735.jpeg', '2026-02-13 04:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `solar_water_heater`
--

CREATE TABLE `solar_water_heater` (
  `id` int NOT NULL,
  `heater_title` varchar(255) NOT NULL,
  `heater_details` text NOT NULL,
  `heater_capacity` text NOT NULL,
  `heater_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `solar_water_heater`
--

INSERT INTO `solar_water_heater` (`id`, `heater_title`, `heater_details`, `heater_capacity`, `heater_image`, `created_at`) VALUES
(11, 'Convex Solar', 'Our Solar Water Heater is designed to deliver excellent performance with long-lasting durability using advanced solar technology.', '100,200,250,350,500,800,1000', '1770619133.jpg', '2026-02-09 05:18:06'),
(12, 'Convex Solar Plus', 'Convex Solar Plus is a premium variant designed for superior quality and long-term performance with robust construction.\r\n\r\n', '100,150,200,250,400,600,800', '1770614368.jpg', '2026-02-09 05:19:28'),
(14, 'Convex Solar FPC', 'Convex Solar FPC uses advanced Flat Plate Collector technology, ensuring high efficiency and long-term durability.', '100,150,200,250,300,350,400,1000', '1770620035.png', '2026-02-09 06:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `solar_water_pumps`
--

CREATE TABLE `solar_water_pumps` (
  `id` int NOT NULL,
  `pump_title` varchar(255) NOT NULL DEFAULT '',
  `pump_details` text NOT NULL,
  `pump_applications` text,
  `pump_image` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `solar_water_pumps`
--

INSERT INTO `solar_water_pumps` (`id`, `pump_title`, `pump_details`, `pump_applications`, `pump_image`, `created_at`) VALUES
(4, 'Solar Water Pumps', 'Solar Water Pumps use renewable solar energy to efficiently pump water without relying on electricity or fuel. They are ideal for agriculture, farms, gardens, households, and commercial applications.\r\n\r\n', 'Agriculture,Farms,Gardens,Households', '1770880658.jpeg', '2026-02-12 06:57:07'),
(5, 'Let the Sun Fulfill Your Water Supply Needs!', 'In many rural and remote areas, access to a reliable water supply remains a major challenge. Traditional water pumping systems often depend on diesel fuel or unstable grid electricity, which leads to high operating costs, fuel shortages, and frequent power interruptions.\r\n\r\nSolar water pumping systems provide a sustainable and cost-effective solution by utilizing abundant solar energy. These systems eliminate fuel dependency, reduce operational expenses, and ensure uninterrupted water supply throughout the day.\r\n\r\nSolar water pumps are ideal for agriculture, irrigation, and domestic water usage, helping farmers and households achieve energy independence while supporting environmentally friendly water management.', 'Agriculture,Farms,Gardens,Households,Commercial', '1770879965.jpg', '2026-02-12 07:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `ssl_benefits`
--

CREATE TABLE `ssl_benefits` (
  `id` int NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `benefit1` varchar(255) DEFAULT NULL,
  `benefit2` varchar(255) DEFAULT NULL,
  `benefit3` varchar(255) DEFAULT NULL,
  `benefit4` varchar(255) DEFAULT NULL,
  `benefit5` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ssl_benefits`
--

INSERT INTO `ssl_benefits` (`id`, `image`, `benefit1`, `benefit2`, `benefit3`, `benefit4`, `benefit5`, `created_at`) VALUES
(4, '1770967245.jpg', 'No electricity bills', 'Easy installation & low maintenance', 'Eco-friendly renewable solution', 'Automatic dusk-to-dawn operation', 'Ideal for remote & rural locations', '2026-02-13 07:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `ssl_hero`
--

CREATE TABLE `ssl_hero` (
  `id` int NOT NULL,
  `badge` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ssl_hero`
--

INSERT INTO `ssl_hero` (`id`, `badge`, `title`, `description`, `image`, `created_at`) VALUES
(2, 'SMART OUTDOOR LIGHTING', 'Solar Street Light', 'Reliable outdoor lighting powered entirely by solar energy — designed for streets, highways, villages, campuses, and public areas without any grid dependency.\r\n\r\n', '1770964825.jpeg', '2026-02-13 06:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `ssl_impact`
--

CREATE TABLE `ssl_impact` (
  `id` int NOT NULL,
  `impact_title` varchar(255) DEFAULT NULL,
  `impact_description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ssl_impact`
--

INSERT INTO `ssl_impact` (`id`, `impact_title`, `impact_description`, `created_at`) VALUES
(1, ' Lighting That Works Anywhere, Anytime', 'Solar Street Lights operate independently using built-in panels, batteries, and smart controllers. They charge during the day and automatically illuminate at night — perfect for areas where power supply is unreliable or unavailable.\r\n\r\n', '2026-02-13 06:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `role`, `experience`, `image`, `status`) VALUES
(1, 'Pavan Mohite', 'Chief Executive Officer', '15+ Years Experience', '28e799fdeb6fde153160ca0517cf9c21.png', 1),
(2, 'Rahul Sharma', 'Technical Director', '12+ Years Experience', 'fc12cdd98cc6772c5261fc6cf3c598e3.webp', 1),
(3, 'Amit Patil', 'Project Manager', '10+ Years Experience', '2d302a85c82c5537649df8ac33f016cd.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `rating` int DEFAULT '5',
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `role`, `message`, `rating`, `image`, `status`, `created_at`) VALUES
(6, 'angad avhad', 'Chief Executive Officer', 'xnbfsdh jgdfhgj cbjhfh ', 5, 'bc801c85836ff4f6340dd2a700df4892.jpg', 1, '2026-02-17 09:17:24'),
(8, 'Angad Avhad', 'Chief Executive Officer', '“Smooth process and affordable pricing.”', 5, '9d9090d930517bb8469d7e6b2af63729.png', 1, '2026-02-18 06:35:23'),
(9, 'Rahul Patil', 'Industrial Plant Owner', '“Exceptional solar installation \"', 4, '302f8280036177423d22bfdef7333c49.png', 1, '2026-02-18 07:08:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_brand`
--
ALTER TABLE `about_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_hero`
--
ALTER TABLE `about_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_vision`
--
ALTER TABLE `about_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_home`
--
ALTER TABLE `blogs_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_verticals`
--
ALTER TABLE `business_verticals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_about`
--
ALTER TABLE `commercial_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_benefits`
--
ALTER TABLE `commercial_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_points`
--
ALTER TABLE `commercial_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_suitable`
--
ALTER TABLE `commercial_suitable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_banner`
--
ALTER TABLE `hero_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_about`
--
ALTER TABLE `industrial_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_capabilities`
--
ALTER TABLE `industrial_capabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_points`
--
ALTER TABLE `industrial_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_why_choose`
--
ALTER TABLE `industrial_why_choose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leading_section`
--
ALTER TABLE `leading_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `on_grid_solar`
--
ALTER TABLE `on_grid_solar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_section`
--
ALTER TABLE `products_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential_about`
--
ALTER TABLE `residential_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential_benefits`
--
ALTER TABLE `residential_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential_points`
--
ALTER TABLE `residential_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `solar_street_light`
--
ALTER TABLE `solar_street_light`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solar_water_heater`
--
ALTER TABLE `solar_water_heater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solar_water_pumps`
--
ALTER TABLE `solar_water_pumps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssl_benefits`
--
ALTER TABLE `ssl_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssl_hero`
--
ALTER TABLE `ssl_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssl_impact`
--
ALTER TABLE `ssl_impact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_brand`
--
ALTER TABLE `about_brand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_hero`
--
ALTER TABLE `about_hero`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_vision`
--
ALTER TABLE `about_vision`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs_home`
--
ALTER TABLE `blogs_home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `business_verticals`
--
ALTER TABLE `business_verticals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commercial_about`
--
ALTER TABLE `commercial_about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commercial_benefits`
--
ALTER TABLE `commercial_benefits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commercial_points`
--
ALTER TABLE `commercial_points`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commercial_suitable`
--
ALTER TABLE `commercial_suitable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hero_banner`
--
ALTER TABLE `hero_banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industrial_about`
--
ALTER TABLE `industrial_about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industrial_capabilities`
--
ALTER TABLE `industrial_capabilities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `industrial_points`
--
ALTER TABLE `industrial_points`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `industrial_why_choose`
--
ALTER TABLE `industrial_why_choose`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leading_section`
--
ALTER TABLE `leading_section`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `on_grid_solar`
--
ALTER TABLE `on_grid_solar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_section`
--
ALTER TABLE `products_section`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `residential_about`
--
ALTER TABLE `residential_about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `residential_benefits`
--
ALTER TABLE `residential_benefits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `residential_points`
--
ALTER TABLE `residential_points`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `solar_street_light`
--
ALTER TABLE `solar_street_light`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `solar_water_heater`
--
ALTER TABLE `solar_water_heater`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `solar_water_pumps`
--
ALTER TABLE `solar_water_pumps`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ssl_benefits`
--
ALTER TABLE `ssl_benefits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ssl_hero`
--
ALTER TABLE `ssl_hero`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ssl_impact`
--
ALTER TABLE `ssl_impact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_details`
--
ALTER TABLE `service_details`
  ADD CONSTRAINT `service_details_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
