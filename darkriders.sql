-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3030
-- Generation Time: May 20, 2021 at 01:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darkriders`
--

-- --------------------------------------------------------

--
-- Table structure for table `pracs`
--

CREATE TABLE `pracs` (
  `sno` int(6) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pracs`
--

INSERT INTO `pracs` (`sno`, `name`) VALUES
(1, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, 'dummy@dummy.com', '1', '2021-05-20 12:50:14'),
(2, 'a@a.in', '$2y$10$e/JP5QAw0bp9eBkW6rF0iu/FUe/uRyj6F2CxV2jnQVSybLhuLr6oe', '2021-05-20 12:50:50'),
(3, 'alok@alok.in', '$2y$10$wv5sACH9yK3vVqS3W6qtkujJj43BUwS8lCTCTGi7R4uxy9RAamgXC', '2021-05-20 16:48:05'),
(4, 'z@x.c', '$2y$10$mNnq9eWijbH/8Gp/YvQdaO7Qx5hdRwdFMfvpsdbr6CmwA3A6P3S86', '2021-05-20 16:49:39'),
(5, 'c@d.e', '$2y$10$zKyCr6ApldMQiCvWuIu3c.JfW2.3DcH5NobV4d8Kz3aTeHdyu3f9C', '2021-05-20 16:50:35'),
(6, '', '$2y$10$LzkRw/m8jWz6u/KlTHuvwu6.fI.ILi8M8r3q9B8g0vHsIv6tJGshW', '2021-05-20 16:57:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pracs`
--
ALTER TABLE `pracs`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pracs`
--
ALTER TABLE `pracs`
  MODIFY `sno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
