-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 09:06 AM
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
-- Database: `chronic_disease`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `userId` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `contactNo` bigint(11) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `address` varchar(100) NOT NULL,
  `emergencyContactNo` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`userId`, `first_name`, `last_name`, `email`, `password`, `dateOfBirth`, `contactNo`, `gender`, `address`, `emergencyContactNo`) VALUES
(3, '', 'jsu', '', 'kks', '0000-00-00', 0, '', '', 0),
(4, 'abir', 'hossain', 'abirhossain9544@gmail.com', '8937', '2023-12-05', 172285, 'Male', 'ishwardi', 1722085),
(5, '', '', '', '', '0000-00-00', 0, '', '', 0),
(7, 'Abir', 'jks', 'abirhossain9544@gmail.com', '1234', '2023-12-05', 555, 'Male', 'ghjfy@hgg', 565687),
(8, '', '', 'abirhossain9544@gmail.com', '1234', '2023-12-05', 555, 'Male', 'ghjfy@hgg', 565687),
(9, '', '', '', '', '0000-00-00', 0, '', '', 0),
(10, 'tanvir', 'ahmed', 'tanvir@gmail.com', '123456', '2023-12-25', 55555545, 'Male', 'uttara,dhaka', 854453),
(11, 'tas', 'lima', 'taslima@iub', '77778541', '2023-12-15', 7744544, 'Female', 'htded', 74454),
(12, 'apurbo', 'karmokar', 'apurbo@gmail.com', '26351', '2023-12-20', 4477, 'Male', 'ishwardi', 25584),
(13, '', '', '', '', '0000-00-00', 0, '', '', 0),
(14, 'tanvir', 'ahmed', 'tanvir124@gmail.com', '7jhud', '2023-12-11', 555, 'Male', 'Uttara, dhaka', 5455),
(18, '', '', '', '', '0000-00-00', 0, '', '', 0),
(19, '', '', '', '', '0000-00-00', 0, '', '', 0),
(20, '', '', '', '', '0000-00-00', 0, '', '', 0),
(21, '', '', '', '', '0000-00-00', 0, '', '', 0),
(22, '', '', '', '', '0000-00-00', 0, '', '', 0),
(23, '', '', '', '', '0000-00-00', 0, '', '', 0),
(24, '', '', '', '', '0000-00-00', 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
