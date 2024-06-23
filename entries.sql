-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 10:06 AM
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
-- Database: `admissions`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `pgname` text NOT NULL,
  `pgemail` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `zip` int(6) NOT NULL,
  `course` varchar(500) NOT NULL,
  `branch` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`fname`, `lname`, `pgname`, `pgemail`, `email`, `phoneno`, `dob`, `gender`, `address`, `city`, `state`, `zip`, `course`, `branch`) VALUES
('ALLEN', 'IMMANUEL', 'aaaaa', 'bbbb@gmail.com', 'allenimmanuelr.23aim@kongu.edu', 7708269289, '2006-06-19', 'Male', 'wdawdad,adwadawdaw,awdawda', 'TIRUNELVELI', 'Tamil Nadu', 627007, 'B.E/B.Tech', 'Artificial Intelligence and Machine Learning'),
('KOKULA', 'SELVAM', 'aaaaa', 'bbbb@gmail.com', 'kokulaselamb.23aim@kongu.edu', 9944556688, '2005-06-19', 'Male', 'wdawdad,adwadawdaw,awdawda', 'TIRUNELVELI', 'Tamil Nadu', 627007, 'B.E/B.Tech', 'Artificial Intelligence and Machine Learning');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
