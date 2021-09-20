-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 06:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(10) UNSIGNED NOT NULL,
  `description` varchar(160) NOT NULL DEFAULT 'Unknown Message Error',
  `name` varchar(10) NOT NULL DEFAULT 'None',
  `price` varchar(14) DEFAULT NULL,
  `add_by_user` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `description`, `name`, `price`, `add_by_user`, `created_at`, `updated_at`) VALUES
(22, ' Provides a notification for a refunded product.', 'prod1', '123', 'user3', '2021-09-18 08:26:53', '2021-09-18 13:56:53'),
(23, 'Provides a confirmation for a successfully shipped Order.', 'Prod7', '1235', 'user3', '2021-09-18 08:27:01', '2021-09-20 09:34:59'),
(25, ' Provides a confirmation for a successfully shipped Order.', 'img1', '123', 'user2', '2021-09-18 08:28:10', '2021-09-18 13:58:10'),
(26, 'Provides a notification for a voided product.', 'p1', '123', 'user1', '2021-09-18 08:28:43', '2021-09-18 13:58:43'),
(29, ' Provides a confirmation for a successfully shipped Order.', 'Prod6', '123', 'user3', '2021-09-18 09:59:25', '2021-09-20 09:34:18'),
(30, 'Provides a notification for a voided product.', 'Prod5', '123', 'user3', '2021-09-18 09:59:30', '2021-09-20 09:34:02'),
(31, ' Provides a notification for a refunded product.', 'Prod4', '1', 'user3', '2021-09-18 09:59:39', '2021-09-20 09:33:46'),
(32, 'Provides a confirmation for a successfully shipped Order.', 'Prod3', '123', 'user3', '2021-09-18 09:59:44', '2021-09-20 09:33:15'),
(33, 'dummy', 'Prod2', '124', 'user3', '2021-09-18 10:03:24', '2021-09-20 09:32:52'),
(36, ' Provides a notification for a refunded product.', 'Prod8', '123', 'user3', '2021-09-20 04:05:26', '2021-09-20 09:35:26'),
(37, 'Provides a notification for a refunded product.', 'Prod9', '123', 'user3', '2021-09-20 04:05:49', '2021-09-20 09:35:49'),
(38, ' Provides a confirmation for a successfully shipped Order.', 'Prod10', '1234', 'user3', '2021-09-20 04:06:46', '2021-09-20 09:36:46'),
(39, ' Provides a notification for a refunded product.', 'Prod11', '123', 'user3', '2021-09-20 04:07:13', '2021-09-20 09:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `Name`, `username`, `password`) VALUES
(1, 'user1', 'user@gmail.com', 'admin'),
(9, 'user2', 'a@gmail.com', 'a'),
(10, 'user3', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
