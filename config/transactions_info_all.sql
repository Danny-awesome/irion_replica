-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2019 at 11:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
-- Table structure for table `transactions_info_all`
--

CREATE TABLE `transactions_info_all` (
  `trans_id` int(11) NOT NULL,
  `user` varchar(500) NOT NULL,
  `trans_type` varchar(10) NOT NULL,
  `made_trans_with` varchar(500) NOT NULL,
  `trans_date` date NOT NULL DEFAULT current_timestamp(),
  `amount` double NOT NULL,
  `trans_confirmed` tinyint(4) NOT NULL,
  `trans_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions_info_all`
--

-- INSERT INTO `transactions_info_all` (`trans_id`, `user`, `trans_type`, `made_trans_with`, `trans_date`, `amount`, `trans_confirmed`, `trans_code`) VALUES
-- (1, 'Danny', 'debit', 'Person 1', '2019-10-10', 5000, 0, ''),
-- (2, 'Danny', 'debit', 'Person 2', '2019-10-10', 10000, 1, ''),
-- (3, 'Danny', 'debit', 'Person 3', '2019-10-11', 5000, 1, ''),
-- (4, 'Danny', 'debit', 'Person 4', '2019-10-12', 5000, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions_info_all`
--
ALTER TABLE `transactions_info_all`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions_info_all`
--
ALTER TABLE `transactions_info_all`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
