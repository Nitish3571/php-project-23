-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2024 at 08:32 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_hostal_asoit`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo_form`
--

DROP TABLE IF EXISTS `demo_form`;
CREATE TABLE IF NOT EXISTS `demo_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `father_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mother_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hobbies` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_active` tinyint NOT NULL DEFAULT '0',
  `is_deleted` tinyint NOT NULL DEFAULT '0',
  `created_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_id` int DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_id` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo_form`
--

INSERT INTO `demo_form` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `date_of_birth`, `mobile`, `email`, `gender`, `address`, `hobbies`, `city`, `country`, `is_active`, `is_deleted`, `created_id`, `created_at`, `updated_id`, `updated_at`, `deleted_id`, `deleted_at`, `ip`) VALUES
(1, 'pavandeep ', 'Kumar', 'pufodshjnkm', 'podsfilafkjb', '2004-04-04', '', '', 'male', 'earstdhy', 'Array', 'sitamarhi', 'India', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, 'Nitish', 'Kumar', 'Arjun singh', 'Sarita Devi', '2004-04-04', '', '', 'male', 'Sitamarhi Bihar', 'Cricket , volleyball', 'sitamarhi', 'India', 0, 0, NULL, '2023-05-01 16:08:33', NULL, '2023-05-01 16:08:33', NULL, '2023-05-01 16:08:33', ''),
(3, 'Raj', 'kumar', 'Dinesh kumar', 'sita devi', '2001-02-01', '', '', 'male', 'Gota ahmedabad gujrat', 'Khokho , cricket', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-01 16:09:45', NULL, '2023-05-01 16:09:45', NULL, '2023-05-01 16:09:45', ''),
(7, 'utyguhk', 'hkjl', 'yhkjl', 'jkl', '2001-02-01', '', '', 'female', 'vyhij', 'Chess,Cricket,Khokho', 'vjm', 'Usa', 0, 0, NULL, '2023-05-01 16:19:43', NULL, '2023-05-01 16:19:43', NULL, '2023-05-01 16:19:43', ''),
(8, ' jm,', 'rgferdfg', 'Arjun singh', '4eshrt', '2002-02-02', '', '', 'male', 'wrwetrtyu', 'Chess,Cricket', 'rety', 'Usa', 0, 0, NULL, '2023-05-01 16:26:39', NULL, '2023-05-01 16:26:39', NULL, '2023-05-01 16:26:39', ''),
(9, ' ewrdgf', 'rgferdfg', 'Arjun singh', '4eshrt', '2002-02-02', '', '', 'female', 'waerstdyu', 'Array', 'rety', 'Usa', 0, 0, NULL, '2023-05-01 16:26:52', NULL, '2023-05-01 16:26:52', NULL, '2023-05-01 16:26:52', ''),
(10, ' jm,', 'rgferdfg', 'Arjun singh', '4eshrt', '2002-02-02', '', '', 'male', 'wrwetrtyu', 'Chess,Cricket', 'rety', 'Usa', 0, 0, NULL, '2023-05-01 16:40:40', NULL, '2023-05-01 16:40:40', NULL, '2023-05-01 16:40:40', ''),
(13, 'Deepak ', 'Kumar', 'Dinesh kumar', 'Rani Devi', '2002-07-18', '', '', 'male', 'Ahmedabad gujrat', 'Volleyball,Cricket,Khokho', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-01 17:16:10', NULL, '2023-05-01 17:16:10', NULL, '2023-05-01 17:16:10', ''),
(14, 'Deepak ', 'Kumar', 'Dinesh kumar', 'Rani Devi', '2002-07-18', '', '', 'male', 'Ahmedabad gujrat', 'Volleyball,Cricket,Khokho', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-01 17:18:05', NULL, '2023-05-01 17:18:05', NULL, '2023-05-01 17:18:05', ''),
(15, 'Prakash', 'Kumar', 'Nitish kumar', 'Rani Devi', '2008-02-02', '', '', 'male', 'Gota Ahmedabad gujrat', 'Volleyball,Cricket', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-01 17:20:32', NULL, '2023-05-01 17:20:32', NULL, '2023-05-01 17:20:32', ''),
(16, 'Prakash', 'Kumar', 'Nitish kumar', 'Rani Devi', '2008-02-02', '', '', 'male', 'Gota Ahmedabad gujrat', 'Volleyball,Cricket', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-01 17:26:04', NULL, '2023-05-01 17:26:04', NULL, '2023-05-01 17:26:04', ''),
(17, 'Ramanuj', 'panday', 'vivek panday', 'babita devi', '2005-03-02', '', '', 'male', 'Patna Bihar', 'Volleyball,Cricket', 'Patna', 'India', 0, 0, NULL, '2023-05-01 17:28:36', NULL, '2023-05-01 17:28:36', NULL, '2023-05-01 17:28:36', ''),
(18, ' Deepak ', 'Kumar', 'Dinesh kumar', 'sita devi', '2005-03-02', '', '', '', 'lk,jmnhb', '', 'ahmedabad', 'select', 0, 0, NULL, '2023-05-01 17:50:18', NULL, '2023-05-01 17:50:18', NULL, '2023-05-01 17:50:18', ''),
(19, 'Deepak ', 'Kumar', 'Dinesh kumar', 'sita devi', '2005-03-02', '', '', 'male', ';olkjmhnb ', 'Chess,Cricket', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-01 17:51:17', NULL, '2023-05-01 17:51:17', NULL, '2023-05-01 17:51:17', ''),
(20, ' Deepak ', 'Kumar', 'Dinesh kumar', 'sita devi', '2005-03-02', '', '', '', ';l.,m', '', 'ahmedabad', 'select', 0, 0, NULL, '2023-05-01 17:52:49', NULL, '2023-05-01 17:52:49', NULL, '2023-05-01 17:52:49', ''),
(21, ' Deepak ', 'Kumar', 'Dinesh kumar', 'sita devi', '2005-03-02', '', '', '', 'retyu', '', 'ahmedabad', 'select', 0, 0, NULL, '2023-05-01 17:57:14', NULL, '2023-05-01 17:57:14', NULL, '2023-05-01 17:57:14', ''),
(22, 'Nitish ', 'Kumar', 'Arjun singh', 'Sarita Devi', '2002-04-04', '', '', 'male', 'Sitamarhi Bihar', 'Volleyball,Chess,Cricket', 'sitamarhi', 'India', 0, 0, NULL, '2023-05-01 17:59:01', NULL, '2023-05-01 17:59:01', NULL, '2023-05-01 17:59:01', ''),
(23, '3ewrtghj', 'rgferdfg', 'Dinesh kumar', 'Sarita Devi', '2005-03-02', '', '', 'female', 'aertshdytf', 'Volleyball', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-01 17:59:45', NULL, '2023-05-01 17:59:45', NULL, '2023-05-01 17:59:45', ''),
(24, 'Nitish ', 'Kumar', 'Arjun singh', 'Sarita Devi', '2002-04-04', '', '', 'male', 'Sitamarhi Bihar', 'Volleyball,Chess,Cricket', 'sitamarhi', 'India', 0, 0, NULL, '2023-05-01 18:00:06', NULL, '2023-05-01 18:00:06', NULL, '2023-05-01 18:00:06', ''),
(25, 'Nitish ', 'Kumar', 'Arjun singh', 'Sarita Devi', '2002-04-04', '', '', 'male', 'Sitamarhi Bihar', 'Volleyball,Chess,Cricket', 'sitamarhi', 'India', 0, 0, NULL, '2023-05-01 18:01:20', NULL, '2023-05-01 18:01:20', NULL, '2023-05-01 18:01:20', ''),
(26, 'Nitish ', 'Kumar', 'Arjun singh', 'Sarita Devi', '2002-04-04', '', '', 'male', 'Sitamarhi Bihar', 'Volleyball,Chess,Cricket', 'sitamarhi', 'India', 0, 0, NULL, '2023-05-01 18:03:08', NULL, '2023-05-01 18:03:08', NULL, '2023-05-01 18:03:08', ''),
(27, 'Nitish ', 'Kumar', 'Arjun singh', 'Sarita Devi', '2002-04-04', '', '', 'male', 'Sitamarhi Bihar', 'Volleyball,Chess,Cricket', 'sitamarhi', 'India', 0, 0, NULL, '2023-05-01 18:03:33', NULL, '2023-05-01 18:03:33', NULL, '2023-05-01 18:03:33', ''),
(28, ' odkjmn', 'ertyhjetryghj', '3r45ty', '4eshrt', '2001-02-02', '', '', '', 'lkijuhytgf', '', 'iuyt', 'select', 0, 0, NULL, '2023-05-01 18:05:24', NULL, '2023-05-01 18:05:24', NULL, '2023-05-01 18:05:24', ''),
(29, 'Deepak ', 'Kumar', 'Dinesh kumar', 'Rani Devi', '2001-02-02', '', '', 'male', 'ert', 'Volleyball,Cricket', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-02 11:54:41', NULL, '2023-05-02 11:54:41', NULL, '2023-05-02 11:54:41', ''),
(30, 'Deepak ', 'Kumar', 'Dinesh kumar', 'Rani Devi', '2001-02-02', '', '', 'male', 'ert', 'Volleyball,Cricket', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-02 11:55:13', NULL, '2023-05-02 11:55:13', NULL, '2023-05-02 11:55:13', ''),
(31, 'Deepak ', 'Kumar', 'Dinesh kumar', 'Rani Devi', '2001-02-02', '', '', 'male', 'ert', 'Volleyball,Cricket', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-02 11:55:19', NULL, '2023-05-02 11:55:19', NULL, '2023-05-02 11:55:19', ''),
(32, 'Deepak ', 'Kumar', 'Dinesh kumar', 'Rani Devi', '2001-02-02', '', '', 'male', 'ert', 'Volleyball,Cricket', 'ahmedabad', 'India', 0, 0, NULL, '2023-05-02 11:55:56', NULL, '2023-05-02 11:55:56', NULL, '2023-05-02 11:55:56', ''),
(33, '3ewrtghj', 'Kumar', 'Dinesh kumar', '4eshrt', '2000-02-01', '', '', 'male', 'jhgfds', 'Chess', 'lkjmn', 'Usa', 0, 0, NULL, '2023-05-02 11:58:32', NULL, '2023-05-02 11:58:32', NULL, '2023-05-02 11:58:32', ''),
(34, '3ewrtghj', 'Kumar', 'Dinesh kumar', '4eshrt', '2000-02-01', '', '', 'male', 'jhgfds', 'Chess', 'lkjmn', 'Usa', 0, 0, NULL, '2023-05-02 11:58:46', NULL, '2023-05-02 11:58:46', NULL, '2023-05-02 11:58:46', ''),
(35, '3ewrtghj', 'Kumar', 'Dinesh kumar', '4eshrt', '2000-02-01', '', '', 'male', 'jhgfds', 'Chess', 'lkjmn', 'Usa', 0, 0, NULL, '2023-05-02 12:00:59', NULL, '2023-05-02 12:00:59', NULL, '2023-05-02 12:00:59', ''),
(36, '3ewrtghj', 'Kumar', 'Dinesh kumar', '4eshrt', '2000-02-01', '', '', 'male', 'jhgfds', 'Chess', 'lkjmn', 'Usa', 0, 0, NULL, '2023-05-02 12:02:20', NULL, '2023-05-02 12:02:20', NULL, '2023-05-02 12:02:20', ''),
(37, 'yegduhfdo ', '34toeiuhjn', 'wegtr', 'yfdslk,m. ', '2003-02-02', '', '', 'female', 'ertjy', 'Array', 'nytebrv', 'India', 0, 0, NULL, '2023-05-02 17:13:52', NULL, '2023-05-02 17:13:52', NULL, '2023-05-02 17:13:52', ''),
(38, 'Raja', 'Kumar', 'Uday singh', 'Sita devi', '2006-05-20', '', '', 'male', 'Rajsthan ', 'Volleyball,Cricket', 'djioj', 'India', 0, 0, NULL, '2023-05-02 18:48:29', NULL, '2023-05-02 18:48:29', NULL, '2023-05-02 18:48:29', ''),
(39, 'iourj', 'gf', 'err', 'rfff', '2001-10-01', '', '', 'female', 'erdf', 'Chess,Cricket', 'rfd', 'India', 0, 0, NULL, '2023-05-02 18:49:05', NULL, '2023-05-02 18:49:05', NULL, '2023-05-02 18:49:05', ''),
(40, ' jyhtdfghkjhg', 'likyuh', 'jhg', 'ikujh', '2003-02-02', '', '', '', 'ikjhnb', '', 'polkiujh', 'select', 0, 0, NULL, '2023-05-03 08:40:00', NULL, '2023-05-03 08:40:00', NULL, '2023-05-03 08:40:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `marks_master`
--

DROP TABLE IF EXISTS `marks_master`;
CREATE TABLE IF NOT EXISTS `marks_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `marks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `marks_master`
--

INSERT INTO `marks_master` (`id`, `student_id`, `subject_id`, `marks`) VALUES
(1, 1, 1, 20),
(2, 1, 2, 55),
(3, 1, 3, 81),
(4, 1, 4, 40),
(5, 2, 1, 42),
(6, 2, 2, 2),
(7, 2, 3, 63),
(8, 2, 4, 30),
(9, 3, 1, 9),
(10, 3, 2, 46),
(11, 3, 3, 14),
(12, 3, 4, 68),
(13, 4, 1, 46),
(14, 4, 2, 55),
(15, 4, 3, 84),
(16, 4, 4, 33),
(17, 5, 1, 73),
(18, 5, 2, 6),
(19, 5, 3, 38),
(20, 5, 4, 85),
(21, 6, 1, 72),
(22, 6, 2, 70),
(23, 6, 3, 77),
(24, 6, 4, 24),
(25, 7, 1, 33),
(26, 7, 2, 5),
(27, 7, 3, 97),
(28, 7, 4, 0),
(29, 8, 1, 8),
(30, 8, 2, 24),
(31, 8, 3, 59),
(32, 8, 4, 57),
(33, 9, 1, 75),
(34, 9, 2, 82),
(35, 9, 3, 39),
(36, 9, 4, 13),
(37, 10, 1, 83),
(38, 10, 2, 87),
(39, 10, 3, 35),
(40, 10, 4, 57),
(41, 11, 1, 31),
(42, 11, 2, 82),
(43, 11, 3, 83),
(44, 11, 4, 44),
(45, 12, 1, 52),
(46, 12, 2, 71),
(47, 12, 3, 59),
(48, 12, 4, 46),
(49, 13, 1, 49),
(50, 13, 2, 18),
(51, 13, 3, 50),
(52, 13, 4, 2),
(53, 14, 1, 63),
(54, 14, 2, 31),
(55, 14, 3, 60),
(56, 14, 4, 100),
(57, 15, 1, 57),
(58, 15, 2, 11),
(59, 15, 3, 86),
(60, 15, 4, 33),
(61, 16, 1, 42),
(62, 16, 2, 40),
(63, 16, 3, 8),
(64, 16, 4, 22);

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

DROP TABLE IF EXISTS `registration_details`;
CREATE TABLE IF NOT EXISTS `registration_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `conform_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `is_deleted` tinyint NOT NULL DEFAULT '0',
  `create_id` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_id` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_id` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `ip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_details`
--

INSERT INTO `registration_details` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `conform_password`, `is_active`, `is_deleted`, `create_id`, `created_at`, `updated_id`, `updated_at`, `deleted_id`, `deleted_at`, `ip`) VALUES
(9, 'oeikfj', 'oiuytg', 'loiugytf@oiyut', '', 'erfg', 'edf', 1, 0, 999, '2023-04-30 05:49:50', NULL, NULL, NULL, NULL, '::1'),
(7, 'Ram', 'kumar', 'ram@1234', 'raj234', '2563', '2563', 1, 0, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL),
(6, 'Nitish', 'Kumar', 'nitishkumar7070@gmail.com', 'ranajee1234', '12345', '12345', 1, 0, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL),
(8, 'Nitin', 'kumar', 'nitin@1024', 'nitin@0987', '8520', '8520', 1, 0, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL),
(10, 'oeikfj', 'oiuytg', 'loiugytf@oiyut', '', 'erfg', 'edf', 1, 0, 0, '2023-04-30 05:51:02', NULL, NULL, NULL, NULL, '::1'),
(11, 'oeikfj', 'oiuytg', 'loiugytf@oiyut', '', 'erfg', 'edf', 1, 0, 999, '2023-04-30 05:51:27', NULL, NULL, NULL, NULL, '::1'),
(12, 'pokj', 'poiujhb', 'poijnjh@pionjukh', '', 'wpeokljn', '[poerkmdfln', 1, 0, 999, '2023-04-30 05:51:45', NULL, NULL, NULL, NULL, '::1'),
(13, 'NITISH KUMAR', 'RANA JEE', 'nitish1234@gmail.com', '', 'nitish1234', 'nitish1234', 1, 0, 999, '2023-04-30 05:52:58', NULL, NULL, NULL, NULL, '::1'),
(14, 'NITISH KUMAR', 'RANA JEE', 'nitish1234@gmail.com', '', 'nitish1234', 'nitish1234', 1, 0, 999, '2023-04-30 05:54:27', NULL, NULL, NULL, NULL, '::1'),
(15, 'NITISH KUMAR', 'RANA JEE', 'nitish1234@gmail.com', '', 'nitish1234', 'nitish1234', 1, 0, 999, '2023-04-30 05:55:45', NULL, NULL, NULL, NULL, '::1'),
(16, 'Deepak ', 'Kumar', 'deepak@gmail.com', '', 'deepak12345', 'deepak12345', 1, 0, 999, '2023-04-30 05:56:35', NULL, NULL, NULL, NULL, '::1'),
(17, 'Deepak ', 'Kumar', 'deepak@gmail.com', '', 'deepak12345', 'deepak12345', 1, 0, 999, '2023-04-30 05:59:04', NULL, NULL, NULL, NULL, '::1'),
(18, 'Ratnesh kumar', 'singh', 'ratneshkumar@gmail.com', '', 'ratnesh1234', 'ratnesh1234', 1, 0, 999, '2023-04-30 05:59:48', NULL, NULL, NULL, NULL, '::1'),
(19, 'Ratnesh kumar', 'singh', 'ratneshkumar@gmail.com', '', 'ratnesh1234', 'ratnesh1234', 1, 0, 999, '2023-04-30 06:13:00', NULL, NULL, NULL, NULL, '::1'),
(20, 'Raushan ', 'Mehta', 'raushan@gmail.com', '', 'raushan12345', 'raushan12345', 1, 0, 999, '2023-04-30 06:14:01', NULL, NULL, NULL, NULL, '::1'),
(21, 'Raushan ', 'Mehta', 'raushan@gmail.com', '', 'raushan12345', 'raushan12345', 1, 0, 999, '2023-04-30 06:16:30', NULL, NULL, NULL, NULL, '::1'),
(22, 'Pavan Deep', 'Kumar', 'pavandeep@gmail.com', '', 'pavandeep1234', 'pavandeep1234', 1, 0, 999, '2023-04-30 06:17:35', NULL, NULL, NULL, NULL, '::1'),
(23, 'Nitish', 'kumar', 'nitish@gmail.com', '', 'raj@1234', 'Raj@1234', 1, 0, 999, '2023-04-30 09:06:11', NULL, NULL, NULL, NULL, '::1'),
(24, 'Nitish', 'kumar', 'nitish@gmail.com', '', 'raj@1234', 'Raj@1234', 1, 0, 999, '2023-04-30 09:11:47', NULL, NULL, NULL, NULL, '::1'),
(25, 'Nitish', 'kumar', 'nitish@gmail.com', '', 'raj@1234', 'Raj@1234', 1, 0, 999, '2023-04-30 09:12:30', NULL, NULL, NULL, NULL, '::1'),
(26, 'Bittu', 'kumar', 'bittu@gmail.com', '', 'bittu', 'bittu', 1, 0, 999, '2023-04-30 09:13:38', NULL, NULL, NULL, NULL, '::1'),
(27, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:15:51', NULL, NULL, NULL, NULL, '::1'),
(28, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(29, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(30, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(31, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(32, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(33, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(34, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(35, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(36, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(37, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(38, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(39, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(40, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(41, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(42, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(43, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(44, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(45, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(46, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(47, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(48, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(49, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(50, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(51, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(52, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(53, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(54, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(55, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(56, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(57, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(58, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(59, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(60, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(61, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(62, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(63, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(64, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(65, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(66, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(67, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(68, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(69, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(70, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(71, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(72, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(73, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(74, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(75, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(76, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(77, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(78, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(79, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(80, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(81, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(82, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(83, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(84, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(85, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(86, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(87, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(88, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(89, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(90, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(91, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(92, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(93, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(94, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(95, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(96, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(97, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(98, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(99, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(100, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(101, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(102, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(103, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(104, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(105, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(106, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(107, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(108, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(109, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(110, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(111, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(112, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(113, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(114, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(115, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(116, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(117, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(118, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(119, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(120, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(121, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(122, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(123, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(124, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(125, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(126, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(127, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(128, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(129, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(130, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(131, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(132, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(133, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(134, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(135, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(136, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(137, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(138, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(139, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(140, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(141, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(142, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(143, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(144, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(145, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(146, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(147, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(148, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(149, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(150, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(151, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(152, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(153, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(154, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(155, 'Guddu ', 'kumar', 'guddu@gmail.com', '', 'guddu', 'guddu', 1, 0, 999, '2023-04-30 09:16:21', NULL, NULL, NULL, NULL, '::1'),
(156, 'Nitish', 'kumar', 'nitishraj@gmail.com', '', 'nitish', 'nitish', 1, 0, 999, '2023-04-30 09:17:02', NULL, NULL, NULL, NULL, '::1'),
(157, 'Nitish', 'kumar', 'nitishraj@gmail.com', '', 'nitish', 'nitish', 1, 0, 999, '2023-04-30 09:17:23', NULL, NULL, NULL, NULL, '::1'),
(158, 'Nitish', 'kumar', 'nitishraj@gmail.com', '', 'nitish', 'nitish', 1, 0, 999, '2023-04-30 09:17:43', NULL, NULL, NULL, NULL, '::1'),
(159, 'Raushan', 'Mehta', 'raushan@gmail.com', '', 'raushan', 'raushan', 1, 0, 999, '2023-04-30 09:20:06', NULL, NULL, NULL, NULL, '::1'),
(160, 'Ram ', 'kumar', 'ram@gmail.com', '', 'ram1234', 'ram1234', 1, 0, 999, '2023-04-30 09:22:25', NULL, NULL, NULL, NULL, '::1'),
(161, 'Ram ', 'kumar', 'ram@gmail.com', '', 'ram1234', 'ram1234', 1, 0, 999, '2023-04-30 09:23:00', NULL, NULL, NULL, NULL, '::1'),
(162, 'OmPrakash', 'Kumar', 'opkumar@gmail.com', '', 'op1234', 'op1234', 1, 0, 999, '2023-04-30 09:24:13', NULL, NULL, NULL, NULL, '::1'),
(163, 'Ratnesh', 'kumar', 'ratnesh@gmail.com', '', 'ratnesh', 'ratnesh', 1, 0, 999, '2023-04-30 09:25:56', NULL, NULL, NULL, NULL, '::1'),
(164, 'vivek ', 'kumar', 'vivek@gmail.com', 'vivek1234', 'vivek', 'vivek', 1, 0, 999, '2023-04-30 09:30:17', NULL, NULL, NULL, NULL, '::1'),
(165, 'vivek ', 'kumar', 'vivek@gmail.com', 'vivek1234', 'vivek', 'vivek', 1, 0, 999, '2023-04-30 09:30:38', NULL, NULL, NULL, NULL, '::1'),
(166, 'Deepak ', 'Kumar', 'deepak@gmail.com', 'deepak1234', 'deepak', 'deepak', 1, 0, 999, '2023-04-30 10:41:07', NULL, NULL, NULL, NULL, '::1'),
(167, 'Deepak ', 'Kumar', 'deepak@gmail.com', 'deepak1234', 'deepak', 'deepak', 1, 0, 999, '2023-04-30 10:44:19', NULL, NULL, NULL, NULL, '::1'),
(168, 'Nitish ', 'kumar', 'nitish@12345', 'Nitish1234', 'nitish', 'nitish', 1, 0, 999, '2023-05-01 05:52:56', NULL, NULL, NULL, NULL, '::1'),
(169, '3ewrtghj', 'rgferdfg', 'lkjnhmb41@gmail.com', 'rfg', 'efrtghgestrf', 'wergff', 1, 0, 999, '2023-05-01 11:12:22', NULL, NULL, NULL, NULL, '::1'),
(170, '3ewrtghj', 'rgferdfg', 'lkjnhmb41@gmail.com', 'rfg', 'efrtghgestrf', 'wergff', 1, 0, 999, '2023-05-01 11:13:46', NULL, NULL, NULL, NULL, '::1'),
(171, 'Deepak ', 'Kumar', 'deepak@gmail.com', 'deepak1234', 'ertghgh', '34rtdy', 1, 0, 999, '2023-05-01 11:41:25', NULL, NULL, NULL, NULL, '::1'),
(172, '3ewrtghj', 'Kumar', 'deepak@gmail.com', 'Nitish1234', 'erty', 'rty', 1, 0, 999, '2023-05-01 11:42:43', NULL, NULL, NULL, NULL, '::1'),
(173, 'nitish', 'kumar', 'nitishkumar7070@gmail.com', 'ranajee', 'nnnn', 'nnnn', 1, 0, 999, '2023-07-09 16:37:52', NULL, NULL, NULL, NULL, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `city` varchar(10) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `city`, `hobbies`, `image`) VALUES
(1, 'test', '1', 'Coding,Game', 'chess - colored.png'),
(2, 'test', '1', 'Coding,Game', 'chess - colored.png'),
(3, 'uma', '2', 'Music,Game', 'contacts.csv');

-- --------------------------------------------------------

--
-- Table structure for table `student_form_record`
--

DROP TABLE IF EXISTS `student_form_record`;
CREATE TABLE IF NOT EXISTS `student_form_record` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `coding_interest` enum('Yes','No') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `semester` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profile_pic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `is_deleted` tinyint NOT NULL DEFAULT '0',
  `created_id` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_id` int DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_id` int DEFAULT NULL,
  `deleted_at` datetime NOT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_form_record`
--

INSERT INTO `student_form_record` (`id`, `full_name`, `email`, `coding_interest`, `language`, `semester`, `profile_pic`, `is_active`, `is_deleted`, `created_id`, `created_at`, `updated_id`, `updated_at`, `deleted_id`, `deleted_at`, `ip`) VALUES
(1, 'Nitish Kumar 1111', 'nitish@gmail.com', 'Yes', 'English,Hindi', 'sem-2', '1694007945761.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(2, 'Ratnesh Kumar', 'ratnesh@gmail.com', 'Yes', 'English,Hindi,Gujrati', 'sem-3', 'me.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(3, 'Raushan Kumar', 'raushan@gmail.com', 'Yes', 'English,Gujrati', 'sem-4', 'hp.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(4, 'Ranajee', 'ranajee@gmail.com', 'Yes', 'English,Hindi,Gujrati', 'sem-1', '1672544394934.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(5, 'Ranajee', 'ranajee@gmail.com', 'Yes', 'English,Hindi,Gujrati', 'sem-1', '1655617624510.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(6, 'Ranajee', 'ranajee@gmail.com', 'Yes', 'English,Hindi,Gujrati', 'sem-1', '1655617624510.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(7, 'Raj kumar', 'ranajee@gmail.com', 'Yes', 'English,Hindi', 'sem-3', 'ladakh.png', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(8, 'Raj kumar1111111', 'ranajee@gmail.com', 'Yes', 'English,Hindi', 'sem-3', '1655617624510.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(9, 'Raj kumar1111111', 'ranajee@gmail.com', 'Yes', 'English,Hindi', 'sem-3', 'nitish photo.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(10, 'Raj kumar1111111', 'ranajee@gmail.com', 'Yes', 'English,Hindi', 'sem-3', 'adob.png', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(15, 'Nitish Kumar', 'ranajee@gmail.com', 'Yes', 'English,Hindi,Gujrati', 'sem-1', '1655617624510.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(16, 'df', 'kripanidhi@gmail.com', 'Yes', 'English,Hindi,Gujrati', 'sem-3', '1655617624510.jpg', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(17, 'sdf', 'wedf', 'Yes', 'English,Hindi', 'sem-1', 'Screenshot 2023-05-13 172651.png', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', ''),
(18, 'Nitish kumar', 'nitishkumar7070@gmail.com', 'Yes', 'English,Hindi', 'sem-1', 'Blue Yellow Modern Architecture New LinkedIn Banner (1).png', 1, 0, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

DROP TABLE IF EXISTS `student_master`;
CREATE TABLE IF NOT EXISTS `student_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `class_id` int NOT NULL,
  `section_id` int NOT NULL,
  `city_id` int NOT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`id`, `student_name`, `class_id`, `section_id`, `city_id`, `address`) VALUES
(1, 'Ramesh', 1, 1, 5, NULL),
(2, 'Kamlesh', 1, 1, 3, NULL),
(3, 'Haresh', 1, 2, 1, NULL),
(4, 'Soniya', 1, 3, 4, NULL),
(5, 'Priti', 2, 1, 1, NULL),
(6, 'Shayam', 2, 2, 3, NULL),
(7, 'Kishan', 3, 1, 1, NULL),
(8, 'Mariyam', 3, 3, 4, NULL),
(9, 'Piyush', 1, 2, 3, NULL),
(10, 'Soheb', 2, 3, 3, NULL),
(11, 'Razia', 2, 4, 1, NULL),
(12, 'Kelly', 2, 1, 3, NULL),
(13, 'Joseph', 4, 4, 1, NULL),
(14, 'Jasmin', 4, 2, 3, NULL),
(15, 'Rahul', 4, 1, 1, NULL),
(16, 'Farhin', 4, 3, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

DROP TABLE IF EXISTS `subject_master`;
CREATE TABLE IF NOT EXISTS `subject_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `subject_master`
--

INSERT INTO `subject_master` (`id`, `subject_name`) VALUES
(1, 'English'),
(2, 'Maths'),
(3, 'Science'),
(4, 'Hindi'),
(5, 'Biology');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
