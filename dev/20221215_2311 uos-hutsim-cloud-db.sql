-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 11:11 PM
-- Server version: 5.7.40-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uos-hutsim-cloud-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `port_table`
--

CREATE TABLE `port_table` (
  `id` int(11) NOT NULL,
  `process_id` int(11) DEFAULT NULL,
  `port_number` int(11) DEFAULT NULL,
  `port_status` varchar(255) DEFAULT NULL,
  `process_ended` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `port_table`
--

INSERT INTO `port_table` (`id`, `process_id`, `port_number`, `port_status`, `process_ended`, `created_by`, `date_created`) VALUES
(1, 10676, 10306, 'disconnected', '2022-12-15 23:07:48', 'uos-web-user', '2022-12-15 23:04:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `port_table`
--
ALTER TABLE `port_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `port_table`
--
ALTER TABLE `port_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
