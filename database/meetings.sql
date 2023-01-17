-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 09:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meetingscheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `start_time` time NOT NULL,
  `duration` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `title`, `description`, `start_time`, `duration`, `status`, `password`, `created_at`, `updated_at`) VALUES
(1, 'This is the meeting title', 'This is the meeting description.', '12:00:00', '2 Hours', 'proposed', '12345', '2022-09-05', '2022-09-05'),
(3, 'meeting schedules', 'Office manger', '12:59:00', '20 min', 'confirmed', '11111', '2022-09-08', '2022-09-08'),
(4, 'Meeting', 'Office stafe', '11:00:00', '30 minutes', 'confirmed', '1234', '2022-09-08', '2022-09-08'),
(5, 'Meeting', 'HR manger', '09:00:00', '1 hours', 'confirmed', '1234', '2022-09-08', '2022-09-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
