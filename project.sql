-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 07:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `driverinformation`
--

CREATE TABLE `driverinformation` (
  `d_name` varchar(255) NOT NULL,
  `d_Id` varchar(16) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `d_address` varchar(255) NOT NULL,
  `plateNumber` varchar(7) NOT NULL,
  `d_zone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reportinformation`
--

CREATE TABLE `reportinformation` (
  `r_id` int(11) NOT NULL,
  `dr_Id` varchar(16) NOT NULL,
  `travel_distance` int(20) NOT NULL,
  `tap_go` int(20) NOT NULL,
  `accidents` int(20) NOT NULL,
  `month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userinformation`
--

CREATE TABLE `userinformation` (
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `user_contact` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinformation`
--

INSERT INTO `userinformation` (`user_name`, `user_email`, `province`, `user_contact`, `password`) VALUES
('DANIEL', 'daniel@gmail.com', 'kigali', '0788333329', '123456'),
('mbabazi', 'mbabazi@gmail.com', 'karongi', '0788333324', '654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driverinformation`
--
ALTER TABLE `driverinformation`
  ADD PRIMARY KEY (`d_Id`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`),
  ADD UNIQUE KEY `plateNumber` (`plateNumber`),
  ADD KEY `d_Id` (`d_Id`);

--
-- Indexes for table `reportinformation`
--
ALTER TABLE `reportinformation`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `dr_Id` (`dr_Id`);

--
-- Indexes for table `userinformation`
--
ALTER TABLE `userinformation`
  ADD PRIMARY KEY (`user_email`),
  ADD UNIQUE KEY `user_contact` (`user_contact`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reportinformation`
--
ALTER TABLE `reportinformation`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78333368;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driverinformation`
--
ALTER TABLE `driverinformation`
  ADD CONSTRAINT `driverinformation_ibfk_1` FOREIGN KEY (`d_Id`) REFERENCES `reportinformation` (`dr_Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
