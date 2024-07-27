-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2024 at 08:34 AM
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
-- Database: `voting`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `get_dashboard_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_dashboard_data` (IN `input_customer_id` INT)  NO SQL BEGIN
        select count(i_id) as customer_count from customer where t_is_deleted != 1;
    select sum(d_total_amount) as total_received_amount from order_master  where t_is_deleted != 1 and v_order_no is not null;
    select sum(d_total_amount) as total_month_amount from order_master  where t_is_deleted != 1 and v_order_no is not null and MONTH(dt_order_date) = MONTH(CURRENT_DATE()) AND YEAR(dt_order_date) = YEAR(CURRENT_DATE());
    select sm.v_status_name , count(od.i_id) as order_count  from status_master as sm left join order_details as od on od.i_order_item_status = sm.i_id  and DATE(od.dt_created_at) = CURRENT_DATE() where sm.t_is_deleted != 1 and sm.t_is_active = 1 group by sm.i_id;
select sm.v_status_name , count(od.i_id) as order_count  from status_master as sm left join order_details as od on od.i_order_item_status = sm.i_id  where sm.t_is_deleted != 1 and sm.t_is_active = 1 group by sm.i_id;
    select sum(d_current_outstanding) as customer_outstanding from customer where t_is_deleted != 1;
    select count(i_id) as customer_current_month_order_count from order_master where t_is_deleted != 1 and i_login_id = input_customer_id and v_order_no is not null and MONTH(dt_order_date) = MONTH(CURRENT_DATE()) AND YEAR(dt_order_date) = YEAR(CURRENT_DATE());
    select count(i_id) as customer_order_count from order_master where t_is_deleted != 1 and i_login_id = input_customer_id and v_order_no is not null;
    select ( d_amount - d_current_outstanding ) as customer_oustanding_amount from customer join wallet on customer.i_login_id = wallet.i_login_id where customer.i_login_id = input_customer_id;
    select sm.v_status_name , ( select count(od.i_id) from order_details as od  join order_master as om on om.i_id = od.i_order_id and om.t_is_deleted != 1  and om.i_login_id = input_customer_id and  om.v_order_no is not null where od.i_order_item_status = sm.i_id ) as order_count from status_master as sm;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `college_master`
--

DROP TABLE IF EXISTS `college_master`;
CREATE TABLE IF NOT EXISTS `college_master` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `enrollment_no` varchar(50) NOT NULL,
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `enrollment_no` (`enrollment_no`),
  KEY `id` (`id`),
  KEY `mobile_no` (`mobile_no`),
  KEY `branch` (`branch`),
  KEY `semester` (`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

DROP TABLE IF EXISTS `login_data`;
CREATE TABLE IF NOT EXISTS `login_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mobile_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `select_voter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_active` tinyint NOT NULL,
  `is_deleted` tinyint NOT NULL,
  `created_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_id` int DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_id` int DEFAULT NULL,
  `deleted_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`id`, `mobile_no`, `password`, `select_voter`, `is_active`, `is_deleted`, `created_id`, `created_at`, `updated_id`, `updated_at`, `deleted_id`, `deleted_at`, `ip`) VALUES
(1, '8956231478', 'Raja@1234', 'Voter', 0, 0, 250, '2023-05-01 14:55:55', NULL, '2023-05-01 14:55:55', NULL, '2023-05-01 14:55:55', '210:0:0:1'),
(2, '7070603571', 'nitish1234', 'Admin', 0, 0, 250, '2023-05-01 14:56:12', NULL, '2023-05-01 14:56:12', NULL, '2023-05-01 14:56:12', '210:0:0:1'),
(3, '7896541230', 'asdfg1234', 'Voter', 0, 0, 250, '2023-05-01 14:56:34', NULL, '2023-05-01 14:56:34', NULL, '2023-05-01 14:56:34', '210:0:0:1'),
(17, '8956471230', 'bittu', 'Admin', 0, 0, 250, '2023-05-01 14:56:47', NULL, '2023-05-01 14:56:47', NULL, '2023-05-01 14:56:47', '210:0:0:1'),
(18, '7896541230', 'op1234', 'Admin', 0, 0, 250, '2023-05-01 14:57:11', NULL, '2023-05-01 14:57:11', NULL, '2023-05-01 14:57:11', '210:0:0:1'),
(19, '8956231478', 'd;lk,mn', 'Voter', 0, 0, 250, '2023-05-01 15:10:58', NULL, '2023-05-01 15:10:58', NULL, '2023-05-01 15:10:58', '210:0:0:1'),
(20, '8965471235', 'rajkumar', 'Admin', 0, 0, 250, '2023-05-01 15:11:22', NULL, '2023-05-01 15:11:22', NULL, '2023-05-01 15:11:22', '210:0:0:1'),
(21, '8965471235', 'rajkumar', 'Admin', 0, 0, 250, '2023-05-01 15:17:05', NULL, '2023-05-01 15:17:05', NULL, '2023-05-01 15:17:05', '210:0:0:1'),
(22, '7070603571`', 'niyish!234', 'Admin', 0, 0, 250, '2023-05-06 21:23:21', NULL, '2023-05-06 21:23:21', NULL, '2023-05-06 21:23:21', '210:0:0:1');

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

