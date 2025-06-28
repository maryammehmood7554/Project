-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 06:38 PM
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
-- Database: `movies-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(255) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `movie` varchar(255) DEFAULT NULL,
  `tickets` int(255) DEFAULT NULL,
  `seat` text NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `email`, `age`, `movie`, `tickets`, `seat`, `date_time`, `booking_date`) VALUES
(1, 'Zara', 'zara@gmail.com', 8, 'minions', 3, 'standard', '5/7/25 & 5:00PM', '2025-03-25 16:15:12'),
(2, 'Ayesha', 'ayesha@gmail.com', 12, 'minions', 3, 'standard', '4/7/25 & 9:00 PM', '2025-03-29 06:30:16'),
(3, 'Iqra', 'iqra@gmail.com', 26, 'Umro Ayyar', 3, 'premium', '6/7/25 & 6:00 PM', '2025-06-27 16:35:48'),
(4, 'Maria', 'maria@gmail.com', 15, 'Bhoot Bangla', 1, 'premium', '6/7/25 & 6:00 PM', '2025-06-27 16:37:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
