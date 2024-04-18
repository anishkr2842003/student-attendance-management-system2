-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 02:33 AM
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
-- Database: `attendance-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(10) NOT NULL,
  `student_id` int(100) NOT NULL,
  `curr_date` date NOT NULL,
  `atd_month` varchar(255) NOT NULL,
  `atd_year` varchar(255) NOT NULL,
  `atd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `curr_date`, `atd_month`, `atd_year`, `atd`) VALUES
(1, 1, '2024-04-01', 'Apr', '2024', 'P'),
(2, 2, '2024-04-01', 'Apr', '2024', 'P'),
(3, 3, '2024-04-01', 'Apr', '2024', 'P'),
(4, 4, '2024-04-01', 'Apr', '2024', 'P'),
(5, 5, '2024-04-01', 'Apr', '2024', 'P'),
(6, 6, '2024-04-01', 'Apr', '2024', 'P'),
(7, 7, '2024-04-01', 'Apr', '2024', 'P'),
(8, 8, '2024-04-01', 'Apr', '2024', 'P'),
(9, 9, '2024-04-01', 'Apr', '2024', 'P'),
(10, 10, '2024-04-01', 'Apr', '2024', 'P'),
(11, 11, '2024-04-01', 'Apr', '2024', 'P'),
(12, 12, '2024-04-01', 'Apr', '2024', 'P'),
(13, 13, '2024-04-01', 'Apr', '2024', 'P'),
(14, 14, '2024-04-01', 'Apr', '2024', 'P'),
(15, 1, '2024-04-02', 'Apr', '2024', 'P'),
(16, 2, '2024-04-02', 'Apr', '2024', 'P'),
(17, 3, '2024-04-02', 'Apr', '2024', 'P'),
(18, 4, '2024-04-02', 'Apr', '2024', 'P'),
(19, 5, '2024-04-02', 'Apr', '2024', 'P'),
(20, 9, '2024-04-02', 'Apr', '2024', 'P'),
(21, 10, '2024-04-02', 'Apr', '2024', 'P'),
(22, 11, '2024-04-02', 'Apr', '2024', 'P'),
(23, 12, '2024-04-02', 'Apr', '2024', 'P'),
(24, 13, '2024-04-02', 'Apr', '2024', 'P'),
(25, 6, '2024-04-02', 'Apr', '2024', 'A'),
(26, 7, '2024-04-02', 'Apr', '2024', 'A'),
(27, 8, '2024-04-02', 'Apr', '2024', 'A'),
(28, 14, '2024-04-02', 'Apr', '2024', 'A'),
(29, 1, '2024-04-05', 'Apr', '2024', 'P'),
(30, 2, '2024-04-05', 'Apr', '2024', 'P'),
(31, 3, '2024-04-05', 'Apr', '2024', 'P'),
(32, 4, '2024-04-05', 'Apr', '2024', 'P'),
(33, 5, '2024-04-05', 'Apr', '2024', 'P'),
(34, 9, '2024-04-05', 'Apr', '2024', 'P'),
(35, 10, '2024-04-05', 'Apr', '2024', 'P'),
(36, 11, '2024-04-05', 'Apr', '2024', 'P'),
(37, 12, '2024-04-05', 'Apr', '2024', 'P'),
(38, 14, '2024-04-05', 'Apr', '2024', 'P'),
(39, 6, '2024-04-05', 'Apr', '2024', 'A'),
(40, 7, '2024-04-05', 'Apr', '2024', 'A'),
(41, 8, '2024-04-05', 'Apr', '2024', 'A'),
(42, 13, '2024-04-05', 'Apr', '2024', 'A'),
(43, 15, '2024-04-05', 'Apr', '2024', 'A'),
(44, 1, '2024-04-18', 'Apr', '2024', 'P'),
(45, 2, '2024-04-18', 'Apr', '2024', 'P'),
(46, 3, '2024-04-18', 'Apr', '2024', 'P'),
(47, 4, '2024-04-18', 'Apr', '2024', 'P'),
(48, 5, '2024-04-18', 'Apr', '2024', 'P'),
(49, 6, '2024-04-18', 'Apr', '2024', 'P'),
(50, 7, '2024-04-18', 'Apr', '2024', 'P'),
(51, 8, '2024-04-18', 'Apr', '2024', 'P'),
(52, 9, '2024-04-18', 'Apr', '2024', 'P'),
(53, 10, '2024-04-18', 'Apr', '2024', 'P'),
(54, 14, '2024-04-18', 'Apr', '2024', 'P'),
(55, 11, '2024-04-18', 'Apr', '2024', 'A'),
(56, 12, '2024-04-18', 'Apr', '2024', 'A'),
(57, 13, '2024-04-18', 'Apr', '2024', 'A'),
(58, 15, '2024-04-18', 'Apr', '2024', 'A'),
(59, 1, '2024-04-01', 'Apr', '2024', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `fname`, `mname`, `mobile`, `email`) VALUES
(1, 'Anish Kumar', 'Chitranjan singh', 'Chinta Devi', '123456789', 'a@gmail.com'),
(2, 'Manish Kumar', 'Chitranjan singh', 'Chinta Devi', '123456789', 'a@gmail.com'),
(3, 'Aman Kumar', 'Chitranjan singh', 'Chinta Devi', '1234567890', 'a@gmail.com'),
(4, 'Sita Kumari', 'Basant Singh', 'Arti Devi', '1234567890', 'a@gmail.com'),
(5, 'Ritu Kumari', 'Basant Singh', 'Arti Devi', '1234567890', 'a@gmail.com'),
(6, 'Amrish Kumar', 'Basant Singh', 'Arti Devi', '1234567890', 'a@gmail.com'),
(7, 'Pankaj Kumar', 'Niranjan Singh', 'Suryavanti devi', '1234567890', 'a@gmail.com'),
(8, 'Pawan Kumar', 'Niranjan Singh', 'Suryavanti devi', '1234567890', 'a@gmail.com'),
(9, 'Satish Kumar', 'Nagendra singh', 'Nothing', '1234567890', 'a@gmail.com'),
(10, 'Sachin Kumar', 'Niranjan Singh', 'Nothing', '1234567890', 'a@gmail.com'),
(11, 'Sandeep Kumar', 'Nagendra singh', 'Nothing', '1234567890', 'a@gmail.com'),
(12, 'Prince kumar', 'Raj Kumar singh', 'Nothing', '123456789', 'a@gmail.com'),
(13, 'Priti Kumari', 'Raj Kumar singh', 'Nothing', '123456789', 'a@gmail.com'),
(14, 'Priya Kumari', 'Raj Kumar singh', 'Nothing', '123456789', 'a@gmail.com'),
(15, 'New Student', 'Father', 'Mother', '1234567890', 'new@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(5, 'admin', '123456789', 'admin@gmail.com', '$2y$10$WaOsYJasKw8Ed4Qq72VAO.WUEyi.ThsDE18CcMeTSs9G9cGINZWWK'),
(6, 'Anish Kumar', '123456789', 'anish@gmail.com', '$2y$10$stBv5TsCZoXPdD2qsdfS9.U7vetDoIqaHmhcn0rRW5AOjgp1poLz2'),
(7, 'New Teacher', '1234567890', 'teacher@gmail.com', '$2y$10$Rw4T1Yd4vevF7MAVgEr2b.J8Er2cwKDc5cqVvrioDtw3eKbeEAWQW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
