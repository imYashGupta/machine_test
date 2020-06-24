-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2020 at 02:43 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_data`
--

DROP TABLE IF EXISTS `api_data`;
CREATE TABLE IF NOT EXISTS `api_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_name` varchar(20) NOT NULL,
  `ip_address` varchar(150) NOT NULL,
  `call_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_data`
--

INSERT INTO `api_data` (`id`, `partner_name`, `ip_address`, `call_date`) VALUES
(1, 'A', '::1', '2020-06-23 22:33:47'),
(2, 'B', '::1', '2020-06-23 22:33:56'),
(3, 'C', '::1', '2020-06-22 22:34:01'),
(4, 'A', '::1', '2020-06-23 22:34:07'),
(5, 'B', '::1', '2020-06-22 22:34:11'),
(6, 'C', '::1', '2020-06-22 22:34:16'),
(7, 'C', '::1', '2020-06-23 22:35:33'),
(8, 'C', '::1', '2020-06-23 22:35:54'),
(22, 'A', '::1', '2020-06-24 08:02:08'),
(21, 'C', '::1', '2020-06-24 07:54:49'),
(20, 'B', '::1', '2020-06-24 07:54:25'),
(19, 'B', '::1', '2020-06-24 07:54:19'),
(18, 'A', '::1', '2020-06-24 07:53:37'),
(17, 'A', '::1', '2020-06-24 07:51:59'),
(23, 'A', '::1', '2020-06-24 08:05:16'),
(24, 'B', '::1', '2020-06-24 08:06:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
