-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2021 at 11:56 AM
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
  `cylinders` varchar(32) DEFAULT NULL,
  `fuel` varchar(32) NOT NULL,
  `fuel_capacity` int(11) NOT NULL COMMENT 'litre',
  `top_speed` int(11) NOT NULL COMMENT 'kph',
  `acceleration` varchar(11) NOT NULL COMMENT '(0-100) in sec',
  `drive_type` varchar(32) NOT NULL,
  `gearbox` varchar(32) NOT NULL,
  `tire_size` varchar(32) DEFAULT NULL,
  `charging_time` varchar(32) DEFAULT NULL,
  `distance` varchar(32) DEFAULT NULL COMMENT 'km',
  `electric_distance` varchar(32) DEFAULT NULL COMMENT 'km',
  `width` int(11) NOT NULL COMMENT 'mm',
  `height` int(11) NOT NULL COMMENT 'mm',
  `length` int(11) NOT NULL COMMENT 'mm',
  `fuel_economy` varchar(64) DEFAULT NULL COMMENT 'l/10km'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type`, `price`, `brand`, `model`, `model_year`, `hp`, `car_type`, `color`, `seats`, `doors`, `cylinders`, `fuel`, `fuel_capacity`, `top_speed`, `acceleration`, `drive_type`, `gearbox`, `tire_size`, `charging_time`, `distance`, `electric_distance`, `width`, `height`, `length`, `fuel_economy`) VALUES
(1, 'car', 85266, 'Volvo', 'XC90', 2019, 300, 'SUV', 'Ice White', 7, 4, '4', 'gasoline', 70, 230, '6.7', 'AWD', '8-speed Automatic', '235/55R19', NULL, '770', NULL, 2009, 1775, 4953, '0.91'),
(2, 'car', 69266, 'Volvo', 'XC60 Recharge', 2017, 350, 'SUV', 'Crystal White', 5, 4, '4', 'hybrid', 71, 230, '5.7', 'AWD', '8-speed Automatic', '235/45R19', 'AC Wallbox: 3-4 h', '', '77', 1999, 1659, 4689, 'blandad: 1l/100km el: 19.3kWh/100km'),
(3, 'car', 50911, 'Volvo', 'V90', 2019, 197, 'Wagon', 'Onyx Black', 5, 4, '4', 'diesel', 60, 180, '8.7', 'AWD', '8-speed Automatic', '245/45R18', NULL, '1000', NULL, 1895, 1476, 4935, '0,6'),
(4, 'car', 33751, 'Volvo', 'XC40', 2017, 129, 'SUV', 'Thunder Grey', 5, 4, '3', 'gasoline', 54, 180, '10.9', 'FWD', '6-speed Manual', '235/60R17', NULL, '771', NULL, 1862, 1651, 4425, '0.7'),
(5, 'car', 43621, 'Volvo', 'V60', 2018, 163, 'Wagon', 'Ice White', 5, 4, '4', 'gasoline', 60, 180, '8.6', 'FWD', '7-speed Automatic', '225/50r17', NULL, '968', NULL, 1849, 1427, 4760, '0.62'),
(6, 'car', 52566, 'Volvo', 'S90', 2019, 197, 'Sedan', 'Denim Blue', 5, 4, '4', 'gasoline', 60, 180, '7.9', 'FWD', '8-speed Automatic', '245/45R18', NULL, '882', NULL, 1895, 1443, 4963, '0.68'),
(7, 'car', 68431, 'Volvo', 'S60 Recharge', 2018, 455, 'Sedan', 'Pine Grey', 5, 4, '4', 'hybrid', 60, 180, '5', 'AWD', '8-speed Automatic', '235/40R19', 'AC Wallbox: 3-4 h', '', '89', 1961, 1430, 4760, 'blandad: 0.8 l/100km el: 17.2kWh/100km'),
(8, 'car', 81184, 'Volvo', 'C40 Recharge', 2021, 408, 'Crossover', 'Fjord Blue', 5, 4, NULL, 'electric', 0, 160, '5', 'AWD', '8-speed Automatic', '235/50R19', 'AC Wallbox: 8-10 h', '', '441', 2035, 1582, 4430, '20.8kWh/100km'),
(9, 'car', 62332, 'Volvo', 'XC40 Recharge', 2021, 231, 'SUV', 'Glacier Silver', 5, 4, NULL, 'electric', 0, 160, '7', 'FWD', '8-speed Automatic', '235/55R18', 'AC Wallbox: 8-10 h', '', '421', 2035, 1651, 4425, '18.7kWh/100km'),
(10, 'car', 51544, 'Volvo', 'XC60', 2017, 197, 'SUV', 'Platinum Grey', 5, 4, '4', 'diesel', 71, 180, '8', 'FWD', '8-speed Automatic', '235/60R18', NULL, '1163', NULL, 1999, 1659, 4689, '0.61'),
(11, 'car', 79761, 'Volvo', 'S90 Recharge', 2019, 455, 'Sedan', 'Black Stone', 5, 4, '4', 'hybrid', 60, 180, '5', 'AWD', '8-speed Automatic', '255/40R19', 'AC Wallbox: 3-4 h', '', '88', 1895, 1443, 4963, 'blandad:0.8/100km el: 17.4kWh/100km'),
(12, 'car', 58902, 'Volvo', 'V60 Recharge', 2018, 350, 'Wagon', 'Pebble Grey', 5, 4, '4', 'hybrid', 60, 180, '5', 'AWD', '8-speed Automatic', '235/45R18', 'AC Wallbox: 3-4 h', '', '88', 1849, 1427, 4760, 'blandad: 0.8l/100km el: 17.6 kWh/100km');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
