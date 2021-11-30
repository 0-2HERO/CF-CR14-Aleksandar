-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2021 at 12:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd_cr12_mount_everest_aleksandar`
--
CREATE DATABASE IF NOT EXISTS `fswd_cr12_mount_everest_aleksandar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd_cr12_mount_everest_aleksandar`;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `picture`, `locationName`, `price`, `description`, `longitude`, `latitude`) VALUES
(24, '61a5f54f29bc9.jpeg', 'Vienna', '200', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab praesentium excepturi voluptates dolorum beatae iusto! Delectus enim laudantium, ab ipsam at rem nihil cupiditate doloremque, debitis reprehenderit nulla eaque provident!', '16.363449', '48.210033'),
(25, '61a5f5efda24e.jpeg', 'London', '200', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab praesentium excepturi voluptates dolorum beatae iusto! Delectus enim laudantium, ab ipsam at rem nihil cupiditate doloremque, debitis reprehenderit nulla eaque provident!', '-0.118092', '51.509865'),
(27, '61a5f74c46c34.jpeg', 'Sidney', '299', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab praesentium excepturi voluptates dolorum beatae iusto! Delectus enim laudantium, ab ipsam at rem nihil cupiditate doloremque, debitis reprehenderit nulla eaque provident', '33.8688', '151.2093');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