DROP TABLE IF EXISTS `login_master`;
CREATE TABLE IF NOT EXISTS `login_master` (
  `i_id` int NOT NULL AUTO_INCREMENT,
  `v_name` varchar(60) NOT NULL,
  `v_email` varchar(60) NOT NULL,
  `v_password` mediumtext NOT NULL,
  `v_role` varchar(20) NOT NULL,
  `t_is_approve` tinyint(1) NOT NULL DEFAULT '0',
  `t_is_active` tinyint(1) NOT NULL DEFAULT '1',
  `t_is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `i_created_id` int NOT NULL,
  `dt_created_at` datetime NOT NULL,
  `i_updated_id` int NOT NULL,
  `dt_updated_at` datetime NOT NULL,
  `i_deleted_id` int DEFAULT NULL,
  `dt_deleted_at` datetime DEFAULT NULL,
  `v_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`i_id`, `v_name`, `v_email`, `v_password`, `v_role`, `t_is_approve`, `t_is_active`, `t_is_deleted`, `i_created_id`, `dt_created_at`, `i_updated_id`, `dt_updated_at`, `i_deleted_id`, `dt_deleted_at`, `v_ip`) VALUES
(1, 'rajaadmin', 'kinggraphic786@gmail.com', '$2y$10$7MP.wCXRNocGbKPoyWx1H.GAyfyrxNqcNesSfbhIgxILeegkE1/fO', 'admin', 1, 1, 0, 999, '2019-07-03 18:20:26', 1, '2019-11-13 18:07:56', NULL, NULL, '103.249.233.25'),
(2, 'raja', 'kinggraphics1987@gmail.com', '$2y$10$pYmyXXoIC8IK.PJ2eSPQ.eN.LN8hepAlkzR8MFTGdVbcmEmZFvLey', 'customer', 1, 1, 0, 999, '2019-12-19 18:00:48', 999, '2019-12-19 18:00:48', NULL, NULL, '103.249.233.10'),
(3, 'shaktiscreen', 'shaktiscreen@gmail.com', '$2y$10$C7PcZ8/3Vuq45RURvXdNe.9cbcsws2LxsOqnR1IdCrzuI/mp6I0V6', 'customer', 1, 1, 0, 999, '2019-12-24 10:41:37', 999, '2019-12-24 10:41:37', NULL, NULL, '122.170.158.79');

-- --------------------------------------------------------

--
-- Table structure for table `registration_master`
--

DROP TABLE IF EXISTS `registration_master`;
CREATE TABLE IF NOT EXISTS `registration_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mobile_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cpassword` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `is_deleted` tinyint NOT NULL DEFAULT '0',
  `created_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_id` int DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_id` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `ip` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_master`
--

INSERT INTO `registration_master` (`id`, `name`, `mobile_no`, `password`, `cpassword`, `address`, `photo`, `role`, `is_active`, `is_deleted`, `created_id`, `created_at`, `updated_id`, `updated_at`, `deleted_id`, `deleted_at`, `ip`) VALUES
(1, 'Nitish kumar', '7070603571', '4561', '4561', 'Bihar', '', 'admin', 1, 0, NULL, '2023-06-01 14:52:15', NULL, '2023-06-01 14:52:15', NULL, '2023-06-01 14:52:15', 0),
(2, 'Raja kumar', '7070603521', '1234', '1234', 'Rajsthan', '', ' voter', 1, 0, NULL, '2023-06-01 14:55:17', NULL, '2023-06-01 14:55:17', NULL, '2023-06-01 14:55:17', 0),
(3, 'Rajan singh', '7070603571', '4561', 'ef', 'fbgfdb', '', 'admin', 1, 0, NULL, '2023-06-01 14:55:45', NULL, '2023-06-01 14:55:45', NULL, '2023-06-01 14:55:45', 0),
(4, 'Rishav pandya', '987456210', '7777', 'ef', 'fbgfdb', '', ' voter', 1, 0, NULL, '2023-06-01 14:58:10', NULL, '2023-06-01 14:58:10', NULL, '2023-06-01 14:58:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

DROP TABLE IF EXISTS `student_master`;
CREATE TABLE IF NOT EXISTS `student_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `is_deleted` tinyint NOT NULL DEFAULT '0',
  `created_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_id` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_id` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`id`, `email_id`, `password`, `mobile`, `is_active`, `is_deleted`, `created_id`, `created_at`, `updated_id`, `updated_at`, `deleted_id`, `deleted_at`, `ip`) VALUES
(1, 'admi@gmail.com', 'admin', '1234567890', 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'abc@gmail.com', 'abc', '7896541230', 1, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'pqr@gmail.com', 'pqr', '8956214730', 1, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'xyz@gmail.com', 'xyz', '8965231470', 1, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'raj@gmail.com', '78945', '7070603571', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Ranajee@gmail.com', '78945', '8298687932', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'nitish@gmail.com', '78945', '7070603571', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'kripanidhi@gmail.com ', '7410', '7896541230', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'mukesh@gmail.com', '1111', '9625413058', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'kripanidhi@gmail.com ', '7410', '7896541230', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'mukesh@gmail.com', '1111', '9625413058', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'nitish@gmail.com', '78945', '7070603571', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'nitish@gmail.com', '78945', '7070603571', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'nitish@gmail.com', '78945', '7070603571', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'ranajee@gmail.com', 'rana@1234', '8547123698', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'ranajee@gmail.com', 'rana@1234', '8547123698', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'kishan@gmail.com', 'kishan@1234', '752101456', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'kishan@gmail.com', 'kishan@1234', '752101456', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'kripanidhi@gmail.com ', '7410', '7896541230', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'mukesh@gmail.com', '1111', '9625413058', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'kripanidhi@gmail.com ', '7410', '7896541230', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'mukesh@gmail.com', '1111', '9625413058', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'kripanidhi@gmail.com ', '7410', '7896541230', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'mukesh@gmail.com', '1111', '9625413058', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'krishan@gmail.com ', 'krishan@12234', '8954752102', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'maharaj@gmail.com', '2222', '91655253058', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'kishan@gmail.com', 'kishan@1234', '752101456', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
