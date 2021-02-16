-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 04:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Dining table Modern', 'dine1', 'product-images/dine11.jpg', 6000.00),
(2, 'Dining table wooden', 'dine2', 'product-images/dine22.jpg', 5500.00),
(3, 'kitchen wardrobe plus size', 'dine3', 'product-images/dine33.jpg', 9000.00),
(4, 'Kitchen Wardrobe', 'dine4', 'product-images/dine4.jpg\r\n', 7500.00),
(5, 'Premium Dine', 'dine5', 'product-images/dine5.jpg', 9500.00),
(6, 'Crockery storage wardrobe', 'dine6', 'product-images/dine6.jpg', 6000.00),
(7, 'Mini Crockery storage', 'dine7', 'product-images/dine7.jpg', 5500.00),
(8, 'Stove with Storage', 'dine8', 'product-images/dine8.jpg', 7000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct2`
--

CREATE TABLE `tblproduct2` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct2`
--

INSERT INTO `tblproduct2` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Sofa set for 2 (Blue)', 'sofa1', 'product-images/sofa1.jpg', 6000.00),
(2, 'Premium leather Sofa-set (Brown)', 'sofa2', 'product-images/sofa2.jpg', 12000.00),
(3, 'Premium Sofa-set king size ', 'sofa3', 'product-images/sofa3.jpg', 17000.00),
(4, 'Modern Sofa-set (Silver)', 'sofa4', 'product-images/sofa4.jpg', 10000.00),
(5, 'Wooden Show-piece set (Medium size)', 'sofa5', 'product-images/sofa5.jpg', 5000.00),
(6, 'Show-piece set (Small size)', 'sofa6', 'product-images/sofa6.jpg', 4000.00),
(7, 'Wooden Shoe rack (Medium)', 'sofa7', 'product-images/sofa7.jpg', 5000.00),
(8, 'Modern Shoe rack ', 'sofa8', 'product-images/sofa8.jpg', 6000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct3`
--

CREATE TABLE `tblproduct3` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct3`
--

INSERT INTO `tblproduct3` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Modern bed (blackwood)', 'bed1', 'product-images/bed1.jpg', 14500.00),
(2, 'Bed with storage', 'bed2', 'product-images/bed2.jpg', 15000.00),
(3, 'Bed king size', 'bed3', 'product-images/bed3.jpg', 23000.00),
(4, 'Vintage style bed', 'bed4', 'product-images/bed4.jpg', 19250.00),
(5, 'Wardrobe medium sized', 'war1', 'product-images/war1.jpg', 17000.00),
(6, 'Polished wood wardrobe', 'war2', 'product-images/war2.jpg', 19000.00),
(7, 'Premium wardrobe in Black', 'war3', 'product-images/war3.jpg', 25000.00),
(8, 'Wardrobe (medium size) ', 'war4', 'product-images/war4.jpg', 16000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct4`
--

CREATE TABLE `tblproduct4` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct4`
--

INSERT INTO `tblproduct4` (`id`, `name`, `code`, `image`, `price`) VALUES
(3, 'Computer table', 'office1', 'product-images/office1.jpg', 5000.00),
(4, 'Boss office table', 'office2', 'product-images/office2.jpg', 9000.00),
(5, 'Reception table', 'office3', 'product-images/office3.jpg', 7000.00),
(6, 'Office table with chair', 'office4', 'product-images/office4.jpg', 9900.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `uidusers` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `addr` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `pwd` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `uidusers`, `email`, `addr`, `pwd`) VALUES
(1, 'nelkin01', 'nelkineldho01@student.sfit.ac.in', '', '8046f82d3755e422ae19b026791a5e72'),
(2, 'nelkin02', 'nelkineldho01@student.sfit.ac.in', '', '164ab8b904e6efb361c8b652518838b6'),
(4, 'nelkin99', 'abcd@gmail.com', 'a/301, lake view, gg road, Mumbai-400013', '4e808c52e7ca70ec522310d4ce09685a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `tblproduct2`
--
ALTER TABLE `tblproduct2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `tblproduct3`
--
ALTER TABLE `tblproduct3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `tblproduct4`
--
ALTER TABLE `tblproduct4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblproduct2`
--
ALTER TABLE `tblproduct2`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblproduct3`
--
ALTER TABLE `tblproduct3`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblproduct4`
--
ALTER TABLE `tblproduct4`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
