-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 10:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engg_college`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `stdname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `class` varchar(10) NOT NULL,
  `unirollnum` varchar(11) NOT NULL,
  `class_roll_num` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `blockchain_technology` int(11) NOT NULL,
  `digital_image_processing` int(11) NOT NULL,
  `e_commerce` int(11) NOT NULL,
  `automata_compiler_theory` int(11) NOT NULL,
  `web_technology` int(11) NOT NULL,
  `green_building_technology` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `stdname`, `fname`, `mname`, `dob`, `class`, `unirollnum`, `class_roll_num`, `gender`, `blockchain_technology`, `digital_image_processing`, `e_commerce`, `automata_compiler_theory`, `web_technology`, `green_building_technology`) VALUES
(1, 'Aditya Arya ', 'F001', 'M001', NULL, '6sem', '20EUCIT001', '20/541', 'male', 78, 88, 98, 68, 89, 80),
(2, 'Akshay Akwad', 'F002', 'M002', '0000-00-00', '6sem', '20EUCIT002', '20/542', 'male', 70, 80, 88, 88, 77, 80),
(3, 'Amaan Hussain ', 'F003', 'M003', '0000-00-00', '6sem', '20EUCIT003', '20/543', 'male', 78, 88, 68, 68, 70, 80),
(4, 'Aniruddh Soni', 'F004', 'M1\004', '0000-00-00', '6sem', '20EUCIT004', '20/280', 'male', 78, 88, 68, 68, 70, 80),
(5, 'Ashish Meena', 'F005', 'M005', '0000-00-00', '6sem', '20EUCIT005', '20/545', 'male', 78, 88, 68, 68, 70, 80),
(6, 'Deepak Goyal', 'F006', 'M006', '0000-00-00', '6sem', '20EUCIT006', '20/546', 'male', 70, 80, 88, 88, 77, 80),
(7, 'Dhruv Aggarwal ', 'F007', 'M007', '0000-00-00', '6sem', '20EUCIT007', '20/547', 'male', 78, 88, 68, 68, 70, 80),
(8, 'Divyanshi', 'F008', 'M008', '0000-00-00', '6sem', '20EUCIT008', '20/548', 'female', 78, 88, 68, 68, 70, 80),
(9, 'Diya Vijay', 'F009', 'M009', '0000-00-00', '6sem', '20EUCIT009', '20/549', 'female', 78, 88, 68, 68, 70, 80),
(10, 'Gaurav Nagar', 'F011', 'M011', '0000-00-00', '6sem', '20EUCIT011', '20/551', 'male', 70, 80, 88, 88, 77, 80),
(11, 'Gaurav Sunda ', 'F0302', 'M302', '0000-00-00', '6sem', '20EUCIT302', '20/025', 'male', 78, 88, 68, 68, 70, 80),
(12, 'Gunjan Vijay Vargiya', 'F012', 'M012', '0000-00-00', '6sem', '20EUCIT012', '20/552', 'female', 78, 88, 68, 68, 70, 80),
(13, 'Ishika Gautam', 'F013', 'M013', '0000-00-00', '6sem', '20EUCIT013', '20/553', 'female', 78, 88, 68, 68, 70, 80),
(14, 'Khushi Sharma', 'F014', 'M014', '0000-00-00', '6sem', '20EUCIT004', '20/210', 'female', 70, 80, 88, 88, 77, 80),
(15, 'Kritesh Vaishnav', 'F015', 'M015', '0000-00-00', '6sem', '20EUCIT005', '20/524', 'male', 78, 88, 68, 68, 70, 80),
(16, 'Lavish Nagar', 'F016', 'M016', '0000-00-00', '6sem', '20EUCIT016', '20/555', 'male', 78, 88, 68, 68, 70, 80),
(17, 'Garima Mahawar', 'F200', 'M200', '0000-00-00', '6sem', '21EUCIT200', '20/617', 'female', 78, 88, 68, 68, 70, 80),
(18, 'Admin', 'F000', 'M000', '0000-00-00', '6sem', 'ITADMIN', '100', 'male', 32, 36, 35, 50, 47, 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
