-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2026 at 11:52 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `usersurname` varchar(100) DEFAULT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'student',
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `usersurname`, `role`, `email`, `password`, `reg_date`) VALUES
(1, 'Celestino', 'Obama', 'admin', 'celeseltronco@hotmail.com', '$2y$10$TB5w0Q4XLhv9BGm6fNjaIOBTUOgEOme4hN.4l4mStMozygXHG0fay', '2026-01-14 03:36:58'),
(2, 'Student', 'Test', 'student', 'student@gmail.com', '$2y$10$b2X3Qj7qyvMyTDVBTZUUN.ni1D2vwnvMP8OWAiX.uahbrbAbG.PmS', '2026-01-16 13:26:29'),
(3, 'Student2', 'Test20', 'student', '', '$2y$10$RWYWMFUi.ZgeJ4pseqh.oOqkQDup.3U1GzCBJSyg5y4iYuBLirBdS', '2026-01-16 13:38:27');

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
