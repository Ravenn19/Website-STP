-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 04:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'caca', 'sal@gmail.com', '$2y$10$XYIm5QlzUTQDpZ3FQgXmKefG3v3saS1g7OyGdt891jWCevgy411ES'),
(2, 'vv', 'saaa@gmail.com', '$2y$10$SfELzml5kqNuJ9pEn/bGW.2vn4ZcV.ATNs79/adipTnRszlkosbVe'),
(3, 'aa', 'fa@gmail.com', '$2y$10$.oU3XJDnVRTDbNLri2QDXu0pjzXHDwoQ5FnaRIK36C5hvsLcgbOpC'),
(4, 'sa', 'salsa@gmail.com', '$2y$10$RYQYPhbgi.cBhfBt6YS4Hue1NZjULxcXPrsQRh/Dev3gs2I1x.W1K'),
(5, 'ca', 'chasatq@gmail.com', '$2y$10$UIFshdeaEKrp1Twf1AWNgepoYEPRf26uPUmFCCmo3GKGyXFz7R6sy'),
(6, 'chasatq@gmail.com', 'chasatq@gmail.com', '$2y$10$zRIOUgoR14PnyvPdoOUp4egFS979rZ6AUZ1RO7aA6J8zlP.gihyWy'),
(7, 'g', 'tq@gmail.com', '$2y$10$J78JvIbs12JQie1PmXYMVOqBuADKh2AcMBo.CbVJMFDqZ5tVZNKii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
