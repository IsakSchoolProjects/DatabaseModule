-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2021 at 10:37 AM
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
  `price` int(11) NOT NULL COMMENT 'USD',
  `brand` varchar(64) NOT NULL,
  `model` varchar(64) NOT NULL,
  `model_year` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `car_type` varchar(64) NOT NULL,
  `color` varchar(32) NOT NULL,
  `seats` int(11) NOT NULL,
  `doors` int(11) NOT NULL,
  `cylinders` varchar(32) NOT NULL,
  `fuel` varchar(32) NOT NULL,
  `fuel_capacity` int(11) NOT NULL COMMENT 'litre',
  `top_speed` int(11) NOT NULL COMMENT 'kph',
  `acceleration` int(11) NOT NULL COMMENT '(0-100) in sec',
  `drive_type` varchar(32) NOT NULL,
  `gearbox` varchar(32) NOT NULL,
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

INSERT INTO `products` (`id`, `product_type`, `price`, `brand`, `model`, `model_year`, `hp`, `car_type`, `color`, `seats`, `doors`, `cylinders`, `fuel`, `fuel_capacity`, `top_speed`, `acceleration`, `drive_type`, `gearbox`, `tire_size`, `charging_time`, `distance`, `width`, `height`, `length`, `fuel_economy`) VALUES
(1, 'car', 85266, 'Volvo', 'XC90', 2019, 300, 'SUV', 'Ice White', 7, 4, '4', 'gasoline', 70, 230, 7, 'AWD', '8-speed Automatic', '235/55R19', NULL, '770', 2009, 1775, 4953, '0.91'),
(2, 'car', 69266, 'Volvo', 'XC60 Recharge', 2017, 350, 'SUV', 'Crystal White', 5, 4, '4', 'hybrid', 71, 230, 6, 'AWD', '8-speed Automatic', '235/45R19', '-', '770', 1999, 1659, 4689, '1'),
(3, 'car', 50911, 'Volvo', 'V90', 2019, 197, 'Combi', 'Onyx Black', 5, 4, '4', 'diesel', 60, 180, 9, 'AWD', '8-speed Automatic', '245/45R18', NULL, '1000', 1895, 1476, 4935, '0,6'),
(4, 'car', 33751, 'Volvo', 'XC40', 2017, 129, 'SUV', 'Thunder Grey', 5, 4, '3', 'gasoline', 54, 180, 11, 'FWD', '6-speed Manual', '235/60R17', NULL, '771', 1862, 1651, 4425, '0.7'),
(5, 'car', 43621, 'Volvo', 'V60', 2018, 163, 'Combi', 'Ice White', 5, 4, '4', 'gasoline', 60, 180, 9, 'FWD', '7-speed Automatic', '225/50r17', NULL, '968', 1849, 1427, 4760, '0.62'),
(6, 'car', 52566, 'Volvo', 'S90', 2019, 197, 'Sedan', 'Denim Blue', 5, 4, '4', 'gasoline', 60, 180, 8, 'FWD', '8-speed Automatic', '245/45R18', NULL, '882', 1895, 1443, 4963, '0,68'),
(7, 'car', 589900, 'Volvo', 'S60 Recharge', 2018, 455, 'Sedan', 'Pine Grey', 5, 4, '4', 'hybrid', 60, 180, 5, 'AWD', '8-speed Automatic', '235/40R19', NULL, 'el: 89km', 1961, 1430, 4760, 'blandad: 0.8 l/100km');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
