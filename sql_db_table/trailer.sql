-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 06:40 PM
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
-- Database: `trailers`
--

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `trailer_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trailer`
--

INSERT INTO `trailer` (`id`, `name`, `trailer_link`) VALUES
(1, 'Frozen', 'https://www.youtube.com/embed/he7UEvHjqdk'),
(2, 'Doremon', 'https://www.youtube.com/embed/xdyHzoDhSPU'),
(3, 'Bhoot Bangla', 'https://www.youtube.com/embed/zqwDkfOWCTw'),
(4, 'Spiderman', 'https://www.youtube.com/embed/N3J2JRQg040'),
(5, 'Umro Ayyar', 'https://www.youtube.com/embed/UwZBNbxBgM0'),
(6, 'Mufasa', 'https://www.youtube.com/embed/o17MF9vnabg'),
(7, 'The Nun', 'https://www.youtube.com/embed/QF-oyCwaArU'),
(8, 'Bee Movie', 'https://www.youtube.com/embed/CwcFRhXnFEo'),
(9, 'Penguins Madagascar', 'https://www.youtube.com/embed/4jsFpmFWOSs'),
(10, 'Actor In Law', 'https://www.youtube.com/embed/dHFzS2s-2Sg'),
(11, 'Kung Fu Panda', 'https://www.youtube.com/embed/NRc-ze7Wrxw'),
(12, 'Minions', 'https://www.youtube.com/embed/P9-FCC6I7u0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trailer`
--
ALTER TABLE `trailer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
