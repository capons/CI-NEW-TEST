-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2016 at 02:00 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-new-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorization`
--

CREATE TABLE `authorization` (
  `id` int(11) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorization`
--

INSERT INTO `authorization` (`id`, `pass`, `email`) VALUES
(215, 'b0baee9d279d34fa1dfd71aadb908c3f', 'bog@ram.ru'),
(216, 'b0baee9d279d34fa1dfd71aadb908c3f', 'bogbog@rara.ru'),
(217, 'b0baee9d279d34fa1dfd71aadb908c3f', 'igarek@ram.ru');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `id_stock_product` int(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `id_stock_product`, `image_name`) VALUES
(138, 131, '69cdb891d9b2a1842108766fc12f63a8.jpg'),
(139, 132, 'cb85fd0c508b75a7d6a9adfe1b838688.jpg'),
(140, 133, '15c403a39cb14a12bb28223464ec5787.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(255) NOT NULL,
  `city` text NOT NULL,
  `region` text,
  `car_brand` text NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `engine_capacity` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `owners` varchar(255) NOT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `city`, `region`, `car_brand`, `car_model`, `engine_capacity`, `mileage`, `owners`, `user_id`) VALUES
(131, 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 217),
(132, 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 217),
(133, 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 'sdfdsfsdf', 217);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorization`
--
ALTER TABLE `authorization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_stock_product` (`id_stock_product`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorization`
--
ALTER TABLE `authorization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
