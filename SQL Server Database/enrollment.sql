-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2025 at 11:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fill`
--

CREATE TABLE `tbl_fill` (
  `id` int(255) NOT NULL,
  `s_fname` varchar(255) NOT NULL,
  `s_lname` varchar(255) NOT NULL,
  `s_mname` varchar(255) NOT NULL,
  `s_suffix` varchar(255) NOT NULL,
  `s_datebirth` date NOT NULL,
  `s_placebirth` varchar(255) NOT NULL,
  `s_age` int(255) NOT NULL,
  `s_relationship` varchar(255) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_zipcode` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_cell` varchar(255) NOT NULL,
  `s_type` varchar(255) NOT NULL,
  `s_religion` varchar(255) NOT NULL,
  `p_fname` varchar(255) NOT NULL,
  `p_lname` varchar(255) NOT NULL,
  `p_mname` varchar(255) NOT NULL,
  `p_age` int(255) NOT NULL,
  `p_suffix` varchar(255) NOT NULL,
  `p_relationship` varchar(255) NOT NULL,
  `p_religion` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_zipcode` int(255) NOT NULL,
  `p_cell` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `p_work` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fill`
--

INSERT INTO `tbl_fill` (`id`, `s_fname`, `s_lname`, `s_mname`, `s_suffix`, `s_datebirth`, `s_placebirth`, `s_age`, `s_relationship`, `s_address`, `s_zipcode`, `s_email`, `s_cell`, `s_type`, `s_religion`, `p_fname`, `p_lname`, `p_mname`, `p_age`, `p_suffix`, `p_relationship`, `p_religion`, `p_address`, `p_zipcode`, `p_cell`, `p_email`, `p_work`) VALUES
(1, 'Mark', 'Dela Cruz', 'Ken', 'None', '2006-01-01', 'Zamboanga City', 19, 'Single', 'Poblacion Ipil Z.S.P', '7001', 'example@gmail.com', '09123456789', 'Full Time', 'Catholic', 'John', 'Doe', 'Cruz', 30, 'None', 'Single', 'Catholic', 'Poblacion Ipil Z.S.P', 7001, '09123456789', 'example@gmail.com', 'Government Work');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fill`
--
ALTER TABLE `tbl_fill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fill`
--
ALTER TABLE `tbl_fill`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
