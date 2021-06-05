-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2021 at 06:35 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dzmqygmy_directSkip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_users`
--

CREATE TABLE `tbl_admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `username`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'admin', '$2y$10$pTubziGPHTN.c6VqznNuaOo9F7KrYJGBhmI/6uKziDf7qc52tZVKu', '2021-04-28 15:13:15', '2021-04-28 21:13:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counties_info`
--

CREATE TABLE `tbl_counties_info` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_counties_info`
--

INSERT INTO `tbl_counties_info` (`id`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Hampshire', '2021-03-25 07:36:36', '2021-03-25 07:36:36'),
(2, 'Dorset', '2021-03-25 07:37:27', '2021-03-25 07:37:27'),
(3, 'Wiltshire', '2021-03-25 07:38:41', '2021-03-25 07:38:41'),
(4, 'Surrey', '2021-03-25 07:40:01', '2021-03-25 07:40:01'),
(5, 'W.Sussex', '2021-03-25 07:42:36', '2021-03-25 07:42:36'),
(6, 'Oxfordshire', '2021-04-26 14:02:01', '2021-04-26 14:02:01'),
(7, 'Stripe Live Key', '2021-04-26 14:31:22', '2021-04-26 14:31:22'),
(8, 'West Berkshire', '2021-04-26 14:54:31', '2021-04-26 14:54:31'),
(9, 'Gloucestershire', '2021-04-26 14:55:04', '2021-04-26 14:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counties_pricing_info`
--

