-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2019 at 06:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `navdeep`
--

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `id` int(11) NOT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Item` varchar(40) DEFAULT NULL,
  `Brand` varchar(40) DEFAULT NULL,
  `Ounces` decimal(10,1) DEFAULT NULL,
  `Cost` decimal(10,2) DEFAULT NULL,
  `CostperOunce` decimal(10,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`id`, `Category`, `Item`, `Brand`, `Ounces`, `Cost`, `CostperOunce`) VALUES
(1, 'Oils', 'Olive Oil Pomace', 'Restaurant Depot', '121.6', '10.10', '0.0831'),
(3, 'Lye', 'Sodium Hydroxide', 'Essential Depot', '512.0', '61.42', '0.1200'),
(4, 'Additives', 'Colloidal Oatmeal', 'Brambleberry', '16.0', '9.60', '0.6000'),
(5, 'Essential Oils', 'Lavender 40/42', 'Mad Oils', '1.9', '14.56', '7.6632'),
(6, 'Coloring', 'Paprika Powder', 'SoapGoods', '0.5', '1.94', '3.8800'),
(7, 'Brew', 'Double Milk Stout Nitro', 'Left Hand Brewing', '10.0', '2.50', '0.2500'),
(8, 'Packaging', 'Wax Paper', 'Reynolds', '75.0', '1.48', '0.0197'),
(9, 'Oils', 'Coconut Oil', 'Essential Depot', '16.0', '43.00', '2.6875');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441'),
(2, 'nav', 'nav'),
(3, 'navdeep', '*A08765D246EFC627DB7C3C912DF9099E92E58A6A'),
(4, 'navii', 'navii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
