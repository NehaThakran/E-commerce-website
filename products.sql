-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 08:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionzilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ImgID` int(255) NOT NULL,
  `Iname` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ImgID`, `Iname`, `Image`, `price`) VALUES
(18, 'plain T-shirt', './images/product-8.jpg', 780.15),
(17, 'plain T-shirt', './images/product-7.jpg', 860.15),
(16, 'plain T-shirt', './images/product-6.jpg', 878.19),
(15, 'custom printed hoodie', './images/product-5.jpg', 2375.6),
(14, 'grey champion hoodie', './images/product-4.jpg', 3536.32),
(13, 'Invader Zip front hoodie', './images/product-3.jpg', 3526.49),
(12, 'bag', './images/product-2.jpg', 600),
(11, 'men clothes', './images/product-1.jpg', 299),
(10, 'women clothes', './images/hero-2.png', 820),
(9, 'women clothes', './images/hero-1.png', 750.5),
(8, 'women clothes', './images/cat3.jpg', 369),
(7, 'Women clothes', './images/cat2.jpg', 490),
(6, 'Men clothes', './images/cat1.jpg', 650),
(5, 'Makeup brush', './images/bu4.jpg', 199),
(4, 'Branded lotion', './images/bu3.jpg', 349),
(3, 'Top & Jacket', './images/bu2.jpg', 399),
(2, 'facial cream', './images/bu1.jpg', 499),
(1, 'banner', './images/banner.png', 790);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ImgID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ImgID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
