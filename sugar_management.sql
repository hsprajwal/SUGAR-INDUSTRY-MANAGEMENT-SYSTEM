-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 06:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sugar_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `selects` varchar(40) NOT NULL,
  `product` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `gst` varchar(10) NOT NULL,
  `total_price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `date`, `selects`, `product`, `quantity`, `amount`, `price`, `gst`, `total_price`) VALUES
(2, '2024-06-23', 'farmer', 'sugarcane', '10kg', '250', '123', '1123', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `id` int(1) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`id`, `fname`, `lname`, `email`, `phone`, `address`) VALUES
(1, 'Testing5', '123', 'test@gmail', '9989788670', 'Bangalore'),
(2, 'Prajwal', 'JS', 'parajwal@g', '9989788675', 'Bangalore'),
(3, 'test45', '23', 'test@gmail', '1233445683', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `fname`, `lname`, `email`, `phone`, `state`, `address`) VALUES
(1, 'test12', '123', 'test@gmail', '7383903039', 'karnataka', 'uduedueu');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `sugarcane` varchar(40) NOT NULL,
  `beet` varchar(10) NOT NULL,
  `corn` varchar(10) NOT NULL,
  `fructose_syrup` varchar(10) NOT NULL,
  `jaugary` varchar(10) NOT NULL,
  `sugar` varchar(10) NOT NULL,
  `molasses` varchar(10) NOT NULL,
  `bagasse` varchar(10) NOT NULL,
  `rock_sugar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date`, `sugarcane`, `beet`, `corn`, `fructose_syrup`, `jaugary`, `sugar`, `molasses`, `bagasse`, `rock_sugar`) VALUES
(1, '2024-06-23', '1', '1', '7', '9', '3', '3', '3', '3', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--1. SELECT b.id, b.date, b.selects, b.product, b.quantity, b.amount, b.price, b.gst, b.total_price, f.fname AS farmer_fname
-- FROM billing b
-- INNER JOIN farmer f ON b.selects = 'farmer';
--2. SELECT SUM(amount) AS total_amount, SUM(gst) AS total_gst
-- FROM billing
-- WHERE date = ' 2024-05-27';
-- 3.  SELECT SUM(amount) AS total_amount, SUM(gst) AS total_gst
--   FROM billing
--   WHERE date = ' 2024-05-27'
-- union (
--     SELECT SUM(amount) AS total_amount, SUM(gst) AS total_gst
--   FROM billing
--   WHERE date = '2024-06-23');


