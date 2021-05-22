-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3030
-- Generation Time: May 22, 2021 at 02:26 PM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sno` int(11) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_address` text NOT NULL,
  `user_phone` int(50) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `date_of_purchase` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sno`, `user_email`, `user_name`, `user_address`, `user_phone`, `card_number`, `product_name`, `product_id`, `date_of_purchase`) VALUES
(1, '', 'Anurag', '', 0, '1111aaaa', 'Galaxy S10', 'electronics_id1', '2021-05-22 11:43:16'),
(2, '', 'ace', '', 0, 'a', 'a', 'null', '2021-05-22 12:29:48'),
(3, '', 'raghav', 'house num 1', 123, '321', 'asd', 'electronics_id2', '2021-05-22 13:58:37'),
(4, '', 'anu', 'House No. 155/2, Air Force Station Sarsawa , Saharanpur ,U.P.', 8474, 'asd', 'assd', '', '2021-05-22 14:06:06'),
(5, '', 'Anurag Sharma', 'House No. 155/2, Air Force Station Sarsawa , Saharanpur ,U.P.', 2147483647, 'aaa', 'aaas', '', '2021-05-22 14:13:26'),
(6, 'alok@gmail.com', 'alok', 'House No. 155/2, Air Force Station Sarsawa , Saharanpur ,U.P.', 2147483647, 'aa', 'pant', '', '2021-05-22 15:24:03'),
(7, 'alok@gmail.com', 'Anurag Sharma', 'House No. 155/2, Air Force Station Sarsawa , Saharanpur ,U.P.', 2147483647, 'asncci', 'aaas', '', '2021-05-22 16:13:40');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_sno` int(8) NOT NULL,
  `product_id` varchar(40) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_sno`, `product_id`, `product_name`, `product_price`) VALUES
(1, 'electronics_id1', 'Galaxy S10', 31990),
(2, 'electronics_id2', 'Sony 4K HDR', 52999),
(3, 'electronics_id3', 'Havells Stealth Air', 4851),
(4, 'electronics_id4', 'Lloyd\'s Wfi Control AC', 37990),
(5, 'electronics_id5', 'Samsung Washing Machine', 14090);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_name`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, '', 'dummy@dummy.com', '1', '2021-05-20 12:50:14'),
(2, '', 'a@a.in', '$2y$10$e/JP5QAw0bp9eBkW6rF0iu/FUe/uRyj6F2CxV2jnQVSybLhuLr6oe', '2021-05-20 12:50:50'),
(3, '', 'alok@alok.in', '$2y$10$wv5sACH9yK3vVqS3W6qtkujJj43BUwS8lCTCTGi7R4uxy9RAamgXC', '2021-05-20 16:48:05'),
(4, '', 'z@x.c', '$2y$10$mNnq9eWijbH/8Gp/YvQdaO7Qx5hdRwdFMfvpsdbr6CmwA3A6P3S86', '2021-05-20 16:49:39'),
(5, '', 'c@d.e', '$2y$10$zKyCr6ApldMQiCvWuIu3c.JfW2.3DcH5NobV4d8Kz3aTeHdyu3f9C', '2021-05-20 16:50:35'),
(6, '', '', '$2y$10$LzkRw/m8jWz6u/KlTHuvwu6.fI.ILi8M8r3q9B8g0vHsIv6tJGshW', '2021-05-20 16:57:52'),
(7, '', 'm@m.m', '$2y$10$zOzM4/XEIDtnom9.BQaRd.5zoGYvBUAQMsO7lIV2wPKoOoZ.HZW2i', '2021-05-20 18:57:22'),
(8, '', 'z@z.z', '$2y$10$HMRL.sV5D6f01B9a0.7pAONdwkFJwNwkCUyYlQgsFLDYQrm6e1Thu', '2021-05-20 19:15:31'),
(9, '', '123@123.123', '$2y$10$Nl5LB97nwWqTCrSo3FGR0uk2BT.2wMwsnsuRUKZ3mST.uB9JNL1HK', '2021-05-21 16:14:06'),
(11, 'logic', 'lol@gmail.com', '$2y$10$ophqt9NQfiN5e52MRsujC.N4QCrPwgP9n7Qh.i5IQX21Anbza9zuu', '2021-05-21 19:20:16'),
(12, 'Anurag Sharma', 'anuragitme@gmail.com', '$2y$10$/zW8sfnuwVZRoFUjRQ05puEibgDFLAkS1djMRMIsRcKUSC1gD9Leu', '2021-05-21 19:43:19'),
(13, 'acedeals', 'acedeals@gmail.com', '$2y$10$7.nS1IAje56zuJJCqaoYb.1L0osdqm1YtceQUyv/Ydbk0qe6pkL9e', '2021-05-22 12:27:48'),
(14, 'rahu', 'raju@gamil.com', '$2y$10$6zZM867DDmTyW978PFAGmeMlKc/TF3lLLRba6l0NGzWWNK6DOOhx2', '2021-05-22 14:15:52'),
(16, 'alok', 'alok@gmail.com', '$2y$10$/wN92A89e6e8oh2Ye2VbkuxY8XogvuCOnC2rpgvAMyP3vsCz1lQLa', '2021-05-22 15:23:16'),
(20, 'ano', 'ano@gmail.com', '$2y$10$4tZszvD2NoweIDK7l8wM/.7koLpgCc8GLt/jG3YZ7g5VfQmjc7QNS', '2021-05-22 17:11:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `pracs`
--
ALTER TABLE `pracs`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pracs`
--
ALTER TABLE `pracs`
  MODIFY `sno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
