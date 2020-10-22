-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 23, 2020 at 04:51 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `deploys`
--

DROP TABLE IF EXISTS `deploys`;
CREATE TABLE IF NOT EXISTS `deploys` (
  `d_id` int(100) NOT NULL AUTO_INCREMENT,
  `d_equipment` varchar(100) NOT NULL,
  `d_school` varchar(100) NOT NULL,
  `d_employee` varchar(100) NOT NULL,
  `d_quantity` int(100) NOT NULL,
  `d_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `d_price` int(100) DEFAULT NULL,
  `d_tprice` int(100) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deploys`
--

INSERT INTO `deploys` (`d_id`, `d_equipment`, `d_school`, `d_employee`, `d_quantity`, `d_date`, `d_price`, `d_tprice`) VALUES
(13, 'LG TV 200', 'FEU', 'Joram', 10, '2020-10-15 06:13:48', 10000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `emp_id` int(100) NOT NULL AUTO_INCREMENT,
  `emp_fname` varchar(100) NOT NULL,
  `emp_lname` varchar(100) NOT NULL,
  `emp_contact` int(100) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_fname`, `emp_lname`, `emp_contact`, `emp_address`) VALUES
(14, 'Joram', 'Padilla', 5012399, '#14 Mc Arthur');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `e_id` int(50) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(100) NOT NULL,
  `e_price` int(100) NOT NULL,
  `e_sellingprice` int(100) NOT NULL,
  `e_stock` int(255) NOT NULL,
  `e_date` date DEFAULT NULL,
  PRIMARY KEY (`e_id`),
  UNIQUE KEY `e_name` (`e_name`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`e_id`, `e_name`, `e_price`, `e_sellingprice`, `e_stock`, `e_date`) VALUES
(36, 'Samsung TV', 5000, 20000, 15, NULL),
(38, 'LG TV 200', 10000, 20000, 40, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `stock_id` int(100) NOT NULL,
  `stock_eid` int(100) DEFAULT NULL,
  `stock_sname` varchar(100) NOT NULL,
  `stock_ename` varchar(100) NOT NULL,
  `stock_quantity` bigint(255) NOT NULL,
  `stock_price` int(100) DEFAULT NULL,
  `stock_tprice` int(100) DEFAULT NULL,
  `stock_bdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `stock_rdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stock_id`, `stock_eid`, `stock_sname`, `stock_ename`, `stock_quantity`, `stock_price`, `stock_tprice`, `stock_bdate`, `stock_rdate`) VALUES
(1111, NULL, 'Patrick Simbula', 'LG TV 200', 50, 10000, 500000, '2020-10-15 06:13:22', '2020-10-15 06:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `s_id` int(100) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(30) NOT NULL,
  `s_contact` int(15) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_address` varchar(50) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`s_id`, `s_name`, `s_contact`, `s_email`, `s_address`) VALUES
(13, 'Patrick Simbula', 909090, 'toks@yahoo.com', '#213 Boni');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@yahoo.com', '$2y$10$n9.vqYkmi1qj/BRiQbZm2uQRkAJez96ISRsOukXkgpgDEQTs8LtA2', NULL, '2020-09-26 13:05:54', '2020-09-26 13:05:54'),
(2, 'bro', 'bro@yahoo.com', '$2y$10$NYGt3sVgvmBKkfG5bNpsLuTNYbD9nKqZ2wW1A9y0Fj.k/NI7eP8jO', NULL, '2020-09-26 14:12:37', '2020-09-26 14:12:37'),
(3, 'user', 'user123@yahoo.com', '$2y$10$c0W0tiQ3nlgaBveO/phQqu2qA7CJI8lkmYLHpAibzYIv7XOT.t8ZK', NULL, '2020-09-29 13:24:20', '2020-09-29 13:24:20'),
(4, 'user', 'dex@yahoo.com', '$2y$10$mkgsilYevGKp5wIoEpz8Pu3Ue.OfR8M2KdADphb9uEQcVLpO.80Am', NULL, '2020-09-29 14:29:28', '2020-09-29 14:29:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
