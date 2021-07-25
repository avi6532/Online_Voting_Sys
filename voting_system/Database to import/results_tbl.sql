-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 07:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `results_tbl`
--

CREATE TABLE `results_tbl` (
  `id` int(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `candidates_name` varchar(100) NOT NULL,
  `elections_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results_tbl`
--

INSERT INTO `results_tbl` (`id`, `user_email`, `candidates_name`, `elections_name`) VALUES
(4, 'chaks@gmail.com', 'Party 1 ', 'election first june'),
(5, 'chaks@gmail.com', 'Party 3', 'Election Second July '),
(6, 'avi@gmail.com', 'Party 2', 'election first june'),
(7, 'avi@gmail.com', 'Party 3', 'Election mid Second July '),
(8, 'test1@gmail.com', 'Party 1 ', 'election first june'),
(9, 'test1@gmail.com', 'Party 1', 'Election mid Second July '),
(10, 'test2@gmail.com', 'Party 1 ', 'election first june'),
(11, 'test2@gmail.com', 'Party 3', 'Election mid Second July '),
(12, 'test3@gmail.com', 'Party 1 ', 'election first june'),
(13, 'test3@gmail.com', 'Party 3', 'Election mid Second July '),
(14, 'test4@gmail.com', 'Party 2', 'election first june'),
(15, 'test4@gmail.com', 'Party 4', 'Election mid Second July '),
(16, 'test5@gmail.com', 'Party 1 ', 'election first june'),
(17, 'test5@gmail.com', 'Party 2', 'Election mid Second July '),
(18, 'test6@gmail.com', 'Party 1 ', 'election first june'),
(19, 'test6@gmail.com', 'Party 3', 'Election mid Second July '),
(20, 'test7@gmail.com', 'Party 3', 'election first june'),
(21, 'test7@gmail.com', 'Party 3', 'Election mid Second July '),
(22, 'test8@gmail.com', 'Party 1 ', 'election first june'),
(23, 'test8@gmail.com', 'Party 3', 'Election mid Second July '),
(24, 'test9@gmail.com', 'Party 2', 'election first june'),
(25, 'test9@gmail.com', 'Party 2', 'Election mid Second July '),
(26, 'test10@gmail.com', 'Party 3', 'election first june'),
(27, 'test10@gmail.com', 'Party 1', 'Election mid Second July '),
(28, 'test11@gmail.com', 'Party 3', 'election first june'),
(29, 'test11@gmail.com', 'Party 4', 'Election mid Second July '),
(30, 'test12@gmail.com', 'Party 3', 'election first june'),
(31, 'test12@gmail.com', 'Party 2', 'Election mid Second July '),
(32, 'test13@gmail.com', 'Party 2', 'election first june'),
(33, 'test13@gmail.com', 'Party 1', 'Election mid Second July '),
(34, 'test14@gmail.com', 'Party 3', 'election first june'),
(35, 'test14@gmail.com', 'Party 1', 'Election mid Second July '),
(36, 'test15@gmail.com', 'Party 1 ', 'election first june'),
(37, 'test15@gmail.com', 'Party 4', 'Election mid Second July '),
(38, 'test16@gmail.com', 'Party 2', 'election first june'),
(39, 'test16@gmail.com', 'Party 3', 'Election mid Second July '),
(40, 'test17@gmail.com', 'Party 2', 'election first june'),
(41, 'test17@gmail.com', 'Party 2', 'Election mid Second July '),
(42, 'test18@gmail.com', 'Party 3', 'election first june'),
(43, 'test18@gmail.com', 'Party 1', 'Election mid Second July '),
(44, 'test19@gmail.com', 'Party 1 ', 'election first june'),
(45, 'test19@gmail.com', 'Party 3', 'Election mid Second July '),
(46, 'test20@gmail.com', 'Party 2', 'election first june'),
(47, 'test20@gmail.com', 'Party 4', 'Election mid Second July '),
(48, 'sandesh@gmail.com', 'Party 2', 'Election mid Second July '),
(49, 'sanjay@gmail.com', '', 'Election July');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results_tbl`
--
ALTER TABLE `results_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results_tbl`
--
ALTER TABLE `results_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
