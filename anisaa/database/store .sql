-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 04:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `price`) VALUES
(1, 'MILANO', 3600),
(2, 'PARIS', 3800),
(3, 'ROME', 5000),
(4, 'BERLIN', 4200),
(5, 'VIENA', 3000),
(6, 'STAMBOLL', 2900),
(7, 'MADRID', 2500),
(8, 'OSLO', 3200),
(9, 'AMSTERDAM', 2100),
(10, 'BARCELONA', 1900),
(11, 'BUDAPEST', 1700),
(12, 'LISBON', 2000),
(13, 'DUBLIN', 4500),
(14, 'MYNIH', 5800),
(15, 'ZYRIH', 5700),
(16, 'VENECIA', 4200),
(17, 'VERONA', 6000),
(18, 'NAPOLI', 5900),
(19, 'SIENA', 6500),
(20, 'VALENCIA', 6000),
(21, 'PALERMO', 6100),
(22, 'TIRANA', 6900),
(23, 'ZAGREB', 5700),
(24, 'BARI', 7000),
(25, 'TORINO', 5700),
(26, 'RABAT', 5400),
(27, 'MONTREAL', 5300),
(28, 'PORTO', 4700),
(29, 'MOSKE', 4800),
(30, 'IZMIR', 4700),
(31, 'KAUNAS', 8000),
(32, 'BUDVA', 5000),
(33, 'RIMINI', 5100),
(34, 'FRANKFURT', 4900),
(35, 'IBIZA', 5400),
(36, 'MONACO', 5500),
(37, 'KRISHTLINDJE', 4500),
(38, 'UEAN', 5800),
(39, 'NEW YORK', 9900),
(40, 'DIMER', 8200),
(41, 'ANISA', 8000),
(42, 'UENDI', 6900),
(43, 'FESTE', 6500),
(44, 'MODERN', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'admin', 'admin@admin.com', 'admin12345', '0698098765', 'TIRANE', 'RR.SUL BEGA'),
(9, 'shehu', 'shehu@anisa.com', '902638ab92c8f1b416539cb865f17a71', '0693456789', 'Tirane', 'Rr.Hoxha Tahsim'),
(10, 'admin', 'admin@yahoo.com', '5d80253b1cd5e5d4ca5ed539f4d72052', '0693456789', 'Tirane', 'Rr.Hoxha Tahsim'),
(11, 'elfrida', 'elfrida@yahoo.com', '40e116426c0038f43babcf99075f8673', '0693456789', 'Tirane', 'Rr.Hoxha Tahsim');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(55, 9, 5, ''),
(56, 9, 5, ''),
(78, 11, 15, ''),
(79, 11, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
