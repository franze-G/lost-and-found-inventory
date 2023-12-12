-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 02:05 PM
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
  `founddate` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `serial`, `fullname`, `studentnum`, `course`, `itemtype`, `itemname`, `category`, `color`, `registerdate`, `lostdate`, `founddate`, `status`, `email`, `image`) VALUES
(80, 'V52054455', 'FRANZE', '2023090', 'BS CPSCIE', 'CELLPHONE', 'IP 15PRO', 'VALUABLE', 'BLACK', '2023-12-12', '0000-00-00', '2023-12-13', 'FOUND', 'franze@gmail.com', '../Item/image657744103cb9c_daily.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