CREATE TABLE `tbl_counties_pricing_info` (
  `id` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `four_yd` double DEFAULT NULL,
  `six_yd` double DEFAULT NULL,
  `eight_yd` double DEFAULT NULL,
  `twelve_yd` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_counties_pricing_info`
--

INSERT INTO `tbl_counties_pricing_info` (`id`, `county_id`, `type_id`, `four_yd`, `six_yd`, `eight_yd`, `twelve_yd`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 199, 249, 299, 379, '2021-04-22 13:18:37', '2021-04-22 19:18:37'),
(3, 1, 2, 275, 325, 375, 425, '2021-04-23 19:28:31', '2021-04-24 01:28:31'),
(4, 1, 3, 199, 249, 299, 379, '2021-04-22 13:19:15', '2021-04-22 19:19:15'),
(5, 1, 4, 199, 249, NULL, NULL, '2021-04-22 13:21:51', '2021-04-22 19:21:51'),
(6, 1, 5, 165, 185, NULL, NULL, '2021-04-28 14:38:28', '2021-04-28 20:38:28'),
(7, 1, 6, 199, 249, 299, 379, '2021-04-22 13:18:54', '2021-04-22 19:18:54'),
(8, 2, 1, 199, 249, 299, 379, '2021-04-23 19:43:11', '2021-04-24 01:43:11'),
(9, 2, 2, 275, 325, 375, 425, '2021-04-23 19:43:55', '2021-04-24 01:43:55'),
(10, 2, 3, 199, 249, 299, 379, '2021-04-23 19:43:40', '2021-04-24 01:43:40'),
(11, 2, 4, 199, 249, NULL, NULL, '2021-04-23 19:44:07', '2021-04-24 01:44:07'),
(12, 2, 5, 186, 236, NULL, NULL, '2021-04-23 19:44:20', '2021-04-24 01:44:20'),
(13, 2, 6, 199, 249, 299, 379, '2021-04-23 19:43:25', '2021-04-24 01:43:25'),
(14, 3, 1, 199, 249, 299, 379, '2021-04-23 19:45:43', '2021-04-24 01:45:43'),
(15, 3, 2, 275, 325, 375, 425, '2021-04-23 19:46:42', '2021-04-24 01:46:42'),
(16, 3, 3, 199, 249, 299, 379, '2021-04-23 19:46:28', '2021-04-24 01:46:28'),
(17, 3, 4, 199, 249, NULL, NULL, '2021-04-23 19:46:54', '2021-04-24 01:46:54'),
(18, 3, 5, 186, 236, NULL, NULL, '2021-04-23 19:47:04', '2021-04-24 01:47:04'),
(19, 3, 6, 199, 249, 299, 379, '2021-04-23 19:46:09', '2021-04-24 01:46:09'),
(20, 4, 1, 199, 249, 299, 379, '2021-04-23 19:38:20', '2021-04-24 01:38:20'),
(21, 4, 2, 275, 325, 375, 425, '2021-04-23 19:39:09', '2021-04-24 01:39:09'),
(22, 4, 3, 199, 249, 299, 379, '2021-04-23 19:38:53', '2021-04-24 01:38:53'),
(23, 4, 4, 199, 249, NULL, NULL, '2021-04-23 19:39:34', '2021-04-24 01:39:34'),
(24, 4, 5, 186, 236, NULL, NULL, '2021-04-23 19:41:41', '2021-04-24 01:41:41'),
(25, 4, 6, 199, 249, 299, 379, '2021-04-23 19:38:39', '2021-04-24 01:38:39'),
(26, 5, 1, 199, 249, 299, 379, '2021-04-23 19:25:27', '2021-04-24 01:25:27'),
(27, 5, 2, 275, 325, 375, 425, '2021-04-23 19:29:10', '2021-04-24 01:29:10'),
(28, 5, 3, 199, 249, 299, 379, '2021-04-23 19:25:59', '2021-04-24 01:25:59'),
(29, 5, 4, 199, 249, NULL, NULL, '2021-04-23 19:30:30', '2021-04-24 01:30:30'),
(30, 5, 5, 186, 236, NULL, NULL, '2021-04-23 19:44:42', '2021-04-24 01:44:42'),
(31, 5, 6, 199, 249, 299, 379, '2021-04-23 19:25:42', '2021-04-24 01:25:42'),
(32, 6, 1, 199, 249, 299, 379, '2021-04-26 14:12:57', '2021-04-26 14:12:57'),
(33, 6, 6, 199, 249, 299, 379, '2021-04-26 14:13:19', '2021-04-26 14:13:19'),
(34, 6, 3, 199, 249, 299, 379, '2021-04-26 14:13:34', '2021-04-26 14:13:34'),
(35, 6, 5, 186, 236, NULL, NULL, '2021-04-26 14:13:51', '2021-04-26 14:13:51'),
(36, 6, 4, 199, 249, NULL, NULL, '2021-04-26 14:14:20', '2021-04-26 14:14:20'),
(37, 6, 2, 275, 325, 375, 425, '2021-04-26 14:14:33', '2021-04-26 14:14:33'),
(38, 7, 1, 4, 6, 8, 12, '2021-04-26 09:17:53', '2021-04-26 15:17:53'),
(39, 9, 1, 199, 249, 299, 379, '2021-04-27 16:24:25', '2021-04-27 16:24:25'),
(40, 9, 6, 199, 249, 299, 379, '2021-04-27 16:24:49', '2021-04-27 16:24:49'),
(41, 9, 3, 199, 249, 299, 379, '2021-04-27 16:25:04', '2021-04-27 16:25:04'),
(42, 9, 4, 199, 249, NULL, NULL, '2021-04-27 16:25:21', '2021-04-27 16:25:21'),
(43, 9, 5, 186, 236, NULL, NULL, '2021-04-27 16:25:35', '2021-04-27 16:25:35'),
(44, 9, 2, 275, 325, 375, 425, '2021-04-27 16:25:52', '2021-04-27 16:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holidays_info`
--

CREATE TABLE `tbl_holidays_info` (
  `id` int(11) NOT NULL,
  `holiday` date NOT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_holidays_info`
--

INSERT INTO `tbl_holidays_info` (`id`, `holiday`, `remarks`, `created_at`, `updated_at`) VALUES
(4, '2021-01-01', 'New Year\'s Day', '2021-03-27 08:06:10', '2021-03-27 08:06:10'),
(5, '2021-04-02', 'Good Friday', '2021-03-27 08:06:30', '2021-03-27 08:06:30'),
(6, '2021-04-05', 'Easter Monday', '2021-03-27 08:07:17', '2021-03-27 08:07:17'),
(7, '2021-05-03', 'Early May Bank Holiday', '2021-03-27 08:07:33', '2021-03-27 08:07:33'),
(8, '2021-05-31', 'Spring Bank Holiday', '2021-03-27 08:07:49', '2021-03-27 08:07:49'),
(9, '2021-12-27', 'Christmas Day', '2021-03-27 08:08:20', '2021-03-27 08:08:20'),
(10, '2021-12-28', 'Boxing Day', '2021-03-27 08:08:37', '2021-03-27 08:08:37'),
(12, '2022-01-03', 'New Year\'s Day', '2021-03-27 19:24:00', '2021-03-27 19:24:00'),
(15, '2022-04-15', 'Good Friday', '2021-03-27 21:05:44', '2021-03-27 21:05:44'),
(16, '2022-04-18', 'Easter Monday', '2021-03-27 21:06:09', '2021-03-27 21:06:09'),
(17, '2022-05-02', 'Early May Bank Holiday', '2021-03-27 21:06:31', '2021-03-27 21:06:31'),
(18, '2022-06-02', 'Spring Bank Holiday', '2021-03-27 21:06:50', '2021-03-27 21:06:50'),
(19, '2022-06-03', 'Platinum Jubilee bank holiday', '2021-03-27 21:07:31', '2021-03-27 21:07:31'),
(20, '2022-12-26', 'Boxing Day', '2021-03-27 21:07:50', '2021-03-27 21:07:50'),
(21, '2022-12-27', 'Christmas Day', '2021-03-27 21:08:06', '2021-03-27 21:08:06'),
(22, '2021-08-30', 'Summer Bank Holiday', '2021-04-19 15:13:04', '2021-04-19 15:13:04'),
(23, '2021-05-05', 'Busy Day', '2021-04-30 14:43:25', '2021-04-30 14:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_billing_info`
--

CREATE TABLE `tbl_order_billing_info` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `vat_amount` double NOT NULL,
  `total_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_billing_info`
--

INSERT INTO `tbl_order_billing_info` (`id`, `order_id`, `amount`, `vat_amount`, `total_amount`) VALUES
(47, 1002, 224, 44.8, 268.8),
(48, 1003, 420, 84, 504),
(49, 1004, 224, 44.8, 268.8),
(50, 1005, 388, 77.6, 465.6),
(51, 1006, 174, 34.8, 208.8),
(52, 1007, 174, 34.8, 208.8),
(53, 1008, 259, 51.8, 310.8),
(54, 1009, 174, 34.8, 208.8),
(55, 1010, 224, 44.8, 268.8),
(56, 1011, 224, 44.8, 268.8),
(57, 1012, 159, 31.8, 190.8),
(58, 1013, 174, 34.8, 208.8),
(59, 1014, 174, 34.8, 208.8),
(60, 1015, 267, 53.4, 320.4),
(61, 1016, 194, 38.8, 232.8),
(62, 1017, 388, 77.6, 465.6),
(63, 1018, 364, 72.8, 436.8),
(64, 1019, 365, 73, 438),
(65, 1020, 365, 73, 438),
(66, 1021, 388, 77.6, 465.6),
(67, 1022, 279, 55.8, 334.8),
(68, 1023, 242, 48.4, 290.4),
(69, 1024, 169, 33.8, 202.8),
(70, 1025, 299, 59.8, 358.8),
(71, 1026, 249, 49.8, 298.8),
(72, 1027, 249, 49.8, 298.8),
(73, 1028, 179, 35.8, 214.8),
(74, 1029, 379, 75.8, 454.8),
(75, 1030, 199, 39.8, 238.8),
(76, 1031, 3.79, 0.758, 4.55),
(77, 1032, 249, 49.8, 298.8),
(78, 1033, 249, 49.8, 298.8),
(79, 1034, 249, 49.8, 298.8),
(80, 1035, 4, 0.8, 4.8),
(81, 1036, 249, 49.8, 298.8),
(82, 1037, 4, 0.8, 4.8),
(83, 1038, 6, 1.2, 7.2),
(84, 1039, 6, 1.2, 7.2),
(85, 1040, 4, 0.8, 4.8),
(86, 1041, 249, 49.8, 298.8),
(87, 1042, 249, 49.8, 298.8),
(88, 1043, 249, 49.8, 298.8),
(89, 1044, 249, 49.8, 298.8),
(90, 1045, 249, 49.8, 298.8),
(91, 1046, 249, 49.8, 298.8),
(92, 1047, 299, 59.8, 358.8),
(93, 1048, 425, 85, 510),
(94, 1049, 175, 35, 210),
(95, 1050, 379, 75.8, 454.8),
(96, 1051, 165, 33, 198),
(97, 1052, 249, 49.8, 298.8),
(98, 1053, 249, 49.8, 298.8),
(99, 1054, 249, 49.8, 298.8),
(100, 1055, 249, 49.8, 298.8),
(101, 1056, 249, 49.8, 298.8),
(102, 1057, 249, 49.8, 298.8),
(103, 1058, 249, 49.8, 298.8),
(104, 1059, 249, 49.8, 298.8),
(105, 1060, 249, 49.8, 298.8),
(106, 1061, 249, 49.8, 298.8),
(107, 1062, 249, 49.8, 298.8),
(108, 1063, 249, 49.8, 298.8),
(109, 1064, 299, 59.8, 358.8),
(110, 1065, 249, 49.8, 298.8),
(111, 1066, 249, 49.8, 298.8),
(112, 1067, 249, 49.8, 298.8),
(113, 1068, 249, 49.8, 298.8),
(114, 1069, 249, 49.8, 298.8),
(115, 1070, 249, 49.8, 298.8),
(116, 1071, 249, 49.8, 298.8),
(117, 1072, 249, 49.8, 298.8),
(118, 1073, 425, 85, 510),
(119, 1074, 249, 49.8, 298.8),
(120, 1075, 249, 49.8, 298.8),
(121, 1076, 249, 49.8, 298.8),
(122, 1077, 249, 49.8, 298.8),
(123, 1078, 249, 49.8, 298.8),
(124, 1079, 249, 49.8, 298.8),
(125, 1080, 249, 49.8, 298.8),
(126, 1081, 249, 49.8, 298.8),
(127, 1082, 249, 49.8, 298.8),
(128, 1083, 249, 49.8, 298.8),
(129, 1084, 249, 49.8, 298.8),
(130, 1085, 249, 49.8, 298.8),
(131, 1086, 249, 49.8, 298.8),
(132, 1087, 249, 49.8, 298.8),
(133, 1088, 249, 49.8, 298.8),
(134, 1089, 249, 49.8, 298.8),
(135, 1090, 249, 49.8, 298.8),
(136, 1091, 249, 49.8, 298.8),
(137, 1092, 249, 49.8, 298.8),
(138, 1093, 249, 49.8, 298.8),
(139, 1094, 249, 49.8, 298.8),
(140, 1095, 249, 49.8, 298.8),
(141, 1096, 249, 49.8, 298.8),
(142, 1097, 185, 37, 222),
(143, 1098, 379, 75.8, 454.8),
(144, 1099, 199, 39.8, 238.8),
(145, 1100, 249, 49.8, 298.8),
(146, 1101, 249, 49.8, 298.8),
(147, 1102, 249, 49.8, 298.8),
(148, 1103, 249, 49.8, 298.8),
(149, 1104, 249, 49.8, 298.8),
(150, 1105, 249, 49.8, 298.8),
(151, 1106, 199, 39.8, 238.8),
(152, 1107, 249, 49.8, 298.8),
(153, 1108, 425, 85, 510),
(154, 1109, 249, 49.8, 298.8),
(155, 1110, 249, 49.8, 298.8),
(156, 1111, 165, 33, 198),
(157, 1112, 199, 39.8, 238.8),
(158, 1113, 199, 39.8, 238.8),
(159, 1114, 325, 65, 390),
(160, 1115, 249, 49.8, 298.8),
(161, 1116, 4, 0.8, 4.8),
(162, 1117, 8, 1.6, 9.6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_customer_detail_info`
--

CREATE TABLE `tbl_order_customer_detail_info` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(35) NOT NULL,
  `address` varchar(75) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `comments` varchar(350) DEFAULT NULL,
  `b_address` varchar(150) DEFAULT NULL,
  `b_city` varchar(50) DEFAULT NULL,
  `b_country` varchar(50) DEFAULT NULL,
  `b_postal_code` varchar(15) DEFAULT NULL,
  `newsletter` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_customer_detail_info`
--

INSERT INTO `tbl_order_customer_detail_info` (`id`, `order_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `country`, `comments`, `b_address`, `b_city`, `b_country`, `b_postal_code`, `newsletter`, `created_at`, `updated_at`) VALUES
(47, 1002, 'Muhammad', 'Waseem', 'captain.wasi@gmail.com', '03030303030', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-13 17:55:36', '2021-04-13 17:55:36'),
(48, 1003, 'Darth', 'Vadar', 'scottyvid@msn.com', '07080444555', 'Death Star', 'N/A', 'United Kingdom', 'Please deliver a skip to the Emperor', 'Endor', 'Forest', 'N/A', 'N/A', 1, '2021-04-14 02:18:46', '2021-04-14 02:18:46'),
(49, 1004, 'Luke', 'Skywalker', 'scottyvid@msn.com', '1111111', 'Death Star', 'N/A', 'N/A', 'TBC', NULL, NULL, NULL, NULL, 1, '2021-04-14 13:25:39', '2021-04-14 13:25:39'),
(50, 1005, 'Syed', 'Check', 'anasqamar.work@gmail.com', '03453454334', 'XYZ', 'ef', 'Pakistan', 'def', NULL, NULL, NULL, NULL, 1, '2021-04-14 15:38:55', '2021-04-14 15:38:55'),
(51, 1006, 'Tom', 'Cruise', 'tom@cruise.com', '000000000', 'Mission Impossible Road', 'London', 'Hampshire', 'Deliver a skip to Ethan Hunt', NULL, NULL, NULL, NULL, 0, '2021-04-14 17:28:40', '2021-04-14 17:28:40'),
(52, 1007, 'Mrs', 'Doubtfire', 'scottyvid@msn.com', '07000123456', 'Mad House', 'Wyn Drive', 'United Kingdom', 'Drop off on driveway. Thanks', NULL, NULL, NULL, NULL, 0, '2021-04-15 12:14:39', '2021-04-15 12:14:39'),
(53, 1008, 'Mr', 'XYZ', 'xyz@gmail.com', '454545', 'pgfgf656', 'dfdfdf4545', '2423', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-17 17:58:57', '2021-04-17 17:58:57'),
(54, 1009, 'Scott', 'V', 'scottyvid@msn.com', '123456789', '123 Made Up Street', 'London', 'Hampshire', 'Please place skip on the wooden boards on driveway. Thank you.', NULL, NULL, NULL, NULL, 0, '2021-04-19 15:16:45', '2021-04-19 15:16:45'),
(55, 1010, 'test', 'etst', 'captain.wasi@gmail.com', '03030030303', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-20 16:45:50', '2021-04-20 16:45:50'),
(56, 1011, 'Mr', 'XYZ', 'xyz@gmail.com', '3242323', 'pgfgf656', 'dfdfdf4545', '2423', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-20 17:17:39', '2021-04-20 17:17:39'),
(57, 1012, 'Jack', 'Sparrow', 'scottyvid@msn.com', '07000123456', '17 Pirates', 'Of the', 'Carribean', 'Ooooaaaaarrggghhh', 'Pirate City', 'Pirate Land', 'Johnny Depp', 'Abc def', 1, '2021-04-20 17:48:55', '2021-04-20 17:48:55'),
(58, 1013, 'Minhaj', 'Ali', 'Minhaj@gmail.com', '23231', 'Min', 'Minhaj', 'Leeds', 'asdsada', NULL, NULL, NULL, NULL, 1, '2021-04-21 12:42:12', '2021-04-21 12:42:12'),
(59, 1014, 'Minhaj', 'Ali', 'Minhaj@gmail.com', '23231', 'Min', 'Minhaj', 'Leeds', 'asdsada', NULL, NULL, NULL, NULL, 1, '2021-04-21 12:45:07', '2021-04-21 12:45:07'),
(60, 1015, 'Minhaj', 'Test', 'nxrovtozjyjclbxnio@wqcefp.com', '4e34', 'adasd', 'asdasda', 'asdas', 'asdasdasdasdas', NULL, NULL, NULL, NULL, 1, '2021-04-21 12:48:08', '2021-04-21 12:48:08'),
(61, 1016, 'David', 'Jason', 'scottyvid@msn.com', '987654321', 'Nelson Mandela House', 'Peckham', 'London', 'Please deliver the skip to Rodney.', NULL, NULL, NULL, NULL, 0, '2021-04-21 14:27:25', '2021-04-21 14:27:25'),
(62, 1017, 'Mr', 'XYZ', 'xyz11@gmail.com', '031111111111', 'xyz street 11234', 'xyz street 112345', 'USA', 'xyz testing', NULL, NULL, NULL, NULL, 1, '2021-04-22 11:59:45', '2021-04-22 11:59:45'),
(63, 1018, 'Minhaj', '123', 'minhaj@gmail.com', '03020000000', 'Xyz street', 'Xyz street', 'Washington', 'Asap', NULL, NULL, NULL, NULL, 1, '2021-04-22 12:17:19', '2021-04-22 12:17:19'),
(64, 1019, 'Chris', 'Martin', 'scottyvid@msn.com', '07855236652', 'Exeter', 'Exeter', 'Exeter', 'Garden.', NULL, NULL, NULL, NULL, 1, '2021-04-22 12:19:49', '2021-04-22 12:19:49'),
(65, 1020, 'Muhammad', 'Abdullah', 'ab@gmail.com', '923040000000', 'Washington street 12', 'Washington street 12', 'Usa', 'Testinggg', NULL, NULL, NULL, NULL, 1, '2021-04-22 12:23:46', '2021-04-22 12:23:46'),
(66, 1021, 'Mr.', 'Abd', 'abd@gmail.com', '0304000000', 'abc street , washington', 'abc street , washington', 'USA', 'testing purpose', NULL, NULL, NULL, NULL, 1, '2021-04-22 15:19:52', '2021-04-22 15:19:52'),
(67, 1022, 'unknown', 'person', 'unknown@gmail.com', '03000000000', 'abc street, Washington', 'abc street, Washington', 'USA', 'TESTING PURPOSE', NULL, NULL, NULL, NULL, 1, '2021-04-22 15:57:18', '2021-04-22 15:57:18'),
(68, 1023, 'adsad', 'sadasda', 'sdasd', '123213', 'asdad', 'asdsa', 'dasds', 'asdsa', NULL, NULL, NULL, NULL, 0, '2021-04-22 17:36:06', '2021-04-22 17:36:06'),
(69, 1024, 'Jonathan', 'Eaton', 'joneaton7@gmail.com', '01304780537', 'Brick Lane', 'Southampton', 'UK', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-23 01:10:11', '2021-04-23 01:10:11'),
(70, 1025, 'Rocky', 'Balboa', 'scottyvid@msn.com', '07111222333', 'Pennsylvania', 'Detriot', 'United Kingdom', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-23 02:26:38', '2021-04-23 02:26:38'),
(71, 1026, 'asdsadsa', 'asdsad', 'saqibwebdesignseo@gmail.com', '1232131', 'asasdsadsa', 'dasdsadsa', 'asdasdasdsad', 'dsadsadsadsadsad', NULL, NULL, NULL, NULL, 0, '2021-04-23 15:40:54', '2021-04-23 15:40:54'),
(72, 1027, 'asdsadsa', 'asdsad', 'saqibwebdesignseo@gmail.com', '1232131', 'asasdsadsa', 'dasdsadsa', 'asdasdasdsad', 'dsadsadsadsadsad', NULL, NULL, NULL, NULL, 0, '2021-04-23 15:43:22', '2021-04-23 15:43:22'),
(73, 1028, 'Scott', 'Minhaj', 'scottyvid@msn.com', '123456789', '123 Road', 'Street', 'Hampshire', 'Hello.', NULL, NULL, NULL, NULL, 0, '2021-04-23 16:08:34', '2021-04-23 16:08:34'),
(74, 1029, 'Scott', 'V', 'scottyvid@msn.com', '123456789', 'Made Up Street', 'Made Up Road', 'Worthing', 'Friday Night Test', NULL, NULL, NULL, NULL, 1, '2021-04-24 01:33:19', '2021-04-24 01:33:19'),
(75, 1030, 'Scott', 'V', 'scottyvid@msn.com', '01111222333', '77 Kuk Way', 'Swindon', 'United Kingdom', 'Watch the overhead telephone line.', NULL, NULL, NULL, NULL, 0, '2021-04-26 04:20:23', '2021-04-26 04:20:23'),
(76, 1031, 'David', 'Wilson', 'scottyvid@msn.com', '123456789', '22 Lymoor Way', 'Oxford', 'Oxfordshire', 'STRIPE TEST', NULL, NULL, NULL, NULL, 1, '2021-04-26 14:34:59', '2021-04-26 14:34:59'),
(77, 1032, 'test', 'test', 'captain.wasi@gmail.com', '1234567', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-26 16:25:15', '2021-04-26 16:25:15'),
(78, 1033, 'test', 'test', 'captain.wasi@gmail.com', '1234567', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-26 16:26:29', '2021-04-26 16:26:29'),
(79, 1034, 'test', 'test', 'captain.wasi@gmail.com', '1234567', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-26 16:26:36', '2021-04-26 16:26:36'),
(80, 1035, 'Scott', 'V', 'scottyvid@msn.com', '123456789', '22 La La Land', 'Oxford', 'Oxfordshire', 'First Live Key Test', NULL, NULL, NULL, NULL, 1, '2021-04-26 16:38:42', '2021-04-26 16:38:42'),
(81, 1036, 'James', 'patrick', 'james@electricianinwilmingtonnc.com', '19104152002', '1641 S 41st St', '41st St', 'United States', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-26 16:42:07', '2021-04-26 16:42:07'),
(82, 1037, 'Scott', 'Minhaj', 'scottyvid@msn.com', '123456789', 'Made Up', 'Made Up', 'Made Up', 'Live Key Test', NULL, NULL, NULL, NULL, 0, '2021-04-26 16:46:48', '2021-04-26 16:46:48'),
(83, 1038, 'Scott', 'Minhaj', 'scottyvid@msn.com', '123456789', 'Test', 'Test', 'Test', '6yd Skip £6 + vat', NULL, NULL, NULL, NULL, 0, '2021-04-26 17:03:47', '2021-04-26 17:03:47'),
(84, 1039, 'Scott', 'Minhaj', 'scottyvid@msn.com', '123456789', 'Test', 'Test', 'Test', 'Test', NULL, NULL, NULL, NULL, 0, '2021-04-26 17:36:04', '2021-04-26 17:36:04'),
(85, 1040, 'Hello', 'Hello', 'scottyvid@msn.com', '987654321', 'TEST', 'TEST', 'TEST', 'TEST - Live Key', NULL, NULL, NULL, NULL, 0, '2021-04-26 18:02:56', '2021-04-26 18:02:56'),
(86, 1041, 'test', 'test', 'test@gmail.com', '232323', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-27 12:40:35', '2021-04-27 12:40:35'),
(87, 1042, 'test', 'test', 'test@gmail.com', '232323', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-27 12:41:05', '2021-04-27 12:41:05'),
(88, 1043, 'test', 'test', 'test@gmail.com', '232323', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-27 12:41:11', '2021-04-27 12:41:11'),
(89, 1044, 'test', 'test', 'test@gmail.com', '232323', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-27 12:41:18', '2021-04-27 12:41:18'),
(90, 1045, 'test', 'test', 'test@gmail.com', '232323', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-27 12:42:01', '2021-04-27 12:42:01'),
(91, 1046, 'test', 'test', 'test@gmail.com', '232323', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-27 12:42:14', '2021-04-27 12:42:14'),
(92, 1047, 'Test', 'Test', 'scottyvid@msn.com', '123456789', 'Test', 'Test', 'Test', 'Test', NULL, NULL, NULL, NULL, 1, '2021-04-27 15:28:02', '2021-04-27 15:28:02'),
(93, 1048, 'OK', 'OK', 'scottyvid@msn.com', '44444555555', 'OK', 'OK', 'OK', 'OK', NULL, NULL, NULL, NULL, 1, '2021-04-27 15:56:58', '2021-04-27 15:56:58'),
(94, 1049, 'Test', 'Test', 'scottyvid@msn.com', '99999999999', 'Test', 'Test', 'United Kingdom', 'Weds Morning', NULL, NULL, NULL, NULL, 1, '2021-04-28 13:28:42', '2021-04-28 13:28:42'),
(95, 1050, 'Scott', 'Minhaj', 'scottyvid@msn.com', '123456789', 'Pakistan', 'Pakistan', 'Pakistan', 'Please place skip on driveway and mind the overhead telephone pole.', 'England', 'England', 'England', 'England', 1, '2021-04-28 16:35:54', '2021-04-28 16:35:54'),
(96, 1051, 'Ok', 'Ok', 'scottyvid@msn.com', '123456789', 'Ok', 'Ok', 'United Kingdom', 'Ok', NULL, NULL, NULL, NULL, 0, '2021-04-29 11:43:47', '2021-04-29 11:43:47'),
(97, 1052, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 15:50:41', '2021-04-29 15:50:41'),
(98, 1053, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 16:13:55', '2021-04-29 16:13:55'),
(99, 1054, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 16:14:36', '2021-04-29 16:14:36'),
(100, 1055, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 16:15:59', '2021-04-29 16:15:59'),
(101, 1056, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 16:56:05', '2021-04-29 16:56:05'),
(102, 1057, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 16:59:56', '2021-04-29 16:59:56'),
(103, 1058, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 17:02:04', '2021-04-29 17:02:04'),
(104, 1059, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 17:03:05', '2021-04-29 17:03:05'),
(105, 1060, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 17:10:45', '2021-04-29 17:10:45'),
(106, 1061, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 17:13:10', '2021-04-29 17:13:10'),
(107, 1062, 'test', 'test', 'captain.wasi@gmail.com', '123456', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-29 17:14:01', '2021-04-29 17:14:01'),
(108, 1063, 'Test', 'Test', 'scottyvid@msn.com', '123456789', '111 Test Way', 'Test', 'United Kingdom', 'Test', NULL, NULL, NULL, NULL, 0, '2021-04-30 00:16:39', '2021-04-30 00:16:39'),
(109, 1064, 'Friday', 'Friday', 'scottyvid@msn.com', '123456789', 'Friday', 'Friday', 'Friday', 'Friday', NULL, NULL, NULL, NULL, 0, '2021-04-30 12:02:32', '2021-04-30 12:02:32'),
(110, 1065, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:10:28', '2021-04-30 13:10:28'),
(111, 1066, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:10:57', '2021-04-30 13:10:57'),
(112, 1067, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:12:54', '2021-04-30 13:12:54'),
(113, 1068, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:14:16', '2021-04-30 13:14:16'),
(114, 1069, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:14:48', '2021-04-30 13:14:48'),
(115, 1070, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:15:46', '2021-04-30 13:15:46'),
(116, 1071, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:28:13', '2021-04-30 13:28:13'),
(117, 1072, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:29:29', '2021-04-30 13:29:29'),
(118, 1073, 'Mr.', 'John', 'zfkzznsoikuvjobsls@miucce.com', '18645551923', 'Street 11, Washington', 'Street 11, Washington', 'USA', 'On-time.', NULL, NULL, NULL, NULL, 1, '2021-04-30 13:30:34', '2021-04-30 13:30:34'),
(119, 1074, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:31:30', '2021-04-30 13:31:30'),
(120, 1075, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:34:05', '2021-04-30 13:34:05'),
(121, 1076, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:35:32', '2021-04-30 13:35:32'),
(122, 1077, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:37:53', '2021-04-30 13:37:53'),
(123, 1078, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:38:32', '2021-04-30 13:38:32'),
(124, 1079, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:41:41', '2021-04-30 13:41:41'),
(125, 1080, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:42:44', '2021-04-30 13:42:44'),
(126, 1081, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:43:04', '2021-04-30 13:43:04'),
(127, 1082, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:43:41', '2021-04-30 13:43:41'),
(128, 1083, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:47:53', '2021-04-30 13:47:53'),
(129, 1084, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:50:00', '2021-04-30 13:50:00'),
(130, 1085, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:52:57', '2021-04-30 13:52:57'),
(131, 1086, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:53:22', '2021-04-30 13:53:22'),
(132, 1087, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:55:29', '2021-04-30 13:55:29'),
(133, 1088, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 13:57:04', '2021-04-30 13:57:04'),
(134, 1089, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 14:01:24', '2021-04-30 14:01:24'),
(135, 1090, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 14:04:08', '2021-04-30 14:04:08'),
(136, 1091, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 14:04:23', '2021-04-30 14:04:23'),
(137, 1092, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 14:09:41', '2021-04-30 14:09:41'),
(138, 1093, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 14:11:18', '2021-04-30 14:11:18'),
(139, 1094, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 14:12:15', '2021-04-30 14:12:15'),
(140, 1095, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 14:17:00', '2021-04-30 14:17:00'),
(141, 1096, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 14:17:09', '2021-04-30 14:17:09'),
(142, 1097, 'Scott', 'Minhaj', 'scottyvid@msn.com', '123123123', 'TEST', 'TEST', 'TEST', 'TEST', NULL, NULL, NULL, NULL, 0, '2021-04-30 14:42:03', '2021-04-30 14:42:03'),
(143, 1098, 'TEST', 'TEST', 'scottyvid@msn.com', '123456789', 'TEST', 'TEST', 'TEST', 'TEST', NULL, NULL, NULL, NULL, 0, '2021-04-30 15:04:13', '2021-04-30 15:04:13'),
(144, 1099, 'TEST', 'TEST', 'scottyvid@msn.com', '123456789', 'TEST', 'TEST', 'TEST', 'TEST', NULL, NULL, NULL, NULL, 0, '2021-04-30 15:15:50', '2021-04-30 15:15:50'),
(145, 1100, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 15:31:20', '2021-04-30 15:31:20'),
(146, 1101, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 15:32:01', '2021-04-30 15:32:01'),
(147, 1102, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 15:32:23', '2021-04-30 15:32:23'),
(148, 1103, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 15:32:57', '2021-04-30 15:32:57'),
(149, 1104, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 15:33:16', '2021-04-30 15:33:16'),
(150, 1105, 'TEST', 'TEST', 'scottyvid@msn.com', '123456789', 'TEST', 'TEST', 'TEST', 'TEST', NULL, NULL, NULL, NULL, 0, '2021-04-30 15:38:57', '2021-04-30 15:38:57'),
(151, 1106, 'Yes', 'Yes', 'scottyvid@msn.com', '777777777777', 'Yes', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL, NULL, 0, '2021-04-30 15:49:15', '2021-04-30 15:49:15'),
(152, 1107, 'Pizza', 'Pizza', 'scottyvid@msn.com', '33333333333', 'Pizza', 'Pizza', 'Pizza', 'Pizza', NULL, NULL, NULL, NULL, 0, '2021-04-30 16:02:56', '2021-04-30 16:02:56'),
(153, 1108, 'Mr', 'John', 'john112@gmail.com', '18644445334', 'Street 11, washington', 'Street 11,Washington', 'Usa', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-30 16:31:14', '2021-04-30 16:31:14'),
(154, 1109, 'test', 'test', 'captain.wasi@gmail.com', '12345', 'test', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 0, '2021-04-30 16:37:34', '2021-04-30 16:37:34'),
(155, 1110, 'asdasd', 'asdasdasda', 'sdasdasd@gmail.com', '2233242', 'adsad', 'asasadsasad', 'sadasdsadsadas', 'asdasdsadsadsadsa', NULL, NULL, NULL, NULL, 0, '2021-04-30 16:39:39', '2021-04-30 16:39:39'),
(156, 1111, 'Boo', 'Boo', 'scottyvid@msn.com', '123456789', 'Boo', 'Boo', 'Boo', 'Jonathan', NULL, NULL, NULL, NULL, 0, '2021-04-30 16:46:59', '2021-04-30 16:46:59'),
(157, 1112, 'Syedd', 'Check', 'anasqamar.work@gmail.com', '03453454334', 'XYZ', 'sdfsdfsds', 'Pakistan', 'sdfsdfdsf', NULL, NULL, NULL, NULL, 1, '2021-04-30 17:11:52', '2021-04-30 17:11:52'),
(158, 1113, 'Syed', 'Check', 'anasqamar.work@gmail.com', '03453454334', 'XYZ', 'fdfdf', 'Pakistan', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-30 17:25:04', '2021-04-30 17:25:04'),
(159, 1114, 'fghgf', 'fghfgh', 'a@gmail.com', '03453454334', 'fdfgfdgdf', 'fgdfgfdg', 'Pakistan', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-30 17:33:02', '2021-04-30 17:33:02'),
(160, 1115, 'Woo', 'Woo', 'scottyvid@msn.com', '123456789', 'Woo', 'Woo', 'Woo', 'Woo', NULL, NULL, NULL, NULL, 1, '2021-04-30 17:44:39', '2021-04-30 17:44:39'),
(161, 1116, 'real', 'real', 'scottyvid@msn.com', '00000000000', 'real', 'real', 'real', 'real', NULL, NULL, NULL, NULL, 1, '2021-04-30 18:07:22', '2021-04-30 18:07:22'),
(162, 1117, 'Friday', 'Friday', 'scottyvid@msn.com', '123456789', 'Friday', 'Friday', 'Friday', 'Friday', NULL, NULL, NULL, NULL, 1, '2021-04-30 18:22:47', '2021-04-30 18:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_info`
--

CREATE TABLE `tbl_order_info` (
  `id` int(11) NOT NULL,
  `postal_code` varchar(35) NOT NULL,
  `dropoff_type` int(11) NOT NULL,
  `service_type` int(11) NOT NULL,
  `skip_size` varchar(15) NOT NULL,
  `delivery_date` date NOT NULL,
  `collection_date` date NOT NULL,
  `supplier_name` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_info`
--

INSERT INTO `tbl_order_info` (`id`, `postal_code`, `dropoff_type`, `service_type`, `skip_size`, `delivery_date`, `collection_date`, `supplier_name`, `status`, `created_at`, `updated_at`) VALUES
(1002, 'bh231234', 2, 1, '6 yd', '2021-04-19', '2021-04-21', NULL, 8, '2021-04-13 17:55:36', '2021-04-24 01:59:46'),
(1003, 'Bn13789', 2, 1, '12 yd', '2021-04-15', '2021-04-30', NULL, 8, '2021-04-14 02:18:46', '2021-04-15 13:48:01'),
(1004, 'SO51777', 2, 1, '6 yd', '2021-04-16', '2021-04-29', NULL, 8, '2021-04-14 13:25:39', '2021-04-15 13:47:08'),
(1005, 'bh233453434', 2, 2, '12 yd', '2021-04-20', '2021-04-21', NULL, 9, '2021-04-14 15:38:55', '2021-04-14 15:38:55'),
(1006, 'SP67TF', 2, 5, '6 yd', '2021-05-12', '2021-06-17', NULL, 8, '2021-04-14 17:28:40', '2021-04-24 01:59:53'),
(1007, 'So51YTT', 2, 5, '6 yd', '2021-04-19', '2021-04-20', NULL, 8, '2021-04-15 12:14:39', '2021-04-24 02:00:00'),
(1009, 'po6123', 2, 5, '6 yd', '2021-04-22', '2021-08-31', NULL, 8, '2021-04-19 15:16:45', '2021-04-21 14:22:11'),
(1010, 'bh23test', 2, 6, '6 yd', '2021-04-28', '2021-04-30', NULL, 8, '2021-04-20 16:45:50', '2021-04-24 02:00:05'),
(1011, 'bh2333', 2, 1, '6 yd', '2021-04-22', '2021-04-23', NULL, 8, '2021-04-20 17:17:39', '2021-04-24 02:00:11'),
(1012, 'Po7Xxx', 2, 5, '4 yd', '2021-04-22', '2021-04-29', 'test supplier', 8, '2021-04-20 17:48:55', '2021-04-24 02:00:18'),
(1013, 'BH23asd', 2, 5, '6 yd', '2021-04-30', '2021-04-30', NULL, 8, '2021-04-21 12:42:12', '2021-04-24 02:00:23'),
(1015, 'KT13asdsad', 2, 4, '6 yd', '2021-04-30', '2021-04-30', 'Ace Liftaway', 8, '2021-04-21 12:48:08', '2021-04-24 02:00:28'),
(1016, 'so51444', 2, 1, '4 yd', '2021-04-23', '2021-04-27', NULL, 8, '2021-04-21 14:27:25', '2021-04-24 02:00:34'),
(1017, 'bh2333', 2, 2, '12 yd', '2021-04-26', '2021-04-27', NULL, 8, '2021-04-22 11:59:45', '2021-04-24 02:01:20'),
(1018, 'Kt1323', 2, 2, '6 yd', '2021-04-30', '2021-04-30', NULL, 8, '2021-04-22 12:17:19', '2021-04-24 02:00:39'),
(1019, 'So199zn', 2, 1, '12 yd', '2021-04-26', '2021-04-28', 'test sdfsdf', 8, '2021-04-22 12:19:49', '2021-04-24 02:00:43'),
(1020, 'Bh2366', 2, 3, '12 yd', '2021-04-30', '2021-04-30', NULL, 8, '2021-04-22 12:23:46', '2021-04-24 02:01:17'),
(1021, 'BH2364', 2, 2, '12 yd', '2021-04-28', '2021-04-29', 'Ace Liftaway', 8, '2021-04-22 15:19:52', '2021-04-24 02:01:13'),
(1022, 'BH2333', 2, 3, '8 yd', '2021-04-26', '2021-04-27', 'test', 8, '2021-04-22 15:57:18', '2021-04-24 02:01:04'),
(1025, 'Po118NT', 2, 3, '8 yd', '2021-04-26', '2021-04-30', NULL, 8, '2021-04-23 02:26:38', '2021-04-24 02:00:47'),
(1026, 'BH23asdasdsa', 2, 1, '6 yd', '2021-04-30', '2021-04-30', NULL, 8, '2021-04-23 15:40:54', '2021-04-24 02:00:51'),
(1028, 'so2174r', 2, 5, '6 yd', '2021-04-28', '2021-05-28', NULL, 8, '2021-04-23 16:08:34', '2021-04-24 02:00:54'),
(1029, 'bn117fs', 2, 1, '12 yd', '2021-04-28', '2021-04-30', 'Rabbit Skips', 8, '2021-04-24 01:33:18', '2021-04-24 01:59:19'),
(1030, 'So217LL', 2, 1, '4 yd', '2021-04-27', '2021-05-04', NULL, 8, '2021-04-26 04:20:23', '2021-04-28 21:15:24'),
(1031, 'STRIPETEST9UU', 2, 1, '12 yd', '2021-04-29', '2021-04-30', 'Ace Liftaway', 8, '2021-04-26 14:34:59', '2021-04-26 17:54:49'),
(1039, 'STRIPETESTTest', 2, 1, '6 yd', '2021-04-28', '2021-05-05', 'Aasvogel', 8, '2021-04-26 17:36:04', '2021-04-28 21:15:20'),
(1040, 'STRIPETEST7NN', 2, 1, '4 yd', '2021-05-04', '2021-05-12', 'Collards', 8, '2021-04-26 18:02:56', '2021-04-28 21:15:17'),
(1046, 'bh23test', 2, 1, '6 yd', '2021-04-29', '2021-04-30', NULL, 8, '2021-04-27 12:42:14', '2021-04-28 21:15:09'),
(1047, 'po11222', 2, 3, '8 yd', '2021-04-29', '2021-05-06', 'Waltet', 8, '2021-04-27 15:28:02', '2021-04-28 21:15:04'),
(1048, 'so51OK', 2, 2, '12 yd', '2021-04-29', '2021-05-05', NULL, 8, '2021-04-27 15:56:58', '2021-04-28 21:14:58'),
(1049, 'So52Test', 2, 5, '4 yd', '2021-05-04', '2021-05-21', NULL, 8, '2021-04-28 13:28:42', '2021-04-28 21:14:54'),
(1050, 'dt10Test', 2, 6, '12 yd', '2021-05-04', '2021-05-06', NULL, 8, '2021-04-28 16:35:54', '2021-04-28 21:14:51'),
(1051, 'So51Ok', 2, 5, '4 yd', '2021-05-04', '2021-05-06', NULL, 1, '2021-04-29 11:43:47', '2021-04-29 11:44:14'),
(1104, 'bh23test', 2, 1, '6 yd', '2021-05-10', '2021-05-12', NULL, 1, '2021-04-30 15:33:16', '2021-04-30 15:33:35'),
(1105, 'so215RT', 2, 1, '6 yd', '2021-05-06', '2021-05-12', NULL, 1, '2021-04-30 15:38:57', '2021-04-30 15:42:03'),
(1106, 'Ox15Yes', 2, 1, '4 yd', '2021-05-06', '2021-05-28', 'Waltet', 1, '2021-04-30 15:49:15', '2021-04-30 15:50:14'),
(1110, 'BH23asdasdsad', 2, 1, '6 yd', '2021-05-13', '2021-05-20', NULL, 9, '2021-04-30 16:39:39', '2021-04-30 16:39:39'),
(1111, 'so21333', 1, 5, '4 yd', '2021-05-06', '2021-05-07', NULL, 1, '2021-04-30 16:46:59', '2021-04-30 16:47:46'),
(1112, 'bh233453434dfsdfsdsdf', 2, 3, '4 yd', '2021-05-12', '2021-05-27', NULL, 9, '2021-04-30 17:11:52', '2021-04-30 17:11:52'),
(1113, 'bh233453434', 2, 4, '4 yd', '2021-05-19', '2021-05-27', NULL, 9, '2021-04-30 17:25:04', '2021-04-30 17:25:04'),
(1114, 'bh233453434', 2, 2, '6 yd', '2021-05-18', '2021-05-26', NULL, 9, '2021-04-30 17:33:02', '2021-04-30 17:33:02'),
(1115, 'Sp11Woo', 2, 1, '6 yd', '2021-05-06', '2021-05-18', NULL, 9, '2021-04-30 17:44:39', '2021-04-30 17:44:39'),
(1116, 'STRIPETEST123', 2, 1, '4 yd', '2021-05-06', '2021-05-10', NULL, 1, '2021-04-30 18:07:22', '2021-04-30 18:07:55'),
(1117, 'STRIPETEST999', 2, 1, '8 yd', '2021-05-06', '2021-05-07', NULL, 1, '2021-04-30 18:22:47', '2021-04-30 18:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_postal_code_info`
--

CREATE TABLE `tbl_postal_code_info` (
  `id` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  `postal_code` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_postal_code_info`
--

INSERT INTO `tbl_postal_code_info` (`id`, `county_id`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'BH23', '2021-03-25 08:56:09', '2021-03-25 08:56:09'),
(2, 1, 'BH24', '2021-03-25 08:56:33', '2021-03-25 08:56:33'),
(3, 1, 'BH25', '2021-03-25 08:56:42', '2021-03-25 08:56:42'),
(5, 1, 'GU11', '2021-03-25 08:58:20', '2021-03-25 08:58:20'),
(6, 1, 'GU12', '2021-03-25 09:05:00', '2021-03-25 09:05:00'),
(7, 1, 'GU13', '2021-03-25 09:09:39', '2021-03-25 09:09:39'),
(8, 1, 'GU14', '2021-03-25 09:09:52', '2021-03-25 09:09:52'),
(9, 1, 'GU17', '2021-03-25 09:10:07', '2021-03-25 09:10:07'),
(11, 1, 'GU30', '2021-03-25 09:10:28', '2021-03-25 09:10:28'),
(12, 1, 'GU31', '2021-03-25 09:10:40', '2021-03-25 09:10:40'),
(13, 1, 'GU32', '2021-03-25 09:10:54', '2021-03-25 09:10:54'),
(14, 1, 'GU33', '2021-03-25 09:11:06', '2021-03-25 09:11:06'),
(15, 1, 'GU34', '2021-03-25 09:11:17', '2021-03-25 09:11:17'),
(16, 1, 'GU35', '2021-03-25 09:11:33', '2021-03-25 09:11:33'),
(17, 1, 'GU46', '2021-03-25 09:11:49', '2021-03-25 09:11:49'),
(18, 1, 'PO10', '2021-03-25 09:11:58', '2021-03-25 09:11:58'),
(19, 1, 'PO11', '2021-03-25 09:12:09', '2021-03-25 09:12:09'),
(20, 1, 'PO12', '2021-03-25 09:12:20', '2021-03-25 09:12:20'),
(21, 1, 'PO13', '2021-03-25 09:12:26', '2021-03-25 09:12:26'),
(22, 1, 'PO14', '2021-03-25 09:12:33', '2021-03-25 09:12:33'),
(23, 1, 'PO15', '2021-03-25 09:12:39', '2021-03-25 09:12:39'),
(24, 1, 'PO16', '2021-03-25 09:12:51', '2021-03-25 09:12:51'),
(25, 1, 'PO17', '2021-03-25 09:12:57', '2021-03-25 09:12:57'),
(26, 1, 'PO7', '2021-03-25 09:13:03', '2021-03-25 09:13:03'),
(27, 1, 'PO8', '2021-03-25 09:13:09', '2021-03-25 09:13:09'),
(28, 1, 'PO9', '2021-03-25 09:13:17', '2021-03-25 09:13:17'),
(29, 1, 'RG19', '2021-03-25 09:13:24', '2021-03-25 09:13:24'),
(30, 1, 'RG20', '2021-03-25 09:13:32', '2021-03-25 09:13:32'),
(31, 1, 'RG21', '2021-03-25 09:13:51', '2021-03-25 09:13:51'),
(32, 1, 'RG22', '2021-03-25 09:14:06', '2021-03-25 09:14:06'),
(33, 1, 'RG23', '2021-03-25 09:14:13', '2021-03-25 09:14:13'),
(34, 1, 'RG24', '2021-03-25 09:14:21', '2021-03-25 09:14:21'),
(35, 1, 'RG25', '2021-03-25 09:14:30', '2021-03-25 09:14:30'),
(36, 1, 'RG26', '2021-03-25 09:14:35', '2021-03-25 09:14:35'),
(37, 1, 'RG27', '2021-03-25 09:14:41', '2021-03-25 09:14:41'),
(38, 1, 'RG28', '2021-03-25 09:14:49', '2021-03-25 09:14:49'),
(39, 1, 'RG29', '2021-03-25 09:14:56', '2021-03-25 09:14:56'),
(40, 1, 'RG7', '2021-03-25 09:15:03', '2021-03-25 09:15:03'),
(41, 1, 'SO16', '2021-03-25 09:15:11', '2021-03-25 09:15:11'),
(42, 1, 'SO20', '2021-03-25 09:15:17', '2021-03-25 09:15:17'),
(43, 1, 'SO21', '2021-03-25 09:15:24', '2021-03-25 09:15:24'),
(44, 1, 'SO22', '2021-03-25 09:15:29', '2021-03-25 09:15:29'),
(45, 1, 'SO23', '2021-03-25 09:15:38', '2021-03-25 09:15:38'),
(46, 1, 'SO24', '2021-03-25 09:15:45', '2021-03-25 09:15:45'),
(47, 1, 'SO30', '2021-03-25 09:15:53', '2021-03-25 09:15:53'),
(48, 1, 'SO31', '2021-03-25 09:16:00', '2021-03-25 09:16:00'),
(49, 1, 'SO32', '2021-03-25 09:16:10', '2021-03-25 09:16:10'),
(52, 1, 'SO40', '2021-03-25 09:16:42', '2021-03-25 09:16:42'),
(53, 1, 'SO41', '2021-03-25 09:16:50', '2021-03-25 09:16:50'),
(54, 1, 'SO42', '2021-03-25 09:16:55', '2021-03-25 09:16:55'),
(55, 1, 'SO43', '2021-03-25 09:17:01', '2021-03-25 09:17:01'),
(56, 1, 'SO45', '2021-03-25 09:17:07', '2021-03-25 09:17:07'),
(57, 1, 'SO50', '2021-03-25 09:17:13', '2021-03-25 09:17:13'),
(58, 1, 'SO51', '2021-03-25 09:17:20', '2021-03-25 09:17:20'),
(59, 1, 'SO52', '2021-03-25 09:17:27', '2021-03-25 09:17:27'),
(60, 1, 'SO53', '2021-03-25 09:17:36', '2021-03-25 09:17:36'),
(61, 1, 'SP10', '2021-03-25 09:17:43', '2021-03-25 09:17:43'),
(62, 1, 'SP11', '2021-03-25 09:17:54', '2021-03-25 09:17:54'),
(63, 1, 'SP5', '2021-03-25 09:18:32', '2021-03-25 09:18:32'),
(64, 1, 'SP6', '2021-03-25 09:18:39', '2021-03-25 09:18:39'),
(65, 1, 'SP9', '2021-03-25 09:18:47', '2021-03-25 09:18:47'),
(66, 2, 'BA22', '2021-03-25 09:20:15', '2021-03-25 09:20:15'),
(67, 2, 'BH16', '2021-03-25 09:20:22', '2021-03-25 09:20:22'),
(68, 2, 'BH19', '2021-03-25 09:20:27', '2021-03-25 09:20:27'),
(69, 2, 'BH20', '2021-03-25 09:20:33', '2021-03-25 09:20:33'),
(70, 2, 'BH21', '2021-03-25 09:20:39', '2021-03-25 09:20:39'),
(71, 2, 'BH22', '2021-03-25 09:20:46', '2021-03-25 09:20:46'),
(72, 2, 'BH23', '2021-03-25 09:20:51', '2021-03-25 09:20:51'),
(73, 2, 'BH24', '2021-03-25 09:20:59', '2021-03-25 09:20:59'),
(74, 2, 'BH31', '2021-03-25 09:21:07', '2021-03-25 09:21:07'),
(75, 2, 'DT1', '2021-03-25 09:21:14', '2021-03-25 09:21:14'),
(76, 2, 'DT10', '2021-03-25 09:21:21', '2021-03-25 09:21:21'),
(77, 2, 'DT11', '2021-03-25 09:21:29', '2021-03-25 09:21:29'),
(78, 2, 'DT2', '2021-03-25 09:21:37', '2021-03-25 09:21:37'),
(79, 2, 'DT3', '2021-03-25 09:21:48', '2021-03-25 09:21:48'),
(80, 2, 'DT4', '2021-03-25 09:22:14', '2021-03-25 09:22:14'),
(81, 2, 'DT5', '2021-03-25 09:22:31', '2021-03-25 09:22:31'),
(82, 2, 'DT6', '2021-03-25 09:22:41', '2021-03-25 09:22:41'),
(83, 2, 'DT7', '2021-03-25 09:22:48', '2021-03-25 09:22:48'),
(84, 2, 'DT8', '2021-03-25 09:22:58', '2021-03-25 09:22:58'),
(85, 2, 'DT9', '2021-03-25 09:23:04', '2021-03-25 09:23:04'),
(86, 2, 'SP5', '2021-03-25 09:23:09', '2021-03-25 09:23:09'),
(87, 2, 'SP6', '2021-03-25 09:23:14', '2021-03-25 09:23:14'),
(88, 2, 'SP7', '2021-03-25 09:23:21', '2021-03-25 09:23:21'),
(89, 2, 'SP8', '2021-03-25 09:23:26', '2021-03-25 09:23:26'),
(90, 2, 'TA20', '2021-03-25 09:23:31', '2021-03-25 09:23:31'),
(91, 3, 'BA12', '2021-03-25 09:24:47', '2021-03-25 09:24:47'),
(92, 3, 'BA13', '2021-03-25 09:24:52', '2021-03-25 09:24:52'),
(93, 3, 'BA14', '2021-03-25 09:24:59', '2021-03-25 09:24:59'),
(94, 3, 'BA15', '2021-03-25 09:25:05', '2021-03-25 09:25:05'),
(95, 3, 'GL8', '2021-03-25 09:28:38', '2021-03-25 09:28:38'),
(96, 3, 'RG17', '2021-03-25 09:28:48', '2021-03-25 09:28:48'),
(97, 3, 'SN10', '2021-03-25 09:28:56', '2021-03-25 09:28:56'),
(98, 3, 'SN11', '2021-03-25 09:29:02', '2021-03-25 09:29:02'),
(99, 3, 'SN12', '2021-03-25 09:29:10', '2021-03-25 09:29:10'),
(100, 3, 'SN13', '2021-03-25 09:29:18', '2021-03-25 09:29:18'),
(101, 3, 'SN14', '2021-03-25 09:29:25', '2021-03-25 09:29:25'),
(102, 3, 'SN15', '2021-03-25 09:29:32', '2021-03-25 09:29:32'),
(103, 3, 'SN16', '2021-03-25 09:29:38', '2021-03-25 09:29:38'),
(104, 3, 'SN4', '2021-03-25 09:29:43', '2021-03-25 09:29:43'),
(105, 3, 'SN5', '2021-03-25 09:29:49', '2021-03-25 09:29:49'),
(106, 3, 'SN6', '2021-03-25 09:29:55', '2021-03-25 09:29:55'),
(107, 3, 'SN8', '2021-03-25 09:30:03', '2021-03-25 09:30:03'),
(108, 3, 'SN9', '2021-03-25 09:30:09', '2021-03-25 09:30:09'),
(109, 3, 'SP1', '2021-03-25 09:30:15', '2021-03-25 09:30:15'),
(110, 3, 'SP11', '2021-03-25 09:30:20', '2021-03-25 09:30:20'),
(111, 3, 'SP2', '2021-03-25 09:30:25', '2021-03-25 09:30:25'),
(112, 3, 'SP3', '2021-03-25 09:30:30', '2021-03-25 09:30:30'),
(113, 3, 'SP4', '2021-03-25 09:30:35', '2021-03-25 09:30:35'),
(114, 3, 'SP5', '2021-03-25 09:30:41', '2021-03-25 09:30:41'),
(115, 3, 'SP7', '2021-03-25 09:30:47', '2021-03-25 09:30:47'),
(116, 3, 'SP9', '2021-03-25 09:30:55', '2021-03-25 09:30:55'),
(117, 4, 'CR3', '2021-03-25 09:38:55', '2021-03-25 09:38:55'),
(118, 4, 'CR5', '2021-03-25 09:39:04', '2021-03-25 09:39:04'),
(119, 4, 'CR6', '2021-03-25 09:39:10', '2021-03-25 09:39:10'),
(120, 4, 'GU1', '2021-03-25 09:39:18', '2021-03-25 09:39:18'),
(121, 4, 'GU10', '2021-03-25 09:39:24', '2021-03-25 09:39:24'),
(122, 4, 'GU12', '2021-03-25 09:39:29', '2021-03-25 09:39:29'),
(123, 4, 'GU15', '2021-03-25 09:39:35', '2021-03-25 09:39:35'),
(124, 4, 'GU16', '2021-03-25 09:39:43', '2021-03-25 09:39:43'),
(125, 4, 'GU18', '2021-03-25 09:39:48', '2021-03-25 09:39:48'),
(126, 4, 'GU19', '2021-03-25 09:39:54', '2021-03-25 09:39:54'),
(127, 4, 'GU2', '2021-03-25 09:39:59', '2021-03-25 09:39:59'),
(128, 4, 'GU20', '2021-03-25 09:40:04', '2021-03-25 09:40:04'),
(129, 4, 'GU21', '2021-03-25 09:40:09', '2021-03-25 09:40:09'),
(130, 4, 'GU22', '2021-03-25 09:40:15', '2021-03-25 09:40:15'),
(131, 4, 'GU23', '2021-03-25 09:40:20', '2021-03-25 09:40:20'),
(132, 4, 'GU24', '2021-03-25 09:40:26', '2021-03-25 09:40:26'),
(133, 4, 'GU25', '2021-03-25 09:40:31', '2021-03-25 09:40:31'),
(135, 4, 'GU27', '2021-03-25 09:40:41', '2021-03-25 09:40:41'),
(136, 4, 'GU3', '2021-03-25 09:40:47', '2021-03-25 09:40:47'),
(137, 4, 'GU4', '2021-03-25 09:40:53', '2021-03-25 09:40:53'),
(138, 4, 'GU5', '2021-03-25 09:40:58', '2021-03-25 09:40:58'),
(139, 4, 'GU6', '2021-03-25 09:41:03', '2021-03-25 09:41:03'),
(140, 4, 'GU7', '2021-03-25 09:41:08', '2021-03-25 09:41:08'),
(141, 4, 'GU8', '2021-03-25 09:41:14', '2021-03-25 09:41:14'),
(142, 4, 'GU9', '2021-03-25 09:41:19', '2021-03-25 09:41:19'),
(143, 4, 'KT10', '2021-03-25 09:41:27', '2021-03-25 09:41:27'),
(144, 4, 'KT11', '2021-03-25 09:41:36', '2021-03-25 09:41:36'),
(145, 4, 'KT12', '2021-03-25 09:41:43', '2021-03-25 09:41:43'),
(146, 4, 'KT13', '2021-03-25 09:41:50', '2021-03-25 09:41:50'),
(147, 4, 'KT14', '2021-03-25 09:41:56', '2021-03-25 09:41:56'),
(148, 4, 'KT15', '2021-03-25 09:42:01', '2021-03-25 09:42:01'),
(149, 4, 'KT16', '2021-03-25 09:43:54', '2021-03-25 09:43:54'),
(151, 4, 'KT17', '2021-03-25 09:44:05', '2021-03-25 09:44:05'),
(152, 4, 'KT18', '2021-03-25 09:44:15', '2021-03-25 09:44:15'),
(153, 4, 'KT20', '2021-03-25 09:44:40', '2021-03-25 09:44:40'),
(154, 4, 'KT21', '2021-03-25 09:45:05', '2021-03-25 09:45:05'),
(155, 4, 'KT22', '2021-03-25 09:45:24', '2021-03-25 09:45:24'),
(156, 4, 'KT23', '2021-03-25 09:45:32', '2021-03-25 09:45:32'),
(157, 4, 'KT24', '2021-03-25 09:45:41', '2021-03-25 09:45:41'),
(158, 4, 'KT7', '2021-03-25 09:45:49', '2021-03-25 09:45:49'),
(159, 4, 'KT8', '2021-03-25 09:45:58', '2021-03-25 09:45:58'),
(160, 4, 'RH1', '2021-03-25 09:46:04', '2021-03-25 09:46:04'),
(161, 4, 'RH10', '2021-03-25 09:46:10', '2021-03-25 09:46:10'),
(162, 4, 'RH12', '2021-03-25 09:46:17', '2021-03-25 09:46:17'),
(163, 4, 'RH19', '2021-03-25 09:46:29', '2021-03-25 09:46:29'),
(164, 4, 'RH2', '2021-03-25 09:46:36', '2021-03-25 09:46:36'),
(165, 4, 'RH3', '2021-03-25 09:46:46', '2021-03-25 09:46:46'),
(166, 4, 'RH4', '2021-03-25 09:46:52', '2021-03-25 09:46:52'),
(167, 4, 'RH5', '2021-03-25 09:46:58', '2021-03-25 09:46:58'),
(168, 4, 'RH6', '2021-03-25 09:47:07', '2021-03-25 09:47:07'),
(169, 4, 'RH7', '2021-03-25 09:47:18', '2021-03-25 09:47:18'),
(170, 4, 'RH8', '2021-03-25 09:47:23', '2021-03-25 09:47:23'),
(171, 4, 'RH9', '2021-03-25 09:47:29', '2021-03-25 09:47:29'),
(172, 4, 'SM7', '2021-03-25 09:47:38', '2021-03-25 09:47:38'),
(173, 4, 'TN16', '2021-03-25 09:47:46', '2021-03-25 09:47:46'),
(174, 4, 'TN8', '2021-03-25 09:47:52', '2021-03-25 09:47:52'),
(175, 4, 'TW15', '2021-03-25 09:48:01', '2021-03-25 09:48:01'),
(176, 4, 'TW16', '2021-03-25 09:48:10', '2021-03-25 09:48:10'),
(177, 4, 'TW17', '2021-03-25 09:48:19', '2021-03-25 09:48:19'),
(178, 4, 'TW18', '2021-03-25 09:48:25', '2021-03-25 09:48:25'),
(179, 4, 'TW19', '2021-03-25 09:48:31', '2021-03-25 09:48:31'),
(180, 4, 'TW20', '2021-03-25 09:48:37', '2021-03-25 09:48:37'),
(181, 5, 'BN11', '2021-03-25 09:49:45', '2021-03-25 09:49:45'),
(182, 5, 'BN12', '2021-03-25 09:49:51', '2021-03-25 09:49:51'),
(183, 5, 'BN13', '2021-03-25 09:49:56', '2021-03-25 09:49:56'),
(184, 5, 'BN14', '2021-03-25 09:50:01', '2021-03-25 09:50:01'),
(185, 5, 'BN15', '2021-03-25 09:50:06', '2021-03-25 09:50:06'),
(186, 5, 'BN16', '2021-03-25 09:50:12', '2021-03-25 09:50:12'),
(187, 5, 'BN17', '2021-03-25 09:50:19', '2021-03-25 09:50:19'),
(188, 5, 'BN18', '2021-03-25 09:50:26', '2021-03-25 09:50:26'),
(189, 5, 'BN42', '2021-03-25 09:50:31', '2021-03-25 09:50:31'),
(190, 5, 'BN43', '2021-03-25 09:50:36', '2021-03-25 09:50:36'),
(191, 5, 'BN44', '2021-03-25 09:50:42', '2021-03-25 09:50:42'),
(192, 5, 'BN45', '2021-03-25 09:50:50', '2021-03-25 09:50:50'),
(193, 5, 'BN5', '2021-03-25 09:50:59', '2021-03-25 09:50:59'),
(194, 5, 'BN6', '2021-03-25 09:55:03', '2021-03-25 09:55:03'),
(195, 5, 'GU27', '2021-03-25 09:55:10', '2021-03-25 09:55:10'),
(196, 5, 'GU28', '2021-03-25 09:55:16', '2021-03-25 09:55:16'),
(197, 5, 'GU29', '2021-03-25 09:55:24', '2021-03-25 09:55:24'),
(201, 5, 'GU8', '2021-03-25 09:55:46', '2021-03-25 09:55:46'),
(203, 5, 'PO18', '2021-03-25 09:55:56', '2021-03-25 09:55:56'),
(204, 5, 'PO19', '2021-03-25 09:56:02', '2021-03-25 09:56:02'),
(205, 5, 'PO20', '2021-03-25 09:56:07', '2021-03-25 09:56:07'),
(206, 5, 'PO21', '2021-03-25 09:56:11', '2021-03-25 09:56:11'),
(207, 5, 'PO22', '2021-03-25 09:56:16', '2021-03-25 09:56:16'),
(209, 5, 'RH10', '2021-03-25 09:56:25', '2021-03-25 09:56:25'),
(210, 5, 'RH11', '2021-03-25 09:56:31', '2021-03-25 09:56:31'),
(211, 5, 'RH12', '2021-03-25 09:56:36', '2021-03-25 09:56:36'),
(212, 5, 'RH13', '2021-03-25 09:56:42', '2021-03-25 09:56:42'),
(213, 5, 'RH14', '2021-03-25 09:56:50', '2021-03-25 09:56:50'),
(214, 5, 'RH15', '2021-03-25 09:57:04', '2021-03-25 09:57:04'),
(215, 5, 'RH16', '2021-03-25 09:57:10', '2021-03-25 09:57:10'),
(216, 5, 'RH17', '2021-03-25 09:57:16', '2021-03-25 09:57:16'),
(217, 5, 'RH18', '2021-03-25 09:58:43', '2021-03-25 09:58:43'),
(218, 5, 'RH19', '2021-03-25 09:58:49', '2021-03-25 09:58:49'),
(219, 5, 'RH20', '2021-03-25 09:58:53', '2021-03-25 09:58:53'),
(220, 5, 'RH6', '2021-03-25 09:58:57', '2021-03-25 09:58:57'),
(221, 1, 'SO14', '2021-04-02 21:09:13', '2021-04-02 21:09:13'),
(222, 1, 'SO15', '2021-04-02 21:09:24', '2021-04-02 21:09:24'),
(223, 1, 'SO17', '2021-04-02 21:09:34', '2021-04-02 21:09:34'),
(224, 1, 'SO18', '2021-04-02 21:09:47', '2021-04-02 21:09:47'),
(225, 1, 'PO1', '2021-04-02 21:10:19', '2021-04-02 21:10:19'),
(226, 1, 'PO20', '2021-04-02 21:10:38', '2021-04-02 21:10:38'),
(227, 1, 'PO21', '2021-04-02 21:10:45', '2021-04-02 21:10:45'),
(228, 1, 'PO22', '2021-04-02 21:10:50', '2021-04-02 21:10:50'),
(229, 1, 'PO4', '2021-04-02 21:11:12', '2021-04-02 21:11:12'),
(230, 1, 'PO5', '2021-04-02 21:11:16', '2021-04-02 21:11:16'),
(231, 1, 'PO6', '2021-04-02 21:11:21', '2021-04-02 21:11:21'),
(232, 1, 'SO19', '2021-04-03 01:49:02', '2021-04-03 01:49:02'),
(233, 6, 'MK18', '2021-04-26 14:04:30', '2021-04-26 14:04:30'),
(234, 6, 'OX1', '2021-04-26 14:05:30', '2021-04-26 14:05:30'),
(235, 6, 'OX10', '2021-04-26 14:05:53', '2021-04-26 14:05:53'),
(236, 6, 'OX11', '2021-04-26 14:05:57', '2021-04-26 14:05:57'),
(237, 6, 'OX12', '2021-04-26 14:06:02', '2021-04-26 14:06:02'),
(238, 6, 'OX13', '2021-04-26 14:06:07', '2021-04-26 14:06:07'),
(239, 6, 'OX14', '2021-04-26 14:06:12', '2021-04-26 14:06:12'),
(240, 6, 'OX15', '2021-04-26 14:06:17', '2021-04-26 14:06:17'),
(241, 6, 'OX16', '2021-04-26 14:06:21', '2021-04-26 14:06:21'),
(242, 6, 'OX17', '2021-04-26 14:06:28', '2021-04-26 14:06:28'),
(243, 6, 'OX18', '2021-04-26 14:06:35', '2021-04-26 14:06:35'),
(244, 6, 'OX2', '2021-04-26 14:06:51', '2021-04-26 14:06:51'),
(245, 6, 'OX20', '2021-04-26 14:06:56', '2021-04-26 14:06:56'),
(246, 6, 'OX3', '2021-04-26 14:07:07', '2021-04-26 14:07:07'),
(247, 6, 'OX33', '2021-04-26 14:07:11', '2021-04-26 14:07:11'),
(248, 6, 'OX4', '2021-04-26 14:07:23', '2021-04-26 14:07:23'),
(249, 6, 'OX44', '2021-04-26 14:07:29', '2021-04-26 14:07:29'),
(250, 6, 'OX5', '2021-04-26 14:07:41', '2021-04-26 14:07:41'),
(251, 6, 'OX6', '2021-04-26 14:07:45', '2021-04-26 14:07:45'),
(252, 6, 'OX7', '2021-04-26 14:07:50', '2021-04-26 14:07:50'),
(253, 6, 'OX8', '2021-04-26 14:07:55', '2021-04-26 14:07:55'),
(254, 6, 'OX9', '2021-04-26 14:07:59', '2021-04-26 14:07:59'),
(255, 6, 'RG8', '2021-04-26 14:09:01', '2021-04-26 14:09:01'),
(256, 6, 'RG9', '2021-04-26 14:09:35', '2021-04-26 14:09:35'),
(257, 6, 'SN7', '2021-04-26 14:10:24', '2021-04-26 14:10:24'),
(258, 7, 'STRIPETEST', '2021-04-26 14:31:39', '2021-04-26 14:31:39'),
(259, 9, 'GL1', '2021-04-27 15:34:15', '2021-04-27 15:34:15'),
(260, 9, 'GL10', '2021-04-27 15:34:30', '2021-04-27 15:34:30'),
(261, 9, 'GL11', '2021-04-27 15:34:34', '2021-04-27 15:34:34'),
(262, 9, 'GL12', '2021-04-27 15:34:39', '2021-04-27 15:34:39'),
(263, 9, 'GL13', '2021-04-27 15:34:44', '2021-04-27 15:34:44'),
(264, 9, 'GL14', '2021-04-27 15:34:49', '2021-04-27 15:34:49'),
(265, 9, 'GL15', '2021-04-27 15:34:54', '2021-04-27 15:34:54'),
(266, 9, 'GL16', '2021-04-27 15:34:58', '2021-04-27 15:34:58'),
(267, 9, 'GL17', '2021-04-27 15:35:05', '2021-04-27 15:35:05'),
(268, 9, 'GL18', '2021-04-27 15:35:11', '2021-04-27 15:35:11'),
(269, 9, 'GL19', '2021-04-27 15:35:15', '2021-04-27 15:35:15'),
(270, 9, 'GL20', '2021-04-27 15:35:21', '2021-04-27 15:35:21'),
(271, 9, 'GL2', '2021-04-27 15:36:08', '2021-04-27 15:36:08'),
(272, 9, 'GL3', '2021-04-27 15:36:12', '2021-04-27 15:36:12'),
(273, 9, 'GL4', '2021-04-27 15:36:47', '2021-04-27 15:36:47'),
(274, 9, 'GL5', '2021-04-27 15:36:50', '2021-04-27 15:36:50'),
(275, 9, 'GL6', '2021-04-27 15:36:56', '2021-04-27 15:36:56'),
(276, 9, 'GL7', '2021-04-27 15:37:00', '2021-04-27 15:37:00'),
(277, 9, 'GL8', '2021-04-27 15:37:07', '2021-04-27 15:37:07'),
(278, 9, 'GL9', '2021-04-27 15:37:11', '2021-04-27 15:37:11'),
(279, 9, 'GL50', '2021-04-27 15:38:46', '2021-04-27 15:38:46'),
(280, 9, 'GL51', '2021-04-27 15:38:50', '2021-04-27 15:38:50'),
(281, 9, 'GL52', '2021-04-27 15:38:55', '2021-04-27 15:38:55'),
(282, 9, 'GL53', '2021-04-27 15:39:01', '2021-04-27 15:39:01'),
(283, 9, 'GL54', '2021-04-27 15:39:06', '2021-04-27 15:39:06'),
(284, 9, 'GL55', '2021-04-27 15:39:10', '2021-04-27 15:39:10'),
(285, 9, 'GL56', '2021-04-27 15:39:14', '2021-04-27 15:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_type_info`
--

CREATE TABLE `tbl_service_type_info` (
  `id` int(11) NOT NULL,
  `service` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service_type_info`
--

INSERT INTO `tbl_service_type_info` (`id`, `service`, `created_at`, `updated_at`) VALUES
(1, 'General/Mixed Waste', '2021-03-25 09:37:06', '2021-03-25 09:37:06'),
(2, 'Plasterboard', '2021-03-25 09:37:20', '2021-03-25 09:37:20'),
(3, 'Wood', '2021-03-25 09:37:28', '2021-03-25 09:37:28'),
(4, 'Inert', '2021-03-25 09:37:38', '2021-03-25 09:37:38'),
(5, 'Hardcore/Brick Rubble', '2021-03-25 09:37:48', '2021-03-25 09:37:48'),
(6, 'Green Waste', '2021-03-25 09:37:58', '2021-03-25 09:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vat_history_info`
--

CREATE TABLE `tbl_vat_history_info` (
  `id` int(11) NOT NULL,
  `vat` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vat_history_info`
--

INSERT INTO `tbl_vat_history_info` (`id`, `vat`, `created_at`, `updated_at`) VALUES
(2, 22, '2021-03-25 10:14:44', '2021-03-25 10:14:44'),
(3, 20, '2021-03-25 10:15:40', '2021-03-25 10:15:40'),
(4, 15, '2021-03-25 10:15:59', '2021-03-25 10:15:59'),
(5, 20, '2021-03-25 10:16:11', '2021-03-25 10:16:11'),
(6, 13, '2021-04-13 14:10:34', '2021-04-13 14:10:34'),
(7, 20, '2021-04-13 14:10:45', '2021-04-13 14:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vat_setup_info`
--

CREATE TABLE `tbl_vat_setup_info` (
  `id` int(11) NOT NULL,
  `vat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vat_setup_info`
--

INSERT INTO `tbl_vat_setup_info` (`id`, `vat`) VALUES
(1, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_counties_info`
--
ALTER TABLE `tbl_counties_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_counties_pricing_info`
--
ALTER TABLE `tbl_counties_pricing_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_holidays_info`
--
ALTER TABLE `tbl_holidays_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_billing_info`
--
ALTER TABLE `tbl_order_billing_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_customer_detail_info`
--
ALTER TABLE `tbl_order_customer_detail_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_info`
--
ALTER TABLE `tbl_order_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_postal_code_info`
--
ALTER TABLE `tbl_postal_code_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_type_info`
--
ALTER TABLE `tbl_service_type_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vat_history_info`
--
ALTER TABLE `tbl_vat_history_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vat_setup_info`
--
ALTER TABLE `tbl_vat_setup_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_counties_info`
--
ALTER TABLE `tbl_counties_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_counties_pricing_info`
--
ALTER TABLE `tbl_counties_pricing_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_holidays_info`
--
ALTER TABLE `tbl_holidays_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_order_billing_info`
--
ALTER TABLE `tbl_order_billing_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `tbl_order_customer_detail_info`
--
ALTER TABLE `tbl_order_customer_detail_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `tbl_order_info`
--
ALTER TABLE `tbl_order_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1118;

--
-- AUTO_INCREMENT for table `tbl_postal_code_info`
--
ALTER TABLE `tbl_postal_code_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `tbl_service_type_info`
--
ALTER TABLE `tbl_service_type_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_vat_history_info`
--
ALTER TABLE `tbl_vat_history_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_vat_setup_info`
--
ALTER TABLE `tbl_vat_setup_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
