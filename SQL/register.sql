-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 08:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `serial` varchar(200) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `studentnum` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `itemtype` varchar(100) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `registerdate` date NOT NULL,
  `lostdate` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `serial`, `fullname`, `studentnum`, `course`, `itemtype`, `itemname`, `category`, `color`, `registerdate`, `lostdate`, `status`, `email`) VALUES
(65, 'V54461744', 'RJ CRUZ', '202119379', 'BS CPSCI', 'CELLPHONE', 'IP XR', 'VALUABLE', 'BLACK', '2023-11-27', '2023-11-30', 'LOST', 'carl@gmail.com'),
(66, 'NV97769415', 'RYU', '202014886', 'BS CPSCI', 'TUMBLER', 'AQUAFLASK', 'NON-VALUABLE', 'WHITE', '2023-11-28', '2023-11-30', 'LOST', 'franze@gmail.com'),
(67, 'V67988168', 'RJ CRUZ', '2020199', 'BS NURSING', 'CELLPHONE', 'IP 15PRO', 'VALUABLE', 'TITANIUM ', '2023-11-30', '2023-12-01', 'FOUND', 'rj@gmail.com'),
(72, 'V90552728', 'franze garcia', '202119379', 'BS ACCOUNTANCY', 'CELLPHONE', 'IPHONE', 'VALUABLE', 'BLACK', '2023-12-02', '0000-00-00', '', 'franze.dg@yahoo.com'),
(74, 'V15553407', 'JAPS MENDOZA', '202010291', 'BS IT', 'CELLPHONE', 'IP 15 PRO', 'VALUABLE', 'BLACK', '2023-12-02', '0000-00-00', 'REGISTERED', 'franze.garcia@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
