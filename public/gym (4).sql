-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2024 at 10:54 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `url`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Banner 1', '1721146191.jpg', 'www.google.com', 1, '2024-07-16 10:06:35', '2024-07-16 10:39:51', NULL),
(2, 'Banner 2', '1721147443.jpg', 'www.google.com', 1, '2024-07-16 10:40:13', '2024-07-16 11:00:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carosels`
--

DROP TABLE IF EXISTS `carosels`;
CREATE TABLE IF NOT EXISTS `carosels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Category 1', '1683652349.jpg', 1, '2023-05-09 09:58:53', '2024-03-09 12:13:50', NULL),
(2, 'Category 2', '1683649729.jpg', 1, '2023-05-09 10:58:49', '2023-05-09 11:42:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int DEFAULT NULL,
  `shortname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonecode` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `shortname`, `name`, `phonecode`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AF', 'Afghanistan', 93, '2023-04-30 17:29:46', NULL, NULL),
(2, 'AL', 'Albania', 355, '2023-04-30 17:29:46', NULL, NULL),
(3, 'DZ', 'Algeria', 213, '2023-04-30 17:29:46', NULL, NULL),
(4, 'AS', 'American Samoa', 1684, '2023-04-30 17:29:46', NULL, NULL),
(5, 'AD', 'Andorra', 376, '2023-04-30 17:29:46', NULL, NULL),
(6, 'AO', 'Angola', 244, '2023-04-30 17:29:46', NULL, NULL),
(7, 'AI', 'Anguilla', 1264, '2023-04-30 17:29:46', NULL, NULL),
(8, 'AQ', 'Antarctica', 0, '2023-04-30 17:29:46', NULL, NULL),
(9, 'AG', 'Antigua And Barbuda', 1268, '2023-04-30 17:29:46', NULL, NULL),
(10, 'AR', 'Argentina', 54, '2023-04-30 17:29:46', NULL, NULL),
(11, 'AM', 'Armenia', 374, '2023-04-30 17:29:46', NULL, NULL),
(12, 'AW', 'Aruba', 297, '2023-04-30 17:29:46', NULL, NULL),
(13, 'AU', 'Australia', 61, '2023-04-30 17:29:46', NULL, NULL),
(14, 'AT', 'Austria', 43, '2023-04-30 17:29:46', NULL, NULL),
(15, 'AZ', 'Azerbaijan', 994, '2023-04-30 17:29:46', NULL, NULL),
(16, 'BS', 'Bahamas The', 1242, '2023-04-30 17:29:46', NULL, NULL),
(17, 'BH', 'Bahrain', 973, '2023-04-30 17:29:46', NULL, NULL),
(18, 'BD', 'Bangladesh', 880, '2023-04-30 17:29:46', NULL, NULL),
(19, 'BB', 'Barbados', 1246, '2023-04-30 17:29:46', NULL, NULL),
(20, 'BY', 'Belarus', 375, '2023-04-30 17:29:46', NULL, NULL),
(21, 'BE', 'Belgium', 32, '2023-04-30 17:29:46', NULL, NULL),
(22, 'BZ', 'Belize', 501, '2023-04-30 17:29:46', NULL, NULL),
(23, 'BJ', 'Benin', 229, '2023-04-30 17:29:46', NULL, NULL),
(24, 'BM', 'Bermuda', 1441, '2023-04-30 17:29:46', NULL, NULL),
(25, 'BT', 'Bhutan', 975, '2023-04-30 17:29:46', NULL, NULL),
(26, 'BO', 'Bolivia', 591, '2023-04-30 17:29:46', NULL, NULL),
(27, 'BA', 'Bosnia and Herzegovina', 387, '2023-04-30 17:29:46', NULL, NULL),
(28, 'BW', 'Botswana', 267, '2023-04-30 17:29:46', NULL, NULL),
(29, 'BV', 'Bouvet Island', 0, '2023-04-30 17:29:46', NULL, NULL),
(30, 'BR', 'Brazil', 55, '2023-04-30 17:29:46', NULL, NULL),
(31, 'IO', 'British Indian Ocean Territory', 246, '2023-04-30 17:29:46', NULL, NULL),
(32, 'BN', 'Brunei', 673, '2023-04-30 17:29:46', NULL, NULL),
(33, 'BG', 'Bulgaria', 359, '2023-04-30 17:29:46', NULL, NULL),
(34, 'BF', 'Burkina Faso', 226, '2023-04-30 17:29:46', NULL, NULL),
(35, 'BI', 'Burundi', 257, '2023-04-30 17:29:46', NULL, NULL),
(36, 'KH', 'Cambodia', 855, '2023-04-30 17:29:46', NULL, NULL),
(37, 'CM', 'Cameroon', 237, '2023-04-30 17:29:46', NULL, NULL),
(38, 'CA', 'Canada', 1, '2023-04-30 17:29:46', NULL, NULL),
(39, 'CV', 'Cape Verde', 238, '2023-04-30 17:29:46', NULL, NULL),
(40, 'KY', 'Cayman Islands', 1345, '2023-04-30 17:29:46', NULL, NULL),
(41, 'CF', 'Central African Republic', 236, '2023-04-30 17:29:46', NULL, NULL),
(42, 'TD', 'Chad', 235, '2023-04-30 17:29:46', NULL, NULL),
(43, 'CL', 'Chile', 56, '2023-04-30 17:29:46', NULL, NULL),
(44, 'CN', 'China', 86, '2023-04-30 17:29:46', NULL, NULL),
(45, 'CX', 'Christmas Island', 61, '2023-04-30 17:29:46', NULL, NULL),
(46, 'CC', 'Cocos (Keeling) Islands', 672, '2023-04-30 17:29:46', NULL, NULL),
(47, 'CO', 'Colombia', 57, '2023-04-30 17:29:46', NULL, NULL),
(48, 'KM', 'Comoros', 269, '2023-04-30 17:29:46', NULL, NULL),
(49, 'CG', 'Republic Of The Congo', 242, '2023-04-30 17:29:46', NULL, NULL),
(50, 'CD', 'Democratic Republic Of The Congo', 242, '2023-04-30 17:29:46', NULL, NULL),
(51, 'CK', 'Cook Islands', 682, '2023-04-30 17:29:46', NULL, NULL),
(52, 'CR', 'Costa Rica', 506, '2023-04-30 17:29:46', NULL, NULL),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, '2023-04-30 17:29:46', NULL, NULL),
(54, 'HR', 'Croatia (Hrvatska)', 385, '2023-04-30 17:29:46', NULL, NULL),
(55, 'CU', 'Cuba', 53, '2023-04-30 17:29:46', NULL, NULL),
(56, 'CY', 'Cyprus', 357, '2023-04-30 17:29:46', NULL, NULL),
(57, 'CZ', 'Czech Republic', 420, '2023-04-30 17:29:46', NULL, NULL),
(58, 'DK', 'Denmark', 45, '2023-04-30 17:29:46', NULL, NULL),
(59, 'DJ', 'Djibouti', 253, '2023-04-30 17:29:46', NULL, NULL),
(60, 'DM', 'Dominica', 1767, '2023-04-30 17:29:46', NULL, NULL),
(61, 'DO', 'Dominican Republic', 1809, '2023-04-30 17:29:46', NULL, NULL),
(62, 'TP', 'East Timor', 670, '2023-04-30 17:29:46', NULL, NULL),
(63, 'EC', 'Ecuador', 593, '2023-04-30 17:29:46', NULL, NULL),
(64, 'EG', 'Egypt', 20, '2023-04-30 17:29:46', NULL, NULL),
(65, 'SV', 'El Salvador', 503, '2023-04-30 17:29:46', NULL, NULL),
(66, 'GQ', 'Equatorial Guinea', 240, '2023-04-30 17:29:46', NULL, NULL),
(67, 'ER', 'Eritrea', 291, '2023-04-30 17:29:46', NULL, NULL),
(68, 'EE', 'Estonia', 372, '2023-04-30 17:29:46', NULL, NULL),
(69, 'ET', 'Ethiopia', 251, '2023-04-30 17:29:46', NULL, NULL),
(70, 'XA', 'External Territories of Australia', 61, '2023-04-30 17:29:46', NULL, NULL),
(71, 'FK', 'Falkland Islands', 500, '2023-04-30 17:29:46', NULL, NULL),
(72, 'FO', 'Faroe Islands', 298, '2023-04-30 17:29:46', NULL, NULL),
(73, 'FJ', 'Fiji Islands', 679, '2023-04-30 17:29:46', NULL, NULL),
(74, 'FI', 'Finland', 358, '2023-04-30 17:29:46', NULL, NULL),
(75, 'FR', 'France', 33, '2023-04-30 17:29:46', NULL, NULL),
(76, 'GF', 'French Guiana', 594, '2023-04-30 17:29:46', NULL, NULL),
(77, 'PF', 'French Polynesia', 689, '2023-04-30 17:29:46', NULL, NULL),
(78, 'TF', 'French Southern Territories', 0, '2023-04-30 17:29:46', NULL, NULL),
(79, 'GA', 'Gabon', 241, '2023-04-30 17:29:46', NULL, NULL),
(80, 'GM', 'Gambia The', 220, '2023-04-30 17:29:46', NULL, NULL),
(81, 'GE', 'Georgia', 995, '2023-04-30 17:29:46', NULL, NULL),
(82, 'DE', 'Germany', 49, '2023-04-30 17:29:46', NULL, NULL),
(83, 'GH', 'Ghana', 233, '2023-04-30 17:29:46', NULL, NULL),
(84, 'GI', 'Gibraltar', 350, '2023-04-30 17:29:46', NULL, NULL),
(85, 'GR', 'Greece', 30, '2023-04-30 17:29:46', NULL, NULL),
(86, 'GL', 'Greenland', 299, '2023-04-30 17:29:46', NULL, NULL),
(87, 'GD', 'Grenada', 1473, '2023-04-30 17:29:46', NULL, NULL),
(88, 'GP', 'Guadeloupe', 590, '2023-04-30 17:29:46', NULL, NULL),
(89, 'GU', 'Guam', 1671, '2023-04-30 17:29:46', NULL, NULL),
(90, 'GT', 'Guatemala', 502, '2023-04-30 17:29:46', NULL, NULL),
(91, 'XU', 'Guernsey and Alderney', 44, '2023-04-30 17:29:46', NULL, NULL),
(92, 'GN', 'Guinea', 224, '2023-04-30 17:29:46', NULL, NULL),
(93, 'GW', 'Guinea-Bissau', 245, '2023-04-30 17:29:46', NULL, NULL),
(94, 'GY', 'Guyana', 592, '2023-04-30 17:29:46', NULL, NULL),
(95, 'HT', 'Haiti', 509, '2023-04-30 17:29:46', NULL, NULL),
(96, 'HM', 'Heard and McDonald Islands', 0, '2023-04-30 17:29:46', NULL, NULL),
(97, 'HN', 'Honduras', 504, '2023-04-30 17:29:46', NULL, NULL),
(98, 'HK', 'Hong Kong S.A.R.', 852, '2023-04-30 17:29:46', NULL, NULL),
(99, 'HU', 'Hungary', 36, '2023-04-30 17:29:46', NULL, NULL),
(100, 'IS', 'Iceland', 354, '2023-04-30 17:29:46', NULL, NULL),
(101, 'IN', 'India', 91, '2023-04-30 17:29:46', NULL, NULL),
(102, 'ID', 'Indonesia', 62, '2023-04-30 17:29:46', NULL, NULL),
(103, 'IR', 'Iran', 98, '2023-04-30 17:29:46', NULL, NULL),
(104, 'IQ', 'Iraq', 964, '2023-04-30 17:29:46', NULL, NULL),
(105, 'IE', 'Ireland', 353, '2023-04-30 17:29:46', NULL, NULL),
(106, 'IL', 'Israel', 972, '2023-04-30 17:29:46', NULL, NULL),
(107, 'IT', 'Italy', 39, '2023-04-30 17:29:46', NULL, NULL),
(108, 'JM', 'Jamaica', 1876, '2023-04-30 17:29:46', NULL, NULL),
(109, 'JP', 'Japan', 81, '2023-04-30 17:29:46', NULL, NULL),
(110, 'XJ', 'Jersey', 44, '2023-04-30 17:29:46', NULL, NULL),
(111, 'JO', 'Jordan', 962, '2023-04-30 17:29:46', NULL, NULL),
(112, 'KZ', 'Kazakhstan', 7, '2023-04-30 17:29:46', NULL, NULL),
(113, 'KE', 'Kenya', 254, '2023-04-30 17:29:46', NULL, NULL),
(114, 'KI', 'Kiribati', 686, '2023-04-30 17:29:46', NULL, NULL),
(115, 'KP', 'Korea North', 850, '2023-04-30 17:29:46', NULL, NULL),
(116, 'KR', 'Korea South', 82, '2023-04-30 17:29:46', NULL, NULL),
(117, 'KW', 'Kuwait', 965, '2023-04-30 17:29:46', NULL, NULL),
(118, 'KG', 'Kyrgyzstan', 996, '2023-04-30 17:29:46', NULL, NULL),
(119, 'LA', 'Laos', 856, '2023-04-30 17:29:46', NULL, NULL),
(120, 'LV', 'Latvia', 371, '2023-04-30 17:29:46', NULL, NULL),
(121, 'LB', 'Lebanon', 961, '2023-04-30 17:29:46', NULL, NULL),
(122, 'LS', 'Lesotho', 266, '2023-04-30 17:29:46', NULL, NULL),
(123, 'LR', 'Liberia', 231, '2023-04-30 17:29:46', NULL, NULL),
(124, 'LY', 'Libya', 218, '2023-04-30 17:29:46', NULL, NULL),
(125, 'LI', 'Liechtenstein', 423, '2023-04-30 17:29:46', NULL, NULL),
(126, 'LT', 'Lithuania', 370, '2023-04-30 17:29:46', NULL, NULL),
(127, 'LU', 'Luxembourg', 352, '2023-04-30 17:29:46', NULL, NULL),
(128, 'MO', 'Macau S.A.R.', 853, '2023-04-30 17:29:46', NULL, NULL),
(129, 'MK', 'Macedonia', 389, '2023-04-30 17:29:46', NULL, NULL),
(130, 'MG', 'Madagascar', 261, '2023-04-30 17:29:46', NULL, NULL),
(131, 'MW', 'Malawi', 265, '2023-04-30 17:29:46', NULL, NULL),
(132, 'MY', 'Malaysia', 60, '2023-04-30 17:29:46', NULL, NULL),
(133, 'MV', 'Maldives', 960, '2023-04-30 17:29:46', NULL, NULL),
(134, 'ML', 'Mali', 223, '2023-04-30 17:29:46', NULL, NULL),
(135, 'MT', 'Malta', 356, '2023-04-30 17:29:46', NULL, NULL),
(136, 'XM', 'Man (Isle of)', 44, '2023-04-30 17:29:46', NULL, NULL),
(137, 'MH', 'Marshall Islands', 692, '2023-04-30 17:29:46', NULL, NULL),
(138, 'MQ', 'Martinique', 596, '2023-04-30 17:29:46', NULL, NULL),
(139, 'MR', 'Mauritania', 222, '2023-04-30 17:29:46', NULL, NULL),
(140, 'MU', 'Mauritius', 230, '2023-04-30 17:29:46', NULL, NULL),
(141, 'YT', 'Mayotte', 269, '2023-04-30 17:29:46', NULL, NULL),
(142, 'MX', 'Mexico', 52, '2023-04-30 17:29:46', NULL, NULL),
(143, 'FM', 'Micronesia', 691, '2023-04-30 17:29:46', NULL, NULL),
(144, 'MD', 'Moldova', 373, '2023-04-30 17:29:46', NULL, NULL),
(145, 'MC', 'Monaco', 377, '2023-04-30 17:29:46', NULL, NULL),
(146, 'MN', 'Mongolia', 976, '2023-04-30 17:29:46', NULL, NULL),
(147, 'MS', 'Montserrat', 1664, '2023-04-30 17:29:46', NULL, NULL),
(148, 'MA', 'Morocco', 212, '2023-04-30 17:29:46', NULL, NULL),
(149, 'MZ', 'Mozambique', 258, '2023-04-30 17:29:46', NULL, NULL),
(150, 'MM', 'Myanmar', 95, '2023-04-30 17:29:46', NULL, NULL),
(151, 'NA', 'Namibia', 264, '2023-04-30 17:29:46', NULL, NULL),
(152, 'NR', 'Nauru', 674, '2023-04-30 17:29:46', NULL, NULL),
(153, 'NP', 'Nepal', 977, '2023-04-30 17:29:46', NULL, NULL),
(154, 'AN', 'Netherlands Antilles', 599, '2023-04-30 17:29:46', NULL, NULL),
(155, 'NL', 'Netherlands The', 31, '2023-04-30 17:29:46', NULL, NULL),
(156, 'NC', 'New Caledonia', 687, '2023-04-30 17:29:46', NULL, NULL),
(157, 'NZ', 'New Zealand', 64, '2023-04-30 17:29:46', NULL, NULL),
(158, 'NI', 'Nicaragua', 505, '2023-04-30 17:29:46', NULL, NULL),
(159, 'NE', 'Niger', 227, '2023-04-30 17:29:46', NULL, NULL),
(160, 'NG', 'Nigeria', 234, '2023-04-30 17:29:46', NULL, NULL),
(161, 'NU', 'Niue', 683, '2023-04-30 17:29:46', NULL, NULL),
(162, 'NF', 'Norfolk Island', 672, '2023-04-30 17:29:46', NULL, NULL),
(163, 'MP', 'Northern Mariana Islands', 1670, '2023-04-30 17:29:46', NULL, NULL),
(164, 'NO', 'Norway', 47, '2023-04-30 17:29:46', NULL, NULL),
(165, 'OM', 'Oman', 968, '2023-04-30 17:29:46', NULL, NULL),
(166, 'PK', 'Pakistan', 92, '2023-04-30 17:29:46', NULL, NULL),
(167, 'PW', 'Palau', 680, '2023-04-30 17:29:46', NULL, NULL),
(168, 'PS', 'Palestinian Territory Occupied', 970, '2023-04-30 17:29:46', NULL, NULL),
(169, 'PA', 'Panama', 507, '2023-04-30 17:29:46', NULL, NULL),
(170, 'PG', 'Papua new Guinea', 675, '2023-04-30 17:29:46', NULL, NULL),
(171, 'PY', 'Paraguay', 595, '2023-04-30 17:29:46', NULL, NULL),
(172, 'PE', 'Peru', 51, '2023-04-30 17:29:46', NULL, NULL),
(173, 'PH', 'Philippines', 63, '2023-04-30 17:29:46', NULL, NULL),
(174, 'PN', 'Pitcairn Island', 0, '2023-04-30 17:29:46', NULL, NULL),
(175, 'PL', 'Poland', 48, '2023-04-30 17:29:46', NULL, NULL),
(176, 'PT', 'Portugal', 351, '2023-04-30 17:29:46', NULL, NULL),
(177, 'PR', 'Puerto Rico', 1787, '2023-04-30 17:29:46', NULL, NULL),
(178, 'QA', 'Qatar', 974, '2023-04-30 17:29:46', NULL, NULL),
(179, 'RE', 'Reunion', 262, '2023-04-30 17:29:46', NULL, NULL),
(180, 'RO', 'Romania', 40, '2023-04-30 17:29:46', NULL, NULL),
(181, 'RU', 'Russia', 70, '2023-04-30 17:29:46', NULL, NULL),
(182, 'RW', 'Rwanda', 250, '2023-04-30 17:29:46', NULL, NULL),
(183, 'SH', 'Saint Helena', 290, '2023-04-30 17:29:46', NULL, NULL),
(184, 'KN', 'Saint Kitts And Nevis', 1869, '2023-04-30 17:29:46', NULL, NULL),
(185, 'LC', 'Saint Lucia', 1758, '2023-04-30 17:29:46', NULL, NULL),
(186, 'PM', 'Saint Pierre and Miquelon', 508, '2023-04-30 17:29:46', NULL, NULL),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, '2023-04-30 17:29:46', NULL, NULL),
(188, 'WS', 'Samoa', 684, '2023-04-30 17:29:46', NULL, NULL),
(189, 'SM', 'San Marino', 378, '2023-04-30 17:29:46', NULL, NULL),
(190, 'ST', 'Sao Tome and Principe', 239, '2023-04-30 17:29:46', NULL, NULL),
(191, 'SA', 'Saudi Arabia', 966, '2023-04-30 17:29:46', NULL, NULL),
(192, 'SN', 'Senegal', 221, '2023-04-30 17:29:46', NULL, NULL),
(193, 'RS', 'Serbia', 381, '2023-04-30 17:29:46', NULL, NULL),
(194, 'SC', 'Seychelles', 248, '2023-04-30 17:29:46', NULL, NULL),
(195, 'SL', 'Sierra Leone', 232, '2023-04-30 17:29:46', NULL, NULL),
(196, 'SG', 'Singapore', 65, '2023-04-30 17:29:46', NULL, NULL),
(197, 'SK', 'Slovakia', 421, '2023-04-30 17:29:46', NULL, NULL),
(198, 'SI', 'Slovenia', 386, '2023-04-30 17:29:46', NULL, NULL),
(199, 'XG', 'Smaller Territories of the UK', 44, '2023-04-30 17:29:46', NULL, NULL),
(200, 'SB', 'Solomon Islands', 677, '2023-04-30 17:29:46', NULL, NULL),
(201, 'SO', 'Somalia', 252, '2023-04-30 17:29:46', NULL, NULL),
(202, 'ZA', 'South Africa', 27, '2023-04-30 17:29:46', NULL, NULL),
(203, 'GS', 'South Georgia', 0, '2023-04-30 17:29:46', NULL, NULL),
(204, 'SS', 'South Sudan', 211, '2023-04-30 17:29:46', NULL, NULL),
(205, 'ES', 'Spain', 34, '2023-04-30 17:29:46', NULL, NULL),
(206, 'LK', 'Sri Lanka', 94, '2023-04-30 17:29:46', NULL, NULL),
(207, 'SD', 'Sudan', 249, '2023-04-30 17:29:46', NULL, NULL),
(208, 'SR', 'Suriname', 597, '2023-04-30 17:29:46', NULL, NULL),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, '2023-04-30 17:29:46', NULL, NULL),
(210, 'SZ', 'Swaziland', 268, '2023-04-30 17:29:46', NULL, NULL),
(211, 'SE', 'Sweden', 46, '2023-04-30 17:29:46', NULL, NULL),
(212, 'CH', 'Switzerland', 41, '2023-04-30 17:29:46', NULL, NULL),
(213, 'SY', 'Syria', 963, '2023-04-30 17:29:46', NULL, NULL),
(214, 'TW', 'Taiwan', 886, '2023-04-30 17:29:46', NULL, NULL),
(215, 'TJ', 'Tajikistan', 992, '2023-04-30 17:29:46', NULL, NULL),
(216, 'TZ', 'Tanzania', 255, '2023-04-30 17:29:46', NULL, NULL),
(217, 'TH', 'Thailand', 66, '2023-04-30 17:29:46', NULL, NULL),
(218, 'TG', 'Togo', 228, '2023-04-30 17:29:46', NULL, NULL),
(219, 'TK', 'Tokelau', 690, '2023-04-30 17:29:46', NULL, NULL),
(220, 'TO', 'Tonga', 676, '2023-04-30 17:29:46', NULL, NULL),
(221, 'TT', 'Trinidad And Tobago', 1868, '2023-04-30 17:29:46', NULL, NULL),
(222, 'TN', 'Tunisia', 216, '2023-04-30 17:29:46', NULL, NULL),
(223, 'TR', 'Turkey', 90, '2023-04-30 17:29:46', NULL, NULL),
(224, 'TM', 'Turkmenistan', 7370, '2023-04-30 17:29:46', NULL, NULL),
(225, 'TC', 'Turks And Caicos Islands', 1649, '2023-04-30 17:29:46', NULL, NULL),
(226, 'TV', 'Tuvalu', 688, '2023-04-30 17:29:46', NULL, NULL),
(227, 'UG', 'Uganda', 256, '2023-04-30 17:29:46', NULL, NULL),
(228, 'UA', 'Ukraine', 380, '2023-04-30 17:29:46', NULL, NULL),
(229, 'AE', 'United Arab Emirates', 971, '2023-04-30 17:29:46', NULL, NULL),
(230, 'GB', 'United Kingdom', 44, '2023-04-30 17:29:46', NULL, NULL),
(231, 'US', 'United States', 1, '2023-04-30 17:29:46', NULL, NULL),
(232, 'UM', 'United States Minor Outlying Islands', 1, '2023-04-30 17:29:46', NULL, NULL),
(233, 'UY', 'Uruguay', 598, '2023-04-30 17:29:46', NULL, NULL),
(234, 'UZ', 'Uzbekistan', 998, '2023-04-30 17:29:46', NULL, NULL),
(235, 'VU', 'Vanuatu', 678, '2023-04-30 17:29:46', NULL, NULL),
(236, 'VA', 'Vatican City State (Holy See)', 39, '2023-04-30 17:29:46', NULL, NULL),
(237, 'VE', 'Venezuela', 58, '2023-04-30 17:29:46', NULL, NULL),
(238, 'VN', 'Vietnam', 84, '2023-04-30 17:29:46', NULL, NULL),
(239, 'VG', 'Virgin Islands (British)', 1284, '2023-04-30 17:29:46', NULL, NULL),
(240, 'VI', 'Virgin Islands (US)', 1340, '2023-04-30 17:29:46', NULL, NULL),
(241, 'WF', 'Wallis And Futuna Islands', 681, '2023-04-30 17:29:46', NULL, NULL),
(242, 'EH', 'Western Sahara', 212, '2023-04-30 17:29:46', NULL, NULL),
(243, 'YE', 'Yemen', 967, '2023-04-30 17:29:46', NULL, NULL),
(244, 'YU', 'Yugoslavia', 38, '2023-04-30 17:29:46', NULL, NULL),
(245, 'ZM', 'Zambia', 260, '2023-04-30 17:29:46', NULL, NULL),
(246, 'ZW', 'Zimbabwe', 263, '2023-04-30 17:29:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `fees` varchar(255) DEFAULT NULL,
  `class_count` int DEFAULT NULL,
  `quiz_count` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `is_top_rated` int NOT NULL DEFAULT '0',
  `is_trending` int NOT NULL DEFAULT '0',
  `is_most_purchased` int NOT NULL DEFAULT '0',
  `is_newly_added` int NOT NULL DEFAULT '0',
  `is_free` int NOT NULL DEFAULT '0',
  `is_hadpicked` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `title`, `description`, `level`, `fees`, `class_count`, `quiz_count`, `status`, `is_top_rated`, `is_trending`, `is_most_purchased`, `is_newly_added`, `is_free`, `is_hadpicked`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Course 1', NULL, 'intermediate', NULL, 25, NULL, 1, 0, 0, 0, 1, 1, 0, '2023-05-14 07:06:06', '2023-05-14 07:06:06', NULL),
(2, 1, 't', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1, 1, 0, '2023-05-15 08:59:12', '2023-05-15 08:59:12', NULL),
(3, 1, 'sczvcxv', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1, 1, 0, '2023-05-15 09:41:16', '2023-05-15 09:41:16', NULL),
(4, 1, 'java', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1, 1, 0, '2023-08-08 16:54:27', '2023-08-08 16:54:27', NULL),
(6, 1, 'd', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1, 1, 0, '2024-02-11 11:06:55', '2024-02-11 11:06:55', NULL),
(7, 2, 'Title', 'ambckblan', 'intermediate', '5000', NULL, NULL, 1, 1, 1, 1, 1, 1, 0, '2024-03-10 03:05:19', '2024-08-25 10:30:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_playlists`
--

DROP TABLE IF EXISTS `course_playlists`;
CREATE TABLE IF NOT EXISTS `course_playlists` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `prelude_video_link` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `url_1` text,
  `url_2` text,
  `url_3` text,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_playlists`
--

INSERT INTO `course_playlists` (`id`, `course_id`, `cover_photo`, `image_url`, `prelude_video_link`, `video_url`, `youtube_url`, `url_1`, `url_2`, `url_3`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, NULL, '1710059719.jpg', NULL, '1710059719.mp4', 'shcouhij;ksc', 'asv fzdsx', 'DAV CVXSDAE', 'dsfde', '2024-03-10 03:05:19', '2024-03-10 04:25:21', NULL),
(3, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-17 11:15:13', '2024-07-17 11:15:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_pricings`
--

DROP TABLE IF EXISTS `course_pricings`;
CREATE TABLE IF NOT EXISTS `course_pricings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int DEFAULT NULL,
  `price` float DEFAULT NULL,
  `offer_price` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_pricings`
--

INSERT INTO `course_pricings` (`id`, `course_id`, `price`, `offer_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1500, NULL, '2023-05-14 07:06:06', '2023-05-14 07:06:06', NULL),
(2, 2, NULL, NULL, '2023-05-15 08:59:12', '2023-05-15 08:59:12', NULL),
(3, 3, NULL, NULL, '2023-05-15 09:41:16', '2023-05-15 09:41:16', NULL),
(4, 4, 15000, NULL, '2023-08-08 16:54:28', '2023-08-08 16:54:28', NULL),
(5, 5, 15000, NULL, '2023-08-08 17:07:50', '2023-08-08 17:07:50', NULL),
(6, 6, NULL, NULL, '2024-02-11 11:06:55', '2024-02-11 11:06:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_study_materials`
--

DROP TABLE IF EXISTS `course_study_materials`;
CREATE TABLE IF NOT EXISTS `course_study_materials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `file` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_free` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_study_materials`
--

INSERT INTO `course_study_materials` (`id`, `course_id`, `title`, `description`, `file`, `is_free`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 7, 'Test 1', 'wdcwscwdec', '1721237737.jpg', 0, 1, '2024-07-17 12:05:38', '2024-07-17 12:05:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_tags`
--

DROP TABLE IF EXISTS `course_tags`;
CREATE TABLE IF NOT EXISTS `course_tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `tag_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tags`
--

INSERT INTO `course_tags` (`id`, `course_id`, `tag_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, '2023-05-14 07:06:06', '2023-05-14 07:06:06', NULL),
(2, 2, NULL, '2023-05-15 08:59:12', '2023-05-15 08:59:12', NULL),
(3, 3, NULL, '2023-05-15 09:41:16', '2023-05-15 09:41:16', NULL),
(4, 5, 1, '2023-08-08 17:07:50', '2023-08-08 17:07:50', NULL),
(5, 6, NULL, '2024-02-11 11:06:55', '2024-02-11 11:06:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_tutors`
--

DROP TABLE IF EXISTS `course_tutors`;
CREATE TABLE IF NOT EXISTS `course_tutors` (
  `id` int NOT NULL,
  `course_id` int DEFAULT NULL,
  `tutor_id` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `posters` varchar(255) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'API Token', '460d9439483d26872ca3d1f4881caa7f0687ea6e713a7eb86cba0585a1daa9dd', '[\"*\"]', '2023-05-19 15:56:44', NULL, '2023-05-19 15:54:11', '2023-05-19 15:56:44'),
(2, 'App\\Models\\User', 9, 'API Token', 'c257f9adb6003b175222c5095dbc6a643fd9b94c2daa22f1adb162d81101b033', '[\"*\"]', '2024-07-17 12:34:05', NULL, '2024-07-16 09:21:27', '2024-07-17 12:34:05'),
(3, 'App\\Models\\User', 9, 'API Token', '90a7d3ec275d661e19aee02aa8a4553d877a201411eca24507d8fa5711ea9d4b', '[\"*\"]', NULL, NULL, '2024-08-25 10:12:57', '2024-08-25 10:12:57'),
(4, 'App\\Models\\User', 9, 'API Token', 'ad3cdd899d4156dc57309bdbd62f954b05b005d3ac46606203f64e9c5f42a37f', '[\"*\"]', NULL, NULL, '2024-08-25 10:14:58', '2024-08-25 10:14:58'),
(5, 'App\\Models\\User', 9, 'API Token', '6dc1e3cea598f9333a947ad40374af351763ec321d0e3aca05d5e79c52a2863c', '[\"*\"]', NULL, NULL, '2024-08-25 10:21:46', '2024-08-25 10:21:46'),
(6, 'App\\Models\\User', 9, 'API Token', '26e9dde7cf6427d8e26ad596b244a7b5e78a8365fc25a400ee8a43ff8d080535', '[\"*\"]', '2024-09-03 10:57:38', NULL, '2024-09-01 12:02:18', '2024-09-03 10:57:38'),
(7, 'App\\Models\\User', 9, 'API Token', '3255fcb25601d2081ed9fe248272c534b88e41a7bf448e70ed17c00d10b6e9b7', '[\"*\"]', '2024-09-04 09:55:18', NULL, '2024-09-04 09:50:13', '2024-09-04 09:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_requests`
--

DROP TABLE IF EXISTS `purchase_requests`;
CREATE TABLE IF NOT EXISTS `purchase_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_requests`
--

INSERT INTO `purchase_requests` (`id`, `student_id`, `course_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 0, '2024-09-01 13:15:20', '2024-09-01 13:15:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int DEFAULT NULL,
  `question` text COLLATE utf8mb4_general_ci,
  `answer` text COLLATE utf8mb4_general_ci,
  `option_a` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `option_b` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `option_c` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `option_d` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `description` text COLLATE utf8mb4_general_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `course_id`, `question`, `answer`, `option_a`, `option_b`, `option_c`, `option_d`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Question 1', 'option_a', 'Option A', 'Option B', 'Option C', 'Option D', NULL, 1, '2024-06-20 10:37:04', '2024-08-29 13:22:25', NULL),
(2, 1, 'Q2', 'option_a', '1', '2', '3', '4', NULL, 1, '2024-08-29 13:50:10', '2024-08-29 13:50:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `discount_price` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `duration_hours` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `parent_id`, `name`, `price`, `discount_price`, `description`, `image`, `duration`, `duration_hours`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Service', '1234', '1233', 'qae', '1725384541.jpg', '12', '12', 1, '2024-09-03 11:59:01', '2024-09-03 11:59:01', NULL),
(3, 1, 'Dana Weiss', '592', '616', 'Dicta qui qui deseru', NULL, 'Et laboris consectet', 'Iusto deserunt offic', 1, '2024-09-04 09:53:10', '2024-09-04 09:53:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `student_code` varchar(255) DEFAULT NULL,
  `country_id` int DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile_no` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `student_code`, `country_id`, `dob`, `mobile_no`, `email`, `address_1`, `address_2`, `city`, `pincode`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 9, '600680', 101, '2018-02-14', '8765432109', 'student1@gmail.com', 'Add 1', 'Add 2', 'Kottayam', 123456, '1683972225.jpg', 1, '2023-05-13 04:33:45', '2024-03-06 11:05:11', NULL),
(2, 10, '658324', 101, '1991-07-23', '8129471721', 'vipin123@gmail.com', 'tvm', NULL, 'tvm', NULL, NULL, 1, '2023-08-08 17:16:33', '2023-08-08 17:16:33', NULL),
(3, 11, '914683', 167, '1986-02-07', '+1 (465) 259-3423', 'gefekigi@mailinator.com', '66 Oak Parkway', 'Ut occaecat in eius', 'Rem error officiis p', 39201, NULL, 0, '2024-09-04 10:20:40', '2024-09-04 10:20:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_payments`
--

DROP TABLE IF EXISTS `student_payments`;
CREATE TABLE IF NOT EXISTS `student_payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `course_id` int DEFAULT NULL,
  `amount` decimal(10,0) NOT NULL,
  `month` int NOT NULL,
  `end_date` date NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_payments`
--

INSERT INTO `student_payments` (`id`, `student_id`, `course_id`, `amount`, `month`, `end_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, '1000', 4, '2024-04-30', 1, '2024-03-09 11:24:42', NULL, NULL),
(2, 2, 4, '1501', 4, '2024-04-30', 0, '2024-03-09 09:13:40', '2024-06-25 12:29:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_purchased_courses`
--

DROP TABLE IF EXISTS `student_purchased_courses`;
CREATE TABLE IF NOT EXISTS `student_purchased_courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL,
  `purchased_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_purchased_courses`
--

INSERT INTO `student_purchased_courses` (`id`, `student_id`, `course_id`, `purchased_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 1, '2024-08-15 07:11:00', '2024-08-25 11:40:07', '2024-08-25 11:40:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_wishlisted_courses`
--

DROP TABLE IF EXISTS `student_wishlisted_courses`;
CREATE TABLE IF NOT EXISTS `student_wishlisted_courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL,
  `wishlisted_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_wishlisted_courses`
--

INSERT INTO `student_wishlisted_courses` (`id`, `student_id`, `course_id`, `wishlisted_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '2024-09-01 12:56:51', '2024-09-01 12:56:51', '2024-09-01 12:56:51', NULL),
(4, 1, 1, '2024-09-01 13:01:00', '2024-09-01 13:01:00', '2024-09-01 13:01:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'demo', 1, '2023-05-22 18:16:38', '2023-05-22 18:16:38', NULL),
(4, 'demo 2', 0, '2023-05-22 18:16:43', '2023-08-07 15:59:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

DROP TABLE IF EXISTS `tutors`;
CREATE TABLE IF NOT EXISTS `tutors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `country_id` int DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `pincode` varchar(150) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delete_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `first_name`, `last_name`, `user_id`, `mobile_no`, `email`, `dob`, `country_id`, `city`, `pincode`, `address_1`, `address_2`, `image`, `created_at`, `updated_at`, `delete_at`) VALUES
(1, 'Sandeep', 'B', '5', '9876543210', 'sandeep@gmail.com', '2023-05-11', 101, 'Kottayam', '123456', 'Address 1', 'Address 2', '1683830235.jpg', '2023-05-11 09:49:45', '2023-05-11 13:23:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutors_tags`
--

DROP TABLE IF EXISTS `tutors_tags`;
CREATE TABLE IF NOT EXISTS `tutors_tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tutor_id` int DEFAULT NULL,
  `tag_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile_no` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `is_student` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `mobile_no`, `password`, `type`, `remember_token`, `is_student`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@gmail.com', NULL, NULL, '$2y$10$WEu6aWx6uN8K7WoiLMALFObXBlLcgeq6xRhV1BmlzG5lADfq0CLtm', 1, NULL, 0, '2023-04-26 12:51:49', '2023-04-26 12:51:49'),
(2, 'Manager User', 'manager@gmail.com', NULL, NULL, '$2y$10$BnEbkGVxnf4wvmvEeXu19.KWd3zZfL9TGbjen1nHpZ8dGOqWjweGy', 2, NULL, 0, '2023-04-26 12:51:50', '2023-04-26 12:51:50'),
(3, 'User', 'user@gmail.com', NULL, NULL, '$2y$10$Jibxcxtmf.4Gv3Al0IHx7uaHvp85pJdvs1CnYCqk4yO7yxLk0PSbG', 0, NULL, 0, '2023-04-26 12:51:50', '2023-04-26 12:51:50'),
(5, 'Sandeep', 'sandeep@gmail.com', NULL, NULL, '$2y$10$P9/IM0bhu1OxTQRf3YOHUOwnJJSOLF.YKxWvkIv/B3MOqCwj5UaSa', 0, NULL, 0, '2023-05-11 09:49:45', '2024-03-10 04:48:21'),
(9, 'Student 1', 'student1@gmail.com', NULL, '8765432109', '$2y$10$6CAXOaT0OEyiVVREDQl6fuQIEjYI4CUrbV2pHWGeJokeNAgdeCIcK', 0, NULL, 1, '2023-05-13 04:33:45', '2024-08-25 10:12:06'),
(10, 'vipinkumar v', 'vipin123@gmail.com', NULL, '8129471721', '$2y$10$3Jjp61kKmf8xZSRdB2q6MuFhsodfHoJSVZMWwWYMb./np1tGaMOLO', 0, NULL, 1, '2023-08-08 17:16:32', '2023-08-08 17:16:32'),
(11, 'Lael Bird', 'gefekigi@mailinator.com', NULL, '+1 (465) 259-3423', '$2y$10$x23XnU0Kxbt3KXer.09XE.zwecAa8jPvbhIIqgskykca/.C3mfPVO', 0, NULL, 1, '2024-09-04 10:20:40', '2024-09-04 10:20:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
