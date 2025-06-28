-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 06:25 PM
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
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` enum('kids','adult') NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `image`, `category`, `value`) VALUES
(1, 'Frozen', 'Disney Animated Musical Fantasy Film ', 'img/frozen.jpg', 'kids', 'Frozen'),
(2, 'Doremon', 'Doraemon Movie refers to the animated films.', 'img/doremon.jpg', 'kids', 'Doremon'),
(3, 'Mufasa', 'The Lion King', 'img/mufasa.jpg', 'kids', 'Mufasa'),
(4, 'Bhoot Bangla', 'Horror-comedy film led by Akshay Kumar.', 'img/horror.jpg', 'adult', 'Bhoot Bangla'),
(5, 'Spiderman', '\"With great power, comes great responsibility\" and \"Hey, I\'m Spider-Man!\"', 'img/spiderman.jpg', 'kids', 'Spiderman'),
(6, 'Umro Ayyar', 'Umro Ayyar-Pakistani sci-fi/fantasy film based on the character Umro Ayyar from the classical Urdu-Persian novel', 'img/umro-ayyar.jpg', 'adult', 'Umro Ayyar'),
(7, 'Bee Movie', 'A bee who just finished college, is assigned to a job making honey', 'img/bee.jpg', 'kids', 'Bee Movie'),
(8, 'The Nun', 'A horror movie investigating the suicide of a young nun.', 'img/the-nun.jpg', 'adult', 'The Nun'),
(9, 'Kung Fu Panda', 'A Panda who dreams of becoming a Kung Fu champion.', 'img/panda.jpg', 'kids', 'Kung Fu Panda'),
(10, 'Penguins Madagascar', 'Penguins of Madagascar (2014) is an animated spy-comedy film produced by DreamWorks Animation.It is a spin-off of the Madagascar film series and follows the adventures of the four penguins', 'img/penguins.jpg', 'kids', 'Penguins Madagascar'),
(11, 'Actor In Law', 'The Pakistani socio-comedy film follows the life of a young lawyer with a flair for dramatics. \r\n                        ', 'img/actor-in-law.jpg', 'adult', 'Actor In Law'),
(12, 'Minions', 'Animated film that follows the yellow, mischievous, and lovable creatures.', 'img/minions.jpg', 'kids', 'Minions');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`,`value`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
