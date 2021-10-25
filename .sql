-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2021 at 02:11 PM
-- Server version: 10.4.21-MariaDB-cll-lve
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isak_module4`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_type` varchar(64) NOT NULL,
  `picture` varchar(64) NOT NULL,
  `price` int(11) NOT NULL COMMENT 'USD',
  `brand` varchar(64) NOT NULL,
  `model` varchar(64) NOT NULL,
  `model_year` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `car_type` varchar(64) NOT NULL,
  `color` varchar(32) NOT NULL,
  `cylinders` varchar(32) NOT NULL,
  `fuel` varchar(32) NOT NULL,
  `fuel_capacity` int(11) NOT NULL COMMENT 'litre',
  `top_speed` int(11) NOT NULL COMMENT 'kph',
  `acceleration` int(11) NOT NULL COMMENT '(0-100) in sec',
  `tire_size` varchar(32) NOT NULL,
  `charging_time` varchar(32) DEFAULT NULL,
  `distance` varchar(32) NOT NULL COMMENT 'km',
  `width` int(11) NOT NULL COMMENT 'mm',
  `height` int(11) NOT NULL COMMENT 'mm',
  `length` int(11) NOT NULL COMMENT 'mm',
  `fuel_economy` varchar(32) NOT NULL COMMENT 'l/kph'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type`, `picture`, `price`, `brand`, `model`, `model_year`, `hp`, `car_type`, `color`, `cylinders`, `fuel`, `fuel_capacity`, `top_speed`, `acceleration`, `tire_size`, `charging_time`, `distance`, `width`, `height`, `length`, `fuel_economy`) VALUES
(1, 'Volvo', 'S60', 0, '110', '', 0, 0, '', '', '', '', 0, 0, 0, '', NULL, '', 0, 0, 0, ''),
(2, 'Volvo', 'XC90', 0, '50', '', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0, ''),
(4, 'Volvo', 'V90', 0, '5', '', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0, ''),
(5, 'Volvo', 'XC70', 0, '60', '', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
