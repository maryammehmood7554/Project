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
-- Database: `reviews_ratings`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `reviews` varchar(255) NOT NULL,
  `ratings` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `reviews`, `ratings`) VALUES
(1, 'Iqra', 'The booking system on Cinepax is incredibly smooth. I was able to select my preferred seats easily. The website layout makes it very easy to find movie details, trailers, and show timings. Overall, an excellent experience.', 5),
(2, 'Zara', '\"I really enjoyed using the Cinepax booking system. The interface is user-friendly, and I love how the seat selection is visually clear. My only suggestion would be to add more payment options, but overall, it\'s a great experience!\"', 4),
(3, 'Maria', '\"I loved how quickly I was able to book my tickets! The interface is intuitive, the loading speed is great, and the payment process was smooth. No issues at all – everything worked perfectly!\"', 5),
(4, 'Ayesha', '\"This is one of the best ticket booking experiences I’ve had. Everything loads quickly, and I had no issues selecting my preferred seats. Plus, the confirmation email and SMS were sent instantly. Great job, Cinepax!\"', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
