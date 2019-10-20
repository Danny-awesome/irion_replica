-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 03:56 PM
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
-- Table structure for table `irion_downlines`
--

CREATE TABLE `irion_downlines` (
  `downline_id` int(11) NOT NULL,
  `user` varchar(300) NOT NULL,
  `downline` varchar(300) NOT NULL,
  `added_date` date NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `irion_uplines`
--

CREATE TABLE `irion_uplines` (
  `upline_id` int(11) NOT NULL,
  `user` varchar(300) NOT NULL,
  `upline` varchar(300) NOT NULL,
  `added_date` date NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions_info_all`
--

CREATE TABLE `transactions_info_all` (
  `trans_id` int(11) NOT NULL,
  `user` varchar(500) NOT NULL,
  `trans_type` varchar(10) NOT NULL,
  `made_trans_with` varchar(500) NOT NULL,
  `trans_date` date NOT NULL,
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
  `user_bank` varchar(200) NOT NULL,
  `user_level` int(11) NOT NULL,
  `user_downline` int(11) NOT NULL,
  `user_acctstatus` varchar(100) NOT NULL DEFAULT 'not-active',
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `registered_date` date NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_firstname`, `user_lastname`, `user_password`, `user_email`, `user_phone`, `user_acctname`, `user_acctnum`, `user_bank`, `user_level`, `user_downline`, `user_acctstatus`, `verified`, `token`, `registered_date`) VALUES
(1, 'Danny', 'Awesome', 'Phantom', '$2y$10$SfntyhvNOk71S7PWRRkhL.z1BGwQtwMNT1.oWZkD0MmXYR.iJ9FcK', 'danny.thephantombandit@gmail.com', '08146233278', 'Daniel Forever', '2112701876', 'Polaris Bank Limited.', 0, 0, 'active', 1, 'c0c52a8cba75b8acd3a2f3aac1a36aa36a493e9fcdbf38ce97d61a904374b5c7560d4f54cd5e3d385dd91d88757a84cb1c52', '2019-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `irion_downlines`
--
ALTER TABLE `irion_downlines`
  ADD PRIMARY KEY (`downline_id`);

--
-- Indexes for table `irion_uplines`
--
ALTER TABLE `irion_uplines`
  ADD PRIMARY KEY (`upline_id`);

--
-- Indexes for table `transactions_info_all`
--
ALTER TABLE `transactions_info_all`
  ADD PRIMARY KEY (`trans_id`);

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
-- AUTO_INCREMENT for table `irion_uplines`
--
ALTER TABLE `irion_uplines`
  MODIFY `upline_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions_info_all`
--
ALTER TABLE `transactions_info_all`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
