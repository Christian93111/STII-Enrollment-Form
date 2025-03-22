-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2025 at 10:06 AM
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
  `id` int(11) NOT NULL,
  `s_fname` varchar(255) NOT NULL,
  `s_lname` varchar(255) NOT NULL,
  `s_mname` varchar(255) NOT NULL,
  `s_suffix` varchar(255) NOT NULL,
  `s_datebirth` date NOT NULL,
  `s_placebirth` varchar(255) NOT NULL,
  `s_age` int(11) NOT NULL,
  `s_relationship` varchar(255) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_course` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_cell` varchar(255) NOT NULL,
  `s_type` varchar(255) NOT NULL,
  `s_religion` varchar(255) NOT NULL,
  `s_year` varchar(255) NOT NULL,
  `s_past_school` varchar(255) NOT NULL,
  `m_fname` varchar(255) NOT NULL,
  `m_lname` varchar(255) NOT NULL,
  `m_mname` varchar(255) NOT NULL,
  `m_datebirth` date NOT NULL,
  `m_age` int(11) NOT NULL,
  `m_relationship` varchar(255) NOT NULL,
  `m_religion` varchar(255) NOT NULL,
  `m_address` varchar(255) NOT NULL,
  `m_cell` varchar(255) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_work` varchar(255) NOT NULL,
  `f_fname` varchar(255) NOT NULL,
  `f_lname` varchar(255) NOT NULL,
  `f_mname` varchar(255) NOT NULL,
  `f_suffix` varchar(255) NOT NULL,
  `f_datebirth` date NOT NULL,
  `f_age` int(11) NOT NULL,
  `f_relationship` varchar(255) NOT NULL,
  `f_religion` varchar(255) NOT NULL,
  `f_address` varchar(255) NOT NULL,
  `f_cell` varchar(255) NOT NULL,
  `f_email` varchar(255) NOT NULL,
  `f_work` varchar(255) NOT NULL,
  `g_fname` varchar(255) NOT NULL,
  `g_lname` varchar(255) NOT NULL,
  `g_mname` varchar(255) NOT NULL,
  `g_suffix` varchar(255) NOT NULL,
  `g_datebirth` varchar(255) NOT NULL,
  `g_age` varchar(255) NOT NULL,
  `g_relationship` varchar(255) NOT NULL,
  `g_religion` varchar(255) NOT NULL,
  `g_address` varchar(255) NOT NULL,
  `g_cell` varchar(255) NOT NULL,
  `g_email` varchar(255) NOT NULL,
  `g_work` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(2555) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user`, `firstname`, `lastname`, `email`, `cell`) VALUES
(1, 'user', 'user', 'guest', 'Guest', '123', 'example@gmail.com', '09123456789'),
(2, 'admin', 'admin', 'admin', 'Admin', '123', 'example@gmail.com', '09123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fill`
--
ALTER TABLE `tbl_fill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fill`
--
ALTER TABLE `tbl_fill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
