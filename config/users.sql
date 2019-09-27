-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2019 at 12:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IrionPersisted`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_firstname` varchar(200) NOT NULL,
  `user_lastname` varchar(200) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_acctname` varchar(500) NOT NULL,
  `user_acctnum` varchar(100) NOT NULL,
  `user_bank` int(200) NOT NULL,
  `user_level` int(11) NOT NULL,
  `user_downline` int(11) NOT NULL,
  `user_acctstatus` varchar(100) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `registered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_firstname`, `user_lastname`, `user_password`, `user_email`, `user_phone`, `user_acctname`, `user_acctnum`, `user_bank`, `user_level`, `user_downline`, `user_acctstatus`, `verified`, `token`, `registered_date`) VALUES
(3, 'Danny', 'SDS', 'Phantom', '$2y$10$7D7CgJKCuWDyn/SVFDUpFeQ1slyh2LwtRoA40Kk5kw5.cWvMHKsNm', 'danny.thephantombandit@gmail.com', '08146233278', '', '', 0, 0, 0, '', 1, 'cafd9ece8140539dacd291ccee48a29cb06dd0020db7083aaa6e0a8390624d9c39570d08912bc77cbdd758c8414d26701142', '2019-09-26 22:43:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
