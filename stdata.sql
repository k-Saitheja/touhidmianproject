-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 07:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `sttable`
--

CREATE TABLE `sttable` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `countryCode` varchar(15) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `repass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sttable`
--

INSERT INTO `sttable` (`firstname`, `middlename`, `lastname`, `gender`, `countryCode`, `phone`, `address`, `email`, `pass`, `repass`) VALUES
('syed', 'touheed', 'quadri', 'male', '91', '8125460270', 'hyd', 'admin@gmail.com', 'admin', 'admin'),
('', 'reddy', 'reddy', 'Male', '', '78945692', 'manikunta', 'ppr@gmail.com', '', 'ppr@123'),
('', 'teja', 'garu', 'Male', '', '123456789', '18-8-450/a/52 ,Raza Nager,Edi bazar,hyderabad', 'saiteja11@gmail.com', '', 'saiteja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sttable`
--
ALTER TABLE `sttable`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
