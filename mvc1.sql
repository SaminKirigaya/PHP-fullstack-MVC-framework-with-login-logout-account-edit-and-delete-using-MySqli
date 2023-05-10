-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 08:51 PM
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
-- Database: `mvc1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `slno` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`slno`, `email`, `pass`, `img`) VALUES
(1, 'admin@gmail.com', 'saminarnob', 'adminimg.jpg'),
(81, 'asad@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'text2photo-e092b2c21b4abc6e8f7c8ee4f72999f1.jpeg'),
(82, 'asad@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'text2photo-e092b2c21b4abc6e8f7c8ee4f72999f1.jpeg'),
(83, 'asad@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'text2photo-e092b2c21b4abc6e8f7c8ee4f72999f1.jpeg'),
(84, 'asad@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'text2photo-e092b2c21b4abc6e8f7c8ee4f72999f1.jpeg'),
(85, 'aritra@gmail.com', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '66a555e0c8c3de3cae66dcc76cf4ac8e.jpg'),
(86, 'goku@gmail.com', '1111111111111111111111111111111', 'text2photo-04abf9eb0f6895c7dd2514f13e0da825.jpeg'),
(87, 'prince@gmail.com', 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 'text2photo-4d8f91fd8a7ef8727f9792e5e319de44.jpeg'),
(88, 'pokimon@gmail.com', '555555555555555555', 'pokimon@gmail.jpg'),
(89, 'aaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa@gmail.jpeg'),
(91, 'samin@gmail.com', 'saminarnob', 'samin@gmail.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
