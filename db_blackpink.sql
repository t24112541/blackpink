-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 05:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blackpink`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_sale`
--

CREATE TABLE `db_sale` (
  `s_id` varchar(6) NOT NULL,
  `t_id` int(11) NOT NULL,
  `s_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_ticket`
--

CREATE TABLE `db_ticket` (
  `t_id` int(10) UNSIGNED NOT NULL,
  `t_count` int(11) NOT NULL,
  `t_date_sale` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_ticket`
--

INSERT INTO `db_ticket` (`t_id`, `t_count`, `t_date_sale`) VALUES
(1, 10, '2020-1-26 11:52:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_sale`
--
ALTER TABLE `db_sale`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `db_ticket`
--
ALTER TABLE `db_ticket`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_ticket`
--
ALTER TABLE `db_ticket`
  MODIFY `t_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
